<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinhThanh extends Model
{
    use HasFactory;
    public function quanhuyen(){
        return $this->QuanHuyen(quanhuyen::class, 'id_tinhthanh', 'id_quanhuyen');
    }
    protected $fillable=[
        'id_tinhthanh',
        'tentinhthanh'
    ];
    protected $table= 'tinhthanh';
}
