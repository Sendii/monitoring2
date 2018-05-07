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
                                <h3 style="font-size: 25px" class="box-title">Data Saran</h3>
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
                                            <th class="center" style="width: 10px">No. </th>
                                            <th class="center">Nama Pengirim</th>
                                            <th class="center">Email Pengirim</th>
                                            <th class="center">Isi Saran</th>
                                            <th class="center" style="width: 100px">Lihat</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($saran as $key)
                                        <tr>
                                            <td><center>{{$key->id}}</center></td>
                                            <td><center>{{$key->name}}</center></td>
                                            <td><center>{{$key->email}}</center></td>
                                            <td><center>{{ str_limit($key->message, 25) }}</center></td>
                                            <td> <a href="{{url('viewsaran', [$key->id])}}"><i class="fa fa-edit" aria-hidden="true"> </i> Lihat data</a></td>                                            
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