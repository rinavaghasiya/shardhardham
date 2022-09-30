-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 11:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sardardham`
--

-- --------------------------------------------------------

--
-- Table structure for table `addimage`
--

CREATE TABLE `addimage` (
  `id` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addimage`
--

INSERT INTO `addimage` (`id`, `image`, `created_at`, `updated_at`) VALUES
(15, '1660648732slider1.png', '2022-08-16 10:44:57', '2022-08-16 05:48:52'),
(16, '1660646896slider2.jpg', '2022-08-16 10:48:16', NULL),
(17, '1660646915slider4.png', '2022-08-16 10:48:35', NULL),
(18, '1660646942slider5.jpg', '2022-08-16 10:49:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `remember_token` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Reena Vaghasiya', 'patelreena172@gmail.com', '$2a$04$WqTIRKboAg5/xo8A8fk/DewtAJTBj2YeLbX8uXxUfzeOV5OYH.tAS', '1660653595g3.png', '', '2021-06-16 10:16:57', NULL),
(2, 'minal', 'minalbhadani5172@gmail.com', '$2y$10$IK18XgSJ5bgL7VEKVMhLLOexyjj12L2gHJ/WBhEuEzvXAxTci08yy', '1659934835green-mehendi-ceremony-dress-819x1024.jpg', NULL, '2022-08-08 05:00:35', NULL),
(3, 'hina patel', 'hinahirpara64@gmail.com', '$2y$10$YXE1NeKdl7bMQOcTvgbYvOkJLcWGWgKXtevjE9wsLFbMN8Qf1jg4G', '16600504882.jpg', NULL, '2022-08-09 13:08:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dailydarshan`
--

CREATE TABLE `dailydarshan` (
  `id` int(11) NOT NULL,
  `dailyimg` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailydarshan`
--

INSERT INTO `dailydarshan` (`id`, `dailyimg`, `created_at`, `updated_at`) VALUES
(1, '166071307915-08-Sw-Shangar.jpg', '2022-08-17 05:11:19', NULL),
(2, '166071308615-08-Gm-Shangar.jpg', '2022-08-17 05:11:26', NULL),
(3, '166071309315-08-Gh-Shangar.jpg', '2022-08-17 05:11:33', NULL),
(4, '1660716041ghanshyam3.png', '2022-08-17 05:11:45', '2022-08-17 00:30:41'),
(5, '1660716087ghanshyam2.png', '2022-08-17 06:01:27', NULL),
(6, '1660716098ghanshyam1.png', '2022-08-17 06:01:38', NULL),
(7, '1660734768t4.png', '2022-08-17 11:12:48', NULL),
(8, '1660734781narayanmuni1.png', '2022-08-17 11:13:01', NULL),
(9, '1660734791narnarayandev1.png', '2022-08-17 11:13:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `gallaryimg` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `gallaryimg`, `created_at`, `updated_at`) VALUES
(1, '1660652155gallery1.jpg', '2022-08-16 12:15:55', NULL),
(3, '16607982462_14 - Photo.jpg', '2022-08-16 12:16:16', '2022-08-17 23:20:46'),
(4, '1660652196gallery4.jpg', '2022-08-16 12:16:36', NULL),
(5, '1660798043bagasra front.png', '2022-08-16 12:16:56', '2022-08-17 23:17:23'),
(7, '1660710206g2.png', '2022-08-17 04:23:26', NULL),
(8, '1660710425ghanshyam2.png', '2022-08-17 04:27:05', NULL),
(9, '1660710440ghanshyam3.png', '2022-08-17 04:27:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kathavideo`
--

CREATE TABLE `kathavideo` (
  `id` int(11) NOT NULL,
  `videotitle` varchar(500) NOT NULL,
  `videolink` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kathavideo`
--

INSERT INTO `kathavideo` (`id`, `videotitle`, `videolink`, `status`, `created_at`, `updated_at`) VALUES
(2, 'katha', 'https://www.youtube.com/embed/8fU9iQxOWa0?list=PLPIWGf4C1v71TRjMsXrk--CSlnymWHOVj', 'normal', '2022-08-22 06:23:45', NULL),
(3, 'katha', 'https://www.youtube.com/embed/videoseries?list=PLPIWGf4C1v70jQfdF8OzjANTVz3BMIHWR', 'normal', '2022-08-22 09:13:31', NULL),
(4, 'swaminarayn katha', 'https://www.youtube.com/embed/videoseries?list=PLPIWGf4C1v71laQ4OL4pLTmshrz24AQVm', 'normal', '2022-08-22 09:19:54', NULL),
(5, 'katha', 'https://www.youtube.com/embed/videoseries?list=PLPIWGf4C1v72Pto0nBTzAuT8q-uVlFHYQ', 'normal', '2022-08-22 10:54:50', NULL),
(6, 'katha', 'https://www.youtube.com/embed/cQeAavIaVNo', 'normal', '2022-08-22 10:55:53', NULL),
(7, 'live katha', 'https://www.youtube.com/embed/CZAeJLf4IW4', 'live', '2022-08-23 10:56:57', '2022-08-23 03:47:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addimage`
--
ALTER TABLE `addimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailydarshan`
--
ALTER TABLE `dailydarshan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kathavideo`
--
ALTER TABLE `kathavideo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addimage`
--
ALTER TABLE `addimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dailydarshan`
--
ALTER TABLE `dailydarshan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kathavideo`
--
ALTER TABLE `kathavideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
