-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 04:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syncads`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertiser`
--

CREATE TABLE `advertiser` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `advertiser_activity` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `perfecture` varchar(45) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `business_type_id` bigint(20) UNSIGNED NOT NULL,
  `business_activity_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_activities`
--

CREATE TABLE `business_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_activities`
--

INSERT INTO `business_activities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Beaty', NULL, NULL),
(2, 'Health', NULL, NULL),
(3, 'Entertainment', NULL, NULL),
(4, 'Sports', NULL, NULL),
(5, 'Food', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_types`
--

CREATE TABLE `business_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_types`
--

INSERT INTO `business_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Parapharmacy', NULL, NULL),
(2, 'Pharmacy', NULL, NULL),
(3, 'Cinema', NULL, NULL),
(4, 'Gaming center', NULL, NULL),
(5, 'Gaming shop', NULL, NULL),
(6, 'Gym', NULL, NULL),
(7, 'Bodybulding product shop', NULL, NULL),
(8, 'Supermarcket', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `budget_max` double(8,2) NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `display_hours` time NOT NULL,
  `status` enum('actif','pending','inactif','finished') NOT NULL DEFAULT 'pending',
  `url` varchar(255) NOT NULL,
  `advertiser_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '1_CreateBusiness_Types', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2_business_activities', 1),
(4, '3_create_users_table', 1),
(5, '4_businesses', 1),
(6, '5_advertisers', 1),
(7, '6_locations', 1),
(8, '7_placements', 1),
(9, '8_campaigns', 1),
(10, '9_1_trackings', 1),
(11, '9_2_schedules', 1),
(12, '9_parameters', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_price_advertiser` double(8,2) NOT NULL DEFAULT 0.00,
  `ad_price_business` double(8,2) NOT NULL DEFAULT 0.00,
  `com_display_time` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE `placements` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opening_hour` time NOT NULL,
  `closing_hour` time NOT NULL,
  `day` varchar(10) NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trackings`
--

CREATE TABLE `trackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `display_time` time NOT NULL,
  `campaign_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role` enum('advertiser','business','admin') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertiser`
--
ALTER TABLE `advertiser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertiser_user_id_foreign` (`user_id`),
  ADD KEY `advertiser_advertiser_activity_foreign` (`advertiser_activity`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `businesses_user_id_foreign` (`user_id`),
  ADD KEY `businesses_business_type_id_foreign` (`business_type_id`),
  ADD KEY `businesses_business_activity_id_foreign` (`business_activity_id`);

--
-- Indexes for table `business_activities`
--
ALTER TABLE `business_activities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `business_activities_name_unique` (`name`);

--
-- Indexes for table `business_types`
--
ALTER TABLE `business_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `business_types_name_unique` (`name`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaigns_advertiser_id_foreign` (`advertiser_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_business_id_foreign` (`business_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `placements`
--
ALTER TABLE `placements`
  ADD KEY `placements_location_id_foreign` (`location_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_business_id_foreign` (`business_id`);

--
-- Indexes for table `trackings`
--
ALTER TABLE `trackings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trackings_campaign_id_foreign` (`campaign_id`);

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
-- AUTO_INCREMENT for table `advertiser`
--
ALTER TABLE `advertiser`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_activities`
--
ALTER TABLE `business_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `business_types`
--
ALTER TABLE `business_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trackings`
--
ALTER TABLE `trackings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertiser`
--
ALTER TABLE `advertiser`
  ADD CONSTRAINT `advertiser_advertiser_activity_foreign` FOREIGN KEY (`advertiser_activity`) REFERENCES `business_activities` (`id`),
  ADD CONSTRAINT `advertiser_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_business_activity_id_foreign` FOREIGN KEY (`business_activity_id`) REFERENCES `business_activities` (`id`),
  ADD CONSTRAINT `businesses_business_type_id_foreign` FOREIGN KEY (`business_type_id`) REFERENCES `business_types` (`id`),
  ADD CONSTRAINT `businesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_advertiser_id_foreign` FOREIGN KEY (`advertiser_id`) REFERENCES `advertiser` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`);

--
-- Constraints for table `placements`
--
ALTER TABLE `placements`
  ADD CONSTRAINT `placements_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`id`);

--
-- Constraints for table `trackings`
--
ALTER TABLE `trackings`
  ADD CONSTRAINT `trackings_campaign_id_foreign` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
