<div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labeledby="hapusPengguna"">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="hapusPengguna">Hapus <span id="nama"></span> dari data pengguna &nbsp;<i class="zmdi zmdi-help-outline zmdi-hc-lg"></i></h4>
			</div>
			<div class="modal-body">
				{!!Form::open(['url'=>'hapusPengguna'])!!}
				{!!Form::hidden('id','',['id'=>'id'])!!}
				{!!Form::button('Tidak',['class'=>'btn btn-default','id'=>'tutup'])!!}
				{!!Form::submit('Ya',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
			</div>
		</div>
	</div>
</div>