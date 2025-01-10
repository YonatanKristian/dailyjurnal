-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 09:48 PM
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
-- Database: `webdailyjurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'ARTIKEL TERBARU', 'Dapatkan pembaruan tentang tren terbaru dalam teknologi, termasuk analisis mendalam tentang bahasa pemrograman, framework, dan alat yang sedang naik daun.', 'malin-strandvall-QGmkMsgbemI-unsplash.jpg', '2025-01-10 21:19:16', 'admin'),
(2, 'Tutorial dan Panduan', 'Temukan panduan praktis dan tutorial langkah-demi-langkah untuk membantu Anda menguasai keterampilan baru, baik untuk pemula maupun bagi yang sudah berpengalaman.', 'austin-distel-wD1LRb9OeEo-unsplash.jpg', '2025-01-10 21:19:16', 'admin'),
(3, 'Wawasan dan Opini', 'Baca artikel opini yang menggugah pemikiran tentang isu-isu terkini dalam dunia teknologi, dari etika kecerdasan buatan hingga dampak sosial dari digitalisasi.', 'helena-lopes-UZe35tk5UoA-unsplash.jpg', '2025-01-10 21:23:09', 'admin'),
(4, 'Project dan Pengalaman Pribadi', 'Ikuti perjalanan saya dalam mengerjakan proyek-proyek menarik dan tantangan yang dihadapi di lapangan, lengkap dengan pelajaran berharga yang bisa diambil.', 'mufid-majnun-ji0wcfoW7Zc-unsplash.jpg', '2025-01-10 21:23:58', 'admin'),
(5, 'Komunitas', 'Bergabunglah dengan diskusi dan interaksi di kolom komentar. Saya percaya bahwa setiap ide dan perspektif memiliki nilai, dan kolaborasi adalah kunci untuk berkembang.', 'hillary-ungson-TdpSX7XAcKo-unsplash.jpg', '2025-01-10 22:08:45', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `tanggal`, `username`) VALUES
(1, 'cody-scott-milewski-5JERurjLmrA-unsplash.jpg', '2025-01-10 22:48:08', 'admin'),
(3, 'freestocks-y0S2aew-vvE-unsplash.jpg', '2025-01-10 22:48:42', 'admin'),
(14, '20250111010312.jpg', '2025-01-11 01:03:12', 'admin'),
(15, '20250111011721.jpg', '2025-01-11 01:17:21', 'admin'),
(16, '20250111011732.jpg', '2025-01-11 01:17:32', 'admin'),
(17, '20250111011745.jpg', '2025-01-11 01:17:45', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`id`, `username`, `password`, `gambar`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user2`
--
ALTER TABLE `user2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
