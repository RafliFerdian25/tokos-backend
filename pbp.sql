-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 01:53 PM
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
-- Database: `pbp`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `jenis_pengiriman` ()  BEGIN
   DECLARE i INT;
   SET i = 1677;
   WHILE i <= 2190 DO
   	 UPDATE tarif_ongkir SET jenis_pengiriman = 'Express' WHERE idkota_tujuan = i;
     SET i = i + 1;
   END WHILE;
 
END$$

DELIMITER ;

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
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', '25bfa4687888da4d056c67c864358edb', '2021-10-27 06:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '::1', 'user', NULL, '2021-10-27 06:46:44', 0),
(2, '::1', 'Rafli', NULL, '2021-10-27 06:46:49', 0),
(3, '::1', 'Rafli', NULL, '2021-10-27 06:46:55', 0),
(4, '::1', 'Rafli', NULL, '2021-10-27 06:47:18', 0),
(5, '::1', 'ferdianrafli25@gmail.com', 1, '2021-10-27 06:48:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `idkategori` int(20) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL,
  `file_gambar` varchar(500) NOT NULL,
  `tampil` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `tgl_insert` datetime NOT NULL,
  `tgl_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `idkategori`, `keterangan`, `file_gambar`, `tampil`, `harga`, `berat`, `stok`, `tgl_insert`, `tgl_update`) VALUES
(4, 'Bar Table', 113, 'Meja bar yang kuat dan tahan lama																																																			', 'bar-table.jpg', '', 1200000, 8, 6, '2021-10-19 11:13:07', '2021-10-19 11:13:07'),
(5, 'Coffe Table', 111, '', 'chair-prod.png', '', 1000000, 9, 3, '2021-10-19 11:13:07', '2021-10-19 11:13:07'),
(6, 'Lemari Pakaian', 112, '', 'chair-prod.png', '', 2000000, 20, 3, '2021-10-19 11:13:07', '2021-10-19 11:13:07'),
(7, 'Lemari Document', 112, '', 'chair-prod.png', '', 1800000, 17, 4, '2021-10-19 11:13:07', '2021-10-19 11:13:07'),
(8, 'Crank Manual Bed Patient', 112, 'Kasur pasien rumah sakit																																							', 'chair-prod.png', '', 10000000, 88, 100, '2021-10-23 04:11:07', '2021-10-23 04:11:07'),
(19, 'Sofa Kulit', 111, 'Sofa yang terbuat dari kulit sapi asli							', 'chair-prod.png', '', 2147483647, 10, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Kayu', 112, 'Kayi												', 'ulat.jpg', '', 500000, 8, 8, '2021-10-25 00:00:00', '0000-00-00 00:00:00'),
(25, 'bbjbjbjbj', 111, '33333												', 'download_1.jpg', '', 8787000, 5, 66, '2021-10-25 00:00:00', '0000-00-00 00:00:00'),
(26, 'mamam', 112, '	reere											', 'ss.png', '', 35555000, 3, 3, '2021-10-25 00:00:00', '0000-00-00 00:00:00'),
(27, 'mamamam', 111, 'hhshs												', 'wa.png', '', 440000, 8, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'kakakk', 113, '			lala																																			', 'bar-table.jpg', '', 330000, 9, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'lohhh', 112, 'lohhhhh												', 'product4.jpeg', '', 9000000, 98, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `invoice` varchar(20) NOT NULL,
  `waktu_pemesanan` datetime NOT NULL,
  `idbarang` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga_total` int(50) NOT NULL,
  `idstatus` int(20) NOT NULL,
  `idpelanggan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`invoice`, `waktu_pemesanan`, `idbarang`, `jumlah`, `harga_total`, `idstatus`, `idpelanggan`) VALUES
('INV101', '2021-10-23 09:45:46', 4, 3, 3600000, 5, 1),
('INV103', '2021-10-24 08:03:22', 4, 3, 3600000, 1, 1),
('INV104', '2021-10-24 08:04:41', 4, 2, 2400000, 2, 1),
('INV105', '2021-10-24 08:05:38', 5, 3, 3000000, 3, 1),
('INV106', '2021-10-24 08:05:38', 8, 1, 100000000, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `idpenjualan` varchar(20) NOT NULL,
  `idbarang` int(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`idpenjualan`, `idbarang`, `qty`, `harga`) VALUES
('INV101', 4, 3, 3600000),
('INV103', 4, 3, 3600000),
('INV104', 4, 2, 2400000),
('INV105', 5, 3, 3000000),
('INV106', 8, 1, 100000000);

--
-- Triggers `detail_penjualan`
--
DELIMITER $$
CREATE TRIGGER `rekap` AFTER INSERT ON `detail_penjualan` FOR EACH ROW INSERT INTO 
rekap_penjualan(idpenjualan, idbarang, jumlah, harga_satuan, total_penjualan) 
SELECT penjualan.idpenjualan, detail_penjualan.idbarang , penjualan.total_item, barang.harga, penjualan.total_harga 
FROM ((penjualan 
JOIN detail_penjualan ON penjualan.idpenjualan = detail_penjualan.idpenjualan) JOIN barang ON detail_penjualan.idbarang = barang.idbarang) WHERE penjualan.idpenjualan = (SELECT MAX(penjualan.idpenjualan) FROM penjualan)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tgl` AFTER INSERT ON `detail_penjualan` FOR EACH ROW UPDATE rekap_penjualan, penjualan SET rekap_penjualan.tgl_input = CURRENT_DATE 
WHERE penjualan.idpenjualan = (SELECT MAX(penjualan.idpenjualan) FROM penjualan)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama`) VALUES
(111, 'Home Furniture'),
(112, 'Hospital Furniture'),
(113, 'Office Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `konfirm_pembayaran`
--

CREATE TABLE `konfirm_pembayaran` (
  `idpenjualan` varchar(20) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `scan_struk` varchar(200) NOT NULL,
  `verifikasi` varchar(200) NOT NULL,
  `idpetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama`) VALUES
(1677, 1, 'Kabupaten Aceh Barat'),
(1678, 1, 'Kabupaten Aceh Barat Daya'),
(1679, 1, 'Kabupaten Aceh Besar'),
(1680, 1, 'Kabupaten Aceh Jaya'),
(1681, 1, 'Kabupaten Aceh Selatan'),
(1682, 1, 'Kabupaten Aceh Singkil'),
(1683, 1, 'Kabupaten Aceh Tamiang'),
(1684, 1, 'Kabupaten Aceh Tengah'),
(1685, 1, 'Kabupaten Aceh Tenggara'),
(1686, 1, 'Kabupaten Aceh Timur'),
(1687, 1, 'Kabupaten Aceh Utara'),
(1688, 1, 'Kabupaten Bener Meriah'),
(1689, 1, 'Kabupaten Bireuen'),
(1690, 1, 'Kabupaten Gayo Lues'),
(1691, 1, 'Kabupaten Nagan Raya'),
(1692, 1, 'Kabupaten Pidie'),
(1693, 1, 'Kabupaten Pidie Jaya'),
(1694, 1, 'Kabupaten Simeulue'),
(1695, 1, 'Kota Banda Aceh'),
(1696, 1, 'Kota Langsa'),
(1697, 1, 'Kota Lhokseumawe'),
(1698, 1, 'Kota Sabang'),
(1699, 1, 'Kota Subulussalam'),
(1700, 2, 'Kabupaten Asahan'),
(1701, 2, 'Kabupaten Batubara'),
(1702, 2, 'Kabupaten Dairi'),
(1703, 2, 'Kabupaten Deli Serdang'),
(1704, 2, 'Kabupaten Humbang Hasundutan'),
(1705, 2, 'Kabupaten Karo'),
(1706, 2, 'Kabupaten Labuhanbatu'),
(1707, 2, 'Kabupaten Labuhanbatu Selatan'),
(1708, 2, 'Kabupaten Labuhanbatu Utara'),
(1709, 2, 'Kabupaten Langkat'),
(1710, 2, 'Kabupaten Mandailing Natal'),
(1711, 2, 'Kabupaten Nias'),
(1712, 2, 'Kabupaten Nias Barat'),
(1713, 2, 'Kabupaten Nias Selatan'),
(1714, 2, 'Kabupaten Nias Utara'),
(1715, 2, 'Kabupaten Padang Lawas'),
(1716, 2, 'Kabupaten Padang Lawas Utara'),
(1717, 2, 'Kabupaten Pakpak Bharat'),
(1718, 2, 'Kabupaten Samosir'),
(1719, 2, 'Kabupaten Serdang Bedagai'),
(1720, 2, 'Kabupaten Simalungun'),
(1721, 2, 'Kabupaten Tapanuli Selatan'),
(1722, 2, 'Kabupaten Tapanuli Tengah'),
(1723, 2, 'Kabupaten Tapanuli Utara'),
(1724, 2, 'Kabupaten Toba Samosir'),
(1725, 2, 'Kota Binjai'),
(1726, 2, 'Kota Gunungsitoli'),
(1727, 2, 'Kota Medan'),
(1728, 2, 'Kota Padangsidempuan'),
(1729, 2, 'Kota Pematangsiantar'),
(1730, 2, 'Kota Sibolga'),
(1731, 2, 'Kota Tanjungbalai'),
(1732, 2, 'Kota Tebing Tinggi'),
(1733, 3, 'Kabupaten Agam'),
(1734, 3, 'Kabupaten Dharmasraya'),
(1735, 3, 'Kabupaten Kepulauan Mentawai'),
(1736, 3, 'Kabupaten Lima Puluh Kota'),
(1737, 3, 'Kabupaten Padang Pariaman'),
(1738, 3, 'Kabupaten Pasaman'),
(1739, 3, 'Kabupaten Pasaman Barat'),
(1740, 3, 'Kabupaten Pesisir Selatan'),
(1741, 3, 'Kabupaten Sijunjung'),
(1742, 3, 'Kabupaten Solok'),
(1743, 3, 'Kabupaten Solok Selatan'),
(1744, 3, 'Kabupaten Tanah Datar'),
(1745, 3, 'Kota Bukittinggi'),
(1746, 3, 'Kota Padang'),
(1747, 3, 'Kota Padangpanjang'),
(1748, 3, 'Kota Pariaman'),
(1749, 3, 'Kota Payakumbuh'),
(1750, 3, 'Kota Sawahlunto'),
(1751, 3, 'Kota Solok'),
(1752, 4, 'Kabupaten Banyuasin'),
(1753, 4, 'Kabupaten Empat Lawang'),
(1754, 4, 'Kabupaten Lahat'),
(1755, 4, 'Kabupaten Muara Enim'),
(1756, 4, 'Kabupaten Musi Banyuasin'),
(1757, 4, 'Kabupaten Musi Rawas'),
(1758, 4, 'Kabupaten Musi Rawas Utara'),
(1759, 4, 'Kabupaten Ogan Ilir'),
(1760, 4, 'Kabupaten Ogan Komering Ilir'),
(1761, 4, 'Kabupaten Ogan Komering Ulu'),
(1762, 4, 'Kabupaten Ogan Komering Ulu Selatan'),
(1763, 4, 'Kabupaten Ogan Komering Ulu Timur'),
(1764, 4, 'Kabupaten Penukal Abab Lematang Ilir'),
(1765, 4, 'Kota Lubuklinggau'),
(1766, 4, 'Kota Pagar Alam'),
(1767, 4, 'Kota Palembang'),
(1768, 4, 'Kota Prabumulih'),
(1769, 5, 'Kabupaten Bengkalis'),
(1770, 5, 'Kabupaten Indragiri Hilir'),
(1771, 5, 'Kabupaten Indragiri Hulu'),
(1772, 5, 'Kabupaten Kampar'),
(1773, 5, 'Kabupaten Kepulauan Meranti'),
(1774, 5, 'Kabupaten Kuantan Singingi'),
(1775, 5, 'Kabupaten Pelalawan'),
(1776, 5, 'Kabupaten Rokan Hilir'),
(1777, 5, 'Kabupaten Rokan Hulu'),
(1778, 5, 'Kabupaten Siak'),
(1779, 5, 'Kota Dumai'),
(1780, 5, 'Kota Pekanbaru'),
(1781, 6, 'Kabupaten Bintan'),
(1782, 6, 'Kabupaten Karimun'),
(1783, 6, 'Kabupaten Kepulauan Anambas'),
(1784, 6, 'Kabupaten Lingga'),
(1785, 6, 'Kabupaten Natuna'),
(1786, 6, 'Kota Batam'),
(1787, 6, 'Kota Tanjung Pinang'),
(1788, 7, 'Kabupaten Batanghari'),
(1789, 7, 'Kabupaten Bungo'),
(1790, 7, 'Kabupaten Kerinci'),
(1791, 7, 'Kabupaten Merangin'),
(1792, 7, 'Kabupaten Muaro Jambi'),
(1793, 7, 'Kabupaten Sarolangun'),
(1794, 7, 'Kabupaten Tanjung Jabung Barat'),
(1795, 7, 'Kabupaten Tanjung Jabung Timur'),
(1796, 7, 'Kabupaten Tebo'),
(1797, 7, 'Kota Jambi'),
(1798, 7, 'Kota Sungai Penuh'),
(1799, 8, 'Kabupaten Bengkulu Selatan'),
(1800, 8, 'Kabupaten Bengkulu Tengah'),
(1801, 8, 'Kabupaten Bengkulu Utara'),
(1802, 8, 'Kabupaten Kaur'),
(1803, 8, 'Kabupaten Kepahiang'),
(1804, 8, 'Kabupaten Lebong'),
(1805, 8, 'Kabupaten Mukomuko'),
(1806, 8, 'Kabupaten Rejang Lebong'),
(1807, 8, 'Kabupaten Seluma'),
(1808, 8, 'Kota Bengkulu'),
(1809, 9, 'Kabupaten Bangka'),
(1810, 9, 'Kabupaten Bangka Barat'),
(1811, 9, 'Kabupaten Bangka Selatan'),
(1812, 9, 'Kabupaten Bangka Tengah'),
(1813, 9, 'Kabupaten Belitung'),
(1814, 9, 'Kabupaten Belitung Timur'),
(1815, 9, 'Kota Pangkal Pinang'),
(1816, 10, 'Kabupaten Lampung Tengah'),
(1817, 10, 'Kabupaten Lampung Utara'),
(1818, 10, 'Kabupaten Lampung Selatan'),
(1819, 10, 'Kabupaten Lampung Barat'),
(1820, 10, 'Kabupaten Lampung Timur'),
(1821, 10, 'Kabupaten Mesuji'),
(1822, 10, 'Kabupaten Pesawaran'),
(1823, 10, 'Kabupaten Pesisir Barat'),
(1824, 10, 'Kabupaten Pringsewu'),
(1825, 10, 'Kabupaten Tulang Bawang'),
(1826, 10, 'Kabupaten Tulang Bawang Barat'),
(1827, 10, 'Kabupaten Tanggamus'),
(1828, 10, 'Kabupaten Way Kanan'),
(1829, 10, 'Kota Bandar Lampung'),
(1830, 10, 'Kota Metro'),
(1831, 11, 'Kabupaten Lebak'),
(1832, 11, 'Kabupaten Pandeglang'),
(1833, 11, 'Kabupaten Serang'),
(1834, 11, 'Kabupaten Tangerang'),
(1835, 11, 'Kota Cilegon'),
(1836, 11, 'Kota Serang'),
(1837, 11, 'Kota Tangerang'),
(1838, 11, 'Kota Tangerang Selatan'),
(1839, 12, 'Kabupaten Bandung'),
(1840, 12, 'Kabupaten Bandung Barat'),
(1841, 12, 'Kabupaten Bekasi'),
(1842, 12, 'Kabupaten Bogor'),
(1843, 12, 'Kabupaten Ciamis'),
(1844, 12, 'Kabupaten Cianjur'),
(1845, 12, 'Kabupaten Cirebon'),
(1846, 12, 'Kabupaten Garut'),
(1847, 12, 'Kabupaten Indramayu'),
(1848, 12, 'Kabupaten Karawang'),
(1849, 12, 'Kabupaten Kuningan'),
(1850, 12, 'Kabupaten Majalengka'),
(1851, 12, 'Kabupaten Pangandaran'),
(1852, 12, 'Kabupaten Purwakarta'),
(1853, 12, 'Kabupaten Subang'),
(1854, 12, 'Kabupaten Sukabumi'),
(1855, 12, 'Kabupaten Sumedang'),
(1856, 12, 'Kabupaten Tasikmalaya'),
(1857, 12, 'Kota Bandung'),
(1858, 12, 'Kota Banjar'),
(1859, 12, 'Kota Bekasi'),
(1860, 12, 'Kota Bogor'),
(1861, 12, 'Kota Cimahi'),
(1862, 12, 'Kota Cirebon'),
(1863, 12, 'Kota Depok'),
(1864, 12, 'Kota Sukabumi'),
(1865, 12, 'Kota Tasikmalaya'),
(1866, 13, 'Kabupaten Banjarnegara'),
(1867, 13, 'Kabupaten Banyumas'),
(1868, 13, 'Kabupaten Batang'),
(1869, 13, 'Kabupaten Blora'),
(1870, 13, 'Kabupaten Boyolali'),
(1871, 13, 'Kabupaten Brebes'),
(1872, 13, 'Kabupaten Cilacap'),
(1873, 13, 'Kabupaten Demak'),
(1874, 13, 'Kabupaten Grobogan'),
(1875, 13, 'Kabupaten Jepara'),
(1876, 13, 'Kabupaten Karanganyar'),
(1877, 13, 'Kabupaten Kebumen'),
(1878, 13, 'Kabupaten Kendal'),
(1879, 13, 'Kabupaten Klaten'),
(1880, 13, 'Kabupaten Kudus'),
(1881, 13, 'Kabupaten Magelang'),
(1882, 13, 'Kabupaten Pati'),
(1883, 13, 'Kabupaten Pekalongan'),
(1884, 13, 'Kabupaten Pemalang'),
(1885, 13, 'Kabupaten Purbalingga'),
(1886, 13, 'Kabupaten Purworejo'),
(1887, 13, 'Kabupaten Rembang'),
(1888, 13, 'Kabupaten Semarang'),
(1889, 13, 'Kabupaten Sragen'),
(1890, 13, 'Kabupaten Sukoharjo'),
(1891, 13, 'Kabupaten Tegal'),
(1892, 13, 'Kabupaten Temanggung'),
(1893, 13, 'Kabupaten Wonogiri'),
(1894, 13, 'Kabupaten Wonosobo'),
(1895, 13, 'Kota Magelang'),
(1896, 13, 'Kota Pekalongan'),
(1897, 13, 'Kota Salatiga'),
(1898, 13, 'Kota Semarang'),
(1899, 13, 'Kota Surakarta'),
(1900, 13, 'Kota Tegal'),
(1901, 14, 'Kabupaten Bangkalan'),
(1902, 14, 'Kabupaten Banyuwangi'),
(1903, 14, 'Kabupaten Blitar'),
(1904, 14, 'Kabupaten Bojonegoro'),
(1905, 14, 'Kabupaten Bondowoso'),
(1906, 14, 'Kabupaten Gresik'),
(1907, 14, 'Kabupaten Jember'),
(1908, 14, 'Kabupaten Jombang'),
(1909, 14, 'Kabupaten Kediri'),
(1910, 14, 'Kabupaten Lamongan'),
(1911, 14, 'Kabupaten Lumajang'),
(1912, 14, 'Kabupaten Madiun'),
(1913, 14, 'Kabupaten Magetan'),
(1914, 14, 'Kabupaten Malang'),
(1915, 14, 'Kabupaten Mojokerto'),
(1916, 14, 'Kabupaten Nganjuk'),
(1917, 14, 'Kabupaten Ngawi'),
(1918, 14, 'Kabupaten Pacitan'),
(1919, 14, 'Kabupaten Pamekasan'),
(1920, 14, 'Kabupaten Pasuruan'),
(1921, 14, 'Kabupaten Ponorogo'),
(1922, 14, 'Kabupaten Probolinggo'),
(1923, 14, 'Kabupaten Sampang'),
(1924, 14, 'Kabupaten Sidoarjo'),
(1925, 14, 'Kabupaten Situbondo'),
(1926, 14, 'Kabupaten Sumenep'),
(1927, 14, 'Kabupaten Trenggalek'),
(1928, 14, 'Kabupaten Tuban'),
(1929, 14, 'Kabupaten Tulungagung'),
(1930, 14, 'Kota Batu'),
(1931, 14, 'Kota Blitar'),
(1932, 14, 'Kota Kediri'),
(1933, 14, 'Kota Madiun'),
(1934, 14, 'Kota Malang'),
(1935, 14, 'Kota Mojokerto'),
(1936, 14, 'Kota Pasuruan'),
(1937, 14, 'Kota Probolinggo'),
(1938, 14, 'Kota Surabaya'),
(1939, 15, 'Kota Administrasi Jakarta Barat'),
(1940, 15, 'Kota Administrasi Jakarta Pusat'),
(1941, 15, 'Kota Administrasi Jakarta Selatan'),
(1942, 15, 'Kota Administrasi Jakarta Timur'),
(1943, 15, 'Kota Administrasi Jakarta Utara'),
(1944, 15, 'Kabupaten Administrasi Kepulauan Seribu'),
(1945, 16, 'Kabupaten Bantul'),
(1946, 16, 'Kabupaten Gunungkidul'),
(1947, 16, 'Kabupaten Kulon Progo'),
(1948, 16, 'Kabupaten Sleman'),
(1949, 16, 'Kota Yogyakarta'),
(1950, 17, 'Kabupaten Badung'),
(1951, 17, 'Kabupaten Bangli'),
(1952, 17, 'Kabupaten Buleleng'),
(1953, 17, 'Kabupaten Gianyar'),
(1954, 17, 'Kabupaten Jembrana'),
(1955, 17, 'Kabupaten Karangasem'),
(1956, 17, 'Kabupaten Klungkung'),
(1957, 17, 'Kabupaten Tabanan'),
(1958, 17, 'Kota Denpasar'),
(1959, 18, 'Kabupaten Bima'),
(1960, 18, 'Kabupaten Dompu'),
(1961, 18, 'Kabupaten Lombok Barat'),
(1962, 18, 'Kabupaten Lombok Tengah'),
(1963, 18, 'Kabupaten Lombok Timur'),
(1964, 18, 'Kabupaten Lombok Utara'),
(1965, 18, 'Kabupaten Sumbawa'),
(1966, 18, 'Kabupaten Sumbawa Barat'),
(1967, 18, 'Kota Bima'),
(1968, 18, 'Kota Mataram'),
(1969, 19, 'Kabupaten Alor'),
(1970, 19, 'Kabupaten Belu'),
(1971, 19, 'Kabupaten Ende'),
(1972, 19, 'Kabupaten Flores Timur'),
(1973, 19, 'Kabupaten Kupang'),
(1974, 19, 'Kabupaten Lembata'),
(1975, 19, 'Kabupaten Malaka'),
(1976, 19, 'Kabupaten Manggarai'),
(1977, 19, 'Kabupaten Manggarai Barat'),
(1978, 19, 'Kabupaten Manggarai Timur'),
(1979, 19, 'Kabupaten Ngada'),
(1980, 19, 'Kabupaten Nagekeo'),
(1981, 19, 'Kabupaten Rote Ndao'),
(1982, 19, 'Kabupaten Sabu Raijua'),
(1983, 19, 'Kabupaten Sikka'),
(1984, 19, 'Kabupaten Sumba Barat'),
(1985, 19, 'Kabupaten Sumba Barat Daya'),
(1986, 19, 'Kabupaten Sumba Tengah'),
(1987, 19, 'Kabupaten Sumba Timur'),
(1988, 19, 'Kabupaten Timor Tengah Selatan'),
(1989, 19, 'Kabupaten Timor Tengah Utara'),
(1990, 19, 'Kota Kupang'),
(1991, 20, 'Kabupaten Bengkayang'),
(1992, 20, 'Kabupaten Kapuas Hulu'),
(1993, 20, 'Kabupaten Kayong Utara'),
(1994, 20, 'Kabupaten Ketapang'),
(1995, 20, 'Kabupaten Kubu Raya'),
(1996, 20, 'Kabupaten Landak'),
(1997, 20, 'Kabupaten Melawi'),
(1998, 20, 'Kabupaten Mempawah'),
(1999, 20, 'Kabupaten Sambas'),
(2000, 20, 'Kabupaten Sanggau'),
(2001, 20, 'Kabupaten Sekadau'),
(2002, 20, 'Kabupaten Sintang'),
(2003, 20, 'Kota Pontianak'),
(2004, 20, 'Kota Singkawang'),
(2005, 21, 'Kabupaten Balangan'),
(2006, 21, 'Kabupaten Banjar'),
(2007, 21, 'Kabupaten Barito Kuala'),
(2008, 21, 'Kabupaten Hulu Sungai Selatan'),
(2009, 21, 'Kabupaten Hulu Sungai Tengah'),
(2010, 21, 'Kabupaten Hulu Sungai Utara'),
(2011, 21, 'Kabupaten Kotabaru'),
(2012, 21, 'Kabupaten Tabalong'),
(2013, 21, 'Kabupaten Tanah Bumbu'),
(2014, 21, 'Kabupaten Tanah Laut'),
(2015, 21, 'Kabupaten Tapin'),
(2016, 21, 'Kota Banjarbaru'),
(2017, 21, 'Kota Banjarmasin'),
(2018, 22, 'Kabupaten Barito Selatan'),
(2019, 22, 'Kabupaten Barito Timur'),
(2020, 22, 'Kabupaten Barito Utara'),
(2021, 22, 'Kabupaten Gunung Mas'),
(2022, 22, 'Kabupaten Kapuas'),
(2023, 22, 'Kabupaten Katingan'),
(2024, 22, 'Kabupaten Kotawaringin Barat'),
(2025, 22, 'Kabupaten Kotawaringin Timur'),
(2026, 22, 'Kabupaten Lamandau'),
(2027, 22, 'Kabupaten Murung Raya'),
(2028, 22, 'Kabupaten Pulang Pisau'),
(2029, 22, 'Kabupaten Sukamara'),
(2030, 22, 'Kabupaten Seruyan'),
(2031, 22, 'Kota Palangka Raya'),
(2032, 23, 'Kabupaten Berau'),
(2033, 23, 'Kabupaten Kutai Barat'),
(2034, 23, 'Kabupaten Kutai Kartanegara'),
(2035, 23, 'Kabupaten Kutai Timur'),
(2036, 23, 'Kabupaten Mahakam Ulu'),
(2037, 23, 'Kabupaten Paser'),
(2038, 23, 'Kabupaten Penajam Paser Utara'),
(2039, 23, 'Kota Balikpapan'),
(2040, 23, 'Kota Bontang'),
(2041, 23, 'Kota Samarinda'),
(2042, 24, 'Kabupaten Bulungan'),
(2043, 24, 'Kabupaten Malinau'),
(2044, 24, 'Kabupaten Nunukan'),
(2045, 24, 'Kabupaten Tana Tidung'),
(2046, 24, 'Kota Tarakan'),
(2047, 25, 'Kabupaten Boalemo'),
(2048, 25, 'Kabupaten Bone Bolango'),
(2049, 25, 'Kabupaten Gorontalo'),
(2050, 25, 'Kabupaten Gorontalo Utara'),
(2051, 25, 'Kabupaten Pohuwato'),
(2052, 25, 'Kota Gorontalo'),
(2053, 26, 'Kabupaten Bantaeng'),
(2054, 26, 'Kabupaten Barru'),
(2055, 26, 'Kabupaten Bone'),
(2056, 26, 'Kabupaten Bulukumba'),
(2057, 26, 'Kabupaten Enrekang'),
(2058, 26, 'Kabupaten Gowa'),
(2059, 26, 'Kabupaten Jeneponto'),
(2060, 26, 'Kabupaten Kepulauan Selayar'),
(2061, 26, 'Kabupaten Luwu'),
(2062, 26, 'Kabupaten Luwu Timur'),
(2063, 26, 'Kabupaten Luwu Utara'),
(2064, 26, 'Kabupaten Maros'),
(2065, 26, 'Kabupaten Pangkajene dan Kepulauan'),
(2066, 26, 'Kabupaten Pinrang'),
(2067, 26, 'Kabupaten Sidenreng Rappang'),
(2068, 26, 'Kabupaten Sinjai'),
(2069, 26, 'Kabupaten Soppeng'),
(2070, 26, 'Kabupaten Takalar'),
(2071, 26, 'Kabupaten Tana Toraja'),
(2072, 26, 'Kabupaten Toraja Utara'),
(2073, 26, 'Kabupaten Wajo'),
(2074, 26, 'Kota Makassar'),
(2075, 26, 'Kota Palopo'),
(2076, 26, 'Kota Parepare'),
(2077, 27, 'Kabupaten Bombana'),
(2078, 27, 'Kabupaten Buton'),
(2079, 27, 'Kabupaten Buton Selatan'),
(2080, 27, 'Kabupaten Buton Tengah'),
(2081, 27, 'Kabupaten Buton Utara'),
(2082, 27, 'Kabupaten Kolaka'),
(2083, 27, 'Kabupaten Kolaka Timur'),
(2084, 27, 'Kabupaten Kolaka Utara'),
(2085, 27, 'Kabupaten Konawe'),
(2086, 27, 'Kabupaten Konawe Kepulauan'),
(2087, 27, 'Kabupaten Konawe Selatan'),
(2088, 27, 'Kabupaten Konawe Utara'),
(2089, 27, 'Kabupaten Muna'),
(2090, 27, 'Kabupaten Muna Barat'),
(2091, 27, 'Kabupaten Wakatobi'),
(2092, 27, 'Kota Bau-Bau'),
(2093, 27, 'Kota Kendari'),
(2094, 28, 'Kabupaten Banggai'),
(2095, 28, 'Kabupaten Banggai Kepulauan'),
(2096, 28, 'Kabupaten Banggai Laut'),
(2097, 28, 'Kabupaten Buol'),
(2098, 28, 'Kabupaten Donggala'),
(2099, 28, 'Kabupaten Morowali'),
(2100, 28, 'Kabupaten Morowali Utara'),
(2101, 28, 'Kabupaten Parigi Moutong'),
(2102, 28, 'Kabupaten Poso'),
(2103, 28, 'Kabupaten Sigi'),
(2104, 28, 'Kabupaten Tojo Una-Una'),
(2105, 28, 'Kabupaten Toli-Toli'),
(2106, 28, 'Kota Palu'),
(2107, 29, 'Kabupaten Bolaang Mongondow'),
(2108, 29, 'Kabupaten Bolaang Mongondow Selatan'),
(2109, 29, 'Kabupaten Bolaang Mongondow Timur'),
(2110, 29, 'Kabupaten Bolaang Mongondow Utara'),
(2111, 29, 'Kabupaten Kepulauan Sangihe'),
(2112, 29, 'Kabupaten Kepulauan Siau Tagulandang Biaro'),
(2113, 29, 'Kabupaten Kepulauan Talaud'),
(2114, 29, 'Kabupaten Minahasa'),
(2115, 29, 'Kabupaten Minahasa Selatan'),
(2116, 29, 'Kabupaten Minahasa Tenggara'),
(2117, 29, 'Kabupaten Minahasa Utara'),
(2118, 29, 'Kota Bitung'),
(2119, 29, 'Kota Kotamobagu'),
(2120, 29, 'Kota Manado'),
(2121, 29, 'Kota Tomohon'),
(2122, 30, 'Kabupaten Majene'),
(2123, 30, 'Kabupaten Mamasa'),
(2124, 30, 'Kabupaten Mamuju'),
(2125, 30, 'Kabupaten Mamuju Tengah'),
(2126, 30, 'Kabupaten Mamuju Utara'),
(2127, 30, 'Kabupaten Polewali Mandar'),
(2128, 30, 'Kota Mamuju'),
(2129, 31, 'Kabupaten Buru'),
(2130, 31, 'Kabupaten Buru Selatan'),
(2131, 31, 'Kabupaten Kepulauan Aru'),
(2132, 31, 'Kabupaten Maluku Barat Daya'),
(2133, 31, 'Kabupaten Maluku Tengah'),
(2134, 31, 'Kabupaten Maluku Tenggara'),
(2135, 31, 'Kabupaten Maluku Tenggara Barat'),
(2136, 31, 'Kabupaten Seram Bagian Barat'),
(2137, 31, 'Kabupaten Seram Bagian Timur'),
(2138, 31, 'Kota Ambon'),
(2139, 31, 'Kota Tual'),
(2140, 32, 'Kabupaten Halmahera Barat'),
(2141, 32, 'Kabupaten Halmahera Tengah'),
(2142, 32, 'Kabupaten Halmahera Utara'),
(2143, 32, 'Kabupaten Halmahera Selatan'),
(2144, 32, 'Kabupaten Kepulauan Sula'),
(2145, 32, 'Kabupaten Halmahera Timur'),
(2146, 32, 'Kabupaten Pulau Morotai'),
(2147, 32, 'Kabupaten Pulau Taliabu'),
(2148, 32, 'Kota Ternate'),
(2149, 32, 'Kota Tidore Kepulauan'),
(2150, 33, 'Kabupaten Asmat'),
(2151, 33, 'Kabupaten Biak Numfor'),
(2152, 33, 'Kabupaten Boven Digoel'),
(2153, 33, 'Kabupaten Deiyai'),
(2154, 33, 'Kabupaten Dogiyai'),
(2155, 33, 'Kabupaten Intan Jaya'),
(2156, 33, 'Kabupaten Jayapura'),
(2157, 33, 'Kabupaten Jayawijaya'),
(2158, 33, 'Kabupaten Keerom'),
(2159, 33, 'Kabupaten Kepulauan Yapen'),
(2160, 33, 'Kabupaten Lanny Jaya'),
(2161, 33, 'Kabupaten Mamberamo Raya'),
(2162, 33, 'Kabupaten Mamberamo Tengah'),
(2163, 33, 'Kabupaten Mappi'),
(2164, 33, 'Kabupaten Merauke'),
(2165, 33, 'Kabupaten Mimika'),
(2166, 33, 'Kabupaten Nabire'),
(2167, 33, 'Kabupaten Nduga'),
(2168, 33, 'Kabupaten Paniai'),
(2169, 33, 'Kabupaten Pegunungan Bintang'),
(2170, 33, 'Kabupaten Puncak'),
(2171, 33, 'Kabupaten Puncak Jaya'),
(2172, 33, 'Kabupaten Sarmi'),
(2173, 33, 'Kabupaten Supiori'),
(2174, 33, 'Kabupaten Tolikara'),
(2175, 33, 'Kabupaten Waropen'),
(2176, 33, 'Kabupaten Yahukimo'),
(2177, 33, 'Kabupaten Yalimo'),
(2178, 33, 'Kota Jayapura'),
(2179, 34, 'Kabupaten Fakfak'),
(2180, 34, 'Kabupaten Kaimana'),
(2181, 34, 'Kabupaten Manokwari'),
(2182, 34, 'Kabupaten Manokwari Selatan'),
(2183, 34, 'Kabupaten Maybrat'),
(2184, 34, 'Kabupaten Pegunungan Arfak'),
(2185, 34, 'Kabupaten Raja Ampat'),
(2186, 34, 'Kabupaten Sorong'),
(2187, 34, 'Kabupaten Sorong Selatan'),
(2188, 34, 'Kabupaten Tambrauw'),
(2189, 34, 'Kabupaten Teluk Bintuni'),
(2190, 34, 'Kabupaten Teluk Wondama');

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
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1634901198, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `idkota` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `password`, `jenis_kelamin`, `alamat`, `idkota`, `email`, `no_telp`) VALUES
(1, 'Musa', 'Musa', 'Cowok', 'mmm', 1677, 'musa@g', '990908888'),
(2, 'Rafli Ferdian', 'rafli', 'Laki-laki', 'Kendal', 1878, 'rafli@gmail.com', '089754345111');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idpenjualan` varchar(20) NOT NULL,
  `idpelanggan` int(20) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_berat` int(11) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `jenis_pengiriman` varchar(50) DEFAULT NULL,
  `nama_kirim` varchar(100) DEFAULT NULL,
  `alamat_kirim` varchar(200) DEFAULT NULL,
  `idkota_kirim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idpenjualan`, `idpelanggan`, `tgl_penjualan`, `total_harga`, `total_item`, `total_berat`, `ongkir`, `jenis_pengiriman`, `nama_kirim`, `alamat_kirim`, `idkota_kirim`) VALUES
('INV101', 1, '0000-00-00', 3600000, 3, 9, 20000, 'Reguler', 'Musa', 'Batang', 1868),
('INV103', 1, '2021-10-30', 3600000, 3, NULL, NULL, NULL, NULL, NULL, NULL),
('INV104', 1, '2021-10-23', 2400000, 2, 6, 20000, 'Reguler', 'Musa', 'Batang', 1868),
('INV105', 1, '2021-10-23', 3000000, 3, NULL, NULL, NULL, NULL, NULL, NULL),
('INV106', 1, '2021-09-15', 100000000, 1, 88, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idpetugas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama`) VALUES
(1, 'NAD Aceh '),
(2, 'Sumatera Utara (SUMUT)'),
(3, 'Sumatera Barat (SUMBAR)'),
(4, 'Sumatera Selatan (SUMSEL)'),
(5, 'Riau'),
(6, 'Kepulauan Riau (KEPRI)'),
(7, 'Jambi'),
(8, 'Bengkulu'),
(9, 'Bangka Belitung (BABEL)'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'Jawa Barat (JABAR)'),
(13, 'Jawa Tengah (JATENG)'),
(14, 'Jawa Timur (JATIM)'),
(15, 'DKI Jakarta'),
(16, 'Daerah Istimewa Yogyakarta'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat (NTB)'),
(19, 'Nusa Tenggara Timur (NTT)'),
(20, 'Kalimantan Barat (KALBAR)'),
(21, 'Kalimantan Selatan (KALSEL)'),
(22, 'Kalimantan Tengah (KALTENG)'),
(23, 'Kalimantan Timur (KALTIM)'),
(24, 'Kalimantan Utara (KALTARA)'),
(25, 'Gorontalo'),
(26, 'Sulawesi Selatan (SULSEL)'),
(27, 'Sulawesi Tenggara (SULTRA)'),
(28, 'Sulawesi Tengah (SULTENG)'),
(29, 'Sulawesi Utara (SULUT)'),
(30, 'Sulawesi Barat (SULBAR)'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua'),
(34, 'Papua Barat');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_penjualan`
--

CREATE TABLE `rekap_penjualan` (
  `idpenjualan` varchar(20) NOT NULL,
  `idbarang` int(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `total_penjualan` int(11) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_penjualan`
--

INSERT INTO `rekap_penjualan` (`idpenjualan`, `idbarang`, `jumlah`, `harga_satuan`, `total_penjualan`, `tgl_input`) VALUES
('INV101', 4, 3, 1200000, 3600000, '2021-10-23'),
('INV103', 4, 3, 1200000, 3600000, '2021-10-23'),
('INV104', 4, 2, 1200000, 2400000, '2021-10-23'),
('INV105', 5, 3, 1000000, 3000000, '2021-10-23'),
('INV106', 8, 1, 10000000, 100000000, '2021-09-10');

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
  `idpenjualan` varchar(20) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `tgl_update` date NOT NULL,
  `idpetugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_penjualan`
--

INSERT INTO `status_penjualan` (`idpenjualan`, `idstatus`, `tgl_update`, `idpetugas`) VALUES
('INV101', 2, '2021-10-23', NULL),
('INV103', 1, '2021-10-24', NULL),
('INV104', 2, '2021-10-24', NULL),
('INV105', 3, '2021-10-24', NULL),
('INV106', 4, '2021-10-24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tarif_ongkir`
--

CREATE TABLE `tarif_ongkir` (
  `idkota_tujuan` int(11) NOT NULL,
  `jenis_pengiriman` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarif_ongkir`
--

INSERT INTO `tarif_ongkir` (`idkota_tujuan`, `jenis_pengiriman`, `harga`) VALUES
(1677, 'Express', 20000),
(1678, 'Reguler', 20000),
(1679, 'Reguler', 20000),
(1680, 'Reguler', 20000),
(1681, 'Reguler', 20000),
(1682, 'Reguler', 20000),
(1683, 'Reguler', 20000),
(1684, 'Reguler', 20000),
(1685, 'Reguler', 20000),
(1686, 'Reguler', 20000),
(1687, 'Reguler', 20000),
(1688, 'Reguler', 20000),
(1689, 'Reguler', 20000),
(1690, 'Reguler', 20000),
(1691, 'Reguler', 20000),
(1692, 'Reguler', 20000),
(1693, 'Reguler', 20000),
(1694, 'Reguler', 20000),
(1695, 'Reguler', 20000),
(1696, 'Reguler', 20000),
(1697, 'Reguler', 20000),
(1698, 'Reguler', 20000),
(1699, 'Reguler', 20000),
(1700, 'Reguler', 20000),
(1701, 'Reguler', 20000),
(1702, 'Reguler', 20000),
(1703, 'Reguler', 20000),
(1704, 'Reguler', 20000),
(1705, 'Reguler', 20000),
(1706, 'Reguler', 20000),
(1707, 'Reguler', 20000),
(1708, 'Reguler', 20000),
(1709, 'Reguler', 20000),
(1710, 'Reguler', 20000),
(1711, 'Reguler', 20000),
(1712, 'Reguler', 20000),
(1713, 'Reguler', 20000),
(1714, 'Reguler', 20000),
(1715, 'Reguler', 20000),
(1716, 'Reguler', 20000),
(1717, 'Reguler', 20000),
(1718, 'Reguler', 20000),
(1719, 'Reguler', 20000),
(1720, 'Reguler', 20000),
(1721, 'Reguler', 20000),
(1722, 'Reguler', 20000),
(1723, 'Reguler', 20000),
(1724, 'Reguler', 20000),
(1725, 'Reguler', 20000),
(1726, 'Reguler', 20000),
(1727, 'Reguler', 20000),
(1728, 'Reguler', 20000),
(1729, 'Reguler', 20000),
(1730, 'Reguler', 20000),
(1731, 'Reguler', 20000),
(1732, 'Reguler', 20000),
(1733, 'Reguler', 20000),
(1734, 'Reguler', 20000),
(1735, 'Reguler', 20000),
(1736, 'Reguler', 20000),
(1737, 'Reguler', 20000),
(1738, 'Reguler', 20000),
(1739, 'Reguler', 20000),
(1740, 'Reguler', 20000),
(1741, 'Reguler', 20000),
(1742, 'Reguler', 20000),
(1743, 'Reguler', 20000),
(1744, 'Reguler', 20000),
(1745, 'Reguler', 20000),
(1746, 'Reguler', 20000),
(1747, 'Reguler', 20000),
(1748, 'Reguler', 20000),
(1749, 'Reguler', 20000),
(1750, 'Reguler', 20000),
(1751, 'Reguler', 20000),
(1752, 'Reguler', 20000),
(1753, 'Reguler', 20000),
(1754, 'Reguler', 20000),
(1755, 'Reguler', 20000),
(1756, 'Reguler', 20000),
(1757, 'Reguler', 20000),
(1758, 'Reguler', 20000),
(1759, 'Reguler', 20000),
(1760, 'Reguler', 20000),
(1761, 'Reguler', 20000),
(1762, 'Reguler', 20000),
(1763, 'Reguler', 20000),
(1764, 'Reguler', 20000),
(1765, 'Reguler', 20000),
(1766, 'Reguler', 20000),
(1767, 'Reguler', 20000),
(1768, 'Reguler', 20000),
(1769, 'Reguler', 20000),
(1770, 'Reguler', 20000),
(1771, 'Reguler', 20000),
(1772, 'Reguler', 20000),
(1773, 'Reguler', 20000),
(1774, 'Reguler', 20000),
(1775, 'Reguler', 20000),
(1776, 'Reguler', 20000),
(1777, 'Reguler', 20000),
(1778, 'Reguler', 20000),
(1779, 'Reguler', 20000),
(1780, 'Reguler', 20000),
(1781, 'Reguler', 20000),
(1782, 'Reguler', 20000),
(1783, 'Reguler', 20000),
(1784, 'Reguler', 20000),
(1785, 'Reguler', 20000),
(1786, 'Reguler', 20000),
(1787, 'Reguler', 20000),
(1788, 'Reguler', 20000),
(1789, 'Reguler', 20000),
(1790, 'Reguler', 20000),
(1791, 'Reguler', 20000),
(1792, 'Reguler', 20000),
(1793, 'Reguler', 20000),
(1794, 'Reguler', 20000),
(1795, 'Reguler', 20000),
(1796, 'Reguler', 20000),
(1797, 'Reguler', 20000),
(1798, 'Reguler', 20000),
(1799, 'Reguler', 20000),
(1800, 'Reguler', 20000),
(1801, 'Reguler', 20000),
(1802, 'Reguler', 20000),
(1803, 'Reguler', 20000),
(1804, 'Reguler', 20000),
(1805, 'Reguler', 20000),
(1806, 'Reguler', 20000),
(1807, 'Reguler', 20000),
(1808, 'Reguler', 20000),
(1809, 'Reguler', 20000),
(1810, 'Reguler', 20000),
(1811, 'Reguler', 20000),
(1812, 'Reguler', 20000),
(1813, 'Reguler', 20000),
(1814, 'Reguler', 20000),
(1815, 'Reguler', 20000),
(1816, 'Reguler', 20000),
(1817, 'Reguler', 20000),
(1818, 'Reguler', 20000),
(1819, 'Reguler', 20000),
(1820, 'Reguler', 20000),
(1821, 'Reguler', 20000),
(1822, 'Reguler', 20000),
(1823, 'Reguler', 20000),
(1824, 'Reguler', 20000),
(1825, 'Reguler', 20000),
(1826, 'Reguler', 20000),
(1827, 'Reguler', 20000),
(1828, 'Reguler', 20000),
(1829, 'Reguler', 20000),
(1830, 'Reguler', 20000),
(1831, 'Reguler', 20000),
(1832, 'Reguler', 20000),
(1833, 'Reguler', 20000),
(1834, 'Reguler', 20000),
(1835, 'Reguler', 20000),
(1836, 'Reguler', 20000),
(1837, 'Reguler', 20000),
(1838, 'Reguler', 20000),
(1839, 'Reguler', 20000),
(1840, 'Reguler', 20000),
(1841, 'Reguler', 20000),
(1842, 'Reguler', 20000),
(1843, 'Reguler', 20000),
(1844, 'Reguler', 20000),
(1845, 'Reguler', 20000),
(1846, 'Reguler', 20000),
(1847, 'Reguler', 20000),
(1848, 'Reguler', 20000),
(1849, 'Reguler', 20000),
(1850, 'Reguler', 20000),
(1851, 'Reguler', 20000),
(1852, 'Reguler', 20000),
(1853, 'Reguler', 20000),
(1854, 'Reguler', 20000),
(1855, 'Reguler', 20000),
(1856, 'Reguler', 20000),
(1857, 'Reguler', 20000),
(1858, 'Reguler', 20000),
(1859, 'Reguler', 20000),
(1860, 'Reguler', 20000),
(1861, 'Reguler', 20000),
(1862, 'Reguler', 20000),
(1863, 'Reguler', 20000),
(1864, 'Reguler', 20000),
(1865, 'Reguler', 20000),
(1866, 'Reguler', 20000),
(1867, 'Reguler', 20000),
(1868, 'Reguler', 20000),
(1869, 'Reguler', 20000),
(1870, 'Reguler', 20000),
(1871, 'Reguler', 20000),
(1872, 'Reguler', 20000),
(1873, 'Reguler', 20000),
(1874, 'Reguler', 20000),
(1875, 'Reguler', 20000),
(1876, 'Reguler', 20000),
(1877, 'Reguler', 20000),
(1878, 'Reguler', 20000),
(1879, 'Reguler', 20000),
(1880, 'Reguler', 20000),
(1881, 'Reguler', 20000),
(1882, 'Reguler', 20000),
(1883, 'Reguler', 20000),
(1884, 'Reguler', 20000),
(1885, 'Reguler', 20000),
(1886, 'Reguler', 20000),
(1887, 'Reguler', 20000),
(1888, 'Reguler', 20000),
(1889, 'Reguler', 20000),
(1890, 'Reguler', 20000),
(1891, 'Reguler', 20000),
(1892, 'Reguler', 20000),
(1893, 'Reguler', 20000),
(1894, 'Reguler', 20000),
(1895, 'Reguler', 20000),
(1896, 'Reguler', 20000),
(1897, 'Reguler', 20000),
(1898, 'Reguler', 20000),
(1899, 'Reguler', 20000),
(1900, 'Reguler', 20000),
(1901, 'Reguler', 20000),
(1902, 'Reguler', 20000),
(1903, 'Reguler', 20000),
(1904, 'Reguler', 20000),
(1905, 'Reguler', 20000),
(1906, 'Reguler', 20000),
(1907, 'Reguler', 20000),
(1908, 'Reguler', 20000),
(1909, 'Reguler', 20000),
(1910, 'Reguler', 20000),
(1911, 'Reguler', 20000),
(1912, 'Reguler', 20000),
(1913, 'Reguler', 20000),
(1914, 'Reguler', 20000),
(1915, 'Reguler', 20000),
(1916, 'Reguler', 20000),
(1917, 'Reguler', 20000),
(1918, 'Reguler', 20000),
(1919, 'Reguler', 20000),
(1920, 'Reguler', 20000),
(1921, 'Reguler', 20000),
(1922, 'Reguler', 20000),
(1923, 'Reguler', 20000),
(1924, 'Reguler', 20000),
(1925, 'Reguler', 20000),
(1926, 'Reguler', 20000),
(1927, 'Reguler', 20000),
(1928, 'Reguler', 20000),
(1929, 'Reguler', 20000),
(1930, 'Reguler', 20000),
(1931, 'Reguler', 20000),
(1932, 'Reguler', 20000),
(1933, 'Reguler', 20000),
(1934, 'Reguler', 20000),
(1935, 'Reguler', 20000),
(1936, 'Reguler', 20000),
(1937, 'Reguler', 20000),
(1938, 'Reguler', 20000),
(1939, 'Reguler', 20000),
(1940, 'Reguler', 20000),
(1941, 'Reguler', 20000),
(1942, 'Reguler', 20000),
(1943, 'Reguler', 20000),
(1944, 'Reguler', 20000),
(1945, 'Reguler', 20000),
(1946, 'Reguler', 20000),
(1947, 'Reguler', 20000),
(1948, 'Reguler', 20000),
(1949, 'Reguler', 20000),
(1950, 'Reguler', 20000),
(1951, 'Reguler', 20000),
(1952, 'Reguler', 20000),
(1953, 'Reguler', 20000),
(1954, 'Reguler', 20000),
(1955, 'Reguler', 20000),
(1956, 'Reguler', 20000),
(1957, 'Reguler', 20000),
(1958, 'Reguler', 20000),
(1959, 'Reguler', 20000),
(1960, 'Reguler', 20000),
(1961, 'Reguler', 20000),
(1962, 'Reguler', 20000),
(1963, 'Reguler', 20000),
(1964, 'Reguler', 20000),
(1965, 'Reguler', 20000),
(1966, 'Reguler', 20000),
(1967, 'Reguler', 20000),
(1968, 'Reguler', 20000),
(1969, 'Reguler', 20000),
(1970, 'Reguler', 20000),
(1971, 'Reguler', 20000),
(1972, 'Reguler', 20000),
(1973, 'Reguler', 20000),
(1974, 'Reguler', 20000),
(1975, 'Reguler', 20000),
(1976, 'Reguler', 20000),
(1977, 'Reguler', 20000),
(1978, 'Reguler', 20000),
(1979, 'Reguler', 20000),
(1980, 'Reguler', 20000),
(1981, 'Reguler', 20000),
(1982, 'Reguler', 20000),
(1983, 'Reguler', 20000),
(1984, 'Reguler', 20000),
(1985, 'Reguler', 20000),
(1986, 'Reguler', 20000),
(1987, 'Reguler', 20000),
(1988, 'Reguler', 20000),
(1989, 'Reguler', 20000),
(1990, 'Reguler', 20000),
(1991, 'Reguler', 20000),
(1992, 'Reguler', 20000),
(1993, 'Reguler', 20000),
(1994, 'Reguler', 20000),
(1995, 'Reguler', 20000),
(1996, 'Reguler', 20000),
(1997, 'Reguler', 20000),
(1998, 'Reguler', 20000),
(1999, 'Reguler', 20000),
(2000, 'Reguler', 20000),
(2001, 'Reguler', 20000),
(2002, 'Reguler', 20000),
(2003, 'Reguler', 20000),
(2004, 'Reguler', 20000),
(2005, 'Reguler', 20000),
(2006, 'Reguler', 20000),
(2007, 'Reguler', 20000),
(2008, 'Reguler', 20000),
(2009, 'Reguler', 20000),
(2010, 'Reguler', 20000),
(2011, 'Reguler', 20000),
(2012, 'Reguler', 20000),
(2013, 'Reguler', 20000),
(2014, 'Reguler', 20000),
(2015, 'Reguler', 20000),
(2016, 'Reguler', 20000),
(2017, 'Reguler', 20000),
(2018, 'Reguler', 20000),
(2019, 'Reguler', 20000),
(2020, 'Reguler', 20000),
(2021, 'Reguler', 20000),
(2022, 'Reguler', 20000),
(2023, 'Reguler', 20000),
(2024, 'Reguler', 20000),
(2025, 'Reguler', 20000),
(2026, 'Reguler', 20000),
(2027, 'Reguler', 20000),
(2028, 'Reguler', 20000),
(2029, 'Reguler', 20000),
(2030, 'Reguler', 20000),
(2031, 'Reguler', 20000),
(2032, 'Reguler', 20000),
(2033, 'Reguler', 20000),
(2034, 'Reguler', 20000),
(2035, 'Reguler', 20000),
(2036, 'Reguler', 20000),
(2037, 'Reguler', 20000),
(2038, 'Reguler', 20000),
(2039, 'Reguler', 20000),
(2040, 'Reguler', 20000),
(2041, 'Reguler', 20000),
(2042, 'Reguler', 20000),
(2043, 'Reguler', 20000),
(2044, 'Reguler', 20000),
(2045, 'Reguler', 20000),
(2046, 'Reguler', 20000),
(2047, 'Reguler', 20000),
(2048, 'Reguler', 20000),
(2049, 'Reguler', 20000),
(2050, 'Reguler', 20000),
(2051, 'Reguler', 20000),
(2052, 'Reguler', 20000),
(2053, 'Reguler', 20000),
(2054, 'Reguler', 20000),
(2055, 'Reguler', 20000),
(2056, 'Reguler', 20000),
(2057, 'Reguler', 20000),
(2058, 'Reguler', 20000),
(2059, 'Reguler', 20000),
(2060, 'Reguler', 20000),
(2061, 'Reguler', 20000),
(2062, 'Reguler', 20000),
(2063, 'Reguler', 20000),
(2064, 'Reguler', 20000),
(2065, 'Reguler', 20000),
(2066, 'Reguler', 20000),
(2067, 'Reguler', 20000),
(2068, 'Reguler', 20000),
(2069, 'Reguler', 20000),
(2070, 'Reguler', 20000),
(2071, 'Reguler', 20000),
(2072, 'Reguler', 20000),
(2073, 'Reguler', 20000),
(2074, 'Reguler', 20000),
(2075, 'Reguler', 20000),
(2076, 'Reguler', 20000),
(2077, 'Reguler', 20000),
(2078, 'Reguler', 20000),
(2079, 'Reguler', 20000),
(2080, 'Reguler', 20000),
(2081, 'Reguler', 20000),
(2082, 'Reguler', 20000),
(2083, 'Reguler', 20000),
(2084, 'Reguler', 20000),
(2085, 'Reguler', 20000),
(2086, 'Reguler', 20000),
(2087, 'Reguler', 20000),
(2088, 'Reguler', 20000),
(2089, 'Reguler', 20000),
(2090, 'Reguler', 20000),
(2091, 'Reguler', 20000),
(2092, 'Reguler', 20000),
(2093, 'Reguler', 20000),
(2094, 'Reguler', 20000),
(2095, 'Reguler', 20000),
(2096, 'Reguler', 20000),
(2097, 'Reguler', 20000),
(2098, 'Reguler', 20000),
(2099, 'Reguler', 20000),
(2100, 'Reguler', 20000),
(2101, 'Reguler', 20000),
(2102, 'Reguler', 20000),
(2103, 'Reguler', 20000),
(2104, 'Reguler', 20000),
(2105, 'Reguler', 20000),
(2106, 'Reguler', 20000),
(2107, 'Reguler', 20000),
(2108, 'Reguler', 20000),
(2109, 'Reguler', 20000),
(2110, 'Reguler', 20000),
(2111, 'Reguler', 20000),
(2112, 'Reguler', 20000),
(2113, 'Reguler', 20000),
(2114, 'Reguler', 20000),
(2115, 'Reguler', 20000),
(2116, 'Reguler', 20000),
(2117, 'Reguler', 20000),
(2118, 'Reguler', 20000),
(2119, 'Reguler', 20000),
(2120, 'Reguler', 20000),
(2121, 'Reguler', 20000),
(2122, 'Reguler', 20000),
(2123, 'Reguler', 20000),
(2124, 'Reguler', 20000),
(2125, 'Reguler', 20000),
(2126, 'Reguler', 20000),
(2127, 'Reguler', 20000),
(2128, 'Reguler', 20000),
(2129, 'Reguler', 20000),
(2130, 'Reguler', 20000),
(2131, 'Reguler', 20000),
(2132, 'Reguler', 20000),
(2133, 'Reguler', 20000),
(2134, 'Reguler', 20000),
(2135, 'Reguler', 20000),
(2136, 'Reguler', 20000),
(2137, 'Reguler', 20000),
(2138, 'Reguler', 20000),
(2139, 'Reguler', 20000),
(2140, 'Reguler', 20000),
(2141, 'Reguler', 20000),
(2142, 'Reguler', 20000),
(2143, 'Reguler', 20000),
(2144, 'Reguler', 20000),
(2145, 'Reguler', 20000),
(2146, 'Reguler', 20000),
(2147, 'Reguler', 20000),
(2148, 'Reguler', 20000),
(2149, 'Reguler', 20000),
(2150, 'Reguler', 20000),
(2151, 'Reguler', 20000),
(2152, 'Reguler', 20000),
(2153, 'Reguler', 20000),
(2154, 'Reguler', 20000),
(2155, 'Reguler', 20000),
(2156, 'Reguler', 20000),
(2157, 'Reguler', 20000),
(2158, 'Reguler', 20000),
(2159, 'Reguler', 20000),
(2160, 'Reguler', 20000),
(2161, 'Reguler', 20000),
(2162, 'Reguler', 20000),
(2163, 'Reguler', 20000),
(2164, 'Reguler', 20000),
(2165, 'Reguler', 20000),
(2166, 'Reguler', 20000),
(2167, 'Reguler', 20000),
(2168, 'Reguler', 20000),
(2169, 'Reguler', 20000),
(2170, 'Reguler', 20000),
(2171, 'Reguler', 20000),
(2172, 'Reguler', 20000),
(2173, 'Reguler', 20000),
(2174, 'Reguler', 20000),
(2175, 'Reguler', 20000),
(2176, 'Reguler', 20000),
(2177, 'Reguler', 20000),
(2178, 'Reguler', 20000),
(2179, 'Reguler', 20000),
(2180, 'Reguler', 20000),
(2181, 'Reguler', 20000),
(2182, 'Reguler', 20000),
(2183, 'Reguler', 20000),
(2184, 'Reguler', 20000),
(2185, 'Reguler', 20000),
(2186, 'Reguler', 20000),
(2187, 'Reguler', 20000),
(2188, 'Reguler', 20000),
(2189, 'Reguler', 20000),
(2190, 'Reguler', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ferdianrafli25@gmail.com', 'rafli', '$2y$10$YKZ4UNG769rBT5NhNXXQDufXxom5WuPkew8zGfGQsv.7oI1Y/VJB2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-27 06:47:57', '2021-10-27 06:48:24', NULL);

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
  ADD PRIMARY KEY (`idbarang`),
  ADD KEY `idkategori` (`idkategori`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`invoice`),
  ADD KEY `idbarang` (`idbarang`),
  ADD KEY `idstatus` (`idstatus`),
  ADD KEY `idpelanggan` (`idpelanggan`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`idpenjualan`,`idbarang`),
  ADD KEY `idpenjualan` (`idpenjualan`,`idbarang`),
  ADD KEY `idbarang` (`idbarang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `konfirm_pembayaran`
--
ALTER TABLE `konfirm_pembayaran`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `idpetugas` (`idpetugas`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`),
  ADD KEY `idkota` (`idkota`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `idpelanggan` (`idpelanggan`,`idkota_kirim`),
  ADD KEY `jenis_pengiriman` (`jenis_pengiriman`),
  ADD KEY `idkota_kirim` (`idkota_kirim`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `rekap_penjualan`
--
ALTER TABLE `rekap_penjualan`
  ADD PRIMARY KEY (`idpenjualan`),
  ADD KEY `idpenjualan` (`idpenjualan`),
  ADD KEY `idkategori` (`idbarang`);

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
-- Indexes for table `tarif_ongkir`
--
ALTER TABLE `tarif_ongkir`
  ADD KEY `idkota_tujuan` (`idkota_tujuan`,`jenis_pengiriman`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11115;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2191;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idpetugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD CONSTRAINT `data_transaksi_ibfk_1` FOREIGN KEY (`invoice`) REFERENCES `penjualan` (`idpenjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_transaksi_ibfk_3` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`),
  ADD CONSTRAINT `data_transaksi_ibfk_4` FOREIGN KEY (`idstatus`) REFERENCES `status` (`idstatus`),
  ADD CONSTRAINT `data_transaksi_ibfk_5` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`),
  ADD CONSTRAINT `detail_penjualan_ibfk_3` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirm_pembayaran`
--
ALTER TABLE `konfirm_pembayaran`
  ADD CONSTRAINT `konfirm_pembayaran_ibfk_2` FOREIGN KEY (`idpetugas`) REFERENCES `petugas` (`idpetugas`),
  ADD CONSTRAINT `konfirm_pembayaran_ibfk_3` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`);

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`idkota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`),
  ADD CONSTRAINT `penjualan_ibfk_4` FOREIGN KEY (`idkota_kirim`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekap_penjualan`
--
ALTER TABLE `rekap_penjualan`
  ADD CONSTRAINT `rekap_penjualan_ibfk_2` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekap_penjualan_ibfk_3` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status_penjualan`
--
ALTER TABLE `status_penjualan`
  ADD CONSTRAINT `status_penjualan_ibfk_1` FOREIGN KEY (`idpetugas`) REFERENCES `petugas` (`idpetugas`),
  ADD CONSTRAINT `status_penjualan_ibfk_3` FOREIGN KEY (`idstatus`) REFERENCES `status` (`idstatus`),
  ADD CONSTRAINT `status_penjualan_ibfk_4` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarif_ongkir`
--
ALTER TABLE `tarif_ongkir`
  ADD CONSTRAINT `tarif_ongkir_ibfk_1` FOREIGN KEY (`idkota_tujuan`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
