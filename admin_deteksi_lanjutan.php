<?php
include 'koneksi.php'; 
session_start();


if (! isset($_SESSION['login'])) {?>
    <script>
    window.location = 'login_admin.php';
    </script> <?php
}

/* Ambil data dari keseluruhan tabel deteksi lanjutan dan user*/
$tabel="SELECT * FROM USER INNER JOIN log_deteksilan ON user.id = log_deteksilan.id_user";
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
      <h4 class=" center teal-text" style="font-weight: bold;">Berikut adalah rekapitulasi deteksi lanjutan yang telah dilakukan</h4>
      <br><br>
      <!---- Membuat tabel --->
        <table>
          <thead>
            <tr>
              <th class="center">Tanggal</th>
              <th class="center">Nama</th>
              <th class="center">Jabatan</th>
              <th class="center">Indikasi satu</th>
              <th class="center">Indikasi dua</th>
              <th class="center">Indikasi tiga</th>
              <th class="center">Indikasi empat</th>
              <th class="center">Indikasi lima</th>
              <th class="center">Indikasi enam</th>
              <th class="center">Indikasi tujuh</th>
              <th class="center">Indikasi delapan</th>
              <th class="center">Indikasi sembilan</th>
              <th class="center">Indikasi sepuluh</th>
              <th class="center">Indikasi sebelas</th>
              <th class="center">Indikasi dua belas</th>
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
                <td class="center">'.$row['lsatu'].'</td>
                <td class="center">'.$row['ldua'].'</td>
                <td class="center">'.$row['ltiga'].'</td>
                <td class="center">'.$row['lempat'].'</td>
                <td class="center">'.$row['llima'].'</td>
                <td class="center">'.$row['lenam'].'</td>
                <td class="center">'.$row['ltujuh'].'</td>
                <td class="center">'.$row['ldelapan'].'</td>
                <td class="center">'.$row['lsembilan'].'</td>
                <td class="center">'.$row['lsepuluh'].'</td>
                <td class="center">'.$row['lsebelas'].'</td>
                <td class="center">'.$row['lduabelas'].'</td>
                <td class="center">'.$row['hasil'].'</td>

                </tr>';
              }
              ?>
          </tbody>
        </table>
        <br>
        <!--- Keterangan tabel --->
        <h6 style="font-weight: bold;">Keterangan</h6>
        <ul>
          <li>Indikasi satu = Air ejector radiation alarm berbunyi</li>
          <li>Indikasi dua = Terjadi pengurangan tekanan pada sistem primer</li>
          <li>Indikasi tiga = Main steam line radiation alarm berbunyi</li>
          <li>Indikasi empat = Alarm yang mengindikasikan operating charging pump berada pada posisi aliran maksimum berbunyi</li>
          <li>Indikasi lima = Alarm yang mengindikasikan level pressurizer berkurang berbunyi</li>
          <li>Indikasi enam = Setelah satu menit air ejector radiation alarm berbunyi</li>
          <li>Indikasi tujuh = B steam generator level alarm berbunyi</li>
          <li>Indikasi delapan = Steam/feed flow mismatch alarm berbunyi</li>
          <li>Indikasi sembilan = Lima menit kemudian secondary steam blowdown radiation monitor berbunyi</li>
          <li>Indikasi sepuluh = Aliran feedwater pada B steam generator berkurang sedangkan levelnya relative konstan</li>
          <li>Indikasi sebelas = Terjadi peningkatan level steam generator yang cepat pada loop B</li>
          <li>Indikasi duabelas = Radiation monitoring channels mencatat tingkat aktivitas radiasi yang tinggi</li>
        </ul>
        <br><br><br>
        <!---- Jumlah keseluruhan deteksi yang sudah dilakukan ---->
        <h5 class="center teal-text" style="font-weight: bold;">
          Jumlah dari deteksi lanjutan yang dialakukan adalah

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