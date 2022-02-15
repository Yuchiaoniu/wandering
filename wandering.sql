-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022 年 02 月 15 日 06:59
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
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `email` varchar(20) DEFAULT NULL,
  `account` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `password2` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `bdate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`email`, `account`, `password`, `password2`, `gender`, `bdate`) VALUES
('email@email.com', 'abcd', '1234', '1234', 'male', '20220101'),
('a01@email.com', 'abcd', '1234', '1234', 'male', '20220101'),
('a02@email.com', 'abcd', '1234', '1234', 'male', '20220101'),
('a03@email.com', 'abcd', '1234', '1234', 'male', '20220101'),
('a04@email.com', 'abcd', '1234', '1234', 'male', '20220101'),
('a05@email.com', 'abcd', '1234', '1234', 'male', '20220101');

-- --------------------------------------------------------

--
-- 資料表結構 `stray`
--

CREATE TABLE `stray` (
  `id` int(1) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL,
  `ear` varchar(1) DEFAULT NULL,
  `chip` varchar(1) DEFAULT NULL,
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
-- 傾印資料表的資料 `stray`
--

INSERT INTO `stray` (`id`, `title`, `type`, `ear`, `chip`, `name`, `gender`, `city`, `zone`, `address`, `appearance`, `img`, `contact`, `context`) VALUES
(0, 'My dog go disappear', '0', '1', '1', 'yumi', '1', '5', '3', '227 Sec3 Taiwan Blvd', 'black and huge', 'images/?1.jpg', 'cell phone 0123456789', 'lost at central park this afternoon 20210101'),
(1, 'My cat run away', '0', '1', '1', 'tracy', '1', '5', '3', '306 Sec1 Taiwan Blvd', 'black and huge', 'images/?1.jpg', 'cell phone 0123456789', 'near central park this afternoon 20210102'),
(2, 'My cat run away', '0', '1', '1', 'amy', '1', '5', '3', '808 Sec6 Taiwan Blvd', 'black and tiny', 'images/?1.jpg', 'cell phone 0123456789', 'near central park this afternoon 20210103');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
