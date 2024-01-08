<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Diem;

class DiemImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $validatedData = $this->validateData($row);
        return new Diem($validatedData);
    }

    private function validateData($row)
    {
        // Thực hiện kiểm tra và xử lý dữ liệu nếu cần
        return [
            'MSSV' => $row['0'],
            'MaMonHoc' => $row['1'],
            'DiemTK' => $row['2'],
            'MaNK' => $row['3'],
            'MaGV' => $row['4'],
        ];
    }
}
