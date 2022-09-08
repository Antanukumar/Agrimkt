-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 04:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrimkt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `cdate`) VALUES
(1, 'admin@gmail.com', '$2y$10$SQ/WT29/VlA5YG3ygGbe6.pPMs1.iLFOfRDI9eh/ImWh6.RHOJ0n.', '2022-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `agriproduct`
--

CREATE TABLE `agriproduct` (
  `id` int(11) NOT NULL,
  `prodid` varchar(10) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agriproduct`
--

INSERT INTO `agriproduct` (`id`, `prodid`, `prod_name`, `cdate`) VALUES
(1, '28921', 'Rice', '2022-04-12'),
(2, '33301', 'Wheat ', '2022-04-12'),
(3, '32251', 'Chanadal', '2022-04-12'),
(4, '58330', 'Onion', '2022-04-12'),
(5, '51950', 'Potato', '2022-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `state` int(100) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mandi`
--

CREATE TABLE `mandi` (
  `id` int(11) NOT NULL,
  `mcode` varchar(10) NOT NULL,
  `district` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mandi`
--

INSERT INTO `mandi` (`id`, `mcode`, `district`, `name`, `contact_person`, `phone`, `address`, `cdate`) VALUES
(1, '24867', 'Ranchi', ' Ranchi Agi Mandi', 'Mr. Pravin Munda', '9988776655', 'Piska More, Ratu Road , Ranchi', '2022-04-12'),
(2, '09130', 'Dhanbad', ' Dhanbad Agri Mandi', 'Law Kumar', '8899776655', 'Main Road, Dhanbad', '2022-04-12'),
(3, '21525', 'Hazaribagh', ' Hazaribagh Agri Mandi', 'Mr. Anshuman Kumar', '7788996655', 'Near Bus Stand , Hazaribagh', '2022-04-12'),
(4, '47312', 'Jamshedpur ', ' Jamshedpur Agri Mandi', 'Mr Pusp Lata', '6677889955', 'Dimna Chowk, Jamshedput', '2022-04-12'),
(5, '09149', 'Bokaro', ' Bokaro Agri Mandi', 'Mr Hemant Thakur', '5566778899', 'Bada Bazar , Bokaro', '2022-04-12'),
(6, '50606', 'Dumka', ' Dumka Agri Mandi', 'Mr Karu Soren', '775566899', 'Near Bus Stand, Dumka', '2022-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `price_table`
--

CREATE TABLE `price_table` (
  `id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `mandi` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price_table`
--

INSERT INTO `price_table` (`id`, `product`, `mandi`, `price`, `pdate`) VALUES
(1, '28921', '24867', ' 	2533.00', '2022-04-12'),
(2, '33301', '09130', ' 2170.00', '2022-04-12'),
(3, '28921', '09130', ' 2300', '2022-04-12'),
(4, '28921', '21525', ' 2350', '2022-04-12'),
(5, '28921', '47312', ' 2600', '2022-04-12'),
(6, '28921', '09149', ' 2400', '2022-04-12'),
(7, '28921', '50606', ' 2200', '2022-04-12'),
(8, '33301', '24867', ' 2170', '2022-04-12'),
(9, '33301', '09130', ' 2300', '2022-04-12'),
(10, '33301', '21525', ' 2100', '2022-04-12'),
(11, '33301', '47312', ' 2400', '2022-04-12'),
(12, '33301', '09149', ' 2000', '2022-04-12'),
(13, '33301', '50606', ' 1900', '2022-04-12'),
(14, '32251', '24867', ' 6000', '2022-04-13'),
(15, '32251', '09130', ' 6500', '2022-04-13'),
(16, '32251', '21525', ' 6300', '2022-04-13'),
(17, '58330', '24867', ' 1000', '2022-04-13'),
(18, '58330', '09130', ' 950', '2022-04-13'),
(19, '51950', '24867', ' 800', '2022-04-13'),
(20, '51950', '09130', ' 850', '2022-04-13'),
(21, '51950', '24867', ' 700', '2022-04-13'),
(22, '51950', '21525', ' 650', '2022-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agriproduct`
--
ALTER TABLE `agriproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mandi`
--
ALTER TABLE `mandi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_table`
--
ALTER TABLE `price_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agriproduct`
--
ALTER TABLE `agriproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mandi`
--
ALTER TABLE `mandi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `price_table`
--
ALTER TABLE `price_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
