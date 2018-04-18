-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2018 at 10:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptkis`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswas`
--

CREATE TABLE `beasiswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nilai_un` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan` int(11) NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `prestasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kriteria_rumah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepimilikan_rumah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_rumah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mandi_cuci_kakus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `jarak_pusat_kota` int(11) NOT NULL,
  `sumber_air` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_mahasiswa` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswas`
--

INSERT INTO `beasiswas` (`id`, `nilai_un`, `penghasilan`, `tanggungan`, `prestasi`, `kriteria_rumah`, `kepimilikan_rumah`, `isi_rumah`, `mandi_cuci_kakus`, `luas_tanah`, `jarak_pusat_kota`, `sumber_air`, `created_at`, `updated_at`, `deleted_at`, `id_mahasiswa`) VALUES
(1, '7,5', 1200000, 3, 'ada', 'Rumah kayu panggung', 'Pribadi', '4', 'Ada luar rumah', 125, 7, 'Sumur', '2018-04-17 15:17:05', '2018-04-17 15:27:19', '2018-04-17 15:27:19', 7),
(2, '7,8', 1500000, 3, 'Ada', 'Rumah Kayu Panggung', 'Sewa tahunan', '3', 'Ada dalam rumah', 100, 5, 'PDAM', '2018-04-17 15:31:03', '2018-04-17 15:31:03', NULL, 8),
(3, '8', 2000000, 2, 'Ada', 'Rumah kayu alas semen', 'Pribadi', '3', 'Ada luar rumah', 120, 7, 'PDAM', '2018-04-17 15:41:05', '2018-04-17 15:41:05', NULL, 21),
(4, '7,5', 1300000, 3, 'Ada', 'Rumah Kayu Panggung', 'Sewa bulanan', '2', 'Ada dalam rumah', 150, 8, 'PDAM', '2018-04-17 15:42:04', '2018-04-17 15:42:04', NULL, 22),
(5, '7', 2500000, 4, 'Ada', 'Rumah permanen', 'Pribadi', '5', 'Ada dalam rumah', 200, 3, 'Kemasan', '2018-04-17 15:43:00', '2018-04-17 15:43:00', NULL, 23),
(6, '7,6', 1800000, 3, 'Ada', 'Rumah kayu alas semen', 'Sewa tahunan', '4', 'Ada dalam rumah', 100, 5, 'PDAM', '2018-04-17 15:44:00', '2018-04-17 15:44:00', NULL, 24),
(7, '7', 3000000, 5, 'Ada', 'Rumah permanen', 'Pribadi', '3', 'Ada dalam rumah', 180, 6, 'Kemasan', '2018-04-17 15:45:31', '2018-04-17 15:45:31', NULL, 25),
(8, '8', 2200000, 2, 'Ada', 'Rumah kayu alas semen', 'Sewa tahunan', '3', 'Ada dalam rumah', 110, 9, 'Sumur', '2018-04-17 15:46:55', '2018-04-17 15:46:55', NULL, 26),
(9, '7,2', 1000000, 5, 'Ada', 'Rumah Kayu Panggung', 'Numpang', '2', 'Ada tidak layak', 90, 11, 'Sungai', '2018-04-17 15:47:54', '2018-04-17 15:47:54', NULL, 27),
(10, '6,8', 1000000, 6, 'Ada', 'Rumah Kayu Panggung', 'Numpang', '2', 'Ada tidak layak', 95, 12, 'Sumur', '2018-04-17 15:49:01', '2018-04-17 15:49:01', NULL, 28),
(11, '7,1', 1600000, 2, 'Ada', 'Rumah kayu alas semen', 'Sewa tahunan', '2', 'Ada dalam rumah', 0, 5, 'Sumur', '2018-04-17 15:50:05', '2018-04-17 15:50:05', NULL, 29),
(14, '6,5', 2300000, 5, 'Ada', 'Rumah kayu alas semen', 'Pribadi', '4', 'Ada dalam rumah', 130, 7, 'PDAM', '2018-04-17 15:51:13', '2018-04-17 15:51:13', NULL, 30),
(15, '7,7', 1400000, 3, 'Ada', 'Rumah Kayu Panggung', 'Sewa bulanan', '3', 'Ada dalam rumah', 160, 3, 'Sumur', '2018-04-17 15:52:27', '2018-04-17 15:52:27', NULL, 31),
(16, '7,9', 1500000, 4, 'Ada', 'Rumah Kayu Panggung', 'Sewa tahunan', '3', 'Ada tidak layak', 150, 5, 'Sumur', '2018-04-17 15:55:45', '2018-04-17 15:55:45', NULL, 32),
(17, '8,2', 1700000, 3, 'Ada', 'Rumah kayu alas semen', 'Sewa tahunan', '3', 'Ada dalam rumah', 130, 7, 'PDAM', '2018-04-17 15:56:29', '2018-04-17 15:56:29', NULL, 33);

-- --------------------------------------------------------

--
-- Table structure for table `data_berita_faks`
--

CREATE TABLE `data_berita_faks` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_univ` int(10) UNSIGNED NOT NULL,
  `id_fak` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_berita_faks`
--

INSERT INTO `data_berita_faks` (`id`, `id_univ`, `id_fak`, `kategori`, `judul`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 05:29:13', '2018-03-11 05:29:13', NULL),
(2, 1, 1, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 05:29:42', '2018-03-11 05:29:42', NULL),
(3, 1, 2, 'SEMINAR', 'SEMINAR', 'SEMINAR2', '2018-03-11 06:02:12', '2018-03-11 06:02:12', NULL),
(4, 1, 2, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN2', '2018-03-11 06:02:35', '2018-03-11 06:02:35', NULL),
(5, 1, 3, 'SEMINAR', 'SEMINAR', 'SEMINAR3', '2018-03-11 06:03:45', '2018-03-11 06:03:45', NULL),
(6, 1, 3, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN3', '2018-03-11 06:04:21', '2018-03-11 06:04:21', NULL),
(7, 1, 4, 'SEMINAR', 'SEMINAR', 'SEMINAR4', '2018-03-11 06:06:23', '2018-03-11 06:06:23', NULL),
(8, 1, 4, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN4', '2018-03-11 06:06:38', '2018-03-11 06:06:38', NULL),
(9, 1, 5, 'SEMINAR', 'SEMINAR', 'SEMINAR5', '2018-03-11 06:07:03', '2018-03-11 06:07:03', NULL),
(10, 1, 5, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN5', '2018-03-11 06:07:32', '2018-03-11 06:07:32', NULL),
(11, 1, 6, 'SEMINAR', 'SEMINAR', 'SEMINAR6', '2018-03-11 06:16:17', '2018-03-11 06:16:17', NULL),
(12, 1, 6, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN6', '2018-03-11 06:16:50', '2018-03-11 06:16:50', NULL),
(13, 1, 7, 'SEMINAR', 'SEMINAR', 'SEMINAR7', '2018-03-11 06:17:47', '2018-03-11 06:17:47', NULL),
(14, 1, 7, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN7', '2018-03-11 06:18:11', '2018-03-11 06:18:11', NULL),
(15, 2, 1, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 06:23:55', '2018-03-11 06:23:55', NULL),
(16, 2, 1, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 06:24:31', '2018-03-11 06:24:31', NULL),
(17, 2, 2, 'SEMINAR', 'SEMINAR', 'SEMINAR2', '2018-03-11 06:24:49', '2018-03-11 06:24:49', NULL),
(18, 2, 2, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN2', '2018-03-11 06:25:08', '2018-03-11 06:25:08', NULL),
(19, 2, 3, 'SEMINAR', 'SEMINAR', 'SEMINAR3', '2018-03-11 06:25:25', '2018-03-11 06:25:25', NULL),
(20, 2, 3, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN3', '2018-03-11 06:25:49', '2018-03-11 06:25:49', NULL),
(21, 2, 4, 'SEMINAR', 'SEMINAR', 'SEMINAR4', '2018-03-11 06:26:05', '2018-03-11 06:26:05', NULL),
(22, 2, 4, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN4', '2018-03-11 06:26:19', '2018-03-11 06:26:19', NULL),
(23, 2, 5, 'SEMINAR', 'SEMINAR', 'SEMINAR5', '2018-03-11 06:26:53', '2018-03-11 06:26:53', NULL),
(24, 2, 5, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN5', '2018-03-11 06:27:09', '2018-03-11 06:27:09', NULL),
(25, 2, 6, 'SEMINAR', 'SEMINAR', 'SEMINAR6', '2018-03-11 06:27:25', '2018-03-11 06:27:25', NULL),
(26, 2, 6, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN6', '2018-03-11 06:28:02', '2018-03-11 06:28:02', NULL),
(27, 2, 7, 'SEMINAR', 'SEMINAR', 'SEMINAR7', '2018-03-11 06:28:16', '2018-03-11 06:28:16', NULL),
(28, 2, 7, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN7', '2018-03-11 06:28:28', '2018-03-11 06:28:28', NULL),
(29, 3, 1, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 06:31:14', '2018-03-11 06:31:14', NULL),
(30, 3, 1, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 06:31:40', '2018-03-11 06:31:40', NULL),
(31, 3, 2, 'SEMINAR', 'SEMINAR', 'SEMINAR2', '2018-03-11 06:31:58', '2018-03-11 06:31:58', NULL),
(32, 3, 2, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN2', '2018-03-11 06:32:14', '2018-03-11 06:32:14', NULL),
(33, 3, 3, 'SEMINAR', 'SEMINAR', 'SEMINAR3', '2018-03-11 06:34:39', '2018-03-11 06:34:39', NULL),
(34, 3, 3, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN3', '2018-03-11 06:34:55', '2018-03-11 06:34:55', NULL),
(35, 3, 4, 'SEMINAR', 'SEMINAR', 'SEMINAR4', '2018-03-11 06:39:01', '2018-03-11 06:39:01', NULL),
(36, 3, 4, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN4', '2018-03-11 06:39:17', '2018-03-11 06:39:17', NULL),
(37, 3, 5, 'SEMINAR', 'SEMINAR', 'SEMINAR5', '2018-03-11 06:39:34', '2018-03-11 06:39:34', NULL),
(38, 3, 5, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN5', '2018-03-11 06:39:49', '2018-03-11 06:39:49', NULL),
(39, 3, 6, 'SEMINAR', 'SEMINAR', 'SEMINAR6', '2018-03-11 06:40:06', '2018-03-11 06:40:06', NULL),
(40, 3, 6, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN6', '2018-03-11 06:40:33', '2018-03-11 06:40:33', NULL),
(41, 3, 7, 'SEMINAR', 'SEMINAR', 'SEMINAR7', '2018-03-11 06:40:55', '2018-03-11 06:40:55', NULL),
(42, 3, 7, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN7', '2018-03-11 06:41:13', '2018-03-11 06:41:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_berita_jurs`
--

CREATE TABLE `data_berita_jurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_univ` int(10) UNSIGNED NOT NULL,
  `id_fak` int(10) UNSIGNED NOT NULL,
  `id_jur` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_berita_jurs`
--

INSERT INTO `data_berita_jurs` (`id`, `id_univ`, `id_fak`, `id_jur`, `kategori`, `judul`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 06:52:15', '2018-03-11 06:52:15', NULL),
(2, 1, 1, 1, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 06:52:44', '2018-03-11 06:52:44', NULL),
(3, 1, 1, 2, 'SEMINAR', 'SEMINAR', 'SEMINAR2', '2018-03-11 06:53:22', '2018-03-11 06:53:22', NULL),
(4, 1, 1, 2, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN2', '2018-03-11 06:53:39', '2018-03-11 06:53:39', NULL),
(5, 1, 2, 3, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 06:57:02', '2018-03-11 07:08:29', NULL),
(6, 1, 2, 3, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:02:40', '2018-03-11 07:08:37', NULL),
(7, 1, 3, 4, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:10:35', '2018-03-11 07:10:35', NULL),
(8, 1, 3, 4, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:10:54', '2018-03-11 07:10:54', NULL),
(9, 1, 3, 5, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:15:10', '2018-03-11 07:15:10', NULL),
(10, 1, 3, 5, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:15:36', '2018-03-11 07:15:36', NULL),
(11, 1, 4, 6, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:20:50', '2018-03-11 07:20:50', NULL),
(12, 1, 4, 6, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:21:07', '2018-03-11 07:21:07', NULL),
(13, 1, 5, 7, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:21:28', '2018-03-11 07:21:28', NULL),
(14, 1, 5, 7, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:21:46', '2018-03-11 07:21:46', NULL),
(15, 1, 6, 8, 'SEMINAR', '', 'SEMINAR1', '2018-03-11 07:22:07', '2018-03-11 07:22:07', NULL),
(16, 1, 6, 8, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:22:29', '2018-03-11 07:22:29', NULL),
(17, 1, 6, 9, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:23:27', '2018-03-11 07:23:27', NULL),
(18, 1, 6, 9, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:23:39', '2018-03-11 07:23:39', NULL),
(19, 1, 6, 10, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:24:06', '2018-03-11 07:24:06', NULL),
(20, 1, 6, 10, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:24:21', '2018-03-11 07:24:21', NULL),
(21, 1, 7, 11, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:35:58', '2018-03-11 07:35:58', NULL),
(22, 1, 7, 11, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:36:14', '2018-03-11 07:36:14', NULL),
(23, 2, 8, 12, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:38:49', '2018-03-11 07:38:49', NULL),
(24, 2, 8, 12, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:39:23', '2018-03-11 07:39:23', NULL),
(25, 2, 8, 13, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:39:42', '2018-03-11 07:39:50', NULL),
(26, 2, 8, 13, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:40:07', '2018-03-11 07:40:07', NULL),
(27, 2, 8, 14, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:40:36', '2018-03-11 07:40:36', NULL),
(28, 2, 8, 14, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:40:50', '2018-03-11 07:40:50', NULL),
(29, 2, 9, 15, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:41:26', '2018-03-11 07:41:26', NULL),
(30, 2, 9, 15, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 07:41:42', '2018-03-11 07:41:42', NULL),
(31, 2, 9, 16, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 07:42:16', '2018-03-11 07:42:16', NULL),
(32, 2, 9, 16, 'PERLOMBAAN', 'PERLOMBAAN', '', '2018-03-11 07:42:30', '2018-03-11 07:42:30', NULL),
(33, 2, 9, 17, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:05:04', '2018-03-11 08:05:04', NULL),
(34, 2, 9, 17, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:05:18', '2018-03-11 08:05:18', NULL),
(35, 2, 9, 18, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:05:37', '2018-03-11 08:05:37', NULL),
(36, 2, 9, 18, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:05:52', '2018-03-11 08:05:52', NULL),
(37, 2, 10, 19, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:06:18', '2018-03-11 08:06:18', NULL),
(38, 2, 10, 19, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:06:31', '2018-03-11 08:06:31', NULL),
(39, 2, 10, 20, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:07:11', '2018-03-11 08:07:11', NULL),
(40, 2, 10, 20, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:11:25', '2018-03-11 08:11:25', NULL),
(41, 2, 10, 21, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:15:20', '2018-03-11 08:15:20', NULL),
(42, 2, 10, 21, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:15:40', '2018-03-11 08:15:40', NULL),
(43, 2, 10, 22, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:15:54', '2018-03-11 08:15:54', NULL),
(44, 2, 10, 22, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:16:04', '2018-03-11 08:16:04', NULL),
(45, 2, 11, 23, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:16:23', '2018-03-11 08:16:23', NULL),
(46, 2, 11, 23, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:16:39', '2018-03-11 08:16:39', NULL),
(47, 2, 11, 24, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:17:03', '2018-03-11 08:17:03', NULL),
(48, 2, 11, 24, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:17:14', '2018-03-11 08:17:14', NULL),
(49, 2, 12, 25, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:17:40', '2018-03-11 08:17:40', NULL),
(50, 2, 12, 25, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:17:58', '2018-03-11 08:17:58', NULL),
(51, 2, 12, 26, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:18:19', '2018-03-11 08:18:19', NULL),
(52, 2, 12, 26, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:18:35', '2018-03-11 08:18:35', NULL),
(53, 2, 12, 27, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:18:53', '2018-03-11 08:18:53', NULL),
(54, 2, 12, 27, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:19:04', '2018-03-11 08:19:04', NULL),
(55, 2, 13, 28, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:19:30', '2018-03-11 08:19:30', NULL),
(56, 2, 13, 28, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:20:04', '2018-03-11 08:20:04', NULL),
(57, 2, 13, 29, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:20:26', '2018-03-11 08:20:26', NULL),
(58, 2, 13, 29, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:20:46', '2018-03-11 08:20:46', NULL),
(59, 2, 14, 30, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:21:09', '2018-03-11 08:21:09', NULL),
(60, 2, 14, 30, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:21:24', '2018-03-11 08:21:24', NULL),
(61, 3, 15, 31, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:24:20', '2018-03-11 08:24:20', NULL),
(62, 3, 15, 31, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:24:37', '2018-03-11 08:24:37', NULL),
(63, 3, 15, 32, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:24:54', '2018-03-11 08:24:54', NULL),
(64, 3, 15, 32, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:25:07', '2018-03-11 08:25:07', NULL),
(65, 3, 15, 33, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:25:39', '2018-03-11 08:25:39', NULL),
(66, 3, 15, 33, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:25:54', '2018-03-11 08:25:54', NULL),
(67, 3, 16, 34, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:26:31', '2018-03-11 08:26:31', NULL),
(68, 3, 16, 34, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:26:44', '2018-03-11 08:26:44', NULL),
(69, 3, 16, 35, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:27:10', '2018-03-11 08:27:10', NULL),
(70, 3, 16, 35, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:27:29', '2018-03-11 08:27:29', NULL),
(71, 3, 17, 36, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:28:11', '2018-03-11 08:28:11', NULL),
(72, 3, 17, 36, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:28:28', '2018-03-11 08:28:28', NULL),
(73, 3, 17, 37, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:29:57', '2018-03-11 08:29:57', NULL),
(74, 3, 17, 37, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:30:11', '2018-03-11 08:30:11', NULL),
(75, 3, 17, 38, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:30:30', '2018-03-11 08:30:30', NULL),
(76, 3, 17, 38, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:30:51', '2018-03-11 08:30:51', NULL),
(77, 3, 17, 39, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 08:31:26', '2018-03-11 08:31:26', NULL),
(78, 3, 17, 39, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 08:31:47', '2018-03-11 08:31:47', NULL),
(79, 3, 18, 40, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:12:35', '2018-03-11 09:12:35', NULL),
(80, 3, 18, 40, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:12:49', '2018-03-11 09:12:49', NULL),
(81, 3, 18, 41, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:13:03', '2018-03-11 09:13:03', NULL),
(82, 3, 18, 41, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:13:35', '2018-03-11 09:13:35', NULL),
(83, 3, 18, 42, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:14:00', '2018-03-11 09:14:00', NULL),
(84, 3, 18, 42, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:14:16', '2018-03-11 09:14:16', NULL),
(85, 3, 18, 43, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:14:33', '2018-03-11 09:14:33', NULL),
(86, 3, 18, 43, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:14:57', '2018-03-11 09:14:57', NULL),
(87, 3, 18, 44, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:15:17', '2018-03-11 09:15:17', NULL),
(88, 3, 18, 44, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:15:32', '2018-03-11 09:15:32', NULL),
(89, 3, 18, 45, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:15:50', '2018-03-11 09:15:50', NULL),
(90, 3, 18, 45, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:16:02', '2018-03-11 09:16:02', NULL),
(91, 3, 18, 46, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:16:20', '2018-03-11 09:16:20', NULL),
(92, 3, 18, 46, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:16:31', '2018-03-11 09:16:31', NULL),
(93, 3, 19, 47, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:16:50', '2018-03-11 09:16:50', NULL),
(94, 3, 19, 47, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:17:04', '2018-03-11 09:17:04', NULL),
(95, 3, 19, 48, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:17:22', '2018-03-11 09:17:22', NULL),
(96, 3, 19, 48, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:17:46', '2018-03-11 09:17:59', NULL),
(97, 3, 20, 49, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 09:18:14', '2018-03-11 09:18:14', NULL),
(98, 3, 20, 49, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 09:18:26', '2018-03-11 09:18:26', NULL),
(99, 3, 21, 50, 'SEMINAR', 'SEMINAR', 'SEMINAR1', '2018-03-11 10:38:00', '2018-03-11 10:38:00', NULL),
(100, 3, 21, 50, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN1', '2018-03-11 10:38:16', '2018-03-11 10:38:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_berita_univs`
--

CREATE TABLE `data_berita_univs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_univ` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_berita_univs`
--

INSERT INTO `data_berita_univs` (`id`, `id_univ`, `kategori`, `judul`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'SEMINAR', 'SEMINAR WIRAUSAHA AKAN DIADAKAN OLEH DEWAN MAHASISWA (DEMA) UNISBA', 'SEMINAR INI DILAKUKAN BERTUJUAN UNUTK MENAMBAH WAWASAN BAGI MAHASIWA UNIVERSITAS ISLAM BANDUNG', '2018-03-10 14:07:46', '2018-03-10 14:07:46', NULL),
(2, 1, 'beasiswa', 'SEMINAR WIRAUSAHA AKAN DIADAKAN OLEH DEWAN MAHASISWA (DEMA) UNISMA', 'SEMINAR INI DILAKUKAN BERTUJUAN UNUTK MENAMBAH WAWASAN BAGI MAHASIWA UNIVERSITAS ISLAM 45 BEKASI', '2018-03-10 14:09:09', '2018-03-11 04:30:02', NULL),
(3, 1, 'PERLOMBAAN', 'SEMINAR WIRAUSAHA AKAN DIADAKAN OLEH DEWAN MAHASISWA (DEMA) UMMI', 'SEMINAR INI DILAKUKAN BERTUJUAN UNUTK MENAMBAH WAWASAN BAGI MAHASIWA UNIVERSITAS MUHAMMADIYAH SUKABUMI', '2018-03-10 14:10:56', '2018-03-11 04:30:22', NULL),
(4, 2, 'SEMINAR', 'SEMINAR WIRAUSAHA AKAN DIADAKAN OLEH DEWAN MAHASISWA (DEMA) UNISMA', 'TEST', '2018-03-11 04:31:07', '2018-03-11 04:31:50', NULL),
(5, 2, 'BEASISWA', 'BEASISWA MAHASISWA KURANG MAMPU', 'BEASISWA', '2018-03-11 04:32:45', '2018-03-11 04:32:45', NULL),
(6, 2, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN', '2018-03-11 04:33:03', '2018-03-11 04:33:03', NULL),
(7, 3, 'SEMINAR', 'SEMINAR WIRAUSAHA AKAN DIADAKAN OLEH DEWAN MAHASISWA (DEMA) UMMI', 'SEMINAR', '2018-03-11 04:33:47', '2018-03-11 04:33:47', NULL),
(8, 3, 'BEASISWA', 'BEASISWA MAHASISWA KURANG MAMPU', 'BEASISWA', '2018-03-11 04:34:03', '2018-03-11 04:34:22', NULL),
(9, 3, 'PERLOMBAAN', 'PERLOMBAAN', 'PERLOMBAAN', '2018-03-11 04:34:41', '2018-03-11 04:34:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_univ` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `id_univ`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'SYARIAH', '2018-03-11 10:33:23', '2018-03-11 10:33:23', NULL),
(2, 1, 'DAKWAH', '2018-03-11 10:33:32', '2018-03-11 10:33:32', NULL),
(3, 1, 'TARBIYAH DAN KEGURUAN', '2018-03-11 10:33:41', '2018-03-11 10:33:41', NULL),
(4, 1, 'HUKUM', '2018-03-11 10:33:50', '2018-03-11 10:33:50', NULL),
(5, 1, 'PSIKOLOGI', '2018-03-11 10:33:58', '2018-03-11 10:33:58', NULL),
(6, 1, 'MIPA', '2018-03-11 10:34:10', '2018-03-11 10:34:10', NULL),
(7, 1, 'TEKNIK', '2018-03-11 10:34:19', '2018-03-11 10:34:19', NULL),
(8, 2, 'AGAMA ISLAM', '2018-03-11 10:34:45', '2018-03-11 10:34:45', NULL),
(9, 2, 'ILMU SOSIAL DAN ILMU POLITIK', '2018-03-11 10:34:55', '2018-03-11 10:34:55', NULL),
(10, 2, 'TEKNIK', '2018-03-11 10:35:01', '2018-03-11 10:35:01', NULL),
(11, 2, 'EKONOMI', '2018-03-11 10:35:10', '2018-03-11 10:35:10', NULL),
(12, 2, 'ILMU PENDIDIKAN', '2018-03-11 10:35:25', '2018-03-11 10:35:25', NULL),
(13, 2, 'KOMUNIKASI SASTRA DAN BAHASA', '2018-03-11 10:35:37', '2018-03-11 10:35:37', NULL),
(14, 2, 'PERTANIAN', '2018-03-11 10:35:44', '2018-03-11 10:35:44', NULL),
(15, 3, 'SAINS DAN TEKNOLOGI', '2018-03-11 10:36:11', '2018-03-11 10:36:11', NULL),
(16, 3, 'EKONOMI', '2018-03-11 10:36:21', '2018-03-11 10:36:21', NULL),
(17, 3, 'ILMU ADMINISTRAASI DAN HUMANIORA', '2018-03-11 10:36:32', '2018-03-11 10:36:32', NULL),
(18, 3, 'KEILMUAN DAN ILMU PENDIDIKAN', '2018-03-11 10:36:41', '2018-03-11 10:36:41', NULL),
(19, 3, 'PERTANIAN', '2018-03-11 10:36:49', '2018-03-11 10:36:49', NULL),
(20, 3, 'HUKUM', '2018-03-11 10:36:59', '2018-03-11 10:36:59', NULL),
(21, 3, 'KEPERAWATAN', '2018-03-11 10:37:07', '2018-03-11 10:37:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_univ` int(10) UNSIGNED NOT NULL,
  `id_fak` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `id_univ`, `id_fak`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'PERADILAN AGAMA', '2018-03-10 13:32:48', '2018-03-10 13:32:48', NULL),
(2, 1, 1, 'KEUANGAN DAN PERBANKAN SYARIAH', '2018-03-10 13:33:13', '2018-03-10 13:33:13', NULL),
(3, 1, 2, 'KOMUNIKASI DAN PENYIARAN BISNIS', '2018-03-10 13:33:35', '2018-03-10 13:33:35', NULL),
(4, 1, 3, 'PENDIDIKAN AGAMA ISLAM', '2018-03-10 13:34:00', '2018-03-10 13:34:00', NULL),
(5, 1, 3, 'PGMI', '2018-03-10 13:34:19', '2018-03-10 13:34:19', NULL),
(6, 1, 4, 'ILMU HUKUM', '2018-03-10 13:34:37', '2018-03-10 13:34:37', NULL),
(7, 1, 5, 'PSIKOLOGI', '2018-03-10 13:35:32', '2018-03-10 13:35:32', NULL),
(8, 1, 6, 'STATISTIKA', '2018-03-10 13:36:16', '2018-03-10 13:36:16', NULL),
(9, 1, 6, 'MATEMATIKA', '2018-03-10 13:36:27', '2018-03-10 13:36:27', NULL),
(10, 1, 6, 'FARMASI', '2018-03-10 13:36:41', '2018-03-10 13:36:41', NULL),
(11, 1, 7, 'TEKNIK PERTAMBANGAN', '2018-03-10 13:36:58', '2018-03-10 13:36:58', NULL),
(12, 2, 1, 'AKHWAL SYAKHSIYAH', '2018-03-10 13:37:44', '2018-03-10 13:37:44', NULL),
(13, 2, 1, 'PENDIDIKAN AGAMA ISLAM', '2018-03-10 13:38:08', '2018-03-10 13:38:08', NULL),
(14, 2, 1, 'PERBANKAN SYARIAH', '2018-03-10 13:38:34', '2018-03-10 13:38:34', NULL),
(15, 2, 2, 'ADMINISTRASI NEGARA', '2018-03-10 13:38:57', '2018-03-10 13:38:57', NULL),
(16, 2, 2, 'ILMU PEMERINTAHAN', '2018-03-10 13:39:22', '2018-03-10 13:39:22', NULL),
(17, 2, 2, 'PSIKOLOGI', '2018-03-10 13:39:35', '2018-03-10 13:39:35', NULL),
(18, 2, 2, 'MANAJEMEN ADMINISTRASI', '2018-03-10 13:39:50', '2018-03-10 13:39:50', NULL),
(19, 2, 3, 'TEKNIK SIPIL', '2018-03-10 13:40:06', '2018-03-10 13:40:06', NULL),
(20, 2, 3, 'TEKNIK MESIN', '2018-03-10 13:40:20', '2018-03-10 13:40:20', NULL),
(21, 2, 3, 'TEKNIK ELEKTRO', '2018-03-10 13:40:33', '2018-03-10 13:40:33', NULL),
(22, 2, 3, 'TEKNIK KOMPUTER', '2018-03-10 13:40:50', '2018-03-10 13:40:50', NULL),
(23, 2, 4, 'AKUNTANSI', '2018-03-10 13:41:11', '2018-03-10 13:41:11', NULL),
(24, 2, 4, 'MANAJEMEN', '2018-03-10 13:41:31', '2018-03-10 13:41:31', NULL),
(25, 2, 5, 'PENJASKES', '2018-03-10 13:41:49', '2018-03-10 13:41:49', NULL),
(26, 2, 5, 'PENDIDIKAN GEOGRAFI', '2018-03-10 13:42:04', '2018-03-10 13:42:04', NULL),
(27, 2, 5, 'PGSD', '2018-03-10 13:42:18', '2018-03-10 13:42:18', NULL),
(28, 2, 6, 'ILMU KOMUNIKASI', '2018-03-10 13:42:39', '2018-03-10 13:42:39', NULL),
(29, 2, 6, 'SASTRA INGGRIS', '2018-03-10 13:42:51', '2018-03-10 13:42:51', NULL),
(30, 2, 7, 'AGRIBISNIS', '2018-03-10 13:43:09', '2018-03-10 13:43:09', NULL),
(31, 3, 1, 'TEKNIK INFORMATIKA', '2018-03-10 13:48:13', '2018-03-10 13:48:13', NULL),
(32, 3, 1, 'TEKNIK SIPIL', '2018-03-10 13:48:32', '2018-03-10 13:48:32', NULL),
(33, 3, 1, 'KIMIA', '2018-03-10 13:48:43', '2018-03-10 13:48:43', NULL),
(34, 3, 2, 'AKUNTANSI', '2018-03-10 13:49:08', '2018-03-10 13:49:08', NULL),
(35, 3, 2, 'PERPAJAKAN', '2018-03-10 13:49:27', '2018-03-10 13:49:52', NULL),
(36, 3, 3, 'HUBUNGAN MASYARAKAT', '2018-03-10 13:50:05', '2018-03-10 13:50:05', NULL),
(37, 3, 3, 'ADMINISTRASI BISNIS', '2018-03-10 13:50:19', '2018-03-10 13:50:19', NULL),
(38, 3, 3, 'ADMINISTRASI PUBLIK', '2018-03-10 13:50:32', '2018-03-10 13:50:32', NULL),
(39, 3, 3, 'SASTRA INGGRIS', '2018-03-10 13:50:41', '2018-03-10 13:50:41', NULL),
(40, 3, 4, 'PENDIDIKAN BIOLOGI', '2018-03-10 13:51:13', '2018-03-10 13:51:13', NULL),
(41, 3, 4, 'PGPAUD', '2018-03-10 13:51:29', '2018-03-10 13:51:29', NULL),
(42, 3, 4, 'PENDIDIKAN JASMANI KESEHATAN DAN REKREASI', '2018-03-10 13:51:59', '2018-03-10 13:51:59', NULL),
(43, 3, 4, 'PENDIDIKAN TEKNOLOGI INFORMASI', '2018-03-10 13:52:13', '2018-03-10 13:52:51', NULL),
(44, 3, 4, 'PGSD', '2018-03-10 13:53:06', '2018-03-10 13:53:06', NULL),
(45, 3, 4, 'PENDIDIKAN MATEMATIKA', '2018-03-10 13:53:19', '2018-03-10 13:53:19', NULL),
(46, 3, 4, 'PENDIDIKAN BAHASA DAN SASTRA INDONESIA', '2018-03-10 13:53:44', '2018-03-10 13:53:44', NULL),
(47, 3, 5, 'AGRIBISNIS', '2018-03-10 13:54:10', '2018-03-10 13:54:10', NULL),
(48, 3, 5, 'MANAJEMEN SUMBERDAYA PERAIRAN', '2018-03-10 13:54:30', '2018-03-10 13:54:30', NULL),
(49, 3, 6, 'ILMU HUKUM', '2018-03-10 13:54:45', '2018-03-10 13:54:45', NULL),
(50, 3, 7, 'KEPERAWATAN', '2018-03-10 13:54:59', '2018-03-10 13:54:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama`, `password`, `email`, `created_at`, `updated_at`, `deleted_at`, `no_telp`, `alamat`) VALUES
(6, 'Mahasiswa', 'password', 'mahasiswa@gmail.com', '2018-04-17 14:28:41', '2018-04-17 14:28:41', NULL, '085222333444', 'Bandung'),
(7, 'Roni Firmansyah', 'password', 'roni@gmail.com', '2018-04-17 15:11:07', '2018-04-17 15:11:07', NULL, '', ''),
(8, 'A. Septiadi', 'password', 'septiadi@gmail.com', '2018-04-17 15:18:31', '2018-04-17 15:18:31', NULL, '', ''),
(9, 'Rizki Fauzi', 'password', 'rizki@gmail.com', '2018-04-17 15:21:20', '2018-04-17 15:33:45', '2018-04-17 15:33:45', '', ''),
(10, 'Sandi Gustian', 'password', 'sandi@gmail.com', '2018-04-17 15:21:48', '2018-04-17 15:33:50', '2018-04-17 15:33:50', '', ''),
(11, 'Danil Nur', 'password', 'danil@gmail.com', '2018-04-17 15:22:13', '2018-04-17 15:33:52', '2018-04-17 15:33:52', '', ''),
(12, 'Dien Ahmad', 'paassword', 'dien@gmail.com', '2018-04-17 15:22:30', '2018-04-17 15:33:55', '2018-04-17 15:33:55', '', ''),
(13, 'Sunny Ni\'ma', 'password', 'sunny@gmail.com', '2018-04-17 15:22:49', '2018-04-17 15:33:58', '2018-04-17 15:33:58', '', ''),
(14, 'Fauzi Muzaki', 'password', 'fauzi@gmail.com', '2018-04-17 15:23:18', '2018-04-17 15:34:01', '2018-04-17 15:34:01', '', ''),
(15, 'Firman Rahman', 'password', 'firman@gmail.com', '2018-04-17 15:23:33', '2018-04-17 15:34:04', '2018-04-17 15:34:04', '', ''),
(16, 'Asep Syahroni', 'password', 'asep@gmail.com', '2018-04-17 15:23:50', '2018-04-17 15:34:07', '2018-04-17 15:34:07', '', ''),
(17, 'Mahmud Hidayatullah', 'password', 'mahmud@gmail.com', '2018-04-17 15:24:09', '2018-04-17 15:34:12', '2018-04-17 15:34:12', '', ''),
(18, 'Rissal Alfiyassin', 'password', 'rissal@gmail.com', '2018-04-17 15:24:26', '2018-04-17 15:34:15', '2018-04-17 15:34:15', '', ''),
(19, 'Ridwan Saprudin', 'password', 'ridwan@gmail.com', '2018-04-17 15:24:43', '2018-04-17 15:34:18', '2018-04-17 15:34:18', '', ''),
(20, 'Selvia Rahmawati', 'password', 'selvia@gmail.com', '2018-04-17 15:24:57', '2018-04-17 15:34:20', '2018-04-17 15:34:20', '', ''),
(21, 'Rizky Novita', 'password', 'rizky@gmail.com', '2018-04-17 15:34:39', '2018-04-17 15:34:39', NULL, '08222333444', 'Bandung'),
(22, 'Rizki Fauzi', 'password', 'rizkif@gmail.com', '2018-04-17 15:35:06', '2018-04-17 15:35:06', NULL, '', ''),
(23, 'Sandi Gustian', 'password', 'sandif@gmail.com', '2018-04-17 15:36:03', '2018-04-17 15:36:03', NULL, '', ''),
(24, 'Danil Nur', 'password', 'danilf@gmail.com', '2018-04-17 15:36:44', '2018-04-17 15:36:44', NULL, '', ''),
(25, 'Dien Ahmad', 'password', 'dienf@gmail.com', '2018-04-17 15:37:04', '2018-04-17 15:37:04', NULL, '', ''),
(26, 'Sunny Ni\'ma', 'password', 'sunnyf@gmail.com', '2018-04-17 15:37:20', '2018-04-17 15:37:20', NULL, '', ''),
(27, 'Fauzi Muzaki', 'password', 'fauzif@gmail.com', '2018-04-17 15:37:34', '2018-04-17 15:37:34', NULL, '', ''),
(28, 'Firman Rahman', 'password', 'firmanf@gmail.com', '2018-04-17 15:37:50', '2018-04-17 15:37:50', NULL, '', ''),
(29, 'Asep Syahroni', 'password', 'asepf@gmail.com', '2018-04-17 15:38:11', '2018-04-17 15:38:11', NULL, '', ''),
(30, 'Mahmud Hidayatullah', 'password', 'mahmudf@gmail.com', '2018-04-17 15:38:24', '2018-04-17 15:38:24', NULL, '', ''),
(31, 'Rissal Alfiyassin', 'password', 'rissalf@gmail.com', '2018-04-17 15:38:53', '2018-04-17 15:38:53', NULL, '', ''),
(32, 'Ridwan Saprudin', 'password', 'ridwanf@gmail.com', '2018-04-17 15:39:15', '2018-04-17 15:39:15', NULL, '', ''),
(33, 'Selvia Rahmawati', 'password', 'selviaf@gmail.com', '2018-04-17 15:39:35', '2018-04-17 15:39:35', NULL, '', '');

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
(3, '2018_03_10_182333_create_universitas_table', 2),
(4, '2018_03_10_182644_create_fakultas_table', 3),
(8, '2018_03_10_193024_create_data_berita_univs_table', 4),
(9, '2018_03_10_193350_create_data_berita_faks_table', 4),
(10, '2018_03_10_200139_create_jurusans_table', 5),
(11, '2018_03_10_201732_create_pendaftarans_table', 5),
(12, '2018_03_10_223624_create_pendaftars_table', 6),
(13, '2018_03_11_173048_create_fakultas_table', 6),
(14, '2018_04_17_210543_create_mahasiswas_table', 7),
(15, '2018_04_17_214119_create_beasiswas_table', 8),
(16, '2018_04_17_214238_colom_id_mahasiswa', 9),
(17, '2018_04_18_044716_colomn_alamat', 10);

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
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_univ` int(10) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_mahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi_akademik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan_orangtua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggungan_orangtua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kendaraan_pribadi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `id_univ`, `nama_mahasiswa`, `nim`, `jurusan_mahasiswa`, `alamat`, `semester`, `ipk`, `prestasi_akademik`, `pendapatan_orangtua`, `tanggungan_orangtua`, `kendaraan_pribadi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Roni Firmansyah', '1137050188', 'Peradilan Agama', 'Bandung', '6', '3,55', 'Universitas', '2.000.000', '4', 'sepeda', NULL, '2018-03-11 11:04:18', NULL),
(2, 2, 'ASDHAD2', '324111', 'JASKLDJ', 'SADNASD', '3', '222', 'ASDSAD', 'WAD', 'ASD', 'AD', '2018-03-11 09:30:59', '2018-03-11 09:31:16', '2018-03-11 09:31:16'),
(3, 1, 'Budi Arianto', '1137050050', 'Keuangan dan Perbankan Syariah', 'Bandung', '6', '3,10', 'Fakultas', '5.000.000', '3', 'Motor', '2018-03-11 11:05:38', '2018-03-11 11:05:38', NULL),
(4, 1, 'Rina Mulyani', '1137050190', 'Pendidikan Agama Islam', 'Cimahi', '4', '3,60', 'Jurusan', '7.000.000', '2', 'Mobil', '2018-03-11 11:06:54', '2018-03-11 11:08:23', NULL),
(5, 1, 'Ratna Sari', '1137050194', 'Psikologi', 'Bekasi', '4', '3,25', 'Universitas', '3.000.000', '3', 'Motor', '2018-03-11 11:08:08', '2018-03-11 11:08:08', NULL),
(6, 1, 'Anto Mulyono', '1137050012', 'Statistika', 'Rancaekek', '8', '3,33', 'Tidak Punya', '4.000.000', '2', 'Motor', '2018-03-11 11:09:50', '2018-03-11 11:09:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftars`
--

CREATE TABLE `pendaftars` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_univ` int(10) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_mahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi_akademik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan_orangtua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggungan_orangtua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kendaraan_pribadi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftars`
--

INSERT INTO `pendaftars` (`id`, `id_univ`, `nama_mahasiswa`, `nim`, `jurusan_mahasiswa`, `alamat`, `semester`, `ipk`, `prestasi_akademik`, `pendapatan_orangtua`, `tanggungan_orangtua`, `kendaraan_pribadi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Roni Firmansyah', '1137050188', 'Peradilan Agama', 'Bandung', '6', '3,55', 'Universitas', '2.000.000', '4', 'sepeda', '2018-03-12 12:31:10', '2018-03-12 12:31:10', NULL),
(2, 1, 'Budi Arianto', '324111', 'Keuangan dan Perbankan Syariah', 'Bandung', '6', '3,10', 'Fakultas', '5.000.000', '3', 'Motor', '2018-03-12 12:32:23', '2018-03-12 12:32:23', NULL),
(3, 1, 'Rina Mulyani', '1137050190', 'Pendidikan Agama Islam', 'Cimahi', '4', '3,60', 'Jurusan', '7.000.000', '2', 'Mobil', '2018-03-12 12:33:40', '2018-03-12 12:33:40', NULL),
(4, 1, 'Ratna Sari', '1137050194', 'Psikologi', 'Bekasi', '4', '3,25', 'Universitas', '4.000.000', '2', 'Motor', '2018-03-12 12:34:34', '2018-03-12 12:34:34', NULL),
(5, 1, 'Anto Mulyono', '1137050012', 'Statistika', 'Rancaekek', '8', '3,33', 'Tidak Punya', '4.000.000', '2', 'Motor', '2018-03-12 12:35:12', '2018-03-12 12:35:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'UNIVERSITAS ISLAM BANDUNG', '2018-03-10 11:24:08', '2018-03-10 12:53:16', NULL),
(2, 'UNIVERSITAS ISLAM 45 BEKASI', '2018-03-10 11:29:14', '2018-03-10 12:53:39', NULL),
(3, 'UNIVERSITAS MUHAMMADIYAH SUKABUMI', '2018-03-10 13:30:04', '2018-03-10 13:30:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$g6TnvM5lABg0Okiib27iFe1CSjQxR1qSUiNZphGbzLFrJUq6YKiR2', NULL, '2018-03-10 11:20:29', '2018-03-10 11:20:29'),
(2, 'rizki', 'rizki@pragmainf.co.id', '$2y$10$8G5/BVn09LiW6PT0jUC01ekGZrC5U4QAlhggF83GmT8BHyh9mLd52', NULL, '2018-03-14 17:04:13', '2018-03-14 17:04:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswas`
--
ALTER TABLE `beasiswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beasiswas_id_mahasiswa_foreign` (`id_mahasiswa`);

--
-- Indexes for table `data_berita_faks`
--
ALTER TABLE `data_berita_faks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_berita_faks_id_univ_foreign` (`id_univ`),
  ADD KEY `data_berita_faks_id_fak_foreign` (`id_fak`);

--
-- Indexes for table `data_berita_jurs`
--
ALTER TABLE `data_berita_jurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_berita_jurs_id_univ_foreign` (`id_univ`),
  ADD KEY `data_berita_jurs_id_fak_foreign` (`id_fak`);

--
-- Indexes for table `data_berita_univs`
--
ALTER TABLE `data_berita_univs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_berita_univs_id_univ_foreign` (`id_univ`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas_id_univ_foreign` (`id_univ`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusans_id_univ_foreign` (`id_univ`),
  ADD KEY `jurusans_id_fak_foreign` (`id_fak`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_id_univ_foreign` (`id_univ`);

--
-- Indexes for table `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftars_id_univ_foreign` (`id_univ`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
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
-- AUTO_INCREMENT for table `beasiswas`
--
ALTER TABLE `beasiswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `data_berita_faks`
--
ALTER TABLE `data_berita_faks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `data_berita_jurs`
--
ALTER TABLE `data_berita_jurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `data_berita_univs`
--
ALTER TABLE `data_berita_univs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftars`
--
ALTER TABLE `pendaftars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beasiswas`
--
ALTER TABLE `beasiswas`
  ADD CONSTRAINT `beasiswas_id_mahasiswa_foreign` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswas` (`id`);

--
-- Constraints for table `data_berita_faks`
--
ALTER TABLE `data_berita_faks`
  ADD CONSTRAINT `data_berita_faks_id_fak_foreign` FOREIGN KEY (`id_fak`) REFERENCES `fakultas` (`id`),
  ADD CONSTRAINT `data_berita_faks_id_univ_foreign` FOREIGN KEY (`id_univ`) REFERENCES `universitas` (`id`);

--
-- Constraints for table `data_berita_jurs`
--
ALTER TABLE `data_berita_jurs`
  ADD CONSTRAINT `data_berita_jurs_id_fak_foreign` FOREIGN KEY (`id_fak`) REFERENCES `fakultas` (`id`),
  ADD CONSTRAINT `data_berita_jurs_id_univ_foreign` FOREIGN KEY (`id_univ`) REFERENCES `universitas` (`id`);

--
-- Constraints for table `data_berita_univs`
--
ALTER TABLE `data_berita_univs`
  ADD CONSTRAINT `data_berita_univs_id_univ_foreign` FOREIGN KEY (`id_univ`) REFERENCES `universitas` (`id`);

--
-- Constraints for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD CONSTRAINT `fakultas_id_univ_foreign` FOREIGN KEY (`id_univ`) REFERENCES `universitas` (`id`);

--
-- Constraints for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD CONSTRAINT `jurusans_id_fak_foreign` FOREIGN KEY (`id_fak`) REFERENCES `fakultas` (`id`),
  ADD CONSTRAINT `jurusans_id_univ_foreign` FOREIGN KEY (`id_univ`) REFERENCES `universitas` (`id`);

--
-- Constraints for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_id_univ_foreign` FOREIGN KEY (`id_univ`) REFERENCES `universitas` (`id`);

--
-- Constraints for table `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD CONSTRAINT `pendaftars_id_univ_foreign` FOREIGN KEY (`id_univ`) REFERENCES `universitas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
