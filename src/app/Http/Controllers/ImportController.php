<?php

namespace App\Http\Controllers;

use App\Imports\DiemImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new DiemImport, $request->file('excel_file'));
        return redirect('/diems')->with('success', 'Bảng điểm đã được nhập thành công!');
    }
}
