<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>SP-SGTR</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<?php include('navigation_bar.php'); ?>

  <!-- Penjelasan singkat dan tombol deteksi ---->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">SP.SGTR</h1>
        <div class="row center">
          <h5 class="header col s12 light">Sistem pakar untuk mendeteksi steam generator tube rupture pada pressurizer water reactor</h5>
        </div>
        <div class="row center">
          <a href="user_isi_data.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Deteksi</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="northanna.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">
      <!--- Penjelasan singkat tentang SP.SGTR ---->
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>SP.SGTR</h4>
          <p class="center light">Merupakan kependekan dari Sistem Pakar Steam Generator Tube Rupture. Sistem ini dikembangakan sebagai bentuk pemenuhan Tugas Akhir Program Studi Sarjana Teknik Nuklir Universitas Gadjah Mada.</p>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Poin-poin singkat tentang sistem pakar berbasis website   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">desktop_windows</i></h2>

            <p class="center light">Sistem pakar yang dikembangkan berbasis website agar interaksi antara operator dengan sistem dan rekapitulasi data menjadi lebih mudah.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>

            <p class="center ight">Sistem pakar dikembangkan menggunakan metode forward chaining dengan dua kali deteksi.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">library_books</i></h2>

            <p class="center light">Sistem pakar dikembangkan berdasarkan data dari sepuluh steam generotor tube rupture pada pressurizer water reactor.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">favorite_border</i></h2>

            <p class="center light">Sistem pakar dikembangkan untuk membantu operator mendeteksi steam generator tube rupture pada pressurizer water reactor.</p>
          </div>
        </div>
      <br><br>
      <br><br>
      <br><br>
      </div>

    </div>
  </div>

  <!--- Ajakan dan tombol untuk deteksi --->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Deteksi sekarang!</h5>
        </div>
        <div class="row center">
          <a href="user_isi_data.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Deteksi</a>
        </div>
        <br><br>
        <br><br>         
      </div>
    </div>
    <div class="parallax"><img src="steamgen2.jpg" alt="Unsplashed background img 2"></div>
  </div>

<?php include('footer.php'); ?>

  <!--  JavaScript-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
