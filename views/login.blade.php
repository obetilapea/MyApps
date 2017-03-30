@extends('template/t_index')
@section('content')

<div class="container">
<p></p>
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-user"></span> Login
			@if(Session::has('message'))
				<span class="label label-danger">{{Session::get('message')}}</span>
			@endif
		</div>

		<div class="panel-body">
			{!!Form::open(['url'=>'/login'])!!}
			Username : 
			@if($errors->has())
				<br/>
				<span class="label label-danger">{!!$errors->first('username')!!}</span>
				<p></p>
			@endif
			{!!Form::text('username','',['placeholder'=>'Username','class'=>'form-control'])!!}

			Password :
			@if($errors->has())
				<br/>
				<span class="label label-danger">{!!$errors->first('password')!!}</span>
				<p></p>
			@endif
			{!!Form::password('password',array('placeholder'=>'Password','class'=>'form-control'))!!}
			<p></p>

			{!!Form::submit('Login',['class'=>'btn btn-danger'])!!}
			<a href="{{'register'}}" class="btn btn-warning">Register</a>
			{!!Form::close()!!}
		</div>
	</div>
</div>

@stop