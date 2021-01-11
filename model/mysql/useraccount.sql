-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 08:51 AM
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
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `nic` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `otherNames` varchar(100) DEFAULT NULL,
  `fullName` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `bloodGroup` varchar(50) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `addrss` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwrd` varchar(50) NOT NULL,
  `registerDate` datetime NOT NULL DEFAULT current_timestamp(),
  `verified` varchar(50) NOT NULL,
  `exam` varchar(50) NOT NULL,
  `trail` varchar(50) NOT NULL,
  `license` date DEFAULT NULL,
  `recover_code` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='User account details recorded in this table';

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`nic`, `surname`, `otherNames`, `fullName`, `gender`, `birthday`, `age`, `height`, `bloodGroup`, `vehicle`, `addrss`, `phone`, `email`, `passwrd`, `registerDate`, `verified`, `exam`, `trail`, `license`, `recover_code`) VALUES
('11', 'dilshan', 'nedfewd', 'kaveesha dilshan', 'Male', '2020-09-09', '18', '25', 'O Negative', 'Motor cycle(Auto)', '107', '0716553299', 'rubasinjayawardhana1999@gmail.com', '11', '2020-09-08 12:14:50', 'No', 'No', 'No', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`nic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
