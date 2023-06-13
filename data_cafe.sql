-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 11:25 AM
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
-- Database: `db_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_cafe`
--

CREATE TABLE `data_cafe` (
  `id_cafe` int(4) NOT NULL,
  `nama_cafe` varchar(256) NOT NULL,
  `harga_cafe` varchar(64) NOT NULL,
  `rating_cafe` varchar(64) NOT NULL,
  `jam_cafe` varchar(64) NOT NULL,
  `fasilitas_cafe` varchar(64) NOT NULL,
  `comfy_cafe` varchar(64) NOT NULL,
  `harga_angka` varchar(64) NOT NULL,
  `rating_angka` varchar(64) NOT NULL,
  `jam_angka` varchar(64) NOT NULL,
  `fasilitas_angka` varchar(64) NOT NULL,
  `comfy_angka` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_cafe`
--
ALTER TABLE `data_cafe`
  ADD PRIMARY KEY (`id_cafe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_cafe`
--
ALTER TABLE `data_cafe`
  MODIFY `id_cafe` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
