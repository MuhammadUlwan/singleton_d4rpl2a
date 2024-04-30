-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2024 pada 17.56
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
-- Database: `valorant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `team` varchar(255) DEFAULT NULL,
  `gaji` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `player`
--

INSERT INTO `player` (`id`, `nama`, `team`, `gaji`) VALUES
(1, 'Aspas', 'Leviathan', 25000000.00),
(2, 'Aspas', 'Leviathan', 25000000.00),
(3, 'Forsaken', 'PRX', 20000000.00),
(4, 'Forsaken', 'PRX', 20000000.00),
(6, 'Boaster', 'Fnatic', 22000000.00),
(7, 'Boaster', 'Fnatic', 22000000.00);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
