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

    <h3 class="text-center">DATA LOWONGAN PEKERJAAN</h3>
    <!--awal card-->
    <div class="card mt-3">
    <div class="card-header bg-secondary text-white">
    Input Data Lowongan Pekerjaan
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('datalokerja') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" name="nama" class="form-control" placeholder="Input Nama Perusahaan" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Logo Perusahaan</label>
                <input type="file" name="pict" class="form-control" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Input Email Perusahaan" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Input Alamat" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Posisi yang Dibutuhkan</label>
                <input type="text" name="posisi" class="form-control" placeholder="Input Posisi yang Dibutuhkan" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" required></textarea>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
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