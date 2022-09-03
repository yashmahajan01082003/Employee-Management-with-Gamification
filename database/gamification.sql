-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 09:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamification`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Attendance', 'Meet attendance target', NULL, NULL),
(2, 'Sales', 'Meet sales count', NULL, NULL),
(3, 'Quality', 'Quality', '2022-08-25 13:51:48', '2022-08-28 01:09:44'),
(4, 'Rahul', 'Pardesi', '2022-08-28 01:09:25', '2022-09-02 23:39:47'),
(5, 'Crucial Performance', 'Performing in the most required time', '2022-09-02 16:05:55', '2022-09-02 16:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `activity_rules`
--

CREATE TABLE `activity_rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_id` bigint(20) NOT NULL,
  `min_score` double NOT NULL,
  `max_score` double DEFAULT NULL,
  `operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_rules`
--

INSERT INTO `activity_rules` (`id`, `name`, `activity_id`, `min_score`, `max_score`, `operator`, `points`, `created_at`, `updated_at`) VALUES
(1, 'Attendance between 80% to 90%', 1, 80, 90, 'BETWEEN', 5, '2022-08-28 07:08:12', '2022-09-02 14:05:02'),
(2, 'Attendance between 90.1% to 95%', 1, 90.1, 95, 'BETWEEN', 10, '2022-08-28 07:08:58', '2022-08-28 08:26:21'),
(3, 'Attendance greater than equals to 95.1%', 1, 95.1, 0, 'GREATER_THAN_EQUALS', 15, '2022-08-28 07:11:47', '2022-08-28 08:31:12'),
(4, 'Attendance between 70% to 79%', 1, 70, 79, 'BETWEEN', 2, '2022-09-02 16:10:55', '2022-09-02 16:12:02'),
(5, 'Attendance between 60% to 69%', 1, 60, 69, 'BETWEEN', 1, '2022-09-02 22:21:30', '2022-09-02 22:21:30');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_25_175845_create_activities_table', 2),
(8, '2022_08_25_175933_create_points_table', 2),
(11, '2022_08_25_175857_create_activity_rules_table', 3),
(12, '2022_08_25_175919_create_scores_table', 4),
(15, '2022_08_25_175958_create_products_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pointable_id` bigint(20) NOT NULL,
  `pointable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` double NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `pointable_id`, `pointable_type`, `transaction_type`, `points`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 2, 'App\\Models\\Score', 'C', 1000, 2, '2022-08-28 07:53:12', '2022-08-28 07:53:12'),
(4, 1, 'App\\Models\\Score', 'C', 10, 2, '2022-08-28 08:19:08', '2022-08-28 08:33:23'),
(5, 3, 'App\\Models\\Score', 'C', 5, 1, '2022-08-31 09:00:05', '2022-09-02 13:48:40'),
(6, 4, 'App\\Models\\Score', 'C', 1000, 1, '2022-09-02 14:05:37', '2022-09-02 14:05:37'),
(7, 5, 'App\\Models\\Score', 'C', 15, 1, '2022-09-02 15:10:27', '2022-09-02 15:10:27'),
(8, 6, 'App\\Models\\Score', 'C', 15, 4, '2022-09-02 15:41:05', '2022-09-02 15:41:05'),
(9, 7, 'App\\Models\\Score', 'C', 15, 4, '2022-09-02 16:12:48', '2022-09-02 16:12:48'),
(12, 1, 'App\\Models\\Product', 'D', 300, 1, '2022-09-02 16:49:34', '2022-09-02 16:49:34'),
(13, 8, 'App\\Models\\Score', 'C', 10, 4, '2022-09-02 22:22:38', '2022-09-02 22:22:38'),
(14, 9, 'App\\Models\\Score', 'C', 15, 1, '2022-09-02 22:34:29', '2022-09-02 22:34:29'),
(15, 10, 'App\\Models\\Score', 'C', 15, 1, '2022-09-02 22:41:10', '2022-09-02 22:41:10'),
(16, 1, 'App\\Models\\Product', 'D', 300, 1, '2022-09-02 22:43:11', '2022-09-02 22:43:11'),
(17, 11, 'App\\Models\\Score', 'C', 15, 1, '2022-09-02 23:40:56', '2022-09-02 23:40:56'),
(18, 1, 'App\\Models\\Product', 'D', 300, 1, '2022-09-02 23:43:17', '2022-09-02 23:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` double NOT NULL,
  `quantity` double NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `points`, `quantity`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Trick or Treat cotton T-shirt black color Pack of 1', 300, 0, 'images/products/tshirts/tshirt1.png', '2022-09-02 15:45:20', '2022-09-02 23:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_id` bigint(20) NOT NULL,
  `activity_rule_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `score_date` date NOT NULL,
  `score` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `activity_id`, `activity_rule_id`, `user_id`, `score_date`, `score`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '2022-08-31', 91, '2022-08-28 07:52:30', '2022-09-02 15:15:01'),
(2, 1, 2, 2, '2022-08-01', 95, '2022-08-28 07:53:12', '2022-09-02 15:15:08'),
(3, 1, 1, 1, '2022-08-30', 88, '2022-08-31 09:00:05', '2022-09-02 15:15:15'),
(4, 1, 2, 1, '2022-09-03', 91, '2022-09-02 14:05:37', '2022-09-02 15:15:23'),
(5, 1, 3, 1, '2022-09-02', 98, '2022-09-02 15:10:27', '2022-09-02 15:10:27'),
(6, 1, 3, 4, '2022-09-01', 99, '2022-09-02 15:41:05', '2022-09-02 15:41:05'),
(7, 1, 3, 4, '2022-09-03', 97, '2022-09-02 16:12:48', '2022-09-02 16:12:48'),
(8, 1, 2, 4, '2022-08-28', 95, '2022-09-02 22:22:38', '2022-09-02 22:22:38'),
(9, 1, 3, 1, '2022-08-26', 96, '2022-09-02 22:34:29', '2022-09-02 22:34:29'),
(10, 1, 3, 1, '2022-08-12', 98, '2022-09-02 22:41:09', '2022-09-02 22:41:10'),
(11, 1, 3, 1, '2022-08-01', 98, '2022-09-02 23:40:56', '2022-09-02 23:40:56');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yash Mahajan', 'yash@localhost', NULL, '$2y$10$SmEAlS29CgcaFzZDFaynxONRX8bezbsqmw/eP0yACMoBQthH4I7TG', NULL, '2022-08-25 12:27:38', '2022-08-25 12:27:38'),
(2, 'Vishal Patil', 'vishalpatil@gmail.com', NULL, '$2y$10$bPUgfWi9ooLNgl/PC7pR9uYG/G0twgGm1r/i5rBr.hU/UlXpc5w7q', NULL, '2022-08-25 12:28:07', '2022-08-25 12:28:07'),
(3, 'Ram', 'ram@gmail.com', NULL, '$2y$10$jNOmCO.PVtyy/.7i7gHp3uaRPPtbFel44SgcKJttR2tXnsNER0Py6', NULL, '2022-09-02 14:11:55', '2022-09-02 14:11:55'),
(4, 'Krishna Yadav', 'krishnayadav@gmail.com', NULL, '$2y$10$2baYgCYB3NKqePhbxa9bwO./vR9QEDySEd/kPvAHy0EFhfZOc5kyG', NULL, '2022-09-02 14:51:53', '2022-09-02 14:51:53'),
(5, 'Shiv Shankar', 'shiv@gmail.com', NULL, '$2y$10$5Qn.z6J.YYPCZg5hUzVwf.pVElm.sooVdiqVLVNaUXMw4sPRpNm/e', NULL, '2022-09-02 16:15:22', '2022-09-02 16:15:22'),
(6, 'Shaam Patil', 'shaam@gmail.com', NULL, '$2y$10$m78ZunFfeYpHUFMGPJOxEen8x2NGEMn8pQNsSRXQX.X7MgyC2rPuq', NULL, '2022-09-02 22:10:04', '2022-09-02 22:10:04'),
(7, 'Om Mahajan', 'ommahajan@gmail.com', NULL, '$2y$10$SOQa2glm.MTAEAjSZnvUruXwoV9S1mgldQjIIKRAQK4D9yHWs9R9K', NULL, '2022-09-02 22:15:34', '2022-09-02 22:15:34'),
(8, 'Rahul Pardesi', 'rahulpardesi@gmail.com', NULL, '$2y$10$ZzZgSsTDtxk8bFGrnbYxjeqdg9OypVDHDusZNqNE9F2xo.hPdLG8W', NULL, '2022-09-02 23:38:12', '2022-09-02 23:38:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_name_index` (`name`),
  ADD KEY `activities_description_index` (`description`);

--
-- Indexes for table `activity_rules`
--
ALTER TABLE `activity_rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_rules_name_index` (`name`),
  ADD KEY `activity_rules_activity_id_index` (`activity_id`),
  ADD KEY `activity_rules_min_score_index` (`min_score`),
  ADD KEY `activity_rules_max_score_index` (`max_score`),
  ADD KEY `activity_rules_operator_index` (`operator`),
  ADD KEY `activity_rules_points_index` (`points`);

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
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `points_pointable_id_index` (`pointable_id`),
  ADD KEY `points_pointable_type_index` (`pointable_type`),
  ADD KEY `points_transaction_type_index` (`transaction_type`),
  ADD KEY `points_points_index` (`points`),
  ADD KEY `points_user_id_index` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_name_index` (`name`),
  ADD KEY `products_points_index` (`points`),
  ADD KEY `products_quantity_index` (`quantity`),
  ADD KEY `products_img_index` (`img`(768));

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scores_activity_id_index` (`activity_id`),
  ADD KEY `scores_activity_rule_id_index` (`activity_rule_id`),
  ADD KEY `scores_user_id_index` (`user_id`),
  ADD KEY `scores_score_date_index` (`score_date`),
  ADD KEY `scores_score_index` (`score`);

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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `activity_rules`
--
ALTER TABLE `activity_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
