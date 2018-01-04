-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2017 at 03:48 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupm`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci,
  `position` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `caption`, `url`, `order`, `type`, `image`, `position`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Technology experts expertise', NULL, 0, 0, '1509440952_slide-1.png', 1, 1, '2017-10-31 02:09:13', '2017-10-31 02:09:13'),
(2, 'Superior Design Quality', NULL, 0, 0, '1509441056_slide-2.png', 2, 1, '2017-10-31 02:10:56', '2017-10-31 02:10:56'),
(3, 'Expressive, custom code design', NULL, 0, 0, '1509441083_slide-3.jpg', 3, 1, '2017-10-31 02:11:23', '2017-10-31 02:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `id` int(11) NOT NULL,
  `title` text,
  `sub_title` text,
  `footer_title` text,
  `footer_sub_title` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`id`, `title`, `sub_title`, `footer_title`, `footer_sub_title`, `created_at`, `updated_at`) VALUES
(1, 'OUR CASE STUDIES', 'WE’VE WORKED WITH SOME TRULY INCREDIBLE CLIENTS. WE WOULD LIKE TO SHARE OUR JOURNEY WITH YOU.', 'THAT’S ENOUGH ABOUT US, TELL US ABOUT YOU.', 'LET OUR FANTASTIC AWARD WINNING TEAM HELP YOUR BUSINESS GROW, TODAY.', '2017-11-24 00:48:12', '2017-11-24 03:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `key_config` text COLLATE utf8mb4_unicode_ci,
  `value1` text COLLATE utf8mb4_unicode_ci,
  `value2` text COLLATE utf8mb4_unicode_ci,
  `active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `key_config`, `value1`, `value2`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Email', 'email', 'nifty@nifty.vn', NULL, 1, NULL, '2017-11-27 01:43:29'),
(2, 'Phone', 'phone', '+84 2812 222323', NULL, 1, NULL, '2017-11-27 01:59:36'),
(3, 'Address', 'address', 'Chung cư H3, 384 Hoàng Diệu, Quận 4, TP.Hồ Chí Minh', NULL, 1, NULL, '2017-11-27 02:02:26'),
(4, 'Location', 'location', '10.7604934', '106.6990122', 1, NULL, '2017-11-30 03:20:51'),
(5, 'Company Name', 'name', 'Nifty Corp.', NULL, 1, NULL, '2017-11-27 02:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_read` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `address`, `email`, `phone`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(3, 'Quan', 'addres', 'email', 'phone', 'mess', 0, '2017-11-27 03:04:22', '2017-11-27 03:04:22'),
(4, 'A', 'A', 'A', 'A', 'A', 0, '2017-11-27 04:25:56', '2017-11-27 04:25:56'),
(5, 'asAsa', '1312312', '21321', 'asdas12312', 'A message is a discrete unit of communication intended by the source for consumption by some recipient or group of recipients. A message may be delivered by various means, including courier, telegraphy, carrier pigeon and electronic bus. A message can be the content of a broadcast. An interactive exchange of messages forms a conversation.', 0, '2017-11-28 00:25:33', '2017-11-28 00:25:33'),
(6, 'Name', 'Add', 'Email', 'Phone', 'Ur Mesage', 0, '2017-11-29 01:33:50', '2017-11-29 01:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

CREATE TABLE `contact_page` (
  `id` int(11) NOT NULL,
  `animation_title` text,
  `sub_title` text,
  `contact_title_1` text,
  `contact_title_2` text,
  `contact_title_3` text,
  `contact_title_4` text,
  `contact_title_5` text,
  `footer_title` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_page`
--

INSERT INTO `contact_page` (`id`, `animation_title`, `sub_title`, `contact_title_1`, `contact_title_2`, `contact_title_3`, `contact_title_4`, `contact_title_5`, `footer_title`, `updated_at`, `created_at`) VALUES
(1, NULL, 'CALL, EMAIL OR COME SAY HELLO AT OUR STUDIO. YOU’RE WELCOME ANYTIME.', 'WE', 'WOULD', 'LOVE', 'TO HEAR FROM YOU', NULL, 'OUR STUDIO', '2017-11-24 04:07:48', '2017-11-23 21:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `gallery` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `gallery`, `created_at`, `updated_at`) VALUES
(6, 'test', '[\"1510226218_Artboard 1 (1).png\",\"1510226218_Artboard 1.png\",\"1510226218_Asset 1@3x.png\"]', '2017-11-09 04:16:58', '2017-11-09 04:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `logo` text,
  `title` text,
  `animation_title` text,
  `sub_title` text,
  `background_image` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `logo`, `title`, `animation_title`, `sub_title`, `background_image`, `updated_at`, `created_at`) VALUES
(2, '1511520892_1511515521_logo.png', 'we', 'research,design,create,succeed,inspire', 'SIT DOWN, RELAX. WE’RE A CREATIVE AGENCY DESIGNED FOR YOU.', '1511518070_brickwall-chair.jpg', '2017-11-29 03:26:25', '2017-11-23 20:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_17_080758_create_banners_table', 1),
(4, '2017_10_17_081103_create_posts_table', 1),
(5, '2017_10_17_081908_create_post_categories_table', 1),
(6, '2017_10_17_082155_create_contacts_table', 1),
(7, '2017_10_23_095422_create_sections_table', 1),
(8, '2017_10_23_095436_create_section_categories_table', 1),
(9, '2017_11_01_103839_create_config_table', 2),
(11, '2017_11_08_075323_update_sections_table', 3),
(12, '2017_11_09_031007_create_gallery_table', 4),
(13, '2017_11_09_110916_update_sections_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `our_vision`
--

CREATE TABLE `our_vision` (
  `id` int(11) NOT NULL,
  `title` text,
  `animation_title` text,
  `sub_title` text,
  `footer` text,
  `footer_title` text,
  `footer_sub_title` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_vision`
--

INSERT INTO `our_vision` (`id`, `title`, `animation_title`, `sub_title`, `footer`, `footer_title`, `footer_sub_title`, `created_at`, `updated_at`) VALUES
(1, 'OUR VISION IS', NULL, 'WE PLAY WITH IDEAS, WE ARRANGE THEM AND THEN WE BRING THEM TO LIFE.', 'WHY WE DO IT', 'WE STRIVE TO DELIVER QUALITY, OUR PASSION IS YOUR PROJECT.', 'While creating inspiring work for our clients, our goal is always clear: To produce brilliant digital-age solutions that look great and most of all help your business or cause to grow. However, we think that is only half of the equation; our clients happiness is the most important thing to us. If you’re not satisfied, we have not succeeded. Our goal is to always provide an exceptional level of service, and we aim for lasting partnerships with our clients.', '2017-11-24 01:35:00', '2017-11-24 19:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` text COLLATE utf8mb4_unicode_ci,
  `animation_title` text COLLATE utf8mb4_unicode_ci,
  `sub_title` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `position` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci,
  `gallery` text COLLATE utf8mb4_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `post_date`, `title`, `animation_title`, `sub_title`, `content`, `position`, `active`, `image`, `gallery`, `updated_at`, `created_at`) VALUES
(4, 3, '2017-11-29 04:35:33', 'OUR VISION IS', 'simple,powerful,creative', 'WE PLAY WITH IDEAS, WE ARRANGE THEM AND THEN WE BRING THEM TO LIFE.', NULL, 1, 1, '', NULL, '2017-11-28 21:35:33', '2017-11-25 00:16:38'),
(5, 3, '2017-11-29 04:42:44', 'WHY WE DO IT', NULL, 'WE STRIVE TO DELIVER QUALITY, OUR PASSION IS YOUR PROJECT.', 'While creating inspiring work for our clients, our goal is always clear: To produce brilliant digital-age solutions that look great and most of all help your business or cause to grow. However, we think that is only half of the equation; our clients happiness is the most important thing to us. If you’re not satisfied, we have not succeeded. Our goal is to always provide an exceptional level of service, and we aim for lasting partnerships with our clients.', 3, 1, NULL, NULL, '2017-11-28 21:42:44', '2017-11-25 00:25:18'),
(6, 3, '2017-11-29 04:42:04', 'The Process', NULL, NULL, NULL, 2, 1, NULL, NULL, '2017-11-28 21:42:04', '2017-11-25 00:59:52'),
(7, 4, '2017-11-29 03:09:49', 'BRANDS', NULL, 'Brand and business strategy is there to define where brands need to go. And since the world is on fire, that’s a whole lot of fun.', NULL, NULL, 1, NULL, NULL, '2017-11-28 20:09:49', '2017-11-25 01:06:07'),
(8, 4, '2017-11-29 02:35:22', 'CONNECTIONS', NULL, 'Target groups are becoming smaller, more specific and more agile. So ‘when do we tell what to whom ‘ is becoming increasingly important.', NULL, NULL, 1, NULL, NULL, '2017-11-25 01:06:37', '2017-11-25 01:06:31'),
(9, 4, '2017-11-29 02:35:24', 'IDEAS', NULL, 'Ideas seem to come cheaper and cheaper. But not from us. That’s because they’re not just ideas. They’re the best.', NULL, NULL, 1, NULL, NULL, '2017-11-25 01:06:53', '2017-11-25 01:06:53'),
(10, 4, '2017-11-29 02:34:06', 'TECHNOLOGY', NULL, 'Do we even need to explain? If we want to be a step ahead of where consumers are nowadays, technology is a key success factor.', NULL, NULL, 1, NULL, NULL, '2017-11-28 19:34:06', '2017-11-25 01:07:14'),
(11, 4, '2017-11-29 03:09:40', 'USERS', NULL, 'A great idea is only a great idea if the user is willing and able to interact with it. Strategy and design in motion.', NULL, NULL, 1, NULL, NULL, '2017-11-28 20:09:40', '2017-11-25 01:07:32'),
(12, 4, '2017-11-29 02:35:28', 'DESIGN', NULL, 'Design plays a crucial role in creating difference and value for brands. No matter where in the process you are. That’s why design is an integral part of Think.', NULL, NULL, 1, NULL, NULL, '2017-11-25 01:07:47', '2017-11-25 01:07:47'),
(13, 2, '2017-11-29 04:52:34', 'WE LOVE TO', 'design,write,capture,code,shoot', 'WEB DESIGN. APP DEVELOPMENT. DIGITAL MARKETING. PHOTOGRAPHY. ECOMMERCE. VIDEO.', NULL, 1, 1, NULL, NULL, '2017-11-28 21:52:34', '2017-11-26 19:17:59'),
(14, 2, '2017-11-29 04:52:42', 'OUR WONDERFUL PARTNERS', NULL, 'WE\"VE WORKED WITH SOME TRULY INCREDIBLE PARTNERS OVER THE PAST 10 YEARS.', NULL, 2, 1, NULL, NULL, '2017-11-28 21:52:42', '2017-11-26 19:18:47'),
(15, 2, '2017-11-29 04:53:39', 'DON’T JUST TAKE OUR WORD, SEE FOR YOURSELF.', NULL, 'TAKE A LOOK AT OUR EVER GROWING PORTFOLIO AND SEE OUR PROCESS IN ACTION.', NULL, 4, 1, NULL, NULL, '2017-11-28 21:53:39', '2017-11-26 19:19:25'),
(16, 2, '2017-11-29 04:55:36', 'Client Logo 1', NULL, NULL, NULL, 3, 1, '1511750817_client-1.png', NULL, '2017-11-28 21:55:36', '2017-11-26 19:46:57'),
(17, 2, '2017-11-29 02:35:40', 'Client Logo 2', NULL, NULL, NULL, 3, 1, '1511750830_client-2.png', NULL, '2017-11-26 20:55:34', '2017-11-26 19:47:10'),
(18, 2, '2017-11-29 02:35:42', 'Client Logo 3', NULL, NULL, NULL, 3, 1, '1511750846_client-3.png', NULL, '2017-11-26 20:55:42', '2017-11-26 19:47:26'),
(19, 2, '2017-11-29 02:35:45', 'Client Logo 4', NULL, NULL, NULL, 3, 1, '1511750858_client-4.png', NULL, '2017-11-26 20:55:49', '2017-11-26 19:47:38'),
(20, 2, '2017-11-29 02:35:47', 'Client Logo 5', NULL, NULL, NULL, 3, 1, '1511750869_client-5.png', NULL, '2017-11-26 20:55:55', '2017-11-26 19:47:49'),
(21, 2, '2017-11-29 02:35:49', 'Client Logo 6', NULL, NULL, NULL, 3, 1, '1511750882_client-6.png', NULL, '2017-11-26 20:56:01', '2017-11-26 19:48:02'),
(23, 1, '2017-11-29 06:49:51', 'OUR CASE STUDIES', NULL, 'WE’VE WORKED WITH SOME TRULY INCREDIBLE CLIENTS. WE WOULD LIKE TO SHARE OUR JOURNEY WITH YOU.', NULL, 1, 1, NULL, NULL, '2017-11-28 23:49:51', '2017-11-26 20:56:37'),
(24, 1, '2017-11-29 06:49:43', 'THAT’S ENOUGH ABOUT US, TELL US ABOUT YOU.', NULL, 'LET OUR FANTASTIC AWARD WINNING TEAM HELP YOUR BUSINESS GROW, TODAY.', NULL, 3, 1, NULL, NULL, '2017-11-28 23:49:43', '2017-11-26 20:57:14'),
(25, 10, '2017-11-29 02:35:57', 'Preppy Shop', NULL, NULL, 'DATE 26th June 2016 CLIENT Client Name SERVICES Print Design Project Overview Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove ...', 2, 1, '1511758143_preppy-1-1024x683.png', NULL, '2017-11-27 01:21:43', '2017-11-26 21:49:03'),
(26, 9, '2017-11-29 02:36:00', 'Coffee Cafe', NULL, NULL, NULL, 2, 1, '1511758239_cafe-1-1024x683.jpg', NULL, '2017-11-26 21:50:45', '2017-11-26 21:50:39'),
(27, 9, '2017-11-29 02:36:02', 'T-Shirt Design', NULL, NULL, NULL, 2, 1, '1511758310_image-3-1024x683.jpg', NULL, '2017-11-26 21:51:56', '2017-11-26 21:51:50'),
(28, 9, '2017-11-29 06:45:33', 'Shake Cup Design', NULL, NULL, NULL, 2, 1, '1511758367_bubbletea-4-1024x683.jpg', NULL, '2017-11-28 23:45:33', '2017-11-26 21:52:47'),
(29, 8, '2017-11-29 02:36:07', 'Design Portfolio', NULL, NULL, NULL, 2, 1, '1511758463_interior-design-1-1024x683.png', NULL, '2017-11-26 21:54:23', '2017-11-26 21:54:23'),
(30, 8, '2017-11-27 04:55:28', 'Business Proposal', NULL, NULL, NULL, 2, 0, '1511758528_image-3-1024x683.png', NULL, '2017-11-26 21:55:28', '2017-11-26 21:55:28'),
(31, 8, '2017-11-27 04:56:34', 'Sales Brochure', NULL, NULL, NULL, 2, 0, '1511758594_image-2-1024x683.jpg', NULL, '2017-11-26 21:56:34', '2017-11-26 21:56:34'),
(32, 8, '2017-11-27 04:57:46', 'Software Manual', NULL, NULL, NULL, 2, 0, '1511758666_image-1-1024x683.jpg', NULL, '2017-11-26 21:57:46', '2017-11-26 21:57:46'),
(33, 10, '2017-11-29 02:35:02', 'Exeo', NULL, NULL, NULL, 2, 1, '1511758723_exeo-1-1024x683.jpg', NULL, '2017-11-28 19:35:02', '2017-11-26 21:58:26'),
(34, 10, '2017-11-29 02:34:58', 'Music Player', NULL, NULL, NULL, 2, 1, '1511758780_music-player-1-1024x683.png', NULL, '2017-11-28 19:34:58', '2017-11-26 21:59:40'),
(35, 10, '2017-11-29 02:34:52', 'Watch App', NULL, NULL, NULL, 2, 1, '1511758822_watch-app-1-1024x683.png', NULL, '2017-11-28 19:34:52', '2017-11-26 22:00:22'),
(36, 11, '2017-11-29 02:34:47', 'Fashion Shop', NULL, NULL, NULL, 2, 1, '1511758868_fashion-shop-1-1-1024x683.jpg', NULL, '2017-11-28 19:34:47', '2017-11-26 22:01:08'),
(37, 11, '2017-11-29 02:34:42', 'Mobile App', NULL, NULL, NULL, 2, 1, '1511758904_mobile-app-1024x683.jpg', NULL, '2017-11-28 19:34:42', '2017-11-26 22:01:44'),
(38, 11, '2017-11-29 02:34:36', 'Design Agency', NULL, NULL, NULL, 2, 1, '1511758961_design-agency-1024x683.jpg', NULL, '2017-11-28 19:34:36', '2017-11-26 22:02:41'),
(39, 11, '2017-11-29 02:34:31', 'Freelancer', NULL, NULL, NULL, 2, 1, '1511758999_freelancer-1024x683.jpg', NULL, '2017-11-28 19:34:31', '2017-11-26 22:03:19'),
(40, 5, '2017-11-29 02:34:22', 'THE PROCESS', NULL, 'Once our Think team have composed the core fundamentals the project requires, our Plan team, spearheaded by experienced business directors, creates the road map. The Plan team cast the right people for each job and continuously look after your business interests. Each Business Director is supported by a team of specialist producers (Digital, Activation, Screen and Print) that make sure that your and our organization stay fully aligned during each step we make.', NULL, NULL, 1, NULL, NULL, '2017-11-28 19:34:22', '2017-11-27 02:12:45'),
(41, 6, '2017-11-29 02:34:17', 'OUR MINDSET', NULL, 'Our Create team is made up of individuals who strive for greatness. Our environment is a lively place full of hard working craftsmen and – woman at the top of their game and a whole lot of big screens.  In short, we strongly believe in the power of design and aesthetics. That’s why Make has the same weight as Think and Plan. Combined they make a strategy that is untouchable.', NULL, NULL, 1, NULL, NULL, '2017-11-28 19:34:17', '2017-11-27 02:13:07'),
(44, 12, '2017-11-29 02:34:11', NULL, 'hello,hola,salut,guten tag, as-salam', 'CALL, EMAIL OR COME SAY HELLO AT OUR STUDIO. YOU’RE WELCOME ANYTIME.', NULL, NULL, 1, NULL, NULL, '2017-11-28 19:34:11', '2017-11-27 21:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `key` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `url` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `sub_name` text COLLATE utf8mb4_unicode_ci,
  `active` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `key`, `view`, `order`, `description`, `parent_id`, `url`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `sub_name`, `active`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Case Studies', 'case_study', 3, 0, 'Digital creativity unleashed', 0, 'blog.html', NULL, NULL, NULL, NULL, 'Blog', 1, 0, '2017-10-31 02:17:36', '2017-11-24 20:56:31'),
(2, 'About Us', 'what_we_do', 2, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-24 20:53:01', '2017-11-25 02:44:59'),
(3, 'Our Vision', 'our_vision', 1, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-24 20:55:56', '2017-11-25 02:45:03'),
(4, 'Think', 'think', 0, 0, 'The first stage of our process is to THINK. Our think team apply up to six factors that contribute to the makeup of your project – Brands, Connections, Ideas, Technology, Users, Design. Our experience shows these factors play a crucial role in the success of your goal.', 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-25 00:39:42', '2017-11-28 20:20:56'),
(5, 'Plan', 'plan', 0, 0, 'Only once we truly know and understand how your business works, will we be able to deliver the right creative solutions that achieve the end goal. In the end, our ideas only matter if they help your business grow.', 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-25 00:39:50', '2017-11-28 20:21:31'),
(6, 'Create', 'create', 0, 0, 'Finally, our Create team where Web designers, moviemakers, 3D designers, graphic designers, photographers, DTP’ers etc. take the Think and Plan stages and bring them to life.', 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-25 00:40:03', '2017-11-25 02:45:12'),
(8, 'Print', 'print', 0, 0, 'print', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-26 21:22:10', '2017-11-27 01:22:31'),
(9, 'Product Design', 'product_design', 0, 0, 'product_design', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-26 21:23:09', '2017-11-26 21:23:09'),
(10, 'UI UX KITS', 'ui_ux', 0, 0, 'ui_ux_kits', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-26 21:23:39', '2017-11-28 23:46:18'),
(11, 'Web Design', 'web_design', 0, 0, 'web_design', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-26 21:24:23', '2017-11-26 21:24:23'),
(12, 'Contact', 'contact', 4, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2017-11-27 21:07:03', '2017-11-28 19:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `sub_image` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `gallery_id` int(11) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title`, `description`, `image`, `sub_image`, `url`, `category_id`, `gallery_id`, `position`, `active`, `deleted`, `created_at`, `updated_at`) VALUES
(4, 'project 1', 'project 1', '1509443378_monitor-1.jpg', '1509443378_monitor-1b.jpg', NULL, 1, 0, 1, 1, 0, '2017-10-31 02:49:38', '2017-10-31 02:49:38'),
(5, 'project 2', 'project 2', '1509443395_monitor-2.jpg', '1509443395_monitor-2b.jpg', NULL, 1, 0, 2, 1, 0, '2017-10-31 02:49:55', '2017-10-31 02:49:55'),
(6, 'project 3', 'project 3', '1509443419_monitor-3.png', '1509443419_monitor-3b.png', NULL, 1, 0, 3, 1, 0, '2017-10-31 02:50:19', '2017-10-31 02:50:19'),
(7, 'DER SPIEGEL COVER ART', 'Illustration', '1509443873_p-1-570x570.png', NULL, NULL, 2, 0, 1, 1, 0, '2017-10-31 02:57:53', '2017-10-31 02:57:53'),
(8, 'DER SPIEGEL COVER ART', 'Illustration', '1509443994_p-2-570x570.png', NULL, NULL, 2, 0, 1, 1, 0, '2017-10-31 02:57:53', '2017-10-31 02:59:54'),
(9, 'DER SPIEGEL COVER ART', 'Illustration', '1509444007_p-3-570x570.png', NULL, NULL, 2, 0, 1, 1, 0, '2017-10-31 02:57:53', '2017-10-31 03:00:07'),
(10, 'DER SPIEGEL COVER ART', 'Illustration', '1509444018_p-4-570x570.png', NULL, NULL, 2, 0, 1, 1, 0, '2017-10-31 02:57:53', '2017-10-31 03:00:18'),
(11, 'DER SPIEGEL COVER ART', 'Illustration', '1509444029_p-5-570x570.png', NULL, NULL, 2, 6, 1, 1, 0, '2017-10-31 02:57:53', '2017-11-10 00:27:06'),
(12, 'DER SPIEGEL COVER ART', 'Illustration', '1509444039_p-6-570x570.png', NULL, NULL, 2, 6, 1, 1, 0, '2017-10-31 02:57:53', '2017-11-09 04:20:17'),
(13, 'JOHAN ROBERTSON', 'Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round.', '1509444331_team.jpg', NULL, NULL, 3, 0, 1, 1, 0, '2017-10-31 03:05:31', '2017-10-31 03:05:31'),
(14, 'MICHAEL BROWN', 'Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round.', '1509444356_team-2.jpg', NULL, NULL, 3, 0, 2, 1, 0, '2017-10-31 03:05:56', '2017-10-31 03:05:56'),
(15, 'PETER PETROSKY', 'Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round.', '1509444379_team-3.jpg', NULL, NULL, 3, 0, 3, 1, 0, '2017-10-31 03:06:19', '2017-10-31 03:06:19'),
(16, 'OUR SERVICES', 'Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round.', '1509505187_file-icon.png', NULL, NULL, 4, 0, 1, 1, 0, '2017-10-31 19:59:47', '2017-10-31 19:59:47'),
(17, 'OUR SERVICES', 'Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round.', '1509505187_file-icon.png', NULL, NULL, 4, 0, 2, 1, 0, '2017-10-31 19:59:47', '2017-10-31 19:59:47'),
(18, 'OUR SERVICES', 'Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round.', '1509505187_file-icon.png', NULL, NULL, 4, 0, 3, 1, 0, '2017-10-31 19:59:47', '2017-10-31 19:59:47'),
(19, 'OUR SERVICES', 'Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round.', '1509505187_file-icon.png', NULL, NULL, 4, 0, 4, 1, 0, '2017-10-31 19:59:47', '2017-10-31 19:59:47'),
(20, 'OUR SERVICES', 'Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round.', '1509505187_file-icon.png', NULL, NULL, 4, 0, 5, 1, 0, '2017-10-31 19:59:47', '2017-10-31 19:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `section_categories`
--

CREATE TABLE `section_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `position` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `key_cate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_categories`
--

INSERT INTO `section_categories` (`id`, `title`, `description`, `image`, `url`, `position`, `active`, `key_cate`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'OUR FINEST PROJECTS', 'OUR FINEST PROJECTS', NULL, NULL, 2, 1, 'projects', 0, '2017-10-31 02:31:49', '2017-10-31 19:40:47'),
(2, 'OUR WORK', 'OUR WORK', NULL, NULL, 3, 1, 'our-work', 0, '2017-10-31 02:51:44', '2017-10-31 19:40:57'),
(3, 'OUR INDUSTRY EXPERTS', 'Digital creativity unleashed', NULL, NULL, 4, 1, 'our-industry', 0, '2017-10-31 03:04:17', '2017-10-31 19:41:04'),
(4, 'SERVICES', 'SERVICES', NULL, NULL, 1, 1, 'services', 0, '2017-10-31 19:41:27', '2017-10-31 19:42:01'),
(5, 'CLIENTS', 'CLIENTS', NULL, NULL, 1, 1, 'clients', 0, '2017-10-31 23:35:17', '2017-10-31 23:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$XRDKVEuD5rNh0iYZ94701OeJFcfGu9A011p2Ii5dMPKwPwcgZewvO', 'LF8FbSsXNPZQFFDQkiIERpn0yLYH4vDyCGTyyENKKOgnQZofA2n9p7AmoaGB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `what_we_do`
--

CREATE TABLE `what_we_do` (
  `id` int(11) NOT NULL,
  `title` text,
  `animation_title` text,
  `sub_title` text,
  `content_title` text,
  `content_sub_title` text,
  `footer_title` text,
  `footer_sub_title` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `what_we_do`
--

INSERT INTO `what_we_do` (`id`, `title`, `animation_title`, `sub_title`, `content_title`, `content_sub_title`, `footer_title`, `footer_sub_title`, `created_at`, `updated_at`) VALUES
(1, 'WE LOVE TO', NULL, 'WEB DESIGN. APP DEVELOPMENT. DIGITAL MARKETING. PHOTOGRAPHY. ECOMMERCE. VIDEO.', 'OUR WONDERFUL PARTNERS', 'WE’VE WORKED WITH SOME TRULY INCREDIBLE PARTNERS OVER THE PAST 10 YEARS.', 'DON’T JUST TAKE OUR WORD, SEE FOR YOURSELF.', 'TAKE A LOOK AT OUR EVER GROWING PORTFOLIO AND SEE OUR PROCESS IN ACTION.', '2017-11-24 00:26:20', '2017-11-24 03:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_page`
--
ALTER TABLE `contact_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_vision`
--
ALTER TABLE `our_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_categories`
--
ALTER TABLE `section_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what_we_do`
--
ALTER TABLE `what_we_do`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact_page`
--
ALTER TABLE `contact_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `our_vision`
--
ALTER TABLE `our_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `section_categories`
--
ALTER TABLE `section_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `what_we_do`
--
ALTER TABLE `what_we_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
