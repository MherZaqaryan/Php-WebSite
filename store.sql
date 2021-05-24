-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 07, 2021 at 11:28 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `image`, `description`) VALUES
(1, 'Hp Computer', 100, 'hp1.jpg', 'Windows 10 Home 64 11th Generation Intel® Core™ i5 processor Intel® Iris® Xᵉ Graphics 8 GB memory; 1 TB HDD storage; 256 GB SSD storage 23.8\" diagonal FHD display'),
(2, 'Hp Computer', 100, 'hp2.jpg', 'Windows 10 Home 64 11th Generation Intel® Core™ i5 processor Intel® Iris® Xᵉ Graphics 8 GB memory; 1 TB HDD storage; 256 GB SSD storage 23.8\" diagonal FHD display'),
(3, 'HP Premium Family', 400, 'hp3.jpg', 'Windows 10 Home 64\n11th Generation Intel® Core™ i5 processor\nIntel® Iris® Xᵉ Graphics\n8 GB memory; 1 TB HDD storage; 256 GB SSD storage\n23.8\" diagonal FHD display'),
(4, 'HP Omen Gaming Family', 1000, 'hp4.jpg', 'Windows 10 Home 64\n11th Generation Intel® Core™ i5 processor\nIntel® Iris® Xᵉ Graphics\n8 GB memory; 1 TB HDD storage; 256 GB SSD storage\n23.8\" diagonal FHD display'),
(5, 'HP Tango Printer', 100, 'printer1.jpg', 'Windows 10 Home 64\n11th Generation Intel® Core™ i5 processor\nIntel® Iris® Xᵉ Graphics\n8 GB memory; 1 TB HDD storage; 256 GB SSD storage\n23.8\" diagonal FHD display'),
(6, 'HP DeskJet 3700 Printer', 100, 'printer2.jpg', 'Windows 10 Home 64\n11th Generation Intel® Core™ i5 processor\nIntel® Iris® Xᵉ Graphics\n8 GB memory; 1 TB HDD storage; 256 GB SSD storage\n23.8\" diagonal FHD display'),
(7, 'HP OfficeJet Pro Printers', 100, 'printer3.jpg', 'Windows 10 Home 64\n11th Generation Intel® Core™ i5 processor\nIntel® Iris® Xᵉ Graphics\n8 GB memory; 1 TB HDD storage; 256 GB SSD storage\n23.8\" diagonal FHD display'),
(8, 'HP LaserJet printers and MFPs for Business', 100, 'printer4.jpg', 'Windows 10 Home 64\n11th Generation Intel® Core™ i5 processor\nIntel® Iris® Xᵉ Graphics\n8 GB memory; 1 TB HDD storage; 256 GB SSD storage\n23.8\" diagonal FHD display');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
