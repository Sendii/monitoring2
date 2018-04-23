@extends('layouts.adminlte')
@include('sidebar')
<form method="POST" action="{{url('savepengadaan')}}">
	{{csrf_field()}}
	<div class="content-wrapper">
        <div class="container-fluid spark-screen">
            <br>
            <div class="col-md-10 col-md-offset-1">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box box-info">
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <center>
                            <h2>Tambah Data Jenis Pengadaan</h2> </center>
                        <div class="box-header with-border">
                        </div>
                        <div class="box-body">
                            <label>Jenis Pengadaan: </label>
                            <div class="input-group text">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="jenispengadaan" maxlength="40" value="{{$adddata->namapengadaan or ''}}" class="form-control col s6" placeholder="Jenis Pengadaan" required>
                                </label>
                                <br>
                            </div>
                            <div class="main-footer">
                                <button type="submit" name="submit" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i> Tambahkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</form>