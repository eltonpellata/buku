-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 10:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tbbuku`
--

CREATE TABLE `tbbuku` (
  `id` int(11) NOT NULL,
  `id_nama` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `notlp` varchar(15) NOT NULL,
  `keperluan` text NOT NULL,
  `qrcode` text NOT NULL,
  `id_tglb` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbbuku`
--

INSERT INTO `tbbuku` (`id`, `id_nama`, `jk`, `jabatan`, `alamat`, `notlp`, `keperluan`, `qrcode`, `id_tglb`) VALUES
(1, 'apa saja', 'laki-laki', 'apa saja', 'apa saja', '21381', 'ksmkdmskldmskls\r\nskfds fdsf\r\nsdfkds\r\n fodsnfdslFdsfsd', '2021-12-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbuku`
--
ALTER TABLE `tbbuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
