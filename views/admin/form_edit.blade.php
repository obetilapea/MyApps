<div class="modal fade" id="edit_pengguna" tabindex="-1" role="dialog" aria-labeledby="editPengguna">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Data Pengguna</h4>
			</div>
			<div class="modal-body">
{!!Form::open(['url'=>'/register','class'=>'form-horizontal'])!!}
{!! Form::hidden('id',$pengguna->id,['class'=>'form-control']) !!}

	<div class="form-group">
		{!!Form::label('nip','NIP',['class'=>'col-sm-3 control-label'])!!}
			<div class="col-sm-5">
				{!!Form::text('nip',$pengguna->nip,['class'=>'form-control','placeholder'=>'Nomor Induk Pegawai'])!!}
			</div>
	</div>

	<div class="form-group">
		{!!Form::label('nama','Nama',['class'=>'col-sm-3 control-label'])!!}
			<div class="col-sm-5">
				{!!Form::text('nama',$pengguna->nama,['class'=>'form-control','placeholder'=>'Nama Lengkap'])!!}
			</div>
	</div>

	<br>
	<div class="form-group">
		<div style="margin-right: -60px";>
			{!!Form::submit('Simpan',['class'=>'btn btn-primary col-sm-2 col-sm-offset-3'])!!}
			{!!Form::close()!!}
	</div>
</div>
		</div>
	</div>
</div>		