-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 03:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `Dep` varchar(10) NOT NULL,
  `Build` varchar(5) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`Dep`, `Build`, `mobno`, `pass`) VALUES
('SCOPE', 'SJT', '9876543210', 'scope'),
('SELECT', 'TT', '9874563210', 'select'),
('SENSE', 'TT', '4561237890', 'sense'),
('SITE', 'SJT', '1234567890', 'site');

-- --------------------------------------------------------

--
-- Table structure for table `evnt`
--

CREATE TABLE `evnt` (
  `evname` varchar(30) NOT NULL,
  `stdt` varchar(15) NOT NULL,
  `stti` varchar(10) NOT NULL,
  `endti` varchar(10) NOT NULL,
  `evdesc` varchar(300) NOT NULL,
  `exppar` varchar(3) NOT NULL,
  `ven` varchar(5) NOT NULL,
  `adsw` varchar(15) DEFAULT NULL,
  `classrm` varchar(10) DEFAULT NULL,
  `Dean` varchar(15) DEFAULT NULL,
  `EMPID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evnt`
--

INSERT INTO `evnt` (`evname`, `stdt`, `stti`, `endti`, `evdesc`, `exppar`, `ven`, `adsw`, `classrm`, `Dean`, `EMPID`) VALUES
('BLood', '2018-10-25', '03:54', '17:43', 'dsgghehyhe', '90', 'SJT', 'Approved', 'SJT-405', 'Approved', '12345'),
('Blood Donation', '2018-10-31', '04:54', '16:54', 'ry:\r\n\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nRunning Windows Network Diagnostics', '300', 'SJT', 'Approved', 'SJT-301', 'Approved', '12345'),
('GAME a THON', '2018-10-26', '16:54', '17:07', 'dsfdsfa', '800', 'SJT', 'Approved', 'SJT-402', 'Approved', '12345'),
('STudio', '2018-10-30', '14:45', '17:42', 'A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.', '60', 'TT', 'Approved', 'TT-325', 'Approved', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `fac`
--

CREATE TABLE `fac` (
  `EMPID` varchar(6) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac`
--

INSERT INTO `fac` (`EMPID`, `Name`, `mobno`, `email`, `pass`) VALUES
('12345', 'Prof. Satish', '9876543210', 'satish@vit.ac.in', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dean`
--
ALTER TABLE `dean`
  ADD PRIMARY KEY (`Dep`);

--
-- Indexes for table `evnt`
--
ALTER TABLE `evnt`
  ADD PRIMARY KEY (`evname`);

--
-- Indexes for table `fac`
--
ALTER TABLE `fac`
  ADD PRIMARY KEY (`EMPID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
