@extends('admin.index')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quản lý Chương trình đào tạo</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('admin.daotao.create') }}" class="btn btn-primary mb-2">Thêm Chương trình đào tạo</a>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Mã Đào Tạo</th>
                                            <th>Số Quyết Định</th>
                                            <th>Tín Chỉ</th>
                                            <th>TC Lý Thuyết</th>
                                            <th>TC Thực Hành</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($daotaoList as $daotao)
                                            <tr>
                                                <td>{{ $daotao->MaDaoTao }}</td>
                                                <td>{{ $daotao->SoQuyetDinh }}</td>
                                                <td>{{ $daotao->TinChi }}</td>
                                                <td>{{ $daotao->TCLyThuyet }}</td>
                                                <td>{{ $daotao->TCThucHanh }}</td>
                                                <td>
                                                    <a href="{{ route('admin.daotao.edit', $daotao->MaDaoTao) }}" class="btn btn-warning btn-sm">Sửa</a>
                                                    <a href="{{ route('admin.daotao.delete', $daotao->MaDaoTao) }}" class="btn btn-danger btn-sm">Xóa</a>
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
