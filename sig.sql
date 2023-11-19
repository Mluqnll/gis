-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2023 at 12:33 AM
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
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nim` varchar(36) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id`, `nama`, `username`, `nim`, `foto`, `password`, `created_at`, `updated_at`) VALUES
('9a674f4d-b378-46b5-9425-699ebb62aacf', 'pinang', 'admin', '3042021052', 'app/pengelola/1697685027-HzxsC.jpg', '$2y$10$q6fgT.Vxejd1zwr0B8LDFOnDqGjL6kWAb.i1mtzxUBAJNWaQyoIai', '2023-10-18 20:10:28', '2023-10-18 20:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id` char(36) NOT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `lat` varchar(255) DEFAULT NULL,
  `long` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id`, `nama_tempat`, `icon`, `foto`, `deskripsi`, `lat`, `long`, `created_at`, `updated_at`) VALUES
('9a695373-ee6c-4ee3-ac07-c3ae6e113a56', 'Dermaga 1', 'app/icon/1698116179-Rlvzg.png', 'app/tempat/1698116249-tAeOY.jpg', 'Dalam kode yang Anda berikan, Anda telah membuat marker pada peta menggunakan ikon yang Anda ambil dari database. Untuk memastikan bahwa ikon dan gambar dalam popup ditampilkan dengan benar dan gambar tersebut memiliki lebar dan tinggi sekitar 20%, Anda bisa memperbarui fungsi generatePopup dan penggunaan gambar dengan style CSS yang sesuai.', '-2.6349706174869', '110.12546282283779', '2023-10-19 20:13:43', '2023-10-23 19:57:29'),
('9a6953ac-8359-41ab-9cd5-66c69780fa78', 'Dermaga 2', 'app/icon/1698120722-fLQYC.png', 'app/tempat/1698120674-4G8zK.jpg', 'Dalam kode yang Anda berikan, Anda telah membuat marker pada peta menggunakan ikon yang Anda ambil dari database. Untuk memastikan bahwa ikon dan gambar dalam popup ditampilkan dengan benar dan gambar tersebut memiliki lebar dan tinggi sekitar 20%, Anda bisa memperbarui fungsi generatePopup dan penggunaan gambar dengan style CSS yang sesuai.', '-2.631872910282567', '110.12756424974748', '2023-10-19 20:14:20', '2023-10-23 21:12:02'),
('9a8f9e4a-47b0-4396-b742-c5398d6050d0', 'Masjid Baburrahim Rt 02', 'app/icon/1699416265-8iK7c.png', NULL, NULL, '-2.634116833918668', '110.12446914933247', '2023-11-07 21:04:27', '2023-11-07 21:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` char(36) NOT NULL,
  `nama_wilayah` varchar(255) DEFAULT NULL,
  `luas_wilayah` varchar(255) DEFAULT NULL,
  `jumlah_penduduk` varchar(255) DEFAULT NULL,
  `geo_json` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
