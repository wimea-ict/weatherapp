-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2015 at 11:37 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `date`, `station`, `max`, `min`, `actual`, `anemometer`, `wind`, `maxi`, `user`, `submitted`, `approved`, `rain`, `thunder`, `fog`, `haze`, `storm`, `quake`, `height`, `duration`, `sunshine`, `radiationtype`, `radiation`, `evaptype1`, `evap1`, `evaptype2`, `evap2`) VALUES
(2, '2015-07-14', 'Makerere', 22, 19.7, 0.1, 32456, 23, 23, 'test', '2015-07-08', 'false', 'true', '', '', '', 'true', 'true', '0', '', '', '', '', '', '', '', ''),
(3, '2015-07-13', 'Makerere', 18, 12, 0.2, 45678, 12, 0, 'test', '2015-07-14', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '0', '', '', '', '', '', '', '', ''),
(4, '2015-07-08', 'Makerere', 32, 16, 0.5, 67889, 0, 32, 'test', '2015-07-14', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '0', '', '', '', '', '', '', '', ''),
(5, '2015-07-15', 'Makerere', 26, 0.22, 0.4, 6789, 4, 40, 'test', '2015-07-16', 'false', '', '', 'true', '', 'true', 'true', '0', '', '', '', '', '', '', '', ''),
(7, '2015-07-28', 'Makerere', 34, 34, 5, 56789, NULL, 0.8, '', '2015-07-28', 'false', 'true', 'true', 'true', 'true', 'true', 'true', '5000', '7', '', '', '', '6', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `userid`, `action`, `details`, `date`, `ip`, `url`) VALUES
(1, 'Douglas Were', '6', 'login', '0', '2015-07-22 14:04:57', '::1', 'www.'),
(2, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-07-22 14:10:57', '::1', 'www.'),
(3, 'Douglas Were', '6', 'login', 'Douglas Were has logged in', '2015-07-22 14:17:14', '::1', 'www.'),
(4, 'Douglas Were', NULL, 'update', 'John Salongo user information updated', '2015-07-22 16:06:19', '::1', ''),
(5, 'Douglas Were', NULL, 'update', 'John Salongo user information updated', '2015-07-22 16:07:23', '::1', ''),
(6, 'Douglas Were', NULL, 'update', 'John Salongo user information updated', '2015-07-22 16:08:46', '::1', ''),
(7, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-07-23 09:11:48', '::1', 'www.'),
(8, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-07-24 16:29:09', '::1', 'www.'),
(9, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-07-25 18:36:30', '::1', 'www.'),
(10, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-07-28 01:39:13', '::1', 'www.'),
(11, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-07-28 13:31:10', '::1', 'www.'),
(12, 'Douglas Were', '6', 'saved daily weather information', 'Douglas Weresubmit of weather information ', '2015-07-28 17:36:44', '::1', ''),
(13, 'Douglas Were', '6', 'saved daily weather information', 'Douglas Weresubmit of weather information ', '2015-07-28 17:39:10', '::1', ''),
(14, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-07-29 03:47:39', '::1', 'www.'),
(15, 'Douglas Were', '6', 'saved daily rainfall information', 'Douglas Weresubmit of weather information ', '2015-07-29 07:19:50', '::1', ''),
(16, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-07-29 07:21:10', '::1', 'www.'),
(17, 'Douglas Were', '6', 'saved daily rainfall information', 'Douglas Weresubmit of weather information ', '2015-07-29 11:10:09', '::1', ''),
(18, 'Douglas Were ', '1', 'logout', 'Douglas Were  has logged out ', '2015-07-29 10:20:24', '::1', 'www.'),
(19, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-07-29 10:20:40', '::1', 'www.'),
(20, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-07-29 16:25:49', '::1', 'www.'),
(21, 'Douglas Were ', '1', 'logout', 'Douglas Were  has logged out ', '2015-07-30 07:39:41', '::1', 'www.'),
(22, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-07-30 07:39:48', '::1', 'www.'),
(23, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-08-01 02:55:34', '::1', 'www.'),
(24, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-08-03 11:45:43', '::1', 'www.'),
(25, 'Douglas Were', '6', 'logout', 'Douglas Were has logged out ', '2015-08-03 12:10:33', '::1', 'www.'),
(26, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-08-03 12:13:42', '::1', 'www.'),
(27, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-08-08 09:23:15', '::1', 'www.'),
(28, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-09-21 08:28:00', '::1', 'www.'),
(29, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-17 07:34:01', '::1', 'www.'),
(30, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-20 06:49:53', '::1', 'www.'),
(31, 'Douglas Were', '6', 'login', 'Douglas Were has logged in ', '2015-10-20 10:41:22', '::1', 'www.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `metar`
--

INSERT INTO `metar` (`id`, `station`, `type`, `datetime`, `timezone`, `wind_direction`, `wind_speed`, `unit`, `visibility`, `present_weather`, `cloud`, `air_temperature`, `humidity`, `dew_temperature`, `wet_bulb`, `station_pressure_hpa`, `sea_pressure_hpa`, `recent_weather`, `submitted`, `user`, `day`) VALUES
(1, 'HK63', 'META', '140700Z', 'GMT', 245, 8, 'KT', 9000, 'Hz', 'SCT023 FEW045CB SCT000', 25.3, 70, 17.5, 20, 886.1, 0, 'RETS', '2015-07-08 00:00:00', 'test', '2015-07-08'),
(2, 'HK63', 'META', '140900Z', 'GMT', 234, 23, 'KT', 3333, 'RA', 'SCT234 FEW234TCU BRN232', 26, 80, 20.8, 23, 0, 0, 'RETS', '2015-07-08 06:07:20', 'test', '2015-07-13'),
(3, 'HK63', 'META', '091500Z', 'GMT', 245, 34, 'KT', 6000, 'Fg', 'FEW018 SCT234TCU BRN345 FEW234', 19, 80, 15.2, 16, 886.1, 0, '', '2015-07-09 05:07:11', 'test', '2015-07-08'),
(4, 'HK63', 'META', '141500Z', 'GMT', 140, 5, 'KT', 9900, 'Ts', 'SCT026 FEW030CB0 SCT130 SCT120', 18, 73, 13.5, 15, 886.5, 0, '', '2015-07-11 13:07:12', 'test', '2015-07-14'),
(5, 'HK63', 'META', '121500Z', 'GMT', 340, 12, 'KT', 9999, 'Fg', 'FEW018 FEW020CBO SCT120 BKN130', 21.1, 77, 16.17, 18, 886.5, 0, '', '2015-07-12 07:07:00', 'test', '2015-07-13'),
(7, 'HK63', 'META', '140900Z', 'GMT', 180, 9, 'KT', 9000, 'Fg', 'FEW028 FEW030CBO SCT170 SCT170', 24.3, 63, 15.12, 18, 858.8, 0, '', '2015-07-12 20:07:40', 'test', '2015-07-14'),
(8, 'HK63', 'META', '161700Z', 'GMT', 245, 4, 'KT', 7000, 'Fg', 'FEW028 FEW030CBO SCT170 SCT170', 22.9, 34, 7.48, 12, 886.7, 0, 'RETS', '2015-07-16 17:07:56', 'test', '2015-07-16');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rain`
--

INSERT INTO `rain` (`id`, `station`, `date`, `rain`, `time`, `duration`, `user`, `submitted`) VALUES
(1, '400098', '2015-07-29', '0.9', '11:19:30', 2, 'Douglas Were', '2015-07-29'),
(2, '400098', '2015-07-29', '0.2', '11:09:45', 2, 'Douglas Were', '2015-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `create` text,
  `edit` text,
  `read` text,
  `update` text,
  `delete` text,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `create`, `edit`, `read`, `update`, `delete`, `status`) VALUES
(7, 'Manager', 'true', NULL, NULL, 'true', 'true', 'true'),
(8, 'Super', 'true', 'true', NULL, NULL, 'true', 'true'),
(10, ' Role', NULL, 'true', '', 'true', '', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `country` text NOT NULL,
  `region` text NOT NULL,
  `code` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `altitude` varchar(50) NOT NULL,
  `opened` date NOT NULL,
  `closed` date NOT NULL,
  `status` text NOT NULL,
  `type` text NOT NULL,
  `created` date NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `synoptic`
--

INSERT INTO `synoptic` (`id`, `station`, `date`, `time`, `ir`, `ix`, `h`, `www`, `vv`, `n`, `dd`, `ff`, `t`, `td`, `Po`, `gisis`, `hhh`, `rrr`, `tr`, `present`, `past`, `nh`, `cl`, `cm`, `ch`, `Tq`, `Ro`, `R1`, `Tx`, `Tm`, `EE`, `E`, `sss`, `pchange`, `p24`, `rr`, `tr1`, `ns`, `c`, `hs`, `ns1`, `c1`, `hs1`, `ns2`, `c2`, `hs2`, `supplementary`, `wb`, `rh`, `vap`, `user`, `submitted`) VALUES
(1, 'Makerere', '2015-07-08', '120800Z', 1, 2, 3, NULL, 60, 3, 8, 90, NULL, NULL, 884.5, 48, NULL, 0, NULL, 4, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 19, 0, 0, 0, 9, 3, 0, 0, 3, 8, 20, 1, 9, 22, 0, 0, 0, 'none', 16, 61, 178, 'test', '08:19:52'),
(2, 'Makerere', '2015-07-08', '122000Z', 1, 2, 5, NULL, 70, 6, 8, 180, NULL, NULL, 858.8, 48, NULL, 0, NULL, 4, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 19, 0, 0, 0, 8, 3, 0, 0, 3, 6, 23, 1, 9, 23, 0, 0, 0, 'nothing', 18, 63, 272.16, 'test', '21:00:31'),
(3, 'Makerere', '2015-07-16', '161700Z', 3, 2, 5, NULL, 65, 3, 4, 245, NULL, NULL, 886.7, 48, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 271, 0, 0, 0, 0, 9, 5, 0, 0, 3, 6, 23, 1, 9, 25, 5, 3, 63, '', 12, 34, 89.76, 'test', '17:45:41');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `contact2`, `password`, `role`, `active`, `create`, `station`) VALUES
(6, 'Douglas Were', 'weredouglas@gmail.com', '0782481746', '0704914596', '9Qexla+Wfl9ZFnknUKJ+eS7Ft8GX9QRtC7rTWvk1YKTCCP9QC+Q+YVNEo8BA6SXtw4ivRRLjQaokrt5UdA1rNw==', 'Manager', 'false', '2015-07-22', 'Makerere'),
(7, 'John Salongo', 'info@aws.com', '0753388221', '0789237834', '3C466l1n01/h3NxGL/ERfpY08P0CZI/wZ3HDzoaIH8wE3MiGbqJh1Q01tKKZ6ViV+jbGnqQuCjsHd5iCjDX/aA==', 'Super', 'true', '2015-07-22', 'Makerere');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
