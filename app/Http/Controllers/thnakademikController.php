<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Tahun_akademik;
use Illuminate\Http\Request;

class thnakademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thnakademik = Tahun_akademik::orderBy('thn_akademik', 'asc')->get();
        return view('dashboardAdmin.thn-akademik.index')->with('thnakademik', $thnakademik);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.thn-akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thnakademik = $request->validate([
            'thn_akademik' => 'required|max:255',
            'semester' => 'required',
            'status' => 'required'
        ]);

        Tahun_akademik::create($thnakademik);
        return redirect()->route('thn-akademik.index')->with('success', 'Tahun Akademik berhasil ditambahkan');
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
        $thnakademik = Tahun_akademik::where('id', $id)->first();
        return view('dashboardAdmin.thn-akademik.edit')->with('thnakademik', $thnakademik);
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
        $thnakademik = $request->validate([
            'thn_akademik' => 'required|max:255',
            'semester' => 'required',
            'status' => 'required'
        ]);

        Tahun_akademik::where('id', $id)->update($thnakademik);
        return redirect()->route('thn-akademik.index')->with('success', 'Tahun Akademik berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tahun_akademik::where('id', $id)->delete();
        return redirect()->route('thn-akademik.index')->with('success', 'Tahun Akademik berhasil dihapus');
    }
}
