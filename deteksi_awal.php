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

  <!--- Fungsi alert kalau belum diisi ----->
  <script>
    function validate() {
      var isian_satu= document.getElementsByName('gpsatu');
      var isian_dua = document.getElementsByName('gpdua');
      var isian_tiga= document.getElementsByName('gptiga');
      var isianvalue_satu = false;
      var isianvalue_dua = false;
      var isianvalue_tiga = false;

      for (var i = 0; i<isian_satu.length; i++) {
        if (isian_satu[i].checked == true) {
          isianvalue_satu = true;
        }
      }

      if (!isianvalue_satu) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<isian_dua.length; i++) {
        if (isian_dua[i].checked == true) {
          isianvalue_dua = true;
        }
      }

      if (!isianvalue_dua) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      }

      for (var i = 0; i<isian_tiga.length; i++) {
        if (isian_tiga[i].checked == true) {
          isianvalue_tiga = true;
        }
      }

      if (!isianvalue_tiga) {
        alert("Terdapat kondisi yang belum terisi!");
        return false;
      } 

    }

  </script>
</head>
<body>

<?php include('navigation_bar.php'); ?>

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
                  <form action="aturan_deteksi_awal.php" name="pilihan_awal" method="POST" >
                    <h6 class="center brown-text"> Air ejector radiation alarm berbunyi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="gpsatu" type="radio" value="ya" id="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="gpsatu" type="radio" value="tidak" id="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                  <br><br>        
                    <h6 class="center brown-text"> Terjadi pengurangan tekanan pada sistem primer </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="gpdua" type="radio" value="ya" id="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="gpdua" type="radio" value="tidak" id="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>
                  <br><br>        
                    <h6 class="center brown-text"> Main steam line radiation alarm berbunyi </h6>
                    <br>
                    <label class="col s3 offset-l2">
                      <input name="gptiga" type="radio" value="ya" id="ya" />
                      <span class="black-text">Ya</span>
                    </label>     
                    <label class="col s3 offset-l3">
                      <input name="gptiga" type="radio" value="tidak" id="tidak" />
                      <span class="black-text">Tidak</span>
                    </label>                                         
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