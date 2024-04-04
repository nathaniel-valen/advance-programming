@extends('layouts.master')

@section('ExtraJS')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('#table-kk').DataTable();
    </script>
    <script type="text/javascript">
        $('.del-button').on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = this.href
                }
            })
        })
    </script>
    <script src="{{asset('plugins/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('web-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Kartu Keluarga</h1>
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
                            <th>Nomor KK</th>
                            <th>Nama Kepala Keluarga</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kks as $kk)
                            <tr>
                                <td>{{$kk->no}}</td>
                                <td>{{$kk->KepalaKeluarga}}</td>
                                <td>
                                    <a href="{{route('kk-edit', ['kartuKeluarga' => $kk->no])}}" class="btn btn-warning"
                                       role="button"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('kk-delete', ['kartuKeluarga' => $kk->no])}}"
                                       class="btn btn-danger del-button" role="button"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                        <a class="btn btn-success btn-sm" href="{{route('kk-create')}}">Tambah Kartu Keluarga</a>
                    </table>

                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

@endsection
