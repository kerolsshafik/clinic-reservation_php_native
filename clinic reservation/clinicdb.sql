-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2021 at 04:18 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dental`
--

CREATE TABLE `dental` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `id` varchar(14) NOT NULL,
  `day` varchar(3) NOT NULL,
  `num` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dental`
--

INSERT INTO `dental` (`name`, `phone`, `id`, `day`, `num`) VALUES
('kerlos amir', '', '11111111111111', 'sat', 1),
('kerlos amir', '22222222222', '22222222222222', 'sat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `eye`
--

CREATE TABLE `eye` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `id` varchar(14) NOT NULL,
  `day` varchar(3) NOT NULL,
  `num` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eye`
--

INSERT INTO `eye` (`name`, `phone`, `id`, `day`, `num`) VALUES
('kerlos amir', '11111111111', '11111111111111', 'sat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `heart`
--

CREATE TABLE `heart` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `id` varchar(14) NOT NULL,
  `day` varchar(3) NOT NULL,
  `num` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `heart`
--

INSERT INTO `heart` (`name`, `phone`, `id`, `day`, `num`) VALUES
('kerlos amir', '11111111111', '11111111111111', 'sat', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dental`
--
ALTER TABLE `dental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eye`
--
ALTER TABLE `eye`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heart`
--
ALTER TABLE `heart`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
