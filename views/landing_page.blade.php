@extends('layouts.landing')
@section('content')

@if(Session::has('message'))
	<div class="alert {{Session::get('alert-class','alert-info')}}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<i class="fa fa-info-circle"></i> {{Session::get('pesan')}}
	</div>
@endif

<div class="col-md-8 col-md-offset-3" style="bottom: 325px; right: -75px;">
	{!!Form::open(['url'=>'/login_pengguna', 'class'=>'form-inline'])!!}
		<div class="form-group">
			{!!Form::text('username','',['placeholder'=>'Username','class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!!Form::password('password',array('placeholder'=>'Password','class'=>'form-control'))!!}
		</div>
		<div class="form-group">
			{!!Form::submit('LogIn',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
		</div>
</div>
<div class="col-md-8 col-md-offset-3" style="bottom: 320px; right: -75px;">
	<a href="{{'lupa_password'}}" style="color: white;"><u>Lupa password...?</u></a>
</div>
<div class="col-md-9 col-md-offset-3" style="bottom: 550px; right: -75px;">							<!--SIMASET-->
	<img src="assets/img/picture_head.png" alt="simaset_picture" style="height: 75%; width: 50%;">
</div>
<div class="col-md-9 col-md-offset-3" style="bottom: 300px; right: -315px;">						<!--Logo Kominfo-->
	<img src="assets/img/kominfo.png" alt="kominfo_picture" style="height: 5%; width: 5%;">
</div>
<div class="col-md-9 col-md-offset-3" style="bottom: 350px; right: -240px;">						<!--Logo KBB-->
	<img src="assets/img/kbb.png" alt="kbb_picture" style="height: 6%; width: 6%;">
</div>
<div class="col-md-8 col-md-offset-2" style="bottom: 330px; left: -25px;">			<!--Footer-->
	<div style="color: white; " align="center">
		<p>Sistem Informasi Manajemen Aset Diskominfo Bandung Barat</p>
		<p>&copy; 2017</p>
	</div>
</div>

@stop