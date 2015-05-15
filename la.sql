-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2015 at 03:26 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `la-shop-core`
--
CREATE DATABASE IF NOT EXISTS `la-shop-core` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `la-shop-core`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_key` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_key`, `create_time`, `update_time`, `name`, `grade`) VALUES
(46, 0, '2015-05-05 21:02:54', '2015-05-14 11:24:32', 'Hương', NULL),
(56, 0, '2015-05-14 01:03:27', NULL, 'Quế', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_news`
--

CREATE TABLE IF NOT EXISTS `group_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `group_news`
--

INSERT INTO `group_news` (`id`, `name`, `create_time`, `update_time`, `images`) VALUES
(2, 'Tin công nghệ', '2015-04-12 12:27:08', NULL, NULL),
(47, 'aa', '2015-05-04 21:54:00', NULL, NULL),
(48, 'Thời trang', '2015-05-10 23:53:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `group_news_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `count_views` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `group_news_id`, `user_id`, `images`, `description`, `content`, `create_time`, `update_time`, `status`, `count_views`) VALUES
(1, 'Thị trường tiêu ấn đồ,giao dịch vẫn sôi động', 47, 1, 'news_thumb/d05936218eab5bccb4152da4af348a64.jpg', 'Quần áo chào hè với chất lượng cực chất 123', '<p>chưa cập nhật !</p>', '2015-05-10 22:49:56', '2015-05-14 01:39:43', 1, 0),
(2, 'máy chế biến', 47, 1, 'news_thumb/d59d8299bbc4105c78bc46481b5638ad.jpg', 'Quần áo công sở cực chất lượng', '<p>Đang cập nhật !</p>', '2015-05-10 22:51:01', '2015-05-14 01:39:13', 1, 0),
(3, 'xưởng sản xuất', 47, 1, 'news_thumb/d05936218eab5bccb4152da4af348a64.jpg', 'Quần áo chào hè với chất lượng cực chất !', '<p>chưa cập nhật !</p>', '2015-05-10 22:49:56', '2015-05-14 01:39:02', 1, 0),
(4, 'Nguy cơ tàn rừng quế', 47, 1, 'news_thumb/01d7a64890ee3c062705ab4a8c092632.jpg', 'Quần áo công sở cực chất lượng', '<p>Yên Bái là tỉnh có diện tích quế lớn nhất khu vực miền núi phía Bắc, mỗi năm khai thác gần 5.000 tấn vỏ, chất lượng quế Yên Bái thuộc hàng tốt nhất VN. Cây quế không chỉ khai thác vỏ, hơn chục năm nay các NM chế biến tinh dầu quế mọc lên nhan nhản khắp nơi, có nguy cơ làm tàn kiệt rừng quế…</p><p>&#34;Nấm mọc sau mưa&#34;</p><p>Theo thống kê chưa đầy đủ, tỉnh Yên Bái hiện có 28.400 ha quế, chủ yếu tập trung ở các huyện: Văn Yên 16.000 ha, Trấn Yên 6.600 ha, Văn Chấn 5.000 ha… Quế là cây trồng truyền thống của đồng bào Dao, Tày. Mỗi khi con cái đến tuổi dựng vợ gả chồng, cha mẹ đều trồng một đồi quế tặng con để làm vốn. Bởi thế các xã vùng cao: Đại Sơn, Viễn Sơn, Mỏ Vàng, Châu Quế Hạ, Phong Dụ Thượng, Xuân Tầm, Tân Hợp (Văn Yên), Quy Mông, Kiên Thành, Y Can (Trấn Yên), Sùng Đô, Nậm Mười, Nậm Búng, Sơn Lương (Văn Chấn) bà con trồng quế với diện tích rất lớn. Nhiều hộ thu hàng trăm triệu đồng mỗi năm từ rừng quế, hàng ngàn gia đình có cuộc sống ổn định và trở nên giàu có nhờ cây quế.</p><p>Trước đây, cây quế chỉ bán được vỏ, nay thân, cành, lá đều bán được với giá cao. Vỏ quế đang có giá từ 22.000-25.000 đ/kg, quế chi, quế vụn cũng bán được 13.000-15.000 đ/kg. Thân quế sau khi bóc vỏ có đường kính từ 15 cm trở lên bán cho các cơ sở chế biến gỗ làm bao bì với giá từ 1,5-1,8 triệu/m3, còn lá quế bán cho các cơ sở chế biến tinh dầu với giá từ 1.500-2.500 đ/kg.</p><p style="text-align: center;"><img src="http://nongnghiep.vn/Upload/Image/2012/7/6/sinh.jpg"/><br/></p><p>Công nhân đang đưa lá quế vào nồi chưng cất</p><p>So với nhiều cây trồng khác, cây quế đã mang lại cho người dân một nguồn thu có giá trị và ổn định. Vùng quế Văn Yên từ vài chục năm nay đã nổi tiếng trên thế giới, tháng1/2010 Cục Sở hữu trí tuệ (Bộ KH-CN) đã có quyết định chứng nhận đăng ký chỉ dẫn địa lý cho sản phẩm quế Văn Yên.</p><p>Hơn chục năm nay các NM chế biến tinh dầu quế mọc nhan nhản khắp nơi, mọi hang cùng ngõ hẻm của vùng quế đều có cơ sở chưng cất tinh dầu. Theo báo cáo của Sở Công thương Yên Bái, toàn tỉnh có 5 NM chiết xuất tinh dầu quy mô lớn đặt ở các huyện có diện tích quế tập trung gồm: Cty TNHH Hương liệu Việt Trung đặt tại xã Quy Mông xây dựng bằng vốn nước ngoài, công suất 150 tấn sản phẩm/năm; Cty TNHH Thương mại XNK Đạt Thành có hai NM đặt tại xã Đông Cuông và Hoàng Thắng, tổng công suất 200 tấn/năm; HTX Bách Lâm đặt NM tại xã Xuân Tầm, công suất 100 tấn/năm; Cty CP LNS-thực phẩm Yên Bái đặt NM tại xã Sơn Lương, công suất 60 tấn/năm; Cty TNHH Trường An có hai NM đặt tại xã Phong Dụ Hạ, công suất 170 tấn/năm; Cty TNHH Tân Thịnh đang tiến hành xây dựng NM tại Xuân Ái, công suất thiết kế 40 tấn/năm.</p><p>Khai thác kiệt quệ</p><p>Ông Trần Thế Hùng- Bí thư Huyện uỷ Văn Yên:</p><p>Văn Yên là vùng quế trọng điểm và lớn nhất tỉnh Yên Bái. Để xây dựng được thương hiệu quế Văn Yên có tên trên bản đồ thế giới là việc làm rất lâu dài cả mấy chục năm trời, từ việc tuyển chọn giống quế, kỹ thuật trồng, quy trình khai thác… Chúng tôi đang chỉ đạo các địa phương không vì lợi ích trước mắt mà làm tổn hại đến chất lượng chính của cây quế.</p><p>Ngoài việc đưa ra quy trình khai thác lá quế hợp lý, huyện còn quy hoạch các cơ sở chế biến phù hợp, đảm bảo thu mua sản phẩm cho dân, bảo vệ được rừng quế, chất lượng quế…</p><p>Ngoài các NM chế biến công nghiệp, tỉnh Yên Bái còn có hơn 200 cơ sở chưng cất tinh dầu quế quy mô nhỏ lẻ hộ gia đình, sản phẩm 300-800 kg/năm. Sản lượng tinh dầu quế năm 2011 của tỉnh Yên Bái đạt 186 tấn, chủ yếu là xuất khẩu sang thị trường Trung Quốc, 6 tháng đầu năm 2012 đạt 85 tấn. Theo tính toán, cứ 120-150 kg lá quế thì chưng cất được 1 kg tinh dầu với giá hiện nay từ 650.000-700.000 đ/kg. Như vậy, lợi nhuận thu được từ chưng cất tinh dầu quế là rất cao.</p><p>Do bán được giá và thị trường tiêu thụ ổn định nên các cơ sở chế biến tinh dầu quế ở Yên Bái đang nở rộ và đua nhau nâng giá thu mua lá quế tùy theo giá bán tinh dầu. Nếu trước đây các hộ chỉ bán lá quế ở những cây khai thác với giá 500-800 đ/kg, đến nay do giá thu mua khá hấp dẫn 1.500-2.500 đ/kg nên các hộ khai thác lá quế ở những cây đứng.</p><p>Người thu mua đến tận đồi thuê người khai thác. Việc khai thác lá quế quá mức, giống như việc gặt lúa non đang tiềm ẩn những nguy cơ làm tàn kiệt, suy thoái rừng quế, khiến cho chất lượng chính của cây quế là vỏ không có tinh dầu, đồng nghĩa chất lượng quế Yên Bái xuống cấp. Với 7 NM và hơn 200 cơ sở chế biến nhỏ lẻ tổng công suất tinh dầu quế của Yên Bái là 700 tấn/năm, trong khi đó mỗi năm chỉ chưng cất được 180-200 tấn tinh dầu.</p><p>Điều này đang báo hiệu sự mất cân đối giữa khả năng cung cấp nguyên liệu và NM chế biến. Việc đẩy giá thu mua lá quế của các cơ sở chế biến đang dẫn dụ người dân khai thác kiệt quệ, tự phá rừng quế của mình. Thấy trước nguy cơ này, tỉnh Yên Bái tạm dừng việc cấp giấy phép xây dựng NM chưng cất tinh dầu, ngành nông nghiệp đã đưa ra quy trình khai thác phù hợp với sự sinh trưởng của cây quế.</p>', '2015-05-10 22:51:01', '2015-05-14 01:41:18', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `status` int(11) DEFAULT '2' COMMENT '2 là hết hàng,1 là còn hàng',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `alt`, `keywords`, `images`, `description`, `content`, `status`, `create_time`, `update_time`, `price`) VALUES
(8, 'Quế chẻ', 56, 'Quế chẻ', '123', 'news_thumb/ab0aa1fcf041d0738f1c551abc1b511c.jpg', '123', NULL, 1, '2015-05-06 22:34:34', '2015-05-14 01:14:24', 123),
(9, 'Quế vụn', 56, 'Quế vụn', NULL, 'news_thumb/a94e443955a923f95b02cb1ab4b8181b.jpg', 'Thủy phần: 13.5% max\n\nTạp chất: 1%\n\nĐộ dài: ≤ 7cm\n\nMàu sắc tự nhiên\n\nĐóng gói: Carton (trọng lượng: 20 or 25kg net)\n\nSức chứa trong container: 7,5tấn/20FT\n\n20 tấn/40HQ (+/-10%)', '', 2, '2015-05-14 01:17:39', NULL, 123),
(10, 'Quế cắt vuông', 56, 'quế cắt vuông', NULL, 'news_thumb/33d360feb230ae20bf7dcd024fd805bd.jpg', '12', NULL, 2, '2015-05-14 01:19:21', NULL, 13),
(11, 'Quế thẳng', 56, 'Quế thẳng', NULL, 'news_thumb/551af541e2a1f274c451959e66192105.JPG', '123', NULL, 1, '2015-05-14 01:19:53', NULL, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daotran', 'daotc94@gmail.com', '$2y$10$ymf6OmxdsiqM38DoZoPG3.yHH3EbLk.VXShRRnonY9WXqhMNE7uLm', '4CZfS7iAfCzLVjjfsZFvJXtmvYIZlSwfwyraG4zAtbAsDkaso0gHITJ0N6aN', '2015-04-12 05:23:36', '2015-04-20 17:38:37'),
(2, 'tesst', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2015-04-20 17:39:04', '2015-04-20 17:39:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
