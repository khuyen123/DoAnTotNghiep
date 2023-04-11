<?php
namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\UserRepositoryinterface;
use App\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface {
     /** 
      * Hàm constructor.
    *
    * @param User $user
    */
   public function __construct(User $user)
   {
       // Khai báo model 
       parent::__construct($user);
   }
   public function getAll(){
        return User::all();
   }
}