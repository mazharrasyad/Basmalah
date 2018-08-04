-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2018 pada 12.44
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_basmalah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `belajars`
--

CREATE TABLE `belajars` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pelajaran` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_tempat_belajar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pukul` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `belajars`
--

INSERT INTO `belajars` (`id`, `kode`, `user_id`, `pelajaran`, `alamat_tempat_belajar`, `hari`, `pukul`, `status`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BL1', 4, 'Memasak Makanan Padang', 'Jl. Padang Deket Depok', 'Senin', '07.00 - 09.00', 'Aktif', 'c4ca4238a0b923820dcc509a6f75849b', '2018-08-04 02:07:47', '2018-08-04 02:47:52', NULL),
(2, 'BL2', 4, 'Memasak Makanan Khas Jawa', 'Jl. Padang Deket Depok', 'Selasa', '07.00 - 09.00', 'Selesai', 'c81e728d9d4c2f636f067f89cc14862c', '2018-08-04 02:08:23', '2018-08-04 02:48:48', NULL),
(3, 'BL3', 4, 'Memasak Makanan Tradisional', 'Jl. Padang Deket Depok', 'Rabu', '12.30 - 14.30', 'Pending', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2018-08-04 02:48:38', '2018-08-04 02:48:38', NULL),
(4, 'BL4', 5, 'Menjahit Baju', 'Jl. Merdeka No 1', 'Ahad', '09.00 - 11.00', 'Pending', 'a87ff679a2f3e71d9181a67b7542122c', '2018-08-04 02:52:59', '2018-08-04 02:52:59', NULL),
(5, 'BL5', 5, 'Menjahit Celana', 'Jl. Merdeka No 1', 'Sabtu', '12.30 - 14.30', 'Aktif', 'e4da3b7fbbce2345d7772b0674a318d5', '2018-08-04 02:53:17', '2018-08-04 02:54:20', NULL),
(6, 'BL6', 5, 'Menjahit Syal', 'Jl. Merdeka No 1', 'Senin', '15.30 - 17.30', 'Selesai', '1679091c5a880faf6fb5e6087eb1b2dc', '2018-08-04 02:53:45', '2018-08-04 02:54:24', NULL),
(7, 'BL7', 4, 'Memasak Makanan Laut', 'Jl. Padang Deket Depok', 'Jumat', '09.00 - 11.00', 'Pending', '8f14e45fceea167a5a36dedd4bea2543', '2018-08-04 03:05:24', '2018-08-04 03:05:24', NULL),
(8, 'BL8', 5, 'Menjahit Jas', 'Jl. Merdeka No 1', 'Kamis', '07.00 - 09.00', 'Pending', 'c9f0f895fb98ab9159f51fd0297e236d', '2018-08-04 03:07:26', '2018-08-04 03:07:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dkms`
--

CREATE TABLE `dkms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_handphone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_masjid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_masjid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_di_masjid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening_masjid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dkms`
--

INSERT INTO `dkms` (`id`, `nama_lengkap`, `alamat`, `no_handphone`, `email`, `nama_masjid`, `alamat_masjid`, `jabatan_di_masjid`, `no_rekening_masjid`, `status`, `user_id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Muhammad Azhar Rasyad', 'Perumahan Persada Alam Blok B1 No 18', '081290351971', 'muhazharrasyad@gmail.com', 'Masjid Al Muhajirin', 'Jl. Persada Alam Cibinong', 'Ketua Dewan Kemakmuran Masjid', '1330014415715', 'Disetujui', 2, 'c4ca4238a0b923820dcc509a6f75849b', '2018-08-03 23:52:11', '2018-08-04 02:25:17', NULL),
(2, 'Muhammad Hasbi Sidiq', 'Perumahan Depok Alam Lestari Blok A2 No 19', '081290351221', 'mhasbisidiq@gmail.com', 'Masjid Al Ikhlas', 'Jl. Depok Alam Lestari', 'Bendahara', '1330014415225', 'Disetujui', 3, 'c81e728d9d4c2f636f067f89cc14862c', '2018-08-03 23:53:53', '2018-08-04 02:25:49', NULL),
(3, 'Naufal Afif Fadhlullah', 'Perumahan Jamaika Blok Z No 99', '081290359999', 'nafif@gmail.com', 'Masjid An Nur', 'Jl. Jamaika No 1', 'Humas', '1330014419999', 'Ditolak', 1, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2018-08-03 23:55:04', '2018-08-04 00:06:20', NULL),
(4, 'Muhammad Febrian Mosii', 'Jl. Karadenan BDB II', '081290111200', 'febrian@yahoo.co.id', 'Masjid Al Ikhwan', 'Jl.Srengseng Sawah No 21', 'Muadzin', '1330014415200', 'Pending', 0, 'a87ff679a2f3e71d9181a67b7542122c', '2018-08-04 00:24:23', '2018-08-04 00:24:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasis`
--

CREATE TABLE `donasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_handphone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dkm_id` int(10) UNSIGNED NOT NULL,
  `nominal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_bank` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `donasis`
--

INSERT INTO `donasis` (`id`, `no_handphone`, `email`, `dkm_id`, `nominal`, `pesan`, `transfer_bank`, `status`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '081290131200', 'eatna2002@gmail.com', 1, '100000', 'Semangat', 'Mandiri', 'Gagal', 'c4ca4238a0b923820dcc509a6f75849b', '2018-08-04 00:36:28', '2018-08-04 00:53:46', NULL),
(3, '081290111221', 'eatna2002@gmail.com', 2, '200000', 'Lanjutkan', 'BCA', 'Selesai', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2018-08-04 00:51:05', '2018-08-04 00:53:42', NULL),
(4, '081290131200', 'eatna2002@gmail.com', 2, '100000', 'Semangat Terus', 'Mandiri', 'Pending', 'a87ff679a2f3e71d9181a67b7542122c', '2018-08-04 00:51:26', '2018-08-04 00:51:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` int(10) UNSIGNED NOT NULL,
  `pengangguran_id` int(10) UNSIGNED NOT NULL,
  `belajar_id` int(10) UNSIGNED NOT NULL,
  `jadwal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `pengangguran_id`, `belajar_id`, `jadwal`, `user_id`, `status`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '11', 2, 'Diterima', 'c4ca4238a0b923820dcc509a6f75849b', '2018-08-04 03:12:30', '2018-08-04 03:35:52', NULL),
(2, 1, 3, '13', 2, 'Ditolak', 'c81e728d9d4c2f636f067f89cc14862c', '2018-08-04 03:21:49', '2018-08-04 03:36:14', NULL),
(3, 2, 8, '28', 2, 'Diterima', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2018-08-04 03:22:15', '2018-08-04 03:37:23', NULL),
(4, 5, 1, '51', 3, 'Diterima', 'a87ff679a2f3e71d9181a67b7542122c', '2018-08-04 03:31:47', '2018-08-04 03:36:04', NULL),
(5, 5, 5, '55', 3, 'Menunggu', 'e4da3b7fbbce2345d7772b0674a318d5', '2018-08-04 03:31:56', '2018-08-04 03:31:56', NULL),
(6, 9, 5, '91', 3, 'Ditolak', '1679091c5a880faf6fb5e6087eb1b2dc', '2018-08-04 03:32:03', '2018-08-04 03:37:39', NULL),
(7, 9, 7, '97', 3, 'Menunggu', '8f14e45fceea167a5a36dedd4bea2543', '2018-08-04 03:32:47', '2018-08-04 03:32:47', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporans`
--

CREATE TABLE `laporans` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_handphone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporans`
--

INSERT INTO `laporans` (`id`, `no_handphone`, `pesan`, `status`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '081290131200', 'Kurang Desain', 'Selesai', 'c4ca4238a0b923820dcc509a6f75849b', '2018-08-04 00:43:44', '2018-08-04 00:53:52', NULL),
(2, '081290111221', 'Tampilannya Kurang Menarik', 'Pending', 'c81e728d9d4c2f636f067f89cc14862c', '2018-08-04 00:51:44', '2018-08-04 00:51:44', NULL),
(3, '081290111221', 'Terlalu Simple', 'Pending', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2018-08-04 00:51:58', '2018-08-04 00:51:58', NULL);

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
(3, '2018_07_15_055322_create_dkms_table', 2),
(4, '2018_07_15_055554_create_penganggurans_table', 2),
(5, '2018_07_15_055721_create_pengajars_table', 2),
(6, '2018_07_15_060109_create_donasis_table', 2),
(7, '2018_07_15_060946_create_belajars_table', 2),
(10, '2018_07_15_134741_create_roles_table', 3),
(11, '2018_07_15_135154_add_column_role_id_to_users', 3),
(13, '2018_07_16_005727_add_column_user_id_to_dkms', 4),
(14, '2018_07_18_024639_create_jadwals_table', 5),
(15, '2018_07_21_021636_update', 6),
(16, '2018_07_21_022355_create_penggunas_table', 7),
(17, '2018_07_22_131744_create_laporans_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajars`
--

CREATE TABLE `pengajars` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_handphone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_keahlian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajars`
--

INSERT INTO `pengajars` (`id`, `nama_lengkap`, `agama`, `jenis_kelamin`, `alamat`, `no_handphone`, `email`, `bidang_keahlian`, `status`, `user_id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Budi', 'Islam', 'Pria', 'Perumahan Kemang Swatama Blok B3 No 12', '081290111221', 'budi@yahoo.co.id', 'Memasak', 'Disetujui', 4, 'c4ca4238a0b923820dcc509a6f75849b', '2018-08-03 23:58:32', '2018-08-04 02:11:13', NULL),
(2, 'Asep', 'Islam', 'Pria', 'Jl. Persahabatan No 18', '081290991221', 'asep@yahoo.com', 'Menjahit', 'Disetujui', 5, 'c81e728d9d4c2f636f067f89cc14862c', '2018-08-03 23:59:26', '2018-08-04 02:11:25', NULL),
(3, 'Rudi', 'Islam', 'Pria', 'Jl. Raden Saleh No 19 RT 01 RW 10', '081290322221', 'rudi@gmail.com', 'Bertani', 'Ditolak', 0, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2018-08-04 00:00:17', '2018-08-04 00:33:35', NULL),
(4, 'Hajid', 'Islam', 'Pria', 'Jl. Cileunsi No 100', '081290115221', 'zharjid@gmail.com', 'Berternak', 'Pending', 0, 'a87ff679a2f3e71d9181a67b7542122c', '2018-08-04 00:25:30', '2018-08-04 00:25:30', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penganggurans`
--

CREATE TABLE `penganggurans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peminatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_menganggur` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_orang_tanggungan` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menganggur',
  `user_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penganggurans`
--

INSERT INTO `penganggurans` (`id`, `kode`, `nama_lengkap`, `agama`, `jenis_kelamin`, `alamat`, `pendidikan_terakhir`, `peminatan`, `lama_menganggur`, `jumlah_orang_tanggungan`, `status`, `user_id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PG1', 'Renaldi', 'Islam', 'Pria', 'Jl. Sukmajaya No 18', 'Tidak Sekolah', 'Mengajar', 'Kurang Dari 1 Bulan', '2', 'Belajar', 2, 'c4ca4238a0b923820dcc509a6f75849b', '2018-08-04 00:56:16', '2018-08-04 03:21:13', NULL),
(2, 'PG2', 'Lukman', 'Islam', 'Pria', 'Jl. Cikumpa No 20', 'Taman Kanak-Kanak atau Setingkat', 'Memasak', 'Antara 1 - 12 Bulan', '4', 'Belajar', 2, 'c81e728d9d4c2f636f067f89cc14862c', '2018-08-04 00:57:02', '2018-08-04 03:22:25', NULL),
(3, 'PG3', 'Aji', 'Islam', 'Pria', 'Jl. Cikumpa No 1', 'Sekolah Dasar atau Setingkat', 'Berdagang', 'Lebih Dari 12 Bulan', '3', 'Menganggur', 2, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2018-08-04 02:44:16', '2018-08-04 02:44:16', NULL),
(4, 'PG4', 'Gumilar', 'Islam', 'Pria', 'Jl. Pangraji No 2', 'Sekolah Menengah Atas atau Setingkat', 'Berdakwah', 'Lebih Dari 12 Bulan', '4', 'Bekerja', 2, 'a87ff679a2f3e71d9181a67b7542122c', '2018-08-04 02:44:49', '2018-08-04 02:45:09', NULL),
(5, 'PG5', 'Angga', 'Islam', 'Pria', 'Jl. Cilebut No 1', 'Sekolah Menengah Pertama atau Setingkat', 'Menjahit', 'Kurang Dari 1 Bulan', '3', 'Belajar', 3, 'e4da3b7fbbce2345d7772b0674a318d5', '2018-08-04 02:50:45', '2018-08-04 03:32:17', NULL),
(6, 'PG6', 'Abdul', 'Islam', 'Pria', 'Jl. Cilebut No 2', 'Tidak Sekolah', 'Memasak', 'Antara 1 - 12 Bulan', '0', 'Bekerja', 3, '1679091c5a880faf6fb5e6087eb1b2dc', '2018-08-04 02:51:14', '2018-08-04 03:32:23', NULL),
(7, 'PG7', 'Lazuardi', 'Islam', 'Pria', 'Jl. Cilebut No 1', 'Taman Kanak-Kanak atau Setingkat', 'Bertani', 'Antara 1 - 12 Bulan', '1', 'Menganggur', 3, '8f14e45fceea167a5a36dedd4bea2543', '2018-08-04 02:51:50', '2018-08-04 02:51:50', NULL),
(8, 'PG8', 'Ihsan', 'Islam', 'Pria', 'Jl. Cilebut No 10', 'Sekolah Menengah Atas atau Setingkat', 'Olahraga', 'Lebih Dari 12 Bulan', '2', 'Menganggur', 2, 'c9f0f895fb98ab9159f51fd0297e236d', '2018-08-04 03:24:18', '2018-08-04 03:24:18', NULL),
(9, 'PG9', 'Iqbal', 'Islam', 'Pria', 'Jl. Cilebut No 55', 'Taman Kanak-Kanak atau Setingkat', 'Olahraga', 'Kurang Dari 1 Bulan', '3', 'Belajar', 3, '45c48cce2e2d7fbdea1afc51c7c6ad26', '2018-08-04 03:24:58', '2018-08-04 03:32:27', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2018-07-16 13:28:57', '2018-07-16 13:28:57'),
(2, 'Dewan Kemakmuran Masjid', '2018-07-16 13:28:57', '2018-07-16 13:28:57'),
(3, 'Pengajar', '2018-07-17 02:09:32', '2018-07-17 02:09:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(2) UNSIGNED NOT NULL,
  `role_id` int(2) NOT NULL DEFAULT '4',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hint_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `hint_password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', '$2y$10$7boWMglqF3YHIQq5ePnf5eJ0J.VQVvddoE.mM1KHyI.cRCGvwfJZS', '123456', 'z4MXeAImmP0l6dsARsIeGLJsvo9yPzUjBiIjS00mtv9qvjl0vzX3oGAVRr6Z', '2018-07-23 02:37:57', '2018-08-04 00:18:32', NULL),
(2, 2, 'Muhammad Azhar Rasyad', 'muhazharrasyad@gmail.com', '$2y$10$8jrP40QPf.t4W9XGvjRgC.Tm2J0avia4csHApeSik1AT6jQ5PZcIi', 'rahasia', '8LfrW5405sjoekLingHRcxEZmqiCDXUkJvFzFWetqtTmmvYHpWUyfQCezxrF', '2018-08-04 00:07:23', '2018-08-04 00:07:23', NULL),
(3, 2, 'Muhammad Hasbi Sidiq', 'mhasbisidiq@gmail.com', '$2y$10$TL0ocMp34vZD25xxv8zeOOVquHdpFvqb6Ez0nnKow5RIp1A7lf07y', 'gaktau', 'GBPfjG6XobBCqGEbnb6DGARj99jVC73RXcN1KBiMbntPnbksLKjvriPuUxBZ', '2018-08-04 00:07:45', '2018-08-04 00:07:54', NULL),
(4, 3, 'Budi', 'budi@yahoo.co.id', '$2y$10$IrNtiZ2z9zQQTfG.1orNDudDdETY6MbEDY0XdkVEgu4rs47zsl3fi', '123456', 'HQqVnqmAvNb05yvf6CRuAObnoFrg6XPvYas8l0jwF4zUpsXRMY7og73zwu9V', '2018-08-04 00:30:02', '2018-08-04 00:32:05', NULL),
(5, 3, 'Asep', 'asep@yahoo.com', '$2y$10$IHpJotyh8lY0MuMSMDA8p.XKSWnR21CmHqg7LL1/IZrS5d3VvWs4.', '654321', 'JxZ21w3igHAdB2gOFNDyZyEOoxvd6bN5j09S66WgpbGyNImQldZQdRY9xeuF', '2018-08-04 00:32:53', '2018-08-04 00:32:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `belajars`
--
ALTER TABLE `belajars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `belajars_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `dkms`
--
ALTER TABLE `dkms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_handphone` (`no_handphone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `donasis`
--
ALTER TABLE `donasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donasis_dkm_id_foreign` (`dkm_id`) USING BTREE;

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`jadwal`),
  ADD KEY `jadwals_pengangguran_id_foreign` (`pengangguran_id`),
  ADD KEY `jadwals_belajar_id_foreign` (`belajar_id`);

--
-- Indeks untuk tabel `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `pengajars`
--
ALTER TABLE `pengajars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_handphone` (`no_handphone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `penganggurans`
--
ALTER TABLE `penganggurans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `penganggurans_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT untuk tabel `belajars`
--
ALTER TABLE `belajars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dkms`
--
ALTER TABLE `dkms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `donasis`
--
ALTER TABLE `donasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pengajars`
--
ALTER TABLE `pengajars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penganggurans`
--
ALTER TABLE `penganggurans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `belajars`
--
ALTER TABLE `belajars`
  ADD CONSTRAINT `belajars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `donasis`
--
ALTER TABLE `donasis`
  ADD CONSTRAINT `donasis_dkm_id_foreign	` FOREIGN KEY (`dkm_id`) REFERENCES `dkms` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_belajar_id_foreign` FOREIGN KEY (`belajar_id`) REFERENCES `belajars` (`id`),
  ADD CONSTRAINT `jadwals_pengangguran_id_foreign` FOREIGN KEY (`pengangguran_id`) REFERENCES `penganggurans` (`id`);

--
-- Ketidakleluasaan untuk tabel `penganggurans`
--
ALTER TABLE `penganggurans`
  ADD CONSTRAINT `penganggurans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
