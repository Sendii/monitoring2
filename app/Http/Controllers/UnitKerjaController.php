<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\unitkerja;
use App\barang;
use App\pbbj;
use Alert;

class UnitKerjaController extends Controller
{
    public function allUnit()
    {
        $data['UnitAll'] = unitkerja::paginate(54);
        $data['ppbjs'] = pbbj::get();
        return view('Unit.all')->with($data);
    }
    
    public function addUnit()
    {
        $data['UnitKerja'] = unitkerja::all();
        
        return view('Unit.add')->with($data);
    }
    
    public function saveUnit(Request $r)
    {
        // $data['UnitKerja'] = unitkerja::find($id_unit);

        $new             = new unitkerja;
        $new->aa         = $r->input('unitkerja');
        $new->unit_kerja = $r->input('kantor');
        
        Alert::success('Data UnitKerja baru telah ditambahkan', 'Berhasil!')->autoclose(1300);
        $new->save();
        
        return redirect()->route('allUnit');
    }
    
    public function editUnit($id_unit)
    {
        $data['editunit'] = unitkerja::where('id_unit', $id_unit)->first();
        
        return view('Unit.edit')->with($data);
    }
    
    public function updateUnit(Request $r)
    {
        $editunit = unitkerja::find($r->input('id_unit'));
        
        $editunit->aa         = $r->input('namacabang');
        $editunit->unit_kerja = $r->input('unitkerja');
        Alert::success('Data Ppbj baru telah diedit', 'Berhasil!')->autoclose(1300);
        $editunit->save();
        return redirect()->route('allUnit');
    }

    public function viewPpbj($id_unit) {
        $ppbj['ppbjall'] = pbbj::where('id_unit', $id_unit)->with('Barang')->get();
        $ppbj['barangall'] = barang::get();
        // dd($ppbj);

        return view('ppbjview')->with($ppbj);
    } 

    public function allCabang() {
        $data['cabang'] = unitkerja::where('unit_kerja', 'Kantor Cabang')->get();
        $data['ppbjs'] = pbbj::get();

        return view('Unit.cabang')->with($data);
    }

    public function allPusat() {
        $data['pusat'] = unitkerja::where('unit_kerja', 'Kantor Pusat')->get();

        return view('Unit.pusat')->with($data);
    }
}