<?php 
date_default_timezone_set('Asia/Jakarta');
require 'function.php';
require 'check.php';

$biodata_karyawan = query("SELECT * FROM hrms_karyawan_sample WHERE email_kantor = '$email'")[0];
// WAKTU LIVE
$time_now = date('Y-m-d H:i:s');
// Poli Jenis Penggantian 
$jenis_penggantian = query("SELECT * FROM poli_master_jenis_penggantian");

// Lemparan Data
$nik = $_POST["nik"];
$data_id = $_POST["data_id"];

$data_pendaftaran = query("SELECT * FROM poli_form_pengobatan WHERE id = '$data_id' AND nik = '$nik'")[0];




if (isset($_POST["Add"])) {
  if (detail($_POST) > 0) {

  } else {
      echo "
      <script>
          alert('Tgl Kwitansi Melebihi');
      </script>
      ";
  }
}

if (isset($_POST["hapus-detail"])) {
    if (delete_detail($_POST) > 0) {
  
    } else {
        echo "
        <script>
            alert('Gagal Brow !');
            document.location.href = 'detail-draft-self.php';
        </script>
        ";
    }
  }


$table_details = query("SELECT * FROM poli_form_pengobatan_detail WHERE nik = '$nik' AND data_id = '$data_id' AND status_detail = 0 AND flag_delete_detail = 0");


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
                          <h5 class="d-none d-md-block" onclick="location.href='riwayat.php';">Riwayat Data Klaim</h5>
                          <p class="d-block d-md-none" onclick="location.href='riwayat.php';">Riwayat</p>
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
        <div class="box w-100 px-md-5">
          <h2 class="tagline mt-5 pt-5 px-3 pb-0">Details Pengajuan</h2>
          <div class="justify-content-between d-flex align-items-start">
              <div class="breadcrump my-0 py-0 px-3 pt-1">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class='far'>&#xf15c;</i>Draft</li>
                    <li class="breadcrumb-item" aria-current="page">Form Pengobatan</li>
                    <li class="breadcrumb-item actives" aria-current="page">Detail Pengajuan</li>
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
          <div class="m-0 p-0 mx-md-5">
            <div class="card-box p-0 m-0 mt-md-4 my-md-4 p-md-3 mx-md-5">
             <h4 class="pt-4 mx-3 mx-md-4 px-md-3">Detail Pengajuan</h4>
             <form class="form-user row g-3 px-5 pt-3" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="data_id" id="data_id" value="<?= $data_id ?>"> 
                <input type="hidden" name="nik" id="nik" value="<?= $nik; ?>">
                <input type="hidden" name="user_create" id="user_create" value="<?= $email; ?>">
                <input type="hidden" name="date_create" id="date_create" value="<?= $time_now; ?>">
                <div class="col-md-6">
                   <label for="nik" class="form-label">NIK</label>
                   <input type="text" class="form-control text-muted" id="nik" value="<?= $data_pendaftaran["nik"]; ?>" disabled>
                </div>
                <div class="col-md-6">
                   <label for="tgl_pengajuan" class="form-label">Tanggal Pengajuan</label>
                   <input type="text" class="form-control text-muted" id="tgl_pengajuan" value="<?= $data_pendaftaran["tgl_create"]; ?>" disabled>
                </div>
                <hr> <br>
                <div class="col-md-6">
                  <label for="tgl_kwitansi" class="form-label">Tanggal Kwitansi</label>
                  <input type="date" class="form-control" id="tgl_kwitansi" name="tgl_kwitansi">
               </div>
               <div class="col-md-5">
                 <label for="jenis_pengajuan" class="form-label">Jenis Pengajuan</label>
                 <select id="jenis_pengajuan" name="jenis_penggantian" class="form-select"  style="font-family: Gilroy-Light;"  required>
                  <option value="" style="font-family: Gilroy-Light;" selected>Pilih Jenis Penggantian</option>
                  <?php foreach ($jenis_penggantian as $JP ) : ?>
                   <option value="<?= $JP["jenis_penggantian"]; ?>" style="font-family: Gilroy-Light;"><?= $JP["jenis_penggantian"]; ?></option>
                  <?php endforeach; ?>
                 </select>
               </div>
               <div class="col-12">
                 <label for="keterangan" class="form-label">Keterangan</label>
                 <textarea class="form-control" id="keterangan" name="keterangan" style="height: 100px"></textarea>
              </div>
              <div class="col-md-6">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
              </div>
              <div class="col-md-6">
                <label for="file_nota" class="form-label">Masukan Nota Pembayaran (.jpg)</label>
                <input class="form-control" type="file" id="file_nota" name="file_nota">
              </div>
              <div class="text-end px-3 py-2">
               <button class="btn btn-add px-3" name="Add">Add</button>
              </div>
             </form>
           </div>
          </div>
          <div class="footer pt-3"> 
            <div class="show-data">
              <div class="table-responsive">
                <table class="table table-borderless">
                  <thead class="thead-family text-center">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Tanggal Kwitansi</th>
                      <th scope="col">Jenis Penggantian</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Harga</th>
                      <th scope="col">File</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-center border-0">
                    <?php 
                    $i = 1;
                    $total = 0;
                    $total_penggantian = 0;
                    foreach ( $table_details as $detail ) : 
                    $total += $detail["harga"];
                    $total_penggantian = (80/100) * $total;
                    ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $detail["tgl_kwitansi"]; ?></td>
                      <td><?= $detail["jenis_penggantian"]; ?></td>
                      <td><?= $detail["keterangan"]; ?></td>
                      <td><?= convert_to_rupiah($detail["harga"]); ?></td>
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-eyes bg-transparent btn-outline-success border-0" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $detail["id_detail"]; ?>">
                          <i class="fa-solid fa-eye"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?=$detail["id_detail"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Kwitansi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <img src="imgnota/<?=$detail["file_nota"];?>" alt="" width="100%">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <form action="" method="POST">
                          <input type="hidden" name="email" id="email" value="<?= $email; ?>">
                          <input type="hidden" name="id" id="id" value="<?= $detail["id_detail"]; ?>">
                          <input type="hidden" name="data_id" id="data_id" value="<?= $data_id; ?>">
                          <input type="hidden" name="nik" id="nik" value="<?= $nik; ?>">
                          <button class="btn btn-trash bg-transparent btn-outline-success border-0" name="hapus-detail"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <div class="d-flex flex-column text-end">
                    <p class="pe-5 me-5">Total : <?= convert_to_rupiah($total); ?></p>
                    <p class="pe-5 me-5">Total Penggantian : <?= convert_to_rupiah($total_penggantian); ?></p>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end py-3">
              <form action="draft.php" method="">
                <button class="btn btn-save px-3 mx-3">Draft</button>      
              </form>
              <form action="controller/draft-ajukan-self.php" method="POST">
                <input type="hidden" name="data_id" id="data_id" value="<?= $data_id; ?>">
                <input type="hidden" name="nik" id="nik" value="<?= $nik; ?>">
                <button class="btn btn-save px-3">Ajukan</button>      
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
 <script type="text/javascript">
    $(document).ready(function() {
        $(".btn btn-add").click(function() {
            var data = $('.form-user').serialize();
            $.ajax({
                type: 'POST',
                url: "function.php",
                data: data,
                success: function() {
                    $('.show-data').load("form-detail-keluarga.php");
                }
            });
        });
    });
</script>
 <script src="JS/format-rupiah.js"></script>
 <script src="JS/dropdown.js" type="text/javascript"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
 crossorigin="anonymous"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>