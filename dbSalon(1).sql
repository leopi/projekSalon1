-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2015 at 04:38 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbSalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwalavailable`
--

CREATE TABLE IF NOT EXISTS `jadwalavailable` (
`id` int(11) NOT NULL,
  `salon_id` int(11) NOT NULL,
  `hari_id` int(11) NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_hari`
--

CREATE TABLE IF NOT EXISTS `master_hari` (
`id` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `master_hari`
--

INSERT INTO `master_hari` (`id`, `hari`) VALUES
(1, 'SENIN'),
(2, 'SELASA'),
(3, 'RABU'),
(4, 'KAMIS'),
(5, 'JUMAT'),
(6, 'SABTU'),
(7, 'MINGGU');

-- --------------------------------------------------------

--
-- Table structure for table `master_jeniskelamin`
--

CREATE TABLE IF NOT EXISTS `master_jeniskelamin` (
`id` int(11) NOT NULL,
  `jeniskelamin` varchar(9) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `master_jeniskelamin`
--

INSERT INTO `master_jeniskelamin` (`id`, `jeniskelamin`) VALUES
(1, 'LAKI-LAKI'),
(2, 'PEREMPUAN');

-- --------------------------------------------------------

--
-- Table structure for table `master_jenislayanan`
--

CREATE TABLE IF NOT EXISTS `master_jenislayanan` (
`id` int(11) NOT NULL,
  `layanan` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `master_jenislayanan`
--

INSERT INTO `master_jenislayanan` (`id`, `layanan`) VALUES
(1, 'POTONG RAMBUT'),
(2, 'CAT RAMBUT');

-- --------------------------------------------------------

--
-- Table structure for table `master_jenissalon`
--

CREATE TABLE IF NOT EXISTS `master_jenissalon` (
`id` int(11) NOT NULL,
  `jenis_salon` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `master_jenissalon`
--

INSERT INTO `master_jenissalon` (`id`, `jenis_salon`) VALUES
(1, 'PERSONAL'),
(2, 'VENDOR');

-- --------------------------------------------------------

--
-- Table structure for table `master_kab`
--

CREATE TABLE IF NOT EXISTS `master_kab` (
  `kode_prov` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kode_kab` int(11) NOT NULL,
  `kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kab`
--

INSERT INTO `master_kab` (`kode_prov`, `provinsi`, `kode_kab`, `kabupaten`) VALUES
(11, 'ACEH', 1101, 'SIMEULUE'),
(11, 'ACEH', 1102, 'ACEH SINGKIL'),
(11, 'ACEH', 1103, 'ACEH SELATAN'),
(11, 'ACEH', 1104, 'ACEH TENGGARA'),
(11, 'ACEH', 1105, 'ACEH TIMUR'),
(11, 'ACEH', 1106, 'ACEH TENGAH'),
(11, 'ACEH', 1107, 'ACEH BARAT'),
(11, 'ACEH', 1108, 'ACEH BESAR'),
(11, 'ACEH', 1109, 'PIDIE'),
(11, 'ACEH', 1110, 'BIREUEN'),
(11, 'ACEH', 1111, 'ACEH UTARA'),
(11, 'ACEH', 1112, 'ACEH BARAT DAYA'),
(11, 'ACEH', 1113, 'GAYO LUES'),
(11, 'ACEH', 1114, 'ACEH TAMIANG'),
(11, 'ACEH', 1115, 'NAGAN RAYA'),
(11, 'ACEH', 1116, 'ACEH JAYA'),
(11, 'ACEH', 1117, 'BENER MERIAH'),
(11, 'ACEH', 1118, 'PIDIE JAYA'),
(11, 'ACEH', 1171, 'BANDA ACEH'),
(11, 'ACEH', 1172, 'SABANG'),
(11, 'ACEH', 1173, 'LANGSA'),
(11, 'ACEH', 1174, 'LHOKSEUMAWE'),
(11, 'ACEH', 1175, 'SUBULUSSALAM'),
(12, 'SUMATERA UTARA', 1201, 'NIAS'),
(12, 'SUMATERA UTARA', 1202, 'MANDAILING NATAL'),
(12, 'SUMATERA UTARA', 1203, 'TAPANULI SELATAN'),
(12, 'SUMATERA UTARA', 1204, 'TAPANULI TENGAH'),
(12, 'SUMATERA UTARA', 1205, 'TAPANULI UTARA'),
(12, 'SUMATERA UTARA', 1206, 'TOBA SAMOSIR'),
(12, 'SUMATERA UTARA', 1207, 'LABUHAN BATU'),
(12, 'SUMATERA UTARA', 1208, 'ASAHAN'),
(12, 'SUMATERA UTARA', 1209, 'SIMALUNGUN'),
(12, 'SUMATERA UTARA', 1210, 'DAIRI'),
(12, 'SUMATERA UTARA', 1211, 'KARO'),
(12, 'SUMATERA UTARA', 1212, 'DELI SERDANG'),
(12, 'SUMATERA UTARA', 1213, 'LANGKAT'),
(12, 'SUMATERA UTARA', 1214, 'NIAS SELATAN'),
(12, 'SUMATERA UTARA', 1215, 'HUMBANG HASUNDUTAN'),
(12, 'SUMATERA UTARA', 1216, 'PAKPAK BHARAT'),
(12, 'SUMATERA UTARA', 1217, 'SAMOSIR'),
(12, 'SUMATERA UTARA', 1218, 'SERDANG BEDAGAI'),
(12, 'SUMATERA UTARA', 1219, 'BATU BARA'),
(12, 'SUMATERA UTARA', 1220, 'PADANG LAWAS UTARA'),
(12, 'SUMATERA UTARA', 1221, 'PADANG LAWAS'),
(12, 'SUMATERA UTARA', 1222, 'LABUHAN BATU SELATAN'),
(12, 'SUMATERA UTARA', 1223, 'LABUHAN BATU UTARA'),
(12, 'SUMATERA UTARA', 1224, 'NIAS UTARA'),
(12, 'SUMATERA UTARA', 1225, 'NIAS BARAT'),
(12, 'SUMATERA UTARA', 1271, 'SIBOLGA'),
(12, 'SUMATERA UTARA', 1272, 'TANJUNG BALAI'),
(12, 'SUMATERA UTARA', 1273, 'PEMATANG SIANTAR'),
(12, 'SUMATERA UTARA', 1274, 'TEBING TINGGI'),
(12, 'SUMATERA UTARA', 1275, 'MEDAN'),
(12, 'SUMATERA UTARA', 1276, 'BINJAI'),
(12, 'SUMATERA UTARA', 1277, 'PADANGSIDIMPUAN'),
(12, 'SUMATERA UTARA', 1278, 'GUNUNGSITOLI'),
(13, 'SUMATERA BARAT', 1301, 'KEPULAUAN MENTAWAI'),
(13, 'SUMATERA BARAT', 1302, 'PESISIR SELATAN'),
(13, 'SUMATERA BARAT', 1303, 'SOLOK'),
(13, 'SUMATERA BARAT', 1304, 'SIJUNJUNG'),
(13, 'SUMATERA BARAT', 1305, 'TANAH DATAR'),
(13, 'SUMATERA BARAT', 1306, 'PADANG PARIAMAN'),
(13, 'SUMATERA BARAT', 1307, 'AGAM'),
(13, 'SUMATERA BARAT', 1308, 'LIMA PULUH KOTA'),
(13, 'SUMATERA BARAT', 1309, 'PASAMAN'),
(13, 'SUMATERA BARAT', 1310, 'SOLOK SELATAN'),
(13, 'SUMATERA BARAT', 1311, 'DHARMASRAYA'),
(13, 'SUMATERA BARAT', 1312, 'PASAMAN BARAT'),
(13, 'SUMATERA BARAT', 1371, 'PADANG'),
(13, 'SUMATERA BARAT', 1372, 'SOLOK'),
(13, 'SUMATERA BARAT', 1373, 'SAWAH LUNTO'),
(13, 'SUMATERA BARAT', 1374, 'PADANG PANJANG'),
(13, 'SUMATERA BARAT', 1375, 'BUKITTINGGI'),
(13, 'SUMATERA BARAT', 1376, 'PAYAKUMBUH'),
(13, 'SUMATERA BARAT', 1377, 'PARIAMAN'),
(14, 'RIAU', 1401, 'KUANTAN SINGINGI'),
(14, 'RIAU', 1402, 'INDRAGIRI HULU'),
(14, 'RIAU', 1403, 'INDRAGIRI HILIR'),
(14, 'RIAU', 1404, 'PELALAWAN'),
(14, 'RIAU', 1405, 'S I A K'),
(14, 'RIAU', 1406, 'KAMPAR'),
(14, 'RIAU', 1407, 'ROKAN HULU'),
(14, 'RIAU', 1408, 'BENGKALIS'),
(14, 'RIAU', 1409, 'ROKAN HILIR'),
(14, 'RIAU', 1410, 'KEPULAUAN MERANTI'),
(14, 'RIAU', 1471, 'PEKANBARU'),
(14, 'RIAU', 1473, 'D U M A I'),
(15, 'JAMBI', 1501, 'KERINCI'),
(15, 'JAMBI', 1502, 'MERANGIN'),
(15, 'JAMBI', 1503, 'SAROLANGUN'),
(15, 'JAMBI', 1504, 'BATANG HARI'),
(15, 'JAMBI', 1505, 'MUARO JAMBI'),
(15, 'JAMBI', 1506, 'TANJUNG JABUNG TIMUR'),
(15, 'JAMBI', 1507, 'TANJUNG JABUNG BARAT'),
(15, 'JAMBI', 1508, 'TEBO'),
(15, 'JAMBI', 1509, 'BUNGO'),
(15, 'JAMBI', 1571, 'JAMBI'),
(15, 'JAMBI', 1572, 'SUNGAI PENUH'),
(16, 'SUMATERA SELATAN', 1601, 'OGAN KOMERING ULU'),
(16, 'SUMATERA SELATAN', 1602, 'OGAN KOMERING ILIR'),
(16, 'SUMATERA SELATAN', 1603, 'MUARA ENIM'),
(16, 'SUMATERA SELATAN', 1604, 'LAHAT'),
(16, 'SUMATERA SELATAN', 1605, 'MUSI RAWAS'),
(16, 'SUMATERA SELATAN', 1606, 'MUSI BANYUASIN'),
(16, 'SUMATERA SELATAN', 1607, 'BANYU ASIN'),
(16, 'SUMATERA SELATAN', 1608, 'OGAN KOMERING ULU SELATAN'),
(16, 'SUMATERA SELATAN', 1609, 'OGAN KOMERING ULU TIMUR'),
(16, 'SUMATERA SELATAN', 1610, 'OGAN ILIR'),
(16, 'SUMATERA SELATAN', 1611, 'EMPAT LAWANG'),
(16, 'SUMATERA SELATAN', 1612, 'PENUKAL ABAB LEMATANG ILIR'),
(16, 'SUMATERA SELATAN', 1613, 'MUSI RAWAS UTARA'),
(16, 'SUMATERA SELATAN', 1671, 'PALEMBANG'),
(16, 'SUMATERA SELATAN', 1672, 'PRABUMULIH'),
(16, 'SUMATERA SELATAN', 1673, 'PAGAR ALAM'),
(16, 'SUMATERA SELATAN', 1674, 'LUBUKLINGGAU'),
(17, 'BENGKULU', 1701, 'BENGKULU SELATAN'),
(17, 'BENGKULU', 1702, 'REJANG LEBONG'),
(17, 'BENGKULU', 1703, 'BENGKULU UTARA'),
(17, 'BENGKULU', 1704, 'KAUR'),
(17, 'BENGKULU', 1705, 'SELUMA'),
(17, 'BENGKULU', 1706, 'MUKOMUKO'),
(17, 'BENGKULU', 1707, 'LEBONG'),
(17, 'BENGKULU', 1708, 'KEPAHIANG'),
(17, 'BENGKULU', 1709, 'BENGKULU TENGAH'),
(17, 'BENGKULU', 1771, 'BENGKULU'),
(18, 'LAMPUNG', 1801, 'LAMPUNG BARAT'),
(18, 'LAMPUNG', 1802, 'TANGGAMUS'),
(18, 'LAMPUNG', 1803, 'LAMPUNG SELATAN'),
(18, 'LAMPUNG', 1804, 'LAMPUNG TIMUR'),
(18, 'LAMPUNG', 1805, 'LAMPUNG TENGAH'),
(18, 'LAMPUNG', 1806, 'LAMPUNG UTARA'),
(18, 'LAMPUNG', 1807, 'WAY KANAN'),
(18, 'LAMPUNG', 1808, 'TULANGBAWANG'),
(18, 'LAMPUNG', 1809, 'PESAWARAN'),
(18, 'LAMPUNG', 1810, 'PRINGSEWU'),
(18, 'LAMPUNG', 1811, 'MESUJI'),
(18, 'LAMPUNG', 1812, 'TULANG BAWANG BARAT'),
(18, 'LAMPUNG', 1813, 'PESISIR BARAT'),
(18, 'LAMPUNG', 1871, 'BANDAR LAMPUNG'),
(18, 'LAMPUNG', 1872, 'METRO'),
(19, 'KEPULAUAN BANGKA BELITUNG', 1901, 'BANGKA'),
(19, 'KEPULAUAN BANGKA BELITUNG', 1902, 'BELITUNG'),
(19, 'KEPULAUAN BANGKA BELITUNG', 1903, 'BANGKA BARAT'),
(19, 'KEPULAUAN BANGKA BELITUNG', 1904, 'BANGKA TENGAH'),
(19, 'KEPULAUAN BANGKA BELITUNG', 1905, 'BANGKA SELATAN'),
(19, 'KEPULAUAN BANGKA BELITUNG', 1906, 'BELITUNG TIMUR'),
(19, 'KEPULAUAN BANGKA BELITUNG', 1971, 'PANGKAL PINANG'),
(21, 'KEPULAUAN RIAU', 2101, 'KARIMUN'),
(21, 'KEPULAUAN RIAU', 2102, 'BINTAN'),
(21, 'KEPULAUAN RIAU', 2103, 'NATUNA'),
(21, 'KEPULAUAN RIAU', 2104, 'LINGGA'),
(21, 'KEPULAUAN RIAU', 2105, 'KEPULAUAN ANAMBAS'),
(21, 'KEPULAUAN RIAU', 2171, 'B A T A M'),
(21, 'KEPULAUAN RIAU', 2172, 'TANJUNG PINANG'),
(31, 'DKI JAKARTA', 3101, 'KEPULAUAN SERIBU'),
(31, 'DKI JAKARTA', 3171, 'JAKARTA SELATAN'),
(31, 'DKI JAKARTA', 3172, 'JAKARTA TIMUR'),
(31, 'DKI JAKARTA', 3173, 'JAKARTA PUSAT'),
(31, 'DKI JAKARTA', 3174, 'JAKARTA BARAT'),
(31, 'DKI JAKARTA', 3175, 'JAKARTA UTARA'),
(32, 'JAWA BARAT', 3201, 'BOGOR'),
(32, 'JAWA BARAT', 3202, 'SUKABUMI'),
(32, 'JAWA BARAT', 3203, 'CIANJUR'),
(32, 'JAWA BARAT', 3204, 'BANDUNG'),
(32, 'JAWA BARAT', 3205, 'GARUT'),
(32, 'JAWA BARAT', 3206, 'TASIKMALAYA'),
(32, 'JAWA BARAT', 3207, 'CIAMIS'),
(32, 'JAWA BARAT', 3208, 'KUNINGAN'),
(32, 'JAWA BARAT', 3209, 'CIREBON'),
(32, 'JAWA BARAT', 3210, 'MAJALENGKA'),
(32, 'JAWA BARAT', 3211, 'SUMEDANG'),
(32, 'JAWA BARAT', 3212, 'INDRAMAYU'),
(32, 'JAWA BARAT', 3213, 'SUBANG'),
(32, 'JAWA BARAT', 3214, 'PURWAKARTA'),
(32, 'JAWA BARAT', 3215, 'KARAWANG'),
(32, 'JAWA BARAT', 3216, 'BEKASI'),
(32, 'JAWA BARAT', 3217, 'BANDUNG BARAT'),
(32, 'JAWA BARAT', 3218, 'PANGANDARAN'),
(32, 'JAWA BARAT', 3271, 'BOGOR'),
(32, 'JAWA BARAT', 3272, 'SUKABUMI'),
(32, 'JAWA BARAT', 3273, 'BANDUNG'),
(32, 'JAWA BARAT', 3274, 'CIREBON'),
(32, 'JAWA BARAT', 3275, 'BEKASI'),
(32, 'JAWA BARAT', 3276, 'DEPOK'),
(32, 'JAWA BARAT', 3277, 'CIMAHI'),
(32, 'JAWA BARAT', 3278, 'TASIKMALAYA'),
(32, 'JAWA BARAT', 3279, 'BANJAR'),
(33, 'JAWA TENGAH', 3301, 'CILACAP'),
(33, 'JAWA TENGAH', 3302, 'BANYUMAS'),
(33, 'JAWA TENGAH', 3303, 'PURBALINGGA'),
(33, 'JAWA TENGAH', 3304, 'BANJARNEGARA'),
(33, 'JAWA TENGAH', 3305, 'KEBUMEN'),
(33, 'JAWA TENGAH', 3306, 'PURWOREJO'),
(33, 'JAWA TENGAH', 3307, 'WONOSOBO'),
(33, 'JAWA TENGAH', 3308, 'MAGELANG'),
(33, 'JAWA TENGAH', 3309, 'BOYOLALI'),
(33, 'JAWA TENGAH', 3310, 'KLATEN'),
(33, 'JAWA TENGAH', 3311, 'SUKOHARJO'),
(33, 'JAWA TENGAH', 3312, 'WONOGIRI'),
(33, 'JAWA TENGAH', 3313, 'KARANGANYAR'),
(33, 'JAWA TENGAH', 3314, 'SRAGEN'),
(33, 'JAWA TENGAH', 3315, 'GROBOGAN'),
(33, 'JAWA TENGAH', 3316, 'BLORA'),
(33, 'JAWA TENGAH', 3317, 'REMBANG'),
(33, 'JAWA TENGAH', 3318, 'PATI'),
(33, 'JAWA TENGAH', 3319, 'KUDUS'),
(33, 'JAWA TENGAH', 3320, 'JEPARA'),
(33, 'JAWA TENGAH', 3321, 'DEMAK'),
(33, 'JAWA TENGAH', 3322, 'SEMARANG'),
(33, 'JAWA TENGAH', 3323, 'TEMANGGUNG'),
(33, 'JAWA TENGAH', 3324, 'KENDAL'),
(33, 'JAWA TENGAH', 3325, 'BATANG'),
(33, 'JAWA TENGAH', 3326, 'PEKALONGAN'),
(33, 'JAWA TENGAH', 3327, 'PEMALANG'),
(33, 'JAWA TENGAH', 3328, 'TEGAL'),
(33, 'JAWA TENGAH', 3329, 'BREBES'),
(33, 'JAWA TENGAH', 3371, 'MAGELANG'),
(33, 'JAWA TENGAH', 3372, 'SURAKARTA'),
(33, 'JAWA TENGAH', 3373, 'SALATIGA'),
(33, 'JAWA TENGAH', 3374, 'SEMARANG'),
(33, 'JAWA TENGAH', 3375, 'PEKALONGAN'),
(33, 'JAWA TENGAH', 3376, 'TEGAL'),
(34, 'DI YOGYAKARTA', 3401, 'KULON PROGO'),
(34, 'DI YOGYAKARTA', 3402, 'BANTUL'),
(34, 'DI YOGYAKARTA', 3403, 'GUNUNG KIDUL'),
(34, 'DI YOGYAKARTA', 3404, 'SLEMAN'),
(34, 'DI YOGYAKARTA', 3471, 'YOGYAKARTA'),
(35, 'JAWA TIMUR', 3501, 'PACITAN'),
(35, 'JAWA TIMUR', 3502, 'PONOROGO'),
(35, 'JAWA TIMUR', 3503, 'TRENGGALEK'),
(35, 'JAWA TIMUR', 3504, 'TULUNGAGUNG'),
(35, 'JAWA TIMUR', 3505, 'BLITAR'),
(35, 'JAWA TIMUR', 3506, 'KEDIRI'),
(35, 'JAWA TIMUR', 3507, 'MALANG'),
(35, 'JAWA TIMUR', 3508, 'LUMAJANG'),
(35, 'JAWA TIMUR', 3509, 'JEMBER'),
(35, 'JAWA TIMUR', 3510, 'BANYUWANGI'),
(35, 'JAWA TIMUR', 3511, 'BONDOWOSO'),
(35, 'JAWA TIMUR', 3512, 'SITUBONDO'),
(35, 'JAWA TIMUR', 3513, 'PROBOLINGGO'),
(35, 'JAWA TIMUR', 3514, 'PASURUAN'),
(35, 'JAWA TIMUR', 3515, 'SIDOARJO'),
(35, 'JAWA TIMUR', 3516, 'MOJOKERTO'),
(35, 'JAWA TIMUR', 3517, 'JOMBANG'),
(35, 'JAWA TIMUR', 3518, 'NGANJUK'),
(35, 'JAWA TIMUR', 3519, 'MADIUN'),
(35, 'JAWA TIMUR', 3520, 'MAGETAN'),
(35, 'JAWA TIMUR', 3521, 'NGAWI'),
(35, 'JAWA TIMUR', 3522, 'BOJONEGORO'),
(35, 'JAWA TIMUR', 3523, 'TUBAN'),
(35, 'JAWA TIMUR', 3524, 'LAMONGAN'),
(35, 'JAWA TIMUR', 3525, 'GRESIK'),
(35, 'JAWA TIMUR', 3526, 'BANGKALAN'),
(35, 'JAWA TIMUR', 3527, 'SAMPANG'),
(35, 'JAWA TIMUR', 3528, 'PAMEKASAN'),
(35, 'JAWA TIMUR', 3529, 'SUMENEP'),
(35, 'JAWA TIMUR', 3571, 'KEDIRI'),
(35, 'JAWA TIMUR', 3572, 'BLITAR'),
(35, 'JAWA TIMUR', 3573, 'MALANG'),
(35, 'JAWA TIMUR', 3574, 'PROBOLINGGO'),
(35, 'JAWA TIMUR', 3575, 'PASURUAN'),
(35, 'JAWA TIMUR', 3576, 'MOJOKERTO'),
(35, 'JAWA TIMUR', 3577, 'MADIUN'),
(35, 'JAWA TIMUR', 3578, 'SURABAYA'),
(35, 'JAWA TIMUR', 3579, 'BATU'),
(36, 'BANTEN', 3601, 'PANDEGLANG'),
(36, 'BANTEN', 3602, 'LEBAK'),
(36, 'BANTEN', 3603, 'TANGERANG'),
(36, 'BANTEN', 3604, 'SERANG'),
(36, 'BANTEN', 3671, 'TANGERANG'),
(36, 'BANTEN', 3672, 'CILEGON'),
(36, 'BANTEN', 3673, 'SERANG'),
(36, 'BANTEN', 3674, 'TANGERANG SELATAN'),
(51, 'BALI', 5101, 'JEMBRANA'),
(51, 'BALI', 5102, 'TABANAN'),
(51, 'BALI', 5103, 'BADUNG'),
(51, 'BALI', 5104, 'GIANYAR'),
(51, 'BALI', 5105, 'KLUNGKUNG'),
(51, 'BALI', 5106, 'BANGLI'),
(51, 'BALI', 5107, 'KARANG ASEM'),
(51, 'BALI', 5108, 'BULELENG'),
(51, 'BALI', 5171, 'DENPASAR'),
(52, 'NUSA TENGGARA BARAT', 5201, 'LOMBOK BARAT'),
(52, 'NUSA TENGGARA BARAT', 5202, 'LOMBOK TENGAH'),
(52, 'NUSA TENGGARA BARAT', 5203, 'LOMBOK TIMUR'),
(52, 'NUSA TENGGARA BARAT', 5204, 'SUMBAWA'),
(52, 'NUSA TENGGARA BARAT', 5205, 'DOMPU'),
(52, 'NUSA TENGGARA BARAT', 5206, 'BIMA'),
(52, 'NUSA TENGGARA BARAT', 5207, 'SUMBAWA BARAT'),
(52, 'NUSA TENGGARA BARAT', 5208, 'LOMBOK UTARA'),
(52, 'NUSA TENGGARA BARAT', 5271, 'MATARAM'),
(52, 'NUSA TENGGARA BARAT', 5272, 'BIMA'),
(53, 'NUSA TENGGARA TIMUR', 5301, 'SUMBA BARAT'),
(53, 'NUSA TENGGARA TIMUR', 5302, 'SUMBA TIMUR'),
(53, 'NUSA TENGGARA TIMUR', 5303, 'KUPANG'),
(53, 'NUSA TENGGARA TIMUR', 5304, 'TIMOR TENGAH SELATAN'),
(53, 'NUSA TENGGARA TIMUR', 5305, 'TIMOR TENGAH UTARA'),
(53, 'NUSA TENGGARA TIMUR', 5306, 'BELU'),
(53, 'NUSA TENGGARA TIMUR', 5307, 'ALOR'),
(53, 'NUSA TENGGARA TIMUR', 5308, 'LEMBATA'),
(53, 'NUSA TENGGARA TIMUR', 5309, 'FLORES TIMUR'),
(53, 'NUSA TENGGARA TIMUR', 5310, 'SIKKA'),
(53, 'NUSA TENGGARA TIMUR', 5311, 'ENDE'),
(53, 'NUSA TENGGARA TIMUR', 5312, 'NGADA'),
(53, 'NUSA TENGGARA TIMUR', 5313, 'MANGGARAI'),
(53, 'NUSA TENGGARA TIMUR', 5314, 'ROTE NDAO'),
(53, 'NUSA TENGGARA TIMUR', 5315, 'MANGGARAI BARAT'),
(53, 'NUSA TENGGARA TIMUR', 5316, 'SUMBA TENGAH'),
(53, 'NUSA TENGGARA TIMUR', 5317, 'SUMBA BARAT DAYA'),
(53, 'NUSA TENGGARA TIMUR', 5318, 'NAGEKEO'),
(53, 'NUSA TENGGARA TIMUR', 5319, 'MANGGARAI TIMUR'),
(53, 'NUSA TENGGARA TIMUR', 5320, 'SABU RAIJUA'),
(53, 'NUSA TENGGARA TIMUR', 5321, 'MALAKA'),
(53, 'NUSA TENGGARA TIMUR', 5371, 'KUPANG'),
(61, 'KALIMANTAN BARAT', 6101, 'SAMBAS'),
(61, 'KALIMANTAN BARAT', 6102, 'BENGKAYANG'),
(61, 'KALIMANTAN BARAT', 6103, 'LANDAK'),
(61, 'KALIMANTAN BARAT', 6104, 'PONTIANAK'),
(61, 'KALIMANTAN BARAT', 6105, 'SANGGAU'),
(61, 'KALIMANTAN BARAT', 6106, 'KETAPANG'),
(61, 'KALIMANTAN BARAT', 6107, 'SINTANG'),
(61, 'KALIMANTAN BARAT', 6108, 'KAPUAS HULU'),
(61, 'KALIMANTAN BARAT', 6109, 'SEKADAU'),
(61, 'KALIMANTAN BARAT', 6110, 'MELAWI'),
(61, 'KALIMANTAN BARAT', 6111, 'KAYONG UTARA'),
(61, 'KALIMANTAN BARAT', 6112, 'KUBU RAYA'),
(61, 'KALIMANTAN BARAT', 6171, 'PONTIANAK'),
(61, 'KALIMANTAN BARAT', 6172, 'SINGKAWANG'),
(62, 'KALIMANTAN TENGAH', 6201, 'KOTAWARINGIN BARAT'),
(62, 'KALIMANTAN TENGAH', 6202, 'KOTAWARINGIN TIMUR'),
(62, 'KALIMANTAN TENGAH', 6203, 'KAPUAS'),
(62, 'KALIMANTAN TENGAH', 6204, 'BARITO SELATAN'),
(62, 'KALIMANTAN TENGAH', 6205, 'BARITO UTARA'),
(62, 'KALIMANTAN TENGAH', 6206, 'SUKAMARA'),
(62, 'KALIMANTAN TENGAH', 6207, 'LAMANDAU'),
(62, 'KALIMANTAN TENGAH', 6208, 'SERUYAN'),
(62, 'KALIMANTAN TENGAH', 6209, 'KATINGAN'),
(62, 'KALIMANTAN TENGAH', 6210, 'PULANG PISAU'),
(62, 'KALIMANTAN TENGAH', 6211, 'GUNUNG MAS'),
(62, 'KALIMANTAN TENGAH', 6212, 'BARITO TIMUR'),
(62, 'KALIMANTAN TENGAH', 6213, 'MURUNG RAYA'),
(62, 'KALIMANTAN TENGAH', 6271, 'PALANGKA RAYA'),
(63, 'KALIMANTAN SELATAN', 6301, 'TANAH LAUT'),
(63, 'KALIMANTAN SELATAN', 6302, 'KOTA BARU'),
(63, 'KALIMANTAN SELATAN', 6303, 'BANJAR'),
(63, 'KALIMANTAN SELATAN', 6304, 'BARITO KUALA'),
(63, 'KALIMANTAN SELATAN', 6305, 'TAPIN'),
(63, 'KALIMANTAN SELATAN', 6306, 'HULU SUNGAI SELATAN'),
(63, 'KALIMANTAN SELATAN', 6307, 'HULU SUNGAI TENGAH'),
(63, 'KALIMANTAN SELATAN', 6308, 'HULU SUNGAI UTARA'),
(63, 'KALIMANTAN SELATAN', 6309, 'TABALONG'),
(63, 'KALIMANTAN SELATAN', 6310, 'TANAH BUMBU'),
(63, 'KALIMANTAN SELATAN', 6311, 'BALANGAN'),
(63, 'KALIMANTAN SELATAN', 6371, 'BANJARMASIN'),
(63, 'KALIMANTAN SELATAN', 6372, 'BANJAR BARU'),
(64, 'KALIMANTAN TIMUR', 6401, 'PASER'),
(64, 'KALIMANTAN TIMUR', 6402, 'KUTAI BARAT'),
(64, 'KALIMANTAN TIMUR', 6403, 'KUTAI KARTANEGARA'),
(64, 'KALIMANTAN TIMUR', 6404, 'KUTAI TIMUR'),
(64, 'KALIMANTAN TIMUR', 6405, 'BERAU'),
(64, 'KALIMANTAN TIMUR', 6409, 'PENAJAM PASER UTARA'),
(64, 'KALIMANTAN TIMUR', 6411, 'MAHAKAM HULU'),
(64, 'KALIMANTAN TIMUR', 6471, 'BALIKPAPAN'),
(64, 'KALIMANTAN TIMUR', 6472, 'SAMARINDA'),
(64, 'KALIMANTAN TIMUR', 6474, 'BONTANG'),
(65, 'KALIMANTAN UTARA', 6501, 'MALINAU'),
(65, 'KALIMANTAN UTARA', 6502, 'BULUNGAN'),
(65, 'KALIMANTAN UTARA', 6503, 'TANA TIDUNG'),
(65, 'KALIMANTAN UTARA', 6504, 'NUNUKAN'),
(65, 'KALIMANTAN UTARA', 6571, 'TARAKAN'),
(71, 'SULAWESI UTARA', 7101, 'BOLAANG MONGONDOW'),
(71, 'SULAWESI UTARA', 7102, 'MINAHASA'),
(71, 'SULAWESI UTARA', 7103, 'KEPULAUAN SANGIHE'),
(71, 'SULAWESI UTARA', 7104, 'KEPULAUAN TALAUD'),
(71, 'SULAWESI UTARA', 7105, 'MINAHASA SELATAN'),
(71, 'SULAWESI UTARA', 7106, 'MINAHASA UTARA'),
(71, 'SULAWESI UTARA', 7107, 'BOLAANG MONGONDOW UTARA'),
(71, 'SULAWESI UTARA', 7108, 'SIAU TAGULANDANG BIARO'),
(71, 'SULAWESI UTARA', 7109, 'MINAHASA TENGGARA'),
(71, 'SULAWESI UTARA', 7110, 'BOLAANG MONGONDOW SELATAN'),
(71, 'SULAWESI UTARA', 7111, 'BOLAANG MONGONDOW TIMUR'),
(71, 'SULAWESI UTARA', 7171, 'MANADO'),
(71, 'SULAWESI UTARA', 7172, 'BITUNG'),
(71, 'SULAWESI UTARA', 7173, 'TOMOHON'),
(71, 'SULAWESI UTARA', 7174, 'KOTAMOBAGU'),
(72, 'SULAWESI TENGAH', 7201, 'BANGGAI KEPULAUAN'),
(72, 'SULAWESI TENGAH', 7202, 'BANGGAI'),
(72, 'SULAWESI TENGAH', 7203, 'MOROWALI'),
(72, 'SULAWESI TENGAH', 7204, 'POSO'),
(72, 'SULAWESI TENGAH', 7205, 'DONGGALA'),
(72, 'SULAWESI TENGAH', 7206, 'TOLI-TOLI'),
(72, 'SULAWESI TENGAH', 7207, 'BUOL'),
(72, 'SULAWESI TENGAH', 7208, 'PARIGI MOUTONG'),
(72, 'SULAWESI TENGAH', 7209, 'TOJO UNA-UNA'),
(72, 'SULAWESI TENGAH', 7210, 'SIGI'),
(72, 'SULAWESI TENGAH', 7211, 'BANGGAI LAUT'),
(72, 'SULAWESI TENGAH', 7212, 'MOROWALI UTARA'),
(72, 'SULAWESI TENGAH', 7271, 'PALU'),
(73, 'SULAWESI SELATAN', 7301, 'KEPULAUAN SELAYAR'),
(73, 'SULAWESI SELATAN', 7302, 'BULUKUMBA'),
(73, 'SULAWESI SELATAN', 7303, 'BANTAENG'),
(73, 'SULAWESI SELATAN', 7304, 'JENEPONTO'),
(73, 'SULAWESI SELATAN', 7305, 'TAKALAR'),
(73, 'SULAWESI SELATAN', 7306, 'GOWA'),
(73, 'SULAWESI SELATAN', 7307, 'SINJAI'),
(73, 'SULAWESI SELATAN', 7308, 'MAROS'),
(73, 'SULAWESI SELATAN', 7309, 'PANGKAJENE DAN KEPULAUAN'),
(73, 'SULAWESI SELATAN', 7310, 'BARRU'),
(73, 'SULAWESI SELATAN', 7311, 'BONE'),
(73, 'SULAWESI SELATAN', 7312, 'SOPPENG'),
(73, 'SULAWESI SELATAN', 7313, 'WAJO'),
(73, 'SULAWESI SELATAN', 7314, 'SIDENRENG RAPPANG'),
(73, 'SULAWESI SELATAN', 7315, 'PINRANG'),
(73, 'SULAWESI SELATAN', 7316, 'ENREKANG'),
(73, 'SULAWESI SELATAN', 7317, 'LUWU'),
(73, 'SULAWESI SELATAN', 7318, 'TANA TORAJA'),
(73, 'SULAWESI SELATAN', 7322, 'LUWU UTARA'),
(73, 'SULAWESI SELATAN', 7325, 'LUWU TIMUR'),
(73, 'SULAWESI SELATAN', 7326, 'TORAJA UTARA'),
(73, 'SULAWESI SELATAN', 7371, 'MAKASSAR'),
(73, 'SULAWESI SELATAN', 7372, 'PAREPARE'),
(73, 'SULAWESI SELATAN', 7373, 'PALOPO'),
(74, 'SULAWESI TENGGARA', 7401, 'BUTON'),
(74, 'SULAWESI TENGGARA', 7402, 'MUNA'),
(74, 'SULAWESI TENGGARA', 7403, 'KONAWE'),
(74, 'SULAWESI TENGGARA', 7404, 'KOLAKA'),
(74, 'SULAWESI TENGGARA', 7405, 'KONAWE SELATAN'),
(74, 'SULAWESI TENGGARA', 7406, 'BOMBANA'),
(74, 'SULAWESI TENGGARA', 7407, 'WAKATOBI'),
(74, 'SULAWESI TENGGARA', 7408, 'KOLAKA UTARA'),
(74, 'SULAWESI TENGGARA', 7409, 'BUTON UTARA'),
(74, 'SULAWESI TENGGARA', 7410, 'KONAWE UTARA'),
(74, 'SULAWESI TENGGARA', 7411, 'KOLAKA TIMUR'),
(74, 'SULAWESI TENGGARA', 7412, 'KONAWE KEPULAUAN'),
(74, 'SULAWESI TENGGARA', 7471, 'KENDARI'),
(74, 'SULAWESI TENGGARA', 7472, 'BAUBAU'),
(75, 'GORONTALO', 7501, 'BOALEMO'),
(75, 'GORONTALO', 7502, 'GORONTALO'),
(75, 'GORONTALO', 7503, 'POHUWATO'),
(75, 'GORONTALO', 7504, 'BONE BOLANGO'),
(75, 'GORONTALO', 7505, 'GORONTALO UTARA'),
(75, 'GORONTALO', 7571, 'GORONTALO'),
(76, 'SULAWESI BARAT', 7601, 'MAJENE'),
(76, 'SULAWESI BARAT', 7602, 'POLEWALI MANDAR'),
(76, 'SULAWESI BARAT', 7603, 'MAMASA'),
(76, 'SULAWESI BARAT', 7604, 'MAMUJU'),
(76, 'SULAWESI BARAT', 7605, 'MAMUJU UTARA'),
(76, 'SULAWESI BARAT', 7606, 'MAMUJU TENGAH'),
(81, 'MALUKU', 8101, 'MALUKU TENGGARA BARAT'),
(81, 'MALUKU', 8102, 'MALUKU TENGGARA'),
(81, 'MALUKU', 8103, 'MALUKU TENGAH'),
(81, 'MALUKU', 8104, 'BURU'),
(81, 'MALUKU', 8105, 'KEPULAUAN ARU'),
(81, 'MALUKU', 8106, 'SERAM BAGIAN BARAT'),
(81, 'MALUKU', 8107, 'SERAM BAGIAN TIMUR'),
(81, 'MALUKU', 8108, 'MALUKU BARAT DAYA'),
(81, 'MALUKU', 8109, 'BURU SELATAN'),
(81, 'MALUKU', 8171, 'AMBON'),
(81, 'MALUKU', 8172, 'TUAL'),
(82, 'MALUKU UTARA', 8201, 'HALMAHERA BARAT'),
(82, 'MALUKU UTARA', 8202, 'HALMAHERA TENGAH'),
(82, 'MALUKU UTARA', 8203, 'KEPULAUAN SULA'),
(82, 'MALUKU UTARA', 8204, 'HALMAHERA SELATAN'),
(82, 'MALUKU UTARA', 8205, 'HALMAHERA UTARA'),
(82, 'MALUKU UTARA', 8206, 'HALMAHERA TIMUR'),
(82, 'MALUKU UTARA', 8207, 'PULAU MOROTAI'),
(82, 'MALUKU UTARA', 8208, 'PULAU TALIABU'),
(82, 'MALUKU UTARA', 8271, 'TERNATE'),
(82, 'MALUKU UTARA', 8272, 'TIDORE KEPULAUAN'),
(91, 'PAPUA BARAT', 9101, 'FAKFAK'),
(91, 'PAPUA BARAT', 9102, 'KAIMANA'),
(91, 'PAPUA BARAT', 9103, 'TELUK WONDAMA'),
(91, 'PAPUA BARAT', 9104, 'TELUK BINTUNI'),
(91, 'PAPUA BARAT', 9105, 'MANOKWARI'),
(91, 'PAPUA BARAT', 9106, 'SORONG SELATAN'),
(91, 'PAPUA BARAT', 9107, 'SORONG'),
(91, 'PAPUA BARAT', 9108, 'RAJA AMPAT'),
(91, 'PAPUA BARAT', 9109, 'TAMBRAUW'),
(91, 'PAPUA BARAT', 9110, 'MAYBRAT'),
(91, 'PAPUA BARAT', 9111, 'MANOKWARI SELATAN'),
(91, 'PAPUA BARAT', 9112, 'PEGUNUNGAN ARFAK'),
(91, 'PAPUA BARAT', 9171, 'SORONG'),
(94, 'PAPUA', 9401, 'MERAUKE'),
(94, 'PAPUA', 9402, 'JAYAWIJAYA'),
(94, 'PAPUA', 9403, 'JAYAPURA'),
(94, 'PAPUA', 9404, 'NABIRE'),
(94, 'PAPUA', 9408, 'KEPULAUAN YAPEN'),
(94, 'PAPUA', 9409, 'BIAK NUMFOR'),
(94, 'PAPUA', 9410, 'PANIAI'),
(94, 'PAPUA', 9411, 'PUNCAK JAYA'),
(94, 'PAPUA', 9412, 'MIMIKA'),
(94, 'PAPUA', 9413, 'BOVEN DIGOEL'),
(94, 'PAPUA', 9414, 'MAPPI'),
(94, 'PAPUA', 9415, 'ASMAT'),
(94, 'PAPUA', 9416, 'YAHUKIMO'),
(94, 'PAPUA', 9417, 'PEGUNUNGAN BINTANG'),
(94, 'PAPUA', 9418, 'TOLIKARA'),
(94, 'PAPUA', 9419, 'SARMI'),
(94, 'PAPUA', 9420, 'KEEROM'),
(94, 'PAPUA', 9426, 'WAROPEN'),
(94, 'PAPUA', 9427, 'SUPIORI'),
(94, 'PAPUA', 9428, 'MAMBERAMO RAYA'),
(94, 'PAPUA', 9429, 'NDUGA'),
(94, 'PAPUA', 9430, 'LANNY JAYA'),
(94, 'PAPUA', 9431, 'MAMBERAMO TENGAH'),
(94, 'PAPUA', 9432, 'YALIMO'),
(94, 'PAPUA', 9433, 'PUNCAK'),
(94, 'PAPUA', 9434, 'DOGIYAI'),
(94, 'PAPUA', 9435, 'INTAN JAYA'),
(94, 'PAPUA', 9436, 'DEIYAI'),
(94, 'PAPUA', 9471, 'JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `master_prov`
--

CREATE TABLE IF NOT EXISTS `master_prov` (
  `kode_prov` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_prov`
--

INSERT INTO `master_prov` (`kode_prov`, `provinsi`) VALUES
(11, 'ACEH'),
(12, 'SUMATERA UTARA'),
(13, 'SUMATERA BARAT'),
(14, 'RIAU'),
(15, 'JAMBI'),
(16, 'SUMATERA SELATAN'),
(17, 'BENGKULU'),
(18, 'LAMPUNG'),
(19, 'KEPULAUAN BANGKA BELITUNG'),
(21, 'KEPULAUAN RIAU'),
(31, 'DKI JAKARTA'),
(32, 'JAWA BARAT'),
(33, 'JAWA TENGAH'),
(34, 'DI YOGYAKARTA'),
(35, 'JAWA TIMUR'),
(36, 'BANTEN'),
(51, 'BALI'),
(52, 'NUSA TENGGARA BARAT'),
(53, 'NUSA TENGGARA TIMUR'),
(61, 'KALIMANTAN BARAT'),
(62, 'KALIMANTAN TENGAH'),
(63, 'KALIMANTAN SELATAN'),
(64, 'KALIMANTAN TIMUR'),
(65, 'KALIMANTAN UTARA'),
(71, 'SULAWESI UTARA'),
(72, 'SULAWESI TENGAH'),
(73, 'SULAWESI SELATAN'),
(74, 'SULAWESI TENGGARA'),
(75, 'GORONTALO'),
(76, 'SULAWESI BARAT'),
(81, 'MALUKU'),
(82, 'MALUKU UTARA'),
(91, 'PAPUA BARAT'),
(94, 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE IF NOT EXISTS `tarif` (
`id` int(11) NOT NULL,
  `user_salon_id` int(11) NOT NULL,
  `layanan_id` int(11) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
`id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_pelanggan`
--

CREATE TABLE IF NOT EXISTS `user_pelanggan` (
`id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jeniskelamin_id` int(11) NOT NULL,
  `noTelp` varchar(14) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_pelanggan`
--

INSERT INTO `user_pelanggan` (`id`, `nama`, `password`, `email`, `jeniskelamin_id`, `noTelp`, `alamat`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1, '123456789012', ''),
(2, 'penyedia', 'penyedia', 'penyedia@gmail.com', 2, '123456789012', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_salon`
--

CREATE TABLE IF NOT EXISTS `user_salon` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenissalon_id` int(11) NOT NULL,
  `namasalon` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `jeniskelamin_id` int(11) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `noTelp` int(12) NOT NULL,
  `alamat` text NOT NULL,
  `pengalaman` text NOT NULL,
  `fotoKTP` varchar(100) NOT NULL,
  `kab_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwalavailable`
--
ALTER TABLE `jadwalavailable`
 ADD PRIMARY KEY (`id`), ADD KEY `salon_id` (`salon_id`), ADD KEY `hari_id` (`hari_id`);

--
-- Indexes for table `master_hari`
--
ALTER TABLE `master_hari`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jeniskelamin`
--
ALTER TABLE `master_jeniskelamin`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `master_jenislayanan`
--
ALTER TABLE `master_jenislayanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jenissalon`
--
ALTER TABLE `master_jenissalon`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kab`
--
ALTER TABLE `master_kab`
 ADD PRIMARY KEY (`kode_kab`), ADD UNIQUE KEY `kode_kab_2` (`kode_kab`), ADD KEY `kode_kab` (`kode_kab`), ADD KEY `kode_kab_3` (`kode_kab`), ADD KEY `kode_kab_4` (`kode_kab`), ADD KEY `kode_prov` (`kode_prov`), ADD KEY `kode_prov_2` (`kode_prov`);

--
-- Indexes for table `master_prov`
--
ALTER TABLE `master_prov`
 ADD PRIMARY KEY (`kode_prov`), ADD UNIQUE KEY `kode_prov` (`kode_prov`), ADD KEY `kode_prov_2` (`kode_prov`), ADD KEY `kode_prov_3` (`kode_prov`), ADD KEY `kode_prov_4` (`kode_prov`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
 ADD PRIMARY KEY (`id`), ADD KEY `user_salon_id` (`user_salon_id`), ADD KEY `layanan_id` (`layanan_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_pelanggan`
--
ALTER TABLE `user_pelanggan`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD KEY `id` (`id`), ADD KEY `jeniskelamin_id` (`jeniskelamin_id`);

--
-- Indexes for table `user_salon`
--
ALTER TABLE `user_salon`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD KEY `jeniskelamin_id` (`jeniskelamin_id`), ADD KEY `user_id` (`nama`), ADD KEY `jenissalon_id` (`jenissalon_id`), ADD KEY `kab_id` (`kab_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwalavailable`
--
ALTER TABLE `jadwalavailable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_hari`
--
ALTER TABLE `master_hari`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `master_jeniskelamin`
--
ALTER TABLE `master_jeniskelamin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_jenislayanan`
--
ALTER TABLE `master_jenislayanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_jenissalon`
--
ALTER TABLE `master_jenissalon`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_pelanggan`
--
ALTER TABLE `user_pelanggan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_salon`
--
ALTER TABLE `user_salon`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwalavailable`
--
ALTER TABLE `jadwalavailable`
ADD CONSTRAINT `jadwalavailable_ibfk_1` FOREIGN KEY (`salon_id`) REFERENCES `user_salon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `jadwalavailable_ibfk_2` FOREIGN KEY (`hari_id`) REFERENCES `master_hari` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `master_kab`
--
ALTER TABLE `master_kab`
ADD CONSTRAINT `master_kab_ibfk_1` FOREIGN KEY (`kode_prov`) REFERENCES `master_prov` (`kode_prov`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarif`
--
ALTER TABLE `tarif`
ADD CONSTRAINT `tarif_ibfk_1` FOREIGN KEY (`user_salon_id`) REFERENCES `user_salon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tarif_ibfk_2` FOREIGN KEY (`layanan_id`) REFERENCES `master_jenislayanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_pelanggan`
--
ALTER TABLE `user_pelanggan`
ADD CONSTRAINT `user_pelanggan_ibfk_1` FOREIGN KEY (`jeniskelamin_id`) REFERENCES `master_jeniskelamin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_salon`
--
ALTER TABLE `user_salon`
ADD CONSTRAINT `user_salon_ibfk_1` FOREIGN KEY (`jeniskelamin_id`) REFERENCES `master_jeniskelamin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `user_salon_ibfk_4` FOREIGN KEY (`jenissalon_id`) REFERENCES `master_jenissalon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `user_salon_ibfk_5` FOREIGN KEY (`kab_id`) REFERENCES `master_kab` (`kode_kab`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
