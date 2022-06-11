-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 01:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `ID_CUSTOMER` int(11) NOT NULL,
  `NO_MEJA` char(5) DEFAULT NULL,
  `NAMA_USER` varchar(50) DEFAULT NULL,
  `STATUS_USER` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_meja`
--

CREATE TABLE `tb_meja` (
  `NO_MEJA` char(5) NOT NULL,
  `STATUS_MEJA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `ID_MENU` int(11) NOT NULL,
  `NAMA_MENU` varchar(50) DEFAULT NULL,
  `DESKRIPSI_MENU` varchar(255) DEFAULT NULL,
  `JENIS_MENU` varchar(50) DEFAULT NULL,
  `HARGA_MENU` varchar(50) DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL,
  `foto_menu` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `ID_ORDER` int(11) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `ID_CUSTOMER` int(11) DEFAULT NULL,
  `ID_MENU` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_orderdetail`
--

CREATE TABLE `tb_orderdetail` (
  `ID_ORDER` int(11) DEFAULT NULL,
  `JMLH_ORDER` int(11) DEFAULT NULL,
  `TOTAL_HARGA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `ID_PEMBAYARAN` int(11) NOT NULL,
  `ID_CUSTOMER` int(11) DEFAULT NULL,
  `TGL_PEMBAYARAN` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `USERNAME` varchar(100) NOT NULL,
  `PASWORD` varchar(20) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `LEVEL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`ID_CUSTOMER`),
  ADD KEY `FK_DI_PESAN` (`NO_MEJA`);

--
-- Indexes for table `tb_meja`
--
ALTER TABLE `tb_meja`
  ADD PRIMARY KEY (`NO_MEJA`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`ID_MENU`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`ID_ORDER`),
  ADD KEY `FK_DAPAT_DI_AMBIL` (`ID_MENU`),
  ADD KEY `FK_DAPAT_MEMESAN` (`ID_CUSTOMER`),
  ADD KEY `FK_DAPAT_MENGAKSES` (`USERNAME`);

--
-- Indexes for table `tb_orderdetail`
--
ALTER TABLE `tb_orderdetail`
  ADD KEY `FK_MELIHAT_DETAILORDER` (`ID_ORDER`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`),
  ADD KEY `FK_DAPAT_MEMBAYAR` (`ID_CUSTOMER`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD CONSTRAINT `FK_DI_PESAN` FOREIGN KEY (`NO_MEJA`) REFERENCES `tb_meja` (`NO_MEJA`);

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `FK_DAPAT_DI_AMBIL` FOREIGN KEY (`ID_MENU`) REFERENCES `tb_menu` (`ID_MENU`),
  ADD CONSTRAINT `FK_DAPAT_MEMESAN` FOREIGN KEY (`ID_CUSTOMER`) REFERENCES `tb_customer` (`ID_CUSTOMER`),
  ADD CONSTRAINT `FK_DAPAT_MENGAKSES` FOREIGN KEY (`USERNAME`) REFERENCES `tb_user` (`USERNAME`);

--
-- Constraints for table `tb_orderdetail`
--
ALTER TABLE `tb_orderdetail`
  ADD CONSTRAINT `FK_MELIHAT_DETAILORDER` FOREIGN KEY (`ID_ORDER`) REFERENCES `tb_order` (`ID_ORDER`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `FK_DAPAT_MEMBAYAR` FOREIGN KEY (`ID_CUSTOMER`) REFERENCES `tb_customer` (`ID_CUSTOMER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
