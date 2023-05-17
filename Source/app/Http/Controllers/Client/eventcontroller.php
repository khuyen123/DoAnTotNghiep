<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Service\client\eventDetailclientService;
use Illuminate\Http\Request;

class eventcontroller extends Controller
{
    protected $eventdetailservice;
    public function __construct(eventDetailclientService $eventdetailservice)
    {
        $this->eventdetailservice = $eventdetailservice;
    }
    public function eventdetail($detail_id){
        $event_detail = $this->eventdetailservice->geteventdetail($detail_id);
        $images = $this->eventdetailservice->getimage($detail_id);
        return view('client.event.detail',[
            'event_detail' => $event_detail,
            'images' => $images
        ]);
    }
    
}
