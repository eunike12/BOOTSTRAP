-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2025 at 08:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `pesan`, `created_at`) VALUES
(1, 'sasa', 'sasa@email.com', 'hai', '2025-10-20 06:36:36'),
(9, 'santi', 's@gmail.com', 'halo semuanya aku santi', '2025-10-21 06:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `statistik_minat`
--

CREATE TABLE `statistik_minat` (
  `id` int(11) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `presentase` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistik_minat`
--

INSERT INTO `statistik_minat` (`id`, `bidang`, `presentase`, `created_at`) VALUES
(11, 'Otomasi', 90, '2025-10-21 02:44:00'),
(12, 'IoT', 88, '2025-10-21 02:44:00'),
(13, 'Embedded System', 85, '2025-10-21 03:07:04'),
(14, 'AI', 80, '2025-10-21 03:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_saya`
--

CREATE TABLE `tentang_saya` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `paragraf1` text NOT NULL,
  `paragraf2` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tentang_saya`
--

INSERT INTO `tentang_saya` (`id`, `judul`, `paragraf1`, `paragraf2`, `gambar`) VALUES
(2, 'Engineering Tomorrow: Mastering Mechatronics & Smart Systems', 'Sebagai seorang mahasiswa Mekatronika yang passionate, saya memiliki keahlian dalam merancang dan mengintegrasikan sistem yang menggabungkan tiga disiplin ilmu utama: mekanika presisi, elektronika cerdas, dan pemrograman terkini. Saya tidak hanya memahami teori, tetapi juga mampu menerapkannya dalam menciptakan solusi otomasi industri, robotika, dan sistem kontrol yang efisien. Dari merancang PCB hingga memprogram mikrokontroler, setiap komponen adalah bagian dari puzzle yang saya sempurnakan.', 'Dengan pendekatan yang holistik, saya melihat setiap tantangan sebagai peluang untuk berinovasi. Kemampuan saya dalam simulasi CAD/CAM, pemrograman PLC, serta pengembangan IoT membuat saya mampu menghadirkan solusi yang tidak hanya functional tetapi juga future-proof. Saya percaya bahwa teknologi mekatronika adalah kunci menuju revolusi industri 4.0, dan saya berkomitmen untuk menjadi bagian dari perubahan tersebut dengan menciptakan sistem yang smart, reliable, dan sustainable untuk masa depan yang lebih baik.', 'asset/img/anaklucu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik_minat`
--
ALTER TABLE `statistik_minat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_saya`
--
ALTER TABLE `tentang_saya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `statistik_minat`
--
ALTER TABLE `statistik_minat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tentang_saya`
--
ALTER TABLE `tentang_saya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
