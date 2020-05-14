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
-- Table structure for table `limitexam`
--

CREATE TABLE `limitexam` (
  `dates` date NOT NULL,
  `limits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `limitexam`
--

INSERT INTO `limitexam` (`dates`, `limits`) VALUES
('2020-12-20', 44),
('2020-12-20', 44),
('2020-12-21', 44),
('2020-12-23', 222),
('2020-12-23', 44444),
('2020-12-23', 44444),
('2020-12-25', 300),
('2020-12-25', 0),
('2020-12-25', 0),
('2020-12-25', 24242),
('2020-12-25', 24242),
('2020-12-25', 44444),
('2020-12-25', 44444),
('2020-12-25', 44444),
('2020-12-25', 44444),
('2020-12-25', 44444),
('2020-12-25', 44444),
('2020-08-25', 44444),
('2018-08-25', 300),
('2020-05-21', 300);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
