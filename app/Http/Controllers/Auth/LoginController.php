<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Alert;

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

    protected function authenticated()
    {
     $akses = Auth::user()->akses;
     $first_akses  = strtok($akses, ' ');
     $second_akses = strtok('');

        if ( Auth::user()->akses=='Kasubag Pusat') {// do your margic here
            Alert::success('Selamat Datang Kasubag Pusat.', 'Login Success!')->autoclose(1300);
            return redirect('home');
        }elseif ( Auth::user()->akses=='Kasubag QA') {// do your margic here
            Alert::success('Selamat Datang Kasubag QA.', 'Login Success!')->autoclose(1300);
            return redirect('home');
        }elseif (Auth::user()->akses == 'Kasubag Cabang') {
            Alert::success('Selamat Datang Kasubag Cabang.', 'Login Success!')->autoclose(1300);
            return redirect('home');
        }elseif (Auth::user()->akses=='Kadiv') {
            Alert::success('Selamat Datang Kadiv.', 'Login Success!')->autoclose(1300);
            return redirect('home');
        }elseif (Auth::user()->akses=='Admin') {
            Alert::success('Selamat Datang Admin.', 'Login Success!')->autoclose(1300);
            return redirect('home');
        }elseif (Auth::user()->akses=='User') {
            Alert::success('Silakan tunggu konfirmasi dari Admin setelah pendaftaran anda.', 'Login Success!')->autoclose(1300);
            return redirect('/userspeople');            
        }elseif (Auth::user()->akses== 'Cabang '.$second_akses) {
            Alert::success('Selamat datang', 'Login Success!')->autoclose(1300);
            return redirect()->route('viewppbjcabang'); 
        }elseif (Auth::user()->akses== 'Divisi '.$second_akses) {
            Alert::success('Selamat datang', 'Login Success!')->autoclose(1300);
            return redirect()->route('viewppbjpusat'); 
        }elseif (Auth::user()->akses== 'SBU '.$second_akses) {
            Alert::success('Selamat datang', 'Login Success!')->autoclose(1300);
            return redirect()->route('viewppbjpusat'); 
        }elseif (Auth::user()->akses== 'Satuan '.$second_akses) {
            Alert::success('Selamat datang', 'Login Success!')->autoclose(1300);
            return redirect()->route('viewppbjpusat'); 
        }else {
            Alert::error('Halaman Salah.', 'Error!')->autoclose(1300);
            return redirect('pagenotfound');
        }
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/admin'

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
    }
}
