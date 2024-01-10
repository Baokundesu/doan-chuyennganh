<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'SinhVien'; // Tên bảng trong CSDL
    protected $primaryKey = 'MSSV'; // Khóa chính của bảng

    protected $fillable = [
        'MSSV', 
        'HoSV', 
        'TenSV', 
        'MaLop', 
        'GioiTinh', 
        'NgaySinh', 
        'DiaChi', 
        'DienThoai', 
        'Email', 
        'TinhTrang', 
        'TenDangNhap',
    ];
}
