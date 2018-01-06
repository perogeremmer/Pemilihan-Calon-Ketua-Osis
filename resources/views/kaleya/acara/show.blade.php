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
                <h3 class="box-title">Acara Kaleya</h3>
                <a class='col-lg-offset-5 btn btn-success' href="{{ route('acara.create') }}">Tambah Acara</a>
                </div>
                <div class="box-body">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Table With Full Features</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Judul</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Jumlah Tiket</th>
                                        <th>Harga Tiket</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($acaras as $acara)
                                    <tr>
                                        <td>{{$loop -> index +1}}</td>
                                        <td>{{$acara ->judul}}
                                        </td>
                                        <td>{{$acara ->tanggal_mulai}}</td>
                                        <td>{{$acara ->tanggal_berakhir}}</td>
                                        <td>{{$acara ->jumlah_tiket}}</td>
                                        <td>{{$acara ->harga_tiket}}</td>
                                            <td><a href="{{route('acara.edit',$acara ->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                            <td>
                                                <form method="post" id="delete-form-{{$acara->id}}" action="{{route('acara.destroy',$acara ->id)}}" style="display: none">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a href="" onclick="
                                                if(confirm('Are you sure?'))
                                                {
                                                    event.preventDefault();document.getElementById('delete-form-{{$acara->id}}').submit();
                                                }
                                                else{
                                                    event.preventDefault();
                                                }"><span class="glyphicon glyphicon-floppy-remove"></span></a>
                                            </td>
                                            <td><img src="{{ url('uploads/foto/'.$acara->foto) }}" style="width: 120px; height: 120px;"> </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Judul</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Jumlah Tiket</th>
                                            <th>Harga Tiket</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>foto</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Footer
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
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

