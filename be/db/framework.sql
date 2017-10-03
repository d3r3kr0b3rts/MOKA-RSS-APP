-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 11:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlineroad`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `userid` int(255) NOT NULL,
  `userpin` int(4) NOT NULL,
  `role` varchar(25) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `minitial` varchar(1) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `carrier` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`userid`, `userpin`, `role`, `fname`, `minitial`, `lname`, `email`, `phone`, `carrier`, `password`) VALUES
(1, 9999, 'Supervisor', 'Setup', 'X', 'Account', 'derekscottroberts@gmail.com', '(231) 246 - 0833', 'Verizon', '$2y$10$WQyHr.CBw0aUOKg94yNLwODrsT69P3.rycZFsWti2lm/nMyzycmaG');

-- --------------------------------------------------------

--
-- Table structure for table `oncall`
--

CREATE TABLE `oncall` (
  `listid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oncall`
--

INSERT INTO `oncall` (`listid`, `name`, `phone`) VALUES
(1, 'Derek Roberts', '(231) 246 - 0833');

-- --------------------------------------------------------

--
-- Table structure for table `schedulelinks`
--

CREATE TABLE `schedulelinks` (
  `colid` int(11) NOT NULL,
  `scheduledisplay` varchar(255) DEFAULT NULL,
  `scheduleedit` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedulelinks`
--

INSERT INTO `schedulelinks` (`colid`, `scheduledisplay`, `scheduleedit`) VALUES
(1, 'https://docs.google.com/spreadsheets/d/1jAEeBnZNapUi1cFzUjgfIG0tHQssy-Kd-ctqHBPZpic/pubhtml?widget=true&amp;headers=false', 'https://docs.google.com/spreadsheets/d/1jAEeBnZNapUi1cFzUjgfIG0tHQssy-Kd-ctqHBPZpic/edit?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `staffmeeting`
--

CREATE TABLE `staffmeeting` (
  `entryid` int(11) NOT NULL,
  `meetinglocation` varchar(255) NOT NULL,
  `meetingdate` date NOT NULL,
  `meetingtime` varchar(25) NOT NULL,
  `notes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staffmeeting`
--

INSERT INTO `staffmeeting` (`entryid`, `meetinglocation`, `meetingdate`, `meetingtime`, `notes`) VALUES
(1, 'MOKA Offices', '2017-09-11', '10:00 AM to 12:00 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `triplog`
--

CREATE TABLE `triplog` (
  `entryid` int(11) NOT NULL,
  `tripdate` date DEFAULT NULL,
  `startmileage` int(10) NOT NULL,
  `lift` varchar(4) NOT NULL,
  `tires` varchar(4) NOT NULL,
  `leaks` varchar(4) NOT NULL,
  `windows` varchar(4) NOT NULL,
  `lights` varchar(4) NOT NULL,
  `count` varchar(4) NOT NULL,
  `seatbelts` varchar(4) NOT NULL,
  `doors` varchar(4) NOT NULL,
  `adjust` varchar(4) NOT NULL,
  `endmileage` int(10) DEFAULT NULL,
  `gas` varchar(4) DEFAULT NULL,
  `clean` varchar(4) DEFAULT NULL,
  `triplog` varchar(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `triplog`
--

INSERT INTO `triplog` (`entryid`, `tripdate`, `startmileage`, `lift`, `tires`, `leaks`, `windows`, `lights`, `count`, `seatbelts`, `doors`, `adjust`, `endmileage`, `gas`, `clean`, `triplog`) VALUES
(1, '2017-09-06', 15, 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', 'DSR', NULL, NULL, NULL, NULL);




CREATE TABLE `maintenancerequests` (
  `requestnumber` int(10) NOT NULL,
  `requestdate` date NOT NULL,
  `requestby` varchar(100) NOT NULL,
  `safetyconcern` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `object` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `note` text,
  `senttosuper` varchar(3) DEFAULT NULL,
  `senttomaintenance` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintenancerequests`
--

INSERT INTO `maintenancerequests` (`requestnumber`, `requestdate`, `requestby`, `safetyconcern`, `location`, `object`, `type`, `note`, `senttosuper`, `senttomaintenance`) VALUES
(1, '2017-09-12', 'Derek S. Roberts', 'Hazardous', 'Exterior - Front Porch', 'Door', 'Dirty', '', 'yes', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maintenancerequests`
--
ALTER TABLE `maintenancerequests`
  ADD PRIMARY KEY (`requestnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maintenancerequests`
--
ALTER TABLE `maintenancerequests`
  MODIFY `requestnumber` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Indexes for dumped tables
--
CREATE TABLE `loggedin` (
  `colid` int(10) NOT NULL,
  `userpin` int(4) NOT NULL,
  `dbhash` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loggedin`
--

INSERT INTO `loggedin` (`colid`, `userpin`, `dbhash`) VALUES
(18, 5643, '$2y$10$FUCjvO0TZOY4ID1KJ.NMyeVV2mlG203xauXxGby/mDE6.91LU3crC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loggedin`
--
ALTER TABLE `loggedin`
  ADD PRIMARY KEY (`colid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loggedin`
--
ALTER TABLE `loggedin`
  MODIFY `colid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userpin` (`userpin`);

--
-- Indexes for table `oncall`
--
ALTER TABLE `oncall`
  ADD PRIMARY KEY (`listid`);

--
-- Indexes for table `schedulelinks`
--
ALTER TABLE `schedulelinks`
  ADD PRIMARY KEY (`colid`);

--
-- Indexes for table `staffmeeting`
--
ALTER TABLE `staffmeeting`
  ADD PRIMARY KEY (`entryid`);

--
-- Indexes for table `triplog`
--
ALTER TABLE `triplog`
  ADD PRIMARY KEY (`entryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `oncall`
--
ALTER TABLE `oncall`
  MODIFY `listid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `staffmeeting`
--
ALTER TABLE `staffmeeting`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `triplog`
--
ALTER TABLE `triplog`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
