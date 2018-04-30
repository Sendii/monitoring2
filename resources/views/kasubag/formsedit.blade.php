<!DOCTYPE html>
<html lang="id">

<head>
</head>
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
<style type="text/css">
#addrealisasi {
    display: none;
}
#muncul {
    display: block;
}
#addrealisasi2 {
    display: none;
}
#muncul2 {
    display: block;
}
</style>
<body class="hold-transition skin-blue sidebar-mini" background="github.png">
    <div class="content-wrapper">
        <div class="container-fluid spark-screen">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <center>
                            <h2>Data Ppbj</h2> </center>
                            <div class="box-header with-border">
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            {!! csrf_field() !!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Kode PJ</label>
                                    <div class="col-sm-2">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            <input type="text" name="kodePj" value=" {{$ppbjassignmentEdit->kodePj or ''}} " class="form-control" placeholder="Kode PJ" disabled="disabled">
                                            <input type="hidden" name="cekcabang" value="{{$ppbjassignmentEdit->unitkerja}}">
                                            <input type="hidden" name="status" value="{{$ppbjassignmentEdit->status}}">
                                            <input type="hidden" name="keteranganppbj" value="{{$ppbjassignmentEdit->keterangan}}">
                                            <input type="hidden" name="id" value="{{$ppbjassignmentEdit->id}}">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label">No. Registrasi Umum</label>
                                    <div class="col-sm-2">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            <input type="text" name="noregisumum" value=" {{$ppbjassignmentEdit->no_regis_umum or ''}} " class="form-control" id="inputPassword3" placeholder="No. Regis Umum" disabled="disabled">
                                        </div>
                                    </div>
                                    <label class="col-sm-1 control-label">No. Ppbj</label>
                                    <div class="col-sm-2">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            <input type="text" name="noppbj" value=" {{$ppbjassignmentEdit->no_ppbj or ''}} " class="form-control" id="inputPassword3" placeholder="No. Ppbj" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tgl. Registrasi Umum</label>
                                    <div class="col-sm-2">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="tglregisumum" value="{{date($ppbjassignmentEdit->tgl_regis_umum)}}" class="form-control" id="inputPassword3" placeholder="Tgl. Regis Umum" disabled="disabled">
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label">Tgl. Permintaan Ppbj</label>
                                    <div class="col-sm-2">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="tglpermintaanppbj" value="{{date($ppbjassignmentEdit->tgl_permintaan_ppbj)}}" class="form-control" id="inputPassword3" placeholder="Tgl Permintaan Ppbj" disabled="disabled">
                                        </div>
                                    </div>
                                    <label class="col-sm-1 control-label">Tgl. Dibutuhkan</label>
                                    <div class="col-sm-2">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="tgldibutuhkanppbj" value="{{date($ppbjassignmentEdit->tgl_dibutuhkan_ppbj)}}" class="form-control" id="inputPassword3" placeholder="Tgl Dibutuhkan center" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Pengadaan</label>
                                    <div class="col-sm-7">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            <input type="text" name="jenispengadaan" class="form-control" placeholder="Jenis Pengadaan" value=" {{$ppbjassignmentEdit->id_pengadaan or ''}} " disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Unit Kerja</label>
                                    <div class="col-sm-3">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-plane"></i>
                                            </div>
                                            <select name="id_unit" class="form-control select2" style="width:100%;" tabindex="-1" aria-hidden="true">
                                                @foreach($unitkerja as $key)
                                                <option value="{{$key->aa}}" {{ $ppbjassignmentEdit->id_unit == $key->aa ? 'selected' : '' }} > {{$key->aa}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jumlah Barang/Jasa</label>
                                    <div class="col-sm-3">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            <input type="number" name="row" value="{{$jumlahppbj1}}" class="form-control" placeholder="Masukan angka..." readonly>
                                        </div>
                                    </div>
                                </div>
                            @if($ppbjassignmentEdit->kodebarang != "")
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama Barang/Jasa</th>
                                                    <th>Jumlah Barang/Jasa</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($barangnya as $barang)
                                        <tr>
                                            <td>
                                                <input type="text" name="nama[{{ $barang->id_barang }}]" class="form-control" placeholder="Nama Barang/Jasa" value="{{ $barang->nama_barang }}">
                                            </td>
                                            <td>
                                                <input type="number" min="1" id="qty{{$barang->id_barang}}" name="qty[{{ $barang->id_barang }}]" placeholder="Jumlah Barang/Jasa" class="form-control qty qty'+i+'" oninput="calculate1();" value="{{ $barang->jumlah_brg }}">
                                            </td>
                                            <td>
                                                <input type="number" min="1" id="harga{{$barang->id_barang}}" name="harga[{{ $barang->id_barang }}]" placeholder="Harga Satuan" id="amount" oninput="calculate1();" class="form-control input-sm text-right amount harga harga'+i+'" value="{{ $barang->harga_brg }}">
                                            </td>
                                            <td>
                                                <input type="text" id="total{{$barang->id_barang}}" name="total[{{ $barang->id_barang }}]" placeholder="Total Harga" class="form-control input-sm text-right amount total total1'+i+'" value="{{ $barang->total_brg }}" readonly>
                                            </td>
                                            <th class="removes">Hapus</th>
                                        </tr>
                                        @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td>
                                                        <input type="text" id="subtotal" name="subtotal" class="form-control subtotal1" placeholder="Total Semua" value="{{ $barang->hargatotal_brg }}" disabled="disabled">
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                @else
                                <center><h3>Tidak ada data barang!</h3></center>
                            @endif

                                <!-- Penugasan dari Kasubag Ke Pegawai Utk Memonitoring ke Kepala Divisi -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pemroses</label>
                                    <div class="col-sm-3">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <select name="id_pegawai" class="form-control select2">
                                                @if(Auth::user() && Auth::user()->akses == 'Kasubag Cabang')
                                                    <option value="">Pilih Pemroses</option>
                                                        @foreach($pegawaiCabang as $key)
                                                            <option value="{{$key->namapegawai}}" {{$prosespengadaan->id_pegawai == $key->namapegawai ? 'selected' : ''}}> {{$key->namapegawai}}</option>
                                                        @endforeach
                                                @elseif(Auth::user() && Auth::user()->akses == 'Kasubag Pusat')
                                                    <option value="">Pilih Pemroses</option>
                                                        @foreach($pegawaiPusat as $key)
                                                            <option value="{{$key->namapegawai}}" {{$prosespengadaan->id_pegawai == $key->namapegawai ? 'selected' : ''}}> {{$key->namapegawai}}</option>
                                                        @endforeach
                                                @elseif(Auth::user() && Auth::user()->akses == 'Kasubag QA')
                                                    <option value="">Pilih Pemroses</option>
                                                        @foreach($pegawaiaja as $key)
                                                            <option value="{{$key->namapegawai}}" disabled="disabled" {{$prosespengadaan->id_pegawai == $key->namapegawai ? 'selected' : ''}}> {{$key->namapegawai}}</option>
                                                        @endforeach
                                                @elseif(Auth::user() && Auth::user()->akses == 'Admin')
                                                    <option value="">Pilih Pemroses</option>
                                                        @foreach($pegawaiaja as $key)
                                                            <option value="{{$key->namapegawai}}" disabled="disabled" {{$prosespengadaan->id_pegawai == $key->namapegawai ? 'selected' : ''}}> {{$key->namapegawai}}</option>
                                                        @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                @if($prosespengadaan->keterangan != "")
                                    <label class="col-sm-2 control-label">Keterangan</label>
                                    <div class="col-sm-3">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            <input type="text" name="row" value="{{$prosespengadaan->keterangan or ''}}" class="form-control" placeholder="Keterangan" readonly>
                                        </div>
                                    </div>
                                @endif

                                    @if(Auth::user() && Auth::user()->akses == 'Kasubag QA')
                                        @if($prosespengadaan->status == "Pending")
                                        <label class="col-sm-2 control-label">Status Ppbj</label>
                                        <div class="col-sm-3">
                                            <script type="text/javascript">

   function changeFunc() {
     var zone = document.getElementById("selectBox");

    if (zone.value == "Accepted"){
            
    }else if(zone.value == "NonAccepted"){
            var demo = document.getElementById("demo").classList.remove("ini");
;
              return false;
    }
   }

  </script>
  <div></div>
  <style type="text/css">
      .ini {
        display: none;
      }
      #demo {
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        font-family: inherit;
        text-transform: none;
        margin: 0;
      }
      #demo:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
#demo::-moz-placeholder {
  color: #999;
  opacity: 1;
}
#demo:-ms-input-placeholder {
  color: #999;
}
#demo::-webkit-input-placeholder {
  color: #999;
}
#demo::-ms-expand {
  background-color: transparent;
  border: 0;
}
  </style>
  <input id="demo" class="ini" type="text" name="keteranganpengadaan" placeholder="Keterangans">
                                            <select id="selectBox" onchange="changeFunc();" name="status" class="form-control select2">
                                                <option value="">Status Ppbj</option>
                                                <option id="diterima" value="Accepted">Diterima</option>
                                                <option id="ditolak" value="NonAccepted">Ditolak</option>
                                            </select>
                                        </div>
                                        @else
                                        <label class="col-sm-2 control-label">Status Ppbj</label>
                                        <div class="col-sm-3">
                                            <select name="status" class="form-control select2">
                                                <option value="{{$prosespengadaan->status}}" readonly  {{$prosespengadaan->status == 'NonAccepted'}} ? : 'selected' ''>{{$prosespengadaan->status}}</option>
                                            </select>
                                        </div>
                                        @endif
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tgl. Spph</label>
                                    <div class="col-sm-3">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="p_tglspph" class="form-control" placeholder="Tgl. Spph" id="tglspph" value="{{$prosespengadaan->tgl_spph}}" >
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label">No. Spph</label>
                                    <div class="col-sm-3">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            <input type="text" name="p_nospph" value="{{$prosespengadaan->no_spph or ''}}" class="form-control" id="inputPassword3" placeholder="No. Spph" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tgl. Etp</label>
                                <div class="col-sm-3">
                                    <div class="input-group text">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="p_tgletp" class="form-control" placeholder="Tgl. Etp" id="tgletp" value="{{$prosespengadaan->tgl_etp}}" >
                                    </div>
                                </div>
                            </div>
                        @if($ppbjassignmentEdit->kodebarang != "")
                            @if($barang->hargatotal_brg >= 1000000000)
                                    <div class="form-group">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal Penyelesaian PSI</th>
                                                        <th>Tanggal Penyelesaian KAK</th>
                                                        <th>Tanggal Penyelesaian SekPer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" placeholder="Selesai PSI" name="p_tglpsi" class="form-control" id="tglpsi1" value="{{date($prosespengadaan->tgl_psi)}}">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="Selesai KAK" name="p_tglkak" class="form-control" id="tglkak1" value="{{date($prosespengadaan->tgl_kak)}}">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="Selesai Sekper" name="p_tglsekper" class="form-control" id="tglsekper1" value="{{date($prosespengadaan->tgl_sekper)}}">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endif
                            @endif
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tgl. Pengumuman</label>
                                <div class="col-sm-3">
                                    <div class="input-group text">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="p_tglpmn" class="form-control" placeholder="Tgl. Pengumuman" id="tglpmn" value="{{$prosespengadaan->tgl_pmn}}" >
                                    </div>
                                </div>
                                <label class="col-sm-2 control-label">No. Pengumuman</label>
                                <div class="col-sm-3">
                                    <div class="input-group text">
                                        <div class="input-group-addon">
                                            <i class="fa fa-apple"></i>
                                        </div>
                                        <input type="text" name="p_nopmn" class="form-control" id="inputPassword3" placeholder="No. Pengumuman" value="{{$prosespengadaan->no_pmn}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tgl. Kontrak</label>
                                <div class="col-sm-3">
                                    <div class="input-group text">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="p_tglkon" class="form-control" placeholder="Tgl. Kontrak" id="tglkon" value="{{$prosespengadaan->tgl_kon}}" >
                                    </div>
                                </div>
                                <label class="col-sm-2 control-label">No. Kontrak</label>
                                <div class="col-sm-3">
                                    <div class="input-group text">
                                        <div class="input-group-addon">
                                            <i class="fa fa-apple"></i>
                                        </div>
                                        <input type="text" name="p_nokon" class="form-control" id="inputPassword3" placeholder="No. Kontrak" value="{{$prosespengadaan->no_kon}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Vendor</label>
                                <div class="col-sm-3">
                                    <div class="input-group text">
                                        <div class="input-group-addon">
                                            <i class="fa fa-university"></i>
                                        </div>
                                        <input type="text" name="vendor" value="{{$prosespengadaan->vendor}}" class="form-control" placeholder="Nama PT" >
                                    </div>
                                </div>
                                <?php 
                                            $awal1  = strtotime($prosespengadaan->mulaippbj1);
                                            $akhir1 = strtotime($prosespengadaan->selesaikon); // Waktu sekarang
                                            $diffe1  = $akhir1 - $awal1;

                                            $awal2  = strtotime($prosespengadaan->mulaippbj2);
                                            $akhir2 = strtotime($prosespengadaan->selesaikon2); // Waktu sekarang
                                            $diffe2  = $akhir2 - $awal2;

                                            $awal3  = strtotime($prosespengadaan->mulaippbj3);
                                            $akhir3 = strtotime($prosespengadaan->selesaikon3); // Waktu sekarang
                                            $diffe3  = $akhir3 - $awal3;
                                            $a = ' ';
                                            $_1 = floor($diffe1 / (60 * 60  * 24) + 1);
                                            $_2 = floor($diffe2 / (60 * 60  * 24) + 1);
                                            $_3 = floor($diffe3 / (60 * 60  * 24) + 1);
                                            $totalhari1 = 'Waktu pengerjaan dengan vendor '.$prosespengadaan->vendor.$a. floor($diffe1 / (60 * 60  * 24) + 1) . ' hari';
                                            $totalhari2 = 'Waktu pengerjaan dengan vendor '.$prosespengadaan->vendor2.$a. floor($diffe2 / (60 * 60  * 24) + 1) . ' hari';
                                            $totalhari3 = 'Waktu pengerjaan dengan vendor '.$prosespengadaan->vendor3.$a. floor($diffe3 / (60 * 60  * 24) + 1) . ' hari';
                                        ?>
                                @if($prosespengadaan->selesaikon != "")
                                            <span>{{$totalhari1}}</span>
                                @endif
                                    <input type="hidden" name="selesaivendor1" value="">
                                    <input type="hidden" name="selesaivendorr1" value="{{$_1}}">

                                    <input type="hidden" name="selesaivendor2" value="">
                                    <input type="hidden" name="selesaivendorr2" value="{{$_2}}">

                                    <input type="hidden" name="selesaivendor3" value="">
                                    <input type="hidden" name="selesaivendorr3" value="{{$_3}}">

                            </div>
                            @if($prosespengadaan->selesaikon == "")
                            <div class="box-footer">
                                <button type="submit" name="simpan" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;Simpan1</button>
                            </div>
                            @endif
                            @if($prosespengadaan->selesaikon != "")
                            @if(Auth::user() && Auth::user()->akses == 'Admin')
                            <div class="box-footer">
                                @if($prosespengadaan->kodebarang2 == "")
                                <a id="muncul" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i>&nbsp;Tambah</a>
                                @else
                                <a id="muncul" class="btn btn-primary pull-right"><i class="fa fa-arrow-circle-down"></i>&nbsp;Lihat2</a>
                                @endif
                            </div>
                            <!-- data realisasi pertama -->
                            <div class="row" id="addrealisasi">
                                 <hr>
                                 <div class="form-group">
                                    <center>
                                        <label class="label-control col-sm-12" style="font-size: 20px">Data Barang/Jasa Setelah Kontrak </label>
                                    </center>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jumlah Barang/Jasa</label>
                                    <div class="col-sm-3">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            @if($prosespengadaan->kodebarang2 != "")
                                            <input type="number" name="rowkontrak" class="form-control" placeholder="{{$jumlahppbj2}}">
                                            @elseif($prosespengadaan->kodebarang2 == "")
                                            <input type="number" name="rowkontrak" class="form-control" placeholder="Masukan angka..." value="{{$jumlahppbj2}}" required autofocus min="2" max="10">
                                            @else
                                            <h4>ada kesalahan</h4>
                                            @endif
                                        </div><br>
                                    </div>
                                    <div class="rowkontrak">
                                        <div class="col-md-10 col-md-offset-1">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Barang/Jasa</th>
                                                        <th>Jumlah Barang/Jasa</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tbody">
                                                @if($prosespengadaan->kodebarang2 != "")
                                                    @foreach($barangnya2 as $barang2)
                                                <tr>
                                                    <td>
                                                        <input type="text" name="namakontrak[]" class="form-control" placeholder="Nama Barang/Jasa" value="{{ $barang2->nama_barang }}" disabled="disabled">
                                                    </td>
                                                    <td>
                                                        <input type="number" min="1" id="qty{{$barang->id_barang}}" name="qtykontrak[]" placeholder="Jumlah Barang/Jasa" class="form-control qty qty'+i+'" oninput="calculate();" value="{{ $barang2->jumlah_brg }}" disabled="disabled">
                                                    </td>
                                                    <td>
                                                        <input type="number" min="1" id="harga{{$barang->id_barang}}" name="hargakontrak[]]" placeholder="Harga Satuan" id="amount" oninput="calculate();" class="form-control input-sm text-right amount harga harga'+i+'" value="{{ $barang2->harga_brg }}" disabled="disabled">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="total{{$barang->id_barang}}" name="totalkontrak[]" placeholder="Total Harga" class="form-control input-sm text-right amount total total'+i+'" value="{{ $barang2->total_brg }}" disabled="disabled">
                                                    </td>
                                                    <th class="remove">Hapus</th>
                                                </tr>
                                                @endforeach
                                            @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td>
                                                            @if($prosespengadaan->kodebarang2 != "")
                                                            <input type="text" name="subtotalkontrak" class="form-control subtotalkontrak" placeholder="Total Semua" value="{{$barangg2->hargatotal_brg}}" readonly>
                                                            @else
                                                            <input type="text" name="subtotalkontrak" class="form-control subtotalkontrak" placeholder="Total Semua" value="" readonly>
                                                            @endif
                                                        </td>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tgl. Spph</label>
                                            <div class="col-sm-3">
                                                <div class="input-group text">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" name="pr_tglspph" class="form-control" placeholder="Tgl. Spph" id="tglprspph" value="{{$prosespengadaan->tgl_spph2}}">
                                                </div>
                                            </div>
                                            <label class="col-sm-2 control-label">No. Spph</label>
                                            <div class="col-sm-3">
                                                <div class="input-group text">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                    <input type="text" name="pr_nospph" value="{{$prosespengadaan->no_spph2 or ''}}" class="form-control" id="inputPassword3" placeholder="No. Spph">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tgl. Etp</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="pr_tgletp" class="form-control" placeholder="Tgl. Etp" id="tglpretp" value="{{$prosespengadaan->tgl_etp2}}">
                                            </div>
                                        </div>
                                    </div>
                                @if($prosespengadaan->kodebarang2 != "")
                                    @if($barangg2->hargatotal_brg >= 1000000000)
                                    <div class="form-group">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal Penyelesaian PSI</th>
                                                        <th>Tanggal Penyelesaian KAK</th>
                                                        <th>Tanggal Penyelesaian SekPer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" placeholder="Selesai PSI" name="pr_tglpsi" class="form-control" id="tglpsi2" value="{{date($prosespengadaan->tgl_psi2)}}">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="Selesai KAK" name="pr_tglkak" class="form-control" id="tglkak2" value="{{date($prosespengadaan->tgl_kak2)}}">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="Selesai Sekper" name="pr_tglsekper" class="form-control" id="tglsekper2" value="{{date($prosespengadaan->tgl_sekper2)}}">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @endif
                                @endif
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tgl. Pengumuman</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="pr_tglpmn" class="form-control" placeholder="Tgl. Pengumuman" id="tglprpmn" value="{{$prosespengadaan->tgl_pmn2}}">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 control-label">No. Pengumuman</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-apple"></i>
                                                </div>
                                                <input type="text" name="pr_nopmn" class="form-control" id="inputPassword3" placeholder="No. Pengumuman" value="{{$prosespengadaan->no_pmn2}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tgl. Kontrak</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="pr_tglkon" class="form-control" placeholder="Tgl. Kontrak" id="tglprkon" value="{{$prosespengadaan->tgl_kon2}}">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 control-label">No. Kontrak</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-apple"></i>
                                                </div>
                                                <input type="text" name="pr_nokon" class="form-control" id="inputPassword3" placeholder="No. Kontrak" value="{{$prosespengadaan->no_kon2}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Vendor</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-university"></i>
                                                </div>
                                                <input type="text" name="prvendor" value="{{$prosespengadaan->vendor2}}" class="form-control" placeholder="Nama PT">
                                            </div>
                                        </div>
                                        @if($prosespengadaan->selesaikon2 != "")
                                        <span>{{$totalhari2}}</span>
                                        @endif
                                    </div>
                                    <div class="box-footer">
                                    @if($prosespengadaan->selesaikon2 == "")
                                        <button type="submit" name="simpan" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;Simpan2</button>
                                    @elseif($prosespengadaan->selesaikon2 != "")
                                        <a id="muncul2" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i>&nbsp;Tambah</a>
                                    @else
                                        <a id="muncul2" class="btn btn-primary pull-right"><i class="fa fa-arrow-circle-down"></i>&nbsp;Lihat3</a>
                                    @endif
                                    </div>
                            </div>
                            <!-- data realisasi ketiga -->
                            @if($prosespengadaan->selesaikon2 != "")
                            <div class="row" id="addrealisasi2">
                                 <hr>
                                 <div class="form-group">
                                    <center>
                                        <label class="label-control col-sm-12" style="font-size: 20px">Data Barang/Jasa Setelah Kontrak3 </label>
                                    </center>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jumlah Barang/Jasa</label>
                                    <div class="col-sm-3">
                                        <div class="input-group text">
                                            <div class="input-group-addon">
                                                <i class="fa fa-apple"></i>
                                            </div>
                                            <?php 
                                            $data3 = \App\barangrealisasi2::where('kodebarang', '=', $prosespengadaan->kodebarang3)->count();
                                            $data4['inidata'] = \App\barangrealisasi2::where('kodebarang', '=', $prosespengadaan->kodebarang3)->get();
                                        ?>
                                            @if($prosespengadaan->kodebarang3 != "")
                                            <input type="number" name="rowkontrak3" class="form-control" placeholder="{{$data3}}">
                                            @elseif($prosespengadaan->kodebarang3 == "")
                                            <input type="number" name="rowkontrak3" class="form-control" placeholder="Masukan angka..." value="{{$data3}}" required autofocus min="2" max="10">
                                            @else
                                            <h4>ada kesalahan</h4>
                                            @endif
                                        </div><br>
                                    </div>
                                    <div class="rowkontrak3">
                                        <div class="col-md-10 col-md-offset-1">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Barang/Jasa</th>
                                                        <th>Jumlah Barang/Jasa</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tbody3">
                                                @if($prosespengadaan->kodebarang3 != "")
                                                    @foreach($barangnya3 as $barang2)
                                                <tr>
                                                    <td>
                                                        <input type="text" name="namakontrak[]" class="form-control" placeholder="Nama Barang/Jasa" value="{{ $barang2->nama_barang }}" disabled="disabled">
                                                    </td>
                                                    <td>
                                                        <input type="number" min="1" id="qty{{$barang->id_barang}}" name="qtykontrak[]" placeholder="Jumlah Barang/Jasa" class="form-control qty qty'+i+'" oninput="calculate();" value="{{ $barang2->jumlah_brg }}">
                                                    </td>
                                                    <td>
                                                        <input type="number" min="1" id="harga{{$barang->id_barang}}" name="hargakontrak[]]" placeholder="Harga Satuan" id="amount" oninput="calculate();" class="form-control input-sm text-right amount harga harga'+i+'" value="{{ $barang2->harga_brg }}" disabled="disabled">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="total{{$barang->id_barang}}" name="totalkontrak[]" placeholder="Total Harga" class="form-control input-sm text-right amount total total'+i+'" value="{{ $barang2->total_brg }}" disabled="disabled">
                                                    </td>
                                                    <th class="remove">Hapus</th>
                                                </tr>
                                                @endforeach
                                            @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td>
                                                            @if($prosespengadaan->kodebarang3 != "")
                                                            <input type="text" name="subtotalkontrak3" class="form-control subtotalkontrak3" placeholder="Total Semua" value="{{$barangg3->hargatotal_brg}}" readonly>
                                                            @else
                                                            <input type="text" name="subtotalkontrak3" class="form-control subtotalkontrak3" placeholder="Total Semua" value="" readonly>
                                                            @endif
                                                        </td>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tgl. Spph</label>
                                            <div class="col-sm-3">
                                                <div class="input-group text">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" name="pr3_tglspph" class="form-control" placeholder="Tgl. Spph" id="tglprspph2" value="{{$prosespengadaan->tgl_spph3}}">
                                                </div>
                                            </div>
                                            <label class="col-sm-2 control-label">No. Spph</label>
                                            <div class="col-sm-3">
                                                <div class="input-group text">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                    <input type="text" name="pr3_nospph" value="{{$prosespengadaan->no_spph3 or ''}}" class="form-control" id="inputPassword3" placeholder="No. Spph">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tgl. Etp</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="pr3_tgletp" class="form-control" placeholder="Tgl. Etp" id="tglpretp2" value="{{$prosespengadaan->tgl_etp3}}">
                                            </div>
                                        </div>
                                    </div>
                                @if($prosespengadaan->kodebarang3 != "")
                                    @if($barangg3->hargatotal_brg >= 1000000000)
                                    <div class="form-group">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal Penyelesaian PSI</th>
                                                        <th>Tanggal Penyelesaian KAK</th>
                                                        <th>Tanggal Penyelesaian SekPer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" placeholder="Selesai PSI" name="pr3_tglpsi" class="form-control" id="tglpsi3" value="{{date($prosespengadaan->tgl_psi3)}}">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="Selesai KAK" name="pr3_tglkak" class="form-control" id="tglkak3" value="{{date($prosespengadaan->tgl_kak3)}}">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="Selesai Sekper" name="pr3_tglsekper" class="form-control" id="tglsekper3" value="{{date($prosespengadaan->tgl_sekper3)}}">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @endif
                                @endif
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tgl. Pengumuman</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="pr3_tglpmn" class="form-control" placeholder="Tgl. Pengumuman" id="tglprpmn2" value="{{$prosespengadaan->tgl_pmn3}}">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 control-label">No. Pengumuman</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-apple"></i>
                                                </div>
                                                <input type="text" name="pr3_nopmn" class="form-control" id="inputPassword3" placeholder="No. Pengumuman" value="{{$prosespengadaan->no_pmn3}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tgl. Kontrak</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="pr3_tglkon" class="form-control" placeholder="Tgl. Kontrak" id="tglprkon2" value="{{$prosespengadaan->tgl_kon3}}">
                                            </div>
                                        </div>
                                        <label class="col-sm-2 control-label">No. Kontrak</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-apple"></i>
                                                </div>
                                                <input type="text" name="pr3_nokon" class="form-control" id="inputPassword3" placeholder="No. Kontrak" value="{{$prosespengadaan->no_kon3}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Vendor</label>
                                        <div class="col-sm-3">
                                            <div class="input-group text">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-university"></i>
                                                </div>
                                                <input type="text" name="pr3vendor" value="{{$prosespengadaan->vendor3}}" class="form-control" placeholder="Nama PT">
                                            </div>
                                        </div>
                                        @if($prosespengadaan->selesaikon3 != "")
                                        <span>{{$totalhari3}}</span>
                                        @endif
                                    </div>
                                    <div class="box-footer">
                                    @if($prosespengadaan->selesaikon3 == "")
                                        <button type="submit" name="simpan" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;Simpan3</button>
                                    @else
                                        <a href="{{route('allPpbj')}}" class="btn btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i>&nbsp;Kembali</a>
                                    @endif
                                    </div>
                            </div>
                        @endif
                            <script>
                                $("#muncul").click(function () {
                                 $("#addrealisasi").addClass("show");
                                 $("#muncul").addClass("hide");
                             });
                                $("#muncul2").click(function () {
                                 $("#addrealisasi2").addClass("show");
                                 $("#muncul2").addClass("hide");
                             });
                            </script>
                            @if($prosespengadaan->kodebarang3 == "")
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('input[name="rowkontrak"]').on('input', function() {
                                        var rowkontrak = $('input[name="rowkontrak"]').val();
                                        var tagkontrak = '';
                                        for (i = 1; i <= rowkontrak; i++) {
                                            tagkontrak += '<tr><td><input type="text" name="namakontrak[]" class="form-control" placeholder="Nama Barang/Jasa" required></td><td><input type="number" name="qtykontrak[]" placeholder="Jumlah Barang/Jasa" class="form-control qtykontrak qtykontrak' + i + '" required></td><td><input type="number" name="hargakontrak[]" placeholder="Harga Satuan" id="amount"  class="form-control input-sm text-right amount harga harga' + i + '" required></td><td><input type="text" name="totalkontrak[]" placeholder="Total Harga"  class="form-control input-sm text-right amount total total' + i + '" readonly></td></tr>';
                                        }
                                        $('.tbody').html(tagkontrak);
                                        subtotalkontrak();
                                    });

                                    function subtotalkontrak() {
                                        $('.qtykontrak, .harga').on('input', function() {
                                            var rowkontrak = $('.tbody tr').length,
                                            qtykontrak = '',
                                            harga = '',
                                            total = '',
                                            jumlah = '',
                                            subtotalkontrak = '';
                                            for (i = 1; i <= rowkontrak; i++) {
                                                var qtykontrak = $('.qtykontrak' + i).val(),
                                                harga = $('.harga' + i).val(),
                                                total = qtykontrak * harga;
                                                $('.total' + i).val(total);
                                                var jumlah = $('.total' + i).val();
                                                subtotalkontrak = +subtotalkontrak + +jumlah;
                                            }
                                            $('.subtotalkontrak').val(subtotalkontrak);
                                        });
                                    }
                                });

                                $('#amount').mask('#,###.##', {
                                    reverse: true
                                });

                            </script>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('input[name="rowkontrak3"]').on('input', function() {
                                        var rowkontrak3 = $('input[name="rowkontrak3"]').val();
                                        var tagkontrak3 = '';
                                        for (i = 1; i <= rowkontrak3; i++) {
                                            tagkontrak3 += '<tr><td><input type="text" name="namakontrak3[]" class="form-control" placeholder="Nama Barang/Jasa" required></td><td><input type="number" name="qtykontrak3[]" placeholder="Jumlah Barang/Jasa" class="form-control qtykontrak3' + i + '" required></td><td><input type="number" name="hargakontrak3[]" placeholder="Harga Satuan" id="amount"  class="form-control input-sm text-right amount harga3' + i + '" required></td><td><input type="text" name="totalkontrak3[]" placeholder="Total Harga"  class="form-control input-sm text-right amount total3' + i + '" readonly></td></tr>';
                                        }
                                        $('.tbody3').html(tagkontrak3);
                                        subtotalkontrak3();
                                    });

                                    function subtotalkontrak3() {
                                        $('.qtykontrak3, .harga3').on('input', function() {
                                            var rowkontrak3 = $('.tbody3 tr').length,
                                            qtykontrak = '',
                                            harga = '',
                                            total = '',
                                            jumlah = '',
                                            subtotalkontrak3 = '';
                                            for (i = 1; i <= rowkontrak; i++) {
                                                var qtykontrak = $('.qtykontrak3' + i).val(),
                                                harga = $('.harga3' + i).val(),
                                                total = qtykontrak * harga;
                                                $('.total3' + i).val(total);
                                                var jumlah = $('.total3' + i).val();
                                                subtotalkontrak3 = +subtotalkontrak3 + +jumlah;
                                            }
                                            $('.subtotalkontrak3').val(subtotalkontrak3);
                                        });
                                    }
                                });

                                $('#amount').mask('#,###.##', {
                                    reverse: true
                                });
                                calculate1 = function() {
                                <?php foreach ($barangnya as $barang => $value): ?>
                                var qty = document.getElementById('qty{{$value->id_barang}}').value;
                                var harga = document.getElementById('harga{{$value->id_barang}}').value;
                                document.getElementById('total{{$value->id_barang}}').value = parseInt(qty) * parseInt(harga);
                                <?php endforeach ?>
                                var sum = 0;
                                $(".total1").each(function() {
                                    sum += +$(this).val();
                                });
                                $(".subtotal1").val(sum);
                            }

                            </script>
                            @endif
                        </div>
                            @else
                            @endif
                        @else
                        @endif
                </div>
                @if(Auth::user() && Auth::user()->akses == 'Kadiv')
                <div class="box-footer">
                    <a class="btn btn-primary pull-right" href="{{url('/monitoring')}}"><i class="fa fa-angle-double-left"></i>&nbsp;Kembali</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
    $('.select2').select2();
</script>
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
    $('#tglspph').datepicker({
        autoclose: true
    });
    $('#tgletp').datepicker({
        autoclose: true
    });
    $('#tglpsi1').datepicker({
        autoclose: true
    });
    $('#tglkak1').datepicker({
        autoclose: true
    });
    $('#tglsekper1').datepicker({
        autoclose: true
    });
    $('#tglpmn').datepicker({
        autoclose: true
    });
    $('#tglkon').datepicker({
        autoclose: true
    });
    $('#tglprspph').datepicker({
        autoclose: true
    });
    $('#tglpretp').datepicker({
        autoclose: true
    });
    $('#tglpsi2').datepicker({
        autoclose: true
    });
    $('#tglkak2').datepicker({
        autoclose: true
    });
    $('#tglsekper2').datepicker({
        autoclose: true
    });
    $('#tglprpmn').datepicker({
        autoclose: true
    });
    $('#tglprkon').datepicker({
        autoclose: true
    });
    $('#tglprspph2').datepicker({
        autoclose: true
    });
    $('#tglpretp2').datepicker({
        autoclose: true
    });
    $('#tglpsi3').datepicker({
        autoclose: true
    });
    $('#tglkak3').datepicker({
        autoclose: true
    });
    $('#tglsekper3').datepicker({
        autoclose: true
    });
    $('#tglprpmn2').datepicker({
        autoclose: true
    });
    $('#tglprkon2').datepicker({
        autoclose: true
    });

    $(".add").click(function() {
        $("form > p:first-child").clone(true).insertBefore("form > p:last-child");
        return false;
    });

    $(".remove").click(function() {
        $(this).parent().remove();
    });

</script>
</body>

</html>