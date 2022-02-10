<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'cardNumber' => ['required', 'min:15', 'string', 'max:16'],
            'cvs' => ['required',  'min:3','string', 'max:4'],
            'month' => ['required',  'min:2','integer' , 'max:2'],
            'year' => ['required',  'min:4','string', 'max:5'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'dob' => ['required', 'date', 'before:today'],
        ]);
        dd($data);
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


        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Stripe\Charge::create ([
                "amount" => 100 *100,
                "currency" => "usd",
                "source" => $data->stripeToken,
                "description" => "OneShot Technologies"
        ]);
        echo "<pre>";
        print_r($customer);die;

        // insert
        // $payment = new Payment();
        // $payment->stripe_id = $customer->stripe_id;
        // $payment->amount = $customer->amount;
        // $payment->balance_transaction = $customer->balance_transaction;
        // $payment->currency = $customer->currency;
        // $payment->description = $customer->description;
        // $payment->payment_id = $customer->payment_id;
        // $payment->country = $customer->country;
        // $payment->exp_month = $customer->exp_month;
        // $payment->exp_year = $customer->exp_year;
        // $payment->fingerprint = $customer->fingerprint;
        // $payment->card_number = $customer->card_number;
        // $payment->receipt_url = $customer->receipt_url;
        // $payment->save();






        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dob' => date('Y-m-d', strtotime($data['dob'])),
            'avatar' => "/assets/uploads/users/" . $avatarName,
        ]);
        $user->roles()->sync(3);
        return $user;
    }
}
