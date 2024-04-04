@extends('layouts.master')

@section('ExtraJS')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('#table-kk').DataTable();
    </script>
@endsection

@section('web-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Penduduk</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <table id="table-kk" class="table table-striped">
                        <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama Kepala Keluarga</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Golongan Darah</th>
                            <th>Nomor Kartu Keluarga</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($penduduk as $p)
                            <tr>
                                <td>{{$p->nik}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->alamat}}</td>
                                <td>{{$p->tgl_lahir}}</td>
                                <td>{{$p->agama}}</td>
                                <td>{{$p->gol_darah}}</td>
                                <td>{{$p->kartu_keluarga_nomor}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                        <a class="btn btn-primary" href="{{route('pdk-create')}}">Tambah Penduduk</a>
                    </table>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

@endsection
