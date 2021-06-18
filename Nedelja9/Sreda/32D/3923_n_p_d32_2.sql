-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 02:20 PM
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
-- Database: `3923_n_p_d32_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukupna_cena` decimal(9,2) NOT NULL,
  `adresa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `korpa_proizvodi`
--

CREATE TABLE `korpa_proizvodi` (
  `id` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `id_korpe` int(11) NOT NULL,
  `barkod` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `tip` enum('oprema','obuca','odeca','') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `ime`, `cena`, `tip`) VALUES
('123456789', 'vojnicke cizme', 3000, 'obuca'),
('123459876', 'vojna kapa', 1000, 'oprema'),
('987654321', 'jakna', 5000, 'odeca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korpa_proizvodi`
--
ALTER TABLE `korpa_proizvodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_korpe` (`id_korpe`),
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
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korpa_proizvodi`
--
ALTER TABLE `korpa_proizvodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korpa_proizvodi`
--
ALTER TABLE `korpa_proizvodi`
  ADD CONSTRAINT `korpa_proizvodi_ibfk_1` FOREIGN KEY (`id_korpe`) REFERENCES `korpa` (`id`),
  ADD CONSTRAINT `korpa_proizvodi_ibfk_2` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;