<?php

namespace App\Http\Controllers;

use App\Models\Catat_pembayaran;
use Illuminate\Http\Request;

class catatpembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatPembayaran = Catat_pembayaran::orderBy('kelas', 'asc')->get();
        return view('dashboardAdmin.catat-pembayaran.index')->with('catatPembayaran', $catatPembayaran);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.catat-pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catatPembayaran = $request->validate([
            'nisn' => 'required|numeric',
            'kelas' => 'required|max:255',
            'nama_siswa' => 'required|max:255',
            'jenis_pembayaran' => 'required|max:255',
            'jumlah_pembayaran' => 'required',
            'tgl_pembayaran' => 'required|max:255',

        ]);
        Catat_pembayaran::create($catatPembayaran);
        return redirect()->route('catat-pembayaran.index')->with('success', 'Catatan Pembayaran berhasil ditambahkan');
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
        $catatPembayaran = Catat_pembayaran::where('id', $id)->first();
        return view('dashboardAdmin.catat-pembayaran.edit')->with('catatPembayaran',  $catatPembayaran);
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
        $catatPembayaran = $request->validate([
            'nisn' => 'required|numeric',
            'kelas' => 'required|max:255',
            'nama_siswa' => 'required|max:255',
            'jenis_pembayaran' => 'required|max:255',
            'jumlah_pembayaran' => 'required',
            'tgl_pembayaran' => 'required|max:255',

        ]);

        Catat_pembayaran::where('id', $id)->update($catatPembayaran);
        return redirect()->route('catat-pembayaran.index')->with('success', 'Catatan Pembayaran berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Catat_pembayaran::where('id', $id)->delete();
        return redirect()->route('catat-pembayaran.index')->with('success', 'Catatan Pembayaran berhasil dihapus');
    }
}
