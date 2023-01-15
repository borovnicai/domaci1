-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 12, 2023 at 03:56 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `filmID` int(11) NOT NULL,
  `nazivFilma` varchar(255) NOT NULL,
  `trajanje` varchar(255) NOT NULL,
  `reziser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`filmID`, `nazivFilma`, `trajanje`, `reziser`) VALUES
(1, 'AVATAR - PUT VODE', '190', 'James Cameroon'),
(2, 'LIL, LIL, KROKODIL', '109', 'Will Speck'),
(3, 'OPERACIJA FORTUNA - PREVARA VEKA', '114', 'Gaj Rici');

-- --------------------------------------------------------

--
-- Table structure for table `prikazivanje`
--

CREATE TABLE `prikazivanje` (
  `id` int(11) NOT NULL,
  `dan` datetime NOT NULL,
  `filmID` int(11) NOT NULL,
  `salaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prikazivanje`
--

INSERT INTO `prikazivanje` (`id`, `dan`, `filmID`, `salaID`) VALUES
(1, '2023-01-17 14:00:00', 1, 2),
(2, '2023-01-17 14:00:00', 2, 3),
(3, '2023-01-16 14:40:00', 1, 2),
(4, '2023-01-16 14:40:00', 2, 1),
(5, '2023-01-24 18:00:00', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sala`
--

CREATE TABLE `sala` (
  `salaID` int(11) NOT NULL,
  `nazivSale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`salaID`, `nazivSale`) VALUES
(1, 'Sala 1 - Leonardo di Kaprio'),
(2, 'Sala 2 - Dzek Nikolson'),
(3, 'Sala 3 - Margot Robbie'),
(4, 'Sala 4 - Vin Dizel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`filmID`);

--
-- Indexes for table `prikazivanje`
--
ALTER TABLE `prikazivanje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`salaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `filmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prikazivanje`
--
ALTER TABLE `prikazivanje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `salaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
