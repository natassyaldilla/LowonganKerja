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

    <h3 class="text-center">Lamar Pekerjaan</h3>
    <h5 class="text-center">Lamar Pekerjaan Sekarang Secara Gratis dan Cepat di CariKerja</h5>
    <!--awal card-->
    <div class="card mt-3">
    <div class="card-header bg-secondary text-white">
    Input Data Pelamar
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('datapel') }}">
            @csrf
            <div class="form-group">
                <label>Nama Pelamar</label>
                <input type="text" name="nama" class="form-control" placeholder="Input Nama Anda" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Input Email Anda" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="notelp" class="form-control" placeholder="Input No Telp Anda" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Perusahaan yang Dituju</label>
                <input type="text" name="perusahaan" class="form-control" placeholder="Input Nama Perusahaan yang Dituju" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Posisi yang di Inginkan</label>
                <input type="text" name="posisi" class="form-control" placeholder="Input Posisi yang Diinginkan" required>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
            <a href= "/cbindex" type="button" class="btn btn-primary" name="back">Back</a>

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