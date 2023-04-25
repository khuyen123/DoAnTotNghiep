<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\TinhThanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class baseController extends Controller
{
    public function index(){
       return view('client.index');
    }
    public function events() {
        return view('client.event.events');
    }
    public function creator(){
        echo "Trang quản trị";
    }
    public function aboutus(){
        return view('client.aboutus.aboutus');
    }

}
