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

<h3 class="text-center">DATA PELAMAR</h3>

    <!--awal card tabel-->
    <div class="card mt-3">
    <div class="card-header bg-primary text-white">
        Daftar Pelamar
    </div>
    <div class="card-body">
        <a class="btn btn-info" href="{{ url ('form') }}">Tambah Data</a>
       <table class="table table-bordered table-striped">
        <tr>
            <th>Nama Pelamar</th>
            <th>Email</th>
            <th>No Telp</th>
            <th>Perusahaan yang Dituju</th>
            <th>Posisi yang di Inginkan</th>
        </tr>
        @foreach ($data as $key=>$value)
        <tr>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->notelp }}</td>
            <td>{{ $value->perusahaan }}</td>
            <td>{{ $value->posisi }}</td>
        </tr>
        @endforeach
        </form>
       
       </table>
    </div>
    </div>
    <!--akhir card-->
    <a href= "/admin" type="button" class="btn btn-primary" name="back">Back</a>
</div>
<br></br>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>