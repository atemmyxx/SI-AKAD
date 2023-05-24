<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Tahun_akademik;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kelas = Kelas::orderBy('thn_akademik', 'asc')->get();
        return view('dashboardAdmin.kelas.index')->with('kelas', $kelas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = $request->validate([
            'thn_akademik' => 'required',
            'nm_kelas' => 'required|max:255',
            'nm_walikelas' => 'required|max:255',
            
        ]);
        Kelas::create($kelas);
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan');
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
        $kelas = Kelas::where('id', $id)->first();
        return view('dashboardAdmin.kelas.edit')->with('kelas', $kelas);
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
        $kelas = $request->validate([
            'thn_akademik' => 'required',
            'nm_kelas' => 'required|max:255',
            'nm_walikelas' => 'required|max:255',

        ]);

        Kelas::where('id', $id)->update($kelas);
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::where('id', $id)->delete();
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus');
    }
}
