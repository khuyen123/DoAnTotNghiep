<?php

namespace App\Http\Controllers\admin\titket;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Event\titketsearchRequest;
use App\Http\Service\client\titketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use PDF;
class titketController extends Controller
{
    protected $titketService;
    public function __construct(titketService $titketService)
    {
        $this->titketService = $titketService;
    }
    public function index(){
        return view('admin.titket.index',[
            'title'=>'Quản lý vé'
        ]);
    }
    public function search(titketsearchRequest $request){
        $titket = $this->titketService->search($request->titket_id);
        if ($titket!=null){
            return view('admin.titket.detail',[
                'title'=>'Quản lý vé',
                'new_titket'=>$titket
            ]);
        } else{
            Session::flash('error','Không tìm thấy vé');
            return redirect()->back();
        }
    }
    public function checkin($titket_id,Request $request){
        $titket = $this->titketService->search($titket_id);
        return $this->titketService->check_in($titket);
    }
    public function export_titket($titket_id){
        $titket = $this->titketService->search($titket_id);
        $data = [
            'title' => 'Chi Tiết Vé',
            'new_titket' => $titket
        ]; 
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadview('client.titket.titket_pdf',$data);
        $file_name = 'VeSuKien'.$titket->id_ve.'.pdf';
        return $pdf->download($file_name);
    }
}
