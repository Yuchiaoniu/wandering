-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2022 at 06:10 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `memberID` int(11) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(33) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` char(3) NOT NULL,
  `birthday` date NOT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  `hide` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `town` varchar(20) DEFAULT NULL,
  `img` varchar(64) NOT NULL DEFAULT './images/indexlogo.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`memberID`, `account`, `password`, `name`, `sex`, `birthday`, `cellphone`, `hide`, `city`, `town`, `img`) VALUES
(1, 'guest@mail.com', '123', '阿凱', '男', '1997-10-13', '(0968) 568-854', '隱藏', '台北市', '大安區師大路 20 號', './images/indexlogo.jpg	'),
(2, 'firemoon1013@gmail.com', '123', '梁建功', '男', '1997-10-13', '0988451401', '隱藏', '臺中市', '西區', './upload/20220304_184429.jpg'),
(10, '123@mail.com', '202cb962ac59075b964b07152d234b70', 'JJJ', '女', '2022-03-04', '123456789', '公開', '臺中市', '中區', './upload/20220308_0939010.png'),
(11, '1234@mail.com', '123', '好睡貓', '女', '2020-02-20', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(12, '1013@mail.com', '123', '梁建功2', '男', '2022-03-05', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(13, 'firemoon10131@gmail.com', '123', '梁建功', '男', '2022-03-09', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(15, 'guest2@mail.com', '202cb962ac59075b964b07152d234b70', 'G3', '男', '2022-03-10', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(16, 'tonyliang9@gmail.com', '202cb962ac59075b964b07152d234b70', '梁建功', '男', '1997-10-13', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(17, 'guest3@mail.com', '202cb962ac59075b964b07152d234b70', 'G3', '男', '2022-03-11', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(18, 'apple1234@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '路易吉', '男', '1993-10-11', '0912345678', '隱藏', '', '', './upload/20220311_0928480.png'),
(20, 'JJJ@mail.com', '202cb962ac59075b964b07152d234b70', 'QQQ', '男', '2022-03-01', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(22, 'mayr81214@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '葉登發', '男', '2022-03-17', NULL, NULL, NULL, NULL, './images/indexlogo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
