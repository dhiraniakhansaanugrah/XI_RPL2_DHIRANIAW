-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2026 at 02:39 AM
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
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', '123', 1),
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 2),
(3, 'admin2', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `harga_per_kilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`harga_per_kilo`) VALUES
(7000);

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `pakaian_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `pakaian_jenis` varchar(255) NOT NULL,
  `pakaian_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`pakaian_id`, `transaksi_id`, `pakaian_jenis`, `pakaian_jumlah`) VALUES
(1, 1, 'jins', 5),
(2, 2, 'baju', 10),
(3, 3, 'sweter', 13),
(4, 4, 'baju', 12),
(5, 5, 'celana', 13),
(6, 6, 'baju', 8),
(7, 7, 'jins', 8),
(8, 8, 'sweter', 5),
(10, 9, 'baju', 10),
(11, 10, 'baju', 10),
(12, 11, 'jins', 5),
(13, 1, 'baju', 10),
(14, 2, 'jins', 6),
(15, 3, 'sweter', 8),
(16, 4, 'baju', 10),
(17, 5, 'celana', 7),
(18, 6, 'baju', 12),
(19, 7, 'sweter', 8),
(20, 8, 'jins', 5),
(21, 9, 'baju', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pelangga`
--

CREATE TABLE `pelangga` (
  `pelanggan_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(255) NOT NULL,
  `pelanggan_hp` varchar(20) NOT NULL,
  `pelanggan_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelangga`
--

INSERT INTO `pelangga` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_hp`, `pelanggan_alamat`) VALUES
(1, 'yanto', '08889645327', 'bandung'),
(2, 'harris', '089857529384', 'cibaduyut'),
(3, 'rion', '089857653444', 'bogor'),
(4, 'mika', '098765423865', 'semarang'),
(5, 'gina', '892367486535', 'semarang'),
(6, 'pipi', '874267847658', 'semarang'),
(7, 'yaya', '088975621899', 'bandung'),
(8, 'vika', '086754324458', 'semarang'),
(9, 'jojon', '089775645677', 'cibaduyut'),
(10, 'alex', '089757245678', 'semarang');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_berat` int(11) NOT NULL,
  `transaksi_tgl_selesai` date NOT NULL,
  `transaksi_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tgl`, `pelanggan_id`, `transaksi_harga`, `transaksi_berat`, `transaksi_tgl_selesai`, `transaksi_status`) VALUES
(1, '2026-02-01', 1, 7000, 1, '2026-02-05', 11),
(2, '2026-02-02', 2, 14, 2, '2026-02-05', 9),
(3, '2026-02-05', 3, 7, 1, '2026-02-06', 8),
(4, '2026-02-06', 4, 14, 2, '2026-02-07', 7),
(5, '2026-02-06', 5, 21, 3, '2026-02-08', 6),
(6, '2026-02-07', 6, 7, 1, '2026-02-08', 5),
(7, '2026-02-01', 7, 14, 2, '2026-02-03', 2),
(8, '2026-02-05', 8, 7, 1, '2026-02-06', 8),
(9, '2026-02-06', 9, 14, 2, '2026-02-07', 9),
(10, '2026-02-06', 10, 21, 3, '2026-02-09', 10),
(11, '2026-02-07', 1, 7, 1, '2026-02-08', 1),
(12, '2026-02-11', 2, 14, 2, '2026-02-13', 2),
(13, '2026-02-12', 3, 7, 1, '2026-02-11', 3),
(14, '2026-02-15', 4, 7, 1, '2026-02-17', 4),
(15, '2026-02-20', 5, 14, 2, '2026-02-23', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`pakaian_id`);

--
-- Indexes for table `pelangga`
--
ALTER TABLE `pelangga`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `pakaian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pelangga`
--
ALTER TABLE `pelangga`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
