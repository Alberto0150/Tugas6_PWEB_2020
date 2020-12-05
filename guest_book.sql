-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 01:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guest_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `A_NAMA` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `A_USERNAME` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `A_PASSWORD` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_NAMA`, `A_USERNAME`, `A_PASSWORD`) VALUES
(1, 'ADMIN 1111', 'ADMIN1', 'ADMIN123'),
(2, 'ADMIN 22', 'ADMIN2', 'ADMIN456'),
(3, 'ADMIN BERTO', 'ADMINBERTO', 'SAYABERTO'),
(4, 'bambang', 'adminbackup', '603799b6293fa10e0be1ac0bd21b293b');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `G_ID` int(11) NOT NULL,
  `G_NAMA` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `G_KTP` char(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `G_TELP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `G_JENIS_BAYAR` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `G_BIAYA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`G_ID`, `G_NAMA`, `G_KTP`, `G_TELP`, `G_JENIS_BAYAR`, `G_BIAYA`) VALUES
(1, 'ALBERT', '123456789012345', '08123912830', 'CASH', 150000),
(2, 'BAMBANG', '123456789112346', '0812391412', 'CASH', 200000),
(3, 'TONI', '123456780812345', '08175712830', 'CASH', 170000),
(4, 'ARTUR', '123456789012765', '08123912345', 'CASH', 100000),
(5, 'LUNA', '123456789076345', '08123910000', 'DEBIT BCA', 300000),
(6, 'RULAN', '123456789112346', '08123857492', 'CASH', 400000),
(8, 'ARMANTO', '123456789012765', '081231U311411', 'CASH', 350000),
(9, 'Alberto Sanjaya', '1234567891234234', '012345665778', 'DEBIT BNI', 123000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`G_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `G_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
