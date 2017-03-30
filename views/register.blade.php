@extends('template/t_index')
@section('content')

<div class="container">
	<p></p>
	<div class="panel panel-default">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-user"></span> Register
			@if(Session::has('message'))
				<span class="label label-success">{{Session::get('message')}}</span>
			@endif
		</div>

		<div class="panel-body">
			{!!Form::open(['url'=>'/tambahlogin'])!!}
			Username :
			@if($errors->has())
			<br/>
				<span class="label label-danger">{{!!$errors->first('username')!!}}</span>
			@endif
			{!!Form::text('username','',['placeholder'=>'Username','class'=>'form-control'])!!}

			Password :
			@if($errors->has())
			<br/>
				<span class="label label-danger">{{!!$errors->first('password')!!}}</span>
			@endif
			{!!Form::password('password',array('placeholder'=>'Password','class'=>'form-control'))!!}			
		<p></p>
		{!!Form::submit('Register',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
		</div>
	</div>
</div>
@stop