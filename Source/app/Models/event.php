<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $fillable=[
        'tenSukien',
        'motaSukien',
        'id_danhmucsukien'
    ];
    public function category(){
        return $this->hasOne(Category::class,'id','id_danhmucsukien');
    }
    protected $table= 'sukien';
}
