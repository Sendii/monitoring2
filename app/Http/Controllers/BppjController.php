<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\prosespengadaan;
use App\prosesrealisasi;
use App\barangrealisasi;
use App\unitkerja;
use App\pengadaan;
use App\barang;
use App\pbbj;
use Session;
use Alert;
use Auth;
use DB;

class BppjController extends Controller
{
  public function allPpbj() {
    $data['ppbjall'] = pbbj::with('Barang')->with('getProsespengadaan')->orderBy('id', 'desc')->paginate(20);
    $data['hehe'] = pbbj::select('no_ppbj')->groupBy('no_ppbj')->get();
    $data['barangall'] = barang::get();
    return view('ppbj.all')->with($data);
  }

  public function allPpbjkd9() {
    $data = prosespengadaan::where('selesai1', '<', 9)
                          ->orWhere('selesai2', '<', 9)
                          ->orWhere('selesai3', '<', 9)->get();
    return view('ppbj/hari.kd9', ['ppbjallkd9' => $data]);
  }

  public function allPpbjsd9() {
    $data = prosespengadaan::where('selesai1', '=', 9)
                          ->orWhere('selesai2', '=', 9)
                          ->orWhere('selesai3', '=', 9)->get();
    return view('ppbj/hari.sd9', ['ppbjallsd9' => $data]);
  }

  public function allPpbjld9() {
    $data = prosespengadaan::where('selesai1', '>', 9)
                          ->orWhere('selesai2', '>', 9)
                          ->orWhere('selesai3', '>', 9)->get();
    return view('ppbj/hari.ld9', ['ppbjallld9' => $data]);
  }


  public function addPpbj() {
    $data['unitkerja'] = unitkerja::get();
    $data['pengadaan'] = pengadaan::get();
    $data['ppbjadd']     = pbbj::all();
    return view('ppbj.add')->with($data);
  }


  public function savePpbj(Request $r) 
  {        
        // $this->validate($r, [
        //     'kodePj' => 'min:3|max:4',
        //     'no_regis_umum' => 'numeric|min:9|max:10',
        //     'no_ppbj' => 'numeric|min:4|max4'
        //     ]);


    $data['barang'] = barang::where('id_barang');
    $data['ppbjadd'] = pbbj::where('id');

    $new = new pbbj;
        $new->no_regis_umum = $r->input('noregisumum');
        $new->id_unit = $r->input('id_unit');
        $random = str_random(30);

        $new->keterangan = $r->input('keterangan');
        if($new->id_unit == "Cabang Balikpapan"){
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Bandar Lampung") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Bandung") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Banjarmasin") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Batam") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Batulicin") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Bekasi") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Bengkulu") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Bontang") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Cilacap") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Cilegon") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Cirebon") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Denpasar") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Dumai") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Jakarta") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Jambi") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Makassar") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Manado") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Medan") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Padang") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Palembang") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Pekanbaru") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Pontianak") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Samarinda") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Sangatta") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Semarang") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Surabaya") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Tarakan") {
          $new->unitkerja = 'Kantor Cabang';
        }elseif($new->id_unit == "Cabang Timika") {
          $new->unitkerja = 'Kantor Cabang';
        }else{
          $new->unitkerja = 'Kantor Pusat';
        }

        $new->tgl_regis_umum = $r->input('tglregisumum');
        $new->no_ppbj = $r->input('noppbj'); //text, 20 nomor
        $new->tgl_permintaan_ppbj = $r->input('tglpermintaanPpbj');
        $new->tgl_dibutuhkan_ppbj = $r->input('tgldibutuhkanPpbj');
        $new->namapengadaan = $r->input('namapengadaan'); 
        $new->id_pengadaan = $r->input('jenispengadaan'); 
        if($r->input('row') != "") {
            $new->kodebarang = $random;
          }
        $new->save();

        for ($i=0; $i < $r['row']; $i++)
        {
         $new2 = new barang;
         $new2->id = $new->id;
         if($r->input('row') != "") {
          $new2->banyak_brg = $r->input('row');
          $new2->kodebarang = $new->kodebarang;
         }
         $new2->nama_barang= $r['nama'][$i];
         $new2->jumlah_brg= $r['qty'][$i]; 
         $new2->harga_brg= $r['harga'][$i]; 
         $new2->total_brg= $r['total'][$i];  
         $new2->hargatotal_brg= $r->input('subtotal'); 
         Alert::success('Data Ppbj baru telah ditambahkan', 'Berhasil!')->autoclose(1300);
         $new2->save();
       }

       $id_ppbj = pbbj::orderBy('created_at', 'desc')->first();          
       $newprosespengadaan = new prosespengadaan;
        // $editprosespengadaan = prosespengadaan::find($r->input('id_pemroses'));
       $newproses = pbbj::find($id_ppbj->id);
       $newprosesrealisasi = new prosesrealisasi;
       $newprosespengadaan->id_pegawai = $r->input('id_pegawai');
        $newprosespengadaan->id_ppbj = $newproses->id; //id prosespengadaan == id ppbj 
        $newprosespengadaan->keterangan = $new->keterangan;
        $newprosesrealisasi->id_ppbj = $newproses->id;
        $newprosesrealisasi->save();
        $newprosespengadaan->save();
        return redirect()->route('allPpbj');
      }

      public function editPpbj($id) 
      {
        $data['jumlah'] = barang::where('id', '=', $id)->count();
        $data['barangnya'] = barang::where('id', '=', $id)->get();
        $data['unitkerja'] = unitkerja::get();
        $data['pengadaan'] = pengadaan::get();
        $data['ppbjedit'] = pbbj::find($id);
      // $data['editbarang'] = pbbj::with('Barang')->orderBy('id', 'desc')->find($id);
        $data['barang'] = barang::find($id);
        $data['id'] = $id;

        
        return view('ppbj.edit')->with($data);
      }

      public function updatePpbj(Request $r) {      
        $edit = pbbj::find($r->input('id'));
        $edit->kodePj = $r->input('kodePj');
        $edit->no_regis_umum = $r->input('noregisumum');
        $edit->id_unit = $r->input('id_unit');
        $edit->namapengadaan = $r->input('jenispengadaan');  
        $edit->tgl_regis_umum = $r->input('tglregisumum');
        $edit->no_ppbj = $r->input('noppbj');
        $edit->tgl_permintaan_ppbj = $r->input('tglpermintaanppbj');
        $edit->tgl_dibutuhkan_ppbj = $r->input('tgldibutuhkanppbj');
        $edit->namapengadaan = $r->input('jenispengadaan'); 

        $edit->save();

        $data = $r->except(['_token']); 
      // return dd($data);

        $row = count($data['id_barang']);
        for ($i=0; $i < $row; $i++) {        
          DB::table('barangs')->where('id_barang', '=', $data['id_barang'][$i])->update([
            'banyak_brg' => $r->input('row'),
            'nama_barang' => $data['nama'][$data['id_barang'][$i]],
            'jumlah_brg' => $data['qty'][$data['id_barang'][$i]],
            'harga_brg' => $data['harga'][$data['id_barang'][$i]],
            'total_brg' => $data['total'][$data['id_barang'][$i]],
            'hargatotal_brg' => $r->input('subtotal')]);
        }
        Alert::success('Data Ppbj telah diEdit', 'Berhasil!')->autoclose('1300');
        return redirect()->route('allPpbj');
      }

      public function delete_ppbj($id)
      {
        $ppbj = pbbj::findOrFail($id);
        $pbbj->destroy($id);
        Alert::success('Data Ppbj telah dihapus', 'Berhasil!')->autoclose(1300);
        return redirect()->route('allPpbj');
      }

      public function prosesrealisasi(Request $r, ...$id)
      {
        $idproses  = prosespengadaan::where('id_ppbj', $id)->value('id');
        $table     = prosespengadaan::find($idproses);
        $newproses = pbbj::find($id);
       Alert::success('sa', 'Berhasil!')->autoclose('1300');
       return redirect()->route('allPpbj');
     }

   public function viewppbjcabang() {
    $akses        = Auth::user()->akses;
    $first_akses  = strtok($akses, ' ');
    $second_akses = strtok('');
    $ppbj['ppbjall'] = pbbj::where('id_unit','=', 'Cabang '.$second_akses)->with('Barang')->get();
    $ppbj['barangall'] = barang::get();
        // dd($ppbj);

    return view('ppbjview')->with($ppbj);
  }

  public function viewppbjpusat() {
    //misal aksesnya pusat
    $akses = Auth::user()->akses;
    $first_akses  = strtok($akses, ' ');
    $second_akses = strtok('');
    $akses2 = Auth::user()->akses;
    $divisi = Auth::user()->akses =='Divisi '.$second_akses;
    $pengawasint = Auth::user()->akses =='Satuan '.$second_akses;
    $sbu = Auth::user()->akses =='SBU '.$second_akses;

    if($akses2 == $divisi) {
      $ppbj['ppbjall'] = pbbj::where('id_unit','=', 'Divisi '.$second_akses)->with('Barang')->get();
    }elseif($akses2 == $pengawasint) {
      $ppbj['ppbjall'] = pbbj::where('id_unit','=', 'Satuan '.$second_akses)->with('Barang')->get();
    }elseif($akses2 == $sbu) {
      $ppbj['ppbjall'] = pbbj::where('id_unit','=', 'SBU '.$second_akses)->with('Barang')->get();
    }else {
      echo "error";
    }

    $ppbj['barangall'] = barang::get();
        // dd($ppbj);

    return view('ppbjview')->with($ppbj);
  }

  public function ppbjselesai() {
    //DATA INI PERLU DI SELECT!!!!!
    $_requestUrl = basename($_SERVER['REQUEST_URI']);
    if($_requestUrl == "ppbjterselesaikan"){
        $data['prosespengadaan'] = prosespengadaan::with('getPpbj')->select('no_kon')
                              ->groupBy('no_kon')
                              ->orWhereNotNull('selesai1')
                              ->orWhereNotNull('selesai2')
                              ->orWhereNotNull('selesai3')
                              ->get();

        $data['prosespengadaan'] = prosespengadaan::with('getPpbj')
                              ->orWhereNotNull('selesai1')
                              ->orWhereNotNull('selesai2')
                              ->orWhereNotNull('selesai3')
                              ->get();                     
    }else if($_requestUrl == "ppbjbelumselesai"){
        $data['prosespengadaan'] = prosespengadaan::with('getPpbj')
                              ->orWhere('selesai1')
                              ->orWhere('selesai2')
                              ->orWhere('selesai3')
                              ->get();
                            }
    return view('ppbj.ppbjselesai')->with($data);
  }

  public function ppbjbelumselesai() {

  }

  public function kontrakselesai($no_kon) {
    $data['kontrakselesai'] = prosespengadaan::with('getPpbj')->where('no_kon', $no_kon)->get();
    return view('ppbj.kontrakselesai')->with($data);
  }

  public function kontrakselesai2($no_kon2) {
    $data['kontrakselesai2'] = prosespengadaan::with('getPpbj')->where('no_kon2', $no_kon2)->get();
    return view('ppbj.kontrakselesai2')->with($data);
  }

  public function kontrakselesai3($no_kon3) {
    $data['kontrakselesai2'] = prosespengadaan::with('getPpbj')->where('no_kon3', $no_kon3)->get();
    return view('ppbj.kontrakselesai3')->with($data);
  }

  public function kontrakbelumselesai($no_kon) {
    $data['kontrakselesai'] = prosespengadaan::with('getPpbj')->where('no_kon', $no_kon)->get();
    return view('ppbj.kontrakbelumselesai')->with($data);
  }

  public function kontrakbelumselesai2($no_kon2) {
    $data['kontrakselesai2'] = prosespengadaan::with('getPpbj')->where('no_kon2', $no_kon2)->get();
    return view('ppbj.kontrakbelumselesai2')->with($data);
  }

  public function kontrakbelumselesai3($no_kon3) {
    $data['kontrakselesai3'] = prosespengadaan::with('getPpbj')->where('no_kon3', $no_kon3)->get();
    return view('ppbj.kontrakbelumselesai3')->with($data);
  }

  public function vendor($vendor) {
    $data['prosespengadaan'] = prosespengadaan::where('vendor', '=', $vendor)->get();
    return view('ppbj.vendorselesai')->with($data);
  }

  public function vendor2($vendor2) {
    $data['prosespengadaan'] = prosespengadaan::where('vendor2', '=', $vendor2)->get();
    return view('ppbj.vendorselesai2')->with($data);
  }

  public function vendor3($vendor3) {
    $data['prosespengadaan'] = prosespengadaan::where('vendor3', '=', $vendor3)->get();
    return view('ppbj.vendorselesai3')->with($data);
  }

  public function unvendor($vendor) {
    $data['prosespengadaan'] = prosespengadaan::where('vendor', '=', $vendor)->get();
    return view('ppbj.vendorbelumselesai')->with($data);
  }

  public function unvendor2($vendor2) {
    $data['prosespengadaan'] = prosespengadaan::where('vendor2', '=', $vendor2)->get();
    return view('ppbj.vendorbelumselesai2')->with($data);
  }

  public function unvendor3($vendor3) {
    $data['prosespengadaan'] = prosespengadaan::where('vendor3', '=', $vendor3)->get();
    return view('ppbj.vendorbelumselesai3')->with($data);
  }

  public function pegawai($id_pegawai) {
    $data['ppbjPegawai'] = prosespengadaan::where('id_pegawai', '=', $id_pegawai)->get();
    return view('ppbj.pegawaiselesai')->with($data);
  }

  public function ppbj($no_ppbj) {
    $data['ppbj'] = pbbj::where('no_ppbj', '=', $no_ppbj)->get();

    return view('ppbj.ppbj')->with($data);
  }
}
