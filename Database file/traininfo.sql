-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 12:01 PM
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
-- Table structure for table `traininfo`
--

CREATE TABLE `traininfo` (
  `TrainNo` varchar(50) NOT NULL,
  `TrainName` varchar(50) NOT NULL,
  `Route` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traininfo`
--

INSERT INTO `traininfo` (`TrainNo`, `TrainName`, `Route`) VALUES
('735-736', 'Agnibina Express', 'Dhaka-Tarakandi'),
('791-792', 'Banalata Express', 'Dhaka–Chapai Nawabganj'),
('803-804', 'Banglabandha Express', 'Rajshahi–Panchagarh'),
('731-732', 'Barendra Express', 'Rajshahi-Chilahati'),
('795-796', 'Benapole Express', 'Benapole–Dhaka'),
('785-786', 'Bijoy Express', 'Chattogram–Mymensingh'),
('743-744', 'Brahmaputra Express', 'Dhaka-Dewanganj'),
('801-802', 'Chattala Express', 'Chattogram–Dhaka'),
('763-764', 'Chitra Express', 'Khulna–Dhaka'),
('779-780', 'Dhalarchar Express', 'Dhalarchar–Rajshahi'),
('769-770', 'Dhumketu Express', 'Dhaka–Rajshahi'),
('767-768', 'Dolonchapa Express', 'Santahar–Dinajpur'),
('757-758', 'Drutojan Express', 'Dhaka–Panchagarh'),
('749-750', 'Egarosindhur Godhuli', 'Dhaka-Kishoreganj'),
('737-738', 'Egarosindhur Provati', 'Dhaka-Kishoreganj'),
('705-706', 'Ekota Express', 'Dhaka-Panchagarh'),
('777-778', 'Haor Express', 'Dhaka–Mohanganj'),
('799-800', 'Jamalpur Express', 'Dhaka–Jamalpur'),
('745-746', 'Jamuna Express', 'Dhaka-Tarakandi'),
('717-718', 'Jayantika Express', 'Dhaka-Sylhet'),
('773-774', 'Kalni Express', 'Dhaka–Sylhet'),
('715-716', 'Kapotaksha Express', 'Khulna-Rajshahi'),
('713-714', 'Karatoya Express', 'Santahar-Burimari'),
('781-782', 'Kishoreganj Express', 'Dhaka–Kishoreganj'),
('797-798', 'Kurigram Express', 'Dhaka–Kurigram'),
('751-752', 'Lalmoni Express', 'Dhaka-Lalmonirhat'),
('755-756', 'Madhumati Express', 'Goalanda Ghat–Rajshahi'),
('729-730', 'Meghna Express', 'Chattogram-Chandpur'),
('721-722', 'Mohanagar Express', 'Chattogram-Dhaka'),
('703-704', 'Mohanagar Provati Godhuli Express', 'Chattogram-Dhaka'),
('789-790', 'Mohanganj Express', 'Dhaka–Mohanganj'),
('765-766', 'Nilsagar Express', 'Dhaka–Chilahati'),
('759-760', 'Padma Express', 'Dhaka–Rajshahi'),
('719-720', 'Paharika Express', 'Chattogram-Sylhet'),
('793-794', 'Panchagarh Express', 'Dhaka–Panchagarh'),
('709-710', 'Parabat Express', 'Dhaka-Sylhet'),
('771-772', 'Rangpur Express', 'Dhaka–Rangpur'),
('727-728', 'Rupsha Express', 'Khulna-Chilahati'),
('761-762', 'Sagardari Express', 'Khulna–Rajshahi'),
('787-788', 'Shonar Bangla Express', 'Chattogram–Dhaka'),
('753-754', 'Silkcity Express', 'Dhaka–Rajshahi'),
('747-748', 'Simanta Express', 'Khulna-Chilahati'),
('775-776', 'Sirajganj Express', 'Sirajganj–Dhaka'),
('701-702', 'Suborno Express', 'Chattogram-Dhaka'),
('725-726', 'Sundarban Express', 'Khulna-Dhaka'),
('707-708', 'Tista Express', 'Dhaka-Dewanganj'),
('733-734', 'Titumir Express', 'Rajshahi-Chilahati'),
('783-784', 'Tungipara Express', 'Gobra–Rajshahi'),
('741-742', 'Turna Express', 'Chattogram-Dhaka'),
('723-724', 'Udayan Express', 'Chattogram-Sylhet'),
('739-740', 'Upaban Express', 'Dhaka-Sylhet'),
('711-712', 'Upakul Express', 'Noakhali-Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traininfo`
--
ALTER TABLE `traininfo`
  ADD PRIMARY KEY (`TrainName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
