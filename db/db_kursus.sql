-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 01:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kursus`
--

CREATE TABLE `tb_kursus` (
  `id_kursus` int(11) NOT NULL,
  `kode_kursus` varchar(10) NOT NULL,
  `judul_kursus` varchar(50) NOT NULL,
  `deskripsi_kursus` text NOT NULL,
  `durasi_kursus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kursus`
--

INSERT INTO `tb_kursus` (`id_kursus`, `kode_kursus`, `judul_kursus`, `deskripsi_kursus`, `durasi_kursus`) VALUES
(9, 'KD-001', 'Kursus Belajar Bahasa Arab', 'Kursus ini dipandu oleh Harakah Ilmiyah', '1 Bulan'),
(10, 'KD-002', 'Kursus Belajar Bahasa Korea dan Huruf Hangul', 'Belajar bahasa korea di rumah bersama oppa korea asli', '2 Bulan'),
(11, 'KD-003', 'Kursus Belajar Memasak Pemula', 'Disini diajarkan teknik memasak untuk kamu si pemula', '1 Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `judul_materi` varchar(50) NOT NULL,
  `deskripsi_materi` text NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `kode`, `judul_materi`, `deskripsi_materi`, `link`) VALUES
(6, 'KD-002', 'Belajar Bahasa Korea Sesi 1', '#Dirumahaja Ayo Kita Belajar Bahasa Korea Bersama\r\nðŸ˜‰Ayo team Bandung Oppa, Nyalakan alarm biar ketemu cepat!', 'https://www.youtube.com/watch?v=pCht9llEugM'),
(7, 'KD-002', 'Cara Bikin Kalimat Bahasa Korea(Cara Termudah)', 'Cara Bikin Kalimat Bahasa Korea(Cara Termudah)\r\n\r\nðŸ˜‰Ayo team Bandung Oppa, Nyalakan alarm biar ketemu cepat!', 'https://www.youtube.com/watch?v=WuGkUdVjKaI'),
(8, 'KD-001', 'Belajar Bahasa Arab Dari 0', 'Dalam belajar bahasa arab kita akan jumpai 2 pembahasan besar yaitu :\r\n\r\n1. Ilmu nahwu\r\nAdalah ilmu yg mempelajari baris akhir sebua kata\r\n\r\n2. Ilmu Sorof\r\nAdalah ilmu yang mempelajari Struktur sebua kata.', 'https://www.youtube.com/watch?v=8e5Nmpy8Zmw'),
(9, 'KD-001', 'BEBERAPA KATA TANYA DALAM BAHASA ARAB DAN CONTOH K', 'Sahabat yang baru belajar bahasa arab kali ini admin share video tentang beberapa kata tanya dalam bahasa arab dan contohnya, semoga bisa membantu dan bermanfaat!', 'https://www.youtube.com/watch?v=KLuuxcmeIec'),
(10, 'KD-003', '7 Resep Makanan Dalam Seminggu', 'Bagi kalian yang bingung masak apa, bisa ni ikuti cara ini.', 'https://www.youtube.com/watch?v=MWavsCSoVHw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  MODIFY `id_kursus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
