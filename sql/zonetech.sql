-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2020 pada 05.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zonetech`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(30) NOT NULL,
  `pass_admin` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `job` int(10) NOT NULL,
  `kode` int(40) NOT NULL,
  `jumlah_post` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `coment`
--

CREATE TABLE `coment` (
  `id_coment` int(30) NOT NULL,
  `id_post` varchar(30) NOT NULL,
  `nama_komen` varchar(30) NOT NULL,
  `isi_comen` varchar(10000) NOT NULL,
  `id_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `pass_user` varchar(30) NOT NULL,
  `alamat_user` varchar(5000) NOT NULL,
  `id_komen_user` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `ttl` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `utama`
--

CREATE TABLE `utama` (
  `id_post` int(30) NOT NULL,
  `tgl_post` varchar(100) NOT NULL,
  `jenis_post` int(10) NOT NULL,
  `isi_post` varchar(10000) NOT NULL,
  `id_komen` varchar(20) NOT NULL,
  `id_admin` varchar(30) NOT NULL,
  `jmlh_comen` varchar(1000) NOT NULL,
  `id_gambar` varchar(1000) NOT NULL,
  `id_tumbinal` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id_coment`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `utama`
--
ALTER TABLE `utama`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `coment`
--
ALTER TABLE `coment`
  MODIFY `id_coment` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `utama`
--
ALTER TABLE `utama`
  MODIFY `id_post` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
