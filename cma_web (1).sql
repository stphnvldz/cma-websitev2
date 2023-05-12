-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2023 at 03:25 AM
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `floornumber`, `floordes`, `created_at`, `updated_at`) VALUES
(1, '1st Floor', '1-001', '2023-05-11 11:45:26', '2023-05-11 11:45:26');

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
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(106, '2014_10_12_000000_create_users_table', 8),
(107, '2014_10_12_100000_create_password_reset_tokens_table', 8),
(108, '2014_10_12_100000_create_password_resets_table', 8),
(109, '2019_08_19_000000_create_failed_jobs_table', 8),
(110, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(111, '2023_02_24_124526_add_role_as_to_users_table', 8),
(17, '2023_02_26_083959_create_tenant_table', 1),
(112, '2023_03_21_034431_create_floors_table', 8),
(113, '2023_03_23_112411_create_stalls_table', 8),
(20, '2023_04_21_135635_create_lostfound', 1),
(88, '2023_04_22_051525_create_lostandfound_table', 7),
(89, '2023_04_23_141650_create_announcement_table', 7),
(24, '2023_05_07_004642_create_payment_table', 5),
(25, '2023_05_07_015457_create_payment_table', 6),
(114, '2023_05_05_030039_create_rentstall_table', 8),
(115, '2023_05_07_023331_create_payment_table', 8),
(116, '2023_05_07_023331_create_tenant_bills_table', 8),
(117, '2023_05_10_152706_create_requirements_table', 8),
(118, '2023_05_11_153954_create_announcement_table', 8),
(119, '2023_05_11_155011_create_lostandfound_table', 8);

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
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenant_bills_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stallnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datefrom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `refnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `tenant_bills_id`, `fullname`, `stallnumber`, `email`, `contact`, `type`, `amount`, `datefrom`, `dateto`, `payment`, `image`, `refnumber`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'Zeesa', '1-003', 'btssvtenhatxt12@gmail.com', '09123443212', 'Monthly', '4000', '2023-05-01', '2023-05-31', 'gcash', 'code.png', '3009706943190', 'Pending', '2023-05-11 13:05:35', '2023-05-11 13:05:35'),
(2, '1', 'Zeesa', '1-003', 'asd@gmail.com', '09123443212', 'Monthly', '4000', '2023-05-01', '2023-05-31', 'cash', NULL, 'cash', 'Pending', '2023-05-11 13:15:55', '2023-05-11 13:15:55');

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
  `is_archived` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentstall`
--

INSERT INTO `rentstall` (`id`, `fullname`, `dateofbirth`, `address`, `contact`, `emailadd`, `image`, `stalltype`, `stallname`, `payment`, `amount`, `selectedStallTextbox`, `totalamount`, `is_archived`, `created_at`, `updated_at`) VALUES
(1, 'asd', '12/30/2002', 'asd', '09123456789', 'asd@gmail.com', '28a931afbd577ef000145d42b1a1cc60.jpg', 'Regular', 'asda', 'Monthly', '4000', '1-001', '4000', 0, '2023-05-11 11:47:28', '2023-05-11 11:47:28'),
(2, 'das', '09/01/1995', 'sdhj', '09987654321', 'das@gmail.com', '23160b59313a14fc7222c4c68e3cb6b2.jpg', 'Regular', 'asdasd', 'Daily', '133', '1-002', '133', 0, '2023-05-11 11:48:35', '2023-05-11 11:48:35'),
(3, 'Zeesa', '12/30/2002', 'aasdq`', '09123443212', 'btssvtenhatxt12@gmail.com', NULL, 'Regular', 'Easd', 'Monthly', '4000', '1-003', '4000', 0, '2023-05-11 12:11:06', '2023-05-11 12:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
CREATE TABLE IF NOT EXISTS `requirements` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `requirements` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stalls`
--

INSERT INTO `stalls` (`id`, `floornumber`, `stallnumber`, `created_at`, `updated_at`) VALUES
(1, '1st Floor', '1-001', '2023-05-11 11:46:12', '2023-05-11 11:46:12'),
(2, '1st Floor', '1-002', '2023-05-11 11:46:22', '2023-05-11 11:46:22'),
(3, '1st Floor', '1-003', '2023-05-11 12:09:53', '2023-05-11 12:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_bills`
--

DROP TABLE IF EXISTS `tenant_bills`;
CREATE TABLE IF NOT EXISTS `tenant_bills` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `rentstall_id` int NOT NULL,
  `notice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant_bills`
--

INSERT INTO `tenant_bills` (`id`, `rentstall_id`, `notice`, `description`, `date_from`, `date_to`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Atasha Bill', 'Pay immediately!', '2023-05-01', '2023-05-31', '4000', 'Unpaid', '2023-05-11 12:12:27', '2023-05-11 12:12:27'),
(2, 1, 'asd', 'dsa', '2023-05-12', '2023-05-13', '4000', 'Paid', '2023-05-11 12:15:08', '2023-05-11 12:15:08'),
(3, 2, 'asd', 'dsa', '2023-05-12', '2023-05-13', '133', 'Paid', '2023-05-11 12:15:08', '2023-05-11 12:15:08'),
(4, 3, 'asd', 'dsa', '2023-05-12', '2023-05-13', '4000', 'Paid', '2023-05-11 12:15:08', '2023-05-11 12:15:08'),
(5, 1, 'Monthly Bill', 'Pay or pay?!', '2023-05-14', '2023-05-15', '4000', 'Paid', '2023-05-11 12:17:30', '2023-05-11 12:17:30'),
(6, 2, 'Monthly Bill', 'Pay or pay?!', '2023-05-14', '2023-05-15', '133', 'Paid', '2023-05-11 12:17:30', '2023-05-11 12:17:30'),
(7, 3, 'Monthly Bill', 'Pay or pay?!', '2023-05-14', '2023-05-15', '4000', 'Pending', '2023-05-11 12:17:30', '2023-05-11 12:17:30'),
(8, 1, 'qwe', 'ewq', '2023-05-15', '2023-05-16', '4000', 'Paid', '2023-05-11 12:19:49', '2023-05-11 12:19:49'),
(9, 2, 'qwe', 'ewq', '2023-05-15', '2023-05-16', '133', 'Pending', '2023-05-11 12:19:49', '2023-05-11 12:19:49'),
(10, 3, 'qwe', 'ewq', '2023-05-15', '2023-05-16', '4000', 'Paid', '2023-05-11 12:19:49', '2023-05-11 12:19:49'),
(11, 1, 'zxc', 'cxz', '2023-05-01', '2023-05-02', '4000', 'Pending', '2023-05-11 12:21:23', '2023-05-11 12:21:23'),
(12, 2, 'zxc', 'cxz', '2023-05-01', '2023-05-02', '133', 'Pending', '2023-05-11 12:21:23', '2023-05-11 12:21:23'),
(13, 3, 'zxc', 'cxz', '2023-05-01', '2023-05-02', '4000', 'Pending', '2023-05-11 12:21:23', '2023-05-11 12:21:23'),
(14, 1, 'vbn', 'nbv', '2023-05-12', '2023-05-31', '4000', 'Pending', '2023-05-11 12:32:30', '2023-05-11 12:32:30'),
(15, 2, 'vbn', 'nbv', '2023-05-12', '2023-05-31', '133', 'Pending', '2023-05-11 12:32:30', '2023-05-11 12:32:30'),
(16, 3, 'vbn', 'nbv', '2023-05-12', '2023-05-31', '4000', 'Pending', '2023-05-11 12:32:30', '2023-05-11 12:32:30'),
(17, 3, 'Advance Monthly Bill', 'birthday parin', '2023-05-07', '2023-05-08', '4000', 'Pending', '2023-05-11 12:44:30', '2023-05-11 12:44:30'),
(18, 1, 'fgh', 'hgf', '2023-06-01', '2023-06-02', '4000', 'Unpaid', '2023-05-11 12:46:01', '2023-05-11 12:46:01'),
(19, 2, 'fgh', 'hgf', '2023-06-01', '2023-06-02', '133', 'Unpaid', '2023-05-11 12:46:01', '2023-05-11 12:46:01'),
(20, 3, 'fgh', 'hgf', '2023-06-01', '2023-06-02', '4000', 'Unpaid', '2023-05-11 12:46:01', '2023-05-11 12:46:01'),
(21, 2, 'xczxc', 'zxczxc', '2023-05-01', '2023-05-31', '133', 'Pending', '2023-05-11 12:49:26', '2023-05-11 12:49:26'),
(22, 1, 'gum', 'mug', '2023-05-01', '2023-05-02', '4000', 'Pending', '2023-05-11 13:01:13', '2023-05-11 13:01:13'),
(23, 2, 'gum', 'mug', '2023-05-01', '2023-05-02', '133', 'Pending', '2023-05-11 13:01:13', '2023-05-11 13:01:13'),
(24, 3, 'gum', 'mug', '2023-05-01', '2023-05-02', '4000', 'Pending', '2023-05-11 13:01:13', '2023-05-11 13:01:13'),
(25, 1, 'check', 'check', '2023-05-01', '2023-05-02', '4000', 'Pending', '2023-05-11 13:27:07', '2023-05-11 13:27:07'),
(26, 1, 'hi', 'hi', '2023-07-01', '2023-07-02', '4000', 'Pending', '2023-05-11 14:18:54', '2023-05-11 14:18:54');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(3, 'Admin L', 'admin@example.com', NULL, '$2y$10$xL7oTTPmHUDagMlH/MmouuLbzVflsAlqMfZQj1YHvf/WRd6TQT6lO', NULL, '2023-05-11 12:08:28', '2023-05-11 12:08:28', 1),
(4, 'Zeesa', 'btssvtenhatxt12@gmail.com', NULL, '$2y$10$Rpr7S9ZwI7AHrZAIQbcHm.JCLmsGCBb4ZXflmoE.s1xLIehJHpMRG', NULL, '2023-05-11 12:11:50', '2023-05-11 12:11:50', 0),
(5, 'asd', 'asd@gmail.com', NULL, '$2y$10$lbjNWrCGfXRo35faQOmkAeqLZUBc274nYFDcMPx1QoDXKK5p.4czm', NULL, '2023-05-11 12:48:19', '2023-05-11 12:48:19', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
