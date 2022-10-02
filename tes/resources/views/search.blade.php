@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Cari Lowongan</h2>
            <form action="enhanced-results.html">
            <div class="card-body">
              <p class="login-box-msg">Cari Lowongan Sesuai yang Anda Inginkan!</p>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="select2" multiple="multiple" data-placeholder="Perusahaan, Jabatan, Kata Kunci" style="width: 100%;">
                                        <option>Perusahaan</option>
                                        <option>Jabatan</option>
                                        <option>Kata Kunci</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select class="select2" data-placeholder="Daerah" style="width: 100%;">
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select class="select2" data-placeholder="Posisi" style="width: 100%;">
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="AdminLTE-3.2.0/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.2.0/dist/js/demo.js"></script>
<script>
    $(function () {
      $('.select2').select2()
    });
</script>
</body>
</html>
