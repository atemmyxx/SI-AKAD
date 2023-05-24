<?php

namespace App\Http\Controllers;

use App\Models\OrangTua;
use Illuminate\Http\Request;

class ortuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orangtua = OrangTua::orderBy('nama_ayah', 'desc')->get();
        return view('dashboardAdmin.orang_tua.index')->with('orangtua', $orangtua);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.orang_tua.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orangtua = $request->validate([
            'username_ortu' => 'required|max:255',
            'password' => 'required|min:8',
            'nama_siswa' => 'required|max:255',
            'nik_ayah' => 'required|numeric',
            'nama_ayah' => 'required|max:255',
            'tgllahir_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nik_ibu' => 'required|numeric',
            'nama_ibu' => 'required|max:255',
            'tgllahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',

        ]);

        OrangTua::create($orangtua);
        return redirect()->route('orang_tua.index')->with('success', 'Data Orang Tua berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orangtua = OrangTua::where('id', $id)->first();
        return view('dashboardAdmin.orang_tua.edit')->with('orangtua', $orangtua);
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
        $orangtua = $request->validate([
            'username_ortu' => 'required|max:255',
            'password' => 'required|min:8',
            'nama_siswa' => 'required|max:255',
            'nik_ayah' => 'required|numeric',
            'nama_ayah' => 'required|max:255',
            'tgllahir_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nik_ibu' => 'required|numeric',
            'nama_ibu' => 'required|max:255',
            'tgllahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',

        ]);
        OrangTua::where('id', $id)->update($orangtua);
        return redirect()->route('orang_tua.index')->with('success', 'Data Orang Tua berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrangTua::where('id', $id)->delete();
        return redirect()->route('orang_tua.index')->with('success', 'Data Orang Tua berhasil dihapus');
    }
}
