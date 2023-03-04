<?php 
require '../function.php';
require '../check.php';

if (ajukan_form($_POST) > 0 ) {
    if (update_status_detail($_POST) > 0 ) {
    echo "
    <script>
        document.location.href = '../form-pengobatan.php';
    </script>
    ";
    } else {
    echo "
    <script>
        alert ('Gagal Status Detail');
        document.location.href = '../form-pengobatan.php';
    </script>
    ";
    }
} else {
    echo "
    <script>
        alert ('Gagal flag ajukan');
        document.location.href = '../form-pengobatan.php';
    </script>
    ";
}



?>