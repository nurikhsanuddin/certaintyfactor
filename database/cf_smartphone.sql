-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2023 at 05:09 PM
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
-- Database: `cf_smartphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id` int NOT NULL,
  `id_aturan` int NOT NULL,
  `kerusakan` varchar(100) NOT NULL,
  `cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `id_aturan`, `kerusakan`, `cf`) VALUES
(1, 1, 'kerusakan_lcd', 0.8),
(2, 1, 'kerusakan_baterai', -0.3),
(3, 2, 'kerusakan_baterai', 0.7),
(4, 3, 'kerusakan_port_usb', 0.9),
(5, 3, 'kerusakan_baterai', -0.2),
(6, 4, 'kerusakan_tombol', 0.8),
(7, 5, 'kerusakan_audio', 0.6),
(8, 6, 'kerusakan_wifi', 0.7),
(9, 7, 'kerusakan_lcd', 0.7),
(10, 8, 'kerusakan_overheating', 0.8),
(11, 9, 'kerusakan_audio', 0.7),
(12, 10, 'kerusakan_software', 0.6),
(13, 11, 'kerusakan_audio', 0.5),
(14, 11, 'kerusakan_signal', 0.7),
(15, 12, 'kerusakan_sms', 0.6),
(16, 13, 'kerusakan_internet', 0.7),
(17, 14, 'kerusakan_kamera', 0.6),
(18, 15, 'kerusakan_audio', 0.6),
(19, 16, 'kerusakan_software', 0.7),
(20, 17, 'kerusakan_baterai', 0.8),
(21, 18, 'kerusakan_lcd', 0.7),
(22, 19, 'kerusakan_baterai', 0.7);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `no` int NOT NULL,
  `id` int NOT NULL,
  `nama_gejala` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`no`, `id`, `nama_gejala`) VALUES
(1, 1, 'Layar gelap'),
(2, 2, 'Baterai cepat habis'),
(3, 3, 'Tidak bisa mengisi daya'),
(4, 4, 'Tombol tidak berfungsi'),
(5, 5, 'Suara pecah/terputus'),
(6, 6, 'Tidak bisa terhubung ke Wi-Fi'),
(7, 7, 'Layar retak'),
(8, 8, 'Overheating'),
(9, 9, 'Tidak ada suara'),
(10, 10, 'Aplikasi crash'),
(11, 11, 'Tidak bisa menelpon'),
(12, 12, 'Tidak bisa menerima SMS'),
(13, 13, 'Tidak bisa mengakses internet'),
(14, 14, 'Kamera tidak berfungsi'),
(15, 15, 'Tidak bisa mendengar panggilan'),
(16, 16, 'Tidak bisa booting'),
(17, 17, 'Baterai menggembung'),
(18, 18, 'Layar berkedip'),
(19, 19, 'Suhu tinggi saat pengisian'),
(20, 20, 'matot'),
(21, 21, 'sss'),
(22, 22, 'sss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
