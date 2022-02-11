<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use Stripe;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
    protected function validator(array $data )
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'cardName' => ['required', 'string', 'max:255'],
            'cardNumber' => ['required','max:16'],
            'cvs' => ['required',  'min:3','string', 'max:4'],
            'month' => ['required',  'min:1','string' , 'max:2'],
            'year' => ['required',  'min:2','string', 'max:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'dob' => ['required', 'date', 'before:today'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data )
    {
        if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/assets/uploads/users/');
            $avatar->move($avatarPath, $avatarName);
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dob' => date('Y-m-d', strtotime($data['dob'])),
            'avatar' => "/assets/uploads/users/" . $avatarName,
        ]);
        $user->roles()->sync(3);

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Stripe\Charge::create ([
                "amount" => (int)\request()->session()->get('amount') * 100,
                "currency" => "usd",
                "source" => $data['stripeToken'],
                "description" => \request()->session()->get('package_name')
        ]);
       
        if($customer->status == 'succeeded'){
            $payment = new Payment();
            $payment->user_id = $user->id;
            $payment->stripe_id = $data['stripeToken'];
            $payment->amount = \request()->session()->get('amount');
            $payment->balance_transaction = $customer->balance_transaction;
            $payment->currency = $customer->currency;
            $payment->description = $customer->description;
            $payment->payment_id = $customer->id;;
            $payment->country = $customer->source->country;
            $payment->exp_month = $customer->source->exp_month;
            $payment->exp_year = $customer->source->exp_year;
            $payment->fingerprint = $customer->source->fingerprint;
            $payment->card_number = $customer->source->last4;
            $payment->receipt_url = $customer->receipt_url;
            $payment->save();
        }
        return $user;
        
    }
}
