-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 07:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Telephone` varchar(30) DEFAULT NULL,
  `UserName` varchar(10) DEFAULT NULL,
  `Password` text DEFAULT NULL COMMENT 'password is encrypted',
  `Identity` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `Name`, `Email`, `Telephone`, `UserName`, `Password`, `Identity`) VALUES
(1, 'Ester Kambungu', 'estkambungu@gmail.com', '0854290665', 'Ester01', '12345', 99090900241);

-- --------------------------------------------------------

--
-- Table structure for table `counsellors`
--

CREATE TABLE `counsellors` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Identity` bigint(20) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counsellors`
--

INSERT INTO `counsellors` (`id`, `Firstname`, `Lastname`, `Email`, `Identity`, `Contact`, `Username`, `Password`) VALUES
(2, 'Loide', 'Indongo', 'loide@gmail.com', 99040800247, '0817770099', 'Loide', 'loide2'),
(8, 'Senny', 'Simasiku', 'jane@gmail.com', 98030400222, '0812497554', 'Senny', 'senny');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `ID_Number` varchar(255) NOT NULL,
  `Telephone` varchar(30) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `Username` varchar(10) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `activationcode` int(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `Firstname`, `Lastname`, `Email`, `Birthday`, `ID_Number`, `Telephone`, `Country`, `Username`, `Password`, `activationcode`, `status`) VALUES
(9, 'Manuel', 'Vita', 'vitamanuel9@gmail.com', '2022-02-01', '19022020', '0818848277', 'Angola', 'mdtg', 'manuel', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Age` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `ZoomID` text DEFAULT NULL,
  `Date` text DEFAULT NULL,
  `Member_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Name`, `Age`, `Email`, `Contact`, `ZoomID`, `Date`, `Member_ID`) VALUES
(2, 'Manuel', '22', 'estkambungu@gmail.com', '0812631844', '2453rgt5t54', '2022-04-12T15:02', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
