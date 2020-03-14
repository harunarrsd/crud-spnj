-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Mar 2020 pada 15.09
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_katalog`
--

CREATE TABLE `tb_katalog` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tahun_terbit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_katalog`
--

INSERT INTO `tb_katalog` (`id`, `nama_buku`, `judul_buku`, `pengarang`, `tahun_terbit`) VALUES
(1, 'Sinar', '', 'dhajs', 2019),
(4, 'dnaj', 'dnaj', 'sdnj', 2002),
(5, 'Test', 'Terserah', 'Pengarah', 2005),
(6, 'sdnjas', 'dnaj', 'dnja', 2002);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_katalog`
--
ALTER TABLE `tb_katalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_katalog`
--
ALTER TABLE `tb_katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
