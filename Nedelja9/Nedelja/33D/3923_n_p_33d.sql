-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 04:21 PM
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
-- Database: `3923_n_p_d33`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(19, '123', 20, 220, '2021-06-17'),
(20, '456', 40, 275, '2021-06-17'),
(21, '789', 10, 220, '2021-06-16'),
(22, '159', 30, 220, '2021-06-16'),
(23, '123', 50, 200, '2021-05-01'),
(24, '456', 10, 250, '2021-05-01'),
(25, '789', 60, 220, '2021-06-16'),
(26, '159', 70, 242, '2021-06-17'),
(27, '789', 20, 220, '2021-05-01'),
(28, '159', 30, 242, '2021-06-17'),
(30, '788', 20, 220, '2021-06-17'),
(31, '788', 40, 275, '2021-06-17'),
(32, '788', 10, 242, '2021-06-17'),
(33, '776', 30, 50, '2021-05-01'),
(34, '761', 20, 88, '2021-06-17'),
(35, '761', 50, 70, '2021-06-16'),
(36, '761', 30, 90, '2021-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naziv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
('123', 'ulje', 220),
('159', 'kvasac', 165),
('456', 'brasno', 330),
('761', 'beli luk', 88),
('776', 'crni luk', 55),
('788', 'paradajz', 220),
('789', 'secer', 110);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;