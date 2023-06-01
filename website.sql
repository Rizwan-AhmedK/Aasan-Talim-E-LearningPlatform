-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 05:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `CONFIRM` varchar(40) NOT NULL,
  `USERNAME` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`ID`, `EMAIL`, `PASSWORD`, `CONFIRM`, `USERNAME`) VALUES
(27, 'rizwan.bcskkf18@iba-suk.edu.pk', '12d6bf6231f55e3df7e53ce3a58cd90f', '594f803b380a41396ed63dca39503542', 'rizwan'),
(28, 'rizwanshahab60@gmail.com', '12d6bf6231f55e3df7e53ce3a58cd90f', '12d6bf6231f55e3df7e53ce3a58cd90f', 'rizwan'),
(29, 'rizwan.bcskkf11889@iba-suk.edu.pk', '12d6bf6231f55e3df7e53ce3a58cd90f', '12d6bf6231f55e3df7e53ce3a58cd90f', 'PTCL-BB'),
(30, 'rizwanshahab601@gmail.com', '12d6bf6231f55e3df7e53ce3a58cd90f', '12d6bf6231f55e3df7e53ce3a58cd90f', 'rizwan'),
(31, 'rizwanshahab602@gmail.com', '12d6bf6231f55e3df7e53ce3a58cd90f', '12d6bf6231f55e3df7e53ce3a58cd90f', 'Rizwan Ahmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
