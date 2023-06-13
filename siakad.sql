-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2023 at 12:48 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `catat_pembayarans`
--

DROP TABLE IF EXISTS `catat_pembayarans`;
CREATE TABLE IF NOT EXISTS `catat_pembayarans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nisn` bigint NOT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ekskuls`
--

DROP TABLE IF EXISTS `ekskuls`;
CREATE TABLE IF NOT EXISTS `ekskuls` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_ekskul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_ekskul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_ekskul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekskuls`
--

INSERT INTO `ekskuls` (`id`, `nama_ekskul`, `hari_ekskul`, `waktu_ekskul`, `created_at`, `updated_at`) VALUES
(1, 'Sepak Bola', 'Rabu', '15:00', '2023-06-13 05:42:36', '2023-06-13 05:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

DROP TABLE IF EXISTS `gurus`;
CREATE TABLE IF NOT EXISTS `gurus` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username_guru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` bigint NOT NULL,
  `tempat_lahir_guru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir_guru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jns_kelamin_guru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir_guru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_guru` bigint NOT NULL,
  `alamat_guru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `username_guru`, `password`, `nama_guru`, `nip`, `tempat_lahir_guru`, `tgl_lahir_guru`, `jns_kelamin_guru`, `pendidikan_terakhir_guru`, `nohp_guru`, `alamat_guru`, `active`, `created_at`, `updated_at`) VALUES
(1, 'esihayuningsih', '$2y$10$q9wJQ7k6MpiHrpjjX/.ka.Ia2UFMy0w7Ad6t/TFTQZgjcjMkOzhru', 'Esih Ayuningsih', 12345678565, 'Depok', '2023-05-26', 'Perempuan', 'SMA / Sederajat', 895358282147, 'Jl Arrahim, Depok', 1, '2023-05-28 04:55:30', '2023-05-28 04:55:30'),
(2, 'guru123', '$2y$10$q9wJQ7k6MpiHrpjjX/.ka.Ia2UFMy0w7Ad6t/TFTQZgjcjMkOzhru', 'Guru 1', 12345325, 'Jakarta', '2023-06-13', 'Laki-Laki', 'Strata 1 (S1)', 1234567890, 'Jauh', 1, '2023-06-12 18:32:18', '2023-06-12 19:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `jns_pembayarans`
--

DROP TABLE IF EXISTS `jns_pembayarans`;
CREATE TABLE IF NOT EXISTS `jns_pembayarans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `kd_jns_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jns_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jns_pembayarans`
--

INSERT INTO `jns_pembayarans` (`id`, `kd_jns_pembayaran`, `nama_jns_pembayaran`, `created_at`, `updated_at`) VALUES
(1, '123', 'test', '2023-06-06 01:59:44', '2023-06-06 01:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `thn_akademik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_walikelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `thn_akademik`, `nm_kelas`, `nm_walikelas`, `created_at`, `updated_at`) VALUES
(1, '1', 'Kelas 2022 Ganjil', 'Esih Ayuningsih', '2023-06-13 05:38:11', '2023-06-13 05:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `mapels`
--

DROP TABLE IF EXISTS `mapels`;
CREATE TABLE IF NOT EXISTS `mapels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `kd_mapel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_mapel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapels`
--

INSERT INTO `mapels` (`id`, `kd_mapel`, `nm_mapel`, `created_at`, `updated_at`) VALUES
(1, '915156', 'MTK', '2023-06-12 19:14:03', '2023-06-12 19:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_05_135614_create_gurus_table', 1),
(6, '2023_05_05_172154_create_siswas_table', 1),
(7, '2023_05_12_150805_create_kelas_table', 1),
(8, '2023_05_12_160749_create_mapels_table', 1),
(9, '2023_05_12_163658_create_tahun_akademiks_table', 1),
(10, '2023_05_12_165037_create_ekskuls_table', 1),
(11, '2023_05_12_172122_create_jns_pembayarans_table', 1),
(12, '2023_05_14_152500_create_pengumumen_table', 1),
(13, '2023_05_23_024313_create_catat_pembayarans_table', 1),
(14, '2023_05_23_133537_create_orang_tuas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orang_tuas`
--

DROP TABLE IF EXISTS `orang_tuas`;
CREATE TABLE IF NOT EXISTS `orang_tuas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username_ortu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_ayah` bigint DEFAULT NULL,
  `nama_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgllahir_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ibu` bigint DEFAULT NULL,
  `nama_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgllahir_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orang_tuas`
--

INSERT INTO `orang_tuas` (`id`, `username_ortu`, `password`, `nama_siswa`, `nik_ayah`, `nama_ayah`, `tgllahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `nik_ibu`, `nama_ibu`, `tgllahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `created_at`, `updated_at`) VALUES
(1, 'MaswadihParent', '1234566543tyf', 'Arkan Alhady', 8765432, 'Maswadih', '2023-05-16', 'Diploma 3 (D3)', 'Pegawai Negeri', 12345678, 'Mulyani', '2023-05-08', 'SMP / Sederajat', 'Pegawai Negeri', '2023-05-23 21:45:05', '2023-05-23 21:45:05'),
(2, 'lionelmessi10', '1234543212345', 'Arkan Alhady', 8765432, 'Lionel Messi', '2023-05-25', 'SMP / Sederajat', 'Pegawai Swasta', 12345678, 'Cinta Laura', '2023-05-26', 'SMP / Sederajat', 'Pegawai Negeri', '2023-05-24 05:54:36', '2023-05-24 05:54:36'),
(6, '20230602', '$2y$10$q9wJQ7k6MpiHrpjjX/.ka.Ia2UFMy0w7Ad6t/TFTQZgjcjMkOzhru', 'Nama User', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-13 02:32:39', '2023-06-13 02:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

DROP TABLE IF EXISTS `pengumuman`;
CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `tanggal`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, '2023-05-09', 'Pengumuman Maulid Nabi Muhammad SAW', '<div><br>Dengan rasa syukur dan kebahagiaan, kami mengundang seluruh jamaah untuk merayakan kelahiran Nabi Muhammad SAW dalam acara Maulid Nabi yang akan diadakan pada:<br><br><br>Acara ini akan diisi dengan berbagai kegiatan yang bertujuan untuk memperingati dan menghormati kehidupan Rasulullah serta merenungkan ajaran-ajaran yang beliau sampaikan kepada umat manusia. Beberapa kegiatan yang akan dilaksanakan antara lain:<br><br>1. Pembacaan Maulid Nabi: Kami akan membaca dan mendengarkan kisah-kisah kehidupan Nabi Muhammad SAW yang menginspirasi.<br><br>2. Ceramah: Ustadz [nama] akan memberikan ceramah tentang nilai-nilai kehidupan yang diajarkan oleh Nabi Muhammad SAW.<br><br>3. Sholawat dan Zikir: Bersama-sama, kita akan memanjatkan sholawat dan melakukan zikir sebagai bentuk penghormatan kepada Nabi Muhammad SAW.<br><br>4. Pameran: Kami juga akan menyelenggarakan pameran tentang kehidupan Nabi Muhammad SAW, yang akan menampilkan informasi dan artefak seputar kehidupan beliau.<br><br>Kami mengundang seluruh jamaah, baik laki-laki maupun perempuan, untuk hadir dan mengikuti acara ini dengan penuh keikhlasan dan kecintaan kepada Nabi Muhammad SAW. Mari kita berupaya mengambil hikmah dari kehidupan beliau dan menerapkan ajaran-ajaran yang beliau sampaikan dalam kehidupan sehari-hari.<br><br>Terima kasih atas perhatian dan partisipasinya. Semoga kita semua dapat meraih berkah dan rahmat Allah SWT dalam peringatan Maulid Nabi ini.<br><br>Wassalamu\'alaikum warahmatullahi wabarakatuh.\"<br><br>Harap diingat bahwa ini hanya merupakan contoh pengumuman, Anda dapat menyesuaikannya dengan waktu, tempat, dan kegiatan yang sesuai dengan acara Maulid Nabi yang akan Anda selenggarakan.</div>', '2023-05-27 05:20:59', '2023-05-27 05:34:46'),
(2, '2023-05-16', 'Pengambilan Raport Semester Genap Tahun 2023', '<div><br><br>Diberitahukan kepada seluruh siswa dan orang tua/wali siswa bahwa pengambilan raport semester ini akan dilaksanakan pada:<br><br>Hari/Tanggal: [tanggal]<br>Waktu: Pukul [jam] - [jam]<br>Tempat: [lokasi]<br><br>Kami mengharapkan kehadiran semua siswa atau seorang perwakilan dari setiap keluarga untuk mengambil raport tersebut. Raport semester ini berisi penilaian prestasi akademik siswa selama semester ini, serta catatan mengenai perkembangan siswa dalam berbagai aspek pembelajaran.<br><br>Agar pengambilan raport berjalan lancar, mohon diperhatikan beberapa hal berikut:<br><br>1. Pastikan Anda membawa kartu identitas siswa (Kartu Pelajar) atau surat kuasa yang menyatakan bahwa Anda adalah wali siswa yang berhak mengambil raport.<br><br>2. Jika Anda tidak dapat hadir pada tanggal yang ditentukan, mohon segera menginformasikan kepada pihak sekolah untuk mengatur pengambilan raport secara terpisah.<br><br>3. Setelah menerima raport, mohon periksa dengan teliti isinya dan jika terdapat ketidaksesuaian atau kekeliruan, segera laporkan ke pihak sekolah untuk mendapatkan klarifikasi dan perbaikan yang diperlukan.<br><br>Raport merupakan bukti tanggung jawab belajar siswa dan juga sebagai alat evaluasi bagi siswa dan orang tua/wali siswa. Dengan memperoleh informasi yang terdapat di dalamnya, diharapkan dapat membantu dalam mengidentifikasi kekuatan dan area yang perlu diperbaiki untuk perkembangan siswa ke depannya.<br><br>Terima kasih atas perhatian dan kerjasamanya. Semoga raport ini memberikan pemahaman yang baik mengenai perkembangan siswa selama semester ini.<br><br>Hormat kami,<br><br><br></div>', '2023-05-27 05:53:04', '2023-05-28 04:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

DROP TABLE IF EXISTS `siswas`;
CREATE TABLE IF NOT EXISTS `siswas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `walikelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ekskul_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jns_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_siswa` bigint DEFAULT NULL,
  `nama_ayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp_ortu` bigint DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wali` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp_wali` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_wali` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_ortu` int NOT NULL,
  `active` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `username_siswa`, `email`, `password`, `nisn`, `nama`, `tempat_lahir`, `tgl_lahir`, `kelas`, `walikelas`, `ekskul_siswa`, `jns_kelamin`, `nohp_siswa`, `nama_ayah`, `nama_ibu`, `nohp_ortu`, `alamat`, `nama_wali`, `nohp_wali`, `alamat_wali`, `kode_ortu`, `active`, `created_at`, `updated_at`) VALUES
(1, 'arkanalhady', '', '$2y$10$q9wJQ7k6MpiHrpjjX/.ka.Ia2UFMy0w7Ad6t/TFTQZgjcjMkOzhru', '14376199', 'Arkan Alhady', 'jakarta', '2023-05-16', 'VII B', 'Asep', 'futsal', 'Laki-Laki', 895358282147, 'Maswadih', 'Mulyani', 895358282147, 'Jl Arrahim, Kota Depok', '-', '-', '-', 0, 0, '2023-05-28 06:53:06', '2023-06-06 02:16:27'),
(5, 'user', NULL, '$2y$10$VTmtK/OpXg5haBuEObzLn.ty7cYgZzAOcRWU/bkGU0oF8ocip0oh2', NULL, 'Nama User', 'Jakarta', '2023-06-13', NULL, NULL, NULL, 'Laki-Laki', NULL, NULL, NULL, 121242145, 'jauh', NULL, NULL, NULL, 20230602, 0, '2023-06-13 02:32:39', '2023-06-13 02:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademiks`
--

DROP TABLE IF EXISTS `tahun_akademiks`;
CREATE TABLE IF NOT EXISTS `tahun_akademiks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `thn_akademik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_akademiks`
--

INSERT INTO `tahun_akademiks` (`id`, `thn_akademik`, `semester`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022', 'Ganjil', 'Aktif', '2023-06-13 05:34:51', '2023-06-13 05:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', '2023-06-06 02:23:37', '$2y$10$q9wJQ7k6MpiHrpjjX/.ka.Ia2UFMy0w7Ad6t/TFTQZgjcjMkOzhru', NULL, '2023-06-06 02:23:37', '2023-06-06 02:23:37'),
(2, 'guru', 'guru', 'guru@gmail.com', NULL, '$2y$10$q9wJQ7k6MpiHrpjjX/.ka.Ia2UFMy0w7Ad6t/TFTQZgjcjMkOzhru', NULL, '2023-06-06 11:20:46', '2023-06-06 11:20:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
