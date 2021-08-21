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
</head>
<body>

<?php include('navigation_bar.php'); ?>

<div class="background">
  <br><br> 
  <br><br>
  <div class="row" > 
    <div class="col s12 l6 offset-l3 z-depth-2 teal">
      <div class="#ffffff white">
        <div class="card-content white-text">
            <section class="container teal-text">
              <div class="container">
                  <br><br>        
                    <h4 class="center"> Masukkan Data Diri </h4>
                  <form action="data_user_masuk.php" method="POST">
                    <label class="black-text"> Nama </label>
                    <input type="text" name="nama" value="">
                    <label class="black-text"> Jabatan </label>
                    <input type="text" name="jabatan" value="">
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
  
  <!--  JavaScript-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <?php include('footer.php'); ?>
</div>
</body>
</html>
