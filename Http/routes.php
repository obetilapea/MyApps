<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',function(){
    return view('landing_page');
});

Route::post('login_pengguna','Login@otentikasi');
Route::get('logout','Login@logout');

//-------------Punya Admin-------------
Route::get('kelola_pengguna', function(){
	if (Auth::user()) {
		if (Auth::user()->hak_akses="admin") {
			return view('admin/pengguna_baru');
		}
	}
});
Route::post('register','Admin\PenggunaController@tambah_pengguna');
Route::get('admin','Admin\PenggunaController@list_pengguna');
Route::get('getPengguna/{id}','Admin\PenggunaController@get_pengguna');
Route::post('updatePengguna','Admin\PenggunaController@update_pengguna');
Route::post('hapusPengguna','Admin\PenggunaController@hapus_pengguna');

/*Route::get('admin', function(){
	if (Auth::user()) {
		if (Auth::user()->hak_akses="admin") {
			return view('admin/admin_landing');
		}
	}
	return view('landing_page');
});*/

/*Route::get('home',function(){
    return view('home');
});*/

/*Route::get('login',function(){
    return view('login');
});

Route::get('register',function(){
	return view('register');
});*/

#Route::post('prosestambah','Crudcontroller@tambahdata');
#Route::get('read','Crudcontroller@lihatdata');
#Route::get('hapus/{id}','Crudcontroller@hapusdata');
#Route::get('edit/{id}','Crudcontroller@editdata');
#Route::post('prosesedit','Crudcontroller@proses_edit_data');
#Route::post('tambahlogin','Crudcontroller@tambah_login');
#Route::post('login','Crudcontroller@login');
#Route::auth();

#Route::get('/home', 'HomeController@index');
