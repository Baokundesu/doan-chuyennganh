<?php

namespace App\Http\Controllers;

use App\Models\Diem;
use App\Models\MonHoc;
use App\Models\SinhVien;
use App\Models\NienKhoa;
use Illuminate\Http\Request;

class DiemController extends Controller
{
    public function createForm()
    {
        $students = SinhVien::all();
        $subjects = MonHoc::all();
        $nienkhoas = NienKhoa::all();

        return view('Teacher.Import', compact('students', 'subjects', 'nienkhoas'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'MSSV' => 'required',
            'MaMonHoc' => 'required',
            'DiemTK' => 'required|numeric|min:0|max:10',
            'MaNK' => 'required',
        ]);

        try {
            Diem::create([
                'MSSV' => $request->input('MSSV'),
                'MaMonHoc' => $request->input('MaMonHoc'),
                'DiemTK' => $request->input('DiemTK'),
                'MaNK' => $request->input('MaNK'),
            ]);

            return redirect()->route('diem.create.form')->with('success', 'Nhập điểm thành công.');
        } catch (\Exception $e) {
            return redirect()->route('diem.create.form')->with('error', 'Đã xảy ra lỗi khi nhập điểm.');
        }
    }

    public function index(Request $request)
    {
        $nienkhoas = NienKhoa::all();
        $scores = Diem::query();

        if ($request->has('MaNK')) {
            $scores->where('MaNK', $request->input('MaNK'));
        }
        if ($request->has('HocKy')) {
            $scores->where('HocKy', $request->input('HocKy'));
        }
        if ($request->has('MaMonHoc')) {
            $scores->where('MaMonHoc', $request->input('MaMonHoc'));
        }
        if ($request->has('MSSV')) {
            $scores->where('MSSV', $request->input('MSSV'));
        }
        if ($request->has('MaLinhVuc')) {
            $scores->where('MaLinhVuc', $request->input('MaLinhVuc'));
        }

        $scores = $scores->get(); // Lấy dữ liệu sau khi áp dụng các điều kiện lọc
        return view('Teacher.score_index', compact('scores'));
    }
}
