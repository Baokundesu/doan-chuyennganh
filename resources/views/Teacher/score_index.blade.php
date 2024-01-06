@extends('Home.index')

@section('content')
    <h2 style="text-align: center;">Bảng Điểm</h2>

    <!-- Biểu mẫu lọc -->
    <form action="{{ route('diem.index') }}" method="GET">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="MaNK">Niên Khóa:</label>
                <select name="MaNK" class="form-control">
                    <option value="">-- Chọn Niên Khóa --</option>
                    @foreach($nienkhoas as $nienkhoa)
                        <option value="{{ $nienkhoa->MaNK }}">{{ $nienkhoa->NamHoc }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="MaLinhVuc">Mã Lĩnh Vực:</label>
                <input type="text" name="MaLinhVuc" class="form-control" placeholder="Nhập Mã Lĩnh Vực">
            </div>
            <!-- Thêm các trường lọc khác tương ứng -->

            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary mt-4">Lọc</button>
            </div>
        </div>
    </form>

    <!-- Bảng điểm -->
    @if(count($scores) > 0)
        <table class="table">
            <!-- ... (như trong ví dụ trước) -->
        </table>
    @else
        <p style="text-align: center;">Không có dữ liệu bảng điểm.</p>
    @endif
@endsection
