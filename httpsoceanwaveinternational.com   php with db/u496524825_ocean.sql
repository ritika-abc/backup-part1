-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2024 at 08:52 AM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u496524825_ocean`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(100) NOT NULL,
  `cat_name` text NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`, `slug`) VALUES
(1, 'Printed Box\r\n', 'PrintedBox\r\n'),
(2, 'Corrugated Boxes\r\n', 'CorrugatedBoxes\r\n'),
(3, 'Cartoon Box', 'CartoonBox'),
(4, 'Customize Box', 'CustomizeBox');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `pro_id` int(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_name` text NOT NULL,
  `description` text NOT NULL,
  `pro_use` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pro_id`, `cat_id`, `pro_name`, `description`, `pro_use`, `image`) VALUES
(1, 1, 'interior product', 'ddd', 'ddd', '1.jpg'),
(2, 1, 'Ice Roller', '2', '2', '2.jpg'),
(3, 4, 'Gift Box', '3', '3', '3.jpg'),
(4, 1, 'Snacks Box', '4', '4', '4.jpg'),
(6, 2, 'Corrugated Boxes', '6', '6', '6.jpg'),
(7, 2, 'Corrugated Boxes', '7', '7', '7.jpg'),
(8, 1, 'Sweets Box', '8', '8', '8.jpg'),
(9, 1, 'Sofa Leg', '', '', '9.jpg'),
(10, 1, 'furniture fittings', '', '', '10.jpg'),
(11, 1, 'Food box', '', '', '11.jpg\r\n'),
(12, 3, 'Cartoon Box', '', '', '13.jpg'),
(17, 4, 'Namkeen & Sweets Box', '', '', '43.jpg'),
(18, 4, 'sweets box', '', '', '42.jpg'),
(19, 4, 'Door Fittings', '', '', '41.jpg'),
(20, 1, 'Gift Box', '', '', '31.jpg'),
(21, 4, 'Game Box', '', '', 'gamebox.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
