-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022-03-07 12:18:08
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
-- 傾印資料表的資料 `adopt`
--

INSERT INTO `adopt` (`id`, `memberID`, `title`, `type`, `ear`, `ligation`, `nickname`, `gender`, `city`, `town`, `img`, `reason`, `status`, `adoptcondition`, `adopt_city`, `date`) VALUES
(4, 1, '台中市南區，親人親狗的牛牛，在等一個幸褔的家', '狗', '是', '是', '牛牛', '男', '宜蘭縣', '宜蘭市', './upload/20220307_154257.png', '我們最近經濟狀況不好 希望可以為它找到更好的家庭環境', '很健康', '可以提供溫飽', '2, 8, 全區', NULL),
(5, 1, '帥氣的茶凍想要一個溫暖的家', '狗', '是', '否', '茶凍', '男', '新北市', '萬里區', './upload/20220307_155711.png', '想要幫茶凍找一個新家，家裡的人好像跟它不合', '很健康', '能提供溫飽', '全區', NULL),
(6, 1, '聰明的乖乖想要一個愛他的家', '狗', '是', '是', '乖乖', '女', '嘉義縣', '番路鄉', './upload/20220307_160013.png', '家裡不適合養狗 所以想要幫乖乖找新的家', '很健康', '能夠提供溫飽', '22, 全區', NULL),
(7, 10, 'tyragfa', '貓', '是', '是', '小虎', '男', '臺中市', '中區', './upload/20220307_195827.jpg', 'tttt', 'gfgafs', 'bgadyh', '4, 20, 全區', NULL);

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
  `reason` varchar(100) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `need` varchar(255) NOT NULL,
  `responsibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `rescue`
--

INSERT INTO `rescue` (`id`, `memberID`, `title`, `date`, `type`, `amount`, `city`, `town`, `address`, `lost`, `img`, `reason`, `detail`, `need`, `responsibility`) VALUES
(4, NULL, '南投草屯受傷的流浪狗', '2022-03-07 07:29:53', '狗', 1, '臺北市', '中正區', '中山路55號', '是', './upload/20220307_152953.png', '腳好像受傷了', '經過時遇到這隻狗好像受了傷', '借誘捕籠, 尋求誘捕協助', '可提供安置照顧空間, 可自行親送至外縣市'),
(5, 1, '2/10晚上在中興大學附近撿到親人品種貓', '2022-03-07 07:54:28', '貓', 1, '新竹市', '東區', '環中路五段22號', '是', './upload/20220307_155428.png', '不須救援但須認領', '有點擦傷', '傷病就醫, 尋求安置協助', '不適用於通報案件'),
(6, 1, '發現田間路旁有一隻狗，前腳好像受重傷', '2022-03-07 07:55:32', '狗', 1, '臺南市', '中西區', '向上路五段27號', '是', './upload/20220307_155532.png', '需要醫療協助', '在路邊看到一只狗受重傷', '尋求安置協助', '可提供安置照顧空間, 願意負擔救援所需費用, 願意負擔救援所需物資'),
(7, 10, 'TTTEEESST', '2022-03-07 11:57:07', '貓', 1, '臺中市', '中區', 'TEST', '是', './upload/20220307_195707.jpg', 'vdag', 'ayrgf', '傷病就醫', '可自行親送至外縣市');

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
  `address` varchar(40) DEFAULT NULL,
  `appearance` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `stray`
--

INSERT INTO `stray` (`id`, `memberID`, `title`, `type`, `ear`, `chip`, `ligation`, `nickname`, `gender`, `city`, `town`, `address`, `appearance`, `img`, `contact`, `reason`, `detail`, `date`) VALUES
(4, 1, '我家愛貓遺失了 請求幫助協尋!!!', '貓', '否', '是', '是', 'Uni(屋逆)', '男', '嘉義縣', '番路鄉', '中正路22號', '白色長毛', './upload/20220307_153733.png', '06-2345677\r\n0912345678', NULL, '下午門忘記關從家裡跑出去就不見了', NULL),
(5, 1, '我家愛貓遺失了 請求幫助協尋!!!', '狗', '是', '是', '是', 'qq', '男', '嘉義市', '東區', '冬菇巷27號', '黑色小小隻 屁股少一搓毛', './upload/20220307_160201.png', '手機0912345667', NULL, '門打開就跑出去不見了', NULL),
(6, 1, '家裡的愛狗遺失，叫吉利', '狗', '是', '是', '是', '吉利', '男', '屏東縣', '屏東市', '愛國巷27號', '淡棕色', './upload/20220307_160313.png', '手機聯繫0987124343', NULL, '早上起來發現不見了', NULL),
(7, 10, 'LOST', '貓', '是', '是', '是', 'KKK', '男', '南投縣', '南投市', 'fgfe', 'adgry', './upload/20220307_195905.jpg', 'gryya', NULL, 'uyeugh', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `memberID` int(11) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
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
-- 資料表索引 `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `stray`
--
ALTER TABLE `stray`
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
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stray`
--
ALTER TABLE `stray`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
