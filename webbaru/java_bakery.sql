-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Apr 2018 pada 07.32
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `java_bakery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_produk`
--

CREATE TABLE `harga_produk` (
  `Id_Produk` varchar(5) NOT NULL,
  `Kd_Omset` varchar(5) NOT NULL,
  `Nama_Produk` varchar(30) NOT NULL,
  `Harga_Produk` int(20) NOT NULL,
  `Satuan` varchar(20) NOT NULL,
  `Modal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produksi`
--

CREATE TABLE `jenis_produksi` (
  `Kd_Jenis` varchar(3) NOT NULL,
  `Id_Karyawan` varchar(5) NOT NULL,
  `Id_Produk` varchar(5) NOT NULL,
  `Kd_PenggunaanBahan` int(3) NOT NULL,
  `Tanggal` date NOT NULL,
  `Roti_Burger` int(5) NOT NULL,
  `Donat` int(5) NOT NULL,
  `Kue_Bolu` int(5) NOT NULL,
  `Roti_Gulung` int(5) NOT NULL,
  `Roti_Kasur` int(5) NOT NULL,
  `Roti_Kepang` int(5) NOT NULL,
  `Roti_Moka` int(5) NOT NULL,
  `Roti_Tawar_Manis` int(5) NOT NULL,
  `Roti_Tawar_Kulit` int(5) NOT NULL,
  `Roti_Tawar_Kipas` int(5) NOT NULL,
  `Roti_Sisa` int(5) NOT NULL,
  `Hasil_Produksi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `Id_Karyawan` varchar(5) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Agama` varchar(15) NOT NULL,
  `Jenis_Kelamin` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`Id_Karyawan`, `Nama`, `Tanggal_Lahir`, `Alamat`, `Agama`, `Jenis_Kelamin`) VALUES
('KA001', 'Ayu Handayani', '1996-06-14', 'Jl. Smoi Sepaku, RT.10, NO.30', 'Islam', 'P'),
('KA002', '', '0000-00-00', '', '', ''),
('KA003', '', '0000-00-00', '', '', ''),
('KA004', '', '0000-00-00', '', '', ''),
('KA005', '', '0000-00-00', '', '', ''),
('KA007', '', '0000-00-00', '', '', ''),
('KA008', '', '0000-00-00', '', '', ''),
('KA009', '', '0000-00-00', '', '', ''),
('KA010', '', '0000-00-00', '', '', ''),
('KA011', '', '0000-00-00', '', '', ''),
('KS006', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_harian`
--

CREATE TABLE `laporan_harian` (
  `Kd_Laporan` varchar(5) NOT NULL,
  `Id_Karyawan` varchar(5) NOT NULL,
  `Kd_Omset` varchar(5) NOT NULL,
  `Tanggal` date NOT NULL,
  `Modal` int(20) NOT NULL,
  `Pemasukan` int(20) NOT NULL,
  `Pengeluaran` int(20) NOT NULL,
  `Omset` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `omset`
--

CREATE TABLE `omset` (
  `Kd_Omset` varchar(5) NOT NULL,
  `Tanggal` date NOT NULL,
  `Sales_1` int(20) NOT NULL,
  `Sales_2` int(20) NOT NULL,
  `Sales_3` int(20) NOT NULL,
  `Toko` int(20) NOT NULL,
  `Omset/hari` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaan_bahan`
--

CREATE TABLE `penggunaan_bahan` (
  `Kd_Penggunaan_Bahan` int(3) NOT NULL,
  `Id_Karyawan` varchar(5) NOT NULL,
  `Tanggal` date NOT NULL,
  `Tepung` int(10) NOT NULL,
  `Mentega_Kuning` int(10) NOT NULL,
  `Mentega_Putih` int(10) NOT NULL,
  `Telur` int(10) NOT NULL,
  `Susu_Cair` int(10) NOT NULL,
  `Susu_Bubuk` int(10) NOT NULL,
  `Calcium` int(10) NOT NULL,
  `Butter` int(10) NOT NULL,
  `Pelembut` int(10) NOT NULL,
  `Ragi` int(10) NOT NULL,
  `Gula` int(10) NOT NULL,
  `Garam` int(10) NOT NULL,
  `Air_Mineral` int(5) NOT NULL,
  `Gas_LPG` int(10) NOT NULL,
  `Cokelat` int(10) NOT NULL,
  `Keju` int(10) NOT NULL,
  `Puratos` int(10) NOT NULL,
  `Moka` int(15) NOT NULL,
  `Mentega_Refill` int(10) NOT NULL,
  `Stok` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_produk`
--
ALTER TABLE `harga_produk`
  ADD PRIMARY KEY (`Id_Produk`);

--
-- Indexes for table `jenis_produksi`
--
ALTER TABLE `jenis_produksi`
  ADD PRIMARY KEY (`Kd_Jenis`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`Id_Karyawan`);

--
-- Indexes for table `laporan_harian`
--
ALTER TABLE `laporan_harian`
  ADD PRIMARY KEY (`Kd_Laporan`);

--
-- Indexes for table `omset`
--
ALTER TABLE `omset`
  ADD PRIMARY KEY (`Kd_Omset`);

--
-- Indexes for table `penggunaan_bahan`
--
ALTER TABLE `penggunaan_bahan`
  ADD PRIMARY KEY (`Kd_Penggunaan_Bahan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
