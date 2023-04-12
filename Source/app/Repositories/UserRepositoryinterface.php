<?php
namespace App\Repositories;
interface UserRepositoryinterface 
{
    public function getAll();
    public function changePass($request, $user);
    public function destroyMany($user);
    public function search($request);
    
}