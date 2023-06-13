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
    // public function store(Request $request)
    // {
    //     $mapel = $request->validate([
    //         'kd_mapel' => 'required|max:255',
    //         'nm_mapel' => 'required|max:255',
    //     ]);

    //     Mapel::create($mapel);
    //     return redirect()->route('mapel.index')->with('success', 'Mata Pelajaran berhasil ditambahkan');
    // }
    public function store(Request $request)
    {
// dd(sprintf("%04d", mt_rand(1, 999999)));
        try {
                $saveorno = Mapel::create([
                    'kd_mapel' => sprintf("%04d", mt_rand(1, 999999)),
                    'nm_mapel' => $request->nm_mapel,
                ]);

                if($saveorno){
                    Session::flash('messagesuccess', "Data mapel berhasil ditambahkan.");
                    return redirect()->route('mapel.index');
                }else{
                    Session::flash('message', "Data failed to save.");
                    return redirect()->back();
                }

        } catch (\Illuminate\Database\QueryException $ex) {
            Session::flash('message', "Data failed to save.");
            // return redirect('admin/users');
            return redirect()->back();
        }

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
    // public function update(Request $request, $id)
    // {
    //     $mapel = $request->validate([
    //         'kd_mapel' => 'required|max:255',
    //         'nm_mapel' => 'required|max:255',
    //     ]);

    //     Mapel::where('id', $id)->update($mapel);
    //     return redirect()->route('mapel.index')->with('success', 'Mata Pelajaran berhasil diedit');
    // }
    public function update(Request $request, $id)
    {
        try {
            // Check if email exist in db
            // $kd_mapelexist = Mapel::
            // where('kd_mapel', '=', $request->kd_mapel)
            // ->first();

            // if ($kd_mapelexist) {
            //     Session::flash('messageduplicate', "Kode Mapel sudah terdaftar !");
            //     return redirect()->back();
            // }
            $saveorno = Mapel::where('id',$request->id)->update([
                // 'kd_mapel' => $request->kd_mapel,
                'nm_mapel' => $request->nm_mapel,
            ]);
            // dd($saveorno);
            if($saveorno > 0){
                Session::flash('messagesuccess', "Data has been saved successfully.");
                return redirect()->route('mapel.index');
            }
            else
            {
                Session::flash('message', "No changes have been made in the form fields.");
                return redirect()->back();
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            Session::flash('message', "Data failed to save.");
            // return redirect('admin/users');
            return redirect()->back();
        }
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
