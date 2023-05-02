<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titket extends Model
{
    use HasFactory;
    protected $fillable=[
        'tinhtrang',
        'hangGhe',
        'soGhe',
        'soBan',
        'soCong',
        'thanhtoan',
        'kiemtra',
        'id_nguoidung',
        'id_chitietsukien'
    ];
    protected $table= 've';
}
