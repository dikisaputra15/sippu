-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 03:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sippu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan`
--

CREATE TABLE `tb_permohonan` (
  `id_mohon` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat_perusahaan` varchar(200) NOT NULL,
  `bpjs_k` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `skdtu` varchar(300) NOT NULL,
  `siuk` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_permohonan`
--

INSERT INTO `tb_permohonan` (`id_mohon`, `id_user`, `npwp`, `nama_pemilik`, `nama_perusahaan`, `alamat_perusahaan`, `bpjs_k`, `foto`, `skdtu`, `siuk`, `status`) VALUES
(7, 1, '453453', 'diki', 'pt indorama', 'serang', 'acmt error.jpeg', 'bmlog.jpg', 'KK NANANG.pdf', 'INTRUKSI WALIKOTA.pdf', 'diterima'),
(8, 3, '1234567', 'arya', 'cv kembang', 'serang', 'botolminum.jpg', 'danau ranau.jpg', 'PANDUAN INSTALL APLIKASI ASESMEN 2020.pdf', 'kartu vaksin.pdf', 'diterima'),
(9, 4, '547474133', 'alex', 'cv kembang', 'serang', 'gb1.jpg', 'gb2.jpg', 'sely.pdf', '2198-Article Text-6299-1-10-20190226.pdf', 'diterima'),
(10, 4, '45678', 'dummy', 'dummy', 'shgfihsdkfd', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', 'surat terbit'),
(11, 4, '45678', 'dummy1', 'dummy1', 'shgfihsdkfd', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', 'surat terbit'),
(12, 4, '45678', 'dummy222', 'dummy222', 'shgfihsdkfd222', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '05. Soal UAS UTAMA Genap 20202021 TIN (S) 1.pdf', 'Sertifikat IKM Tw I 2021.pdf', 'surat terbit'),
(13, 4, '45678', 'dummy', 'dummy', 'shgfihsdkfd', '76c3465c-4d46-4e88-b5ff-38f8375ff057.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', 'Lap Penyelenggaraan Pengaduan TW1 2021.pdf', 'Lap Penyelenggaraan Pengaduan TW1 2021.pdf', 'surat terbit'),
(14, 4, '45678', 'dummy222222', 'dummy222222', '222222', '76c3465c-4d46-4e88-b5ff-38f8375ff057.jpg', '76c3465c-4d46-4e88-b5ff-38f8375ff057.jpg', '20210727104555604 (1).pdf', '17.06.336_dp (2).pdf', 'surat terbit'),
(15, 1, '1111111112', 'dummy11112', 'dummy11112', 'shgfihsdkfd1112', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', 'Lap Penyelenggaraan Pengaduan TW1 2021.pdf', 'Lap Evaluasi Pengaduan TW1 2021.pdf', 'surat terbit'),
(16, 1, '456783333333333', 'Herwin', 'Herwin Corp', 'Lebak', '76c3465c-4d46-4e88-b5ff-38f8375ff057.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', 'Lap Evaluasi Pengaduan TW1 2021.pdf', '17.06.336_dp.pdf', 'diterima'),
(17, 1, '45678', 'dummy', 'dummy', 'shgfihsdkfd', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', 'Lap Penyelenggaraan Pengaduan TW1 2021.pdf', 'Lap Penyelenggaraan Pengaduan TW1 2021.pdf', 'diterima'),
(18, 1, '45678111111111111111', 'dummy11111111111111111', 'dummy1111111111111111111', 'shgfihsdkfd11111111111111111', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', '55c8f16e-2661-42d9-a42d-c945e2c337af.jpg', 'Lap Penyelenggaraan Pengaduan TW1 2021.pdf', 'Lap Penyelenggaraan Pengaduan TW1 2021.pdf', 'surat terbit');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mohon` int(11) NOT NULL,
  `qr_code` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `id_user`, `id_mohon`, `qr_code`, `created_at`) VALUES
(2, 1, 7, '7.png', '2021-08-10 23:52:00'),
(3, 4, 9, '9.png', '2021-08-10 23:52:00'),
(4, 4, 12, '12.png', '2021-08-10 23:52:00'),
(5, 4, 10, '10.png', '2021-08-10 23:52:00'),
(6, 4, 13, '13.png', '2021-08-10 23:52:00'),
(7, 4, 11, '11.png', '2021-08-10 23:52:00'),
(8, 4, 14, '14.png', '2021-08-10 23:52:00'),
(9, 1, 15, '15.png', '2021-08-14 01:30:36'),
(10, 4, 10, '10.png', '2021-08-20 20:50:08'),
(11, 1, 18, '18.png', '2021-08-20 21:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(3, 'kadis', 'kadis@gmail.com', 'kadis', 'kadis'),
(4, 'herwin', 'herwin@gmail.com', 'herwin', 'pemohon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  ADD PRIMARY KEY (`id_mohon`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  MODIFY `id_mohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
