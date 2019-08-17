-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 05:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id_tamu` int(11) NOT NULL,
  `nama_tamu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawai_ditemui` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penilaian` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_opd` int(11) NOT NULL,
  `ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ditemui_css`
--

CREATE TABLE `ditemui_css` (
  `id_opd` int(11) NOT NULL,
  `id_session` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kop_css` int(11) NOT NULL,
  `kode_warna` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ditemui` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ditemui_css`
--

INSERT INTO `ditemui_css` (`id_opd`, `id_session`, `id_kop_css`, `kode_warna`, `nama_ditemui`) VALUES
(101, '', 1, '#ff5733', 'HERMAN TONI, SE. ME'),
(101, '', 2, '#117864 ', 'SATORIK, S.SOS'),
(101, '', 3, '#1a5276 ', 'SOFYAN SURIANTO, SE. MM'),
(101, '', 4, '#ffa500', 'JANTER HUTAGAOL, S.STP., MH'),
(101, '', 5, '#6a5acd', 'RIKA IRAMA YANTI, SE'),
(101, '', 6, '#3cb371', 'WELAWATI, SE'),
(101, '', 7, '#008B8B', 'HENDRI PUTRA, S.KOM'),
(101, '', 8, '#FF4500', 'TORI HARTATO, S.KOM, M.S.I'),
(101, '', 9, '#B0C4DE', 'SULISTIO GUSPAN, S.KOM'),
(101, '', 10, '#778899', 'SHERLY MARTHAYANTI, ST'),
(101, '', 11, '#000080', 'NOVENDRA EVENDI, SH');

-- --------------------------------------------------------

--
-- Table structure for table `keperluan_css`
--

CREATE TABLE `keperluan_css` (
  `id_opd` int(11) NOT NULL,
  `id_session` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kop_css` int(11) NOT NULL,
  `kode_warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keperluan_css`
--

INSERT INTO `keperluan_css` (`id_opd`, `id_session`, `id_kop_css`, `kode_warna`, `nama_keperluan`) VALUES
(101, '', 1, '#79a38f', 'RAPAT'),
(101, '', 2, '#ffbd33', 'KOORDINASI'),
(101, '', 3, '#90af00', 'SOSIALISASI'),
(101, '', 4, '#00af76', 'LAINNYA');

-- --------------------------------------------------------

--
-- Table structure for table `modul_pertanyaan`
--

CREATE TABLE `modul_pertanyaan` (
  `id_modul_pertanyaan` int(11) NOT NULL,
  `nama_modul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuisioner` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modul_user`
--

CREATE TABLE `modul_user` (
  `id_modul_user` int(11) NOT NULL,
  `id_session` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_modul_pertanyaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id_opd` int(11) NOT NULL,
  `nama_opd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latar_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latar_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `running_text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_tamu` enum('1','2','3','4','5','6','7','8','9','10') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id_opd`, `nama_opd`, `header_1`, `header_2`, `header_3`, `head_1`, `head_2`, `head_3`, `alamat`, `email`, `motion`, `logo_1`, `logo_2`, `logo_3`, `latar_1`, `latar_2`, `template`, `running_text`, `jumlah_tamu`) VALUES
(101, 'Dinas Komunikasi dan Informatika', 'PEMERINTAHAN KABUPATEN TANJUNG JABUNG TIMUR', 'DINAS KOMUNIKASI DAN INFORMATIKA', '', 'Dinas Komunikasi dan Informatika', 'Kabupaten Tanjung Jabung Timur', '', 'Komp. Perkantoran Bukit Menderang ', 'admin@tanjabtimkab.go.id', '<g>\r\n	<line fill=\"none\" x1=\"136.654\" y1=\"231.395\" x2=\"287.233\" y2=\"198.513\"/>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 140.3367 226.363)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">D</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 152.5945 223.6863)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">I</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 157.1847 222.6306)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">S</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 169.5623 219.9695)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">K</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 181.6252 216.9885)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">O</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 194.5266 213.9099)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">M</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 211.9495 209.9148)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">I</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 215.844 208.8171)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">N</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 229.599 205.9971)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">F</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 239.844 203.8171)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"39.6581\">O</text>\r\n\r\n		</g>\r\n		<g>\r\n			<line fill=\"none\" x1=\"146.574\" y1=\"189.775\" x2=\"205.712\" y2=\"176.861\"/>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 161.0001 183.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">I</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 164.0001 182.2001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">S</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 170.0001 181.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">I</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 178.0001 179.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">B</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 183.0001 178.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">U</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 189.0001 177.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">K</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 195.0001 176.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">U</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 206.0001 174.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">T</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 210.0001 173.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">A</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 216.0001 172.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">M</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 224.0001 170.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">U</text>\r\n		</g>\r\n		<g>\r\n			<line fill=\"none\" x1=\"213.236\" y1=\"234.207\" x2=\"272.375\" y2=\"221.292\"/>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 150.0001 249.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">T</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 154.0001 248.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">A</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 160.0001 247.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">N</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 167.0004 245.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">J</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 171.0001 244.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">U</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 176.7001 243.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">N</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 183.0001 242.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">G</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 191.0001 240.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">J</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 196.0001 239.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">A</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 202.0001 237.8001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">B</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 208.0001 236.5001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">U</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 214.0001 235.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">N</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 220.0001 234.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">G</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 228.0001 232.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">T</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 233.0001 230.5001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">I</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 236.0001 230.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">M</text>\r\n			<text transform=\"matrix(0.977 -0.2134 0 1 244.0001 228.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">U</text>\r\n			<text transform=\"matrix(0.977 -0.2133 0 1 250.0001 227.0001)\" font-family=\"\'Pathway Gothic One\'\" font-size=\"15.5752\" style=\"fill:white;\">R</text>\r\n		</g>', 'pemda.png', 'logo.png', 'logo.png', '2d-Wallpapers-022.jpg', 'wH7d227q091yklOAGxlloiTZRRya4MOeOZUcNWOd.gif', '', 'Selamat Datang Di Dinas Komunikasi dan Informatika Kabupaten Tanjung Jabung Timur', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_1`
--

CREATE TABLE `tbl_1` (
  `id_tamu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 NOT NULL,
  `instansi` text CHARACTER SET utf8 NOT NULL,
  `alamat` text CHARACTER SET utf8 NOT NULL,
  `nohp` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `keperluan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` text CHARACTER SET utf8 NOT NULL,
  `penilaian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(2) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamkeluar` time NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_1`
--

INSERT INTO `tbl_1` (`id_tamu`, `nama`, `instansi`, `alamat`, `nohp`, `email`, `keperluan`, `pegawai`, `saran`, `penilaian`, `status`, `jammasuk`, `jamkeluar`, `tanggal`, `foto`, `ip`) VALUES
('5d478ff33c177', 'DEWI', 'TIM PENILAI PHBS', 'JAMBI', '082280664089', '', 'LAINNYA', 'HERMAN TONI, SE. ME', 'MANTAP TINGKATKAN PRILAKU HIDUP SEHAT', 'Iya', 1, '09:09:55', '00:00:00', '2019-08-05', '5d479c0bd7478.jpg', '172.16.29.16'),
('5d570c7548137', 'MUH. RAMADHAN', 'DEMO', 'DEMO', '082191272636', 'DEMO', 'LAINNYA', 'TORI HARTATO, S.KOM, M.S.I', 'INI DEMO BUKU TAMU', 'Iya', 1, '03:05:09', '00:00:00', '2019-08-17', '5d570c81a023f.jpg', '172.16.32.70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_opd` int(11) NOT NULL,
  `nama_opd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengguna` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kata_sandi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('1','2','3','4','5','6','7','8','9','10') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_opd`, `nama_opd`, `nama_pengguna`, `kata_sandi`, `level`) VALUES
(1, 'Dinas Komunikasi dan Informatika', 'kominfo', '202cb962ac59075b964b07152d234b70', '1'),
(2, '2', '2', '202cb962ac59075b964b07152d234b70', '2'),
(3, '3', '3', '202cb962ac59075b964b07152d234b70', '3'),
(4, '4', '4', '202cb962ac59075b964b07152d234b70', '4'),
(5, '5', '5', '202cb962ac59075b964b07152d234b70', '5'),
(6, '6', '6', '202cb962ac59075b964b07152d234b70', '6'),
(7, '7', '7', '202cb962ac59075b964b07152d234b70', '7'),
(8, '8', '8', '202cb962ac59075b964b07152d234b70', '8'),
(9, '9', '9', '202cb962ac59075b964b07152d234b70', '9'),
(10, '10', '10', '202cb962ac59075b964b07152d234b70', '10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_session` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_opd` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_session`, `id_opd`, `username`, `password`, `level`, `jabatan`, `aktif`, `tgl_register`) VALUES
('1', 101, 'admin', '202cb962ac59075b964b07152d234b70', 'admin', 'administrator', 'Y', '2019-07-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `ditemui_css`
--
ALTER TABLE `ditemui_css`
  ADD PRIMARY KEY (`id_kop_css`);

--
-- Indexes for table `keperluan_css`
--
ALTER TABLE `keperluan_css`
  ADD PRIMARY KEY (`id_kop_css`);

--
-- Indexes for table `modul_pertanyaan`
--
ALTER TABLE `modul_pertanyaan`
  ADD PRIMARY KEY (`id_modul_pertanyaan`);

--
-- Indexes for table `modul_user`
--
ALTER TABLE `modul_user`
  ADD PRIMARY KEY (`id_modul_user`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `tbl_1`
--
ALTER TABLE `tbl_1`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_session`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modul_pertanyaan`
--
ALTER TABLE `modul_pertanyaan`
  MODIFY `id_modul_pertanyaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modul_user`
--
ALTER TABLE `modul_user`
  MODIFY `id_modul_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `id_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
