<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diem extends Model
{
    use HasFactory;

    protected $table = 'TongHop';

    protected $fillable = [
        'MaNK',
        'MSSV', 
        'MaMonHoc', 
        'DiemTK',
        'MaGV', 
    ];
}
