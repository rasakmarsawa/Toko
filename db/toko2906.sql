-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 09.50
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jual_st` int(11) NOT NULL DEFAULT 0,
  `jual_kt` int(11) NOT NULL DEFAULT 0,
  `beli` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`barang_id`, `nama_barang`, `jual_st`, `jual_kt`, `beli`) VALUES
(3, 'Pena Nevada', 6000, 63000, 0),
(4, 'Pewarna Greebel K', 132000, 0, 0),
(5, 'Kapas Kharisma', 48000, 0, 0),
(6, 'Buku Sidu 40 Biasa', 32000, 950000, 910000),
(7, 'Buku BM Campus', 75000, 0, 0),
(8, 'Pewarna Greebel B', 252000, 0, 0),
(10, 'Cukur MT2', 30000, 0, 0),
(11, 'Cukur MT3', 38000, 0, 0),
(12, 'Pena Pelna', 6000, 63000, 0),
(13, 'Krim Fair Set', 38000, 0, 0),
(14, 'Krim Garnier Set', 39000, 0, 0),
(15, 'Rexona Set', 24000, 0, 0),
(16, 'Gosok Gigi Brico', 25000, 0, 0),
(17, 'Gosok Gigi Formula', 34000, 0, 0),
(18, 'Kertas Kado Pack', 36000, 0, 0),
(19, 'Kertas Kado Gulung', 18000, 0, 0),
(20, 'Tusuk Gigi Murah', 27000, 0, 0),
(21, 'Tusuk Gigi Kingfish', 34000, 0, 0),
(22, 'Tusuk Gigi Pod B', 42000, 0, 0),
(23, 'Tusuk Gigi Pod K', 42000, 0, 0),
(24, 'Lem Lilin K', 12000, 65000, 0),
(25, 'Lem Lilin B', 24000, 65000, 0),
(26, 'Lipstik Dolby 151', 108000, 0, 0),
(27, 'Lipstik Hare', 24000, 0, 0),
(28, 'Bedak Marina Cpt', 102000, 0, 0),
(29, 'Cutter Yamata', 8000, 0, 0),
(30, 'Cutter Bening', 15000, 0, 0),
(31, 'Pinset Stainless', 30000, 0, 0),
(32, 'Pinset Papan', 12000, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
