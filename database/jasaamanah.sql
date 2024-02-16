-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2024 pada 15.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasaamanah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_products`
--

CREATE TABLE `category_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasas`
--

CREATE TABLE `jasas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `benefit` varchar(255) NOT NULL,
  `process1` varchar(255) NOT NULL,
  `process2` varchar(255) NOT NULL,
  `process3` varchar(255) NOT NULL,
  `process4` varchar(255) NOT NULL,
  `process5` varchar(255) NOT NULL,
  `process6` varchar(255) NOT NULL,
  `process7` varchar(255) NOT NULL,
  `process8` varchar(255) NOT NULL,
  `process9` varchar(255) NOT NULL,
  `process10` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jasas`
--

INSERT INTO `jasas` (`id`, `name`, `condition`, `price`, `benefit`, `process1`, `process2`, `process3`, `process4`, `process5`, `process6`, `process7`, `process8`, `process9`, `process10`, `created_at`, `updated_at`) VALUES
(1, 'PT Umum', 'KTP & NPWP Direktur- KTP & NPWP Komisaris- Isi Formulir Pendaftaran', '700000', 'Akta Notaris PT, SK Pendirian Kemenkumham, NIB (Nomor Induk Bersama), NPWP PT, (Bonus) Desain Logo Perusahaan, Bonus : Desain Stempel Perusahaan,  Desain Business Card, Desain Company Profile, Desain Kop Surat', 'Pesan Nama PT (Estimasi Hasil : < 5 Menit)', 'Pengumpulan syarat dan data formulir', '- Proses Penagihan Invoice DP', 'Proses Pembuatan Draft Minuta dan Surat Keterangan Kuasa', 'Proses Penandatangan Surart Kuasa', 'Proses penerbitan Akta Notaris dan SK Kemenkumham', 'Proses Penagihan Invoice Pelunasan', 'Proses Pengerjaan Bonnus Tambahan', 'Proses Pengiriman Berkas (input Resi)', 'Proses Selesai', '2024-02-14 01:26:53', '2024-02-14 08:27:24'),
(2, 'PT Perorangan', 'KTP & NPWP Direktur, KTP & NPWP Komisaris, Isi Formulir Pendaftaran', '800000', 'SK Pendirian Kemenkumham, Pendirian, NIB (Nomor Induk Bersama), NPWP PT. Bonus : Desain Logo Perusahaan, Desain Stempel Perusahaan, Desain Business Card, Desain Company Profile, Desain Kop Surat', 'Pesan Nama PT (Estimasi Hasil : < 5 Menit)', 'Pengumpulan syarat dan data formulir', 'Proses Pembuatan Draft SK Pendirian Kemenkumham', 'Proses Persetujuan Draft SK Pendirian Kemenkumham', 'Proses penerbitan SK Pendirian Kemenkumham', 'Proses Penerbitan NPWP PT', 'Proses Penerbitan NIB melalui OSS', 'Proses Pengerjaan Bonnus Tambahan', 'Proses Pengiriman Berkas (input Resi)', 'Proses Selesai', '2024-02-14 02:32:06', '2024-02-14 02:32:06'),
(3, 'Yayasan / Perkumpulan', 'KTP & NPWP Ketua, KTP & NPWP Bendahara, KTP & NPWP Sekertaris, KTP & NPWP Pengawas, KTP & NPWP Pembina, Isi Formulir Pendaftaran', '800000', 'Akta Notaris, SK Pendirian Kemenkumham, NIB (Nomor Induk Bersama), NPWP Yayasan, Bonus : Desain Logo Perusahaan, Desain Stempel Perusahaan', 'Pengumpulan Syarat dan Data', 'Proses Penagihan Invoice DP', 'Proses Pemesanan Nama Yayasan (Estimasi Hasil 1 hari - 30 hari)', 'Proses Pembuatan Draft Minuta dan Surat Keterangan Kuasa', 'Proses Penandatangan Surart Kuasa', 'Proses penerbitan Akta Notaris dan SK Kemenkumham', 'Proses Penagihan Invoice Pelunasan', 'Proses Pengerjaan Bonnus Tambahan', 'Proses Pengiriman Berkas (input Resi)', 'Proses Selesai', '2024-02-14 02:36:18', '2024-02-14 02:36:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_07_071023_create_posts_table', 1),
(6, '2024_01_10_121104_create_members_table', 1),
(7, '2024_01_11_082843_create_countries_table', 1),
(8, '2024_01_11_100444_create_categories_table', 1),
(9, '2024_01_11_130838_create_category_products_table', 1),
(10, '2024_01_12_032948_create_abouts_table', 1),
(11, '2024_01_12_113729_create_products_table', 1),
(12, '2024_01_17_005517_create_shopping_carts_table', 1),
(13, '2024_01_17_011624_create_transactions_table', 1),
(14, '2024_01_17_012451_create_reports_table', 1),
(15, '2024_01_17_041825_create_shippingcosts_table', 1),
(16, '2024_02_12_222503_create_images_table', 1),
(17, '2024_02_14_051910_create_jasas_table', 1),
(18, '2024_02_14_053011_create_trackers_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `stock` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `id_transaction` varchar(255) NOT NULL,
  `transactionmonth` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shippingcosts`
--

CREATE TABLE `shippingcosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_country` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `id_category` varchar(255) NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trackers`
--

CREATE TABLE `trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_order` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `status1` varchar(255) NOT NULL,
  `status2` varchar(255) NOT NULL,
  `status3` varchar(255) NOT NULL,
  `status4` varchar(255) NOT NULL,
  `status5` varchar(255) NOT NULL,
  `status6` varchar(255) NOT NULL,
  `status7` varchar(255) NOT NULL,
  `status8` varchar(255) NOT NULL,
  `status9` varchar(255) NOT NULL,
  `status10` varchar(255) NOT NULL,
  `constraint` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `trackers`
--

INSERT INTO `trackers` (`id`, `code`, `name`, `name_order`, `condition`, `status1`, `status2`, `status3`, `status4`, `status5`, `status6`, `status7`, `status8`, `status9`, `status10`, `constraint`, `created_at`, `updated_at`) VALUES
(1, '2024-02-14 15:02:32', 'ade sandi', '1', 'KTP & NPWP Ketua, KTP & NPWP Bendahara, KTP & NPWP Sekertaris, KTP & NPWP Pengawas, KTP & NPWP Pembina, Isi Formulir Pendaftaran', 'Done', 'Done', 'Done', 'Done', 'Process', '0', '0', '0', '0', '0', '-', '2024-02-14 08:02:42', '2024-02-14 19:57:49'),
(2, '2024-02-14 15:02:48', 'lala', '3', 'KTP & NPWP Direktur, KTP & NPWP Komisaris, Isi Formulir Pendaftaran', 'Done', 'Done', 'Done', 'Process', '0', '0', '0', '0', '0', '0', '-', '2024-02-14 08:02:56', '2024-02-15 02:46:59'),
(3, '20240215034716', 'dini', '3', 'KTP & NPWP Direktur, KTP & NPWP Komisaris, Isi Formulir Pendaftaran', 'Done', 'Process', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2024-02-14 20:47:26', '2024-02-16 00:46:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `allprice` varchar(255) NOT NULL,
  `shippingcost` varchar(255) NOT NULL,
  `totalcost` varchar(255) NOT NULL,
  `transactionmonth` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `level`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'dani', 'dani@gmail.com', NULL, '$2y$12$jGnOZGpznp169JTMEz5km.uhob4kblbJmVUEw5issHQ8IGDglLJyi', NULL, '2024-02-13 23:22:49', '2024-02-15 19:15:34'),
(2, 'user', 'AA', 'aa@gmail.com', NULL, '$2y$12$oU.Vg/W5oxQhFp7oHEoJEejAr9oo1ziNlyhVZjcI.DE3tVSWgoF3m', NULL, '2024-02-15 18:51:59', '2024-02-15 18:51:59'),
(3, 'user', 'nicol', 'nicol@gmail.com', NULL, '$2y$12$FDfDybXPUlG80nLrF75dduIizVt.mk8sAsVP4WL9y72/TN2NyG556', NULL, '2024-02-15 20:36:16', '2024-02-15 20:36:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jasas`
--
ALTER TABLE `jasas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shippingcosts`
--
ALTER TABLE `shippingcosts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trackers`
--
ALTER TABLE `trackers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jasas`
--
ALTER TABLE `jasas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shippingcosts`
--
ALTER TABLE `shippingcosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `trackers`
--
ALTER TABLE `trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
