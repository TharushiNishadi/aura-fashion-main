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
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `address`, `phone`, `item_name`, `item_price`, `item_quantity`, `total_price`, `discount`, `payment_method`, `created_at`, `order_number`, `order_status`, `order_date`) VALUES
(36, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 1, 3500.00, NULL, 'card', '2024-09-25 18:05:47', 'AURA66F450FB02246', 'pending', '2024-09-25 18:05:47'),
(35, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 1, 3500.00, NULL, 'bank', '2024-09-25 18:05:27', 'AURA66F450E7361FF', 'pending', '2024-09-25 18:05:27'),
(34, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 4, 14000.00, NULL, 'bank', '2024-09-25 16:13:16', 'AURA66F4369CBFEDC', 'out-for-delivery', '2024-09-25 16:13:16'),
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

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `name_on_card` varchar(100) DEFAULT NULL,
  `credit_card_number` varchar(20) DEFAULT NULL,
  `exp_month` varchar(10) DEFAULT NULL,
  `exp_year` varchar(10) DEFAULT NULL,
  `cvv` varchar(4) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_quantity` int DEFAULT NULL,
  `order_number` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `full_name`, `email`, `address`, `phone`, `city`, `state`, `zip_code`, `name_on_card`, `credit_card_number`, `exp_month`, `exp_year`, `cvv`, `total_price`, `item_name`, `item_quantity`, `order_number`, `created_at`) VALUES
(38, 'Janidu Delpaarachchi', 'janidu@gmail.com', '123/4, Borella', '0761234567', 'Colombo', 'Western', '12345', 'Janidu Delpaarachchi', '4242424242424242', '12', '2025', '123', 3500.00, 'T-shirt', 1, 'AURA66F4373B24AC4', '2024-09-25 16:15:43'),
(40, 'Janidu Delpaarachchi', 'janidu@gmail.com', '123/4, Borella', '0761234567', 'Colombo', 'Western', '12345', 'Janidu Delpaarachchi', '4242424242424242', '12', '2025', '123', 14000.00, 'T-shirt', 4, 'AURA66F4372F38293', '2024-09-25 16:13:16'),
(41, 'Janidu Delpaarachchi', 'janidu@gmail.com', '123/4, Borella', '0761234567', 'Colombo', 'Western', '12345', 'Janidu Delpaarachchi', '4242424242424242', '12', '2025', '123', 3500.00, 'T-shirt', 1, 'AURA66F529D25867F', '2024-09-26 09:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `sizes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `price`, `quantity`, `sizes`) VALUES
(1, 'Shirt', 'T-shirt', 3500.00, 50, 'M,L,XL'),
(2, 'Shirt', 'Polo Shirt', 4500.00, 25, 'S,M,L'),
(3, 'Trouser', 'Jeans', 6000.00, 10, 'M,L'),
(4, 'Dress', 'Summer Dress', 8000.00, 15, 'S,M,L');
