<?php
$server = "Localhost";
$user = "root";
$password = "root";
$namadb = "pegawaibaru";

$db = mysqli_connect($server, $user, $password, $namadb);

if(!$db){
    die("Gagal terhubung dengan database : ". mysqli_connect_error());

}
?>
