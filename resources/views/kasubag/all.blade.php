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
.border {
    display: none;
}
</style>

<body class="hold-transition skin-blue sidebar-mini">

    @include('sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid spark-screen">
            <div class="table-responsive">
                <div class="box-header">
                    <center>
                        <h3>Data Ppbj</h3></center>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="content">
                                        <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                                            <thead>
                                                <tr role="row">
                                                    <th class="center">No. </th>
                                                    <th class="center">Kode PJ</th>
                                                    <th class="center">Nama Pemekerja</th>
                                                    <th class="center">No. RegisUmum</th>
                                                    <th class="center">Tgl. RegisUmum</th>
                                                    <th class="center">No. Bppj</th>
                                                    <th class="center">Tgl Permintaan</th>
                                                    <th class="center">Tgl Dibutuhkan</th>
                                                    <th class="center">Jenis Pengadaan</th>
                                                    <th class="center">Unit Kerja</th>
                                                    <th class="center">Nama Barang</th>
                                                    <th class="center">Harga Barang</th>
                                                    <th class="center">Jumlah Barang</th>
                                                    <th class="center">Harga Total</th>
                                                    @if(Auth::user() && Auth::user()->akses == 'Kasubag QA')
                                                    <th class="center">Lihat & Konfirmasi</th>
                                                    @else
                                                    <th class="center">Penugasan</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(Auth::user() && Auth::user()->akses == 'Kasubag QA')
                                                    @foreach($ppbjVerify as $key)
                                                        @include('kasubag.kasubag')
                                                    @endforeach
                                                @elseif (Auth::user() && Auth::user()->akses == 'Kasubag Pusat')
                                                    @foreach($ppbjPusat as $key)  
                                                        @if($key->status == 'Accepted')  
                                                            @include('kasubag.kasubag')
                                                                {!!$ppbjPusat->render()!!}
                                                        @endif
                                                    @endforeach
                                                @elseif (Auth::user() && Auth::user()->akses == 'Kasubag Cabang')
                                                    @foreach($ppbjCabang as $key)
                                                        @if ($key->status == 'Accepted')
                                                            @include('kasubag.kasubag')
                                                                {!!$ppbjCabang->render()!!}
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
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
</div>
<script type="text/javascript" src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatable/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" href=" {{asset('js/jquery-3.2.1.min.js')}} "></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@include('sweet::alert')
</body>

</html>