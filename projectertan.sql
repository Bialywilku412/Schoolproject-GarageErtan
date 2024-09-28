-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 07:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectertan`
--

-- --------------------------------------------------------

--
-- Table structure for table `autos`
--

CREATE TABLE `autos` (
  `autokenteken` varchar(128) NOT NULL,
  `automerk` varchar(128) NOT NULL,
  `autotype` varchar(128) NOT NULL,
  `autokmstand` int(8) NOT NULL,
  `klanten_klantid` int(2) NOT NULL,
  `autofoto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autos`
--

INSERT INTO `autos` (`autokenteken`, `automerk`, `autotype`, `autokmstand`, `klanten_klantid`, `autofoto`) VALUES
('04-JDK-9', 'Volkswagen', 'Polo', 4087, 3, ''),
('37-TVR-1', 'Opel', 'Corsa', 80544, 2, ''),
('67-YB-44', 'Tatra', '603', 309872, 1, ''),
('96-RP-LR', 'Fiat	', 'Doblo', 143989, 1, ''),
('HV-GB-23	', 'Jaguar', 'XJ6', 2043439, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `klantid` int(2) NOT NULL,
  `klantnaam` varchar(128) NOT NULL,
  `klantadres` varchar(128) NOT NULL,
  `klantpostcode` varchar(128) NOT NULL,
  `klantplaats` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`klantid`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(1, 'Eijeriks, Anjo', 'Dijkwal 145b', '3015CD', 'Rotterdam'),
(2, 'Poenai, V', 'Schiphollaan', '321BV', 'Rotterdam'),
(3, 'Stoop, Sam', 'Stoopplein 45', '2023KL', 'Lekkerkerk'),
(4, 'Efes, Mo', 'Noordweg 321', '2012 B', 'Schiedam'),
(5, 'Vliet, Sandra van', 'Hoofdweg 7', '3483MN', 'Capelle'),
(6, 'Kelvin, G', 'celsiuslaan 273', '4532BV', 'Capelle'),
(7, 'El Ouafa, Saida', 'Binnenweg 229', '3045HG', 'Rotterdam'),
(8, 'Antonic, H', 'Hoofdstraat 54', '2932BB', 'Schiedam'),
(9, 'Nikola, N', 'nikostraat 24', '3028NN', 'Rotterdam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `rank`, `password`, `email`, `userid`) VALUES
('systeembeheerders', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'garageErtan@gmail.com', 2147483647),
('florian koning', 'user', '61dcb822c350db9c140cc07dfb55af50792dd270', 'florian.koning2004@gmail.com', 5778),
('monteurs', 'monteurs', 'b19fcb500bf532cd5198a8e84a40606b9d0520f5', 'garageErtan@gmail.com', 2147483647),
('directie', 'directie', '7e2381786feb0eac31580b3f8931065bf9896b31', 'garageErtan@gmail.com', 11309390),
('planners', 'planners', '9b173a2efe2864cd1336159fc549ac6d1fe6b451', 'garageErtan@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`klantid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `password` (`password`),
  ADD KEY `rank` (`rank`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
  MODIFY `klantid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
