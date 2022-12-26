-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2022 pada 03.40
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_induk` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `no_induk`, `email`, `password`) VALUES
(1, 'EZRA MAE CRISNAWENI', '3411201084', 'ezramaecrisnaweni@gmail.com', '123456'),
(3, 'Ezra Mae', '3410201084', 'ezrachanyeol61@gmail.com', '$2y$10$ved/MUnYKb1re15pex98h.osQsoJ/LzDMACFqJsINqldehZPIvQJ.'),
(4, 'Ezra Mae', '1234567890', 'ezramae@gmail.com', '$2y$10$6OYS1HLGJXlQ502YkQLu6.EkKwlAhBcN2CrxPU.8f9zghzVivJuuq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
