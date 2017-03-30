<div class="modal fade" id="edit_pengguna" tabindex="-1" role="dialog" aria-labeledby="editPengguna">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<legend><h4 class="modal-title" id="editPengguna" align="center"><i class="zmdi zmdi-border-color zmdi-hc-lg"></i>&nbsp; Edit Data Pengguna</h4></legend>
			</div>
			<div class="modal-body">
				{!!Form::open(['url'=>'updatePengguna','class'=>'form-horizontal'])!!}
				{!! Form::hidden('id','',['class'=>'form-control','id'=>'id']) !!}
				<div class="form-group">
					{!!Form::label('bidker','Bidang Kerja',['class'=>'col-sm-3 control-label'])!!}
					<div class="col-sm-7">
						{!!Form::select('bidker',[''=>'Pilih Bidang Kerja','IKS'=>'Informasi Komunikasi dan Statistik','AIP'=>'Aplikasi Informatika dan Persandian'],null,array('class'=>'form-control','id'=>'bidker','disabled'=>'disabled'))!!}
					</div>
				</div>

				<div class="form-group">
					{!!Form::label('nip','NIP',['class'=>'col-sm-3 control-label'])!!}
					<div class="col-sm-5">
						{!!Form::text('nip','',['class'=>'form-control','placeholder'=>'Nomor Induk Pegawai','id'=>'nip','disabled'=>'disabled'])!!}
					</div>
				</div>

				<div class="form-group">
					{!!Form::label('nama','Nama',['class'=>'col-sm-3 control-label'])!!}
					<div class="col-sm-5">
						{!!Form::text('nama','',['class'=>'form-control','placeholder'=>'Nama Lengkap','id'=>'nama_lengkap','disabled'=>'disabled'])!!}
					</div>
				</div>

				<div class="form-group">
					{!!Form::label('no_kontak','Nomor Kontak',['class'=>'col-sm-3 control-label'])!!}
					<div class="col-sm-5"">
						{!!Form::text('no_kontak','',['class'=>'form-control','placeholder'=>'Nomor Kontak','id'=>'no_kontak'])!!}
					</div>
				</div>

				<div class="form-group">
					{!!Form::label('hak_akses','Hak Akses',['class'=>'col-sm-3 control-label'])!!}
					<div class="col-sm-5">
						{!!Form::select('hak_akses',[''=>'Pilih Hak Akses','kadis'=>'Kepala Dinas','bendahara_barang'=>'Bendahara Barang','bidker'=>'Bidang Kerja','admin'=>'Admin'],null,array('class'=>'form-control','id'=>'hak_akses'))!!}
					</div>
				</div>

				<div class="form-group">
					{!!Form::label('email','E-mail',['class'=>'col-sm-3 control-label'])!!}
					<div class="col-sm-5">
						{!!Form::text('email','',['class'=>'form-control','placeholder'=>'E-mail','id'=>'email'])!!}
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="form-group">
					<div style="margin-right: -30px;">
						{!!Form::submit('Simpan',['class'=>'btn btn-primary col-sm-2 col-sm-offset-3'])!!}
						{!!Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		