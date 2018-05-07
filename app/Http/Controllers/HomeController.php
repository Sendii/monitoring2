<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\prosespengadaan;
use App\logdata;
use App\contact;
use App\jabatan;
use App\User;
use App\pbbj;
use Charts;
use Alert;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $r)
    {
        // $this->middleware('admin');
        // date_default_timezone_set("Asia/Jakarta");
        // //$this->middleware('auth');
        // //echo "<pre>".print_r($_SERVER,1)."</pre>";
        // $log = new logdata();
        // $log->idpengguna = (Auth::check())?Auth::user()->id:0;
        // $log->url = $r->url();;
        // $log->user_agent = $_SERVER['HTTP_USER_AGENT'];
        // $log->ip = $_SERVER['REMOTE_ADDR'];
        // $log->ip_port = isset($_SERVER['REMOTE_PORT'])?$_SERVER['REMOTE_PORT']:"";
        // $log->http_host = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:"";
        // $log->http_referer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";
        // $log->pathinfo = isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:"";
        // $log->save();
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function info()
    {
        return view('info');
    }
    public function allsaran()
    {
        $data['saran'] = contact::paginate('10');
        
        return view('saran.all')->with($data);
    }
    public function viewsaran($id)
    {
        $data['saran'] = contact::find($id);
        
        return view('saran.view')->with($data);
    }

    public function userpeople()
    {
        return view('user.userpeople');
    }
    
    public function index()
    {
        $data['getkontrak']    = prosespengadaan::get();
        $data['getppbj']       = pbbj::orderBy('updated_at', 'DESC')->paginate(10);
        $data['nol']           =pbbj::where('id')->count();
        $total                 = pbbj::count();
        $selesai               = prosespengadaan::whereNotNull('selesaikon')->count();
        $data['selesaiproses'] = prosespengadaan::whereNotNull('selesaikon')->count();        
        if ($total >= 1) {
            $data['presentase']    = ($selesai / $total) * 100;
        }
        else {
            $data['presentase']    = 0;
        }
        return view('welcome')->with($data);
    }
    
    public function contactme(Request $r)
    {
        $data['contact'] = contact::where('id_contact');
        
        
        $new          = new contact;
        $new->name    = $r->input('name');
        $new->email   = $r->input('email');
        $new->subject = $r->input('subject');
        $new->message = $r->input('message');
        
        Alert::success('Terima Kasih atas Saran & Masukannya.', 'Berhasil!')->autoclose(1300);
        $new->save();
        
        return redirect('/');
    }
    
    // ----------------URL REDIRECT TO ERROR404------------
    //  public function pagenotfound()
    //  {
    //      return view('503');
    // }
    
    public function alluser()
    {
        $data['user'] = User::paginate('10');
        
        return view('user.all')->with($data);
    }
    
    public function edituser($id)
    {
        $data['edituser'] = user::find($id);
        $data['jabatan'] = jabatan::get();
        $data['user']     = user::get();
        
        return view('user.edit')->with($data);
    }
    
    public function updateuser(Request $r)
    {
        $edit = user::find($r->input('id'));
        
        $edit->name  = $r->input('nama');
        $edit->email = $r->input('email');
        $edit->akses = $r->input('hakakses');
        
        Alert::success('Data User website telah diEdit', 'Berhasil!')->autoclose(1300);
        $edit->save();
        return redirect()->route('alluser');
    }
    
    public function profile()
    {
        $data['user'] = user::get();
        
        return view('profile.profile');
    }

    public function getChart() {
     $ppbjapprove = prosespengadaan::where('status', '=', 'Accepted')->get();
     $chartapprove = Charts::database($ppbjapprove, 'bar', 'highcharts')
     ->title(" ")
     ->elementLabel("Total Ppbj")
     ->dimensions(900, 500)
     ->responsive(false)
     ->groupByMonth(date('Y'), true);

     $ppbjnoapprove = prosespengadaan::where('status', '=', 'NonAccepted')->get();
     $chartnoapprove = Charts::database($ppbjnoapprove, 'bar', 'highcharts')
     ->title(" ")
     ->elementLabel("Total Ppbj")
     ->dimensions(900, 500)
     ->responsive(false)
     ->groupByMonth(date('Y'), true);

     if(prosespengadaan::whereNotNull('mulaippbj1')) {
        $ppbjPegawai = prosespengadaan::whereNotNull('selesai1')->get();
    }elseif(prosespengadaan::whereNotNull('mulaippbj2')) {
        $ppbjPegawai = prosespengadaan::whereNotNull('selesai2')->get();
    }elseif(prosespengadaan::whereNotNull('mulaippbj3')) {
        $ppbjPegawai = prosespengadaan::whereNotNull('selesai3')->get();
    }

     $chartppbjPegawai = Charts::database($ppbjPegawai, 'bar', 'highcharts')
     ->title(" ")
     ->elementLabel("Total Ppbj Selesai")
     ->dimensions(900, 500)
     ->responsive(false)
     ->groupByMonth(date('Y'), true);

    if(prosespengadaan::whereNotNull('mulaippbj1')) {
        $ppbjPegawai2 = prosespengadaan::where('selesai1')->get();
    }elseif(prosespengadaan::whereNotNull('mulaippbj2')) {
        $ppbjPegawai2 = prosespengadaan::where('selesai2')->get();
    }elseif(prosespengadaan::whereNotNull('mulaippbj3')) {
        $ppbjPegawai2 = prosespengadaan::where('selesai3')->get();
    }

     $chartppbjPegawai2 = Charts::database($ppbjPegawai2, 'bar', 'highcharts')
     ->title(" ")
     ->elementLabel("Total Ppbj Tidak Selesai")
     ->dimensions(900, 500)
     ->responsive(false)
     ->groupByMonth(date('Y'), true);

     return view('chart', compact('chartapprove', 'chartnoapprove', 'chartppbjPegawai', 'chartppbjPegawai2'));
 }
}