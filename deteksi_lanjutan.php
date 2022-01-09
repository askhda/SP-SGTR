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

  <style>
  .background {
    background-image: url('ginna.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  </style>

  <!--- Fungsi alert kalau belum diisi ---->
  <script type="text/javascript">
    function validate() {
      
      var empat= document.getElementsByName('lempat');
      var lima = document.getElementsByName('llima');
      var enam = document.getElementsByName('lenam');
      var tujuh = document.getElementsByName('ltujuh');
      var delapan = document.getElementsByName('ldelapan');
      var sembilan = document.getElementsByName('lsembilan');
      var sepuluh = document.getElementsByName('lsepuluh');
      var sebelas = document.getElementsByName('lsebelas');
      var duabelas = document.getElementsByName('lduabelas');
      var isian_empat = false;
      var isian_lima = false;
      var isian_enam = false;
      var isian_tujuh = false;
      var isian_delapan = false;
      var isian_sembilan = false;
      var isian_sepuluh = false;
      var isian_sebelas = false;
      var isian_duabelas = false;

      for (var i = 0; i<empat.length; i++) {
        if (empat[i].checked == true) {
          isian_empat = true;
        }
      }

      if (!isian_empat) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<lima.length; i++) {
        if (lima[i].checked == true) {
          isian_lima = true;
        }
      }

      if (!isian_lima) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<enam.length; i++) {
        if (enam[i].checked == true) {
          isian_enam = true;
        }
      }

      if (!isian_enam) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<tujuh.length; i++) {
        if (tujuh[i].checked == true) {
          isian_tujuh = true;
        }
      }

      if (!isian_tujuh) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<delapan.length; i++) {
        if (delapan[i].checked == true) {
          isian_delapan = true;
        }
      }

      if (!isian_delapan) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<sembilan.length; i++) {
        if (sembilan[i].checked == true) {
          isian_sembilan = true;
        }
      }

      if (!isian_sembilan) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<sepuluh.length; i++) {
        if (sepuluh[i].checked == true) {
          isian_sepuluh = true;
        }
      }

      if (!isian_sepuluh) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<sebelas.length; i++) {
        if (sebelas[i].checked == true) {
          isian_sebelas = true;
        }
      }

      if (!isian_sebelas) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<duabelas.length; i++) {
        if (duabelas[i].checked == true) {
          isian_duabelas = true;
        }
      }

      if (!isian_duabelas) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

    }

  </script>

</head>
<body>

<?php include 'navigation_bar.php'; ?>

<div class="background">
  <div class="row" >
    <br><br> 
    <br><br> 
    <div class="col s12 l6 offset-l3 z-depth-2 teal">
      <div class="#ffffff white">
        <div class="card-content white-text">
            <section class="container">
              <div class="container">
                  <br><br>        
                    <h4 class="center teal-text"> Pilih kondisi berikut </h4>
                    <br>
                  <form action="aturan_deteksi_lanjutan.php" method="POST">
                    <h6 class="center brown-text"> Alarm yang mengindikasikan operating charging pump berada pada posisi aliran maksimum berbunyi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="lempat" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="lempat" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                  <br><br>        
                    <h6 class="center brown-text"> Alarm yang mengindikasikan level pressurizer berkurang berbunyi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="llima" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="llima" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                  <br><br>        
                    <h6 class="center brown-text"> Setelah satu menit air ejector radiation alarm berbunyi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="lenam" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="lenam" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                  <br><br>        
                    <h6 class="center brown-text"> B steam generator level alarm berbunyi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="ltujuh" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="ltujuh" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                  <br><br>        
                    <h6 class="center brown-text"> Steam/feed flow mismatch alarm berbunyi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="ldelapan" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="ldelapan" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                  <br><br>        
                    <h6 class="center brown-text"> Lima menit kemudian secondary steam blowdown radiation monitor berbunyi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="lsembilan" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="lsembilan" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                    <br><br>        
                    <h6 class="center brown-text"> Aliran feedwater pada B steam generator berkurang sedangkan levelnya relative konstan </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="lsepuluh" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="lsepuluh" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                    <!--- Tambagan kondisi buat doel unit 2-->
                    <br><br>
                    <h6 class="center brown-text"> Terjadi peningkatan level steam generator yang cepat pada loop B </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="lsebelas" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="lsebelas" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                    <br><br>
                    <h6 class="center brown-text"> Radiation monitoring channels mencatat tingkat aktivitas radiasi yang tinggi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="lduabelas" type="radio" value="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="lduabelas" type="radio" value="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                    <!------ To submit the form ---->
                    <br><br><br>                                 
                    <div class="center">
                        <input type="submit" name="submit" value="KIRIM" onclick="return validate();" class="btn brand teal">
                    </div>
                    <br><br>     
                  </form>
              </div>
            </section>
        </div>
      </div>
    </div>
  </div>

  <br><br> 
  <br><br>
</div>

<?php include('footer.php'); ?>

  <!--  JavaScript -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
</body>
</html>