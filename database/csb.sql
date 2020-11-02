-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2020 pada 14.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `role_user` varchar(255) DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`Id`, `email`, `password`, `nama_admin`, `role_user`, `id_user`) VALUES
(24, 'adaw@gmail.com', '$2y$10$532LSEr.yu9BBbamzMM3YuFcbFt9Qcm260tanaqYO.pgO.BOIfk3a', 'adaw', '0', NULL),
(25, 'ahmad@gmail.com', '$2y$10$tmYn7E6jXsNPCJlqSwN/9O68iYx6gCGPA7HDpxPeRCLgFvdog5SqO', '', '1', 13),
(27, 'hasanudin@gmail.com', '$2y$10$LXy0f5kLcWe99s2alFQmnuWnuiQE/x6UT/XH2IYeMdUdJGAlIy5D.', '', '1', 15),
(28, 'kisno@gmail.com', '$2y$10$v/IcVQSt4VwmQvy9airmLuE.R5PdDn/Ek4d73FM3xO6fpShIuTdN2', '', '1', 16),
(33, 'ratna@gmail.com', '$2y$10$ScD3td4DhGk7jDoTm9edNegg0gemWef3bUvQSv7z24tmoIpB.4pda', '', '1', 28),
(34, 'alviani@gmail.com', '$2y$10$rxF.jBrD6Gcqi9.dkt5GWO72m3eB16X0/KuE/hCxTthpCWALygmVK', '', '1', 29),
(35, 'muhamad@gmail.com', '$2y$10$X2Ks/bTKfiD88L/GwF/c2.KtHIui6Vs9gZMfE8ubY.gxW8GqNDASC', '', '1', 30),
(36, 'rasya@gmail.com', '$2y$10$P/0KGJ5/BHuMptkasgxqrOB96SHbzz6shJ9xkYMgmrYnuGPjPP2Be', '', '1', 31),
(37, 'ratu@gmail.com', '$2y$10$0kfMUP.hB6W4Z..HUCeayuaQ1303jM26/Z4sJFccHF7QRgLOb.HEK', '', '1', 32),
(38, 'rifqi@gmail.com', '$2y$10$0adS9BVjTCXle6MlbR4fDufDsS.1n1KJx5l7dEv0gVNhpuqgIVzTG', '', '1', 33),
(39, 'samsul@gmail.com', '$2y$10$Nuyw9MGUztNJAlLp.hOzdOZtHV2gtIGR9D.7xrlVRslHEMjsx9vTa', '', '1', 34),
(41, 'dedi@gmail.com', '$2y$10$U2sQAmz0.muy0n0eHfv0AORNKEMmM843O4HFqtg0ak4OqEBgvaFvy', '', '1', 36),
(42, 'sisca@gmail.com', '$2y$10$HyX1Gnj3S.hjAej35PNZGuFV/UgjWpubmFfg6zeGZ4UGBt82lVLBi', '', '1', 37),
(45, 'admin@gmail.com', '$2y$10$zUZZKaf/RiAV9Lnx.u5wGeStAOSt0oErsloB0K1uSYvzkrHGq1lGq', 'Admin', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(20) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `bobot` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `nama_kriteria`, `tipe`, `bobot`) VALUES
(1, 'Nilai Tes', 'profit', 50),
(2, 'Gaji Orang Tua', 'profit', 30),
(3, 'Jarak', 'profit', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pendaftaran`
--

CREATE TABLE `detail_pendaftaran` (
  `Id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `status_pendaftaran` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pendaftaran`
--

INSERT INTO `detail_pendaftaran` (`Id`, `id_user`, `id_admin`, `tanggal_daftar`, `status_pendaftaran`) VALUES
(11, 13, NULL, '2020-01-12', '0'),
(13, 15, NULL, '2020-01-12', '0'),
(14, 16, NULL, '2020-01-12', '0'),
(19, 28, NULL, '2020-01-12', '0'),
(20, 29, NULL, '2020-01-13', '0'),
(21, 30, NULL, '2020-01-13', '0'),
(22, 31, NULL, '2020-01-13', '0'),
(23, 32, NULL, '2020-01-13', '0'),
(24, 33, NULL, '2020-01-13', '0'),
(25, 34, NULL, '2020-01-13', '0'),
(27, 36, NULL, '2020-01-13', '0'),
(28, 37, NULL, '2020-01-13', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `no` int(20) NOT NULL,
  `nisn` int(20) NOT NULL,
  `nilai_tes` int(20) NOT NULL,
  `jarak` int(20) NOT NULL,
  `gaji` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`no`, `nisn`, `nilai_tes`, `jarak`, `gaji`) VALUES
(8, 1742689, 3, 1, 4),
(9, 2129322, 5, 1, 1),
(10, 2348598, 3, 5, 5),
(11, 2364889, 2, 3, 5),
(12, 2712934, 4, 1, 2),
(13, 2817329, 2, 5, 3),
(14, 4219302, 3, 4, 4),
(15, 6374823, 4, 1, 1),
(16, 7136549, 3, 2, 2),
(17, 9772347, 3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `Id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nisn` int(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `jarak` int(11) DEFAULT NULL,
  `gaji` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`Id`, `nama`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `jarak`, `gaji`) VALUES
(13, 'Ahmad', 2817329, 'Jakarta', '2008-08-11', 'L', 'Jl. Borobudur', 3, 5000000),
(15, 'Hasanudin', 2712934, 'Lampung', '2008-06-17', 'L', 'Jl. Bougenville', 17, 3600000),
(16, 'Kisno', 2129322, 'Jakarta', '2009-01-01', 'L', 'Jl. Mawar', 20, 2700000),
(28, 'Ratna', 2348598, 'Jakarta', '2009-01-01', 'P', 'Jl. Dosen', 2, 8500000),
(29, 'Alviani', 4219302, 'Depok', '2009-10-05', 'P', 'Jl. Merak', 6, 7500000),
(30, 'Muhamad', 7136549, 'Jakarta', '2009-08-14', 'L', 'Jl. Kenanga', 14, 4200000),
(31, 'Rasya', 1742689, 'Depok', '2008-02-12', 'P', 'Jl. Reformasi', 16, 6300000),
(32, 'Ratu', 6374823, 'Depok', '2008-03-18', 'P', 'Jl. Rinjani', 15, 2800000),
(33, 'Rifqi', 9772347, 'Depok', '2008-11-27', 'L', 'Jl. Desa runtuh', 13, 4300000),
(34, 'Samsul', 2364889, 'Bandung', '2008-09-07', 'L', 'Jl. Maruga', 8, 9000000),
(36, 'Dedi', 1676534, 'Depok', '2006-02-11', 'L', 'Jl. Kemuning', 3, 4500000),
(37, 'Sisca', 1821736, 'Bekasi', '2006-01-21', 'P', 'Jl. Merpati', 6, 5500000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pendaftaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD CONSTRAINT `detail_pendaftaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pendaftaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pendaftaran_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `akun` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
