-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2023 pada 22.03
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_baru`
--

CREATE TABLE `mahasiswa_baru` (
  `nim` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa_baru`
--

INSERT INTO `mahasiswa_baru` (`nim`, `nama`, `alamat`, `prodi`, `fakultas`) VALUES
(220490700, 'Acmad Iqbal', 'Jombang', 'Pendidikan Fisika', 'Ilmu Pendidikan'),
(220490808, 'Muhammad Kurniawan', 'Sidoarjo', 'Manajemen', 'Ekonomi'),
(220490810, 'Indah Lestari', 'Surabaya', 'Manajemen', 'Ekonomi'),
(220490860, 'Muhammad Syafaat', 'Surabaya', 'Pendidikan Biologi', 'Ilmu pendidikan'),
(220490868, 'Adit Firmansya', 'Surabaya', 'Agribisnis', 'Pertanian'),
(220490870, 'Serli Putri', 'Nganjuk', 'Bahasa Inggris', 'Ilmu Pendidikan'),
(220490877, 'Apriliah', 'Jombang', 'Pendidikan Matematika', 'Ilmu Pendidikan'),
(220490910, 'Muhammad Udin', 'Ngawi', 'Informatika', 'Teknologi Informasi'),
(220490912, 'Novan Agus', 'Jombang', 'Informatika', 'Teknologi Informasi'),
(220490945, 'Dinda', 'Jombang', 'Bahasa Arab', 'Agama Islam'),
(220490970, 'Amelia Putri', 'Surabaya', 'Bahasa Arab', 'agama Islam'),
(220490976, 'Putri Nabila', 'Jombang', 'Informatika', 'Teknologi Informasi'),
(220490990, 'Ahmad Nur', 'Sidoarjo', 'Bahasa Inggris', 'Ilmu Pendidikan'),
(220490998, 'Muhammad Ardiansyah', 'Surabaya', 'Sistem Informasi', 'Teknologi Informasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa_baru`
--
ALTER TABLE `mahasiswa_baru`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa_baru`
--
ALTER TABLE `mahasiswa_baru`
  MODIFY `nim` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
