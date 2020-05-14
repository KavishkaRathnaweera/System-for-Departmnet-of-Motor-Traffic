-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 09:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

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
('12135465V', 'Rathnaweera', '', 'shehan perera', 'Female', '2020-05-12', '21', '34', 'O Negative', 'Motor cycle(Auto)', 'Sooriyapaluwa', '0714373382', 'kyasinrathnaweera@gmail.com', '123', '2020-05-01 20:35:32', 'No', 'No', 'No', NULL, NULL),
('12345', 'perera', 'ghj', 'WEERAPPULIGE AKSHEN MADUMADA JAYAMANNA', 'Female', '2020-05-05', '20', '187', 'O Negative', 'Motor cycle(Auto)', 'bnm,.', '3456789', 'official.cyberspacetechnologies@gmail.com', 'jj', '2020-05-10 13:37:20', 'No', 'No', 'No', NULL, NULL),
('20001234567', 'perera', 'hiroon', 'Davatage hiroon Madhranga perera', 'Male', '2000-10-12', '20', '170', 'O Negative', 'Motor Tricycle,Motor Vehicle(Auto)', '185/1,kopihena weliveriya', '09876543', 'shehanxperera@gmail.com', '12345', '2020-05-10 18:32:25', 'No', 'No', 'No', NULL, 14880),
('3245273', 'perera', 'ghj', 'WEERAPPULIGE AKSHEN MADUMADA JAYAMANNA', 'Male', '2020-05-12', '33', '333', 'O Negative', 'Motor cycle(Auto)', 'fds', '09876543', 'official.cyberspacetechnologies@gmail.com', 'jkl', '2020-05-12 17:01:10', 'No', 'No', 'No', NULL, NULL),
('34567', '345678', '46789', '4567', 'Female', '2020-05-18', '567', '567', 'O Negative', 'Motor cycle(Auto)', '456789ijb', 'ghjk', 'hiroonperera@gmail.com', 'df', '2020-05-12 17:52:38', 'No', 'No', 'No', NULL, NULL),
('67890', 'dfgh', 'ds', 'dsaasd', 'Female', '2020-05-11', '33', '43', 'O Negative', 'Motor cycle(Auto)', 'fds', '34', 'fghj@fg', 'fd', '2020-05-10 17:24:08', 'No', 'No', 'No', NULL, NULL),
('971921323v', 'perera', 'anda', 'DAVATAGE SHEHAN MADHUSANKA PERERA', 'Male', '1997-05-11', '20', '187', 'O Negative', 'Motor cycle(Auto)', 'rtyuiolkjh', '3456789', 'shehanxperera@gmail.com', 'asdfghjkl', '2020-05-07 12:49:50', 'yes', 'No', 'No', NULL, 14880),
('990122164V', 'Rathnaweera', '', 'sadun perera', 'Male', '2020-05-19', '21', '34', 'O Negative', 'Motor cycle(Auto)', 'Sooriyapaluwa', '0714373382', 'kyasinrathnaweera@gmail.com', '123', '2020-05-03 18:47:27', 'No', 'No', 'No', NULL, NULL);

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
