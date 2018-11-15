-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 02:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventgear`
--

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stock` int(4) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `nama`, `kategori`, `stock`, `deskripsi`, `gambar`) VALUES
('LED-001', 'LED Satu', 'led', 3, 'ini LED Satu', 'img-led--00.jpg'),
('LG-001', 'Lampu satu', 'lampu', 2, 'ini lampu satu', 'img-lampu-001.jpg'),
('PR-001', 'Proyektor satu', 'proyektor', 10, 'ini proyektor satu bos hey tayo', 'img-proyektor-001.jpg'),
('PR-002', 'Proyektor dua', 'proyektor', 7, 'ini proyektor dua', 'img-proyektor-002.jpg'),
('SC-001', 'Screen satu', 'screen', 5, 'ini screen satu', 'img-screen-001.jpg'),
('SS-001', 'Sound System Satu', 'soundsystem', 4, 'ini sound system satu', 'img-soundsystem-001.jpg'),
('TD-001', 'Tenda satu', 'tenda', 8, 'ini tenda satu', 'img-tenda-001.jpg'),
('TV-001', 'TV satu', 'tv', 1, 'ini tv satu', 'img-tv-001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama_user`, `username`, `password`, `permission`) VALUES
('admin', 'admin', 'admin', 1),
('jobon', 'jo', '55', 0),
('qwe', 'qwe', 'qwe', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
