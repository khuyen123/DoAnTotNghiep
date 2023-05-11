<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

use App\Http\Service\client\eventDetailclientService;
use App\Models\district;
use App\Models\province;
use App\Models\TinhThanh;
use App\Models\wards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class baseController extends Controller
{
    protected $eventdetailService;
    public function __construct(eventDetailclientService $eventDetailService )
    {
        $this->eventdetailService = $eventDetailService;
    }
    public function index(){
       return view('client.index');
    }
    public function events() {
        $events = $this->eventdetailService->getevent();
        return view('client.event.events',[
            'event_details' => $events
        ]);
    }
    public function creator(){
        echo "Trang quản trị";
    }
    public function aboutus(){
        return view('client.aboutus.aboutus');
    }
    public function getdistrict($province_id){
        $districts = district::query() -> where('id_tinhthanh','like',$province_id)->get();
        return response()-> json([
            'districts' => $districts,
            'status' => 200
        ]);
    }
    public function getwards($district_id){
        $wards = wards::query() -> where('id_quanhuyen','like',$district_id)->get();
        return response()-> json([
            'wards' => $wards,
            'status' => 200
        ]);
    }
    public function findprovince($ward_id){
        $ward = wards::query()->where('id','like',$ward_id)->first();
        $district = district::query()->where('id','like',$ward->id_quanhuyen)->first();
        $province = province::query()->where('id','like',$district->id_tinhthanh)->first();
        return response()-> json([
            'status'=> 200,
            'province' =>$province
        ]);

    }
    public function client_infor($user_id){
        return view('client.user.userinfor');
    }
}
