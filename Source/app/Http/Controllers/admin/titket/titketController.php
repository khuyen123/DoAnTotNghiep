<?php

namespace App\Http\Controllers\admin\titket;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Event\titketsearchRequest;
use App\Http\Service\client\titketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $data = $request->input();
        return $this->titketService->update($titket,$data);
    }
}
