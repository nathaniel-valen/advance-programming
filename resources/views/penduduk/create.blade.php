@extends('layouts.master')

@section('ExtraJS')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    {{--Select2--}}
    <script src="{{asset('plugins/select2/js/select2.js')}}"></script>
    <script>
        $("#kartu_keluarga_no").select2({
        });
    </script>
@endsection

@section('Select2 CSS')
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.css/select2-bootstrap4.min.css')}}">
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
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all(':message') as $error)
                                {{implode('', [$error])}} <br/>
                            @endforeach
                        </div>
                    @endif
                    <form method="post" action="{{route('pdk-store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK"
                                       autofocus maxlength="16">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                                        autofocus maxlength="100">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"
                                        autofocus maxlength="100">
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                       placeholder="Tanggal Lahir"  autofocus maxlength="100">
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama"
                                        autofocus maxlength="100">
                            </div>
                            <div class="form-group">
                                <label for="gol_darah">Golongan Darah</label>
                                <input type="text" class="form-control" id="gol_darah" name="gol_darah"
                                       placeholder="Golongan Darah"  autofocus maxlength="100">
                            </div>
                            <div class="form-group">
                                <label>Pilih No Kartu Keluarga</label>
                                <select class="form-group py-3 w-100" id="kartu_keluarga_no" name="kartu_keluarga_nomor">
                                    @foreach($kks as $kk)
                                        <option>{{$kk->no}} - {{$kk->KepalaKeluarga}}</option>
                                    @endforeach
                                </select>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="noKK">No. Kartu Keluarga</label>--}}
{{--                                <input type="text" class="form-control" id="kartu_keluarga_no" name="kartu_keluarga_no"--}}
{{--                                       placeholder="No. Kartu Keluarga" required autofocus maxlength="100">--}}
{{--                            </div>--}}
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>



@endsection
