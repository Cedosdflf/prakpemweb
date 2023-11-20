-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2023 pada 05.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `NIM` bigint(10) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ProgramStudi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`NIM`, `NAMA`, `ProgramStudi`) VALUES
(119111001, 'nadin', 'dkv'),
(119111002, 'jaky', 'dkv'),
(119111003, 'uus', 'dkv'),
(119111004, 'gading', 'dkv'),
(119111006, 'eminem', 'dkv'),
(119111007, 'aan', 'dkv'),
(119111008, 'anggi', 'dkv'),
(119111010, 'anton', 'dkv'),
(119111011, 'bena', 'dkv'),
(119140001, 'bunga azoya', 'if'),
(119140095, 'agung', 'if'),
(119140195, 'beni cahyadi', 'if'),
(119220001, 'razi', 'pwk'),
(119220002, 'ratu', 'pwk'),
(119220003, 'ajeng', 'pwk'),
(119220004, 'bagas', 'pwk'),
(119220005, 'kevin', 'pwk'),
(119220006, 'andika', 'pwk'),
(119220007, 'leo', 'pwk'),
(119220008, 'sely', 'pwk');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `NIM` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119220193;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
