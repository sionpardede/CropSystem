-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 04:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cropsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenisTanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curahHujan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varietas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `hamas`
--

CREATE TABLE `hamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pestisida` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hamas`
--

INSERT INTO `hamas` (`id`, `name`, `detail`, `pestisida`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ulat Tanah', 'Ulat tanah (Agrotis ipsilon). Serangga dewasa berupa ngengat yang aktif terbang pada malam hari. Tubuh serangga dewasa keabu-abuan dengan sayap berwarna kelabu dengan tanda hitam coklat. Ulat berwarna hitam keabu-abuan, aktif merusak tanaman pada malam hari dan kadang-kadang bersifat kanibal. Gejala serangannya ditandai dengan adanya tanaman muda yang patah atau tangkai daunnya terpotong. Tanaman inangnya ialah tanaman muda yang baru ditanam seperti bawang merah, kubis bunga, jagung, kacang panjang, dan lain-lain.', 'Teknologi PHT :\r\n\r\nRotasi tanaman untuk memutus daur hidup hama\r\n\r\nPengolahan tanah yang baik (selama 1 bulan) untuk mengangkat kepompong hama dari dalam tanah agar mati terjemur oleh sinar matahari\r\n\r\nPenggunaan pupuk kandang yang telah matang\r\n\r\nPenggunaan umpan beracun yang terbuat dari campuran dedak (10 kg) dengan insektisida profenofos (100 ml) yang ditebarkan di atas bedengan pada sore hari', '20210821210740.jpg', '2021-08-21 14:07:40', '2021-08-24 12:07:32'),
(2, 'Kutu daun kacang', 'Kutu daun kacang (Aphis craccivora). Kutu daun kacang dewasa berwarna hitam berkilau. Kutu daun kacang menyerang daun, tunas, polong dan bunga. \r\nDaun yang terserang menjadi keriput, kekuningan, sehingga pertumbuhan tanaman terhambat. \r\nKutu daun kacang juga merupakan vektor beberapa jenis penyakit virus. Tanaman inang lainnya ialah waluh dan kapas.', 'Teknologi PHT :\r\n\r\nPenanaman jagung (4 baris) sebagai tanaman penghadang di sekeliling pertanaman cabai merah\r\n\r\nPemasangan perangkap lekat warna kuning sebanyak 40-50 buah/ha\r\n\r\nTumpangsari dengan tanaman seledri atau kemangi\r\n\r\nPenerapan ambang pengendalian 70 individu kutudaun/ 10 daun pucuk', '20210822200030.jpg', '2021-08-22 13:00:30', '2021-08-24 12:11:28'),
(3, 'Uret', 'Uret merupakan larva dari kumbang. Kepala uret berwarna putih kemerahan dan ciri khas uret ialah perutnya dalam posisi membengkok. \r\nGejala serangan ditandai dengan adanya tanaman muda yang roboh karena pangkal batangnya dipotong. \r\nTanaman inangnya antara lain ialah bawang merah, padi, jagung, kubis, mentimun dan kentang.', 'Teknologi PHT :\r\n\r\nRotasi tanaman untuk memutus daur hidup hama\r\n\r\nPengolahan tanah yang baik (selama 1 bulan) untuk mengangkat kepompong hama dari dalam tanah agar mati terjemur oleh sinar matahari\r\n\r\nPenggunaan pupuk kandang yang telah matang', '20210822200559.jpg', '2021-08-22 13:05:59', '2021-08-24 12:12:33'),
(5, 'Kutu kebul', 'Kutu kebul (Bemisia tabaci). Serangga dewasa kutu kebul berwarna putih dengan sayap jernih, dengan ukuran tubuh berkisar antara 1- 1,5 mm. Serangga dewasa biasanya berkelompok dalam jumlah banyak di bawah permukaan daun. Bila tanaman tersentuh serangga akan berterbangan seperti kabut atau kebul putih. Kutu kebul mengisap cairan daun dan eksresinya menghasilkan embun madu yang menjadi media tumbuhnya penyakit embun jelaga. \r\nKutu kebul merupakan vektor penyakit virus kuning (virus gemini) yang menyerang tanaman cabai dan kacang-kacangan. Tanaman inang lainnya ialah kacang panjang, kentang, labu, mentimun, semangka, paria, tomat dan lain-lain.', 'Teknologi PHT :\r\n\r\nPenyiraman bibit cabai merah yang berumur 2 dan 4 minggu di pesemaian menggunakan larutan insektisida Tiametoksam (0,5 ml/l) sebanyak 50 ml/tanaman\r\n\r\nPenyiraman tanaman cabai merah di lapangan pada 2 dan 4 minggu setelah tanam menggunakan larutan insektisida Tiametoksam (1 ml/l) sebanyak 200 ml/tanaman\r\n\r\nMenjaga kebersihan kebun dari gulma , terutama rumput ‘babadotan’ atau ‘wedusan’, yang merupakan inang kutu kebul\r\n\r\nPenanaman jagung (4 baris) sebagai tanaman penghadang di sekeliling pertanaman cabai merah', '20210824190622.jpg', '2021-08-24 12:06:22', '2021-08-24 12:06:22'),
(6, 'Penyakit busuk buah', 'Penyakit busuk buah antraknos disebabkan oleh cendawan Colletotrichum capsici dan Gloeosporium piperatum. Patogen ditularkan melalui udara dan biji. Gejala serangan dimulai dengan timbulnya bercak coklat kehitaman pada permukan buah, kemudian bercak menjadi lunak. Pada bagian tengah bercak terdapat kumpulan titik hitam yang merupakan kelompok spora. Pada serangan berat seluruh permukaan buah keriput dan mengering dan warna kulit buah seperti jerami padi. Pada saat cuaca panas dan lembab penyakit ini akan cepat berkembang.', 'Teknologi PHT :\r\n\r\nMenciptakan iklim mikro yang tidak sesuai bagi penyakit dengan pengaturan jarak tanam: 50 cm x 60 cm pada musim hujan dan 40 cm x 50 cm pada musim kemarau\r\n\r\nPembuangan tunas air dan daun bawah agar percikan air hujan atau air penyiraman tidak mengenai daun, yang dapat menjadi media berkembangnya penyakit\r\n\r\nPenyemprotan fungisida Asil bensolar S-metil secara preventif sejak tanaman cabai merah mulai berbunga dengan interval 7 hari minimal sebanyak 6 kali/ musim', '20210824191540.jpg', '2021-08-24 12:15:40', '2021-08-24 12:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_panens`
--

CREATE TABLE `hasil_panens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_tanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` int(11) NOT NULL,
  `nama_petani` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_tanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembibitan` date NOT NULL,
  `penyemaian` date NOT NULL,
  `panen` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum dibibit',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `jenis_tanaman`, `pembibitan`, `penyemaian`, `panen`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kacang Tanah', '2021-08-26', '2021-08-26', '2021-08-26', 'belum dibibit', '2021-08-26 12:08:12', '2021-08-26 12:08:12'),
(2, 'Cabai Merah', '2021-08-26', '2021-08-26', '2021-08-26', 'belum dibibit', '2021-08-26 12:09:54', '2021-08-26 12:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tanamans`
--

CREATE TABLE `kategori_tanamans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_04_09_165238_create_sessions_table', 1),
(7, '2021_04_09_170110_create_crops_table', 1),
(8, '2021_05_27_025932_create_pupuks_table', 1),
(9, '2021_05_27_135234_create_datas_table', 1),
(10, '2021_05_27_153341_create_kategori_tanamans_table', 1),
(11, '2021_05_27_154742_create_tanamans_table', 1),
(12, '2021_05_31_072841_create_hasil_panens_table', 1),
(13, '2021_06_05_124531_create_comments_table', 1),
(14, '2021_06_05_161609_create_jadwals_table', 1),
(15, '2021_08_16_003558_create_recommends_table', 1),
(16, '2021_08_16_011714_create_musims_table', 1),
(17, '2021_08_16_011735_create_phs_table', 1),
(18, '2021_08_20_202146_create_hamas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `musims`
--

CREATE TABLE `musims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `musims`
--

INSERT INTO `musims` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kemarau', NULL, NULL),
(2, 'Hujan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `phs`
--

CREATE TABLE `phs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ph` int(11) NOT NULL,
  `musim_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phs`
--

INSERT INTO `phs` (`id`, `ph`, `musim_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, NULL),
(2, 5, 1, NULL, NULL),
(3, 6, 1, NULL, NULL),
(4, 7, 1, NULL, NULL),
(5, 8, 1, NULL, NULL),
(6, 9, 1, NULL, NULL),
(7, 10, 1, NULL, NULL),
(8, 4, 2, NULL, NULL),
(9, 5, 2, NULL, NULL),
(10, 6, 2, NULL, NULL),
(11, 7, 2, NULL, NULL),
(12, 8, 2, NULL, NULL),
(13, 9, 2, NULL, NULL),
(14, 10, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pupuks`
--

CREATE TABLE `pupuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_tanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urea` int(11) NOT NULL,
  `za` int(11) NOT NULL,
  `sp-36` int(11) NOT NULL,
  `kcl` int(11) NOT NULL,
  `npk` int(11) NOT NULL,
  `dolomite` int(11) NOT NULL,
  `zk` int(11) NOT NULL,
  `organik` int(11) NOT NULL,
  `kandang` int(11) NOT NULL,
  `hijau` int(11) NOT NULL,
  `kompos` int(11) NOT NULL,
  `hayati` int(11) NOT NULL,
  `humus` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `kandungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommends`
--

CREATE TABLE `recommends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph` int(11) NOT NULL,
  `musim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommends`
--

INSERT INTO `recommends` (`id`, `name`, `ph`, `musim`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Cabai merah', 6, 'Kemarau', 'Cabe merah adalah tanaman yang masuk dalam keluarga Genus Capsicum, bagian dari tanaman cabe yang digunakan adalah buahnya untuk bumbu masak. Kelompok Tani Dono Makmur 1 Kampung Dono Arum Kecamatan Simpang Agung, memanfaatan sumur bor untuk pemberian air pada budidaya tanaman cabe di musim kemarau. Pada musim kemarau biasanya harga cabe melonjak tinggi dikarenakan banyak tempat yang tidak bisa menanam cabe. Tanaman cabe pada musim kemarau sebenarnya lebih bagus jika pasokan air tercukupi dan OPT lebih mudah diatasi. Agar tanaman cabe tidak mudah kekeringan dan bisa tumbuh subur pada musim kemarau berikut trik yang bisa dilakukan. Tapi yang harus diingat ketika menanam cabe pada musim kemarau adalah serangan hama seperti trips, tungau, Kutu daun dll yang pada musim kemarau populasi sangat tinggi.', NULL, NULL),
(2, 'Jagung', 7, 'Kemarau', 'Menanam jagung tidaklah sulit, apalagi jika dilakukan di musim kemarau. Di saat jenis tanaman lain seperti padi tumbuh di cuaca yang panas, maka akan memperbesar peluang akan layu dan mati, sedangkan jagung justru akan tumbuh dengan optimal. Untuk itu, sebisa mungkin jangan lakukan di musim hujan karena jagung tidak cocok dengan kondisi tersebut. Curah hujan yang dibutuhkan hanya sekitar 100 hingga 200 mm per bulannya, dan apabila memang tidak pernah turun hujan, maka dibutuhkan pengairan yang rutin secara efektif dan secukupnya saja.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jKdg7J3CDALM7BO6aEd4U6KC7KeZIiICtQ0TLjNp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36 Edg/92.0.902.78', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTzMxWmhjam1lZU9ESndtYUp5eEoyMWk4SWJwd0JZVmYzRm5yaEZiOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWNvbW1lbmRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHFWbHdORHVGVVFleHVhQ0d1cjBhNy4zNkNYUVozR0MvejdaZE94YlJXWEVQLjlHaW1oSTFpIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRxVmx3TkR1RlVRZXh1YUNHdXIwYTcuMzZDWFFaM0dDL3o3WmRPeGJSV1hFUC45R2ltaEkxaSI7fQ==', 1629989276),
('lNCHO5wjcVKrW6Oh2a6Jj4P9cohMrDmEy4v98MpY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36 Edg/92.0.902.78', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiM25EZ1ZJOUJ4YmF1QzU0akFoUDg1WTMwczJ6VlcyMzN5Q2RmRUZRciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1629978303);

-- --------------------------------------------------------

--
-- Table structure for table `tanamans`
--

CREATE TABLE `tanamans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenisTanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caraTanam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int(11) DEFAULT NULL,
  `ph` int(11) NOT NULL,
  `humidity` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `rainfall` int(11) NOT NULL,
  `land` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urea` int(11) DEFAULT NULL,
  `za` int(11) DEFAULT NULL,
  `sp36` int(11) DEFAULT NULL,
  `kcl` int(11) DEFAULT NULL,
  `npk` int(11) DEFAULT NULL,
  `dolomite` int(11) DEFAULT NULL,
  `zk` int(11) DEFAULT NULL,
  `organik` int(11) DEFAULT NULL,
  `kandang` int(11) DEFAULT NULL,
  `hijau` int(11) DEFAULT NULL,
  `kompos` int(11) DEFAULT NULL,
  `hayati` int(11) DEFAULT NULL,
  `humus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanamans`
--

INSERT INTO `tanamans` (`id`, `jenisTanaman`, `kategori`, `caraTanam`, `video`, `sequence`, `ph`, `humidity`, `temp`, `rainfall`, `land`, `urea`, `za`, `sp36`, `kcl`, `npk`, `dolomite`, `zk`, `organik`, `kandang`, `hijau`, `kompos`, `hayati`, `humus`, `created_at`, `updated_at`) VALUES
(1, 'Kacang Tanah', 'Kacang-Kacangan', '1. Tanah gembur\r\n2. Suhu tinggi, suhu yang dibutuhkan adalah 28-32 derajat Celcius\r\n3. Curah hujan rendah\r\n4. Tingkat keasaman tanah, kacang cocok dengan ph sekitar 5 sampai 6,3', 'https://www.youtube.com/watch?v=VkxJ-gs7gAk', 1, 6, 70, 28, 799, 'tinggi', 75, NULL, 75, 50, NULL, NULL, NULL, 2000, NULL, NULL, NULL, NULL, NULL, '2021-08-22 12:54:21', '2021-08-26 12:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `farmer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `name`, `email`, `admin`, `farmer`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sion Pardede', 'sion@gmail.com', '1', '0', '$2y$10$qVlwNDuFUQexuaCGur0a7.36CXQZ3GC/z7ZdOxbRWXEP.9GimhI1i', NULL, NULL, NULL, NULL, '2021-08-21 05:09:34', '2021-08-21 05:09:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hamas`
--
ALTER TABLE `hamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_panens`
--
ALTER TABLE `hasil_panens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_tanamans`
--
ALTER TABLE `kategori_tanamans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musims`
--
ALTER TABLE `musims`
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
-- Indexes for table `phs`
--
ALTER TABLE `phs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pupuks`
--
ALTER TABLE `pupuks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommends`
--
ALTER TABLE `recommends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tanamans`
--
ALTER TABLE `tanamans`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hamas`
--
ALTER TABLE `hamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hasil_panens`
--
ALTER TABLE `hasil_panens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_tanamans`
--
ALTER TABLE `kategori_tanamans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `musims`
--
ALTER TABLE `musims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phs`
--
ALTER TABLE `phs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pupuks`
--
ALTER TABLE `pupuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recommends`
--
ALTER TABLE `recommends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tanamans`
--
ALTER TABLE `tanamans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
