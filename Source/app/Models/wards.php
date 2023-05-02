<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wards extends Model
{
    use HasFactory;

    protected $fillable=[
        'tenxaphuong',
        'id_quanhuyen'
        
    ];
    protected $table= 'xaphuong';
}
