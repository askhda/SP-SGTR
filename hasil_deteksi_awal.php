<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SP-SGTR</title>

  <!--- Fungsi print ---->
  <script>
  function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
  </script>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<?php 

  include 'koneksi.php';
  //Ambil satu data terakhir dari tabel deteksi awal dan user 
  $data = "SELECT * FROM USER INNER JOIN log_deteksi ON user.id = log_deteksi.id_user ORDER BY log_deteksi.id DESC LIMIT 1";
  
  $hasil = $conn->query($data);
  if ($hasil->num_rows > 0) {
    while ($row = $hasil->fetch_assoc()) {
      $date=$row["tanggal"];
      $nama=$row["nama"];
      $jabatan=$row["jabatan"];
      $gsat=$row['gpsatu'];
      $gdua=$row['gpdua'];
      $gtiga=$row['gptiga'];
      $condition=$row["kondisi"];
      $step=$row["tindakan"];
    }
  }

?>

<?php include('navigation_bar.php'); ?>

<br><br>
<div class="row">
  <div class="col m6 offset-m3">
    <div class="card grey lighten-5">
      <div id="div1" class="container">
        <div class="section">
          <div class="row" >
            <br><br><br>
            <h4 class="center teal-text"><b>Hasil Deteksi Steam Generator Tube Rupture Menggunakan Sistem Pakar</b></h4>
            <br><br><br>
            <h6 class="center-align"><?php echo "Nama: ".$nama ?></h6>
            <h6 class="center-align"><?php echo "Jabatan: ".$jabatan ?></h6>
            <h6 class="center-align"><?php echo "Tanggal: ".$date ?></h6>
            <br><br><br>
            <div class="row">
              <div class="col s12 m4">
                  <div class="center brown-text">
                    <span><h5><b>Kondisi</b></h5></span>
                    <p class="left-align"><?php echo "Air ejector radiation alarm berbunyi: ".$gsat; 
                      echo "<br>";
                      echo "Terjadi pengurangan tekanan pada sistem primer: ".$gdua;
                      echo "<br>";
                      echo  "Main steam line radiation alarm berbunyi: ".$gtiga ?></p>
                  </div>
              </div>     
              <div class="col s12 m4 offset-8">
                  <div class="center brown-text">
                    <span><h5><b>Hasil Deteksi</b></h5></span>
                    <p><?php echo $condition ?></p>
                  </div>
              </div>
              <div class="col s12 m4 offset-12">
                  <div class="center brown-text">
                    <span><h5><b>Tindakan</b></h5></span>
                    <p><?php echo $step?></p>
                  </div>
              </div>
            </div>
            <br><br>
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>

<!--- Print ---->
<div class="center">
  <button onclick="printContent('div1')" class="brown lighten-3" style="cursor: pointer;">Cetak</button> 
  <br><br>
</div>
<div class="center">
  <a class="waves-effect waves-light btn-large" href="deteksi_lanjutan.php">DETEKSI LEBIH LANJUT</a>
  <br><br><br>
</div>

<?php include('footer.php'); ?>

  <!--  JavaScript --->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
