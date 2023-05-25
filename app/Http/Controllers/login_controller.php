<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Role;

class login_controller extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('dashboard_admin');
        } else if (Auth::guard('umat')->check()) {
            return redirect()->route('userindex');
        } else {
            if(Cookie::get('email') !== null){
                $email=Cookie::get('email');
                $pass=Cookie::get('pass');
                //return $pass;
                return view('layouts.login',compact('email','pass'));
            }else{
                return view('layouts.login');
            }
        }
    }

    
    public function login(Request $request)
    {
        $minutes=1200;
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user=User::where('email',$request->email)->first();
        if(isset($user)){
            switch ($user->role_id) {
                case '1':
                    $guard="admin";
                    break;
                case '2':
                    $guard="umat";
                    break;
            }
            if(auth()->guard($guard)->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])) {
                $user = auth()->guard($guard)->user();
                if($request->rememberme=='on'){
                    $cookie1 = Cookie::make('email', $request->email, $minutes);
                    $cookie2 = Cookie::make('pass', $request->password, $minutes);
                    if ($guard=='admin') {
                        return redirect()->intended(url('/dashboard'))->withCookie($cookie1)->withCookie($cookie2);
                    }elseif ($guard=='umat') {
                        return redirect()->intended(url('/userindex'))->withCookie($cookie1)->withCookie($cookie2);
                    }
                    
                }else{
                    $cookie1 = Cookie::forget('email');
                    $cookie2 = Cookie::forget('pass');
                    if ($guard=='admin') {
                        return redirect()->intended(url('/dashboard'))->withCookie($cookie1)->withCookie($cookie2);
                    }elseif ($guard=='pengajar') {
                        return redirect()->intended(url('/userindex'))->withCookie($cookie1)->withCookie($cookie2);
                    }
                    
                }
            } else {
                return redirect()->back()->withError('Credentials doesn\'t match.');
            }
        }else{
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }
        
        
        
    }

    public function logout(Request $request)
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        } elseif(Auth::guard('pengajar')->check()){
            Auth::guard('pengajar')->logout();
        }
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('loginfinal');
    }


}
