-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_airlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `Origin` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `passenger` int(1) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flight_class`
--

CREATE TABLE `flight_class` (
  `economy` varchar(50) NOT NULL,
  `business` varchar(50) NOT NULL,
  `first` varchar(50) NOT NULL,
  `flight_id` varchar(5) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_class`
--

INSERT INTO `flight_class` (`economy`, `business`, `first`, `flight_id`, `user_name`) VALUES
('10000', '15000', '20000', 'DHCX1', NULL),
('12000', '17000', '22000', 'DHDL2', NULL),
('11000', '16000', '21000', 'SYCH3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_list`
--

CREATE TABLE `ticket_list` (
  `ticket_id` int(11) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `flight_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_list`
--

INSERT INTO `ticket_list` (`ticket_id`, `origin`, `destination`, `flight_id`) VALUES
(214, 'DHAKA', 'COX\'S BAZAR', 'DHCX1'),
(235, 'DHAKA', 'DELHI', 'DHDL2'),
(345, 'SYLHET', 'CHITTAGONG', 'SYCH3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pay_id` int(10) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `user_name`, `password`, `pay_id`, `contact`) VALUES
('Naj', 'naj.mollah999@gmail.com', '123456', 2031106642, 1145210394);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `flight_class`
--
ALTER TABLE `flight_class`
  ADD KEY `user_name` (`user_name`),
  ADD KEY `flight_id` (`flight_id`);

--
-- Indexes for table `ticket_list`
--
ALTER TABLE `ticket_list`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);

--
-- Constraints for table `flight_class`
--
ALTER TABLE `flight_class`
  ADD CONSTRAINT `flight_class_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`),
  ADD CONSTRAINT `flight_class_ibfk_2` FOREIGN KEY (`flight_id`) REFERENCES `ticket_list` (`flight_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
