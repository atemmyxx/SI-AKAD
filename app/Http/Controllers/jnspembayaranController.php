<?php

namespace App\Http\Controllers;

use App\Models\Jns_pembayaran;
use Illuminate\Http\Request;

class jnspembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jns_pembayaran = Jns_pembayaran::orderBy('nama_jns_pembayaran', 'asc')->get();
        return view('dashboardAdmin.jns-pembayaran.index')->with('jns_pembayaran', $jns_pembayaran);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.jns-pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jns_pembayaran = $request->validate([
            'kd_jns_pembayaran' => 'required|max:255',
            'nama_jns_pembayaran' => 'required|max:255',

        ]);

        Jns_pembayaran::create($jns_pembayaran);
        return redirect()->route('jns-pembayaran.index')->with('success', 'Jenis Pembayaran berhasil ditambahkan');
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
        $jns_pembayaran = Jns_pembayaran::where('id', $id)->first();
        return view('dashboardAdmin.jns-pembayaran.edit')->with('jns_pembayaran', $jns_pembayaran);
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
        $jns_pembayaran = $request->validate([
            'kd_jns_pembayaran' => 'required|max:255',
            'nama_jns_pembayaran' => 'required|max:255',

        ]);

        Jns_pembayaran::where('id', $id)->update($jns_pembayaran);
        return redirect()->route('jns-pembayaran.index')->with('success', 'Jenis Pembayaran berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jns_pembayaran::where('id', $id)->delete();
        return redirect()->route('jns-pembayaran.index')->with('success', 'Jenis Pembayaran berhasil dihapus');
    }
}
