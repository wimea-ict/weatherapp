-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2015 at 10:38 AM
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
