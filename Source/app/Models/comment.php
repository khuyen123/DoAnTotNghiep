<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'noidung',
        'id_sukien',
        'id_nguoidung'
    ];
    public function event_detail(){
        return $this->hasOne(event_detail::class,'id','id_sukien');
    }
    protected $table= 'binhluan';
}
