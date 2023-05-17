<?php

namespace App\Http\Controllers\admin\event;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Event\event_imageRequest;
use App\Http\Service\admin\event_imageService;
use App\Models\event_image;
use Illuminate\Http\Request;

class event_imagecontroller extends Controller
{
    protected $event_imageService;
    public function __construct(event_imageService $event_imageService)
    {
        $this->event_imageService = $event_imageService;
    }
    public function index(){
        $images = $this->event_imageService->getAll();
        return view('admin.event.event_image',[
            'title'=>"Hình ảnh sự kiện",
            'images' =>$images
        ]);
    }
    public function create(){
        $event_details = $this->event_imageService->getevent_detail();
        return view('admin.event.event_image_create',[
            'event_details' => $event_details,
            'title' => 'Hình ảnh sự kiện'
        ]);
    }
    public function store(event_imageRequest $request){
        if($request->has('event_image')){
            $file = $request->file('event_image');
            $ext = $request->file('event_image')->extension();
            $file_name = time().'-event_detail-'.$request->id_chitietsukien.'.'.$ext;
            $file->move(public_path('client/Image'),$file_name);
        }
        $request->merge(['noidung'=>'Image/'.$file_name]);
        $data['id_chitietsukien'] = $request->id_chitietsukien;
        $data['noidung'] = $request->noidung;
        $data['mota'] = $request->event_image_dess;
        $this->event_imageService->create($data);
        return redirect()->back();
    }
    public function delete($image_id){
        return $this->event_imageService->delete($image_id);
    }
}
