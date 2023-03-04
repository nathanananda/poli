<?php 
date_default_timezone_set('Asia/Jakarta');
require 'function.php';
require 'check.php';

$time_now = date('Y-m-d H:i:s');
echo $time_now;

$id_tanggungan = $_POST["id_tanggungan"];
$biodata_keluarga = query("SELECT * FROM hrms_tanggungan_karyawan_sample WHERE Id = '$id_tanggungan'")[0];

$biodata_karyawan = query("SELECT * FROM hrms_karyawan_sample WHERE email_kantor = '$email'")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row px-md-3">
      
      <div class="px-1 col-2 col-md-3 px-md-3">
       <div class="row py-1 my-3 my-md-0 py-md-5 text-center">
         <h3 class="logo" onclick="location.href='index.html';" style="cursor: pointer;">poli.</h3>  
       </div>
       <div class="row role-icon d-none d-md-flex mx-md-3 p-md-2 flex-column justify-content-between">
        <h5><span><i class='bx bx-smile bx-tada' ></i></span> Saldo Plaffon</h5>
        <h5>Rp. 10.000.000</h5>
        <div class="mt-5 pt-3">
          <h3 class="m-0 p-0 lh-0"><?= $biodata_karyawan["kode_jabatan"]; ?></h3>
          <h5 class="py-0">BPK PENABUR JAKARTA</h5>
        </div>
       </div>
       <div class="row">
        <div class="col-12">
          <div class="menu-wrap container-fluid">
            <div class="wrapper">
              <div class="sidebar row container-fluid m-0 p-0">
                <div id="menu-details" class="col-12 m-0 my-md-0 my-3 p-0" onclick="location.href='#';" style="cursor: pointer;">
                  <div class="row px-md-2">
                    <div class="menu-sidebar container-fluid m-0 p-0  d-flex justify-content-between align-items-end">
                      <div class="icon-menu d-flex flex-row align-items-end">
                        <img src="asset/icon/icon _medicine bottle line_.svg" alt="" style="width: 30px; height:30px;">
                        <h5 class="text-start d-md-block d-none mb-0 mt-3 px-1 d-none d-md-block"><strong class=""> Form Pengobatan</strong></h5>
                      </div>  
                      <h4 class="text-end mb-0 mt-md-4"><i class='bx bxs-chevron-down' style='color:#fff' ></i></h4>
                    </div>
                    <div class="dropdown-sidebar m-0 p-0">
                      <div class="submenu-sidebar">
                        <div class="ps-md-4 mx-md-3 mt-md-2 d-flex flex-row align-items-start">
                          <img class="d-none d-md-block" src="asset/icon/fluent_form-multiple-28-regular.svg" alt="">
                          <h5 class="d-md-block d-none" onclick="location.href='form-pengobatan.php';" style="cursor: pointer;">Data Klaim</h5>
                          <p class="d-block d-md-none" onclick="location.href='form-pengobatan.php';" style="cursor: pointer;">Form</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="menu-details" class="col-12 m-0 my-md-0 my-3 p-0" onclick="location.href='#';" style="cursor: pointer;">
                  <div class="row px-md-2">
                    <div class="menu-sidebar-draft container-fluid m-0 p-0  d-flex justify-content-between align-items-end">
                      <div class="icon-menu d-flex flex-row align-items-end">
                        <img src="asset/icon/fluent_form-24-regular.svg" alt="" style="width: 30px; height:30px;">
                        <h5 class="text-start d-md-block d-none mb-0 mt-md-3 px-md-1"><strong class=""> Draft</strong></h5>
                      </div>
                      <h4 class="text-center mb-0 mt-md-4"><i class='bx bxs-chevron-down' style='color:#fff' ></i></h4>
                    </div>
                    <div class="dropdown-sidebar m-0 p-0">
                      <div class="submenu-sidebar-draft">
                        <div class="ps-md-4 mx-md-3 mt-md-2 d-flex flex-row align-items-start">
                          <img class="d-none d-md-block" src="asset/icon/icon _medicine bottle line_.svg" alt="">
                          <h5 class="d-none d-md-block" onclick="location.href='draft.php';" style="cursor: pointer;">Form Pengobatan</h5>
                          <p class="d-block d-md-none" onclick="location.href='draft.php';" style="cursor: pointer;">Form</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="menu-details" class="col-12 m-0 my-md-0 my-3 p-0" onclick="location.href='#';" style="cursor: pointer;">
                  <div class="row px-md-2">
                    <div class="menu-sidebar-riwayat container-fluid m-0 p-0  d-flex justify-content-between align-items-end">
                      <div class="icon-menu d-flex flex-row align-items-end">
                        <img src="asset/icon/icon _history_.svg" alt="" style="width: 25px; height: 25px;">
                        <h5 class="text-start d-md-block d-none mb-0 mt-3 px-2"><strong> Riwayat</strong></h5>
                      </div>
                      <h4 class="text-end mb-0 mt-md-4"><i class='bx bxs-chevron-down' style='color:#fff' ></i></h4>
                    </div>
                    <div class="dropdown-sidebar m-0 p-0">
                      <div class="submenu-sidebar-riwayat">
                        <div class="ps-md-4 mx-md-3 mt-md-3 d-flex flex-row align-items-start">
                          <img class="d-none d-md-block" src="asset/icon/icon _history_.svg" alt="">
                          <h5 class="d-none d-md-block">Riwayat Data Klaim</h5>
                          <p class="d-block d-md-none">Riwayat</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="menu-details" class="col-12 m-0 my-md-0 my-3 p-0" onclick="location.href='#';" style="cursor: pointer;">
                  <div class="row px-md-2">
                    <div class="menu-sidebar-logout container-fluid m-0 p-0  d-flex justify-content-between align-items-end">
                      <div class="icon-menu d-flex flex-row align-items-end">
                        <img src="asset/icon/ic_outline-log-out.svg" alt="" style="width: 25px; height: 25px;">
                        <h5 class="text-start d-md-block d-none mb-0 mt-3 px-2"><strong> Logout</strong></h5>
                      </div>
                      <h4 class="text-end mb-0 mt-md-4"><i class='bx bxs-chevron-down' style='color:#fff' ></i></h4>
                    </div>
                    <div class="dropdown-sidebar m-0 p-0">
                      <div class="submenu-sidebar-logout">
                        <div class="ps-md-4 mx-md-3 mt-md-3 d-flex flex-row align-items-start">
                          <img class="d-none d-md-block" src="asset/icon/ic_outline-log-out.svg" alt="">
                          <h5 class="d-none d-md-block" onclick="location.href='logout.php';" style="cursor: pointer;">Logout</h5>
                          <p class="d-block d-md-none" onclick="location.href='logout.php';" style="cursor: pointer;">Logout</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      </div>
      <div class="col-9 p-0 m-0">
        <div class="box w-100 px-4">
          <h2 class="tagline mt-5 pt-5 px-3 pb-0">Konfirmasi</h2>
          <div class="justify-content-between d-flex align-items-start">
              <div class="breadcrump my-0 py-0 px-3 pt-1">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class='far'>&#xf15c;</i> Form Pengobatan</li>
                    <li class="breadcrumb-item" aria-current="page">Data Klaim</li>
                    <li class="breadcrumb-item" aria-current="page" onclick="location.href='form-pengobatan.php';" style="cursor: pointer;" >Biodata Pribadi</li>
                    <li class="breadcrumb-item actives" aria-current="page">Konfirmasi</li>
                  </ol>
                </nav>
              </div> 
            <div class="justify-content-end d-none d-md-flex m-0 p-0">
              <div class="biodata-user me-3">
                <p class="teks-biodata p-0 m-0 lh-0">Nama : <?= $biodata_karyawan["nama_lengkap"]; ?></p>
                <p class="teks-biodata p-0 m-0 lh-0">NIK : <?= $biodata_karyawan["nik"]; ?></p>
                <p class="teks-biodata p-0 m-0 lh-0">Bagian : <?= $biodata_karyawan["kode_bagian"]; ?></p>
              </div>
              <img src="asset/icon/profile/Profile Home.png" alt="" style="width: 45px; height: 45px;">
            </div>
          </div>
          <div class="card-box p-0 m-0 mt-md-4 my-md-4 p-md-3">
            <h4 class="pt-3  mx-3 mx-md-4">Biodata Pribadi</h4>
            <dl class="row pt-3 mx-1 mx-md-3">
                <dt class="col-sm-3">NIK </dt>
                <dd class="col-sm-9">: <?= $biodata_karyawan["nik"]; ?></dd>

                <dt class="col-sm-3">Nama Lengkap </dt>
                <dd class="col-sm-9">: <?= $biodata_karyawan["nama_lengkap"]; ?></dd>
                
                <dt class="col-sm-3">No. Kartu Keluarga </dt>
                <dd class="col-sm-9">: <?= $biodata_karyawan["no_kk"]; ?></dd>

                <dt class="col-sm-3">Bagian </dt>
                <dd class="col-sm-9">: <?= $biodata_karyawan["kode_bagian"]; ?></dd>
            </dl>
          </div>
          <div class="card-box p-0 m-0 mt-md-4 my-md-4 p-md-3">
           <h4 class="pt-3  mx-3 mx-md-4">Claim Untuk Keluarga</h4>
           <dl class="row pt-3 mx-1 mx-md-3">           
               <dt class="col-sm-3">Nama Lengkap </dt>
               <dd class="col-sm-9">: <?= $biodata_keluarga["nama_lengkap"]; ?></dd>
               
               <dt class="col-sm-3">No. Kartu Keluarga </dt>
               <dd class="col-sm-9">: <?= $biodata_keluarga["no_kk"]; ?></dd>

               <dt class="col-sm-3">Status Hubungan </dt>
               <dd class="col-sm-9">: <?= $biodata_keluarga["status_hubungan"]; ?></dd>
           </dl>
         </div>
          <div class="footer">
            <div class="d-flex justify-content-end py-md-4 px-md-1">
              <form action="controller/insert-pengajuan-keluarga.php" method="post">
                <input type="hidden" name="nik" value="<?= $biodata_karyawan["nik"]; ?>">
                <input type="hidden" name="nama_lengkap" value="<?= $biodata_karyawan["nama_lengkap"]; ?>">
                <input type="hidden" name="bagian" value="<?= $biodata_karyawan["kode_bagian"]; ?>">
                <input type="hidden" name="tgl_create" value="<?= $time_now; ?>">
                <input type="hidden" name="flag_claim_keluarga" value="<?= $biodata_keluarga["Id"]; ?>">
                <button class="btn btn-next mx-0 mx-md-5 px-4">Next ?</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    
     </div>
  </div>
  <footer class="footer my-5 py-3 my-md-0 py-md-0 pt-md-3">
    <div class="footer-content text-center">
        <p class="">Ananda ©2022 BPK PENABUR JAKARTA</p>
    </div>
  </footer>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="JS/dropdown.js" type="text/javascript"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
 crossorigin="anonymous"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>