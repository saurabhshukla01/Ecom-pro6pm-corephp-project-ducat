-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 03:03 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro6pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE `tempcart` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `proid` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempcart`
--

INSERT INTO `tempcart` (`id`, `session`, `proid`, `quantity`) VALUES
(13, '0s28outq28c4ecm5qp9caembe3', 'MOB14183', 1),
(14, '0s28outq28c4ecm5qp9caembe3', 'MOB3688', 2),
(15, '0s28outq28c4ecm5qp9caembe3', 'MOB22362', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempcart`
--
ALTER TABLE `tempcart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempcart`
--
ALTER TABLE `tempcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
