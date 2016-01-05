-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2016 at 10:30 AM
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
  `[ADDR` varchar(50) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `aws`
--

INSERT INTO `aws` (`id`, `V_A2`, `V_A1`, `day`, `times`, `TZ`, `UT`, `GW_LAT`, `GW_LON`, `TXT`, `PS`, `V_MCU`, `T_SHT2X`, `RH_SHT2X`, `AH`, `T_DEW`, `T_HEAT_IDX`, `[ADDR`, `SEQ`, `TTL`, `RSSI`, `LQI`, `DRP`, `E64`, `T`, `V_IN`, `V_A3`, `P_MS5611`, `T1`, `P0_T`) VALUES
(10, NULL, NULL, '2015-08-04', '15:08:09', 'CEST', '1438693689', '60.38370', '5.33196', '10m', '1', NULL, '19.52', '61.40', NULL, NULL, NULL, '241.193', '215', '15', '0', '255', '0.00', 'fcc23d00000020c8', '19.44', NULL, NULL, NULL, NULL, NULL),
(11, NULL, '0.00', '2015-08-04', '15:05:50', 'CEST', '1438693550', '60.38370', '5.33196', 'gnd', '1', '3.60', NULL, NULL, NULL, NULL, NULL, '176.78', '143', '15', '0', '212', '0.00', 'fcc23d000000716e', '19.63', '6.83', NULL, NULL, '14.56', NULL),
(12, NULL, '0.00', '2015-08-04', '15:05:50', 'CEST', '1438693550', '60.38370', '5.33196', 'gnd', '1', '3.60', NULL, NULL, NULL, NULL, NULL, '176.78', '143', '15', '0', '212', '0.00', 'fcc23d000000716e', '19.63', '6.83', NULL, NULL, '14.56', NULL),
(13, '3.28', '1.76', '2015-08-04', '15:06:07', 'CEST', '1438693567', '60.38370', '5.33196', '10m', '1', '3.60', NULL, NULL, NULL, NULL, NULL, '241.193', '207', '15', '0', '255', '0.00', 'fcc23d00000020c8', NULL, NULL, NULL, NULL, NULL, '0.050'),
(14, NULL, NULL, '2015-08-04', '15:08:57', 'CEST', '1438693737', '60.38370', '5.33196', '2m', '1', '3.53', '17.83', '92.78', '14.09', '16.65', '14.01', '101.28', '99', '15', '4', '255', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, '2015-08-04', '15:08:31', 'CEST', '1438693711', '60.38370', '5.33196', 'sink', '0', '3.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fcc23d0000006cef', '24.44', '4.93', '277', '1001.32', NULL, NULL),
(16, NULL, NULL, '2015-08-04', '15:08:31', 'CEST', '1438693711', '60.38370', '5.33196', 'sink', '0', '3.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fcc23d0000006cef', '24.44', '4.93', '277', '1001.32', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
