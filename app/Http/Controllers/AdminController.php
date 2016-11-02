<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }

    public function delete()
    {
        return 'Ini halaman admin untuk supaya bisa request Delete';
    }

    public function update()
    {
        return 'ini halaman admin untuk Update data';
    }
}
