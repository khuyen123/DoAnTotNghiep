<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_detail extends Model
{
    use HasFactory;

    protected $fillable=[
        'batdau',
        'ketthuc',
        'diachi',
        'khuvuc',
        'sovetoida',
        'sovedaban',
        'trangthai',
        'giave',
        'sdt_lienhe',
        'ten_lienhe',
        'email_lienhe',
        'dotuoichophep',
        'mota',
        'id_sukien',
        'id_xaphuong'
        
    ];
    public function event(){
        return $this->hasOne(event::class,'id','id_sukien');
    }
    public function wards(){
        return $this->hasOne(wards::class,'id','id_xaphuong');
    }
    protected $table= 'chitietsukien';
}
