-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 09:14 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `product` varchar(100) NOT NULL,
  `quantity` int NOT NULL,
  `unit_price` decimal(10,0) NOT NULL,
  `discount_rate` decimal(10,0) NOT NULL,
  `order_date` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `payment_type` varchar(15) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `security_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `quantity`, `unit_price`, `discount_rate`, `order_date`, `first_name`, `last_name`, `payment_type`, `card_number`, `security_code`) VALUES
(1, 'ipad', 7, 200, 15, '2023-11-10', 'Fname', 'Lname', 'discover', '1111222233334444', '12345678'),
(2, 'ipad', 5, 20, 15, '2023-11-01', 'AA', 'b', 'visa', '1112222333344445', '12345678'),
(3, 'ipad', 5, 20, 15, '2023-11-01', 'AA', 'b', 'visa', '1112222333344445', '12345678'),
(4, 'ipad', 1, 2, 3, '2023-11-15', 'a', 'b', 'visa', '1111222233334444', '12345678'),
(5, 'iphone', 4, 40, 10, '2023-11-13', 'Alex', 'Davis', 'amex', '1122334455667788', '09876543'),
(6, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233'),
(7, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233'),
(8, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233'),
(9, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233'),
(10, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233'),
(11, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233'),
(12, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233'),
(13, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233'),
(14, 'ipad', 10, 700, 15, '2023-11-13', 'Steve', 'Name', 'mastercard', '1234123412341234', '11122233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
