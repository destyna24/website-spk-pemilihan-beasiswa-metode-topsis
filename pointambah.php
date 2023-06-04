<?php
//koneksi
include ("koneksi.php");

//pemberian kode id secara otomatis
$carikode = mysqli_query($koneksi, "SELECT id_poin FROM tab_poin");
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {
  /* $nilaikode = substr($jumlah_data[0], 1);
  $kode = (int) $nilaikode; */
  $kode = $jumlah_data + 1;
  $kode_otomatis = str_pad($kode, 0, STR_PAD_LEFT);
} else {
  $kode_otomatis = "1";
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

    <!--icon-->
    <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <body style="font-family: 'monospace'; font-size: medium;">

    <!--menu-->
    <nav class="navbar navbar-default navbar-custom"style="background-color: darkseagreen; ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"style="color: white;">SPK Metode Topsis</a>
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

    <div class="container">

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
            <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Nilai Alternatif Kriteria</p> 
                </div>

                <ul class="nav nav-tabs">
                    <li>
                      <a href="poin.php" data-toggle="tab">Tabel Nilai Alternatif Kriteria</a>
                    </li>
                    <li class="active">
                      <a href="pointambah.php" data-toggle="tab">Tambah Nilai Alternatif Kriteria</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--form poin-->
                        <form class="form" action="pointambah.php" method="post">
                          <div class="form-group">
                            <input class="form-control" type="text" name="id_poin" value="<?php echo $kode_otomatis ?>" readonly>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" name="poin" placeholder="Nilai Alternatif Kriteria">
                          </div>
                          <div class="form-group">
                            <input class="btn btn-success" type="submit" name="simpan" value="Tambah">
                          </div>
                        </form>
                        <!--form poin-->
                      </div>
                    </div>
                </div>
            </div>
        </div>
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

    <?php

    if (isset($_POST['simpan'])) {
      $id_poin = $_POST['id_poin'];
      $poin    = $_POST['poin'];

      $tambah = $koneksi->query('SELECT * FROM tab_poin');

      

        $masuk = "INSERT INTO tab_poin VALUES ('".$id_poin."','".$poin."')";
        $buat  = $koneksi->query($masuk);

        echo "<script>alert('Input Data Berhasil') </script>";
        echo "<script>window.location.href = \"poin.php\" </script>";
    }

     ?>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
