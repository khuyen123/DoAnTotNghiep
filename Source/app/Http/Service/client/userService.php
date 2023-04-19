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
        mt_srand(6);
        $token='';
        $count = 0;
        while($count < 6) {
             $token .=mt_rand(0, 9);
            $count++;
        }
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
}