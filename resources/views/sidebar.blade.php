<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monitoring Divisi Umum</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href=" {{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('bower_components/font-awesome/css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('bower_components/Ionicons/css/ionicons.min.css')}} ">
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>DV</b>U</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Divisi</b>Umum</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu" style="background-color: #3c8dbc;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img style="width:18px; height:18px;" src="/uploads/avatar/defaults.jpg" class="img-circle" alt="User Image" />
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img style="width:75px; height:75px; background-color: #00a7d0" src="/uploads/avatar/defaults.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                        {{ Auth::user()->name }}
                                            <small>{{Auth::user()->akses}} sejak {{ Auth::user()->created_at }}</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{url('profile')}}" class="btn btn-primary btn-flat" style="border-radius: 3px">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href=" {{route('logout')}} " class="btn btn-primary btn-flat" style="border-radius: 3px">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img style="width:38px; height:38px;" src="/uploads/avatar/defaults.jpg" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="hidden" name="q" class="form-control" placeholder="Pencarian...">
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">
                        <center>MAIN NAVIGATION</center>
                    </li>
                    <br>
                    <li class="active">
                        <a href="{{url('home')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
                        </a>
                    </li>
                    @if (Auth::user() && Auth::user()->akses == 'Admin')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list"></i>
                            <span>PPBJ</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="treeview">
                                <a href=" {{url('/allPpbj')}} "><i class="fa fa-desktop"></i> Lihat Data
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu" style="display: none;">
                                    <li><a href="{{url('allPpbj')}}"><i class="fa fa-book"></i>Semua Ppbj</a></li>
                                    <li><a href="{{url('ppbjterselesaikan')}}"><i class="fa fa-book"></i> Ppbj Terselesaikan</a></li>
                                    <li><a href=" {{url('ppbjbelumselesai')}} "><i class="fa fa-download"></i> Ppbj Belum Terselesaikan</a></li>
                                </ul>
                            </li>

                            <li><a href=" {{url('/inputPpbj')}} "><i class="fa fa-plus-square"></i> Tambah Data </a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bank"></i>
                            <span>Unit Kerja</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="treeview">
                                <a href="#"><i class="fa fa-tv"></i>Lihat Unit Kerja
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu" style="display: none;">
                                    <li><a href="{{url('allUnit')}}"><i class="fa fa-book"></i>Semua Unit Kerja</a></li>
                                    <li><a href="{{url('unitcabang')}}"><i class="fa fa-book"></i> Unit Kerja Cabang</a></li>
                                    <li><a href=" {{url('unitpusat')}} "><i class="fa fa-download"></i> Unit Kerja Pusat</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('inputUnit')}}"><i class="fa fa-plus-circle"></i>Tambah Unit Kerja</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bank"></i>
                            <span>Items Pengadaan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('inputpengadaan')}}"><i class="fa fa-plus-circle"></i> Tambah Jenis Pengadaan</a></li>
                            <li><a href="{{url('allpengadaan')}}"><i class="fa fa-tv"></i> Lihat Jenis Pengadaan</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Pegawai</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=" {{url('/inputPegawai')}} "><i class="fa fa-user-plus"></i> Tambah Data </a></li>
                            <li><a href=" {{url('/allPegawai')}} "><i class="fa fa-user"></i> Lihat Data</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>User Website</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('alluser')}}"><i class="fa fa-tv"></i> Lihat User</a></li>
                            <li><a href="{{url('adduser')}}"><i class="fa fa-user-plus"></i> Tambah User</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('allsaran')}}"><i class="fa fa-book"></i> <span>Kritik dan Saran</span></a></li>
                    @elseif (Auth::user() && Auth::user()->akses == 'Kasubag Pusat')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list"></i>
                            <span>PPBJ</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i> 
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=" {{url('/receivePpbj')}} "><i class="fa fa-desktop"></i> Lihat Data</a></li>
                        </ul>
                    </li>
                    @elseif (Auth::user() && Auth::user()->akses == 'Kasubag QA')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list"></i>
                            <span>PPBJ</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i> 
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="treeview">
                                <a href="{{url('allUnit')}}"><i class="fa fa-tv"></i>Lihat Ppbj
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu" style="display: none;">
                                    <li><a href="{{route('receivePpbj')}}"><i class="fa fa-book"></i>Semua Ppbj</a></li>
                                    <li><a href="{{route('ppbjApprove')}}"><i class="fa fa-book"></i> Ppbj Sudah Di Approve</a></li>
                                    <li><a href=" {{route('ppbjnoApprove')}} "><i class="fa fa-download"></i> Ppbj Belum Di Approve</a></li>
                                </ul>
                            </li>
                            <li>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @elseif (Auth::user() && Auth::user()->akses == 'Kasubag Cabang')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list"></i>
                            <span>PPBJ</span>
                            <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i> 
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=" {{url('/receivePpbj')}} "><i class="fa fa-desktop"></i> Lihat Data</a></li>
                        </ul>
                    </li>
                    @elseif (Auth::user() && Auth::user()->akses == 'Kadiv')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list"></i>
                            <span>PPBJ</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="treeview">
                                <a href=" {{url('/allPpbj')}} "><i class="fa fa-desktop"></i> Lihat Data
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu" style="display: none;">
                                    <li><a href="{{url('allPpbj')}}"><i class="fa fa-book"></i>Semua Ppbj</a></li>
                                    <li><a href="{{url('ppbjterselesaikan')}}"><i class="fa fa-book"></i> Ppbj Terselesaikan</a></li>
                                    <li><a href=" {{url('ppbjbelumselesai')}} "><i class="fa fa-download"></i> Ppbj Belum Terselesaikan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Pegawai</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=" {{url('/allPegawai')}} "><i class="fa fa-user"></i> Lihat Data</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('allUnit')}}">
                            <i class="fa fa-bank"></i> <span>Unit Kerja</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('alluser')}}">
                            <i class="fa fa-users"></i> <span>User Website</span>
                        </a>
                    </li>
                    @endif
                    <li class="header">LABELS</li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
        <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
        <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

</body>

</html>