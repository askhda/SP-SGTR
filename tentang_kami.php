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

<?php include('navigation_bar.php'); ?>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <!--- Penjelasan tentang SP.SGTR---->
      <h1 class="header center teal-text">SP.SGTR</h1>
      <div class="row center">
        <h5 class="brown-text">Sistem Pakar Steam Generator Tube Rupture (SP.SGTR) merupakan sistem pakar yang akan membantu operator Pressurizer Water Reactor (PWR) dalam mendeteksi terjadinya Steam Generator Tube Rupture (SGTR). Sistem ini dikembangkan berdasarkan sepuluh kejadian SGTR yang pernah terjadi dengan menggunakan metode forward chaining.</h5>
      </div>
      <br>
    </div>
  </div>

  <!--- Tabel sepuluh reaktor diambil dari NUREG/CR-6365---->
  <div class="container">
    <div class="section">
      <h6 class="center brown-text">
        Tabel sepuluh kejadian SGTR pada PWR yang pernah terjadi.
      </h6>
      <br>
      <table>
        <thead>
          <tr>
              <th class="center">Tanggal</th>
              <th class="center">Reaktor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="center">26 Februari 1975</td>
            <td class="center">Point Beach Unit 1</td>
          </tr>
          <tr>
            <td class="center">15 September 1976</td>
            <td class="center">Surry Unit 2</td>
          </tr>
          <tr>
            <td class="center">25 Juni 1979</td>
            <td class="center">Doel Unit 2</td>
          </tr>
          <tr>
            <td class="center">2 Oktober 1979</td>
            <td class="center">Prairie Island 1</td>
          </tr>
          <tr>
            <td class="center">25 Januari 1982</td>
            <td class="center">Ginna Unit 1</td>
          </tr>
          <tr>
            <td class="center">16 Mei 1984</td>
            <td class="center">Fort Colhoun</td>
          </tr>
          <tr>
            <td class="center">15 Juli 1987</td>
            <td class="center">North Anna Unit 1</td>
          </tr>
          <tr>
            <td class="center">7 Maret 1989</td>
            <td class="center">McGuire Unit 1</td>
          </tr>
          <tr>
            <td class="center">9 Februari 1991</td>
            <td class="center">Mihama Unit 2</td>
          </tr>
          <tr>
            <td class="center">14 Maret 1993</td>
            <td class="center">Polo Verde Unit 2</td>
          </tr>                     
        </tbody>
      </table>      
    </div>
  </div>

  <!--- Penjelasan tentang SP.SGTR---->
  <div  class="container">
    <div class="section">
      <br>
      <h5 class="center brown-text">
         SP.SGTR dikembangkan berbasis website untuk memudahkan interasi antara operator dengan sistem dan memudahkan dalam rekapitulasi data. Sistem ini dikembangkan sebagai bentuk pemenuhan Tugas Akhir Program Studi Sarjana Teknik Nuklir Universitas Gadjah Mada.
      </h5>
    </div>
  </div>

  <div  class="container">
    <div class="section">
      <br><br>
      <!--- Referensi yang digunakan --->
      <h4 class="center brown-text" >
         <b>
           Referensi
         </b>
      </h4>
      <h5 class="center brown-text">
        <a href="https://inis.iaea.org/collection/NCLCollectionStore/_Public/27/063/27063067.pdf">
          1. Steam Generator Tube Failures (NUREG/CR-6365)
        </a>
      </h5>
      <h5 class="center brown-text">
        <a href="https://materializecss.com/">
          2. Framework CSS Materialize
        </a>
      </h5>
      <h5 class="center brown-text">
        <a href="https://images.app.goo.gl/aQjXFAdv8eXj4rHx5">
          3. https://images.app.goo.gl/aQjXFAdv8eXj4rHx5
        </a>
      </h5>
      <h5 class="center brown-text">
        <a href="https://images.app.goo.gl/6Hs7KkiCpYVLYFteA">
          4. https://images.app.goo.gl/6Hs7KkiCpYVLYFteA
        </a>
      </h5>
      <h5 class="center brown-text">
        <a href="https://images.app.goo.gl/cTwNVryki1KwpWJu9">
          5. https://images.app.goo.gl/cTwNVryki1KwpWJu9
        </a>
      </h5>
    </div>
  </div>

<br><br><br><br><br>

<?php include('footer.php'); ?>

  <!--  JavaScript-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
