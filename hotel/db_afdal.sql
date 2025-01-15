-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2025 at 02:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anyahotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id_fasilitas` int NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES
(1, 'Free Wi-Fi', 'Akses internet nirkabel gratis di seluruh area hotel.'),
(2, 'Swimming Pool', 'Kolam renang dengan pemandangan indah, cocok untuk bersantai.'),
(3, '24/7 Room Service', 'Layanan kamar 24 jam untuk kenyamanan tamu.'),
(4, 'Fitness Center', 'Fasilitas gym lengkap dengan peralatan modern.'),
(5, 'Restaurant and Bar', 'Restoran dan bar dengan menu lezat dan minuman segar.');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `id_kamar` int NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `deskripsi` text,
  `harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`id_kamar`, `nama_kamar`, `deskripsi`, `harga`) VALUES
(1, 'Standar', 'Kamar standar dengan fasilitas dasar, cocok untuk perjalanan bisnis atau liburan singkat.', 500000.00),
(2, 'Delux', 'Kamar delux dengan fasilitas lebih lengkap, termasuk TV layar lebar dan mini bar.', 750000.00),
(3, 'Family', 'Kamar keluarga yang luas, cocok untuk menginap bersama keluarga atau kelompok.', 1200000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(50) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `nomor_identitas` varchar(50) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `durasi_menginap` int NOT NULL,
  `breakfast` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `nomor_identitas`, `tipe_kamar`, `harga`, `tanggal_pesan`, `durasi_menginap`, `breakfast`) VALUES
('1', 'John Doe', '1234567890', 'Standar', 500000.00, '2023-10-01', 3, 1),
('10', 'Ivy Taylor', '9900112233', 'Standar', 500000.00, '2023-10-10', 2, 0),
('123', 'halo semua', '097', 'Deluxe', 20000000.00, '2025-01-17', 3, 1),
('2', 'Jane Smith', '0987654321', 'Delux', 750000.00, '2023-10-02', 2, 0),
('3', 'Alice Johnson', '1122334455', 'Family', 1200000.00, '2023-10-03', 4, 1),
('4', 'Bob Brown', '5566778899', 'Standar', 500000.00, '2023-10-04', 1, 0),
('5', 'Charlie Davis', '9988776655', 'Delux', 750000.00, '2023-10-05', 5, 1),
('6', 'Eve White', '4433221100', 'Family', 1200000.00, '2023-10-06', 2, 0),
('7', 'Frank Wilson', '7788990011', 'Standar', 500000.00, '2023-10-07', 3, 1),
('8', 'Grace Lee', '3344556677', 'Delux', 750000.00, '2023-10-08', 4, 0),
('9', 'Henry Moore', '6677889900', 'Family', 1200000.00, '2023-10-09', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `id_fasilitas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `id_kamar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
