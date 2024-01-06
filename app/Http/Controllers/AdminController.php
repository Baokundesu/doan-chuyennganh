<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thanhvien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Daotao;
use App\Models\MonHoc;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin/index');
    }

    public function showLoginForm()
    {
        return view('login.index');
    }

    //Quản lý tài khoản
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'Tendangnhap' => 'required|string|max:255|unique:thanhvien',
        //     'Matkhau' => 'required|string|min:8|confirmed',
        //     'Vaitro' => 'required|in:giang_vien,sinh_vien,admin',
        // ]);

        Thanhvien::create([
            'Tendangnhap' => $request->Tendangnhap,
            'Matkhau' => Hash::make($request->Matkhau),
            'Vaitro' => $request->Vaitro,
        ]);

        return redirect()->route('admin.showRegisterForm')->with('success', 'Đăng ký thành viên thành công!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Tendangnhap' => 'required',
            'Matkhau' => 'required',
        ]);

        $credentials = $request->only('Tendangnhap', 'Matkhau');

        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::guard('web')->user();

            switch ($user->Vaitro) {
                case 'admin':
                    return redirect()->route('admin.index');
                case 'giang_vien':
                case 'sinh_vien':
                    return redirect()->route('user.index');
                default:
                    return redirect()->intended('/');
            }
        }

        return redirect()->route('admin.login')->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.index');
    }

    //Quản lý chương trình đào tạo
    public function showDaotaoList()
    {
        $daotaoList = DaoTao::all();

        return view('admin.study', ['daotaoList' => $daotaoList]);
    }

    public function createDaotaoForm()
    {
        return view('admin.addstudy');
    }

    public function createDaotao(Request $request)
    {
        $request->validate([
            'MaDaoTao' => 'required|unique:DaoTao,MaDaoTao',
            'SoQuyetDinh' => 'required',
            'TinChi' => 'required',
            'TCLyThuyet' => 'required',
            'TCThucHanh' => 'required',
        ]);

        DaoTao::create([
            'MaDaoTao' => $request->input('MaDaoTao'),
            'SoQuyetDinh' => $request->input('SoQuyetDinh'),
            'TinChi' => $request->input('TinChi'),
            'TCLyThuyet' => $request->input('TCLyThuyet'),
            'TCThucHanh' => $request->input('TCThucHanh'),
        ]);

        return redirect()->route('admin.daotao.create')->with('success', 'Chương trình đào tạo đã được thêm.');
    }

    public function editDaotaoForm($MaDaoTao)
    {
        $daotao = DaoTao::find($MaDaoTao);

        return view('admin.editstudy', ['daotao' => $daotao]);
    }

    public function editDaotao(Request $request, $MaDaoTao)
    {
        $request->validate([
            'MaDaoTao' => 'required|unique:DaoTao,MaDaoTao',
            'SoQuyetDinh' => 'required',
            'TinChi' => 'required',
            'TCLyThuyet' => 'required',
            'TCThucHanh' => 'required',
        ]);

        $daotao = DaoTao::find($MaDaoTao);

        $daotao->update([
            'MaDaoTao' => $request->input('MaDaoTao'),
            'SoQuyetDinh' => $request->input('SoQuyetDinh'),
            'TinChi' => $request->input('TinChi'),
            'TCLyThuyet' => $request->input('TCLyThuyet'),
            'TCThucHanh' => $request->input('TCThucHanh'),
        ]);

        return redirect()->route('admin.daotao.index')->with('success', 'Chương trình đào tạo đã được cập nhật.');
    }

    public function deleteDaotao($MaDaoTao)
    {
        $daotao = DaoTao::find($MaDaoTao);

        if (!$daotao) {
            return redirect()->route('admin.daotao.index')->with('error', 'Không tìm thấy chương trình đào tạo.');
        }

        $daotao->delete();

        return redirect()->route('admin.daotao.index')->with('success', 'Chương trình đào tạo đã được xóa.');
    }

    // Quản lý môn học
    public function showMonHocList()
    {
        $monHocList = MonHoc::all();

        return view('admin.subject', ['monHocList' => $monHocList]);
    }

    public function createMonHocForm()
    {
        return view('admin.addsubject');
    }

    public function createMonHoc(Request $request)
    {
        $request->validate([
            'MaMonHoc' => 'required|unique:MonHoc,MaMonHoc',
            'TenMonHoc' => 'required',
            'HocKyTrenCT' => 'required',
            'MaLinhVuc' => 'required',
            'MaDaoTao' => 'required',
            'TCLyThuyet' => 'required',
            'TCThucHanh' => 'required',
        ]);

        MonHoc::create([
            'MaMonHoc' => $request->input('MaMonHoc'),
            'TenMonHoc' => $request->input('TenMonHoc'),
            'HocKyTrenCT' => $request->input('HocKyTrenCT'),
            'MaLinhVuc' => $request->input('MaLinhVuc'),
            'MaDaoTao' => $request->input('MaDaoTao'),
            'TCLyThuyet' => $request->input('TCLyThuyet'),
            'TCThucHanh' => $request->input('TCThucHanh'),
        ]);

        return redirect()->route('admin.monhoc.index')->with('success', 'Môn học đã được thêm.');
    }

    public function editMonHocForm($MaMonHoc)
    {
        $monHoc = MonHoc::find($MaMonHoc);

        return view('admin.editsubject', ['monHoc' => $monHoc]);
    }

    public function editMonHoc(Request $request, $MaMonHoc)
    {
        $request->validate([
            'MaMonHoc' => 'required',
            'TenMonHoc' => 'required',
            'HocKyTrenCT' => 'required',
            'MaLinhVuc' => 'required',
            'MaDaoTao' => 'required',
            'TCLyThuyet' => 'required',
            'TCThucHanh' => 'required',
        ]);

        $monHoc = MonHoc::find($MaMonHoc);

        $monHoc->update([
            'MaMonHoc' => $request->input('MaMonHoc'),
            'TenMonHoc' => $request->input('TenMonHoc'),
            'HocKyTrenCT' => $request->input('HocKyTrenCT'),
            'MaLinhVuc' => $request->input('MaLinhVuc'),
            'MaDaoTao' => $request->input('MaDaoTao'),
            'TCLyThuyet' => $request->input('TCLyThuyet'),
            'TCThucHanh' => $request->input('TCThucHanh'),
        ]);

        return redirect()->route('admin.monhoc.index')->with('success', 'Môn học đã được cập nhật.');
    }

    public function deleteMonHoc($MaMonHoc)
    {
        MonHoc::find($MaMonHoc)->delete();

        return redirect()->route('admin.monhoc.index')->with('success', 'Môn học đã được xóa.');
    }
}