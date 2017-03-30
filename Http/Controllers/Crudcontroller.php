<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use Auth;

class Crudcontroller extends Controller
{
    public function tambahdata()
    {
    	$data = array(
    		'nama'=>Input::get('nama'),
    		'alamat'=>Input::get('alamat'),
    		'kelas'=>Input::get('kelas'),
    	);

    	DB::table('siswa')->insert($data);
    	return Redirect::to('/read')->with('message','Berhasil menambah data');
    }

    public function lihatdata()
    {
    	$data = DB::table('siswa')->get();

    	return View::make('read')->with('siswa',$data);
    }

    public function hapusdata($id)
    {
    	DB::table('siswa')->where('id','=',$id)->delete();

    	return Redirect::to('/read')->with('message','Data berhasil dihapus');
    }

    public function editdata($id)
    {
    	$data = DB::table('siswa')->where('id','=',$id)->first();

    	return View::make('form_edit')->with('siswa',$data);
    }

    public function proses_edit_data()
    {
    	$data = array(
    		'nama'=>Input::get('nama'),
    		'alamat'=>Input::get('alamat'),
    		'kelas'=>Input::get('kelas'),
    	);

    	DB::table('siswa')->where('id','=',Input::get('id'))->update($data);
    	return Redirect::to('read')->with('message','Data berhasil diperbarui');
    }

    public function tambah_login()
    {
        $data=array(
            'username'=>Input::get('username'),
            'password'=>bcrypt(Input::get('password')),
            'hak_akses'=>'user',
        );

        DB::table('login')->insert($data);
        return Redirect::to('/login')->with('message','Berhasil mendaftar');
    }

    public function login()
    {
        if (Auth::attempt(['username' =>Input::get('username'),'password' =>Input::get('password')])) {
            if (Auth::user()->hak_akses=="admin") {
                echo "admin";
            } else{
                echo "user";
            }
        } else{
            echo "Gagal Login !";
        }
    }
}
