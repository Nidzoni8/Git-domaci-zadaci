-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 02:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3923_nikola_prokopijevic_d32`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinacije`
--

CREATE TABLE `destinacije` (
  `id` int(11) NOT NULL,
  `drzava` varchar(50) NOT NULL,
  `grad` varchar(50) NOT NULL,
  `viza` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinacije`
--

INSERT INTO `destinacije` (`id`, `drzava`, `grad`, `viza`) VALUES
(1, 'Spanija', 'Barsa', 1),
(2, 'Francuska', 'Pariz', 1),
(3, 'Grcka', 'Atina', 0);

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

CREATE TABLE `putnici` (
  `broj_pasosa` varchar(30) NOT NULL,
  `ime_prezime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putnici`
--

INSERT INTO `putnici` (`broj_pasosa`, `ime_prezime`) VALUES
('123', 'Sladjan'),
('456', 'Milovan'),
('789', 'Boban');

-- --------------------------------------------------------

--
-- Table structure for table `putovanja`
--

CREATE TABLE `putovanja` (
  `id` int(11) NOT NULL,
  `datum_polaska` date NOT NULL,
  `datum_povratka` date NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `destinacija_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putovanja`
--

INSERT INTO `putovanja` (`id`, `datum_polaska`, `datum_povratka`, `cena`, `destinacija_id`) VALUES
(1, '2021-06-16', '2021-06-30', '1000', 2),
(2, '2021-06-16', '2021-06-30', '2000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spisak_putnika`
--

CREATE TABLE `spisak_putnika` (
  `id` int(11) NOT NULL,
  `broj_pasosa` varchar(30) NOT NULL,
  `id_putovanja` int(11) NOT NULL,
  `popust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spisak_putnika`
--

INSERT INTO `spisak_putnika` (`id`, `broj_pasosa`, `id_putovanja`, `popust`) VALUES
(5, '123', 1, 0),
(7, '456', 2, 0),
(8, '789', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinacije`
--
ALTER TABLE `destinacije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `putnici`
--
ALTER TABLE `putnici`
  ADD PRIMARY KEY (`broj_pasosa`);

--
-- Indexes for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destinacija_id` (`destinacija_id`);

--
-- Indexes for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  ADD PRIMARY KEY (`id`),
  ADD KEY `broj_pasosa` (`broj_pasosa`),
  ADD KEY `id_putovanja` (`id_putovanja`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinacije`
--
ALTER TABLE `destinacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `putovanja`
--
ALTER TABLE `putovanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD CONSTRAINT `putovanja_ibfk_1` FOREIGN KEY (`destinacija_id`) REFERENCES `destinacije` (`id`);

--
-- Constraints for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  ADD CONSTRAINT `spisak_putnika_ibfk_1` FOREIGN KEY (`broj_pasosa`) REFERENCES `putnici` (`broj_pasosa`),
  ADD CONSTRAINT `spisak_putnika_ibfk_2` FOREIGN KEY (`id_putovanja`) REFERENCES `putovanja` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;