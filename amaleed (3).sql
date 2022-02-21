-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 01:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amaleed`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_home`
--

CREATE TABLE `about_home` (
  `id` int(11) NOT NULL,
  `logo_company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_more` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_more_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedio_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_home`
--

INSERT INTO `about_home` (`id`, `logo_company`, `text_head`, `text_head_ar`, `text_more`, `text_more_ar`, `serv1_head`, `serv1_head_ar`, `serv1_text`, `serv1_text_ar`, `serv2_head`, `serv2_head_ar`, `serv2_text`, `serv2_text_ar`, `serv3_head`, `serv3_head_ar`, `serv3_text`, `serv3_text_ar`, `image`, `vedio_link`, `views`, `created_at`, `updated_at`) VALUES
(1, '61fdb27a683d74.24540437.jpg', 'Enim quis est voluptatibus aliquid consequatur fugiat', 'هل تستطيع المساعدة بترجمة هذا الموقع إلى لغات أخرى؟', 'Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.', 'للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن الخامس عشر في الأسفل. وتم أيضاً توفير الأقسام 1.10.32 و 1.10.33 من \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) لمؤلفه شيشيرون (Cicero) بصيغها الأصلية، مرفقة بالنسخ الإنكليزية لها والتي قام بترجمتها هـ.راكهام (H. Rackham) في عام 1914.', 'Neque porro quisquam est qui dolorem ipsum qu', 'يُستخدم في صناعات المطابع ودور النشر.', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'يُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من', 'Neque porro quisquam est qui dolorem ipsum qu', 'يُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم', 'يُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من', 'يُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من', 'Neque porro quisquam est qui', 'يُستخدم في صناعات المطابع ودور النشر', 'يُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من', 'يُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من', '61fdb2c98859d8.96058789.png', 'http://127.0.0.1:8000/web_assets/assets/img/bg-header/vdeio-header.mp4', 248, '2022-01-18 20:43:41', '2022-02-14 22:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `is_super` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `is_super`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'abdelrhman atwa', 'admin@gmail.com', NULL, '$2y$10$Eq9U3CBk1NIQDJ5OCZ5rF.VbQ10MbGhBGlpQNgUJi7U8HdJwleoba', NULL, NULL, '1', NULL, NULL, NULL, NULL, '2022-02-12 21:53:17'),
(3, 'abdelrhman', 'abdelrhmanatwa@gmail.com', NULL, '$2y$10$KKymMnjnm5FcdG1qvLPdqeX8P0lcRgDgH6bK1.28qfcH/7UKzqV1i', NULL, NULL, 'admin_restaurant', NULL, NULL, NULL, '2022-01-30 22:23:37', '2022-02-04 13:08:39'),
(4, 'ali', 'ali@GMAIL.COM', NULL, '$2y$10$F8PDAThSP4qWLplu5dyIz.3VFxtbZOtAQCOzilH5VlMyFcnMnkzS2', NULL, NULL, 'admin_restaurant', NULL, NULL, NULL, '2022-02-06 16:35:33', '2022-02-06 22:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `bg_sections_fitness_room`
--

CREATE TABLE `bg_sections_fitness_room` (
  `id` int(11) NOT NULL,
  `section2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_footer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bg_sections_fitness_room`
--

INSERT INTO `bg_sections_fitness_room` (`id`, `section2`, `section3`, `section4`, `section5`, `section_footer`, `created_at`, `updated_at`) VALUES
(1, '#ffffff', '#fafafa', '#ffffff', '#ebcde1', '#d291bc', '2022-02-09 00:01:35', '2022-02-08 22:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `bg_sections_homepage`
--

CREATE TABLE `bg_sections_homepage` (
  `id` int(11) NOT NULL,
  `section2` text COLLATE utf8mb4_unicode_ci,
  `section3` text COLLATE utf8mb4_unicode_ci,
  `section4` text COLLATE utf8mb4_unicode_ci,
  `section5` text COLLATE utf8mb4_unicode_ci,
  `section6` text COLLATE utf8mb4_unicode_ci,
  `section7` text COLLATE utf8mb4_unicode_ci,
  `section8` text COLLATE utf8mb4_unicode_ci,
  `section9` text COLLATE utf8mb4_unicode_ci,
  `section_footer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bg_sections_homepage`
--

INSERT INTO `bg_sections_homepage` (`id`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `section9`, `section_footer`, `created_at`, `updated_at`) VALUES
(1, '#ffffff', '#fafafa', '#1977cc', '#ffffff', '#1977cc', '#ffffff', '#1977cc', '#ffffff', '#f4f5fa', '2022-02-07 22:09:04', '2022-02-08 23:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `bg_sections_parking`
--

CREATE TABLE `bg_sections_parking` (
  `id` int(11) NOT NULL,
  `section1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_footer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bg_sections_parking`
--

INSERT INTO `bg_sections_parking` (`id`, `section1`, `section2`, `section3`, `section4`, `section_footer`, `created_at`, `updated_at`) VALUES
(1, '#0c0433', '#0c0433', '#0c0433', '#0c0433', '#06021f', '2022-02-09 01:23:01', '2022-02-08 23:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `bg_sections_restaurant`
--

CREATE TABLE `bg_sections_restaurant` (
  `id` int(11) NOT NULL,
  `section2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section8` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_footer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bg_sections_restaurant`
--

INSERT INTO `bg_sections_restaurant` (`id`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `section_footer`, `created_at`, `updated_at`) VALUES
(1, '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#0f172b', '2022-02-09 01:05:22', '2022-02-08 23:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `contactushome`
--

CREATE TABLE `contactushome` (
  `id` int(11) NOT NULL,
  `location_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_address_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactushome`
--

INSERT INTO `contactushome` (`id`, `location_map`, `location_address`, `location_address_ar`, `email`, `phone`, `facebook`, `twitter`, `insta`, `linkedin`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3577.6470085357023!2d50.2215719!3d26.2731175!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49c34a8b2e339d%3A0x5acd45bdc10daca8!2z2KzYstmK2LHYqSDYp9mE2K_YutmK2KvYsQ!5e0!3m2!1sar!2seg!4v1642979845276!5m2!1sar!2seg\" width=\"450px\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'ea beatae. Consequuntur quaerat assumenda', 'شارع احمد عرابي', 'admin@gmail.com', '01224078648', 'ea beatae. Consequuntur quaerat assumenda', 'ea beatae. Consequuntur quaerat assumenda', 'ea beatae. Consequuntur quaerat assumenda', 'ea beatae. Consequuntur quaerat assumenda', '01224078648', '2022-01-23 23:16:46', '2022-02-06 23:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_department` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_department_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `image`, `department`, `department_ar`, `desc_department`, `desc_department_ar`, `link`, `created_at`, `updated_at`) VALUES
(1, '61ec6ccca7dc86.29578323.jpg', 'Sequi totam', 'سوق المحمودية', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,', 'الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى', '', '2022-01-22 18:22:02', '2022-01-26 23:09:26'),
(2, '61f1c1a1ddde50.89730385.jpg', 'Aut dicta autem', 'حقيقة مثبتة منذ زمن طويل', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,', 'الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأن', '', '2022-01-26 19:48:17', '2022-01-26 23:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fitness_room_contactus`
--

CREATE TABLE `fitness_room_contactus` (
  `id` int(11) NOT NULL,
  `site_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_description_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fitness_room_contactus`
--

INSERT INTO `fitness_room_contactus` (`id`, `site_description`, `site_description_ar`, `facebook`, `twitter`, `insta`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '203 Fake St. Mountain View, San Francisco, California, USA\r\n', '203 شارع فيك ماونتن فيو ، سان فرانسيسكو ، كاليفورنيا ، الولايات المتحدة الأمريكية', 'facebook', 'twitter', 'insta', '011111111', 'email@gmail.com', '2022-02-01 11:52:15', '2022-02-01 11:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_room_header`
--

CREATE TABLE `fitness_room_header` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fitness_room_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fitness_room_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_anim1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_anim1_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_anim2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_anim2_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_anim3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_anim3_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_more` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_more_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fitness_room_header`
--

INSERT INTO `fitness_room_header` (`id`, `image`, `fitness_room_name`, `fitness_room_name_ar`, `text_head_anim1`, `text_head_anim1_ar`, `text_head_anim2`, `text_head_anim2_ar`, `text_head_anim3`, `text_head_anim3_ar`, `text_more`, `text_more_ar`, `views`, `created_at`, `updated_at`) VALUES
(1, '61f8785b06b119.52548136.jpg', 'YOGALAX', 'يوغا لاكس', 'Inspiration For Joyful Living.', 'إلهام لحياة سعيدة.', 'Effective Therapy Against Stress.', 'علاج فعال ضد الإجهاد.', 'Flexibility is A Second Power.', 'المرونة قوة ثانية.', 'Do Yoga today for a better tomorrow', 'مارس اليوجا اليوم من أجل غد أفضل', 71, '2022-01-31 23:16:21', '2022-02-14 21:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_room_images`
--

CREATE TABLE `fitness_room_images` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fitness_room_levels`
--

CREATE TABLE `fitness_room_levels` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fitness_room_levels`
--

INSERT INTO `fitness_room_levels` (`id`, `image`, `text_head`, `text_head_ar`, `text_desc`, `text_desc_ar`, `created_at`, `updated_at`) VALUES
(4, '61fda971b3db06.57435336.jpg', 'Yoga For Beginners', 'اليوجا للمبتدئين', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة.', '2022-02-04 20:32:17', '2022-02-04 20:32:17'),
(5, '61fda9a24e7bb0.44623252.jpg', 'Yoga For Pregnant', 'اليوغا للحوامل', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة.', '2022-02-04 20:33:06', '2022-02-04 20:33:06'),
(6, '61fda9dad5cb63.82042742.jpg', 'Bikram Yoga', 'بيكرام يوجا', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة.', '2022-02-04 20:34:02', '2022-02-04 20:34:02'),
(7, '61fda9ffa7ec06.61922076.jpg', 'Yoga Barre', 'يوجا بري', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة.', '2022-02-04 20:34:39', '2022-02-04 20:34:39'),
(8, '61fdaa53e42e28.83093807.jpg', 'Yoga For Couples', 'اليوغا للأزواج', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة.', '2022-02-04 20:36:03', '2022-02-04 20:36:03'),
(9, '61fdaa9f422578.92980032.jpg', 'Body & Mind Balance', 'أسلوب حياة صحي', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة.', '2022-02-04 20:37:19', '2022-02-04 20:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_room_section2`
--

CREATE TABLE `fitness_room_section2` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_more` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_more_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv4_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv4_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv5_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv5_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fitness_room_section2`
--

INSERT INTO `fitness_room_section2` (`id`, `image`, `text_head`, `text_head_ar`, `text_more`, `text_more_ar`, `serv1_text`, `serv1_text_ar`, `serv2_text`, `serv2_text_ar`, `serv3_text`, `serv3_text_ar`, `serv4_text`, `serv4_text_ar`, `serv5_text`, `serv5_text_ar`, `created_at`, `updated_at`) VALUES
(1, '61f87ced0ef930.04374711.jpg', 'Why You Should Go To Yoga', 'لماذا يجب أن تذهب إلى اليوجا', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'بعيدًا ، خلف كلمة الجبال ، بعيدًا عن بلاد فوكاليا وكونسونانتيا ، تعيش النصوص العمياء. منفصلان يعيشون في Bookmarksgrove مباشرة على ساحل Semantics ، وهو محيط لغوي كبير.', 'Yoga boosts brain power', 'اليوغا تعزز قوة الدماغ', 'Yoga helps you to breathe better', 'تساعدك اليوجا على التنفس بشكل أفضل', 'Yoga improves your strength', 'تعمل اليوجا على تحسين قوتك', 'Yoga helps you to focus', 'اليوغا تساعدك على التركيز', 'Yoga helps give meaning to your day', 'تساعد اليوجا في إعطاء معنى ليومك', '2022-02-01 00:14:38', '2022-01-31 22:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_room_services`
--

CREATE TABLE `fitness_room_services` (
  `id` int(11) NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fitness_room_services`
--

INSERT INTO `fitness_room_services` (`id`, `icon`, `text_head`, `text_head_ar`, `text_desc`, `text_desc_ar`, `created_at`, `updated_at`) VALUES
(2, 'fa fa-user', 'Healthy Lifestyle', 'أسلوب حياة صحي', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة. إنها دولة الفردوسية', '2022-01-31 23:04:47', '2022-01-31 23:04:47'),
(3, 'flaticon-lotus', 'Body & Mind Balance', 'توازن الجسم والعقل', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة. إنها دولة الفردوسية', '2022-02-04 20:28:35', '2022-02-04 20:28:35'),
(4, 'flaticon-meditation', 'Meditation Practice', 'ممارسة التأمل', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة. إنها دولة الفردوسية', '2022-02-04 20:29:43', '2022-02-04 20:29:43'),
(5, 'flaticon-lotus-1', 'Edeology', 'إيديولوجيا', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'يتدفق نهر صغير يُدعى Duden من مكانه ويمدها بالراحة اللازمة. إنها دولة الفردوسية', '2022-02-04 20:30:56', '2022-02-04 20:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_room_stories`
--

CREATE TABLE `fitness_room_stories` (
  `id` int(11) NOT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_view` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_view_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fitness_room_stories`
--

INSERT INTO `fitness_room_stories` (`id`, `user_name`, `user_name_ar`, `user_img`, `text_view`, `text_view_ar`, `created_at`, `updated_at`) VALUES
(1, 'Gabby Smith', 'غابي سميث', '61fda7879ab386.87427228.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'بعيدًا ، خلف كلمة الجبال ، بعيدًا عن بلاد فوكاليا وكونسونانتيا ، تعيش النصوص العمياء.', '2022-02-04 20:24:07', '2022-02-04 20:24:07'),
(2, 'Floyd Weather', 'فلويد مايويذر جونيور', '61fda7c6c51654.81031342.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'بعيدًا ، خلف كلمة الجبال ، بعيدًا عن بلاد فوكاليا وكونسونانتيا ، تعيش النصوص العمياء.', '2022-02-04 20:25:10', '2022-02-04 20:25:10'),
(3, 'James Dee', 'جيمس دي', '61fda809c605e2.49638387.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'بعيدًا ، خلف كلمة الجبال ، بعيدًا عن بلاد فوكاليا وكونسونانتيا ، تعيش النصوص العمياء.', '2022-02-04 20:26:17', '2022-02-04 20:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `galleryhome`
--

CREATE TABLE `galleryhome` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleryhome`
--

INSERT INTO `galleryhome` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '61edcc0360bb61.11443660.jpg', '2022-01-23 19:43:31', '2022-01-23 19:43:31'),
(3, '61edcc0383a577.18792534.jpg', '2022-01-23 19:43:31', '2022-01-23 19:43:31'),
(4, '61edcc03af1b16.55568206.jpg', '2022-01-23 19:43:31', '2022-01-23 19:43:31'),
(6, '61edd18ccc9017.32677012.jpg', '2022-01-23 20:07:08', '2022-01-23 20:07:08'),
(7, '61edd18ce632f3.29402307.jpg', '2022-01-23 20:07:08', '2022-01-23 20:07:08'),
(11, '61edd18d8f89c6.39988541.jpg', '2022-01-23 20:07:09', '2022-01-23 20:07:09'),
(13, '61edd18dd69650.34915225.jpg', '2022-01-23 20:07:09', '2022-01-23 20:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `headerhomecontent`
--

CREATE TABLE `headerhomecontent` (
  `id` int(11) NOT NULL,
  `welcome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcome_ar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_More` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_More_ar` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedio` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headerhomecontent`
--

INSERT INTO `headerhomecontent` (`id`, `welcome`, `welcome_ar`, `text_More`, `text_More_ar`, `vedio`, `created_at`, `updated_at`) VALUES
(1, 'Aldughaither Island', 'جزيره الدغيثر', 'An island that gathers the city\'s top cafés, restaurants and more.', 'ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف', 'http://127.0.0.1:8000/web_assets/assets/img/bg-header/vdeio-header.mp4', '2022-01-17 23:16:24', '2022-01-17 21:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2022_01_14_145958_create_sessions_table', 2),
(7, '2022_01_15_021355_create_admins_table', 3),
(8, '2014_10_12_200000_add_two_factor_columns_to_admins_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `id` int(11) NOT NULL,
  `parking_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking_desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`id`, `parking_name`, `parking_name_ar`, `parking_desc`, `parking_desc_ar`, `parking_img`, `created_at`, `updated_at`) VALUES
(1, 'Donald Ortiz', 'موقف العبور', 'Parking Description Parking Description Parking Description Parking Description Parking Description Parking Description Parking Description Parking Description Parking Description', 'الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأن', '61fa5a2f786062.14348746.jpg', '2022-02-02 08:17:19', '2022-02-02 08:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `parking_about_us`
--

CREATE TABLE `parking_about_us` (
  `id` int(11) NOT NULL,
  `about_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking_about_us`
--

INSERT INTO `parking_about_us` (`id`, `about_desc`, `about_desc_ar`, `video`, `image_video`, `facebook`, `twitter`, `insta`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Parking Description Parking Description Parking Description Parking Description Parking Description Parking Description Parking Description Parking Description Parking Description', 'الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأن', 'https://www.youtube.com/watch?v=JWt5_NJuhME', 'pngtree-snow-scene-on-parking-car-image_863617.jpg', 'asd', 'asd', 'asd', 'email@gmail.com', 'asd', '2022-02-02 02:03:13', '2022-02-02 00:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `parking_services`
--

CREATE TABLE `parking_services` (
  `id` int(11) NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking_services`
--

INSERT INTO `parking_services` (`id`, `icon`, `serv_name`, `serv_name_ar`, `serv_desc`, `serv_desc_ar`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-user', 'Patrick Schiller', 'خدمه الموقف', 'Eius natus quis sed debitis. Quo culpa consequatur ut impedit. Ea voluptates mollitia dolore possimus quis aut facilis est. Facilis veniam qui esse dolore', 'Revo هو أول تطبيق سطح مكتب يساعد مصممي الويب والمطورين على إنشاء تخطيطات جميلة وفعالة لمشاريعهم عبر الإنترنت', '2022-02-02 21:58:06', '2022-02-02 21:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `partnershome`
--

CREATE TABLE `partnershome` (
  `id` int(11) NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnershome`
--

INSERT INTO `partnershome` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(3, '61ef23e69291b5.94649129.jpg', '2022-01-24 20:10:46', '2022-01-24 20:10:46'),
(4, '61ef2bf8a66315.61076757.png', '2022-01-24 20:45:12', '2022-01-24 20:45:12'),
(5, '61f1d4e7d19260.96438537.jpg', '2022-01-26 21:10:31', '2022-01-26 21:10:31'),
(6, '61f1d4e7ede4c8.55858407.jpg', '2022-01-26 21:10:31', '2022-01-26 21:10:31'),
(7, '61f1d4e81de350.59863688.jpg', '2022-01-26 21:10:32', '2022-01-26 21:10:32'),
(8, '61f1d4e83c6842.94612301.jpg', '2022-01-26 21:10:32', '2022-01-26 21:10:32'),
(9, '61f1d4e858bab8.69724533.jpg', '2022-01-26 21:10:32', '2022-01-26 21:10:32'),
(10, '61f1d4e88b44f1.86395365.jpg', '2022-01-26 21:10:32', '2022-01-26 21:10:32'),
(11, '61f1d4e8c1f5b3.15551369.jpg', '2022-01-26 21:10:32', '2022-01-26 21:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `product_name`, `product_name_ar`, `product_description`, `product_description_ar`, `price`, `Restaurant_id`, `created_at`, `updated_at`) VALUES
(1, '61f5b8269497f6.71173114.jpg', 'Ken Legros', 'منتج جديد', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli adipisci veli', 'شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ', '120', 11, '2022-01-29 19:13:35', '2022-01-29 19:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `proposals_amaleed`
--

CREATE TABLE `proposals_amaleed` (
  `id` int(11) NOT NULL,
  `proposal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_proposals` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_proposals_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals_amaleed`
--

INSERT INTO `proposals_amaleed` (`id`, `proposal`, `proposal_ar`, `desc_proposals`, `desc_proposals_ar`, `created_at`, `updated_at`) VALUES
(1, 'Dicta enim', 'حقيقة مثبتة منذ زمن طويل', 'Autem rerum voluptas velit nulla molestias placeat. Iste quam voluptas libero sapiente impedit. Earum necessitatibus qui provident distinctio aut omnis sequi.', 'الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَالشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ', '2022-01-22 21:23:40', '2022-01-22 21:29:06'),
(2, 'Aut dolorum adipisci', 'حقيقة مثبتة منذ زمن طويل', 'Iste animi quae tenetur. Quia numquam aut voluptatem labore aliquam nostrum voluptatibus. Modi harum occaecati magni ut quod. Nihil consequatur blanditiis. Facilis ratione aut maxime. Dignissimos nihil culpa temporibus eos enim ipsa.', 'الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَالشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ', '2022-01-26 20:33:41', '2022-01-26 20:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `answer` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_under_question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_under_question_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv1_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv2_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_head` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_head_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv3_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `answer`, `answer_ar`, `text_under_question`, `text_under_question_ar`, `serv1_head`, `serv1_head_ar`, `serv1_text`, `serv1_text_ar`, `serv2_head`, `serv2_head_ar`, `serv2_text`, `serv2_text_ar`, `serv3_head`, `serv3_head_ar`, `serv3_text`, `serv3_text_ar`, `created_at`, `updated_at`) VALUES
(1, 'Why Choose..', 'لماذا تختار..', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.', 'ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف', 'Neque porro quisquam', 'لوريم إيبسوم', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', '\"لا أحد يحب الألم بذاته، يسعى ورائه أو يبتغيه، ببساطة لأنه الألم... \"', 'consectetur', 'لوريم إيبسوم', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', '\"لا أحد يحب الألم بذاته، يسعى ورائه أو يبتغيه، ببساطة لأنه الألم... \"', 'consectetur', 'لوريم إيبسوم', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', '\"لا أحد يحب الألم بذاته، يسعى ورائه أو يبتغيه، ببساطة لأنه الألم... \"', '2022-01-18 20:57:51', '2022-02-05 21:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_img_bg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `logo`, `name`, `name_ar`, `description`, `description_ar`, `main_image`, `main_img_bg`, `experience`, `email`, `phone`, `facebook`, `twitter`, `insta`, `linkedin`, `whatsapp`, `admin_id`, `created_at`, `updated_at`) VALUES
(11, '61f33bd13e5d17.09961237.jpg', 'Osborne Reilly', 'مطعم الاسماك', 'Enim quibusdam dicta consequatur sit. Accusantium sit rerum doloremque et incidunt nemo. Vel et voluptatum voluptatem eum labore vel et. Beatae officiis velit. Rerum placeat numquam consequatur numquam illo. Amet expedita voluptatem iure ea dolor error molestiae.', 'الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي', '61f4865ac34729.92333413.png', '61f310ec46ce53.30989927.jpg', '55', 'your.email+fakedata18238@gmail.com', '669-377-5854', 'Omnis ea incidunt sed.', 'Quibusdam veniam recusandae.', 'Idaho', 'Provident est vitae est facilis hic unde debitis consequatur velit.', '742-590-8850', 1, '2022-01-27 21:38:52', '2022-01-29 00:13:36'),
(12, '6200153914e405.11078839.jpg', 'Celestine Feeney', 'Elyssa Jast', 'Vero ab veniam quisquam tenetur repudiandae ducimus quidem doloremque reiciendis. Odio sunt et alias quis et minima sint in. Quaerat quod impedit atque eos autem pariatur sed earum sapiente. Voluptatem perferendis atque maiores quas est.', 'Aliquid saepe deserunt. Praesentium eos voluptas ut voluptates est. Sapiente incidunt velit qui et quisquam quae ut quaerat. Vero et facere aperiam nemo autem harum expedita.', '62001539171680.41641420.jpg', '6200153918cc18.16043817.jpg', '11', 'your.email+fakedata63279@gmail.com', '235-207-2568', 'Id mollitia recusandae.', 'Consectetur voluptate perferendis odio.', 'Texas', 'Culpa est corporis sequi.', '765-131-7338', 4, '2022-02-06 18:36:41', '2022-02-06 18:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_chefs`
--

CREATE TABLE `restaurant_chefs` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chef_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chef_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Specialization` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Specialization_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_chefs`
--

INSERT INTO `restaurant_chefs` (`id`, `image`, `chef_name`, `chef_name_ar`, `Specialization`, `Specialization_ar`, `facebook`, `twitter`, `insta`, `Restaurant_id`, `created_at`, `updated_at`) VALUES
(2, '61f59852c94078.63273470.jpg', 'Erica Effertz', 'علي محمد', 'driver', 'سواق', 'https://www.facebook.com/abdelrhman.atwa.7', 'https://www.facebook.com/abdelrhman.atwa.7', 'https://www.facebook.com/abdelrhman.atwa.7', 11, '2022-01-28 18:45:23', '2022-01-29 17:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_images`
--

CREATE TABLE `restaurant_images` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_images`
--

INSERT INTO `restaurant_images` (`id`, `image`, `Restaurant_id`, `created_at`, `updated_at`) VALUES
(1, '61f310ec900d78.29187587.jpg', 11, '2022-01-27 19:38:52', '2022-01-27 19:38:52'),
(2, '61f310eced9042.43646077.jpg', 11, '2022-01-27 19:38:52', '2022-01-27 19:38:52'),
(5, '61f310ed6e2102.36837167.jpg', 11, '2022-01-27 19:38:53', '2022-01-27 19:38:53'),
(6, '61f5a243d80a05.67961805.jpg', 11, '2022-01-29 18:23:31', '2022-01-29 18:23:31'),
(7, '61f5a243f12fe9.34653805.jpg', 11, '2022-01-29 18:23:31', '2022-01-29 18:23:31'),
(8, '61f5a2441f3a68.17881448.jpg', 11, '2022-01-29 18:23:32', '2022-01-29 18:23:32'),
(9, '61f5a244566825.41808052.jpg', 11, '2022-01-29 18:23:32', '2022-01-29 18:23:32'),
(10, '62001539378f86.31257356.jpg', 12, '2022-02-06 16:36:41', '2022-02-06 16:36:41'),
(11, '62001539580881.27229336.jpg', 12, '2022-02-06 16:36:41', '2022-02-06 16:36:41'),
(12, '620015398e7ac1.07865108.jpg', 12, '2022-02-06 16:36:41', '2022-02-06 16:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_menu`
--

CREATE TABLE `restaurant_menu` (
  `id` int(11) NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_cat_id` int(11) NOT NULL,
  `Restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_menu`
--

INSERT INTO `restaurant_menu` (`id`, `product_name`, `product_name_ar`, `image`, `description`, `description_ar`, `price`, `menu_cat_id`, `Restaurant_id`, `created_at`, `updated_at`) VALUES
(3, 'Krista Gibson', 'منتج جديد', '62066d7784d388.86713213.jpg', 'طي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها', 'طي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها', '5998', 1, 12, '2022-02-11 12:06:47', '2022-02-11 12:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_menu_category`
--

CREATE TABLE `restaurant_menu_category` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_menu_category`
--

INSERT INTO `restaurant_menu_category` (`id`, `name`, `name_ar`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Drinks', 'مشروبات', 'fas fa-coffee', '2022-01-28 21:54:37', '2022-01-28 21:54:37'),
(2, 'Fast food', 'الوجبات السريعه', 'fa fa-hamburger', '2022-01-29 01:20:32', '2022-01-29 01:20:32'),
(3, 'Diverse Food', 'طعام متنوع', 'fa fa-utensils', '2022-01-29 01:21:28', '2022-01-29 01:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_services`
--

CREATE TABLE `restaurant_services` (
  `id` int(11) NOT NULL,
  `services_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_desc_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_name_ar` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_name`, `services_name_ar`, `services_desc`, `services_desc_ar`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'Jody Goldner', 'لوريم إيبسوم لأنها تعطي', 'Non qui odit ut eveniet itaque ut rem voluptatum quis. Sint fugiat sit nobis. Quasi ipsam praesentium. Qui omnis laudantium dolore explicabo odit pariatur ex ipsa. Earum quas occaecati qui vitae. Et quaerat quam nihil.', 'الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأن', 'icon-user-follow', '2022-01-20 21:40:53', '2022-01-26 22:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3qEzfHTtaCE7rirZymo2J4XwifIU9dhDT5sgkYmH', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZkF0ZWx0NUdVeHNKYjk1aHVDRURrUlV2TnE5WTNMd0F1MjVUMUNZYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3QvbmV3X2FtYWxlZWQiO31zOjk6ImFwcGxvY2FsZSI7czoyOiJhciI7fQ==', 1644883763),
('AwyvZDXl7O57rLuQTnLxhiQZw3Dvh4hQa6nf6EjQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidXlnakNjTUd3cHVPdnpNUDBrNGVBZ3ExVktaUTV5V21aMDdPY056TSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvbmV3X2FtYWxlZWQvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1644882457);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'abdelrhman Hassan', 'abdelrhmanatwa39@gmail.com', NULL, '$2y$10$lOoRym.hLjJqlKUnDdEfEO14GmIEnrbuOMhjlk96rm4kUKv.0Y5Um', NULL, NULL, 'sEIe31IvX1VMJAvwDL3HsGIk9ql595uMTkg3seqM7QCc34JqK8CAkUSEejp3', '2022-02-04 15:03:46', '2022-02-14 20:36:01'),
(3, 'abdelrhman Hassan', 'abdelrhmanatwa@gmail.com', NULL, '$2y$10$Qb8pHAEuzL48cEsbDcDiz.u8Nox4MRNSQcQgZOKg5WM/1zE2UAJxu', NULL, NULL, NULL, '2022-02-06 15:46:16', '2022-02-06 15:46:16'),
(4, 'abdelrhman Hassan', 'abdelrhmanatwa12@gmail.com', NULL, '$2y$10$rR44.hPbdWQsjnW9NJ3ROux26tjvgtGYNNauyi4Me7dzRYtH/mC0q', NULL, NULL, NULL, '2022-02-06 23:21:18', '2022-02-06 23:21:18'),
(5, 'Anne Von', 'your.email+fakedata45659@gmail.com', NULL, '$2y$10$BoD/arXgHXzHNH078sYG2ufm8MIq0m/51uhYI6nmsZBdb45uULjxS', NULL, NULL, NULL, '2022-02-06 23:30:19', '2022-02-06 23:30:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_home`
--
ALTER TABLE `about_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bg_sections_fitness_room`
--
ALTER TABLE `bg_sections_fitness_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_sections_homepage`
--
ALTER TABLE `bg_sections_homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_sections_parking`
--
ALTER TABLE `bg_sections_parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_sections_restaurant`
--
ALTER TABLE `bg_sections_restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactushome`
--
ALTER TABLE `contactushome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fitness_room_contactus`
--
ALTER TABLE `fitness_room_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness_room_header`
--
ALTER TABLE `fitness_room_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness_room_images`
--
ALTER TABLE `fitness_room_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness_room_levels`
--
ALTER TABLE `fitness_room_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness_room_section2`
--
ALTER TABLE `fitness_room_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness_room_services`
--
ALTER TABLE `fitness_room_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness_room_stories`
--
ALTER TABLE `fitness_room_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryhome`
--
ALTER TABLE `galleryhome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headerhomecontent`
--
ALTER TABLE `headerhomecontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_about_us`
--
ALTER TABLE `parking_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_services`
--
ALTER TABLE `parking_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnershome`
--
ALTER TABLE `partnershome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rest_relation` (`Restaurant_id`);

--
-- Indexes for table `proposals_amaleed`
--
ALTER TABLE `proposals_amaleed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_chefs`
--
ALTER TABLE `restaurant_chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_images`
--
ALTER TABLE `restaurant_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Restaurant_id` (`Restaurant_id`);

--
-- Indexes for table `restaurant_menu`
--
ALTER TABLE `restaurant_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menuCat` (`menu_cat_id`),
  ADD KEY `rest_id` (`Restaurant_id`);

--
-- Indexes for table `restaurant_menu_category`
--
ALTER TABLE `restaurant_menu_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_services`
--
ALTER TABLE `restaurant_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Restaurant_id` (`Restaurant_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_home`
--
ALTER TABLE `about_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bg_sections_fitness_room`
--
ALTER TABLE `bg_sections_fitness_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bg_sections_homepage`
--
ALTER TABLE `bg_sections_homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bg_sections_parking`
--
ALTER TABLE `bg_sections_parking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bg_sections_restaurant`
--
ALTER TABLE `bg_sections_restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactushome`
--
ALTER TABLE `contactushome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fitness_room_contactus`
--
ALTER TABLE `fitness_room_contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fitness_room_header`
--
ALTER TABLE `fitness_room_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fitness_room_images`
--
ALTER TABLE `fitness_room_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fitness_room_levels`
--
ALTER TABLE `fitness_room_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fitness_room_section2`
--
ALTER TABLE `fitness_room_section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fitness_room_services`
--
ALTER TABLE `fitness_room_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fitness_room_stories`
--
ALTER TABLE `fitness_room_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleryhome`
--
ALTER TABLE `galleryhome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `headerhomecontent`
--
ALTER TABLE `headerhomecontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parking_about_us`
--
ALTER TABLE `parking_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parking_services`
--
ALTER TABLE `parking_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partnershome`
--
ALTER TABLE `partnershome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proposals_amaleed`
--
ALTER TABLE `proposals_amaleed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `restaurant_chefs`
--
ALTER TABLE `restaurant_chefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurant_images`
--
ALTER TABLE `restaurant_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `restaurant_menu`
--
ALTER TABLE `restaurant_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurant_menu_category`
--
ALTER TABLE `restaurant_menu_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurant_services`
--
ALTER TABLE `restaurant_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `rest_relation` FOREIGN KEY (`Restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_menu`
--
ALTER TABLE `restaurant_menu`
  ADD CONSTRAINT `menuCat` FOREIGN KEY (`menu_cat_id`) REFERENCES `restaurant_menu_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rest_id` FOREIGN KEY (`Restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_services`
--
ALTER TABLE `restaurant_services`
  ADD CONSTRAINT `Relation_Restaurant` FOREIGN KEY (`Restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
