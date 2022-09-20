-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 14, 2022 at 05:22 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wish_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `wish_table`
--

CREATE TABLE `wish_table` (
  `wishId` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `friendName` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `friendEmail` varchar(40) NOT NULL,
  `wish` varchar(40) NOT NULL,
  `imageURL` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wish_table`
--

INSERT INTO `wish_table` (`wishId`, `name`, `friendName`, `email`, `friendEmail`, `wish`, `imageURL`) VALUES
(1, 'Meharvaan Singh', 'Mustafa Hakkni', 'mehar@gmail.com', 'must@gmail.com', 'wish1', 'url1'),
(2, 'Dhilshad', 'Mustafa ', 'dil@gmail.com', 'must@gmail.com', 'wish2', 'url2'),
(3, 'Skulmie', 'Dilshad', 'skul@gmail.com', 'dil@gmail.com', 'wish3', 'url3'),
(4, 'Prabh', 'Mehar', 'prabh@gmail.com', 'mehar@gmail.com', 'wish4', 'url4'),
(5, 'prabhu', 'Mustafa Hakkni', 'mehar@gmail.com', 'must@gmail.com', 'wish5', 'url5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wish_table`
--
ALTER TABLE `wish_table`
  ADD PRIMARY KEY (`wishId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wish_table`
--
ALTER TABLE `wish_table`
  MODIFY `wishId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
