-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 10:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-enroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `curriculums`
--

CREATE TABLE `curriculums` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `subCode` varchar(3) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curriculums`
--

INSERT INTO `curriculums` (`id`, `code`, `subCode`, `name`) VALUES
(1, 'Z-GED', 'GED', 'General Education'),
(2, 'Z-GEE', 'GEE', 'General Elective'),
(3, 'BSCS', 'CS', 'Bachelor of Science in Computer Science'),
(4, 'BSCS-B', 'CSB', 'Bachelor of Science in Computer Science (Bridging Program)');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(3) NOT NULL,
  `units` tinyint(4) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `program` varchar(10) NOT NULL,
  `prerequisite` varchar(250) NOT NULL,
  `corequisite` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user-admin`
--

CREATE TABLE `user-admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `department` varchar(5) NOT NULL,
  `position` text NOT NULL,
  `lastName` text NOT NULL,
  `firstName` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-admin`
--

INSERT INTO `user-admin` (`id`, `username`, `pass`, `department`, `position`, `lastName`, `firstName`, `email`) VALUES
(1, 'admin', 'admin', 'ADMIN', 'admin head', 'lname', 'fname', 'example@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `user-student`
--

CREATE TABLE `user-student` (
  `id` int(11) NOT NULL,
  `fName` varchar(64) NOT NULL,
  `mName` varchar(64) NOT NULL,
  `lName` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(1) NOT NULL,
  `civStat` varchar(1) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `nationality` varchar(1) NOT NULL,
  `religion` text NOT NULL,
  `program` varchar(10) NOT NULL,
  `yrLvl` varchar(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curriculums`
--
ALTER TABLE `curriculums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `user-admin`
--
ALTER TABLE `user-admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `user-student`
--
ALTER TABLE `user-student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curriculums`
--
ALTER TABLE `curriculums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user-admin`
--
ALTER TABLE `user-admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user-student`
--
ALTER TABLE `user-student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
