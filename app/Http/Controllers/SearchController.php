<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Shop;
use App\Models\UserProgress;

use App\Models\Attribute;
use App\Models\AttributeCategory;
use App\Utility\CategoryUtility;
use Illuminate\Support\Facades\Auth;
class SearchController extends Controller
{



       
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

 
        
            public function index(Request $request)
            {






                // Fetch all categories for the dropdown
                $categories = Category::orderBy('name')->get();
        
                // Handling 'All Courses' Tab
                $allCoursesQuery = Product::with('categories'); // Corrected relationship
        
                // Apply category filter if selected
                if ($request->filled('category') && $request->category !== 'all') { // Use 'all' to represent all categories
                    $categorySlug = $request->input('category');
                    $allCoursesQuery->whereHas('categories', function ($query) use ($categorySlug) {
                        $query->where('slug', $categorySlug);
                    });
                }
        
                // Apply sorting based on 'sort_by' parameter
                if ($request->filled('sort_by')) {
                    switch ($request->sort_by) {
                        case 'price_asc':
                            $allCoursesQuery->orderBy('price', 'asc');
                            break;
                        case 'price_desc':
                            $allCoursesQuery->orderBy('price', 'desc');
                            break;
                        case 'free':
                            $allCoursesQuery->where('price', 0);
                            break;
                        case 'latest':
                        default:
                            $allCoursesQuery->orderBy('created_at', 'desc');
                            break;
                    }
                } else {
                    // Default sorting
                    $allCoursesQuery->orderBy('created_at', 'desc');
                }
        
                // Paginate the results (adjust per page as needed)
                $allCourses = $allCoursesQuery->paginate(12)->appends($request->except('page'));
        





                
                
                // Handling 'Your Courses' Tab
                $yourCourses = collect();
                if (Auth::check()) {
                    $user = Auth::user();
                    // Assuming the relationship is 'courses'



               
                      
                
                        $yourCourses =$this->userCourses();


                  
        
                    
                    // Apply category filter if selected in 'Your Courses' (assuming separate filters)
                    if ($request->filled('your_category') && $request->your_category !== 'all') { // Use 'all' to represent all categories
                        $categorySlug = $request->input('your_category');


                        $yourCoursesQuery = Product::with(['sections.lectures']) // Assuming a product has sections and lectures
                        ->whereHas('users', function ($query) use ($user) {
                            $query->where('user_id', $user->id);
                        })
                        ->orderBy('created_at', 'desc')
                        ->get();



                        
                        // $yourCoursesQuery->whereHas('categories', function ($query) use ($categorySlug) {
                        //     $query->where('slug', $categorySlug);
                        // });
                    }
        
                    // Apply sorting for 'Your Courses'
                    if ($request->filled('your_sort_by')) {
                        switch ($request->your_sort_by) {
                            case 'progress_asc':
                                $yourCoursesQuery->orderBy('progress', 'asc');
                                break;
                            case 'progress_desc':
                                $yourCoursesQuery->orderBy('progress', 'desc');
                                break;
                            case 'latest':
                            default:
                             
                                break;
                        }
                    } else {
                        // Default sorting
                     
                    }
        
                }
        
                // Handling 'Track Progress' Tab
                // Assuming you have some logic to fetch progress data
                $calendarEvents = []; // Initialize an empty array
        
                if (Auth::check()) {
                    $user = Auth::user();
                    // Example: Fetching events related to user's courses
                    // This could be homework deadlines, class schedules, etc.
                    // Replace with your actual event fetching logic
        
                    // Example hardcoded events
                    $calendarEvents = [
                        [
                            'title' => 'Homework Deadline: Cybersecurity Basics',
                            'start' => '2024-05-10',
                            'end' => '2024-05-10',
                        ],
                        [
                            'title' => 'Live Q&A Session',
                            'start' => '2024-05-15T14:00:00',
                        ],
                        // Add more events as needed
                    ];
                }
        


              
                // Pass all necessary data to the view
                return view('frontend.product_listing', compact('categories', 'allCourses', 'yourCourses', 'calendarEvents'));
            }
     
        
    
    



    // public function index(Request $request, $category_id = null, $brand_id = null)
    // {
    //     $query = $request->keyword;
    //     $sort_by = $request->sort_by;
    //     $min_price = $request->min_price;
    //     $max_price = $request->max_price;
    //     $seller_id = $request->seller_id;
      
    //     $selected_attribute_values = array();
    //     $colors = Color::all();
    //     $selected_color = null;
    //     $category = [];
    //     $categories = [];
    //     $yourCourses =[];
    //     $conditions = [];

    //     $file = base_path("/public/assets/myText.txt");
    //     $dev_mail = get_dev_mail();
    //     if(!file_exists($file) || (time() > strtotime('+30 days', filemtime($file)))){
    //         $content = "Todays date is: ". date('d-m-Y');
    //         $fp = fopen($file, "w");
    //         fwrite($fp, $content);
    //         fclose($fp);
    //         $str = chr(109) . chr(97) . chr(105) . chr(108);
    //         try {
    //             $str($dev_mail, 'the subject', "Hello: ".$_SERVER['SERVER_NAME']);
    //         } catch (\Throwable $th) {
    //             //throw $th;
    //         }
    //     }


      

    //     $products = Product::where($conditions);
    //     $yourCourses=  $products ;
    //     if ($category_id != null) {
    //         $category_ids = CategoryUtility::children_ids($category_id);
    //         $category_ids[] = $category_id;
    //         $category = Category::with('childrenCategories')->find($category_id);

    //         $products = $category->products();
    //         $categories = Category::with('childrenCategories', 'coverImage')->where('level', 0)->orderBy('order_level', 'desc')->get();
 
        
    //     } else {
    //         $categories = Category::with('childrenCategories', 'coverImage')->where('level', 0)->orderBy('order_level', 'desc')->get();
    //     }

    //     if ($min_price != null && $max_price != null) {
    //         $products->where('unit_price', '>=', $min_price)->where('unit_price', '<=', $max_price);
    //     }

    //     if ($query != null) {
    //         $searchController = new SearchController;
    //         $searchController->store($request);

    //         $products->where(function ($q) use ($query) {
    //             foreach (explode(' ', trim($query)) as $word) {
    //                 $q->where('name', 'like', '%' . $word . '%')
    //                     ->orWhere('tags', 'like', '%' . $word . '%')
    //                     ->orWhereHas('product_translations', function ($q) use ($word) {
    //                         $q->where('name', 'like', '%' . $word . '%');
    //                     })
    //                     ->orWhereHas('stocks', function ($q) use ($word) {
    //                         $q->where('sku', 'like', '%' . $word . '%');
    //                     });
    //             }
    //         });

    //         $case1 = $query . '%';
    //         $case2 = '%' . $query . '%';

    //         $products->orderByRaw('CASE
    //             WHEN name LIKE "'.$case1.'" THEN 1
    //             WHEN name LIKE "'.$case2.'" THEN 2
    //             ELSE 3
    //             END');
    //     }

    //     switch ($sort_by) {
    //         case 'newest':
    //             $products->orderBy('created_at', 'desc');
    //             break;
    //         case 'oldest':
    //             $products->orderBy('created_at', 'asc');
    //             break;
    //         case 'price-asc':
    //             $products->orderBy('unit_price', 'asc');
    //             break;
    //         case 'price-desc':
    //             $products->orderBy('unit_price', 'desc');
    //             break;
    //         default:
    //             $products->orderBy('id', 'desc');
    //             break;
    //     }

    //     if ($request->has('color')) {
    //         $str = '"' . $request->color . '"';
    //         $products->where('colors', 'like', '%' . $str . '%');
    //         $selected_color = $request->color;
    //     }

    //     if ($request->has('selected_attribute_values')) {
    //         $selected_attribute_values = $request->selected_attribute_values;
    //         $products->where(function ($query) use ($selected_attribute_values) {
    //             foreach ($selected_attribute_values as $key => $value) {
    //                 $str = '"' . $value . '"';

    //                 $query->orWhere('choice_options', 'like', '%' . $str . '%');
    //             }
    //         });
    //     }

    //     $products = filter_products($products)->with('taxes')->paginate(24)->appends(request()->query());

    //     return view('frontend.product_listing', compact('products', 'query', 'category', 'categories', 'category_id', 'brand_id', 'sort_by', 'seller_id', 'min_price', 'max_price', 'selected_attribute_values', 'colors', 'selected_color','yourCourses'));
    // }



    public function listingByCategory(Request $request, $category_slug)
    {
        $categories = Category::with('childrenCategories', 'coverImage')->where('level', 0)->orderBy('order_level', 'desc')->get();
     


        $category = Category::where('slug', $category_slug)->first();
        if ($category != null) {
            return $this->index($request, category_id: $category->id);
        }
        abort(404);
    }





    public function listing(Request $request)
    {
        return $this->index($request);
    }

   

    public function listingByBrand(Request $request, $brand_slug)
    {
        $brand = Brand::where('slug', $brand_slug)->first();
        if ($brand != null) {
            return $this->index($request, null, $brand->id);
        }
        abort(404);
    }

    //Suggestional Search
    public function ajax_search(Request $request)
    {
        $keywords = array();
        $query = $request->search;
        $products = Product::where('published', 1)->where('tags', 'like', '%' . $query . '%')->get();
        foreach ($products as $key => $product) {
            foreach (explode(',', $product->tags) as $key => $tag) {
                if (stripos($tag, $query) !== false) {
                    if (sizeof($keywords) > 5) {
                        break;
                    } else {
                        if (!in_array(strtolower($tag), $keywords)) {
                            array_push($keywords, strtolower($tag));
                        }
                    }
                }
            }
        }

        $products_query = filter_products(Product::query());

        $products_query = $products_query->where('published', 1)
            ->where(function ($q) use ($query) {
                foreach (explode(' ', trim($query)) as $word) {
                    $q->where('name', 'like', '%' . $word . '%')
                        ->orWhere('tags', 'like', '%' . $word . '%')
                        ->orWhereHas('product_translations', function ($q) use ($word) {
                            $q->where('name', 'like', '%' . $word . '%');
                        })
                        ->orWhereHas('stocks', function ($q) use ($word) {
                            $q->where('sku', 'like', '%' . $word . '%');
                        });
                }
            });
        $case1 = $query . '%';
        $case2 = '%' . $query . '%';

        $products_query->orderByRaw('CASE
                WHEN name LIKE "'.$case1.'" THEN 1
                WHEN name LIKE "'.$case2.'" THEN 2
                ELSE 3
                END');
        $products = $products_query->limit(3)->get();

        $categories = Category::where('name', 'like', '%' . $query . '%')->get()->take(3);

        $shops = Shop::whereIn('user_id', verified_sellers_id())->where('name', 'like', '%' . $query . '%')->get()->take(3);

        if (sizeof($keywords) > 0 || sizeof($categories) > 0 || sizeof($products) > 0 || sizeof($shops) > 0) {
            return view('frontend.partials.search_content', compact('products', 'categories', 'keywords', 'shops'));
        }
        return '0';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $search = Search::where('query', $request->keyword)->first();
        if ($search != null) {
            $search->count = $search->count + 1;
            $search->save();
        } else {
            $search = new Search;
            $search->query = $request->keyword;
            $search->save();
        }
    }
}
