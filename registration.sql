-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 12:01 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `id` int(100) NOT NULL,
  `userid` int(255) NOT NULL,
  `pp` varchar(2000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `lang` varchar(56) NOT NULL,
  `hobby` varchar(40) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postal` varchar(6) NOT NULL,
  `sname` varchar(150) NOT NULL,
  `one` varchar(255) NOT NULL,
  `s2name` varchar(255) NOT NULL,
  `two` varchar(290) NOT NULL,
  `schyr` varchar(255) NOT NULL,
  `univ` varchar(100) NOT NULL,
  `startyr` varchar(200) NOT NULL,
  `cgpa` varchar(100) NOT NULL,
  `course` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `field` varchar(100) NOT NULL,
  `nowyr` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `strength` varchar(300) NOT NULL,
  `about` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bom`
--

INSERT INTO `bom` (`id`, `userid`, `pp`, `email`, `dob`, `gender`, `lang`, `hobby`, `fname`, `lname`, `contact`, `address`, `city`, `country`, `postal`, `sname`, `one`, `s2name`, `two`, `schyr`, `univ`, `startyr`, `cgpa`, `course`, `branch`, `field`, `nowyr`, `exp`, `strength`, `about`) VALUES
(1, 1, '301609.jpg', 'sudipto522@gmail.com', '', '', '', '', '  sudipto', '  paul', '809677', '  1,Dakshinpara road,baguiati,kolkata', '  kolkata', '', '700028', ' National English School', '8', ' Don Bosco', '90', '2001-2016', 'Sathyabama University', '2016-2020', '9', 'CSE', 'BTECH', 'Software Engineering', '', 'stsshhsfgsfgsgs\r\ng\r\nrg\r\nfh\r\naehethaet', 'hdheat\r\nhet\r\nhe\r\nth\r\neth', 'hethaetah\r\neth\r\neth\r\neth\r\ne');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password1` varchar(56) NOT NULL,
  `password2` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password1`, `password2`) VALUES
(1, 'sudipto', 'sudipto522@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
