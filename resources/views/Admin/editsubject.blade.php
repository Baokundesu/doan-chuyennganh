@extends('Admin.index')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sửa thông tin môn học</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('admin.monhoc.update', $monHoc->MaMonHoc) }}" method="post">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="MaMonHoc">Mã Môn Học</label>
                                        <input type="text" class="form-control" id="MaMonHoc" name="MaMonHoc" value="{{ $monHoc->MaMonHoc }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="TenMonHoc">Tên Môn Học</label>
                                        <input type="text" class="form-control" id="TenMonHoc" name="TenMonHoc" value="{{ $monHoc->TenMonHoc }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="HocKyTrenCT">Học Kỳ Trên Chương Trình</label>
                                        <input type="text" class="form-control" id="HocKyTrenCT" name="HocKyTrenCT" value="{{ $monHoc->HocKyTrenCT }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="MaLinhVuc">Mã Lĩnh Vực</label>
                                        <input type="text" class="form-control" id="MaLinhVuc" name="MaLinhVuc" value="{{ $monHoc->MaLinhVuc }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="MaDaoTao">Mã Đào Tạo</label>
                                        <input type="text" class="form-control" id="MaDaoTao" name="MaDaoTao" value="{{ $monHoc->MaDaoTao }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="TCLyThuyet">TC Lý Thuyết</label>
                                        <input type="text" class="form-control" id="TCLyThuyet" name="TCLyThuyet" value="{{ $monHoc->TCLyThuyet }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="TCThucHanh">TC Thực Hành</label>
                                        <input type="text" class="form-control" id="TCThucHanh" name="TCThucHanh" value="{{ $monHoc->TCThucHanh }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </form>
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
