<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\prosespengadaan;
use App\unitkerja;
use App\pengadaan;
use App\pegawai;
use App\jabatan;
use App\pbbj;
use Response;
use Alert;


class PegawaiController extends Controller
{
    public function addPegawai()
    {
        $data['newPegawai'] = pegawai::all();
        $data['jabatan']    = jabatan::get();
        return view('pegawai.add')->with($data);
    }
    
    public function allPegawai()
    {
        $data['allPegawai'] = pegawai::paginate('15');
        // return Response::json($data['allPegawai']);
        
        return view('pegawai.all')->with($data);
    }
    
    public function savePegawai(Request $r)
    {
        $data['savePegawai'] = pegawai::where('id_pegawai');
        
        $new = new pegawai;
        
        $new->namapegawai = $r->input('namapegawai');
        $new->id_jabatan  = $r->input('id_jabatan');
        $new->notelp      = $r->input('nomortelepon');
        
        Alert::success('Data Pegawai telah ditambahkan', 'Berhasil!')->autoclose(1300);
        $new->save();
        return redirect()->route('allPegawai');
    
    }
    
    public function editPegawai($id)
    {
        $data['editpegawai'] = pegawai::find($id);
        $data['jabatan']     = jabatan::get();
        
        return view('pegawai.edit')->with($data);
    }
    
    public function updatePegawai(Request $r)
    {
        $edit = pegawai::find($r->input('idpegawai'));
        
        $edit->namapegawai = $r->input('namapegawai');
        $edit->notelp      = $r->input('notelp');
        $edit->id_jabatan  = $r->input('jabatan');
        
        Alert::success('Data Pegawai telah diEdit', 'Berhasil!')->autoclose(1300);
        $edit->save();
        return redirect()->route('allPegawai');
    }

    public function ppbjPegawai($namapegawai) {
        $pegawai = pbbj::where('id_pegawai', '=', $namapegawai)->get();
        $ppbj = pbbj::select('no_ppbj')->groupBy('no_ppbj')->where('id_pegawai', $namapegawai)->get();
        $prosespengadaan = prosespengadaan::get();
        $cekpegawai = prosespengadaan::where('id_pegawai', $namapegawai)->first();
        return view('pegawai.ppbj', [
            'ppbjPegawai' => $pegawai,
            'ppbj' => $ppbj,
            'prosespengadaans' => $prosespengadaan,
            'cekpegawais' => $cekpegawai
        ]);
    }

    public function ppbjPegawaigan($no_ppbj) {
        $ppbj['ppbj'] = pbbj::where('no_ppbj', $no_ppbj)->get();
        return view('pegawai.satu')->with($ppbj);
    }

    public function kd9() {
        $data['ppbjkd9'] = prosespengadaan::where('selesai1', '<', 9)
                                        ->orWhere('selesai2', '<', 9)
                                        ->orWhere('selesai3', '<', 9)->get();
        return view('pegawai/selesai.kd9')->with($data);
    }
    
    public function sd9() {
        $data['ppbjsd9'] = prosespengadaan::where('selesai1', '=', 9)
                                        ->orWhere('selesai2', '=', 9)
                                        ->orWhere('selesai3', '=', 9)->get();
        return view('pegawai/selesai.sd9')->with($data);                              
    }

    public function ld9() {
        $data['ppbjld9'] = prosespengadaan::where('selesai1', '>', 9)
                                        ->orWhere('selesai2', '>', 9)
                                        ->orWhere('selesai3', '>', 9)->get();
        return view('pegawai/selesai.ld9')->with($data);
    }

}