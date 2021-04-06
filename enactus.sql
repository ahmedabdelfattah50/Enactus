-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 09:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`) VALUES
(1, 'Computers and Artificial Intelligence');

-- --------------------------------------------------------

--
-- Table structure for table `commity`
--

CREATE TABLE `commity` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `abbreviation` varchar(10) NOT NULL,
  `describtion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commity`
--

INSERT INTO `commity` (`id`, `name`, `abbreviation`, `describtion`) VALUES
(1, 'IT', 'IT', 'IT commity');

-- --------------------------------------------------------

--
-- Table structure for table `hosters`
--

CREATE TABLE `hosters` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `commity_id` int(5) NOT NULL,
  `season_id` int(5) NOT NULL,
  `position_id` int(5) NOT NULL,
  `university_id` int(5) NOT NULL,
  `college_id` int(5) NOT NULL,
  `college_year` varchar(5) NOT NULL,
  `describtion` varchar(300) NOT NULL,
  `facebook_link` varchar(150) DEFAULT NULL,
  `twitter_link` varchar(150) DEFAULT NULL,
  `instgram_link` varchar(150) DEFAULT NULL,
  `linkedin_link` varchar(150) DEFAULT NULL,
  `admin_trust` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hosters`
--

INSERT INTO `hosters` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `birthdate`, `mobile`, `photo`, `commity_id`, `season_id`, `position_id`, `university_id`, `college_id`, `college_year`, `describtion`, `facebook_link`, `twitter_link`, `instgram_link`, `linkedin_link`, `admin_trust`) VALUES
(3, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo', 'pro.ahmed.abdelfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01022635745', 'sfdsdfsdfsdf.jpg', 1, 1, 1, 1, 1, '4', 'sdfsdfsdfdsfsdf', NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'President');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`id`, `name`) VALUES
(1, '2016/2017');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`) VALUES
(1, 'Benha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `commity`
--
ALTER TABLE `commity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `abbreviation` (`abbreviation`);

--
-- Indexes for table `hosters`
--
ALTER TABLE `hosters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD KEY `commity relationship` (`commity_id`),
  ADD KEY `university relationship` (`university_id`),
  ADD KEY `college relationship` (`college_id`),
  ADD KEY `position relationship` (`position_id`),
  ADD KEY `season relationship` (`season_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commity`
--
ALTER TABLE `commity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hosters`
--
ALTER TABLE `hosters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hosters`
--
ALTER TABLE `hosters`
  ADD CONSTRAINT `college relationship` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `commity relationship` FOREIGN KEY (`commity_id`) REFERENCES `commity` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `position relationship` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `season relationship` FOREIGN KEY (`season_id`) REFERENCES `season` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `university relationship` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
