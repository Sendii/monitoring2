<!DOCTYPE html>
<html>

<head>
    @extends('layouts.adminlte')
</head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
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
            <div class="box">
                <div class="box-header">
                    <center>
                        <h3>Data Ppbj</h3></center>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                            <thead>
                                <tr role="row">
                                    <th class="center">No. </th>
                                    <th class="center">Tanggal Mulai</th>
                                    <th class="center">Pemekerja&nbsp;</th>
                                    <th class="center">Nomor Spph</th>
                                    <th class="center">Tanggal Spph</th>
                                    <th class="center">Tanggal ETP</th>
                                    <th class="center">Nomor Pengumuman</th>
                                    <th class="center">Tanggal Pengumuman</th>
                                    <th class="center">Nomor Kontrak</th>
                                    <th class="center">Tanggal Kontrak</th>
                                    <th class="center">Proses</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allMonitor as $key)
                                <?php
              $pegawai = \App\pegawai::where('namapegawai', '=', $key->id_pegawai)->value('namapegawai');
              $pegawais = \App\pegawai::where('namapegawai', '=', $key->namapegawai)->get();
              ?>
                                @if($pegawais != "")
                                    <tr role="row" class="odd">
                                        <td class="center">{{$key->id}}</td>
                                        <td class="center">
                                            <center><a href="#" data-no_ppbj="{{$key->getPpbj->no_ppbj}}" data-no_spph2="{{$key->no_spph2}}" data-tgl_spph2="{{$key->tgl_spph2}}" data-selesaispph2="{{$key->selesaispph2}}" data-tgl_etp2="{{$key->tgl_etp2}}" data-selesaietp2="{{$key->selesaietp2}}" data-no_pmn2="{{$key->no_pmn2}}" data-tgl_pmn2="{{$key->tgl_pmn2}}" data-selesaipmn2="{{$key->selesaipmn2}}" data-no_kon2="{{$key->no_kon2}}" data-tgl_kon2="{{$key->tgl_kon2}}" data-selesaikon2="{{$key->selesaikon2}}" data-no_spph3="{{$key->no_spph3}}" data-tgl_spph3="{{$key->tgl_spph3}}" data-tgl_etp3="{{$key->tgl_etp3}}" data-no_pmn3="{{$key->no_pmn3}}" data-tgl_pmn3="{{$key->tgl_pmn3}}" data-no_kon3="{{$key->no_kon3}}" data-tgl_kon3="{{$key->tgl_kon3}}" data-toggle="modal" data-target="#modalDataPpbj"><i class="fa fa-chevron-down"></i></a></center>
                                            {{$key->created_at}}
                                        </td>
                                        <td class="center">{{ $pegawai }}
                                            <div class="center">
                                               Selesai &nbsp;<i class="fa fa-chevron-right"></i> 
                                            </div>
                                        </td>
                                        <td class="center">
                                            @if ($key->no_spph == "")
                                            <center>
                                                <i class="fa fa-close"></i>
                                            </center>
                                            @else
                                            <center>{{$key->no_spph}}</center>
                                            @endif @if($key->no_spph == "")
                                            <i>Belum Selesai</i> @else
                                            <center>
                                                <i class="fa fa-check"></i>
                                            </center>
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($key->tgl_spph == "")
                                            <center>
                                                <i class="fa fa-close"></i>
                                            </center>
                                            @else
                                            <center>{{$key->tgl_spph}}</center>
                                            @endif @if($key->tgl_spph == "")
                                            <i>Belum Selesai</i> @else
                                            <div class="center">
                                                <i class="fa fa-arrow-right"></i> &nbsp;{{$key->selesaispph}}
                                            </div>
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($key->tgl_etp == "")
                                            <center>
                                                <i class="fa fa-close"></i>
                                            </center>
                                            @else
                                            <center>{{$key->tgl_etp}}</center>
                                            @endif @if($key->tgl_etp == "")
                                            <i>Belum Selesai</i> @else
                                            <div class="center">
                                                <i class="fa fa-arrow-right"></i> &nbsp;{{$key->selesaietp}}
                                            </div>
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($key->no_pmn == "")
                                            <center>
                                                <i class="fa fa-close"></i>
                                            </center>
                                            @else
                                            <center>{{$key->no_pmn}}</center>
                                            @endif @if($key->no_pmn == "")
                                            <i>Belum Selesai</i> @else
                                            <center>
                                                <i class="fa fa-check"></i>
                                            </center>
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if ($key->tgl_pmn == "")
                                            <center>
                                                <i class="fa fa-close"></i>
                                            </center>
                                            @else
                                            <center>{{$key->tgl_pmn}}</center>
                                            @endif @if($key->tgl_pmn == "")
                                            <i>Belum Selesai</i> @else
                                            <div class="center">
                                                <i class="fa fa-arrow-right"></i> &nbsp;{{$key->selesaipmn}}
                                            </div>
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($key->no_kon == "")
                                            <center>
                                                <i class="fa fa-close"></i>
                                            </center>
                                            @else
                                            <center>{{$key->no_kon}}</center>
                                            @endif @if($key->no_kon == "")
                                            <i>Belum Selesai</i> @else
                                            <center>
                                                <i class="fa fa-check"></i>
                                            </center>
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($key->tgl_kon == "")
                                            <center>
                                                <i class="fa fa-close"></i>
                                            </center>
                                            @else
                                            <center>{{$key->tgl_kon}}</center>
                                            @endif @if($key->selesaikon == "")
                                            <i>Belum Selesai</i> @else
                                            <div class="center">
                                                <i class="fa fa-arrow-right"></i> &nbsp;{{$key->selesaikon}}
                                            </div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('viewAlldata', [$key->id])}}">
                                                <center><i class="fa fa-edit" aria-hidden="true"> </i>Lihat</center>
                                            </a>
                                            @if($key->selesaikon == "")
                                            <center><span class="label label-info">Dalam Proses&nbsp;<i class="fa fa-refresh"></i></span></center>
                                            @else
                                            <center><span class="label label-success">Proses Selesai&nbsp;<i class="fa fa-check"></i></span></center>
                                            @endif
                                        </td>
                                        <div class="modal fade" id="modalDataPpbj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <button type="button" class="close" aria-label="Close">
                                                              <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                                                          </button>
                                                          <div class="modal-body">
                                                              @include('kadiv.viewppbj')
                                                          </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <!-- <center><a href="{{url('allPpbj')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i></a></center> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @else @endif @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    </div>
    </div>
    <!-- <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.3
        </div>
        <strong>Copyright &copy; 2018 <a href="#">PklTeam-</a>.</strong> All rights reserved.
    </footer> -->
    </div>
    </div>
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
    <script type="text/javascript">
        $('#modalDataPpbj').on('click.bs.modal', function(event) {
            console.log('Modal opened');

            var button = $(event.relatedTarget)
            var no_ppbj = button.data('no_ppbj')
            var no_spph2 = button.data('no_spph2')
            var tgl_spph2 = button.data('tgl_spph2')
            var tgl_etp2 = button.data('tgl_etp2')
            var no_pmn2 = button.data('no_pmn2')
            var tgl_pmn2 = button.data('tgl_pmn2')
            var no_kon2 = button.data('no_kon2')
            var tgl_kon2 = button.data('tgl_kon2')
            var selesaispph2 = button.data('selesaispph2')
            var selesaietp2 = button.data('selesaietp2')
            var selesaipmn2 = button.data('selesaipmn2')
            var selesaikon2 = button.data('selesaikon2')

            var no_spph3 = button.data('no_spph3')
            var tgl_spph3 = button.data('tgl_spph3')
            var tgl_etp3 = button.data('tgl_etp3')
            var no_pmn3 = button.data('no_pmn3')
            var tgl_pmn3 = button.data('tgl_pmn3')
            var no_kon3 = button.data('no_kon3')
            var tgl_kon3 = button.data('tgl_kon3')

            var modal = $(this)

            modal.find('.modal-body .form-group #no_ppbj').val(no_ppbj);
            modal.find('.modal-body .form-group #no_spph2').val(no_spph2);
            modal.find('.modal-body .form-group #tgl_spph2').val(tgl_spph2);
            modal.find('.modal-body .form-group #tgl_etp2').val(tgl_etp2);
            modal.find('.modal-body .form-group #no_pmn2').val(no_pmn2);
            modal.find('.modal-body .form-group #tgl_pmn2').val(tgl_pmn2);
            modal.find('.modal-body .form-group #no_kon2').val(no_kon2);
            modal.find('.modal-body .form-group #tgl_kon2').val(tgl_kon2);
            modal.find('.modal-body .form-group #selesaispph2').val(selesaispph2);

            modal.find('.modal-body .form-group #no_spph3').val(no_spph3);
            modal.find('.modal-body .form-group #tgl_spph3').val(tgl_spph3);
            modal.find('.modal-body .form-group #tgl_etp3').val(tgl_etp3);
            modal.find('.modal-body .form-group #no_pmn3').val(no_pmn3);
            modal.find('.modal-body .form-group #tgl_pmn3').val(tgl_pmn3);
            modal.find('.modal-body .form-group #no_kon3').val(no_kon3);
            modal.find('.modal-body .form-group #tgl_kon3').val(tgl_kon3);
        })
    </script>
</body>

</html>