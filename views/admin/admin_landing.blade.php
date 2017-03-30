@extends('layouts.admin_layout')
@section('content')

@if(Session::has('message'))
	<div class="alert alert-dismissible {{Session::get('alert-class','alert-success')}}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<i class="fa fa-info-circle fa-lg"></i>&nbsp; <strong>{{Session::get('message')}}</strong>
	</div>
@endif

<button type="button" class="btn btn-raised btn-primary" data-toggle="modal" data-target="#tambah_pengguna">
	<i class="fa fa-plus-circle"></i>&nbsp;Tambah Pengguna
</button>
<br/><br/>

<table class="table table-striped table-bordered data" style="border-radius: 15px 30px 30px 5px;">
	<thead>
		<tr>
			<th>{{"No."}}</th>
			<th>{{"NIP"}}</th>
			<th>{{"Nama"}}</th>
			<th>{{"Bidang Kerja"}}</th>
			<th>{{"Hak Akses"}}</th>
			<th>{{"E-mail"}}</th>
			<th>{{"Operasi"}}</th>
		</tr>
	</thead>
	<?php $no=1; ?>
	<tbody>
	@foreach($pengguna as $data)
		@if($data->id <> Auth::user()->id)
		<tr>
			<td align="center">{{$no++}}</td>
			<td>{{$data->nip}}</td>
			<td>{{$data->nama}}</td>
			<td>{{$data->bidker="IKS" ? "Informasi Komunikasi dan Informatika" : "Aplikasi Informatika dan Persandian"}}</td>
			<td>
				<?php
					switch ($data->hak_akses) {
						case 'bendahara_barang':
							$hak_akses = "Bendahara Barang";
							break;
						case 'bidker':
							$hak_akses = "Bidang Kerja";
							break;
						case 'kadis':
							$hak_akses = "Kepala Dinas";
							break;
						default:
							$hak_akses = "Admin";
						break;
					}
				?>
				{{$hak_akses}}
			</td>
			<td>{{$data->email}}</td>
			<td align="center">
				<a href="#" data-id="{{$data->id}}" class="editPengguna"><i class="fa fa-edit"></i>&nbsp;Edit</a> |
				<a href="#" data-id="{{$data->id}}" class="hapusPengguna"><i class="fa fa-trash-o"></i>&nbsp;Hapus</a>
			</td>
		</tr>
		@endif
	@endforeach
	</tbody>
</table>

@include('includes.mdl_konfirmasi_hapus') <!--Modal konfirmasi hapus pengguna-->

@include('includes.mdl_edit_pengguna') <!--Modal edit pengguna-->

@include('includes.mdl_tambah_pengguna') <!--Modal tambah pengguna-->

@stop
