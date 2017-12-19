-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 02:40 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsalyukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `no_rek` bigint(20) NOT NULL,
  `id_admin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pemilik` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id_carousel` int(10) UNSIGNED NOT NULL,
  `id_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_carousel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`email`, `nama`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
('alenheriyanto@mhs.unesa.ac.id', 'Alen bachtiar Heriyanto', 'Tambak wedi baru 18 e utara 14', '085731616355', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detil_lapangans`
--

CREATE TABLE `detil_lapangans` (
  `id_detil_lapangan` int(11) NOT NULL,
  `id_lap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_berakhir` time NOT NULL,
  `harga` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detil_lapangans`
--

INSERT INTO `detil_lapangans` (`id_detil_lapangan`, `id_lap`, `jam_mulai`, `jam_berakhir`, `harga`) VALUES
(9, '72487362870011', '05:00:00', '06:00:00', 12),
(10, '72487362870011', '06:00:00', '07:00:00', 12),
(11, '72487362870011', '07:00:00', '08:00:00', 12),
(12, '72487362870011', '08:00:00', '09:00:00', 12),
(13, '72487362870011', '09:00:00', '10:00:00', 12),
(14, '72487362870011', '05:00:00', '06:00:00', 122),
(15, '72487362870011', '06:00:00', '07:00:00', 122),
(16, '72487362870011', '07:00:00', '08:00:00', 122),
(17, '72487362870011', '08:00:00', '09:00:00', 122),
(18, '72487362870011', '09:00:00', '10:00:00', 122);

-- --------------------------------------------------------

--
-- Table structure for table `detil_transaksis`
--

CREATE TABLE `detil_transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_transaksi_on` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_transaksi_off` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_lapangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gedung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gedungs`
--

CREATE TABLE `gedungs` (
  `id_gedung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pemilik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ref` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gedungs`
--

INSERT INTO `gedungs` (`id_gedung`, `id_pemilik`, `nama`, `alamat`, `kode_ref`) VALUES
('0987654321098765001', '0987654321098765', 'ABH Studio', 'B1 Unesa', 'hq830CmU9R'),
('7248736287001', '7248736287', 'abh studio', 'mind', 'isMRRA5Grk'),
('7248736287002', '7248736287', 'abh studio', 'hatimu', '24IyKS82la');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasis`
--

CREATE TABLE `konfirmasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_transaksi_cs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_transaksi_member` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lapangans`
--

CREATE TABLE `lapangans` (
  `id_lapangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gedung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapangans`
--

INSERT INTO `lapangans` (`id_lapangan`, `id_gedung`, `nama`, `created_at`, `updated_at`) VALUES
('72487362870011', '7248736287001', 'LAP 1', NULL, NULL),
('72487362870012', '7248736287001', 'LAP 2', NULL, NULL),
('72487362870013', '7248736287001', 'LAP 3', NULL, NULL),
('72487362870014', '7248736287001', 'LAP 4', NULL, NULL),
('72487362870015', '7248736287001', 'LAP 5', NULL, NULL),
('72487362870016', '7248736287001', 'LAP 6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id_transaksi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pemilik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_resets_table', 1),
(53, '2017_10_23_122943_create_admins_table', 1),
(54, '2017_10_23_131031_create_customers_table', 1),
(55, '2017_10_23_131410_create_pemiliks_table', 1),
(56, '2017_10_23_131640_create_gedungs_table', 1),
(57, '2017_10_23_132050_create_pegawais_table', 1),
(58, '2017_10_24_004254_create_fasilitas_table', 1),
(59, '2017_10_24_004555_create_lapangans_table', 1),
(60, '2017_10_24_010903_create_memberships_table', 1),
(61, '2017_10_24_024039_create_transaksi_onlines_table', 1),
(62, '2017_10_24_024050_create_transaksi_offlines_table', 1),
(63, '2017_10_24_024105_create_detil_transaksis_table', 1),
(64, '2017_10_24_024140_create_konfirmasis_table', 1),
(65, '2017_10_24_103332_create_banks_table', 1),
(66, '2017_10_24_103423_create_carousels_table', 1),
(67, '2017_10_24_103432_create_withdraws_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `no_ktp` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp_pemilik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gedung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`no_ktp`, `no_ktp_pemilik`, `id_gedung`, `nama`, `email`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
('098765434567', '7248736287', '7248736287001', 'pegawai dwizta', 'nugrahadwizta@gmail.com', 'pegawai', '687', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemiliks`
--

CREATE TABLE `pemiliks` (
  `no_ktp` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemiliks`
--

INSERT INTO `pemiliks` (`no_ktp`, `nama`, `email`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
('', 'Alen bachtiar Heriyanto', 'alenheriyanto@mhs.unesa.ac.id', 'Tambak wedi baru 18 e utara 14', '085731616355', NULL, NULL),
('098765123121', 'alen bh', 'alenbachtiar1@gmail.com', 'Tambak Wedi Baru 18 E Utara 14', '085731616355', NULL, NULL),
('0987651231212', 'alen bh', 'alenbachtiar3@gmail.com', 'Tambak Wedi Baru 18 E Utara 14', '085731616355', NULL, NULL),
('0987654321098765', 'Alen bachtiar Heriyanto', 'alenbachtiarheriyanto@gmail.com', 'Tambak wedi baru 18 e utara 14', '085731616355', NULL, NULL),
('1', '', '', '', '', NULL, NULL),
('1234567890098764', 'bbb', 'bb@gmail.com', 'bbb', '00022', NULL, NULL),
('1234567890098765', 'aaa', 'aa@gmail.com', 'aaa', '0000', NULL, NULL),
('1234567890983451', 'farah', 'herzygovar@gmail.com', 'kenjeran', '657384712312', NULL, NULL),
('7248736287', 'bhbh', 'a@c.d', 'tbi', '876', NULL, NULL),
('7654635241524367', 'abc', 'a@b.c', 'abc', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_offlines`
--

CREATE TABLE `transaksi_offlines` (
  `id_transaksi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_cs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `lama_sewa` bigint(20) NOT NULL,
  `total_bayar` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_onlines`
--

CREATE TABLE `transaksi_onlines` (
  `id_transaksi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_customer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `lama_sewa` bigint(20) NOT NULL,
  `batas_pembayaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_bayar` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `hak_akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `hak_akses`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
('', 'qwerty', 'customer', 'belum', NULL, NULL, NULL),
('a@b.c', 'b2ca678b4c936f905fb82f2733f5297f', 'pemilik', 'cz0mU75EJj8I4aul00r47ueqwqgBTmaighKG9N8SgeFf1hAos3', NULL, NULL, NULL),
('a@c.d', '37029430cfd06ae2a279cc1e2504e7c3', 'pemilik', '', NULL, NULL, NULL),
('aa@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d', 'pemilik', 'oc8yFyiCJs3cR2TAHaRf1qfaLyfsiudRi5gE3gTFRcU6k4ARHv', NULL, NULL, NULL),
('abh@gmail.com', 'qwerty', 'customer', 'belum', NULL, NULL, NULL),
('admin@futsalrek.com', '8b44b70619c6756e6b39f89692a32afe', 'admin', NULL, NULL, NULL, NULL),
('alenbachtiar1@gmail.com', 'qwerty', 'customer', 'belum', NULL, '2017-10-24 06:50:02', '2017-10-24 06:50:02'),
('alenbachtiar2@gmail.com', 'qwerty', 'admin', 'aktif', NULL, NULL, NULL),
('alenbachtiar3@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'pegawai', '', NULL, NULL, NULL),
('alenbachtiar4@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'pegawai', 'eJLohEqSM36RxD0GzmGiSwakOJ8Pus7H9OwcMkH4UIphFGgnE9', NULL, NULL, NULL),
('alenbachtiarheriyanto@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'pemilik', NULL, NULL, NULL, NULL),
('alenheriyanto@mhs.unesa.ac.id', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'customer', 'Q4mPyiBf5gaEKdOBRr6588C8l5Dka94SscUxQc3Bsrc6B06dxp', NULL, NULL, NULL),
('as@s.s', '123pemilu2017', 'pemilik', 'belum', NULL, NULL, NULL),
('bb@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'pemilik', 'yCUnB29qgidOSM2tAoccPdumyLxpKdi2hDv90ifO0mAMlxMPyN', NULL, NULL, NULL),
('emireza@gmail.com', 'qwerty', 'customer', 'belum', NULL, NULL, NULL),
('fahmi.vhmee@gmail.com', 'qwerty', 'customer', 'aktif', NULL, NULL, NULL),
('herzygovar@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'pemilik', NULL, NULL, NULL, NULL),
('ksc@gmail.com', 'qwerty', 'pemilik', NULL, NULL, NULL, NULL),
('nugrahadwizta@gmail.com', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawai', '', NULL, NULL, NULL),
('pegawai@pegawai.com', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawai', '28vCr29GSbU31EHmK9nP5cTy3TCGrtuh8qSqU8SEuDa9zkCceH', NULL, NULL, NULL),
('salamunrn@gmail.com', '123pemilu2017', 'customer', 'belum', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id_withdraw` int(10) UNSIGNED NOT NULL,
  `id_pemilik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`no_rek`),
  ADD KEY `banks_id_admin_foreign` (`id_admin`),
  ADD KEY `banks_id_pemilik_foreign` (`id_pemilik`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id_carousel`),
  ADD KEY `carousels_id_admin_foreign` (`id_admin`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `detil_lapangans`
--
ALTER TABLE `detil_lapangans`
  ADD PRIMARY KEY (`id_detil_lapangan`),
  ADD KEY `id_lap` (`id_lap`);

--
-- Indexes for table `detil_transaksis`
--
ALTER TABLE `detil_transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detil_transaksis_id_transaksi_on_foreign` (`id_transaksi_on`),
  ADD KEY `detil_transaksis_id_transaksi_off_foreign` (`id_transaksi_off`),
  ADD KEY `detil_transaksis_id_lapangan_foreign` (`id_lapangan`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `fasilitas_id_gedung_foreign` (`id_gedung`);

--
-- Indexes for table `gedungs`
--
ALTER TABLE `gedungs`
  ADD PRIMARY KEY (`id_gedung`),
  ADD KEY `gedungs_id_pemilik_foreign` (`id_pemilik`);

--
-- Indexes for table `konfirmasis`
--
ALTER TABLE `konfirmasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konfirmasis_id_transaksi_cs_foreign` (`id_transaksi_cs`),
  ADD KEY `konfirmasis_id_transaksi_member_foreign` (`id_transaksi_member`);

--
-- Indexes for table `lapangans`
--
ALTER TABLE `lapangans`
  ADD PRIMARY KEY (`id_lapangan`),
  ADD KEY `lapangans_id_gedung_foreign` (`id_gedung`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `memberships_id_pemilik_foreign` (`id_pemilik`);

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
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`no_ktp`),
  ADD KEY `pegawais_no_ktp_pemilik_foreign` (`no_ktp_pemilik`),
  ADD KEY `pegawais_id_gedung_foreign` (`id_gedung`);

--
-- Indexes for table `pemiliks`
--
ALTER TABLE `pemiliks`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `transaksi_offlines`
--
ALTER TABLE `transaksi_offlines`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_offlines_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `transaksi_onlines`
--
ALTER TABLE `transaksi_onlines`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_onlines_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id_withdraw`),
  ADD KEY `withdraws_id_pemilik_foreign` (`id_pemilik`),
  ADD KEY `withdraws_id_admin_foreign` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id_carousel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detil_lapangans`
--
ALTER TABLE `detil_lapangans`
  MODIFY `id_detil_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `detil_transaksis`
--
ALTER TABLE `detil_transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfirmasis`
--
ALTER TABLE `konfirmasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id_withdraw` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banks`
--
ALTER TABLE `banks`
  ADD CONSTRAINT `banks_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `banks_id_pemilik_foreign` FOREIGN KEY (`id_pemilik`) REFERENCES `pemiliks` (`no_ktp`) ON DELETE CASCADE;

--
-- Constraints for table `carousels`
--
ALTER TABLE `carousels`
  ADD CONSTRAINT `carousels_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `detil_lapangans`
--
ALTER TABLE `detil_lapangans`
  ADD CONSTRAINT `lap_det` FOREIGN KEY (`id_lap`) REFERENCES `lapangans` (`id_lapangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detil_transaksis`
--
ALTER TABLE `detil_transaksis`
  ADD CONSTRAINT `detil_transaksis_id_lapangan_foreign` FOREIGN KEY (`id_lapangan`) REFERENCES `lapangans` (`id_lapangan`) ON DELETE CASCADE,
  ADD CONSTRAINT `detil_transaksis_id_transaksi_off_foreign` FOREIGN KEY (`id_transaksi_off`) REFERENCES `transaksi_offlines` (`id_transaksi`) ON DELETE CASCADE,
  ADD CONSTRAINT `detil_transaksis_id_transaksi_on_foreign` FOREIGN KEY (`id_transaksi_on`) REFERENCES `transaksi_onlines` (`id_transaksi`) ON DELETE CASCADE;

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_id_gedung_foreign` FOREIGN KEY (`id_gedung`) REFERENCES `gedungs` (`id_gedung`) ON DELETE CASCADE;

--
-- Constraints for table `gedungs`
--
ALTER TABLE `gedungs`
  ADD CONSTRAINT `gedungs_id_pemilik_foreign` FOREIGN KEY (`id_pemilik`) REFERENCES `pemiliks` (`no_ktp`) ON DELETE CASCADE;

--
-- Constraints for table `konfirmasis`
--
ALTER TABLE `konfirmasis`
  ADD CONSTRAINT `konfirmasis_id_transaksi_cs_foreign` FOREIGN KEY (`id_transaksi_cs`) REFERENCES `transaksi_onlines` (`id_transaksi`) ON DELETE CASCADE,
  ADD CONSTRAINT `konfirmasis_id_transaksi_member_foreign` FOREIGN KEY (`id_transaksi_member`) REFERENCES `memberships` (`id_transaksi`) ON DELETE CASCADE;

--
-- Constraints for table `lapangans`
--
ALTER TABLE `lapangans`
  ADD CONSTRAINT `lapangans_id_gedung_foreign` FOREIGN KEY (`id_gedung`) REFERENCES `gedungs` (`id_gedung`) ON DELETE CASCADE;

--
-- Constraints for table `memberships`
--
ALTER TABLE `memberships`
  ADD CONSTRAINT `memberships_id_pemilik_foreign` FOREIGN KEY (`id_pemilik`) REFERENCES `pemiliks` (`no_ktp`) ON DELETE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_id_gedung_foreign` FOREIGN KEY (`id_gedung`) REFERENCES `gedungs` (`id_gedung`) ON DELETE CASCADE,
  ADD CONSTRAINT `pegawais_no_ktp_pemilik_foreign` FOREIGN KEY (`no_ktp_pemilik`) REFERENCES `pemiliks` (`no_ktp`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi_offlines`
--
ALTER TABLE `transaksi_offlines`
  ADD CONSTRAINT `transaksi_offlines_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`no_ktp`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi_onlines`
--
ALTER TABLE `transaksi_onlines`
  ADD CONSTRAINT `transaksi_onlines_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD CONSTRAINT `withdraws_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `withdraws_id_pemilik_foreign` FOREIGN KEY (`id_pemilik`) REFERENCES `pemiliks` (`no_ktp`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
