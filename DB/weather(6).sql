-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2015 at 10:46 AM
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
-- Table structure for table `daily`
--

CREATE TABLE IF NOT EXISTS `daily` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `station` varchar(50) NOT NULL,
  `max` double DEFAULT NULL,
  `min` double DEFAULT NULL,
  `actual` double DEFAULT NULL,
  `anemometer` double DEFAULT NULL,
  `wind` double DEFAULT NULL,
  `maxi` double DEFAULT NULL,
  `user` text NOT NULL,
  `submitted` date NOT NULL,
  `approved` text NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `date`, `station`, `max`, `min`, `actual`, `anemometer`, `wind`, `maxi`, `user`, `submitted`, `approved`, `rain`, `thunder`, `fog`, `haze`, `storm`, `quake`, `height`, `duration`, `sunshine`, `radiationtype`, `radiation`, `evaptype1`, `evap1`, `evaptype2`, `evap2`) VALUES
(2, '2015-07-14', 'Makerere', 22, 19.7, 0.1, 0, 23, 0, 'John Salongo', '0000-00-00', '', 'true', '', '', '', 'true', 'true', '6', '9', '', '', '', '', '', '', ''),
(4, '2015-09-09', 'Makerere', 32, 16, 0.5, 67889, 12, 0, 'Douglas Were', '0000-00-00', '', 'true', 'true', 'true', 'true', 'true', 'true', NULL, '12', '', NULL, '', '', '', '', ''),
(5, '2015-09-08', 'Makerere', 26, 0.22, 1.4, 6789, 4, 0, 'Douglas Were', '0000-00-00', '', '', '', 'true', '', 'true', 'true', NULL, '34', '', NULL, '', '', '', '', ''),
(7, '2015-07-28', 'Makerere', 34, 34, 5, 56789, 12, 0, 'Douglas Were', '0000-00-00', '', '', 'true', '', '', 'true', 'true', NULL, '7', '', 'none', '', '6', '', '', ''),
(8, '2015-10-23', 'Makerere', 23.6, 20.8, 4.8, 11.4, 9, 0, 'Douglas Were', '0000-00-00', '', 'true', 'true', 'true', '', '', 'true', NULL, '3.4', '', '', '', '', '', '', ''),
(9, '2015-11-01', 'Makerere', 31, 20, 2.7, 13.4, 5, 2, 'Douglas Were', '2015-10-24', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '', '4', '', '', '', '', '', '', ''),
(10, '2015-10-21', 'Makerere', 21, 23, 0.03, 16, 21, 0, 'Douglas Were', '0000-00-00', '', 'true', '', '', '', '', 'true', NULL, '3', '', '', '', '', '', '', ''),
(11, '2015-10-19', 'Makerere', 12, 23, 2.3, 234, 6, 0, 'Douglas Were', '0000-00-00', '', 'true', '', 'true', '', 'true', 'true', NULL, '4', '', '', '', '', '', '', ''),
(12, '2015-10-13', 'Makerere', 6, 22, 0.5, 0, 8, 0, 'Douglas Were', '0000-00-00', '', 'true', 'true', 'true', '', 'true', 'true', NULL, '4', '', '', '', '', '', '', ''),
(13, '2015-11-03', 'Makerere', 21, 23, 0.5, 23, 8, 0.5, 'Douglas Were', '2015-10-27', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '', '4', '', '', '', '', '', '', ''),
(14, '2015-11-04', 'Makerere', 21, 18, 0.5, 0, 8, 0, 'Douglas Were', '0000-00-00', '', 'true', 'true', '', '', 'true', 'true', NULL, '3', '', '', '', '', '', '', ''),
(15, '2015-10-14', 'Makerere', 16, 25, 2.4, 0, 13, 0, 'John Salongo', '2015-10-30', 'false', '2.4', 'true', 'true', 'true', 'true', 'true', '', '3', '', '', '', '', '', '', ''),
(16, '2015-10-12', 'Makerere', 23, 18, 2.4, 0, 12, 0, 'Douglas Were', '0000-00-00', '', '2.4', 'true', 'true', 'true', 'true', 'true', '4', '3', '', '', '', '', '', '', ''),
(17, '2016-01-01', 'Makerere', 10, 32, 0.9, 0, 11, 0, 'John Salongo', '2015-10-30', 'false', '0.9', 'true', 'true', 'true', 'true', 'true', '', '2', '', '', '', '', '', '', ''),
(18, '2015-10-31', 'Makerere', 12, 34, 6.1, 34, 12, 0, 'Douglas Were', '0000-00-00', '', '6.1', 'true', 'true', 'true', 'true', 'true', '23', '9', '', '', '', '', '', '', ''),
(19, '2015-11-05', 'Makerere', 19, 14, 0.4, 0, 4, 0, 'Douglas Were', '2015-11-05', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '', '2', '', '', '', '', '', '', ''),
(20, '2015-11-06', 'Makerere', 23, 12, 0.8, 0, 0, 0, 'Douglas Were', '2015-11-06', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '', '', '', '', '', '', '', '', '');

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
  `submitted` datetime NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=161 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `userid`, `action`, `details`, `date`, `ip`, `url`) VALUES
(42, 'Douglas Were', '6', 'saved daily rainfall information', 'Douglas Weresubmit of weather information ', '2015-10-21 09:50:07', '::1', ''),
(44, 'Douglas Were', '6', 'saved daily rainfall information', 'Douglas Weresubmit of weather information ', '2015-10-21 09:52:21', '::1', ''),
(50, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-10-23 08:41:46', '::1', 'www.'),
(51, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-23 08:41:50', '::1', 'www.'),
(52, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-10-23 08:43:30', '::1', 'www.'),
(53, 'John Salongo', '7', 'login', 'John Salongo has logged in ', '2015-10-23 08:45:02', '::1', 'www.'),
(54, 'John Salongo', '7', 'logout', 'John Salongo has logged out ', '2015-10-23 08:51:59', '::1', 'www.'),
(55, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-23 08:52:04', '::1', 'www.'),
(56, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-10-23 08:58:41', '::1', 'www.'),
(57, 'John Salongo', '7', 'login', 'John Salongo has logged in ', '2015-10-23 08:59:00', '::1', 'www.'),
(58, 'John Salongo', '7', 'logout', 'John Salongo has logged out ', '2015-10-23 09:01:37', '::1', 'www.'),
(59, 'John Salongo', '7', 'login', 'John Salongo has logged in ', '2015-10-23 09:01:43', '::1', 'www.'),
(60, 'John Salongo', '7', 'logout', 'John Salongo has logged out ', '2015-10-23 09:02:15', '::1', 'www.'),
(61, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-23 09:02:23', '::1', 'www.'),
(62, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-10-23 09:03:05', '::1', 'www.'),
(63, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-23 09:03:10', '::1', 'www.'),
(64, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-10-23 09:03:42', '::1', 'www.'),
(65, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-23 09:03:47', '::1', 'www.'),
(66, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-10-23 09:08:35', '::1', 'www.'),
(67, 'John Salongo', '7', 'login', 'John Salongo has logged in ', '2015-10-23 09:08:40', '::1', 'www.'),
(68, 'John Salongo', '7', 'logout', 'John Salongo has logged out ', '2015-10-23 09:11:34', '::1', 'www.'),
(69, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-23 09:11:44', '::1', 'www.'),
(70, 'Douglas Were', '6', 'saved daily weather information', 'Douglas Weresubmit of weather information ', '2015-10-23 12:27:50', '::1', ''),
(71, 'Douglas Were', '6', 'saved daily rainfall information', 'Douglas Weresubmit of weather information ', '2015-10-23 12:35:33', '::1', ''),
(72, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-23 11:48:05', '::1', 'www.'),
(73, 'Douglas Were', '6', 'saved daily rainfall information', 'Douglas Weresubmit of weather information ', '2015-10-23 15:42:25', '::1', ''),
(74, 'Douglas Were', '6', 'saved daily rainfall information', 'Douglas Weresubmit of weather information ', '2015-10-23 15:42:37', '::1', ''),
(75, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-24 07:00:42', '::1', 'www.'),
(76, 'Douglas Were', '6', 'saved daily weather information', 'Douglas Weresubmit of weather information ', '2015-10-24 10:07:37', '::1', ''),
(77, 'Douglas Were', '6', 'saved daily weather information', 'Douglas Weresubmit of weather information ', '2015-10-24 10:34:48', '::1', ''),
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
(160, 'Douglas Were', '6', 'saved daily weather information', 'Makereresubmit of weather information ', '2015-11-06 12:47:25', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `metar`
--

CREATE TABLE IF NOT EXISTS `metar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station` varchar(255) NOT NULL,
  `type` text NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `timezone` text NOT NULL,
  `wind_direction` double NOT NULL,
  `wind_speed` double NOT NULL,
  `unit` text NOT NULL,
  `visibility` double NOT NULL,
  `present_weather` text NOT NULL,
  `cloud` varchar(255) NOT NULL,
  `air_temperature` double NOT NULL,
  `humidity` double NOT NULL,
  `dew_temperature` double NOT NULL,
  `wet_bulb` double NOT NULL,
  `station_pressure_hpa` double NOT NULL,
  `sea_pressure_hpa` double NOT NULL,
  `recent_weather` text NOT NULL,
  `submitted` datetime NOT NULL,
  `user` text NOT NULL,
  `day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `metar`
--

INSERT INTO `metar` (`id`, `station`, `type`, `datetime`, `timezone`, `wind_direction`, `wind_speed`, `unit`, `visibility`, `present_weather`, `cloud`, `air_temperature`, `humidity`, `dew_temperature`, `wet_bulb`, `station_pressure_hpa`, `sea_pressure_hpa`, `recent_weather`, `submitted`, `user`, `day`) VALUES
(1, 'HK63', 'META', '140900Z', 'GMT', 245, 8, 'KT', 9000, 'Hz', 'SCT023 FEW045CB SCT000', 25.3, 70, 17.5, 20, 886.1, 0, 'RETS', '2015-07-08 00:00:00', 'test', '2015-11-04'),
(2, 'HK63', 'META', '140900Z', 'GMT', 345, 23, 'KT', 3333, 'RA', 'SCT234 FEW234TCU BRN232', 26, 80, 20.8, 23, 0, 0, 'RETS', '2015-07-08 06:07:20', 'test', '2015-11-04'),
(3, 'HK63', 'META', '091500Z', 'GMT', 245, 34, 'KT', 6000, 'Fg', 'FEW018 SCT234TCU BRN345 FEW234', 19, 80, 15.2, 16, 886.1, 0, '', '2015-07-09 05:07:11', 'test', '2015-11-04'),
(4, 'HK63', 'META', '141500Z', 'GMT', 140, 5, 'KT', 9900, 'Ts', 'SCT026 FEW030CB0 SCT130 SCT120', 18, 73, 13.5, 15, 886.5, 0, '', '2015-07-11 13:07:12', 'test', '2015-11-03'),
(5, 'HK63', 'META', '121500Z', 'GMT', 340, 12, 'KT', 9999, 'Fg', 'FEW018 FEW020CBO SCT120 BKN130', 21.1, 77, 16.17, 18, 886.5, 0, '', '2015-07-12 07:07:00', 'test', '2015-11-04'),
(7, 'HK63', 'META', '010900Z', 'GMT', 180, 9, 'KT', 9000, 'Fg', 'FEW028 FEW030CBO SCT170 SCT170', 24.3, 63, 15.12, 18, 858.8, 0, '', '2015-07-12 20:07:40', 'test', '2015-11-09'),
(8, 'HK63', 'META', '161700Z', 'GMT', 245, 4, 'KT', 7000, 'Fg', 'FEW028 FEW030CBO SCT170 SCT170', 22.9, 34, 7.48, 12, 886.7, 0, 'RETS', '2015-07-16 17:07:56', 'test', '2015-11-06'),
(9, 'HK63', 'META', '231200Z', 'GMT', 120, 10, 'KT', 9999, 'Fg', 'sct022 few024cb sct120', 21, 32, 6.72, 11, 886.5, 887.5, '', '2015-10-23 12:10:12', 'test', '2015-10-23'),
(10, 'HK63', 'META', '240600Z', 'GMT', 150, 10, 'KT', 9999, 'Fg', 'SCT022 FEW024CB SCT140', 21, 80, 16.8, 18, 888.6, 0, '', '2015-10-24 10:10:14', 'test', '2015-10-24'),
(11, 'HK63', 'META', '241200Z', 'GMT', 130, 7, 'KT', 9999, 'RA', 'FEW018 FEW020CB SCT120', 26, 70, 18.2, 21, 886.9, 0, '', '2015-10-24 10:10:11', 'test', '2015-01-09'),
(12, 'HK63', 'META', '030700Z', 'GMT', 230, 23, 'KT', 9999, 'Hz', 'SCT022 FEW024CB SCT140', 23, 80, 18.4, 20, 250, 0, '', '2015-11-03 07:11:27', 'test', '2016-01-02'),
(13, 'HK63', 'META', '040700Z', 'GMT', 350, 10, 'KT', 9999, 'Hz', 'SCT022 FEW024CB SCT120', 20, 70, 14, 16, 178.1, 0, '', '2015-11-03 07:11:21', 'test', '2015-11-03'),
(14, 'HK63', 'META', '050900Z', 'GMT', 346, 25, 'KT', 9999, 'Hz', 'SCT034 BRK0566B', 17, 70, 11.9, 14, 880, 0, '', '2015-11-05 13:11:25', 'test', '2015-11-05'),
(15, 'HK63', 'META', '051500Z', 'GMT', 276, 78, 'KT', 9999, 'Hz', 'SCT034 BRK0566B', 27, 67, 18.09, 21, 779.1, 0, '', '2015-11-05 13:11:25', 'test', '2015-11-05'),
(16, 'HK63', 'META', '061200Z', 'GMT', 40, 90, 'KT', 9999, 'Fg', 'SCT034 BRK0566B', 21, 76, 15.96, 18, 777.9, 0, '', '2015-11-06 12:11:40', 'test', '2015-11-06'),
(17, 'HK63', 'META', '060900Z', 'GMT', 108, 5, 'KT', 9999, 'Fg', 'FEW018 FEW020CB SCT120', 19, 90, 17.1, 18, 888.8, 304.5, '', '2015-11-06 12:11:52', 'test', '2015-11-06'),
(18, 'HK63', 'SPECI', '061500Z', 'GMT', 230, 12, 'KT', 1000, 'Hz', 'SCT234 FEW234TCU BRN232', 35, 76, 26.6, 29, 666.7, 0, '', '2015-11-06 12:11:41', 'test', '2015-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `rain`
--

CREATE TABLE IF NOT EXISTS `rain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `rain` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `duration` double NOT NULL,
  `user` varchar(50) NOT NULL,
  `submitted` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `rain`
--

INSERT INTO `rain` (`id`, `station`, `date`, `rain`, `time`, `duration`, `user`, `submitted`) VALUES
(1, '400098', '2015-07-29', '0.9', '11:19:30', 2, 'Douglas Were', '2015-07-29'),
(2, '400098', '2015-07-29', '0.2', '11:09:45', 2, 'Douglas Were', '2015-07-29'),
(3, '400098', '2015-10-21', '12', '08:29:30', 3, 'Douglas Were', '2015-10-21'),
(4, '400098', '2015-10-21', '12', '08:29:30', 3, 'Douglas Were', '2015-10-21'),
(5, '400098', '2015-10-21', '0.4', '09:40:15', 2, 'Douglas Were', '2015-10-21'),
(6, '400098', '2015-10-21', '0.5', '09:42:15', 1, 'Douglas Were', '2015-10-21'),
(7, '400098', '2015-10-21', '0.5', '09:42:15', 1, 'Douglas Were', '2015-10-21'),
(8, '400098', '2015-10-21', '0.5', '09:42:15', 1, 'Douglas Were', '2015-10-21'),
(9, '400098', '2015-10-21', '0.5', '09:42:15', 1, 'Douglas Were', '2015-10-21'),
(10, '400098', '2015-10-21', '0.1', '09:49:45', 4, 'Douglas Were', '2015-10-21'),
(11, '400098', '2015-10-21', '0.1', '09:42:15', 4, 'Douglas Were', '2015-10-21'),
(12, '400098', '2015-10-21', '0.1', '09:42:15', 4, 'Douglas Were', '2015-10-21'),
(13, '400098', '2015-10-23', '0.2', '12:35:15', 2, 'Douglas Were', '2015-10-23'),
(14, '400098', '2015-10-22', '0.5', '15:41:30', 2, 'Douglas Were', '2015-10-23'),
(15, '400098', '2015-10-21', '0.5', '15:41:30', 2, 'Douglas Were', '2015-10-23'),
(16, '400098', '2015-10-30', '1.2', '16:11:15', 3, 'John Salongo', '2015-10-30');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `number`, `name`, `location`, `country`, `region`, `code`, `city`, `latitude`, `longitude`, `altitude`, `opened`, `closed`, `status`, `type`, `created`) VALUES
(1, '400098', 'Makerere', 'Kampala', 'Uganda', 'Central', 'HK63', 'Kampala', '90.09 08', '78 00 00', '4000', '0000-00-00', '0000-00-00', 'active', 'Agro', '2015-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `synoptic`
--

CREATE TABLE IF NOT EXISTS `synoptic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `ir` int(11) DEFAULT NULL,
  `ix` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `www` int(11) DEFAULT NULL,
  `vv` int(11) DEFAULT NULL,
  `n` int(11) DEFAULT NULL,
  `dd` int(11) DEFAULT NULL,
  `ff` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `td` int(11) DEFAULT NULL,
  `Po` double DEFAULT NULL,
  `gisis` int(11) DEFAULT NULL,
  `hhh` int(11) DEFAULT NULL,
  `rrr` int(11) DEFAULT NULL,
  `tr` int(11) DEFAULT NULL,
  `present` int(11) DEFAULT NULL,
  `past` int(11) DEFAULT NULL,
  `nh` int(11) DEFAULT NULL,
  `cl` int(11) DEFAULT NULL,
  `cm` int(11) DEFAULT NULL,
  `ch` int(11) DEFAULT NULL,
  `Tq` int(11) DEFAULT NULL,
  `Ro` int(11) DEFAULT NULL,
  `R1` int(11) DEFAULT NULL,
  `Tx` int(11) DEFAULT NULL,
  `Tm` int(11) DEFAULT NULL,
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
  `wb` double DEFAULT NULL,
  `rh` double DEFAULT NULL,
  `vap` double DEFAULT NULL,
  `user` text NOT NULL,
  `submitted` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `synoptic`
--

INSERT INTO `synoptic` (`id`, `station`, `date`, `time`, `ir`, `ix`, `h`, `www`, `vv`, `n`, `dd`, `ff`, `t`, `td`, `Po`, `gisis`, `hhh`, `rrr`, `tr`, `present`, `past`, `nh`, `cl`, `cm`, `ch`, `Tq`, `Ro`, `R1`, `Tx`, `Tm`, `EE`, `E`, `sss`, `pchange`, `p24`, `rr`, `tr1`, `ns`, `c`, `hs`, `ns1`, `c1`, `hs1`, `ns2`, `c2`, `hs2`, `supplementary`, `wb`, `rh`, `vap`, `user`, `submitted`) VALUES
(1, 'Makerere', '2015-07-08', '120800Z', 1, 2, 3, NULL, 60, 3, 8, 90, NULL, NULL, 884.5, 48, NULL, 0, NULL, 4, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 19, 0, 0, 0, 9, 3, 0, 0, 3, 8, 20, 1, 9, 22, 0, 0, 0, 'none', 16, 61, 178, 'test', '08:19:52'),
(2, 'Makerere', '2015-07-08', '122000Z', 1, 2, 5, NULL, 70, 6, 8, 180, NULL, NULL, 858.8, 48, NULL, 0, NULL, 4, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 19, 0, 0, 0, 8, 3, 0, 0, 3, 6, 23, 1, 9, 23, 0, 0, 0, 'nothing', 18, 63, 272.16, 'test', '21:00:31'),
(3, 'Makerere', '2015-07-16', '161700Z', 3, 2, 5, NULL, 65, 3, 4, 245, NULL, NULL, 886.7, 48, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 271, 0, 0, 0, 0, 9, 5, 0, 0, 3, 6, 23, 1, 9, 25, 5, 3, 63, '', 12, 34, 89.76, 'test', '17:45:41'),
(4, 'Makerere', '2015-10-23', '231200Z', 0, 0, 0, NULL, 0, 0, 10, 120, NULL, NULL, 886.5, 0, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 11, 32, 73.92, 'test', '12:36:42'),
(5, 'Makerere', '2015-10-24', '240600Z', 0, 0, 0, NULL, 0, 0, 10, 120, NULL, NULL, 886.5, 45, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 271, 0, 0, 0, 0, 9, 0, 0, 0, 3, 6, 23, 1, 9, 25, 5, 0, 63, '', 18, 32, 73.92, 'test', '10:45:27');

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
(6, 'Douglas Were', 'weredouglas@gmail.com', '0782481746', '0704914596', '9Qexla+Wfl9ZFnknUKJ+eS7Ft8GX9QRtC7rTWvk1YKTCCP9QC+Q+YVNEo8BA6SXtw4ivRRLjQaokrt5UdA1rNw==', 'Manager', 'false', '2015-07-22', 'Makerere'),
(7, 'John Salongos', 'info@aws.com', '0753388221', '0789237834', '3C466l1n01/h3NxGL/ERfpY08P0CZI/wZ3HDzoaIH8wE3MiGbqJh1Q01tKKZ6ViV+jbGnqQuCjsHd5iCjDX/aA==', 'Observer', 'true', '2015-11-03', 'Makerere'),
(8, 'Hellen', 'hellennakato@gmail.com', '', '', 'gDUAw1d1CLJpPDd2wdDWN0uEuM/bgn+q/M9fBLSHKs21LeBeqOH69sdc+6yoegJFFvSJGOR3TYMl1cZ3G9U2yw==', 'Data', 'false', '2015-10-23', 'Makerere'),
(9, 'Manager', 'manager@aws.com', '0414237890', '0414237890', 'FBiBKJN7e2YV/cV7tiIb1TRAbQD6dI9ZYIQtT4688P+NNNQnHif8haaNMjn1MxSpVtr8QzFA1FSMdpam8gjUiA==', 'Data', 'false', '2015-10-23', 'Makerere'),
(10, 'Collins Othira', 'collinsakena@gmail.com', '+256702848144', '', 'rHr5iQwA+E3+mc3oJHk07gaV16gLkULiduHo0YEK8IluJv0MU3z9bIgZeBprnhCn6RCtfDCOobGtHCE31wVHFg==', 'Data', 'true', '2015-10-23', 'Makerere'),
(11, 'Richard Tashobya', 'richard.tashobya@unma.go.ug', '+256772060272', '', 'X+7ouKYT8gMfGYcby+rhxTOUNIibRcfJ6y2agsTxvVdJunJdlwa49ohwetGrqr6+WBPaDwQ5MP7gPjpUIjUBkg==', 'Manager', 'false', '2015-10-23', 'Makerere'),
(12, 'Aisha Nabada', 'aisha.nabada@unma.go.ug', '+256785899522', '', 'U1954rx5KgthP7MwNoAhm/oBrYEKWO4cgQ2pn3KbaFcccw83zECAQDw6snWtymMn4qlfTmus6eDPYj6svGkCUA==', 'Manager', 'true', '2015-10-23', 'Makerere'),
(13, 'Najjuma Mabel', 'mabelsheena@gmail.com', '256712933757', '', '8f1E61aCtKQcV7fLmvIAqjvYNy1KIkkY+MsntloLtDG1veUecIHFtJUaMjwgxlPTMEtK65LdhygNZ55Z/1LZ9Q==', 'Data', 'false', '2015-10-23', 'Makerere'),
(14, 'Mungau Caphers', 'mungaucaphers@yahoo.com', '+256758718545', '', 'TZOTOFsbMsbBeVNR77Cgb8I9ScfUaEMwik87UccFXulDDT5WGrge+M2yS/4CLZDe7tbgNctNgWb3ALdnwuAGfw==', 'Data', 'false', '2015-10-23', 'Makerere');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
