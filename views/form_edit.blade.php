@extends('template/t_index')
@section('content')

<div class="container">
	@if(Session::has('message'))
		<span class="label label-success">{{Session::get('message')}}</span>
	@endif
<p></p>
<div class="panel panel-default">
	<div class="panel-heading">Ubah Data</div>
	<div class="panel-body">
		{!! Form::open(['url'=>'/prosesedit']) !!}
		{!! Form::hidden('id',$siswa->id,['class'=>'form-control']) !!}

		Nama :
		{!! Form::text('nama',$siswa->nama,['placeholder'=>'Nama','class'=>'form-control']) !!}
		Alamat :
		{!! Form::text('alamat',$siswa->alamat,['placeholder'=>'Alamat','class'=>'form-control']) !!}
		Kelas :
		{!! Form::text('kelas',$siswa->kelas,['placeholder'=>'Kelas','class'=>'form-control']) !!}
		<p></p>

		{!! Form::submit('Tambah Data',['class'=>'btn btn-danger']) !!}
		{!! Form::close() !!}
	@stop	
	</div>
</div>
</div>
