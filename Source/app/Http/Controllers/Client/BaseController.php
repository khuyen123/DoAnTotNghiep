<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class baseController extends Controller
{
    public function index(){
       return view('index');
    }
    public function another() {
        if (Auth::check()){
            dd(Auth::user());
        } else {
            echo "Chưa đăng nhập";
        }
    }
    public function events() {
        return view('client.events');
    }
    public function creator(){
        echo "Trang quản trị";
    }
    public function aboutus(){
        return view('client.aboutus');
    }
}
