-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2022 at 07:55 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khalil`
--
CREATE DATABASE IF NOT EXISTS `khalil` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `khalil`;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id1` int(11) NOT NULL AUTO_INCREMENT,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL,
  PRIMARY KEY (`id1`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id1`, `start`, `end`, `post`, `prix`, `time1`, `date1`) VALUES
(1, '18:27:29', '19:25:12', 'POST 8 ', '3.705TND', '00:57:43', '01-06-2022');

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

DROP TABLE IF EXISTS `reset`;
CREATE TABLE IF NOT EXISTS `reset` (
  `id2` int(11) NOT NULL AUTO_INCREMENT,
  `date2` varchar(255) NOT NULL,
  `prix1` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `poste1` varchar(255) NOT NULL,
  `start1` varchar(255) NOT NULL,
  `end1` varchar(255) NOT NULL,
  PRIMARY KEY (`id2`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset`
--

INSERT INTO `reset` (`id2`, `date2`, `prix1`, `time2`, `poste1`, `start1`, `end1`) VALUES
(1, '01-06-2022', '4.68TND', '00:52:52', 'POST 1 ', '18:22:33', '19:15:25'),
(2, '01-06-2022', '0TND', '00:08:30', 'POST 1 ', '19:15:31', '19:24:01'),
(3, '01-06-2022', '3.64TND', '00:56:56', 'POST 6 ', '18:27:23', '19:24:19'),
(4, '01-06-2022', '3.705TND', '00:57:50', 'POST 8 ', '18:27:29', '19:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `start`
--

DROP TABLE IF EXISTS `start`;
CREATE TABLE IF NOT EXISTS `start` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `time_s` varchar(255) NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tarifs`
--

DROP TABLE IF EXISTS `tarifs`;
CREATE TABLE IF NOT EXISTS `tarifs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TarifA` double NOT NULL,
  `TarifB` double NOT NULL,
  `tarifC` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarifs`
--

INSERT INTO `tarifs` (`id`, `TarifA`, `TarifB`, `tarifC`) VALUES
(1, 0.065, 0.09, 0.1125);

-- --------------------------------------------------------

--
-- Table structure for table `tarifs1`
--

DROP TABLE IF EXISTS `tarifs1`;
CREATE TABLE IF NOT EXISTS `tarifs1` (
  `id1` int(11) NOT NULL AUTO_INCREMENT,
  `TarifA1` float NOT NULL,
  `TarifB1` float NOT NULL,
  `TarifC1` float NOT NULL,
  PRIMARY KEY (`id1`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarifs1`
--

INSERT INTO `tarifs1` (`id1`, `TarifA1`, `TarifB1`, `TarifC1`) VALUES
(1, 0.09, 0.1125, 0.135);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
