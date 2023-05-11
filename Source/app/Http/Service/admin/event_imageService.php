<?php 
namespace App\Http\Service\admin;

use App\Models\event_detail;
use App\Models\event_image;

use App\Repository\Eloquent\Event_ImageRepository;


class event_imageService {
    protected $event_imageRepository;
    public function __construct(Event_ImageRepository $event_imageRepository)
    {
        $this->event_imageRepository = $event_imageRepository;
    }
    
    public function getAll(){
        return $this->event_imageRepository->getAll();
    }
    public function delete($id) {
        
        return $this->event_imageRepository->delete($id);
    }
    public function destroyMany($request){
        return $this->event_imageRepository->destroyMany($request);
    }
    public function update($event,$data){
        $this->event_imageRepository->update($event,$data);
        return true;
    }
    public function find($id){
        return $this->event_imageRepository->find($id);
    }
    public function create($data) {
        return $this->event_imageRepository->create($data);
    }
    public function getevent_detail(){
        return event_detail::all();
    }
}