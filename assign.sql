-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 06:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`, `uploaded`) VALUES
(47, 'SSRA8730.JPG', '2121-11-30 07:11:33'),
(48, 'SSRA8730.JPG', '2121-11-30 07:11:21'),
(49, 'SSRA8730.JPG', '2121-11-30 07:11:26'),
(50, 'SSRA8730.JPG', '2121-11-30 07:11:58'),
(51, 'SSRA8730.JPG', '2121-11-30 07:11:14'),
(52, 'SSRA8746.JPG', '2121-11-30 07:11:26'),
(53, 'SSRA8746.JPG', '2121-11-30 07:11:04'),
(54, 'SSRA8746.JPG', '2121-11-30 07:11:35'),
(55, 'SSRA8746.JPG', '2121-11-30 07:11:11'),
(56, 'SSRA8746.JPG', '2121-11-30 07:11:43'),
(57, 'SSRA8746.JPG', '2121-11-30 07:11:25'),
(58, 'SSRA8746.JPG', '2121-11-30 07:11:56'),
(59, 'SSRA8746.JPG', '2121-11-30 07:11:16'),
(60, 'SSRA8738.JPG', '2121-11-30 07:11:23'),
(61, 'SSRA8738.JPG', '2121-11-30 07:11:52'),
(62, 'SSRA8730.JPG', '2121-12-01 05:12:41'),
(63, 'SSRA8730.JPG', '2121-12-01 05:12:02'),
(64, 'SSRA8730.JPG', '2121-12-01 05:12:18'),
(65, 'SSRA8730.JPG', '2121-12-01 05:12:35'),
(66, 'SSRA8730.JPG', '2121-12-01 05:12:42'),
(67, 'SSRA8730.JPG', '2121-12-01 05:12:16'),
(68, 'SSRA8730.JPG', '2121-12-01 05:12:48'),
(69, 'SSRA8730.JPG', '2121-12-01 05:12:26'),
(70, 'SSRA8730.JPG', '2121-12-01 05:12:31'),
(71, 'SSRA8730.JPG', '2121-12-01 05:12:53'),
(72, 'img3.jpg', '2121-12-01 05:12:47'),
(73, 'img3.jpg', '2121-12-01 05:12:20'),
(74, 'img3.jpg', '2121-12-01 05:12:30'),
(75, 'img3.jpg', '2121-12-01 05:12:35'),
(76, 'img3.jpg', '2121-12-01 05:12:18'),
(77, 'img3.jpg', '2121-12-01 05:12:45'),
(78, 'img3.jpg', '2121-12-01 05:12:56'),
(79, 'img3.jpg', '2121-12-01 05:12:32'),
(80, 'img3.jpg', '2121-12-01 06:12:54'),
(81, 'img3.jpg', '2121-12-01 06:12:36'),
(82, 'SSRA8774.JPG', '2121-12-01 06:12:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
