<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Http\Service\admin\userService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    protected $userService;
    public function __construct(userService $userService)
    {
        $this->userService = $userService;
    }
    public function index(){
        if (Auth::user()->quyentruycap == 3){
            return view('admin.User.index',[
                'title'=>'Quản lý người dùng',
                'users'=>$this->userService->getAll()
            ]);
        }
        return redirect()->back();
    }
    public function edit($user_id){
        $user = $this->userService->find($user_id);
        if (Auth::user()->quyentruycap == 3) {
            return view('admin.User.edit',[
                'title' => 'Chỉnh sửa người dùng'.$user->hoten,
                'user'=> $user
            ]);
        }
        return redirect()->back();
    }
    public function edit_store(Request $request, $user_id){
        $user = $this->userService->find(($user_id));
        $data=$request->all();
        return $this->userService->update($user,$data);
    }
    public function deleteuser($user_id){
        return $this->userService->delete($user_id);
    }
}
