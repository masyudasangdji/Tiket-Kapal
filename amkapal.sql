-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2024 at 04:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amkapal`
--

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id_kapal` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nm_kapal` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`id_kapal`, `gambar`, `nm_kapal`, `deskripsi`) VALUES
(3, '1725271609_4960c51184029df03210.jpeg', 'Gambar Peta lintasan yang di layani', 'Lintasan Perintis  : 22  Lintasan\r\nLintasan Komersial : 4 Lintasan |\r\n\r\nBiar lebih jelasnya lihat pada gambar'),
(4, '1725272643_092581999b6dc4916b0e.jpg', 'Gambar Pelabuhan Penyeberangan Galala- Namlea', 'Biar lebih jelasnya lihat pada gambar'),
(5, '1725272550_8c0c89896b6755a40a90.jpg', 'Gambar Jenis Muatan', 'Penupang, kedaraan, dan barang | Biar lebih jelasnya lihat pada gambar'),
(6, '1725347784_69d7bf1747d0b4a4fe5f.jpg', 'Nama -Nama Kapal', 'Biar lebih jelasnya lihat pada gambar');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nm_pengguna` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` char(15) NOT NULL,
  `nohp` varchar(17) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_pengguna`, `email`, `jk`, `nohp`, `password`, `level`) VALUES
(1, 'Yuda', 'admin@admin.com', 'Laki-Laki', '23423', 'admin', 'Admin'),
(11, 'Yuda marasabessy', 'yudamarasabessy@gmail.com', 'Laki-Laki', '0822092875024', 'user', 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `pesantiket`
--

CREATE TABLE `pesantiket` (
  `id_pemesanan` int(11) NOT NULL,
  `nm_pemesan` varchar(50) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `jk` char(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nik` varchar(17) NOT NULL,
  `nohp` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `dewasa` int(11) NOT NULL,
  `bayi` int(11) NOT NULL,
  `jeniskendaraan` varchar(20) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `aksi` int(11) NOT NULL,
  `total_pembayaran` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_pembayaran` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `norek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_pembayaran`, `bank`, `norek`) VALUES
(1, 'BCA', '76566666'),
(2, 'BRI', '23456767676767'),
(3, 'BNI', '65456999'),
(4, 'NTB', '43659898989'),
(5, 'MANDIRI', '8687900000'),
(6, 'OVO', '9838787878'),
(7, 'DANA', '983565656'),
(8, 'LINKAJA', '783499898989');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pesantiket`
--
ALTER TABLE `pesantiket`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesantiket`
--
ALTER TABLE `pesantiket`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
