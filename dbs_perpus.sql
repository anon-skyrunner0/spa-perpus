-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2020 pada 20.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4
-- Adam Firdaus 4311901038

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_member`
--

CREATE TABLE `tbl_data_member` (
  `id_member` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `scan_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_data_member`
--

INSERT INTO `tbl_data_member` (`id_member`, `nama_lengkap`, `jurusan`, `alamat`, `no_telepon`, `scan_id`) VALUES
('LM000004', 'Gabriella Joice S.', 'Teknik Informatika', 'Tanjung Piayu', '352342', ''),
('LM000005', 'Evriska Dayanti', 'Teknik Mesin', 'Bengkong Sadai', '3245324', ''),
('LM000006', 'Adam Firdaus', 'Teknik Informatika', 'Perum Pondok Graha K no. 8', '94365435', ''),
('LM000007', 'Anissa Nabila', 'Teknik Informatika', 'Perum Kelana Jaya C4 - 19', '3920740325', ''),
('LM000008', 'Nabila Firdaus', 'Teknik Informatika', 'Perum Pondok Graha K no. 8', '3245324', ''),
('LM000009', 'Anissa Firdaus', 'Teknik Manajerial', 'Aston', '352342', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_data_member`
--
ALTER TABLE `tbl_data_member`
  ADD PRIMARY KEY (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
