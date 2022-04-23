-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2022 at 10:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rosik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_126`
--

CREATE TABLE `tbl_126` (
  `id_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim_mhs` varchar(15) NOT NULL,
  `alamat_mhs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_126`
--

INSERT INTO `tbl_126` (`id_mhs`, `nama_mhs`, `nim_mhs`, `alamat_mhs`) VALUES
(113, 'Ahmad Rosyihuddin', '200411100126', 'Gresik'),
(114, 'Teguh Setiya', '200411100143', 'Lamongan'),
(115, 'Ahmad Fanani', '200411100283', 'Jombang'),
(116, 'Yoga Tirta Permana', '200411100132', 'Mojokerto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_126`
--
ALTER TABLE `tbl_126`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_126`
--
ALTER TABLE `tbl_126`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
