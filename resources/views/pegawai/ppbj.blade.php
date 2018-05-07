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
                                <h3 style="font-size: 25px" class="box-title">Data Ppbj {{$cekpegawais->id_pegawai}}</h3>
                            </center>
                            <div class="container">
                                @include('errors.message')
                            </div>
                        </div>
                        <!-- /.box-header -->
                        @foreach($prosespengadaans as $prosespengadaan)
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
                                            $totalhari1 = 'Waktu pengerjaan dengan vendor '.$prosespengadaan->vendor.$a. floor($diffe1 / (60 * 60  * 24) + 1) . ' hari';
                                            $totalhari2 = 'Waktu pengerjaan dengan vendor '.$prosespengadaan->vendor2.$a. floor($diffe2 / (60 * 60  * 24) + 1) . ' hari';
                                            $totalhari3 = 'Waktu pengerjaan dengan vendor '.$prosespengadaan->vendor3.$a. floor($diffe3 / (60 * 60  * 24) + 1) . ' hari';
                                            ?>
                                            @endforeach
                                            <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <button type="button" class="close" aria-label="Close">
                                                              <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                                                          </button>
                                            <i>Lihat Ppbj Berdasarkan Perhitungan Hari <br></i>
                                            <a href="{{url('ppbjK9hari', [$cekpegawais->id_pegawai])}}" class="btn btn-primary">Ppbj <9 Hari</a>
                                            <a href="{{url('ppbj9hari', [$cekpegawais->id_pegawai])}}" class="btn btn-primary">Ppbj 9 Hari</a>&nbsp;
                                            <a href="{{url('ppbjL9hari', [$cekpegawais->id_pegawai])}}" class="btn btn-primary">Ppbj >9 Hari</a>&nbsp;
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <center><a href="{{url('allPegawai')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i></a></center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <a class="btn btn-primary" href="" data-toggle="modal" data-target="#modalData">Ppbj dengan Waktu
                                            </a>
                                                @foreach($ppbj as $key)<br>
                                                <a href="{{route('ppbjPegawais', [$key->no_ppbj])}}">{{$key->no_ppbj}}</a>
                                                @endforeach
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