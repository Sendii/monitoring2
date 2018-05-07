<!DOCTYPE html>
<html>

<head>
    @extends('layouts.adminlte')
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<style type="text/css">
.center {
    text-align: center;
}
</style>

<body class="hold-transition skin-blue sidebar-mini">
    @include('sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid spark-screen">
            <div class="row">
                <br>
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <center>
                                <h3 style="font-size: 25px" class="box-title">Data Ppbj</h3>
                            </center>
                            <div class="container">
                                @include('errors.message')
                            </div>
                        </div>
                        <div class="container">
                            <a href="" data-toggle="modal" data-target="#modalData" class="btn bg-purple"><i class="fa fa-search"></i> Ppbj berdasarkan hari</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                                    <thead>
                                        <tr>
                                            <th class="center">No. </th>
                                            <th class="center">Kode PJ</th>
                                            <th class="center">Nomor RegisUmum</th>
                                            <th class="center">Tanggal RegisUmum</th>
                                            <th class="center">Nomor Ppbj</th>
                                            <th class="center">Tanggal Permintaan</th>
                                            <th class="center">Tanggal Dibutuhkan</th>
                                            <th class="center">Items Pengadaan</th>
                                            <th class="center">Unit Kerja</th>
                                            <th class="center">Nama Barang</th>
                                            <th class="center">Harga Barang (Rp.)</th>
                                            <th class="center">Jumlah Barang</th>
                                            <th class="center">Harga Total (Rp.)</th>
                                            <th class="center">Ubah</th>
                                            <th class="center">Cek Proses</th>
                                            <th class="center">Status</th>
                                            <!-- <th class="center">Tambah Ppbj</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ppbjall as $key)
                                        <?php
                                        $unitkerja = \App\unitkerja::where('aa', '=', $key->id_unit)->value('aa');
                                        $pegawai = \App\pegawai::where('namapegawai', '=', $key->id_pegawai)->value('namapegawai');
                                        $cekpenyelesaian = \App\prosespengadaan::where('id_ppbj', '=', $key->id)->value('selesaikon');
                                        $cekpengadaan = \App\pengadaan::where('namapengadaan', $key->id_pengadaan)->value('namapengadaan');
                                        if(\App\prosespengadaan::whereNotNull('mulaippbj1')) {
                                            $cekpengadaan1 = \App\prosespengadaan::whereNotNull('selesai1')->get();
                                        }elseif(\App\prosespengadaan::whereNotNull('mulaippbj2')) {
                                            $cekpengadaan2 = \App\prosespengadaan::whereNotNull('selesai2')->get();
                                        }elseif(\App\prosespengadaan::whereNotNull('mulaippbj3')) {
                                            $cekpengadaan3 = \App\prosespengadaan::whereNotNull('selesai3')->get();
                                        }
                                        ?>
                                        <tr>
                                            <td class="center">{{$key->id}}</td>
                                            <td class="center">{{$key->kodePj}}</td>
                                            <td class="center">{{$key->no_regis_umum}}</td>
                                            <td class="center">
                                                @if($key->tgl_regis_umum == "")
                                                <i>Tanggal belum diInput</i> @else
                                                <div class="row">
                                                    <div class="center">
                                                        &nbsp; &nbsp; &nbsp; {{$key->tgl_regis_umum}}
                                                    </div>
                                                </div>
                                                @endif
                                            </td>
                                            <td class="center">{{$key->no_ppbj}}</td>
                                            <td class="center">{{$key->tgl_permintaan_ppbj}}</td>
                                            <td class="center">{{$key->tgl_dibutuhkan_ppbj}}</td>
                                            <td class="center">{{ $cekpengadaan }}</td>
                                            <td class="center">{{$unitkerja}}</td>

                                            <td class="center">
                                                <ul>
                                                    @foreach($key->Barang as $value)
                                                    <li>
                                                        {{$value->nama_barang}}
                                                    </li>
                                                    @endforeach
                                                    @foreach($key->Barang2 as $value)
                                                    <li>
                                                        {{$value->nama_barang}}
                                                    </li>
                                                    @endforeach
                                                    @foreach($key->Barang3 as $value)
                                                    <li>
                                                        {{$value->nama_barang}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td class="center">
                                                <ul>
                                                    @foreach($key->Barang as $value)
                                                    <li>
                                                        {{number_format($value->harga_brg,0)}}
                                                    </li>
                                                    @endforeach
                                                    @foreach($key->Barang2 as $value)
                                                    <li>
                                                        {{number_format($value->harga_brg,0)}}
                                                    </li>
                                                    @endforeach
                                                    @foreach($key->Barang3 as $value)
                                                    <li>
                                                        {{number_format($value->harga_brg)}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td class="center">
                                                <ul>
                                                    @foreach($key->Barang as $value)
                                                    <li>
                                                        {{$value->jumlah_brg}}
                                                    </li>
                                                    @endforeach
                                                    @foreach($key->Barang2 as $value)
                                                    <li>
                                                        {{$value->harga_brg}}
                                                    </li>
                                                    @endforeach
                                                    @foreach($key->Barang3 as $value)
                                                    <li>
                                                        {{$value->harga_brg}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td class="center">
                                                <ul>
                                                    <?php $total = 0; ?>
                                                    @foreach($key->Barang as $value)
                                                    <li>
                                                        {{number_format($value->total_brg, 0) }}
                                                        <?php $total += $value->total_brg ?>
                                                    </li>
                                                    @endforeach
                                                    @foreach($key->Barang2 as $value)
                                                    <li>
                                                        {{number_format($value->total_brg,0) }}
                                                        <?php $total += $value->total_brg ?>
                                                    </li>
                                                    @endforeach
                                                    @foreach($key->Barang3 as $value)
                                                    <li>
                                                        {{number_format($value->total_brg,0) }}
                                                        <?php $total += $value->total_brg ?>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <br> Total: <i>{{ $total }}</i>
                                            </td>
                                            <td class="center"><a href="{{route('editPpbj', [$key->id])}}"><i class="fa fa-edit" aria-hidden="true"> </i> Ubah</a></td>
                                            <td class="center">
                                                <a href="{{url('editassignmentPpbj', [$key->id])}}">
                                                    <center><i class="fa fa-edit" aria-hidden="true"> </i>Lihat</center>
                                                </a>
                                            </td>
                                            <!-- <td class="center"><button class="btn btn-danger delete-btn" data-noppbj='{{$key->no_ppbj}}'  data-id='{{$key->id}}' href="{{route('delete_ppbj', [$key->id])}}">Delete</td> -->
                                                <td class="center">
                                                    @if($pegawai != "" && $cekpenyelesaian != "")
                                                    <center><span class="label label-success">Proses Selesai&nbsp;<i class="fa fa-check"></i></span></center>
                                                    @elseif($pegawai == "")
                                                    <center><span class="label label-danger">Belum ada Pemroses&nbsp;<i class="fa fa-close"></i></span></center>
                                                    @elseif ($pegawai != "")
                                                    <center><span class="label label-info">Dalam Proses&nbsp;<i class="fa fa-refresh"></i></span></center>
                                                    @endif

                                                    @if($key->status == 'Pending')
                                                    <span class="label label-info">Belum di diVerifikasi</span>
                                                    @elseif($key->status == 'Accepted')
                                                    <span class="label label-success">Sudah di Verifikasi</span>
                                                    @elseif($key->status == 'NonAccepted')
                                                    <span class="label label-warning">Tidak di terverifikasi</span>
                                                    @else
                                                    <span class="label label-danger">Dikembalikan&nbsp;<i class="fa fa-close"></i></span>
                                                    @endif
                                                </td>
                                                <!-- <td class="center">
                                                    <a href="{{url('inputPpbjs', [$key->id])}}">
                                                        <center><i class="fa fa-plus-square" aria-hidden="true"></i>Tambah</center>
                                                    </a>
                                                </td> -->
                                                <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header text-center">
                                                                <button type="button" class="close" aria-label="Close">
                                                                  <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                                                              </button>
                                                              <i>Lihat Ppbj Berdasarkan Perhitungan Hari <br></i>
                                                              <a href="{{route('allPpbjkd9')}}" class="btn btn-primary">Ppbj <9 Hari</a>
                                                                <a href="{{route('allPpbjsd9')}}" class="btn btn-primary">Ppbj 9 Hari</a>&nbsp;
                                                                <a href="{{route('allPpblkd9')}}" class="btn btn-primary">Ppbj >9 Hari</a>&nbsp;
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-center">
                                                                <center><a href="{{url('allPpbj')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i></a></center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.3
            </div>
            <strong>Powered &copy; 2018 <a href="#">PklTeam</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
</div>
<script type="text/javascript">
    $('.delete-btn').on('click', function(e) {
        e.preventDefault();
        var self = $(this);
        var no = $(this).attr("data-noppbj");
        var formid = $(this).attr("data-id");
        swal({
            title: "Hapus",
            text: "Hapus data Ppbj dengan no Ppbj " + no + " ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#D9534f",
            confirmButtonText: "Yes, delete!",
            closeOnConfirm: true
        },
        function() {
            $("#" + formid).submit();
        });
    });
</script>
<script type="text/javascript" src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatable/dataTables.bootstrap.min.js')}}"></script>
</script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@include('sweet::alert')
</body>
</html>