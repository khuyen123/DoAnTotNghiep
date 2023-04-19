<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class eventcontroller extends Controller
{
    public function eventdetail(){
        return view('client.event.detail');
    }
}
