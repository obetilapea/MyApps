<div class="modal fade" id="tambah_pengguna" tabindex="-2" role="dialog" aria-labeledby="tambahPengguna">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<legend><h4 class="modal-title" id="tambahPengguna" align="center"><i class="zmdi zmdi-accounts-add zmdi-hc-lg"></i>&nbsp; Tambah Pengguna</h4></legend>
			</div>
			<div class="modal-body">
			{!!Form::open(['url'=>'register','class'=>'form-horizontal','id'=>'form_tambah_pengguna'])!!}
					<div class="form-group">
						{!!Form::label('bidker','Bidang Kerja',['class'=>'col-sm-3 control-label'])!!}
						<div class="col-sm-7">
							{!!Form::select('bidker',[''=>'Pilih Bidang Kerja','IKS'=>'Informasi Komunikasi dan Statistik','AIP'=>'Aplikasi Informatika dan Persandian'],null,array('class'=>'form-control'))!!}
						</div>
					</div>

					<div class="form-group">
						{!!Form::label('nip','NIP',['class'=>'col-sm-3 control-label'])!!}
						<div class="col-sm-5">
							{!!Form::text('nip','',['class'=>'form-control','placeholder'=>'Nomor Induk Pegawai'])!!}
						</div>
					</div>

					<div class="form-group">
						{!!Form::label('nama','Nama',['class'=>'col-sm-3 control-label'])!!}
						<div class="col-sm-5">
							{!!Form::text('nama','',['class'=>'form-control','placeholder'=>'Nama Lengkap'])!!}
						</div>
					</div>

					<div class="form-group">
						{!!Form::label('jk','Jenis Kelamin',['class'=>'col-sm-3 control-label'])!!}

						<div class="col-md-5" style="margin-right: -50px;">
							<div class="radio radio-primary">
								<label>
									{!!Form::radio('jk','laki-laki')!!} Laki-laki
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									{!!Form::radio('jk','perempuan')!!} Perempuan
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						{!!Form::label('no_kontak','Nomor Kontak',['class'=>'col-sm-3 control-label'])!!}
						<div class="col-sm-5"">
							{!!Form::text('no_kontak','',['class'=>'form-control','placeholder'=>'Nomor Kontak'])!!}
						</div>
					</div>

					<div class="form-group">
						{!!Form::label('hak_akses','Hak Akses',['class'=>'col-sm-3 control-label'])!!}
						<div class="col-sm-5">
							{!!Form::select('hak_akses',[''=>'Pilih Hak Akses','kadis'=>'Kepala Dinas','bendahara_barang'=>'Bendahara Barang','bidker'=>'Bidang Kerja','admin'=>'Admin'],null,array('class'=>'form-control'))!!}
						</div>
					</div>

					<div class="form-group">
						{!!Form::label('email','E-mail',['class'=>'col-sm-3 control-label'])!!}
						<div class="col-sm-5">
							{!!Form::text('email','',['class'=>'form-control','placeholder'=>'E-mail'])!!}
						</div>
					</div>
					<br/>
					<div class="form-group">
						<div style="margin-right: -65px";>
							{!!Form::submit('Simpan',['class'=>'btn btn-primary col-sm-2 col-sm-offset-3'])!!}
							{!!Form::close()!!}
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

				