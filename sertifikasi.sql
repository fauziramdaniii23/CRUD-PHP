-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2023 pada 07.52
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(5) NOT NULL,
  `kd_skema` varchar(8) NOT NULL,
  `Nm_peserta` varchar(20) NOT NULL,
  `Jekel` varchar(20) NOT NULL,
  `Alamat` varchar(225) NOT NULL,
  `No_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `kd_skema`, `Nm_peserta`, `Jekel`, `Alamat`, `No_hp`) VALUES
(4, 'SKM-0003', 'Imam', 'Laki-laki', 'cicalengka', '085634985763'),
(10, 'SKM-003', 'Dede', 'Laki-laki', 'Cicaheum', '082123458736'),
(12, 'SKM-001', 'Fauzi', 'Laki-laki', 'Tanjungsari', '085656837465'),
(13, 'SKM-003', 'Ardi', 'Laki-laki', 'Margacinta', '085643562354');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skema`
--

CREATE TABLE `skema` (
  `id` int(11) NOT NULL,
  `Kd_skema` varchar(8) NOT NULL,
  `Nm_skema` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `Jml_unit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skema`
--

INSERT INTO `skema` (`id`, `Kd_skema`, `Nm_skema`, `jenis`, `Jml_unit`) VALUES
(5, 'SKM-001', 'Junior Web Developer', 'KKNI', 7),
(6, 'SKM-002', 'Digital Marketing', 'klaster', 10),
(7, 'SKM-003', 'Desainer Multimedia Muda', 'KKNI', 10),
(8, 'SKM-004', 'Network Administrator Muda', 'KKNI', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `skema`
--
ALTER TABLE `skema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
