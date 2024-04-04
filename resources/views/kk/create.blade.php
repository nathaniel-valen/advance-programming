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

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all(':message') as $error)
                                {{implode('', [$error])}} <br/>
                            @endforeach
                        </div>
                    @endif
                        <form method="post" action="{{route('kk-store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="noKK">Nomor Kartu Keluarga</label>
                                    <input type="text" class="form-control" name="no" id="no"
                                           placeholder="Contoh : 3215069871627772" autofocus maxlength="16">
                                </div>
                                <div class="form-group">
                                    <label for="kepala">Nama Kepala Keluarga</label>
                                    <input type="text" class="form-control" id="KepalaKeluarga" name="KepalaKeluarga"
                                           placeholder="Contoh : Nathaniel Valentino Robert" autofocus maxlength="100">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

@endsection
