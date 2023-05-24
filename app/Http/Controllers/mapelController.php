<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class mapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::orderBy('nm_mapel', 'asc')->get();
        return view('dashboardAdmin.mapel.index')->with('mapel', $mapel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mapel = $request->validate([
            'kd_mapel' => 'required|max:255',
            'nm_mapel' => 'required|max:255',
        ]);

        Mapel::create($mapel);
        return redirect()->route('mapel.index')->with('success', 'Mata Pelajaran berhasil ditambahkan');
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
        $mapel = Mapel::where('id', $id)->first();
        return view('dashboardAdmin.mapel.edit')->with('mapel', $mapel);
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
        $mapel = $request->validate([
            'kd_mapel' => 'required|max:255',
            'nm_mapel' => 'required|max:255',
        ]);

        Mapel::where('id', $id)->update($mapel);
        return redirect()->route('mapel.index')->with('success', 'Mata Pelajaran berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mapel::where('id', $id)->delete();
        return redirect()->route('mapel.index')->with('success', 'Mata Pelajaran berhasil dihapus');
    }
}
