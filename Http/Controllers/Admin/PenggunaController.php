<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use DB;
use Redirect;
use View;
use Auth;

class PenggunaController extends Controller
{
    public function list_pengguna()
    {
        if (Auth::user()) {
            if (Auth::user()->hak_akses=="admin") {
                $data = DB::table('pengguna')->get();
                return View::make('Admin/admin_landing')->with('pengguna',$data);       
            }
        }
        return Redirect::to('/');
    }

    public function tambah_pengguna()
    {
    	$data_pengguna = array(
    		'bidang_kerja'=>Input::get('bidker'),
    		'nip'=>Input::get('nip'),
    		'nama'=>Input::get('nama'),
    		'jenis_kelamin'=>Input::get('jk'),
    		'no_kontak'=>Input::get('no_kontak'),
    		'username'=>'obet',
    		'password'=>bcrypt('semangat'),
    		'hak_akses'=>Input::get('hak_akses'),
    		'email'=>Input::get('email'),
    	);

    	DB::table('pengguna')->insert($data_pengguna);
    	return Redirect::to('admin')->with('message','Data berhasil ditambahkan !');
    }

    public function get_pengguna($id)
    {   
        $pengguna = DB::table('pengguna')->where('id','=',$id)->first();
        return response()->json($pengguna);
    }

    public function update_pengguna()
    {
        $data = array(
            'no_kontak'=>Input::get('no_kontak'),
            'hak_akses'=>Input::get('hak_akses'),
            'email'=>Input::get('email'),
        );
        DB::table('pengguna')->where('id','=',Input::get('id'))->update($data);
        return Redirect::to('admin')->with('message','Data berhasil diperbarui !');
    }

    public function hapus_pengguna()
    {
        DB::table('pengguna')->where('id','=',Input::get('id'))->delete();
        return Redirect::to('admin')->with('message','Data berhasil dihapus !');
    }

}
