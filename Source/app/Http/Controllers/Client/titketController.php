<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\client\titketCreateRequest;
use App\Http\Service\admin\eventDetailService;
use App\Http\Service\client\titketService;
use Illuminate\Support\Facades\Mail;

class titketController extends Controller
{
    protected $titketService;
    protected $eventdetailService;
    public function __construct(titketService $titketService,eventDetailService $eventDetailService)
    {
        $this->titketService = $titketService;
        $this->eventdetailService = $eventDetailService;
    }
    public function titket_create(titketCreateRequest $request){
        $eventdetail = $this->eventdetailService->find($request->id_chitietsukien);
        $data = $request->input();
        $result = $this->titketService->create($data);
        $truve['sovedaban'] = $eventdetail->sovedaban+$request->soCho;
        if ($new_titket = $result){
            $this->eventdetailService->update($eventdetail,$truve);
            Mail::send('client.titket.titket_mail',compact('new_titket'), function($email) use ($new_titket) {
                $email->subject('Thông tin đặt vé');
                $email->to($new_titket->email_nguoidat,$new_titket->ten_nguoidat);
            });
            return response()->json([
                'status'=>200
            ]);
        } else {
            return response()->json([
                'status'=>404
            ]);
        }
       
        
    }
}
