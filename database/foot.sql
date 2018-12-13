-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 12:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foot`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(6) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`no`, `id`, `nama`, `harga`, `jenis`, `jumlah`) VALUES
(1, 5, 'Red Pumps', 200000, 'Wanita', 1),
(7, 2, 'Minam Meaghan', 120000, 'Wanita', 2),
(8, 11, 'Running Shoes', 113000, 'Pria', 1),
(9, 3, 'Taja Commissioner', 140000, 'Wanita', 1),
(10, 13, 'Nice Shoes', 113000, 'Pria', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `jenis`) VALUES
(1, 'Boots Shoes Maca', 139000, 'Wanita'),
(2, 'Minam Meaghan', 120000, 'Wanita'),
(3, 'Taja Commissioner', 140000, 'Wanita'),
(4, 'Russ Sneakers', 150000, 'Pria'),
(5, 'Red Pumps', 200000, 'Wanita'),
(6, 'Sport Shoes', 110000, 'Pria'),
(7, 'Leather Class', 125000, 'Pria'),
(8, 'Leather Class', 118000, 'Pria'),
(9, 'Merrell', 102000, 'Pria'),
(10, 'High Heels', 132000, 'Wanita'),
(11, 'Running Shoes', 113000, 'Pria'),
(12, 'Black Sport Shoes', 120000, 'Pria'),
(13, 'Nice Shoes', 113000, 'Pria'),
(14, 'Pink Nice Shoes', 127000, 'Wanita'),
(15, 'Air Shoes', 100000, 'Pria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
