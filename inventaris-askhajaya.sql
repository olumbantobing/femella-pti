-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 04:30 AM
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
('AJ-021', 'Keripik Pisang Rasa Durian (200 gr)', 100, 0, 15000),
('AJ-058', 'Keripik Pisang Rasa Jagung Bakar (200 gr)', 0, 0, 15000),
('AJ-062', 'Melted Banana Chocolate (100 gr)', 160, 10, 22000),
('AJ-123', 'Keripik Pisang Rasa Cokelat (225 gr)', 70, 20, 15000),
('AJ-127', 'Basreng Pedas (200 gr)', 25, 0, 15000),
('AJ-158', 'Keripik Mantang (Umbi Ungu) (225 gr)', 0, 0, 10000),
('AJ-304', 'Emping Melinjo Pedas (200 gr)', 0, 0, 18000),
('AJ-349', 'Melted Banana Chips Tiramisu (100 gr)', 220, 30, 18000),
('AJ-384', 'Melted Banana Cheese (100 gr)', 165, 0, 18000),
('AJ-423', 'Keripik Singkong Rasa Balado (200 gr)', 0, 0, 12000),
('AJ-426', 'Keripik Pisang Rasa Chip Rendang (200 gr)', 0, 0, 17500),
('AJ-428', 'Keripik Pisang Rasa Melon (200 gr)', 0, 0, 15000),
('AJ-480', 'Keripik Singkong Rasa Barbeque (200 gr)', 0, 0, 12000),
('AJ-514', 'Keripik Pisang Rasa Chip Ayam Geprek (200 gr)', 90, 0, 17500),
('AJ-574', 'Keripik Pisang Rasa Keju Susu (225 gr)', 0, 0, 15000),
('AJ-584', 'Keripik Pisang Rasa Kopi (200 gr)', 110, 0, 15000),
('AJ-628', 'Keripik Pisang Rasa Jagung Manis (200 gr)', 0, 0, 15000),
('AJ-674', 'Sale Pisang Tepung (225 gr)', 0, 0, 15000),
('AJ-679', 'Banana Chip Coklat (225 gr)', 30, 25, 17500),
('AJ-681', 'Emping Melinjo Gurih (200 gr)', 0, 0, 18000),
('AJ-694', 'Keripik Singkong Asin (200 gr)', 45, 20, 10000),
('AJ-738', 'Banana Chip Rasa Milo (250 gr)', 0, 0, 17500),
('AJ-758', 'Keripik Pisang Rasa Keju Pedas (200 gr)', 0, 0, 15000),
('AJ-783', 'Keripik Pisang Rasa Stroberi (200 gr)', 55, 25, 15000),
('AJ-820', 'Keripik Pisang Rasa Original Manis (225 gr)', 0, 0, 15000),
('AJ-830', 'Keripik Pisang Rasa Chip Cokelat (200 gr)', 0, 0, 17500),
('AJ-852', 'Keripik Pisang Rasa Moka (200 gr)', 0, 0, 15000),
('AJ-891', 'Emping Jagung Pedas Manis (225 gr)', 150, 47, 10000),
('AJ-974', 'Keripik Pisang Rasa Karamel Madu (200 gr)', 0, 85, 17500);

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
('AK-22Apr896', 'AJ-123', 30, '2022-04-23'),
('AK-22May421', 'AJ-974', 100, '2022-05-13'),
('AK-22May428', 'AJ-783', 25, '2022-05-12'),
('AK-22May597', 'AJ-679', 50, '2022-05-09'),
('AK-22May617', 'AJ-127', 5, '2022-05-15'),
('AK-22May792', 'AJ-694', 30, '2022-05-12'),
('AK-22May847', 'AJ-127', 20, '2022-05-15'),
('AK-22May860', 'AJ-891', 50, '2022-05-12');

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
('AM-22Apr968', 'AJ-384', 65, '2022-03-28', 'Bagus'),
('AM-22May072', 'AJ-349', 150, '2022-05-13', 'Bagus'),
('AM-22May182', 'AJ-384', 100, '2022-05-13', 'Bagus'),
('AM-22May196', 'AJ-783', 80, '2022-05-11', 'Bagus'),
('AM-22May213', 'AJ-891', 80, '2022-05-12', 'Bagus'),
('AM-22May237', 'AJ-127', 50, '2022-05-14', 'Bagus'),
('AM-22May259', 'AJ-974', 100, '2022-04-30', 'Bagus'),
('AM-22May483', 'AJ-062', 150, '2022-05-13', 'Bagus'),
('AM-22May653', 'AJ-021', 100, '2022-05-14', 'Bagus'),
('AM-22May706', 'AJ-694', 75, '2022-05-11', 'Bagus'),
('AM-22May856', 'AJ-584', 110, '2022-04-30', 'Bagus'),
('AM-22May927', 'AJ-514', 90, '2022-05-13', 'Bagus'),
('AM-22May974', 'AJ-891', 120, '2022-05-13', 'Bagus');

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
  `tgl_keluar` date NOT NULL,
  `hrg_asli` int(100) NOT NULL,
  `hrg_jual` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `jenis`, `nama_barang`, `supplier`, `tgl_masuk`, `jml_masuk`, `terjual`, `tgl_keluar`, `hrg_asli`, `hrg_jual`) VALUES
('N22Apr201', 'KONSINYASI', 'Akar Kelapa', 'Retty', '2022-04-27', 30, 10, '2022-04-30', 16000, 20000),
('N22Apr521', 'KONSINYASI', 'Kacang Sembunyi', 'Retty', '2022-04-28', 20, 15, '2022-04-30', 16000, 20000),
('N22Apr921', 'CASH', 'Sale', 'Sulastri', '2022-04-26', 30, 10, '2022-04-30', 12000, 16000),
('N22May011', 'CASH', 'Keciput Kecil', 'Marimar', '2022-05-03', 50, 0, '2022-05-28', 16000, 20000),
('N22May025', 'CASH', 'Kembang Goyang', 'Marimar', '2022-05-03', 80, 0, '2022-05-28', 16000, 20000),
('N22May206', 'KONSINYASI', 'Coffee', 'El\'s', '2022-05-10', 50, 0, '2022-05-19', 30000, 35000),
('N22May271', 'CASH', 'Sukun', 'Sulastri', '2022-05-09', 80, 50, '2022-05-14', 15000, 20000),
('N22May401', 'CASH', 'Kelanting', 'Robbani', '2022-05-01', 50, 38, '2022-05-15', 5000, 10000),
('N22May587', 'KONSINYASI', 'Coffee Durian', 'El\'s', '2022-05-10', 40, 0, '2022-05-19', 32000, 35000),
('N22May609', 'KONSINYASI', 'Nastar', 'Marimar', '2022-05-03', 60, 30, '2022-05-28', 55000, 60000),
('N22May781', 'CASH', 'Ting Ting Wijen', 'Marimar', '2022-05-03', 50, 0, '2022-05-28', 15000, 20000),
('N22May876', 'CASH', 'Tempe Jagung Manis', 'Marimar', '2022-04-30', 30, 30, '2022-05-01', 17000, 22000),
('N22May930', 'KONSINYASI', 'Keciput Besar', 'Marimar', '2022-04-30', 30, 25, '2022-05-01', 35000, 40000),
('N22May978', 'KONSINYASI', 'Coffee Premium', 'El\'s', '2022-05-10', 50, 0, '2022-05-19', 30000, 35000),
('N22May987', 'CASH', 'Jipang', 'Robbani', '2022-05-01', 50, 45, '2022-05-15', 5000, 10000);

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
('AT-22Apr716', 'AJ-123', '2022-04-23', 10),
('AT-22May154', 'AJ-127', '2022-05-16', 25),
('AT-22May420', 'AJ-694', '2022-05-14', 10),
('AT-22May607', 'AJ-062', '2022-04-30', 25),
('AT-22May804', 'AJ-974', '2022-05-14', 15),
('AT-22May901', 'AJ-891', '2022-05-12', 3),
('AT-22May925', 'AJ-679', '2022-05-15', 25);

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
('U-319', 'kasir', 'Kasir', '8691e4fc53b99da544ce86e22acba62d13352eff');

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
