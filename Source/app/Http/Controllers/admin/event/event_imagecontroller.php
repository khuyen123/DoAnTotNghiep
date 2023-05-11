<?php

namespace App\Http\Controllers\admin\event;

use App\Http\Controllers\Controller;
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
        $event_details = $this->event_imageService->getevent_detail();
        return view('admin.event.event_image_create',[
            'event_details' => $event_details,
            'title' => 'Hình ảnh sự kiện'
        ]);
    }
}
