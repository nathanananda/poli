<?php 
require '../function.php';

$email = $_POST["email"];
$password = $_POST["password"];

if( loginAdmin($_POST) > 0 ) {
   $_SESSION["log"] = "True";
   $_SESSION["email"] = $email;
   header("location:../index.php");
} else {
   header("location:../login.php");
}


$_SESSION["email"] = $email;


?>