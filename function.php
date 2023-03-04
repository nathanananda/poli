<?php 
date_default_timezone_set('Asia/Jakarta');
$conn = mysqli_connect('servervps.bpkpenaburjakarta.or.id', 'plimspnb_ukgs', '[J(e9Y?Ow6cB', 'plimspnb_klaim_pengobatan');
session_start();




function query($query) {
 global $conn;
 $result = mysqli_query($conn, $query);
 $rows = [];
 while( $row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
 }
 return $rows;
}

// function login
function loginAdmin($data) {
 global $conn;

 $email = $data["email"];
 $password = $data["password"];

 $check = mysqli_query($conn, "SELECT * FROM hrms_karyawan_sample WHERE BINARY email_kantor = '$email' and BINARY password = '$password'");
 //hitung jumlah data
 $count = mysqli_num_rows($check);
 return $count;
}

// function insert-pengajuan-keluarga
function insert_pengajuan_keluarga($data) {
 global $conn;

 $nik = htmlspecialchars($data["nik"]);
 $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
 $bagian = htmlspecialchars($data["bagian"]);
 $tgl_create = htmlspecialchars($data["tgl_create"]);
 $flag_claim_keluarga = htmlspecialchars($data["flag_claim_keluarga"]);

 $query = "INSERT INTO poli_form_pengobatan VALUES ('', '$nik', '$nama_lengkap', '$bagian', '$tgl_create', '', '', '', '', '', '', '$flag_claim_keluarga', '', '')";
 mysqli_query($conn, $query);
 $check = mysqli_affected_rows($conn);
	return $check;
}

function detail($data) {
	global $conn;

	$data_id = htmlspecialchars($data["data_id"]);
	$nik = htmlspecialchars($data["nik"]);
 	
 $jenis_penggantian = htmlspecialchars($data["jenis_penggantian"]);
 $keterangan = htmlspecialchars($data["keterangan"]);

 $data_harga = htmlspecialchars($data["harga"]);
	$replace_titik = str_replace(".", "", $data_harga);
 $harga = str_replace("Rp", "", $replace_titik);
 
 //upload gambar
 $file_nota = upload_nota();
	if (!$file_nota) {
		return false;
	}

 $status_detail = 0;
 
 $user_create = htmlspecialchars($data["user_create"]);
 $date_create = htmlspecialchars($data["date_create"]);
	
 $tgl_now = date("Y-m-d");
 $data_tgl_kwitansi = htmlspecialchars($data["tgl_kwitansi"]);
 $tgl_max = date('d F Y', strtotime('-'.(40).'days', strtotime($tgl_now)));
 $alert = 0;
 if ( strtotime($data_tgl_kwitansi) < strtotime($tgl_max)) {
  return $alert;
 } elseif (strtotime($data_tgl_kwitansi) == strtotime($tgl_max)) {
  $tgl_kwitansi = htmlspecialchars($data["tgl_kwitansi"]);
 } else if (strtotime($data_tgl_kwitansi) > strtotime($tgl_max)) {
  $tgl_kwitansi = htmlspecialchars($data["tgl_kwitansi"]);
 }


	$query = "INSERT INTO poli_form_pengobatan_detail VALUES ('', '$data_id', '$nik', '$tgl_kwitansi', '$jenis_penggantian', '$keterangan', '$harga', '$file_nota', '$status_detail', '', '', '', '$user_create', '$date_create', '', '')";
 mysqli_query($conn, $query);
 return mysqli_affected_rows($conn);
}

function upload_nota()
{
	$namaFileProject = $_FILES['file_nota']['name'];
	$ukuranFileProject = $_FILES['file_nota']['size'];
	$errorProject = $_FILES['file_nota']['error'];
	$tmpNameProject = $_FILES['file_nota']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload 
	if ($errorProject === 4) {
		echo "<script>
											alert('pilih gambar terlebih dahulu');
									</script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'pdf'];
	$ekstensiGambar = explode('.', $namaFileProject);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
											alert('file yang diupload bukan gambar !');
									</script>";
		return false;
	}

	// cek jika ukurannya terlalu besar 
	if ($ukuranFileProject > 5000000) {
		echo "<script>
											alert('ukuran gambar terlalu besar !');
									</script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpNameProject, 'imgnota/' . $namaFileBaru);

	return $namaFileBaru;
}

function ajukan_form($data) {
	global $conn;

	$data_id = $data["data_id"];
	$nik = $data["nik"];

	$query = "UPDATE poli_form_pengobatan SET flag_ajukan = 1 WHERE id = '$data_id' AND nik = '$nik'";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function update_status_detail($data){
	global $conn;

	$data_id = $data["data_id"];
	$nik = $data["nik"];

	$query = "UPDATE poli_form_pengobatan_detail SET status_detail = 1 WHERE data_id = '$data_id' AND nik = '$nik'";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function delete_detail($data) {
 global $conn;

 $user = $data["email"];
 $id = $data["id"];
 $data_id = $data["data_id"];
 $nik = $data["nik"];

 $query = "UPDATE poli_form_pengobatan_detail SET flag_delete_detail = 1, user_delete_detail = '$user' WHERE id_detail = '$id' AND data_id = '$data_id' AND nik = '$nik'"; 
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function draft_detail($data) {
 global $conn;

 $data_id = $data["data_id"];
 $nik = $data["nik"];

 $query = "UPDATE poli_form_pengobatan SET flag_draft = 1 WHERE id = '$data_id' AND nik = '$nik'"; 
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function convert_to_rupiah($angka) {
	return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
}

$email = $_SESSION["email"];
