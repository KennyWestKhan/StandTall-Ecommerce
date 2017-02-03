-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 05:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Izuxe'),
(2, 'Samsung'),
(3, 'iPhone'),
(4, 'LG'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(1, '::1', 0),
(2, '::1', 0),
(3, '::1', 0),
(4, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, '<a href="mobile.php">Mobile phones</a>'),
(2, '<a href="#">Smartwatches</a>'),
(3, '<a href="#">Tablets</a>'),
(4, '<a href="#">Other</a>');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_title` text NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `other_images` text NOT NULL,
  `more_images` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `other_images`, `more_images`, `product_keywords`) VALUES
(1, '<a href="mobile.php">Mobile phones</a>', '1', 'IZUXE Platinium', 'GHC 821.42', '<p>5.5 '''' curved HD screen with 1280*720 pixels</p>\r\n<p>\r\nProcessor 4 Core at 1.3 GHz; 1.3 GHz</p>\r\n<p>Camera Sony 13MP &ndash; Selfie 5MP</p>\r\n<p>Android 4.4</p>\r\n<p>Battery 3200 mAh</p>\r\n<p>3G/H+ and Dual SIM</p>', '111.jpg', '222-1.jpg', '44-3.jpg', 'izuxe'),
(2, '<a href="mobile.php">Mobile phones</a>', '1', 'M-ONE', 'GHC 1143.19', '<p style="text-align: justify;">Octave Core 1.4 GHz Processor</p>\r\n<p style="text-align: justify;">Full HD 5 '' display</p>\r\n<p style="text-align: justify;">RAM 2GB + ROM 16GB</p>\r\n<p style="text-align: justify;">Ultra thin and lightweight premium design</p>\r\n<p style="text-align: justify;">13MP Selfie</p>\r\n<p style="text-align: justify;">3G / H + and Dual SIM</p>', 'Acces-One-7.jpg', 'Acces-One-3.jpg', 'Acces-One.jpg', 'izuxe'),
(3, '<a href="mobile.php">Mobile phones</a>', '1', 'Ziwatch Alpha', 'GHC 686.48', '<p>1.5 inch screen</p>\r\n<p>Camera: 2 Mpx</p>\r\n<p>OS: Android KitKat 4.4</p>\r\n<p>Synchronize your data with IOS &amp; Android</p>\r\n<p>Wide autonomy with 400 mAh</p>', 'Alpha-Dore.png', 'ZiWatch-Alpha-With-Phone-Call_sized.jpg', 'ZiWatch-Alpha-All-Spec_sized.jpg', 'izuxe,smartwatch'),
(4, '<a href="mobile.php">Mobile phones</a>', '1', 'ZiWatch S', 'GHC 1377.91', '<p>Dual Core 1.3 Ghz Processor</p>\r\n<p>Front camera: 3 Mpx</p>\r\n<p>RAM : 1 GB</p>\r\n<p>OS : Android KitKat 4.4</p>\r\n<p>Synchronize your data with IOS & Android</p>\r\n<p>Wide autonomy with 600 mAh</p>\r\n<p>Storage : 8 G0</p>', 'ZiWatch-S-Rouge.png', 'ZiWatch-S-Black-Boutique_sized.jpg', 'ZiWatch-SIM-Boutiques_sized.jpg', 'izuxe,smartwatch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
