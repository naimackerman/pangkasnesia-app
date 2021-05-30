<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 'admin':
            $this->redirectTo = '/dashboard';
            return $this->redirectTo;
                break;
            case 'partner':
                $this->redirectTo = '/partnership';
                return $this->redirectTo;
                break;
            case 'member':
                $this->redirectTo = '/membership';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/register';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } 
    
}