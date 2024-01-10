@extends('Admin.index')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thêm Môn học</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('admin.monhoc.create') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="MaMonHoc">Mã Môn Học</label>
                                        <input type="text" name="MaMonHoc" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="TenMonHoc">Tên Môn Học</label>
                                        <input type="text" name="TenMonHoc" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="HocKyTrenCT">Học Kỳ Trên Chương Trình</label>
                                        <input type="text" name="HocKyTrenCT" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="MaLinhVuc">Mã Lĩnh Vực</label>
                                        <input type="text" name="MaLinhVuc" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="MaDaoTao">Mã Đào Tạo</label>
                                        <input type="text" name="MaDaoTao" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="TCLyThuyet">TC Lý Thuyết</label>
                                        <input type="text" name="TCLyThuyet" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="TCThucHanh">TC Thực Hành</label>
                                        <input type="text" name="TCThucHanh" class="form-control" required>
                                    </div>
                                    <!-- Thêm các trường khác tương ứng -->
                                    <button type="submit" class="btn btn-primary">Thêm Môn học</button>
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
