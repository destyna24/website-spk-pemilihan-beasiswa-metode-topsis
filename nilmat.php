<?php
//koneksi
include("koneksi.php");

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
  <body style="font-family: 'monospace'; font-size: medium;">

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
          <a class="navbar-brand" href="index.php" style="color: white;">SPK Metode Topsis</a>
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

    <!--tabel-tabel dan form-->
    <div class="container"> <!--container-->
      <div class="row"> <!--row-->
        <div class="col-lg-12">
          <div class="panel panel-default">
          <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Nilai Matriks</p> 
                </div>

            <div class="panel-body">
              <!--form pengisian-->
              <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                  <div class="panel panel-default">
                  <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Alternatif</p> 
                </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <form class="form" action="tambahnilmat.php" method="post">
                            <div class="form-group">
                              <select class="form-control" name="alter">
                                <option>Nama Alternatif</option>
                                <?php
                                //ambil data dari database
                                $nama = $koneksi->query('SELECT * FROM tab_alternatif ORDER BY id_alternatif');
                                while ($datalter = $nama->fetch_array())
                                {
                                  echo "<option value=\"$datalter[id_alternatif]\">$datalter[nama_alternatif]</option>\n";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="krit">
                                <option>Nama Kriteria</option>
                                <?php
                                //ambil data dari database
                                $krit = $koneksi->query('SELECT * FROM tab_kriteria ORDER BY id_kriteria');
                                while ($datakrit = $krit->fetch_array())
                                {
                                  echo "<option value=\"$datakrit[id_kriteria]\">$datakrit[nama_kriteria]</option>\n";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="nilai">
                                <option>Nilai</option>
                                <?php
                                //ambil data dari database
                                $poin = $koneksi->query('SELECT * FROM tab_poin ORDER BY poin');
                                while ($datapoin = $poin->fetch_array())
                                {
                                  echo "<option value=\"$datapoin[id_poin]\">$datapoin[poin]</option>\n";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-success">Proses</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <!--tabel-tabel-->
              <div class="row">
                <!--tabel alternatif-->
                <div class="col-xs-6 col-md-4">
                  <div class="panel panel-default">
                  <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Alternatif</p> 
                </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">

                          <?php
                           $sql = $koneksi->query('SELECT * FROM tab_alternatif');
                           ?>
                          <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              while ($row = $sql->fetch_array()) {
                                echo ("<tr><td align=\"center\">".$row[0]."</td>");
                                echo ("<td align=\"left\">".$row[1]."</td>");
                                echo "</tr>";
                              }
                               ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <!--tabel kriteria-->

                <div class="col-xs-6 col-md-4">
                  <div class="panel panel-default">
                  <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Kriteria</p> 
                </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">

                          <?php
                          $sql = $koneksi->query('SELECT * FROM tab_kriteria');
                           ?>
                          <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              while ($row = $sql->fetch_array()) {
                                echo ("<tr><td align=\"center\">".$row[0]."</td>");
                                echo ("<td align=\"left\">".$row[1]."</td>");
                                echo ("<td align=\"left\">".$row[2]."</td>");
                                echo "</tr>";
                              }
                               ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <!--tabel poin-->
                <div class="col-xs-6 col-md-4">
                  <div class="panel panel-default">
                  <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Nilai Alternatif Kriteria</p> 
                </div>

                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">

                          <?php
                          $sql = $koneksi->query('SELECT * FROM tab_poin');
                          ?>
                          <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Nilai Alternatif Kriteria</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              while ($row = $sql->fetch_array()) {
                                echo ("<tr><td align=\"center\">".$row[0]."</td>");
                                echo ("<td align=\"center\">".$row[1]."</td>");
                                echo "</tr>";
                              }
                               ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
        </div>
        </div> <!--row-->
        </div> <!--container-->

        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-default">
              <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Pemberian Nilai</p> 
                </div>

                <div class="panel-body">
                  <?php
                  //pemanggilan data, matra dan pangkat
                  $sql = $koneksi->query("SELECT * FROM tab_topsis
                  INNER JOIN tab_alternatif ON tab_topsis.id_alternatif=tab_alternatif.id_alternatif
                  INNER JOIN tab_kriteria ON tab_topsis.id_kriteria=tab_kriteria.id_kriteria
                  INNER JOIN tab_poin ON tab_topsis.nilai=tab_poin.id_poin");
                   ?>
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>ALTERNATIF</th>
                        <th>KRITERIA</th>
                        <th>NILAI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      //menampilkan data
                      while ($row = $sql->fetch_array())
                      {
                        $nmkriteria   =$row['nama_kriteria'];
                        echo ("<tr><td align=\"center\">".$no."</td>");
                        echo ("<td align=\"left\">".$row['nama_alternatif']."</td>");
                        echo ("<td align=\"left\">".$nmkriteria."</td>");
                        echo ("<td align=\"left\">".$row['poin']."</td>");
                        echo "</tr>";
                        $no++;
                      }
                       ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> <!--row-->
        </div> <!--container-->

        <!--tabel penentuan nilai-->
        <div class="container"> <!--container-->
          <div class="row">
            <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Usia</p> 
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th align="center">Sub Kriteria</th>
                        <th>Bobot</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>15 - 17</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>18 - 21</td>
                        <td>2</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Perilaku Siswa</p> 
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th align="center">Sub Kriteria</th>
                        <th>Bobot</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>< 75</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>< 90</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>> 90 </td>
                        <td>3</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Jumlah Tanggungan Orangtua</p> 
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th align="center">Sub Kriteria</th>
                        <th>Bobot</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 1 </td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>2 </td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>4 </td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td> > 5 </td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Rata-rata Raport</p> 
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th align="center">Sub Kriteria</th>
                        <th>Bobot</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>< 75</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>< 90</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>> 90 </td>
                        <td>3</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Prestasi</p> 
                </div>>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th align="center">Sub Kriteria</th>
                        <th>Bobot</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1 </td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td><=3</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>>=4 </td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading text-center"style="background-color: darkseagreen;" >
                 <p style="color: white;">Tabel Keaktifan Ekstra</p> 
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th align="center">Sub Kriteria</th>
                        <th>Bobot</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>< 75</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>< 90</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>> 90 </td>
                        <td>3</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!--container-->

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
