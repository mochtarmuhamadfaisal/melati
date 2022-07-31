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
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        // if (Auth::guard('admin')->hasUser('admin')) {
        //     return '/dashboard_admin';
        // } else if (Auth::guard('dosen')->hasUser('dosen')) {
        //     return '/dashboard_admin';
        // } else if (Auth::guard('mahasiswa')->hasUser('mahasiswa')) {
        //     return '/beranda_mahasiswa';
        // }
        return '/dashboard_admin';
    }

    // protected function attemptLogin(Request $request)
    // {
    //     $adminLogin = Auth::guard('admin')->attempt(
    //         $this->credentials($request),
    //         $request->has('remember')
    //     );
    //     $guruLogin = Auth::guard('dosen')->attempt(
    //         $this->credentials($request),
    //         $request->has('remember')
    //     );
    //     $siswaLogin = Auth::guard('mahasiswa')->attempt(
    //         $this->credentials($request),
    //         $request->has('remember')
    //     );
    // if ($adminLogin == true) {
    //         return $adminLogin;
    //     } else if ($guruLogin == true) {
    //         return $guruLogin;
    //     } else {
    //         return $siswaLogin;
    //     }
    // // return $adminLogin;
    // }

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

    protected function guard(){
        return Auth::guard('dosen');
    }
}
