<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function login_index(){
        return view('login');
    }
    public function register_index(){
        return view('register');
    }
}
