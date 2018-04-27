<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\pengadaan;
use App\barang;
use App\pbbj;
use Alert;

class PengadaanController extends Controller
{
	public function all()
	{
		$data['pengadaan'] = pengadaan::paginate('10');

		return view('pengadaan.all')->with($data);
	}

    public function input()
    {
    	$data['adddata'] = pengadaan::get();

    	return view('pengadaan.add');
    }

    public function save(Request $r)
    {
    	$new = new pengadaan;
    	$new->namapengadaan = $r->input('jenispengadaan');

    	Alert::success('Data Jenis Pengadaan baru telah ditambahkan', 'Berhasil!')->autoclose(1300);
    	$new->save();

    	return redirect()->route('allpengadaan');
    }

    public function edit($id)
    {
    	$data['edit'] = pengadaan::find($id);

    	return view('pengadaan.edit')->with($data);
    }

    public function update(Request $r)
    {
    	$edit = pengadaan::find($r->input('idpengadaan'));

    	$edit->namapengadaan = $r->input('jenispengadaan');
    	Alert::success('Data Jenis Pengadaan telah diUbah', 'Berhasil!')->autoclose(1300);
    	$edit->save();

    	return redirect()->route('allpengadaan');
    }

    public function viewPpbj($namapengadaan) {
        $ppbj['ppbjall'] = pbbj::where('id_pengadaan', $namapengadaan)->with('Barang')->get();
        $ppbj['barangall'] = barang::get();
        // dd($ppbj);

        return view('ppbjview')->with($ppbj);
    } 
}
