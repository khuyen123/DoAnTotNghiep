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
        $titkets = $this->eventdetailservice->gettitket($detail_id);
        $seats = [];
        foreach($titkets as $item ) {
            $ghe = explode(',',$item->soGhe);
            foreach($ghe as $key){
                array_push($seats,$key);
            }
            
        }
        return view('client.event.detail',[
            'event_detail' => $event_detail,
            'images' => $images,
            'seats' =>$seats
        ]);
        
    }
    
}
