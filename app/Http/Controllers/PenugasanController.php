<?php

namespace App\Http\Controllers;
use App\prosespengadaan;
use App\barangrealisasi;
use App\barangrealisasi2;
use App\unitkerja;
use App\pengadaan;
use App\pegawai;
use App\barang;
use App\pbbj;
use Alert;
use Auth;
use DB;

use Illuminate\Http\Request;

class PenugasanController extends Controller
{
    public function ppbjApprove() {
        $data['ppbjapprove'] = pbbj::where('status', '=', 'Accepted')->get();
        return view('kasubag.ppbjqaapprove')->with($data);
    }
    public function ppbjnoApprove() {
        $data['ppbjnoapprove'] = pbbj::where('status', '=', 'Pending' || '')->get();
        return view('kasubag.ppbjqanoapprove')->with($data);
    }
    public function receivePpbj()
    {
        $data['ppbjVerify'] = pbbj::get();
        $data['ppbjPusat']  = pbbj::where('unitkerja', 'Kantor Pusat')->orderBy('created_at', 'DESC')->paginate(10);
        $data['ppbjCabang']  = pbbj::where('unitkerja', 'Kantor Cabang')->orderBy('created_at', 'DESC')->paginate(10);
        $data['prosespengadaan'] = prosespengadaan::get();
        $data['unitkerja']       = unitkerja::get();
        return view('kasubag.all')->with($data);
    }
    
    public function editassignmentPpbj($id, ...$kodebarang)
    {
        $data['ppbjassignmentEdit'] = pbbj::find($id);
        $data['unitkerja']          = unitkerja::get();
        $data['cekpegawai']         = prosespengadaan::get();
        $data['pegawaiaja'] = pegawai::get();
        $data['pegawaiCabang']            = pegawai::where('id_jabatan', 8)->get();
        $data['pegawaiPusat']            = pegawai::where('id_jabatan', 7)->get();
        $data['pengadaan']          = pengadaan::get();
        $idproses                   = prosespengadaan::where('id_ppbj', '=', $id)->value('id');
        if (!$idproses == null) {
            $data['prosespengadaan'] = prosespengadaan::find($idproses);
        }
        $data['jumlahppbj1']    = barang::where('id', '=', $id)->count();
        $data['jumlahppbj2'] = barangrealisasi::where('id', '=', $id)->count();
        $data['jumlahppbj3'] = barangrealisasi::where('id', '=', $id)->count();
        $data['barang']    = barang::find($id);
        $data['barangg2']    = barangrealisasi::find($id);
        $data['barangnya'] = barang::where('id', '=', $id)->get();
        $data['barangnya2'] = barangrealisasi::where('id', '=', $id)->get();
        $data['barangnya3'] = barangrealisasi2::where('id', '=', $id)->get();
        $data['id']        = $id;
        // $data['unit'] = \App\unitkerja::where('id_unit', $id)->first();
        return view('kasubag.edit')->with($data);
    }
    
    public function updateassignmentPpbj(Request $r, $id)
    {
        $idproses  = prosespengadaan::where('id_ppbj', '=', $id)->value('id');
        $newproses = pbbj::find($id);
        $table     = prosespengadaan::find($idproses);
        $kodebarang = str_random(30);
        $kodebarang2 = str_random(30);
        if($r->input('id_pegawai') != "") {
            $table->id_pegawai = $r->input('id_pegawai');
            $table->mulaippbj1 = date('d-m-Y');
        }

        if ($r->input('p_tglspph') == "") {
            $table->tgl_spph = "";
        } else {
            $table->tgl_spph = $r->input('p_tglspph');
        }
        if ($r->input('p_nospph') == "") {
            $table->no_spph = "";
        } else {
            $table->no_spph     = $r->input('p_nospph');
            $table->selesaispph = date('d-m-Y');
        }
        if ($r->input('p_tgletp') == "") {
            $table->tgl_etp = "";
        } else {
            $table->tgl_etp    = $r->input('p_tgletp');
            $table->selesaietp = date('d-m-Y');
            $table->startpks = date('d-m-Y');
        }
        if ($r->input('p_tglpmn') == "") {
            $table->tgl_pmn = "";
        } else {
            $table->tgl_pmn = date($r->input('p_tglpmn'));
        }
        if ($r->input('p_nopmn') == "") {
            $table->no_pmn = "";
        } else {
            $table->no_pmn     = $r->input('p_nopmn');
            $table->selesaipmn = date('d-m-Y');
        }
        if ($r->input('p_tglkon') == "") {
            $table->tgl_kon = "";
        } else {
            $table->tgl_kon = date($r->input('p_tglkon'));
        }

        if ($r->input('p_nokon') == "") {
            $table->no_kon = "";
        } else {
            $table->no_kon     = $r->input('p_nokon');
            $table->selesaikon = date('d-m-Y');
        }

        if($r->input('p_tglpsi') == "") {
            $table->tgl_psi = "";
        }else{
            $table->tgl_psi = $r->input('p_tglpsi');
            $table->selesaipsi = date('d-m-Y');
        }

        if($r->input('p_tglkak') == "") {
            $table->tgl_kak = "";
        }else{
            $table->tgl_kak = $r->input('p_tglkak');
            $table->selesaikak = date('d-m-Y');
        }

        if($r->input('p_tglsekper') == "") {
            $table->tgl_sekper = "";
        }else{
            $table->tgl_sekper = $r->input('p_tglsekper');
            $table->selesaisekper = date('d-m-Y');
        }
        $table->vendor = $r->input('vendor');
        $table->status = $r->input('status');
        if($r->input('keteranganpengadaan') == "") {
            $table->keterangan = "";
        }else{
            $table->keterangan = $r->input('keteranganpengadaan');
        }
        $table->status = $r->input('status');
        $table->save();

        if ($r->input('pr_tglspph') == "") {
            $table->tgl_spph2 = "";
        } else {
            $table->tgl_spph2 = $r->input('pr_tglspph');
            $table->mulaippbj2 = date('d-m-Y');
        }
        if ($r->input('pr_nospph') == "") {
            $table->no_spph2 = "";
        } else {
            $table->no_spph2     = $r->input('pr_nospph');
            $table->selesaispph2 = date('d-m-Y');
        }
        if ($r->input('pr_tgletp') == "") {
            $table->tgl_etp2 = "";
        } else {
            $table->tgl_etp2    = $r->input('pr_tgletp');
            $table->selesaietp2 = date('d-m-Y');
            $table->startpks2 = date('d-m-Y');
        }
        if ($r->input('pr_tglpmn') == "") {
            $table->tgl_pmn2 = "";
        } else {
            $table->tgl_pmn2 = date($r->input('pr_tglpmn'));
        }
        if ($r->input('pr_nopmn') == "") {
            $table->no_pmn2 = "";
        } else {
            $table->no_pmn2     = $r->input('pr_nopmn');
            $table->selesaipmn2 = date('d-m-Y');
        }
        if ($r->input('pr_tglkon') == "") {
            $table->tgl_kon2 = "";
        } else {
            $table->tgl_kon2 = date($r->input('pr_tglkon'));
        }

        if ($r->input('pr_nokon') == "") {
            $table->no_kon2 = "";
        } else {
            $table->no_kon2     = $r->input('pr_nokon');
            $table->selesaikon2 = date('d-m-Y');
        }

        if($r->input('pr_tglpsi') == "") {
            $table->tgl_psi2 = "";
        }else{
            $table->tgl_psi2 = $r->input('pr_tglpsi');
            $table->selesaipsi2 = date('d-m-Y');
        }

        if($r->input('pr_tglkak') == "") {
            $table->tgl_kak2 = "";
        }else{
            $table->tgl_kak2 = $r->input('pr_tglkak');
            $table->selesaikak2 = date('d-m-Y');
        }

        if($r->input('pr_tglsekper') == "") {
            $table->tgl_sekper2 = "";
        }else{
            $table->tgl_sekper2 = $r->input('pr_tglsekper');
            $table->selesaisekper2 = date('d-m-Y');
        }
        $table->vendor2 = $r->input('prvendor');

        //ini yang ketiga~
        if ($r->input('pr3_tglspph') == "") {
            $table->tgl_spph3 = "";
        } else {
            $table->tgl_spph3 = $r->input('pr3_tglspph');
            $table->mulaippbj3 = date('d-m-Y');
        }
        if ($r->input('pr3_nospph') == "") {
            $table->no_spph3 = "";
        } else {
            $table->no_spph3     = $r->input('pr3_nospph');
            $table->selesaispph3 = date('d-m-Y');
        }
        if ($r->input('pr3_tgletp') == "") {
            $table->tgl_etp3 = "";
        } else {
            $table->tgl_etp3    = $r->input('pr3_tgletp');
            $table->selesaietp3 = date('d-m-Y');
            $table->startpks3 = date('d-m-Y');
        }
        if ($r->input('pr3_tglpmn') == "") {
            $table->tgl_pmn3 = "";
        } else {
            $table->tgl_pmn3 = date($r->input('pr_tglpmn'));
        }
        if ($r->input('pr3_nopmn') == "") {
            $table->no_pmn3 = "";
        } else {
            $table->no_pmn3     = $r->input('pr3_nopmn');
            $table->selesaipmn3 = date('d-m-Y');
        }
        if ($r->input('pr3_tglkon') == "") {
            $table->tgl_kon3 = "";
        } else {
            $table->tgl_kon3 = date($r->input('pr3_tglkon'));
        }

        if ($r->input('pr3_nokon') == "") {
            $table->no_kon3 = "";
        } else {
            $table->no_kon3     = $r->input('pr_nokon');
            $table->selesaikon3 = date('d-m-Y');
        }

        if($r->input('pr3_tglpsi') == "") {
            $table->tgl_psi3 = "";
        }else{
            $table->tgl_psi3 = $r->input('pr3_tglpsi');
            $table->selesaipsi3 = date('d-m-Y');
        }

        if($r->input('pr3_tglkak') == "") {
            $table->tgl_kak3 = "";
        }else{
            $table->tgl_kak3 = $r->input('pr3_tglkak');
            $table->selesaikak3 = date('d-m-Y');
        }

        if($r->input('pr3_tglsekper') == "") {
            $table->tgl_sekper3 = "";
        }else{
            $table->tgl_sekper3 = $r->input('pr3_tglsekper');
            $table->selesaisekper3 = date('d-m-Y');
        }
        $table->vendor3 = $r->input('pr3vendor');

        $table->save();
        
        $newproses->status = $r->input('status');
        $newproses->unitkerja = $r->input('cekcabang');
        $newproses->keterangan = $table->keterangan;
        $newproses->id_pegawai = $table->id_pegawai; //id prosespengadaan == id ppbj 
        $newproses->save();

        for ($i=0; $i < $r['rowkontrak']; $i++)
        {
            $new2 = new barangrealisasi;
            $new2->id = $table->id;
            if($r->input('rowkontrak') != "") {
                $new2->banyak_brg = $r->input('rowkontrak');
                $table->kodebarang2 = $kodebarang;
                $new2->kodebarang = $table->kodebarang2;
            }
            $new2->nama_barang= $r['namakontrak'][$i];
            $new2->jumlah_brg= $r['qtykontrak'][$i]; 
            $new2->harga_brg= $r['hargakontrak'][$i]; 
            $new2->total_brg= $r['totalkontrak'][$i];  
            $new2->hargatotal_brg= $r->input('subtotalkontrak'); 
            $table->save();
            $new2->save();
        }

        for ($i=0; $i < $r['rowkontrak3']; $i++)
        {
            $new3 = new barangrealisasi2;
            $new3->id = $table->id;
            if($r->input('rowkontrak3') != "") {
                $new3->banyak_brg = $r->input('rowkontrak3');
                $table->kodebarang3 = $kodebarang2;
                $new3->kodebarang = $table->kodebarang3;
            }
            $new3->nama_barang= $r['namakontrak3'][$i];
            $new3->jumlah_brg= $r['qtykontrak3'][$i]; 
            $new3->harga_brg= $r['hargakontrak3'][$i]; 
            $new3->total_brg= $r['totalkontrak3'][$i];  
            $new3->hargatotal_brg= $r->input('subtotalkontrak3'); 
            $table->save();
            $new3->save();
        }

         Alert::success('', 'Berhasil!')->autoclose(1300);
         if(Auth::user() && Auth::user()->akses == 'Admin') {
            return redirect()->route('allPpbj');
        }else{
            return redirect()->route('receivePpbj');
        }
    }
}