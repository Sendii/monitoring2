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
                <h3 style="font-size: 25px" class="box-title">Kotak Saran</h3>
              </center>
              <div class="container">
                @include('errors.message')
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><b>Subject : </b>{{$saran->subject}}</h3>
                <h5><b>Email : </b>{{$saran->email}}<span class="mailbox-read-time pull-right">{{$saran-> created_at}}</span></h5>
                </div>
                <!-- /.mailbox-read-info -->
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                @if(Auth::user() && Auth::user()->akses == 'Admin')
                  <p>Hello Admin,</p>
                @else
                  <p>Hello Kepala Divisi,</p>
                @endif
                  <p>{{$saran->message}}.<br>Thanks Before, {{$saran->name}}</p>
                </div>
                <!-- /.mailbox-read-message -->
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