-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: derekscottroberts.com.mysql:3306
-- Generation Time: Sep 10, 2017 at 08:18 PM
-- Server version: 10.1.26-MariaDB-1~xenial
-- PHP Version: 5.4.45-0+deb7u11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `derekscottroberts_com_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE IF NOT EXISTS `homes` (
  `deptnum` int(10) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `streetnum` int(10) DEFAULT NULL,
  `streetname` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(5) DEFAULT NULL,
  `supervisor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`deptnum`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`deptnum`, `residence`, `streetnum`, `streetname`, `city`, `state`, `zip`, `supervisor`) VALUES
(103, 'Forest Trails', 3088, 'S. Hilton Park Rd', 'Muskegon', 'MI', '49442', 'Janessa Gunderson'),
(101, 'Airline Road', 4752, 'Airline Rd', 'Muskegon', 'MI', '49444', 'Denise Daves'),
(104, 'Benston', 7468, 'Whitehall Rd', 'Whitehall', 'MI', '49461', 'Arlene Hines'),
(105, 'Crystal Lake', 7875, 'Whitehall Rd', 'Whitehall', 'MI', '49461', 'Christine Grant'),
(106, 'Slocum Street', 817, 'E. Slocum St', 'Whitehall', 'MI', '49461', 'Athena Carson'),
(107, 'Harbor Pines Lane', 6459, 'Harbor Pines Ln', 'Norton Shores', 'MI', '49444', 'Karen Johnson Cole'),
(108, 'Brookmere', 3086, 'Creekview Ln', 'Muskegon', 'MI', '49444', 'Tony Beck'),
(109, 'Oxford Circle', 3293, 'Orshall Rd', 'Whitehall', 'MI', '49461', 'Ruth Burkert'),
(110, 'Skyline', 3297, 'Orshal Rd', 'Whitehall', 'MI', '49461', 'Jessica Sobers'),
(111, 'Terra Nova', 2745, 'White Lake Dr', 'Whitehall', 'MI', '49461', 'Myra Mieras'),
(112, 'Sophia Street', 816, 'E. Sophia St', 'Whitehall', 'MI', '49461', 'Myra Mieras'),
(201, 'Ferris Street', 17189, 'Ferris St', 'Grand Haven', 'MI', '49417', 'Jenny Harell'),
(202, 'Felch Street', 386, 'Felch St', 'Holland', 'MI', '49424', 'Jessica Pressley'),
(203, 'Simmons', 444, 'W. 32nd St', 'Holland', 'MI', '49423', 'Henry Primer'),
(204, 'Starwalk Lane', 16538, 'Starwalk Ln', 'West Olive', 'MI', '49460', 'Karen Tompkins-Davis'),
(205, 'Pierce Street', 6421, 'Pierce St', 'Allendale', 'MI', '49401', 'Laura DeRivera'),
(206, 'Indian Trails', 1859, 'Lake Michigan Dr NW', 'Grand Rapids', 'MI', '49534', 'Frank Grotenhuis'),
(212, 'East Main', 9645, 'Meadowland Court', 'Zeeland', 'MI', '49464', 'Karen Tompkins-Davis'),
(215, 'Lakeview', 13316, 'Wurtsboro Rd', 'Holland', 'MI', '49424', 'Jessica Pressley'),
(401, 'Academy', 1454, 'Goodrich St', 'Allegan', 'MI', '49010', 'Lynette VanDuine-VanVleet'),
(406, 'Wood Lea Drive', 1565, 'Wood Lea Dr', 'Otsego', 'MI', '49078', 'Lynette VanDuine-VanVleet'),
(407, 'Jones Circle', 205, 'Thomas St', 'Allegan', 'MI', '49010', 'Lynette VanDuine-VanVleet'),
(301, 'Cedar Creek', 11767, 'Algoma', 'Sparta', 'MI', '49345', 'Kaleigh Kleyn'),
(302, 'Belmont Woods', 7223, 'Packer Woods Dr NE', 'Belmont', 'MI', '49306', 'Winnie Mugo-PuffPaff'),
(304, 'Amanda Drive', 5102, 'Amanda Dr SW', 'Grandville', 'MI', '49418', 'Caitlin Koster'),
(305, 'Lilly Regal', 7249, 'Regal SE', 'Grand Rapids', 'MI', '49548', 'Kip Chemjor'),
(306, 'Mullins Avenue', 1630, 'Mullins Ave NW', 'Grand Rapids', 'MI', '49534', 'Beth Hoffer'),
(307, 'Emma Court', 1465, 'Emma court SW', 'Wyoming', 'MI', '49509', 'Daniel Kioko'),
(308, '68th Street', 1777, '68th Street', 'Caledonia', 'MI', '49316', 'Calvin Matheka'),
(309, 'Wilson Avenue', 2755, 'Wilson Avenue NW', 'Walker', 'MI', '49534', 'Kendra Verhaar'),
(311, 'Oak Valley Court', 3970, 'Oak Valley Court SW', 'Wyoming', 'MI', '49519', 'Lisa Hammond'),
(312, 'Railside', 11885, 'Sparta Ave', 'Sparta', 'Mi', '49345', 'Justin Scott'),
(313, 'Waterbury Place', 5510, 'Waterbury Place SE', 'Kentwood', 'MI', '49508', 'Malik Amandou'),
(314, 'Greenboro Drive', 5541, 'Greenboro Dr SE', 'Kentwood', 'MI', '49508', 'Malik Amandou'),
(303, 'Ridgebluff', 8610, 'Ridgebluff', 'Byron Center', 'MI', '49315', 'Elijah Edwardson');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
