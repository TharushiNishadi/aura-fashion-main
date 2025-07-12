-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2024 at 10:52 AM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
