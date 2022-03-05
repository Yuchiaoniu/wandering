-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022-03-05 11:33:51
-- 伺服器版本： 5.7.24
-- PHP 版本： 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `wandering`
--

-- --------------------------------------------------------

--
-- 資料表結構 `adopt`
--

CREATE TABLE `adopt` (
  `id` int(1) NOT NULL,
  `memberID` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `type` enum('狗','貓') NOT NULL,
  `amount` int(100) NOT NULL,
  `ear` enum('是','否') NOT NULL,
  `chip` enum('是','否') NOT NULL,
  `ligation` enum('是','否') NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `gender` enum('男','女') NOT NULL,
  `city` varchar(1) DEFAULT NULL,
  `zone` varchar(1) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `appearance` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `context` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `adopt`
--

INSERT INTO `adopt` (`id`, `memberID`, `title`, `type`, `amount`, `ear`, `chip`, `ligation`, `name`, `gender`, `city`, `zone`, `address`, `appearance`, `img`, `contact`, `context`) VALUES
(1, 2, '台中市南區，親人親狗的牛牛，在等一個幸褔的家', '狗', 1, '是', '是', '是', '牛牛', '男', '5', '3', '227 Sec3 Taiwan Blvd', 'black and huge', 'images/16.png', 'cell phone 0123456789', 'lost at central park this afternoon 20210101'),
(2, 2, '聰明的乖乖想要一個愛他的家12323145', '狗', 1, '是', '否', '是', '乖乖', '男', '5', '3', '306 Sec1 Taiwan Blvd', 'black and huge', 'images/20.png', 'cell phone 0123456789', 'near central park this afternoon 20210102'),
(3, 12, '帥氣的茶凍想要一個溫暖的家', '狗', 1, '是', '是', '否', '茶凍', '男', '5', '3', '808 Sec6 Taiwan Blvd', 'black and tiny', 'images/30.png', 'cell phone 0123456789', 'near central park this afternoon 20210103');

-- --------------------------------------------------------

--
-- 資料表結構 `cofind`
--

CREATE TABLE `cofind` (
  `id` int(255) NOT NULL,
  `memberID` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `type` enum('狗','貓') DEFAULT NULL,
  `ear` enum('是','否') DEFAULT NULL,
  `chip` enum('是','否') DEFAULT NULL,
  `ligation` enum('是','否') CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `gender` enum('男','女') DEFAULT NULL,
  `city` varchar(1) DEFAULT NULL,
  `zone` varchar(1) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `appearance` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `context` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `cofind`
--

INSERT INTO `cofind` (`id`, `memberID`, `title`, `type`, `ear`, `chip`, `ligation`, `name`, `gender`, `city`, `zone`, `address`, `appearance`, `img`, `contact`, `context`) VALUES
(1, 2, '我家愛貓遺失了 請求幫助協尋!!!', '狗', '是', '是', '', 'Uni(屋逆)', '男', '5', '3', '227 Sec3 Taiwan Blvd', 'black and huge', 'images/stry1.png', 'cell phone 0123456789', 'lost at central park this afternoon 20210101'),
(2, 12, '黑狗娜娜走失了', '狗', '是', '是', '', '娜娜', '女', '5', '3', '306 Sec1 Taiwan Blvd', 'black and huge', 'images/stry2.png', 'cell phone 0123456789', 'near central park this afternoon 20210102'),
(3, 2, '家犬走失，感謝金一萬，拜託大家', '狗', '是', '是', '', '吉利', '男', '5', '3', '808 Sec6 Taiwan Blvd', 'black and tiny', 'images/stry3.png', 'cell phone 0123456789', 'near central park this afternoon 20210103'),
(4, 2, 'TEST', '狗', '是', '是', '', 'amy', '男', '5', '3', '808 Sec6 Taiwan Blvd', 'TEST', 'images/head.jpg', 'cell phone 0123456789', 'near central park this afternoon 20210103'),
(5, 11, '測試檔案', '狗', '是', '是', '是', 'amy', '男', '5', '3', '808 Sec6 Taiwan Blvd', 'TEST', 'images/cute-dog1.jpeg', 'cell phone 0123456789', 'near central park this afternoon 20210103');

-- --------------------------------------------------------

--
-- 資料表結構 `rescue`
--

CREATE TABLE `rescue` (
  `id` int(1) NOT NULL,
  `memberID` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `date` date NOT NULL,
  `type` enum('狗','貓') NOT NULL,
  `amount` int(255) NOT NULL,
  `city` varchar(1) DEFAULT NULL,
  `zone` varchar(1) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `lost` tinyint(1) DEFAULT NULL,
  `appearance` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `context` varchar(100) DEFAULT NULL,
  `requirement` varchar(255) DEFAULT NULL,
  `responsibility` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `rescue`
--

INSERT INTO `rescue` (`id`, `memberID`, `title`, `date`, `type`, `amount`, `city`, `zone`, `address`, `lost`, `appearance`, `img`, `contact`, `context`, `requirement`, `responsibility`) VALUES
(1, 12, '南投草屯受傷的流浪狗', '2022-02-20', '狗', 1, '5', '2', '227 Sec3 Taiwan Blvd', 0, 'black and huge', 'images/rescue1.png', 'cell phone 0123456789', 'lost at central park this afternoon 20210101', '', ''),
(2, 12, '2/10晚上在中興大學附近撿到親人品種貓', '2022-02-28', '貓', 1, '5', '3', '306 Sec1 Taiwan Blvd', 0, 'black and huge', 'images/rescue2.png', 'cell phone 0123456789', 'near central park this afternoon 20210102', '', ''),
(3, 2, '發現田間路旁有一隻狗，前腳好像被車撞', '2022-02-27', '狗', 1, '5', '3', '808 Sec6 Taiwan Blvd', 0, 'black and tiny', 'images/rescue3.png', 'cell phone 0123456789', 'near central park this afternoon 20210103', '', ''),
(6, 2, '有一隻狗，前腳好像被車撞', '2022-02-27', '狗', 1, '5', '3', '808 Sec6 Taiwan Blvd', 0, 'black and tiny', 'images/16.png', 'cell phone 0123456789', 'near central park this afternoon 20210103', '', ''),
(7, 2, '中興大學附近撿到親人品種貓', '2022-02-27', '狗', 1, '5', '3', '306 Sec1 Taiwan Blvd', 0, 'black and huge', 'images/17.png', 'cell phone 0123456789', 'near central park this afternoon 20210102', '', ''),
(8, 2, '快點來救救我', '2022-02-20', '狗', 1, '5', '2', '227 Sec3 Taiwan Blvd', 0, 'black and huge', 'images/18.png', 'cell phone 0123456789', 'lost at central park this afternoon 20210101', '', ''),
(9, 2, '111', '2022-03-04', '狗', 111, NULL, NULL, NULL, NULL, NULL, './upload/20220304_142836.png', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
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
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`memberID`, `account`, `password`, `name`, `sex`, `birthday`, `cellphone`, `hide`, `city`, `town`, `img`) VALUES
(1, 'guest@mail.com', '123', '阿凱', '男', '1997-10-13', '(0968) 568-854', '隱藏', '台北市', '大安區師大路 20 號', './images/indexlogo.jpg	'),
(2, 'firemoon1013@gmail.com', '123', '梁建功', '男', '1997-10-13', '0988451401', '隱藏', '臺中市', '西區', './upload/20220304_184429.jpg'),
(10, '123@mail.com', '123', '123', '女', '2022-03-04', '123456789', '公開', '臺中市', '中區', './images/indexlogo.jpg'),
(11, '1234@mail.com', '123', '好睡貓', '女', '2020-02-20', NULL, NULL, NULL, NULL, './images/indexlogo.jpg'),
(12, '1013@mail.com', '123', '梁建功2', '男', '2022-03-05', NULL, NULL, NULL, NULL, './images/indexlogo.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cofind`
--
ALTER TABLE `cofind`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`memberID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `adopt`
--
ALTER TABLE `adopt`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cofind`
--
ALTER TABLE `cofind`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
