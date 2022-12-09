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
    <form method="POST" action="{{ url('datalokerja/'.$model->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" name="nama" value="{{ $model->nama }}" class="form-control" placeholder="Input Nama Perusahaan" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="{{ $model->email }}"  class="form-control" placeholder="Input Email Perusahaan" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ $model->alamat }}" class="form-control" placeholder="Input Alamat" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Posisi yang Dibutuhkan</label>
                <input type="text" name="posisi" value="{{ $model->posisi }}" class="form-control" placeholder="Input Posisi yang Dibutuhkan" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" value="{{ $model->deskripsi }}" placeholder="Masukkan Deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label>Kriteria</label>
                <textarea class="form-control" name="kriteria" value="{{ $model->kriteria }}" placeholder="Masukkan Deskripsi" required></textarea>
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