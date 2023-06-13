<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::orderBy('nama', 'asc')->get();
        return view('dashboardAdmin.siswa.index')->with('siswa', $siswa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = $request->validate([
            'username_siswa' => 'required|max:20',
            'password' => 'required|min:8',
            'nisn' => 'required|numeric',
            'nama' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required|max:255',
            'kelas' => 'required|max:255',
            'walikelas' => 'required|max:255',
            'ekskul_siswa' => 'required',
            'jns_kelamin' => 'required|max:255',
            'nohp_siswa' => 'required|numeric',
            'nama_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'nohp_ortu' => 'required|numeric',
            'alamat' => 'required|max:255',
            'nama_wali' => 'required',
            'nohp_wali' => 'required',
            'alamat_wali' => 'required'

        ]);

        Siswa::create($siswa);
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view('dashboardAdmin.siswa.show')->with('siswa', $siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view('dashboardAdmin.siswa.edit')->with('siswa', $siswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateOld(Request $request, $id)
    {
        $siswa = $request->validate([
            'username_siswa' => 'required|max:20',
            'password' => 'required|min:8',
            'nisn' => 'required|numeric',
            'nama' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required|max:255',
            'kelas' => 'required|max:255',
            'walikelas' => 'required|max:255',
            'ekskul_siswa' => 'required',
            'jns_kelamin' => 'required|max:255',
            'nohp_siswa' => 'required|numeric',
            'nama_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'nohp_ortu' => 'required|numeric',
            'alamat' => 'required|max:255',
            'nama_wali' => 'required',
            'nohp_wali' => 'required',
            'alamat_wali' => 'required'

        ]);

        Siswa::where('id', $id)->update($siswa);
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diedit');
    }
    public function update(Request $request, $id)
    {
        try {
            // Check if email exist in db
            $username_siswaexist = Siswa::
            where('username_siswa', '=', $request->username_siswa)
            ->first();

            if ($username_siswaexist) {
                Session::flash('messageduplicate', "Username sudah terdaftar !");
                return redirect()->back();
            }
            if($request->password != null){
                $password_value = bcrypt($request->password);
            }else{
                $password_value = $request->old_password;
            }
            // dd($password_value);
            $saveorno = Siswa::where('id',$request->id)->update([
                'username_siswa' => $request->username_siswa,
                'password' => $password_value,
                'nama' => $request->nama,
                'nisn' => $request->nisn,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'kelas' => $request->kelas,
                'walikelas' => $request->walikelas,
                'ekskul_siswa' => $request->ekskul_siswa,
                'jns_kelamin' => $request->jns_kelamin,
                'nohp_siswa' => $request->nohp_siswa,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'nohp_ortu' => $request->nohp_ortu,
                'alamat' => $request->alamat,
                'nama_wali' => $request->nama_wali,
                'active' => $request->active,
            ]);
            // dd($saveorno);
            if($saveorno > 0){
                Session::flash('messagesuccess', "Data has been saved successfully.");
                return redirect()->route('siswa.index');
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
        Siswa::where('id', $id)->delete();
        return redirect()->route('siswa.index')->with('success', ' Data siswa berhasil dihapus');
    }
}
