<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('client.welcome');
    }
    public function client_events(){
        return view('client.events');
    }
}
