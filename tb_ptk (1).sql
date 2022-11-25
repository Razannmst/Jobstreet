-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 03:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportals2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ptk`
--

CREATE TABLE `tb_ptk` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_posisi` int(11) NOT NULL,
  `tgl_mengajukan` date NOT NULL,
  `jenis_pekerjaan` varchar(25) NOT NULL,
  `tgl_dibutuhkan` date NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `alasan_permintaan` enum('penambahan','pergantian') NOT NULL,
  `jumlah_sdm` int(11) NOT NULL,
  `kemampuan` text NOT NULL,
  `usia` int(11) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `status_pernikahan` varchar(25) NOT NULL,
  `pendidikan` text NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `file_tambahan` varchar(255) NOT NULL,
  `dll` text NOT NULL,
  `sts_ptk` int(11) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `kd_ptk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ptk`
--

INSERT INTO `tb_ptk` (`id`, `id_user`, `id_posisi`, `tgl_mengajukan`, `jenis_pekerjaan`, `tgl_dibutuhkan`, `id_divisi`, `id_golongan`, `alasan_permintaan`, `jumlah_sdm`, `kemampuan`, `usia`, `jk`, `status_pernikahan`, `pendidikan`, `pengalaman`, `file_tambahan`, `dll`, `sts_ptk`, `is_delete`, `kd_ptk`) VALUES
(1, 1, 1, '2022-11-01', 'Fulltime', '2022-11-30', 1, 3, 'penambahan', 1, 'kemampuan yang di butuhkan', 40, 'pria', 'menikah', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eaque facilis ipsa deserunt optio nulla, corrupti incidunt nisi iste dolorum veniam delectus alias necessitatibus aspernatur ducimus animi similique et! Nemo?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eaque facilis ipsa deserunt optio nulla, corrupti incidunt nisi iste dolorum veniam delectus alias necessitatibus aspernatur ducimus animi similique et! Nemo?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eaque facilis ipsa deserunt optio nulla, corrupti incidunt nisi iste dolorum veniam delectus alias necessitatibus aspernatur ducimus animi similique et! Nemo?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eaque facilis ipsa deserunt optio nulla, corrupti incidunt nisi iste dolorum veniam delectus alias necessitatibus aspernatur ducimus animi similique et! Nemo?', 1, 0, ''),
(2, 2, 2, '2022-11-01', 'Freelance', '2022-11-30', 1, 3, 'penambahan', 1, 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 20, 'pria', 'lajang', 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 2, 0, ''),
(3, 2, 3, '2022-11-02', 'fulltime', '2022-11-16', 1, 3, 'pergantian', 2, 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 25, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 'Etiam dictum viverra nulla, aliquet varius mauris varius in. In pharetra erat id diam tempor, quis sagittis erat tincidunt. Proin.', 3, 0, ''),
(9, 2, 2, '2022-11-01', 'fulltime', '2022-11-30', 8, 3, 'penambahan', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 20, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 1, 0, ''),
(10, 2, 1, '2022-11-02', 'freelance', '2022-11-16', 1, 2, 'pergantian', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 21, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 1, 0, ''),
(11, 2, 2, '2022-11-01', 'fulltime', '2022-11-30', 8, 3, 'penambahan', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 20, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 1, 0, ''),
(12, 2, 1, '2022-11-02', 'freelance', '2022-11-16', 1, 2, 'pergantian', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 21, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 1, 0, ''),
(13, 2, 2, '2022-11-01', 'fulltime', '2022-11-30', 8, 3, 'penambahan', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 20, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 2, 0, ''),
(14, 2, 1, '2022-11-02', 'freelance', '2022-11-16', 1, 2, 'pergantian', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 21, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 2, 0, ''),
(15, 2, 2, '2022-11-01', 'fulltime', '2022-11-30', 8, 3, 'penambahan', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 20, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 2, 0, ''),
(16, 2, 1, '2022-11-02', 'freelance', '2022-11-16', 1, 2, 'pergantian', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 21, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 2, 0, ''),
(17, 2, 2, '2022-11-01', 'fulltime', '2022-11-30', 8, 3, 'penambahan', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 20, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 3, 0, ''),
(18, 2, 1, '2022-11-02', 'freelance', '2022-11-16', 1, 2, 'pergantian', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 21, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 3, 0, ''),
(19, 2, 2, '2022-11-01', 'fulltime', '2022-11-30', 8, 3, 'penambahan', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 20, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 3, 0, ''),
(20, 2, 1, '2022-11-02', 'freelance', '2022-11-16', 1, 2, 'pergantian', 2, 'Etiam dictum viverra nulla, aliquet varius mauris ...', 21, 'pria', 'menikah', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 'Etiam dictum viverra nulla, aliquet varius mauris ...', 3, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ptk`
--
ALTER TABLE `tb_ptk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_level` (`id_golongan`),
  ADD KEY `id_posisi` (`id_posisi`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ptk`
--
ALTER TABLE `tb_ptk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_ptk`
--
ALTER TABLE `tb_ptk`
  ADD CONSTRAINT `tb_ptk_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `tb_divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ptk_ibfk_2` FOREIGN KEY (`id_golongan`) REFERENCES `tb_golongan` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ptk_ibfk_4` FOREIGN KEY (`id_posisi`) REFERENCES `tb_posisi` (`id_posisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ptk_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
