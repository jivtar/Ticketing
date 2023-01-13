-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 08:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tikets`
--

-- --------------------------------------------------------

--
-- Table structure for table `adartis`
--

CREATE TABLE `adartis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adartis`
--

INSERT INTO `adartis` (`id`, `nama`, `jk`, `ttl`, `created_at`, `updated_at`) VALUES
(1, 'Ariana Grande', 'Perempuan', 'Kedungpane, 8-11-1995', '2023-01-05 01:56:38', '2023-01-05 01:56:38'),
(2, 'Bauki', 'Laki-Laki', 'Genuk, 11-01-2002', '2023-01-05 02:53:37', '2023-01-05 02:53:37'),
(3, 'Rex Orange Country', 'Laki-laki', 'London, 29-04-1995', NULL, '2023-01-12 22:46:26'),
(4, 'Justin Bieber', 'Laki-Laki', 'Ngaliyan, 11-10-2023', '2023-01-12 17:51:02', '2023-01-12 17:51:15'),
(5, 'VinDes', 'Laki-laki', 'Jakarta, 16-07-1984', NULL, NULL),
(6, 'Niki Zefanya', 'Perempuan', 'Jakarta, 24-01-1999', NULL, '2023-01-13 00:22:05'),
(7, 'Keisya Levronka', 'Perempuan', 'Surabaya, 02-02-2003', NULL, '2023-01-13 00:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `artis`
--

CREATE TABLE `artis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artis` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artis`
--

INSERT INTO `artis` (`id`, `artis`, `jk`, `ttl`, `created_at`, `updated_at`) VALUES
(1, 'Ariana Grande', 'Perempuan', 'Kedungpane, 8-11-1995', NULL, NULL),
(2, 'Bauki', 'Laki-Laki', 'Genuk, 11-01-2002', NULL, NULL),
(3, 'Rex Orange Country', 'Laki-Laki', 'London, 29-04-1995', NULL, NULL),
(4, 'Justin Bieber', 'Laki-Laki', 'Ngaliyan, 11-10-2023', NULL, NULL),
(5, 'VinDes', 'Laki-Laki', 'Jakarta, 16-07-1984', NULL, NULL),
(6, 'Niki Zefanya', 'Perempuan', 'Jakarta, 24-01-1999', NULL, NULL),
(7, 'Keisya Levronka', 'Perempuan', 'Surabaya, 02-02-2003', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `denahkurses`
--

CREATE TABLE `denahkurses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zona_kursi` varchar(255) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `id_venue` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `denahkurses`
--

INSERT INTO `denahkurses` (`id`, `zona_kursi`, `kapasitas`, `id_venue`, `created_at`, `updated_at`) VALUES
(1, 'Depan', 6, 2, '2023-01-12 21:48:34', '2023-01-12 21:51:58'),
(2, 'Tengah A', 15, 3, NULL, NULL),
(3, 'Tengah B', 20, 2, NULL, NULL),
(4, 'Belakang', 50, 4, NULL, NULL),
(6, 'VIP', 40, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detailorders`
--

CREATE TABLE `detailorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_order` int(11) NOT NULL,
  `kode_tiket` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailorders`
--

INSERT INTO `detailorders` (`id`, `kode_order`, `kode_tiket`, `created_at`, `updated_at`) VALUES
(2, 1, 'P01', '2023-01-12 21:02:32', '2023-01-12 21:02:32'),
(3, 2, 'P02', NULL, NULL),
(4, 3, 'P031', NULL, NULL),
(5, 7, 'P99', NULL, NULL),
(6, 9, 'P1000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eventvenue`
--

CREATE TABLE `eventvenue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venue` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `hargatikets`
--

CREATE TABLE `hargatikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_tempatduduk` int(11) NOT NULL,
  `tiket_habis` int(11) NOT NULL,
  `sisa_tiket` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hargatikets`
--

INSERT INTO `hargatikets` (`id`, `id_jadwal`, `id_tempatduduk`, `tiket_habis`, `sisa_tiket`, `harga`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 3, 5, 10000, '2023-01-12 22:22:58', '2023-01-12 22:22:58'),
(3, 3, 3, 3, 2, 50000, NULL, NULL),
(4, 4, 4, 4, 3, 100000, NULL, NULL),
(5, 5, 5, 5, 7, 200000, NULL, NULL),
(6, 6, 6, 3, 3, 250000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwalevents`
--

CREATE TABLE `jadwalevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_tempatduduk` int(11) NOT NULL,
  `id_artis` int(11) NOT NULL,
  `id_venue` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `waktu_mulai` varchar(255) NOT NULL,
  `waktu_selesai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwalevents`
--

INSERT INTO `jadwalevents` (`id`, `id_event`, `id_tempatduduk`, `id_artis`, `id_venue`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 1, '2023-01-23', '12.00', '15.00', NULL, NULL),
(3, 2, 2, 2, 2, '2023-01-21', '10.00', '13.00', '2023-01-12 20:38:31', '2023-01-12 20:38:43'),
(4, 3, 43, 5, 4, '19-12-2022', '19.00', '23.00', NULL, NULL),
(5, 4, 4, 4, 2, '17-12-2022', '14.00', '23.40', NULL, NULL),
(6, 6, 13, 6, 3, '21-01-2023', '18.00', '01.00', '2023-01-12 23:02:55', '2023-01-12 23:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `kategorievent`
--

CREATE TABLE `kategorievent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_12_15_063755_create_users_table', 1),
(5, '2022_12_17_040038_create_artis_table', 1),
(6, '2022_12_17_051038_create_adartis_table', 1),
(7, '2023_01_05_093039_create_detailorder_table', 2),
(8, '2023_01_05_094021_create_hargatiket_table', 3),
(9, '2023_01_05_094544_create_jadwalevent_table', 4),
(10, '2023_01_05_115506_create_eventvenue_table', 5),
(11, '2023_01_05_120337_create_denahkursi_table', 6),
(12, '2023_01_05_120935_create_kategorievent_table', 7),
(13, '2023_01_05_121410_create_invoice_table', 8),
(14, '2023_01_05_121554_create_namaevent_table', 9),
(15, '2023_01_13_014614_create_jadwalevent_table', 10),
(16, '2023_01_13_015004_create_jadwalevents_table', 11),
(17, '2023_01_13_035208_create_detailorder_table', 12),
(18, '2023_01_13_035332_create_detailorders_table', 13),
(19, '2023_01_13_040813_create_denahkursis_table', 14),
(20, '2023_01_13_044328_create_denahkurses_table', 15),
(21, '2023_01_13_045451_create_hargatikets_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `namaevent`
--

CREATE TABLE `namaevent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adartis`
--
ALTER TABLE `adartis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denahkurses`
--
ALTER TABLE `denahkurses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailorders`
--
ALTER TABLE `detailorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventvenue`
--
ALTER TABLE `eventvenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hargatikets`
--
ALTER TABLE `hargatikets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwalevents`
--
ALTER TABLE `jadwalevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorievent`
--
ALTER TABLE `kategorievent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namaevent`
--
ALTER TABLE `namaevent`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adartis`
--
ALTER TABLE `adartis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `artis`
--
ALTER TABLE `artis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `denahkurses`
--
ALTER TABLE `denahkurses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detailorders`
--
ALTER TABLE `detailorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventvenue`
--
ALTER TABLE `eventvenue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hargatikets`
--
ALTER TABLE `hargatikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwalevents`
--
ALTER TABLE `jadwalevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategorievent`
--
ALTER TABLE `kategorievent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `namaevent`
--
ALTER TABLE `namaevent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
