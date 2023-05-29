<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\client\forgotpasswordRequest;
use App\Http\Requests\client\loginRequest;
use App\Http\Requests\client\sigupRequest;
use App\Http\Service\admin\bannerService;
use App\Http\Service\client\userService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    protected $userService,$bannerService;
    public function __construct(userService $userService, bannerService $bannerService)
    {
        $this->userService = $userService;
        $this->bannerService = $bannerService;
    }
    public function login(){
        $banners = $this->bannerService->getAll();
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
        return view('client.user.login',[
            'banners' => $banners
        ]);
        }
       
    }
    public function forgot_password(){
        $banners = $this->bannerService->getAll();
        return view('client.user.forgot_password',['banners'=> $banners]);
    }
    public function forgot_password_find(forgotpasswordRequest $request){
        $user = $this->userService->search_forgot($request->email);
        if ($user == null) {
            Session::flash('error','Không tìm thấy người dùng');
            return redirect()->back();
        }
        $token = $this->userService->rand_string(6);
        $data['makichhoat'] = $token;
        $this->userService->update($user,$data);
        dd($user);
    }
    public function login_function(loginRequest $request){
        if ((Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])) || 
        (Auth::attempt(['username'=>$request->input('email'),'password'=>$request->input('password')]))) {
                if (Auth::user()->kichhoat == 0){
                    Auth::logout();
                    Session::flash('error','Tài khoản chưa kích hoạt');
                    return redirect()->back();
                } elseif (Auth::user()->kichhoat == 1) {
                    if (Auth::user()->trangthai == 0) {
                        Auth::logout();
                        Session::flash('error','Tài khoản đang tạm khoá');
                        return redirect()->back();
                    } elseif (Auth::user()->kichhoat == 1) {
                        return redirect()->route('home');
                    }
                }
            
        }  else {
            Session::flash('error','Tài khoản hoặc mật khẩu chưa chính xác');
            return redirect()->back();
        }
        
    }
    public function sigout() {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
    public function sigup() {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('client.user.register');
    } 
    public function sigup_function(sigupRequest $request){
        $result = $this->userService->register($request);
        if ( $new_user =  $result) {
            Mail::send('client.active_account',compact('new_user'), function($email) use ($new_user){
                $email->subject('Xác nhận tài khoản đăng ký');
                $email->to($new_user->email, $new_user->hoten);
            });
            Session::flash('success','Đăng ký thành công! Bạn hãy kiểm tra Email để kích hoạt tài khoản');
            return redirect()->route('login');
        } 
        Session::flash('error','Đăng ký thất bại');
        return redirect()->back();
       
    }
    public function active_account($user_id){
        $user = $this->userService->find($user_id);
        $data['trangthai'] = 1;
        $data['kichhoat'] = 1;
        $data['makichhoat'] = '';
        if ($user){
            $this->userService->update($user,$data);
            Session::flash('success','Kích hoạt thành công! Bạn có thể đăng nhập!');
            return redirect()->route('login');
        }
    }
}
