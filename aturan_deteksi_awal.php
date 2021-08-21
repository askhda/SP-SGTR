<?php
	include 'koneksi.php';

	//Mengambil data id dari tabel user 
	$fk = "SELECT * FROM `user` ORDER BY id DESC LIMIT 1"; 
	$h_fk = $conn->query($fk);
	if ($h_fk->num_rows > 0) {
		while ($row = $h_fk->fetch_assoc()) {
			$pk=$row["id"];
		}
	}

	//sistem pakar 
	if (isset($_POST['submit'])){ 
		$gpsatu=$_POST['gpsatu'];
		$gpdua=$_POST['gpdua'];
		$gptiga=$_POST['gptiga'];


		if (($gpsatu=='ya' && $gpdua=='ya' && $gptiga=='ya')  || ($gpsatu=='ya' && $gpdua=='tidak' && $gptiga=='ya') ) {

			$hasil="Bukan Steam Generator Tube Rupture.";
			$tindakan="Segera lakukan pemeriksaan terhadap kondisi tersebut.";
			//memasukkan data ke tabel log_deteksi
			$sql = "INSERT INTO `log_deteksi`(`id_user`, `gpsatu`, `gpdua`, `gptiga`, `kondisi`, `tindakan`) VALUES ('$pk', '$gpsatu', '$gpdua', '$gptiga', '$hasil', '$tindakan')";
			$result = $conn->query($sql);			

			echo "<script>window.location = 'hasil_deteksi_awal.php';</script>";

		}
		elseif (($gpsatu=='ya' && $gpdua=='tidak' && $gptiga=='tidak') || ($gpsatu=='tidak' && $gpdua=='ya' && $gptiga=='tidak') || ($gpsatu=='tidak' && $gpdua=='tidak' && $gptiga=='ya') || ($gpsatu=='tidak' && $gpdua=='ya' && $gptiga=='ya') || ($gpsatu=='ya' && $gpdua=='ya' && $gptiga=='tidak') ) {

			$hasil="Kemungkinan terjadi Steam Generator Tube Rupture.";
			$tindakan="Lakukan pemeriksaan sesuai dengan prosedur yang disediakan untuk reaktor tersebut.";
			//memasukkan data ke tabel log_deteksi
			$sql = "INSERT INTO `log_deteksi`( `id_user`, `gpsatu`, `gpdua`, `gptiga`, `kondisi`, `tindakan`) VALUES ('$pk', '$gpsatu', '$gpdua', '$gptiga', '$hasil', '$tindakan')";
			$result = $conn->query($sql);			

			echo "<script>window.location = 'hasil_deteksi_awal.php';</script>";
		}

		else {
			$hasil="Tidak terjadi Steam Generator Tube Rupture.";
			$tindakan="Tidak ada tindakan yang diperlukan untuk mengatasi kondisi tersebut.";
			//memasukkan data ke tabel log_deteksi
			$sql = "INSERT INTO `log_deteksi`( `id_user`, `gpsatu`, `gpdua`, `gptiga`, `kondisi`, `tindakan`) VALUES ('$pk', '$gpsatu', '$gpdua', '$gptiga', '$hasil', '$tindakan')";
			$result = $conn->query($sql);			

			echo "<script>window.location = 'hasil_deteksi_awal.php';</script>";
		}
	
	}
	else{
		echo "harus milih";
	}
?>