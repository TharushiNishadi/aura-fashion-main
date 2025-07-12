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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `full_name`, `email`, `address`, `phone`, `city`, `state`, `zip_code`, `name_on_card`, `credit_card_number`, `exp_month`, `exp_year`, `cvv`, `total_price`, `item_name`, `item_quantity`, `order_number`, `created_at`) VALUES
(1, 'Janidu Delpaarachchi', 'janidutharana123@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'Sri Lanka', '00800', 'J T Delpaarachchi', '111-222-3333-444-666', 'March', '2025', '567', NULL, NULL, NULL, NULL, '2024-09-25 10:47:45'),
(2, 'Janidu Delpaarachchi', 'janidutharana123@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'Sri Lanka', '00800', 'J T Delpaarachchi', '111-222-3333-444-666', 'March', '2025', '567', NULL, NULL, NULL, NULL, '2024-09-25 10:54:20'),
(3, 'Janidu Delpaarachchi', 'janidutharana123@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'Sri Lanka', '00800', 'J T Delpaarachchi', '111-222-3333-444-666', 'March', '2025', '567', NULL, NULL, NULL, NULL, '2024-09-25 10:54:54'),
(4, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'rewgertgs', '5321525', 'tqttq', '51345632155245', 'fhygfsghrf', '53213', '2135', NULL, NULL, NULL, NULL, '2024-09-25 10:59:54'),
(5, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:18:45'),
(6, 'Janidu Delpaarachchi', 'janidutharana123@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'ghrhg', '895894', 'tqwtrtwert', '8957897904', 'hfhfh', '8990708970', '0897', NULL, NULL, NULL, NULL, '2024-09-25 11:19:18'),
(7, 'Janidu Delpaarachchi', 'janidutharana123@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'ghrhg', '895894', 'tqwtrtwert', '8957897904', 'hfhfh', '8990708970', '0897', NULL, NULL, NULL, NULL, '2024-09-25 11:19:24'),
(8, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:21:00'),
(9, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'qwerfgq', 'qerwfgqrfg', 'fqwef', 'qqwefqwf', 'fgqf', 'qrgfrrqegq', 'rgrg', NULL, NULL, NULL, NULL, '2024-09-25 11:21:08'),
(10, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:22:09'),
(11, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:22:50'),
(12, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:22:53'),
(13, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:22:56'),
(14, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:26:08'),
(15, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:27:14'),
(16, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:28:06'),
(17, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'fewefe', '322424', 'efefeff', '2142441222222222', 'feffdgdgdg', '24242442', '4422', NULL, NULL, NULL, NULL, '2024-09-25 11:28:26'),
(18, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'fewefe', '322424', 'efefeff', '2142441222222222', 'feffdgdgdg', '24242442', '4422', NULL, NULL, NULL, NULL, '2024-09-25 11:28:31'),
(19, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 11:52:27'),
(20, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14000.00, 'T-shirt', 4, NULL, '2024-09-25 11:57:49'),
(21, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:00:39'),
(22, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7000.00, 'T-shirt', 2, NULL, '2024-09-25 12:00:47'),
(23, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:01:10'),
(24, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:01:13'),
(25, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:01:51'),
(26, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:01:58'),
(27, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:02:04'),
(28, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:02:10'),
(29, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:02:15'),
(30, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:02:21'),
(31, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, NULL, '2024-09-25 12:02:24'),
(32, 'Janidu Delpaarachchi', NULL, 'Borella, Colombo 08', '0761234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3500.00, 'T-shirt', 1, 'ORD-66f3fd24040dd', '2024-09-25 12:08:04'),
(33, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10500.00, 'T-shirt', 3, 'ORD-66f3fd3970fd0', '2024-09-25 12:08:25'),
(34, 'Janidu Delpaarachchi', 'janidutharana123@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'Sri Lanka', '00800', 'J T Delpaarachchi', '111-222-333-444-555-', 'March', '2024', '784', NULL, NULL, NULL, NULL, '2024-09-25 16:08:31'),
(35, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'yjrtjr', 'jryj', 'J T Delpaarachchi', 'jyytjytjr', 'tjtyjyrtj', 'rtry', 'urj', NULL, NULL, NULL, NULL, '2024-09-25 16:16:12'),
(36, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'yjrtjr', 'jryj', 'J T Delpaarachchi', 'jyytjytjr', 'tjtyjyrtj', 'rtry', 'urj', NULL, NULL, NULL, NULL, '2024-09-25 16:16:24'),
(37, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'yjrtjr', 'jryj', 'J T Delpaarachchi', 'jyytjytjr', 'tjtyjyrtj', 'rtry', 'urj', NULL, NULL, NULL, NULL, '2024-09-25 17:02:13'),
(38, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'Sri Lanka', '00800', 'J T Delpaarachchi', '12324566', 'January', '2025', '123', NULL, NULL, NULL, NULL, '2024-09-25 18:06:27'),
(39, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'Sri Lanka', '35353', 'J T Delpaarachchi', '46436546', 'dfgdgds', '35353', '3553', NULL, NULL, NULL, NULL, '2024-09-26 08:34:20'),
(40, 'Janidu Delpaarachchi', 'hardly@gmail.com', 'Borella, Colombo 08', NULL, 'Colombo', 'fDf', 'sdf', 'J T Delpaarachchi', '35w35454', 'dsgdg', 'ddg', 'd', NULL, NULL, NULL, NULL, '2024-09-26 09:34:11');

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
  `sizes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fits` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `price`, `quantity`, `sizes`, `fits`, `image`) VALUES
(2, 'Men', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/1.jpg'),
(3, 'Men', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/3.jpg'),
(4, 'Men', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/4.jpg'),
(5, 'Men', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/5.jpg'),
(6, 'Men', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/7.jpg'),
(7, 'Men', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/14.jpg'),
(8, 'Men', 'Shirts', 2400.00, 1000, 'XS, S, M, L ,XL ', 'Oversize fit, Regular fit', 'uploads/26.jpg'),
(9, 'Men', 'Shirts', 9000.00, 100, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/10.jpg'),
(10, 'Men', 'Dust Frock', 28888.00, 2999, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/23.jpg'),
(11, 'Men', 'Shirts', 8000.00, 1000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `created_at`) VALUES
(2, 'Janidu Delpaarachchi', 'hardly@gmail.com', '$2y$10$Ct/OcaGZ1DleRqPa8jCQAu0YCee9Ka4iuXXgh5T4JuJYz5QbDlxAe', '2024-09-25 17:34:34'),
(3, 'Janidu Delpaarachchi', 'y@gmail.com', '$2y$10$e36uX96T3u8UkHhQTfW9qeJK1N/3Munvsox/SA5aUo4Lz0GhqOvSW', '2024-09-25 17:35:45'),
(10, 'Janidu Delpaarachchi', 'user@gmail', '$2y$10$FH1gUoJ6/uWpzqAdSR1Nj.5AnFvLNgzV/a9VZij.76s92Dyly/yT2', '2024-09-26 09:41:55'),
(11, 'user', 'user@gmail.com', '$2y$10$sPb098iyWynlkE3.yL2GCemM0uVxIMDl/UfhxBUDNMcZ7n.Eff/12', '2024-09-26 09:42:19'),
(12, 'Thilini', 'thilini@gmail.com', '$2y$10$9yjmLu/XXNEPRn6sEfukGeMdzyyOn1cNAejP7P3eqDQlNdxJHCWFy', '2024-09-26 09:46:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
