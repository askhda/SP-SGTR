<?php
    include "koneksi.php";

    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];

    $sql = "INSERT INTO `user`(`nama`, `jabatan`) VALUES ('$nama', '$jabatan')";
    $result = $conn->query($sql);
?>

<script>
  window.location = 'deteksi_awal.php';
</script>
