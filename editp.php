<?php
//untuk koneksi ke database
include ("koneksi.php");

//proses edit
$id_poin = $_POST['id'];
$poin    = $_POST['poin'];

$ubah = $koneksi->query("UPDATE tab_poin SET poin ='".$poin."' WHERE id_poin='".$id_poin."' ");

if($ubah == TRUE){
    echo "<script>alert('Ubah Data Dengan ID = ".$id_krit." Berhasil') </script>";
echo "<script>window.location.href = \"poin.php\" </script>";
}else{
    echo "gagal";
}
?>
