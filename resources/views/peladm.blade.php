@include('layouts.header')
@include('layouts.navadm')
@include('layouts.sidead')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pelamar | Admin</title>

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
            <h1 class="m-0">Pelamar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pelamar</th>
      <th scope="col">ID Pelamar</th>
      <th scope="col">Tanggal Pendaftaran</th>
      <th colspan="3" scope="col">Action</th>
    </tr>
    </thead>
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