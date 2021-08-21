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
  <!--- Background --->
  <style>
    .background {
      background-image: url('ginna.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style> 

  <!--- Fungsi show/hide password --->
  <script type="text/javascript">
    function tampilkan_password() {
      var cek = document.getElementById('pass')
      if (cek.type === "password") {
        cek.type = "text";
      }

      else {
        cek.type = "password";
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
            <section class="container teal-text">
              <div class="container">
                  <br><br>        
                    <h4 class="center"> Masukkan Data </h4>
                  <form action="data_login_admin.php" method="POST">
                    <label class="black-text"> Username </label>
                    <input type="text" name="username" value="">
                    <label class="black-text"> Password </label>
                    <input type="password" name="password" value="" id="pass">
                    <label>
                      <input type="checkbox" class="filled-in" onclick="tampilkan_password()" />
                      <span>Tampilkan password</span>
                    </label>
                    <br><br>

                    <div class="center">
                        <input type="submit" name="submit" value="Kirim" class="btn brand teal">
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
<?php include('footer.php'); ?>

  <!--  JavaScript-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</div>
</body>
</html>