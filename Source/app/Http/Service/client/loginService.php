<?php 
namespace App\Http\Service;

use App\Repository\Eloquent\UserRepository;

class userService {
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getall(){
        return $this->userRepository->getAll();
    }
    public function register(){
        
    }
}