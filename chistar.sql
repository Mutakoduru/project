-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
--
 Host: 127.0.0.1
-- Generation Time: Mar 02, 2014 at 11:59 AM

-- Server version: 5.5.27

-- PHP Version: 5.4.7


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8 */;


--
-- Database: `chistar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--


CREATE TABLE IF NOT EXISTS `admin` (
  `user name` varchar(10) NOT NULL,

  `password` varchar(8) NOT NULL,

  `AID` int(11) NOT NULL AUTO_INCREMENT,

  `Auth` text NOT NULL,

  PRIMARY KEY (`AID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


--
-- Dumping data for table `admin`
--


INSERT INTO `admin` (`user name`, `password`, `AID`, `Auth`) VALUES
('admin1', 'pavani', 1, ''),

('admin2', 'diwakar', 2, ''),

('admin3', 'kiran', 3, ''),

('admin4', 'yashna', 4, '');


-- --------------------------------------------------------

--
-- Table structure for table `dept`
--


CREATE TABLE IF NOT EXISTS `dept` (
  `dept_name` text NOT NULL,

  `dept_id` int(11) NOT NULL,

  `dept_head` text NOT NULL,

  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `dept`
--


INSERT INTO `dept` (`dept_name`, `dept_id`, `dept_head`) VALUES
('Cardiology', 1, 'Dr. M.Sunil Kapoor'),

('hematology', 2, 'Dr. S. Ravi kumar'),

('Neurology', 3, 'Dr. P. Ravi sekhar'),

('ENT', 4, 'Dr. Y. Mohana Krishna'),

('Orthopedic', 5, 'Dr. B. Varalakshmi');


-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--


CREATE TABLE IF NOT EXISTS `doctor` (
  `user name` varchar(10) NOT NULL,

  `password` varchar(8) NOT NULL,

  `DID` int(11) NOT NULL,

  PRIMARY KEY (`DID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `doctor`
--


INSERT INTO `doctor` (`user name`, `password`, `DID`) VALUES
('dctr1', 'dctr', 1);


-- --------------------------------------------------------

--
-- Table structure for table `patient`
--


CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(11) NOT NULL,

  `fname` text NOT NULL,

  `lname` text NOT NULL,

  `gender` text NOT NULL,

  `age` int(11) NOT NULL,

  `blood group` text NOT NULL,

  `user name` varchar(10) NOT NULL,

  `password` varchar(8) NOT NULL,

  `door no` int(11) NOT NULL,

  `street` text NOT NULL,

  `city` text NOT NULL,

  `state` text NOT NULL,

  `pin` int(11) NOT NULL,

  `phone` double NOT NULL,

  `mail id` varchar(25) NOT NULL,

  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `patient-history`
--


CREATE TABLE IF NOT EXISTS `patient-history` (
  `tobacco` tinyint(1) NOT NULL,

  `alcohol` tinyint(1) NOT NULL,

  `sugar` tinyint(1) NOT NULL,

  `BP` tinyint(1) NOT NULL,

  `pid` int(11) NOT NULL,

  PRIMARY KEY (`pid`),

  UNIQUE KEY `pid` (`pid`),

  KEY `pid_2` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--


CREATE TABLE IF NOT EXISTS `pharmacist` (
  `user name` varchar(10) NOT NULL,

  `password` varchar(8) NOT NULL,

  `PhID` int(11) NOT NULL,

  PRIMARY KEY (`PhID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `physician`
--


CREATE TABLE IF NOT EXISTS `physician` (
  `user name` varchar(10) NOT NULL,

  `password` varchar(8) NOT NULL,

  `PsID` int(11) NOT NULL,

  PRIMARY KEY (`PsID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--


CREATE TABLE IF NOT EXISTS `specialist` (
  `user name` varchar(10) NOT NULL,

  `password` varchar(8) NOT NULL,

  `SID` int(11) NOT NULL,

  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `user`
--


CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,

  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,

  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,

  `uname` varchar(12) COLLATE utf8_unicode_ci NOT NULL,

  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,

  `gender` text COLLATE utf8_unicode_ci NOT NULL,

  `bloodgroup` varchar(3) COLLATE utf8_unicode_ci NOT NULL,

  `phone` bigint(12) NOT NULL,

  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,

  `city` text COLLATE utf8_unicode_ci NOT NULL,

  `created_at` datetime NOT NULL,

  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',

  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
