<?php
include('koneksi.php');
if (isset($_POST)){
    $username = $_POST['username'];
    $password= md5($_POST['password']);
    
    //menyeleksi data cust dengan username dan password yang sesuai
    $statement = mysqli_query($koneksi, "SELECT * FROM TAB_ADMIN WHERE USERNAME='$username' and PASSWORD='$password'");
    $row = mysqli_num_rows($statement);
    // oci_execute($statement);
    // oci_fetch($statement);
    // $cek = oci_num_rows($statement);
    

    if($row > 0){
        $_SESSION['username'] = $username;
        $_SESSION['login'] = true;
        header("location: home.php");
    } else {
        header("location: index.php?pesan=gagal");
    }
    }
     else{
    die("Akses dilarang....");
}
?>