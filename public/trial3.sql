-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 02:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trial3`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailjobs`
--

CREATE TABLE `detailjobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailwork`
--

CREATE TABLE `detailwork` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobs_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailworks`
--

CREATE TABLE `detailworks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_job`
--

CREATE TABLE `detail_job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `mailbox_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detailjob_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `durasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` int(11) NOT NULL,
  `file` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_translated` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `translator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kategori_bahasa_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `nama_job`, `deskripsi`, `jumlah_halaman`, `tanggal_mulai`, `durasi`, `total_harga`, `file`, `file_translated`, `translator_id`, `kategori_bahasa_id`, `users_id`) VALUES
(4, 'Buku Sulit', 'sss', 20, NULL, '2', 250000, NULL, NULL, 2, 1, 1),
(5, 'sadas', 'asdsad', 12, NULL, '1', 245000, NULL, '1625638895_translated_2.pdf', 2, 2, 1),
(6, 'Buku Bahasa Inggris', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 20, NULL, '2', 120000, NULL, NULL, NULL, 1, 1),
(7, 'asd', 'asd', 12, NULL, '1', 123, NULL, NULL, 2, 1, 1),
(8, 'vavav', 'vavav', 12, NULL, '3', 245000, NULL, NULL, NULL, 2, 1),
(9, 'asd', 'asd', 12, NULL, '2', 245000, NULL, NULL, 2, 1, 1),
(10, 'dfas', 'dsf', 12, NULL, '1', 245000, '1625622943_1_Kegiatan.txt', NULL, 2, 1, 1),
(11, 'asd', 'asd', 12, NULL, '2', 245000, '1625623506_1_Laporan Laba Rugi.Sen_28_Jun_2021_092238.pdf', NULL, 2, 2, 1),
(12, 'asd', 'asd', 123, NULL, '3', 123, '1625623623_1.pdf', '1625625886_translated_2.pdf', 2, 1, 1),
(13, 'iki hud', 'asdfghjkl', 123, NULL, '3', 245000, '1625628813_1.pdf', '1625630597_translated_2.pdf', 2, 2, 1),
(14, 'Laba Rugi', 'Rugi Banget', 123, NULL, '1', 245000, '1625638973_1.pdf', '1625639454_translated_2.pdf', 2, 1, 1),
(15, 'Laporan Laba Rugi', 'Laporan..', 12, NULL, '3', 5000000, '1625642827_1.pdf', '1625642983_translated_2.pdf', 2, 1, 1),
(16, 'Software House Documentary', 'Dokumentasi dari program', 20, NULL, '3', 200000, '1625889593_1.pdf', '1625890051_translated_2.pdf', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_bahasa`
--

CREATE TABLE `kategori_bahasa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori_bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_bahasa`
--

INSERT INTO `kategori_bahasa` (`id`, `nama_kategori_bahasa`) VALUES
(1, 'Indonesia '),
(2, 'Arab');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_job`
--

CREATE TABLE `konfirmasi_job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bukti_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE `mailbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detailjob_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2021_04_24_090112_create_jobs_table', 1),
(4, '2021_04_24_094822_create_kategori_bahasa_table', 1),
(5, '2021_04_25_211345_create_pembayaran_table', 1),
(6, '2021_04_25_211546_create_jenis_pembayaran_table', 1),
(7, '2021_04_25_211634_create_saldo_table', 1),
(8, '2021_04_25_211702_create_detail_job_table', 1),
(9, '2021_04_26_011852_create_konfirmasi_pembayaran_table', 1),
(10, '2021_04_30_145048_create_detailjobs_table', 1),
(12, '2021_06_09_091001_create_proposals_table', 2),
(13, '2021_06_30_020537_create_detailworks_table', 2);

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
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `status_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konfirmasi_pembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pembayaran_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobs_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `jobs_id`, `users_id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 'minta makan', '2021-06-29 21:26:11', '2021-06-29 21:26:11'),
(2, 6, 2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2021-07-06 05:44:04', '2021-07-06 05:44:04'),
(3, 7, 2, 'asd', '2021-07-06 18:09:31', '2021-07-06 18:09:31'),
(4, 9, 2, 'asd', '2021-07-06 18:38:07', '2021-07-06 18:38:07'),
(5, 10, 2, 'ads', '2021-07-06 18:58:12', '2021-07-06 18:58:12'),
(6, 10, 2, 'asd', '2021-07-06 18:58:19', '2021-07-06 18:58:19'),
(7, 11, 2, 'asd', '2021-07-06 19:05:24', '2021-07-06 19:05:24'),
(8, 12, 2, 'asd', '2021-07-06 19:07:22', '2021-07-06 19:07:22'),
(9, 13, 2, 'kjh', '2021-07-06 20:49:02', '2021-07-06 20:49:02'),
(10, 5, 2, 'Good Corporate with Quality', '2021-07-06 23:00:22', '2021-07-06 23:00:22'),
(11, 14, 2, 'Siap Bertanding', '2021-07-06 23:30:07', '2021-07-06 23:30:07'),
(12, 15, 2, 'Look my portfolio', '2021-07-07 00:28:10', '2021-07-07 00:28:10'),
(13, 16, 2, 'Look my Portfolio', '2021-07-09 21:03:30', '2021-07-09 21:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note_review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `konfirmasi_job_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upload_dokumen`
--

CREATE TABLE `upload_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dokumen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_dokumen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran_dokumen` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` int(11) DEFAULT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `notelp`, `level`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Client', 'client@gmail.com', 'client', '$2y$10$BPJczvtG4Ot1w2MF2uU79.TIxB4uamwBxQuwiG.DTljUs4o1c9X3W', NULL, 'Client', NULL, NULL, '2021-06-07 19:30:36', '2021-06-07 19:30:36'),
(2, 'Translator', 'translator@gmail.com', 'translator', '$2y$10$rwhDy3zxUejG.H9Uou4vVuMXC34/fylvYpajqwCFzz3J2iY.F9KM.', NULL, 'Translator', NULL, NULL, '2021-06-07 19:31:39', '2021-06-07 19:31:39'),
(4, 'Admin Translator', 'admin@mail.com', 'admin', '$2y$10$ANaQSNZSa9ly9CkgB5qto.5dHXl41meQf2DihmOhbThK73EzmRWzm', 8922, 'Admin', NULL, NULL, '2021-06-07 20:43:47', '2021-06-07 20:43:47'),
(5, 'Eduardo', 'eduardo@gmail.com', 'eduart', '$2y$10$Hu0MdYbjXRUT05a1s1GsxuUYNnyO9jWO/3hjlQ6.yj3Of.EDNbDHi', NULL, 'Translator', NULL, NULL, '2021-07-09 00:38:02', '2021-07-09 00:38:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailjobs`
--
ALTER TABLE `detailjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailwork`
--
ALTER TABLE `detailwork`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_id` (`jobs_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `detailworks`
--
ALTER TABLE `detailworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_job`
--
ALTER TABLE `detail_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_job_job_id_foreign` (`job_id`),
  ADD KEY `detail_job_pembayaran_id_foreign` (`pembayaran_id`),
  ADD KEY `detail_job_mailbox_id_foreign` (`mailbox_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_detailjob_id_foreign` (`detailjob_id`);

--
-- Indexes for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_kategori_bahasa_id_foreign` (`kategori_bahasa_id`),
  ADD KEY `jobs_users_id_foreign` (`users_id`),
  ADD KEY `translator_id` (`translator_id`);

--
-- Indexes for table `kategori_bahasa`
--
ALTER TABLE `kategori_bahasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_job`
--
ALTER TABLE `konfirmasi_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailbox`
--
ALTER TABLE `mailbox`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mailbox_detailjob_id_foreign` (`detailjob_id`);

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_konfirmasi_pembayaran_id_foreign` (`konfirmasi_pembayaran_id`),
  ADD KEY `pembayaran_jenis_pembayaran_id_foreign` (`jenis_pembayaran_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposals_jobs_id_foreign` (`jobs_id`),
  ADD KEY `proposals_users_id_foreign` (`users_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_job_id_foreign` (`job_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_job_id_foreign` (`job_id`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saldo_pembayaran_id_foreign` (`pembayaran_id`),
  ADD KEY `saldo_konfirmasi_job_id_foreign` (`konfirmasi_job_id`);

--
-- Indexes for table `upload_dokumen`
--
ALTER TABLE `upload_dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upload_dokumen_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `detailjobs`
--
ALTER TABLE `detailjobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailworks`
--
ALTER TABLE `detailworks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_job`
--
ALTER TABLE `detail_job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori_bahasa`
--
ALTER TABLE `kategori_bahasa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konfirmasi_job`
--
ALTER TABLE `konfirmasi_job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mailbox`
--
ALTER TABLE `mailbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload_dokumen`
--
ALTER TABLE `upload_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailwork`
--
ALTER TABLE `detailwork`
  ADD CONSTRAINT `detailwork_ibfk_1` FOREIGN KEY (`jobs_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailwork_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_job`
--
ALTER TABLE `detail_job`
  ADD CONSTRAINT `detail_job_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_job_mailbox_id_foreign` FOREIGN KEY (`mailbox_id`) REFERENCES `mailbox` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_job_pembayaran_id_foreign` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_detailjob_id_foreign` FOREIGN KEY (`detailjob_id`) REFERENCES `detail_job` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_kategori_bahasa_id_foreign` FOREIGN KEY (`kategori_bahasa_id`) REFERENCES `kategori_bahasa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobs_translator_id_foreign` FOREIGN KEY (`translator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobs_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mailbox`
--
ALTER TABLE `mailbox`
  ADD CONSTRAINT `mailbox_detailjob_id_foreign` FOREIGN KEY (`detailjob_id`) REFERENCES `detail_job` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_jenis_pembayaran_id_foreign` FOREIGN KEY (`jenis_pembayaran_id`) REFERENCES `jenis_pembayaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_konfirmasi_pembayaran_id_foreign` FOREIGN KEY (`konfirmasi_pembayaran_id`) REFERENCES `konfirmasi_pembayaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_jobs_id_foreign` FOREIGN KEY (`jobs_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposals_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `saldo_konfirmasi_job_id_foreign` FOREIGN KEY (`konfirmasi_job_id`) REFERENCES `konfirmasi_job` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saldo_pembayaran_id_foreign` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload_dokumen`
--
ALTER TABLE `upload_dokumen`
  ADD CONSTRAINT `upload_dokumen_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
