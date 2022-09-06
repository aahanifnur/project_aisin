-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 08:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `no_registrasi` int(11) NOT NULL,
  `nama_kontraktor` varchar(128) NOT NULL,
  `nama_pekerjaan` varchar(128) NOT NULL,
  `lokasi_pekerjaan` varchar(128) NOT NULL,
  `tanggal_bekerja` date NOT NULL,
  `perpanjangan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`no_registrasi`, `nama_kontraktor`, `nama_pekerjaan`, `lokasi_pekerjaan`, `tanggal_bekerja`, `perpanjangan`) VALUES
(1901, 'Sugiyono', 'HPW', 'WWT', '2022-09-12', '2022-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `apd`
--

CREATE TABLE `apd` (
  `id` int(11) NOT NULL,
  `nama_apd` varchar(128) NOT NULL,
  `jumlah_apd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apd`
--

INSERT INTO `apd` (`id`, `nama_apd`, `jumlah_apd`) VALUES
(1, 'helm', '12');

-- --------------------------------------------------------

--
-- Table structure for table `identifikasi_aspek`
--

CREATE TABLE `identifikasi_aspek` (
  `id` int(11) NOT NULL,
  `urutan_proses` text NOT NULL,
  `potensi_bahaya` text NOT NULL,
  `k3l` varchar(128) NOT NULL,
  `tindakan_pencegahan` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identifikasi_aspek`
--

INSERT INTO `identifikasi_aspek` (`id`, `urutan_proses`, `potensi_bahaya`, `k3l`, `tindakan_pencegahan`, `keterangan`) VALUES
(1, 'menyedu kopi', 'tumpah', 'L', 'lakukan penyeduhan di meja', 'harus di tengah meja');

-- --------------------------------------------------------

--
-- Table structure for table `nama_pekerja`
--

CREATE TABLE `nama_pekerja` (
  `id` int(11) NOT NULL,
  `nama_pekerja` varchar(128) NOT NULL,
  `training` varchar(128) NOT NULL,
  `id_card` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nama_pekerja`
--

INSERT INTO `nama_pekerja` (`id`, `nama_pekerja`, `training`, `id_card`) VALUES
(1, 'Shodiq', 'Ya', 'Ada'),
(2, 'Adhit', 'Ya', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `pemantauan`
--

CREATE TABLE `pemantauan` (
  `id` int(11) NOT NULL,
  `nama_pemantauan` varchar(128) NOT NULL,
  `kondisi_pemantauan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemantauan`
--

INSERT INTO `pemantauan` (`id`, `nama_pemantauan`, `kondisi_pemantauan`) VALUES
(1, 'tangga', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `pengawasan`
--

CREATE TABLE `pengawasan` (
  `id` int(11) NOT NULL,
  `user` varchar(128) NOT NULL,
  `p2k3l` varchar(128) NOT NULL,
  `safety` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengawasan`
--

INSERT INTO `pengawasan` (`id`, `user`, `p2k3l`, `safety`) VALUES
(1, 'reza', 'ayuk', 'embun');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `id` int(11) NOT NULL,
  `nama_peralatan` varchar(128) NOT NULL,
  `jumlah_peralatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`id`, `nama_peralatan`, `jumlah_peralatan`) VALUES
(1, 'Obeng', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_daya`
--

CREATE TABLE `sumber_daya` (
  `id` int(11) NOT NULL,
  `listrik` varchar(128) NOT NULL,
  `angin` varchar(128) NOT NULL,
  `air` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumber_daya`
--

INSERT INTO `sumber_daya` (`id`, `listrik`, `angin`, `air`) VALUES
(1, '1 Hari', '1 Hari', '-');

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
(1, 'Ahmad Auliya Hanif Nur', 'hanif24@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 4, 1, 1661993084);

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
(4, 'user');

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
  ADD PRIMARY KEY (`no_registrasi`);

--
-- Indexes for table `apd`
--
ALTER TABLE `apd`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengawasan`
--
ALTER TABLE `pengawasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumber_daya`
--
ALTER TABLE `sumber_daya`
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
-- AUTO_INCREMENT for table `apd`
--
ALTER TABLE `apd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `identifikasi_aspek`
--
ALTER TABLE `identifikasi_aspek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nama_pekerja`
--
ALTER TABLE `nama_pekerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemantauan`
--
ALTER TABLE `pemantauan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `sumber_daya`
--
ALTER TABLE `sumber_daya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
