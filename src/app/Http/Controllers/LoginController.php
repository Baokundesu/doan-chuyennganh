<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thanhvien;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Tendangnhap' => 'required',
            'Matkhau' => 'required',
        ]);

        $user = Thanhvien::where('Tendangnhap', $request->input('Tendangnhap'))->first();

        if ($user && Hash::check($request->input('Matkhau'), $user->Matkhau)) {
            // Đăng nhập thành công
            $request->session()->put('user_id', $user->id);

            // Chuyển hướng dựa trên vai trò của người dùng
            switch ($user->Vaitro) {
                case 'admin':
                    return redirect()->route('admin.index');
                case 'giang_vien':
                case 'sinh_vien':
                    return redirect()->route('user.index');
            }
        }

        // Đăng nhập không thành công
        return redirect()->route('login')->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng.');
    }

    public function logout(Request $request)
    {
        // Thực hiện các hành động đăng xuất, ví dụ: xóa thông tin đăng nhập từ session
        $request->session()->forget('user_id');

        return view('Home.index');
    }
}
