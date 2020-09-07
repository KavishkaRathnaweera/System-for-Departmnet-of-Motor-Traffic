-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 07:51 AM
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
-- Table structure for table `exampaper`
--

CREATE TABLE `exampaper` (
  `number` int(11) NOT NULL,
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

INSERT INTO `exampaper` (`number`, `question`, `answere1`, `answere2`, `answere3`, `answere4`, `correct`) VALUES
(1, 'What is my name?', 'Kavesha', 'shehan', 'rahal', 'rathne', 'A2'),
(2, 'what is kadawatha guys name?', 'shehan', 'malaka', 'rathne', 'kavisha', 'A3'),
(3, 'what is my home town?', 'Gampaha', 'Rathnapura', 'Minuwangoda', 'Kegalle', 'A1'),
(4, 'What is my girl friend\'s nick name?', 'suukiri', 'ela kiri', 'pitikiri', 'pan piti', 'A1'),
(5, 'What is the highest railway statio in Sri Lanka?', 'Gampaha', 'Matara', 'Pattipola', 'Nugegoda', 'A3'),
(6, 'What is the highest mountain in Sri Lanka?', 'Pidurauthalagala', 'Sigiriya', 'Hanthana', 'Samanala Kanda', 'A1'),
(7, 'What is the highest waterfall in the world?', 'Nayagara', 'Lakshapana', 'Veenus', 'Sea Walse', 'A1'),
(8, 'What is the longest river in Sri Lanka?', 'Nilwala', 'Gin', 'Mahawali', 'Kalu', 'A3'),
(9, 'Where the sun rise from?', 'East', 'West', 'North', 'South', 'A1'),
(10, 'Where sun set from?', 'West', 'East', 'North', 'South', 'A1'),
(11, 'How many family members I have?', '2', '4', '88', '6', 'A4'),
(12, 'What is the capital of Si Lanka?', 'Colombo', 'Sri Jayawardenapura Kotte', 'Kandy', 'Anuradhapura', 'A1'),
(13, 'How much commandments we have?', '2', '4', '8', '10', 'A4'),
(14, 'How many Arc Angles we have?', '3', '5', '7', '9', 'A3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exampaper`
--
ALTER TABLE `exampaper`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exampaper`
--
ALTER TABLE `exampaper`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
