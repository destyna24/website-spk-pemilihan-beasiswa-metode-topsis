<?php
//koneksi
include("koneksi.php");

$alternatif = $_POST['alter'];
$kriteria   = $_POST['krit'];
$poin       = $_POST['nilai'];

$tambah = $koneksi->query('SELECT * FROM tab_topsis');

$masuk = "INSERT INTO tab_topsis VALUES ('".$alternatif."','".$kriteria."','".$poin."')";
$buat  = $koneksi->query($masuk);

echo "<script>alert('".$alternatif.",".$kriteria.",". $poin ."') </script>";
echo "<script>window.location.href = \"nilmat.php\" </script>";
if ($row = $tambah->fetch_row()) {

}

 ?>
