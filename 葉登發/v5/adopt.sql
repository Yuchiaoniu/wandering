-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022-03-11 07:13:20
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
  `gender` enum('男','女') DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `adoptcondition` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `adopt_city` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adoptID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `adopt`
--

INSERT INTO `adopt` (`id`, `memberID`, `title`, `type`, `ear`, `ligation`, `nickname`, `gender`, `city`, `town`, `img`, `reason`, `status`, `adoptcondition`, `adopt_city`, `date`, `adoptID`) VALUES
(4, 1, '台中市南區，親人親狗的牛牛，在等一個幸褔的家', '狗', '是', '是', '牛牛', '男', '宜蘭縣', '宜蘭市', './upload/20220307_154257.png', '我們最近經濟狀況不好 希望可以為它找到更好的家庭環境', '很健康', '可以提供溫飽', '2, 8, 全區', '2022-03-08 08:11:06', 0),
(5, 1, '帥氣的茶凍想要一個溫暖的家', '狗', '是', '否', '茶凍', '男', '新北市', '萬里區', './upload/20220307_155711.png', '想要幫茶凍找一個新家，家裡的人好像跟它不合', '很健康', '能提供溫飽', '全區', '2022-03-08 08:11:47', 2),
(6, 10, '聰明的乖乖想要一個愛他的家', '狗', '是', '是', '乖乖', '女', '嘉義縣', '番路鄉', './upload/20220307_160013.png', '家裡不適合養狗 所以想要幫乖乖找新的家', '很健康', '能夠提供溫飽', '22, 全區', '2022-03-11 01:52:26', 19),
(8, 10, '親人又親貓的白底小橘貓', '貓', '是', '是', '撒嬌鬼', '女', '高雄市', '鼓山區', './upload/20220308_104448.png', '這次拯救的橘貓是個小妹妹\r\n非常親人也親貓，可摸可抱，愛撒嬌\r\n已看過醫生，身體健康', '已看過醫生，身體健康\r\n點過全能貓（體內外驅蟲）\r\n莫約6個月大，2.5公斤左右\r\n領養者必須支付已付之醫療費用', '領養者必須支付已付之醫療費用\r\n（當然會有醫院收據正本提供）\r\n讓我們能夠拯救更多生命\r\n謝謝你們願意領養代替購買\r\n領養不棄養是我們推崇的要求\r\n希望送出去的小朋友跟領養者都能一輩子健康幸福', '19, 16, 全區', '2022-03-11 04:01:27', 10),
(9, 10, '很親人的橘米克斯', '貓', '是', '否', '土豆', '男', '新竹縣', '湖口鄉', './upload/20220308_104701.png', '因家中出現一些問題導致不能繼續飼養，\r\n希望能找到更好的家庭 謝謝', '因是家貓從不帶出門 所以疫苗都沒有打 每個月定期驅蟲', '需要有穩定收入謝謝', '5, 6, 7, 全區', '2022-03-08 09:00:57', 1),
(10, 10, ' 活潑好動的小黑', '狗', '是', '是', '妹妹', '女', '桃園市', '蘆竹區', './upload/20220311_131951.png', '活潑好動的小黑，喜歡探索新事物', '在寒冷的冬天發現牠在山坡，看到後救援至家中，因家中是公寓不能飼養。\r\n已經恢復體力及完成體外驅蟲；經過評估大約2個月大', '有穩定經濟能力\r\n領養前準備好飼料碗及喝水的碗\r\n以及睡覺的地方（要有毯子保暖喔）', '全區', '2022-03-11 05:20:12', 19);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `adopt`
--
ALTER TABLE `adopt`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
