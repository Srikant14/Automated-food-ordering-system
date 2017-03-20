-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 04:07 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Srikant Vijay', 'srikant@1996'),
('Pooja Nair', 'pooja123'),
('Anupriya', 'anu@1996'),
('Sruthi K S', 'sruthiks@345'),
('Kishan C', 'kishanc123');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `itemno` int(25) NOT NULL,
  `itemname` varchar(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`itemno`, `itemname`, `quantity`, `price`) VALUES
(3, 'ChickenBiriyani', 200, 125),
(2, 'Meals', 200, 80),
(1, 'GheeRoast', 300, 60),
(4, 'ButterChicken', 80, 150),
(5, 'Chapathi', 120, 15),
(6, 'Chicken65', 100, 150),
(7, 'Veg.Noodles', 200, 80),
(8, 'ChickenNoodles', 200, 120),
(9, 'EggNoodles', 200, 100),
(10, 'GobiManchurian', 200, 120),
(11, 'ChineseChopsuey', 200, 160),
(12, 'FriedRice', 200, 100),
(13, 'CheeseCake', 100, 80),
(14, 'ChocolateTruffle', 100, 100),
(15, 'ItalianDelite', 100, 100),
(16, 'SharjahShake', 100, 80),
(17, 'GulabJamun', 100, 50),
(18, 'RoyalFalooda', 100, 110),
(19, 'Coffee', 200, 20),
(20, 'Tea', 200, 15),
(21, 'FreshLime', 200, 10),
(22, 'BlueLagoon', 100, 120),
(23, 'OrangeJuice', 100, 80),
(24, 'Sunrise', 100, 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD UNIQUE KEY `itemno` (`itemno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
