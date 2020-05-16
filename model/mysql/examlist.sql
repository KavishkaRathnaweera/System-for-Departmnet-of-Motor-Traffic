-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 09:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `examlist`
--

CREATE TABLE `examlist` (
  `num` int(11) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `count` int(11) NOT NULL,
  `examlimit` int(11) NOT NULL,
  `attendance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examlist`
--

INSERT INTO `examlist` (`num`, `nic`, `fullname`, `dates`, `count`, `examlimit`, `attendance`) VALUES
(1, '990122164V', 'Kavishka Rathnaweera', '2020-05-15', 10, 100, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examlist`
--
ALTER TABLE `examlist`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `num` (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examlist`
--
ALTER TABLE `examlist`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
