-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 03:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokos`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '5d3e5a02532f6f14954718ad363024d5', '2021-12-02 07:40:01'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'c87d485a738687a8b186520d899ad17b', '2021-12-02 08:40:07'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'dd633043f7e5a64917aa1a57448a88f1', '2021-12-02 18:42:06'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '193664e5f30532dcb7933438e4510c85', '2021-12-05 22:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'mengelola bagian admin'),
(2, 'user', 'user pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 3),
(2, 5),
(2, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'UndipJaya', NULL, '2021-12-02 06:06:04', 0),
(2, '::1', 'rafliferdian', NULL, '2021-12-02 07:43:19', 0),
(3, '::1', 'rafliferdian', NULL, '2021-12-02 07:43:32', 0),
(4, '::1', 'rafliferdian', NULL, '2021-12-02 07:43:47', 0),
(5, '::1', 'rafliferdian', NULL, '2021-12-02 07:43:54', 0),
(6, '::1', 'ferdianrafli25@gmail.com', NULL, '2021-12-02 07:44:09', 0),
(7, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 07:47:55', 1),
(8, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 07:48:29', 1),
(9, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 07:51:12', 1),
(10, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 07:57:07', 1),
(11, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 07:58:04', 1),
(12, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 08:02:01', 1),
(13, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 08:02:46', 1),
(14, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 08:03:50', 1),
(15, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 08:04:07', 1),
(16, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 08:11:48', 1),
(17, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 08:13:40', 1),
(18, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 08:14:00', 1),
(19, '::1', 'customer1', 5, '2021-12-02 08:39:59', 0),
(20, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 08:40:10', 1),
(21, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 08:52:07', 1),
(22, '::1', 'rafliferdian', NULL, '2021-12-02 09:01:41', 0),
(23, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 09:01:48', 1),
(24, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 10:06:21', 1),
(25, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 10:07:00', 1),
(26, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 10:09:59', 1),
(27, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 10:11:15', 1),
(28, '::1', 'ferdianrafli32@gmail.com', NULL, '2021-12-02 10:11:30', 0),
(29, '::1', 'ferdianrafli25@gmail.com', NULL, '2021-12-02 10:11:36', 0),
(30, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 10:11:58', 1),
(31, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 10:13:24', 1),
(32, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 10:15:54', 1),
(33, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 10:16:24', 1),
(34, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 10:17:04', 1),
(35, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 10:30:13', 1),
(36, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 10:36:05', 1),
(37, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 11:12:14', 1),
(38, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 11:12:30', 1),
(39, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-02 18:05:45', 1),
(40, '::1', 'ferdianrafli125@gmail.com', 6, '2021-12-02 18:42:25', 1),
(41, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 20:03:36', 1),
(42, '::1', 'ferdianrafli125@gmail.com', 6, '2021-12-02 20:04:40', 1),
(43, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-02 20:11:22', 1),
(44, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-03 02:46:19', 1),
(45, '::1', 'ferdianrafli125@gmail.com', 6, '2021-12-03 06:07:00', 1),
(46, '::1', 'ferdianrafli125@gmail.com', 6, '2021-12-03 09:14:37', 1),
(47, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-03 14:31:54', 1),
(48, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-03 19:26:59', 1),
(49, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-03 19:41:14', 1),
(50, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 00:39:09', 1),
(51, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 00:40:16', 1),
(52, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 02:33:48', 1),
(53, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 02:37:31', 1),
(54, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 02:38:48', 1),
(55, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 02:46:47', 1),
(56, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 02:47:05', 1),
(57, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 07:04:13', 1),
(58, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-04 07:05:49', 1),
(59, '::1', 'rafliferdian', NULL, '2021-12-04 08:09:36', 0),
(60, '::1', 'rafliferdian', NULL, '2021-12-04 08:09:42', 0),
(61, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 08:09:56', 1),
(62, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-04 08:11:49', 1),
(63, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 11:18:44', 1),
(64, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-04 11:19:53', 1),
(65, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-04 17:24:59', 1),
(66, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 17:49:59', 1),
(67, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-04 19:32:03', 1),
(68, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-04 19:39:08', 1),
(69, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-05 21:36:22', 1),
(70, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-05 22:04:40', 1),
(71, '::1', 'customer3', 7, '2021-12-05 22:08:56', 0),
(72, '::1', 'rafliferdian1203@gmail.com', 7, '2021-12-05 22:09:28', 1),
(73, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-08 22:33:19', 1),
(74, '::1', 'customer1', NULL, '2021-12-08 22:34:30', 0),
(75, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-08 22:34:40', 1),
(76, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-08 22:36:17', 1),
(77, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-08 22:38:17', 1),
(78, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-09 00:04:57', 1),
(79, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-09 00:15:56', 1),
(80, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-09 01:24:20', 1),
(81, '::1', 'ferdianrafli25@gmail.com', 3, '2021-12-28 18:45:16', 1),
(82, '::1', 'rafliferdian1203@gmail.com', 7, '2021-12-28 18:45:28', 1),
(83, '::1', 'ferdianrafli32@gmail.com', 5, '2021-12-28 18:45:39', 1),
(84, '::1', 'ferdianrafli32@gmail.com', 5, '2022-01-24 03:20:21', 1),
(85, '::1', 'ferdianrafli32@gmail.com', 5, '2022-01-24 05:49:33', 1),
(86, '::1', 'ferdianrafli25@gmail.com', 3, '2022-01-24 05:51:20', 1),
(87, '::1', 'ferdianrafli32@gmail.com', 5, '2022-01-24 06:10:59', 1),
(88, '::1', 'admin1', NULL, '2022-04-25 16:45:39', 0),
(89, '::1', 'RafliFerdian', NULL, '2022-04-25 16:46:10', 0),
(90, '::1', 'ferdianrafli25@gmail.com', 3, '2022-04-25 16:46:21', 1),
(91, '::1', 'customer1', NULL, '2022-04-25 17:02:24', 0),
(92, '::1', 'customer1', NULL, '2022-04-25 17:02:38', 0),
(93, '::1', 'customer1', NULL, '2022-04-25 17:03:22', 0),
(94, '::1', 'ferdianrafli125@gmail.com', 6, '2022-04-25 17:04:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'ferdianrafli25@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '18f3a20a27ed6115c1bb38dff00291b7', '2021-12-02 07:46:32'),
(2, 'ferdianrafli25@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '18f3a20a27ed6115c1bb38dff00291b7', '2021-12-02 07:47:01'),
(3, 'ferdianrafli25@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '8a16862dfbda69e86ada235d41e789e5', '2021-12-02 07:47:42'),
(4, 'ferdianrafli32@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '0e30873237322b57fbeca7a4c9a6be78', '2021-12-05 22:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `file_gambar` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `tgl_insert` datetime NOT NULL DEFAULT current_timestamp(),
  `tgl_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `keterangan`, `file_gambar`, `harga`, `stok`, `tgl_insert`, `tgl_update`) VALUES
(4, 'Penjepit pakaian', 'Penjepit pakaian pack', 'penjepit_baju.jpg', 10000, 58, '2021-10-19 11:13:07', '2021-12-04 03:32:15'),
(6, 'Spons', 'Spons cuci piring', 'spons.jpg', 8000, 100, '2021-10-19 11:13:07', '2021-10-19 11:13:07'),
(7, 'Map', 'Map dokumen', 'map.jpg', 2000, 100, '2021-10-19 11:13:07', '2021-10-19 11:13:07'),
(8, 'Dettol', 'sabun dettol saset', 'dettol.jpg', 10000, 100, '2021-10-23 04:11:07', '2021-10-23 04:11:07'),
(19, 'Note book', 'NoteBook isi 40 lembar kulit', 'buku.jpeg', 10000, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Gayung', 'gayung												', 'gayung.jpg', 2000000, 12, '2021-11-26 01:07:15', '2021-11-27 02:07:15'),
(32, 'Sikat Piring', 'Scotch brite sikat kawat ', 'sikat_piring.jpg', 5000, 100, '2021-12-03 07:06:10', '2021-12-03 19:06:10'),
(33, 'Kertas Folio', 'kertas folio isi 20 lembar', 'folio.jpg', 10000, 500, '2021-12-04 20:56:18', '2021-12-04 20:56:18'),
(34, 'Sikat WC', 'Sikat WC ', 'sikat_wc.jpg', 10000, 500, '2021-12-04 21:04:45', '2021-12-04 21:04:45'),
(35, 'Ember', 'Ember ukuran sedang 50 liter', 'ember.jfif', 30000, 20, '2021-12-04 21:39:55', '2021-12-04 21:39:55'),
(36, 'Pencil', 'Pencil 2B fiber castel', 'pencil.jfif', 20000, 500, '2021-12-04 21:41:20', '2021-12-04 21:41:20'),
(37, 'Totebag', 'Totebag ukuran kecil hitam', 'totebag.webp', 30000, 10, '2021-12-04 21:42:14', '2021-12-04 21:42:14'),
(38, 'Penggaris', '	Penggaris besi ukuran 20 cm 											', 'penggaris.jpg', 5000, 100, '2021-12-05 08:43:15', '2021-12-05 08:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `idpenjualan` int(20) NOT NULL,
  `idbarang` int(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`idpenjualan`, `idbarang`, `nama_barang`, `qty`, `harga`) VALUES
(21, 6, 'Lemari Pakaian', 1, 2000000),
(22, 4, 'Bar Table', 1, 1200000),
(22, 6, 'Lemari Pakaian', 1, 2000000),
(22, 8, 'Crank Manual Bed Patient', 1, 10000000),
(23, 4, 'Bar Table', 1, 1200000),
(24, 4, 'Bar Table', 1, 1200000),
(25, 4, 'Bar Table', 1, 1200000),
(26, 4, 'Bar Table', 1, 1200000),
(27, 4, 'Bar Table', 1, 1200000),
(28, 4, 'Bar Table', 1, 1200000),
(29, 4, 'Bar Table', 1, 1200000),
(30, 4, 'Bar Table', 1, 1200000),
(31, 4, 'Bar Table', 1, 1200000),
(32, 4, 'Bar Table', 1, 1200000),
(33, 6, 'Lemari Pakaian', 1, 2000000),
(34, 4, 'Penjepit pakaian', 1, 10000),
(35, 4, 'Penjepit pakaian', 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1638446689, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idpenjualan` int(20) NOT NULL,
  `idpelanggan` int(11) UNSIGNED NOT NULL,
  `tgl_penjualan` datetime NOT NULL DEFAULT current_timestamp(),
  `total_harga` int(11) NOT NULL,
  `total_item` int(11) NOT NULL,
  `nama_kirim` varchar(100) DEFAULT NULL,
  `alamat_kirim` varchar(200) DEFAULT NULL,
  `noHp` varchar(13) NOT NULL,
  `metode_pembayaran` varchar(12) NOT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idpenjualan`, `idpelanggan`, `tgl_penjualan`, `total_harga`, `total_item`, `nama_kirim`, `alamat_kirim`, `noHp`, `metode_pembayaran`, `bukti_bayar`) VALUES
(21, 5, '2021-12-03 00:10:46', 2000000, 1, 'Rafli Ferdian', 'kendal', '89541123456', 'COD', 'chair-prod.png'),
(22, 6, '2021-12-03 07:44:14', 13200000, 3, 'Customer 2', 'Batang hhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhh', '89541128123', 'BCA', 'Kanguru.jpg'),
(23, 6, '2021-12-04 03:16:36', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(24, 6, '2021-12-04 03:17:34', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(25, 6, '2021-12-04 03:18:23', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(26, 6, '2021-12-04 03:18:45', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(27, 6, '2021-12-04 03:21:13', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(28, 6, '2021-12-04 03:21:47', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(29, 6, '2021-12-04 03:21:59', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(30, 6, '2021-12-04 03:22:12', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(31, 6, '2021-12-04 03:22:58', 1200000, 1, 'Customer 2', 'Demak', '89541128123', 'COD', ''),
(32, 6, '2021-12-04 03:23:17', 1200000, 1, 'Customer 2', 'Demak', '89541128123', '', ''),
(33, 5, '2021-12-04 21:07:18', 2000000, 1, 'Customer 1', 'Batang', '89541128123', 'BRI', 'agile.png'),
(34, 5, '2021-12-05 08:38:39', 10000, 1, 'Customer 1', 'Batang hjk', '89541128123', '', 'Frame 1.png'),
(35, 5, '2021-12-06 10:41:52', 10000, 1, 'Customer 1', 'Batang', '89541128123', 'COD', '');

--
-- Triggers `penjualan`
--
DELIMITER $$
CREATE TRIGGER `status` AFTER INSERT ON `penjualan` FOR EACH ROW INSERT INTO status_penjualan(idpenjualan, idstatus) 
VALUES (NEW.idpenjualan, 1)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idstatus`, `nama`) VALUES
(1, 'Belum Transfer'),
(2, 'Dikirim'),
(3, 'Dibatalkan'),
(4, 'Sukses'),
(5, 'Belum Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `status_penjualan`
--

CREATE TABLE `status_penjualan` (
  `idpenjualan` int(20) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `tgl_update` datetime NOT NULL DEFAULT current_timestamp(),
  `idpetugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_penjualan`
--

INSERT INTO `status_penjualan` (`idpenjualan`, `idstatus`, `tgl_update`, `idpetugas`) VALUES
(21, 2, '2021-12-03 00:10:46', NULL),
(22, 4, '2021-12-03 07:44:14', NULL),
(23, 1, '2021-12-04 03:16:36', NULL),
(24, 1, '2021-12-04 03:17:34', NULL),
(25, 1, '2021-12-04 03:18:23', NULL),
(26, 1, '2021-12-04 03:18:45', NULL),
(27, 1, '2021-12-04 03:21:13', NULL),
(28, 1, '2021-12-04 03:21:47', NULL),
(29, 1, '2021-12-04 03:21:59', NULL),
(30, 1, '2021-12-04 03:22:12', NULL),
(31, 1, '2021-12-04 03:22:58', NULL),
(32, 1, '2021-12-04 03:23:17', NULL),
(33, 5, '2021-12-04 21:07:18', NULL),
(34, 4, '2021-12-05 08:38:39', NULL),
(35, 1, '2021-12-06 10:41:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `noHp` varchar(13) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `noHp`, `alamat`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'ferdianrafli25@gmail.com', 'rafliferdian', 'Admin', 'default.svg', '089541128123', 'Batang', '$2y$10$qo6rxbYLjcgnsf81ubi15u.vPduTqakLPqmsWJhBuBgnD/suZ0Dc2', NULL, '2021-12-02 07:47:42', NULL, NULL, NULL, NULL, 1, 0, '2021-12-02 07:39:06', '2021-12-02 07:47:42', NULL),
(5, 'ferdianrafli32@gmail.com', 'customer1', '', 'Logo_UNDIP.jpg', '089541128123', '', '$2y$10$0WpEg41aXR701D/BgEUrR.864TBtl6cxSVh7185eYLpj21R1FXM0K', NULL, '2021-12-05 22:04:22', NULL, NULL, NULL, NULL, 1, 0, '2021-12-02 08:38:45', '2021-12-05 22:04:22', NULL),
(6, 'ferdianrafli125@gmail.com', 'customer2', 'Customer 2', 'default.svg', '089541128123', 'Demak', '$2y$10$MvnaDcKXMyRJo2Qf2014P.YQ4dfbWDHSg.N1Z70m1Nz6klMmdSooW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-02 18:40:49', '2021-12-02 18:42:06', NULL),
(7, 'rafliferdian1203@gmail.com', 'customer3', NULL, 'default.svg', NULL, NULL, '$2y$10$roIbhTzogQUEXdW57JQ5MOoXcl0/nAVT6zbFiw/Vw/AaGeIsRqniy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-05 22:08:00', '2021-12-05 22:09:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `idpenjualan` (`idpenjualan`),
  ADD KEY `idbarang` (`idbarang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `idpelanggan` (`idpelanggan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `status_penjualan`
--
ALTER TABLE `status_penjualan`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `idpetugas` (`idpetugas`),
  ADD KEY `idpenjualan` (`idpenjualan`),
  ADD KEY `idstatus` (`idstatus`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idpenjualan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`),
  ADD CONSTRAINT `detail_penjualan_ibfk_3` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`) ON DELETE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`idpelanggan`) REFERENCES `users` (`id`);

--
-- Constraints for table `status_penjualan`
--
ALTER TABLE `status_penjualan`
  ADD CONSTRAINT `status_penjualan_ibfk_3` FOREIGN KEY (`idstatus`) REFERENCES `status` (`idstatus`),
  ADD CONSTRAINT `status_penjualan_ibfk_4` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
