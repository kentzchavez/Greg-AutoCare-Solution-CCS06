-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 02:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greg_acs`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_service`
--

CREATE TABLE `booked_service` (
  `id` int(11) NOT NULL,
  `detailing` varchar(4) DEFAULT NULL,
  `ceramic_coating` varchar(4) DEFAULT NULL,
  `paint_correction` varchar(4) DEFAULT NULL,
  `window_tint` varchar(4) DEFAULT NULL,
  `paint_protection_film` varchar(4) DEFAULT NULL,
  `suggestions` varchar(200) DEFAULT NULL,
  `date_booked` date DEFAULT NULL,
  `car_info_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` smallint(6) NOT NULL,
  `cus_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cus_info`
--

CREATE TABLE `cus_info` (
  `id` int(6) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(65) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_service`
--
ALTER TABLE `booked_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_info_id` (`car_info_id`);

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cus_info_id` (`cus_info_id`);

--
-- Indexes for table `cus_info`
--
ALTER TABLE `cus_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_service`
--
ALTER TABLE `booked_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cus_info`
--
ALTER TABLE `cus_info`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_service`
--
ALTER TABLE `booked_service`
  ADD CONSTRAINT `booked_service_ibfk_1` FOREIGN KEY (`car_info_id`) REFERENCES `car_info` (`id`);

--
-- Constraints for table `car_info`
--
ALTER TABLE `car_info`
  ADD CONSTRAINT `car_info_ibfk_1` FOREIGN KEY (`cus_info_id`) REFERENCES `cus_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
