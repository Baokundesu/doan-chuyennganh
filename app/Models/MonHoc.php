<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = 'MonHoc';
    protected $primaryKey = 'MaMonHoc';
    public $timestamps = false;

    // Các trường còn lại trong bảng
    protected $fillable = [
        'MaMonHoc',
        'TenMonHoc',
        'HocKyTrenCT',
        'MaLinhVuc',
        'MaDaoTao',
        'TCLyThuyet',
        'TCThucHanh',
    ];
}
