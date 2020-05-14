-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 06:49 PM
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
-- Table structure for table `limitwait`
--

CREATE TABLE `limitwait` (
  `dates` date NOT NULL,
  `limits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `limitwait`
--

INSERT INTO `limitwait` (`dates`, `limits`) VALUES
('2020-05-01', 250),
('2020-06-01', 222),
('2020-08-06', 250),
('2020-08-06', 250),
('2020-08-06', 250),
('2020-08-06', 250),
('2020-08-06', 250),
('2020-08-06', 11111111),
('2020-08-06', 11111111),
('2020-08-06', 222222),
('2020-08-07', 71),
('2020-08-08', 45554545),
('2020-09-08', 45554545),
('2020-01-08', 45554545),
('2020-02-08', 45554545),
('2020-05-08', 45554545),
('2020-10-08', 45554545),
('2022-10-08', 123),
('2022-10-08', 123),
('2022-08-08', 123),
('2020-05-28', 123);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
