<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Service\client\eventDetailclientService;
use App\Models\checkseat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class eventcontroller extends Controller
{
    protected $eventdetailservice;
    public function __construct(eventDetailclientService $eventdetailservice)
    {
        $this->eventdetailservice = $eventdetailservice;
    }
    public function eventdetail($detail_id){
        $comments = $this->eventdetailservice->getComment($detail_id);
        $event_detail = $this->eventdetailservice->geteventdetail($detail_id);
        $images = $this->eventdetailservice->getimage($detail_id);
        $titkets = $this->eventdetailservice->gettitket($detail_id);
        $seats = [];
        $seat_selected = [];
        $seat_db = checkseat::all();
        foreach($titkets as $item ) {
            $ghe = explode(',',$item->soGhe);
            foreach($ghe as $key){
                array_push($seats,$key);
            }  
        }
        foreach ($seat_db as $key){
            if (isset(Auth::user()->id) && $key->trangthai != 1 && $key->id_nguoidung == Auth::user()->id && $key->id_chitietsukien == $event_detail->id){
                array_push($seat_selected,$key->soGhe);
            }
        }
        return view('client.event.detail',[
            'event_detail' => $event_detail,
            'images' => $images,
            'seats' =>$seats,
            'comments'=>$comments,
            'seats_selected' =>$seat_selected,
            'numberofseat'=>count($seat_selected)
        ]); 
    }
    
}
