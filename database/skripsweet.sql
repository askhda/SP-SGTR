-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Agu 2021 pada 07.56
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsweet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'bismillah', 'bisa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_deteksi`
--

CREATE TABLE `log_deteksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gpsatu` varchar(70) NOT NULL,
  `gpdua` varchar(70) NOT NULL,
  `gptiga` varchar(70) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_deteksi`
--

INSERT INTO `log_deteksi` (`id`, `id_user`, `tanggal`, `gpsatu`, `gpdua`, `gptiga`, `kondisi`, `tindakan`) VALUES
(1, 1, '2021-08-20 12:08:19', 'tidak', 'ya', 'tidak', 'Kemungkinan terjadi Steam Generator Tube Rupture.', 'Lakukan pemeriksaan sesuai dengan prosedur yang disediakan untuk reaktor tersebut.'),
(2, 2, '2021-08-20 15:27:30', 'tidak', 'ya', 'tidak', 'Kemungkinan terjadi Steam Generator Tube Rupture.', 'Lakukan pemeriksaan sesuai dengan prosedur yang disediakan untuk reaktor tersebut.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_deteksilan`
--

CREATE TABLE `log_deteksilan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lsatu` varchar(100) NOT NULL,
  `ldua` varchar(100) NOT NULL,
  `ltiga` varchar(100) NOT NULL,
  `lempat` varchar(100) NOT NULL,
  `llima` varchar(100) NOT NULL,
  `lenam` varchar(100) NOT NULL,
  `ltujuh` varchar(100) NOT NULL,
  `ldelapan` varchar(100) NOT NULL,
  `lsembilan` varchar(100) NOT NULL,
  `lsepuluh` varchar(100) NOT NULL,
  `hasil` varchar(700) NOT NULL,
  `tujtin` varchar(700) NOT NULL,
  `tinop` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_deteksilan`
--

INSERT INTO `log_deteksilan` (`id`, `id_user`, `tanggal`, `lsatu`, `ldua`, `ltiga`, `lempat`, `llima`, `lenam`, `ltujuh`, `ldelapan`, `lsembilan`, `lsepuluh`, `hasil`, `tujtin`, `tinop`) VALUES
(1, 1, '2021-08-20 12:09:21', 'tidak', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'Terjadi steam generator tube rupture sesuai dengan reaktor Doel Unit 2 dan Fort Calhoun.', '(1) Mengatur primary coolant subcooled <br>\r\n			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>\r\n			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak', '(1) Mendeteksi SGTR yang tengah terjadi <br>\r\n			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>\r\n			(3) Reduksi daya/trip <br>\r\n			(4) Isolasi steam generator yang rusak <br>\r\n			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>\r\n			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays'),
(2, 2, '2021-08-20 15:28:20', 'tidak', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'Terjadi steam generator tube rupture sesuai dengan reaktor Doel Unit 2 dan Fort Calhoun.', '(1) Mengatur primary coolant subcooled <br>\r\n			(2) Meminimalisir bocoran dari pendingin sistem primer ke pedingin sistem sekunder <br>\r\n			(3) Mencegah pelepasan radioaktivitas dari steam generator yang rusak', '(1) Mendeteksi SGTR yang tengah terjadi <br>\r\n			(2) Mengontrol level pressurizer menggunakan charging pump dan letdown line (jika rupture kecil) <br>\r\n			(3) Reduksi daya/trip <br>\r\n			(4) Isolasi steam generator yang rusak <br>\r\n			(5) pendinginan sistem pendingin reaktor termasuk aliran yang dipompa ke keseluruhan steam generator dan keseluruhan uap steam generator yang dibuang ke kondensor atau atmosfir <br>\r\n			(6) Depresurisasi sistem pendingin reaktor yang biasanya membutuhkan pembatasan safety injection dan penggunakan pressurizer sprays');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `jabatan`) VALUES
(1, 'Diyastri Khotimatul Huda', 'Operator'),
(2, 'Diyastri Khotimatul Huda', 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_deteksi`
--
ALTER TABLE `log_deteksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_nama` (`id_user`);

--
-- Indexes for table `log_deteksilan`
--
ALTER TABLE `log_deteksilan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log_deteksi`
--
ALTER TABLE `log_deteksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log_deteksilan`
--
ALTER TABLE `log_deteksilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `log_deteksi`
--
ALTER TABLE `log_deteksi`
  ADD CONSTRAINT `log_deteksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log_deteksilan`
--
ALTER TABLE `log_deteksilan`
  ADD CONSTRAINT `log_deteksilan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
