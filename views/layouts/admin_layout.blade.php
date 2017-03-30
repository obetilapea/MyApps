<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SIMASET|DISKOMINFO</title>

		{!!Html::style('assets/bootstrap/css/bootstrap.min.css')!!}
		{!!Html::style('assets/font-awesome-4.7.0/css/font-awesome.min.css')!!}
		{!!Html::style('assets/google_material_icon/css/material-design-iconic-font.min.css')!!}
		{!!Html::style('assets/custom_css/sidebar-collapse.css')!!}
		{!!Html::style('assets/custom_css/paper.min.css')!!}
		{!!Html::style('assets/data_tables/media/css/jquery.dataTables.css')!!}
		{!!Html::style('assets/data_tables/media/css/dataTables.bootstrap.css')!!}
		
		{!!Html::script('assets/jquery/jquery-3.1.1.min.js')!!}

		<style type="text/css" media="screen">
			body{background-color: #E8E8E8;}
			.navbar-default{
				background-color: #FFFFFF;
			}

			input:focus::-webkit-input-placeholder{
				opacity: 0;
			}
			.dropdown-menu > li > a:hover{
				background-color: #33CCFF;
				background-image: none;
			}
		</style>

	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#user-navbar">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" style="margin-top: -8px;">
						{!! Html::image('assets/img/brand_navbar.png','Brand',array('width'=>150,'height'=>35)) !!}
					</a>
				</div> <!--navbar header-->

				<div class="collapse navbar-collapse" id="user-navbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><i class="fa fa-flag-o fa-lg"></i></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->nama}}<span class="caret"></span></a>

							<ul class="dropdown-menu">
								<li><a href="#"><i class="fa fa-user fa-lg"></i>&nbsp;&nbsp;&nbsp;Akun Saya</a></li>
								<li class="divider"></li>
								<li><a href="{{URL('logout')}}"><i class="fa fa-sign-out fa-lg"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>
							</ul>
						</li>
					</ul>
				</div> <!--navbar collapse-->
			</div> <!--container fluid-->
		</nav>

		<aside class="sidebar-left-collapse">
			<div class="sidebar-links">
				<div>
					<a href="{{URL('admin')}}">
						<i class="zmdi zmdi-accounts zmdi-hc-2x"></i>&nbsp; Pengguna Sistem
					</a>
				</div>
			</div>
			<div style="margin-left: 10px; position: relative; bottom: -400px;">
				<p style="color: white; font-size: 12px;">
					<b style="color: yellow;">Sistem Informasi Manajemen Aset</b>
					Diskominfo Bandung Barat<br/>
					&copy; 2017
				</p>
			</div>
		</aside>

		<div class="col-md-10 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading" align="right">Pengguna Sistem Informasi Manajemen Aset</div>
				<div class="panel-body">
					@yield('content')
				</div>
			</div>
		</div>

		{!!Html::script('assets/bootstrap/js/jquery.min.js')!!}
		{!!Html::script('assets/bootstrap/js/bootstrap.min.js')!!}
		{!!Html::script('assets/bootstrap-validator/dist/js/bootstrapValidator.min.js')!!}
		{!!Html::script('assets/data_tables/media/js/jquery.dataTables.js')!!}
		{!!Html::script('assets/data_tables/media/js/dataTables.bootstrap.js')!!}

		<script type="text/javascript">
			$(document).ready(function(){
				$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
				});

				$('tbody').delegate('.editPengguna','click',function(){
					var value = $(this).data('id');
					$.ajax({
						type : 'GET',
						url : 'getPengguna/'+value,
						dataType: 'JSON',
						success:function(data){
							$('#id').val(data.id);
							$('#nip').val(data.nip);
							$('#bidker').val(data.bidang_kerja);
							$('#nama_lengkap').val(data.nama);
							$('#no_kontak').val(data.no_kontak);
							$('#hak_akses').val(data.hak_akses);
							$('#email').val(data.email);
							$('#edit_pengguna').modal('show');
						}
					});
				});

				$('tbody').delegate('.hapusPengguna','click',function(){
					var value = $(this).data('id');
					$.ajax({
						type : 'GET',
						url : 'getPengguna/'+value,
						dataType: 'JSON',
						success:function(data){
							$('#id').val(data.id);
							$('#nama').text(data.nama);
							$('#konfirmasi_hapus').modal('show');
						}
					});
				});

				$('#tutup').on('click',function(e){
					e.preventDefault();
					$('#konfirmasi_hapus').modal('toggle');
					return false;
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.data').DataTable();
			});
		</script>

		<script>
			$(function () {

			var links = $('.sidebar-links > div');

			links.on('click', function () {
				links.removeClass('selected');
				$(this).addClass('selected');
				});
			});

		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#form_tambah_pengguna').bootstrapValidator({
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					fields: {
						bidker: {
							validators: {
								notEmpty: {
									message: 'Pilih bidang kerja pengguna'
								}
							}
						},
						nip: {
							validators: {
								stringLength: {
									min: 2,
									message: 'Jumlah karakter NIP tidak sesuai'
								},
								notEmpty: {
									message: 'Ketikkan NIP pengguna'
								}
							}
						},
						nama: {
							validators: {
								stringLength: {
									min: 2,
								},
								notEmpty: {
									message: 'Ketikkan nama lengkap pengguna'
								}
							}
						},
						jk: {
							validators: {
								notEmpty: {
									message: 'Pilih jenis kelamin pengguna'
								}
							}
						},
						no_kontak: {
							validators: {
								stringLength: {
									min: 2,
								},
								notEmpty: {
									message: 'Ketikkan nomor kontak pengguna'
								}
							}
						},
						hak_akses: {
							validators: {
								notEmpty: {
									message: 'Pilih hak akses pengguna'
								}
							}
						},
						email: {
							validators: {
								notEmpty: {
									message: 'Ketikkan e-mail pengguna'
								},
								emailAddress: {
									message: 'E-mail tidak valid'
								}
							}
						}
					}
				});
			});
		</script>
	</body>
</html>