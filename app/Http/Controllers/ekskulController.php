<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

class ekskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekstrakulikuler = Ekskul::orderBy('nama_ekskul', 'desc')->get();
        return view('dashboardAdmin.ekstrakulikuler.index')->with('ekstrakulikuler', $ekstrakulikuler);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.ekstrakulikuler.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstrakulikuler = $request->validate([
            'nama_ekskul' => 'required|max:255',
            'hari_ekskul' => 'required|max:255',
            'waktu_ekskul' => 'required|max:255',
        ]);

        Ekskul::create($ekstrakulikuler);
        return redirect()->route('ekstrakulikuler.index')->with('success', 'Ekstrakulikuler berhasil ditambahkan');
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
        $ekstrakulikuler = Ekskul::where('id', $id)->first();
        return view('dashboardAdmin.ekstrakulikuler.edit')->with('ekstrakulikuler', $ekstrakulikuler);
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
        $ekstrakulikuler = $request->validate([
            'nama_ekskul' => 'required|max:255',
            'hari_ekskul' => 'required|max:255',
            'waktu_ekskul' => 'required|max:255',
        ]);

        Ekskul::where('id', $id)->update($ekstrakulikuler);
        return redirect()->route('ekstrakulikuler.index')->with('success', 'Ekstrakulikuler berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ekskul::where('id', $id)->delete();
        return redirect()->route('ekstrakulikuler.index')->with('success', 'Ekstrakulikuler berhasil dihapus');
    }
}
