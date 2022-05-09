-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 03:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris-askhajaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok_gudang` int(100) NOT NULL,
  `stok_toko` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `nama_barang`, `stok_gudang`, `stok_toko`, `harga`) VALUES
('AJ-062', 'Stik Keju', 10, 35, 20000),
('AJ-123', 'Keripik Pisang Rasa Cokelat', 70, 20, 15000),
('AJ-158', 'Keripik Mantang (Umbi Ungu)', 0, 0, 10000),
('AJ-349', 'Pie Keju 5 gr', 70, 30, 15000),
('AJ-384', 'Pie Cokelat (10 gr)', 65, 0, 20000),
('AJ-423', 'Keripik Singkong Rasa Balado', 0, 0, 12000),
('AJ-574', 'Keripik Pisang Rasa Keju Susu', 0, 0, 15000),
('AJ-674', 'Sale Pisang Tepung', 0, 0, 15000),
('AJ-679', 'Banana Chip Rasa Oreo', 80, 0, 17500),
('AJ-738', 'Banana Chip Rasa Milo', 0, 0, 17500),
('AJ-820', 'Keripik Pisang Rasa Original Manis', 0, 0, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `keluar_gudang`
--

CREATE TABLE `keluar_gudang` (
  `kodekeluar` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluar_gudang`
--

INSERT INTO `keluar_gudang` (`kodekeluar`, `id`, `jumlah`, `tanggal`) VALUES
('AK-22Apr037', 'AJ-062', 50, '2022-04-24'),
('AK-22Apr840', 'AJ-349', 30, '2022-04-17'),
('AK-22Apr896', 'AJ-123', 30, '2022-04-23');

--
-- Triggers `keluar_gudang`
--
DELIMITER $$
CREATE TRIGGER `del_keluar` AFTER DELETE ON `keluar_gudang` FOR EACH ROW BEGIN
   UPDATE gudang SET stok_gudang = stok_gudang + OLD.jumlah
   WHERE id = OLD.id;
   
   UPDATE gudang SET stok_toko = stok_toko - OLD.jumlah
   WHERE id = OLD.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_keluar` AFTER INSERT ON `keluar_gudang` FOR EACH ROW BEGIN
   UPDATE gudang SET stok_gudang = stok_gudang - NEW.jumlah
   WHERE id = NEW.id;
   
   UPDATE gudang SET stok_toko = stok_toko + NEW.jumlah
   WHERE id = NEW.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `u_keluar` AFTER UPDATE ON `keluar_gudang` FOR EACH ROW UPDATE gudang SET stok_gudang = stok_gudang + OLD.jumlah - NEW.jumlah
WHERE id = OLD.id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `u_toko` AFTER UPDATE ON `keluar_gudang` FOR EACH ROW UPDATE gudang SET stok_toko = stok_toko - OLD.jumlah + NEW.jumlah
WHERE id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `masuk_gudang`
--

CREATE TABLE `masuk_gudang` (
  `kodemasuk` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk_gudang`
--

INSERT INTO `masuk_gudang` (`kodemasuk`, `id`, `jumlah`, `tanggal`, `keterangan`) VALUES
('AM-22Apr078', 'AJ-679', 20, '2022-04-12', 'Bagus'),
('AM-22Apr267', 'AJ-123', 100, '2022-04-21', 'Bagus'),
('AM-22Apr641', 'AJ-679', 60, '2022-04-18', 'Bagus'),
('AM-22Apr738', 'AJ-349', 100, '2022-04-17', 'Bagus'),
('AM-22Apr745', 'AJ-062', 60, '2022-04-20', 'Bagus'),
('AM-22Apr968', 'AJ-384', 65, '2022-03-28', 'Bagus');

--
-- Triggers `masuk_gudang`
--
DELIMITER $$
CREATE TRIGGER `del_masuk` AFTER DELETE ON `masuk_gudang` FOR EACH ROW BEGIN
   UPDATE gudang SET stok_gudang = stok_gudang - OLD.jumlah
   WHERE id = OLD.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_masuk` AFTER INSERT ON `masuk_gudang` FOR EACH ROW BEGIN
   UPDATE gudang SET stok_gudang = stok_gudang + NEW.jumlah
   WHERE id = NEW.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `u_masuk` AFTER UPDATE ON `masuk_gudang` FOR EACH ROW UPDATE gudang SET stok_gudang = stok_gudang - OLD.jumlah + NEW.jumlah
WHERE id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jml_masuk` int(100) NOT NULL,
  `terjual` int(100) NOT NULL,
  `sisa` int(100) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `hrg_asli` int(100) NOT NULL,
  `hrg_jual` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `jenis`, `nama_barang`, `supplier`, `tgl_masuk`, `jml_masuk`, `terjual`, `sisa`, `tgl_keluar`, `hrg_asli`, `hrg_jual`) VALUES
('22Apr762', 'CASH', 'Keripik Pisang Rasa Cokelat', 'Supllier A', '2022-04-26', 30, 10, 0, '2022-04-26', 20000, 20000),
('N22Apr20', 'KONSINYASI', 'Contoh', 'Supplier', '2022-04-27', 30, 10, 0, '2022-04-30', 20000, 30000),
('N22Apr52', 'KONSINYASI', 'Keripik Nangka Oven Manis', 'ABC', '2022-04-28', 20, 15, 0, '2022-04-30', 20000, 25000),
('N22Apr92', 'CASH', 'Keripik', 'Supplier', '2022-04-26', 30, 10, 0, '2022-04-30', 20000, 20000),
('N22May60', 'CASH', 'r', 'r', '2022-05-03', 60, 5, 0, '2022-05-28', 20000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `terjual`
--

CREATE TABLE `terjual` (
  `kodeterjual` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `terjual` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terjual`
--

INSERT INTO `terjual` (`kodeterjual`, `id`, `tanggal`, `terjual`) VALUES
('AT-22Apr349', 'AJ-062', '2022-04-18', 10),
('AT-22Apr512', 'AJ-062', '2022-04-18', 5),
('AT-22Apr716', 'AJ-123', '2022-04-23', 10);

--
-- Triggers `terjual`
--
DELIMITER $$
CREATE TRIGGER `del_terjual` AFTER DELETE ON `terjual` FOR EACH ROW BEGIN
   UPDATE gudang SET stok_toko = stok_toko + OLD.terjual
   WHERE id = OLD.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_terjual` AFTER INSERT ON `terjual` FOR EACH ROW BEGIN
   UPDATE gudang SET stok_toko = stok_toko - NEW.terjual

   WHERE id = NEW.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `u_terjual` AFTER UPDATE ON `terjual` FOR EACH ROW UPDATE gudang SET stok_toko = stok_toko + OLD.terjual - NEW.terjual
WHERE id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `akses` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `akses`, `password`) VALUES
('U-000', 'superadmin', 'Admin', 'e6cdd9efde47d851197783d60480cb6296d00f13'),
('U-319', 'kasir', 'Kasir', '8691e4fc53b99da544ce86e22acba62d13352eff'),
('U-541', 'test', 'Admin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluar_gudang`
--
ALTER TABLE `keluar_gudang`
  ADD PRIMARY KEY (`kodekeluar`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `masuk_gudang`
--
ALTER TABLE `masuk_gudang`
  ADD PRIMARY KEY (`kodemasuk`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `terjual`
--
ALTER TABLE `terjual`
  ADD PRIMARY KEY (`kodeterjual`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluar_gudang`
--
ALTER TABLE `keluar_gudang`
  ADD CONSTRAINT `keluar_gudang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gudang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `masuk_gudang`
--
ALTER TABLE `masuk_gudang`
  ADD CONSTRAINT `masuk_gudang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gudang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `terjual`
--
ALTER TABLE `terjual`
  ADD CONSTRAINT `terjual_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gudang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
