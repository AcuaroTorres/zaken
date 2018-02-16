<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    /**
     * Define el id como username en vez del email
     *
     */
    public function username()
    {
        return 'id';
    }

    public function login()
    {
        $credentials= $this->validate(request(),[
            'run'       => 'required|string',
            'password'  => 'required|string'
        ]);

        /*
        * Limpiar run y dividir en ID y DV
        */
        $credentials['run'] = str_replace('.','',$credentials['run']);
        $credentials['run'] = str_replace('-','',$credentials['run']);

        $credentials['id'] = substr($credentials['run'], 0, -1);
        
        unset($credentials['run']);

        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }else{
            return back()
                ->withErrors([$this->username() => trans('auth.failed')])
                ->withInput(request([$this->username()]));
        }
    }

}