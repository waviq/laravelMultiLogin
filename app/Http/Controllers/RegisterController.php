<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getRegister()
    {
        return view('Register.formRegister');
    }

    public function postRegister(Request $request)
    {
        $user = new User();
        $user->username = Input::get('username');
        $user->name = Input::get('nama');
        $user->email = Input::get('email');
        $user->password = bcrypt(Input::get('password'));
        $user->roles_id = DB::table('roles')->select('id')->where('namaRule','user')->first()->id;
        //dd($user);

        $user->save();

        return 'registrasi berhasil';
    }


}
