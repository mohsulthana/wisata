-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Sep 2019 pada 15.09
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `no` int(100) NOT NULL,
  `nama_hotel` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `jumlah_pegawai` int(20) NOT NULL,
  `Fasilitas` varchar(100) NOT NULL,
  `jumlah_kamar` int(20) NOT NULL,
  `bintang` varchar(10) NOT NULL,
  `Action` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`no`, `nama_hotel`, `Alamat`, `jumlah_pegawai`, `Fasilitas`, `jumlah_kamar`, `bintang`, `Action`) VALUES
(8, 'Hotel Arista', 'Jln. Angkatan 45 Komp. Ruko Taman Mandir', 96, '1,2,3,4,5,6,7,8,9,10', 174, '5', ''),
(9, 'Hotel Excelton', 'Jln. Demang Lebar Daun', 127, '1,2,3,4,5,6,7,8,9,10', 149, '5', ''),
(10, 'Hotel 101', 'Jln. Rajawali', 90, '1,2,3,4,5,6,7,10', 137, '4', ''),
(11, 'Hotel Sintesa Peninsula', 'Jln. Residen A. Rojak Simp. Celentang', 91, '1,2,3,4,5,6,7,8,9,10', 81, '4', ''),
(12, 'Hotel Swarna Dwipa', 'Jln. Tasik No. 2 Palembang', 90, '2,3,4,5,9,10', 70, '3', ''),
(13, 'Hotel Santika', 'Jln. Radial', 77, '2,3,4,5,8', 149, '3', ''),
(14, 'Hotel Imara', 'Jln. Jend. Sudirman No. 1111A Palembang', 62, '1,3,5,10', 72, '3', ''),
(15, 'Hotel Grand Zuri ', 'Jln. Rajawali', 113, '1,2,3,4,5', 154, '3', ''),
(16, 'Hotel All Nite and Day', 'Jln. Veteran', 42, '1,3,5,10', 25, '2', ''),
(17, 'Hotel Paradise', 'Jln. Kap. A. Rivai No. 58 Palembang', 16, '3,5,6,10', 24, '1', ''),
(18, 'Indrisari Indah Hotel', 'Jln. Raya Palembang - Prabumulih KM. 26 Indralaya', 35, '3,5,10', 36, '1', ''),
(19, 'Griya Serasan Sekundang', 'Jln. SMB II, Muara Enim', 32, '1,3,5,10', 28, '3', ''),
(20, 'Bukit Indah Lestari Hotel', 'Jl.Garuda 2A Lintas Sumatera, Baturaja', 65, '3,4,10', 81, '3', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `restoran`
--

CREATE TABLE `restoran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_pegawai` int(10) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `Action` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `restoran`
--

INSERT INTO `restoran` (`id`, `nama`, `alamat`, `jumlah_pegawai`, `kabupaten`, `Action`) VALUES
(9, 'Restoran Wisata ', 'Jl. Letkol Iskandar No.105 -107, PLG', 29, 'Palembang', ''),
(10, 'Restorant Selebriti', 'Jl. Petanang No.1241, Palembang', 30, 'Palembang', ''),
(11, 'Angel Resto & Cafe', 'Jln. Raya Lintas Timur, Timbangan KM. 32', 10, 'oganilir', ''),
(12, 'Pagi Sore', 'Jln. Raya Lintas Timur Prabumulih - Indaralaya', 25, 'oganilir', ''),
(13, 'Resto Bil Hotel', 'Jln. Garuda No. 24, Kec. Baturaja Timur', 46, 'ogankomeringulu', ''),
(14, 'Pondok Santap Gelompong', 'Jln. Mayor Iskandar NO. 1186, Kec. Baturaja Timur', 24, 'ogankomeringulu', ''),
(15, 'Resto Challie Bakery Cake', 'Jln. Jendral Sudirman Bk. 10', 5, 'ogankomeringulutimur', ''),
(16, 'Lesehan Sandrina', 'Jln. Jend. Sudirman No. 417', 3, 'ogankomeringulutimur', ''),
(17, 'Mahkota Resto', 'Jln. Padat Karya Kel. Gunung Ibul', 8, 'prabumulih', ''),
(18, 'Pindang Cek Molek', 'Jl. Jend Sudirman Gunung Ibul Barat', 4, 'prabumulih', ''),
(19, 'Restoran Ranggonang', 'Kel. Balai Agung', 20, 'banyuasin', ''),
(20, 'Restoran Pondok Kite', 'Jalan Cemara Kelurahan Pasar Baru', 10, 'lahat', ''),
(21, 'Restoran Villa Gunung Gare ', 'Jl. Laskar Wanita Mentarjo', 6, 'pagaralam', ''),
(22, 'Resto Dempo Flower', 'Jl. Laskar Wanita Mentarjo', 5, 'pagaralam', ''),
(23, 'Cafe & Resto Pondok Steak', 'Jln. Yos Sodarso Rt. 001 Kel Taba Jemekeh, Lubuk Linggau', 7, 'lubuklinggau', ''),
(24, 'Resto Sakura', 'Jln. Garuda no.1, Lubuk Linggau', 9, 'lubuklinggau', ''),
(25, 'Restoran Istana Raso', 'Jl Palembang Kayuagung Km 26', 9, 'oganilir', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seni`
--

CREATE TABLE `seni` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerja` text NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `Action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seni`
--

INSERT INTO `seni` (`id`, `nama`, `alamat`, `pekerja`, `jenis`, `Action`) VALUES
(3, 'Sanggar Citra', 'Jln. Way Hitam, Palembang', '20', 'tari', ''),
(4, 'Sanggar Istana Daun Management', 'Jln. Progklamasi, Palembang', '12', 'musik', ''),
(6, 'Sanggar Lesung', 'Banten Lr. Masa Jaya Seberang Ulu II, Palembang', '17', 'Musik', ''),
(7, 'Sanggar Lesung', 'Banten Lr. Masa Jaya Seberang Ulu II, Palembang', '17', 'musik', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `fasilitas` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `Action` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `alamat`, `fasilitas`, `jenis`, `kabupaten`, `Action`) VALUES
(1, 'Taman Purbakala', 'Gandus', '1,2,3', 'Alam', 'palembang', ''),
(2, 'Perkampungan Nelayan Sungsang', 'Sungsang, Banyuasin II', '', 'Buatan', 'Banyuasin', ''),
(3, 'Kawasan Benteng Kuto Besak ', 'Jln. SMB II, Palembang', '', 'Sejarah', 'Palembang', ''),
(4, 'Makam Putri Pinang Masak', 'Camat Tg. Batu', '', 'Wisata Religi', 'Ogan Ilir', ''),
(5, 'Danau Teluk Gelam', 'Kec. Teluk Gelam ', '', 'Alam', 'Ogan Komering Ilir', ''),
(6, 'Kuala Lebung Itam', 'Kec. Tulung Selapan, OKI ', '', 'Alam ', 'Ogan Komering Ilir', ''),
(7, 'Danau Deduhok', 'Dusun IV Rantau Dedap, Desa Segamit, Kec. Semende Darat ', '', 'Alam', 'Muaraenim', ''),
(8, 'Gunung Seminung', 'Desa Kota Batu. Kec. Banding Agung OKU Selatan', '1,2,4,6,8', 'Alam', 'Ogankomeringuluselatan', ''),
(9, 'Lebung Karangan', 'Tj.  Senai', '0', 'Alam', 'oganilir', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seni`
--
ALTER TABLE `seni`
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
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `seni`
--
ALTER TABLE `seni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
