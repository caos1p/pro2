<?php

namespace App\Http\Controllers\Auth;

use App\Events\login;
use App\Events\logout;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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

    protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
            event(new login(auth()->user()->email));
            return '/admin/agenda';
            }
        if (Auth::check() && Auth::user()->rol->nombre==='medico' ){
            event(new login(  auth()->user()->email));
                return '/medico/agenda';
            
            }
        if (Auth::check() && Auth::user()->rol->nombre==='paciente' ){
            event(new login(  auth()->user()->email));
                return '/paciente/vistadecita';
            }  
               
    }
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
}
