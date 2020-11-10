-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2020 pada 02.34
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_kedaikopi`
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
(33, 'guest@guest', '$2y$10$ScD3td4DhGk7jDoTm9edNegg0gemWef3bUvQSv7z24tmoIpB.4pda', '', '1', 1),
(45, 'admin@gmail.com', '$2y$10$zUZZKaf/RiAV9Lnx.u5wGeStAOSt0oErsloB0K1uSYvzkrHGq1lGq', 'Admin', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_alternatif` varchar(35) NOT NULL,
  `n_vektor_s` double NOT NULL,
  `n_vektor_v` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nm_alternatif`, `n_vektor_s`, `n_vektor_v`) VALUES
('al001', 'RotaryCoffee', 5.6442199792935, 0.2742020019565),
('al002', 'ReuniKopi', 6.0493251919663, 0.29388242914138),
('al003', 'Kopi100Kota', 4.7682018128051, 0.23164413995208),
('al004', 'PokokNgopi', 4.1224206697834, 0.20027142895004),
('al005', 'Hompimpa', 3.5294913783165, 0);

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
(19, 1, NULL, '2020-01-12', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `bobot` double NOT NULL,
  `sifat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `sifat`) VALUES
('kr001', 'Harga_Minuman', 20, 'cost'),
('kr002', 'Harga_Makanan_Berat', 20, 'cost'),
('kr003', 'Harga_Makanan_Ringan', 20, 'cost'),
('kr004', 'Fasilitas', 10, 'benefit'),
('kr005', 'Kebersihan', 10, 'benefit'),
('kr006', 'Keindahan', 10, 'benefit'),
('kr007', 'Popularitas', 10, 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id_kritiksaran` int(5) NOT NULL,
  `nama_kritiksaran` varchar(30) NOT NULL,
  `email_kritiksaran` varchar(30) NOT NULL,
  `pesan_kritiksaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritiksaran`
--

INSERT INTO `kritiksaran` (`id_kritiksaran`, `nama_kritiksaran`, `email_kritiksaran`, `pesan_kritiksaran`) VALUES
(1, 'asd', 'asd@asd', 'asd'),
(2, 'a', 'duni', 'cek'),
(3, 'laduni', 'dun@dun', 'kritik'),
(4, 'Duni', 'dun@dun', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(7) NOT NULL,
  `id_alternatif` varchar(7) NOT NULL,
  `id_kriteria` varchar(7) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(55, 'al001', 'kr001', 5),
(56, 'al001', 'kr002', 5),
(57, 'al001', 'kr003', 5),
(58, 'al001', 'kr004', 6),
(59, 'al001', 'kr005', 10),
(60, 'al001', 'kr006', 7),
(61, 'al001', 'kr007', 5),
(62, 'al002', 'kr001', 5),
(63, 'al002', 'kr002', 5),
(64, 'al002', 'kr003', 5),
(65, 'al002', 'kr004', 6),
(66, 'al002', 'kr005', 10),
(67, 'al002', 'kr006', 7),
(68, 'al002', 'kr007', 10),
(69, 'al003', 'kr001', 3),
(70, 'al003', 'kr002', 3),
(71, 'al003', 'kr003', 5),
(72, 'al003', 'kr004', 5),
(73, 'al003', 'kr005', 10),
(74, 'al003', 'kr006', 6),
(75, 'al003', 'kr007', 10),
(76, 'al004', 'kr001', 3),
(77, 'al004', 'kr002', 5),
(78, 'al004', 'kr003', 3),
(79, 'al004', 'kr004', 1),
(80, 'al004', 'kr005', 10),
(81, 'al004', 'kr006', 7),
(82, 'al004', 'kr007', 10),
(83, 'al005', 'kr001', 4),
(84, 'al005', 'kr002', 1),
(85, 'al005', 'kr003', 5),
(86, 'al005', 'kr004', 5),
(87, 'al005', 'kr005', 6),
(88, 'al005', 'kr006', 5),
(89, 'al005', 'kr007', 5);

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
(1, 'guest', 1, '1', '2009-01-01', '1', '1', 1, 1);

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
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

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
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id_kritiksaran`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

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
-- AUTO_INCREMENT untuk tabel `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id_kritiksaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
