-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2018 at 10:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `fruitID` int(11) NOT NULL,
  `fruitName` varchar(50) NOT NULL,
  `fruitColor` varchar(50) NOT NULL,
  `fruitCalories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`fruitID`, `fruitName`, `fruitColor`, `fruitCalories`) VALUES
(1, 'apple', 'red', 150),
(2, 'banana', 'yellow', 250),
(3, 'kiwi', 'brown', 75),
(4, 'lemon', 'yellow', 25),
(5, 'orange', 'orange', 300),
(6, 'pear', 'green', 150),
(7, 'watermelon', 'pink', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`fruitID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `fruitID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;
