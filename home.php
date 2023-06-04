<?php
//koneksi
include "koneksi.php";
if(!$_SESSION['login']) {
  header("location: index.php");
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK TOPSIS</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body style="font-family: 'monospace'; font-size: medium; ">

    <!--menu-->
    <nav class="navbar navbar-default navbar-custom" style="background-color: darkseagreen; ">
      <div class="container" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php" style="color: white;">SPK Metode Topsis</a>
          <a class="navbar-brand" href="logout.php" style="color: white;">Logout</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="kriteria.php"style="color: white;">Kriteria</a>
            </li>
            <li>
              <a href="alternatif.php"style="color: white;">Alternatif</a>
            </li>
            <li>
              <a href="poin.php"style="color: white;">Nilai Alternatif Kriteria</a>
            </li>
            <li>
              <a href="nilmat.php"style="color: white;">Nilai Matriks</a>
            </li>
            <li>
              <a href="hastop.php"style="color: white;">Hasil Topsis</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container"  style="margin-top: -25px;"> 
  <div class="col-md-12">
    <img src="Sistem Pemillihan Keputusan Untuk Pemilihan Beasiswa (1).png" alt=""> 
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-12" align="center">
      <p style="font-size: 2vw;">TENTANG</p>
      <hr style="margin-top: -10px;" color=#000000 width="20%"> 
      <div class="card" style="background-color: black;">
          <div class="card-body" style="background-color: white;">
          Sistem Pendukung Keputusan Pemilihan Beasiswa Pada Siswa/Siswi SMA dengan Metode Topsis. <br>
        Alternatif yang digunakan pada sistem ini adalah peserta didik dibangku SMA yang berhak menerima beasiswa berdasarkan kriteria-kriteria yang ditentukan. <br>
        Untuk mendapatkan beasiswa tersebut maka harus sesuai dengan aturan aturan yang telah ditetapkan. 
        Oleh sebab itu tidak semua yang mendaftarkan diri sebagai calon penerima beasiswa tersebut akan diterima, 
        hanya yang memenuhi kriteria-kriteria saja yang akan memperoleh beasiswa tersebut. <br>
        Oleh karena jumlah peserta yang mengajukan beasiswa banyak serta indikator kriteria yang banyak juga, 
        maka perlu dibangun sebuah sistem pendukung keputusan yang akan membantu penentuan siapa yang berhak untuk mendapatkan beasiswa tersebut.
        </div>
      </div>
      <!-- <p>Sistem Pendukung Keputusan Pemilihan Beasiswa Pada Siswa/Siswi SMA dengan Metode Topsis. <br>
        Alternatif yang digunakan pada sistem ini adalah peserta didik dibangku SMA yang berhak menerima beasiswa berdasarkan kriteria-kriteria yang ditentukan. <br>
        Untuk mendapatkan beasiswa tersebut maka harus sesuai dengan aturan aturan yang telah ditetapkan. Kriteria yang ditetapkan dalam studi kasus ini adalah Usia Siswa, 
        Perilaku Siswa Disekolah, Jumlah Tanggungan Orangtua, Jumlah Tanggungan Orangtua, Jumlah Tanggungan Orangtua, dan Keaktifan Ekstra. 
        Oleh sebab itu tidak semua yang mendaftarkan diri sebagai calon penerima beasiswa tersebut akan diterima, 
        hanya yang memenuhi kriteria-kriteria saja yang akan memperoleh beasiswa tersebut. <br>
        Oleh karena jumlah peserta yang mengajukan beasiswa banyak serta indikator kriteria yang banyak juga, 
        maka perlu dibangun sebuah sistem pendukung keputusan yang akan membantu penentuan siapa yang berhak untuk mendapatkan beasiswa tersebut.</p>
    </div> -->
  </div>
</div>
    <!--footer-->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <em>Copyright &copy; SPK_Mentari_Desty</em>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
