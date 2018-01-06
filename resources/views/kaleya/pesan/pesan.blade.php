@extends('kaleya/layouts/app')
@section('main-content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Mailbox
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-3">
				<button type="button" class="btn btn-primary btn-block margin-bottom" data-toggle="modal" data-target="#modalCompose">Balas</button>
					<!-- /. box -->
					<!-- /.box -->
				</div>
				<!-- /.col -->
				<!-- /.box-header -->
				@foreach($modalpesan as $pesans)
				<div class="col-md-12">
					<input type="hidden" id="idPenerima" value="{{ $pesans->penerima_id }}" />
					<input type="hidden" id="idPengirim" value="{{ $pesans->pengirim_id }}" />
					<input type="hidden" id="idAcara" value="{{ $pesans->acara_id }}">
					<input type="hidden" id="kode" value="{{ $pesans->kode }}" />

					@if($pesans->pengirim_id != \Illuminate\Support\Facades\Session::get('id'))
					<div class="box box-primary">
						@else
						<div class="box box-primary" style="background-color: #5e5e55">
							@endif

							<!-- /.box-header -->
							<div class="box-body no-padding">
								<div class="mailbox-read-info">
									@foreach(\App\modelUser::where('id',$pesans->pengirim_id)->get() as $users)
									@if($pesans->pengirim_id != \Illuminate\Support\Facades\Session::get('id'))
									<input type="hidden" id="namaUser" value="{{ $users->nama }}" />
										@foreach(\App\modelTipe::where('id',$users->tipe)->get() as $tipe)
									<h5>{{ $users->nama }} ({{ $tipe->nama }})
										@endforeach
										@else
										<h5 style="color: white">You <font style="font-size: 12px;">({{ $users->nama }})</font>
											@endif
											@endforeach
											<span class="mailbox-read-time pull-right" style="color: white">{{ \Carbon\Carbon::createFromTimestamp(strtotime($pesans->created_at))->diffForHumans() }}</span></h5>
										</div>
										<!-- /.mailbox-read-info -->
										<!-- /.mailbox-controls -->
										@if($pesans->pengirim_id != \Illuminate\Support\Facades\Session::get('id'))
										<div class="mailbox-read-message">
											<p>{{ $pesans->pesan }}</p>
											{{--<p>Thanks,<br>Jane</p>--}}
										</div>
										@else
										<div class="mailbox-read-message">
											<p style="color: white;">{{ $pesans->pesan }}</p>
											{{--<p>Thanks,<br>Jane</p>--}}
										</div>
										@endif

										<!-- /.mailbox-read-message -->
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box-body -->
							</div>
							@endforeach


						</section>
						<div class="modal fade" id="modalCompose">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Kirim Pesan</h4>
									</div>
									<div class="modal-body">
										<form role="form" class="form-horizontal" action="/messageReply" method="post" enctype="multipart/form-data">

											<div class="form-group">
												<label class="col-sm-2" for="inputTo">Kepada</label>
												<input type="hidden" id="modal_idacara" name="idAcara" class="form-control" value="">
												<input type="hidden" id="modal_idpenerima" name="idPenerima" class="form-control" value="">
												<input type="hidden" id="modal_kode" name="kode" class="form-control" value="">

												<div class="col-sm-10"><input disabled type="text" class="form-control" id="modal_nama" placeholder="comma separated list of recipients" value=""></div>

											</div>
											<div class="form-group">
												<label class="col-sm-12" for="inputBody">Pesan</label>
												<div class="col-sm-12"><textarea name="message" class="form-control" id="inputBody" rows="7" placeholder="Masukkan pesan kamu disini...." required=""></textarea></div>
											</div>
											<div class="form-group">
												<label class="col-sm-12" for="inputBody">Lampiran</label>
												<div class="col-sm-12"><input type="file" class="form-control" id="inputSubject" placeholder="subject" name="lampiran"></div>
											</div>


											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-primary ">Send <i class="fa fa-arrow-circle-right fa-lg"></i></button>
											</div>
										</form>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal compose message -->
						<!-- /.content -->
					</div>
					@endsection
