-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2022 at 03:52 AM
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
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`id`, `memberID`, `title`, `type`, `ear`, `ligation`, `nickname`, `gender`, `city`, `town`, `img`, `reason`, `status`, `adoptcondition`, `adopt_city`, `date`, `adoptID`) VALUES
(4, 1, '台中市南區，親人親狗的牛牛，在等一個幸褔的家', '狗', '是', '是', '牛牛', '男', '宜蘭縣', '宜蘭市', './upload/20220307_154257.png', '我們最近經濟狀況不好 希望可以為它找到更好的家庭環境', '很健康', '可以提供溫飽', '2, 8, 全區', '2022-03-08 08:11:06', 0),
(5, 1, '帥氣的茶凍想要一個溫暖的家', '狗', '是', '否', '茶凍', '男', '新北市', '萬里區', './upload/20220307_155711.png', '想要幫茶凍找一個新家，家裡的人好像跟它不合', '很健康', '能提供溫飽', '全區', '2022-03-08 08:11:47', 2),
(6, 10, '聰明的乖乖想要一個愛他的家', '狗', '是', '是', '乖乖', '女', '嘉義縣', '番路鄉', './upload/20220307_160013.png', '家裡不適合養狗 所以想要幫乖乖找新的家', '很健康', '能夠提供溫飽', '22, 全區', '2022-03-11 01:52:26', 19),
(8, 10, '親人又親貓的白底小橘貓', '貓', '是', '是', '撒嬌鬼', '女', '高雄市', '鼓山區', './upload/20220308_104448.png', '這次拯救的橘貓是個小妹妹\r\n非常親人也親貓，可摸可抱，愛撒嬌\r\n已看過醫生，身體健康', '已看過醫生，身體健康\r\n點過全能貓（體內外驅蟲）\r\n莫約6個月大，2.5公斤左右\r\n領養者必須支付已付之醫療費用', '領養者必須支付已付之醫療費用\r\n（當然會有醫院收據正本提供）\r\n讓我們能夠拯救更多生命\r\n謝謝你們願意領養代替購買\r\n領養不棄養是我們推崇的要求\r\n希望送出去的小朋友跟領養者都能一輩子健康幸福', '19, 16, 全區', '2022-03-08 08:11:10', 0),
(9, 10, '很親人的橘米克斯', '貓', '是', '否', '土豆', '男', '新竹縣', '湖口鄉', './upload/20220308_104701.png', '因家中出現一些問題導致不能繼續飼養，\r\n希望能找到更好的家庭 謝謝', '因是家貓從不帶出門 所以疫苗都沒有打 每個月定期驅蟲', '需要有穩定收入謝謝', '5, 6, 7, 全區', '2022-03-08 09:00:57', 1),
(10, 10, ' 活潑好動的小黑', '狗', '是', '是', '妹妹', '女', '桃園市', '蘆竹區', './upload/20220308_104916.png', '活潑好動的小黑，喜歡探索新事物', '在寒冷的冬天發現牠在山坡，看到後救援至家中，因家中是公寓不能飼養。\r\n已經恢復體力及完成體外驅蟲；經過評估大約2個月大', '有穩定經濟能力\r\n領養前準備好飼料碗及喝水的碗\r\n以及睡覺的地方（要有毯子保暖）', '全區', '2022-03-11 01:45:56', 19);

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
  `reason` varchar(1000) DEFAULT NULL,
  `detail` varchar(1000) DEFAULT NULL,
  `need` varchar(1000) NOT NULL,
  `responsibility` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rescue`
--

INSERT INTO `rescue` (`id`, `memberID`, `title`, `date`, `type`, `amount`, `city`, `town`, `address`, `lost`, `img`, `reason`, `detail`, `need`, `responsibility`) VALUES
(4, 10, '南投草屯受傷的流浪狗', '2022-03-08 02:25:27', '狗', 1, '臺北市', '中正區', '中山路55號', '是', './upload/20220307_152953.png', '腳好像受傷了', '經過時遇到這隻狗好像受了傷', '借誘捕籠, 尋求誘捕協助', '可提供安置照顧空間, 可自行親送至外縣市'),
(5, 1, '2/10晚上在中興大學附近撿到親人品種貓', '2022-03-07 07:54:28', '貓', 1, '新竹市', '東區', '環中路五段22號', '是', './upload/20220307_155428.png', '不須救援但須認領', '有點擦傷', '傷病就醫, 尋求安置協助', '不適用於通報案件'),
(6, 1, '發現田間路旁有一隻狗，前腳好像受重傷', '2022-03-07 07:55:32', '狗', 1, '臺南市', '中西區', '向上路五段27號', '是', './upload/20220307_155532.png', '需要醫療協助', '在路邊看到一只狗受重傷', '尋求安置協助', '可提供安置照顧空間, 願意負擔救援所需費用, 願意負擔救援所需物資'),
(8, 10, '被棄養尋找新家腳有點受傷的小狗', '2022-03-08 02:28:24', '狗', 1, '臺中市', '北區', '中正路附近', '否', './upload/20220308_102824.png', '右前腳疑似被大狗咬傷', '晚上發現在街上遊蕩發現，疑似被棄養有項圈', '傷病就醫, 尋求安置協助', '可自行親送至外縣市, 願意負擔救援所需費用'),
(9, 10, '疑似懷孕的玳瑁母貓', '2022-03-08 02:31:35', '貓', 1, '臺中市', '清水區', '延平路附近', '否', './upload/20220308_103135.png', '貓咪疑似懷孕', '已經用盡各種方式誘捕\r\n可惜貓媽太聰明都跑掉了\r\n最近天冷，實在很怕她生了來不及安置\r\n只好上來徵求\r\n只需要幫忙誘捕\r\n後續我們會先帶去醫院檢查、安置以及送養\r\n我們會貼補您車馬費', '尋求誘捕協助', '可提供安置照顧空間, 願意負擔救援所需費用, 願意負擔救援所需物資'),
(10, 10, '土城流浪大型親人米克斯', '2022-03-08 02:35:31', '狗', 1, '新北市', '土城區', '金城路三段附近', '是', './upload/20220308_103531.png', '發現時狗狗已經瘦弱見骨，後腿明顯受傷行動不便，急需救援', '脖子上有綠色項圈，項圈和身體都不是很髒，應該走失或被遺棄不久；附近大型野狗群聚很多，我擔心他有危險', '傷病就醫, 尋求安置協助', '願意負擔救援所需費用, 願意負擔救援所需物資'),
(13, 1, '98799879797', '2022-03-10 05:53:00', '狗', 1, '基隆市', '仁愛區', '大墩路10號', '是', './upload/20220310_135300.jpg', '564as6fs', 'asdfs4+654f', '傷病就醫, 借誘捕籠', '救援完成後可自行接回'),
(14, 1, '132131', '2022-03-10 06:13:54', '狗', 1, '基隆市', '仁愛區', '大墩路10號', '是', './upload/20220310_141354.jpg', '123', '123', '傷病就醫, 借誘捕籠', '可提供安置照顧空間, 可自行親送至外縣市'),
(15, 19, '231', '2022-03-11 01:42:16', '貓', 1, '臺北市', '中正區', '大墩路10號', '是', './upload/20220311_094216.png', '3213', '23131', '傷病就醫, 借誘捕籠', '可提供安置照顧空間');

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
  `address` varchar(100) DEFAULT NULL,
  `appearance` varchar(1001) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `contact` varchar(300) DEFAULT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `detail` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stray`
--

INSERT INTO `stray` (`id`, `memberID`, `title`, `type`, `ear`, `chip`, `ligation`, `nickname`, `gender`, `city`, `town`, `address`, `appearance`, `img`, `contact`, `reason`, `detail`, `date`) VALUES
(4, 1, '我家愛貓遺失了 請求幫助協尋!!!', '貓', '否', '是', '是', 'Uni(屋逆)', '男', '嘉義縣', '番路鄉', '中正路22號', '白色長毛', './upload/20220307_153733.png', '06-2345677\r\n0912345678', NULL, '下午門忘記關從家裡跑出去就不見了', '2022-03-07 16:00:00'),
(5, 1, '我家愛貓遺失了 請求幫助協尋!!!', '貓', '是', '是', '是', 'qq', '男', '嘉義市', '東區', '冬菇巷27號', '黑色小小隻 屁股少一搓毛', './upload/20220307_160201.png', '手機0912345667', NULL, '門打開就跑出去不見了', '2022-03-07 16:00:00'),
(6, 1, '家裡的愛狗遺失，叫吉利', '狗', '是', '是', '是', '吉利', '男', '屏東縣', '屏東市', '愛國巷27號', '淡棕色', './upload/20220307_160313.png', '手機聯繫0987124343', NULL, '早上起來發現不見了', '2022-03-07 16:00:00'),
(8, 10, ' 我們家內內不見了', '貓', '否', '是', '是', '內內', '男', '臺中市', '新社區', '興義街', '臉部右眼有一塊黑點', './upload/20220308_111134.png', '0922684155 - 陳小姐\r\n', NULL, '昨天有人來家裡裝冷氣，不知道是不是嚇到，隔天早上就不見了', '2022-03-07 16:00:00'),
(9, 10, '協尋愛犬 小白', '狗', '否', '否', '否', '小白', '男', '新北市', '鶯歌區', '山埔路165巷', '特徵三角立耳.四腳掌剛被剃毛', './upload/20220308_111345.png', '陳先生09XX-XXX-XXX', NULL, '今天早上鄰居外出，先生開門沒注意小白走出去了，後來發現一直沒有看到愛犬，才驚覺小白不見了，後續找了很多地方，但是都沒有看到蹤影，主人目前非常擔心', '2022-03-07 16:00:00'),
(12, 10, ' 虎斑貓弟弟～鐵頭走失了', '貓', '否', '否', '否', '鐵頭', '男', '高雄市', '鳳山區', '建國路三段', '傷疤缺毛 (小處不明顯)。叫聲似嬰孩啼哭聲。個性內向怕人，熟悉後會自動撒嬌', './upload/20220308_113519.png', '丁小姐 0911222333(手機 / line ID 號碼同)', NULL, '要帶去打預防針時，半路掙脫袋籠出走', '2022-03-08 03:35:19'),
(13, 1, '2132121', '狗', '是', '是', '是', '123', '男', '新北市', '萬里區', '大墩路10號123', '12312', './upload/20220310_142049.jpeg', '213', NULL, '213', '2022-03-10 06:20:49'),
(14, 19, '132121', '狗', '是', '是', '是', '21', '男', '基隆市', '仁愛區', '大墩路10號', '21615', './upload/20220311_094454.png', '561561', NULL, '61651', '2022-03-11 01:44:54'),
(15, 10, '555', '狗', '是', '是', '是', '22', '男', '新北市', '萬里區', '33', '22', './upload/20220311_113033', '11', NULL, '222', '2022-03-11 03:30:33');

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
(18, 'apple1234@mail.com', 'e10adc3949ba59abbe56e057f20f883e', '路易吉', '男', '1993-10-11', '0912345678', '隱藏', '', '', './upload/20220311_0928480.png');

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
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stray`
--
ALTER TABLE `stray`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
