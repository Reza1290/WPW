-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 01:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `ID` int(11) NOT NULL,
  `NRP` varchar(20) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `GENDER` tinyint(1) NOT NULL,
  `JURUSAN` varchar(30) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ALAMAT` text NOT NULL,
  `HP` varchar(15) NOT NULL,
  `SMA` varchar(30) NOT NULL,
  `F_MATKUL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`ID`, `NRP`, `NAMA`, `GENDER`, `JURUSAN`, `EMAIL`, `ALAMAT`, `HP`, `SMA`, `F_MATKUL`) VALUES
(26, '3122500024', 'Muhamad Reza Muktasib', 1, 'INFORMATIKA', 'reza.muktasib@gmail.com', 'JL TG PINANG NO 6 ', '085649929190', 'SMAN 8 SURABAYA', 'PROGRAM'),
(27, '3122500034', 'Budi Raharjo', 1, 'INFORMATIKA', 'reza.muktasib@gmail.com', 'JL TG PINANG NO 6 SBY', '085649929190', 'SMAN 8 SURABAYA', 'PROGRAM'),
(28, '3122500029', 'Ilham Budiman', 1, 'INFORMATIKA', 'reza.muktasib@gmail.com', 'JL TG PINANG NO 6 SBY', '085649929190', 'SMAN 8 SURABAYA', 'PROGRAM'),
(31, '3122500027', 'Tarisa Audina M', 1, 'TEKNIK INDUSTRI', 'tari@gmail.com', 'TELAGA', '0851231313131', 'SMAN 8 SURABAYA', 'GAMBAR TEKNIK'),
(44, '3122500023', 'Vania Winola', 1, 'INFORMATIKA', 'vania@gmail.com', 'JL. Jalan bersamanya', '0851313200032', 'SMAN 6 SURABAYA', 'MATEMATIKA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
