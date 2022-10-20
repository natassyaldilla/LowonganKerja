@include('layouts.header')
@include('layouts.navadm')
@include('layouts.sidead')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cari Lowongan Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0plugins/fontawesome-free/css/all.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/select2/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
            <h3><sup style="font-size: 16px">PERUSAHAAN</sup></h3>
            <h3>8</h3>
            </div>
            <div class="icon">
                <i class="ion ion-briefcase"></i>
              </div>
            <a href="/pilihan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><sup style="font-size: 16px">PELAMAR</sup></h3>
              <h3>20</h3>
            </div>
            <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
            <a href="/peladm" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
</section>
<p> </p>

<div class="col-sm-6">
  <h3 class="m-0">Pelamar</h3>
<p> </p>
</div>
<p> </p>


<table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pelamar</th>
      <th scope="col">ID Pelamar</th>
      <th scope="col">Tanggal Pendaftaran</th>
      <th colspan="3" scope="col">Action</th>
    </thead>
    </tr>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Keyla Violetta</td>
      <td>0987</td>
      <td>10-10-2020</td>
      <td><i class="fas fa-edit"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Brian Satria</td>
      <td>9876</td>
      <td>15-09-2020</td>
      <td><i class="fas fa-edit"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Herry Prianto</td>
      <td>5678</td>
      <td>20-06-2019</td>
      <td><i class="fas fa-edit"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Danilla Ramadhina</td>
      <td>1469</td>
      <td>06-09-2021</td>
      <td><i class="fas fa-edit"></i></td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  </tbody>
</table>