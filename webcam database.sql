-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 11:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcam`
--
CREATE DATABASE IF NOT EXISTS `webcam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webcam`;

-- --------------------------------------------------------

--
-- Table structure for table `employeedata`
--

CREATE TABLE `employeedata` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Phone` bigint(12) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Gender` text NOT NULL,
  `MaritalStatus` text NOT NULL,
  `JobProfile` varchar(30) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `EmpID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedata`
--

INSERT INTO `employeedata` (`FirstName`, `LastName`, `Phone`, `Email`, `Gender`, `MaritalStatus`, `JobProfile`, `Address`, `EmpID`) VALUES
('', '', 0, '', 'male', 'married', 'Human Resource', '', '5ea4030d6fca2'),
('', '', 0, '', 'male', 'married', 'Human Resource', '', '5ea4034bf30d9'),
('ritu', '', 76767676767, '', 'male', 'married', 'Human Resource', '', '5ea403c810f1d'),
('sawan', 'chhipa', 7473284783, 'chhipa.sawan12@gmail.com', 'male', 'married', 'Human Resource', '', '5ea4042414471');

-- --------------------------------------------------------

--
-- Table structure for table `snapshot`
--

CREATE TABLE `snapshot` (
  `Id` int(11) NOT NULL,
  `Image` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeedata`
--
ALTER TABLE `employeedata`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `snapshot`
--
ALTER TABLE `snapshot`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `snapshot`
--
ALTER TABLE `snapshot`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
