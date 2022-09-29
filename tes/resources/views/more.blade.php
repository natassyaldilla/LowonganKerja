<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cari Kerja | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CariKerja</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> Natassya Aldilla</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lowongan Kerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/search" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/welcome" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
<<<<<<< HEAD
            
            <p> </p>
            <div class="content">
            
            <a class="h1"><b>Staff Admin</a>
            <h4 class="m-0">PT Yanno Agro Science</h4>
            <h6 class="m-1">Tangerang Selatan</h6>
=======
            <p> </p>
            <div class="content">
            <a class="h1"><b>Staff Admin</a>
            <h4 class="m-0">PT Yanno Agro Science</h4>
            <h6 class="m-1">Tangerang Selatan</h6>
            <div class="card-header text-right">
            </div>
>>>>>>> 7c9eb91bdb5533a2035a8daf42e038c56c3b4331
            <p> </p>
            <h7 class="m-3">Deskripsi Pekerjaan :</h7>
                <h6 class="m-1">- Bertanggungjawab langsung atas stock barang di gudang</h6>
                <h6 class="m-1">- Mengatur, mengawasi, menghitung jumlah stock barang</h6>
                <h6 class="m-1">- Mengontrol keluar masuk barang & membuat laporan stock barang</h6>
                <h6 class="m-1">- Melakukan pengecekan secara berkala</h6>
                <h6 class="m-1"></h6>
            <p> </p>
            <h7 class="m-3">Persyaratan :</h7>
                <h6 class="m-1">- Pendidikan Minimal SMA/SMK/Sederajat</h6>
                <h6 class="m-1">- Maksimal umur 30 tahun</h6>
                <h6 class="m-1">- Pengalaman Minimal 1 Tahun</h6>
                <h6 class="m-1">- Mampu Menguasai MS. Word, MS. Excel & MS. Power Point</h6>
                <h6 class="m-1">- Dapat berkomunikasi denganbaik</h6>
                <h6 class="m-1">- Disiplin, Teliti, Ulet, Loyal, Jujur, Berani & Bertanggung jawab</h6>
                <h6 class="m-1">- Mampu bekerja di abwah tekanan</h6>
                <h6 class="m-1">- Dapat bekerja sama dalam team maupun individu</h6>
                <h6 class="m-1">- Penempatan wilayah Tangerang
                </h6>
            
        
            

          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
<<<<<<< HEAD
        <p> </p>
        <img src="{{asset('AdminLTE-3.2.0')}}/dist/img/yanno.jpg" alt="User Image">
=======
        <p></p>
      <img src="AdminLTE-3.2.0/dist/img/yanno.jpeg">
<<<<<<< HEAD
      <div class="col-6">
        <p> </p>
        <a href= "/welcome" class="btn btn-primary btn-block">Lamar Sekarang</a>
      </div>
=======
>>>>>>> 7c9eb91bdb5533a2035a8daf42e038c56c3b4331
>>>>>>> 261bb8567b11aa2330503e38cddf5570722f9c14
    </div>
    <!-- /.content-header -->
