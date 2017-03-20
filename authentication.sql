-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 04:08 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobileno` int(25) NOT NULL,
  `conpassword` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `password`, `email`, `mobileno`, `conpassword`) VALUES
('anu', 'anu', 'anu', 345, 'anu'),
('sruthi', 'sruthi', 'aaa', 344, 'sruthi'),
('pooja', 'pooja', 'pooja', 234, 'pooja'),
('kkk', 'ppp', 'a', 878, 'ppp'),
('srikant', 'srikant', 'srikant@gmail.com', 1234567890, 'srikant'),
('reshma', 'reshma', 'reshma@gmail.com', 1234567899, 'reshma'),
('sree', 'sree', 'sree@gmail.com', 123, 'sree'),
('aaa', 'aaa', 'aaa@gmail.com', 234, 'aaa'),
('abd', 'abd', 'abd@gmail.com', 1234567888, 'abd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
