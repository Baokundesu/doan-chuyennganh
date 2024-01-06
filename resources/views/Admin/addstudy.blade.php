@extends('Admin.index')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thêm Chương trình đào tạo</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="{{ route('admin.daotao.create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="MaDaoTao">Mã Đào Tạo</label>
                                        <input type="text" class="form-control" id="MaDaoTao" name="MaDaoTao" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="SoQuyetDinh">Số Quyết Định</label>
                                        <input type="text" class="form-control" id="SoQuyetDinh" name="SoQuyetDinh" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="TinChi">Tín Chỉ</label>
                                        <input type="text" class="form-control" id="TinChi" name="TinChi" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="TCLyThuyet">TC Lý Thuyết</label>
                                        <input type="text" class="form-control" id="TCLyThuyet" name="TCLyThuyet" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="TCThucHanh">TC Thực Hành</label>
                                        <input type="text" class="form-control" id="TCThucHanh" name="TCThucHanh" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm</button>
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
