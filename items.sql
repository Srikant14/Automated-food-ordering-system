-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 04:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `items`
--

-- --------------------------------------------------------

--
-- Table structure for table `chinese`
--

CREATE TABLE `chinese` (
  `itemno` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chinese`
--

INSERT INTO `chinese` (`itemno`, `itemname`, `image`, `price`) VALUES
(7, 'Veg.Noodles', 'images/vegnoodles.jpg', 80.00),
(8, 'Chicken Noodles', 'images/cknoodles.jpg', 120.00),
(9, 'Egg Noodles', 'images/eggnoodles.jpg', 100.00),
(10, 'Gobi Manchurian', 'images/gobi.jpg', 120.00),
(11, 'Chinese Chopsuey', 'images/chopseuy.jpg', 160.00),
(12, 'Fried Rice', 'images/friedrice.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `itemno` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`itemno`, `itemname`, `image`, `price`) VALUES
(13, 'Cheese Cake', 'images/cheesecake.jpg', 80.00),
(14, 'Chocolate Truffle', 'images/choc.jpg', 100.00),
(15, 'Italian Delite', 'images/italian.jpg', 100.00),
(16, 'Sharjah Shake', 'images/sharjah.jpg', 80.00),
(17, 'Gulab Jamun', 'images/gulab.jpg', 50.00),
(18, 'Royal Falooda', 'images/falooda.jpg', 110.00);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `itemno` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`itemno`, `itemname`, `image`, `price`) VALUES
(19, 'Coffee', 'images/coffee.jpg', 20.00),
(20, 'Tea', 'images/tea.jpg', 15.00),
(21, 'Fresh Lime', 'images/lime.jpg', 10.00),
(22, 'Blue Lagoon', 'images/lagoon.jpg', 120.00),
(23, 'Orange Juice', 'images/orange.jpg', 80.00),
(24, 'Sunrise', 'images/sunrise.jpg', 120.00);

-- --------------------------------------------------------

--
-- Table structure for table `indian`
--

CREATE TABLE `indian` (
  `itemno` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indian`
--

INSERT INTO `indian` (`itemno`, `itemname`, `image`, `price`) VALUES
(1, 'Ghee Roast', 'images/dosa.jpg', 40.00),
(2, 'Meals', 'images/meals.jpg', 80.00),
(3, 'Chicken Biriyani', 'images/biri.jpg', 125.00),
(4, 'Butter Chicken', 'images/butter.jpg', 150.00),
(5, 'Chapathi', 'images/chapati.jpg', 15.00),
(6, 'Chicken65', 'images/chicken 65.jpg', 150.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chinese`
--
ALTER TABLE `chinese`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `indian`
--
ALTER TABLE `indian`
  ADD PRIMARY KEY (`itemno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chinese`
--
ALTER TABLE `chinese`
  MODIFY `itemno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `itemno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `itemno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `indian`
--
ALTER TABLE `indian`
  MODIFY `itemno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
