-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 11:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `productsID` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `zipCode` int(255) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`productsID`, `userID`, `phone`, `address`, `zipCode`, `createdAt`) VALUES
(1, 19, 1, '1', 1, '2016-12-10 08:13:16'),
(2, 19, 1, '1', 1, '2016-12-10 08:13:42'),
(3, 19, 1, '1', 1, '2016-12-10 08:16:28'),
(4, 19, 11, '1', 1, '2016-12-10 08:17:09'),
(5, 19, 1, '1', 1, '2016-12-10 08:20:02'),
(6, 19, 2, '2', 2, '2016-12-10 08:21:19'),
(7, 19, 2, '2', 2, '2016-12-10 08:21:48'),
(8, 19, 3, '3', 3, '2016-12-10 08:24:28'),
(9, 19, 4, '4', 4, '2016-12-10 08:30:26'),
(10, 19, 4, '4', 4, '2016-12-10 08:30:45'),
(11, 19, 4, '4', 4, '2016-12-10 08:31:04'),
(12, 19, 4, '4', 4, '2016-12-10 08:31:17'),
(13, 19, 4, '4', 4, '2016-12-10 08:32:09'),
(14, 19, 4, '4', 4, '2016-12-10 08:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `itemID` int(255) NOT NULL,
  `numOfItem` int(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `purchased` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `userID`, `itemID`, `numOfItem`, `createdAt`, `purchased`) VALUES
(1, 19, 15, 1, '2016-12-05 14:53:53', 1),
(28, 19, 15, 20, '2016-12-09 18:12:58', 1),
(29, 19, 14, 3, '2016-12-09 18:14:28', 1),
(30, 19, 13, 1, '2016-12-10 08:30:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_muasanpham`
--

CREATE TABLE `list_muasanpham` (
  `id` int(255) NOT NULL,
  `productsID` int(255) NOT NULL,
  `itemID` int(255) NOT NULL,
  `numOfItem` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `list_muasanpham`
--

INSERT INTO `list_muasanpham` (`id`, `productsID`, `itemID`, `numOfItem`) VALUES
(1, 5, 15, 20),
(2, 5, 14, 3),
(4, 6, 15, 20),
(5, 6, 14, 3),
(7, 7, 15, 20),
(8, 7, 14, 3),
(10, 8, 15, 20),
(11, 8, 14, 3),
(13, 9, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `monitor` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `CPU` varchar(25) COLLATE utf8_vietnamese_ci NOT NULL,
  `RAM` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `price` double NOT NULL,
  `remain` int(255) NOT NULL,
  `imagePath` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `brand`, `monitor`, `CPU`, `RAM`, `price`, `remain`, `imagePath`, `status`) VALUES
(1, 'Samsung galaxy S7', 'SamSung', 'Super AMOLED', 'Exynos 8890', '4 GB', 100, 20, 'samsung-galaxy-s7.jpg', 0),
(2, 'Iphone 7', 'Iphone', 'LED-backlit', 'Apple A10 Fusion ', '3 GB', 200, 20, 'Iphone-7.jpg', 0),
(3, 'Oppo neo 7s 2sim', 'Oppo', '5 inch', '1.2 Ghz', '1GB', 50, 20, 'oppo-neo-7s.jpg', 2),
(4, 'Xiaomi Redmi Note 3 Pro', 'Xiaomi', '5.5 inch', 'Qualcomm Snapdragon 650', '2 GB', 60, 20, 'xiaomi-redmi-note-3-pro.jpg', 2),
(5, 'Asus Zenfone 3 Max', 'Asus', 'IPS LCD', 'MT6735', '3 GB', 65, 20, 'asus-zenfone-3-max.jpg', 0),
(6, 'Blackberry Passport Silver Editio', 'Blackberry', 'IPS + LCD', 'Snapdragon 801', '3 GB', 55, 20, 'blackberry-passport-silver-edition.jpg', 0),
(7, 'Blackberry Priv', 'Blackberry', 'Quad HD', 'Quadcomm Snapdragon ', '3 GB', 75, 20, 'blackberry-priv.jpg', 0),
(8, 'Samsung Galaxy On7', 'SamSung', '5,5 inch', 'Qualcomm Snapdragon 410', '1GB', 47, 20, 'samsung-galaxy-on7.jpg', 0),
(9, 'Samsung Galaxy J3 Pro', 'SamSung', '5inch HD', 'Snapdragon 410', '2 GB', 75, 20, 'samsung-galaxy-j3-pro.jpg', 0),
(10, 'Samsung Galaxy J1 Mini', 'SamSung', 'TFT', 'Spreadtrum', '2 GB', 49, 20, 'samsung-galaxy-j1.jpg', 0),
(11, 'Iphone 6S', 'Iphone', 'Retina 4.7inch', 'A9 64-bit', '2 GB', 59, 20, 'iphone-6s.jpg', 0),
(12, 'Asus Zenfone 2', 'Asus', 'Gorilla', 'Atom Quad Core ', '4 GB', 57, 20, 'asus-zenfone-2.jpg', 2),
(13, 'Asus Zenfone 4 a400', 'Asus', '4 inch', 'MT6735', '3 GB', 39, 19, 'asus-zenfone-4-a400.jpg', 1),
(14, 'Xiaomi Mi Max', 'Xiaomi', '6.4 inch', '2.4 Ghz', '3 GB', 48, 17, 'xiaomi-mi-max.jpg', 1),
(15, 'Xiaomi Mi5', 'Xiaomi', '5.15 inch', 'Quad-core', '3 GB', 52, 0, 'xiaomi-mi5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `lastModified` datetime NOT NULL,
  `role` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `createdAt`, `lastModified`, `role`) VALUES
(7, 'dasda', 'sdasdas@gmail.com', 'TTCknfbi4ug7Y', '2016-11-30 18:41:51', '2016-11-30 18:41:51', 0),
(8, 'dassdas', 'dasddad@gmail.com', 'TTuZql6q4jr72', '2016-11-30 18:42:47', '2016-11-30 18:42:47', 0),
(9, 'dasd', 'asdasdasd', 'TTL1kJCzEiZBo', '2016-11-30 18:44:46', '2016-11-30 18:44:46', 0),
(10, 'Tam Le', 'tamle@gmail.com', 'TTuZql6q4jr72', '2016-11-30 18:48:12', '2016-11-30 18:48:12', 0),
(11, 'asdasdd', 'asdasd', 'TTCknfbi4ug7Y', '2016-11-30 20:19:16', '2016-11-30 20:19:16', 0),
(12, 'a', 'a@b.c', 'TTc1w9Odk07n6', '2016-12-02 16:15:25', '2016-12-02 16:15:25', 0),
(19, 'duongbk1602@gmail.com', 'duongbk1602@gmail.com', 'TTub4bykUY5XU', '2016-12-02 16:43:11', '2016-12-02 16:43:11', 0),
(20, '1', '1@1.c', 'TTdJXLZY16n4M', '2016-12-10 03:58:41', '2016-12-10 03:58:41', 0),
(21, '1', '', 'TTH9nxUwfAA5c', '2016-12-10 03:58:56', '2016-12-10 03:58:56', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`productsID`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_muasanpham`
--
ALTER TABLE `list_muasanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `productsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `list_muasanpham`
--
ALTER TABLE `list_muasanpham`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
