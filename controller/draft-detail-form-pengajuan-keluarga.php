<?php 
require '../function.php';
require '../check.php';

if (draft_detail($_POST) > 0 ) {
    echo "
    <script>
        document.location.href = '../form-pengobatan.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Gagal');
        document.location.href = '../form-detail-keluarga.php';
    </script>
    ";
}


?>