@extends('Admin/index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Đăng ký thành viên</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Thêm mã hiển thị lỗi nếu có -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.showRegisterForm') }}">
                            @csrf

                            <div class="form-group">
                                <label for="Tendangnhap">Tên đăng nhập</label>
                                <input type="text" name="Tendangnhap" id="Tendangnhap" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="Matkhau">Mật khẩu</label>
                                <input type="password" name="Matkhau" id="Matkhau" class="form-control" required>
                            </div>

                            {{-- <div class="form-group">
                                <label for="Matkhau_confirmation">Xác nhận mật khẩu</label>
                                <input type="password" name="Matkhau_confirmation" id="Matkhau_confirmation" class="form-control" required>
                            </div> --}}

                            <div class="form-group">
                                <label for="Vaitro">Vai trò</label>
                                <select name="Vaitro" id="Vaitro" class="form-control" required>
                                    <option value="giang_vien">Giảng viên</option>
                                    <option value="sinh_vien">Sinh viên</option>
                                    <option value="admin">Quản trị viên</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
