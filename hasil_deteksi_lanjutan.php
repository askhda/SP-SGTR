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
  //Ambil satu data terakhir dari tabel deteksi lanjutan dan user
  $data = "SELECT * FROM USER INNER JOIN log_deteksilan ON user.id = log_deteksilan.id_user ORDER BY log_deteksilan.id DESC LIMIT 1";
  $hasil = $conn->query($data);
  if ($hasil->num_rows > 0) {
    while ($row = $hasil->fetch_assoc()) {
      $date=$row["tanggal"];
      $name=$row["nama"];
      $work=$row["jabatan"];
      $ksatu=$row['lsatu'];
      $kdua=$row['ldua'];
      $ktiga=$row['ltiga'];
      $kempat=$row['lempat'];
      $klima=$row['llima'];
      $kenam=$row['lenam'];
      $ktujuh=$row['ltujuh'];
      $kdelapan=$row['ldelapan'];
      $ksembilan=$row['lsembilan'];
      $ksepuluh=$row['lsepuluh'];
      $ksebelas=$row['lsebelas'];
      $kduabelas=$row['lduabelas'];
      $result=$row['hasil'];
      $purpose=$row['tujtin'];
      $operator=$row['tinop'];
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
          <div class="row">
            <br><br><br>
            <h4 class="center teal-text"><b>Hasil Deteksi Steam Generator Tube Rupture Menggunakan Sistem Pakar</b></h4>
            <br><br><br>
            <h6 class="center-align"><?php echo "Nama: ".$name ?></h6>
            <h6 class="center-align"><?php echo "Jabatan: ".$work ?></h6>
            <h6 class="center-align"><?php echo "Tanggal: ".$date ?></h6>
            <h6 class="center-align"><b><?php echo "Hasil Deteksi: ".$result ?></b></h6>
            <br><br><br>

            <div class="container">
              <div class="section">
                <h5 class="center brown-text">
                  <b>
                    Kondisi Reaktor
                  </b>
                </h5>
                <br>
                <table>
                  <thead>
                    <tr>
                        <th class="center">Kondisi</th>
                        <th class="center">Hasil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="center">Air ejector radiation alarm berbunyi</td>
                      <td class="center"><?php echo $ksatu ?></td>
                    </tr>
                    <tr>
                      <td class="center">Terjadi pengurangan tekanan pada sistem primer</td>
                      <td class="center"><?php echo $kdua ?></td>
                    </tr>
                    <tr>
                      <td class="center">Main steam line radiation alarm berbunyi</td>
                      <td class="center"><?php echo $ktiga ?></td>
                    </tr>
                    <tr>
                      <td class="center">Alarm yang mengindikasikan operating charging pump berada pada posisi aliran maksimum berbunyi</td>
                      <td class="center"><?php echo $kempat ?></td>
                    </tr>
                    <tr>
                      <td class="center">Alarm yang mengindikasikan level pressurizer berkurang berbunyi</td>
                      <td class="center"><?php echo $klima ?></td>
                    </tr>
                    <tr>
                      <td class="center">Setelah satu menit air ejector radiation alarm berbunyi</td>
                      <td class="center"><?php echo $kenam ?></td>
                    </tr>
                    <tr>
                      <td class="center">B steam generator level alarm berbunyi</td>
                      <td class="center"><?php echo $ktujuh ?></td>
                    </tr>
                    <tr>
                      <td class="center">Steam/feed flow mismatch alarm berbunyi</td>
                      <td class="center"><?php echo $kdelapan ?></td>
                    </tr>
                    <tr>
                      <td class="center">Lima menit kemudian secondary steam blowdown radiation monitor berbunyi</td>
                      <td class="center"><?php echo $ksembilan ?></td>
                    </tr>
                    <tr>
                      <td class="center">Aliran feedwater pada B steam generator berkurang sedangkan levelnya relative konstan</td>
                      <td class="center"><?php echo $ksepuluh ?></td>
                    </tr> 
                    <tr>
                      <td class="center">Terjadi peningkatan level steam generator yang cepat pada loop B</td>
                      <td class="center"><?php echo $ksebelas ?></td>
                    </tr>
                    <tr>
                      <td class="center">Radiation monitoring channels mencatat tingkat aktivitas radiasi yang tinggi</td>
                      <td class="center"><?php echo $kduabelas ?></td>
                    </tr>             
                  </tbody>
                </table>      
              </div>
            </div>
            <br><br>

            <div>
              <h5 class="center-align brown-text">
                <b>
                  Tujuan Tindakan yang Dilakukan Operator
                </b>
              </h5>
              <h6 class="center-align">
                <?php echo $purpose ?>
              </h6>
            </div>
            <br><br>

            <div>
              <h5 class="center-align brown-text">
                <b>
                  Tindakan yang Dilakukan Operator
                </b>
              </h5>
              <h6 class="center-align">
                <?php echo $operator ?>
              </h6>
            </div>
            <br><br>


          </div> 
        </div>
      </div>
    </div>
  </div>
</div>

<!--- Print --->
<div class="center">
  <button onclick="printContent('div1')" class="brown lighten-3" style="cursor: pointer;">Cetak</button>
  <br><br><br>
</div>

<div class="center">
  <a class="waves-effect waves-light btn-large" href="home.php">Selesai</a>
  <br><br><br><br>
</div>

<?php include('footer.php'); ?>

  <!--  JavaScript -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
