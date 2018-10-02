<?php

namespace App\Http\Controllers\Auth;

use Carbon;
use App\User;
use App\UserRole;
use App\Kennel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/dashboard';

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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'province'  => 'required|string|min:2',
            'city'  => 'required|string|min:2',
            'street'  => 'required|string|min:5',
            'cellphone'  => 'required|string|min:10',
            'role'  => 'string',
        ]);
    }

    public function choose()
    {
      return view('auth.register-choose');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      //If the user manipulated the hidden input
      if($data['role'] != 'buyer' && $data['role'] != 'breeder')
      {
        return redirect('/home');
      }

      //By default, set to basic. If it's a breeder registering, make it a trial account.
      $accountType = 'basic';
      if($data['role'] == 'breeder')
      {
        $accountType = 'trial';
      }

      //Create the user
      $user = User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'province' => $data['province'],
          'city'  => $data['city'],
          'street'  => $data['street'],
          'postal'  => $data['postal'],
          'cellphone' => $data['cellphone'],
          'trial_ends_at' => \Carbon\Carbon::now()->addMonths(3),
          'account_type' => $accountType,
      ]);

      //Create the user role.
      UserRole::create([
        'role' => $data['role'],
        'user_id' => $user->id,
      ]);

      if($user->isBreeder())
      {
        $kennel = Kennel::create([
          'user_id' => $user->id,
          'province' => $user->province,
          'city' => $user->city,
          'address' => $user->street,
          'postal' => $user->postal,
          'phone' => $user->cellphone
        ]);
      }

      //Return the user so that it can auto-login to dashboard.
      return $user;
    }
}
