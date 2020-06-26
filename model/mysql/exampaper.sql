-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 07:24 AM
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
-- Table structure for table `exampaper`
--

CREATE TABLE `exampaper` (
  `idnumber` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answere1` varchar(500) NOT NULL,
  `answere2` varchar(500) NOT NULL,
  `answere3` varchar(500) NOT NULL,
  `answere4` varchar(500) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exampaper`
--

INSERT INTO `exampaper` (`idnumber`, `question`, `answere1`, `answere2`, `answere3`, `answere4`, `correct`) VALUES
(1, 'Question impl 1', 'answere1impl', 'answere2impl', 'answere3impl', 'answere4impl', 'A2'),
(2, 'Question impl 1cvdssssssssss \r\n ssssssssssssssssssss ssffffffffff ffffffffffffffffffffff fffffffffffffffff ffffffffffffffffff ffffffffffffffffff ffffffffffffffffff fffffffffffffffffff ffffffffffffffff ffffffffffffffffff fffffffffffffff fffffffffffffffff', 'answere1impl', 'answere2impl', 'answere3impl', 'answere4impl', 'A2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exampaper`
--
ALTER TABLE `exampaper`
  ADD PRIMARY KEY (`idnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exampaper`
--
ALTER TABLE `exampaper`
  MODIFY `idnumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
