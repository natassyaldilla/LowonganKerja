@include('layouts.header')
<!DOCTYPE html>
<html>
<head>
    <tittle></tittle>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<p></p>
<p></p>

    <h3 class="text-center">DATA PERUSAHAAN</h3>
    <!--awal card-->
    <div class="card mt-3">
    <div class="card-header bg-secondary text-white">
        Input Data Perusahaan
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('dataperuad') }}">
            @csrf
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" name="nama" class="form-control" placeholder="Input Nama Perusahaan" >
            </div>
            <p></p>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Input Email Perusahaan" >
            </div>
            <p></p>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Input Alamat" >
            </div>
            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            <a href= "/pilihan" type="button" class="btn btn-primary" name="back">Back</a>

        </form>
    </div>
    </div>
    <!--akhir card-->
<br>
</div>
<br></br>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>