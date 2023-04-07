-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table peduli-vaksin.data__vaccinations
CREATE TABLE IF NOT EXISTS `data__vaccinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `warga_masyarakat_id` bigint unsigned NOT NULL,
  `master_vaccination_id` bigint unsigned NOT NULL,
  `master_location_vaccination_id` bigint unsigned NOT NULL,
  `tgl_vaksinasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaksin_ke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.data__vaccinations: ~22 rows (approximately)
INSERT INTO `data__vaccinations` (`id`, `warga_masyarakat_id`, `master_vaccination_id`, `master_location_vaccination_id`, `tgl_vaksinasi`, `vaksin_ke`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, '2021-03-12', '1', '2023-04-05 05:35:03', '2023-04-05 05:35:03'),
	(2, 1, 1, 1, '2021-06-20', '2', '2023-04-05 05:35:22', '2023-04-05 05:35:22'),
	(3, 2, 2, 2, '2021-03-12', '1', '2023-04-05 05:36:10', '2023-04-05 05:36:10'),
	(4, 2, 2, 2, '2021-06-20', '2', '2023-04-05 05:36:43', '2023-04-05 05:36:43'),
	(5, 2, 2, 2, '2021-12-02', '3', '2023-04-05 05:37:16', '2023-04-05 05:37:16'),
	(6, 2, 2, 2, '2022-06-18', '4', '2023-04-05 05:37:41', '2023-04-05 05:37:41'),
	(7, 3, 2, 3, '2021-03-12', '1', '2023-04-05 05:38:26', '2023-04-05 05:38:26'),
	(8, 4, 1, 1, '2021-03-12', '1', '2023-04-05 05:39:04', '2023-04-05 05:39:04'),
	(9, 4, 1, 1, '2021-06-20', '2', '2023-04-05 05:39:15', '2023-04-05 05:39:15'),
	(10, 4, 1, 1, '2021-12-02', '3', '2023-04-05 05:39:34', '2023-04-05 05:39:34'),
	(11, 4, 1, 1, '2022-06-18', '4', '2023-04-05 05:39:50', '2023-04-05 05:39:50'),
	(12, 5, 3, 4, '2021-03-12', '1', '2023-04-05 05:40:39', '2023-04-05 05:40:39'),
	(13, 5, 3, 4, '2021-06-20', '2', '2023-04-05 05:40:54', '2023-04-05 05:40:54'),
	(14, 5, 3, 4, '2021-12-02', '3', '2023-04-05 05:41:14', '2023-04-05 05:41:14'),
	(15, 6, 2, 5, '2021-03-12', '1', '2023-04-05 05:41:39', '2023-04-05 05:41:39'),
	(16, 6, 2, 5, '2021-06-20', '2', '2023-04-05 05:41:52', '2023-04-05 05:41:52'),
	(17, 6, 2, 5, '2021-12-02', '3', '2023-04-05 05:42:05', '2023-04-05 05:42:05'),
	(18, 6, 2, 5, '2022-06-18', '4', '2023-04-05 05:42:26', '2023-04-05 05:42:26'),
	(19, 7, 4, 2, '2021-03-12', '1', '2023-04-05 05:42:48', '2023-04-05 05:42:48'),
	(20, 7, 4, 2, '2021-06-20', '2', '2023-04-05 05:43:02', '2023-04-05 05:43:02'),
	(21, 7, 4, 2, '2021-12-02', '3', '2023-04-05 05:43:15', '2023-04-05 05:43:15'),
	(22, 7, 4, 2, '2022-06-18', '4', '2023-04-05 05:43:28', '2023-04-05 05:43:28');

-- Dumping structure for table peduli-vaksin.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table peduli-vaksin.master__location__vaccinations
CREATE TABLE IF NOT EXISTS `master__location__vaccinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.master__location__vaccinations: ~0 rows (approximately)
INSERT INTO `master__location__vaccinations` (`id`, `nama_lokasi`, `alamat_lokasi`, `created_at`, `updated_at`) VALUES
	(1, 'RSUD Pati', 'Pati', '2023-04-05 05:29:04', '2023-04-05 05:29:04'),
	(2, 'RS KSH PATI', 'Pati', '2023-04-05 05:29:12', '2023-04-05 05:29:15'),
	(3, 'Puskesmas Pati 1', 'Pati', '2023-04-05 05:29:24', '2023-04-05 05:29:24'),
	(4, 'Puskesmas Pati 2', 'Pati', '2023-04-05 05:29:36', '2023-04-05 05:29:36'),
	(5, 'RSU Fastabiq Sehat', 'Pati', '2023-04-05 05:29:45', '2023-04-05 05:29:45');

-- Dumping structure for table peduli-vaksin.master__vaccinations
CREATE TABLE IF NOT EXISTS `master__vaccinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_master` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.master__vaccinations: ~0 rows (approximately)
INSERT INTO `master__vaccinations` (`id`, `nama_master`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'AstraZeneca', 'Berat', '2023-04-05 05:27:05', '2023-04-05 05:27:05'),
	(2, 'Sinovac', 'Normal', '2023-04-05 05:28:29', '2023-04-05 05:28:29'),
	(3, 'Pfizer', 'Berat', '2023-04-05 05:28:40', '2023-04-05 05:28:40'),
	(4, 'Moderna', 'Normal', '2023-04-05 05:28:47', '2023-04-05 05:28:47');

-- Dumping structure for table peduli-vaksin.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(17, '2014_10_12_000000_create_users_table', 1),
	(18, '2014_10_12_100000_create_password_resets_table', 1),
	(19, '2019_08_19_000000_create_failed_jobs_table', 1),
	(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(21, '2023_03_13_014412_create_warga__masyarakats_table', 1),
	(22, '2023_03_13_023642_create_data__vaccinations_table', 1),
	(23, '2023_03_13_023906_create_master__location__vaccinations_table', 1),
	(24, '2023_03_13_024051_create_master__vaccinations_table', 1);

-- Dumping structure for table peduli-vaksin.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.password_resets: ~0 rows (approximately)

-- Dumping structure for table peduli-vaksin.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table peduli-vaksin.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '$2y$10$H0/4WyJLqznDpwnNQ0RbkeCb.10qlpPmg9kUpDgBbqOGxtyt1zhIq', '1', '2023-04-05 05:26:25', '2023-04-05 05:26:25');

-- Dumping structure for table peduli-vaksin.warga__masyarakats
CREATE TABLE IF NOT EXISTS `warga__masyarakats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table peduli-vaksin.warga__masyarakats: ~0 rows (approximately)
INSERT INTO `warga__masyarakats` (`id`, `nik`, `nama`, `gender`, `alamat`, `pekerjaan`, `no_telp`, `created_at`, `updated_at`) VALUES
	(1, '1111111111111111', 'Rahman Hidayat', 'Laki-Laki', 'Jl. Dr. Wahidin, Pati', 'Wiraswasta', '085434434434', '2023-04-05 05:30:45', '2023-04-05 05:30:45'),
	(2, '2222222222222222', 'Rini Handayani', 'Perempuan', 'Jl. Pemuda, Pati', 'Guru', '085334433334', '2023-04-05 05:31:17', '2023-04-05 05:31:17'),
	(3, '3333333333333333', 'Siti Aminah', 'Perempuan', 'Jl. Slamet Riyadi, Pati', 'Pedagang', '085534435534', '2023-04-05 05:32:02', '2023-04-05 05:32:02'),
	(4, '4444444444444444', 'Surya Permana', 'Laki-Laki', 'Jl. KH. Hasyim Asy\'ari, Pati', 'PNS', '085634436634', '2023-04-05 05:32:32', '2023-04-05 05:32:32'),
	(5, '5555555555555555', 'Tri Wahyuni', 'Perempuan', 'Jl. Diponegoro, Pati', 'Mahasiswa', '085734437734', '2023-04-05 05:33:13', '2023-04-05 05:33:13'),
	(6, '6666666666666666', 'Widodo Santoso', 'Laki-Laki', 'Jl. Diponegoro, Pati', 'Wiraswasta', '085834438834', '2023-04-05 05:33:49', '2023-04-05 05:33:49'),
	(7, '7777777777777777', 'Yuni Wijayanti', 'Perempuan', 'Jl. Veteran, Pati', 'Wiraswasta', '085934439934', '2023-04-05 05:34:22', '2023-04-05 05:34:22');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
