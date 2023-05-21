<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\client\titketCreateRequest;
use App\Http\Service\admin\eventDetailService;
use App\Http\Service\client\titketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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
    public function momo_payment(titketCreateRequest $request){

        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán Vé". $request->id_ve;
        $amount = $request->tongtien;
        $orderId = time() . "";
        $redirectUrl = "http://127.0.0.1:8000/client/titket/momo_payment_success/". $request->id_ve;
        $ipnUrl = "http://127.0.0.1:8000/client/titket/momo_payment_success/". $request->id_ve;
        $extraData = "";
            $requestId = time() . "";
            $requestType = "payWithATM";
        
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array('partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);
            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json
            $eventdetail = $this->eventdetailService->find($request->id_chitietsukien);
            $data = $request->input();
            $result_2 = $this->titketService->create($data);
            $truve['sovedaban'] = $eventdetail->sovedaban+$request->soCho;
            if ($result_2){
                $payment_url = $jsonResult['payUrl'];
                //Just a example, please check more in there
                return response()->json([
                    'payment_url' => $payment_url
                ]);
            } else {
                return response()->json([
                    'status' => 404
                ]);
            }
            
        }
    public function execPostRequest($url, $data){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function momo_payment_success($titket_id, Request $request)
    {
        $titket = $this->titketService->search($titket_id);
        $this->titketService->payment_success($titket);
        $url = 'http://127.0.0.1:8000/client/event_detail/'.$titket->id_chitietsukien;
        $eventdetail = $this->eventdetailService->find($titket->id_chitietsukien);
        $truve['sovedaban'] = $eventdetail->sovedaban+$request->soCho;
        if ($new_titket = $titket){
            $this->eventdetailService->update($eventdetail,$truve);
            Mail::send('client.titket.titket_mail',compact('new_titket'), function($email) use ($new_titket) {
                $email->subject('Thông tin đặt vé');
                $email->to($new_titket->email_nguoidat,$new_titket->ten_nguoidat);
            });
            return redirect($url)->with('booking_success','1');
        }
        return response()->json([
            'status'=>404
        ]);
    }
    public function ticket_list($user_id){
        $tickets = $this->titketService->findticket_byuser($user_id);
        return view('client.titket.ticket_list',[
            'tickets'=>$tickets
        ]);
    }
    public function ticket_detail($ticket_id){
        $new_titket = $this->titketService->search($ticket_id);
        return view('client.titket.ticket_detail',[
            'new_titket'=>$new_titket
        ]);
    }
}
