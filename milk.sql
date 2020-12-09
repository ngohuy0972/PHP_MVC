-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 05:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milk`
--

-- --------------------------------------------------------

--
-- Table structure for table `milk_company`
--

CREATE TABLE `milk_company` (
  `id` int(11) NOT NULL,
  `MaHS` varchar(5) NOT NULL,
  `NameHS` varchar(30) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milk_company`
--

INSERT INTO `milk_company` (`id`, `MaHS`, `NameHS`, `Address`, `PhoneNumber`, `Email`) VALUES
(4, 'VNM1', 'vinamilk1', 'Ha Noi1', '01234567891', 'vinamilk@gmail.com'),
(5, 'TH', 'TH true milk', 'Ha Noi', '0980437240', 'thtruemilk@gmail.com'),
(6, 'CGHL', 'CGHL', 'da nang', '0856787657', 'huyngoit99@gmail.com'),
(7, 'OT', 'Ong Tho', 'Ha Noi', '09214710491', 'ongtho@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `milk_info`
--

CREATE TABLE `milk_info` (
  `id` int(11) NOT NULL,
  `NameMilk` varchar(50) NOT NULL,
  `NameHS` varchar(50) NOT NULL,
  `KindMilk` varchar(50) NOT NULL,
  `WeightMilk` varchar(30) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Ingradient` varchar(255) NOT NULL,
  `Benefit` varchar(255) NOT NULL,
  `ImageMilk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milk_info`
--

INSERT INTO `milk_info` (`id`, `NameMilk`, `NameHS`, `KindMilk`, `WeightMilk`, `Price`, `Ingradient`, `Benefit`, `ImageMilk`) VALUES
(35, 'nutifood abc', 'nutifood', '1', '1', '1', '1', '1', '103265930_2343877805915982_1398937777927489404_n.jpg'),
(36, '2', '2', '2', '2', '2', '2', '2', '103265930_2343877805915982_1398937777927489404_n.jpg'),
(37, '3', '3', '3', '3', '3', '3', '3', '103265930_2343877805915982_1398937777927489404_n.jpg'),
(39, '5', '5', '5', '5', '5', '5', '5', 'growplus.jpg'),
(40, '4', '4', '4', '4', '4', '4', '4', 'growplus.jpg'),
(41, '6', '6', '6', '6', '6', '6', '6', 'growplus.jpg'),
(42, '7', '7', '7', '7', '7', '7', '7', 'growplus.jpg'),
(43, '8', '8', '8', '8', '8', '8', '8', 'growplus.jpg'),
(44, '9', '9', '9', '9', '9', '9', '9', 'growplus.jpg'),
(45, '10', '10', '10', '1', '01', '0', '0', 'growplus.jpg'),
(46, '10', '10', '10', '1', '01', '0', '0', 'growplus.jpg'),
(48, '09', '09', '09', '0', '90', '9', '09', 'growplus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `milk_user`
--

CREATE TABLE `milk_user` (
  `id` int(11) NOT NULL,
  `MaKH` varchar(10) NOT NULL,
  `NameKH` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milk_user`
--

INSERT INTO `milk_user` (`id`, `MaKH`, `NameKH`, `Gender`, `Address`, `PhoneNumber`, `Email`) VALUES
(3, 'kh01', 'Ngo Van Huy', 'male', '556 Nui Thanh st , Hai Chau district', '+84856787657', 'huyngoit99@gmail.com'),
(5, 'kh03', 'Ngo Van Huy', 'male', '556 Nui Thanh st , Hai Chau district', '+84856787657', 'huyngoit99@gmail.com'),
(6, '$maKH1', '2', 'female', '12', '12', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `milk_company`
--
ALTER TABLE `milk_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milk_info`
--
ALTER TABLE `milk_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milk_user`
--
ALTER TABLE `milk_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `milk_company`
--
ALTER TABLE `milk_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `milk_info`
--
ALTER TABLE `milk_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `milk_user`
--
ALTER TABLE `milk_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
