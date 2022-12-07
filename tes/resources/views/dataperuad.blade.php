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

    <!--awal card tabel-->
    <div class="card mt-3">
    <div class="card-header bg-primary text-white">
        Daftar Perusahaan
    </div>
    <div class="card-body">
        <a class="btn btn-info" href="{{ url ('peruad') }}">Tambah Data</a>
       <table class="table table-bordered table-striped">
        <tr>
            <th>Nama Perusahaan</th>
            <th>Email</th>
            <th>Alamat</th>
            <th colspan="2">AKSI</th>
        </tr>
        @foreach ($data as $key=>$value)
        <tr>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->alamat }}</td>
            <td><a class="btn btn-info" href="{{ url('dataperuad/' .$value->id.'/edit') }}">Update</a></td>
            <td>
                <form action="{{ url('dataperuad/'.$value->id) }}" method="POST"> 
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
            </td>
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