-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2016 at 08:26 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weather`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE IF NOT EXISTS `archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form` text NOT NULL,
  `name` text NOT NULL,
  `station` text NOT NULL,
  `period` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `submitted` date NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `form`, `name`, `station`, `period`, `description`, `submitted`, `file`) VALUES
(1, 'Synoptic', 'Rainfall', 'Makerere', '07/12/2015 - 07/21/2015', 'TEST', '2015-07-21', 'd32d65f04b8dd410cf1c6e70229e798a.jpg'),
(2, 'Dekadal', 'TEST AGAIN', 'Makerere', '07/14/2015 - 07/21/2015', 'AGAIN TEST', '2015-07-21', 'a1d075a0e62e29a6ee1b3a9927e88ab2.png'),
(3, 'Synoptic', 'WEATHER', 'Makerere', '07/14/2015 - 07/21/2015', 'WEATHER', '2015-07-21', 'recent-001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `aws`
--

CREATE TABLE IF NOT EXISTS `aws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `V_A2` varchar(20) DEFAULT NULL,
  `V_A1` varchar(20) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL,
  `times` varchar(50) DEFAULT NULL,
  `TZ` varchar(50) DEFAULT NULL,
  `UT` varchar(50) DEFAULT NULL,
  `GW_LAT` varchar(50) DEFAULT NULL,
  `GW_LON` varchar(50) DEFAULT NULL,
  `TXT` varchar(50) DEFAULT NULL,
  `PS` varchar(50) DEFAULT NULL,
  `V_MCU` varchar(50) DEFAULT NULL,
  `T_SHT2X` varchar(50) DEFAULT NULL,
  `RH_SHT2X` varchar(50) DEFAULT NULL,
  `AH` varchar(50) DEFAULT NULL,
  `T_DEW` varchar(50) DEFAULT NULL,
  `T_HEAT_IDX` varchar(50) DEFAULT NULL,
  `ADDR` varchar(50) DEFAULT NULL,
  `SEQ` varchar(50) DEFAULT NULL,
  `TTL` varchar(50) DEFAULT NULL,
  `RSSI` varchar(50) DEFAULT NULL,
  `LQI` varchar(50) DEFAULT NULL,
  `DRP` varchar(50) DEFAULT NULL,
  `E64` varchar(50) DEFAULT NULL,
  `T` varchar(20) DEFAULT NULL,
  `V_IN` varchar(20) DEFAULT NULL,
  `V_A3` varchar(20) DEFAULT NULL,
  `P_MS5611` varchar(20) DEFAULT NULL,
  `T1` varchar(20) DEFAULT NULL,
  `P0_T` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `aws`
--

INSERT INTO `aws` (`id`, `V_A2`, `V_A1`, `day`, `times`, `TZ`, `UT`, `GW_LAT`, `GW_LON`, `TXT`, `PS`, `V_MCU`, `T_SHT2X`, `RH_SHT2X`, `AH`, `T_DEW`, `T_HEAT_IDX`, `ADDR`, `SEQ`, `TTL`, `RSSI`, `LQI`, `DRP`, `E64`, `T`, `V_IN`, `V_A3`, `P_MS5611`, `T1`, `P0_T`) VALUES
(10, NULL, NULL, '2015-08-04', '15:08:09', 'CEST', '1438693689', '60.38370', '5.33196', '10m', '1', NULL, '19.52', '61.40', NULL, NULL, NULL, '241.193', '215', '15', '0', '255', '0.00', 'fcc23d00000020c8', '19.44', NULL, NULL, NULL, NULL, NULL),
(11, NULL, '0.00', '2015-08-04', '15:05:50', 'CEST', '1438693550', '60.38370', '5.33196', 'gnd', '1', '3.60', NULL, NULL, NULL, NULL, NULL, '176.78', '143', '15', '0', '212', '0.00', 'fcc23d000000716e', '19.63', '6.83', NULL, NULL, '14.56', NULL),
(12, NULL, '0.00', '2015-08-04', '15:05:50', 'CEST', '1438693550', '60.38370', '5.33196', 'gnd', '1', '3.60', NULL, NULL, NULL, NULL, NULL, '176.78', '143', '15', '0', '212', '0.00', 'fcc23d000000716e', '19.63', '6.83', NULL, NULL, '14.56', NULL),
(13, '3.28', '1.76', '2015-08-04', '15:06:07', 'CEST', '1438693567', '60.38370', '5.33196', '10m', '1', '3.60', NULL, NULL, NULL, NULL, NULL, '241.193', '207', '15', '0', '255', '0.00', 'fcc23d00000020c8', NULL, NULL, NULL, NULL, NULL, '0.050'),
(14, NULL, NULL, '2015-08-04', '15:08:57', 'CEST', '1438693737', '60.38370', '5.33196', '2m', '1', '3.53', '17.83', '92.78', '14.09', '16.65', '14.01', '101.28', '99', '15', '4', '255', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, '2015-08-04', '15:08:31', 'CEST', '1438693711', '60.38370', '5.33196', 'sink', '0', '3.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fcc23d0000006cef', '24.44', '4.93', '277', '1001.32', NULL, NULL),
(16, NULL, NULL, '2015-08-04', '15:08:31', 'CEST', '1438693711', '60.38370', '5.33196', 'sink', '0', '3.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fcc23d0000006cef', '24.44', '4.93', '277', '1001.32', NULL, NULL),
(17, NULL, NULL, '2015-08-04', '150809', 'CEST', '1438693689', '60.38370', '5.33196', '10M', '1', NULL, '19.52', '61.40', NULL, NULL, NULL, '241.193', '215', '15', '0', '255', '0.00', 'FCC23D00000020C8', '19.44', NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, '2015-08-04', '150809', 'CEST', '1438693689', '60.38370', '5.33196', '10M', '1', NULL, '19.52', '61.40', NULL, NULL, NULL, '241.193', '215', '15', '0', '255', '0.00', 'FCC23D00000020C8', '19.44', NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, '2015-08-04', '15:08:09', 'CEST', '1438693689', '60.38370', '5.33196', '10M', '1', NULL, '19.52', '61.40', NULL, NULL, NULL, '241.193', '215', '15', '0', '255', '0.00', 'FCC23D00000020C8', '19.44', NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, '2015-08-04', '15:08:09', 'CEST', '1438693689', '60.38370', '5.33196', '10M', '1', NULL, '19.52', '61.40', NULL, NULL, NULL, '241.193', '215', '15', '0', '255', '0.00', 'FCC23D00000020C8', '19.44', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE IF NOT EXISTS `daily` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `station` varchar(50) NOT NULL,
  `max` varchar(50) DEFAULT NULL,
  `min` varchar(50) DEFAULT NULL,
  `actual` varchar(50) DEFAULT NULL,
  `anemometer` varchar(50) DEFAULT NULL,
  `wind` varchar(50) DEFAULT NULL,
  `maxi` varchar(50) DEFAULT NULL,
  `user` text,
  `submitted` varchar(50) DEFAULT NULL,
  `approved` text,
  `rain` text,
  `thunder` text,
  `fog` text,
  `haze` text,
  `storm` text,
  `quake` text,
  `height` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `sunshine` varchar(50) DEFAULT NULL,
  `radiationtype` varchar(50) DEFAULT NULL,
  `radiation` varchar(50) DEFAULT NULL,
  `evaptype1` varchar(50) DEFAULT NULL,
  `evap1` varchar(50) DEFAULT NULL,
  `evaptype2` varchar(50) DEFAULT NULL,
  `evap2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `date`, `station`, `max`, `min`, `actual`, `anemometer`, `wind`, `maxi`, `user`, `submitted`, `approved`, `rain`, `thunder`, `fog`, `haze`, `storm`, `quake`, `height`, `duration`, `sunshine`, `radiationtype`, `radiation`, `evaptype1`, `evap1`, `evaptype2`, `evap2`) VALUES
(2, '2015-07-14', 'Makerere', '22', '19.7', '0.1', '0', '23', '0', 'John Salongo', '0000-00-00', 'F', 'true', '', '', '', 'true', 'true', '6', '9', '', '', '', '', '', '', ''),
(4, '2015-09-09', 'Makerere', '32', '16', '0.5', '67889', '12', '0', 'Douglas Were', '0000-00-00', 'Douglas Were', 'true', 'true', 'true', 'true', 'true', 'true', NULL, '12', '', NULL, '', '', '', '', ''),
(5, '2015-09-08', 'Makerere', '26', '0.22', '1.4', '6789', '4', '0', 'Douglas Were', '0000-00-00', '', '', '', 'true', '', 'true', 'true', NULL, '34', '', NULL, '', '', '', '', ''),
(7, '2015-07-28', 'Makerere', '34', '34', '5', '56789', '12', '0', 'Douglas Were', '0000-00-00', '', '', 'true', '', '', 'true', 'true', NULL, '7', '', 'none', '', '6', '', '', ''),
(8, '2015-10-23', 'Makerere', '23.6', '20.8', '4.8', '11.4', '9', '0', 'Douglas Were', '0000-00-00', 'F', 'true', 'true', 'true', '', '', 'true', NULL, '3.4', '', '', '', '', '', '', ''),
(9, '2015-11-01', 'Makerere', '31', '20', '2.7', '13.4', '5', '2', 'Douglas Were', '2015-10-24', 'F', 'true', 'true', 'true', 'true', 'true', 'true', '', '4', '4', 'fiction', '', '23', '7', '4', '34'),
(10, '2015-10-21', 'Makerere', '21', '23', '0.03', '16', '21', '0', 'Douglas Were', '0000-00-00', '', 'true', '', '', '', '', 'true', NULL, '3', '', '', '', '4', '7', '9', '91'),
(11, '2016-06-19', 'Makerere', '12', '23', '2.3', '234', '6', '', 'Mungau Caphers', NULL, NULL, 'true', '', 'true', '', 'true', 'true', '', '4', '', '', '', '', '', '', 'p'),
(12, '2015-10-13', 'Makerere', '6', '22', '0.5', '0', '8', '0', 'Douglas Were', '0000-00-00', '', 'true', 'true', 'true', '', 'true', 'true', NULL, '4', '', 'Danger', '4', '', '6', '8', '12'),
(13, '2015-11-03', 'Makerere', '21', '23', '0.5', '23', '8', '0.5', 'Douglas Were', '2015-10-27', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '', '4', '', '', '', '', '', '', ''),
(14, '2015-11-04', 'Makerere', '21', '18', '0.5', '0', '8', '0', 'Douglas Were', '0000-00-00', '', 'true', 'true', '', '', 'true', 'true', NULL, '3', '', '', '4', '4', '6', '', ''),
(15, '2015-10-14', 'Makerere', '16', '25', '2.4', '0', '13', '0', 'John Salongo', '2015-10-30', 'false', '2.4', 'true', 'true', 'true', 'true', 'true', '', '3', '', '', '', '', '', '', ''),
(16, '2015-10-12', 'Makerere', '23', '18', '2.4', '0', '12', '0', 'Douglas Were', '0000-00-00', '', '2.4', 'true', 'true', 'true', 'true', 'true', '4', '3', '', '', '', '', '', '', ''),
(17, '2016-01-01', 'Makerere', '10', '32', '0.9', '0', '11', '0', 'John Salongo', '2015-10-30', 'false', '0.9', 'true', 'true', 'true', 'true', 'true', '', '2', '', '', '', '', '', '', ''),
(18, '2015-10-31', 'Makerere', '12', '34', '6.1', '34', '12', '0', 'Douglas Were', '0000-00-00', '', '6.1', 'true', 'true', 'true', 'true', 'true', '23', '9', '', '', '', '', '', '', ''),
(19, '2015-11-05', 'Makerere', '19', '14', '0.4', '0', '4', '0', 'Douglas Were', '2015-11-05', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '', '2', '', '', '', '', '', '', ''),
(20, '2015-11-06', 'Makerere', '23', '12', '0.8', '0', '0', '0', 'Douglas Were', '2015-11-06', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '', '', '', '', '', '', '', '', ''),
(21, '2016-06-17', 'Makerere', '24', '16', '2.3', '0', '0', '0', 'Douglas Were', '2015-11-09', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '', '5', '', '', '', '', '', '', ''),
(44, '2016-06-17', 'Makerere', '7', '8', '', '5', '2', '', 'Mungau Caphers', NULL, NULL, 'true', 'true', 'true', 'true', 'true', 'true', '5', '9', '6', '', '7.9', '', '7', '', 'u'),
(45, '2015-12-06', 'Entebbe', '2', '1', '1.7', '3', '3', '', 'user', '2015-12-06', 'false', 'true', 'false', 'false', 'false', 'false', 'false', '3', '', '4', '', '4', '', '4', '', '3'),
(46, '2015-12-05', 'Entebbe', '33', '32', '3', '3', '67800', '', 'user', '2015-12-06', 'false', 'true', 'true', 'false', 'false', 'false', 'false', '3', '3', '4', '', '', '', '', '', '0.003'),
(48, '2016-06-11', 'Makerere', ' 18.8', ' 19.6', ' 1.5', '3', ' ', '', 'Mungau Caphers', NULL, NULL, 'true', 'false', 'true', 'false', 'false', 'false', ' ', ' 2', ' 6', '  ', ' ', ' ', ' ', ' ', ' '),
(53, '2016-06-05', 'Makerere', '17.8', '20', '0.3', '', '7', '', 'Mungau Caphers', NULL, NULL, 'true', 'false', 'false', '', '', '', '', '', '', '', '', '', '', '', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `element`
--

CREATE TABLE IF NOT EXISTS `element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `abbrev` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `units` varchar(50) NOT NULL,
  `scale` varchar(50) NOT NULL,
  `limits` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `submitted` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `element`
--

INSERT INTO `element` (`id`, `name`, `abbrev`, `type`, `units`, `scale`, `limits`, `description`, `submitted`) VALUES
(1, 'Rainfalls', 'FR', 'Monthly', 'Cm3', 'C', '20', '          This is  a test element', '2015-07-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE IF NOT EXISTS `instrument` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `station` text NOT NULL,
  `element` text NOT NULL,
  `dateRegister` varchar(50) NOT NULL,
  `dateExpire` date NOT NULL,
  `code` varchar(50) NOT NULL,
  `manufacturer` text NOT NULL,
  `description` text NOT NULL,
  `submitted` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `instrument`
--

INSERT INTO `instrument` (`id`, `name`, `station`, `element`, `dateRegister`, `dateExpire`, `code`, `manufacturer`, `description`, `submitted`) VALUES
(1, 'Thermometer', 'Makerere', 'Rainfalls', '07/14/2015 - 07/28/2015', '2015-07-21', 'WE45U', 'Sony', 'For air temperature', '2015-07-21 00:00:00'),
(2, 'Tester', 'Makerere', 'Thermometer', '07/14/2015 - 07/15/2015', '2015-07-21', 'werwe', 'werwe', 'werwerw', '2015-07-21 12:31:03'),
(3, 'Winter', 'Makerere', 'Rainfalls', '07/08/2015 - 08/15/2015', '2015-07-21', 'WaT56E', 'MajoE', 'for weather', '2015-07-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `action` text NOT NULL,
  `details` text NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=271 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `userid`, `action`, `details`, `date`, `ip`, `url`) VALUES
(78, 'Douglas Were', '6', 'saved daily weather information', 'Douglas Weresubmit of weather information ', '2015-10-24 10:58:26', '::1', ''),
(79, 'Douglas Were', '6', 'saved daily weather information', 'Douglas Weresubmit of weather information ', '2015-10-24 11:02:36', '::1', ''),
(80, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-26 08:38:45', '::1', 'www.'),
(81, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-26 11:17:40', '::1', 'www.'),
(82, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-27 03:41:56', '::1', 'www.'),
(83, 'Douglas Were', '6', 'saved daily weather information', 'Douglas Weresubmit of weather information ', '2015-10-27 08:11:40', '::1', ''),
(84, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-10-27 06:18:15', '::1', 'www.'),
(85, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-27 06:18:19', '::1', 'www.'),
(86, 'Makerere', '6', 'logout', 'Makerere has logged out ', '2015-10-27 06:21:18', '::1', 'www.'),
(87, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-27 06:21:23', '::1', 'www.'),
(88, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-27 11:24:08', '::1', 'www.'),
(89, 'Makerere', '6', 'saved daily weather information', 'Makereresubmit of weather information ', '2015-10-27 15:48:59', '::1', ''),
(90, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-28 04:23:52', '::1', 'www.'),
(91, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-28 11:14:06', '::1', 'www.'),
(92, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-29 06:34:27', '::1', 'www.'),
(93, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-29 10:47:29', '::1', 'www.'),
(94, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-29 10:50:02', '::1', 'www.'),
(95, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-29 13:29:46', '::1', 'www.'),
(96, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-30 03:48:47', '::1', 'www.'),
(97, 'Makerere', '6', 'logout', 'Makerere has logged out ', '2015-10-30 05:05:07', '::1', 'www.'),
(98, 'Makerere', '6', 'login', 'Makerere has logged in ', '2015-10-30 05:05:12', '::1', 'www.'),
(99, 'Makerere', '6', 'logout', 'Makerere has logged out ', '2015-10-30 05:15:05', '::1', 'www.'),
(100, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-30 05:15:12', '::1', 'www.'),
(101, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-30 07:34:10', '::1', 'www.'),
(102, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:34:25', '::1', ''),
(103, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:35:52', '::1', ''),
(104, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:37:35', '::1', ''),
(105, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:39:39', '::1', ''),
(106, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:39:57', '::1', ''),
(107, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:40:26', '::1', ''),
(108, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:41:35', '::1', ''),
(109, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:42:55', '::1', ''),
(110, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:44:46', '::1', ''),
(111, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:46:23', '::1', ''),
(112, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:47:08', '::1', ''),
(113, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:55:07', '::1', ''),
(114, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:55:30', '::1', ''),
(115, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:55:50', '::1', ''),
(116, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:56:47', '::1', ''),
(117, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 10:57:04', '::1', ''),
(118, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2015-10-30 11:22:38', '::1', 'www.'),
(119, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-30 11:22:44', '::1', 'www.'),
(120, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:53:56', '::1', ''),
(121, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:53:58', '::1', ''),
(122, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:54:00', '::1', ''),
(123, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:54:02', '::1', ''),
(124, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:54:04', '::1', ''),
(125, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:54:22', '::1', ''),
(126, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:54:24', '::1', ''),
(127, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:54:39', '::1', ''),
(128, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:54:46', '::1', ''),
(129, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:55:30', '::1', ''),
(130, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:55:33', '::1', ''),
(131, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:55:38', '::1', ''),
(132, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:55:40', '::1', ''),
(133, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:55:46', '::1', ''),
(134, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 14:55:50', '::1', ''),
(135, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2015-10-30 12:05:03', '::1', 'www.'),
(136, 'John Salongo', '7', 'login', 'John Salongo has logged in ', '2015-10-30 12:05:22', '::1', 'www.'),
(137, 'John Salongo', '7', 'saved daily weather information', 'Makereresubmit of weather information ', '2015-10-30 15:52:26', '::1', ''),
(138, 'John Salongo', '7', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-30 15:56:20', '::1', ''),
(139, 'John Salongo', '7', 'saved daily rainfall information', 'Makereresubmit of weather information ', '2015-10-30 16:11:36', '::1', ''),
(140, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-31 08:05:21', '::1', 'www.'),
(141, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2015-10-31 08:05:29', '::1', 'www.'),
(142, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-31 08:05:35', '::1', 'www.'),
(143, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-31 11:53:58', '::1', ''),
(144, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-31 12:09:09', '::1', ''),
(145, 'Douglas Were', '6', 'update daily weather information', 'Makerereupdate of weather information ', '2015-10-31 12:09:27', '::1', ''),
(146, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-03 04:21:43', '::1', 'www.'),
(147, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2015-11-03 07:45:14', '::1', 'www.'),
(148, 'John Salongo', '7', 'login', 'John Salongo has logged in ', '2015-11-03 07:45:21', '::1', 'www.'),
(149, 'John Salongo', '7', 'logout', 'Makerere has logged out ', '2015-11-03 07:46:40', '::1', 'www.'),
(150, 'John Salongo', '7', 'login', 'John Salongo has logged in ', '2015-11-03 07:46:48', '::1', 'www.'),
(151, 'John Salongo', '7', 'logout', 'Makerere has logged out ', '2015-11-03 07:49:24', '::1', 'www.'),
(152, 'John Salongo', '7', 'login', 'John Salongo has logged in ', '2015-11-03 07:49:30', '::1', 'www.'),
(153, 'John Salongo', '7', 'logout', 'Makerere has logged out ', '2015-11-03 07:51:27', '::1', 'www.'),
(154, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-03 07:51:35', '::1', 'www.'),
(155, 'Douglas Were', '6', 'update', 'John Salongos user information updated', '2015-11-03 08:29:30', '::1', ''),
(156, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-04 05:41:15', '::1', 'www.'),
(157, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-05 04:36:35', '::1', 'www.'),
(158, 'Douglas Were', '6', 'saved daily weather information', 'Makereresubmit of weather information ', '2015-11-05 13:31:59', '::1', ''),
(159, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-06 05:48:23', '::1', 'www.'),
(160, 'Douglas Were', '6', 'saved daily weather information', 'Makereresubmit of weather information ', '2015-11-06 12:47:25', '::1', ''),
(161, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-09 04:29:29', '::1', 'www.'),
(162, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-09 09:05:25', '::1', 'www.'),
(163, 'Douglas Were', '6', 'save', 'meta information saved ', '2015-11-09 12:16:14', '::1', ''),
(164, 'Douglas Were', '6', 'saved daily weather information', 'Makereresubmit of weather information ', '2015-11-09 12:18:04', '::1', ''),
(165, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-17 12:24:41', '::1', 'www.'),
(166, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-20 12:08:59', '::1', 'www.'),
(167, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-21 12:19:32', '::1', 'www.'),
(168, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-23 06:54:26', '::1', 'www.'),
(169, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-11-28 09:13:46', '::1', 'www.'),
(170, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-01 08:58:41', '::1', 'www.'),
(171, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-02 07:03:09', '::1', 'www.'),
(172, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-02 11:21:11', '::1', 'www.'),
(173, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-03 06:04:11', '::1', 'www.'),
(174, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-04 08:14:23', '::1', 'www.'),
(175, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-05 05:54:03', '::1', 'www.'),
(176, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-06 04:48:57', '::1', 'www.'),
(177, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:04:14', '', ''),
(178, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:19:09', '', ''),
(179, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:19:45', '', ''),
(180, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:22:41', '', ''),
(181, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:23:32', '', ''),
(182, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:25:16', '', ''),
(183, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:29:29', '', ''),
(184, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:29:30', '', ''),
(185, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 05:29:31', '', ''),
(186, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 07:52:15', '', ''),
(187, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 07:52:17', '', ''),
(188, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 07:52:18', '', ''),
(189, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 08:07:04', '', ''),
(190, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 08:07:05', '', ''),
(191, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 08:07:06', '', ''),
(192, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 09:26:26', '', ''),
(193, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 09:26:27', '', ''),
(194, 'user', 'user', 'saved from synchronisation', 'Makereresubmit of weather information from client ', '2015-12-06 09:26:28', '', ''),
(195, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-07 07:36:30', '::1', 'www.'),
(196, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-10 17:59:30', '::1', 'www.'),
(197, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-12 05:16:17', '::1', 'www.'),
(198, 'Douglas Were', '6', 'save', 'Entebbe station added ', '2015-12-12 05:20:40', '::1', ''),
(199, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-14 05:26:53', '::1', 'www.'),
(200, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-15 06:12:22', '::1', 'www.'),
(201, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-16 07:59:55', '::1', 'www.'),
(202, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-16 10:28:43', '::1', 'www.'),
(203, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-18 06:40:52', '::1', 'www.'),
(204, 'Douglas Were', '', 'saved daily weather information', 'submit of weather information ', '2015-12-18 15:34:12', '', ''),
(205, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-18 15:20:34', '::1', 'www.'),
(206, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-12-18 15:29:48', '::1', 'www.'),
(207, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-01-04 09:44:08', '::1', 'www.'),
(208, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-01-05 06:37:50', '::1', 'www.'),
(209, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-01-15 14:35:49', '::1', 'www.'),
(210, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-01-16 06:02:35', '::1', 'www.'),
(211, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-01-16 06:06:39', '::1', 'www.'),
(212, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-01-16 06:29:33', '::1', 'www.'),
(213, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-01-16 07:29:19', '::1', 'www.'),
(214, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-01-16 07:29:27', '::1', 'www.'),
(215, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-01-16 07:38:44', '::1', 'www.'),
(216, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-01-25 14:44:01', '127.0.0.1', 'www.'),
(217, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-02-15 07:30:42', '::1', 'www.'),
(218, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-02-15 12:44:32', '::1', 'www.'),
(219, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-02-17 05:45:14', '::1', 'www.'),
(220, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-05-13 08:27:07', '::1', 'www.'),
(221, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-14 09:11:05', '::1', 'www.'),
(222, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-14 15:38:10', '::1', 'www.'),
(223, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-16 06:03:03', '::1', 'www.'),
(224, 'Douglas Were', '6', 'update', 'John Salongosfdgfdgdf user information updated', '2016-06-16 07:21:41', '::1', ''),
(225, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-06-16 07:50:24', '::1', 'www.'),
(226, 'Mungau Caphers', '14', 'login', 'Mungau Caphers has logged in ', '2016-06-16 07:50:35', '::1', 'www.'),
(227, 'Mungau Caphers', '14', 'update', 'Hellen Kato user information updated', '2016-06-16 07:51:14', '::1', ''),
(228, 'Mungau Caphers', '14', 'update', 'Hellen Kato user information updated', '2016-06-16 07:54:41', '::1', ''),
(229, 'Mungau Caphers', '14', 'update', 'Hellen Kato user information updated', '2016-06-16 07:54:52', '::1', ''),
(230, 'Mungau Caphers', '14', 'update', 'Collins Othira user information updated', '2016-06-16 08:02:51', '::1', ''),
(231, 'Mungau Caphers', '14', 'update', 'Entebbe station updated', '2016-06-16 08:39:18', '::1', ''),
(232, 'Mungau Caphers', '14', 'update', 'Entebbe station updated', '2016-06-16 08:41:57', '::1', ''),
(233, 'Mungau Caphers', '14', 'login', 'Mungau Caphers has logged in ', '2016-06-16 10:04:30', '::1', 'www.'),
(234, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-16 18:20:15', '127.0.0.1', 'www.'),
(235, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-06-16 18:21:35', '127.0.0.1', 'www.'),
(236, 'Mungau Caphers', '14', 'login', 'Mungau Caphers has logged in ', '2016-06-16 18:21:46', '127.0.0.1', 'www.'),
(237, 'Mungau Caphers', '14', 'login', 'Mungau Caphers has logged in ', '2016-06-17 05:42:54', '127.0.0.1', 'www.'),
(238, 'Mungau Caphers', '14', 'logout', 'Makerere has logged out ', '2016-06-17 05:49:31', '127.0.0.1', 'www.'),
(239, 'Mungau Caphers', '14', 'login', 'Mungau Caphers has logged in ', '2016-06-17 05:49:42', '127.0.0.1', 'www.'),
(240, 'Mungau Caphers', '14', 'logout', 'Makerere has logged out ', '2016-06-17 09:25:06', '127.0.0.1', 'www.'),
(241, 'Mungau Caphers', '14', 'login', 'Mungau Caphers has logged in ', '2016-06-17 09:25:17', '127.0.0.1', 'www.'),
(242, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-19 20:17:29', '::1', 'www.'),
(243, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-20 05:25:38', '::1', 'www.'),
(244, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-06-20 05:28:28', '::1', 'www.'),
(245, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-20 05:28:31', '::1', 'www.'),
(246, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-21 15:36:55', '::1', 'www.'),
(247, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-22 05:00:20', '::1', 'www.'),
(248, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-23 10:57:14', '::1', 'www.'),
(249, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-26 11:47:40', '::1', 'www.'),
(250, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-06-26 11:50:07', '::1', 'www.'),
(251, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-26 11:50:46', '::1', 'www.'),
(252, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-06-26 11:50:51', '::1', 'www.'),
(253, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-26 11:50:58', '::1', 'www.'),
(254, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-26 20:24:02', '::1', 'www.'),
(255, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-29 15:28:49', '::1', 'www.'),
(256, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-06-29 18:42:26', '::1', 'www.'),
(257, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-07-21 11:54:51', '::1', 'www.'),
(258, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-07-22 04:18:42', '::1', 'www.'),
(259, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-07-22 06:27:46', '::1', 'www.'),
(260, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-07-22 06:27:56', '::1', 'www.'),
(261, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-07-25 08:16:42', '::1', 'www.'),
(262, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-09-15 17:44:14', '::1', 'www.'),
(263, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-10-07 06:26:32', '::1', 'www.'),
(264, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-10-07 13:24:41', '::1', 'www.'),
(265, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-10-13 07:55:46', '::1', 'www.'),
(266, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-10-19 05:51:05', '::1', 'www.'),
(267, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-10-19 05:54:49', '::1', 'www.'),
(268, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-10-19 05:55:24', '::1', 'www.'),
(269, 'Douglas Were', '6', 'logout', 'Makerere has logged out ', '2016-10-19 06:03:57', '::1', 'www.'),
(270, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2016-10-19 06:04:00', '::1', 'www.');

-- --------------------------------------------------------

--
-- Table structure for table `metar`
--

CREATE TABLE IF NOT EXISTS `metar` (
  `name` text,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station` varchar(255) DEFAULT NULL,
  `type` text,
  `datetime` varchar(50) DEFAULT NULL,
  `timezone` text,
  `wind_direction` double DEFAULT NULL,
  `wind_speed` double DEFAULT NULL,
  `unit` text,
  `visibility` double DEFAULT NULL,
  `present_weather` text,
  `cloud` varchar(255) DEFAULT NULL,
  `air_temperature` double DEFAULT NULL,
  `humidity` double DEFAULT NULL,
  `dew_temperature` double DEFAULT NULL,
  `wet_bulb` double DEFAULT NULL,
  `station_pressure_hpa` double DEFAULT NULL,
  `sea_pressure_hpa` double DEFAULT NULL,
  `recent_weather` text,
  `submitted` varchar(50) DEFAULT NULL,
  `user` text,
  `day` varchar(50) DEFAULT NULL,
  `approved` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41476 ;

--
-- Dumping data for table `metar`
--

INSERT INTO `metar` (`name`, `id`, `station`, `type`, `datetime`, `timezone`, `wind_direction`, `wind_speed`, `unit`, `visibility`, `present_weather`, `cloud`, `air_temperature`, `humidity`, `dew_temperature`, `wet_bulb`, `station_pressure_hpa`, `sea_pressure_hpa`, `recent_weather`, `submitted`, `user`, `day`, `approved`) VALUES
('MUK', 0, 'HEK', 'META', '', '', NULL, NULL, NULL, 0, 'Hz', '', 0, 0, 0, 0, 0, 0, '', '2016-06-16', NULL, '2016-06-16', NULL),
('', 1, 'HK63', 'META', '140900Z', 'GMT', 245, 8, 'KT', 9000, 'Hz', 'SCT023 FEW045CB SCT000', 25.3, 70, 17.5, 20, 886.1, 0, 'RETS', '2015-07-08 00:00:00', 'test', '2016-06-21', 'F'),
('', 2, 'HK63', 'META', '141200Z', 'GMT', 345, 23, 'KT', 3333, 'RA', 'SCT234 FEW234TCU BRN232', 26, 80, 20.8, 23, 0, 0, 'RETS', '2015-07-08 06:07:20', 'test', '2016-06-21', 'Douglas Were'),
('', 3, 'HK63', 'META', '091500Z', 'GMT', 245, 34, 'KT', 6000, 'Fg', 'FEW018 SCT234TCU BRN345 FEW234', 19, 80, 15.2, 16, 886.1, 0, '', '2015-07-09 05:07:11', 'test', '2016-06-21', NULL),
('Makerere', 4, 'HK63', 'META', '141500Z', 'GMT', 240, 5, 'KT', 9900, 'Ts', 'SCT026 FEW030CB0 SCT130 SCT120', 18, 73, 13.5, 15, 886.5, 0, '', '2016-06-17', 'Mungau Caphers', '2016-06-17', 'Douglas Were'),
('', 5, 'HK63', 'META', '121500Z', 'GMT', 340, 12, 'KT', 9999, 'Fg', 'FEW018 FEW020CBO SCT120 BKN130', 21.1, 77, 16.17, 18, 886.5, 0, '', '2015-07-12 07:07:00', 'test', '2015-11-04', NULL),
('', 7, 'HK63', 'META', '011100Z', 'GMT', 180, 9, 'KT', 9000, 'Fg', 'FEW028 FEW030CBO SCT170 SCT170', 24.3, 63, 15.12, 18, 858.8, 0, '', '2015-07-12 20:07:40', 'test', '2015-11-09', NULL),
('', 8, 'HK63', 'META', '161700Z', 'GMT', 245, 4, 'KT', 7000, 'Fg', 'FEW028 FEW030CBO SCT170 SCT170', 22.9, 34, 7.48, 12, 886.7, 0, 'RETS', '2015-07-16 17:07:56', 'test', '2015-11-06', NULL),
('', 9, 'HK63', 'META', '231200Z', 'GMT', 120, 10, 'KT', 9999, 'Fg', 'sct022 few024cb sct120', 21, 32, 6.72, 11, 886.5, 887.5, '', '2015-10-23 12:10:12', 'test', '2015-10-23', NULL),
('', 10, 'HK63', 'META', '240600Z', 'GMT', 150, 10, 'KT', 9999, 'Fg', 'SCT022 FEW024CB SCT140', 21, 80, 16.8, 18, 888.6, 0, '', '2015-10-24 10:10:14', 'test', '2015-10-24', NULL),
('', 11, 'HK63', 'META', '241200Z', 'GMT', 130, 7, 'KT', 9999, 'RA', 'FEW018 FEW020CB SCT120', 26, 70, 18.2, 21, 886.9, 0, '', '2015-10-24 10:10:11', 'test', '2015-01-09', NULL),
('', 12, 'HK63', 'META', '030700Z', 'GMT', 230, 23, 'KT', 9999, 'Hz', 'SCT022 FEW024CB SCT140', 23, 80, 18.4, 20, 250, 0, '', '2015-11-03 07:11:27', 'test', '2016-01-02', NULL),
('', 13, 'HK63', 'META', '040700Z', 'GMT', 350, 10, 'KT', 9999, 'Hz', 'SCT022 FEW024CB SCT120', 20, 70, 14, 16, 178.1, 0, '', '2015-11-03 07:11:21', 'test', '2015-11-03', NULL),
('', 14, 'HK63', 'META', '050900Z', 'GMT', 346, 25, 'KT', 9999, 'Hz', 'SCT034 BRK0566B', 17, 70, 11.9, 14, 880, 0, '', '2015-11-05 13:11:25', 'test', '2015-11-05', NULL),
('', 15, 'HK63', 'META', '051500Z', 'GMT', 276, 78, 'KT', 9999, 'Hz', 'SCT034 BRK0566B', 27, 67, 18.09, 21, 779.1, 0, '', '2015-11-05 13:11:25', 'test', '2015-11-05', NULL),
('', 16, 'HK63', 'META', '061200Z', 'GMT', 40, 90, 'KT', 9999, 'Fg', 'SCT034 BRK0566B', 21, 76, 15.96, 18, 777.9, 0, '', '2015-11-06 12:11:40', 'test', '2015-11-06', NULL),
('', 17, 'HK63', 'META', '060900Z', 'GMT', 108, 5, 'KT', 9999, 'Fg', 'FEW018 FEW020CB SCT120', 19, 90, 17.1, 18, 888.8, 304.5, '', '2015-11-06 12:11:52', 'test', '2015-11-06', NULL),
('', 18, 'HK63', 'SPECI', '061500Z', 'GMT', 230, 12, 'KT', 1000, 'Hz', 'SCT234 FEW234TCU BRN232', 35, 76, 26.6, 29, 666.7, 0, '', '2015-11-06 12:11:41', 'test', '2015-11-06', NULL),
('', 19, 'WSE112', 'META', '090900Z', 'GMT', 324, 10, 'KT', 9999, 'RA', 'FEW028 FEW030CBO SCT170 SCT170', 19, 78, 14.82, 16, 885.6, 0, '', '2015-11-09 08:11:42', 'test', '2015-11-09', NULL),
('', 20, 'HK63', 'META', '091500Z', 'GMT', 20, 12, 'KT', 8999, 'Fg', 'SCT034 BRK0566B', 17, 67, 11.39, 13, 889.1, 0, '', '2015-11-09 12:11:14', 'Douglas Were', '2015-11-09', NULL),
('', 23, 'HK63', 'META', '2700Z', 'GMT', 148, 4, NULL, 6500, 'Rain', 'SCT87 BRK23 ', 32, 70, 22, 55, 885.1, 885.1, 'Rain', '2015-12-17 12:12:24', 'Douglas Were', '2015-12-17', NULL),
('', 24, 'HK63', 'META', '2700Z', 'GMT', 256, 18, NULL, 93000, 'Wet', 'SCT45W ', 23, 89, 20.47, 48.60666666666666, 885, 885, 'Wet', '2015-12-17 12:12:27', 'Douglas Were', '2015-12-17', NULL),
('Makerere', 26, 'HK63', 'META', '051000Z', 'GMT', 340, 13, 'KT', 8980, 'Hz', 'FEW018 FEW020CB SCT120', 34, 56, 19.04, 24, 342.2, 234.1, '', '2016-06-17', 'Mungau Caphers', '2016-06-20', NULL),
('Makerere', 27, 'HK63', 'META', '091500z', 'GMT', 0, NULL, '', 0, '', '', 43, 56, 56.1, 123, 232, 0, 'RETS', '2016-06-17', 'Mungau Caphers', '2016-06-20', NULL),
('Makerere', 41470, 'HK63', 'SPECI', '091500z', 'GMT', 230, NULL, 'MS', 8000, 'Ts', 'FEW018 FEW00-BR', 89, 56, 68, 12.3, 889.1, 23, 'RE', '2016-06-17', 'Mungau Caphers', '2016-06-21', 'Douglas Were'),
('Makerere', 41475, 'HK63', 'METAR', '201200Z', 'GMT', 123, NULL, NULL, 0, 'Hz', 'SCT023 FEW045CB SCT000', NULL, 123, 28.29, 64.2466666666667, 123, 123, 'RETS', '2016-06-20 12:06:38', '', '2016-06-21', 'Douglas Were');

-- --------------------------------------------------------

--
-- Table structure for table `metars`
--

CREATE TABLE IF NOT EXISTS `metars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `cc` varchar(255) DEFAULT NULL,
  `yg` varchar(255) DEFAULT NULL,
  `df` varchar(255) DEFAULT NULL,
  `ww` varchar(255) DEFAULT NULL,
  `w1` varchar(255) DEFAULT NULL,
  `nc` varchar(255) DEFAULT NULL,
  `tt` varchar(255) DEFAULT NULL,
  `qnh` varchar(255) DEFAULT NULL,
  `qni` varchar(255) DEFAULT NULL,
  `qfh` varchar(255) DEFAULT NULL,
  `qfi` varchar(255) DEFAULT NULL,
  `re` varchar(255) DEFAULT NULL,
  `trend` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `station` varchar(255) DEFAULT NULL,
  `approved` varchar(255) DEFAULT NULL,
  `by` varchar(255) DEFAULT NULL,
  `when` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `metars`
--

INSERT INTO `metars` (`id`, `day`, `type`, `cc`, `yg`, `df`, `ww`, `w1`, `nc`, `tt`, `qnh`, `qni`, `qfh`, `qfi`, `re`, `trend`, `user`, `station`, `approved`, `by`, `when`) VALUES
(1, '2016-07-22', 'METAR', 'HK63', '220000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(2, '2016-07-22', 'SPECI', 'HK63', '220100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(3, '2016-07-22', 'METAR', 'HK63', '220200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:26:24'),
(4, '2016-07-22', '', 'HK63', '220300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:26:25'),
(5, '2016-07-22', '', 'HK63', '220400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(6, '2016-07-22', '', 'HK63', '220500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(7, '2016-07-22', '', 'HK63', '220600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(8, '2016-07-22', '', 'HK63', '220700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(9, '2016-07-22', '', 'HK63', '220800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(10, '2016-07-22', '', 'HK63', '220900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(11, '2016-07-22', '', 'HK63', '221000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(12, '2016-07-22', '', 'HK63', '221100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(13, '2016-07-22', '', 'HK63', '221200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(14, '2016-07-22', '', 'HK63', '221300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(15, '2016-07-22', '', 'HK63', '221400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(16, '2016-07-22', '', 'HK63', '221500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(17, '2016-07-22', '', 'HK63', '221600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(18, '2016-07-22', '', 'HK63', '221700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(19, '2016-07-22', '', 'HK63', '221800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(20, '2016-07-22', '', 'HK63', '221900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(21, '2016-07-22', '', 'HK63', '222000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(22, '2016-07-22', '', 'HK63', '222100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(23, '2016-07-22', '', 'HK63', '222200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(24, '2016-07-22', '', 'HK63', '222300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-22 09:09:37'),
(25, '2016-07-25', '', 'HK63', '250000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(26, '2016-07-25', '', 'HK63', '250100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(27, '2016-07-25', '', 'HK63', '250200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(28, '2016-07-25', '', 'HK63', '250300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(29, '2016-07-25', '', 'HK63', '250400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(30, '2016-07-25', '', 'HK63', '250500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(31, '2016-07-25', '', 'HK63', '250600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(32, '2016-07-25', '', 'HK63', '250700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(33, '2016-07-25', '', 'HK63', '250800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(34, '2016-07-25', '', 'HK63', '250900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(35, '2016-07-25', '', 'HK63', '251000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(36, '2016-07-25', '', 'HK63', '251100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(37, '2016-07-25', '', 'HK63', '251200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(38, '2016-07-25', '', 'HK63', '251300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(39, '2016-07-25', '', 'HK63', '251400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(40, '2016-07-25', '', 'HK63', '251500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(41, '2016-07-25', '', 'HK63', '251600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(42, '2016-07-25', '', 'HK63', '251700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(43, '2016-07-25', '', 'HK63', '251800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(44, '2016-07-25', '', 'HK63', '251900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(45, '2016-07-25', '', 'HK63', '252000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(46, '2016-07-25', '', 'HK63', '252100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(47, '2016-07-25', '', 'HK63', '252200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(48, '2016-07-25', '', 'HK63', '252300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-07-25 11:17:00'),
(49, '2016-09-15', '', 'HK63', '150000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(50, '2016-09-15', '', 'HK63', '150100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(51, '2016-09-15', '', 'HK63', '150200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(52, '2016-09-15', '', 'HK63', '150300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(53, '2016-09-15', '', 'HK63', '150400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(54, '2016-09-15', '', 'HK63', '150500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(55, '2016-09-15', '', 'HK63', '150600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(56, '2016-09-15', '', 'HK63', '150700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(57, '2016-09-15', '', 'HK63', '150800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(58, '2016-09-15', '', 'HK63', '150900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(59, '2016-09-15', '', 'HK63', '151000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(60, '2016-09-15', '', 'HK63', '151100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(61, '2016-09-15', '', 'HK63', '151200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(62, '2016-09-15', '', 'HK63', '151300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(63, '2016-09-15', '', 'HK63', '151400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(64, '2016-09-15', '', 'HK63', '151500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(65, '2016-09-15', '', 'HK63', '151600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(66, '2016-09-15', '', 'HK63', '151700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(67, '2016-09-15', '', 'HK63', '151800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(68, '2016-09-15', '', 'HK63', '151900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(69, '2016-09-15', '', 'HK63', '152000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:25'),
(70, '2016-09-15', '', 'HK63', '152100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:26'),
(71, '2016-09-15', '', 'HK63', '152200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:26'),
(72, '2016-09-15', '', 'HK63', '152300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-09-15 20:44:26'),
(73, '2016-10-07', '', 'HK63', '070000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(74, '2016-10-07', '', 'HK63', '070100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(75, '2016-10-07', '', 'HK63', '070200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(76, '2016-10-07', '', 'HK63', '070300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(77, '2016-10-07', '', 'HK63', '070400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(78, '2016-10-07', '', 'HK63', '070500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(79, '2016-10-07', '', 'HK63', '070600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(80, '2016-10-07', '', 'HK63', '070700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(81, '2016-10-07', '', 'HK63', '070800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(82, '2016-10-07', '', 'HK63', '070900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(83, '2016-10-07', '', 'HK63', '071000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(84, '2016-10-07', '', 'HK63', '071100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(85, '2016-10-07', '', 'HK63', '071200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(86, '2016-10-07', '', 'HK63', '071300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(87, '2016-10-07', '', 'HK63', '071400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(88, '2016-10-07', '', 'HK63', '071500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(89, '2016-10-07', '', 'HK63', '071600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(90, '2016-10-07', '', 'HK63', '071700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(91, '2016-10-07', '', 'HK63', '071800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(92, '2016-10-07', '', 'HK63', '071900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(93, '2016-10-07', '', 'HK63', '072000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(94, '2016-10-07', '', 'HK63', '072100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(95, '2016-10-07', '', 'HK63', '072200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(96, '2016-10-07', '', 'HK63', '072300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-07 09:26:57'),
(97, '2016-10-13', '', 'HK63', '130000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(98, '2016-10-13', '', 'HK63', '130100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(99, '2016-10-13', '', 'HK63', '130200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(100, '2016-10-13', '', 'HK63', '130300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(101, '2016-10-13', '', 'HK63', '130400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(102, '2016-10-13', '', 'HK63', '130500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(103, '2016-10-13', '', 'HK63', '130600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(104, '2016-10-13', '', 'HK63', '130700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(105, '2016-10-13', '', 'HK63', '130800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(106, '2016-10-13', '', 'HK63', '130900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(107, '2016-10-13', '', 'HK63', '131000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(108, '2016-10-13', '', 'HK63', '131100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(109, '2016-10-13', '', 'HK63', '131200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(110, '2016-10-13', '', 'HK63', '131300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(111, '2016-10-13', '', 'HK63', '131400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(112, '2016-10-13', '', 'HK63', '131500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(113, '2016-10-13', '', 'HK63', '131600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(114, '2016-10-13', '', 'HK63', '131700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(115, '2016-10-13', '', 'HK63', '131800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(116, '2016-10-13', '', 'HK63', '131900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(117, '2016-10-13', '', 'HK63', '132000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(118, '2016-10-13', '', 'HK63', '132100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(119, '2016-10-13', '', 'HK63', '132200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(120, '2016-10-13', '', 'HK63', '132300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-13 12:21:41'),
(121, '2016-10-19', '', 'HK63', '190000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(122, '2016-10-19', '', 'HK63', '190100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(123, '2016-10-19', '', 'HK63', '190200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(124, '2016-10-19', '', 'HK63', '190300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(125, '2016-10-19', '', 'HK63', '190400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(126, '2016-10-19', '', 'HK63', '190500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(127, '2016-10-19', '', 'HK63', '190600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(128, '2016-10-19', '', 'HK63', '190700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(129, '2016-10-19', '', 'HK63', '190800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(130, '2016-10-19', '', 'HK63', '190900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(131, '2016-10-19', '', 'HK63', '191000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(132, '2016-10-19', '', 'HK63', '191100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(133, '2016-10-19', '', 'HK63', '191200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(134, '2016-10-19', '', 'HK63', '191300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(135, '2016-10-19', '', 'HK63', '191400Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(136, '2016-10-19', '', 'HK63', '191500Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(137, '2016-10-19', '', 'HK63', '191600Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(138, '2016-10-19', '', 'HK63', '191700Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(139, '2016-10-19', '', 'HK63', '191800Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(140, '2016-10-19', '', 'HK63', '191900Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(141, '2016-10-19', '', 'HK63', '192000Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(142, '2016-10-19', '', 'HK63', '192100Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(143, '2016-10-19', '', 'HK63', '192200Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18'),
(144, '2016-10-19', '', 'HK63', '192300Z', '', '', '', '', '', '', '', '', '', '', '', 'Douglas Were', 'Makerere', 'false', NULL, '2016-10-19 08:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `rain`
--

CREATE TABLE IF NOT EXISTS `rain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `station` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `rain` varchar(50) DEFAULT NULL,
  `time` varchar(60) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `submitted` varchar(50) DEFAULT NULL,
  `approved` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `rain`
--

INSERT INTO `rain` (`id`, `name`, `station`, `date`, `rain`, `time`, `duration`, `user`, `submitted`, `approved`) VALUES
(1, NULL, '400098', '2015-07-29', '0.9', '11:19:30', '2', 'Douglas Were', '2015-07-29', 'F'),
(2, NULL, '400098', '2015-07-29', '0.2', '11:09:45', '2', 'Douglas Were', '2015-07-29', 'F'),
(3, NULL, '400098', '2015-10-21', '12', '08:29:30', '3', 'Douglas Were', '2015-10-21', 'F'),
(4, NULL, '400098', '2015-10-21', '12', '08:29:30', '3', 'Douglas Were', '2015-10-21', 'F'),
(5, NULL, '400098', '2015-10-21', '0.4', '09:40:15', '2', 'Douglas Were', '2015-10-21', NULL),
(6, NULL, '400098', '2015-10-21', '0.5', '09:42:15', '1', 'Douglas Were', '2015-10-21', NULL),
(7, NULL, '400098', '2015-10-21', '0.5', '09:42:15', '1', 'Douglas Were', '2015-10-21', NULL),
(8, NULL, '400098', '2015-10-21', '0.5', '09:42:15', '1', 'Douglas Were', '2015-10-21', NULL),
(9, NULL, '400098', '2015-10-21', '0.5', '09:42:15', '1', 'Douglas Were', '2015-10-21', NULL),
(10, NULL, '400098', '2015-10-21', '0.1', '09:49:45', '4', 'Douglas Were', '2015-10-21', NULL),
(11, NULL, '400098', '2015-10-21', '0.1', '09:42:15', '4', 'Douglas Were', '2015-10-21', NULL),
(12, NULL, '400098', '2015-10-21', '0.1', '09:42:15', '4', 'Douglas Were', '2015-10-21', NULL),
(13, NULL, '400098', '2015-10-23', '0.2', '12:35:15', '2', 'Douglas Were', '2015-10-23', NULL),
(14, NULL, '400098', '2015-10-22', '0.5', '15:41:30', '2', 'Douglas Were', '2015-10-23', 'Douglas Were'),
(15, NULL, '400098', '2015-10-21', '0.5', '15:41:30', '2', 'Douglas Were', '2015-10-23', NULL),
(16, 'Makerere', '400098', '2016-06-03', '1.3', '16:11:15', '6', 'Mungau Caphers', '2016-06-17', 'F'),
(17, 'Makerere', '400098', '2016-06-03', '0.2', '13:00', '2', 'Mungau Caphers', '2016-06-17', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `actions` text,
  `views` text,
  `status` text NOT NULL,
  `created` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `actions`, `views`, `status`, `created`) VALUES
(7, 'Data', 'create edit update save', 'reports', 'true', '2015-11-03'),
(8, 'Manager', 'edit update save delete manage', 'validations all manage reports input ', 'true', '2015-11-03'),
(11, 'Observer', 'submit save create view', ' input', 'true', '2015-11-03'),
(12, 'O/C', 'approve view generate', ' validate', 'true', '2015-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `location` text,
  `country` text,
  `region` text,
  `code` varchar(20) DEFAULT NULL,
  `city` text,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `altitude` varchar(50) DEFAULT NULL,
  `opened` date DEFAULT NULL,
  `closed` date DEFAULT NULL,
  `status` text,
  `type` text,
  `created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `number`, `name`, `location`, `country`, `region`, `code`, `city`, `latitude`, `longitude`, `altitude`, `opened`, `closed`, `status`, `type`, `created`) VALUES
(1, '400098', 'Makerere', 'Kampala', 'Uganda', 'Central', 'HK63', 'Kampala', '90.09 08', '78 00 00', '4000', '0000-00-00', '0000-00-00', 'active', 'Agro', '2015-07-07'),
(2, '8932066', 'Entebbe', 'Entebbe', 'Uganda', 'Kampala', 'h234', 'Entebbe', '0.0078', '32.34', '34', '0000-00-00', '0000-00-00', 'active', '', '2015-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `synoptic`
--

CREATE TABLE IF NOT EXISTS `synoptic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station` varchar(255) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `yy` varchar(50) DEFAULT NULL,
  `gg` varchar(50) DEFAULT NULL,
  `iw` varchar(50) DEFAULT NULL,
  `ir` int(11) DEFAULT NULL,
  `ix` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `www` int(11) DEFAULT NULL,
  `vv` int(11) DEFAULT NULL,
  `n` int(11) DEFAULT NULL,
  `dd` int(11) DEFAULT NULL,
  `ff` int(11) DEFAULT NULL,
  `gp1` varchar(50) DEFAULT NULL,
  `sn` varchar(50) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `gp2` varchar(50) DEFAULT NULL,
  `td` int(11) DEFAULT NULL,
  `gp3` varchar(50) DEFAULT NULL,
  `Po` double DEFAULT NULL,
  `gp4` varchar(50) DEFAULT NULL,
  `sis` varchar(50) DEFAULT NULL,
  `gisis` int(11) DEFAULT NULL,
  `hhh` int(11) DEFAULT NULL,
  `gp6` varchar(50) DEFAULT NULL,
  `rrr` int(11) DEFAULT NULL,
  `tr` int(11) DEFAULT NULL,
  `gp7` varchar(50) DEFAULT NULL,
  `present` int(11) DEFAULT NULL,
  `past` int(11) DEFAULT NULL,
  `gp8` varchar(50) DEFAULT NULL,
  `nh` int(11) DEFAULT NULL,
  `cl` int(11) DEFAULT NULL,
  `cg` varchar(50) DEFAULT NULL,
  `cm` int(11) DEFAULT NULL,
  `ch` int(11) DEFAULT NULL,
  `si3` varchar(50) DEFAULT NULL,
  `Tq` int(11) DEFAULT NULL,
  `Ro` int(11) DEFAULT NULL,
  `R1` int(11) DEFAULT NULL,
  `Tx` int(11) DEFAULT NULL,
  `Tn` varchar(50) DEFAULT NULL,
  `EE` int(11) DEFAULT NULL,
  `E` int(11) DEFAULT NULL,
  `sss` int(11) DEFAULT NULL,
  `pchange` int(11) DEFAULT NULL,
  `p24` int(11) DEFAULT NULL,
  `rr` int(11) DEFAULT NULL,
  `tr1` int(11) DEFAULT NULL,
  `ns` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `hs` int(11) DEFAULT NULL,
  `ns1` int(11) DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `hs1` int(11) DEFAULT NULL,
  `ns2` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `hs2` int(11) DEFAULT NULL,
  `supplementary` text,
  `si5` varchar(50) DEFAULT NULL,
  `wb` double DEFAULT NULL,
  `rh` double DEFAULT NULL,
  `vap` double DEFAULT NULL,
  `user` text NOT NULL,
  `submitted` varchar(20) NOT NULL,
  `approved` text,
  `ii` varchar(50) DEFAULT NULL,
  `iii` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `synoptic`
--

INSERT INTO `synoptic` (`id`, `station`, `date`, `yy`, `gg`, `iw`, `ir`, `ix`, `h`, `www`, `vv`, `n`, `dd`, `ff`, `gp1`, `sn`, `t`, `gp2`, `td`, `gp3`, `Po`, `gp4`, `sis`, `gisis`, `hhh`, `gp6`, `rrr`, `tr`, `gp7`, `present`, `past`, `gp8`, `nh`, `cl`, `cg`, `cm`, `ch`, `si3`, `Tq`, `Ro`, `R1`, `Tx`, `Tn`, `EE`, `E`, `sss`, `pchange`, `p24`, `rr`, `tr1`, `ns`, `c`, `hs`, `ns1`, `c1`, `hs1`, `ns2`, `c2`, `hs2`, `supplementary`, `si5`, `wb`, `rh`, `vap`, `user`, `submitted`, `approved`, `ii`, `iii`) VALUES
(26, 'Makerere', '2016-07-22', NULL, '00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 900.2, 0, 'Douglas Were', '08:11:37', 'F', '63', NULL),
(27, 'Makerere', '2016-07-22', NULL, '03', 'Kt', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 886.1, 0, 'Douglas Were', '08:11:37', 'F', '63', NULL),
(28, 'Makerere', '2016-07-22', NULL, '06', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '08:11:37', 'F', '63', NULL),
(29, 'Makerere', '2016-07-22', NULL, '09', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '08:11:37', 'F', '63', NULL),
(30, 'Makerere', '2016-07-22', NULL, '12', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '08:11:37', 'F', '63', NULL),
(31, 'Makerere', '2016-07-22', NULL, '15', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '08:11:37', 'F', '63', NULL),
(32, 'Makerere', '2016-07-22', NULL, '18', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '08:11:37', 'F', '63', NULL),
(33, 'Makerere', '2016-07-22', NULL, '21', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '08:11:37', 'F', '63', NULL),
(34, 'Makerere', '2016-07-25', NULL, '00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '11:17:23', 'F', '63', NULL),
(35, 'Makerere', '2016-07-25', NULL, '03', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '11:17:23', 'F', '63', NULL),
(36, 'Makerere', '2016-07-25', NULL, '06', 'KT', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '11:17:23', 'F', '63', NULL),
(37, 'Makerere', '2016-07-25', NULL, '09', 'KT', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '11:17:23', 'F', '63', NULL),
(38, 'Makerere', '2016-07-25', NULL, '12', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '11:17:23', 'F', '63', NULL),
(39, 'Makerere', '2016-07-25', NULL, '15', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '11:17:23', 'F', '63', NULL),
(40, 'Makerere', '2016-07-25', NULL, '18', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '11:17:23', 'F', '63', NULL),
(41, 'Makerere', '2016-07-25', NULL, '21', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '11:17:23', 'F', '63', NULL),
(42, 'Makerere', '2016-09-15', NULL, '00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '20:44:39', 'F', '63', NULL),
(43, 'Makerere', '2016-09-15', NULL, '03', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '20:44:39', 'F', '63', NULL),
(44, 'Makerere', '2016-09-15', NULL, '06', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '20:44:39', 'F', '63', NULL),
(45, 'Makerere', '2016-09-15', NULL, '09', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '20:44:39', 'F', '63', NULL),
(46, 'Makerere', '2016-09-15', NULL, '12', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '20:44:39', 'F', '63', NULL),
(47, 'Makerere', '2016-09-15', NULL, '15', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '20:44:39', 'F', '63', NULL),
(48, 'Makerere', '2016-09-15', NULL, '18', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '20:44:39', 'F', '63', NULL),
(49, 'Makerere', '2016-09-15', NULL, '21', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '20:44:39', 'F', '63', NULL),
(50, 'Makerere', '2016-10-07', NULL, '00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:29:41', 'F', '63', NULL),
(51, 'Makerere', '2016-10-07', NULL, '03', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:29:41', 'F', '63', NULL),
(52, 'Makerere', '2016-10-07', NULL, '06', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:29:41', 'F', '63', NULL),
(53, 'Makerere', '2016-10-07', NULL, '09', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:29:41', 'F', '63', NULL),
(54, 'Makerere', '2016-10-07', NULL, '12', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:29:41', 'F', '63', NULL),
(55, 'Makerere', '2016-10-07', NULL, '15', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:29:41', 'F', '63', NULL),
(56, 'Makerere', '2016-10-07', NULL, '18', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:29:41', 'F', '63', NULL),
(57, 'Makerere', '2016-10-07', NULL, '21', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:29:41', 'F', '63', NULL),
(58, 'Makerere', '2016-10-13', '46468976', '00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '12:22:25', 'F', '63', NULL),
(59, 'Makerere', '2016-10-13', NULL, '03', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '12:22:25', 'F', '63', NULL),
(60, 'Makerere', '2016-10-13', NULL, '06', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '12:22:25', 'F', '63', NULL),
(61, 'Makerere', '2016-10-13', NULL, '09', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '12:22:25', 'F', '63', NULL),
(62, 'Makerere', '2016-10-13', NULL, '12', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '12:22:25', 'F', '63', NULL),
(63, 'Makerere', '2016-10-13', NULL, '15', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '12:22:25', 'F', '63', NULL),
(64, 'Makerere', '2016-10-13', NULL, '18', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '12:22:25', 'F', '63', NULL),
(65, 'Makerere', '2016-10-13', NULL, '21', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '12:22:25', 'F', '63', NULL),
(66, 'Makerere', '2016-10-19', NULL, '00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:21:39', 'F', '63', NULL),
(67, 'Makerere', '2016-10-19', NULL, '03', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:21:39', 'F', '63', NULL),
(68, 'Makerere', '2016-10-19', NULL, '06', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:21:39', 'F', '63', NULL),
(69, 'Makerere', '2016-10-19', NULL, '09', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:21:39', 'F', '63', NULL),
(70, 'Makerere', '2016-10-19', NULL, '12', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:21:39', 'F', '63', NULL),
(71, 'Makerere', '2016-10-19', NULL, '15', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:21:39', 'F', '63', NULL),
(72, 'Makerere', '2016-10-19', NULL, '18', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:21:39', 'F', '63', NULL),
(73, 'Makerere', '2016-10-19', NULL, '21', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, 0, 0, 'Douglas Were', '09:21:39', 'F', '63', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `contact2` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `active` text NOT NULL,
  `create` date NOT NULL,
  `station` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `contact2`, `password`, `role`, `active`, `create`, `station`) VALUES
(6, 'Douglas Were', 'weredouglas@gmail.com', '0782481746', '0704914596', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator', 'false', '2015-07-22', 'Makerere'),
(7, 'John Salongos', 'info@aws.com', '0753388221', '0789237834', 'e10adc3949ba59abbe56e057f20f883e', 'Observer', 'true', '2015-11-03', 'Makerere'),
(8, 'Hellen Kato', 'hellenkato@gmail.com', '0775342145', '', 'gDUAw1d1CLJpPDd2wdDWN0uEuM/bgn+q/M9fBLSHKs21LeBeqOH69sdc+6yoegJFFvSJGOR3TYMl1cZ3G9U2yw==', 'Data', 'true', '2016-06-16', 'Makerere'),
(9, 'Manager', 'manager@aws.com', '0414237890', '0414237890', 'FBiBKJN7e2YV/cV7tiIb1TRAbQD6dI9ZYIQtT4688P+NNNQnHif8haaNMjn1MxSpVtr8QzFA1FSMdpam8gjUiA==', 'Data', 'false', '2015-10-23', 'Makerere'),
(10, 'Collins Othira', 'collinsakena@gmail.com', ' 256702848144', '0772458621', 'rHr5iQwA+E3+mc3oJHk07gaV16gLkULiduHo0YEK8IluJv0MU3z9bIgZeBprnhCn6RCtfDCOobGtHCE31wVHFg==', 'Data', 'true', '2016-06-16', 'Makerere'),
(11, 'Richard Tashobya', 'richard.tashobya@unma.go.ug', '+256772060272', '', 'X+7ouKYT8gMfGYcby+rhxTOUNIibRcfJ6y2agsTxvVdJunJdlwa49ohwetGrqr6+WBPaDwQ5MP7gPjpUIjUBkg==', 'Manager', 'false', '2015-10-23', 'Makerere'),
(14, 'Mungau Caphers', 'mungaucaphers@yahoo.com', '+256758718545', '', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator', 'false', '2015-10-23', 'Makerere');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
