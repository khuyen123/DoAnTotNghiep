<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class homeController extends Controller
{
    public function index(){
        return view('client.welcome');
    }
    public function client_events(){
        return view('client.events');
    }
    public function aboutus(){
        if (Auth::check()) {
            echo "Đã đăng nhập";
        } else {
            echo "Chưa đăng nhập";
        }
    }
}
