<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getLogin()
    {
        return view('login.formLogin');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->EmailUsername,
            'password'  => $request->password
        ])){
            return redirect('/');
        }elseif(Auth::attempt([
            'username' => $request->EmailUsername,
            'password'  => $request->password
        ])){
            return redirect('/');
        }
        else{
            return 'salah masukin data';
        }
    }


}
