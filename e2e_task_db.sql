-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 04:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e2e_task_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone_no` varchar(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_me` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_admin` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_no`, `password`, `remember_me`, `status`, `is_admin`, `created_at`) VALUES
(1, 'test', 'test3@e2e.com', '07012316289', '$2y$10$0ynVqia6aZu5ufT0LIIB6.NPhqZ8uhNTElMsJAYcN75Et8kWYoJVe', NULL, 1, 0, '2020-05-06 23:12:38'),
(2, '83289jdjds', 'stephenilor58@gmail.com', '0102255555', '$2y$10$0ynVqia6aZu5ufT0LIIB6.NPhqZ8uhNTElMsJAYcN75Et8kWYoJVe', NULL, 2, 0, '2020-05-06 23:23:54'),
(4, '87656', 'test1@e2e.com', '010223554', '$2y$10$0ynVqia6aZu5ufT0LIIB6.NPhqZ8uhNTElMsJAYcN75Et8kWYoJVe', NULL, 3, 0, '2020-05-06 23:27:31'),
(5, 'Osama arafa', 'admin@e2e.com', '01016830875', '$2y$10$0ynVqia6aZu5ufT0LIIB6.NPhqZ8uhNTElMsJAYcN75Et8kWYoJVe', NULL, 3, 1, '2022-08-14 14:29:10'),
(6, 'osama arafa', 'test2@e2e.com', '0101123569', '$2y$10$qIHX41n.LFoZpv0GhCDZwOmbYeowMvgm.LlPpYfeXsIIS3Q6tQbfG', NULL, 3, 0, '2022-08-16 13:15:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
