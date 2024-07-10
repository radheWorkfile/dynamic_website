-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 08:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_3rd_menu`
--

CREATE TABLE `admin_3rd_menu` (
  `id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `3rd_menu` varchar(15) NOT NULL,
  `page` int(2) NOT NULL,
  `banner` int(2) NOT NULL COMMENT '0 No |1 yes ',
  `news` int(2) NOT NULL COMMENT '0 No |1 yes',
  `about` int(2) NOT NULL COMMENT '0 No |1 yes',
  `services` int(2) NOT NULL COMMENT '0 No |1 yes',
  `contact` int(2) NOT NULL COMMENT '0 No |1 yes',
  `map` int(2) NOT NULL COMMENT '0 No |1 yes',
  `sumernote` int(2) NOT NULL COMMENT '0 No |1 yes',
  `testimonial` int(2) NOT NULL,
  `seo` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_about`
--

CREATE TABLE `admin_about` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `about_header` varchar(50) NOT NULL,
  `about_text` text NOT NULL,
  `about_image` text NOT NULL,
  `button_url` text DEFAULT NULL,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_about`
--

INSERT INTO `admin_about` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `about_header`, `about_text`, `about_image`, `button_url`, `button_text`, `button_color`, `status`, `created_at`, `updated_at`) VALUES
(15, 17, 0, 0, 'about Us', '<p>Checking BUtton</p>', 'manchurian2.jpg', 'https://www.facebook.com/', 'Read More', 'red', 1, '2023-08-07 01:44:30', '2023-08-06 20:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `admin_banner`
--

CREATE TABLE `admin_banner` (
  `id` int(11) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `banner` text NOT NULL,
  `banner_text` varchar(50) DEFAULT NULL,
  `button_url` text DEFAULT NULL,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_banner`
--

INSERT INTO `admin_banner` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `banner`, `banner_text`, `button_url`, `button_text`, `button_color`, `status`, `created_at`, `updated_at`) VALUES
(44, 16, 9, 0, 'ssignature.jpg', 'fish fry with smaeely', NULL, NULL, NULL, 1, '2023-08-05 07:27:35', '2023-08-05 01:57:35'),
(47, 17, 0, 0, 'Bihari-Chicken1.jpg', '<p>banner of chicken</p>', 'NULL', 'Read More', 'red', 1, '2023-08-07 01:52:41', '2023-08-06 20:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `admin_enquiry`
--

CREATE TABLE `admin_enquiry` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `jop_profile` varchar(50) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `Passing_year` varchar(4) DEFAULT NULL,
  `experienced` varchar(3) DEFAULT NULL,
  `experience_no_of_year` int(2) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_enquiry`
--

INSERT INTO `admin_enquiry` (`id`, `name`, `mobile`, `email`, `subject`, `message`, `address`, `jop_profile`, `education`, `Passing_year`, `experienced`, `experience_no_of_year`, `status`, `created_at`, `updated_at`) VALUES
(14, 'md israel', '9905174054', 'camwel.muhammad@gmial.com', 'Regarding Job', ' xyasjhfbsfjksfjk;jk;jk;asdfjk', 'Bhnatha ssupaul bazar Biraul', 'SEO Executive', 'Inter', '2016', 'yes', 10, 1, '2023-04-08 15:26:16', '2023-04-10 04:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `admin_gallery`
--

CREATE TABLE `admin_gallery` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `image` text NOT NULL,
  `caption` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_hero_section`
--

CREATE TABLE `admin_hero_section` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `header` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `image` text NOT NULL,
  `button_url` text DEFAULT NULL,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_hero_section`
--

INSERT INTO `admin_hero_section` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `header`, `text`, `image`, `button_url`, `button_text`, `button_color`, `status`, `created_at`, `updated_at`) VALUES
(22, 17, 0, 0, '', '', 'uploads/image/Bihari-Chicken3.jpg', NULL, NULL, NULL, 1, '2023-08-07 01:33:15', '2023-08-07 04:50:39'),
(23, 17, 0, 0, '', '<div style=\"font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><div style=\"\"><font color=\"#000000\" style=\"\">&nbsp;&lt;?php if($hero[\'text\']!=\'\' &amp;&amp; $hero[\'image\']!=\'\' ):?&gt;</font></div><div style=\"\"><font color=\"#000000\" style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=\"col-md-6\"&gt;</font></div><div style=\"\"><font color=\"#000000\" style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;?php echo $hero[\'text\']?&gt;</font></div><div style=\"\"><font color=\"#000000\" style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</font></div><div style=\"\"><font color=\"#000000\" style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=\"col-md-6\"&gt;</font></div><div style=\"\"><font color=\"#000000\" style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;img src=\"&lt;?php echo base_url().$hero[\'image\'];?&gt;\" alt=\"&lt;?php echo base_url().$hero[\'image\'];?&gt;\" style=\"width: 100%;\"&gt;</font></div><div style=\"\"><font color=\"#000000\" style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</font></div><div style=\"\"><font color=\"#000000\" style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;?php endif;?&gt;</font></div></div>', '', NULL, NULL, NULL, 1, '2023-08-07 01:33:56', '2023-08-07 04:50:42'),
(24, 17, 0, 0, 'Fish Fry', '<div style=\"color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><div style=\"\">&nbsp;<span style=\"color: rgb(86, 156, 214);\">&lt;?php</span> <span style=\"color: rgb(197, 134, 192);\">if</span>(<span style=\"color: rgb(156, 220, 254);\">$hero</span>[<span style=\"color: rgb(206, 145, 120);\">\'text\'</span>]!=<span style=\"color: rgb(206, 145, 120);\">\'\'</span> &amp;&amp; <span style=\"color: rgb(156, 220, 254);\">$hero</span>[<span style=\"color: rgb(206, 145, 120);\">\'image\'</span>]!=<span style=\"color: rgb(206, 145, 120);\">\'\'</span> ):<span style=\"color: rgb(86, 156, 214);\">?</span><span style=\"color: rgb(86, 156, 214);\">&gt;</span></div><div style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #808080;\">&lt;</span><span style=\"color: #569cd6;\">div</span> <span style=\"color: #9cdcfe;\">class</span>=<span style=\"color: #ce9178;\">\"col-md-6\"</span><span style=\"color: #808080;\">&gt;</span></div><div style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #569cd6;\">&lt;?php</span> <span style=\"color: #dcdcaa;\">echo</span> <span style=\"color: #9cdcfe;\">$hero</span>[<span style=\"color: #ce9178;\">\'text\'</span>]<span style=\"color: #569cd6;\">?</span><span style=\"color: #569cd6;\">&gt;</span></div><div style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #808080;\">&lt;/</span><span style=\"color: #569cd6;\">div</span><span style=\"color: #808080;\">&gt;</span></div><div style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #808080;\">&lt;</span><span style=\"color: #569cd6;\">div</span> <span style=\"color: #9cdcfe;\">class</span>=<span style=\"color: #ce9178;\">\"col-md-6\"</span><span style=\"color: #808080;\">&gt;</span></div><div style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #808080;\">&lt;</span><span style=\"color: #569cd6;\">img</span> <span style=\"color: #9cdcfe;\">src</span>=<span style=\"color: #ce9178;\">\"</span><span style=\"color: #569cd6;\">&lt;?php</span> <span style=\"color: #dcdcaa;\">echo</span> <span style=\"color: #dcdcaa;\">base_url</span>().<span style=\"color: #9cdcfe;\">$hero</span>[<span style=\"color: #ce9178;\">\'image\'</span>];<span style=\"color: #569cd6;\">?</span><span style=\"color: #569cd6;\">&gt;</span><span style=\"color: #ce9178;\">\"</span> <span style=\"color: #9cdcfe;\">alt</span>=<span style=\"color: #ce9178;\">\"</span><span style=\"color: #569cd6;\">&lt;?php</span> <span style=\"color: #dcdcaa;\">echo</span> <span style=\"color: #dcdcaa;\">base_url</span>().<span style=\"color: #9cdcfe;\">$hero</span>[<span style=\"color: #ce9178;\">\'image\'</span>];<span style=\"color: #569cd6;\">?</span><span style=\"color: #569cd6;\">&gt;</span><span style=\"color: #ce9178;\">\"</span> <span style=\"color: #9cdcfe;\">style</span>=<span style=\"color: #ce9178;\">\"</span><span style=\"color: #ce9178;\">width: 100%;\"</span><span style=\"color: #808080;\">&gt;</span></div><div style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: #808080;\">&lt;/</span><span style=\"color: #569cd6;\">div</span><span style=\"color: #808080;\">&gt;</span></div><div style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: rgb(86, 156, 214);\">&lt;?php</span> <span style=\"color: rgb(197, 134, 192);\">endif</span>;<span style=\"color: rgb(86, 156, 214);\">?</span><span style=\"color: rgb(86, 156, 214);\">&gt;</span></div></div>', 'uploads/image/ssignature.jpg', NULL, NULL, NULL, 1, '2023-08-07 01:34:56', '2023-08-06 20:04:56'),
(25, 17, 0, 0, 'Manchurian dish Famoush in India', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</span><br></p>', 'uploads/image/manchurian3.jpg', NULL, NULL, NULL, 1, '2023-08-07 02:09:43', '2023-08-07 04:50:46'),
(26, 17, 0, 0, 'header with some data', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span><br></p>', '', NULL, NULL, NULL, 1, '2023-08-07 02:14:21', '2023-08-06 20:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(2) NOT NULL,
  `menu` varchar(10) NOT NULL,
  `home_page` int(2) NOT NULL COMMENT '0 no| 1 yes',
  `page` int(2) NOT NULL COMMENT '0 no page |1 page',
  `banner` int(2) NOT NULL COMMENT '1 on|0 off',
  `news` int(2) NOT NULL COMMENT '1 on|0 off',
  `about` int(2) NOT NULL COMMENT '1 on|0 off',
  `services` int(2) NOT NULL COMMENT '1 on|0 off',
  `contact` int(2) NOT NULL COMMENT '0 off|1 on',
  `career` int(2) NOT NULL COMMENT '0 on|1 off',
  `map` int(2) NOT NULL COMMENT '1 on|0 off',
  `seo` int(2) NOT NULL COMMENT '0 off| 1 on',
  `gallery` int(2) NOT NULL,
  `sumernote` int(2) NOT NULL COMMENT '1 on|0 off',
  `sumernote1` int(2) NOT NULL COMMENT '0 off | 1 on',
  `sumernote2` int(2) NOT NULL COMMENT '0 off | 1 on',
  `testimonial` int(2) NOT NULL,
  `hero_section` int(2) NOT NULL COMMENT '0 off| 1 on',
  `child` int(2) NOT NULL COMMENT '0 no-child|else child',
  `status` int(2) NOT NULL COMMENT '0 inactive|1active',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu`, `home_page`, `page`, `banner`, `news`, `about`, `services`, `contact`, `career`, `map`, `seo`, `gallery`, `sumernote`, `sumernote1`, `sumernote2`, `testimonial`, `hero_section`, `child`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Home1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2023-04-10 21:03:38', '2023-08-10 06:41:17'),
(17, 'Home', 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, '2023-04-10 21:06:17', '2023-08-06 20:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `admin_news`
--

CREATE TABLE `admin_news` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `news` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_page_data`
--

CREATE TABLE `admin_page_data` (
  `id` int(11) NOT NULL,
  `menu_id` int(2) DEFAULT NULL,
  `submenu_id` int(2) DEFAULT NULL,
  `3rd_menu_id` int(2) DEFAULT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_page_link`
--

CREATE TABLE `admin_page_link` (
  `id` int(11) NOT NULL,
  `google_analytics` text NOT NULL,
  `google_console` text NOT NULL,
  `livechat` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_page_link`
--

INSERT INTO `admin_page_link` (`id`, `google_analytics`, `google_console`, `livechat`, `status`, `created_at`, `Updated_at`) VALUES
(1, 'fghfgdhf', 'hfdhfh', 'hfdhf', 0, '2023-04-06 13:04:48', '2023-08-06 06:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin_seo`
--

CREATE TABLE `admin_seo` (
  `id` int(2) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `child_submenu_id` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_services`
--

CREATE TABLE `admin_services` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `image` text NOT NULL,
  `heading` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `button_url` text DEFAULT NULL,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_services`
--

INSERT INTO `admin_services` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `image`, `heading`, `content`, `button_url`, `button_text`, `button_color`, `status`, `created_at`, `updated_at`) VALUES
(24, 17, 0, 0, 'WhatsApp_Image_2023-02-11_at_8_59_33_PM.jpeg', '', 'button texting', 'https://www.facebook.com/', 'Know US', 'Yellow', 1, '2023-04-13 08:53:03', '2023-04-13 03:23:03'),
(25, 17, 0, 0, 'WhatsApp_Image_2023-03-07_at_10_32_46_AM.jpeg', '', 'service 2', 'https://www.facebook.com/', 'contact US', 'green', 1, '2023-04-13 08:58:06', '2023-04-13 03:28:06'),
(26, 17, 0, 0, 'WhatsApp_Image_2023-03-07_at_10_32_46_AM1.jpeg', '', 'fff', '0', 'Read More', 'red', 1, '2023-04-13 09:13:32', '2023-04-13 03:43:32'),
(27, 17, 0, 0, 'WhatsApp_Image_2023-02-11_at_8_59_33_PM1.jpeg', 'service', 'sfsdffsfsfsdfsf', 'http://localhost/dynamic/Website/sub_page/16/9', 'Read More', 'red', 1, '2023-04-13 09:21:55', '2023-04-13 03:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `admin_single_data`
--

CREATE TABLE `admin_single_data` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL,
  `contact_number` text NOT NULL,
  `email` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_single_data`
--

INSERT INTO `admin_single_data` (`id`, `logo`, `favicon`, `contact_number`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Website_Logo.png', 'favicon.png', '9905174054', 'muhammd5101729@gmial.com', 1, '2023-04-01 13:07:47', '2023-04-10 14:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `admin_submenu`
--

CREATE TABLE `admin_submenu` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `sub_menu` varchar(15) NOT NULL,
  `child` int(2) NOT NULL COMMENT '0 no child|1 child',
  `page` int(2) NOT NULL COMMENT '0 no page |1 page',
  `banner` int(2) NOT NULL COMMENT '0 no|1 yes',
  `news` int(2) NOT NULL COMMENT '0 no|1 yes',
  `about` int(2) NOT NULL COMMENT '0 no|1 yes',
  `services` int(2) NOT NULL COMMENT '0 no|1 yes',
  `contact` int(2) NOT NULL COMMENT '0 no|1 yes',
  `map` int(2) NOT NULL COMMENT '0 no|1 yes',
  `sumernote` int(2) NOT NULL COMMENT '0 no|1 yes',
  `testimonial` int(2) NOT NULL,
  `seo` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_submenu`
--

INSERT INTO `admin_submenu` (`id`, `menu_id`, `sub_menu`, `child`, `page`, `banner`, `news`, `about`, `services`, `contact`, `map`, `sumernote`, `testimonial`, `seo`, `status`, `created_at`, `updated_at`) VALUES
(9, 16, 'aganwadi', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-04-10 21:06:46', '2023-08-05 01:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_summernote`
--

CREATE TABLE `admin_summernote` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_summernote`
--

INSERT INTO `admin_summernote` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(11, 17, 0, 0, '<p>summernote0</p>', 1, '0000-00-00 00:00:00', '2023-08-04 21:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `admin_summernote1`
--

CREATE TABLE `admin_summernote1` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_summernote1`
--

INSERT INTO `admin_summernote1` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 0, 0, '<p>sumernote1</p>', 1, '0000-00-00 00:00:00', '2023-08-04 21:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `admin_summernote2`
--

CREATE TABLE `admin_summernote2` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_summernote2`
--

INSERT INTO `admin_summernote2` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(4, 17, 0, 0, '<p>summernote2</p>', 1, '0000-00-00 00:00:00', '2023-08-04 21:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin_testimonial`
--

CREATE TABLE `admin_testimonial` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `child_submenu_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(2) NOT NULL,
  `banner_limit` int(2) NOT NULL,
  `size` int(5) NOT NULL COMMENT 'in KB',
  `height` int(5) NOT NULL COMMENT 'in Pixels',
  `width` int(5) NOT NULL COMMENT 'in pixels',
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_limit`, `size`, `height`, `width`, `status`, `created_at`, `Updated_at`) VALUES
(1, 10, 2000, 2000, 2000, 1, '2023-02-22 12:30:41', '2023-04-04 06:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `content_with_image`
--

CREATE TABLE `content_with_image` (
  `id` int(2) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `max_limit` int(2) NOT NULL,
  `image_size` int(2) NOT NULL COMMENT 'in KB',
  `image_width` int(2) NOT NULL COMMENT 'in pixel',
  `image_height` int(2) NOT NULL COMMENT 'in pixel',
  `content` int(2) NOT NULL COMMENT 'charechter count',
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content_with_image`
--

INSERT INTO `content_with_image` (`id`, `section_name`, `max_limit`, `image_size`, `image_width`, `image_height`, `content`, `status`, `created_at`, `Updated_at`) VALUES
(1, 'Hero Tag Section', 10, 40000, 5000, 5000, 2000, 1, '2023-08-06 09:18:52', '2023-08-06 16:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `created_by_user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 1, '2021-12-30', '2022-01-15 06:57:50'),
(2, 'Entry', 1, 1, '2022-06-13', '2022-06-13 12:24:53'),
(3, 'Kata', 1, 1, '2022-06-15', '2022-06-16 07:22:35'),
(4, 'Accountant', 1, 1, '2022-06-15', '2022-06-16 07:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `favicon`
--

CREATE TABLE `favicon` (
  `id` int(11) NOT NULL,
  `favicon_size` int(11) NOT NULL,
  `favicon_width` int(11) NOT NULL,
  `favicon_height` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favicon`
--

INSERT INTO `favicon` (`id`, `favicon_size`, `favicon_width`, `favicon_height`, `status`, `created_at`, `Updated_at`) VALUES
(1, 2000, 2000, 2000, 1, '2023-03-31 12:48:08', '2023-04-10 07:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(2) NOT NULL,
  `gallary_limit` int(2) NOT NULL,
  `image_size` int(2) NOT NULL COMMENT 'in KB',
  `image_width` int(2) NOT NULL COMMENT 'In Pixel',
  `image_height` int(2) NOT NULL COMMENT 'in Pixel',
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `gallary_limit`, `image_size`, `image_width`, `image_height`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 42000, 2000, 2000, 1, '2023-02-23 08:45:36', '2023-04-10 16:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(2) NOT NULL,
  `logo_size` int(11) NOT NULL,
  `logo_width` int(11) NOT NULL,
  `logo_height` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_size`, `logo_width`, `logo_height`, `status`, `created_at`, `updated_at`) VALUES
(1, 2000, 2000, 200, 0, '2023-03-31 08:44:15', '2023-04-10 07:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `navbar_limit` int(2) NOT NULL COMMENT 'max limit of menu',
  `2nd_navbar_permission` int(2) NOT NULL COMMENT '0 no |1 yes',
  `2nd_navbar_limit` int(2) NOT NULL,
  `3rd_navbar_permission` int(2) NOT NULL COMMENT '0 no |1 yes',
  `3rd_navbar_limit` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `navbar_limit`, `2nd_navbar_permission`, `2nd_navbar_limit`, `3rd_navbar_permission`, `3rd_navbar_limit`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 10, 1, 20, '2023-02-21 12:22:31', '2023-04-10 16:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(2) NOT NULL,
  `news_limit` int(2) NOT NULL,
  `news_size` int(2) NOT NULL,
  `status` int(2) NOT NULL COMMENT '0 deactivated| 1 Activated',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_limit`, `news_size`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 100, 1, '2023-02-23 10:58:38', '2023-04-04 11:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(2) NOT NULL,
  `page_title_limit` int(2) NOT NULL COMMENT 'in charectors',
  `description_limit` int(2) NOT NULL COMMENT 'in charectors',
  `keyword_limit` int(2) NOT NULL COMMENT 'in charectors',
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `page_title_limit`, `description_limit`, `keyword_limit`, `status`, `created_at`, `Updated_at`) VALUES
(1, 50, 50, 50, 1, '2023-03-30 12:02:42', '2023-04-04 06:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(2) NOT NULL,
  `service_limit` int(2) NOT NULL,
  `icon_size` int(2) NOT NULL COMMENT 'in KB',
  `icon_width` int(2) NOT NULL COMMENT 'in pixel',
  `icon_height` int(2) NOT NULL COMMENT 'in pixel',
  `content` int(2) NOT NULL COMMENT 'charechter count',
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_limit`, `icon_size`, `icon_width`, `icon_height`, `content`, `status`, `created_at`, `Updated_at`) VALUES
(1, 10, 22000, 2000, 2000, 100, 1, '2023-02-23 06:25:41', '2023-04-04 03:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `about_company` text NOT NULL,
  `facebook` text NOT NULL,
  `tweeter` text NOT NULL,
  `instagram` text NOT NULL,
  `linkedln` text NOT NULL,
  `youtube` text NOT NULL,
  `whatsapp` varchar(10) NOT NULL,
  `default_timezone` int(10) NOT NULL,
  `session_timeout` int(10) NOT NULL,
  `inactive_timeout` int(1) NOT NULL,
  `max_file_size` int(11) NOT NULL,
  `allowed_file_types` varchar(200) NOT NULL,
  `default_time_format` varchar(100) NOT NULL,
  `default_date_format` varchar(100) NOT NULL,
  `default_date_time_format` varchar(100) NOT NULL,
  `updates_enabled` int(1) NOT NULL,
  `error_reporting` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`id`, `company_name`, `company_address`, `about_company`, `facebook`, `tweeter`, `instagram`, `linkedln`, `youtube`, `whatsapp`, `default_timezone`, `session_timeout`, `inactive_timeout`, `max_file_size`, `allowed_file_types`, `default_time_format`, `default_date_format`, `default_date_time_format`, `updates_enabled`, `error_reporting`) VALUES
(1, 'camwel', 'Janki Market,\r\nBhagwat Nagar, Kumhrar, Patna\r\n800026, Bihar, India', 'We are a digital transformation and software development company that provides cutting edge engineering solutions, helping Fortune 500+ companies and enterprise clients untangle complex issues that always emerge during their digital evolution journey.\r\n', '', 'https://www.instagram.com/camwel_solution/', 'https://www.instagram.com/camwel_solution/', '#', '#', '9905174054', 49, 60, 0, 10000000, 'jpg,JPG,JPEG,jpeg,png,PNG,GIF,gif,doc,DOC,docx,DOCX,pdf,PDF,RAR,rar,ZIP,zip', 'h:i:A', 'j M, Y', 'd-m-Y h:i:s A', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(2) NOT NULL,
  `testimonial_limit` int(2) NOT NULL COMMENT 'maximum ',
  `icon_size` int(2) NOT NULL COMMENT 'in KB',
  `icon_width` int(2) NOT NULL COMMENT 'In px',
  `icon_height` int(2) NOT NULL COMMENT 'In Px',
  `content` int(2) NOT NULL COMMENT 'in character',
  `status` int(2) NOT NULL COMMENT '0 off| 1 on',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `testimonial_limit`, `icon_size`, `icon_width`, `icon_height`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 10000, 10000, 10000, 100, 0, '2023-04-04 02:36:24', '2023-08-06 14:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `ipaddress` varchar(100) DEFAULT NULL,
  `user_agent` varchar(500) DEFAULT NULL,
  `login_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `user`, `role`, `ipaddress`, `user_agent`, `login_datetime`) VALUES
(1, 'admin@g.com', '1', '::1', 'Chrome 102.0.0.0, Windows 10', '2022-06-21 10:23:27'),
(2, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 06:40:18'),
(3, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 07:52:16'),
(4, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 08:01:35'),
(5, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 08:19:43'),
(6, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 08:20:14'),
(7, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 08:20:23'),
(8, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 08:22:27'),
(9, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 08:23:24'),
(10, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 08:33:34'),
(11, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 08:36:30'),
(12, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:41:44'),
(13, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:41:54'),
(14, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:43:22'),
(15, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:44:07'),
(16, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:45:32'),
(17, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:48:04'),
(18, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:48:16'),
(19, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:48:36'),
(20, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:48:45'),
(21, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:52:47'),
(22, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:54:12'),
(23, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 09:57:24'),
(24, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:01:44'),
(25, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:02:04'),
(26, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:07:37'),
(27, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:08:04'),
(28, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:08:16'),
(29, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:16:17'),
(30, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:16:59'),
(31, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:17:40'),
(32, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:18:37'),
(33, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 10:22:32'),
(34, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 11:05:01'),
(35, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-21 11:05:20'),
(36, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-22 05:42:38'),
(37, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-23 05:04:01'),
(38, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-23 05:04:17'),
(39, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-23 07:20:00'),
(40, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-23 11:02:06'),
(41, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-23 11:07:01'),
(42, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-23 11:09:01'),
(43, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-24 05:05:53'),
(44, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-27 06:03:57'),
(45, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-28 04:54:21'),
(46, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-28 05:28:47'),
(47, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-02-28 05:29:37'),
(48, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-01 06:46:00'),
(49, 'super@g.com', '2', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-01 11:38:42'),
(50, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-01 11:49:49'),
(51, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-02 05:01:35'),
(52, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-04 04:53:39'),
(53, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-11 04:29:03'),
(54, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-13 04:33:14'),
(55, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-14 04:40:06'),
(56, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-14 14:46:23'),
(57, 'admin@g.com', '1', '::1', 'Chrome 110.0.0.0, Windows 10', '2023-03-14 20:51:27'),
(58, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-16 01:52:14'),
(59, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-16 14:46:39'),
(60, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-19 06:01:51'),
(61, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-19 14:14:31'),
(62, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-21 14:45:22'),
(63, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-26 22:47:18'),
(64, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-27 15:29:04'),
(65, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-28 00:17:00'),
(66, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-28 23:15:18'),
(67, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-29 16:21:01'),
(68, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 04:35:30'),
(69, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 08:40:59'),
(70, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 08:42:52'),
(71, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 08:58:36'),
(72, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 08:59:17'),
(73, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 08:59:43'),
(74, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 10:27:57'),
(75, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 10:49:19'),
(76, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 10:50:25'),
(77, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 11:23:08'),
(78, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 11:26:46'),
(79, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 14:08:14'),
(80, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 16:57:49'),
(81, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-30 23:20:09'),
(82, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-31 04:15:29'),
(83, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-31 06:23:06'),
(84, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-31 08:30:07'),
(85, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-31 22:21:59'),
(86, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-03-31 23:21:38'),
(87, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 00:08:57'),
(88, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 00:32:17'),
(89, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 04:26:34'),
(90, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 04:54:53'),
(91, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 04:55:37'),
(92, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 07:27:05'),
(93, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 07:27:37'),
(94, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 07:37:10'),
(95, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 07:37:35'),
(96, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 11:10:41'),
(97, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-01 11:11:21'),
(98, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-02 06:14:49'),
(99, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-02 09:33:24'),
(100, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-02 09:34:44'),
(101, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-02 14:32:13'),
(102, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 04:32:23'),
(103, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 04:33:59'),
(104, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 04:34:19'),
(105, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 05:08:34'),
(106, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 05:09:32'),
(107, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 10:11:47'),
(108, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 14:49:54'),
(109, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 14:56:45'),
(110, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-03 22:30:58'),
(111, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 00:12:48'),
(112, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 01:06:32'),
(113, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 03:00:20'),
(114, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 03:00:53'),
(115, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 04:44:27'),
(116, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:01:29'),
(117, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:08:34'),
(118, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:14:11'),
(119, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:14:42'),
(120, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:20:25'),
(121, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:21:03'),
(122, 'super@g.com', '2', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:27:33'),
(123, 'admin@g.com', '1', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 06:57:17'),
(124, 'admin@g.com', '1', '192.168.1.215', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 07:28:37'),
(125, 'super@g.com', '2', '192.168.1.215', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 07:37:44'),
(126, 'super@g.com', '2', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 07:40:06'),
(127, 'admin@g.com', '1', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 07:50:59'),
(128, 'super@g.com', '2', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 08:16:26'),
(129, 'admin@g.com', '1', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 09:42:31'),
(130, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:03:13'),
(131, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:03:46'),
(132, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:19:46'),
(133, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:22:00'),
(134, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:23:44'),
(135, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:24:05'),
(136, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:42:30'),
(137, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 10:45:41'),
(138, 'super@g.com', '2', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 11:22:38'),
(139, 'admin@g.com', '1', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 11:25:09'),
(140, 'admin@g.com', '1', '192.168.1.248', 'Chrome 111.0.0.0, Windows 10', '2023-04-04 11:26:02'),
(141, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 04:53:36'),
(142, 'admin@g.com', '1', '192.168.1.246', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 06:32:51'),
(143, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 08:21:18'),
(144, 'admin@g.com', '1', '192.168.1.246', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 10:04:32'),
(145, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 10:06:50'),
(146, 'super@g.com', '2', '192.168.1.246', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 10:21:53'),
(147, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 11:33:04'),
(148, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-05 11:48:55'),
(149, 'admin@g.com', '1', '192.168.1.247', 'Chrome 111.0.0.0, Windows 10', '2023-04-06 04:50:54'),
(150, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-06 08:38:53'),
(151, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-06 08:39:12'),
(152, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-06 12:19:16'),
(153, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-07 04:53:01'),
(154, 'admin@g.com', '1', '192.168.1.247', 'Chrome 111.0.0.0, Windows 10', '2023-04-07 05:16:28'),
(155, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-07 10:36:34'),
(156, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-07 10:37:02'),
(157, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-07 10:47:01'),
(158, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-07 11:47:59'),
(159, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-08 04:34:21'),
(160, 'admin@g.com', '1', '192.168.1.247', 'Chrome 111.0.0.0, Windows 10', '2023-04-08 08:15:59'),
(161, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-08 15:31:41'),
(162, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-09 05:13:29'),
(163, 'admin@g.com', '1', '192.168.1.250', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 04:54:21'),
(164, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 04:56:20'),
(165, 'super@g.com', '2', '192.168.1.250', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 05:25:57'),
(166, 'admin@g.com', '1', '192.168.1.250', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 05:34:57'),
(167, 'super@g.com', '2', '192.168.1.250', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 07:22:16'),
(168, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 07:36:13'),
(169, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 07:47:18'),
(170, 'super@g.com', '2', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 07:48:33'),
(171, 'admin@g.com', '1', '::1', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 07:49:38'),
(172, 'super@g.com', '2', '192.168.1.250', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 09:43:29'),
(173, 'admin@g.com', '1', '192.168.1.250', 'Chrome 111.0.0.0, Windows 10', '2023-04-10 09:43:50'),
(174, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 14:29:48'),
(175, 'super@g.com', '2', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 15:53:59'),
(176, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 15:55:12'),
(177, 'super@g.com', '2', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 15:55:34'),
(178, 'super@g.com', '2', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 16:51:39'),
(179, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 16:52:22'),
(180, 'super@g.com', '2', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 16:52:47'),
(181, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 16:56:22'),
(182, 'super@g.com', '2', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-10 17:13:24'),
(183, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-11 15:42:40'),
(184, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-12 13:46:52'),
(185, 'admin@g.com', '1', '::1', 'Chrome 112.0.0.0, Windows 10', '2023-04-13 03:17:22'),
(186, 'admin@g.com', '1', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-04 17:44:04'),
(187, 'admin@g.com', '1', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-05 01:06:49'),
(188, 'super@g.com', '2', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-06 04:53:50'),
(189, 'admin@g.com', '1', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-06 08:43:35'),
(190, 'super@g.com', '2', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-06 09:29:18'),
(191, 'admin@g.com', '1', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-06 13:22:37'),
(192, 'super@g.com', '2', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-06 14:24:46'),
(193, 'super@g.com', '2', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-06 16:50:46'),
(194, 'super@g.com', '2', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-06 20:24:30'),
(195, 'admin@g.com', '1', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-07 04:50:27'),
(196, 'admin@g.com', '1', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-10 06:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `department_type` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `show_ps` varchar(200) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'uploads/user/no_image.png',
  `status` int(1) NOT NULL DEFAULT 1,
  `created_by_user_id` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `department_type`, `email`, `password`, `show_ps`, `name`, `address`, `mobile`, `photo`, `status`, `created_by_user_id`, `created_at`, `update_at`) VALUES
(1, 1, 'admin@g.com', '1593ea35effffa72e44264f78de0a25a', '1593ea35effffa72e44264f78de0a25a', 'Admin', 'Patna', '9874433513', 'uploads/user/admin.png', 1, '1', '2022-06-02', '2023-04-10 15:37:53'),
(7, 2, 'super@g.com', '23eb200353f14e18fce96bb964d7e9c1', 'supper@g.com', 'Super', 'sdfsdfsd', '88888', 'uploads/user/no_image.png', 1, '', '0000-00-00', '2023-04-10 07:45:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_3rd_menu`
--
ALTER TABLE `admin_3rd_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_about`
--
ALTER TABLE `admin_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_banner`
--
ALTER TABLE `admin_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_enquiry`
--
ALTER TABLE `admin_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_gallery`
--
ALTER TABLE `admin_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_hero_section`
--
ALTER TABLE `admin_hero_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_news`
--
ALTER TABLE `admin_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_page_data`
--
ALTER TABLE `admin_page_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_page_link`
--
ALTER TABLE `admin_page_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_seo`
--
ALTER TABLE `admin_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_services`
--
ALTER TABLE `admin_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_single_data`
--
ALTER TABLE `admin_single_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_submenu`
--
ALTER TABLE `admin_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_summernote`
--
ALTER TABLE `admin_summernote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_summernote1`
--
ALTER TABLE `admin_summernote1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_summernote2`
--
ALTER TABLE `admin_summernote2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_testimonial`
--
ALTER TABLE `admin_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_with_image`
--
ALTER TABLE `content_with_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favicon`
--
ALTER TABLE `favicon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_3rd_menu`
--
ALTER TABLE `admin_3rd_menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_about`
--
ALTER TABLE `admin_about`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_banner`
--
ALTER TABLE `admin_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `admin_enquiry`
--
ALTER TABLE `admin_enquiry`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `admin_gallery`
--
ALTER TABLE `admin_gallery`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `admin_hero_section`
--
ALTER TABLE `admin_hero_section`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin_news`
--
ALTER TABLE `admin_news`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `admin_page_data`
--
ALTER TABLE `admin_page_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_page_link`
--
ALTER TABLE `admin_page_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_seo`
--
ALTER TABLE `admin_seo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin_services`
--
ALTER TABLE `admin_services`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `admin_single_data`
--
ALTER TABLE `admin_single_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_submenu`
--
ALTER TABLE `admin_submenu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_summernote`
--
ALTER TABLE `admin_summernote`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin_summernote1`
--
ALTER TABLE `admin_summernote1`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_summernote2`
--
ALTER TABLE `admin_summernote2`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_testimonial`
--
ALTER TABLE `admin_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content_with_image`
--
ALTER TABLE `content_with_image`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favicon`
--
ALTER TABLE `favicon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
