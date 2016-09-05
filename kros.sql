-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 06:44 PM
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
-- Table structure for table `gradovi`
--

DROP TABLE IF EXISTS `gradovi`;
CREATE TABLE IF NOT EXISTS `gradovi` (
  `Id_Grad` int(11) NOT NULL AUTO_INCREMENT,
  `Naziv_Grada` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Grad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gradovi`
--

INSERT INTO `gradovi` (`Id_Grad`, `Naziv_Grada`) VALUES
(1, 'Daruvar'),
(2, 'Osijek'),
(3, 'Virovitica');

-- --------------------------------------------------------

--
-- Table structure for table `ispis`
--

DROP TABLE IF EXISTS `ispis`;
CREATE TABLE IF NOT EXISTS `ispis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(30) NOT NULL,
  `Prezime` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Ime` (`Ime`),
  UNIQUE KEY `Prezime` (`Prezime`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ispis`
--

INSERT INTO `ispis` (`Id`, `Ime`, `Prezime`) VALUES
(1, 'Jakov', 'KneÅ¾eviÄ‡'),
(2, 'Neki', 'UÄenik'),
(3, 'qw', 'er');

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

DROP TABLE IF EXISTS `kategorije`;
CREATE TABLE IF NOT EXISTS `kategorije` (
  `Id_Kat` int(11) NOT NULL AUTO_INCREMENT,
  `Naziv_Kategorije` varchar(60) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`Id_Kat`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`Id_Kat`, `Naziv_Kategorije`) VALUES
(1, 'predškolski uzrast - djevojčice 100m'),
(2, 'predškolski uzrast - dječaci 100m'),
(3, 'osobe s posebnim s najvećim oštećenjima -djevojčice - 60m'),
(4, 'osobe s posebnim s najvećim oštećenjima -dječaci -60m'),
(5, 'osobe  posebnim potrebama  -djevočice -200m'),
(6, 'osobe  posebnim potrebama  -dječaci -200m'),
(7, '400m 1.razred OŠ, UČENICE'),
(8, '400m 2.razred OŠ, UČENICE'),
(9, '400m 1.razred OŠ, UČENICI'),
(10, '400m 2.razred OŠ, UČENICI'),
(11, '500m 3.razred OŠ, UČENICE'),
(12, '500m 4.razred OŠ, UČENICE'),
(13, '600m 3.razred OŠ, UČENICI'),
(14, '600m 4.razred OŠ, UČENICI'),
(15, '600m 5.razred OŠ, UČENICE'),
(16, '600m 6.razred OŠ, UČENICE'),
(17, '800m 5.razred OŠ, UČENICI'),
(18, '800m 6.razred OŠ, UČENICI'),
(19, '800m 7.razred OŠ, UČENICE'),
(20, '800m 8.razred OŠ, UČENICE'),
(21, '1000m 7.razred OŠ, UČENICI'),
(22, '1000m 8.razred OŠ, UČENICI'),
(23, '1000m 1.i 2. razred SŠ , UČENICE'),
(24, '1200m 1.i 2. razred SŠ, UČENICI'),
(25, '1200m 3.i 4. razred SŠ, UČENICE'),
(26, '1800m 3.i 4. razred SŠ, UČENICI');

-- --------------------------------------------------------

--
-- Table structure for table `nastavnici`
--

DROP TABLE IF EXISTS `nastavnici`;
CREATE TABLE IF NOT EXISTS `nastavnici` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ses_Id` int(11) DEFAULT NULL,
  `Ime` varchar(25) NOT NULL,
  `Prezime` varchar(35) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Password` (`Password`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nastavnici`
--

INSERT INTO `nastavnici` (`Id`, `Ses_Id`, `Ime`, `Prezime`, `Username`, `Password`) VALUES
(1, NULL, 'Jakov', 'KneÅ¾eviÄ‡', 'jakovknezevic', 'nRnuu5u6');

-- --------------------------------------------------------

--
-- Table structure for table `skole`
--

DROP TABLE IF EXISTS `skole`;
CREATE TABLE IF NOT EXISTS `skole` (
  `Id_Skole` int(11) NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`Id_Skole`),
  UNIQUE KEY `Naziv` (`Naziv`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `skole`
--

INSERT INTO `skole` (`Id_Skole`, `Naziv`) VALUES
(10, 'ČDV "F.Mravenca"'),
(13, 'ČDV Končanica'),
(11, 'DV "V.Nazor"'),
(9, 'DV Hercegovac'),
(12, 'DV Sirač'),
(1, 'Ekonomska BJELOVAR'),
(2, 'GAREŠNICA'),
(3, 'Gimnazija DARUVAR'),
(4, 'GRUBIŠNO POLJE'),
(5, 'Komercijalna BJELOVAR'),
(6, 'POŽEGA'),
(7, 'SŠ DARUVAR'),
(8, 'Tehnička Škola Daruvar');

-- --------------------------------------------------------

--
-- Table structure for table `ucenici`
--

DROP TABLE IF EXISTS `ucenici`;
CREATE TABLE IF NOT EXISTS `ucenici` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Kat_Id` int(11) NOT NULL,
  `Skole_Id` int(11) NOT NULL,
  `Ime` varchar(15) NOT NULL,
  `Prezime` varchar(35) NOT NULL,
  `Razred` varchar(5) NOT NULL,
  UNIQUE KEY `Ime` (`Ime`),
  UNIQUE KEY `Prezime` (`Prezime`),
  UNIQUE KEY `Razred` (`Razred`),
  UNIQUE KEY `Id` (`Id`),
  KEY `Kat_Id` (`Kat_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ucenici`
--

INSERT INTO `ucenici` (`Id`, `Kat_Id`, `Skole_Id`, `Ime`, `Prezime`, `Razred`) VALUES
(1, 2, 4, 'Jakov', 'KneÅ¾eviÄ‡', '3.rt'),
(2, 2, 1, 'Neki', 'UÄenik', '4.et'),
(3, 21, 32, 'qw', 'er', '23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
