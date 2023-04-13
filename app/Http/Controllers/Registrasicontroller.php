<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registrasicontroller extends Controller
{
    public function index()
    {
        return view('registrasi.index');
    }
}
