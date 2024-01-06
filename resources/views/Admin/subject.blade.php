@extends('Admin.index')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quản lý môn học</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('admin.monhoc.create') }}" class="btn btn-primary mb-2">Thêm Môn học</a>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Mã Môn Học</th>
                                            <th>Tên Môn Học</th>
                                            <th>Học Kỳ Trên Chương Trình</th>
                                            <th>Mã Lĩnh Vực</th>
                                            <th>Mã Đào Tạo</th>
                                            <th>TC Lý Thuyết</th>
                                            <th>TC Thực Hành</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($monHocList as $monHoc)
                                            <tr>
                                                <td>{{ $monHoc->MaMonHoc }}</td>
                                                <td>{{ $monHoc->TenMonHoc }}</td>
                                                <td>{{ $monHoc->HocKyTrenCT }}</td>
                                                <td>{{ $monHoc->MaLinhVuc }}</td>
                                                <td>{{ $monHoc->MaDaoTao }}</td>
                                                <td>{{ $monHoc->TCLyThuyet }}</td>
                                                <td>{{ $monHoc->TCThucHanh }}</td>
                                                <td>
                                                    <a href="{{ route('admin.monhoc.edit', $monHoc->MaMonHoc) }}" class="btn btn-warning btn-sm">Sửa</a>
                                                    <a href="{{ route('admin.monhoc.delete', $monHoc->MaMonHoc) }}" class="btn btn-danger btn-sm">Xóa</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
