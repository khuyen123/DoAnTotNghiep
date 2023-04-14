<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\baseRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class BaseController extends Controller
{
    public function login_index(){
        if (Auth::check())
            return redirect()->route('home'); else
        return view('client.login');
    }
    public function register_index(){
        return view('client.register');
    }
    public function login_function(baseRequest $request){
      if (Auth::check()) {
        return redirect()->route('home');
      } else
        if (Auth::attempt([
            'username' => $request->input('username_login'),
            'password' =>$request->input('password_login')
      ])) {
            return redirect()->route('aboutus');
    } else
      echo 'thatbai';
    }
    public function user_logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
}
