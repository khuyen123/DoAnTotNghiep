<?php 
namespace App\Http\Service\admin;


use App\Models\event_detail;
use App\Repository\Eloquent\EventDetailRepository;
use App\Repository\Eloquent\EventRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class eventDetailService {
    protected $eventdetailRepository;
    protected $eventRepository;
    public function __construct(EventDetailRepository $eventdetailRepository, EventRepository $eventRepository)
    {
        $this->eventdetailRepository = $eventdetailRepository;
        $this->eventRepository = $eventRepository;
    }
    
    public function getAll($id_sukien){
        return $this->eventdetailRepository->searchEvent($id_sukien);
    }
    public function delete($id) {
        
        return $this->eventdetailRepository->delete($id);
    }
    public function destroyMany($request){
        return $this->eventdetailRepository->destroyMany($request);
    }
    public function update($event_detail,$data){

        $this->eventdetailRepository->update($event_detail,$data);
        Session::flash('success', 'Chỉnh sửa chi tiết sự kiện thành công');
        return true;
    }
    public function find($id){
        return $this->eventdetailRepository->find($id);
    }
    public function getEvent($event_id){
        return $this->eventRepository->find($event_id);
    }
    public function create($data) {
        Session::flash('success', 'Thêm mới chi tiết sự kiện thành công');
        return $this->eventdetailRepository->create($data);
        
    }
    
}