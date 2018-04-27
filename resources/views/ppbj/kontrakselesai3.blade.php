<!DOCTYPE html>
<html>

<head>
    @extends('layouts.adminlte')
</head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
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
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                                    <thead>
                                        <tr>
                                            <th class="center">No. </th>
                                            <th class="center">No. Kontrak</th>
                                            <th class="center">Nomor RegisUmum</th>
                                            <th class="center">Tanggal RegisUmum</th>
                                            <th class="center">Nomor Ppbj</th>
                                            <th class="center">Tanggal Permintaan</th>
                                            <th class="center">Tanggal Dibutuhkan</th>
                                            <th class="center">Items Pengadaan</th>
                                            <th class="center">Unit Kerja</th>
                                            <th class="center">Nama Barang</th>
                                            <th class="center">Harga Barang</th>
                                            <th class="center">Jumlah Barang</th>
                                            <th class="center">Harga Total</th>
                                            <th class="center">Ubah</th>
                                            <th class="center">Cek Proses</th>
                                            <th class="center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kontrakselesai2 as $key)
                                        <?php
                                            $unitkerja = \App\unitkerja::where('aa', '=', $key->getPpbj->id_unit)->value('aa');
                                            $pegawai = \App\pegawai::where('namapegawai', '=', $key->getPpbj->id_pegawai)->value('namapegawai');
                                            $cekpenyelesaian = \App\prosespengadaan::where('id', '=', $key->getPpbj->id)->value('selesaikon');
                                            $cekpengadaan = \App\pengadaan::where('namapengadaan', $key->getPpbj->id_pengadaan)->value('namapengadaan');
                                        ?>
                                        <tr>
                                            <td class="center">{{$key->id}}</td>
                                            <td class="center">{{$key->no_kon3}}</td>
                                            <td class="center">{{$key->getPpbj->no_regis_umum}}</td>
                                            <td class="center">
                                                @if($key->getPpbj->tgl_regis_umum == "")
                                                <i>Tanggal belum diInput</i> @else
                                                <div class="row">
                                                    <div class="center">
                                                        &nbsp; &nbsp; &nbsp; {{$key->getPpbj->tgl_regis_umum}}
                                                    </div>
                                                </div>
                                                @endif
                                            </td>
                                            <td class="center">{{$key->getPpbj->no_ppbj}}</td>
                                            <td class="center">{{$key->getPpbj->tgl_permintaan_ppbj}}</td>
                                            <td class="center">{{$key->getPpbj->tgl_dibutuhkan_ppbj}}</td>
                                            <td class="center">{{ $cekpengadaan }}</td>
                                            <td class="center">{{$unitkerja}}</td>

                                            <td class="center">
                                                <ul>
                                                    @foreach($key->Barang3 as $value)
                                                    <li>
                                                        {{$value->nama_barang}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td class="center">
                                                <ul>
                                                    @foreach($key->Barang3 as $value)
                                                    <li>
                                                        {{$value->harga_brg}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td class="center">
                                                <ul>
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
                                                    @foreach($key->Barang3 as $value)
                                                    <li>
                                                        {{$value->total_brg }}
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatable/dataTables.bootstrap.min.js')}}"></script>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@include('sweet::alert')
</body>
</html>