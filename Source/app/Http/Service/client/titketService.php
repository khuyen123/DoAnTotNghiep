<?php 
namespace App\Http\Service\client;

use App\Models\titket;
use App\Repository\Eloquent\TitketRepository;
use App\Repository\Eloquent\UserRepository;
use Illuminate\Support\Facades\Hash;

class titketService {
    protected $titketRepository;
    public function __construct(TitketRepository $titketRepository)
    {
        $this->titketRepository = $titketRepository;
    }
    public function getAll(){
        return $this->titketRepository->getAll();
    }
    public function create($data){
        return $this->titketRepository->create($data);
    }
}