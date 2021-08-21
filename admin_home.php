<?php
include 'koneksi.php'; 
session_start();


if (! isset($_SESSION['login'])) {?>
    <script>
    window.location = 'login_admin.php';
    </script> <?php
}

/* Ambil data dari keseluruhan tabel deteksi awal*/
$tabel="SELECT * FROM `log_deteksi`";
$data=$conn->query($tabel);

/* Ambil data dari keseluruhan tabel deteksi lanjutan */
$jumlah="SELECT * FROM `log_deteksilan`";
$total=$conn->query($jumlah);

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
        <div class="col s12 center">
          <br><br>
          <h4 class="brown-text center">Halaman ini hanya bisa diakses oleh admin untuk melihat hasil rekapitulasi pemeriksaan yang telah dilakukan</h4>
        </div>
      </div>
      <br><br><br>
      <!--- Menampilkan jumlah masing-masing deteksi dan jumlah total keseluruhan deteksi --->

      <div class="row">
            <div class="col s12 m4">
              <div class="card">
              <div class="card-content center">
                <!--- Jumlah deteksi awal --->
                <h5>Sejumlah</h5>
                <h1 class="teal-text" style="font-weight: bold;">
                <?php
                $jumlah_deteksi_awal = mysqli_num_rows($data);
                echo $jumlah_deteksi_awal;  
                ?>
              </h1>
              <h5 class="black-text">deteksi awal telah dilakukan</h5>
              <br>
              </div>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="card">
              <div class="card-content center">
                <!---- Jumlah deteksi lanjutan --->
                <h5>Sejumlah</h5>
                <h1 class="teal-text" style="font-weight: bold;">
                <?php
                $jumlah_deteksi_lanjutan = mysqli_num_rows($total);
                echo $jumlah_deteksi_lanjutan;  
                ?>
              </h1>
              <h5 class="black-text ">deteksi lanjutan telah dilakukan</h5>
              <br>
              </div>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="card">
              <div class="card-content center">
                <!--- Jumlah total keseluruhan deteksi --->
                <h5>Total</h5>
                <h1 class="teal-text" style="font-weight: bold;">
                <?php
                $jumlah_deteksi=$jumlah_deteksi_awal+$jumlah_deteksi_lanjutan;
                echo $jumlah_deteksi; 
                ?>
              </h1>
              <h5 class="black-text">deteksi telah dilakukan</h5>
              <br>
              </div>
              </div>
            </div>
      </div>
      
      <!--- Tombol melihat masing-masing deteksi --->
      <div class="row">
        <div class="col s12 center">
          <br><br>
          <h4 class="brown-text center">Lihat hasil masing-masing rekapitulasi</h4>
          <a href="admin_deteksi_awal.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Deteksi awal</a>
          <a href="admin_deteksi_lanjutan.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Deteksi lanjutan</a>
        </div>
      </div>

    </div>
  </div>
  <br><br><br><br><br><br>


  <?php include('footer.php'); ?>

  <!--  JavaScript -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>