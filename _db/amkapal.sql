-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2024 pada 22.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `kapal`
--

CREATE TABLE `kapal` (
  `id_kapal` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nm_kapal` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kapal`
--

INSERT INTO `kapal` (`id_kapal`, `gambar`, `nm_kapal`, `deskripsi`) VALUES
(3, '1714162066_ee6f076c404e6604ae0f.jpeg', 'Kapal Kongkang', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, dolores tenetur nam quae voluptas dolorem impedit exercitationem doloremque odit enim, sunt laborum minus rerum, amet odio ab blanditiis accusantium repellendus!'),
(4, '1714162074_3fb2cb906389c7fce48c.jpg', 'Kapal Ferry', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, dolores tenetur nam quae voluptas dolorem impedit exercitationem doloremque odit enim, sunt laborum minus rerum, amet odio ab blanditiis accusantium repellendus!'),
(5, '1714162087_8c3e681aca02dc7cf399.jpg', 'Kapal Selam', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, dolores tenetur nam quae voluptas dolorem impedit exercitationem doloremque odit enim, sunt laborum minus rerum, amet odio ab blanditiis accusantium repellendus!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_pengguna`, `email`, `jk`, `nohp`, `password`, `level`) VALUES
(1, 'Haikal Wahyudi', 'admin@admin.com', 'Laki-Laki', '23423', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesantiket`
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
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_pembayaran` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `norek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekening`
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
-- Indeks untuk tabel `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `pesantiket`
--
ALTER TABLE `pesantiket`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesantiket`
--
ALTER TABLE `pesantiket`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
