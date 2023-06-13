<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

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
        // $guru = User::where('role','2')->orderBy('created_at', 'desc')->get();
        return view('dashboardAdmin.guru.index')->with('guru', $guru);
    }

    public function dashboard()
    {
        // $guru = Guru::orderBy('nama_guru', 'desc')->get();
        // // $guru = User::where('role','2')->orderBy('created_at', 'desc')->get();
        // return view('dashboardAdmin.guru.index')->with('guru', $guru);
        return view('dashboardGuru.home.index');
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
    // public function store(Request $request)
    // {
    //     $guru = $request->validate([
    //         'username_guru' => 'required',
    //         'password' => 'required|min:8',
    //         'nama_guru' => 'required|max:255',
    //         'nip' => 'required|numeric',
    //         'tempat_lahir_guru' => 'required|max:255',
    //         'tgl_lahir_guru' => 'required|max:255',
    //         'jns_kelamin_guru' => 'required|max:255',
    //         'pendidikan_terakhir_guru' => 'required|max:255',
    //         'nohp_guru' => 'required|numeric',
    //         'alamat_guru' => 'required|max:255',


    //     ]);

    //     Guru::create($guru);
    //     return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    // }
    public function store(Request $request)
    {

        try {
            // Check if email exist in db
            $username_guruexist = Guru::
            where('username_guru', '=', $request->username_guru)
            ->first();

            if ($username_guruexist) {
                Session::flash('messageduplicate', "Username sudah terdaftar !");
                return redirect()->back();
            }
            else {
                $saveorno = Guru::create([
                    'username_guru' => $request->username_guru,
                    'password' => bcrypt($request->password),
                    'nama_guru' => $request->nama_guru,
                    'nip' => $request->nip,
                    'tempat_lahir_guru' => $request->tempat_lahir_guru,
                    'tgl_lahir_guru' => $request->tgl_lahir_guru,
                    'jns_kelamin_guru' => $request->jns_kelamin_guru,
                    'pendidikan_terakhir_guru' => $request->pendidikan_terakhir_guru,
                    'nohp_guru' => $request->nohp_guru,
                    'alamat_guru' => $request->alamat_guru,
                    'active' => $request->active,
                ]);

                if($saveorno){
                    Session::flash('messagesuccess', "Data guru berhasil ditambahkan.");
                    return redirect()->route('guru.index');
                }else{
                    Session::flash('message', "Data failed to save.");
                    return redirect()->back();
                }
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
        $guru = Guru::where('id', $id)->first();
        return view('dashboardAdmin.guru.show')->with('guru', $guru);
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
    // public function update(Request $request, $id)
    // {
    //     $guru = $request->validate([
    //         'username_guru' => 'required',
    //         'password' => 'required|min:8',
    //         'nama_guru' => 'required|max:255',
    //         'nip' => 'required|numeric',
    //         'tgl_lahir_guru' => 'required|max:255',
    //         'jns_kelamin_guru' => 'required|max:255',
    //         'pendidikan_terakhir_guru' => 'required|max:255',
    //         'nohp_guru' => 'required|numeric',
    //         'alamat_guru' => 'required|max:255',
    //     ]);

    //     Guru::where('id', $id)->update($guru);
    //     return redirect()->route('guru.index')->with('success', 'Data guru berhasil diedit');
    // }
    public function update(Request $request, $id)
    {
        try {
            // Check if email exist in db
            $username_guruexist = Guru::
            where('username_guru', '=', $request->username_guru)
            ->first();

            if ($username_guruexist) {
                Session::flash('messageduplicate', "Username sudah terdaftar !");
                return redirect()->back();
            }
            if($request->password != null){
                $password_value = bcrypt($request->password);
            }else{
                $password_value = $request->old_password;
            }
            // dd($password_value);
            $saveorno = Guru::where('id',$request->id)->update([
                'username_guru' => $request->username_guru,
                'password' => $password_value,
                'nama_guru' => $request->nama_guru,
                'nip' => $request->nip,
                'tempat_lahir_guru' => $request->tempat_lahir_guru,
                'tgl_lahir_guru' => $request->tgl_lahir_guru,
                'jns_kelamin_guru' => $request->jns_kelamin_guru,
                'pendidikan_terakhir_guru' => $request->pendidikan_terakhir_guru,
                'nohp_guru' => $request->nohp_guru,
                'alamat_guru' => $request->alamat_guru,
                'active' => $request->active,
            ]);
            // dd($saveorno);
            if($saveorno > 0){
                Session::flash('messagesuccess', "Data has been saved successfully.");
                return redirect()->route('guru.index');
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
        Guru::where('id', $id)->delete();
        return redirect()->route('guru.index')->with('success', ' Data guru berhasil dihapus');
    }
}
