-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 12:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redstream_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `name` varchar(20) DEFAULT 'not null',
  `email` varchar(20) DEFAULT NULL,
  `mobile_number` int(10) DEFAULT NULL,
  `password` varchar(5) NOT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `weight` int(5) DEFAULT NULL,
  `state` varchar(6) DEFAULT NULL,
  `zip_code` int(10) DEFAULT NULL,
  `district` varchar(10) DEFAULT NULL,
  `area` varchar(10) DEFAULT NULL,
  `landmarks` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`name`, `email`, `mobile_number`, `password`, `blood_group`, `gender`, `birth_date`, `weight`, `state`, `zip_code`, `district`, `area`, `landmarks`) VALUES
('bhu', 'bhu@gmail.com', 987654321, '', 'A+', 'Female', '2002-07-23', 50, 'mysore', 9876, 'mysore', 'mysore', 'mysre'),
('bhuvana', 'nsjshdbhd@gmail.com', 0, '', 'A+', 'Male', '2002-07-23', 12, 'karnat', 9876, 'mysore', 'mysore', 'mysore'),
('bhu', 'bhu@gmail.com', 987654321, '', 'A+', 'Female', '2002-07-23', 50, 'karnat', 570021, 'mysore', 'mysore', 'mysore'),
('bhuvana', 'bhuvana9353@gmail.co', 987654321, '', 'A+', 'Female', '2002-07-23', 50, 'karnat', 570021, 'mysore', 'mysore', 'mysore'),
('bhuvana', 'bhu@gmail.com', 987654321, '$2y$1', 'A+', 'Female', '2002-07-23', 20, 'karnat', 570021, 'mysore', 'mysore', 'mysore'),
('monisha', 'monishagowda@gmail.c', 987654321, '$2y$1', 'A-', 'Female', '2002-07-23', 50, 'karnat', 570001, 'mysore', 'mysore', 'mysore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
