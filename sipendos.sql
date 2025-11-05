-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2025 at 02:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwaldosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `users` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `status_aktif` tinyint(1) DEFAULT 1,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `id_log` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `aksi` enum('Login','Logout','Tambah','Edit','Hapus') NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `kode_dosen` varchar(20) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `status_dosen` enum('Dosen','Pejabat Struktural','Tenaga Kontrak','Asisten') DEFAULT 'Dosen',
  `status_aktif` tinyint(1) DEFAULT 1,
  `id_prodi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `kode_fakultas` enum('FBS', 'FBIO', 'FEB', 'FH', 'FISKOM', 'FID', 'FKIK', 'FKIP', 'FPSI', 'FSM', 'FTEK', 'FPB', 'FTI', 'FTEO') NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL,
  `status_aktif` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_ruangan` int(11) DEFAULT NULL,
  `id_tahun_ajaran` int(11) DEFAULT NULL,
  `id_semester` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `id_hari` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `id_dosen_1` int(11) DEFAULT NULL,
  `id_dosen_2` int(11) DEFAULT NULL,
  `id_dosen_3` int(11) DEFAULT NULL,
  `id_dosen_4` int(11) DEFAULT NULL,
  `bidang_minat` varchar(100) DEFAULT NULL,
  `status_jadwal` enum('Aktif','Pending','Revisi','Bentrok') DEFAULT 'Aktif',
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` varchar(30) NOT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL,
  `jumlah_mahasiswa` int(11) NOT NULL,
  `id_matakuliah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `sks_total` int(11) DEFAULT 0,
  `id_prodi` int(11) DEFAULT NULL,
  `status_aktif` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `jenjang` enum('D3','S1','S2','S3') DEFAULT 'S1',
  `id_fakultas` int(11) DEFAULT NULL,
  `status_aktif` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `kode_ruangan` varchar(10) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `nama_semester` enum('Gasal','Antara','Genap') NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `status_aktif` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_ruang`
--

CREATE TABLE `status_ruangan` (
  `id_status_ruangan` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_hari` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `status` enum('Terpakai','Kosong') DEFAULT 'Kosong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_mulai` year(4) NOT NULL,
  `tahun_selesai` year(4) NOT NULL,
  `status_aktif` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `fk_admin_log_admin` (`id_admin`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `kode_dosen` (`kode_dosen`),
  ADD KEY `fk_dosen_prodi` (`id_prodi`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `fk_jadwal_matakuliah` (`id_matakuliah`),
  ADD KEY `fk_jadwal_kelas` (`id_kelas`),
  ADD KEY `fk_jadwal_ruangan` (`id_ruangan`),
  ADD KEY `fk_jadwal_tahun` (`id_tahun_ajaran`),
  ADD KEY `fk_jadwal_semester` (`id_semester`),
  ADD KEY `fk_jadwal_prodi` (`id_prodi`),
  ADD KEY `fk_jadwal_hari` (`id_hari`),
  ADD KEY `fk_jadwal_dosen1` (`id_dosen_1`),
  ADD KEY `fk_jadwal_dosen2` (`id_dosen_2`),
  ADD KEY `fk_jadwal_dosen3` (`id_dosen_3`),
  ADD KEY `fk_jadwal_dosen4` (`id_dosen_4`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `fk_kelas_matakuliah` (`id_matakuliah`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`),
  ADD UNIQUE KEY `kode_matakuliah` (`kode_matakuliah`),
  ADD KEY `fk_matakuliah_prodi` (`id_prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `fk_prodi_fakultas` (`id_fakultas`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`),
  ADD UNIQUE KEY `kode_ruangan` (`kode_ruangan`),
  ADD KEY `fk_ruangan_fakultas` (`id_fakultas`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`),
  ADD KEY `fk_semester_tahun` (`id_tahun_ajaran`);

--
-- Indexes for table `status_ruang`
--
ALTER TABLE `status_ruangan`
  ADD PRIMARY KEY (`id_status_ruangan`),
  ADD KEY `fk_statusruang_jadwal` (`id_jadwal`),
  ADD KEY `fk_statusruang_ruangan` (`id_ruangan`),
  ADD KEY `fk_statusruang_hari` (`id_hari`),
  ADD KEY `fk_statusruang_dosen` (`id_dosen`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`),
  ADD UNIQUE KEY `tahun_mulai` (`tahun_mulai`,`tahun_selesai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_ruang`
--
ALTER TABLE `status_ruangan`
  MODIFY `id_status_ruangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD CONSTRAINT `fk_admin_log_admin` FOREIGN KEY (`id_admin`) REFERENCES `users` (`id_admin`) ON DELETE SET NULL;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `fk_dosen_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE SET NULL;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_jadwal_dosen1` FOREIGN KEY (`id_dosen_1`) REFERENCES `dosen` (`id_dosen`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jadwal_dosen2` FOREIGN KEY (`id_dosen_2`) REFERENCES `dosen` (`id_dosen`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jadwal_dosen3` FOREIGN KEY (`id_dosen_3`) REFERENCES `dosen` (`id_dosen`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jadwal_dosen4` FOREIGN KEY (`id_dosen_4`) REFERENCES `dosen` (`id_dosen`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jadwal_hari` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_jadwal_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_jadwal_matakuliah` FOREIGN KEY (`id_matakuliah`) REFERENCES `matakuliah` (`id_matakuliah`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_jadwal_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jadwal_ruangan` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jadwal_semester` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jadwal_tahun` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE SET NULL;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `fk_kelas_matakuliah` FOREIGN KEY (`id_matakuliah`) REFERENCES `matakuliah` (`id_matakuliah`) ON DELETE CASCADE;

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `fk_matakuliah_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE SET NULL;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `fk_prodi_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE SET NULL;

--
-- Constraints for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `fk_ruangan_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `fk_semester_tahun` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE;

--
-- Constraints for table `status_ruang`
--
ALTER TABLE `status_ruangan`
  ADD CONSTRAINT `fk_statusruang_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_statusruang_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_statusruang_hari` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_statusruang_ruangan` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
