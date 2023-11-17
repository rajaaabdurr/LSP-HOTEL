
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ isset($title) ? $title.' | '.config('app.name') : config('app.name')}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="/css/style.css">
</head>
<body class="hold-transition">
<!-- As a link -->

@include('layouts.inc_tamu.navbar')

<div class="container-fluid p-0">
    <img src="images/banner.jpg" class="img img-fluid w-100">
</div>

<div class="container content">
@yield('content')

    <h1 class="text-center my-4">Fasilitas</h1>
    
    <div class="row fasilitas">
        <div class="col-md-3">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Gratis Sarapan Pagi
                </div>
                <div class="card-body p-1">
                    <img src="images/sarapan.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Kolam Renang
                </div>
                <div class="card-body p-1">
                    <img src="images/kolam_renang.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Restaurant
                </div>
                <div class="card-body p-1">
                    <img src="images/restoran.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Pelayanan 24 Jam
                </div>
                <div class="card-body p-1">
                    <img src="images/resepsionis.jpg" class="img-fluid rounded" />
                </div>
            </a>
        </div>
    </div>

    <h1 class="text-center my-4">Kamar</h1>

    <div class="row kamar">
        <div class="col-md-4">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Standart Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_standar.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 300.000
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Suite Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_suite.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 400.000
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Deluxe Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_deluxe.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 700.000
                </div>
            </a>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted"><strong>Copyright &copy; 2022 Aldhi Xar.</strong> All rights reserved.</span>
    </div>
</footer>

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
