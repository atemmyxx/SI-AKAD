<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\OrangTua;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use DB;
use App\Models\User;
use Redirect;

class Logincontroller extends Controller
{

    public function __construct(){
        // $this->middleware('auth:siswa')->except('logout');

    }

    public function index()
    {
        if(Auth::guard('web')->check()){return redirect('/admin/dashboard');}
        if(Auth::guard('siswa')->check()){return redirect('siswa/dashboard');}
        if(Auth::guard('guru')->check()){return redirect('/guru/dashboard');}
        if(Auth::guard('orangtua')->check()){return redirect('/orangtua/dashboard');}

        return view('login.index');
    }
    public function admin_index()
    {
        if(Auth::guard('web')->check()){return redirect('/admin/dashboard');}
        if(Auth::guard('siswa')->check()){return redirect('siswa/dashboard');}
        if(Auth::guard('guru')->check()){return redirect('/guru/dashboard');}
        if(Auth::guard('orangtua')->check()){return redirect('/orangtua/dashboard');}

        return view('login.admin_index');
    }
    public function guru_index()
    {
        if(Auth::guard('web')->check()){return redirect('/admin/dashboard');}
        if(Auth::guard('siswa')->check()){return redirect('siswa/dashboard');}
        if(Auth::guard('guru')->check()){return redirect('/guru/dashboard');}
        if(Auth::guard('orangtua')->check()){return redirect('/orangtua/dashboard');}

        return view('login.guru_index');
    }
    public function orangtua_index()
    {
        if(Auth::guard('web')->check()){return redirect('/admin/dashboard');}
        if(Auth::guard('siswa')->check()){return redirect('siswa/dashboard');}
        if(Auth::guard('guru')->check()){return redirect('/guru/dashboard');}
        if(Auth::guard('orangtua')->check()){return redirect('/orangtua/dashboard');}

        return view('login.orangtua_index');
    }

    public function admin_login(Request $request)
    {
        // dd('est');
        $requestLogin = [
            'username'     => $request->input('username'),
            'password'  => $request->input('password'),
        ];

        $rules = [
            'username' => [
                            'required',
                        ],
            'password'  => 'required|string'
        ];

        $messages = [
            'username.required'        => 'username wajib diisi',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];

        $validator = Validator::make($requestLogin, $rules, $messages);

        if($validator->fails()){
            // dd('test');
            return redirect()->back()->withErrors($validator)->withInput($requestLogin);
        }

        $data = [
            'username'     => $request->input('username'),
            'password'  => $request->input('password'),
        ];

        // Auth::attempt($data);
        if(Auth::attempt($data)){
            // $userStatus = Auth::User()->active;
            // // dd($userStatus);
            // if($userStatus=='1') {
            //     $userLevel = Auth::User()->is_admin;
            //     if($userLevel=='1') {
            //         return redirect('admin/dashboard');
            //     }elseif($userLevel=='2'){
            //         return redirect('admin/dashboard');
            //     }else{
            //         return redirect()->route('atlit.dashboard');
            //     }
            //     // return redirect('admin/dashboard');
            // }else{
            //     Auth::logout();
            //     // Session::flush();
            //     Session::flash('message', 'wqfqw Email atau password salah');
            //     return redirect()->route('login');
            // }
        }
        else {
            //Login Fail
            Session::flash('message', 'Salah Email atau password salah');
            return redirect('admin/login');
        }

        if (Auth::check()) {
            //Login Success
            $userLevel = Auth::User()->is_admin;
            if($userLevel=='1') {
                return redirect('admin/dashboard');
            }elseif($userLevel=='2'){
                return redirect('admin/dashboard');
            }else{
                return redirect('admin/dashboard');
            }
            // return redirect('admin/dashboard');

        } else { // false

            //Login Fail
            Session::flash('message', 'Tuefw Email atau password salah');
            return redirect()->route('login');
        }

    }
    public function guru_login(Request $request)
    {
        // dd('est');
        $user = Guru::where('username_guru', $request->username)->first();
        // dd($user);

        if (!$user || !Hash::check($request->password, $user->password)) {
            Session::flash('message', "Incorrect Username or Password.");
            return Redirect::back();
        }else{
            // Auth::attempt($data)
            // Auth::guard('siswa');

            $data = [
                'username_guru' => $request->input('username'),
                'password'  => $request->input('password'),
            ];
            // if(Auth::guard('siswa')->attempt($request->only(['username', 'password'])))
            if(Auth::guard('guru')->attempt($data))
            {
                return redirect('guru/dashboard');

                // if(Auth::guard('web')->check()){
                //     dd("web");
                // }
                // elseif(Auth::guard('guru')->check()){
                //     dd("guru");
                // }
            }else {
                Session::flash('message', "Incorrect Username or Password.");
                return Redirect::back();
            }
        }

    }
    public function orangtua_login(Request $request)
    {
        // dd('est');
        $user = OrangTua::where('username_ortu', $request->username)->first();
        // dd($user);

        if (!$user || !Hash::check($request->password, $user->password)) {
            Session::flash('message', "Incorrect Username or Password.");
            return Redirect::back();
        }else{
            // Auth::attempt($data)
            // Auth::guard('siswa');

            $data = [
                'username_ortu' => $request->input('username'),
                'password'  => $request->input('password'),
            ];
            // if(Auth::guard('siswa')->attempt($request->only(['username', 'password'])))
            if(Auth::guard('orangtua')->attempt($data))
            {
                return redirect('orangtua/dashboard');

                // if(Auth::guard('web')->check()){
                //     dd("web");
                // }
                // elseif(Auth::guard('orangtua')->check()){
                //     dd("orangtua");
                // }
            }else {
                Session::flash('message', "Incorrect Username or Password.");
                return Redirect::back();
            }
        }

    }

    public function login(Request $request)
    {
        // dd('est');
        $user = Siswa::where('username_siswa', $request->username)->first();
        // dd($user);

        if (!$user || !Hash::check($request->password, $user->password)) {
            Session::flash('message', "Incorrect Username or Password.");
            return Redirect::back();
        }else{
            // Auth::attempt($data)
            // Auth::guard('siswa');

            $data = [
                'username_siswa' => $request->input('username'),
                'password'  => $request->input('password'),
            ];
            // if(Auth::guard('siswa')->attempt($request->only(['username', 'password'])))
            if(Auth::guard('siswa')->attempt($data))
            {
                return redirect('siswa/dashboard');
                // return redirect('fqwqfgegqwewg');
                // dd(Auth::guard('siswa')->user());

                // if(Auth::guard('web')->check()){
                //     dd("web");
                // }
                // elseif(Auth::guard('siswa')->check()){
                //     dd("siswa");
                // }
            }else {
                Session::flash('message', "Incorrect Username or Password.");
                return Redirect::back();
            }
        }

    }

    public function registerOld(Request $request)
    {
        $requestLogin = [
            'username'     => $request->input('username'),
            'name'     => $request->input('name'),
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
        $rules = [
            'username'                  => 'required|min:3|max:35',
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];

        $messages = [
            'username.required'         => 'username Lengkap wajib diisi',
            'username.min'              => 'username lengkap minimal 3 karakter',
            'username.max'              => 'username lengkap maksimal 35 karakter',
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];

        $validator = Validator::make($rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($requestLogin);
        }

        $user = new User;
        $user->username = ucwords(strtolower($request->username));
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('login');
        } else {
            Session::flash('messages', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }
    public function register(Request $request)
    {
        // $id_nisn_siswa = date("Y").date("m").str_pad(3, 2, "0", STR_PAD_LEFT);
        // dd($id_nisn_siswa);

        try {
            // Check if email exist in db
            $usernameexist = Siswa::
            where('username_siswa', '=', $request->username_siswa)
            ->first();

            if ($usernameexist) {
                Session::flash('messageduplicate', "Username sudah terdaftar !");
                return redirect()->back();
            }
            // $emailexist = Siswa::
            // where('email', '=', $request->email)
            // ->first();

            // if ($emailexist) {
            //     Session::flash('messageduplicate', "Email sudah terdaftar !");
            //     return redirect()->back();
            // }
            // $kodeRand = sprintf("%04d", mt_rand(1, 999999));
            $latestOrder = Siswa::orderBy('created_at','DESC')->first();
            $siswaCount = Siswa::count();
            $idsiswanisn = $siswaCount+1;
            if ($latestOrder != null){
                $kodeRand = date("Y").date("m").sprintf("%04d", mt_rand(1, 99)).str_pad($idsiswanisn, 1, "0", STR_PAD_LEFT);
            } else {
                $kodeRand = date("Y").date("m").sprintf("%04d", mt_rand(1, 99)).str_pad($idsiswanisn, 1, "0", STR_PAD_LEFT);
            }
            $kodeRandexist = Siswa::
            where('kode_ortu', '=', $kodeRand)
            ->first();

            if ($kodeRandexist) {
                Session::flash('messageduplicate', "Terdapat kesalahan, silahkan coba kemabli.");
                return redirect()->back();
            }
            else {

                // dd($id_nisn_siswa);

                $saveorno = Siswa::create([
                    // 'nisn' => $id_nisn_siswa,
                    'username_siswa' => $request->username_siswa,
                    'password' => bcrypt($request->password),
                    'nama' => $request->nama,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'jns_kelamin' => $request->jns_kelamin,
                    // 'nohp_siswa' => $request->nohp_siswa,
                    // 'nama_ayah' => $request->nama_ayah,
                    // 'nama_ibu' => $request->nama_ibu,
                    'nohp_ortu' => $request->nohp_ortu,
                    'alamat' => $request->alamat,
                    'kode_ortu' => $kodeRand,
                    'active' => '0',
                    // 'active' => $request->active,
                ]);

                if($saveorno){
                    $saveornoOrtu = OrangTua::create([
                        'username_ortu' => $kodeRand,
                        'password' => '$2y$10$q9wJQ7k6MpiHrpjjX/.ka.Ia2UFMy0w7Ad6t/TFTQZgjcjMkOzhru',
                        'nama_siswa' => $request->nama,
                    ]);
                    if($saveornoOrtu){
                        Session::flash('messagesuccess', "Anda berhasil daftar.");
                        return redirect()->route('login');
                    }else{
                        Siswa::where('kode_ortu',$kodeRand)->delete();
                        Session::flash('message', "Data failed to save.");
                        return redirect()->back();
                    }
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

    public function logout()
    {
        // Auth::logout();
        // Auth::guard('siswa')->logout();
        // Auth::guard('guru')->logout();
        // Auth::guard('orangtua')->logout();
        if(Auth::guard('web')->check())
        {
            Auth::guard('web')->logout();
            return redirect('/admin/login');
        }
        if(Auth::guard('siswa')->check())
        {
            Auth::guard('siswa')->logout();
            return redirect('/login');
        }
        if(Auth::guard('guru')->check())
        {
            Auth::guard('guru')->logout();
            return redirect('/guru/login');
        }
        if(Auth::guard('orangtua')->check())
        {
            Auth::guard('orangtua')->logout();
            return redirect('/orangtua/login');
        }
    }
}
