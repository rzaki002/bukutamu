-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 01:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `captured_images`
--

CREATE TABLE `captured_images` (
  `id` int(11) NOT NULL,
  `image_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internal`
--

CREATE TABLE `internal` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `unit` varchar(25) NOT NULL,
  `menemui` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jam_masuk` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `buktidiri` varchar(100) NOT NULL,
  `menemui` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `imageData` varchar(50) DEFAULT NULL,
  `signature` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `tanggal`, `nama`, `alamat`, `nohp`, `buktidiri`, `menemui`, `keterangan`, `jam_masuk`, `jam_keluar`, `imageData`, `signature`) VALUES
(2, '2023-11-15', 'Salma', 'mariana', '', 'ID CARD 0852', 'Bu Ratih', 'Rapat', NULL, NULL, NULL, NULL),
(3, '2023-11-15', 'dila', 'ULP A rivai', '', '8753', 'mbak teo', 'mengenai rapat', NULL, NULL, NULL, NULL),
(4, '2023-11-15', 'Salma', 'mariana', '', '9076', 'Bu Ratih', 'Rapat', NULL, NULL, NULL, NULL),
(5, '2023-11-15', 'Mala', 'ULP A rivai', '0852', '9076', 'Bu Ratih', 'Rapat', NULL, NULL, NULL, NULL),
(6, '2023-11-17', 'vira', 'ULP A rivai', '0852', '8753', 'Bu Ratih', 'Rapat', '20:24:00', '21:25:00', NULL, NULL),
(7, '2023-11-17', 'cahayu', 'mariana', '0852', '8753', 'mbak teo', 'mengenai rapat', '20:25:00', '21:28:00', NULL, NULL),
(8, '2023-11-17', 'lala', 'mariana', '0852', '9076', 'Bu Ratih', 'mengenai rapat', '19:44:00', '22:45:00', NULL, NULL),
(20, '2023-11-21', 'Salma', 'ULP A rivai', '0852', '9076', 'Bu Ratih', 'Rapat', '10:53:00', '00:55:00', NULL, NULL),
(21, '2023-11-23', 'Salma', 'mariana', '08796523412', 'ID CARD 0852', 'Bu Ratih', 'Rapat', '18:27:00', '20:27:00', NULL, NULL),
(22, '2023-11-23', 'Salma', 'ULP A rivai', '0852', '9076', 'mbak teo', 'Rapat', '18:46:00', '19:46:00', NULL, NULL),
(23, '2023-12-13', 'asdas', 'asdasd', '324234', '3214123412', 'asda', 'dasdas', '21:42:00', '22:43:00', NULL, '172.515625,46.203125,189.515625,51.203125,215.515625,60.203125,234.515625,70.203125,244.515625,78.203125,248.515625,82.203125,248.515625,84.203125,248.515625,86.203125,246.515625,92.203125,238.515625,107.203125,232.515625,116.203125,225.515625,125.203125,220.515625,132.203125,216.515625,134.203125,211.515625,136.203125,204.515625,138.203125,196.515625,138.203125,187.515625,134.203125,179.515625,126.203125,175.515625,117.203125,174.515625,109.203125,175.515625,100.203125,187.515625,88.203125,214.515625,81.203125,237.515625,82.203125,252.515625,86.203125,262.515625,94.203125,265.515625,103.203125,265.515625,110.203125,265.515625,116.203125,265.515625,117.203125,265.515625,110.203125,266.515625,103.203125,274.515625,89.203125,279.515625,84.203125,280.515625,83.203125,280.515625,84.203125,280.515625,85.203125,280.515625,86.203125,280.515625,88.203125,280.515625,85.203125,280.515625,76.203125,282.515625,66.203125,283.515625,63.203125,283.515625,64.203125,283.515625,65.203125,283.515625,71.203125,283.515625,73.203125,283.515625,74.203125,284.515625,74.203125,286.515625,72.203125,292.515625,65.203125,298.515625,60.203125'),
(24, '2023-12-15', 'asdasd', 'asdas', '23424224', '12312', 'asd', 'asdsa', '19:39:00', '21:39:00', NULL, '123.515625,114.203125,123.515625,111.203125,124.515625,105.203125,129.515625,97.203125,141.515625,85.203125,154.515625,78.203125,169.515625,74.203125,183.515625,74.203125,194.515625,77.203125,201.515625,83.203125,207.515625,90.203125,210.515625,100.203125,210.515625,111.203125,210.515625,120.203125,206.515625,127.203125,202.515625,132.203125,193.515625,137.203125,183.515625,140.203125,177.515625,142.203125,172.515625,142.203125,166.515625,139.203125,162.515625,135.203125,158.515625,129.203125,158.515625,121.203125,165.515625,112.203125,182.515625,105.203125,206.515625,99.203125,231.515625,98.203125,253.515625,99.203125,266.515625,107.203125,271.515625,116.203125,271.515625,125.203125,266.515625,132.203125,261.515625,136.203125,257.515625,138.203125,256.515625,138.203125,257.515625,131.203125,261.515625,122.203125,264.515625,117.203125,266.515625,114.203125,266.515625,115.203125,266.515625,117.203125,267.515625,117.203125,268.515625,117.203125,268.515625,118.203125,269.515625,119.203125,272.515625,120.203125,278.515625,120.203125,290.515625,116.203125,305.515625,109.203125,316.515625,103.203125,321.515625,99.203125,323.515625,99.203125,322.515625,100.203125');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `username`, `password`, `nama_pengguna`, `status`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captured_images`
--
ALTER TABLE `captured_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal`
--
ALTER TABLE `internal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captured_images`
--
ALTER TABLE `captured_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internal`
--
ALTER TABLE `internal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
