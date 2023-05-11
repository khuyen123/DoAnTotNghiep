<?php 
namespace App\Http\Service\client;


use App\Models\event_detail;
use App\Repository\Eloquent\EventDetailRepository;
use App\Repository\Eloquent\EventRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class eventDetailclientService {
    const LIMIT=150;
    protected $eventdetailrepository;
    public function __construct(EventDetailRepository $eventdetailrepository)
    {
        $this->eventdetailrepository = $eventdetailrepository;
    }
    public function getevent(){
        $sukien =  DB::table('chitietsukien')
        ->join('hinhanh','hinhanh.id_chitietsukien','=','chitietsukien.id')
        ->join('sukien','sukien.id','=','chitietsukien.id_sukien')
        ->join('xaphuong','xaphuong.id','=','chitietsukien.id_xaphuong')
        ->take(self::LIMIT)
        ->get(array(
            'chitietsukien.id as id_chitietsukien',
            'sukien.tenSukien',
            'chitietsukien.diachi',
            'hinhanh.noidung',
            'chitietsukien.giave',
            'chitietsukien.sovetoida',
            'chitietsukien.sovedaban',
            'chitietsukien.trangthai',
            'chitietsukien.mota',
            'chitietsukien.dotuoichophep'
        ));
        return $sukien;
    }
    public function geteventdetail($id){
        return $this->eventdetailrepository->find($id);
    }
}