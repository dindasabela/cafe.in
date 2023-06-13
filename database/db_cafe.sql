-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 02:23 PM
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
-- Dumping data for table `data_cafe`
--

INSERT INTO `data_cafe` (`id_cafe`, `nama_cafe`, `harga_cafe`, `rating_cafe`, `jam_cafe`, `fasilitas_cafe`, `comfy_cafe`, `harga_angka`, `rating_angka`, `jam_angka`, `fasilitas_angka`, `comfy_angka`) VALUES
(1, 'Reter', '30000', '4.6 - 5.0', 'Kurang dari 24 Jam', 'Outdoor dan Indoor', 'Nyaman', '4', '5', '3', '3', '3'),
(2, 'Kemari', '35000', '4.0 - 4.5', 'Kurang dari 24 Jam', 'Outdoor dan Indoor', 'Sangat Nyaman', '3', '4', '3', '3', '5'),
(3, 'Arah', '50000', '4.0 - 4.5', '24 Jam', 'Hanya Outdoor/ Indoor', 'Kurang Nyaman', '2', '4', '5', '1', '1'),
(4, 'Kenangan', '40000', '4.6 - 5.0', '24 Jam', 'Hanya Outdoor/ Indoor', 'Nyaman', '3', '5', '5', '1', '3'),
(5, 'Stako', '10000', '3.0 - 3.9', 'Kurang dari 24 Jam', 'Outdoor dan Indoor', 'Kurang Nyaman', '5', '3', '3', '3', '1'),
(6, 'OBIE', '22000', '4.0 - 4.5', 'Kurang dari 24 Jam', 'Hanya Outdoor/ Indoor', 'Nyaman', '4', '4', '3', '1', '3'),
(7, '28 Coffee', '24000', '4.0 - 4.5', '24 Jam', 'Outdoor dan Indoor', 'Nyaman', '4', '4', '5', '3', '3'),
(8, 'Loko Coffee', '20000', '4.0 - 4.5', '24 Jam', 'Outdoor dan Indoor', 'Nyaman', '4', '4', '5', '3', '3'),
(9, 'Mato Kopi', '12000', '4.0 - 4.5', '24 Jam', 'Outdoor dan Indoor', 'Nyaman', '5', '4', '5', '3', '3'),
(10, 'Senja Coffee & Memories', '30000', '4.6 - 5.0', 'Kurang dari 24 Jam', 'Outdoor, Indoor, dan Workspace', 'Sangat Nyaman', '4', '5', '3', '5', '5'),
(11, 'Kobessah Kopi', '12000', '2.0 - 2.9', 'Kurang dari 24 Jam', 'Hanya Outdoor/ Indoor', 'Kurang Nyaman', '5', '2', '3', '1', '1'),
(12, 'Eplus.co Coffee & Coworking', '25000', '4.0 - 4.5', '24 Jam', 'Outdoor, Indoor, dan Workspace', 'Nyaman', '4', '4', '5', '5', '3'),
(13, 'Silol Kopi & Eatery', '25000', '4.0 - 4.5', '24 Jam', 'Hanya Outdoor/ Indoor', 'Nyaman', '4', '4', '5', '1', '3'),
(14, 'Le Travail Coffee', '22000', '2.0 - 2.9', 'Kurang dari 24 Jam', 'Outdoor dan Indoor', 'Kurang Nyaman', '4', '2', '3', '3', '1'),
(15, 'Ekologi Desk & Space', '30000', '4.0 - 4.5', 'Kurang dari 24 Jam', 'Outdoor, Indoor, dan Workspace', 'Sangat Nyaman', '4', '4', '3', '5', '5');

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
