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
            <div style="padding-top: 10px; padding-left: 1%;">
                <a data-toggle="modal" data-target="#modalData" class="btn bg-purple"><i class="fa fa-search"></i> Lihat Report Data</a>
                @include('chart.show')
            </div>
                <br>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box box-info">
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        </div> 
                        <div class="box-header">
                            <center>
                                <h2 style="font-size: 25px" class="box-title">Data Ppbj Approve</h2>
                            </center>
                        </div>
                                <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                {!! $chartapprove->html() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box box-info">
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        </div>
                        <div class="box-header">
                            <center>
                                <h2 style="font-size: 25px" class="box-title">Data Ppbj NonApprove</h2>
                            </center>
                        </div>
                                <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                {!! $chartnoapprove->html() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box box-info">
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        </div>
                        <div class="box-header">
                            <center>
                                <h2 style="font-size: 25px" class="box-title">Data Ppbj Selesai</h2>
                            </center>
                        </div>
                                <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                {!! $chartppbjPegawai->html() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box box-info">
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        </div>
                        <div class="box-header">
                            <center>
                                <h2 style="font-size: 25px" class="box-title">Data Ppbj Belum Selesai</h2>
                            </center>
                        </div>
                                <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                {!! $chartppbjPegawai2->html() !!}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.3
        </div>
            <strong>Powered &copy; 2018 <a href="#">PklTeam</a>.</strong> All rights reserved.
    </footer>
{!! Charts::scripts() !!}
{!! $chartapprove->script() !!}
{!! $chartnoapprove->script() !!}
{!! $chartppbjPegawai->script() !!}
{!! $chartppbjPegawai2->script() !!}
</body>
</html>