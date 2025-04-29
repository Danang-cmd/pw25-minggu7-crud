-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jun 2022 pada 16.07
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Structure of table `crud_044`
--

CREATE TABLE `crud_044` (
  `id_peserta` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud_044`
--

INSERT INTO `crud_044` (`id_peserta`, `nama`, `sekolah`, `jurusan`, `no_hp`, `alamat`) VALUES
(1, 'Rinrinne', 'SMA 1 Chelyabinsk', 'IPA', '08212121212', 'Ulitsa Vasenko'),
(3, 'Dave D. Billion', 'Akademi Crypto Minsk', 'Crypto', '081212312', 'Azyaryshcha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `crud_044`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `crud_044`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
