-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 03:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `created_at`, `updated_at`, `project_id`, `title_en`, `title_ar`, `image`, `flag`) VALUES
(1, '2021-12-07 11:18:32', '2021-12-07 11:18:32', NULL, 'Kids area', 'منطقة مخصصة للأطفال', '1638883112.svg', NULL),
(2, '2021-12-07 11:19:24', '2021-12-07 11:19:24', NULL, 'Swimming Pool', 'حمام السباحة', '1638883164.svg', NULL),
(3, '2021-12-07 11:19:43', '2021-12-07 11:19:43', NULL, 'Sports Club', 'نادي رياضي', '1638883183.svg', NULL),
(4, '2021-12-07 11:20:00', '2021-12-07 11:20:00', NULL, 'Club House', 'كلوب هاوس', '1638883200.svg', NULL),
(5, '2021-12-07 11:20:17', '2021-12-07 11:20:17', NULL, 'Gym', 'صالة رياضية', '1638883217.svg', NULL),
(6, '2021-12-07 11:20:35', '2021-12-07 11:20:35', NULL, 'Spa & Massage Center', 'مركز سبا ومساج', '1638883235.svg', NULL),
(7, '2021-12-07 11:21:01', '2021-12-07 11:21:01', NULL, 'Retail Area', 'منطقة البيع بالتجزئة', '1638883261.svg', NULL),
(8, '2021-12-07 11:21:17', '2021-12-07 11:21:17', NULL, 'Landscape', 'المناظر الطبيعيه', '1638883277.svg', NULL),
(9, '2021-12-07 11:21:36', '2021-12-07 11:21:36', NULL, 'Super market', 'سوبر ماركت', '1638883296.svg', NULL),
(10, '2021-12-07 11:21:59', '2021-12-07 11:21:59', NULL, 'Laundry Services', 'خدمات الغسيل', '1638883319.svg', NULL),
(11, '2021-12-07 11:22:30', '2021-12-07 11:22:30', NULL, 'Children pool', 'حمام سباحة للأطفال', '1638883350.svg', NULL),
(12, '2021-12-07 11:23:07', '2021-12-07 11:23:07', NULL, 'Medical services', 'الخدمات الطبية', '1638883387.svg', NULL),
(13, '2021-12-07 11:23:29', '2021-12-07 11:23:29', NULL, 'Beach Club', 'نادي الشاطئ', '1638883409.svg', NULL),
(14, '2021-12-07 11:23:48', '2021-12-07 11:23:48', NULL, 'Facility Maintenance', 'صيانة المنشأة', '1638883428.svg', NULL),
(15, '2021-12-07 11:24:07', '2021-12-07 11:24:07', NULL, 'Multi-purpose Hall', 'قاعة متعددة الاغراض', '1638883447.svg', NULL),
(16, '2021-12-07 12:07:28', '2021-12-07 12:07:28', NULL, 'Commercial area', 'منطقة تجارية', '1638886048.svg', NULL),
(17, '2021-12-07 12:07:50', '2021-12-07 12:07:50', NULL, 'lagoon', 'البحيرة', '1638886070.svg', NULL),
(18, '2021-12-07 12:08:11', '2021-12-07 12:08:11', NULL, 'Mountain Bikes Trails', 'ممرات دراجات جبلية', '1638886091.svg', NULL),
(19, '2021-12-07 12:08:30', '2021-12-07 12:08:30', NULL, 'Cafes', 'مقاهي', '1638886110.svg', NULL),
(20, '2021-12-07 12:08:47', '2021-12-07 12:08:47', NULL, 'Schools', 'المدارس', '1638886127.svg', NULL),
(21, '2021-12-07 12:09:04', '2021-12-07 12:09:04', NULL, 'jogging area', 'منطقة الركض', '1638886144.svg', NULL),
(22, '2021-12-07 12:09:32', '2021-12-07 12:09:32', NULL, 'Restaurant', 'مطعم', '1638886172.svg', NULL),
(23, '2021-12-07 12:09:53', '2021-12-07 12:09:53', NULL, 'Playground Park', 'حديقة الألعاب', '1638886193.svg', NULL),
(24, '2021-12-07 12:10:13', '2021-12-07 12:10:13', NULL, 'Indoor Swimming Pool', 'حوض سباحة داخلي', '1638886213.svg', NULL),
(25, '2021-12-07 12:10:30', '2021-12-07 12:10:30', NULL, 'International Schools', 'مدارس دولية', '1638886230.svg', NULL),
(26, '2021-12-07 12:10:48', '2021-12-07 12:10:48', NULL, 'Security', 'حماية', '1638886248.svg', NULL),
(27, '2021-12-07 12:11:06', '2021-12-07 12:11:06', NULL, 'Wifi', 'واي فاي', '1638886266.svg', NULL),
(28, '2021-12-07 12:11:19', '2021-12-07 12:11:19', NULL, 'BBQ Area', 'منطقة الشواء', '1638886279.svg', NULL),
(29, '2021-12-07 12:12:25', '2021-12-07 12:12:25', NULL, 'Pharmacy', 'صيدلية', '1638886345.svg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `facilities_title_en_unique` (`title_en`),
  ADD UNIQUE KEY `facilities_title_ar_unique` (`title_ar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
