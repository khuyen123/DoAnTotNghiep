<?php

namespace App\Http\Controllers\admin\event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class event_detailcontroller extends Controller
{
    public function index(){
        return view('admin.event.event_detail',[
            'title'=>'Chi tiết sự kiện'
        ]);
    }
}
