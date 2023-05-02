<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;

    protected $fillable=[
        'tenquanhuyen',
        'id_tinhthanh'
        
    ];
    protected $table= 'quanhuyen';
}
