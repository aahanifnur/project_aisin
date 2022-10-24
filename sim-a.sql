-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 08:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim-a`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `id` int(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` varchar(128) NOT NULL,
  `no_registrasi` varchar(128) NOT NULL,
  `nama_kontraktor` varchar(128) NOT NULL,
  `nama_pekerjaan` varchar(128) NOT NULL,
  `jenis_pekerjaan` varchar(128) NOT NULL,
  `lokasi_pekerjaan` varchar(128) NOT NULL,
  `dept_pekerjaan` varchar(128) NOT NULL,
  `tanggal_bekerja` date NOT NULL,
  `akhir_bekerja` date NOT NULL,
  `perpanjangan` date DEFAULT NULL,
  `pic_user` varchar(128) NOT NULL,
  `dept_user` varchar(128) NOT NULL,
  `cp_mandor` varchar(255) NOT NULL,
  `adm_status` int(1) NOT NULL,
  `apv_kontraktor` int(1) NOT NULL,
  `nama_apv_kontraktor` varchar(128) NOT NULL,
  `ip_apv_kontraktor` int(25) NOT NULL,
  `date_apv_kontraktor` int(25) NOT NULL,
  `apv_mgruser` int(1) NOT NULL,
  `ip_apv_mgruser` int(25) NOT NULL,
  `date_apv_mgruser` int(25) NOT NULL,
  `apv_mgrarea` int(1) NOT NULL,
  `ip_apv_mgrarea` int(25) NOT NULL,
  `date_apv_mgrarea` int(25) NOT NULL,
  `apv_safety` int(1) NOT NULL,
  `ip_apv_safety` int(25) NOT NULL,
  `date_apv_safety` int(25) NOT NULL,
  `apv_p2k3l` int(1) NOT NULL,
  `ip_apv_p2k3l` int(25) NOT NULL,
  `date_apv_p2k3l` int(25) NOT NULL,
  `apv_gm` int(1) NOT NULL,
  `ip_apv_gm` int(25) NOT NULL,
  `date_apv_gm` int(25) NOT NULL,
  `apv_perpanjangan` int(1) NOT NULL,
  `ip_apv_perpanjangan` int(25) NOT NULL,
  `date_apv_perpanjangan` int(25) NOT NULL,
  `gbr_lisensi` varchar(128) NOT NULL,
  `name_apv_kontraktor_lk3` varchar(128) NOT NULL,
  `apv_kontraktor_lk3` int(1) NOT NULL,
  `ip_apv_kontraktor_lk3` int(25) NOT NULL,
  `date_apv_kontraktor_lk3` int(25) NOT NULL,
  `apv_administrasi` int(1) NOT NULL,
  `apv_kontraktor_jsa` int(1) NOT NULL,
  `apv_kontraktor_chklist` int(1) NOT NULL,
  `apv_kontraktor_lisensi` int(1) NOT NULL,
  `apv_kontraktor_cttn` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`id`, `user_id`, `company`, `no_registrasi`, `nama_kontraktor`, `nama_pekerjaan`, `jenis_pekerjaan`, `lokasi_pekerjaan`, `dept_pekerjaan`, `tanggal_bekerja`, `akhir_bekerja`, `perpanjangan`, `pic_user`, `dept_user`, `cp_mandor`, `adm_status`, `apv_kontraktor`, `nama_apv_kontraktor`, `ip_apv_kontraktor`, `date_apv_kontraktor`, `apv_mgruser`, `ip_apv_mgruser`, `date_apv_mgruser`, `apv_mgrarea`, `ip_apv_mgrarea`, `date_apv_mgrarea`, `apv_safety`, `ip_apv_safety`, `date_apv_safety`, `apv_p2k3l`, `ip_apv_p2k3l`, `date_apv_p2k3l`, `apv_gm`, `ip_apv_gm`, `date_apv_gm`, `apv_perpanjangan`, `ip_apv_perpanjangan`, `date_apv_perpanjangan`, `gbr_lisensi`, `name_apv_kontraktor_lk3`, `apv_kontraktor_lk3`, `ip_apv_kontraktor_lk3`, `date_apv_kontraktor_lk3`, `apv_administrasi`, `apv_kontraktor_jsa`, `apv_kontraktor_chklist`, `apv_kontraktor_lisensi`, `apv_kontraktor_cttn`) VALUES
(12, 1, 'Polines', '9090', 'Mahasiswa', 'Belajar', 'TI', 'Kampus', 'Teknik Elektro', '2022-09-12', '0000-00-00', '2022-09-22', 'Hanif', 'Teknik', '', 0, 1, '', 1270, 1666081330, 1, 1270, 1666081411, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 1, 1270, 1666081368, 0, 0, 0, 0, 0),
(24, 3, 'Aisin', '131290', 'Lenianti', 'Magang', 'TK', 'Office', 'Teknik Elektro', '2022-09-07', '0000-00-00', '2022-09-09', 'Leni', 'SII', '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0),
(48, 1, 'big mouse', '10923mnfm', 'chango', 'gangster', 'mengerikan', 'korea', 'dunia', '2022-09-05', '0000-00-00', '2022-09-23', 'hantu', 'tak tau', '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0),
(68, 1, 'dribbble', '', '', 'Taill', 'HPW', 'Loor', 'GAF', '2022-09-28', '2022-11-01', NULL, 'Lasem', 'Laili', '0894789378364', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0),
(77, 3, 'awdqwq', '', '', 'wqeewq', 'HPW', 'eqwwqe', 'GAF', '2022-10-06', '2022-10-28', NULL, 'qwe', 'qwe', 'wqe', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0),
(87, 1, 'sdfsdfssssssssssssssssssssssssssss', '', '', '', 'HPW', '', 'GAF', '0000-00-00', '0000-00-00', NULL, '', '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0),
(88, 23, 'hahahahhhihihi', '', '', '', 'HPW', '', 'GAF', '0000-00-00', '0000-00-00', NULL, '', '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0),
(89, 1, 'AISIN', '', '', 'Ngecat', 'HPW', 'mekw', 'GAF', '2022-09-29', '2022-11-02', NULL, '', '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `apd`
--

CREATE TABLE `apd` (
  `id` int(11) NOT NULL,
  `adm_id` int(128) NOT NULL,
  `nama_apd` varchar(128) NOT NULL,
  `jumlah_apd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apd`
--

INSERT INTO `apd` (`id`, `adm_id`, `nama_apd`, `jumlah_apd`) VALUES
(1, 12, 'Respirator', '6');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id` int(128) NOT NULL,
  `adm_id` int(128) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `identifikasi_aspek`
--

CREATE TABLE `identifikasi_aspek` (
  `id` int(11) NOT NULL,
  `attach_id` int(128) NOT NULL,
  `urutan_proses` text NOT NULL,
  `potensi_bahaya` text NOT NULL,
  `dampak` text NOT NULL,
  `k3l` varchar(128) NOT NULL,
  `tindakan_pencegahan` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nama_pekerja`
--

CREATE TABLE `nama_pekerja` (
  `id` int(11) NOT NULL,
  `adm_id` int(11) NOT NULL,
  `nama_pekerja` varchar(128) NOT NULL,
  `training` varchar(128) NOT NULL,
  `id_card` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nama_pekerja`
--

INSERT INTO `nama_pekerja` (`id`, `adm_id`, `nama_pekerja`, `training`, `id_card`) VALUES
(1, 12, 'Abdul', 'Ya', 'Ada'),
(2, 12, 'Halim', 'Ya', 'Ada'),
(3, 12, 'Arya', 'Ya', 'Ada'),
(4, 12, 'Zaki', 'Ya', 'Ada'),
(5, 68, 'svdvsvew', 'Ya', 'Ya'),
(6, 68, 'xvdsdfsdf', 'Tidak', 'Tidak'),
(7, 0, '', 'Ya', 'Ya'),
(8, 0, '', 'Ya', 'Ya'),
(9, 0, '', 'Ya', 'Ya'),
(10, 0, '', 'Ya', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `pemantauan`
--

CREATE TABLE `pemantauan` (
  `id` int(11) NOT NULL,
  `adm_id` int(128) NOT NULL,
  `nama_pemantauan` varchar(128) NOT NULL,
  `kondisi_pemantauan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemantauan`
--

INSERT INTO `pemantauan` (`id`, `adm_id`, `nama_pemantauan`, `kondisi_pemantauan`) VALUES
(1, 12, 'Tangga', 'OK'),
(2, 12, 'Linggis', 'OK'),
(9, 24, 'Harnest', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `pengawasan`
--

CREATE TABLE `pengawasan` (
  `id` int(11) NOT NULL,
  `adm_id` int(128) NOT NULL,
  `user` varchar(128) NOT NULL,
  `p2k3l` varchar(128) NOT NULL,
  `safety` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengawasan`
--

INSERT INTO `pengawasan` (`id`, `adm_id`, `user`, `p2k3l`, `safety`) VALUES
(1, 12, 'Angga Permana', 'Gangsar', 'Glen Maxinino');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `id` int(11) NOT NULL,
  `adm_id` int(128) NOT NULL,
  `nama_peralatan` varchar(128) NOT NULL,
  `jumlah_peralatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`id`, `adm_id`, `nama_peralatan`, `jumlah_peralatan`) VALUES
(1, 12, 'Deker', '5');

-- --------------------------------------------------------

--
-- Table structure for table `pernyataan`
--

CREATE TABLE `pernyataan` (
  `id` int(128) NOT NULL,
  `adm_id` int(128) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sumber_daya`
--

CREATE TABLE `sumber_daya` (
  `id` int(11) NOT NULL,
  `adm_id` int(128) NOT NULL,
  `listrik` varchar(128) NOT NULL,
  `angin` varchar(128) NOT NULL,
  `air` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumber_daya`
--

INSERT INTO `sumber_daya` (`id`, `adm_id`, `listrik`, `angin`, `air`) VALUES
(1, 12, '1 Hari', '12 Jam', '1 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_attach`
--

CREATE TABLE `tb_attach` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `desc` varchar(128) NOT NULL,
  `action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_attach`
--

INSERT INTO `tb_attach` (`id`, `code`, `desc`, `action`) VALUES
(1, 1, 'Pernyataaan Sosialisasi Kebijakan LK3 & Peraturan', 0),
(2, 2, 'Identifikasi Aspek dan Dampak LK3', 0),
(3, 3, 'Check List Aktivitas Pra-kerja', 0),
(4, 4, 'Lisensi K3 CS', 0),
(5, 5, 'Catatan Pekerjaan Khusus', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tt_attach`
--

CREATE TABLE `tt_attach` (
  `id` int(11) NOT NULL,
  `adm_id` int(11) NOT NULL,
  `attach_id` int(11) NOT NULL,
  `lisensi_file` varchar(128) NOT NULL,
  `nama_apv_kontraktor` varchar(128) NOT NULL,
  `apv_kontraktor` int(1) NOT NULL,
  `ip_apv_kontraktor` int(11) NOT NULL,
  `date_apv_kontraktor` int(11) NOT NULL,
  `nama_apv_user` varchar(128) NOT NULL,
  `apv_user` int(11) NOT NULL,
  `ip_apv_user` int(11) NOT NULL,
  `date_apv_user` int(11) NOT NULL,
  `name_apv_safety` varchar(128) NOT NULL,
  `apv_safety` int(1) NOT NULL,
  `ip_apv_safety` int(11) NOT NULL,
  `date_apv_safety` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tt_attach`
--

INSERT INTO `tt_attach` (`id`, `adm_id`, `attach_id`, `lisensi_file`, `nama_apv_kontraktor`, `apv_kontraktor`, `ip_apv_kontraktor`, `date_apv_kontraktor`, `nama_apv_user`, `apv_user`, `ip_apv_user`, `date_apv_user`, `name_apv_safety`, `apv_safety`, `ip_apv_safety`, `date_apv_safety`) VALUES
(8, 12, 0, 'ig_ldk.jpeg', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0),
(9, 0, 0, 'bukti_ahmadauliyahanifnur.jpeg', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tt_lk3`
--

CREATE TABLE `tt_lk3` (
  `id` int(11) NOT NULL,
  `id_adm` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `created_date` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `flag_man` int(1) NOT NULL,
  `user_man` int(11) NOT NULL,
  `user_ip` int(11) NOT NULL,
  `date_man` int(11) NOT NULL,
  `time_man` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Ahmad Auliya Hanif Nur', 'hanif24@gmail.com', 'hanif.png', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 4, 1, 1661993084),
(3, 'Leni', 'leni123@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 4, 1, 2312333),
(4, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 1, 1, 123131),
(23, 'Zaki', 'zaki@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 4, 1, 1),
(24, 'p2k3l', 'p2k3l@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 2, 1, 3212321),
(25, 'gm', 'gm@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 3, 1, 325263),
(26, 'mgr_user', 'user@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 5, 1, 3463622),
(27, 'mgr_area', 'area@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 6, 1, 345252),
(28, 'siska', 'siska@gmail.com', 'default.jpg', '$2y$10$MTL/yYOHVGXxNh0axF3EnuHBrF6bpqDcy7DJK.LZrvZC5sNnHutLu', 4, 1, 1664016750),
(29, 'test ya', 'test@gmail.com', 'default.jpg', '$2y$10$7W0Kuy7eVi6fPybsu/BAQutr2dVXeqdQa4WLXuAusgcf6XpmBNny2', 4, 1, 1664162074),
(30, 'zener', 'zener@gmail.com', 'default.jpg', '$2y$10$c2q3Y.4S4t381UMoIyIGMOcmRIVWu0UCZvdggMR2AtajrOzPlr5hO', 1, 1, 1664162142),
(31, 'halo', 'halo@gmail.com', 'default.jpg', '$2y$10$z1bZE0U4QIUA9MfSROrPLeCVaC4S2y/trWb2JLEYPKOgZ0qKO2VT.', 1, 1, 1664162228),
(32, 'reza', 'reza@gmail.com', 'default.jpg', '$2y$10$BDw622uwYCwIhbhtfzyXCeHeuaxVpHjZGMcPIdi1RNS.byZIBmucS', 4, 1, 1664162393),
(33, 'loa', 'loa@yahoo.co.id', 'default.jpg', '$2y$10$JPATeo9g6PUvntHMrRhoPuTAgJ7AcniypRXrM8vyddu6vGk8i6zT.', 1, 1, 1664162466),
(34, 'kontrak', 'kontrak@gmail.com', 'default.jpg', '$2y$10$UVuXEFLlpvwkZPF6p1eGPuN6yQgdQGbpFd8c8XPHwrgd.CMXImgz6', 4, 1, 1664162613),
(35, 'sedffs', 'tetttt@gmail.com', 'default.jpg', '$2y$10$HTwUwLHeRPw3yjMS.jmiI.EvPCPNxFZZn2a6Euez0hG0hKJ3jN5kO', 3, 1, 1664162751),
(36, 'ura', 'ura@gmail.com', 'default.jpg', '$2y$10$4MWevqaa5P1xrX.u5HHLIedDwNQda9z.37McLeQf67LKZKkMFdP0i', 1, 0, 1664165570),
(37, 'aisyya', 'dot@kom.com', 'default.jpg', '$2y$10$dUnY.gLrYfCr190ZbdwcF.7Jxy.HRu9pKVxgSbjOSnxqbbniDYLOy', 3, 0, 1664258120),
(38, 'tanggal10', '10@gmial.com', 'default.jpg', '$2y$10$q6HSZexRIwKOdok9A0hxoODubTKImkvqIBCZQUJDmnrCPvCqVomqK', 4, 1, 1665369202),
(39, 'ayuks', 'yosh@gmail.com', 'default.jpg', '$2y$10$pFrQ1M1MnUHiqbMFJHxSKOEbWeEpxlWVpeN9ZNavNqu31fusQb8Fe', 4, 1, 1665449614);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'p2k3l'),
(3, 'gm'),
(4, 'user'),
(5, 'mgr_user'),
(6, 'mgr_area');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amd_user` (`user_id`);

--
-- Indexes for table `apd`
--
ALTER TABLE `apd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apd_adm` (`adm_id`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identifikasi_aspek`
--
ALTER TABLE `identifikasi_aspek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_pekerja`
--
ALTER TABLE `nama_pekerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemantauan`
--
ALTER TABLE `pemantauan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemantauan_adm` (`adm_id`);

--
-- Indexes for table `pengawasan`
--
ALTER TABLE `pengawasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengawasan_adm` (`adm_id`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peralatan_adm` (`adm_id`);

--
-- Indexes for table `pernyataan`
--
ALTER TABLE `pernyataan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumber_daya`
--
ALTER TABLE `sumber_daya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sd_adm` (`adm_id`);

--
-- Indexes for table `tb_attach`
--
ALTER TABLE `tb_attach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_attach`
--
ALTER TABLE `tt_attach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `apd`
--
ALTER TABLE `apd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identifikasi_aspek`
--
ALTER TABLE `identifikasi_aspek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `nama_pekerja`
--
ALTER TABLE `nama_pekerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemantauan`
--
ALTER TABLE `pemantauan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengawasan`
--
ALTER TABLE `pengawasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pernyataan`
--
ALTER TABLE `pernyataan`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sumber_daya`
--
ALTER TABLE `sumber_daya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_attach`
--
ALTER TABLE `tb_attach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tt_attach`
--
ALTER TABLE `tt_attach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apd`
--
ALTER TABLE `apd`
  ADD CONSTRAINT `apd_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `sumber_daya`
--
ALTER TABLE `sumber_daya`
  ADD CONSTRAINT `sd_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
