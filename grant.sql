-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 31, 2021 at 06:12 AM
-- Server version: 8.0.24
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grant`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `property_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(3, 7, 7, '2021-05-05 15:43:46', '2021-05-05 15:43:46'),
(4, 7, 8, '2021-05-05 15:44:27', '2021-05-05 15:44:27'),
(59, 3, 2, '2021-05-16 06:47:57', '2021-05-16 06:47:57'),
(60, 3, 3, '2021-05-16 06:47:59', '2021-05-16 06:47:59'),
(62, 3, 8, '2021-05-16 06:52:37', '2021-05-16 06:52:37'),
(66, 9, 4, '2021-05-17 00:40:31', '2021-05-17 00:40:31'),
(67, 10, 3, '2021-05-17 21:45:48', '2021-05-17 21:45:48'),
(68, 11, 3, '2021-05-18 04:11:10', '2021-05-18 04:11:10'),
(69, 12, 2, '2021-05-18 04:14:15', '2021-05-18 04:14:15'),
(70, 14, 4, '2021-05-18 04:20:13', '2021-05-18 04:20:13'),
(71, 14, 2, '2021-05-18 04:20:58', '2021-05-18 04:20:58'),
(73, 16, 2, '2021-05-29 13:30:16', '2021-05-29 13:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_03_071508_add_phone_to_users_table', 2),
(5, '2021_05_03_131924_add_properties_table', 3),
(6, '2021_05_03_132753_create_property_cover_photos_table', 3),
(7, '2021_05_04_045000_add_bath_bedrooms_to_properties_table', 4),
(8, '2021_05_04_052216_create_states_table', 5),
(9, '2021_05_04_061739_rename_property_cover_photos_table', 6),
(10, '2021_05_04_062852_add_slug_to_properties_table', 7),
(11, '2021_05_04_093312_add-description_to_properties-table', 8),
(12, '2021_05_05_022936_add_price_to_properties_table', 9),
(13, '2021_05_05_044038_add_extra_fields_to_properties-table', 10),
(14, '2021_05_05_140910_create_interest_table', 11),
(15, '2021_05_05_141519_create_notifications_table', 12),
(16, '2021_05_05_144351_rename_interest_table', 13),
(17, '2021_05_05_145426_drop_link_column_in_notifications_table', 14),
(18, '2021_05_05_145613_add_read_to_notifications_table', 14),
(19, '2021_05_05_151328_add_code_to_properties_table', 15),
(20, '2021_05_06_031252_add_status_to_properties_table', 16),
(21, '2021_05_06_054928_add_status_to_users_table', 17),
(22, '2021_05_18_053439_add_is_admin_to_user_table', 18),
(23, '2021_05_28_072338_create_site_settings_table', 19),
(24, '2021_05_28_072903_create_payments_table', 19),
(25, '2021_05_28_123803_create_purchases_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `read` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `created_at`, `updated_at`, `read`) VALUES
(1, 'New Property Request', '2021-05-05 14:43:46', '2021-05-05 14:43:46', 0),
(2, 'New Property Request', '2021-05-05 14:45:00', '2021-05-05 14:45:00', 0),
(3, 'New Property Request', '2021-05-05 15:43:46', '2021-05-05 15:43:46', 0),
(4, 'New Property Request', '2021-05-05 15:44:27', '2021-05-05 15:44:27', 0),
(5, 'New Property Request', '2021-05-06 08:54:38', '2021-05-06 08:54:38', 0),
(6, 'New Property Request', '2021-05-17 00:40:31', '2021-05-17 00:40:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `property_id` int NOT NULL,
  `amount` int NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `property_id`, `amount`, `reference`, `status`, `created_at`, `updated_at`) VALUES
(1, 16, 1, 900000, 'kcFe1622393776', 'in process', '2021-05-30 15:56:16', '2021-05-30 15:56:16'),
(2, 16, 1, 900000, 'tzEj1622393786', 'in process', '2021-05-30 15:56:26', '2021-05-30 15:56:26'),
(3, 16, 1, 900000, 'IhIk1622393959', 'in process', '2021-05-30 15:59:19', '2021-05-30 15:59:19'),
(4, 16, 2, 700000, 'LHXV1622401496', 'in process', '2021-05-30 18:04:56', '2021-05-30 18:04:56'),
(5, 16, 7, 400000, 'h47J1622401642', 'success', '2021-05-30 18:07:22', '2021-05-30 18:07:32'),
(6, 16, 7, 400000, 'KlV01622402231', 'success', '2021-05-30 18:17:11', '2021-05-30 18:17:19'),
(7, 3, 3, 850000, 'CU6n1622440825', 'in process', '2021-05-31 05:00:25', '2021-05-31 05:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_road` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `baths` int NOT NULL,
  `beds` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `length` decimal(10,2) DEFAULT NULL,
  `width` decimal(10,2) DEFAULT NULL,
  `house_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `title`, `address`, `state`, `city`, `location`, `major_road`, `landmark`, `cover_photo`, `created_at`, `updated_at`, `baths`, `beds`, `slug`, `description`, `price`, `area`, `length`, `width`, `house_type`, `list_type`, `property_type`, `code`, `status`) VALUES
(1, 3, '3 Beddrom Flat', '10 Odaranwere Street, off NTA Road, Mgbuoba, Port Harcourt', 30, 'Port Harcourt', 'vcghvhjjkjknjknjkhj', 'NTA Road', 'Nepa Office', 'architecture-1836070_1920_1620110644.jpg', '2021-05-04 05:44:04', '2021-05-06 02:19:58', 3, 3, '3 Beddrom Flat-2tSwjR', '', '900000.00', NULL, NULL, NULL, 'flat', 'rent', 'building', 'QKfBsy', 'deleted'),
(2, 3, '3 Beddrom Flat', 'Geoglad Place, Opposite Omega Clinic Junction, Ada George Road, Port Harcourt', 30, 'Port Harcourt', 'vcghvhjjkjknjknjkhj', 'NTA Road', 'Nepa Office', 'house-24833361920jpg_1620135997.jpg', '2021-05-04 05:45:10', '2021-05-06 02:20:08', 3, 3, '3-Beddrom-Flat-6RZekH', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.', '700000.00', NULL, NULL, NULL, 'flat', 'rent', 'building', 'NPZR4R', 'deleted'),
(3, 3, '3 Beddrom Flat', '10 Odaranwere Street, off NTA Road, Mgbuoba, Port Harcourt', 30, 'Port Harcourt', 'vcghvhjjkjknjknjkhj', 'NTA Road', 'Nepa Office', 'architecture-1836070_1920_1620110748.jpg', '2021-05-04 05:45:48', '2021-05-16 16:07:55', 3, 3, '3 Beddrom Flat-nf9uR1', '', '850000.00', NULL, NULL, NULL, 'flat', 'rent', 'building', 'CmbMBf', 'deleted'),
(4, 3, '4 Bedroom Duplex', '10 Odaranwere Street, off NTA Road, Mgbuoba, Port Harcourt', 30, 'Port Harcourt', 'vcghvhjjkjknjknjkhj', 'NTA Road', 'Town Hall', 'condominium-6900861920jpg_1620130671.jpg', '2021-05-04 09:47:25', '2021-05-06 02:45:55', 5, 4, '4 Bedroom Duplex-gpdEK6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.', '1200000.00', NULL, NULL, NULL, 'duplex', 'rent', 'building', '3UT37b', 'deleted'),
(5, 3, '6 Bedroom Duplex', 'Geoglad Place, Opposite Omega Clinic Junction, Ada George Road, Port Harcourt', 30, 'Port Harcourt', 'Mgbuoba', 'NTA Road', 'Nepa Office', 'house-409451_1920_1620182833.jpg', '2021-05-05 01:47:13', '2021-05-05 14:24:23', 7, 6, '6-Bedroom-Duplex-3LH6F9', 'Well Finished 6 Bedroom Duplex, ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.', '1200000.00', NULL, NULL, NULL, 'duplex', 'rent', 'building', 'hzpOSb', 'available'),
(6, 3, '4 Plots of land', '204A, Aba Road, Rumuola, 500242, Port Harcourt', 30, 'Port Harcourt', 'Rumuola', 'Aba Road', 'Town Hall', 'villa-1209148_1920_1620191052.jpg', '2021-05-05 04:04:12', '2021-05-05 14:24:23', 0, 0, '4 Plots of land-HK8OTD', '', '80000000.00', '400.00', '400.00', '20.00', NULL, 'sale', 'land', 'pk6iSu', 'available'),
(7, 3, '10 Plots of Land', '204A, Aba Road, Rumuola, 500242, Port Harcourt', 30, 'Port Harcourt', 'Rumuola', 'Aba Road', 'Town Hall', 'gallery-7_1620192711.jpg', '2021-05-05 04:31:51', '2021-05-05 14:24:23', 0, 0, '10-Plots-of-Land-ktCmww', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.', '400000.00', '10000.00', '100.00', '100.00', NULL, 'sale', 'land', 'CuBUWl', 'available'),
(8, 3, '2 Bedroom Flat', '204A, Aba Road, Rumuola, 500242, Port Harcourt', 30, 'Port Harcourt', 'Rumuola', 'Aba Road', 'National Park', 'architecture-1867187_1920_1620193110.jpg', '2021-05-05 04:38:30', '2021-05-05 14:24:23', 2, 2, '2-Bedroom-Flat-l9hurY', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dignissimos doloribus eum fugiat itaque laboriosam maiores nisi nostrum perspiciatis vero.', '700000.00', '0.00', '0.00', '0.00', 'flat', 'rent', 'building', 'YQFxMm', 'available'),
(9, 16, 'Testing my code', 'Back of Genesis', 15, 'Port Harcourt', 'Donald Ekong Library', 'Uturu high way', 'GodsTime Oil', 'Screenshot from 2021-05-18 09-13-05_1622180560.png', '2021-05-28 04:42:40', '2021-05-28 04:42:40', 5, 3, 'Testing my code-cMoMFW', 'nokjgyrezieiwwiw', '15000.00', '0.00', '0.00', '0.00', 'bungalow', 'sale', 'building', 'cMoMFW', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `property_photos`
--

CREATE TABLE `property_photos` (
  `id` int UNSIGNED NOT NULL,
  `property_id` int NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_photos`
--

INSERT INTO `property_photos` (`id`, `property_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 3, 'work-3jpg_1620110748.jpg', '2021-05-04 05:45:49', '2021-05-04 05:45:49'),
(2, 3, 'work-2jpg_1620110749.jpg', '2021-05-04 05:45:49', '2021-05-04 05:45:49'),
(4, 4, 'work-1jpg_1620125245.jpg', '2021-05-04 09:47:25', '2021-05-04 09:47:25'),
(5, 2, 'place-4jpg_1620135168.jpg', '2021-05-04 12:32:48', '2021-05-04 12:32:48'),
(6, 2, 'image4jpg_1620135168.jpg', '2021-05-04 12:32:48', '2021-05-04 12:32:48'),
(7, 5, 'image7jpg_1620182833.jpg', '2021-05-05 01:47:13', '2021-05-05 01:47:13'),
(8, 5, 'work-1jpg_1620182833.jpg', '2021-05-05 01:47:13', '2021-05-05 01:47:13'),
(9, 5, 'work-9jpg_1620182833.jpg', '2021-05-05 01:47:13', '2021-05-05 01:47:13'),
(10, 5, 'work-4jpg_1620182833.jpg', '2021-05-05 01:47:13', '2021-05-05 01:47:13'),
(11, 6, 'place-1jpg_1620191052.jpg', '2021-05-05 04:04:12', '2021-05-05 04:04:12'),
(12, 6, 'place-2jpg_1620191052.jpg', '2021-05-05 04:04:12', '2021-05-05 04:04:12'),
(13, 6, 'place-3jpg_1620191052.jpg', '2021-05-05 04:04:12', '2021-05-05 04:04:12'),
(14, 7, 'image4jpg_1620192711.jpg', '2021-05-05 04:31:51', '2021-05-05 04:31:51'),
(15, 7, 'gallery-8jpg_1620192711.jpg', '2021-05-05 04:31:51', '2021-05-05 04:31:51'),
(16, 7, 'gallery-4jpg_1620192711.jpg', '2021-05-05 04:31:51', '2021-05-05 04:31:51'),
(17, 8, 'image6jpg_1620193110.jpg', '2021-05-05 04:38:30', '2021-05-05 04:38:30'),
(18, 8, 'work-9jpg_1620193110.jpg', '2021-05-05 04:38:30', '2021-05-05 04:38:30'),
(19, 9, 'Screenshotfrom2021-05-1808-10-45png_1622180560.png', '2021-05-28 04:42:40', '2021-05-28 04:42:40'),
(20, 9, 'Screenshotfrom2021-05-2507-57-53png_1622180560.png', '2021-05-28 04:42:40', '2021-05-28 04:42:40'),
(21, 9, 'Screenshotfrom2021-05-2507-58-37png_1622180560.png', '2021-05-28 04:42:40', '2021-05-28 04:42:40'),
(22, 9, 'Screenshotfrom2021-05-2508-00-05png_1622180560.png', '2021-05-28 04:42:40', '2021-05-28 04:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `property_id` int NOT NULL,
  `amount` int NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `sk_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sk_public` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `sk_test`, `sk_public`, `created_at`, `updated_at`) VALUES
(1, 'sk_test_514154f2caa105e1480221a8efa2d2d72d40c190', 'sk_test_514154f2caa105e1480221a8efa2d2d72d40c190', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `capital`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Abia', 'Umuahia', 160, NULL, '2020-09-17 00:17:24'),
(2, 'Adamawa', 'Yola', 160, NULL, '2020-09-17 00:17:24'),
(3, 'Akwa Ibom', 'Uyo', 160, NULL, '2020-09-17 00:17:24'),
(4, 'Anambra', 'Awka', 160, NULL, '2020-09-17 00:17:24'),
(5, 'Bauchi', 'Bauchi', 160, NULL, '2020-09-17 00:17:24'),
(6, 'Benue', 'Makurdi', 160, NULL, '2020-09-17 00:17:24'),
(7, 'Borno', 'Maiduguri', 160, NULL, '2020-09-17 00:17:24'),
(8, 'Bayelsa', 'Yenagoa', 160, NULL, '2020-09-17 00:17:24'),
(9, 'Cross River', 'Calabar', 160, NULL, '2020-09-17 00:17:24'),
(10, 'Delta', 'Asaba', 160, NULL, '2020-09-17 00:17:24'),
(11, 'Ebonyi', 'Abakaliki', 160, NULL, '2020-09-17 00:17:24'),
(12, 'Edo', 'Benin', 160, NULL, '2020-09-17 00:17:24'),
(13, 'Ekiti', 'Ado-Ekiti', 160, NULL, '2020-09-17 00:17:24'),
(14, 'Enugu', 'Enugu', 160, NULL, '2020-09-17 00:17:24'),
(15, 'Federal Capital Terr', 'Abuja', 160, NULL, '2020-09-17 00:17:24'),
(16, 'Gombe', 'Gombe', 160, NULL, '2020-09-17 00:17:24'),
(17, 'Jigawa', 'Dutse', 160, NULL, '2020-09-17 00:17:24'),
(18, 'Imo', 'Owerri', 160, NULL, '2020-09-17 00:17:24'),
(19, 'Kaduna', 'Kaduna', 160, NULL, '2020-09-17 00:17:24'),
(20, 'Kebbi', 'Birnin Kebbi', 160, NULL, '2020-09-17 00:17:24'),
(21, 'Kano', 'Kano', 160, NULL, '2020-09-17 00:17:24'),
(22, 'Kogi', 'Lokoja', 160, NULL, '2020-09-17 00:17:24'),
(23, 'Lagos', 'Ikeja', 160, NULL, '2020-09-17 00:17:25'),
(24, 'Katsina', 'Katsina', 160, NULL, '2020-09-17 00:17:25'),
(25, 'Kwara', 'Ilorin', 160, NULL, '2020-09-17 00:17:25'),
(26, 'Nasarawa', 'Lafia', 160, NULL, '2020-09-17 00:17:25'),
(27, 'Niger', 'Minna', 160, NULL, '2020-09-17 00:17:25'),
(28, 'Ogun', 'Abeokuta', 160, NULL, '2020-09-17 00:17:25'),
(29, 'Ondo', 'Akure', 160, NULL, '2020-09-17 00:17:25'),
(30, 'Rivers', 'Port Harcourt', 160, NULL, '2020-09-17 00:17:25'),
(31, 'Oyo', 'Ibadan', 160, NULL, '2020-09-17 00:17:25'),
(32, 'Osun', 'Osogbo', 160, NULL, '2020-09-17 00:17:25'),
(33, 'Sokoto', 'Sokoto', 160, NULL, '2020-09-17 00:17:25'),
(34, 'Plateau', 'Jos', 160, NULL, '2020-09-17 00:17:25'),
(35, 'Taraba', 'Jalingo', 160, NULL, '2020-09-17 00:17:25'),
(36, 'Yobe', 'Damaturu', 160, NULL, '2020-09-17 00:17:25'),
(37, 'Zamfara', 'Gusau', 160, NULL, '2020-09-17 00:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `isAdmin` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `status`, `isAdmin`) VALUES
(3, 'nnebuchiosigbo340@gmail.com', 'Nnebuchi', 'Alis', NULL, '$2y$10$Zez8MXX5hD801Z7xSTvYyuUS0/D0R1h0ASzH9YdJPR2z70H5AsuV6', 'vEHAdZj3YDIaM9S4q0H1cXSGT7rME7Au54zPYSB8yfpMIEgrWb5twGwVWwg2', '2021-05-03 06:17:18', '2021-05-06 06:13:27', '09098889989', 'active', 1),
(7, 'chisaco@gmail.com', 'Chisaka', 'osigbo', NULL, '$2y$10$xtK4SoBlbIVKDoL/boWiA.ytWDusHXDmmRw5Sg2Xzpe6ztFLYlQva', 'E0x34OAcFEOEXvDy29ZNdW6WpTJumg3vrBq3QGlsaaCRSQQClQLYW4odB9q9', '2021-05-05 13:36:03', '2021-05-06 04:52:18', '09093833833', 'deleted', 0),
(8, 'rasta@gmail.com', 'Rasta', 'Fara', NULL, '$2y$10$RLTsaAOzpbKhhNuIHJsF5umJhfRnymEmlVbjEXYcmBeXsKkTNHOsa', NULL, '2021-05-17 00:38:16', '2021-05-17 00:38:16', '08085559999', 'active', 0),
(9, 'raski@gmail.com', 'Raski Mono', 'mmmm', NULL, '$2y$10$WdxcIMpe2PHeiBAOf5oGBO.pI0Z0xurDbGf7BBpWKpjUlImLibiRq', NULL, '2021-05-17 00:40:31', '2021-05-17 00:40:31', '09090909090', 'active', 0),
(10, 'larioxweb@gmail.com', 'Lariox', 'Web', NULL, '$2y$10$0w1mbyyzBy2axJnhCnZqrezgniZE5p3xCgrTVPCHAcSnxKbIpcQq.', NULL, '2021-05-17 21:45:47', '2021-05-17 21:45:47', '090988877373', 'active', 0),
(11, 'chile@gmail.com', 'Chile', 'Osigbo', NULL, '$2y$10$Evg0RKe0FTO4IhJx5yiekevakCiUf5Plcg6Wilzgm69enCjDkYCAm', 'JPxFVfmlrwfxs4itJo1HvMayl8C1fys2Rucf0lZB9HX3eSZmfxb8YmezQfeo', '2021-05-18 04:11:10', '2021-05-18 04:11:10', '09099000000', 'active', 0),
(12, 'dairus@gmail.com', 'Dairus', 'Jabez', NULL, '$2y$10$9WHpQZkKFCPTmKwjCRnfZe1gtab8bal2.wKstUG3JSPZsXXc6xBdW', NULL, '2021-05-18 04:14:15', '2021-05-18 04:14:15', '090933300333', 'active', 0),
(13, 'esther@gmail.com', 'Esther', 'Chi', NULL, '$2y$10$GUueS5wR3twSzkVw2VTu4OltjITZdN/mzrBsqkpKlMlysiSN4INUm', NULL, '2021-05-18 04:15:40', '2021-05-30 14:49:27', '09094448848', 'deleted', 0),
(14, 'chi@gmail.com', 'chi', 'tai', NULL, '$2y$10$UiKCgxBbMJvKQ447kuA8C.I1vgWMZZ6KeZgTC9YHRs0FQlkAetFfi', NULL, '2021-05-18 04:20:12', '2021-05-18 04:20:12', '0909000039393', 'active', 0),
(15, 'ikeogu322@gmail.com', 'Emmanuel', 'Ikeogu', NULL, '$2y$10$7OGQ0bvnexBglbRin9KofOczSiRJ6feHqaltnQmjViEhFqiVN3UGS', NULL, '2021-05-25 14:01:01', '2021-05-25 14:01:01', '08133627610', 'active', 1),
(16, 'oddy@gmail.com', 'Odera', 'Ikeofi', NULL, '$2y$10$Iy5w0JT3Z6zrkgJouovZ4.qVsngmRMU/4urs6nCAP4T15L1UVBrZ2', NULL, '2021-05-26 07:07:38', '2021-05-30 14:49:07', '00000099493', 'deleted', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_photos`
--
ALTER TABLE `property_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_photos`
--
ALTER TABLE `property_photos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
