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
    protected $table= 'binhluan';
}
