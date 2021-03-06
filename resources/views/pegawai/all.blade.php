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
<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
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
                                <center>
                                    <h2 style="font-size: 25px" class="box-title">Data Pegawai</h2></center>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                                    <thead>
                                        <tr>
                                            <th class="center">No. </th>
                                            <th class="center">Nama Pegawai</th>
                                            <th class="center">Jabatan</th>
                                            <th class="center">No. Telepon</th>
                                            @if(Auth::user() && Auth::user()->akses == 'Admin')
                                            <th class="center">Ubah Data</th>
                                            <th class="center">Lihat PPBJ</th>
                                            <!-- Ini kosong jika bukan admin -->
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allPegawai as $key)
                                        <?php
                                            $jabatan = \App\jabatan::where('id_jabatan', '=', $key->id_jabatan)->value('jabatan');
                                        ?>
                                            <tr>
                                                <td class="center">{{$key->id_pegawai}}</td>
                                                <td class="center">{{$key->namapegawai}}</td>
                                                <td class="center">{{ $jabatan }}</td>
                                                <td class="center">{{$key->notelp}}</td>
                                                @if(Auth::user() && Auth::user()->akses == 'Admin')
                                                    <td class="center"><a href="{{route('editPegawai', [$key->id_pegawai])}}"><i class="fa fa-edit" aria-hidden="true"> </i> Ubah Data</a></td>
                                                    <td class="center"><a href="{{url('pegawai/ppbjs', [$key->namapegawai])}}"><i class="fa fa-edit"></i>Lihat PPBJ</a></td>
                                                @else
                                                <!-- Anda bukan admin -->
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {!!$allPegawai->render()!!}
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
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    </div>
    <script type="text/javascript" src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datatable/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>