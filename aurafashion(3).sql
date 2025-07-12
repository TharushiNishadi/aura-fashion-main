-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 10:29 PM
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
-- Database: `aurafashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `qty` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `inquiry_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `inquiry_message`) VALUES
(10, 'Dasantha kaluarachchi', 'dasanthakalu99@gmail.com', '0785206767', 'ghfjhtf'),
(14, 'dilhara', 'dilharamms@gmail.com', '0787662722', 'someone as '),
(15, 'Dasantha kaluarachchi', 'dasanthakalu99@gmail.com', '0785206767', 'ggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_price` decimal(10,2) DEFAULT NULL,
  `item_quantity` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_number` varchar(100) DEFAULT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `address`, `phone`, `item_name`, `item_price`, `item_quantity`, `total_price`, `discount`, `payment_method`, `created_at`, `order_number`, `order_status`, `order_date`) VALUES
(36, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 1, 3500.00, NULL, 'card', '2024-09-25 18:05:47', 'AURA66F450FB02246', 'packaging', '2024-09-25 18:05:47'),
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
(45, 'Janidu Delpaarachchi', 'Borella, Colombo 08', '0761234567', 'T-shirt', NULL, 3, 7875.00, NULL, 'cash', '2024-09-26 09:56:01', 'AURA66F52FB182AE3', 'pending', '2024-09-26 09:56:01'),
(46, 'dsfsdfe', 'edfweddde', 'efdwedf', 'Array', 0.00, 1, 100.00, 0.00, 'ewwew', '2024-09-27 13:03:13', '66f6ab1a4d401', 'Pending', '2024-09-27 13:03:13'),
(47, 'shashika', '218', '0784580996', 'Array', 0.00, 10, 35400.00, 0.00, 'card', '2024-09-27 13:05:13', 'AUR777516', 'Pending', '2024-09-27 13:05:13'),
(48, 'sds', 'sefeferf', 'sefesfsfe', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'card', '2024-09-27 13:09:18', 'AUR777516', 'Pending', '2024-09-27 13:09:18'),
(49, 'dsfs', 'dsfsfd', 'dsfds', 'Array', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 13:55:14', 'AUR545327', 'Pending', '2024-09-27 13:55:14'),
(50, 'sdwe', 'wedwd', 'wedwd', 'Array', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 13:56:23', 'AUR621624', 'Pending', '2024-09-27 13:56:23'),
(51, 'sdfsf', 'dsfsdf', 'dfsdf', '', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 13:59:51', 'AUR198362', 'Pending', '2024-09-27 13:59:51'),
(52, 'sds', 'sdsd', 'sdsd', '', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 14:01:12', 'AUR612278', 'Pending', '2024-09-27 14:01:12'),
(53, 'dcdsf', 'asdasd', 'sadasd', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'card', '2024-09-27 14:04:14', 'AUR369846', 'Pending', '2024-09-27 14:04:14'),
(54, 'sdcs', 'sdsdsad', 'sdsd', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 14:10:59', 'AUR798032', 'Pending', '2024-09-27 14:10:59'),
(55, 'dsds', 'ferferfer', 'erfef', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'card', '2024-09-27 14:11:32', 'AUR631387', 'Pending', '2024-09-27 14:11:32'),
(56, 'efde', 'werwer', 'ewrwer', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'cod', '2024-09-27 14:20:25', 'AUR631387', 'Pending', '2024-09-27 14:20:25'),
(57, 'sdsed', 'wedwdwe', 'dex', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'bank', '2024-09-27 14:31:06', 'AUR631387', 'Pending', '2024-09-27 14:31:06'),
(58, 'sdsed', 'wedwdwe', 'dex', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'bank', '2024-09-27 14:31:27', 'AUR631387', 'Pending', '2024-09-27 14:31:27'),
(59, 'dsfesf', 'edwede', 'edwedes', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'bank', '2024-09-27 14:31:48', 'AUR631387', 'Pending', '2024-09-27 14:31:48'),
(60, 'dsfesf', 'edwede', 'edwedes', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'bank', '2024-09-27 14:32:15', 'AUR631387', 'Pending', '2024-09-27 14:32:15'),
(61, 'dsfesf', 'edwede', 'edwedes', 'T-shirt, T-shirt, T-shirt, T-shirt, T-shirt', 0.00, 10, 35400.00, 0.00, 'bank', '2024-09-27 14:33:24', 'AUR631387', 'Pending', '2024-09-27 14:33:24'),
(62, 'sdcsf', 'sdfdsfsdf', 'sdsf', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'bank', '2024-09-27 14:33:46', 'AUR799281', 'Pending', '2024-09-27 14:33:46'),
(63, 'sdsd', 'sdsd', 'sdsd', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'cod', '2024-09-27 14:34:07', 'AUR799281', 'Pending', '2024-09-27 14:34:07'),
(64, 'sdfas', 'dsadassad', 'dasd', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'cod', '2024-09-27 14:36:15', 'AUR756821', 'Pending', '2024-09-27 14:36:15'),
(65, 'sdfas', 'dsadassad', 'dasd', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'cod', '2024-09-27 14:36:40', 'AUR756821', 'Pending', '2024-09-27 14:36:40'),
(66, 'sdfas', 'dsadassad', 'dasd', 'Array', 0.00, 1, 3500.00, 0.00, 'cod', '2024-09-27 14:38:02', 'AUR756821', 'Pending', '2024-09-27 14:38:02'),
(67, 'sdfas', 'dsadassad', 'dasd', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'cod', '2024-09-27 14:38:38', 'AUR756821', 'Pending', '2024-09-27 14:38:38'),
(68, 'sdsd', 'sadasddas', 'asdasd', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'bank', '2024-09-27 14:39:44', 'AUR756821', 'Pending', '2024-09-27 14:39:44'),
(69, 'efdse', 'sadsad', 'sdsd', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'bank', '2024-09-27 14:40:20', 'AUR756821', 'Pending', '2024-09-27 14:40:20'),
(70, 'efdse', 'sadsad', 'sdsd', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'bank', '2024-09-27 14:47:05', 'AUR756821', 'Pending', '2024-09-27 14:47:05'),
(71, NULL, NULL, NULL, '', 0.00, NULL, NULL, 0.00, NULL, '2024-09-27 14:48:16', NULL, 'Pending', '2024-09-27 14:48:16'),
(72, 'sads', 'sdsda', 'sdsad', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 19:02:31', 'AUR755901', 'Pending', '2024-09-27 19:02:31'),
(73, 'gvh', 'h', 'iuhu', 'T-shirt, T-shirt', 0.00, 2, 7400.00, 0.00, 'card', '2024-09-27 20:06:06', 'AUR673541', 'Pending', '2024-09-27 20:06:06'),
(74, NULL, NULL, NULL, '', 0.00, NULL, NULL, 0.00, NULL, '2024-09-27 20:12:59', NULL, 'Pending', '2024-09-27 20:12:59'),
(75, 'sd', 'ijji', 'bhjbjhj', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 20:14:35', 'AUR406016', 'Pending', '2024-09-27 20:14:35'),
(76, NULL, NULL, NULL, '', 0.00, NULL, NULL, 0.00, NULL, '2024-09-27 20:14:40', NULL, 'Pending', '2024-09-27 20:14:40'),
(77, '', '', '', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 20:19:24', 'AUR485892', 'Pending', '2024-09-27 20:19:24'),
(78, NULL, NULL, NULL, '', 0.00, NULL, NULL, 0.00, NULL, '2024-09-27 20:21:20', NULL, 'Pending', '2024-09-27 20:21:20'),
(79, '', '', '', 'T-shirt', 0.00, 1, 3500.00, 0.00, 'card', '2024-09-27 20:21:55', 'AUR375778', 'Pending', '2024-09-27 20:21:55'),
(80, NULL, NULL, NULL, '', 0.00, NULL, NULL, 0.00, NULL, '2024-09-27 20:24:07', NULL, 'Pending', '2024-09-27 20:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
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
  `item_quantity` int(11) DEFAULT NULL,
  `order_number` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sizes` varchar(255) DEFAULT NULL,
  `fits` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `price`, `quantity`, `sizes`, `fits`, `image`) VALUES
(2, 'Women', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/1.jpg'),
(3, 'Women', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/3.jpg'),
(4, 'Women', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/4.jpg'),
(5, 'Women', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/5.jpg'),
(6, 'Women', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/7.jpg'),
(7, 'Men', 'T-shirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/14.jpg'),
(8, 'Men', 'Shirts', 2400.00, 1000, 'XS, S, M, L ,XL', 'Oversize fit, Regular fit', 'uploads/26.jpg'),
(9, 'Men', 'Shirts', 9000.00, 100, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/10.jpg'),
(12, 'Men', 'Shirts', 8000.00, 1000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/3.jpg'),
(11, 'Men', 'Shirts', 8000.00, 1000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/3.jpg'),
(13, 'Women', 'skirt', 3500.00, 2000, 'XS, S, M, L ,XL ,XXL', 'Oversize fit, Regular fit', 'uploads/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `created_at`) VALUES
(13, 'shashika', 'sdilhara544@gmail.com', '$2y$10$WJZU/Ey8cL8FgzfkVyoS6OKCV2p9CVmH3jYH3X0HEFFvvNBtTf8om', '2024-09-27 05:40:39'),
(14, 'shashika', 'sdilhara54@gmail.com', '$2y$10$4gFnxPChEoag0/MCTF7Xu.uaXhvxNY2MRxNK8n34kuKhRmQ5Mfw0m', '2024-09-27 06:33:07'),
(15, 'shashika', 'sdilhara54@gmail.com', '$2y$10$LBnONOskySCPW3xnbjNeEuVqFilhnshdQhppgxy6wwQxyQpO5BQIe', '2024-09-27 06:33:19'),
(16, 'hsfusdufcgu8sfhcu', 'sd@gmail.com', '$2y$10$d8.KIWIywCXfPN8uf2dQR.7m8zyKpkFbrFudhPUWPgn2/wLBxCkka', '2024-09-27 06:35:01'),
(17, 'hsfusdufcgu8sfhcu', 'sd@gmail.com', '$2y$10$ZrC7H/1Y0xDgAXrdbHD6IOLZqsnIuT8F/FshZQ76LQxORy9LlZl2u', '2024-09-27 06:37:29'),
(18, 'hsfusdufcgu8sfhcu', 'sd@gmail.com', '$2y$10$pE65rS8de9IEgPeI54.D9uHeptiffVqKUbgOeZtMcjjM6GoOZinyy', '2024-09-27 06:37:57'),
(19, 'hsfusdufcgu8sfhcu', 'sd@gmail.com', '$2y$10$i6QlZnMat0VF1n1hB77EuOXDpmoVhJjwXqj/cXwI762hbfYFm0gim', '2024-09-27 06:38:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
