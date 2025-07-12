-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2024 at 10:51 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aurafashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_price` decimal(10,2) DEFAULT NULL,
  `item_quantity` int DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_number` varchar(100) DEFAULT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `address`, `phone`, `item_name`, `item_price`, `item_quantity`, `total_price`, `discount`, `payment_method`, `created_at`, `order_number`, `order_status`, `order_date`) VALUES
(36, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 1, 3500.00, NULL, 'card', '2024-09-25 18:05:47', 'AURA66F450FB02246', 'pending', '2024-09-25 18:05:47'),
(35, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 1, 3500.00, NULL, 'bank', '2024-09-25 18:05:27', 'AURA66F450E7361FF', 'pending', '2024-09-25 18:05:27'),
(34, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 1, 3500.00, NULL, 'cash', '2024-09-25 18:05:10', 'AURA66F450D69F78E', 'pending', '2024-09-25 18:05:10'),
(31, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 4, 14000.00, NULL, 'bank', '2024-09-25 16:13:16', 'AURA66F4369CBFEDC', 'out-for-delivery', '2024-09-25 16:13:16'),
(32, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 4, 14000.00, NULL, 'bank', '2024-09-25 16:15:43', 'AURA66F4372F38293', 'delivered', '2024-09-25 16:15:43'),
(33, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 20, 70000.00, NULL, 'card', '2024-09-25 16:16:02', 'AURA66F437423E0AB', 'ready', '2024-09-25 16:16:02'),
(37, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'Shirts', NULL, 4, 9600.00, NULL, 'card', '2024-09-26 08:34:08', 'AURA66F51C8057B4E', 'pending', '2024-09-26 08:34:08'),
(38, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 1, 3500.00, NULL, 'card', '2024-09-26 09:30:58', 'AURA66F529D25867F', 'pending', '2024-09-26 09:30:58'),
(39, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'Dust Frock', NULL, 1, 28888.00, NULL, 'card', '2024-09-26 09:34:00', 'AURA66F52A88A8E8A', 'pending', '2024-09-26 09:34:00'),
(40, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'Dust Frock', NULL, 1, 28888.00, NULL, 'cash', '2024-09-26 09:34:30', 'AURA66F52AA6627AA', 'pending', '2024-09-26 09:34:30'),
(41, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'Dust Frock', NULL, 1, 28888.00, NULL, 'cash', '2024-09-26 09:34:35', 'AURA66F52AAB8E1E1', 'pending', '2024-09-26 09:34:35'),
(42, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'Dust Frock', NULL, 1, 28888.00, NULL, 'bank', '2024-09-26 09:34:51', 'AURA66F52ABB681E8', 'pending', '2024-09-26 09:34:51'),
(43, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 3, 10500.00, NULL, 'card', '2024-09-26 09:52:10', 'AURA66F52ECA466B6', 'pending', '2024-09-26 09:52:10'),
(44, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 4, 14000.00, NULL, 'cash', '2024-09-26 09:52:52', 'AURA66F52EF4F0DAE', 'pending', '2024-09-26 09:52:52'),
(45, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 3, 7875.00, NULL, 'cash', '2024-09-26 09:56:01', 'AURA66F52FB182AE3', 'pending', '2024-09-26 09:56:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
