-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: derekscottroberts.com.mysql:3306
-- Generation Time: Sep 08, 2017 at 11:17 AM
-- Server version: 10.1.26-MariaDB-1~xenial
-- PHP Version: 5.4.45-0+deb7u11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `derekscottroberts_com_foresttrails`
--
CREATE DATABASE `derekscottroberts_com_foresttrails` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `derekscottroberts_com_foresttrails`;

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `userpin` int(4) NOT NULL,
  `role` varchar(25) CHARACTER SET utf8 NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `minitial` varchar(1) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `carrier` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userpin` (`userpin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`userid`, `userpin`, `role`, `fname`, `minitial`, `lname`, `email`, `phone`, `carrier`, `password`) VALUES
(1, 5643, 'Supervisor', 'Derek', 'S', 'Roberts', 'derekscottroberts@gmail.com', '(231) 246 - 0833', 'Verizon', '$2y$10$4mgKUo0PtIiw9pcVDEIoJO2nK1LRKkX0vTiYoic1E9jYKxshKvjD.'),
(2, 4913, 'RSS', 'LaTonya', 'E', 'Brown', NULL, '(231) 578 - 2540', NULL, '$2y$10$e/4W0cwoYBFFLmeU8v1SYuOBQXyeaFYhsjDivzZgBAzqV90kFrTMy'),
(3, 4423, 'RSS', 'Latoya', 'U', 'Guy', NULL, '(231) 903 - 7220', 'Sprint', '$2y$10$7LLo2Vh.bpXUh/jOLIdsmecVc/DvdIEWzbW8u350gtFXoPKs9489G');

-- --------------------------------------------------------

--
-- Table structure for table `oncall`
--

CREATE TABLE IF NOT EXISTS `oncall` (
  `listid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(25) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`listid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `oncall`
--

INSERT INTO `oncall` (`listid`, `name`, `phone`) VALUES
(1, 'Derek Roberts', '(231) 246 - 0833');

-- --------------------------------------------------------

--
-- Table structure for table `schedulelinks`
--

CREATE TABLE IF NOT EXISTS `schedulelinks` (
  `scheduledisplay` varchar(255) DEFAULT NULL,
  `scheduleedit` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedulelinks`
--

INSERT INTO `schedulelinks` (`scheduledisplay`, `scheduleedit`) VALUES
('https://docs.google.com/spreadsheets/d/1jAEeBnZNapUi1cFzUjgfIG0tHQssy-Kd-ctqHBPZpic/pubhtml?widget=true&amp;headers=false', 'https://docs.google.com/spreadsheets/d/1jAEeBnZNapUi1cFzUjgfIG0tHQssy-Kd-ctqHBPZpic/edit?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `staffmeeting`
--

CREATE TABLE IF NOT EXISTS `staffmeeting` (
  `entryid` int(11) NOT NULL AUTO_INCREMENT,
  `meetinglocation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meetingdate` date NOT NULL,
  `meetingtime` varchar(25) CHARACTER SET utf8 NOT NULL,
  `notes` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`entryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `staffmeeting`
--

INSERT INTO `staffmeeting` (`entryid`, `meetinglocation`, `meetingdate`, `meetingtime`, `notes`) VALUES
(1, 'MOKA Offices', '2017-09-11', '10:00 AM to 12:00 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `triplog`
--

CREATE TABLE IF NOT EXISTS `triplog` (
  `entryid` int(11) NOT NULL AUTO_INCREMENT,
  `tripdate` date DEFAULT NULL,
  `startmileage` int(10) NOT NULL,
  `lift` varchar(4) CHARACTER SET utf8 NOT NULL,
  `tires` varchar(4) CHARACTER SET utf8 NOT NULL,
  `leaks` varchar(4) CHARACTER SET utf8 NOT NULL,
  `windows` varchar(4) CHARACTER SET utf8 NOT NULL,
  `lights` varchar(4) CHARACTER SET utf8 NOT NULL,
  `count` varchar(4) CHARACTER SET utf8 NOT NULL,
  `seatbelts` varchar(4) CHARACTER SET utf8 NOT NULL,
  `doors` varchar(4) CHARACTER SET utf8 NOT NULL,
  `adjust` varchar(4) CHARACTER SET utf8 NOT NULL,
  `endmileage` int(10) DEFAULT NULL,
  `gas` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `clean` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `triplog` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`entryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `triplog`
--

INSERT INTO `triplog` (`entryid`, `tripdate`, `startmileage`, `lift`, `tires`, `leaks`, `windows`, `lights`, `count`, `seatbelts`, `doors`, `adjust`, `endmileage`, `gas`, `clean`, `triplog`) VALUES
(1, '2017-09-06', 15000, 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
