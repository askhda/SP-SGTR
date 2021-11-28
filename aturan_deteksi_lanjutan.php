<?php
	include 'koneksi.php';


	//Mengambil data indikasi awal dari tabel log_deteksi 
	$data = "SELECT * FROM `log_deteksi` ORDER BY id DESC LIMIT 1"; 
	$hasil = $conn->query($data);
	if ($hasil->num_rows > 0) {
	  while ($row = $hasil->fetch_assoc()) {
	    $lsatu=$row['gpsatu'];
	    $ldua=$row['gpdua'];
	    $ltiga=$row['gptiga'];
	  }

	}	

	//mengambil data id dari tabel user
	$fk = "SELECT * FROM `user` ORDER BY id DESC LIMIT 1"; 
	$h_fk = $conn->query($fk);
	if ($h_fk->num_rows > 0) {
		while ($row = $h_fk->fetch_assoc()) {
			$pk=$row["id"];
		}
	}


	//sistem pakar 
	if (isset($_POST['submit'])){ 
		$lempat=$_POST['lempat'];
		$llima=$_POST['llima'];
		$lenam=$_POST['lenam'];
		$ltujuh=$_POST['ltujuh'];
		$ldelapan=$_POST['ldelapan'];
		$lsembilan=$_POST['lsembilan'];
		$lsepuluh=$_POST['lsepuluh'];
		
		if ($lsatu=='tidak' && $ldua=='tidak' && $ltiga=='tidak' && $lempat=='tidak' && $llima=='tidak' && $lenam=='tidak' && $ltujuh=='tidak' && $ldelapan=='tidak' && $lsembilan=='tidak' && $lsepuluh=='tidak') {

			$hasil="Berdasarkan sepuluh kejadian steam generator tube rupture tidak terjadi steam generator tube rupture.";
			$tujtin="Tidak ada tindakan yang ditujukan untuk mengatasi kondisi tersebut.";
			$tinop="Tidak ada tindakan yang diperlukan untuk mengatasi kondisi tersebut.";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);			

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";			

		}

		//Doel Unit 2 dan Fort Calhoun
		elseif ($ldua=='ya' && $lsatu=='tidak' && $ltiga=='tidak' && $lempat=='tidak' && $llima=='tidak' && $lenam=='tidak' && $ltujuh=='tidak' && $ldelapan=='tidak' && $lsembilan=='tidak' && $lsepuluh=='tidak') {

			$hasil="Terjadi steam generator tube rupture sesuai dengan reaktor Doel Unit 2 dan Fort Calhoun.";

			$tujtin="(1) Mengatur pendingin primer berada dalam keadaan subcooled <br>
			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>
			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak";

			$tinop="(1) Mendeteksi SGTR yang tengah terjadi <br>
			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>
			(3) Reduksi daya/trip <br>
			(4) Isolasi steam generator yang rusak <br>
			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>
			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}

		//Point Beach Unit 1
		elseif ($lsatu=='ya' && $lempat=='ya' && $llima=='ya' && $ldua=='tidak' && $ltiga=='tidak' && $lenam=='tidak' && $ltujuh=='tidak' && $ldelapan=='tidak' && $lsembilan=='tidak' && $lsepuluh=='tidak') {

			$hasil="Terjadi steam generator tube rupture sesuai dengan reaktor Point Beach Unit 1.";

			$tujtin="(1) Mengatur pendingin primer berada dalam keadaan subcooled <br>
			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>
			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak";

			$tinop="(1) Mendeteksi SGTR yang tengah terjadi <br>
			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>
			(3) Reduksi daya/trip <br>
			(4) Isolasi steam generator yang rusak <br>
			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>
			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}

		//Surry Unit 2
		elseif ($lsatu=='tidak' && $ldua=='ya' && $ltiga=='tidak' && $lempat=='ya' && $llima=='tidak' & $lenam=='ya' && $ltujuh=='tidak' && $ldelapan=='tidak' && $lsembilan=='tidak' && $lsepuluh=='tidak') {

			$hasil="Terjadi steam generator tube rupture sesuai dengan reaktor Surry Unit 2.";

			$tujtin="(1) Mengatur pendingin primer berada dalam keadaan subcooled <br>
			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>
			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak";

			$tinop="(1) Mendeteksi SGTR yang tengah terjadi <br>
			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>
			(3) Reduksi daya/trip <br>
			(4) Isolasi steam generator yang rusak <br>
			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>
			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}		

		//Prairie Island Unit 1
		elseif ($lsatu=='ya' && $ldua=='tidak' && $ltiga=='tidak' && $lempat=='tidak' && $llima=='ya' && $lenam=='tidak' && $ltujuh=='tidak' && $ldelapan=='tidak' && $lsembilan=='tidak' && $lsepuluh=='tidak') {

			$hasil="Terjadi steam generator tube rupture sesuai dengan reaktor Prairie Island Unit 1.";

			$tujtin="(1) Mengatur pendingin primer berada dalam keadaan subcooled <br>
			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>
			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak";

			$tinop="(1) Mendeteksi SGTR yang tengah terjadi <br>
			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>
			(3) Reduksi daya/trip <br>
			(4) Isolasi steam generator yang rusak <br>
			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>
			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}

		//Ginna Unit 1
		elseif ($lsatu=='ya' && $ldua=='ya' && $ltiga=='tidak' && $lempat=='tidak' && $llima=='ya' && $lenam=='tidak' && $ltujuh=='ya' && $ldelapan=='ya' && $lsembilan=='tidak' && $lsepuluh=='tidak') {

			$hasil="Terjadi steam generator tube rupture sesuai dengan reaktor Ginna Unit 1.";

			$tujtin="(1) Mengatur pendingin primer berada dalam keadaan subcooled <br>
			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>
			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak";

			$tinop="(1) Mendeteksi SGTR yang tengah terjadi <br>
			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>
			(3) Reduksi daya/trip <br>
			(4) Isolasi steam generator yang rusak <br>
			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>
			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}
		
		//North Anna Unit 1 dan Polo Verde Unit 2
		elseif ( $lsatu=='tidak'  && $ltiga=='ya' && $ldua=='ya' && $lempat=='tidak' && $llima=='ya' && $lenam=='tidak' && $ltujuh=='tidak' && $ldelapan=='tidak' && $lsembilan=='tidak' && $lsepuluh=='tidak') {

			$hasil="Terjadi steam generator tube rupture sesuai dengan reaktor North Anna Unit 1 dan Polo Verde Unit 2.";

			$tujtin="(1) Mengatur pendingin primer berada dalam keadaan subcooled <br>
			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>
			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak";

			$tinop="(1) Mendeteksi SGTR yang tengah terjadi <br>
			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>
			(3) Reduksi daya/trip <br>
			(4) Isolasi steam generator yang rusak <br>
			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>
			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays";

			$sql = "INSERT INTO `log_deteksilan`( `id_user` , `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}

		//McGuire Unit 1
		elseif ($lsatu=='tidak' && $ldua=='tidak' && $ltiga=='ya' && $lempat=='tidak' && $llima=='ya' && $lenam=='tidak' && $ltujuh=='tidak' && $ldelapan=='tidak' && $lsembilan=='tidak' && $lsepuluh=='ya') {

			$hasil="Terjadi steam generator tube rupture sesuai dengan reaktor McGuire Unit 1.";

			$tujtin="(1) Mengatur pendingin primer berada dalam keadaan subcooled <br>
			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>
			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak";

			$tinop="(1) Mendeteksi SGTR yang tengah terjadi <br>
			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>
			(3) Reduksi daya/trip <br>
			(4) Isolasi steam generator yang rusak <br>
			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>
			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}

		//Mihama Unit 2
		elseif ($lsatu=='ya' && $ldua=='tidak' && $ltiga=='tidak' && $lempat=='tidak' && $llima=='tidak' && $lenam=='tidak' && $ltujuh=='tidak' && $ldelapan=='tidak' && $lsembilan=='ya' && $lsepuluh=='tidak') {

			$hasil="Terjadi steam generator tube rupture sesuai dengan reaktor Mihama Unit 2.";

			$tujtin="(1) Mengatur pendingin primer berada dalam keadaan subcooled <br>
			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>
			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak";

			$tinop="(1) Mendeteksi SGTR yang tengah terjadi <br>
			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>
			(3) Reduksi daya/trip <br>
			(4) Isolasi steam generator yang rusak <br>
			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>
			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}

		else {

			$hasil="Berdasarkan sepuluh kejadian steam generator tube rupture tidak terjadi steam generator tube rupture, namun terdapat suatu kejadian yang terjadi pada reaktor.";
			$tujtin="Menemukan kejadian yang sedang berlangsung agar kejadian dapat segera diatasi.";
			$tinop="Lakukan pemeriksaan sesuai dengan prosedur yang disediakan untuk reaktor tersebut.";

			$sql = "INSERT INTO `log_deteksilan`( `id_user`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `hasil`, `tujtin`, `tinop`, `lsepuluh` ) VALUES ('$pk', '$lsatu', '$ldua', '$ltiga', '$lempat', '$llima', '$lenam', '$ltujuh', '$ldelapan', '$lsembilan', '$hasil', '$tujtin', '$tinop', '$lsepuluh' )";
			$result = $conn->query($sql);

			echo "<script>window.location = 'hasil_deteksi_lanjutan.php';</script>";

		}
	
	}
	else{
		echo "harus memilih";
	}
?>