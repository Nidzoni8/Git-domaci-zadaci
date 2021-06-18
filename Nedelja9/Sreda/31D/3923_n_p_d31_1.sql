-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 02:38 PM
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
-- Database: `3923_n_p_d31_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `broj_knjizice` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ime` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razred` int(11) NOT NULL,
  `odeljenje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`broj_knjizice`, `ime`, `prezime`, `razred`, `odeljenje`) VALUES
('13/2020', 'ranko', 'stojic', 3, 5),
('14/2020', 'janko', 'veselinovic', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `id` int(11) NOT NULL,
  `predmet` int(11) NOT NULL,
  `broj_knjizice` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`id`, `predmet`, `broj_knjizice`, `ocena`) VALUES
(1, 1, '14/2020', 5),
(2, 2, '14/2020', 4),
(3, 1, '13/2020', 2),
(4, 3, '13/2020', 3);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id` int(11) NOT NULL,
  `naziv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id`, `naziv`, `profesor`) VALUES
(1, 'matematika', 'MT'),
(2, 'srpski', 'SR'),
(3, 'fizicko', 'FF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`broj_knjizice`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ocene_ibfk_1` (`broj_knjizice`),
  ADD KEY `predmet` (`predmet`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ocene`
--
ALTER TABLE `ocene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_1` FOREIGN KEY (`broj_knjizice`) REFERENCES `djaci` (`broj_knjizice`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ocene_ibfk_2` FOREIGN KEY (`predmet`) REFERENCES `predmeti` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;