<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

use App\Http\Service\client\eventDetailclientService;

class titketController extends Controller
{
    protected $eventService;
    public function __construct(eventDetailclientService $eventdetailclientService)
    {
        $this->eventService = $eventdetailclientService;
    }
   public function index($detail_id){
    $event_detail = $this->eventService->geteventdetail($detail_id);
    $images = $this->eventService->getimage($detail_id);
        return view('client.titket.index',[
            'event_detail' =>$event_detail,
            'images'=>$images
        ]);
   }
}
