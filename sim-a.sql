-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 06:52 AM
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
  `perpanjangan` date NOT NULL,
  `pic_user` varchar(128) NOT NULL,
  `dept_user` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`id`, `user_id`, `company`, `no_registrasi`, `nama_kontraktor`, `nama_pekerjaan`, `jenis_pekerjaan`, `lokasi_pekerjaan`, `dept_pekerjaan`, `tanggal_bekerja`, `perpanjangan`, `pic_user`, `dept_user`) VALUES
(12, 1, 'Polines', '9090', 'Mahasiswa', 'Belajar', 'TI', 'Kampus', 'Teknik Elektro', '2022-09-12', '2022-09-22', 'Hanif', 'Teknik'),
(24, 3, 'Aisin', '131290', 'Lenianti', 'Magang', 'TK', 'Office', 'Teknik Elektro', '2022-09-07', '2022-09-09', 'Leni', 'SII');

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
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(128) NOT NULL,
  `expaired` date NOT NULL,
  `statuspost` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `identifikasi_aspek`
--

CREATE TABLE `identifikasi_aspek` (
  `id` int(11) NOT NULL,
  `adm_id` int(128) NOT NULL,
  `urutan_proses` text NOT NULL,
  `potensi_bahaya` text NOT NULL,
  `k3l` varchar(128) NOT NULL,
  `tindakan_pencegahan` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identifikasi_aspek`
--

INSERT INTO `identifikasi_aspek` (`id`, `adm_id`, `urutan_proses`, `potensi_bahaya`, `k3l`, `tindakan_pencegahan`, `keterangan`) VALUES
(12, 12, 'ere', 'erel', 'K3', 'df', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id` int(11) NOT NULL,
  `adm_id` int(11) NOT NULL,
  `status_lampiran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id`, `adm_id`, `status_lampiran`) VALUES
(1, 12, 0),
(2, 12, 0);

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
(1, 'Ahmad Auliya Hanif Nur', 'hanif24@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 4, 1, 1661993084),
(3, 'Leni', 'leni123@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 3, 1, 2312333),
(23, 'Zaki', 'zaki@gmail.com', 'default.jpg', '$2y$10$sDnZgu0iwIEC76HcWc68t.RcmkqNd4N.ENzEHlSjtywB82CgYDkU.', 4, 1, 1);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identifikasi_aspek`
--
ALTER TABLE `identifikasi_aspek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ias_adm` (`adm_id`);

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lampiran_adm` (`adm_id`);

--
-- Indexes for table `nama_pekerja`
--
ALTER TABLE `nama_pekerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adm_sdm` (`adm_id`);

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
-- Indexes for table `sumber_daya`
--
ALTER TABLE `sumber_daya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sd_adm` (`adm_id`);

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
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `apd`
--
ALTER TABLE `apd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identifikasi_aspek`
--
ALTER TABLE `identifikasi_aspek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
-- Constraints for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD CONSTRAINT `amd_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `identifikasi_aspek`
--
ALTER TABLE `identifikasi_aspek`
  ADD CONSTRAINT `ias_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD CONSTRAINT `lampiran_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `nama_pekerja`
--
ALTER TABLE `nama_pekerja`
  ADD CONSTRAINT `adm_sdm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pemantauan`
--
ALTER TABLE `pemantauan`
  ADD CONSTRAINT `pemantauan_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pengawasan`
--
ALTER TABLE `pengawasan`
  ADD CONSTRAINT `pengawasan_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD CONSTRAINT `peralatan_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`);

--
-- Constraints for table `sumber_daya`
--
ALTER TABLE `sumber_daya`
  ADD CONSTRAINT `sd_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrasi` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
