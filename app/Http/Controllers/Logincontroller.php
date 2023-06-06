<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        if (Auth::check()) {
            //Login Success
            // return redirect('admin/dashboard');
            return redirect('admin/dashboard');
        }
        return view('login.index');
    }
    public function admin_index()
    {
        if (Auth::check()) {
            //Login Success
            // return redirect('admin/dashboard');
            return redirect('admin/dashboard');
        }
        return view('login.admin_index');
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
            return redirect()->route('login');
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
    public function login(Request $request)
    {
        // dd('est');
        $user = Siswa::where('username_siswa', $request->username)->first();
        // dd($user);

        if (!$user || !Hash::check($request->password, $user->password)) {
            Session::flash('message', "Incorrect Email or Password.");
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

                if(Auth::guard('web')->check()){
                    dd("web");
                }
                elseif(Auth::guard('siswa')->check()){
                    dd("siswa");
                }
            }else {
                Session::flash('message', "Incorrect Email or Password.");
                return Redirect::back();
            }
        }

    }

    public function register(Request $request)
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

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
