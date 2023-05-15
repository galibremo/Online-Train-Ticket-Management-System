-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 02:03 PM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtrain`
--

CREATE TABLE `addtrain` (
  `VendorName` varchar(30) NOT NULL,
  `TrainCode` varchar(30) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `FirstClass` int(50) NOT NULL,
  `EcoClass` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtrain`
--

INSERT INTO `addtrain` (`VendorName`, `TrainCode`, `TrainName`, `FirstClass`, `EcoClass`) VALUES
('Remo', '793', 'Panchaghar Express', 50, 200),
('Remo', '794', 'Panchaghar Express', 50, 200),
('Remo', '796', 'Benapol Express', 50, 200),
('Remo', '795', 'Benapol Express', 50, 200),
('Remo', '703', 'Mahanagar Godhuli', 50, 200),
('Remo', '704', 'Mahanagar Godhuli', 50, 199),
('Rusho', '707', 'Tista Express', 50, 200),
('Rusho', '708', 'Tista Express', 50, 200),
('Rusho', '450', 'gua express', 50, 200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
