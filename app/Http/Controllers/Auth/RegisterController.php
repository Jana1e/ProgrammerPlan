<?php

namespace App\Http\Controllers\Auth;

use Cookie;
use Session;
use App\Models\Cart;
use App\Models\User;
use App\Rules\Recaptcha;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\BusinessSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\OTPVerificationController;
use App\Utility\EmailUtility;
use App\Models\Shop;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'nullable|string|unique:users,phone',
            'password' => 'required|string|min:6|confirmed',
            'user_type' => [
                'required',
                Rule::in(['customer', 'admin', 'teacher', 'developer']), // Adjust roles as per your application
            ],
            'g-recaptcha-response' => [
                Rule::when(get_setting('google_recaptcha') == 1, ['required', new Recaptcha()], ['sometimes']),
            ],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = new User;
    
        // Assign values to the user model
        $user->name = $data['name'];
        $user->email = $data['email'] ?? null;
        $user->phone = $data['phone'] ?? null;
        $user->password = Hash::make($data['password']);
        $user->user_type = $data['user_type'] ?? 'customer'; // Default to 'customer' if not provided
        $user->email_verified_at = now(); // Set email verification timestamp
    
     

        if ($user->save() && $data['user_type']=="devloper" ||   $data['user_type']=="teacher") {
            $shop = new Shop;
            $shop->user_id = $user->id;
            $shop->name = "";
            $shop->address ="";
            $shop->slug = preg_replace('/\s+/', '-', str_replace("/", " ", "a"));
            $shop->save();

           
        }

       
















    
        return $user;
    }
    
    public function register(Request $request)
    {




        $request->merge([
            'user_type' => $request->input('user_type', 'customer'), // Default to 'customer'
        ]);


       

        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            if (User::where('email', $request->email)->exists()) {
                flash(translate('Email already exists.'))->error();
                return back();
            }
        } elseif (User::where('phone', '+' . $request->country_code . $request->phone)->exists()) {
            flash(translate('Phone already exists.'))->error();
            return back();
        }


      
    //    $this->validator($request->all())->validate();

      

        $user = $this->create($request->all());




        $this->guard()->login($user);

        if ($user->email) {
            if (BusinessSetting::where('type', 'email_verification')->first()->value != 1) {
                $user->email_verified_at = now();
                $user->save();
                offerUserWelcomeCoupon();
                flash(translate('Registration successful.'))->success();
            } else {
                try {
                    EmailUtility::email_verification($user, 'customer');
                    flash(translate('Registration successful. Please verify your email.'))->success();
                } catch (\Throwable $e) {
                    $user->delete();
                    flash(translate('Registration failed. Please try again later.'))->error();
                }
            }
        }

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }



    protected function registered(Request $request, $user)
    {            return back();

        if ($user->email == null) {
            return redirect()->route('verification');
        } elseif (session('link') != null) {
            return redirect(session('link'));
        } else {

            return back();
            // return redirect()->route('home');
        }
    }
}
