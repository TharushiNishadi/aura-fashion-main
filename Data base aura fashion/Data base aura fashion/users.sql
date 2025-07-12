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
