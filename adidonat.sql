-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 05:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adidonat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('Administrator','Supplier') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(4, 'Admin1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(5, 'Supplier1', 'supplier', '99b0e8da24e29e4ccb5d7d76e677c2ac', 'Supplier'),
(6, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(5) NOT NULL,
  `nama_contact` varchar(30) NOT NULL,
  `hp_contact` int(12) NOT NULL,
  `email_contact` varchar(100) NOT NULL,
  `massage_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama_customer` varchar(40) NOT NULL,
  `alamat_customer` text NOT NULL,
  `telp_customer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat_customer`, `telp_customer`) VALUES
(68, 'Adil Urwatul Woqqo', 'Rumbai', '08080808'),
(69, 'Adil Urwatul Woqqo', 'Rumbai', '08080808'),
(70, 'Adil Urwatul Woqqo', 'Rumbai', '08080808'),
(71, 'Adil Urwatul Woqqo', 'Rumbai', '08080808'),
(72, 'Adil Urwatul Woqqo', 'Rumbai', '08080808'),
(73, 'Adil Urwatul Woqqo', 'Rumbai', '08080808'),
(74, 'Adi Ragil Buadiawan', 'Duri', '43424'),
(75, 'Adi Ragil Buadiawan', 'Duri', '43424'),
(76, 'Adi Ragil Buadiawan', 'Duri', '43424'),
(77, 'Adi Ragi Budiawan', 'Duri', '3213'),
(78, 'Adil Urwatul Woqqo', 'dasdasdasd', '08080808');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `nama_material` varchar(25) NOT NULL,
  `tgl_material` date NOT NULL DEFAULT current_timestamp(),
  `qty_material` int(10) NOT NULL,
  `id_sup` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `nama_material`, `tgl_material`, `qty_material`, `id_sup`) VALUES
(26, 'Material 1', '2021-07-16', 1, 3),
(27, 'Material 1', '2021-07-16', 1, 3),
(28, 'Material 1', '2021-07-16', 1, 3),
(29, 'Material 1', '2021-07-21', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(5) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `id_supplier` int(5) NOT NULL,
  `id_material` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(5) NOT NULL,
  `tgl_penjualan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qty_penjualan` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `tgl_penjualan`, `qty_penjualan`, `id_produk`, `id_customer`) VALUES
(31, '2021-07-16 03:07:19', 1000, 7, 68),
(32, '2021-07-16 03:08:23', 1000, 7, 69),
(33, '2021-07-16 03:08:39', 1000, 7, 70),
(34, '2021-07-16 03:09:15', 1000, 7, 71),
(35, '2021-07-16 03:09:27', 1000, 7, 72),
(36, '2021-07-16 03:09:43', 1000, 7, 73),
(37, '2021-07-16 03:46:49', 3, 15, 74),
(38, '2021-07-16 03:52:05', 3, 15, 75),
(39, '2021-07-16 03:52:26', 3, 15, 76),
(40, '2021-07-16 04:04:07', 20, 5, 77),
(41, '2021-07-21 14:56:09', 20, 3, 78);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok_produk` int(5) NOT NULL,
  `gambar_produk` varchar(200) NOT NULL,
  `harga_produk` int(10) NOT NULL,
  `id_kategori` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok_produk`, `gambar_produk`, `harga_produk`, `id_kategori`) VALUES
(3, 'Donat Original', 12370, 'd1.png', 10000, 1),
(4, 'Donat Gula', 112390, 'd2.png', 13000, 1),
(5, 'Donat Gandum', 112370, 'd3.png', 17000, 1),
(6, 'Donat Toping', 112390, 'd4.png', 20000, 1),
(7, 'Donat Coklat', 106390, 'd5.png', 20000, 1),
(8, 'Donat Toping Gula', 112390, 'd6.png', 15000, 1),
(9, 'Donat Coklat Meses', 2390, 'd7.png', 12000, 1),
(10, 'Donat Coklat Meses 2', 10388, 'd8.png', 13000, 1),
(12, 'Es Cream Coklat', 180, 'Es cream coklat.png', 15000, 2),
(13, 'Es Cream Vanilla', 180, 'Es cream vanilla.png', 15009, 2),
(14, 'Sekoteng', 180, 'sekoteng.png', 20000, 2),
(15, 'Kopi Adi', 91, 'Untitled design (6).png', 25000, 2),
(16, 'Kopi Adi 2', 60, 'Untitled design (6).png', 120000, 2),
(17, 'Es Cream', 20, 'Es cream coklat.png', 10000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_sup` int(5) NOT NULL,
  `nama_sup` varchar(25) NOT NULL,
  `alamat_sup` text NOT NULL,
  `telp_sup` varchar(12) NOT NULL,
  `produk_sup` varchar(250) NOT NULL,
  `harga_sup` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_sup`, `nama_sup`, `alamat_sup`, `telp_sup`, `produk_sup`, `harga_sup`) VALUES
(3, 'PT. ANEKA RAGAM INDONESIA', 'PEKANBARU', '0812345', 'TEPUNG, GULA, KENTANG DSB', 10000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_sup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_sup` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
