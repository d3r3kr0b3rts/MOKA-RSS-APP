-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: derekscottroberts.com.mysql:3306
-- Generation Time: Sep 13, 2017 at 09:09 PM
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
-- Table structure for table `maintenancerequests`
--

CREATE TABLE IF NOT EXISTS `maintenancerequests` (
  `requestnumber` int(10) NOT NULL AUTO_INCREMENT,
  `requestdate` date NOT NULL,
  `requestby` varchar(100) NOT NULL,
  `safetyconcern` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `object` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `note` text,
  `senttosuper` varchar(3) DEFAULT NULL,
  `senttomaintenance` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`requestnumber`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `maintenancerequests`
--

INSERT INTO `maintenancerequests` (`requestnumber`, `requestdate`, `requestby`, `safetyconcern`, `location`, `object`, `type`, `note`, `senttosuper`, `senttomaintenance`) VALUES
(1, '2017-09-12', 'Derek S. Roberts', 'Hazardous', 'Exterior - Front Porch', 'Door', 'Dirty', '', 'yes', NULL),
(18, '2017-09-12', 'Derek S. Roberts', 'Hazardous', 'Bathroom', 'Shower or Bathtub', 'Damaged', '', 'yes', NULL),
(17, '2017-09-12', 'Derek S. Roberts', 'Not Hazardous', 'Bathroom', 'Counter or Cupboard', 'Leaking/Drafty', '', 'yes', NULL),
(16, '2017-09-12', 'Derek S. Roberts', 'Potentially Hazardous', 'Bedroom', 'Floor', 'Damaged', '', 'yes', NULL),
(19, '2017-09-13', 'Derek S. Roberts', 'Hazardous', 'Med Room', 'Electric Outlet', 'Damaged', '', 'yes', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
