<!DOCTYPE html>
<html>
   <head>
      <title>Unit Kerja</title>
      @extends('layouts.adminlte')
   </head>
   <style type="text/css">
      .center {
      text-align: center;
      }
   </style>
   <body class="hold-transition skin-blue sidebar-mini">
      @include('sidebar')
      <div class="content-wrapper">
         <div class="container-fluid spark-screen">
            <div class="row">
               <br>
               <div class="col-xs-12">
                  <div class="box">
                     <div class="box-header">
                        <center>
                           <h3 style="font-size: 25px" class="box-title">Data Unit Kerja Pusat</h3>
                        </center>
                        <div class="box-body">
                           <div class="table-responsive">
                              <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                                 <thead>
                                    <tr>
                                       <td class="center">No.</td>
                                       <td class="center">Cabang</td>
                                       @if(Auth::user() && Auth::user()->akses == 'Admin')
                                       <td class="center">Ubah</td>
                                       <td class="center">Lihat Ppbj</td>
                                       @else
                                       <!-- <h3>Anda bukan admin</h3> -->
                                       @endif
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($pusat as $key)	
                                    <tr>
                                       <td class="center">{{$key->id_unit}}</td>
                                       <td class="center">{{$key->aa}}</td>
                                       @if(Auth::user() && Auth::user()->akses == 'Admin')
                                       <td class="center">
                                          <a href="{{url('editUnit', [$key->id_unit])}}"><i class="fa fa-edit"></i>Ubah</a>
                                       </td>
                                       <td class="center">
                                          <a href="{{route('viewPpbjpusat', ['id_unit' => $key->aa])}}"><i class="fa fa-book"></i>Lihat Ppbj</a>
                                       </td>
                                       @else
                                       <!-- <h3>Anda bukan admin</h3> -->
                                       @endif
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
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
         <strong>Powered &copy; 2018 <a href="#">PklTeam</a>.</strong> All rights
         reserved.
      </footer>
      <script type="text/javascript" src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/datatable/dataTables.bootstrap.min.js')}}"></script>
      </script>
      <script src="{{asset('js/sweetalert.min.js')}}"></script>
      <script type="text/javascript">
         $(document).ready(function() {
           $('#example').DataTable();
         } );
      </script>
   </body>
</html>