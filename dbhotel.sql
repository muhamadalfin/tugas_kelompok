-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 06:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `no_kamar` varchar(10) NOT NULL,
  `type` enum('king','double','single','queen') NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `no_kamar`, `type`, `harga`) VALUES
(1, 'A 01', 'king', 3000000),
(2, 'A 02', 'king', 3000000),
(3, 'A 03', 'king', 3000000),
(4, 'A 04', 'king', 3000000),
(5, 'A 05', 'king', 3000000),
(6, 'B 01', 'double', 4000000),
(7, 'B 02', 'double', 4000000),
(8, 'B 03', 'double', 4000000),
(9, 'B 04', 'double', 4000000),
(10, 'B 05', 'double', 4000000),
(11, 'C 01', 'single', 2000000),
(12, 'C 02', 'single', 2000000),
(13, 'C 03', 'single', 2000000),
(14, 'C 04', 'single', 2000000),
(15, 'C 05', 'single', 2000000),
(16, 'D 01', 'queen', 6000000),
(17, 'D 02', 'queen', 6000000),
(18, 'D 03', 'queen', 6000000),
(19, 'B 04', 'queen', 6000000),
(20, 'D 05', 'queen', 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `alamat`, `tlp`, `ktp`) VALUES
(1, 'Ahmad Zahmaludin', 'jln merjosari no 12, Kota Bandung', '08182662125', '1111882631267128'),
(2, 'Endah Permatasari', 'jln apel no 19, Kota Surabaya', '08123445121', '1110222656652187'),
(3, 'Adhelia', 'jl. sejahtera no 01, Kota Karawang', '03124567892', '98712111121221127');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_pengunjung`, `id_kamar`, `tgl_masuk`, `tgl_keluar`) VALUES
(1, 1, 1, '2020-02-28', '0000-00-00'),
(3, 2, 4, '2020-03-01', '0000-00-00'),
(4, 3, 6, '2020-03-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','manager') NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `tlp`, `alamat`) VALUES
(1, 'admin', 'admin', 'admin', '0', 'jln mawar no 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `kamar_fk` (`id_kamar`),
  ADD KEY `pengunjung_fk` (`id_pengunjung`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `kamar_fk` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`),
  ADD CONSTRAINT `pengunjung_fk` FOREIGN KEY (`id_pengunjung`) REFERENCES `pengunjung` (`id_pengunjung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
