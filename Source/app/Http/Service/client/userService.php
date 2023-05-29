<?php 
namespace App\Http\Service\client;

use App\Models\User;
use App\Repository\Eloquent\UserRepository;
use Illuminate\Support\Facades\Hash;

class userService {
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getAll(){
        return $this->userRepository->getAll();
    }
    public function register($request){
        $slug = false;
        $users = $this->getALL();
        $data = $request->all();
        $data['id_xaphuong'] = 1;
        $password=Hash::make($request->password);
        $data['password'] = $password;
        $data['quyentruycap'] = 1;
        
        $token=$this->rand_string(6);
        $data['makichhoat'] = $token;
        try {
            return $this->userRepository->create($data);
            
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function update($user,$data){
        $this->userRepository->update($user,$data);
        return true;
    }
    public function find($user_id){
        return $this->userRepository->find($user_id);
    }
    public function search_forgot($email){
        $user = User::query()
        ->where('email','=',$email)
        ->orWhere('username','=',$email)
        ->first();
        return $user;
    }
    function rand_string( $length ) {
        $str = '';
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
         }
        return $str;
    }
}