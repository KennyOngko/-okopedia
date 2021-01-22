-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 10:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `$okopedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `Quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TV', NULL, NULL),
(2, 'Handphone', NULL, NULL),
(3, 'Laptop', NULL, NULL),
(7, 'Charger', '2020-12-07 08:40:17', '2020-12-07 08:40:17'),
(8, 'Tablet', '2020-12-07 10:05:13', '2020-12-07 10:05:13');

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
(1, '2020_11_24_034229_create_roles_table', 1),
(2, '2020_11_24_034249_create_users_table', 1),
(3, '2020_11_24_034355_create_categories_table', 1),
(4, '2020_11_24_034425_create_products_table', 1),
(5, '2020_11_24_034527_create_carts_table', 1),
(6, '2020_12_05_111531_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Samsung LED Curved TV 49 Inch', 'warna hitam', 161450000, 'img\\samsungLED.jpg', NULL, NULL),
(2, 1, 'Sharp LED TV 32 Inch', 'warna hitam', 9020000, 'img\\sharpTV.jpg', NULL, NULL),
(3, 1, 'LG LED TV 55 Inch', 'warna hitam', 22420000, 'img\\LG.jpg', NULL, NULL),
(4, 1, 'Mi TV 55inch 4K', 'Ready kirim hari ini, FREE ONGKIR!', 5699000, 'img\\xiaomi.jpg', NULL, NULL),
(5, 2, 'Iphone 12 pro max 256 GB', 'warna hitam', 15420000, 'img\\iphone12.png', NULL, NULL),
(6, 2, 'Samsung 20 Ultra 256 GB', 'warna hitam', 1420000, 'img\\samsung.jpg', NULL, NULL),
(7, 2, 'Iphone 11 pro max 256 GB', 'warna hitam', 24200000, 'img\\iphone11.png', NULL, NULL),
(8, 3, 'Macbook 16\" Inch 2020 512 GB', 'warna hitam', 42500000, 'img\\macbook.png', NULL, NULL),
(9, 3, 'ASUS ROG Zephyrus G14 (GA401)', 'warna hitam', 10420000, 'img\\asus.jpg', NULL, NULL),
(10, 3, 'Dell Alienware M14X', 'warna hitam', 14420000, 'img\\dell.jpg', NULL, NULL),
(13, 8, 'IPad 12 Pro 64 GB', 'WiFi + Cellular Data 64GB', 1000000, 'img/ipad.jpg', '2020-12-08 06:58:13', '2020-12-08 06:58:13'),
(18, 7, 'Kenny Ongko', 'Dijual teman gatau diri', 101, 'img/kennyo ongko.png', '2020-12-11 07:48:57', '2020-12-11 07:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', NULL, NULL),
(2, 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `Quantity` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `created_at`, `updated_at`, `user_id`, `product_id`, `Quantity`, `date`) VALUES
(1, '2020-12-05 04:37:34', '2020-12-05 04:37:34', 3, 2, 1, '2020-12-05 11:37:34'),
(2, '2020-12-05 04:55:48', '2020-12-05 04:55:48', 3, 2, 1, '2020-12-05 11:55:48'),
(3, '2020-12-05 04:55:48', '2020-12-05 04:55:48', 3, 2, 4, '2020-12-05 11:55:48'),
(4, '2020-12-05 05:04:57', '2020-12-05 05:04:57', 3, 10, 4, '2020-12-05 12:04:57'),
(5, '2020-12-05 05:04:57', '2020-12-05 05:04:57', 3, 1, 1, '2020-12-05 12:04:57'),
(6, '2020-12-05 06:27:46', '2020-12-05 06:27:46', 3, 3, 4, '2020-12-05 13:27:46'),
(7, '2020-12-06 07:11:00', '2020-12-06 07:11:00', 3, 1, 3, '2020-12-06 14:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'tasyaprajna', 'prajnacantik@gmail.com', NULL, '$2y$10$sUfDlcr0xDEF3j96RfW3bO7nQR/L0dsPn2gWeQPO2NngYm.tGN7vi', NULL, NULL, NULL),
(2, 2, 'kennyongko', 'kennyjelek@gmail.com', NULL, '$2y$10$IYWBf5zCbC0m9OpBAATTD.TDie//VMGQcn2bHG.PoDEKKQ2ZZyzI2', NULL, NULL, NULL),
(3, 1, 'prajna', 'prajnauser@gmail.com', NULL, '$2y$10$2E9FuEAkpAwpj3S/h/fTDOffoTRIsufvZvWZvNU45yEhVEHCKhWIe', '3pPeoe9NJhOdmrSVcXxKtXpsbufIy0YBCfY7rQgqSoHbfbDuaLcHHbulcFyZ', '2020-12-05 04:32:40', '2020-12-05 04:32:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
