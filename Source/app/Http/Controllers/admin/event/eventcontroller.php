<?php

namespace App\Http\Controllers\admin\event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class eventcontroller extends Controller
{
    public function index(){
        return view('admin.event.event_index',[
            'title' => 'Sự kiện'
        ]);
    }
}
