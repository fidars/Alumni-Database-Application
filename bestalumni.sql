-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2014 at 12:01 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bestalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(50) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` int(11) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `courseinbest` varchar(15) NOT NULL,
  `yearofpassing` year(4) NOT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `organisation` varchar(70) DEFAULT NULL,
  `permanentstreet1` varchar(40) DEFAULT NULL,
  `permanentstreet2` varchar(40) DEFAULT NULL,
  `permanentcity` varchar(40) DEFAULT NULL,
  `permanentstate` varchar(20) DEFAULT NULL,
  `permanentpincode` int(6) DEFAULT NULL,
  `permanentcountry` varchar(25) DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `registration` (`name`, `sex`, `dob`, `contact`, `email`, `courseinbest`, `yearofpassing`, `profession`, `organisation`, `permanentstreet1`, `permanentstreet2`, `permanentcity`, `permanentstate`, `permanentpincode`, `permanentcountry`, `blood`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
