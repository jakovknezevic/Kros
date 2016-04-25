-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 04:36 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kros`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

DROP TABLE IF EXISTS `kategorije`;
CREATE TABLE IF NOT EXISTS `kategorije` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Kat` int(11) NOT NULL,
  `Naziv_Kategorije` varchar(60) NOT NULL,
  PRIMARY KEY (`Id_Kat`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`Id`, `Id_Kat`, `Naziv_Kategorije`) VALUES
(1, 1, '100m'),
(2, 2, '500m'),
(3, 3, '700m');

-- --------------------------------------------------------

--
-- Table structure for table `ucenici`
--

DROP TABLE IF EXISTS `ucenici`;
CREATE TABLE IF NOT EXISTS `ucenici` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Bar` varchar(50) NOT NULL,
  `Kat_Id` int(11) NOT NULL,
  `Ime` varchar(15) NOT NULL,
  `Prezime` varchar(35) NOT NULL,
  UNIQUE KEY `Id` (`Id`),
  KEY `Kat_Id` (`Kat_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ucenici`
--

INSERT INTO `ucenici` (`Id`, `Id_Bar`, `Kat_Id`, `Ime`, `Prezime`) VALUES
(1, '7622210471871', 1, 'Jakov', 'Knezevic'),
(2, '4075700044506', 2, 'Sam', 'Sung'),
(3, '8710908333835', 3, 'Rex', 'Ona');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
