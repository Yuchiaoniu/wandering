-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2022 at 04:39 PM
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
  `memberID` int(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `type` enum('狗','貓') CHARACTER SET utf8mb4 NOT NULL,
  `ear` enum('是','否') NOT NULL,
  `ligation` enum('是','否') NOT NULL,
  `nickname` varchar(10) DEFAULT NULL,
  `gender` enum('男','女') NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `reason` varchar(30) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `adoptcondition` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `adopt_city` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`id`, `memberID`, `title`, `type`, `ear`, `ligation`, `nickname`, `gender`, `city`, `town`, `img`, `reason`, `status`, `adoptcondition`, `adopt_city`, `date`) VALUES
(1, 0, '台中市南區，親人親狗的牛牛，在等一個幸褔的家', '狗', '是', '是', '牛牛', '男', '5', '3', 'images/16.png', 'cell phone 0123456789', 'lost at central park this afternoon 20210101', '', '', NULL),
(2, 0, '聰明的乖乖想要一個愛他的家', '狗', '是', '是', '乖乖', '男', '5', '3', 'images/20.png', 'cell phone 0123456789', 'near central park this afternoon 20210102', '', '', NULL),
(3, 0, '帥氣的茶凍想要一個溫暖的家', '狗', '是', '否', '茶凍', '男', '5', '3', 'images/30.png', 'cell phone 0123456789', 'near central park this afternoon 20210103', '', '', NULL),
(5, 0, 's', '貓', '否', '否', 'ds', '女', '新北市', '萬里區', './upload/20220305_192756.jpg', 'fds', 'fds', 'dfs', '4, 12, 全區', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rescue`
--

CREATE TABLE `rescue` (
  `id` int(1) NOT NULL,
  `memberID` int(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` enum('狗','貓') CHARACTER SET utf8mb4 NOT NULL,
  `amount` int(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `lost` enum('是','否') CHARACTER SET utf8mb4 DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `need` varchar(255) NOT NULL,
  `responsibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`id`, `memberID`, `title`, `date`, `type`, `amount`, `city`, `town`, `address`, `lost`, `img`, `reason`, `detail`, `need`, `responsibility`) VALUES
(1, 0, '南投草屯受傷的流浪狗', '2022-03-05 14:26:02', '狗', 1, '5', '2', '227 Sec3 Taiwan Blvd', '', 'images/rescue1.png', 'lost at central park this afternoon 20210101', '', '', ''),
(2, 0, '2/10晚上在中興大學附近撿到親人品種貓', '2022-03-05 14:26:02', '狗', 1, '5', '3', '306 Sec1 Taiwan Blvd', '', 'images/rescue2.png', 'near central park this afternoon 20210102', '', '', ''),
(3, 0, '發現田間路旁有一隻狗，前腳好像被車撞', '2022-03-05 14:26:02', '狗', 1, '5', '3', '808 Sec6 Taiwan Blvd', '', 'images/rescue3.png', 'near central park this afternoon 20210103', '', '', ''),
(4, NULL, 'aa', '2022-03-05 15:56:12', '狗', 1, '雲林縣', '斗南鎮', '2222', '是', './upload/20220305_235612.jpg', 'ss', 'dd', '借誘捕籠, 尋求誘捕協助', '可提供安置照顧空間, 不適用於通報案件'),
(5, NULL, '西西西西', '2022-03-05 16:01:34', '狗', 1, '嘉義縣', '番路鄉', 'qwe', '是', './upload/20220306_000134.jpg', 'asd', 'dasd', '借誘捕籠', '可提供安置照顧空間'),
(6, NULL, '西西西西', '2022-03-05 16:03:35', '狗', 1, '嘉義縣', '', 'qwe', '是', './upload/20220306_000335.jpg', 'asd', 'dasd', '借誘捕籠', '可提供安置照顧空間'),
(7, NULL, '1236', '2022-03-05 16:36:56', '狗', 1, '臺南市', '中西區', 'asd', '是', './upload/20220306_003656.jpg', 'asd', 'asd', '借誘捕籠, 尋求誘捕協助', '可提供安置照顧空間, 願意負擔救援所需物資');

-- --------------------------------------------------------

--
-- Table structure for table `stray`
--

CREATE TABLE `stray` (
  `id` int(255) NOT NULL,
  `memberID` int(255) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `type` enum('狗','貓') NOT NULL,
  `ear` enum('是','否') NOT NULL,
  `chip` enum('是','否') NOT NULL,
  `ligation` enum('是','否') CHARACTER SET utf8mb4 NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `gender` enum('男','女') NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `appearance` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stray`
--

INSERT INTO `stray` (`id`, `memberID`, `title`, `type`, `ear`, `chip`, `ligation`, `nickname`, `gender`, `city`, `town`, `address`, `appearance`, `img`, `contact`, `reason`, `detail`, `date`) VALUES
(1, 0, '我家愛貓遺失了 請求幫助協尋!!!', '', '是', '是', '', 'Uni(屋逆)', '男', '5', '3', '227 Sec3 Taiwan Blvd', 'black and huge', 'images/stry1.png', 'cell phone 0123456789', 'lost at central park this afternoon 20210101', '', NULL),
(2, 0, '黑狗娜娜走失了', '狗', '是', '是', '', '娜娜', '女', '5', '3', '306 Sec1 Taiwan Blvd', 'black and huge', 'images/stry2.png', 'cell phone 0123456789', 'near central park this afternoon 20210102', '', NULL),
(3, 0, '家犬走失，感謝金一萬，拜託大家', '狗', '是', '是', '', '吉利', '男', '5', '3', '808 Sec6 Taiwan Blvd', 'black and tiny', 'images/stry3.png', 'cell phone 0123456789', 'near central park this afternoon 20210103', '', NULL),
(4, 0, 'TEST', '狗', '是', '是', '', 'amy', '男', '5', '3', '808 Sec6 Taiwan Blvd', 'TEST', 'TEST', 'cell phone 0123456789', 'near central park this afternoon 20210103', '', NULL),
(15, 0, 's', '狗', '是', '是', '是', 'qw', '男', '高雄市', '', 'wqe', 'wqe', './upload/20220305_210904.jpg', 'qwe', NULL, 'wqe', NULL),
(16, 0, 's', '狗', '是', '是', '是', 'qw', '男', '臺南市', '中西區', 'wqe', 'wqe', './upload/20220305_210947.jpg', 'qwe', NULL, 'wqe', NULL),
(17, NULL, '$title', '狗', '是', '是', '是', '$nickname', '男', '$city', '$town', '$address', '$appearance', '$img', NULL, '$reason', '$detail', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `memberID` int(11) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` char(2) NOT NULL,
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
(10, '123@mail.com', '123', '123', '女', '2022-03-04', '123456789', '公開', '臺中市', '中區', './images/indexlogo.jpg'),
(11, '1234@mail.com', '123', '好睡貓', '女', '2020-02-20', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(12, '1013@mail.com', '123', '梁建功2', '男', '2022-03-05', NULL, NULL, NULL, NULL, './images/indexlogo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stray`
--
ALTER TABLE `stray`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt`
--
ALTER TABLE `adopt`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stray`
--
ALTER TABLE `stray`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
