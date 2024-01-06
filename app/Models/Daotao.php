<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daotao extends Model
{
    protected $table = 'DaoTao';
    protected $primaryKey = 'MaDaoTao';
    public $timestamps = false;

    // Các trường còn lại trong bảng
    protected $fillable = [
        'MaDaoTao',
        'SoQuyetDinh',
        'TinChi',
        'TCLyThuyet',
        'TCThucHanh',
    ];
}
