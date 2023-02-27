<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lnamep' => ['required', 'string', 'max:255'],
            'lnamem' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date', 'max:255'],
            'civil_status' => ['required', 'string', 'max:255'],
            'social_reason' => ['required', 'string', 'max:255'],
            'client' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'position_type' => ['required', 'string', 'max:255'],
            'working_day' => ['required', 'string', 'max:255'],
            'date_admition' => ['required', 'date', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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

        return User::create([
            'name' => $data['name'],
            'lnamep' => $data['lnamep'],
            'lnamem' => $data['lnamem'],
            'email' => $data['email'],
            'type' => "1",
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'civil_status' => $data['civil_status'],
            'social_reason' => $data['social_reason'],
            'client' => $data['client'],
            'area' => $data['area'],
            'position' => $data['position'],
            'position_type' => $data['position_type'],
            'working_day' => $data['working_day'],
            'date_admition' => $data['date_admition'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
