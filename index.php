<?php
//koneksi
include "koneksi.php";
if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
  header("location: home.php");
}
$pesan = NULL;
if(isset($_GET['pesan'])) {
    if($_GET['pesan']=="gagal"){
        $pesan = '<div class="alert alert-danger" role="alert">Login Gagal! Username atau Password Salah!</div>';
    }
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="./styling.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">   
<div class="row">
    <div class="col-md-8">
    <img class="wave" src="ddc84afcfd1aeaf7cf775b1cccf403b6-removebg-preview.png" style="height: 500px; margin-top: 60px;">
    </div>
    <div class="col-6 col-md-4">   
    <img src="https://png.pngtree.com/png-vector/20191009/ourmid/pngtree-user-icon-png-image_1796659.jpg" style="height: 150px; margin-top: 150px; margin-left: 100px;">
    <div class="login-content">
    <form class="form-signin" name="Login" method="POST" action="login_proses.php">
        <?php echo $pesan; ?>
           		   <div class="div">
           		   		<h5><i class="fas fa-user"></i> Username</h5>
           		   		<input type="text" name="username" class="form-control">
           		   </div>
           		   <div class="div">
           		    	<h5><i class="fas fa-lock"></i> Password</h5>
           		    	<input type="password" name="password" class="form-control">
            	   </div> <br>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    </div>
  </div>
  </div>
	
	<div class="container">
		<div class="img">
			<!--<img src="https://png.pngtree.com/png-vector/20200420/ourmid/pngtree-people-make-puzzles-concept-team-work-illustration-vektor-png-image_2188841.jpg"> -->
		</div>
		
    <script type="text/javascript" src="./index.js"></script>
</body>
</html>