@extends('Home.index')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách điểm</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Mã NK</th>
                                        <th>MSSV</th>
                                        <th>Mã Môn Học</th>
                                        <th>Điểm TK</th>
                                        <th>Mã GV</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($scores as $score)
                                    @if(auth()->user()->role == 'student' && auth()->user()->student->MSSV == $score->MSSV)
                                    <tr>
                                        <td>{{ $score->MaNK }}</td>
                                        <td>{{ $score->MSSV }}</td>
                                        <td>{{ $score->MaMonHoc }}</td>
                                        <td>{{ $score->DiemTK }}</td>
                                        <td>{{ $score->MaGV }}</td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã NK</th>
                                        <th>MSSV</th>
                                        <th>Mã Môn Học</th>
                                        <th>Điểm TK</th>
                                        <th>Mã GV</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
