<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class basecontroller extends Controller
{
    public function index(){
        if (Auth::check()) {
            if (Auth::user()->quyentruycap == 2 || Auth::user()->quyentruycap == 3) {
            return view('admin.home',[
                'title' => 'Sự kiện số | Trang quản trị'
            ]);
            } elseif (Auth::user()->quyentruycap == 1) {
                return redirect()->route('home');
            } 
        } 
        return redirect()->route('login');
    }
}
