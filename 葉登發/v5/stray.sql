-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022-03-11 07:13:34
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
-- 資料表結構 `stray`
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
  `address` varchar(100) DEFAULT NULL,
  `appearance` varchar(1001) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(300) DEFAULT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `detail` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `stray`
--

INSERT INTO `stray` (`id`, `memberID`, `title`, `type`, `ear`, `chip`, `ligation`, `nickname`, `gender`, `city`, `town`, `address`, `appearance`, `img`, `contact`, `reason`, `detail`, `date`) VALUES
(4, 1, '我家愛貓遺失了 請求幫助協尋!!!', '貓', '否', '是', '是', 'Uni(屋逆)', '男', '嘉義縣', '番路鄉', '中正路22號', '白色長毛', './upload/20220307_153733.png', '06-2345677\r\n0912345678', NULL, '下午門忘記關從家裡跑出去就不見了', '2022-03-07 16:00:00'),
(5, 1, '我家愛貓遺失了 請求幫助協尋!!!', '貓', '是', '是', '是', 'qq', '男', '嘉義市', '東區', '冬菇巷27號', '黑色小小隻 屁股少一搓毛', './upload/20220307_160201.png', '手機0912345667', NULL, '門打開就跑出去不見了', '2022-03-07 16:00:00'),
(6, 1, '家裡的愛狗遺失，叫吉利', '狗', '是', '是', '是', '吉利', '男', '屏東縣', '屏東市', '愛國巷27號', '淡棕色', './upload/20220307_160313.png', '手機聯繫0987124343', NULL, '早上起來發現不見了', '2022-03-07 16:00:00'),
(8, 10, ' 我們家內內不見了', '貓', '否', '是', '是', '內內', '男', '臺中市', '新社區', '興義街', '臉部右眼有一塊黑點', './upload/20220308_111134.png', '0922684155 - 陳小姐\r\n', NULL, '昨天有人來家裡裝冷氣，不知道是不是嚇到，隔天早上就不見了', '2022-03-07 16:00:00'),
(9, 10, '協尋愛犬 小白', '狗', '否', '否', '否', '小白', '男', '新北市', '鶯歌區', '山埔路165巷', '特徵三角立耳.四腳掌剛被剃毛', './upload/20220308_111345.png', '陳先生09XX-XXX-XXX', NULL, '今天早上鄰居外出，先生開門沒注意小白走出去了，後來發現一直沒有看到愛犬，才驚覺小白不見了，後續找了很多地方，但是都沒有看到蹤影，主人目前非常擔心', '2022-03-07 16:00:00'),
(12, 10, ' 虎斑貓弟弟～鐵頭走失了', '貓', '否', '否', '否', '鐵頭', '男', '高雄市', '鳳山區', '建國路三段', '傷疤缺毛 (小處不明顯)。叫聲似嬰孩啼哭聲。個性內向怕人，熟悉後會自動撒嬌', './upload/20220311_131212.png', '丁小姐 0911222333(手機 / line ID 號碼同)', '', '要帶去打預防針時，半路掙脫袋籠出走', '2022-03-11 05:12:16');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `stray`
--
ALTER TABLE `stray`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stray`
--
ALTER TABLE `stray`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
