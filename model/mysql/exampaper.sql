-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 06:46 AM
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
(1, 'When you change houses, you must inform your nearest RTO about the change in your address within:', '30 Days', '90 Days', '1 Year', 'No need to inform', 'A1'),
(2, 'On a one-way road, you should not:', 'Drive in the reverse gear', 'Park on the way', 'Over-speed', 'Honk a lot', 'A1'),
(3, 'How do you know that a vehicle is a transport vehicle?', 'By seeing the number plate of the vehicle.', 'By the driver’s license.', 'By the make of the vehicle.', 'By the Board shown in vehicle.', 'A1'),
(4, 'Overtaking is allowed only?', 'From the right side', 'From the leftside', 'After honking 3 times', 'Because of headlight.', 'A1'),
(5, 'While travelling uphill, which vehicle has the right-of-way over others?', 'Any vehicle travelling uphill', 'The vehicle which came first', 'Longest vehicle', 'Largest vehicle', 'A1'),
(6, 'Your vehicle faces a railway station which is unguarded and you want to move, you must', 'Stop your motor vehicle on the road’s left side, move towards the track and check whether there are any trains coming before crossing', 'Keep honking and cross the station fast', 'Wait patiently till l the train pass', 'Go quickly', 'A1'),
(7, 'The driver of any vehicle is allowed to overtake', 'When the driver in front gives the right indication to overtake', 'When there is a broad road', 'Driving on a hilly road', 'When there is double line', 'A1'),
(8, 'Red signal in traffic implies', 'Please stop your vehicle', 'Move with caution', 'Please slow down your vehicle', 'Go along', 'A1'),
(9, 'Overtaking will be forbidden in case', 'All mentioned as below', 'Roads look greasy', 'Dangerous to approaching traffic', 'When you overtake from right side', 'A1'),
(10, 'When your car is halted on one side of the road at night, then', 'All as mentioned below', 'Parking signal must be used', 'The vehicle must be under lock and key', 'Parking should be in right place', 'A1'),
(11, 'You are approaching a fine bridge and you see there is one more vehicle is entering the bridge from the opposite side. What will be your action?', 'You need to wait till the other car pass the bridge before you move on', 'Switch on the headlight and start crossing the bridge', 'Drive fast so that you can first pass the bridge', 'Do not drive fast', 'A1'),
(12, 'Parking in front of a hospital is', 'Not correct', 'Correct', 'Depends on the situation', 'None of above', 'A1'),
(13, 'If a driver sees the sign for ‘slippery road ahead’, he/she must', 'Change gear and reduce speed', 'Apply brake but proceed in the same speed', 'Drive faster', 'None of above', 'A1'),
(14, 'Overtaking is prohibited when', 'Roads are slippery', 'Poses danger to oncoming traffic', 'All of the above', 'None of above', 'A1'),
(15, 'Overtaking when the vehicle approaches a bend is', 'Not allowed', 'Allowed', 'Allowed with caution', 'None of above', 'A1'),
(16, 'Drunken driving is', 'Prohibited at all times', 'Allowed during the day', 'Allowed at night', 'None of above', 'A1'),
(17, 'Honking is prohibited near', 'Hospitals, Court of Law', 'Places of religious worship such as Temple, Mosque and Churches', 'Near Police Stations', 'None of above', 'A1'),
(18, 'Rear view mirror is utilized for', 'Watching traffic that is approaching from behind', 'Watching back seat passengers', 'Car decor', 'None of above', 'A1'),
(19, 'Boarding in and alighting from vehicles when it is in motion is', 'Prohibited in all vehicles', 'Allowed in buses', 'Allowed in autos', 'None of above', 'A1'),
(20, 'Mobile phones should not be used', 'While driving a vehicle', 'In office', 'At home', 'None of above', 'A1'),
(21, 'Overtaking is not allowed when', 'When the road ahead is not visible clearly', 'When the road is wide enough', 'The road has no potholes', 'None of above', 'A1'),
(22, 'Pedestrians are not allowed to cross the road close to stopped vehicles or near sharp bends because', 'Drivers of approaching vehicles may not be able to see them', 'It is inconvenient to other pedestrians', 'It is an inconvenience to oncoming vehicles', 'None of above', 'A1'),
(23, 'Records needed for private vehicles are', 'Insurance Certificate, Registration Certificate, Driving License and Tax Token', 'G.C.R, Insurance Certificate, Registration Certificate', 'Permit, Trip Sheet, Registration Certificate', 'None of above', 'A1'),
(24, 'Validity of Pollution Under Control Certificate is', '6 months', '1 year', '2 years', 'None of above', 'A1'),
(25, 'Minimum age for availing a license to drive a motor vehicle without gear is', '16 years', '21 years', '18 years', 'None of above', 'A1');

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
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
