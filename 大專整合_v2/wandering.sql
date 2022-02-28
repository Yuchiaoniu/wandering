-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2022 at 01:45 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wandering`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE `adopt` (
  `id` int(1) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `ear` tinyint(1) DEFAULT NULL,
  `chip` tinyint(1) DEFAULT NULL,
  `ligation` tinyint(1) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `city` varchar(1) DEFAULT NULL,
  `zone` varchar(1) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `appearance` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `context` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`id`, `title`, `type`, `ear`, `chip`, `ligation`, `name`, `gender`, `city`, `zone`, `address`, `appearance`, `img`, `contact`, `context`) VALUES
(1, 'My dog go disappear', 0, 1, 1, 0, 'yumi', 1, '5', '3', '227 Sec3 Taiwan Blvd', 'black and huge', 'images/dog1.jpg', 'cell phone 0123456789', 'lost at central park this afternoon 20210101'),
(2, 'My cat run away', 1, 1, 1, 0, 'tracy', 1, '5', '3', '306 Sec1 Taiwan Blvd', 'black and huge', 'images/cat1.jpg', 'cell phone 0123456789', 'near central park this afternoon 20210102'),
(3, 'My cat run away', 1, 1, 1, 0, 'amy', 1, '5', '3', '808 Sec6 Taiwan Blvd', 'black and tiny', 'images/cat2.jpg', 'cell phone 0123456789', 'near central park this afternoon 20210103');

-- --------------------------------------------------------

--
-- Table structure for table `cofind`
--

CREATE TABLE `cofind` (
  `ID` int(255) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL,
  `ear` varchar(1) DEFAULT NULL,
  `chip` varchar(1) DEFAULT NULL,
  `ligation` tinyint(1) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `city` varchar(1) DEFAULT NULL,
  `zone` varchar(1) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `appearance` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `context` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cofind`
--

INSERT INTO `cofind` (`ID`, `title`, `type`, `ear`, `chip`, `ligation`, `name`, `gender`, `city`, `zone`, `address`, `appearance`, `img`, `contact`, `context`) VALUES
(1, 'My dog go disappear', '0', '1', '1', 0, 'yumi', '1', '5', '3', '227 Sec3 Taiwan Blvd', 'black and huge', 'images/?1.jpg', 'cell phone 0123456789', 'lost at central park this afternoon 20210101'),
(2, 'My cat run away', '1', '1', '1', 0, 'tracy', '1', '5', '3', '306 Sec1 Taiwan Blvd', 'black and huge', 'images/?1.jpg', 'cell phone 0123456789', 'near central park this afternoon 20210102'),
(3, 'My cat run away', '1', '1', '1', 0, 'amy', '1', '5', '3', '808 Sec6 Taiwan Blvd', 'black and tiny', 'images/?1.jpg', 'cell phone 0123456789', 'near central park this afternoon 20210103');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(255) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `account` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `bdate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `email`, `account`, `password`, `gender`, `bdate`) VALUES
(1, 'email@email.com', 'abcd', '1234', 'male', '20220101'),
(2, 'a01@email.com', 'abcd', '1234', 'male', '20220101'),
(3, 'a02@email.com', 'abcd', '1234', 'male', '20220101'),
(4, 'a03@email.com', 'abcd', '1234', 'male', '20220101'),
(5, 'a04@email.com', 'abcd', '1234', 'male', '20220101'),
(6, 'a05@email.com', 'abcd', '1234', 'male', '20220101');

-- --------------------------------------------------------

--
-- Table structure for table `rescue`
--

CREATE TABLE `rescue` (
  `id` int(1) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` enum('狗','貓') DEFAULT NULL,
  `amount` int(255) NOT NULL,
  `city` varchar(1) DEFAULT NULL,
  `zone` varchar(1) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `lost` tinyint(1) NOT NULL,
  `appearance` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `context` varchar(100) DEFAULT NULL,
  `requirement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibility` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`id`, `title`, `date`, `type`, `amount`, `city`, `zone`, `address`, `lost`, `appearance`, `img`, `contact`, `context`, `requirement`, `responsibility`) VALUES
(1, '南投草屯受傷的流浪狗', '2022-02-20 07:10:38', '狗', 1, '5', '2', '227 Sec3 Taiwan Blvd', 0, 'black and huge', 'images\\dog1.jpg', 'cell phone 0123456789', 'lost at central park this afternoon 20210101', '', ''),
(2, 'My cat run away', '2022-02-27 07:10:38', '狗', 0, '5', '3', '306 Sec1 Taiwan Blvd', 0, 'black and huge', 'images/rescue3.png', 'cell phone 0123456789', 'near central park this afternoon 20210102', '', ''),
(3, 'My cat run away', '2022-02-27 07:10:38', '狗', 0, '5', '3', '808 Sec6 Taiwan Blvd', 0, 'black and tiny', 'images/cat1.jpg', 'cell phone 0123456789', 'near central park this afternoon 20210103', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cofind`
--
ALTER TABLE `cofind`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt`
--
ALTER TABLE `adopt`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cofind`
--
ALTER TABLE `cofind`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
