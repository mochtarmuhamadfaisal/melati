<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';
    protected function redirectTo()
    {
        if (Auth::guard('dosen')->hasUser('dosen')) {
            return '/dashboard_dosen';
        }else{
            return '/';
        }
        // if (Auth::guard('mahasiswa')->hasUser('mahasiswa')) {
        //     return '/beranda_mahasiswa';
        // }else{
        //     return '/';
        // }
    }
        

        // if (Auth::guard('admin')->hasUser('admin')) {
            //         return '/admin';
            //     } else if (Auth::guard('guru')->hasUser('guru')) {
            //         return '/admin/data-umum/kelas';
            //     } else if (Auth::guard('siswa')->hasUser('siswa')) {
            //         return '/admin/data-umum/semesters';
            //     }
   

    protected function attemptLogin(Request $request)
    {
        // $adminLogin = Auth::guard('admin')->attempt(
        //     $this->credentials($request),
        //     $request->has('remember')
        // );
        $dosenLogin = Auth::guard('dosen')->attempt(
            $this->credentials($request),
            $request->has('remember')
        );
        $mahasiswaLogin = Auth::guard('mahasiswa')->attempt(
            $this->credentials($request),
            $request->has('remember')
        );
        if($dosenLogin == true){
            return $dosenLogin;
        } else {
            return $dosenLogin;
        }

        if($mahasiswaLogin == true){
            return $mahasiswaLogin;
        } else {
            return $dosenLogin;
        }
    // if ($adminLogin == true) {
    //         return $adminLogin;
    //     } else if ($guruLogin == true) {
    //         return $guruLogin;
    //     } else {
    //         return $siswaLogin;
    //     }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'nip';
    }

    // protected function guard(){
    //     return Auth::guard('mahasiswa');
    // }
}
