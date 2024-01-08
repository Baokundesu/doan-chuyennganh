<?php
namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Diem;

class DiemImport implements ToModel
{
    public function model(array $row)
    {
        return new Diem([
            'MSSV' => $row[0],
            'MaMonHoc' => $row[1],
            'DiemTK' => $row[2],
            'MaNK' => $row[3],
        ]);
    }
}
