<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>CariKerja</title>
  </head>
  <body>

  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="AdminLTE-3.2.0/dist/img/index1.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="AdminLTE-3.2.0/dist/img/index1.png"><span class="font-weight-bold"><strong>Cari</strong>Kerja</a></span></h1>
          <hr>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white"><strong>Cari</strong>Kerja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index"><span class="text-white">Home</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/cbindex"><span class="text-white">Dashboard</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/perusahaan"><span class="text-white">Perusahaan</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/cbindex"><span class="text-white">Lowongan Kerja</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index"><span class="text-white">Log Out</span></a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->


<div class="judul text-center mt-5">
          <h3 class="font-weight-bold">Dashboard</h3>
          <h5>1-8 terbaru dari 100 lowongan</h5>
</div>

<!-- Menu -->
<div class="container">
  <a href="/peruad">

  </a>
  <div class="row">
        
  </div>
        <div class="row mt-3">

      
        @foreach($lokers as $l)

          <div class="col-md-3 my-3" >
              <div class="card border-dark">
                <!-- <img src="AdminLTE-3.2.0/dist/img/yano.jpg" class="card-img-top" alt="..."> -->
                <img src="{{asset('/pict_folder/'. $l->relation_code)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">{{$l->posisi}}</h5>
                <label class="card-text harga">{{$l->nama}}</label><br>
                  <a href="/more" class="btn btn-primary btn-sm">More info</a>
                </div>
              </div>
          </div>
        
        @endforeach
          <!-- <div class="col-md-3">
            <div class="card border-dark">
              <img src="AdminLTE-3.2.0/dist/img/yano.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Staff Admin</h5>
               <label class="card-text harga">PT Yanno Agro Science</label><br>
                <a href="/more" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="AdminLTE-3.2.0/dist/img/circlek.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Management Trainee</h5>
               <label class="card-text">PT. Circleka Indonesia Utama</label><br>
               <a href="/more2" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="AdminLTE-3.2.0/dist/img/kiantaka.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Supervisor IT</h5>
                <label class="card-text">PT Ki-Antaka Rasa</label><br>
                <a href="/more6" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="AdminLTE-3.2.0/dist/img/sr12.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Internal Audit Staff</h5>
                <label class="card-text">PT SR12 Herbal Kosmetik</label><br>
                <a href="/more3" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="AdminLTE-3.2.0/dist/img/lock.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Sales Admin</h5>
                <label class="card-text">PT Lock & Lock Indonesia</label><br>
                <a href="/more4" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
          </div>  

          <div class="col-md-3">
            <div class="card border-dark ">
              <img src="AdminLTE-3.2.0/dist/img/ananta.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Administration Staff</h5>
                <label class="card-text">PT Ananta Swasta Dana</label><br>
                <a href="/more5" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
          </div>        

          <div class="colmd-3">
            <div class="card border-dark">
              <img src="AdminLTE-3.2.0/dist/img/sekarguna.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Web Developer</h5>
                <label class="card-text">PT Sekarguna Medika</label><br>
                <a href="/more7" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
          </div>   

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="AdminLTE-3.2.0/dist/img/sr12.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Senior Programmer</h5>
                <label class="card-text">PT SR12 Herbal Kosmetik</label><br>
                <a href="/more8" class="btn btn-primary btn-sm">More info</a>
              </div>
            </div>
        </div>    -->
         </div> 
  </div>
      <p></p>
</div>
  <!-- Akhir Menu -->
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>