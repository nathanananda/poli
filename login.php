<?php 
require 'function.php'


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
    </div>
  </nav>



  <section class="content my-4 d-flex align-items-center" style="height:80vh;">
    <div class="container-md">
      <div class="row">
        <div class="box-login col-md-4 align-items-center justify-content-center px-1 pt-4">
        <div class="text-center">
          <h1 style="color: #719bf0;"><strong>poli.</strong></h1>
          <h3 style="font-family: Gilroy-Light; color:black solid">Sign In</h3>
        </div>
          <form class="row g-3 px-4" action="controller/check-log.php" method="POST">
            <div class="col-md-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-12">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="d-flex justify-content-end px-3 pt-2">
              <button class="btn btn-login px-3" name="sign-in">Sign in</button>            
            </div>
          </form>
        </div>
        <div class="col-md-8 justify-content-end col-12 d-md-flex d-none">
        <div class="icon">
          <img src="asset/icon/Group 85.svg" alt="">
        </div>
      </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>