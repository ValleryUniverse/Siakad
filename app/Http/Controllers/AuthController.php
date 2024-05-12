<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function index() {
        return view('auth.login');
    }
    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib Di Isi',
            'password.required' => 'Password Wajib Di Isi',
        ]);

        $authLogin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];
        if (Auth::attempt($authLogin)){
            // return redirect()->route('admin');
            $request->session()->regenerate();

            $userRole = Auth::user()->m_roles_id;

            if ($userRole == 1) {
                return redirect()->route('dashboard.instruktur');
            } elseif ($userRole == 2) {
                return redirect()->route('dashboard.askorwil');
            }
        }else{
            return redirect('login')->withErrors(['loginError' => 'Email atau Password Salah']);
        }
    }

    function registerIndex() {
        return view('auth.register');
    }

    function register(Request $request) {
        Session::flash('nama',$request->nama);
        Session::flash('email',$request->email);
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ],[
            'nama.required' => 'Nama Wajib Di Isi',
            'email.required' => 'Email Wajib Di Isi',
            'email.unique' => 'Email Sudah Pernah Di Gunakan',
            'password.required' => 'Password Wajib Di Isi',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $data = [
            'nama'=> $request->nama,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ];
        
        User::create($data);

        $authLogin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];
        if (Auth::attempt($authLogin)){
            $userRole = Auth::user()->m_roles_id;
            if ($userRole == 1) {
                return redirect()->route('dashboard.instruktur');
            } elseif ($userRole == 2) {
                return redirect()->route('dashboard.askorwil');
            }
        }else{
            return redirect('login')->withErrors('Email Atau Password Salah');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
