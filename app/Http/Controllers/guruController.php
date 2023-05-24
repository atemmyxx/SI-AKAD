<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::orderBy('nama_guru', 'desc')->get();
        return view('dashboardAdmin.guru.index')->with('guru', $guru);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = $request->validate([
            'username_guru' => 'required',
            'password' => 'required|min:8',
            'nama_guru' => 'required|max:255',
            'nip' => 'required|numeric',
            'tempat_lahir_guru' => 'required|max:255',
            'tgl_lahir_guru' => 'required|max:255',
            'jns_kelamin_guru' => 'required|max:255',
            'pendidikan_terakhir_guru' => 'required|max:255',
            'nohp_guru' => 'required|numeric',
            'alamat_guru' => 'required|max:255',


        ]);

        Guru::create($guru);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::where('id', $id)->first();
        return view('dashboardAdmin.guru.edit')->with('guru', $guru);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = $request->validate([
            'username_guru' => 'required',
            'password' => 'required|min:8',
            'nama_guru' => 'required|max:255',
            'nip' => 'required|numeric',
            'tgl_lahir_guru' => 'required|max:255',
            'jns_kelamin_guru' => 'required|max:255',
            'pendidikan_terakhir_guru' => 'required|max:255',
            'nohp_guru' => 'required|numeric',
            'alamat_guru' => 'required|max:255',
        ]);

        Guru::where('id', $id)->update($guru);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::where('id', $id)->delete();
        return redirect()->route('guru.index')->with('success', ' Data guru berhasil dihapus');
    }
}
