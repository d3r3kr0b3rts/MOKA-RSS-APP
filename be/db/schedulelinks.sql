-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: derekscottroberts.com.mysql:3306
-- Generation Time: Sep 08, 2017 at 09:14 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `schedulelinks`
--

CREATE TABLE IF NOT EXISTS `schedulelinks` (
  `colid` int(11) NOT NULL AUTO_INCREMENT,
  `scheduledisplay` varchar(255) DEFAULT NULL,
  `scheduleedit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`colid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schedulelinks`
--

INSERT INTO `schedulelinks` (`colid`, `scheduledisplay`, `scheduleedit`) VALUES
(1, 'https://docs.google.com/spreadsheets/d/1jAEeBnZNapUi1cFzUjgfIG0tHQssy-Kd-ctqHBPZpic/pubhtml?widget=true&amp;headers=false', 'https://docs.google.com/spreadsheets/d/1jAEeBnZNapUi1cFzUjgfIG0tHQssy-Kd-ctqHBPZpic/edit?usp=sharing');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
