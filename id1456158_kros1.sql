-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2017 at 08:35 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1456158_kros1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekipno`
--

CREATE TABLE `ekipno` (
  `Skole_ID` int(20) NOT NULL,
  `ID_plasman` int(20) NOT NULL,
  `Kat_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `ekipno`
--

INSERT INTO `ekipno` (`Skole_ID`, `ID_plasman`, `Kat_ID`) VALUES
(1, 1, 1),
(2, 2, 1),
(1, 3, 1),
(2, 4, 2),
(3, 5, 2),
(3, 6, 2),
(1, 7, 1),
(1, 8, 3),
(2, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ispis`
--

CREATE TABLE `ispis` (
  `ID_ispis` int(11) NOT NULL,
  `Ime` varchar(25) COLLATE utf8_croatian_ci NOT NULL,
  `Prezime` varchar(25) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `ispis`
--

INSERT INTO `ispis` (`ID_ispis`, `Ime`, `Prezime`) VALUES
(1, 'Luka', 'Vuk'),
(2, 'Pero', 'Perić'),
(3, 'Antonio', 'De Martini');

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `ID_kat` int(20) NOT NULL,
  `naziv` varchar(30) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`ID_kat`, `naziv`) VALUES
(1, '100m'),
(2, '200m'),
(3, '500m');

-- --------------------------------------------------------

--
-- Table structure for table `nastavnici`
--

CREATE TABLE `nastavnici` (
  `ID_nastavnik` int(20) NOT NULL,
  `ses_ID` int(20) NOT NULL,
  `ime` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `nastavnici`
--

INSERT INTO `nastavnici` (`ID_nastavnik`, `ses_ID`, `ime`, `prezime`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin', 'admin', 'nRnuu5u6'),
(2, 2, 'test', 'testt', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `skola`
--

CREATE TABLE `skola` (
  `ID_skola` int(20) NOT NULL,
  `naziv` varchar(60) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `skola`
--

INSERT INTO `skola` (`ID_skola`, `naziv`) VALUES
(1, 'Tehnička škola Daruvar'),
(2, 'Gimnazija Daruvar'),
(3, 'EiTŠ Daruvar');

-- --------------------------------------------------------

--
-- Table structure for table `ucenici`
--

CREATE TABLE `ucenici` (
  `ID_ucenici` int(20) NOT NULL,
  `Kat_ID` int(20) NOT NULL,
  `Skole_ID` int(20) NOT NULL,
  `Ime` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `Prezime` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `Razred` varchar(10) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `ucenici`
--

INSERT INTO `ucenici` (`ID_ucenici`, `Kat_ID`, `Skole_ID`, `Ime`, `Prezime`, `Razred`) VALUES
(1, 1, 1, 'Jakov', 'Knežević', '4.RT'),
(2, 1, 1, 'Pero', 'Perić', '4.ET'),
(3, 1, 1, 'Jozo', 'Jozić', '4.PT'),
(4, 2, 2, 'Domagoj', 'Lipušić', '4.A'),
(5, 2, 2, 'Matteo', 'Renić', '4.B'),
(6, 1, 2, 'Erik', 'Malina', '4.A'),
(7, 2, 3, 'Karlo', 'Calvi', '4.H'),
(8, 3, 3, 'Antonio', 'De Martini', '4.E'),
(9, 3, 3, 'Luka', 'Vuk', '4.E'),
(10, 3, 1, 'Ilija', 'Vuk', '4.RT'),
(11, 3, 2, 'Andrej', 'Penezić', '4.B'),
(12, 1, 3, 'Marko', 'Đukić', '4.E'),
(17, 1, 3, 'Ivo', 'Ivić', '4.RT'),
(18, 2, 2, 'Ivan', 'Ivanović', '2.H'),
(19, 2, 3, 'Mato', 'Matić', '3.MT'),
(21, 3, 1, 'Luka', 'Lukić', '2.B'),
(27, 3, 1, 'Marko', 'Jambrović', '4.RT'),
(28, 3, 1, 'Denis', 'Miočić', '4.RT'),
(31, 2, 1, 'Darko', 'Mikačić', '2.MT'),
(35, 3, 2, 'Anamarija', 'Brnabić', '2.A'),
(36, 3, 2, 'Mirjana', 'Mandarić', '3.A'),
(37, 1, 2, 'Izabela', 'Batur', '2.B'),
(38, 1, 2, 'Karla', 'Kljajić', '4.B'),
(39, 3, 3, 'Ela', 'Primorac', '3.RT'),
(40, 3, 3, 'Magdalena', 'Komušar', '2.RT'),
(41, 2, 2, 'Tamara', 'Družetić', '2.A'),
(42, 2, 2, 'Lucija', 'Čigir', '2.A'),
(43, 1, 1, 'Dubravka', 'Blažić', '1.H'),
(44, 1, 1, 'Maja', 'Merkas', '3.H'),
(45, 3, 3, 'Gabrijela', 'Slavujević', '3.E'),
(46, 3, 3, 'Marta', 'Žižić', '4.E'),
(47, 2, 2, 'Tamara', 'Štefanac', '2.ET'),
(48, 2, 2, 'Ines', 'Ribić', '1.MT'),
(49, 1, 1, 'Franjo', 'Pleše', '1.B'),
(50, 1, 1, 'Dinko', 'Lukić', '1.A'),
(51, 3, 3, 'Robert', 'Jušić', '2.H'),
(52, 3, 3, 'Siniša', 'Žugaj', '3.E'),
(53, 2, 2, 'Ilija', 'Čalić', '2.ET'),
(54, 2, 2, 'Vladimir', 'Baljak', '2.MT'),
(55, 1, 1, 'Marijan', 'Nemet', '3.A'),
(56, 1, 1, 'Matej', 'Prodan', '3.B'),
(57, 3, 3, 'Igor', 'Mikačić', '2.H'),
(58, 3, 3, 'Jan', 'Rak', '4.E'),
(59, 2, 3, 'Dario', 'Bajić', '4.H'),
(60, 2, 3, 'Davor', 'Vedrić', '2.E'),
(61, 1, 2, 'Petar', 'Milčić', '2.RT'),
(62, 1, 2, 'Stjepan', 'Bojić', '3.RT'),
(63, 1, 3, 'Robert', 'Kukić', '1.H'),
(64, 2, 3, 'Šime', 'Peruško', '4.H'),
(65, 1, 1, 'Test', 'Test2', '4.RT'),
(66, 1, 1, 'Ivan', 'Ivanković', '4.RT'),
(67, 1, 2, 'Antonio', 'Zakora', '4.H'),
(68, 1, 3, 'Mihaela', 'Mihajlović', '2.B'),
(69, 1, 1, 'Andrej', 'Rohlik', '4.ET'),
(70, 1, 3, 'Ivica', 'Ivić', '4.A'),
(71, 1, 3, 'Mihaela', 'Mihajlović', '4.E'),
(72, 1, 3, 'Antun', 'Mihajlović', '4.E'),
(73, 1, 3, 'Ivan', 'Vuk', '4.H'),
(74, 1, 2, 'Matej', 'Matić', '4.B'),
(75, 1, 1, 'Filip', 'Filipović', '4.ET'),
(76, 1, 1, 'Davor', 'Davorić', '4.MT'),
(77, 1, 2, 'Danijela', 'Vuk', '4.B');

-- --------------------------------------------------------

--
-- Table structure for table `utrka`
--

CREATE TABLE `utrka` (
  `ID_utrka` int(20) NOT NULL,
  `plasman_ID` int(20) NOT NULL,
  `Ucenici_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `utrka`
--

INSERT INTO `utrka` (`ID_utrka`, `plasman_ID`, `Ucenici_ID`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekipno`
--
ALTER TABLE `ekipno`
  ADD PRIMARY KEY (`ID_plasman`),
  ADD KEY `Skole_ID` (`Skole_ID`),
  ADD KEY `Kat_ID` (`Kat_ID`),
  ADD KEY `Plasman` (`ID_plasman`);

--
-- Indexes for table `ispis`
--
ALTER TABLE `ispis`
  ADD PRIMARY KEY (`ID_ispis`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`ID_kat`),
  ADD KEY `ID_kat` (`ID_kat`);

--
-- Indexes for table `nastavnici`
--
ALTER TABLE `nastavnici`
  ADD PRIMARY KEY (`ID_nastavnik`);

--
-- Indexes for table `skola`
--
ALTER TABLE `skola`
  ADD PRIMARY KEY (`ID_skola`),
  ADD KEY `ID_skola` (`ID_skola`);

--
-- Indexes for table `ucenici`
--
ALTER TABLE `ucenici`
  ADD PRIMARY KEY (`ID_ucenici`),
  ADD KEY `Skole_ID` (`Skole_ID`),
  ADD KEY `Kat_ID` (`Kat_ID`),
  ADD KEY `ID_ucenici` (`ID_ucenici`);

--
-- Indexes for table `utrka`
--
ALTER TABLE `utrka`
  ADD PRIMARY KEY (`ID_utrka`),
  ADD KEY `Ucenici_ID` (`Ucenici_ID`),
  ADD KEY `plasman_ID` (`plasman_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ispis`
--
ALTER TABLE `ispis`
  MODIFY `ID_ispis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `ID_kat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nastavnici`
--
ALTER TABLE `nastavnici`
  MODIFY `ID_nastavnik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `skola`
--
ALTER TABLE `skola`
  MODIFY `ID_skola` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ucenici`
--
ALTER TABLE `ucenici`
  MODIFY `ID_ucenici` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `utrka`
--
ALTER TABLE `utrka`
  MODIFY `ID_utrka` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ekipno`
--
ALTER TABLE `ekipno`
  ADD CONSTRAINT `ekipno_ibfk_2` FOREIGN KEY (`Kat_ID`) REFERENCES `kategorije` (`ID_kat`),
  ADD CONSTRAINT `ekipno_ibfk_3` FOREIGN KEY (`Skole_ID`) REFERENCES `skola` (`ID_skola`);

--
-- Constraints for table `ucenici`
--
ALTER TABLE `ucenici`
  ADD CONSTRAINT `ucenici_ibfk_1` FOREIGN KEY (`Skole_ID`) REFERENCES `skola` (`ID_skola`),
  ADD CONSTRAINT `ucenici_ibfk_2` FOREIGN KEY (`Kat_ID`) REFERENCES `kategorije` (`ID_kat`);

--
-- Constraints for table `utrka`
--
ALTER TABLE `utrka`
  ADD CONSTRAINT `utrka_ibfk_1` FOREIGN KEY (`Ucenici_ID`) REFERENCES `ucenici` (`ID_ucenici`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
