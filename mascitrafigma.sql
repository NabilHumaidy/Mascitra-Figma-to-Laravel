-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 05:47 AM
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
-- Database: `mascitrafigma`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `has` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `survey` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `budget`, `has`, `company`, `survey`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@test.test', '123312124', 'above150', '[\"uiux\",\"idea\",\"specification\",\"code\"]', 'Test', 'Google', 'Test', NULL, '2023-12-01 00:06:13', '2023-12-01 00:06:13'),
(2, 'awsd', 'awsd@awsd.awsd', '123124', 'above150', '[\"uiux\",\"idea\"]', 'TEst', 'Blog', 'awsd', NULL, '2023-12-01 00:46:35', '2023-12-01 00:46:35'),
(3, 'ketiga', 'asdasdf@afssad.sad', '213214', 'above150', '[\"uiux\",\"idea\",\"specification\",\"code\"]', 'TEst', 'Google', 'ketiga', NULL, '2023-12-01 01:02:13', '2023-12-01 01:02:13'),
(5, 'Lorem Ipsum', 'lorem@ipsum.com', '123234', 'above150', '[\"uiux\",\"idea\",\"specification\",\"code\"]', 'Lorem Ipsum', 'Google', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus aliquid deserunt fugiat dolor inventore repudiandae dolorum dolore. Delectus molestias dicta reprehenderit, nihil laudantium aspernatur blanditiis optio quasi earum sapiente ullam nemo odio quam, sequi voluptatem debitis. Saepe, animi amet consequatur ullam, atque consequuntur deserunt pariatur voluptatum iste eum accusamus nostrum nemo officiis ex ipsam sunt excepturi rerum hic autem temporibus exercitationem? Saepe recusandae praesentium ad fuga maxime eveniet provident, suscipit harum omnis, delectus similique doloremque assumenda illo! Odit praesentium alias iusto adipisci quibusdam magnam nobis minus enim! Quo aperiam fuga, repudiandae voluptas dolore rerum praesentium nesciunt repellat quasi. Architecto facilis atque, a saepe optio adipisci, blanditiis consequuntur sint accusantium doloremque soluta quas temporibus. Repellendus facilis distinctio, dicta eum nulla id modi repellat pariatur saepe dolorum culpa autem vero placeat esse ea inventore doloremque cupiditate voluptate. Dolorem aperiam deleniti sint delectus ipsam eos rem enim placeat tempore asperiores voluptates repellat voluptatibus cumque, laborum aliquam quae dolore deserunt quidem illo? Maxime consequuntur ex eius eaque molestias esse est repellendus, voluptates assumenda quidem, architecto, aliquam accusantium debitis recusandae amet deleniti animi id quasi praesentium quae velit nostrum placeat! Facere, voluptates quaerat maxime repellendus soluta non fuga optio, sit libero nemo delectus eius totam. Fuga facilis voluptates perspiciatis praesentium, libero exercitationem nemo amet laboriosam iusto ullam totam incidunt sunt recusandae distinctio voluptatum. Rerum provident molestias aliquam illum aliquid eaque dolorum fuga? Minima ipsum at expedita nobis quia nisi natus, enim eius tenetur fugiat est vitae harum exercitationem voluptates atque nostrum. Animi explicabo quam, repellat maiores pariatur iusto excepturi quibusdam accusantium debitis, fuga tempore obcaecati? Illum provident autem excepturi similique nihil. Quas optio veritatis iure nobis modi aspernatur quae porro dignissimos corporis dolorem illum qui ab debitis quis consequuntur officia similique, necessitatibus dolore eaque soluta vel doloribus officiis accusantium. Vel quidem consectetur omnis accusamus beatae.', NULL, '2023-12-01 02:15:04', '2023-12-01 02:15:04'),
(6, 'Microsoft', 'official@microsoft.com', '1232142', 'above150', '[\"idea\",\"specification\"]', 'Microsoft.Inc', 'Google', 'Hi i would like to make new Operation System named Windows 15, with the specification of Windows 11, Mac OS, Linux, android, IOS, and the 1000 Years Future of technology, so you must go to future with the time machine that you cant make of course it is. We will pay you with our stocks share, you will have 99% of it. And no its no Microsoft Stocks, its just small retail store', NULL, '2023-12-01 02:43:00', '2023-12-01 02:43:00');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_01_040449_create_messages_table', 2),
(6, '2023_12_04_013518_create_services_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Website', 'Website is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptatum reiciendis laboriosam quae, dignissimos quasi ipsum dolores dolorem cupiditate velit? Rem ducimus reprehenderit dolor qui dolore tempora repellat fugiat. Deleniti omnis, eum soluta aspernatur obcaecati tenetur repellat temporibus quidem corporis non quaerat, adipisci vel, dignissimos sit fugit placeat commodi vero. Quia exercitationem minus perferendis praesentium neque repellendus nam ratione veritatis consequatur aut. Dignissimos voluptatem, exercitationem pariatur odit quae consequatur quibusdam nihil, adipisci nostrum obcaecati omnis.', '202312040538_daD16aTCn6.png', '2023-12-03 22:38:03', '2023-12-04 00:14:18'),
(2, 'Android', 'Android is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptatum reiciendis laboriosam quae, dignissimos quasi ipsum dolores dolorem cupiditate velit? Rem ducimus reprehenderit dolor qui dolore tempora repellat fugiat. Deleniti omnis, eum soluta aspernatur obcaecati tenetur repellat temporibus quidem corporis non quaerat, adipisci vel, dignissimos sit fugit placeat commodi vero. Quia exercitationem minus perferendis praesentium neque repellendus nam ratione veritatis consequatur aut. Dignissimos voluptatem, exercitationem pariatur odit quae consequatur quibusdam nihil, adipisci nostrum obcaecati omnis.', '202312040548_xr3KW4mm38.png', '2023-12-03 22:48:30', '2023-12-04 00:16:08'),
(4, 'UI / UX', 'UI / UX is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptatum reiciendis laboriosam quae, dignissimos quasi ipsum dolores dolorem cupiditate velit? Rem ducimus reprehenderit dolor qui dolore tempora repellat fugiat. Deleniti omnis, eum soluta aspernatur obcaecati tenetur repellat temporibus quidem corporis non quaerat, adipisci vel, dignissimos sit fugit placeat commodi vero. Quia exercitationem minus perferendis praesentium neque repellendus nam ratione veritatis consequatur aut. Dignissimos voluptatem, exercitationem pariatur odit quae consequatur quibusdam nihil, adipisci nostrum obcaecati omnis.', '202312040548_hunwYZdLai.png', '2023-12-03 22:48:53', '2023-12-04 00:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('User','Admin') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `nama`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', NULL, 'Admin', '$2y$12$NRcX0EWQ.dJUWEv9rp2CJ.LXyHfeGrB8I24dJPUNsOXt0KnRDv6qe', 'Admin', NULL, '2023-11-29 23:23:32', '2023-11-29 23:23:32'),
(2, 'user@gmail.com', NULL, 'User', '$2y$12$jwzoDujw2YC45V3DMnjSP.McI5cKz/u7Dr.tYfFaimEn9UZyyHJCm', 'User', NULL, '2023-11-29 23:36:00', '2023-11-29 23:36:00'),
(3, 'test@gmail.com', NULL, 'Test', '$2y$12$8Cgh8moiPnLPGjuPQc81je8h8RIpZjzmPdc9o/b.L4/u72F6/ScwS', 'User', NULL, '2023-11-29 23:49:14', '2023-11-29 23:49:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
