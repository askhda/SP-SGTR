<?php
        session_start();

        include("koneksi.php");

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $ambil="SELECT * FROM `admin` WHERE (`username`='$user')"; 
        $data = $conn->query($ambil);
        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
                $username=$row["username"];
                $password=$row["password"];
            }
        }

        if (isset($_POST['submit'])){

            $cek = $conn->query("SELECT * FROM `admin` WHERE (`username`='$user') AND (`password`='$pass')");

            if (mysqli_num_rows($cek) > 0){
                password_verify($pass, $password);

                $_SESSION['login'] = true;

                ?>
                <script>
                window.location = 'admin_home.php'; 
                </script> 
                <?php               
            }

            else{
                ?>
                <script>
                    alert('Isi ulang');
                    window.location = 'login_admin.php';
                </script>
                <?php
            }
        }
?>