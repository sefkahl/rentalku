-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Nov 2026 pada 15.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_diskon`
--

CREATE TABLE `tbl_diskon` (
  `id` int(11) NOT NULL,
  `nama_diskon` varchar(100) NOT NULL,
  `persentase` int(11) NOT NULL,
  `minimal_hari` int(11) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_diskon`
--

INSERT INTO `tbl_diskon` (`id`, `nama_diskon`, `persentase`, `minimal_hari`, `status`) VALUES
(1, 'hemat 2 hari ', 5, 2, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `id` int(11) NOT NULL,
  `nama_merk` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_merk`
--

INSERT INTO `tbl_merk` (`id`, `nama_merk`, `status`) VALUES
(1, 'yamaha', 1),
(2, 'Mitsubishi', 1),
(3, 'Honda', 1),
(4, '	Daihatsu', 1),
(5, 'Suzuki', 1),
(6, 'BMW', 1),
(7, 'BYD', 1),
(8, '	Toyota', 1),
(9, 'Kawasaki', 1),
(14, 'Honda', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id` int(11) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `harga_sewa` decimal(12,2) NOT NULL,
  `transmisi` enum('Manual','Matic') NOT NULL,
  `penumpang` int(11) NOT NULL,
  `foto_mobil` varchar(200) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` enum('Tersedia','Disewa','Services') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id`, `nama_mobil`, `id_merk`, `no_plat`, `harga_sewa`, `transmisi`, `penumpang`, `foto_mobil`, `deskripsi`, `status`) VALUES
(1, 'avanza', 1, 'BK 5887 M', 37000.00, 'Manual', 4, '1793512071_images.jpg', '<p>Mobil nyaman dan aman</p>', 'Disewa'),
(2, 'Expander', 2, 'BK 5886 M', 450000.00, 'Matic', 6, '1793512030_images.jpg', '<p>aman</p>', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_motor`
--

CREATE TABLE `tbl_motor` (
  `id` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `nama_motor` varchar(100) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `harga_sewa` decimal(12,2) NOT NULL,
  `transmisi` enum('Manual','Matic') NOT NULL,
  `kapasitas_mesin` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `foto_motor` varchar(255) DEFAULT NULL,
  `status` enum('Tersedia','Disewa','Services') DEFAULT 'Tersedia',
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT 'Aktif',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama_lengkap`, `email`, `password`, `no_hp`, `alamat`, `foto`, `status`, `created_at`) VALUES
(1, 'sefka hulu', 'admin@gmail.com', '$2y$10$M.axArrQtKkxhnQjaxLEqOmYvfdnxV1q3uqZho25g21djyY0BqrWG', '0888888888', 'medan nias sibolga', '1793516156_4.jpg', 'Aktif', '2026-11-01 06:55:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` enum('Admin','Petugas') NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `role`, `password`) VALUES
(1, 'sefka', 'admin@gmail.com', 'Admin', '$2y$10$mPhoB/ZzheKn/y4pCBqkvevGR7.CSGiAG1BAcBM8OfZEVarqKTSaS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_diskon`
--
ALTER TABLE `tbl_diskon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_plat` (`no_plat`),
  ADD KEY `id_merk` (`id_merk`);

--
-- Indeks untuk tabel `tbl_motor`
--
ALTER TABLE `tbl_motor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_plat` (`no_plat`),
  ADD KEY `fk_motor_merk` (`id_merk`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_diskon`
--
ALTER TABLE `tbl_diskon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_merk`
--
ALTER TABLE `tbl_merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_motor`
--
ALTER TABLE `tbl_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD CONSTRAINT `fk_merk_mobil` FOREIGN KEY (`id_merk`) REFERENCES `tbl_merk` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_motor`
--
ALTER TABLE `tbl_motor`
  ADD CONSTRAINT `fk_motor_merk` FOREIGN KEY (`id_merk`) REFERENCES `tbl_merk` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
