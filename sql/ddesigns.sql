-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2021 at 06:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddesigns`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_name` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `admin_password` varchar(10) COLLATE latin1_general_cs NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_name`, `admin_password`) VALUES
('Darel Joseph', 'yanniyanni');

-- --------------------------------------------------------

--
-- Table structure for table `empdb`
--

DROP TABLE IF EXISTS `empdb`;
CREATE TABLE IF NOT EXISTS `empdb` (
  `EmpID` int(20) NOT NULL,
  `Name` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `Email` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `Phone` varchar(12) COLLATE latin1_general_cs NOT NULL,
  `Designation` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `Linkedin` varchar(255) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`EmpID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `empdb`
--

INSERT INTO `empdb` (`EmpID`, `Name`, `Email`, `Phone`, `Designation`, `Linkedin`) VALUES
(1002, 'Mobin George', 'mobing@abc.com', '45454445455', 'Trainee', 'linkedin/MobinG'),
(1001, 'Darel Joseph', 'darel@abc.com', '8989898989', 'Trainee', 'linkedin/dj'),
(1003, 'Ram Verma', 'rv@abc.com', '789651238', 'Manager', 'linkedin/ramverma');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
