<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function login(Request $request)
    {
        //@dd($request);
        $credentials = $request->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:5',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            //@dd(Auth::user()->role->name);
            if(Auth::user()->role->name == 'admin'){
                return redirect()->route('dashboard.admin');
            }elseif(Auth::user()->role->name == 'dosen'){
                return redirect()->route('dashboard.dosen');
            }elseif(Auth::user()->role->name == 'mahasiswa'){
                //@dd(Auth::user()->role->name);
                return redirect()->route('beranda');
            }
 
        }
 
        return back()->with('logingagal', 'Username atau password salah');
    }

    public function logout(Request $request)
    {
        @dd('fff');
        return 'ff';
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
        return 'ff';
     
        return redirect('/');
    }
}
