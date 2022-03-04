-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022-03-04 01:40:25
-- 伺服器版本： 5.7.24
-- PHP 版本： 8.0.1

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
  `medical` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `adoptreason` varchar(1000) DEFAULT NULL,
  `context` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `adopt`
--

INSERT INTO `adopt` (`id`, `title`, `type`, `amount`, `ear`, `chip`, `ligation`, `name`, `gender`, `city`, `zone`, `address`, `medical`, `img`, `adoptreason`, `context`) VALUES
(1, '台中市南區，親人親狗的牛牛，在等一個幸褔的家', '狗', 1, '是', '是', '是', '牛牛', '男', '5', '3', '227 Sec3 Taiwan Blvd', '在寒冷的冬天發現牠在山坡，看到後救援至家中，因家中是公寓不能飼養。已經恢復體力及完成體外驅蟲；經過評估大約2個月大', 'images/16.png', '有穩定經濟能力，\r\n領養前準備好飼料碗及喝水的碗，\r\n以及睡覺的地方（要有毯子保暖）', '活潑好動的牛牛，喜歡探索新事物'),
(2, '聰明的乖乖想要一個愛他的家', '狗', 1, '是', '否', '是', '乖乖', '男', '5', '3', '306 Sec1 Taiwan Blvd', '已打第一劑的狂犬病疫苗', 'images/20.png', '-須簽認養同意書<br>\r\n\r\n-經濟狀態穩定<br>\r\n\r\n-不得放養、棄養、虐待', '有時間可以照顧這隻狗狗、有經濟能力'),
(3, '帥氣的茶凍想要一個溫暖的家', '狗', 1, '是', '是', '否', '茶凍', '男', '5', '3', '808 Sec6 Taiwan Blvd', '•健康狀況:上次注射狂犬病疫苗的時間為 2021/5/18，外觀與生活上沒有異常，未健檢', 'images/30.png', '請領養人準備<br>\r\n1.小狗以後生長環境照片　<br>\r\n2.牠睡覺的毯子<br>\r\n3.喝水的碗以及飼料碗<br>\r\n\r\n4.送養後大約半年至一年<br>\r\n提供家訪或是照片\r\n讓我們追蹤小狗狀況', '在寒流的冬天發現牠在山坡下');

-- --------------------------------------------------------

--
-- 資料表結構 `cofind`
--

CREATE TABLE `cofind` (
  `id` int(255) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `type` enum('狗','貓') NOT NULL,
  `ear` enum('是','否') NOT NULL,
  `chip` enum('是','否') NOT NULL,
  `ligation` enum('是','否') CHARACTER SET utf8mb4 NOT NULL,
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
-- 傾印資料表的資料 `cofind`
--

INSERT INTO `cofind` (`id`, `title`, `type`, `ear`, `chip`, `ligation`, `name`, `gender`, `city`, `zone`, `address`, `appearance`, `img`, `contact`, `context`) VALUES
(1, '我家愛貓遺失了 請求幫助協尋!!!', '貓', '是', '是', '', 'Uni(屋逆)', '男', '5', '3', '台北市中山區新生北路2段', '脖子毛少 鬍鬚白色 是一隻黑貓 很親人', 'images/stry1.png', 'cell phone 0123456789', '晚上去上班的時候發覺他自己打開家門溜到大樓底下，後面跳出大樓，大概是凌晨接近早上的時間。'),
(2, '黑狗娜娜走失了', '狗', '否', '是', '', '娜娜', '女', '5', '3', '台南市安南區怡安路', '四目 有頸圈藍色（狗牌有名字電話）\r\n沒有穿衣服', 'images/stry2.png', 'cell phone 0123456789', '2/9 凌晨12點左右走出家門，\r\n在民生東路56巷看見，\r\n叫她 害怕一直往民生東路40巷跑到民生東路'),
(3, '家犬走失，感謝金一萬，拜託大家', '狗', '否', '否', '', '吉利', '男', '5', '3', ' 台南市安南區怡安路', '黑黃色米克斯，八個月大，體型小，有藍色頸圈，親人親狗', 'images/stry3.png', 'cell phone 0123456789', '家門沒關好導致狗溜出門'),
(4, 'TEST', '狗', '是', '是', '', 'amy', '男', '5', '3', '808 Sec6 Taiwan Blvd', 'TEST', 'TEST', 'cell phone 0123456789', 'near central park this afternoon 20210103');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
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
-- 傾印資料表的資料 `member`
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
-- 資料表結構 `rescue`
--

CREATE TABLE `rescue` (
  `id` int(1) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `requirement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsibility` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helpreason` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `rescue`
--

INSERT INTO `rescue` (`id`, `title`, `date`, `type`, `amount`, `city`, `zone`, `address`, `lost`, `appearance`, `img`, `contact`, `context`, `requirement`, `responsibility`, `helpreason`) VALUES
(1, '南投草屯受傷的流浪狗', '2022-02-20 07:10:38', '狗', 1, '5', '2', '南投縣草屯鎮柏霖水電附近', 0, 'black and huge', 'images/rescue1.png', 'cell phone 0123456789', '在朋友家附近流浪一個多禮拜了，尾巴有很深的傷口，疑似被別人惡意攻擊，很瘦、很親人不會亂叫，天氣很冷，狗狗濕淋淋在外面流浪，希望有人可以趕快過去救援，協助安置！', '發現時狗狗已經瘦弱見骨，後腿明顯受傷行動不便，急需救援；脖子上有綠色項圈，項圈和身體都不是很髒，							應該走失或被遺棄不久；附近大型野狗群聚很多，我擔心他有危險', '', ''),
(2, '中興大學附近撿到親人品種貓', '2022-02-27 07:10:38', '貓', 1, '5', '3', '台中市南區', 0, 'black and huge', 'images/rescue2.png', 'cell phone 0123456789', '2/10晚上在中興大學附近撿到親人品種貓', '貓咪很親人，疑似品種貓，懷疑是走失', '', ''),
(3, '發現田間路旁有一隻狗，前腳好像被車撞', '2022-02-27 07:10:38', '狗', 1, '5', '3', '嘉義縣布袋鎮', 0, 'black and tiny', 'images/rescue3.png', 'cell phone 0123456789', '發現地點沒地址，可以電話聯絡，在帶路過去。離附近不遠處明顯標的物：嘉義縣布袋鎮貴林國小。', '上班途中，附近都是田地，沒有遮蔽物，車輛車速都開很快，它駁腳要閃車很危險', '', ''),
(10, 'CATTTTTT', '2022-03-03 07:09:26', '貓', 1, NULL, NULL, NULL, NULL, NULL, 'images/rescue3.png', NULL, NULL, NULL, NULL, '傷病就醫,借誘捕籠,尋求抓紮協助'),
(12, '789', '2022-03-04 01:28:06', '貓', 1, NULL, NULL, NULL, NULL, NULL, './upload/20220304_092806.jpeg', NULL, NULL, NULL, NULL, NULL);

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
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
