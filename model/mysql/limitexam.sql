-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 09:45 AM
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
-- Table structure for table `limitexam`
--

CREATE TABLE `limitexam` (
  `num` int(11) NOT NULL,
  `dates` date NOT NULL,
  `limits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `limitexam`
--

INSERT INTO `limitexam` (`num`, `dates`, `limits`) VALUES
(1, '2020-12-20', 44),
(2, '2020-12-20', 44),
(3, '2020-12-21', 44),
(4, '2020-12-23', 222),
(5, '2020-12-23', 44444),
(6, '2020-12-23', 44444),
(7, '2020-12-25', 300),
(8, '2020-12-25', 0),
(9, '2020-12-25', 0),
(10, '2020-12-25', 24242),
(11, '2020-12-25', 24242),
(12, '2020-12-25', 44444),
(13, '2020-12-25', 44444),
(14, '2020-12-25', 44444),
(15, '2020-12-25', 44444),
(16, '2020-12-25', 44444),
(17, '2020-12-25', 44444),
(18, '2020-08-25', 44444),
(19, '2018-08-25', 300),
(20, '2020-05-21', 300),
(21, '2020-05-22', 0),
(22, '2020-06-01', 2),
(23, '2020-07-01', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `limitexam`
--
ALTER TABLE `limitexam`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `limitexam`
--
ALTER TABLE `limitexam`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
