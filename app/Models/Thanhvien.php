<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Thanhvien extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'thanhvien';
    public $timestamps = false;

    protected $fillable = [
        'Tendangnhap',
        'Matkhau',
        'Vaitro',
    ];

    protected $hidden = [
        'Matkhau',
        'remember_token',
    ];
}
