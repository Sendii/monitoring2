<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminDivsum</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}} ">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}} ">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}} ">
<!-- jvectormap -->
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
<link rel="stylesheet" type="text/css" href=" {{asset('css/bootstrap.min.css')}} ">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


<script type="text/javascript" href=" {{asset('js/jquery-3.2.1.min.js')}} "></script>
<script type="text/javascript" href="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
<?php Session::forget('sweet_alert'); ?>