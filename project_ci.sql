-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 12:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `kepegawaian`
--
CREATE DATABASE project_ci;
USE project_ci;

CREATE TABLE `kepegawaian` (
  `Id` int(10) NOT NULL,
  `Nama_pegawai` varchar(100) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `Alamat_pegawai` varchar(50) NOT NULL,
  `Golongan` varchar(10) NOT NULL,
  `Status_pegawai` varchar(30) NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Image` varchar(30) NOT NULL DEFAULT '.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepegawaian`
--

INSERT INTO `kepegawaian` (`Id`, `Nama_pegawai`, `NIP`, `Alamat_pegawai`, `Golongan`, `Status_pegawai`, `Tempat_lahir`, `Tanggal_lahir`, `Image`) VALUES
(1, 'Angga Ananda Putra', '191225130111551200', 'Jl. Mayjend Sungkono No. 10 Malang', 'II/DD', 'PNS PUSAT', 'Malang', '1990-10-05', '.jpg'),
(2, 'Ahmad Ali Habibi', '191225130111551212', 'Jl. Sawojajar Gg. 15 Malang', 'III/A', 'PNS PUSAT', 'Sidoarjo', '1988-03-11', '.jpg'),
(3, 'Barra Muhammad', '191225130121551233', 'Jl. Soekarno-Hatta No. 1 Malang', 'II/D', 'PNS DAERAH', 'Surabaya', '1985-05-04', '.jpg'),
(4, 'Bella Aldelia Amanda', '191215130111331216', 'Jl. Arjosari No. 2 Malang', 'IV/4', 'PNS PUSAT', 'Bandung', '1974-08-01', '.jpg'),
(5, 'Cahya Budi Purnomo', '191210130111331332', 'Jl. Sukoharjo No. 25 Malang', 'III/A', 'PNS PUSAT', 'Blitar', '1982-10-27', '.jpg'),
(6, 'Dian Ayu Puspitasari', '191310136711331379', 'Jl. Puri Cempaka Putih No. 17 Malang', 'III/A', 'PNS DAERAH', 'Jombang', '1979-02-01', '.jpg'),
(7, 'Dwi Wahyu Edi Putra', '191310136880331456', 'Jl. Untung Suropati No. 1 Malang', 'II/B', 'PNS DAERAH', 'Cimahi', '1991-10-08', '.jpg'),
(8, 'Eka Nur Rahmawati', '191210134711331400', 'Jl. Tlogomas No. 20 Malang', 'II/B', 'PNS DAERAH', 'Sidoarjo', '1990-11-29', '.jpg'),
(9, 'Firman Syahputra', '191226130121551517', 'Jl. Jaksa Agung Suprapto No. 12 Malang', 'IV/A', 'PNS PUSAT', 'Tulungagung', '1974-05-09', '.jpg'),
(10, 'Fita Anggraini', '191225131121551427', 'Jl. Bunga Anggrek No. 77 Malang', 'III/B', 'PNS PUSAT', 'Malang', '1987-01-06', '.jpg'),
(11, 'Gibran Ali Pratama', '191225130121661244', 'Jl. Danau Toba, Sawojajar No. 10 Malang', 'III/C', 'PNS DAERAH', 'Malang', '1990-10-24', '.jpg'),
(12, 'Liviana Indah Puspa Rini', '191325131121551273', 'Jl. Mayjend Moch. Wiyono No. 1 Malang', 'III/B', 'PNS PUSAT', 'Malang', '1990-11-27', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_pegawai`
--

CREATE TABLE `user_pegawai` (
  `Id` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Level` varchar(30) NOT NULL,
  `Active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_pegawai`
--

INSERT INTO `user_pegawai` (`Id`, `Username`, `Email`, `Password`, `Level`, `Active`) VALUES
(1, 'Admin', '', 'Admin', 'Admin', 1),
(2, 'Pegawai', '', 'Pegawai', 'Pegawai', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kepegawaian`
--
ALTER TABLE `kepegawaian`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_pegawai`
--
ALTER TABLE `user_pegawai`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kepegawaian`
--
ALTER TABLE `kepegawaian`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_pegawai`
--
ALTER TABLE `user_pegawai`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
