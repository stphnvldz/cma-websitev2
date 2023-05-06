-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2023 at 01:21 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cma_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `eventname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `eventname`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Birthday ni Stephanie', 'Birthday ni Stephanie Valdez at gaganapin ngayong friday sa bahay nila.', '2023-04-23 06:38:02', '2023-04-23 06:38:02'),
(3, 'Bday nistep', 'birthday parin', '2023-04-25 20:51:26', '2023-04-25 20:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

DROP TABLE IF EXISTS `floors`;
CREATE TABLE IF NOT EXISTS `floors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `floornumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floordes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `floornumber`, `floordes`, `created_at`, `updated_at`) VALUES
(1, '1st Floor', 'Wet and Dry Market', '2023-04-21 21:00:18', '2023-04-21 21:00:18'),
(2, '2nd Floor', 'Necessities', '2023-04-25 20:59:19', '2023-04-25 20:59:19'),
(3, '3rd Floor', 'Others', '2023-05-01 06:31:59', '2023-05-01 06:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `lostandfound`
--

DROP TABLE IF EXISTS `lostandfound`;
CREATE TABLE IF NOT EXISTS `lostandfound` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `itemname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateoflost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lostandfound`
--

INSERT INTO `lostandfound` (`id`, `itemname`, `dateoflost`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bag', '04/22/2023', 'Brown bag with scarf at mukhang mamahalin at mabilis mag sold out.', '1682178103.jpeg', '2023-04-22 07:41:43', '2023-04-22 07:41:43'),
(2, 'Mikrokosmos Mood Lamp', '04/23/2023', 'Mukhang mamahalin at nag sold out agad kaya yung gumawa hindi nakabili at bumili na lang ng ibang mood lamp sa shopee', '1682179918.png', '2023-04-22 08:11:58', '2023-04-22 08:11:58'),
(3, 'air jordan 1', '04/22/2023', 'mahal pa sa buhay mo, secret', NULL, '2023-05-03 22:28:39', '2023-05-03 22:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_02_24_124526_add_role_as_to_users_table', 1),
(17, '2023_02_26_083959_create_tenant_table', 1),
(18, '2023_03_21_034431_create_floors_table', 1),
(19, '2023_03_23_112411_create_stalls_table', 1),
(20, '2023_04_21_135635_create_lostfound', 1),
(21, '2023_04_22_051525_create_lostandfound_table', 2),
(22, '2023_04_23_141650_create_announcement_table', 3),
(23, '2023_05_05_030039_create_rentstall_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('louisse@example.com', '$2y$10$c1VhwPrNgM2DZLInw72qbON3E0fvshQTtMTOMVYqmcx5L/Iwg8gla', '2023-05-06 04:16:29'),
('lozadazeesa@gmail.com', '$2y$10$xqM0y21PQ14j4mCjHkC7u.QUO4pDCB1TS4rj8WLhSTUTh7Tc9fCMe', '2023-05-06 04:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentstall`
--

DROP TABLE IF EXISTS `rentstall`;
CREATE TABLE IF NOT EXISTS `rentstall` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailadd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `stalltype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stallname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectedStallTextbox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalamount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentstall`
--

INSERT INTO `rentstall` (`id`, `fullname`, `dateofbirth`, `address`, `contact`, `emailadd`, `image`, `stalltype`, `stallname`, `payment`, `amount`, `selectedStallTextbox`, `totalamount`, `created_at`, `updated_at`) VALUES
(1, 'Min Yoongi', '03/09/1993', '1234 Suchwita', '09178906523', 'yg@example.com', 'yoongs.jpg', 'Regular', 'Mic Drop ni Yoongs', 'Monthly', '1500', '1-006', '1500', '2023-05-05 03:39:27', '2023-05-05 03:39:27'),
(2, 'Kim Taehyung', '12/30/1995', '123 asd', '0987564378', 'th@example.com', '20210827_125613.jpg', 'Regular', 'asd', 'Monthly', '1500', '2-003', '1500', '2023-05-06 04:29:37', '2023-05-06 04:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `stalls`
--

DROP TABLE IF EXISTS `stalls`;
CREATE TABLE IF NOT EXISTS `stalls` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `floornumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stallnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stalls`
--

INSERT INTO `stalls` (`id`, `floornumber`, `stallnumber`, `created_at`, `updated_at`) VALUES
(1, '1st Floor', '1-001', '2023-04-21 21:00:26', '2023-04-21 21:00:26'),
(2, '1st Floor', '1-002', '2023-04-25 20:59:09', '2023-04-25 20:59:09'),
(3, '2nd Floor', '2-001', '2023-04-25 20:59:26', '2023-04-25 20:59:26'),
(4, '2nd Floor', '2-002', '2023-04-25 20:59:33', '2023-04-25 20:59:33'),
(5, '2nd Floor', '2-003', '2023-04-25 20:59:39', '2023-04-25 20:59:39'),
(6, '3rd Floor', '3-001', '2023-05-01 06:32:10', '2023-05-01 06:32:10'),
(7, '3rd Floor', '3-002', '2023-05-01 06:35:13', '2023-05-01 06:35:13'),
(8, '1st Floor', '1-003', '2023-05-01 06:41:21', '2023-05-01 06:41:21'),
(9, '1st Floor', '1-004', '2023-05-01 06:41:26', '2023-05-01 06:41:26'),
(10, '3rd Floor', '3-003', '2023-05-01 07:05:17', '2023-05-01 07:05:17'),
(11, '1st Floor', '1-005', '2023-05-04 18:33:10', '2023-05-04 18:33:10'),
(12, '1st Floor', '1-006', '2023-05-04 18:39:22', '2023-05-04 18:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

DROP TABLE IF EXISTS `tenant`;
CREATE TABLE IF NOT EXISTS `tenant` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailadd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `fullname`, `dateofbirth`, `address`, `contact`, `emailadd`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Min Yoongi', '03/09/1993', '1234 Suchwita', '09178906523', 'yg@example.com', '1683290124.jpg', '2023-04-21 21:00:01', '2023-04-21 21:00:01'),
(2, 'Kim Taehyung', '12/30/1995', '143 tae my winter bear <3', '09897657541', 'th@example.com', '1682580243.jpg', '2023-04-26 23:24:03', '2023-04-26 23:24:03'),
(3, 'Kim Namjoon', '09/12/1994', '123 Best Leader-nim', '09876891621', 'nj@example.com', '1682580707.jpg', '2023-04-26 23:31:47', '2023-04-26 23:31:47'),
(4, 'Kim Seokjin', '12/04/1992', '143 I miss u my jinnie', '09897654178', 'sj@example.com', '1682580797.jpg', '2023-04-26 23:33:17', '2023-04-26 23:33:17'),
(5, 'Jeon Jungkook', '09/01/1995', '143 jk naglilive ng 5am :3', '09876546714', 'jk@example.com', '1682580863.jfif', '2023-04-26 23:34:23', '2023-04-26 23:34:23'),
(6, 'ralph vincent p. extra', '09/25/01', 'secret2291435', '09997080892', 'ralphpilarin@gmail.com', '1683181452.jpg', '2023-05-03 22:24:12', '2023-05-03 22:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'Louisse', 'louisse@example.com', NULL, '$2y$10$NhFx/U.NnS5twYebLhee9OKGnK7zeXpSEwNXuHrMIBO6K92DrMmvS', NULL, '2023-04-21 20:56:28', '2023-04-21 20:56:28', 0),
(2, 'Zeesa', 'lozadazeesa@gmail.com', NULL, '$2y$10$nrXEgB4i2NILwcO9qsPKSOBdx6EYtCS9GMydmRovvjrLZnauDBZ..', NULL, '2023-05-04 21:14:13', '2023-05-04 21:14:13', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
