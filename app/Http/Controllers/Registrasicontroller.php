<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Registrasicontroller extends Controller
{
    public function index()
    {
        if(Auth::guard('web')->check()){return redirect('/admin/dashboard');}
        if(Auth::guard('siswa')->check()){return redirect('siswa/dashboard');}
        if(Auth::guard('guru')->check()){return redirect('/guru/dashboard');}
        if(Auth::guard('orangtua')->check()){return redirect('/orangtua/dashboard');}
        return view('registrasi.index');
    }
}
