<?php 
require 'function.php';
require 'check.php';

$email = $_SESSION["email"];
$biodata_karyawan = query("SELECT * FROM hrms_karyawan_sample WHERE email_kantor = '$email'")[0];
$nik = $biodata_karyawan["nik"];

$data_draft = query("SELECT * FROM poli_form_pengobatan WHERE flag_draft = 1 AND nik = '$nik'");

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
 <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
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
          <h3 class="m-0 p-0 lh-0">Staff</h3>
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
                          <h5 class="d-none d-md-block" onclick="location.href='riwayat.php';" style="cursor: pointer;">Riwayat Data Klaim</h5>
                          <p class="d-block d-md-none" onclick="location.href='riwayat.php';" style="cursor: pointer;">Riwayat</p>
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
        <div class="box w-100 px-3 pb-5" style="min-height: 85vh;">
          <h2 class="tagline mt-5 pt-5 px-3 pb-0">Draft Data Klaim</h2>
          <div class="justify-content-between d-flex align-items-start">
              <div class="breadcrump my-0 py-0 px-3 pt-1">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class='far'>&#xf15c;</i> Draft</li>
                    <li class="breadcrumb-item actives" aria-current="page">Form Pengobatan</li>
                  </ol>
                </nav>
              </div> 
            <div class="justify-content-end d-none d-md-flex m-0 p-0">
              <div class="biodata-user me-3">
                <p class="teks-biodata p-0 m-0 lh-0">Nama : <?= $biodata_karyawan["nama_lengkap"]; ?></p>
                <p class="teks-biodata p-0 m-0 lh-0">NIK : <?= $nik; ?></p>
                <p class="teks-biodata p-0 m-0 lh-0">Bagian : <?= $biodata_karyawan["kode_bagian"]; ?></p>
              </div>
              <img src="asset/icon/profile/Profile Home.png" alt="" style="width: 45px; height: 45px;">
            </div>
          </div> 
            <div class="table-responsive my-4 pt-4">
              <table id="table_id" class="table box-table table-borderless">
                <thead class="thead-draft text-center">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bagian</th>
                    <th scope="col">Tanggal Pengajuan</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php 
                  $i = 1;
                  foreach ($data_draft as $DD ) :
                  ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $DD["nik"]; ?></td>
                    <td><?= $DD["nama_lengkap"]; ?></td>
                    <td><?= $DD["bagian"]; ?></td>
                    <td><?= $DD["tgl_create"]; ?></td>
                    <td>
                      <?php 
                      $flag_claim_keluarga = $DD["flag_claim_keluarga"];
                      if ( $flag_claim_keluarga > 0 ) {
                      ?>
                      <form action="detail-draft-keluarga.php" method="post">
                        <input type="hidden" name="data_id" value="<?= $DD['id']; ?>">
                        <input type="hidden" name="flag_claim_keluarga" value="<?= $flag_claim_keluarga; ?>">
                        <input type="hidden" name="nik" value="<?= $nik; ?>">
                        <button class="btn btn-choose px-3"><i class='bx bx-edit' ></i>Edit</button>
                      </form>
                      <?php } else if ($flag_claim_keluarga == 0) {?>
                      <form action="detail-draft.php" method="post">
                        <input type="hidden" name="data_id" value="<?= $DD['id']; ?>">
                        <input type="hidden" name="nik" value="<?= $nik; ?>">
                        <button class="btn btn-choose px-3"><i class='bx bx-edit' ></i>Edit</button>
                      </form>
                      <?php } ?>
                    </td>
                    <td style="color:red ">Draft</td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
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
 <script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable({
     language: {
        search: "_INPUT_",
        searchPlaceholder: "Search..."
    }
    
    });
 } );
 </script>
 <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
 <script src="JS/dropdown.js" type="text/javascript"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
 crossorigin="anonymous"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>