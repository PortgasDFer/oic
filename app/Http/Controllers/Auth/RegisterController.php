<?php

namespace LaGranLinea\Http\Controllers\Auth;

use LaGranLinea\User;
use LaGranLinea\Role;
use LaGranLinea\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use LaGranLinea\Mail\FormularioContacto;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'regex:/^[\pL\s\-]+$/u', 'max:191', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users', 'email:rfc,dns'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'message' => ['required', 'string', 'max:190', 'min:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \LaGranLinea\User
     */
    protected function create(array $data)
    {   
        $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],        
        'password' => bcrypt($data['password']),
        'avatar' => 'default.png',
        'bio' => $data['message'],         
        ]);

        $user
            ->roles()
            ->attach(Role::where('name', 'user')->first());

        $mensaje=$user;

        Mail::to('daniel29isai@gmail.com')->send(new FormularioContacto($mensaje));
        
        return $user;
    }
}
