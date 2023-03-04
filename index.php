<?php 
require 'function.php';
require 'check.php';

$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poli Umum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="landing-page">



  <nav class="navbar navbar-expand-md sticky-top ">
    <div class="container-fluid">
      <a class="navbar-brand d-md-none" href="#">Poli.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="container-md">

       
        <ul class="navbar-nav w-100 justify-content-evenly">

          <div class="col">
            <a class="navbar-brand d-none d-md-block" href="#">Poli.</a>
          </div>
          <div class="col-auto d-flex flex-column flex-md-row align-items-end">
            <li class="nav-item px-md-4">
              <a class="nav-link text-white" aria-current="page" href="form-pengobatan.php">Form Pengobatan</a>
            </li>
            <li class="nav-item px-md-4">
              <a class="nav-link text-white" href="draft.php">Draft</a>
            </li>
            <li class="nav-item px-md-4">
              <a class="nav-link text-white" href="riwayat.php">Rekap</a>
            </li>
            <li class="nav-item px-md-4">
              <a class="nav-link text-white" href="logout.php">Sign Out</a>
            </li>
          </div>
          <!-- <div class="col">

          </div> -->



        </ul>
        
      </div>
      </div>
    </div>
  </nav>



  <section class="content my-4 d-flex align-items-center" style="height:75.8vh;">
    <div class="container-md">
      <div class="row">
        <div class="col d-flex align-items-center justify-content-center order-2 order-md-1">
          <div class="mt-4 pt-4">
          <h3 class="text-main h-3 text-start"><strong>Klaim Kesehatan lebih mudah</strong></h3>
          <p>Vivamus vestibulum gravida magna non fringilla. Maecenas quis metus odio. Duis in nunc nulla. Morbi nec consectetur nisi. Maecenas ipsum arcu, hendrerit ac turpis sed, sodales vehicula lectus.</p>
          <button class="btn btn-landing-page" onclick="location.href='form-pengobatan.php';">Mulai Sekarang</button>
        </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center col-12 order-1 order-md-2">
        <div class="icon ">
          <img src="asset/icon/Group 85.svg" alt="">
         </div>
      </div>
      </div>
    </div>
  </section>
  <footer class="footer mt-5 pt-3 my-md-0 pt-md-0 pt-md-3">
    <div class="footer-content-index text-center">
        <p class="m-0">Ananda ©2022 BPK PENABUR JAKARTA</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>