-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 11:32 PM
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
  `name` varchar(70) NOT NULL
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
(2, 'IT', 'IT', 'sfsdf dsfsd fsd fsd'),
(3, 'PM', 'PM', 'fdsfsdgsafsdfsd'),
(4, 'HR', 'HR', 'sdfsdf sdsdHR HR'),
(5, 'Presentation', 'Presentati', 'PresentationPresentationPresentation'),
(6, 'Media', 'Media', 'MediaMediaMediaMedia'),
(7, 'ER', 'ER', 'ERERERERERER'),
(8, 'Logistics', 'Logistics', 'LogisticsLogisticsLogisticsLogistics');

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
  `birthdate` varchar(10) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `commity_name` varchar(50) DEFAULT NULL,
  `season_year` varchar(15) NOT NULL,
  `position_name` varchar(50) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `college_name` varchar(70) NOT NULL,
  `college_year` varchar(10) NOT NULL,
  `about_hoster` varchar(300) NOT NULL,
  `facebook_link` varchar(150) DEFAULT NULL,
  `twitter_link` varchar(150) DEFAULT NULL,
  `instgram_link` varchar(150) DEFAULT NULL,
  `linkedin_link` varchar(150) DEFAULT NULL,
  `admin_trust` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hosters`
--

INSERT INTO `hosters` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `birthdate`, `mobile`, `photo`, `commity_name`, `season_year`, `position_name`, `university_name`, `college_name`, `college_year`, `about_hoster`, `facebook_link`, `twitter_link`, `instgram_link`, `linkedin_link`, `admin_trust`) VALUES
(4, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo', 'pro.ahmed.abdelfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01022635745', 'sdfdsfdsf', NULL, '2016/2017', 'President', 'Benha', 'Computers and Artificial Intelligence', '4', 'dsfsdfsdfdsfsd', NULL, NULL, NULL, NULL, 1),
(5, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo2', 'pro.ahmed.abdhgelfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01022635775', 'sdfdsfdsf', 'Logistics', '2016/2017', 'Member', 'Benha', 'Computers and Artificial Intelligence', '4', 'dsfsdfsdfdsfsd', NULL, NULL, NULL, NULL, 3),
(6, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo3', 'pro.ahmed.abdhgdsdselfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01022638775', 'sdfdsfdsf', 'HR', '2016/2017', 'Head', 'Benha', 'Computers and Artificial Intelligence', '4', 'dsfsdfsdfdsfsd', NULL, NULL, NULL, NULL, 2),
(8, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo4', 'pro.ahmed.abdshgdsdselfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01027638775', 'sdfdsfdsf', 'Media', '2016/2017', 'Vice Head', 'Benha', 'Computers and Artificial Intelligence', '4', 'dsfsdfsdfdsfsd', NULL, NULL, NULL, NULL, 2);

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
(5, 'Head'),
(4, 'IT Manager'),
(7, 'Member'),
(1, 'President'),
(3, 'Project Director'),
(6, 'Vice Head'),
(2, 'Vice President');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `year` varchar(15) NOT NULL,
  `active_season` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`id`, `year`, `active_season`) VALUES
(1, '2016/2017', 0);

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
  ADD KEY `commity_name` (`commity_name`),
  ADD KEY `season_year` (`season_year`),
  ADD KEY `university_name` (`university_name`),
  ADD KEY `college_name` (`college_name`),
  ADD KEY `position_name` (`position_name`);

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
  ADD UNIQUE KEY `name` (`year`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commity`
--
ALTER TABLE `commity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hosters`
--
ALTER TABLE `hosters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `college_name` FOREIGN KEY (`college_name`) REFERENCES `college` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `commity_name` FOREIGN KEY (`commity_name`) REFERENCES `commity` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `position_name` FOREIGN KEY (`position_name`) REFERENCES `position` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `season_year` FOREIGN KEY (`season_year`) REFERENCES `season` (`year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `university_name` FOREIGN KEY (`university_name`) REFERENCES `university` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
