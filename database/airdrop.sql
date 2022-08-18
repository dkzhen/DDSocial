-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 05:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airdrop`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `audience` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `nama`, `text`, `audience`, `img`) VALUES
(35, 'khamdanu', 'wdwqdwsdwqef', 'public', '62f9033cc28a0.jpg'),
(36, 'Dani Kurniawan', 'AKU ANAKKSUGIIUYguytwqewqeweweqwe\r\nd\r\nd\r\ndwsd\r\nw', 'public', '62f905fed60d1.jpg'),
(37, 'Dani Kurniawan', 'wqrrqer3rwq3rdw', 'private', '62f90fb267bc7.jpg'),
(38, 'khamdanu', 'sadbkfiedsgfe', 'private', '62f90fe010205.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`) VALUES
(3, 'khamdanu', 'danu', '$2y$10$sCL/Yv5kvIfdkF8zyL9.yu9eoIA8MFK1XuwrQnHhGY4nGylIus42W', 'danu@gmail.com'),
(4, 'Dani Kurniawan', 'dani98', '$2y$10$oHsGaUep6HUkKXa5iICINO9oxuJxNiY1MupOgmXRns95LqGdewhZS', 'jovany33b_y226y@ludxc.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
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
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
