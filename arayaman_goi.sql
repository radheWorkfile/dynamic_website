-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 01:56 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arayaman_goi`
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `button_url` text,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_about`
--

INSERT INTO `admin_about` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `about_header`, `about_text`, `about_image`, `button_url`, `button_text`, `button_color`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, 0, 0, '', '<p><font color=\"#000000\"><b>BY: MR. RANJEET KUMAR SECRETARY</b></font></p><p><span style=\"font-size: 0.875rem;\">The Camwel Group of Institutions was formed by a team of young, dynamic, result-oriented, and qualified persons. It is established under the Aryan Abhishek Educational Trust.\r\n  The objective of the Aryaman Group of Institutions is \"Youth empowerment through Technical &amp; Professional Education\".\r\n  It came into main mainstream of education with its affiliation to the Nursing Course as ASHOKA NURSING &amp; PARAMEDICAL COLLEGE.\r\n  It increased its scope of education to include more specialized and professional courses within the ARYAMAN GROUP OF INSTITUTIONS.</span></p>', 'boy-img.png', '0', 'Read More', 'red', 1, '2024-07-09 12:22:39', '2024-07-09 06:52:39'),
(2, 24, 0, 0, '', '<h2><span style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" ubuntu,=\"\" cantarell,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" white-space-collapse:=\"\" preserve;\"=\"\"><b style=\"\"><font color=\"#F19411\">Training &amp; Placement Cell</font></b></span></h2><h6 style=\"text-align: justify; \"><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" ubuntu,=\"\" cantarell,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" white-space-collapse:=\"\" preserve;\"=\"\">Welcome to the Training &amp; Placement Cell at Camwel Group of Institutions, where we strive to bridge the gap between education and industry by fostering meaningful connections between students and prospective employers. Our commitment is to empower students with the skills and knowledge necessary for a successful transition from academia to the professional world.</span></h6><h6 style=\"text-align: justify; \"><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" ubuntu,=\"\" cantarell,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" white-space-collapse:=\"\" preserve;\"=\"\">Camwel Group of Institutions values collaboration with leading industry players, ensuring that our curriculum remains relevant and our students have access to the latest trends and technologies. Our partnerships with businesses and organizations provide unique opportunities for internships, projects, and eventual placements.</span></h6><h6 style=\"text-align: justify; \"><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \" segoe=\"\" ui\",=\"\" roboto,=\"\" ubuntu,=\"\" cantarell,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" white-space-collapse:=\"\" preserve;\"=\"\">At Camwel, we believe in preparing students not just for a job but for a lifelong journey of learning and growth. Join us in shaping the future of our students and contributing to the workforce of tomorrow.<br></span></h6><p style=\"text-align: justify; \"></p><h6><br></h6><br><p></p>', 'placement_image.jpg', '0', 'Read More', 'red', 1, '2024-07-09 17:24:45', '2024-07-09 11:54:45');

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
  `button_url` text,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_banner`
--

INSERT INTO `admin_banner` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `banner`, `banner_text`, `button_url`, `button_text`, `button_color`, `status`, `created_at`, `updated_at`) VALUES
(81, 24, 0, 0, 'placement_banner1.png', '', 'NULL', 'Read More', 'red', 1, '2023-11-25 12:36:57', '2023-11-25 07:06:57'),
(82, 21, 0, 0, 'admission_image.png', '', 'NULL', 'Read More', 'red', 1, '2023-11-25 12:52:07', '2023-11-25 07:22:07'),
(102, 19, 0, 0, 'about_banner.png', '', 'NULL', 'Read More', 'red', 1, '2023-11-26 12:54:53', '2023-11-26 07:24:53'),
(107, 22, 0, 0, 'SERVICES_IMG.png', '', 'NULL', 'Read More', 'red', 1, '2023-11-27 11:25:30', '2023-11-27 05:55:30'),
(113, 28, 0, 0, 'banner_for_all.png', '', 'NULL', 'Read More', 'red', 1, '2023-11-27 16:30:45', '2023-11-27 11:00:45'),
(115, 27, 0, 0, 'gallery_banner.png', '', 'NULL', 'Read More', 'red', 1, '2023-11-27 16:46:37', '2023-11-27 11:16:37'),
(125, 18, 0, 0, 'banner_1.png', '', 'NULL', 'Read More', 'red', 1, '2024-07-09 11:19:28', '2024-07-09 05:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `admin_enquiry`
--

CREATE TABLE `admin_enquiry` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `subject` text,
  `message` text,
  `address` text,
  `jop_profile` varchar(50) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `Passing_year` varchar(4) DEFAULT NULL,
  `experienced` varchar(3) DEFAULT NULL,
  `experience_no_of_year` int(2) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_gallery`
--

INSERT INTO `admin_gallery` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `image`, `caption`, `status`, `created_at`, `Updated_at`) VALUES
(1, 27, 0, 0, 'post_image_1.jpg', '', 1, '2023-11-27 16:39:02', '2023-11-27 11:09:02'),
(2, 27, 0, 0, 'post_image_2_png.JPG', '', 1, '2023-11-27 16:39:10', '2023-11-27 11:09:10');

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
  `button_url` text,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_hero_section`
--

INSERT INTO `admin_hero_section` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `header`, `text`, `image`, `button_url`, `button_text`, `button_color`, `status`, `created_at`, `updated_at`) VALUES
(15, 18, 0, 0, '', '<p style=\"margin-top:44px;\"><b><font color=\"#000000\">MRS. MANJARI BHUSHAN DIRECTOR</font></b></p>\r\n<p style=\"text-align:justify;\">﻿ CAMWEL GROUP OF INSTITUTIONS is one of the best institutions in Bihar, with state of Art infrastructure established in the knowledge capital.\r\nI have joined this institution with a clear objective i.e. to make the best possible career for the students of CAMWEL GROUP OF INSTITUTIONS, with the help of qualified teachers &amp; a willing management. The best should be utilized to produce the best.\r\nMy endeavor is to facilitate inter disciplinary research that would support our students in meeting the technological advancement &amp; innovative approach. Besides, I am committed along with my management to produce technocrats who are also humane in approach and conduct.</p>\r\n<p style=\"text-align:justify;\">.</p>', 'uploads/image/post_image_1_copyfsdf.jpg', NULL, NULL, NULL, 1, '2024-07-09 12:22:00', '2024-07-09 06:52:00'),
(16, 19, 0, 0, '', '<p style=\"margin-top:44px;\"><b><font color=\"#000000\">MRS. MANJARI BHUSHAN DIRECTOR</font></b></p>\r\n<p style=\"text-align:justify; padding-right:66px;\">﻿CAMWEL GROUP OF INSTITUTIONS is one of the best institutions in Bihar, with state of Art infrastructure established in the knowledge capital.\r\nI have joined this institution with a clear objective i.e. to make the best possible career for the students of CAMWEL GROUP OF INSTITUTIONS, with the help of qualified teachers & a willing management. The best should be utilized to produce the best.\r\nMy endeavor is to facilitate inter disciplinary research that would support our students in meeting the technological advancement & innovative approach. Besides, I am committed along with my management to produce technocrats who are also humane in approach and conduct.</p>\r\n', 'uploads/image/fsdfds1.png', NULL, NULL, NULL, 1, '2024-07-09 13:21:04', '2024-07-09 07:51:04');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu`, `home_page`, `page`, `banner`, `news`, `about`, `services`, `contact`, `career`, `map`, `seo`, `gallery`, `sumernote`, `sumernote1`, `sumernote2`, `testimonial`, `hero_section`, `child`, `status`, `created_at`, `updated_at`) VALUES
(18, 'HOME', 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 0, 1, '2023-11-13 12:08:27', '2024-07-09 05:36:25'),
(19, 'ABOUT', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, '2023-11-13 12:09:09', '2023-11-26 10:16:50'),
(21, 'ADMISSION', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, '2023-11-13 12:09:36', '2023-11-25 07:24:13'),
(22, 'SERVICES', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1, '2023-11-13 12:09:55', '2023-11-27 05:58:10'),
(24, 'PLACEMENT', 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, '2023-11-13 12:55:35', '2023-11-25 06:57:07'),
(27, 'GALLERY', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, '2023-11-27 16:28:58', '2023-11-27 11:07:33'),
(28, 'CONTACT', 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2023-11-27 16:30:02', '2024-07-09 10:43:36');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_news`
--

INSERT INTO `admin_news` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `news`, `status`, `created_at`, `updated_at`) VALUES
(9, 18, 0, 0, '<h6 style=\"line-height: 19px;\"><font color=\"#636363\">CAMWEL GROUP OF INSTITUTE</font></h6>', 1, '2024-07-08 18:11:00', '2024-07-08 12:41:00');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_page_link`
--

INSERT INTO `admin_page_link` (`id`, `google_analytics`, `google_console`, `livechat`, `status`, `created_at`, `Updated_at`) VALUES
(1, 'fghfgdhf', 'hfdhfh', 'hfdhf', 0, '2023-04-06 13:04:48', '2023-11-15 07:58:12');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `button_url` text,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_services`
--

INSERT INTO `admin_services` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `image`, `heading`, `content`, `button_url`, `button_text`, `button_color`, `status`, `created_at`, `updated_at`) VALUES
(7, 18, 0, 0, 'services_img_3.png', 'Laboratory ', '<p><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">A laboratory is a controlled environment for scientific experimentation, analysis, and research, </span><br></p>', '0', 'Read More', 'red', 1, '2023-11-27 10:29:07', '2023-11-27 04:59:07'),
(8, 18, 0, 0, 'services_img_2.png', 'Hostel Facilities', '<p><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Hostel facilities provide accommodation for students, creating a supportive living environment with amenities, fostering community.</span><br></p>', '0', 'Read More', 'red', 1, '2023-11-27 10:30:49', '2023-11-27 05:00:49'),
(10, 18, 0, 0, 'services_img_1.png', 'Library', '<p><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">\"Embark on a journey of knowledge and exploration in our library, where every page whispers tales of wisdom and inspiration.\"</span><br></p>', '0', 'Read More', 'red', 1, '2023-11-27 13:38:21', '2023-11-27 08:08:21');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_single_data`
--

INSERT INTO `admin_single_data` (`id`, `logo`, `favicon`, `contact_number`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'logo_white.png', 'icon.png', '9028388889', 'camwelsolution@gmail.com', 1, '2024-07-08 16:41:02', '2024-07-08 11:11:02');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_summernote`
--

INSERT INTO `admin_summernote` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, 0, 0, '<h3 style=\"margin: 66px 0px 20px; line-height: 1.5; font-size: 24px; font-family: Roboto, sans-serif;text-align:center;color:rgb(194 34 30);background: linear-gradient(to right, #ffba75, #f9cc9e); padding: 10px;\"><span style=\"font-weight: bolder;\">Welcome to&nbsp; Nursing &amp; Paramedical College</span></h3>\r\n\r\n<p style=\"padding:0rem 0.8rem;font-family: initial;\"> The <span style=\"color:#df7305;\">CAMWEL GROUP OF INSTITUTIONS</span> was established in the year 2011 with the main objective of providing quality education in the multi-disciplinary field and to fulfill the aspirations of young and aspiring students of not only the state of Bihar but across the length &amp; breadth of the country.</p>\r\n\r\n<p style=\"padding:0rem 0.8rem;font-family: initial;\">The vast experience of the <span style=\"color:#df7305;\">CAMWEL GROUP OF INSTITUTIONS</span> which is built on the foundation of strong ethical and business Values has effectively transformed the institute into one of the best colleges in North India. The group of technocrats Includes distinguished people who have occupied eminent positions in public and private sectors. Following the first-hand experience in the technical as well as education field, this group has made the <span style=\"color:#df7305;\">CAMWEL GROUP OF INSTITUTIONS</span> a temple of knowledge. In its brief but impressive journey, the institute has become the hallmark of quality education. The institute is determined to extend quality education accompanied with the development of personality.</p>\r\n\r\n', 1, '0000-00-00 00:00:00', '2024-07-09 06:21:43'),
(2, 24, 0, 0, '<div class=\"container-fluid p-0 \" style=\"margin-top:-260px;\">\r\n				<div class=\"container mt-lg-5 mt-3\">\r\n					<div class=\"row\">\r\n						<div class=\"col-md-12\">\r\n							\r\n							<h4 class=\"text-danger special-font mb-3\"><br></h4>\r\n						</div>\r\n					</div>\r\n				</div>\r\n				<div class=\"container mt-5\">\r\n					<div class=\"row\">\r\n						<div class=\"col-md-8 eligibility\">\r\n							<table class=\"table table-hover\">\r\n								<thead>\r\n									<tr class=\"text-center bg-danger text-light\">\r\n									<th scope=\"col\" colspan=\"2\" style=\"background-color:#F19411;\">ACTIVITIES OF PLACEMENT CELL</th>\r\n									</tr>\r\n								</thead>\r\n								<tbody>\r\n									<tr>\r\n									<th scope=\"row\">1</th>\r\n									<td>To look into the placement of the pass-out students by way of arranging campus interviews by the experts/executives from the reputed organization</td>\r\n									</tr>\r\n									<tr>\r\n									<th scope=\"row\">2</th>\r\n									<td>Arranging the Extension lectures from experts from different organizations to make the students aware of the latest developments in the industry &amp; the actual world of work.</td>\r\n									</tr>\r\n									<tr>\r\n									<th scope=\"row\">3</th>\r\n									<td>Hospital visits are also arranged for the students. College buses are provided to these students for hospital visits.</td>\r\n									</tr>\r\n								</tbody>\r\n						</table>\r\n						</div>\r\n						<div class=\"col-md-4 admission-process\">\r\n								<table class=\"table table-hover\">\r\n									<thead>\r\n										<tr class=\"text-center bg-danger text-light\">\r\n										<th scope=\"col\" colspan=\"2\" style=\"background-color:#F19411;\">OUR PARTNERS</th>\r\n										</tr>\r\n									</thead>\r\n									<tbody>\r\n										<tr>\r\n										<th scope=\"row\">1</th>\r\n										<td>Sri Ram Hospital</td>\r\n										</tr>\r\n										<tr>\r\n										<th scope=\"row\">2</th>\r\n										<td>Chanakya Hospital</td>\r\n										</tr>\r\n										<tr>\r\n										<th scope=\"row\">3</th>\r\n										<td>Shri Sai Hospital</td>\r\n										</tr>\r\n										<tr>\r\n										<th scope=\"row\">4</th>\r\n										<td>Star Hospital</td>\r\n										</tr>\r\n									</tbody>\r\n							</table>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>', 1, '0000-00-00 00:00:00', '2024-07-09 09:58:44');
INSERT INTO `admin_summernote` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(3, 21, 0, 0, '        <div class=\"container-fluid p-0 \">\r\n	<div class=\"container\">\r\n        <div class=\"row\">\r\n            	<div class=\"col-md-8\">\r\n				<h3 class=\"mb-4 special-font\" style=\"color:#00375a; margin-top:22px;\">Eligibility &amp; Selection\r\n					Criteria</h3>\r\n				<p class=\"text-justify text-dark\">Candidates having passed at least intermediate (10+2 equivalents) from\r\n					any recognized board/university and who are a minimum of 15 years and a maximum of 35 years of age\r\n					are eligible for admission.</p>\r\n			</div>\r\n			<div class=\"col-md-4\">\r\n				<img src=\"http://localhost/aryamaan/uploads/admission_icon.png\" class=\"pl-5 img-fluid d-block\" alt=\"Admission\" style=\"height:205px;\">\r\n			</div>\r\n        </div>\r\n    </div>\r\n	\r\n	<div class=\"container mt-5\">\r\n		<div class=\"row\">\r\n			<div class=\"col-md-12\">\r\n			</div>\r\n			<div class=\"col-md-12\">\r\n				<table class=\"table table-hover\" style=\"border-spacing: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-accent-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1116px; color: rgb(33, 37, 41); vertical-align: top; border-color: rgb(222, 226, 230); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">\r\n					<thead style=\"border-style: solid; border-width: 0px; vertical-align: bottom;\">\r\n						<tr class=\"text-center bg-danger text-light\" style=\"border-style: solid; border-width: 0px; color: rgb(248, 249, 250) !important;\">\r\n							<th scope=\"col\" colspan=\"5\" style=\"padding: 0.5rem; border-top-color: inherit; border-right-color: inherit; border-width: 0px 0px 1px; border-bottom-color: currentcolor; border-left-color: inherit; border-right-style: solid; border-left-style: solid; background:linear-gradient(to right, #f48174, #f5af19); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								INFORMATION ABOUT PROGRAMME</th>\r\n						</tr>\r\n					</thead>\r\n					<tbody style=\"border-style: solid; border-width: 0px; vertical-align: inherit;\">\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								SL. NO.</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									NOMENCLATURE</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									ELIGIBILITY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									EXAM PATTERN</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									DURATION</p>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n				<table class=\"table table-hover\" style=\"border-spacing: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-accent-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1116px; color: rgb(33, 37, 41); vertical-align: top; border-color: rgb(222, 226, 230); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">\r\n					<thead style=\"border-style: solid; border-width: 0px; vertical-align: bottom;\">\r\n						<tr class=\"text-center bg-danger text-light\" style=\"border-style: solid; border-width: 0px; color: rgb(248, 249, 250) !important;\">\r\n							<th scope=\"col\" colspan=\"5\" style=\"padding: 0.5rem; border-top-color: inherit; border-right-color: inherit; border-width: 0px 0px 1px; border-bottom-color: currentcolor; border-left-color: inherit; border-right-style: solid; border-left-style: solid;background:linear-gradient(to right, #f48174, #f5af19); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								M.Sc.-N: MASTER OF SCIENCE IN NURSING</th>\r\n						</tr>\r\n					</thead>\r\n					<tbody style=\"border-style: solid; border-width: 0px; vertical-align: inherit;\">\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								01</th>\r\n                                \r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									MSN</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									B.Sc.(N)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									YEARLY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									2 YEARS</p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n\r\n\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								02</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									PSYCHIATRIC</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									B.Sc.(N)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									YEARLY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									2 YEARS</p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								03</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									COMMUNITY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									B.Sc.(N)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									YEARLY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									2 YEARS</p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								04</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									PEDIATRIC</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									B.Sc.(N)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									YEARLY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									2 YEARS</p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								05</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									OBG MIDWIFERY NURSING</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									B.Sc.(N)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									YEARLY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									2 YEARS</p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n\r\n</tbody>\r\n				</table>\r\n\r\n\r\n                <table class=\"table table-hover\" style=\"border-spacing: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-accent-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1116px; color: rgb(33, 37, 41); vertical-align: top; border-color: rgb(222, 226, 230); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">\r\n					<thead style=\"border-style: solid; border-width: 0px; vertical-align: bottom;\">\r\n						<tr class=\"text-center bg-danger text-light\" style=\"border-style: solid; border-width: 0px; color: rgb(248, 249, 250) !important;\">\r\n							<th scope=\"col\" colspan=\"5\" style=\"padding: 0.5rem; border-top-color: inherit; border-right-color: inherit; border-width: 0px 0px 1px; border-bottom-color: currentcolor; border-left-color: inherit; border-right-style: solid; border-left-style: solid;background:linear-gradient(to right, #f48174, #f5af19); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								B.Sc.-N: BACHLOR OF SCIENCE IN NURSING</th>\r\n						</tr>\r\n					</thead>\r\n					<tbody style=\"border-style: solid; border-width: 0px; vertical-align: inherit;\">\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								01</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									B.Sc. (NURSING)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (PCB)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									SEMESTER </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									4 YEAR (8 SEMESTER)</p>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n\r\n\r\n                <table class=\"table table-hover\" style=\"border-spacing: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-accent-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1116px; color: rgb(33, 37, 41); vertical-align: top; border-color: rgb(222, 226, 230); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">\r\n					<thead style=\"border-style: solid; border-width: 0px; vertical-align: bottom;\">\r\n						<tr class=\"text-center bg-danger text-light\" style=\"border-style: solid; border-width: 0px; color: rgb(248, 249, 250) !important;\">\r\n							<th scope=\"col\" colspan=\"5\" style=\"padding: 0.5rem; border-top-color: inherit; border-right-color: inherit; border-width: 0px 0px 1px; border-bottom-color: currentcolor; border-left-color: inherit; border-right-style: solid; border-left-style: solid;background:linear-gradient(to right, #f48174, #f5af19); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n							PB B.Sc.-N: POST BASIC BACHELOR OF SCIENCE IN NURISNG</th>\r\n						</tr>\r\n					</thead>\r\n					<tbody style=\"border-style: solid; border-width: 0px; vertical-align: inherit;\">\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								01</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									PB. B.Sc. (NURSING)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									G.N.M</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									YEARLY </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									2 YEARS</p>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n\r\n\r\n                <table class=\"table table-hover\" style=\"border-spacing: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-accent-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1116px; color: rgb(33, 37, 41); vertical-align: top; border-color: rgb(222, 226, 230); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">\r\n					<thead style=\"border-style: solid; border-width: 0px; vertical-align: bottom;\">\r\n						<tr class=\"text-center bg-danger text-light\" style=\"border-style: solid; border-width: 0px; color: rgb(248, 249, 250) !important;\">\r\n							<th scope=\"col\" colspan=\"5\" style=\"padding: 0.5rem; border-top-color: inherit; border-right-color: inherit; border-width: 0px 0px 1px; border-bottom-color: currentcolor; border-left-color: inherit; border-right-style: solid; border-left-style: solid;background:linear-gradient(to right, #f48174, #f5af19); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								GNM: GENERAL NURSING AND MIDWIFERY</th>\r\n						</tr>\r\n					</thead>\r\n					<tbody style=\"border-style: solid; border-width: 0px; vertical-align: inherit;\">\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								01</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 20px; line-height: 1.5;\">\r\n									           INTERMEDIATE  <span>(ANY RECG. BOARD)</span></p>\r\n                                    \r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									YEARLY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									3 YEARS </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									DURATION</p>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n\r\n\r\n                <table class=\"table table-hover\" style=\"border-spacing: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-accent-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1116px; color: rgb(33, 37, 41); vertical-align: top; border-color: rgb(222, 226, 230); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">\r\n					<thead style=\"border-style: solid; border-width: 0px; vertical-align: bottom;\">\r\n						<tr class=\"text-center bg-danger text-light\" style=\"border-style: solid; border-width: 0px; color: rgb(248, 249, 250) !important;\">\r\n							<th scope=\"col\" colspan=\"5\" style=\"padding: 0.5rem; border-top-color: inherit; border-right-color: inherit; border-width: 0px 0px 1px; border-bottom-color: currentcolor; border-left-color: inherit; border-right-style: solid; border-left-style: solid;background:linear-gradient(to right, #f48174, #f5af19); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								B.C.A: BACHLOR IN COMPUTER APPLICATION</th>\r\n						</tr>\r\n					</thead>\r\n					<tbody style=\"border-style: solid; border-width: 0px; vertical-align: inherit;\">\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								01</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									BACHLOR IN COMPUTER APPLICATION</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									YEARLY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									3 YEARS</p>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n\r\n\r\n                <table class=\"table table-hover\" style=\"border-spacing: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-accent-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1116px; color: rgb(33, 37, 41); vertical-align: top; border-color: rgb(222, 226, 230); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">\r\n					<thead style=\"border-style: solid; border-width: 0px; vertical-align: bottom;\">\r\n						<tr class=\"text-center bg-danger text-light\" style=\"border-style: solid; border-width: 0px; color: rgb(248, 249, 250) !important;\">\r\n							<th scope=\"col\" colspan=\"5\" style=\"padding: 0.5rem; border-top-color: inherit; border-right-color: inherit; border-width: 0px 0px 1px; border-bottom-color: currentcolor; border-left-color: inherit; border-right-style: solid; border-left-style: solid; background:linear-gradient(to right, #f48174, #f5af19); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								BBA: BACHLOR IN BUSINESS ADMINISTRATION</th>\r\n						</tr>\r\n					</thead>\r\n					<tbody style=\"border-style: solid; border-width: 0px; vertical-align: inherit;\">\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								01</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									BACHLOR IN BUSINESS MANAGEMENT</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									YEARLY </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n									3 YEARS</p>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n\r\n                <table class=\"table table-hover\" style=\"border-spacing: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-accent-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0, 0, 0, 0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0, 0, 0, 0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0, 0, 0, 0.075); width: 1116px; color: rgb(33, 37, 41); vertical-align: top; border-color: rgb(222, 226, 230); font-family: Roboto, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">\r\n					<thead style=\"border-style: solid; border-width: 0px; vertical-align: bottom;\">\r\n						<tr class=\"text-center bg-danger text-light\" style=\"border-style: solid; border-width: 0px; color: rgb(248, 249, 250) !important;\">\r\n							<th scope=\"col\" colspan=\"5\" style=\"padding: 0.5rem; border-top-color: inherit; border-right-color: inherit; border-width: 0px 0px 1px; border-bottom-color: currentcolor; border-left-color: inherit; border-right-style: solid; border-left-style: solid; background:linear-gradient(to right, #f48174, #f5af19); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								PAR: PARAMEDICAL BACHELOR</th>\r\n						</tr>\r\n					</thead>\r\n					<tbody style=\"border-style: solid; border-width: 0px; vertical-align: inherit;\">\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								01</th>\r\n                                \r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									INTERMEDIATE PHYSIOTHERAPY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (BIO)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n									4Y &amp; 6M (INTERNSHIP)</p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n\r\n\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								02</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									BACHELOR IN OCCUPATIONAL THERAPY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (BIO)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n									4Y &amp; 6M (INTERNSHIP)</p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								03</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									BACHELOR IN HOSPITAL MANAGEMENT</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (ENGLISH MUST)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 YEARS</p>\r\n\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								04</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									BACHELOR IN MED LABORATORY TECHNOLOGY</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (BIO)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 YEARS</p><p></p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n						<tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								05</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									BACHELOR IN OPHTHALMOLOGY  </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (BIO)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 YEARS</p>\r\n<p></p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n                        <tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								06</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									 DIPLOMA IN PHYSIOTHERAPY  </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (BIO)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 YEARS</p>\r\n<p></p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n                        <tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								07</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									DIPLOMA IN OCCUPATIONAL THERAPY </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (BIO)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 YEARS</p>\r\n<p></p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n                        <tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								08</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									D.M.L.T.</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (BIO)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 YEARS</p>\r\n<p></p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n                        <tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								09</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									O.T ASSISTANT </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE (BIO)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 YEARS</p>\r\n<p></p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n                        <tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								10</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									DIPLOMA IN SANITARY  INSPECTOR  </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									INTERMEDIATE</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 YEARS</p>\r\n<p></p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n                        \r\n                        <tr style=\"border-style: solid; border-width: 0px;\">\r\n							<th scope=\"row\" style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								11</th>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.5;\">\r\n									DRESSER  </p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -300px; line-height: 1.5;\">\r\n									MATRICULATION (ENGLISH MUST)</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -200px; line-height: 1.5;\">\r\n									</p>\r\n							</td>\r\n							<td style=\"padding: 0.5rem; border-color: inherit; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\">\r\n								<p class=\" font-weight-bold\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: -100px; line-height: 1.5;\">\r\n                                    YEARLY  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 YEARS</p>\r\n								<div><br></div>\r\n							</td>\r\n						</tr>\r\n\r\n\r\n</tbody>\r\n				</table>\r\n\r\n\r\n\r\n\r\n\r\n				<table class=\"table table-hover\"></table>\r\n			</div>\r\n			<div class=\"col-md-12\" style=\"margin-bottom:100px;\">\r\n				<table class=\"table table-hover\">\r\n					<thead>\r\n						<tr class=\"text-center\">\r\n						</tr>\r\n						<tr class=\"text-center text-light\" style=\"background:linear-gradient(to right, #f48174, #f5af19);\">\r\n							<th scope=\"col\" colspan=\"2\">MODE &amp; METHOD OF SELECTION</th>\r\n						</tr>\r\n\r\n					</thead>\r\n					<tbody>\r\n						<tr>\r\n							<th scope=\"row\">1</th>\r\n							<td>Advertisements inviting applications for admission are put up in selected newspapers ahead of the start of every new batch.</td>\r\n						</tr>\r\n						<tr>\r\n							<th scope=\"row\">2</th>\r\n							<td>Candidates seeking admission are required to submit a duly filled-up application form along with other required documents.</td>\r\n						</tr>\r\n						<tr>\r\n							<th scope=\"row\">3</th>\r\n							<td>The application form is made available at the school office with a brochure for a charge of RS. 500 payable in cash.</td>\r\n						</tr>\r\n						<tr>\r\n							<th scope=\"row\">4</th>\r\n							<td>Eligible candidates are called for a written test.</td>\r\n						</tr>\r\n						<tr>\r\n							<th scope=\"row\">5</th>\r\n							<td>Candidates who pass the written exam are called for an interview.</td>\r\n						</tr>\r\n						<tr>\r\n							<th scope=\"row\">6</th>\r\n							<td>At the time of admission selected candidates are asked to produce original certificates for verification.</td>\r\n						</tr>\r\n						<tr>\r\n							<th scope=\"row\">7</th>\r\n							<td>Candidates finally selected through interview are, on payment of the required admission fee, admitted to the school for the course.</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</div>\r\n', 1, '0000-00-00 00:00:00', '2024-07-09 08:01:48');
INSERT INTO `admin_summernote` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(14, 19, 0, 0, ' <div class=\"row\" style=\"margin-top:100px; margin-bottom:100px;\">\r\n        <div class=\"col-md-4\">\r\n               <img src=\"http://localhost/aryamaan/uploads/success-team.png\" alt=\"\" style=\"margin-top:-30px; margin-bottom:-30px;\">\r\n\r\n        </div>\r\n\r\n                    <div class=\"col-md-8\" style=\"margin-top:44px;\">\r\n					<h3 class=\" mb-2\"><span class=\"special-font\" style=\"padding-left:44px;\"><b><font color=\"#ff9c00\">Our Vision</font></b></span></h3>\r\n				   <p class=\"text-justify text-dark\" style=\"text-align:justify; color:#00375a; padding-left:44px;\">CAMWEL GROUP OF INSTITUTIONS Strives to provide the best education that combines continuous quality improvement, current technology and improve student performance in learning &amp; rendering comprehensive, compassionate, holistic outcome in the international environment.</p>\r\n<h3 class=\"mb-2\"><span class=\"special-font\" style=\"padding-left:44px;\"><b><font color=\"#ff9c00\">Our Mission</font></b></span></h3>\r\n				   <p class=\"text-justify text-dark\" style=\"text-align:justify; color:#00375a; padding-left:44px;\">\r\nTo \"Empower in Excellence\" in education at the international level through quality\r\napproach, professional development and research.</p>\r\n			   </div>     \r\n               </div>', 1, '0000-00-00 00:00:00', '2024-07-09 07:36:11'),
(15, 22, 0, 0, '<style>\r\n    .td_text{\r\n    margin-top:-20px;\r\n    }\r\n</style>\r\n<div class=\"row\">\r\n    <div class=\"col-md-2\"></div>\r\n  <div class=\"col-md-8\" style=\"position: relative;\">\r\n    <p><span style=\" background: linear-gradient(to right, #f12711, #f5af19); color:white; border-radius:20px;padding:8px 22px 8px 22px;position: absolute; top:3px; left:295px;\">FACILITIES AVAILABLE</span></p>\r\n    <div class=\"row\" style=\"border: 2px solid #f37716; border-radius:10px; padding:38px;\">\r\n    <div class=\"col-md-6\" style=\" width:50%; padding-left:64px; \">\r\n    <div class=\"table\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n             <span style=\"color:#ff6200;\">Digital Classroom</span>\r\n             \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n <span style=\"color:#ff6200;\"> Computer Centre  </span>\r\n           \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n            <span style=\"color:#ff6200;\"> FACILITIES AVAILABLE  </span>\r\n           \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n         <span style=\"color:#f37716;\"> Central Library with Reading Halls  </span>\r\n             \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n           <span style=\"color:#ff6200;\">Indore &amp; Outdoor Games Facilities</span>\r\n              \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n             <span style=\"color:#ff6200;\"> Medical Facilities  </span>\r\n           \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n           <span style=\"color:#ff6200;\"> 24hr CCTV Surveillance    </span>\r\n           \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n            <span style=\"color:#ff6200;\">  Transport Facility   </span>\r\n           \r\n        \r\n    </div>\r\n   \r\n</div>\r\n    <div class=\"col-md-6\" style=\" width:50%; padding-left:25px; \">\r\n    <div class=\"table \">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n           <span style=\"color:#ff6200;\"> Wi-Fi Campus   </span>\r\n            \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n            <span style=\"color:#ff6200;\"> Well-Equipped Lab </span>\r\n         \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n             <span style=\"color:#ff6200;\">Smart Class</span>\r\n           \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n           <span style=\"color:#ff6200;\"> Conference &amp; Seminar Hall</span>\r\n        \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n           <span style=\"color:#ff6200;\"> Yoga &amp; Meditation Class Separate Hostel</span>\r\n          \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n <span style=\"color:#ff6200;\">  Mess and Cafeteria</span>\r\n         \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n<span style=\"color:#ff6200;\">  Training &amp; Placement Cell</span>\r\n          \r\n        \r\n    </div>\r\n    <div class=\"table td_text\">\r\n        \r\n            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n<span style=\"color:#ff6200;\">  Student Activities Centre   </span>\r\n          \r\n        \r\n    </div>\r\n    \r\n</div>\r\n    </div>\r\n  </div>\r\n\r\n    <div class=\"col-md-2\"></div>\r\n</div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<div class=\"row\" style=\"margin-top:100px; margin-bottom:100px;\">\r\n       <div class=\"col-md-4\">\r\n              <img src=\"http://localhost/aryamaan/uploads/services_img_11.png\" alt=\"\" style=\"border-radius:15%; margin-top:-30px; margin-bottom:-30px; border:8px solid #f37716;\">\r\n\r\n       </div>\r\n<div class=\"col-md-1\"></div>\r\n       <div class=\"col-md-7\" style=\"margin-top:22px; margin-left:-45px;\">\r\n              <h3 class=\" mb-2\"><span class=\"special-font\" style=\"padding-left:44px;\">\r\n\r\n                            <b style=\"margin-left:-33px; color:#f37716;\">LIBRARY</b></span></h3>\r\n\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/dynamic_arayaman/uploads/icon_1.png\" alt=\"\">\r\n                            The Institutions has Central Library consisting of wide range of books &amp; journals\r\n                                   periodically  <span style=\"padding-left:36px;\">from different fields.</span>\r\n                     \r\n\r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            The library has sufficient study space with delineated internet facilities.\r\n                     \r\n\r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            The library remains open for 24 hrs. for Hostlers\r\n                     \r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            E-library, video library is also available.\r\n                     \r\n              </div>\r\n</div>\r\n\r\n</div>', 1, '0000-00-00 00:00:00', '2024-07-09 09:41:38');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_summernote1`
--

INSERT INTO `admin_summernote1` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 0, 0, '<p>sumernote1</p>', 1, '0000-00-00 00:00:00', '2023-08-04 21:00:47'),
(2, 18, 0, 0, '        <!-- Service 1 Area Start Here -->\r\n        <div class=\"service1-area\">\r\n            <div class=\"service1-inner-area\">\r\n                <div class=\"container\">\r\n                    <div class=\"row service1-wrapper\">\r\n                        <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1\">\r\n                            <div class=\"service-box-content\">\r\n                                <h3><a href=\"#\">Scholarship Facility</a></h3>\r\n                                <p>Scholarships provide financial assistance and recognition to deserving students.</p>\r\n                            </div>\r\n                            <div class=\"service-box-icon\">\r\n                                <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1\">\r\n                            <div class=\"service-box-content\">\r\n                                <h3><a href=\"#\">Skilled Lecturers</a></h3>\r\n                                <p>Skilled lecturers are educators who possess expertise in their respective fields.</p>\r\n                            </div>\r\n                            <div class=\"service-box-icon\">\r\n                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 service-box1\">\r\n                            <div class=\"service-box-content\">\r\n                                <h3><a href=\"#\">Book Library &amp; Store</a></h3>\r\n                                <p>The library is a repository of knowledge and information, offering a quiet space for study and research.</p>\r\n                            </div>\r\n                            <div class=\"service-box-icon\">\r\n                                <i class=\"fa fa-book\" aria-hidden=\"true\"></i>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <!-- Service 1 Area End Here -->', 1, '0000-00-00 00:00:00', '2023-11-24 06:20:48'),
(3, 22, 0, 0, '<div class=\"row\" style=\"margin-top:150px; margin-bottom:150px;\">\r\n      \r\n       <div class=\"col-md-7\" style=\"margin-top:-22px; \">\r\n              <h3 class=\" mb-2\"><span class=\"special-font\" style=\"padding-left:44px;\">\r\n\r\n                            <b style=\"margin-left:-33px; color:#f37716;\">COMPUTER CENTRE / CENTRAL COMPUTING FACILITY:</b></span></h3>\r\n\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                             The institution has a computer center as a central Computing facility (CCF) for the <span style=\"margin-left:36px;\">students, research scholars &amp; the teachers of Institutions.</span>\r\n                     \r\n\r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                             The\r\nCentre\r\nhas necessary\r\ninfrastructure like sufficient number of computer hardware &amp; <span style=\"margin-left:36px;\"> software with power back up as well as trained technical manpower.</span>\r\n                            \r\n                     \r\n\r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            The CCF provides desired supports like:\r\n                     \r\n\r\n              </div>\r\n              <div class=\"table\" style=\"margin-left:37px;\">\r\n                     \r\n                            1.\r\n                            Internet/LAN\r\n                     \r\n              </div>\r\n              <div class=\"table\" style=\"margin-left:37px;\">\r\n                     \r\n                            2.\r\n                            Project work\r\n                     \r\n              </div>\r\n              <div class=\"table\" style=\"margin-left:37px;\">\r\n                     \r\n                            3.\r\n                            Coding\r\n                     \r\n              </div>\r\n              <div class=\"table\" style=\"margin-left:37px;\">\r\n                     \r\n                            4.\r\n                            On-line activities\r\n                     \r\n              </div>\r\n              <div class=\"table\" style=\"margin-left:37px;\">\r\n                     \r\n                            5.\r\n                            PPT workshop and much more\r\n                     \r\n              </div>\r\n          \r\n</div>\r\n<div class=\"col-md-1\"></div>\r\n\r\n<div class=\"col-md-4\">\r\n              <img src=\"http://localhost/aryamaan/uploads/services_img_4.png\" alt=\"\" style=\"border-radius:15%; margin-top:-30px; margin-bottom:-30px; border:8px solid #f37716;\">\r\n\r\n       </div>\r\n\r\n</div>\r\n', 1, '0000-00-00 00:00:00', '2024-07-09 09:43:28');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_summernote2`
--

INSERT INTO `admin_summernote2` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(4, 17, 0, 0, '<p>summernote2</p>', 1, '0000-00-00 00:00:00', '2023-08-04 21:09:26'),
(5, 18, 0, 0, '                <!-- News and Event Area Start Here -->\r\n             \r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 news-inner-area\">\r\n                        <h2 class=\"title-default-left\" style=\"color:#f5f5f5;\">Latest News</h2>\r\n                        <ul class=\"news-wrapper\">\r\n                            <li>\r\n                                <div class=\"news-img-holder\">\r\n                                    <a href=\"#\"><img src=\"http://localhost/dynamic_arayaman/uploads/11.png\" class=\"img-responsive\" alt=\"news\"></a>\r\n                                </div>\r\n                                <div class=\"news-content-holder\">\r\n                                    <h3><a href=\"single-news.html\">ASHOKA COLLEGE OF PROFESSIONAL STUDIES</a></h3>\r\n                                    <div>Affiliated by </div>\r\n                                    <p>Aryabhatta Knowledge University, Patna</p>\r\n                                </div>\r\n                            </li>\r\n                            <li>\r\n                                <div class=\"news-img-holder\">\r\n                                    <a href=\"#\"><img src=\"http://localhost/dynamic_arayaman/uploads/2.png\" class=\"img-responsive\" alt=\"news\"></a>\r\n                                </div>\r\n                                <div class=\"news-content-holder\">\r\n                                    <h3><a href=\"single-news.html\">ASHOKA NURSING &amp; PARAMEDICAL COLLEGE</a></h3>\r\n                                    <div>Affiliated by </div>\r\n                                    \r\n                                    <p>Health Dept. Govt. of Bihar, BNRC, AKU, BUHS, Patna</p>\r\n                                </div>\r\n                            </li>\r\n                            <li>\r\n                                <div class=\"news-img-holder\">\r\n                                    <a href=\"#\"><img src=\"http://localhost/dynamic_arayaman/uploads/3.png\" class=\"img-responsive\" alt=\"news\"></a>\r\n                                </div>\r\n                                <div class=\"news-content-holder\">\r\n                                    <h3><a href=\"single-news.html\">RAJ ARYAN NURSING &amp; PARAMEDICAL COLLEGE</a></h3>\r\n                                    <div>Affiliated by </div>\r\n                                    \r\n                                    <p> Health Dept. Govt. of Bihar, BNRC, AKU, BUHS, Patna</p>\r\n                                </div>\r\n                            </li>\r\n                        </ul>\r\n                    \r\n                    </div>\r\n                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 event-inner-area\">\r\n                        <h2 class=\"title-default-left\" style=\"position: absolute; left:550px;\">Arayaman Group Of Institutions </h2>\r\n                        <ul class=\"event-wrapper\">\r\n                            <li class=\"wow bounceInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\" style=\"margin-top:90px;\">\r\n                                <div class=\"event-calender-wrapper\">\r\n                                <div class=\"news-img-holder\">\r\n                                <a href=\"#\"><img src=\"http://localhost/dynamic_arayaman/uploads/4.png\" class=\"img-responsive\" alt=\"news\" style=\"height:110px;\"></a>\r\n\r\n                                </div>\r\n                                </div>\r\n                                <div class=\"event-content-holder\">\r\n                                    <h3><a href=\"single-event.html\" style=\"padding-left:22px;\">ARYAMAN HIGHER EDUCATION</a></h3>\r\n                                    <p style=\"padding-left:22px;\">Affiliated by </p>\r\n                                    <p style=\"padding-left:22px;\">Health Dept. Govt. of Bihar, BNRC, BUHS, Patna</p>\r\n                                 \r\n                                </div>\r\n                            </li>\r\n                            <li class=\"wow bounceInUp\" data-wow-duration=\"2s\" data-wow-delay=\".3s\">\r\n                            <div class=\"news-img-holder\">\r\n                                    <a href=\"#\"><img src=\"http://localhost/dynamic_arayaman/uploads/5.png\" class=\"img-responsive\" alt=\"news\" style=\"height:110px;\"></a>\r\n                                </div>\r\n                                <div class=\"event-content-holder\">\r\n                                    <h3><a href=\"single-event.html\" style=\"padding-left:22px;\">ARYAMAN COLLEGE OF HIGHER STUDIES</a></h3>\r\n                                    <p style=\"padding-left:22px;\">Affiliated by  </p>\r\n                                    <p style=\"padding-left:22px;\">Health Dept. Govt. of Bihar, BNRC, BUHS, Patna</p>\r\n                                 \r\n                                </div>\r\n                            </li>\r\n                        </ul>\r\n                  \r\n                    </div>\r\n                </div>\r\n         \r\n        </div>\r\n        <!-- News and Event Area End Here -->', 1, '0000-00-00 00:00:00', '2023-11-25 05:04:41'),
(6, 22, 0, 0, '\r\n\r\n<div class=\"row\" style=\"margin-top:100px; margin-bottom:150px;\">\r\n       <div class=\"col-md-4\">\r\n              <img src=\"http://localhost/aryamaan/uploads/services_img_2.png\" alt=\"\" style=\"border-radius:15%; margin-top:-30px; margin-bottom:-30px; border:8px solid #f37716;\">\r\n\r\n       </div>\r\n<div class=\"col-md-1\"></div>\r\n       <div class=\"col-md-7\" style=\"margin-top:22px; margin-left:-45px;\">\r\n              <h3 class=\" mb-2\"><span class=\"special-font\" style=\"padding-left:44px;\">\r\n\r\n                            <b style=\"margin-left:-33px; color:#f37716;\">HOSTEL FACILITIES</b></span></h3>\r\n\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                             Separate hostel facility for boys &amp; girls are available in the campus.\r\n                     \r\n\r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            24 hr. power backup &amp; CCTV surveillance.\r\n                            \r\n                     \r\n\r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            The warden takes personal care of each &amp; every students with dedicated study hour.\r\n                     \r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            Routine health checkup facility for hostler.\r\n                     \r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            Mess facility is available with good quality of food &amp; hygenic cafeteria.\r\n                     \r\n              </div>\r\n</div>\r\n\r\n</div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<div class=\"row\" style=\"margin-top:100px; margin-bottom:100px;\">\r\n      \r\n       <div class=\"col-md-7\" style=\"margin-top:-22px; \">\r\n              <h3 class=\" mb-2\"><span class=\"special-font\" style=\"padding-left:44px;\">\r\n\r\n                            <b style=\"margin-left:-33px; color:#f37716;\">LABORATORY</b></span></h3>\r\n\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                             Theory must be integrated with practical skills.\r\n                     \r\n\r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                             AGI provides fully equipped separate laboratories for all disciplines.\r\n                            \r\n                     \r\n\r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                            Separate lab hour is allotted for each subject.\r\n                     \r\n\r\n              </div>\r\n              <div class=\"table\">\r\n                     \r\n                            <img src=\"http://localhost/aryamaan/uploads/icon_1.png\" alt=\"\">\r\n                             Lab skills are integrated with on field duty to make students ready for real life jobs.\r\n                     \r\n\r\n              </div>\r\n             \r\n       \r\n          \r\n</div>\r\n<div class=\"col-md-1\"></div>\r\n\r\n<div class=\"col-md-4\">\r\n              <img src=\"http://localhost/aryamaan/uploads/services_img_3.png\" alt=\"\" style=\"border-radius:15%; margin-top:-30px; margin-bottom:-30px; border:8px solid #f37716;\">\r\n\r\n       </div>\r\n\r\n</div>\r\n\r\n\r\n\r\n\r\n', 1, '0000-00-00 00:00:00', '2024-07-09 09:46:43');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_testimonial`
--

INSERT INTO `admin_testimonial` (`id`, `menu_id`, `submenu_id`, `child_submenu_id`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(8, 18, 0, 0, 'testimonial_img_1.png', '', 1, '2023-11-26 16:25:47', '2023-11-26 10:55:47'),
(9, 18, 0, 0, 'testimonial_img_2.png', '', 1, '2023-11-26 16:25:57', '2023-11-26 10:55:57'),
(10, 18, 0, 0, 'testimonial_img_3.png', '', 1, '2023-11-26 16:26:05', '2023-11-26 10:56:05');

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_limit`, `size`, `height`, `width`, `status`, `created_at`, `Updated_at`) VALUES
(1, 46, 2000, 2000, 2000, 1, '2023-02-22 12:30:41', '2023-11-27 10:38:17');

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_with_image`
--

INSERT INTO `content_with_image` (`id`, `section_name`, `max_limit`, `image_size`, `image_width`, `image_height`, `content`, `status`, `created_at`, `Updated_at`) VALUES
(1, 'Hero Tag Section', 16, 100000, 5000, 5000, 10000, 1, '2023-08-06 09:18:52', '2023-11-27 10:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `gallary_limit`, `image_size`, `image_width`, `image_height`, `status`, `created_at`, `updated_at`) VALUES
(1, 33, 42000, 2000, 2000, 1, '2023-02-23 08:45:36', '2023-11-27 11:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `image_section`
--

CREATE TABLE `image_section` (
  `id` int(11) NOT NULL,
  `file` varchar(111) NOT NULL,
  `local_url` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_section`
--

INSERT INTO `image_section` (`id`, `file`, `local_url`) VALUES
(1, '2.png', ''),
(2, '11.png', ''),
(3, '3.png', ''),
(4, '4.png', ''),
(5, '5.png', ''),
(6, '1.jpg', ''),
(7, '4.jpg', ''),
(8, '11.jpg', ''),
(9, 'admission_icon.png', ''),
(10, 'course_img_sec_1.png', ''),
(11, 'course_img_sec_2.png', ''),
(13, 'success-team.png', ''),
(14, 'icon_1.png', ''),
(16, 'services_img_11.png', ''),
(17, 'services_img_4.png', ''),
(18, 'services_img_2.png', ''),
(19, 'services_img_3.png', ''),
(20, 'post_image_1.jpg', ''),
(21, 'post_image_2_png.JPG', '');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`id`, `company_name`, `company_address`, `about_company`, `facebook`, `tweeter`, `instagram`, `linkedln`, `youtube`, `whatsapp`, `default_timezone`, `session_timeout`, `inactive_timeout`, `max_file_size`, `allowed_file_types`, `default_time_format`, `default_date_format`, `default_date_time_format`, `updates_enabled`, `error_reporting`) VALUES
(1, 'camwel', 'Janki Market,\r\nBhagwat Nagar, Kumhrar, Patna\r\n800026, Bihar, India', 'Camwel\'s team excels in Finance, Education, Networking, Mobile apps, Web development, Digital Marketing, IoT, and IT strategy. We partner with small businesses, startups, government agencies, and large corporations to create innovative, people-focused tech solutions.', 'https://www.facebook.com/CAMWELPATNA/', 'https://x.com/i/flow/login?redirect_after_login=%2Fcamwel3', 'https://www.instagram.com/camwel_solution/', 'https://www.linkedin.com/company/camwel-solution/', 'https://www.youtube.com/watch?v=6w-HnjtWcXo&list=PLMIoPCFjpYM7zFDVqrwydDTCZBberzpDg', '9028388889', 49, 60, 0, 10000000, 'jpg,JPG,JPEG,jpeg,png,PNG,GIF,gif,doc,DOC,docx,DOCX,pdf,PDF,RAR,rar,ZIP,zip', 'h:i:A', 'j M, Y', 'd-m-Y h:i:s A', 1, 1);

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `testimonial_limit`, `icon_size`, `icon_width`, `icon_height`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 10000, 10000, 10000, 100, 1, '2023-04-04 02:36:24', '2023-11-24 10:21:49');

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
  `login_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(196, 'admin@g.com', '1', '::1', 'Chrome 115.0.0.0, Windows 10', '2023-08-10 06:40:35'),
(197, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-13 06:20:36'),
(198, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-14 05:08:00'),
(199, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-15 05:24:22'),
(200, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-15 06:48:43'),
(201, 'super@g.com', '2', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-15 07:56:33'),
(202, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-15 08:01:38'),
(203, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-23 12:14:27'),
(204, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-23 16:42:36'),
(205, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-24 04:36:01'),
(206, 'super@g.com', '2', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-24 10:14:11'),
(207, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-24 10:14:44'),
(208, 'super@g.com', '2', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-24 10:15:03'),
(209, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-24 10:15:17'),
(210, 'super@g.com', '2', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-24 10:21:32'),
(211, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-24 10:21:58'),
(212, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-25 04:59:19'),
(213, 'super@g.com', '2', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-25 11:58:48'),
(214, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-25 11:59:11'),
(215, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-26 04:27:33'),
(216, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-26 04:27:47'),
(217, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-27 04:46:25'),
(218, 'super@g.com', '2', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-27 10:37:57'),
(219, 'super@g.com', '2', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-27 10:38:47'),
(220, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-27 10:39:21'),
(221, 'super@g.com', '2', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-27 11:07:48'),
(222, 'admin@g.com', '1', '::1', 'Chrome 119.0.0.0, Windows 10', '2023-11-27 11:08:34'),
(223, 'admin@g.com', '1', '::1', 'Chrome 126.0.0.0, Windows 10', '2024-07-08 11:03:12'),
(224, 'admin@g.com', '1', '::1', 'Chrome 126.0.0.0, Windows 10', '2024-07-09 04:45:13');

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
  `status` int(1) NOT NULL DEFAULT '1',
  `created_by_user_id` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Indexes for table `image_section`
--
ALTER TABLE `image_section`
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
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_about`
--
ALTER TABLE `admin_about`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_banner`
--
ALTER TABLE `admin_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `admin_enquiry`
--
ALTER TABLE `admin_enquiry`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_gallery`
--
ALTER TABLE `admin_gallery`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_hero_section`
--
ALTER TABLE `admin_hero_section`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `admin_news`
--
ALTER TABLE `admin_news`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_services`
--
ALTER TABLE `admin_services`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin_single_data`
--
ALTER TABLE `admin_single_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_submenu`
--
ALTER TABLE `admin_submenu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admin_summernote`
--
ALTER TABLE `admin_summernote`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_summernote1`
--
ALTER TABLE `admin_summernote1`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_summernote2`
--
ALTER TABLE `admin_summernote2`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_testimonial`
--
ALTER TABLE `admin_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `image_section`
--
ALTER TABLE `image_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
