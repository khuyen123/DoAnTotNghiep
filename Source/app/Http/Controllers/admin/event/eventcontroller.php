<?php

namespace App\Http\Controllers\admin\event;

use App\Http\Controllers\Controller;
use App\Http\Service\admin\eventService;
use Illuminate\Http\Request;

class eventcontroller extends Controller
{
    protected $eventService;
    public function __construct(eventService $eventService)
    {
        $this->eventService = $eventService;
    }
    public function index(){
        $categories=$this->eventService->getCategory();
        $events = $this->eventService->getAll();
        return view('admin.event.event_index',[
            'title' => 'Sự kiện',
            'events' => $events,
            'categories'=>$categories
        ]);
    }
}
