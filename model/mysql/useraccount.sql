-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 08:31 AM
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
('11', '11', '11', '11', 'Female', '2020-06-10', '19', '11', 'B Positive', 'Motor cycle(Auto)', 'aa', '111111111111', 'shehanxperera@gmail.com', 'qq', '2020-06-27 12:01:31', 'No', 'No', 'No', NULL, NULL),
('12135465V', 'Rathnaweera', '', 'shehan perera', 'Female', '2020-05-12', '21', '34', 'O Negative', 'Motor cycle(Auto)', 'Sooriyapaluwa', '0714373382', 'kyasinrathnaweera@gmail.com', '123', '2020-05-01 20:35:32', 'yes', 'No', 'No', NULL, NULL),
('123', '23', '123', '234', 'Male', '2020-07-14', '34', '111', 'O Negative', 'Motor cycle(Auto)', '234', '234', 'shehanxperera@gmail.com', 'asdfghjkl', '2020-07-27 15:18:26', 'No', 'No', 'No', NULL, NULL),
('12345', 'perera', 'ghj', 'WEERAPPULIGE AKSHEN MADUMADA JAYAMANNA', 'Female', '2020-05-05', '20', '187', 'O Negative', 'Motor cycle(Auto)', 'bnm,.', '3456789', 'official.cyberspacetechnologies@gmail.com', 'jj', '2020-05-10 13:37:20', 'No', 'No', 'No', NULL, NULL),
('1234567', 'dfghjk', 'dfghjkss', 'eafea', 'Male', '2020-06-15', '22', '232', 'O Negative', 'Motor cycle(Auto)', '123245gdf', '3443', 'shehanxperera@gmail.com', '1234', '2020-06-27 10:44:13', 'No', 'No', 'No', NULL, NULL),
('21', '21', '21', '21', 'Male', '2020-06-30', '22', '222', 'O Negative', 'Motor cycle(Auto)', 'ddd', '222', 'shehanxperera@gmail.com', 'sh', '2020-06-27 11:53:44', 'No', 'No', 'No', NULL, NULL),
('22', '22', '22', '22', 'Male', '2020-06-08', '22', '222', 'O Negative', 'Motor cycle(Auto)', '2222', '111', 'shehanxperera@gmail.com', '11', '2020-06-27 11:59:49', 'No', 'No', 'No', NULL, NULL),
('3245273', 'perera', 'ghj', 'WEERAPPULIGE AKSHEN MADUMADA JAYAMANNA', 'Male', '2020-05-12', '33', '333', 'O Negative', 'Motor cycle(Auto)', 'fds', '09876543', 'official.cyberspacetechnologies@gmail.com', 'jkl', '2020-05-12 17:01:10', 'No', 'No', 'No', NULL, NULL),
('34567', '345678', '46789', '4567', 'Female', '2020-05-18', '567', '567', 'O Negative', 'Motor cycle(Auto)', '456789ijb', 'ghjk', 'hiroonperera@gmail.com', 'df', '2020-05-12 17:52:38', 'No', 'No', 'No', NULL, NULL),
('67890', 'dfgh', 'ds', 'dsaasd', 'Female', '2020-05-11', '33', '43', 'O Negative', 'Motor cycle(Auto)', 'fds', '34', 'fghj@fg', 'fd', '2020-05-10 17:24:08', 'No', 'No', 'No', NULL, NULL),
('971921323v', 'perera', 'shehan', 'DAVATAGE SHEHAN MADHUSANKA PERERA', 'Male', '1997-10-07', '11', '111', 'O Negative', 'Motor cycle(Auto)', 'aaa', '111111111111', 'shehanxperera@gmail.com', 'asd', '2020-05-15 09:31:20', 'Yes', 'No', 'No', NULL, 0),
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
