<?php 
require '../function.php';
require '../check.php';

if (insert_pengajuan_keluarga($_POST) > 0 ) {
 echo "
 <script>
     document.location.href = '../form-detail.php';
 </script>
 ";
} else {
 echo "
 <script>
     alert('Gagal');
     document.location.href = '../biodata.php';
 </script>
 ";
}
?>