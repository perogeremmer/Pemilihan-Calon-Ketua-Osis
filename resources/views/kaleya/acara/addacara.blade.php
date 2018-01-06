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
            Tambah Acara
            <small>Tambah Acara Kaleya</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Acara</h3>
                    </div>

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('acara.store') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="judul">Judul Acara</label>
                                    <input type="text" class="form-control" name="judul" id="judul" placeholder="input Judul">
                                </div>
                                <div class="form-group">
                                    <label for="Deskripsi">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi..."></textarea>
                                </div>
                                
                                {{-- <div class="form-group">
                                    <label for="tanggal_mulai">Tanggal Mulai:</label>

                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" name="tanggal_mulai" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berakhir:</label>

                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker" name="tanggal_berakhir" data-date-format="yyyy-mm-dd">
                            </div> --}}
                            <div class="form-group">
                                <label>Tanggal Mulai:</label>
                            </div>
                            <div>
                                <input type="text" class="form-control pull-right datetimepicker" name="tanggal_mulai" data-date-format="yyyy-mm-dd H:i:s">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berakhir:</label>
                            </div>
                            <div>
                                <input type="text" class="form-control pull-right datetimepicker" name="tanggal_berakhir" data-date-format="yyyy-mm-dd H:i:s">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Acara</label>

                                <br>
                                <input id="pac-input" class="controls form-control" name="alamat" type="text"
                                       placeholder="Enter a location">
                                <input  type="hidden" id="lat" name="lat">
                                <input type="hidden" id="long" name="long">
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <small>Open For:</small>
                            <br>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input name="statusSponsor" type="checkbox" value="1"> Sponsor
                                    </label>
                                </div>
                                <br>
                                <div class="checkbox">
                                    <label>
                                        <input name="statusMediaPartner" type="checkbox" value="1"> Media
                                    </label>
                                </div>
                                <br>
                                <div class="checkbox">
                                    <label>
                                        <input name="statusOpenBooth" type="checkbox" value="1"> Booth
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="harga_tiket">Harga Tiket</label>
                                <input type="text" class="form-control" id="harga_tiket" name="harga_tiket" placeholder="input harga">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_tiket">Jumlah Tiket</label>
                                <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket" placeholder="input jumlah">
                            </div>
                            <div class="form-group pull-left">
                                <div class="pull-right">
                                    <label for="foto">Upload Foto</label>
                                    <input type="file" name="foto" id="foto">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button" href="{{ route('acara.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </div>

                        <!-- /.box-body -->

                    </form>

                </div>
                <!-- /.col-->
            </div>
        </div>
        <!-- ./row -->
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