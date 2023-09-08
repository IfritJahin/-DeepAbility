-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 08:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `contact`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, '123', '123@gmail.com', NULL, '$2y$10$2MFJD7to51klb0M1xReBCuJ7DM0O2c.D8QLugQT6UmZLLnm2U.Ju2', '123', '123', NULL, '2023-04-03 10:23:15', '2023-04-03 10:23:15'),
(8, 'admin', 'admin@gmail.com', NULL, '$2y$10$Eh75JsygqrddmrwX1bwzT.oCj4D3JTai1Hy6HiSo8Z9y8PXgogv8W', 'admin', 'admin', NULL, '2023-04-03 11:25:38', '2023-04-03 11:25:38'),
(9, 'lol', 'lol@gmail.com', NULL, '$2y$10$FLxakdze6pci46.jSHleJecL3IA5rPRO5AScZTsUnx/qsg6dcMW82', 'lol', 'lol', NULL, '2023-04-04 06:01:12', '2023-04-04 06:01:12'),
(10, 'lala', 'lala@gmail.com', NULL, '$2y$10$NP0oybQRnsQB96cfKL6b0uEdDUi0UFTBPPyW7hQhZ93hvRWmdl/Oa', 'lala', 'lala', NULL, '2023-04-04 08:48:52', '2023-04-04 08:48:52'),
(11, 'demo', 'demo@gmail.com', NULL, '$2y$10$.0179BHztWCi561aWDsNB.vybuqkcErD8zykupbegEpZ5RbBXY7FW', 'demo', 'demo', NULL, '2023-04-09 02:49:55', '2023-04-09 02:49:55'),
(12, 'deep', 'deep@gmail.com', NULL, '$2y$10$XnaQoGAG...vBBZbZgQAaeMWonJnpYH9eVrmU9x3THDIsa2IIh9hC', 'deep', 'deep', NULL, '2023-04-09 10:13:49', '2023-04-09 10:13:49'),
(13, 'ABCD', 'ABCD@gmail.com', NULL, '$2y$10$fyAu/TZIVwF2vR/rMdEwleaejWXGbzZDgZxJNeo6YbA0pXisCKSlm', 'ABCD', '1705525434', NULL, '2023-04-14 01:11:16', '2023-04-14 01:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `questions_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` int(11) NOT NULL,
  `status` varchar(5500) NOT NULL,
  `motivation` varchar(10000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboards`
--

INSERT INTO `dashboards` (`id`, `status`, `motivation`, `created_at`, `updated_at`) VALUES
(1, 'ccxcx', '', '2023-04-11 22:30:20', '2023-04-11 22:30:20'),
(2, 'cxcx', '', '2023-04-11 22:30:25', '2023-04-11 22:30:25'),
(3, 'anything', '', '2023-04-12 10:51:11', '2023-04-12 10:51:11'),
(4, 'cvcvcccccvzvdkgijgidgjo9kgpokfovkbopvkboxkbokbobokokpokokbokboxkbokbokvokxobkxobo', 'vccvozkvoovkzpovovovockvop', '2023-04-12 11:37:04', '2023-04-12 11:37:04'),
(5, 'Hello', 'Good Day', '2023-04-14 07:21:37', '2023-04-14 07:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'resf', '2023-04-13 00:00:00', '2023-04-14 00:00:00', '2023-04-11 07:35:02', '2023-04-11 07:35:02'),
(2, 'test', '2023-04-14 00:00:00', '2023-04-15 00:00:00', '2023-04-11 07:43:57', '2023-04-11 07:43:57'),
(3, 'test', '2023-04-15 00:00:00', '2023-04-16 00:00:00', '2023-04-11 07:58:29', '2023-04-11 07:58:29'),
(4, 'Test2', '2023-04-16 00:00:00', '2023-04-17 00:00:00', '2023-04-14 01:28:18', '2023-04-14 01:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_02_154103_create_admins_table', 2),
(6, '2023_04_04_120807_create_roles_table', 3),
(7, '2023_04_08_084224_create_courses_table', 4),
(8, '2023_04_08_183609_add_user_id_to_courses_table', 5),
(9, '2023_04_09_073138_create_questions_table', 6),
(10, '2019_05_03_000001_create_customer_columns', 7),
(11, '2019_05_03_000002_create_subscriptions_table', 7),
(12, '2019_05_03_000003_create_subscription_items_table', 7),
(13, '2023_04_11_091935_create_calender_table', 8),
(14, '2023_04_11_125524_create_events_table', 9),
(15, '2023_04_11_131407_create_events_table', 10),
(16, '2023_04_11_141542_create_catagories_table', 11),
(17, '2023_04_11_142058_create_catagories_table', 12),
(18, '2023_04_11_142427_create_questions_table', 13),
(19, '2023_04_11_145905_create_option_table', 14),
(20, '2023_04_11_150249_create_results_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE `option` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Question` bigint(20) UNSIGNED NOT NULL,
  `option_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`) VALUES
(1, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '643498f86de16', 'BDT'),
(2, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6434992db0f5c', 'BDT'),
(3, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '643499df7dc2f', 'BDT'),
(4, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349aa1526a5', 'BDT'),
(5, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349ab3055ae', 'BDT'),
(6, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349b35e58de', 'BDT'),
(7, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349b5dd15c4', 'BDT'),
(8, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349b68c669e', 'BDT'),
(9, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349b9f83b9b', 'BDT'),
(10, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349c57edae0', 'BDT'),
(11, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349c7f14613', 'BDT'),
(12, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349d564663e', 'BDT'),
(13, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349d8a9a07f', 'BDT'),
(14, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349d9211327', 'BDT'),
(15, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349ddb689ab', 'BDT'),
(16, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64349e2e4cff0', 'BDT'),
(17, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '643516347457f', 'BDT'),
(18, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64357c57398a8', 'BDT'),
(19, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '64357c994d4a5', 'BDT'),
(20, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6436b02d61b21', 'BDT');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('user@gmail.cm', '$2y$10$QKEv7QM2mzapjgd3sUj.gONNxCJVoT.HIf88DKf2V0CodVhdEItHy', '2023-03-29 08:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `prices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`prices`)),
  `priceway` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `subject`, `prices`, `priceway`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'Anything', '{\"TK\":\"100\"}', 1, '2023-04-12 16:33:11', '2023-04-12 16:33:11'),
(2, 'abc', 'Anything', '{\"TK\":\"1000\"}', 1, '2023-04-14 07:05:47', '2023-04-14 07:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) DEFAULT NULL,
  `question_text` varchar(5500) NOT NULL,
  `exampleRadios1` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_result`
--

CREATE TABLE `question_result` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Result` bigint(20) UNSIGNED NOT NULL,
  `Question` bigint(20) UNSIGNED NOT NULL,
  `Option` bigint(20) UNSIGNED DEFAULT NULL,
  `points` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User` bigint(20) UNSIGNED NOT NULL,
  `total_points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `plan` int(11) NOT NULL DEFAULT 0 COMMENT '0->Free,1->Paid',
  `prices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`prices`)),
  `expire` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `plan`, `prices`, `expire`, `created_at`, `updated_at`) VALUES
(7, 'Mental Health', 0, NULL, NULL, '2023-04-09 18:31:29', '2023-04-09 18:31:29'),
(8, 'Overcome Learning Disability', 0, NULL, NULL, '2023-04-09 18:35:15', '2023-04-09 18:35:15'),
(9, 'Physical Health', 0, NULL, NULL, '2023-04-09 20:29:09', '2023-04-09 20:29:09'),
(10, 'Physical Health', 0, NULL, NULL, '2023-04-09 20:29:09', '2023-04-09 20:29:09'),
(11, 'Build Confidence', 0, NULL, NULL, '2023-04-10 07:15:42', '2023-04-10 07:15:42'),
(12, 'Braille', 1, '{\"TK\":\"1000\"}', NULL, '2023-04-10 09:33:13', '2023-04-10 09:33:13'),
(13, 'Sign language', 1, '{\"TK\":\"1500\"}', NULL, '2023-04-10 10:59:28', '2023-04-10 10:59:28'),
(14, 'Mental Health fitness', 1, '{\"TK\":\"2000\"}', NULL, '2023-04-10 16:44:41', '2023-04-10 16:44:41'),
(15, 'Mental Health fitness', 0, NULL, NULL, '2023-04-10 16:45:02', '2023-04-10 16:45:02'),
(16, 'Physiotherapy', 1, '{\"TK\":\"2000\"}', '2023-04-12', '2023-04-10 20:46:13', '2023-04-10 20:46:13'),
(17, 'Anything', 1, '{\"TK\":\"100\"}', '2023-04-14', '2023-04-11 11:42:35', '2023-04-11 11:42:35'),
(18, 'Physiotherapy', 1, '{\"TK\":\"333\"}', '2023-04-13', '2023-04-11 15:52:40', '2023-04-11 15:52:40'),
(19, 'New', 1, '{\"TK\":\"100\"}', '2023-05-05', '2023-04-12 15:05:25', '2023-04-12 15:05:25'),
(20, '470', 1, '{\"TK\":\"150\"}', '2023-04-16', '2023-04-14 07:27:00', '2023-04-14 07:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `contact`, `pic`, `remember_token`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
(2, 'Labiba', 'ABC@gmail.com', '2023-03-23 04:47:41', '$2y$10$xq8qqrdKhOewUMHDgEdFD.8xvr1j13zrkwJgfdWXsSAAd.30w/kFS', 'Labiba', NULL, NULL, 'zAt1LWA2NoZLN3rVZqFtUtbUic7NQpA7eQEiFKhxdtISBGIpRL4e5pe1BJ32', '2023-03-21 11:21:09', '2023-03-23 04:47:41', NULL, NULL, NULL, NULL),
(8, 'test', 'test@gmail.com', '2023-03-27 09:53:14', '$2y$10$kntWYTQO7Y2Kd0JMzljDf.iDgyPxMpVu4f92Yg2O3wtad52aXLRxm', 'test', NULL, NULL, 'l5Lpw2F1ps55zcr8by7k2qr616fy8gyZ7EvZpGsomX95q5sXg7ANFeSBJFPD', '2023-03-27 09:53:01', '2023-03-29 08:45:14', NULL, NULL, NULL, NULL),
(14, 'abc', 'abc99@gmail.com', '2023-04-02 05:49:11', '$2y$10$GU0khXU9hl7snr9F7uRB5eA4A7PBL7dd.yguNxJ8/mlOvYcZuot0u', 'abc', '012345677', NULL, NULL, '2023-04-02 05:48:50', '2023-04-02 08:14:40', NULL, NULL, NULL, NULL),
(17, 'user', 'user@gmail.com', '2023-04-03 09:02:45', '$2y$10$uDE0DHY4pqbVKhU4tlbXeendc4LEX.yd5a2Flh.qVssKVTAByMEiC', 'user@gmail.com', 'user@gmail.com', NULL, NULL, '2023-04-03 09:02:17', '2023-04-03 09:02:45', NULL, NULL, NULL, NULL),
(20, 'abd', 'abd@gmail.com', '2023-04-10 14:01:14', '$2y$10$nrc3ub8fzROF38yBCrwSvO9N6CUBFi4J/pZRytLwJVK23n63I34GC', 'abd', 'abd', NULL, NULL, '2023-04-10 14:00:46', '2023-04-10 14:01:14', NULL, NULL, NULL, NULL),
(22, 'ifrit', 'ifrit@gmail.com', '2023-04-14 01:08:57', '$2y$10$mPQP9kbYquq24w6XZn3Q9uLP9ACbE1zsRvXUo6AsaZQOoO5OUQItG', 'ifrit', '1705525434', NULL, NULL, '2023-04-14 01:08:47', '2023-04-14 01:08:57', NULL, NULL, NULL, NULL),
(23, 'user123', 'user123@gmail.com', '2023-04-14 01:30:42', '$2y$10$TO3ViLF3bJn9lyz6wEb8.OLcj7/jaxdIb6Toa.fPanNyJDk0O1SDa', 'user123', '123456', NULL, NULL, '2023-04-14 01:30:33', '2023-04-14 01:30:42', NULL, NULL, NULL, NULL),
(24, 'labibaifrit', 'labibaifritjahin0325@gmail.com', '2023-04-14 04:47:30', '$2y$10$nq5gZg/SEFAGGor58wWr.e4L7zoz8xouKG5mCIKApi1es3od45bFm', 'labibaifritjahin', '01705525434', NULL, NULL, '2023-04-14 04:47:04', '2023-04-14 04:47:45', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `option_question_foreign` (`Question`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_at` (`created_at`);

--
-- Indexes for table `question_result`
--
ALTER TABLE `question_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_result_result_foreign` (`Result`),
  ADD KEY `question_result_question_foreign` (`Question`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_foreign` (`User`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `option`
--
ALTER TABLE `option`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_result`
--
ALTER TABLE `question_result`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `option`
--
ALTER TABLE `option`
  ADD CONSTRAINT `option_question_foreign` FOREIGN KEY (`Question`) REFERENCES `questions` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_catagory_id_foreign` FOREIGN KEY (`catagory_id`) REFERENCES `catagories` (`id`);

--
-- Constraints for table `question_result`
--
ALTER TABLE `question_result`
  ADD CONSTRAINT `question_result_question_foreign` FOREIGN KEY (`Question`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `question_result_result_foreign` FOREIGN KEY (`Result`) REFERENCES `results` (`id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_user_foreign` FOREIGN KEY (`User`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
