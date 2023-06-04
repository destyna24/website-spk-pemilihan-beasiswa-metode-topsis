<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_beasiswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Belum Konek";
} else {
  session_start();
}
 ?>
