<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
        return view('client.login');
        }
    }
    public function login_function(Request $request){
        if (Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ])) {
           return redirect()->route('home');
        
        }  else
        echo "Thất bại";
    }
    public function sigout() {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
    public function sigup() {
        return view('client..register');
    } 
}