 <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017-{{Carbon\carbon::now()->year}} <a href="#">KALEYA</a>.</strong> All rights
    reserved.
</footer>

<!-- jQuery 3 -->
<script src="{{ asset('acara/bower_components/jquery/dist/jquery.min.js') }} "></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('acara/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script type="text/javascript">
						$(document).ready(function(){

							var idPenerima = $('#idPenerima').val();
							var idPengirim = $('#idPengirim').val();
							var idAcara = $('#idAcara').val();
							var kode = $('#kode').val();
							var namaUser = $('#namaUser').val();
							console.log(idPenerima);
							console.log(idPengirim);
							console.log(idAcara);
							console.log(kode);
							console.log(namaUser);


							$('#modal_idacara').val(idAcara);
							$('#modal_idpenerima').val(idPenerima);
							$('#modal_kode').val(kode);
							$('#modal_nama').val(namaUser);
						})
					</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('acara/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('acara/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('acara/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('acara/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('acara/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('acara/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('acara/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('acara/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('acara/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('acara/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('acara/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('acara/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('acara/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('acara/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('acara/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('acara/dist/js/demo.js') }}"></script>

@section('footerSection')
@show