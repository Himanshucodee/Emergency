-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2017 at 11:40 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emergency`
--

-- --------------------------------------------------------

--
-- Table structure for table `edata`
--

CREATE TABLE `edata` (
  `status` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `pincode` int(100) NOT NULL,
  `ambulance` varchar(100) NOT NULL,
  `police` varchar(100) NOT NULL,
  `fire` varchar(100) NOT NULL,
  `wtime` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edata`
--

INSERT INTO `edata` (`status`, `name`, `phone`, `address`, `landmark`, `pincode`, `ambulance`, `police`, `fire`, `wtime`) VALUES
('non-critical', 'himanshu', 1231231231, 'SDA Market, Block C 5, New Delhi, Delhi, India', 'SAD', 123123, '0', '0', '0', '2017-05-14T11:27:48.653Z'),
('non-critical', 'hu', 1231231232, 'sasa', 'as', 123123, '0', '0', '1', '2017-05-14T11:39:53.860Z');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
