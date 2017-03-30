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
use Session;

class Login extends Controller
{
	public function otentikasi()
	{
		if (Auth::attempt(array('username' =>Input::get('username'),'password' =>Input::get('password')))) {
            if (Auth::user()->hak_akses=="admin") {
                return Redirect::intended('admin');
            } else{
                return Redirect::to('/');
            }
        } else{
            Session::flash('message','Username atau Password tidak cocok !');
            Session::flash('alert-class','alert-danger');
        	return Redirect::to('/');
        }
	}

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
