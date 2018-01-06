@extends('kaleya/layouts/app')
@section('headSection')
<link rel="stylesheet" href="{{asset('acara/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @include('kaleya.layouts.pageHead')
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Calon Ketua OSIS SMPN 29 Jakarta</h3>
                @php $penilaian = \App\modelPenilaian::all() @endphp
                @if(count($penilaian) > 2)
                    @foreach(\App\modelPenilaian::all() as $cek)
                        @if($cek->total_nilai < 0.1)
                            <a class='col-lg-offset-5 btn btn-default' href="{{ route('penilaian.index') }}">Hitung Penilaian</a>
                        @endif
                    @endforeach
                @endif
                </div>
                <div class="box-body">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Nilai Akademik</th>
                                        <th>Kepemimpinan</th>
                                        <th>Keaktifan</th>
                                        <th>Kedisiplinan</th>
                                        <th>Visi Misi</th>
                                        <th>Total Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i = 1; @endphp
                                @foreach($data as $dataz)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $dataz->nama }}</td>
                                        @foreach(\App\modelPenilaian::where('kandidat_id',$dataz->id)->get() as $nilai)
                                        <td>{{ $nilai->c1 }}</td>
                                        <td>{{ $nilai->c2 }}</td>
                                        <td>{{ $nilai->c3 }}</td>
                                        <td>{{ $nilai->c4 }}</td>
                                        <td>{{ $nilai->c5 }}</td>
                                        <td>{{ $nilai->total_nilai }}</td>
                                        @endforeach
                                        <td>
                                            @foreach(\App\modelPenilaian::where('kandidat_id',$dataz->id)->get() as $nilai)
                                            <form action="{{ route('kandidat.destroy', $nilai->id) }}">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <a class="btn btn-md btn-primary" href="{{ route('penilaian.edit', $nilai->id) }}">Penilaian</a>
                                                <button class="btn btn-md btn-danger">Hapus</button>
                                            </form>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Sistem Pendukung Keputusan Pemilihan Calon Ketua OSIS SMPN 29 Jakarta dengan Metode SAW
                        <hr>
                        Bobot Penilaian
                        <br>
                        1. Nilai Akademik =  15%
                        <br>
                        2. Kepemimpinan = 20%
                        <br>
                        3. Keaktifan = 25%
                        <br>
                        4. Kedisiplinan = 20%
                        <br>
                        5. Visi Misi = 20%
                        <br>

                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
    </section>
</div>

        @endsection
        @section('footerSection')
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('acara/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
        </script>
        @endsection

