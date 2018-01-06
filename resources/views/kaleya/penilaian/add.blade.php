@extends('kaleya/layouts/app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('acara/plugins/timepicker/jquery.datetimepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Penilaian
            <small>Tambah Penilaian Calon Ketua OSIS</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        @foreach(\App\modelKandidat::where('id',$data->kandidat_id)->get() as $kandidat)
                        <h3 class="box-title">Halaman Penilaian Calon Ketua OSIS - {{ $kandidat->nama }}</h3>
                        @endforeach
                    </div>

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('penilaian.update', $data->id) }}" method="post">
                        {{ method_field('PUT') }}
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nilai akademik">Nilai Akademik</label>
                                    <input type="number" class="form-control" name="c1" id="nilai akademik" placeholder="input Nilai Akademik" value="{{ $data->c1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="kepemimpinan">Kepemimpinan</label>
                                    <input type="number" class="form-control" name="c2" id="kepemimpinan" placeholder="input Kepemimpinan" value="{{ $data->c2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="keaktifan">Keaktifan</label>
                                    <input type="number" class="form-control" name="c3" id="keaktifan" placeholder="input Keaktifan" value="{{ $data->c3 }}">
                                </div>
                                <div class="form-group">
                                    <label for="kedisiplinan">Kedisiplinan</label>
                                    <input type="number" class="form-control" name="c4" id="kedisiplinan" placeholder="input Kedisiplinan" value="{{ $data->c4 }}">
                                </div>
                                <div class="form-group">
                                    <label for="visimisi">Visi Misi</label>
                                    <input type="number" class="form-control" name="c5" id="visimisi" placeholder="input Visi Misi" value="{{ $data->c5 }}">
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        <!-- /.box-body -->
                        </div>
                    </form>
                <!-- /.col-->
            </div>
        </div>
        <!-- ./row -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{ asset('acara/plugins/timepicker/jquery.datetimepicker.full.js') }}"></script>
<script src="{{ asset('acara/plugins/timepicker/jquery.datetimepicker.full.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
    // $(function() {
    //     $( ".datepicker" ).datepicker({
    //         todayHighlight: true,
    //         changeMonth: true,
    //         changeYear: true
    //     });
    // });
    $( ".datetimepicker" ).datetimepicker();
</script>
@endsection