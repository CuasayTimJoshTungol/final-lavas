-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2023 at 06:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbd`
--

CREATE TABLE `tblbd` (
  `id` int NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `YearLevel` varchar(50) NOT NULL,
  `Program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblbd`
--

INSERT INTO `tblbd` (`id`, `studentID`, `FullName`, `YearLevel`, `Program`) VALUES
(10, 'Renz01', 'Renz Bryan AustriaTabay', '3rd College', 'BSIT'),
(11, 'Cheene02', 'Cheene Manalo', '3rd College', 'BSIT'),
(12, 'Cris03', 'Cris Paul Mavida', '3rd College', 'BSIT'),
(13, 'Jhen04', 'Jhen Janice Dumas', 'Senior High', 'BSIT'),
(15, 'Jazz05', 'Jazz P. Taroquin', '3rd College', 'Bsed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbd`
--
ALTER TABLE `tblbd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbd`
--
ALTER TABLE `tblbd`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
