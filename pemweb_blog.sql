-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2022 pada 15.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Dasar', 'pemrograman-dasar', '2022-07-06 19:24:19', '2022-07-06 19:24:19'),
(2, 'Jurnal Teknologi', 'jurnal-teknologi', '2022-07-06 19:24:19', '2022-07-06 19:24:19'),
(3, 'Kumparan Orang Orang Bodoh', 'kumparan-orang-orang-bodoh', '2022-07-06 19:24:19', '2022-07-06 19:24:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_21_051420_create_posts_table', 1),
(6, '2022_05_21_070828_create_categories_table', 1),
(7, '2022_07_11_133806_add_is_admin_to_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(22, 2, 1, 'ANALISIS PENERIMAAN TEKNOLOGI 5G MENGGUNAKAN UTAUT 3 PADA MAHASISWA UIN SUNAN AMPEL SURABAYA', 'analisis-penerimaan-teknologi-5g-menggunakan-utaut-3-pada-mahasiswa-uin-sunan-ampel-surabaya', 'post-images/RCKEjGKNtSwI62qo1Or8g3cBeJnXQx6I2AtcI903.jpg', 'Perkembangan global banyak memberikan fasilitas teknologi terbarukan yang memudahkan banyak manusia dalam kehidupan sehari-hari, seperti adanya teknologi terbarukan yaitu jaringan 5G yang mana kecepat...', '<div>Perkembangan global banyak memberikan fasilitas teknologi terbarukan yang memudahkan banyak manusia dalam kehidupan sehari-hari, seperti adanya teknologi terbarukan yaitu jaringan 5G yang mana kecepatannya bisa sepuluh kali lipat lebih cepat dari teknologi terdahulunya 4G. Dengan menggunakan teknologi 5G memungkinkan bisa semakin mempermudah dalam kegiatan berselancar didunia digital saat ini. Meskipun dalam penggunaan teknologi 5G bisa mempercepat seseorang berselancar didunia digital sepuluh kali lebih cepat dari teknologi sebelumnya tetapi beberapa mahasiswa masih terbilang lamban dalam mengintegrasikan teknologi terdahulunya ke dalam teknologi terbarukan pada saat ini. Sehingga, analisis ini bertujuan untuk memahami indikator-indikator yang mempengaruhi adopsi teknologi yang merupakan komponen penting dalam keberhasilan implementasi teknologi di dunia digital.&nbsp;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</div><div>Metode kuantitatif diterapkan dalam penelitian ini dan teori UTAUT-3 digunakan sebagai rujukan model penelitian. Kuesioner disebarkan kepada mahasiswa yang menggunakan teknologi 5G. Pengujian model dalam penelitian ini menggunakan metode PLS-SEM yang dilakukan dengan software Smart-PLS. Hasil analisis menunjukan bahwa ditemukan beberapa indikator-indikator yang terbukti dapat mempengaruhi Niat Perilaku (Behavioural Intention) mahasiswa UIN Sunan Ampel Surabaya dalam menggunakan teknologi 5G untuk berselancar didunia digital antara lain yaitu Pengaruh Sosial (Social Influence) dengan nilai koefisien 0.234 serta didapatkan juga nilai T-Statistik 1.987 &gt; 1.96 dan P-Values 0.047 &lt; 0.1, dan Motivasi Hedonis (Hedonic Motivation) dengan nilai koefisien sebesar 0,285 selain itu nilai T-Statistik 2,781 &gt; 1,96 dan P-Values 0.06 &lt; 0.1. Sedangkan dalam indikator Kebiasaan (Habit) secara langsung mempengaruhi Perilaku Penggunaan (Use Behavior) menunjukkan nilai koefisien positif yakni 0,700 serta nilai T-Statistik sebesar 7,430 &lt; 1,96 dan P-Values 0,000 &lt; 0,1 terhadap teknologi 5G.</div>', NULL, '2022-07-10 23:39:08', '2022-07-11 04:01:36'),
(24, 2, 1, 'bbb', 'bbb', 'post-images/ph8j7zmrh2OrwPJRS1keQKJ0dIiogAV6iNGFZJVs.jpg', 'bbb', '<div>bbb</div>', NULL, '2022-07-10 23:40:48', '2022-07-10 23:40:48'),
(25, 2, 1, 'ccc', 'ccc', 'post-images/2r9TKT31y76sFpr2cJ5WY8An8vpPSej1ttgtDgXW.jpg', 'ccc', '<div>ccc</div>', NULL, '2022-07-10 23:41:01', '2022-07-10 23:41:01'),
(26, 2, 1, 'ddd', 'ddd', 'post-images/3IeRozOwmkybDElkZ7TgeVLP0A70dJkg58KOyXTS.jpg', 'ddd', '<div>ddd</div>', NULL, '2022-07-10 23:41:13', '2022-07-10 23:41:13'),
(27, 2, 1, 'eee', 'eee', 'post-images/SiWOv1uCwPJktq7kMrl7VtfTA3VJavhkanvrgspb.jpg', 'eee', '<div>eee</div>', NULL, '2022-07-10 23:41:24', '2022-07-10 23:41:24'),
(28, 2, 1, 'fff', 'fff', 'post-images/Wfk3y1MTPzI3nI4WEObWCyPABwDBgF5X2FPq2VUa.jpg', 'fff', '<div>fff</div>', NULL, '2022-07-10 23:41:36', '2022-07-10 23:41:36'),
(29, 2, 1, 'ggg', 'ggg', 'post-images/2jR8DfyIuyum450G4kE6n325XtQtd7QolEDgNCTU.jpg', 'ggg', '<div>ggg</div>', NULL, '2022-07-10 23:41:51', '2022-07-10 23:41:51'),
(30, 2, 1, 'hhh', 'hhh', 'post-images/1OOxzmgoBpjIcNMB71xFF7viH1R9t7EiGFICzR6A.jpg', 'hhh', '<div>hhh</div>', NULL, '2022-07-10 23:42:04', '2022-07-10 23:42:04'),
(31, 2, 1, 'iii', 'iii', 'post-images/BLnIwKnoiJPC3S26gSwKhhDjQO6com6dp60Khfdi.jpg', 'iii', '<div>iii</div>', NULL, '2022-07-10 23:42:17', '2022-07-11 04:14:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Anang Marsyal', 'anangarpand', 'anangmisbakhulkhoir@gmail.com', NULL, '$2y$10$wVFo7pLQgQLdDjsKDmcQtuPpd6lI4adI89VMafugXR78zFI6OgHaO', NULL, '2022-07-06 19:24:18', '2022-07-06 19:24:18', 1),
(2, 'Aan Miftahul Fawaid', 'aanmadjapahit', 'aanmiftakhulfawaid@gmail.com', NULL, '$2y$10$b9L6Th1Bi4g2rgTAWZ5lf..rCW./nzwUfrHd77OG2DF.01Vd2tdrC', NULL, '2022-07-06 19:24:19', '2022-07-06 19:24:19', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
