-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 01:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pramuka`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `email`, `instagram`, `telp`, `description`) VALUES
(1, 'pramuka.cilegon@domain.com', '@pramuka.cilegon', '182312312312312', '<p>Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about Ini about </p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `no_gudep` varchar(100) DEFAULT NULL,
  `pangkalan` varchar(50) DEFAULT NULL,
  `kwarcab` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `golongan` varchar(100) DEFAULT NULL,
  `tingkatan_gudep` varchar(50) DEFAULT NULL,
  `tingkatan_saka` varchar(50) DEFAULT NULL,
  `penghargaan` varchar(50) DEFAULT NULL,
  `kursus_pembina` varchar(100) DEFAULT NULL,
  `no_sk` text DEFAULT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `wilayah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `no_gudep`, `pangkalan`, `kwarcab`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `golongan`, `tingkatan_gudep`, `tingkatan_saka`, `penghargaan`, `kursus_pembina`, `no_sk`, `jabatan`, `wilayah`) VALUES
(41, 'Muhammad', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Riyan', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'oskar pra', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Abiyu', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Hanaan Aulita', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Ini percobaan registasi', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `seo_judul` varchar(255) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `editor` varchar(50) DEFAULT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `featured` char(1) DEFAULT NULL,
  `choice` char(1) DEFAULT NULL,
  `thread` char(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `seo_judul`, `penulis`, `editor`, `isi`, `foto`, `date`, `status`, `featured`, `choice`, `thread`, `user_id`, `kategori_id`) VALUES
(8, 'Tes Berita', 'tes-berita', 'Administrator', 'pusinfo', '<p>tes berita az</p>\r\n', 'Tes_Berita-220907-5e96263f54.jpeg', '2022-09-07', '1', 'Y', 'N', 'N', 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `slug`) VALUES
(1, 'GUDEP', 'gudep'),
(2, 'SAKA', 'saka'),
(3, 'KWARAN', 'kwaran'),
(4, 'KWARCAB', 'kwarcab');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `judul_kegiatan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `wilayah_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `judul_kegiatan`, `deskripsi`, `lampiran`, `date`, `user_id`, `wilayah_id`) VALUES
(4, 'Tes kegiatan ', 'Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan ', 'Tes kegiatan 220809-ac52970384', '2022-08-09', 10, 1),
(5, 'Tes kegiatan ', 'Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan Tes kegiatan ', '37_ PENGUMUMAN BATCH 2- 2022(1).pdf', '2022-08-09', 10, 1),
(6, 'kegiatan 2 ', 'kegiatan 2 kegiatan 2 kegiatan 2 kegiatan 2 ', 'kegiatan_2_220809-7d90d68924.pdf', '2022-07-01', 10, 1),
(7, 'kegiatan 3 ', 'kegiatan 3 kegiatan 3 kegiatan 3 kegiatan 3 kegiatan 3 kegiatan 3 kegiatan 3 kegiatan 3 kegiatan 3 kegiatan 3 ', 'kegiatan_3_220809-4dca5c4265.pdf', '2022-08-09', 10, 1),
(8, 'asddas', 'asdasdasdads', 'asddas220812-11a52d1c16.rar', '2022-08-12', 10, 1),
(9, 'Tes kegiatan ', 'poihudfs', 'Tes_kegiatan_220812-2548943839.xlsx', '2022-08-12', 10, 1),
(10, 'Tes kegiatan ', 'asdasdasd', 'Tes_kegiatan_220819-560989b94f.png', '2022-08-19', 19, 2),
(11, 'Tes kegiatan ', 'asdasdasd', 'Tes_kegiatan_220819-560989b94f.png', '2022-08-19', 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `potensi`
--

CREATE TABLE `potensi` (
  `id_potensi` int(11) NOT NULL,
  `nama_potensi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potensi`
--

INSERT INTO `potensi` (`id_potensi`, `nama_potensi`) VALUES
(1, 'Gudep'),
(2, 'Saka');

-- --------------------------------------------------------

--
-- Table structure for table `potensi_user`
--

CREATE TABLE `potensi_user` (
  `id_potuser` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `potensi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potensi_user`
--

INSERT INTO `potensi_user` (`id_potuser`, `user_id`, `potensi_id`) VALUES
(49, 56, 2),
(53, 54, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id_sosmed` int(11) NOT NULL,
  `nama_sosmed` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `nama_sosmed`, `icon`, `link`) VALUES
(1, 'Facebook', 'fa-facebook', 'https://facebook.com/cilegon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `potensi` varchar(20) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `wilayah` int(11) DEFAULT NULL,
  `anggota_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `foto`, `potensi`, `is_active`, `wilayah`, `anggota_id`) VALUES
(8, 'Administrator', 'admin', 'admin@admin.com', '1928391820381', 1, '$2y$10$46BAmEU.Ib6fphmVoqhnOudYSQljso4rR08PvD41gz5RspLt3OjKW', 'Administrator220821-1ea04f1466.png', NULL, 1, NULL, NULL),
(10, 'Admin Cilegon', 'cilegon', 'cilegon@admin.com', '19823712031', 2, '$2a$12$79VJp/Za58wCl7WiwiCC3erQzDFry5opQZPGoPE1hZqu6iIu9z222', 'user.png', 'gudep', 1, 1, NULL),
(19, 'Admin Pulomerak', 'pulomerak', 'pulomerak@pramuka.com', '08983789123', 2, '$2y$10$8zhhI9DV3SWJ9VX3AQZlP.kT3C8zDiA7m952r81CtT1ueEuxLeUsS', 'user.png', NULL, 1, 2, NULL),
(54, 'Muhammad', 'royyan', 'royyan@mail.com', '08564927318231', 3, '$2y$10$NRBTa2jTVvNERljoVIbf..gaSz4KvSg9bz5gqlG1nJA.53hbVdYSy', 'user.png', NULL, 1, 1, 41),
(55, 'Riyan Eka', 'riyan', 'royyanmz87@mail.com', '901231723123', 3, '$2y$10$VHqvfW5izLzyGGy8POEViuCApt9ZW4DoNTi4umJJqpL8y.AI4dBTK', 'user.png', NULL, 1, 2, 42),
(56, 'oskar pra', 'oskar', 'oskar@oskar.com', '12873189279381723', 3, '$2y$10$MCATmPhC4AGrzNQitarCQ.A1LxJynIp1/NWqSOsIgg2hSPhLGQn6W', 'user.png', NULL, 1, 1, 43),
(59, 'Hanaan Aulia Rachmat', 'hanaan', 'Hanaan@asdas.casdads', '01210381283', 3, '$2y$10$NRdf2pcPAoJlrx1VDcRTluflIjK6m0c9vV1y5T9BK2T8hp4HeBq6i', 'user.png', NULL, 1, 1, 45),
(60, 'Ini percobaan registasi', 'cobaRegis', 'regist@gmail.com', '19238901829300123', 3, '$2y$10$ZdxS3D.n3H4d49lxS.jwEOVXkUud04Wf6n865zscN7a9mnuyKRaBS', 'user.png', NULL, 0, 2, 46);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id_token`, `email`, `token`, `date_created`) VALUES
(20, 'royyanmz87@gmail.com', 'kNYpesBMW6RsCaKFRNVsRMnpvU7HvqDxaeuYWTNkJlU=', 1662976230),
(21, 'regist@gmail.com', 'UBMlNpPFJjqmrsBJn9oVfKoxQ9qS2X86IK8hFLr5x4A=', 1664106045);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`) VALUES
(1, 'Cilegon'),
(2, 'Pulomerak'),
(3, 'Ciwandan'),
(4, 'Cibeber'),
(5, 'Jombang'),
(6, 'Purwakarta'),
(7, 'Grogol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `wilayah` (`wilayah`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `wilayah_id` (`wilayah_id`);

--
-- Indexes for table `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id_potensi`);

--
-- Indexes for table `potensi_user`
--
ALTER TABLE `potensi_user`
  ADD PRIMARY KEY (`id_potuser`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `potensi_id` (`potensi_id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `wilayah` (`wilayah`),
  ADD KEY `anggota_id` (`anggota_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id_potensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potensi_user`
--
ALTER TABLE `potensi_user`
  MODIFY `id_potuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`wilayah`) REFERENCES `wilayah` (`id_wilayah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `potensi_user`
--
ALTER TABLE `potensi_user`
  ADD CONSTRAINT `potensi_user_ibfk_1` FOREIGN KEY (`potensi_id`) REFERENCES `potensi` (`id_potensi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `potensi_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`wilayah`) REFERENCES `wilayah` (`id_wilayah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
