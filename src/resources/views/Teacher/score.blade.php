@extends('Home.index')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Nhập Điểm</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('diem.create') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="MSSV">MSSV</label>
                                        <select name="MSSV" class="form-control">
                                            @foreach($students as $student)
                                                <option value="{{ $student->MSSV }}">{{ $student->MSSV }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="MaMonHoc">Mã Môn Học</label>
                                        <select name="MaMonHoc" class="form-control">
                                            @foreach($subjects as $subject)
                                                <option value="{{ $subject->MaMonHoc }}">{{ $subject->MaMonHoc }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="DiemTK">Điểm Tổng Kết</label>
                                        <input type="number" name="DiemTK" class="form-control" step="0.1" min="0" max="10" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="MaNK">Niên Khóa</label>
                                        <select name="MaNK" class="form-control">
                                            @foreach($nienkhoas as $nienkhoa)
                                                <option value="{{ $nienkhoa->MaNK }}">{{ $nienkhoa->NamHoc }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Nhập Điểm</button>
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
