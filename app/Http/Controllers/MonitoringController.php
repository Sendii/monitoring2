<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\prosesrealisasi;
use App\prosespengadaan;
use App\barangrealisasi;
use App\unitkerja;
use App\pengadaan;
use App\pegawai;
use App\barang;
use App\pbbj;


class MonitoringController extends Controller
{
    public function allMonitoring()
    {
        $data['allMonitor'] = prosespengadaan::orderBy('updated_at', 'DESC')->paginate(10);
        $data['cekPegawai'] = prosespengadaan::get();
        
        return view('kadiv.monitoring')->with($data);
    }
    
    public function viewAlldata($id)
    {
        $data['ppbjassignmentEdit'] = pbbj::find($id);
        $data['unitkerja']          = unitkerja::get();
        $data['cekpegawai']         = prosespengadaan::get();
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
        $data['id']        = $id;
        // $data['unit'] = \App\unitkerja::where('id_unit', $id)->first();
        return view('kadiv.view')->with($data);
    }
}