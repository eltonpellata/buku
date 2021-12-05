-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2021 pada 00.58
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbuku`
--

CREATE TABLE `tbbuku` (
  `id` int(11) NOT NULL,
  `id_nama` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notlp` varchar(15) NOT NULL,
  `keperluan` text NOT NULL,
  `qrcode` varchar(50) NOT NULL,
  `id_tglb` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbbuku`
--

INSERT INTO `tbbuku` (`id`, `id_nama`, `jk`, `jabatan`, `alamat`, `notlp`, `keperluan`, `qrcode`, `id_tglb`) VALUES
(1, 'apa saja', 'laki-laki', 'apa saja', 'apa saja', '21381', 'ksmkdmskldmskls\r\nskfds fdsf\r\nsdfkds\r\n fodsnfdslFdsfsd', '', '2021-12-07'),
(20, 'asdca', 'laki-laki', 'lll', 'llll', '6575', 'jhkmh', 'ggg', '2021-12-06'),
(21, 'sadca', 'laki-laki', 'ca', 'adc', '34143', 'adxa', '', '2021-12-06'),
(22, 'dsdc', 'laki-laki', 'dcs', 'dasfcs', '34234', 'dfs', 'dsdc.png', '2021-12-05'),
(23, 'elton', 'laki-laki', 'koko', 'mamat', '33424', 'efweef', 'elton.png', '2021-12-06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbbuku`
--
ALTER TABLE `tbbuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
