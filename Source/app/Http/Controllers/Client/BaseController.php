<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\client\changeAVTRequest;
use App\Http\Requests\client\commentRequest;
use App\Http\Service\admin\bannerService;
use App\Http\Service\client\eventDetailclientService;
use App\Http\Service\client\userService;
use App\Models\district;
use App\Models\province;
use App\Models\TinhThanh;
use App\Models\wards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class baseController extends Controller
{
    protected $eventdetailService,$bannerService,$userService;
    public function __construct(eventDetailclientService $eventDetailService, bannerService $bannerService, userService $userService )
    {
        $this->bannerService = $bannerService;
        $this->eventdetailService = $eventDetailService;
        $this->userService = $userService;
    }
    public function index(){
        $banners = $this->bannerService->getAll();
       return view('client.index',[
            'banners' => $banners
       ]);
    }
    public function search_event(Request $request){
        $events = $this->eventdetailService->search_event($request->searchString);
        return view('client.event.events',[
            'event_details' => $events
        ]);
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
        return view('client.user.userinfor',[
            'provinces'=>province::all()
        ]);
    }
    public function create_comment(commentRequest $request){
        // dd($request->all());
        return $this->eventdetailService->create_comment($request->all());
    }
    public function delete_comment($comment_id){
        return $this->eventdetailService->delete_comment($comment_id);
    }
    public function change_avt($user_id,changeAVTRequest $request){
        $user = $this->userService->find($user_id);
        if($request->has('user_avt')){
            $file = $request->file('user_avt');
            $ext = $request->file('user_avt')->extension();
            $file_name = time().'-user_avt-'.$user_id.'.'.$ext;
            $file->move(public_path('client/Image'),$file_name);
        }
        $request->merge(['anhdaidien'=>'client/Image/'.$file_name]);
        $data['anhdaidien'] = $request->anhdaidien;
        $this->userService->update($user,$data);
        return redirect()->back();
    }
    public function searchprovince(){
        $provinces = province::all();
        return response()->json([
            'tinhthanh' =>$provinces
        ]);
    }
}
