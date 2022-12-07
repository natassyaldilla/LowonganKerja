@include('layouts.header')

<?php
$server="localhost";
$user="root";
$pass="";
$database="crud_laravel";

$koneksi=mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

if(isset($_POST['simpan']))
{
    $simpan = mysqli_query($koneksi, "INSERT INTO pelamar(id_pelamar, nama_pelamar, email, no_telp, nama_perusahaan, posisi)
                                      values('$_POST[idpel]', 
                                            '$_POST[namapel]', 
                                            '$_POST[emailpel]', 
                                            '$_POST[notelppel]',
                                            '$_POST[perpel]',
                                            '$_POST[pospel]')
    ");
    if ($simpan)
    {
        echo"<script>
                alert('Simpan Data Sukses');
                document.location='form.php';
            </script>";
    }
    else
    {
        echo"<script>
                alert('Simpan Data Gagal');
                document.location='form.php';
            </script>";
    }
}
?>

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
    <form method="post" action="">
            <div class="form-group">
                <label>ID Pelamar</label>
                <input type="text" name="idpel" class="form-control" placeholder="Input ID Pelamar" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Nama Pelamar</label>
                <input type="text" name="namapel" class="form-control" placeholder="Input Nama Pelamar" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="emailpel" class="form-control" placeholder="Input Email Pelamar" required>
            </div>
            <p></p>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="notelppel" class="form-control" placeholder="Input No Telp" required>
            </div>
            <div class="form-group">
                <label>Perusahaan yang Dituju</label>
                <input type="text" name="perpel" class="form-control" placeholder="Input Nama Perusahaan" required>
            </div>
            <div class="form-group">
                <label>Posisi yang di Inginkan</label>
                <input type="text" name="pospel" class="form-control" placeholder="Input Posisi" required>
            </div>
            <br></br>
            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>

        </form>
    </div>
    </div>
    <!--akhir card-->
</div>
<br></br>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>