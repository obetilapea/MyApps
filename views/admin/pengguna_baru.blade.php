@extends('layouts.admin_layout')
@section('content')

<div class="page-header">
	<h3>Tambah Pengguna</h3>
</div> 

@if(Session::has('message'))
	<div class="alert {{Session::get('alert-class','alert-info')}}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<i class="fa fa-info-circle"></i> {{Session::get('message')}}
	</div>
@endif

<div style="margin-left: -30px;"> 
{!!Form::open(['url'=>'/register','class'=>'form-horizontal','id'=>'form_tambah_pengguna'])!!}
	<div class="form-group">
		{!!Form::label('bidker','Bidang Kerja',['class'=>'col-sm-2 control-label'])!!}
		<div class="col-sm-4">
			{!!Form::select('bidker',[''=>'Pilih Bidang Kerja','IKS'=>'Informasi Komunikasi dan Statistik','AIP'=>'Aplikasi Informatika dan Persandian'],null,array('class'=>'form-control'))!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('nip','NIP',['class'=>'col-sm-2 control-label'])!!}
		<div class="col-sm-3">
			{!!Form::text('nip','',['class'=>'form-control','placeholder'=>'Nomor Induk Pegawai'])!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('nama','Nama',['class'=>'col-sm-2 control-label'])!!}
		<div class="col-sm-3">
			{!!Form::text('nama','',['class'=>'form-control','placeholder'=>'Nama Lengkap'])!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('jk','Jenis Kelamin',['class'=>'col-sm-2 control-label'])!!}
		<div class="col-sm-3" style="bottom: -5px;">
			{!!Form::radio('jk','laki-laki')!!} Laki-laki
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			{!!Form::radio('jk','perempuan')!!} Perempuan
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('no_kontak','Nomor Kontak',['class'=>'col-sm-2 control-label'])!!}
		<div class="col-sm-3"">
			{!!Form::text('no_kontak','',['class'=>'form-control','placeholder'=>'Nomor Kontak'])!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('hak_akses','Hak Akses',['class'=>'col-sm-2 control-label'])!!}
		<div class="col-sm-3">
			{!!Form::select('hak_akses',[''=>'Pilih Hak Akses','kadis'=>'Kepala Dinas','bendahara_barang'=>'Bendahara Barang','bidker'=>'Bidang Kerja','admin'=>'Admin'],null,array('class'=>'form-control'))!!}
		</div>
	</div>

	<div class="form-group">
		{!!Form::label('email','E-mail',['class'=>'col-sm-2 control-label'])!!}
		<div class="col-sm-3">
			{!!Form::text('email','',['class'=>'form-control','placeholder'=>'E-mail'])!!}
		</div>
	</div>
	<br>
	<div class="form-group">
		<div style="margin-right: -85px";>
			{!!Form::submit('Simpan',['class'=>'btn btn-primary col-sm-1 col-sm-offset-2'])!!}
			{!!Form::close()!!}
		</div>
	</div>
</div>
@stop