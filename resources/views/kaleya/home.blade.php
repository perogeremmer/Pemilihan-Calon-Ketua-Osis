@extends('kaleya/layouts/app')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @include('kaleya.layouts.pageHead')
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>

                  <p>Jumlah reviewer</p>
              </div>
              <div class="icon">
                  <i class="ion ion-chatbox"></i>
              </div>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px"></sup></h3>

              <p>Jumlah Pesan</p>
          </div>
          <div class="icon">
              <i class="ion ion-email"></i>
          </div>
      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>44</h3>

          <p>Jumlah Kunjungan</p>
      </div>
      <div class="icon">
          <i class="ion ion-person-stalker"></i>
      </div>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-red">
    <div class="inner">
      <h3>?</h3>

      <p>Jumlah Kunjungan Unik</p>
  </div>
  <div class="icon">
      <i class="ion ion-person"></i>
  </div>
</div>
</div>
<!-- ./col -->
</div>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Kaleya</h3>
    </div>
    <div class="box-body">
        Daftarkan Acaramu di Kaleya !!
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        Kaleya
    </div>
    <!-- /.box-footer-->
</div>
<!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection