-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 06:10 PM
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
('AK-22Apr289', 'AJ-423', 30, '2022-04-10'),
('AK-Apr089', 'AJ-158', 10, '2022-04-10'),
('AK-Apr487', 'AJ-062', 100, '2022-04-07'),
('AK-Apr578', 'AJ-062', 10, '2022-04-02'),
('AK-Apr643', 'AJ-738', 20, '2022-04-05'),
('AK-Apr681', 'AJ-062', 10, '2022-04-10'),
('AK-Apr827', 'AJ-674', 30, '2022-04-04');

--
-- Triggers `keluar_gudang`
--
DELIMITER $$
CREATE TRIGGER `del_keluar` AFTER DELETE ON `keluar_gudang` FOR EACH ROW BEGIN
   UPDATE stok_gudang SET stok_gudang = stok_gudang + OLD.jumlah
   WHERE id = OLD.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `m_toko` AFTER INSERT ON `keluar_gudang` FOR EACH ROW BEGIN
   UPDATE stok_gudang SET stok_toko = stok_toko + NEW.jumlah

   WHERE id = NEW.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_keluar` AFTER INSERT ON `keluar_gudang` FOR EACH ROW BEGIN
   UPDATE stok_gudang SET stok_gudang = stok_gudang - NEW.jumlah

   WHERE id = NEW.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `u_keluar` AFTER UPDATE ON `keluar_gudang` FOR EACH ROW UPDATE stok_gudang SET stok_gudang = stok_gudang + OLD.jumlah - NEW.jumlah
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
('AM-Apr027', 'AJ-423', 120, '2022-03-31', 'Bagus'),
('AM-Apr087', 'AJ-158', 30, '2022-04-01', 'Bagus'),
('AM-Apr164', 'AJ-062', 20, '2022-04-02', 'Bagus'),
('AM-Apr290', 'AJ-738', 65, '2022-04-05', 'Bagus'),
('AM-Apr327', 'AJ-062', 30, '2022-04-04', 'Bagus'),
('AM-Apr467', 'AJ-820', 10, '2022-04-03', 'Bagus'),
('AM-Apr480', 'AJ-674', 100, '2022-04-01', 'Bagus'),
('AM-Apr519', 'AJ-158', 50, '2022-04-02', 'Bagus'),
('AM-Apr593', 'AJ-679', 140, '2022-04-03', 'Bagus'),
('AM-Apr650', 'AJ-123', 65, '2022-04-01', 'Bagus'),
('AM-Apr836', 'AJ-349', 20, '2022-04-07', 'Bagus'),
('AM-Apr851', 'AJ-062', 65, '2022-04-10', 'Bagus'),
('AM-Apr905', 'AJ-574', 65, '2022-04-01', 'Bagus'),
('AM-Apr938', 'AJ-062', 25, '2022-04-01', 'Bagus');

--
-- Triggers `masuk_gudang`
--
DELIMITER $$
CREATE TRIGGER `del_masuk` AFTER DELETE ON `masuk_gudang` FOR EACH ROW BEGIN
   UPDATE stok_gudang SET stok_gudang = stok_gudang - OLD.jumlah
   WHERE id = OLD.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_masuk` AFTER INSERT ON `masuk_gudang` FOR EACH ROW BEGIN
   UPDATE stok_gudang SET stok_gudang = stok_gudang + NEW.jumlah
   WHERE id = NEW.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `u_masuk` AFTER UPDATE ON `masuk_gudang` FOR EACH ROW UPDATE stok_gudang SET stok_gudang = stok_gudang - OLD.jumlah + NEW.jumlah
WHERE id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stok_gudang`
--

CREATE TABLE `stok_gudang` (
  `id` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok_gudang` int(100) NOT NULL,
  `stok_toko` int(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok_gudang`
--

INSERT INTO `stok_gudang` (`id`, `nama_barang`, `stok_gudang`, `stok_toko`, `harga`) VALUES
('AJ-062', 'Stik Keju', 20, 5, 20000),
('AJ-123', 'Keripik Pisang Rasa Cokelat', 65, 0, 15000),
('AJ-158', 'Keripik Mantang (Umbi Ungu)', 70, 0, 10000),
('AJ-349', 'Pie Keju 5 gr', 20, 0, 15000),
('AJ-423', 'Keripik Singkong Rasa Balado', 90, 25, 12000),
('AJ-574', 'Keripik Pisang Rasa Keju Susu', 65, 0, 15000),
('AJ-674', 'Sale Pisang Tepung', 70, 0, 15000),
('AJ-679', 'Banana Chip Rasa Oreo', 140, 0, 17500),
('AJ-738', 'Banana Chip Rasa Milo', 45, 0, 17500),
('AJ-820', 'Keripik Pisang Rasa Original Manis', 10, 0, 15000);

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
('AT-22Apr793', 'AJ-423', '2022-04-10', 5),
('AT-Apr109', 'AJ-062', '2022-04-10', 5);

--
-- Triggers `terjual`
--
DELIMITER $$
CREATE TRIGGER `del_terjual` AFTER DELETE ON `terjual` FOR EACH ROW BEGIN
   UPDATE stok_gudang SET stok_toko = stok_toko + OLD.terjual
   WHERE id = OLD.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_terjual` AFTER INSERT ON `terjual` FOR EACH ROW BEGIN
   UPDATE stok_gudang SET stok_toko = stok_toko - NEW.terjual

   WHERE id = NEW.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `u_terjual` AFTER UPDATE ON `terjual` FOR EACH ROW UPDATE stok_gudang SET stok_toko = stok_toko + OLD.terjual - NEW.terjual
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
('U-000', 'Admin', 'Admin', 'askhamin'),
('U-537', 'Budi', 'Kasir', 'budi123'),
('U-637', 'Delta', 'Kasir', 'delta');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `stok_gudang`
--
ALTER TABLE `stok_gudang`
  ADD PRIMARY KEY (`id`);

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
  ADD CONSTRAINT `keluar_gudang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `stok_gudang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `masuk_gudang`
--
ALTER TABLE `masuk_gudang`
  ADD CONSTRAINT `masuk_gudang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `stok_gudang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `terjual`
--
ALTER TABLE `terjual`
  ADD CONSTRAINT `terjual_ibfk_1` FOREIGN KEY (`id`) REFERENCES `stok_gudang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
