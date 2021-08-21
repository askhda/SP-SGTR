<?php
include 'koneksi.php'; 
session_start();


if (! isset($_SESSION['login'])) {?>
    <script>
    window.location = 'login_admin.php';
    </script> <?php
}

/* Ambil data dari keseluruhan deteksi awal dan user*/
$tabel="SELECT * FROM USER INNER JOIN log_deteksi ON user.id = log_deteksi.id_user";
$data=$conn->query($tabel);

?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SP-SGTR</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<?php include('admin_navigation_bar.php'); ?>

<div class="container">
  <div class="section">
    <div class="row">
      <br><br>
      <h4 class=" center teal-text" style="font-weight: bold;">Berikut adalah rekapitulasi deteksi awal yang telah dilakukan</h4>
      <br><br>
      <!--- Membuat tabel ---->
        <table>
          <thead>
            <tr>
              <th class="center">Tanggal</th>
              <th class="center">Nama</th>
              <th class="center">Jabatan</th>
              <th class="center">Air ejector radiation alarm berbunyi</th>
              <th class="center">Terjadi pengurangan tekanan pada sistem primer</th>
              <th class="center">Main steam line radiation alarm berbunyi</th>
              <th class="center">Hasil deteksi</th>
            </tr>
          </thead>
          <tbody>
              <?php

              while ($row = mysqli_fetch_assoc($data)) {
                echo '<tr>

                <td class="center">'.$row['tanggal'].'</td>
                <td class="center">'.$row['nama'].'</td>
                <td class="center">'.$row['jabatan'].'</td>
                <td class="center">'.$row['gpsatu'].'</td>
                <td class="center">'.$row['gpdua'].'</td>
                <td class="center">'.$row['gptiga'].'</td>
                <td class="center">'.$row['kondisi'].'</td>

                </tr>';
              }
              ?>
          </tbody>
        </table>
        <br>
        <!--- Tampilkan jumlah keseluruhan --->
        <h5 class="center teal-text" style="font-weight: bold;">
          Jumlah dari deteksi awal yang dialakukan adalah

          <?php
          $jumlah_deteksi = mysqli_num_rows($data);
          echo $jumlah_deteksi . " deteksi";
          ?>

        </h5>
        <br><br><br>        
    </div>   
  </div>
</div>



  <?php include('footer.php'); ?>

  <!--  JavaScript -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>