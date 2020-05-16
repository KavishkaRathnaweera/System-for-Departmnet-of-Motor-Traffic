-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 05:41 PM
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
-- Table structure for table `triallist`
--

CREATE TABLE `triallist` (
  `num` int(11) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `count` int(11) NOT NULL,
  `triallimit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `triallist`
--

INSERT INTO `triallist` (`num`, `nic`, `date`, `count`, `triallimit`) VALUES
(3, '12135465V', '2020-05-16', 3, 3),
(4, '12345', '2020-05-17', 1, 2),
(1, '123456', '2020-05-16', 1, 3),
(18, '34567', '2020-05-25', 1, 5),
(2, '6646846', '2020-05-16', 2, 3),
(17, '67890', '2020-05-17', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `triallist`
--
ALTER TABLE `triallist`
  ADD PRIMARY KEY (`nic`),
  ADD KEY `num` (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `triallist`
--
ALTER TABLE `triallist`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
