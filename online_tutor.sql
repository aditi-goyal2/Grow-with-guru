-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 10:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `pname` text NOT NULL,
  `subject` text NOT NULL,
  `days` text NOT NULL,
  `info` text NOT NULL,
  `safetyinfo` text NOT NULL,
  `contactno` text NOT NULL,
  `timing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `Age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `speciality` varchar(256) NOT NULL,
  `achievement` varchar(256) NOT NULL,
  `Subject` varchar(256) NOT NULL,
  `Qualification` varchar(256) NOT NULL,
  `Profession` varchar(256) NOT NULL,
  `Experience` varchar(256) NOT NULL,
  `Time` varchar(256) NOT NULL,
  `fee` varchar(256) NOT NULL,
  `more_info` varchar(256) NOT NULL,
  `profile_image` blob NOT NULL,
  `identity` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile_student`
--

CREATE TABLE `profile_student` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `Age` int(2) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `identity` blob NOT NULL,
  `profile_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

CREATE TABLE `testtable` (
  `Username` varchar(20) NOT NULL,
  `designation` enum('Student','Teacher') NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `write_blog`
--

CREATE TABLE `write_blog` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Category` enum('Academics','Languages','Music','Art','It') NOT NULL,
  `Highlight` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Sub_Heading` varchar(250) NOT NULL,
  `Description2` varchar(250) NOT NULL,
  `Quote` varchar(250) NOT NULL,
  `Hashtag1` varchar(250) NOT NULL,
  `Hashtag2` varchar(250) NOT NULL,
  `Hashtag3` varchar(250) NOT NULL,
  `name` blob NOT NULL,
  `thumbnail` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testtable`
--
ALTER TABLE `testtable`
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `write_blog`
--
ALTER TABLE `write_blog`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `write_blog`
--
ALTER TABLE `write_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
