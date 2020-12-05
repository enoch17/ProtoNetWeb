-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 10:21 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prontonet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bundles_tb`
--

CREATE TABLE `bundles_tb` (
  `BundleId` varchar(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `BundleSize` varchar(20) NOT NULL,
  `Duration` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers_tb`
--

CREATE TABLE `customers_tb` (
  `Username` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNo` varchar(12) NOT NULL,
  `CurrentBundleId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports_tb`
--

CREATE TABLE `reports_tb` (
  `ReportId` varchar(8) NOT NULL,
  `Report` varchar(200) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions_tb`
--

CREATE TABLE `transactions_tb` (
  `TransactionId` varchar(20) NOT NULL,
  `BundleId` varchar(5) NOT NULL,
  `Cost` int(9) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`Username`, `Password`, `Type`) VALUES
('admin1', 'e10adc3949ba59abbe56e057f20f883e', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bundles_tb`
--
ALTER TABLE `bundles_tb`
  ADD PRIMARY KEY (`BundleId`);

--
-- Indexes for table `customers_tb`
--
ALTER TABLE `customers_tb`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
