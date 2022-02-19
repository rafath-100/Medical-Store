-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 12:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(120) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `product_ram` char(5) NOT NULL,
  `product_storage` varchar(50) NOT NULL,
  `product_camera` varchar(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_ram`, `product_storage`, `product_camera`, `product_image`, `product_quantity`, `product_status`) VALUES
(1, 'Roopa', 'Gynecologist', '3900', '18', '64', '23', 'Roopa.jpg', 10, '1'),
(2, 'Anjali', 'Dietician', '4438', '12', '32', '13', 'Anjali.jpg', 10, '1'),
(3, 'Sumita', 'Therapist', '1500', '14', '64', '13', 'Sumita.jpg', 10, '1'),
(4, 'L', 'ENT', '1300', '24', '32', '13', 'Bahadur.jpg', 10, '1'),
(5, 'Ramesh', 'Surgeon ', '2200', '4', '32', '16', 'ramesh.jpg', 10, '1'),
(6, 'Sumitra', 'Gynecologist', '1350', '12', '32', '8', 'Sumita.jpg', 10, '1'),
(7, 'Aditi', 'Child Care', '1500', '18', '32', '33', 'Aditi.jpg', 10, '1'),
(8, 'Suresh', 'ENT', '2000', '26', '16', '13', 'Suresh.jpg', 10, '1'),
(9, 'Ishwar', 'Therapist', '3000', '26', '16', '8', 'Ishwar.jpg', 10, '1'),
(10, 'Jaanki', 'Gynecologist', '2000', '12', '16', '8', 'jaanki.jpg', 10, '1'),
(11, 'Rajendra', 'ENT', '4000', '18', '64', '16', 'Rajendra.jpg', 10, '1'),
(12, 'Gora Singh', 'Surgeon', '2300', '18', '32', '13', 'gora-singh.jpg', 10, '1'),
(13, 'Mansukh', 'Dietician', '3500', '2', '128', '12', 'Mansukh.jpg', 10, '1'),
(14, 'Light Yagami', 'Medicine', '2600', '6', '32', '13', 'Light-yagami.jpg', 10, '1'),
(15, 'Manju Devi', 'Child Care', '1700', '20', '16', '8', 'Manju-devi.jpg', 10, '1'),
(16, 'Mukesh Chhabra', 'Medicine', '2800', '20', '64', '15', 'mukesh-chhabra.jpg', 10, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
