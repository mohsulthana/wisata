-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 04:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `nama_acara` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi_acara` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama_acara`, `tanggal`, `lokasi_acara`) VALUES
(2, 'e', '2019-09-06', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `alamat`, `jenis`, `kabupaten`, `deskripsi`) VALUES
(1, 'Taman Purbakala', 'Gandus', 'Alam', 'palembang', ''),
(2, 'Perkampungan Nelayan Sungsang', 'Sungsang, Banyuasin II', 'Buatan', 'Banyuasin', ''),
(3, 'Kawasan Benteng Kuto Besak ', 'Jln. SMB II, Palembang', 'Sejarah', 'Palembang', ''),
(4, 'Makam Putri Pinang Masak', 'Camat Tg. Batu', 'Wisata Religi', 'Ogan Ilir', ''),
(5, 'Danau Teluk Gelam', 'Kec. Teluk Gelam ', 'Alam', 'Ogan Komering Ilir', ''),
(6, 'Kuala Lebung Itam', 'Kec. Tulung Selapan, OKI ', 'Alam ', 'Ogan Komering Ilir', ''),
(7, 'Danau Deduhok', 'Dusun IV Rantau Dedap, Desa Segamit, Kec. Semende Darat ', 'Alam', 'Muaraenim', ''),
(8, 'Gunung Seminung', 'Desa Kota Batu. Kec. Banding Agung OKU Selatan', 'Alam', 'Ogankomeringuluselatan', ''),
(9, 'Lebung Karangan', 'Tj.  Senai', 'Alam', 'oganilir', ''),
(13, 'w', 'w', 'w', 'w', 'w');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
