-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2020 at 06:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akademik`
--

CREATE TABLE `tb_akademik` (
  `id_akademik` int(3) NOT NULL,
  `nama_akademik` varchar(50) NOT NULL,
  `kode_akademik` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detilmateri`
--

CREATE TABLE `tb_detilmateri` (
  `id_detilmateri` int(5) NOT NULL,
  `id_materi` int(4) NOT NULL,
  `nama_filemateri` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detiltugas`
--

CREATE TABLE `tb_detiltugas` (
  `id_detiltugas` int(6) NOT NULL,
  `id_tugas` int(5) NOT NULL,
  `soal_tugas` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detilujian`
--

CREATE TABLE `tb_detilujian` (
  `id_detilujian` int(5) NOT NULL,
  `id_ujian` int(4) NOT NULL,
  `soal_ujian` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawabanfile`
--

CREATE TABLE `tb_jawabanfile` (
  `id_jawabanfile` int(6) NOT NULL,
  `id_tugas` int(5) NOT NULL,
  `file_jawabantugas` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawabanpilgan_tugas`
--

CREATE TABLE `tb_jawabanpilgan_tugas` (
  `id_jawabanpilgan_tugas` int(7) NOT NULL,
  `id_pilgantugas` int(7) NOT NULL,
  `status_jawabantugas` int(1) NOT NULL,
  `id_terdidk` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawabanpilgan_ujian`
--

CREATE TABLE `tb_jawabanpilgan_ujian` (
  `id_jawabanpilgan_ujian` int(7) NOT NULL,
  `id_terdidik` int(4) NOT NULL,
  `id_pilganujian` int(6) NOT NULL,
  `status_jawabanujian` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawabantugas`
--

CREATE TABLE `tb_jawabantugas` (
  `id_jawabantugas` int(6) NOT NULL,
  `id_detiltugas` int(6) NOT NULL,
  `id_terdidik` int(4) NOT NULL,
  `isi_jawabantugas` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawabanujian`
--

CREATE TABLE `tb_jawabanujian` (
  `id_jawabanujian` int(6) NOT NULL,
  `id_detilujian` int(5) NOT NULL,
  `id_terdidik` int(4) NOT NULL,
  `isi_jawabanujian` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenissoal`
--

CREATE TABLE `tb_jenissoal` (
  `id_jenissoal` int(2) NOT NULL,
  `nama_jenissoal` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(2) NOT NULL,
  `nama_kelas` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'X IPA 1', '2020-05-12 14:37:51', '2020-05-12 16:53:37'),
(2, 'X IPA 2', '2020-05-12 14:37:51', '2020-05-12 14:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_koreksiesai_tugas`
--

CREATE TABLE `tb_koreksiesai_tugas` (
  `id_koreksiesai_tugas` int(7) NOT NULL,
  `id_jawabantugas` int(6) NOT NULL,
  `nilai_esaitugas` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_koreksiesai_ujian`
--

CREATE TABLE `tb_koreksiesai_ujian` (
  `id_koreksiesai_ujian` int(7) NOT NULL,
  `id_jawabanujian` int(6) NOT NULL,
  `nilai_esaiujian` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(4) NOT NULL,
  `nama_materi` varchar(45) NOT NULL,
  `isi_materi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilaitugas`
--

CREATE TABLE `tb_nilaitugas` (
  `id_nilaitugas` int(7) NOT NULL,
  `id_terdidik` int(4) NOT NULL,
  `id_tugas` int(5) NOT NULL,
  `nilai_tugas` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilaiujian`
--

CREATE TABLE `tb_nilaiujian` (
  `id_nilaiujian` int(7) NOT NULL,
  `id_terdidik` int(4) NOT NULL,
  `id_ujian` int(4) NOT NULL,
  `nilai_ujian` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidik`
--

CREATE TABLE `tb_pendidik` (
  `id_pendidik` int(2) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `nama_pendidik` varchar(60) NOT NULL,
  `email_pendidik` varchar(60) NOT NULL,
  `username_pendidik` int(12) NOT NULL,
  `password_pendidik` varchar(190) NOT NULL,
  `foto_pendidik` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilgantugas`
--

CREATE TABLE `tb_pilgantugas` (
  `id_pilgantugas` int(7) NOT NULL,
  `id_detiltugas` int(6) NOT NULL,
  `isi_pilgantugas` text NOT NULL,
  `kunci_pilgantugas` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilganujian`
--

CREATE TABLE `tb_pilganujian` (
  `id_pilganujian` int(6) NOT NULL,
  `id_detilujian` int(5) NOT NULL,
  `isi_pilganujian` text NOT NULL,
  `kunci_ujian` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_terdidik`
--

CREATE TABLE `tb_terdidik` (
  `id_terdidik` int(4) NOT NULL,
  `NIS` int(18) NOT NULL,
  `NISN` int(10) NOT NULL,
  `nama_terdidik` int(60) NOT NULL,
  `username_terdidik` int(15) NOT NULL,
  `password_terdidik` int(255) NOT NULL,
  `foto_terdidik` int(25) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(5) NOT NULL,
  `id_jenissoal` int(2) NOT NULL,
  `id_akademik` int(3) NOT NULL,
  `id_pendidik` int(2) NOT NULL,
  `id_materi` int(4) NOT NULL,
  `isi_tugas` text NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `waktu_pengerjaan` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian`
--

CREATE TABLE `tb_ujian` (
  `id_ujian` int(4) NOT NULL,
  `id_jenissoal` int(2) NOT NULL,
  `id_akademik` int(3) NOT NULL,
  `id_pendidik` int(2) NOT NULL,
  `id_materi` int(4) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `waktu_pengerjaan` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akademik`
--
ALTER TABLE `tb_akademik`
  ADD PRIMARY KEY (`id_akademik`);

--
-- Indexes for table `tb_detiltugas`
--
ALTER TABLE `tb_detiltugas`
  ADD PRIMARY KEY (`id_detiltugas`);

--
-- Indexes for table `tb_jawabanpilgan_tugas`
--
ALTER TABLE `tb_jawabanpilgan_tugas`
  ADD PRIMARY KEY (`id_jawabanpilgan_tugas`);

--
-- Indexes for table `tb_jawabanpilgan_ujian`
--
ALTER TABLE `tb_jawabanpilgan_ujian`
  ADD PRIMARY KEY (`id_jawabanpilgan_ujian`);

--
-- Indexes for table `tb_jawabantugas`
--
ALTER TABLE `tb_jawabantugas`
  ADD PRIMARY KEY (`id_jawabantugas`);

--
-- Indexes for table `tb_jawabanujian`
--
ALTER TABLE `tb_jawabanujian`
  ADD PRIMARY KEY (`id_jawabanujian`);

--
-- Indexes for table `tb_jenissoal`
--
ALTER TABLE `tb_jenissoal`
  ADD PRIMARY KEY (`id_jenissoal`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_koreksiesai_tugas`
--
ALTER TABLE `tb_koreksiesai_tugas`
  ADD PRIMARY KEY (`id_koreksiesai_tugas`);

--
-- Indexes for table `tb_koreksiesai_ujian`
--
ALTER TABLE `tb_koreksiesai_ujian`
  ADD PRIMARY KEY (`id_koreksiesai_ujian`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_nilaitugas`
--
ALTER TABLE `tb_nilaitugas`
  ADD PRIMARY KEY (`id_nilaitugas`);

--
-- Indexes for table `tb_nilaiujian`
--
ALTER TABLE `tb_nilaiujian`
  ADD PRIMARY KEY (`id_nilaiujian`);

--
-- Indexes for table `tb_pendidik`
--
ALTER TABLE `tb_pendidik`
  ADD PRIMARY KEY (`id_pendidik`);

--
-- Indexes for table `tb_terdidik`
--
ALTER TABLE `tb_terdidik`
  ADD PRIMARY KEY (`id_terdidik`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tb_ujian`
--
ALTER TABLE `tb_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akademik`
--
ALTER TABLE `tb_akademik`
  MODIFY `id_akademik` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detiltugas`
--
ALTER TABLE `tb_detiltugas`
  MODIFY `id_detiltugas` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jawabanpilgan_tugas`
--
ALTER TABLE `tb_jawabanpilgan_tugas`
  MODIFY `id_jawabanpilgan_tugas` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jawabanpilgan_ujian`
--
ALTER TABLE `tb_jawabanpilgan_ujian`
  MODIFY `id_jawabanpilgan_ujian` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jawabantugas`
--
ALTER TABLE `tb_jawabantugas`
  MODIFY `id_jawabantugas` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jawabanujian`
--
ALTER TABLE `tb_jawabanujian`
  MODIFY `id_jawabanujian` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jenissoal`
--
ALTER TABLE `tb_jenissoal`
  MODIFY `id_jenissoal` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_koreksiesai_tugas`
--
ALTER TABLE `tb_koreksiesai_tugas`
  MODIFY `id_koreksiesai_tugas` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_koreksiesai_ujian`
--
ALTER TABLE `tb_koreksiesai_ujian`
  MODIFY `id_koreksiesai_ujian` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nilaitugas`
--
ALTER TABLE `tb_nilaitugas`
  MODIFY `id_nilaitugas` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nilaiujian`
--
ALTER TABLE `tb_nilaiujian`
  MODIFY `id_nilaiujian` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pendidik`
--
ALTER TABLE `tb_pendidik`
  MODIFY `id_pendidik` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_terdidik`
--
ALTER TABLE `tb_terdidik`
  MODIFY `id_terdidik` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ujian`
--
ALTER TABLE `tb_ujian`
  MODIFY `id_ujian` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
