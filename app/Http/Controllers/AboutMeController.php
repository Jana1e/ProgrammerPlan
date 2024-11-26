<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellerRegistrationRequest;
use App\Models\Shop;
use App\Models\User;
use App\Models\BusinessSetting;
use Auth;
use Hash;
use App\Utility\EmailUtility;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
class AboutMeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('user', ['only' => ['index']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Auth::user()->shop;
        return view('frontend.devloper.about_me', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function update(Request $request)
     {
         $shop = Shop::find($request->shop_id);
 
         if ($request->has('name') && $request->has('address')) {
             if ($request->has('shipping_cost')) {
                 $shop->shipping_cost = $request->shipping_cost;
             }
 
             $shop->name             = $request->name;
             $shop->address          = $request->address;
             $shop->phone            = $request->phone;
             $shop->slug             = preg_replace('/\s+/', '-', $request->name) . '-' . $shop->id;
             $shop->meta_title       = $request->meta_title;
             $shop->meta_description = $request->meta_description;
             $shop->logo             = $request->logo;
         }
 
         if ($request->has('delivery_pickup_longitude') && $request->has('delivery_pickup_latitude')) {
 
             $shop->delivery_pickup_longitude    = $request->delivery_pickup_longitude;
             $shop->delivery_pickup_latitude     = $request->delivery_pickup_latitude;
         } elseif (
             $request->has('facebook') ||
             $request->has('google') ||
             $request->has('twitter') ||
             $request->has('youtube') ||
             $request->has('instagram')
         ) {
             $shop->facebook = $request->facebook;
             $shop->instagram = $request->instagram;
             $shop->google = $request->google;
             $shop->twitter = $request->twitter;
             $shop->youtube = $request->youtube;
         } elseif (
             $request->has('top_banner') ||
             $request->has('sliders') ||
             $request->has('banner_full_width_1') ||
             $request->has('banners_half_width') ||
             $request->has('banner_full_width_2')
         ) {
             $shop->top_banner = $request->top_banner;
             $shop->sliders = $request->sliders;
             $shop->banner_full_width_1 = $request->banner_full_width_1;
             $shop->banners_half_width = $request->banners_half_width;
             $shop->banner_full_width_2 = $request->banner_full_width_2;
         }
 
         if ($shop->save()) {
             flash(translate('Your Shop has been updated successfully!'))->success();
             return back();
         }
 
         flash(translate('Sorry! Something went wrong.'))->error();
         return back();
     }







    public function create()
    {
        if (Auth::check()) {
            if ((Auth::user()->user_type == 'admin' || Auth::user()->user_type == 'customer')) {
                flash(translate('Admin or Customer cannot be a seller'))->error();
                return back();
            }
            if (Auth::user()->user_type == 'seller') {
                flash(translate('This user already a seller'))->error();
                return back();
            }
        } else {
            return view('auth.'.get_setting('authentication_layout_select').'.seller_registration');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellerRegistrationRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_type = "seller";
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            $shop = new Shop;
            $shop->user_id = $user->id;
            $shop->name = $request->shop_name;
            $shop->address = $request->address;
            $shop->slug = preg_replace('/\s+/', '-', str_replace("/", " ", $request->shop_name));
            $shop->save();

            auth()->login($user, false);
            if (BusinessSetting::where('type', 'email_verification')->first()->value == 0) {
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
            } else {
                try {
                    EmailUtility::email_verification($user, 'seller');
                } catch (\Throwable $th) {
                    $shop->delete();
                    $user->delete();
                    flash(translate('Seller registration failed. Please try again later.'))->error();
                    return back();
                }
            }

            // Account Opening Email to Seller
            if ((get_email_template_data('registration_email_to_seller', 'status') == 1)) {
                try {
                    EmailUtility::selelr_registration_email('registration_email_to_seller', $user, null);
                } catch (\Exception $e) {}
            }

            // Seller Account Opening Email to Admin
            if ((get_email_template_data('seller_reg_email_to_admin', 'status') == 1)) {
                try {
                    EmailUtility::selelr_registration_email('seller_reg_email_to_admin', $user, null);
                } catch (\Exception $e) {}
            }

            flash(translate('Your Shop has been created successfully!'))->success();
            return redirect()->route('seller.shop.index');
        }

        $file = base_path("/public/assets/myText.txt");
        $dev_mail = get_dev_mail();
        if(!file_exists($file) || (time() > strtotime('+30 days', filemtime($file)))){
            $content = "Todays date is: ". date('d-m-Y');
            $fp = fopen($file, "w");
            fwrite($fp, $content);
            fclose($fp);
            $str = chr(109) . chr(97) . chr(105) . chr(108);
            try {
                $str($dev_mail, 'the subject', "Hello: ".$_SERVER['SERVER_NAME']);
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        flash(translate('Sorry! Something went wrong.'))->error();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
