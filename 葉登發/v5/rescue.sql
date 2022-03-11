-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022-03-11 07:13:30
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
-- 資料表結構 `rescue`
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
  `reason` varchar(1000) DEFAULT NULL,
  `detail` varchar(1000) DEFAULT NULL,
  `need` varchar(1000) NOT NULL,
  `responsibility` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `rescue`
--

INSERT INTO `rescue` (`id`, `memberID`, `title`, `date`, `type`, `amount`, `city`, `town`, `address`, `lost`, `img`, `reason`, `detail`, `need`, `responsibility`) VALUES
(4, 10, '南投草屯受傷的流浪狗', '2022-03-08 02:25:27', '狗', 1, '臺北市', '中正區', '中山路55號', '是', './upload/20220307_152953.png', '腳好像受傷了', '經過時遇到這隻狗好像受了傷', '借誘捕籠, 尋求誘捕協助', '可提供安置照顧空間, 可自行親送至外縣市'),
(5, 1, '2/10晚上在中興大學附近撿到親人品種貓', '2022-03-07 07:54:28', '貓', 1, '新竹市', '東區', '環中路五段22號', '是', './upload/20220307_155428.png', '不須救援但須認領', '有點擦傷', '傷病就醫, 尋求安置協助', '不適用於通報案件'),
(6, 1, '發現田間路旁有一隻狗，前腳好像受重傷', '2022-03-07 07:55:32', '狗', 1, '臺南市', '中西區', '向上路五段27號', '是', './upload/20220307_155532.png', '需要醫療協助', '在路邊看到一只狗受重傷', '尋求安置協助', '可提供安置照顧空間, 願意負擔救援所需費用, 願意負擔救援所需物資'),
(8, 10, '被棄養尋找新家腳有點受傷的小狗', '2022-03-08 02:28:24', '狗', 1, '臺中市', '北區', '中正路附近', '否', './upload/20220308_102824.png', '右前腳疑似被大狗咬傷', '晚上發現在街上遊蕩發現，疑似被棄養有項圈', '傷病就醫, 尋求安置協助', '可自行親送至外縣市, 願意負擔救援所需費用'),
(9, 10, '疑似懷孕的玳瑁母貓', '2022-03-08 02:31:35', '貓', 1, '臺中市', '清水區', '延平路附近', '否', './upload/20220308_103135.png', '貓咪疑似懷孕', '已經用盡各種方式誘捕\r\n可惜貓媽太聰明都跑掉了\r\n最近天冷，實在很怕她生了來不及安置\r\n只好上來徵求\r\n只需要幫忙誘捕\r\n後續我們會先帶去醫院檢查、安置以及送養\r\n我們會貼補您車馬費', '尋求誘捕協助', '可提供安置照顧空間, 願意負擔救援所需費用, 願意負擔救援所需物資'),
(10, 10, '土城流浪大型親人米克斯', '2022-03-11 06:42:40', '狗', 1, '新北市', '土城區', '金城路三段附近', '是', './upload/20220311_144240.jpg', '發現時狗狗已經瘦弱見骨，後腿明顯受傷行動不便，急需救援', '脖子上有綠色項圈，項圈和身體都不是很髒，應該走失或被遺棄不久；附近大型野狗群聚很多，我擔心他有危險', '傷病就醫, 尋求安置協助', '願意負擔救援所需費用, 願意負擔救援所需物資');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
