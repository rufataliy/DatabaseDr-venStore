-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2019 at 06:42 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_1531`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `products_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `products_image` varchar(200) NOT NULL,
  `prod_code` varchar(50) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_image`, `prod_code`, `prod_name`, `prod_price`) VALUES
(1, 'img/img-watch-1.jpg', 'watch', 'Leather band stainless steel watch', '125.70'),
(2, 'img/img-watch-2.jpg', 'watch', 'Leather band stainless steel watch', '135.88'),
(3, 'img/img-watch-3.jpg', 'watch', 'Leather band stainless steel watch', '140.00'),
(4, 'img/img-watch-4.jpg', 'watch', 'Leather band stainless steel watch', '180.00'),
(5, 'img/img-watch-5.jpg', 'watch', 'Leather band stainless steel watch', '90.00'),
(6, 'img/img-watch-6.jpg', 'watch', 'Leather band stainless steel watch', '110.00'),
(7, 'img/img-belt-2.jpg', 'belt', 'Men Leather Belt', '130.00'),
(8, 'img/img-belt-3.jpg', 'belt', 'Men Leather Belt', '45.00'),
(9, 'img/img-belt-4.jpg', 'belt', 'Men Leather Belt', '100.00'),
(10, 'img/img-belt-5.jpg', 'belt', 'Men Leather Belt', '119.00'),
(11, 'img/img-belt-6.jpg', 'belt', 'Men Leather Belt', '95.00'),
(12, 'img/img-tie-1.jpg', 'tie', 'Tie', '70.00'),
(13, 'img/img-tie-2.jpg', 'tie', 'Tie 2', '20.00'),
(14, 'img/img-tie-3.jpg', 'tie', 'Tie', '70.00'),
(15, 'img/img-tie-4.jpg', 'tie', 'Tie', '70.00'),
(16, 'img/img-tie-5.jpg', 'tie', 'Tie', '70.00'),
(17, 'img/img-tie-6.jpg', 'tie', 'Tie', '70.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
