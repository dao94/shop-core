-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2015 at 07:02 PM
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
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `create_time`, `update_time`) VALUES
(4, 'Xuân hòa', '2015-05-17 16:14:28', NULL);

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
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `alt` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `album_id`, `name`, `alt`, `link`, `images`, `create_time`, `update_time`, `status`) VALUES
(3, 4, '13123', '123123', NULL, 'news_thumb/8a86ab9a4d51d149315424aba7f14f13.jpg', '2015-05-17 16:40:28', NULL, '2'),
(4, 4, 'Trần cong đạo123', '123àcc', NULL, 'news_thumb/321950bc41ce875fa46615ec95d6b4b1.jpg', '2015-05-17 16:42:03', '2015-05-17 16:53:05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE IF NOT EXISTS `introduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `content` text,
  `status` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `name`, `content`, `status`, `create_time`, `update_time`) VALUES
(1, 'About-us', '<p>Dear Sirs/ Madam</p><p><br/></p><p>  We would like to introduce ourself Tuan Minh Investment Company Limited ( Brief: Tuan Minh Investco) from Vietnam was set up at 2005 and one of leader manufacturer and exporters in the field of agri-products, foods spices and raw incense stick (agarbatti), bamboo stick making agarbatti. Our company has established trading links with partners all over the world and is famous for its variedly of forms style, high quality products and services. Our annual turnover is estimated around 20 millions united dollar and bring the foreign currency for our nation.  Currently, We had build many processing units and factories as well as stockage system  with hundreds of workers in many cities like Yen Bai, Lang Son, Hung Yen, Hai Duong, Hai Phong…</p><p> Tuan Minh Investco is known as the first class exporter in the field of agri-products, spices  and incense stick , bamboo stick .THINK VIETNAM, THINK SPICES &amp; INCENSE STICK, THINK TUAN MINH, with main items as follows:</p><p> </p><p>1. SPICES AND FOODS</p><p> </p><p>CASSIA /CINNAMON</p><p>    -      Cassia Split ( Paper dosa)</p><p>    -      Cassia broken</p><p>     -      Cassia whole pressed</p><p>     -      Cassia  tube ( Cassia cigarette)</p><p>    -      Cinnamon cut square</p><p>    -      Cinnamon cut round</p><p>    -      Cinnamon powder</p><p> </p><p>STAR ANISEED:</p><p>    -      Star aniseed whole autumn crop</p><p>    -      Star aniseed whole spring</p><p>    -      Star aniseed broken</p><p> </p><p>PEPPER BEAN</p><p>    -      Black pepper bean 500g/l</p><p>    -      Black pepper bean 550g/l</p><p>    -      White pepper bean 630g/l</p><p> </p><p>DESSICATED COCONUT</p><p>    -      Dessicated coconut fine grade</p><p>    -      Dessicated coconut medium grade</p><p> </p><p>2.INCENSE STICK AND BAMBOO STICK</p><p> </p><p>INCENSE STICK MADE MACHINE</p><p>    -      Incense stick 8” charcoal and natural</p><p>    -      Incense stick 9” charcoal and natural</p><p>    -      Incense stick 10” charcoal and natural</p><p> </p><p>BAMBOO STICK</p><p>    -      Round bamboo sticks 8”,9”,10” with 1.3mm or 1.2mm diameter</p><p>    -      Square bamboo sticks  8”. 9”, 10”</p><p>    -      Bamboo skewer</p><p> </p><p>INCENSE MACHINE</p><p>      Remarkable successes of Tuan Minh Investco  are building relationship and co-operation in long term with many customers and trading  companies , manufacturers all over the world especially India- our tradinationl market with big cities such as New dehli, Mumbai, Chennai, Bangalore, Tuticorin, Kolkara, Ahmedabad... Tuan Minh''s products also have been exported directly to European and Asian markets such as: Germany, USA, France, Russia ,Korea, Singapore, Japan , Middle East…</p><p>    Aware of the importance of the long term business relation and solid co-operation, We always set up the target: BEST QUALITY, COMPETITIVE PRICE AND GOOD SERVICES WILL LIFT YOU A NEW SKY. With sologan: WHERE CONVERGE PREEMINENT GENIUS, We always do best efford to bring all our customer the absolute trust.</p><p>                      </p><p>    Please update us your highly interest in our products. We are looking forwards to be your trusty partner and positive supports from all buyers.</p><p>Please feel free to contact with us. </p><p> </p><p>  BEST REGARDS</p><p>  FOR TUAN MINH INVESTCO</p><p>  MRS. LE  MAI</p><p>  GENERAL MANAGER</p>', 1, '2015-05-17 23:15:29', '2015-05-18 00:01:25');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `group_news_id`, `user_id`, `images`, `description`, `content`, `create_time`, `update_time`, `status`, `count_views`) VALUES
(2, 'máy chế biến', 47, 1, 'news_thumb/d59d8299bbc4105c78bc46481b5638ad.jpg', 'Quần áo công sở cực chất lượng', '<p>Đang cập nhật !</p>', '2015-05-10 22:51:01', '2015-05-14 01:39:13', 1, 0),
(3, 'xưởng sản xuất', 47, 1, 'news_thumb/17c5e09f4b7dc56eb68ddbcc24158804.jpg', 'Quần áo chào hè với chất lượng cực chất !', '<p>chưa cập nhật !</p>', '2015-05-10 22:49:56', '2015-05-17 21:33:51', 1, 0),
(5, 'Tên 1', NULL, 1, 'news_thumb/6fdd8dbee4623172d6661b873838915e.jpg', NULL, NULL, '2015-05-17 16:21:50', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '2',
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `images`, `link`, `alt`, `create_time`, `status`, `update_time`) VALUES
(1, 'Đối tác 11', 'news_thumb/432887d28a898400c97d0bcdb6d5bcd2.jpg', 'googl.ecom', 'đôi tác', '2015-05-17 13:42:54', 1, '2015-05-17 14:30:10'),
(2, '12123213', 'news_thumb/24c4abc715eaaf3ccd833ca4d1ca4cd2.jpg', 'https://www.youtube.com/watch?v=uGZ6IqFSdQE', '12', '2015-05-17 14:31:27', 1, '2015-05-17 17:14:27');

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('daotc94@gmail.com', '986436d7df5e69bd7ca6de5bd935110c44ff3790226b297b030698e94d34a99c', '2015-05-17 15:22:03');

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
(9, 'Quế vụn', 56, 'Quế vụn', NULL, 'news_thumb/a94e443955a923f95b02cb1ab4b8181b.jpg', 'Thủy phần: 13.5% max\n\nTạp chất: 1%\n\nĐộ dài: ≤ 7cm\n\nMàu sắc tự nhiên\n\nĐóng gói: Carton (trọng lượng: 20 or 25kg net)\n\nSức chứa trong container: 7,5tấn/20FT\n\n20 tấn/40HQ (+/-10%)', '', 1, '2015-05-14 01:17:39', NULL, 123),
(10, 'Quế cắt vuông', 56, 'quế cắt vuông', NULL, 'news_thumb/33d360feb230ae20bf7dcd024fd805bd.jpg', '12', NULL, 1, '2015-05-14 01:19:21', NULL, 13),
(11, 'Cassia split', 56, 'Quế thẳng', NULL, 'news_thumb/551af541e2a1f274c451959e66192105.JPG', '<div>Moisture : 13.5% max</div><div><span>Length : 30-45cm</span></div><div><span>Thickness: 0.8mm-1.6 mm</span></div><div>Brown Taste: pungency</div><div>Odor: aromatic</div><div>colour, Not black inside, unmouldy</div><div>New crop, thin bark, Free from', NULL, 1, '2015-05-14 01:19:53', '2015-05-17 00:13:01', 13);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daotran', 'daotc94@gmail.com', '$2y$10$ymf6OmxdsiqM38DoZoPG3.yHH3EbLk.VXShRRnonY9WXqhMNE7uLm', 'eYOT01BxahvPu17fo13IXm9leFvU4g2vFf12Dm6fpvchxviQayz8XhyJXmbF', '2015-04-12 05:23:36', '2015-05-17 15:08:50'),
(2, 'tesst', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2015-04-20 17:39:04', '2015-04-20 17:39:04'),
(3, 'namphuong', 'namphuong@gmail.com', '$2y$10$AVtawJ.4FkVz0p9z1cAlNu8ZoOw2wDvt/jZA1on0FxO3yf5DsfMBm', 'pVy0YdxNwZPjClB3UiNFN0wlQ59GdfKtDFxrbz2UJbm68n80BRvXi9kPT9Ry', '2015-05-17 15:41:09', '2015-05-17 15:41:22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
