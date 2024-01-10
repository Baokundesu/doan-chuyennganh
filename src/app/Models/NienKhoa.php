<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NienKhoa extends Model
{
    protected $table = 'NienKhoa'; // Tên bảng trong CSDL
    protected $primaryKey = 'MaNK'; // Khóa chính của bảng

    protected $fillable = [
        'MaNK', 
        'NamHoc',
    ];
}
