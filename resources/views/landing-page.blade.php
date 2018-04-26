<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<!--  <link rel="shortcut icon" href="assets/images/divsum-sucofindo-2-122x69.png" type="image/x-icon">-->
  <meta name="description" content="">
  <title>Monitoring Divisi Umum</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
  <section class="menu cid-qOdZMBbrpl" once="menu" id="menu1-3">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#top">
                         <img src="{{asset('img/sucof.png')}}" alt="Divisi-Umum" title="DivSum" style="height: 3.0rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#top">Monitoring</a></span>
                <span style="margin-left: -30px;" class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#form1-6"><i class="mbri-edit mbr-iconfont mbr-iconfont-btn"></i>Kontak Kami</a></span>
                <span style="margin-left: -20px;" class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#info1-d"><i class="mbri-devices mbr-iconfont mbr-iconfont-btn"></i>Pengembang</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#top">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Beranda</a>
                </li>
                <li class="nav-item dropdown open">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="#form1-6" data-toggle="dropdown-submenu" aria-expanded="false">
                        <span class="mbri-add-submenu mbr-iconfont mbr-iconfont-btn"></span>
                        Menu
                    </a>
                    <div class="dropdown-menu">
                        <a class="text-white dropdown-item display-4" href="#content5-a">
                            <span class="mbri-features mbr-iconfont mbr-iconfont-btn"></span>
                            Fitur
                        </a>
                        <a class="text-white dropdown-item display-4" href="#testimonials1-7">
                            <span class="mbri-protect mbr-iconfont mbr-iconfont-btn"></span>
                            Akses
                        </a>
                        @if(Auth::check())
                        <a class="text-white dropdown-item display-4" href="{{ url('/logout')}}">
                            <span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                            Keluar
                        </a>
                        @endif
                    </div>
                </li>
<!--
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#content5-a"><span class="mbri-features mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#form1-6"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Kontak Kami</a>
                </li>
-->
                @if(Auth::user() &&Auth::user()->akses == 'Admin' )
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{url('admin')}}"><span class="mbri-github mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Administrator</a>
                </li>
                @elseif(Auth::user() &&Auth::user()->akses == 'Kadiv' )
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{url('monitoring')}}"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Kepala Divisi Umum</a>
                </li>
                @elseif(Auth::user() &&Auth::user()->akses == 'Kasubag Pusat' )
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{url('receivePpbj')}}"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Kasubag Pusat</a>
                </li>
                @elseif(Auth::user() &&Auth::user()->akses == 'Kasubag Cabang' )
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{url('receivePpbj')}}"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Kasubag Cabang</a>
                </li>
                @elseif(Auth::user() &&Auth::user()->akses == 'Kasubag QA' )
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{url('receivePpbj')}}"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Kasubag QA</a>
                </li>
                @elseif(Auth::user()&& Auth::user()->akses == 'User')
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{url('userspeople')}}"><span class="mbri-link mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Menunggu Verifikasi</a>
                </li>
            </ul>
            @endif @if(Auth::guest())
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="{{ url('/login')}}"><span class="mbri-login mbr-iconfont mbr-iconfont-btn" style="font-size: 10px;"></span>
                    Masuk</a></div>
            @endif
        </div>
    </nav>
</section>

<section class="engine"><a href="#">simple site builder</a></section><section class="carousel slide cid-qOdZpZVvNd" data-interval="false" id="slider1-0">

    

    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="6000">
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider1-0" class="active" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#slider1-0" data-slide-to="1"></li>
                <li data-app-prevent-settings="" data-target="#slider1-0" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/b-1000x714.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.6;"></div>
                            <img src="assets/images/b-1000x714.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-center">
                                    <h2 class="mbr-fonts-style display-1">MONITORING DIVISI UMUM</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Halaman Monitoring yang Simple, Mudah digunakan &amp; Cepat terakses serta memiliki berbagai Fitur<br>Unggulan yang bisa memonitor setiap dokumen yang masuk dan keluar.</p>
                                    @if(Auth::user() &&Auth::user()->akses == 'Admin' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('admin')}}">ADMIN</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user() &&Auth::user()->akses == 'Kadiv' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('monitoring')}}">KADIV</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user() &&Auth::user()->akses == 'Kasubag' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('receivePpbj')}}">KASUBAG</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user()&& Auth::user()->akses == 'User')
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('userspeople')}}">MENUNGGU</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @endif @if(Auth::guest())
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{ url('/login')}}">MASUK</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/login')}}">DAFTAR</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/a-2000x1500.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.6;"></div>
                            <img src="assets/images/a-2000x1500.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-right">
                                    <h2 class="mbr-fonts-style display-1">
                                        <strong>VISI DIVISI UMUM</strong>
                                    </h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    @if(Auth::user() &&Auth::user()->akses == 'Admin' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('admin')}}">ADMIN</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user() &&Auth::user()->akses == 'Kadiv' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('monitoring')}}">KADIV</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user() &&Auth::user()->akses == 'Kasubag' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('receivePpbj')}}">KASUBAG</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user()&& Auth::user()->akses == 'User')
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('userspeople')}}">MENUNGGU</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @endif @if(Auth::guest())
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{ url('/login')}}">MASUK</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/login')}}">DAFTAR</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/d-1024x768.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="assets/images/d-1024x768.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-left">
                                    <h2 class="mbr-fonts-style display-1">
                                        <strong>MISI DIVISI UMUM</strong>
                                    </h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Memberikan layanan prima dalam bidang pengadaan barang jasa/jasa, pengelolaan asset, transportasi, utilisasi, pemantauan dan perawatan sarana kerja serta layanan dokumen/barang untuk menunjang kelancaran dan optimasi kegiatan operasional perusahaan sesuai kebutuhan pengguna dengan mempertimbangkan biaya, mutu, dan waktu penyerahan, yang memberikan manfaat sebesar-besarnya bagi perusahaan.</p>
                                    @if(Auth::user() &&Auth::user()->akses == 'Admin' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('admin')}}">ADMIN</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user() &&Auth::user()->akses == 'Kadiv' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('monitoring')}}">KADIV</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user() &&Auth::user()->akses == 'Kasubag' )
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('receivePpbj')}}">KASUBAG</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @elseif(Auth::user()&& Auth::user()->akses == 'User')
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{url('userspeople')}}">MENUNGGU</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/logout')}}">KELUAR</a>
                                    </div>
                                    @endif @if(Auth::guest())
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn  display-4 btn-primary" href="{{ url('/login')}}">MASUK</a> 
                                        <a class="btn  display-4 btn-white-outline" href="{{ url('/login')}}">DAFTAR</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-0"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a>
            <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-0"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a>
        </div>
    </div>

</section>

<section class="mbr-section content5 cid-qOehETWMth" id="content5-a">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Fitur Monitor</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Berbagai Fitur Monitoring pada Halaman Website ini.</h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features2 cid-qOehAGWxJ1 mbr-parallax-background" id="features2-9">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);">
    </div>
    
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/01.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Pendataan Barang
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Menambah, Mengedit, dan juga Menghapus data Barang/Jasa pada Dashboard Admin. <a href="http://mobirise.com">Learn more...</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/02.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box ">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Memantau Peminjaman
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Melihat Statistik Peminjaman perbulan ataupun pertahunnya. <a href="http://mobirise.com">Learn more...</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/03.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Lengkap dengan Tanggal & Waktu
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Pada saat Pengembalian Barang, Waktu Otomatis akan terisi setelah barang dikembalikan. <a href="http://mobirise.com">Learn more...</a>
                        </p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<section class="testimonials1 cid-qOe2gVM5ly" id="testimonials1-7">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    PENGGUNA HALAMAN MONITORING
                </h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">
                    Pembagian Akses Melalui Masing - Masing Pengguna dan Fungsi yang Berbeda.
                </h3>
            </div>
        </div>
    </div>

    <div class="container pt-3 mt-2">
        <div class="media-container-row">
            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/why-system-admins-are-so-crucial-to-security-2-240x148.jpg" alt="" title="">
                        </div>
                        <p class="mbr-text mbr-fonts-style display-7">
                           User Pengguna yang dapat mengakses, memberi akses dan mengontrol serta menginput data pada keseluruhan halaman dalam website ini.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             Administrator
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                               Full Access Controller
                        </small>
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/administrator-240x160.png" alt="" title="">
                        </div>
                        <p class="mbr-text mbr-fonts-style display-7">
                           User Pengguna yang hanya dapat memantau data masuk dan keluar serta memonitor jangka waktu kinerja dengan tanggal yang disediakan dan sudah otomatis diprogram.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             Ka. Divisi Umum
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                               Access Monitor
                        </small>
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/couple-240x160.jpg" alt="" title="">
                        </div>
                        <p class="mbr-text mbr-fonts-style display-7">
                           User Pengguna yang hanya dapat memberi penugasan kepada staff dan memonitor kinerja staff atas data yang sudah dimasukkan dari Administrator.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             Ka. Suku Bagian
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                               Access Controller & Monitor
                        </small>
                    </div>
                </div>
            </div>
            
            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/waitstaff-240x156.jpg" alt="" title="">
                        </div>
                        <p class="mbr-text mbr-fonts-style display-7">
                           User Pengguna biasa yang hanya dapat mengakses halaman Beranda dan menunggu akses baru dari Administrator.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             User's
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                               Waiting Of Verification
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </div>   
</section>

<section class="mbr-section form1 cid-qOe1CIth7c mbr-parallax-background" id="form1-6">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    CONTACT FORM
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Easily add subscribe and contact forms without any server-side integration.
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8"><!-- data-form-type="formoid" -->
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
            
                    <form class="mbr-form" action="{{route('contactme')}}" method="POST"> <!-- data-form-title="Mobirise Form" -->
<!--                        <input type="hidden" name="email" data-form-email="true" value="xhZ63dvWsrHcRCX990QKLF+yE7LcwMTFmaMFI7Lt5v2A0UoDOn8e11HaFst93g0KWiNMaeC+yDtTpYlHREHAvNuJAtBzB3jvlkJjb/Z9LmE1QP5ckvI86SWTduwa/add" data-form-field="Email">-->
                        {!! csrf_field() !!}
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name1">Name</label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name1">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email1">Email</label>
                                    <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email1">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="Phone">Subject</label>
                                    <input type="tel" class="form-control" name="subject" data-form-field="Phone" id="phone-form1-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" data-for="message">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-6">Message</label>
                            <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-6"></textarea>
                        </div>
            
                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                        </span>
                    </form>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info1 cid-qOeW6o6fUg" id="info1-d">

    

    
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">This mobile-friendly website is Created by </h3>
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">ADBT team © 2018</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4">
                    <a class="btn btn-primary display-4" href="{{url('info')}}">SEE LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-qOdZIhsE2Z mbr-parallax-background" id="footer1-2">

    

    <div class="mbr-overlay" style="background-color: rgb(35, 35, 35); opacity: 0.9;"></div>

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="#top">
                        <img src="assets/images/divsum-sucofindo-720p-x-500p3-276x192.png" alt="Divisi-Umum" title="DivSum">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Alamat</h5>
                <p class="mbr-text">
                    Graha Sucofindo (Persero)<br>Head Office, Lt. B1 Divisi Umum<br>Jakarta - Indonesia</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Kontak</h5>
                <p class="mbr-text">
                    Email: divumum@sucofindo.co.id&nbsp;<br>Phone: +62 (21) 798 6791&nbsp;<br>Fax: +62 (21) 798 6791
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">Jaringan</h5>
                <p class="mbr-text"><a class="text-primary" href="http://www.sucofindo.co.id/">PT. Sucofindo (PERSERO)</a>&nbsp;<br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2018 <em>ADBT.Team</em> - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  @include('sweet::alert')

  
  
  <input name="animation" type="hidden">
  </body>
</html>