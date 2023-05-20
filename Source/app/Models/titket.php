<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titket extends Model
{
    use HasFactory;
    protected $fillable=[
        'tinhtrang',
        'soCho',
        'soGhe',
        'thanhtoan',
        'kiemtra',
        'id_ve',
        'id_nguoidung',
        'id_chitietsukien',
        'ten_nguoidat',
        'sdt_nguoidat',
        'email_nguoidat'
    ];
    public function event_detail(){
        return $this->hasOne(event_detail::class,'id','id_chitietsukien');
    }
    protected $table= 've';
}
