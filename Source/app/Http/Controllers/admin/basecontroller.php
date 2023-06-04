<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Service\admin\eventDetailService;
use App\Http\Service\admin\userService;
use App\Http\Service\client\titketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class basecontroller extends Controller
{
    protected $ticketService,$userService,$eventDetailService;
    public function __construct(titketService $titketService, userService $userService, eventDetailService $eventDetailService)
    {
        $this->ticketService = $titketService;
        $this->userService = $userService;
        $this->eventDetailService = $eventDetailService;
    }
    public function index(){
        $amount = 0;
        $tickets = $this->ticketService->getAll();
        $users = $this->userService->getAll();
        $events = $this->eventDetailService->getAllforclient();
        $count_event = 0;
        $count_user = 0;
        foreach($users as $user){
            if ($user->quyentruycap == 1){
                $count_user += 1;
            }
        }
        foreach($tickets as $ticket)
        {
            $amount += $ticket->tongtien;
        }
        foreach($events as $event){
                $count_event += 1;
        }
        if (Auth::check()) {
            if (Auth::user()->quyentruycap == 2 || Auth::user()->quyentruycap == 3) {
            return view('admin.home',[
                'title' => 'Sự kiện số | Trang quản trị',
                'count_ticket' => $tickets->count(),
                'ticket_amount' =>$amount,
                'count_users' => $count_user,
                'count_events' => $count_event
            ]);
            } elseif (Auth::user()->quyentruycap == 1) {
                return redirect()->route('home');
            } 
        } 
        return redirect()->route('login');
    }
    public function event_statistical(){
        $event = $this->eventDetailService->getAllforclient();
        return view('admin.event_statistical.event_event_statistical',[
            'title'=>'Thống kê Sự kiện',
            'events'=>$event
        ]);
    }
}
