<!DOCTYPE html>
<html>

<head>
    @extends('layouts.adminlte')
</head>
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
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                                    <thead>
                                        <tr>
                                            <th class="center">No. </th>
                                            <th class="center">No. Ppbj</th>
                                            <th class="center">Pemroses</th>
                                            <th class="center">Unit</th>
                                            <th class="center">Nomor Kontrak </th>
                                            <th class="center">Nama Vendor </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ppbjsd9 as $key)
                                        <?php
                                            $unitkerja = \App\unitkerja::where('aa', '=', $key->getPpbj->id_unit)->value('aa');
                                            $pegawai = \App\pegawai::where('namapegawai', '=', $key->id_pegawai)->value('namapegawai');
                                            $cekpenyelesaian = \App\prosespengadaan::where('id', '=', $key->id)->value('selesaikon');
                                            $cekpengadaan = \App\pengadaan::where('namapengadaan', $key->id_pengadaan)->value('namapengadaan');
                                        ?>
                                        <tr>
                                        	<td class="center">{{$key->id}}</td>
                                            <td class="center">
                                                <a href="{{url('showppbj', [$key->getPpbj->no_ppbj])}}">{{$key->getPpbj->no_ppbj}}</a>
                                            </td>
                                        	<td class="center">
                                        		<a href="{{route('viewppbjPegawai', [$key->id_pegawai])}}"><i class="fa fa-user text-aqua" aria-hidden="true"> </i>{{$pegawai}}</a>
                                        	</td>
                                        	<td class="center">
                                        		<a href="{{route('viewPpbj', [$key->getPpbj->id_unit])}}"><i class="fa fa-university text-aqua" aria-hidden="true"> </i>{{$unitkerja}}</a>
                                        	</td>
                                        	<td class="center">
                                                <!-- 1 -->
                                                @if($key->no_kon != "")
                                                    @if($key->selesai1 == 9)
                                        		      <a href="{{url('ppbj/kont1', [$key->no_kon])}}">
                                                        <center><i class="fa fa-arrow-right" aria-hidden="true"> </i>{{$key->no_kon}}</center>
                                                      </a>
                                                    @endif
                                                @endif
                                                <!-- 2 -->
                                                @if($key->no_kon2 != "")
                                                    @if($key->selesai2 == 9)
                                                    <a href="{{url('ppbj/kont2', [$key->no_kon2])}}">
                                                        <center><i class="fa fa-arrow-right" aria-hidden="true"> </i>{{$key->no_kon2}}</center>
                                                    </a>
                                                    @endif
                                                @endif
                                                <!-- 3 -->
                                                @if($key->no_kon3 != "")
                                                    @if($key->selesai3 == 9)
                                                    <a href="{{url('ppbj/kont3', [$key->no_kon3])}}">
                                                        <center><i class="fa fa-arrow-right" aria-hidden="true"> </i>{{$key->no_kon3}}</center>
                                                    </a>
                                                    @endif
                                                @endif
                                        	</td>
                                        	<td class="center">
                                                @if($key->vendor != "")
                                                    @if($key->selesai1 == 9)
                                        		      <a href="{{url('ppbj/vend1', [$key->vendor])}}">
                                                        <center><i class="fa fa-arrow-right" aria-hidden="true"> </i>{{$key->vendor}}</center>
                                                      </a>
                                                    @endif
                                                @endif
                                                @if($key->vendor2 != "")
                                                    @if($key->selesai2 == 9)
                                                    <a href="{{url('ppbj/vend2', [$key->vendor2])}}">
                                                        <center><i class="fa fa-arrow-right" aria-hidden="true"> </i>{{$key->vendor2}}</center>
                                                    </a>
                                                    @endif
                                                @endif
                                                @if($key->vendor3 != "")
                                                    @if($key->selesai3 == 9)
                                                    <a href="{{url('ppbj/vend3', [$key->vendor3])}}">
                                                        <center><i class="fa fa-arrow-right" aria-hidden="true"> </i>{{$key->vendor3}}</center>
                                                    </a>
                                                    @endif
                                                @endif
                                        	</td>
                                         </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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