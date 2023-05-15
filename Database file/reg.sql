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
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PaymentNumber` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Nid` varchar(100) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `VendorType` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ConfirmPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`UserName`, `Email`, `PaymentNumber`, `DateOfBirth`, `Gender`, `Nid`, `Address`, `VendorType`, `Password`, `ConfirmPassword`) VALUES
('Remo', 'galibremo@gmail.com', '01744716387', '1999-10-20', 'male', '../Upload/../Upload/../Upload/Screenshot (18).png', 'Dhaka,bd', 'train', '12345678', '12345678'),
('Rusho', 'fahimrusho@gmail.com', '01788061906', '2023-04-04', 'male', '../Upload/../Upload/Screenshot (20).png', 'dinajpur', 'train', '12345678', '12345678'),
('goku', 'goku@gmail.com', '01788061906', '2023-04-04', 'female', '../Upload/Screenshot (18).png', 'wefsef', 'train', '6R4E8M7O4r@#', '6R4E8M7O4r@#');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
