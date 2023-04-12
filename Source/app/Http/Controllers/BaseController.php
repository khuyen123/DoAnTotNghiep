<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\baseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BaseController extends Controller
{
    public function login_index(){
        return view('login');
    }
    public function register_index(){
        return view('register');
    }
    public function login_function(baseRequest $request){
        if ((Auth::attempt([
            'username' => $request->input('username_login'),
            'password' =>$request->input('password_login')
        ]))| Auth::attempt([
            'email'=> $request->input('username_login'),
            'password'=>$request->input('password_login')
        ])) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
     
    }
}
