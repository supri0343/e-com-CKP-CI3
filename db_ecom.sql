-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 03:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `subjudul` varchar(1000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `judul`, `subjudul`, `deskripsi`, `gambar`) VALUES
(1, 'WHY CHOOSE US ?', 'CAHAYA KHARISMA PLASINDO', '													PT. Cahaya Kharisma Plasindo is a plastic bag factory headquartered at Jl. Ronggolawe No.99 Telukan, Grogol, Sukoharjo, Solo.Our plastic bag factory produces various types of plastic bags, namely Polyethylene (PE) plastic bags or commonly called ice bags , Polypropylene (PP) or sugar bags, and High-density (HD) or plastic bags. This Cahaya Kharisma Plasindo plastic bag factory, located in Sukoharjo, Solo, started with a home-based business established by Chandra Setiawan in 2003. With her determination to work hard in the field of plastic processing in self-taught since 1997 and fully supported by Retno Dewi Budiantoro (the wife) now her plastic bag factory has grown and has 4 branches spread across the Solo area and also in Jakarta.																				', 'home1.jpg'),
(2, 'OUR MOTTO', 'QUALITY COMPARED WITH PRICE', 'Cahaya Kharisma Plasindo plastic bag factory has a motto that is “Quality compared to price”. In order to meet market demand, the Cahaya Kharisma Plasindo plastic bag factory uses selected plastic seeds and the processing process is handled by experienced experts and using high-tech machines to get good quality plastic bags. No half-heartedly the sale of Cahaya Kharisma Plasindo plastic bag products has spread to all corners of the country. Not only that, the products of the Cahaya Kharisma Plasindo plastic bag factory have received Halal certificates from LPPOM MUI.', 'home3.jpg'),
(3, 'OUR RESOURCES', 'SPREADS AROUND THE COUNTRY', 'Now to improve market demand services, Cahaya Kharisma Plasindo plastic bag factory has provided marketing, sales and shipping personnel to all corners of the country. With the distribution of Cahaya Kharisma Plasindo plastic bag products to all corners of the country accompanied by the promising quality of plastic bags, it is expected that PT. Cahaya Kharisma Plasindo becomes a company that excels in its field and can become a company that always grows along with market progress.', 'home1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mst_dash`
--

CREATE TABLE `mst_dash` (
  `id` int(10) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_dash`
--

INSERT INTO `mst_dash` (`id`, `gambar`) VALUES
(1, 'home1.jpg'),
(2, 'home2.jpg'),
(3, 'home3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kode`
--

CREATE TABLE `mst_kode` (
  `id` int(10) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_kode`
--

INSERT INTO `mst_kode` (`id`, `kode`, `name`) VALUES
(1, 'HD_PLASTIK', 'HD PLASTIK'),
(2, 'PE_PLASTIK', 'PE PLASTIK');

-- --------------------------------------------------------

--
-- Table structure for table `mst_produk`
--

CREATE TABLE `mst_produk` (
  `id` int(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `stok` decimal(4,0) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_produk`
--

INSERT INTO `mst_produk` (`id`, `nama_produk`, `kode`, `gambar`, `stok`, `deskripsi`, `harga`) VALUES
(1, 'hd plastik1', 'HD_PLASTIK', 'home1.jpg', '900', '', 10000),
(2, 'HD PLASTIK1', 'HD_PLASTIK', 'home2.jpg', '3', '', 0),
(3, 'HD PLASTIK3', 'HD_PLASTIK', 'home3.jpg', '1', '', 0),
(5, 'PE PLASTIK3', 'PE_PLASTIK', 'home3.jpg', '10', 'coba1								', 100),
(6, 'PE_apik', 'PE_PLASTIK', 'home3.jpg', '1000', 'cooooobaaaa										', 900000),
(7, 'HD coba', 'PE_PLASTIK', 'home1.jpg', '9999', 'sadasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(30) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `qty_order` decimal(10,0) NOT NULL,
  `harga_pembelian` float NOT NULL,
  `total_bayar` float NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_produk`, `nama`, `email`, `phone`, `alamat`, `tgl_order`, `qty_order`, `harga_pembelian`, `total_bayar`, `status`) VALUES
(2, 2, 'userss', 'supri0343@gmail.com', '087739611109', 'asd', NULL, '7', 10000, 70000, 'Sedang Diproses'),
(3, 3, 'Suprianto', 'supri0343@gmail.com', '087739611109', 'asd', NULL, '9', 8000, 72000, 'Sedang Diproses'),
(4, 1, 'suuup', 'supri0343@gmail.com', '08773961110911', 'sangat jauh', '2023-01-25', '10', 10000, 100000, 'Sedang Diproses'),
(5, 1, 'user', 'user@gmail.com', '088888', 'sangat jauh', '2023-01-27', '90', 10000, 900000, 'Barang Dalam Pengiriman');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'user', 'user', 'user'),
(2, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_dash`
--
ALTER TABLE `mst_dash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_kode`
--
ALTER TABLE `mst_kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_produk`
--
ALTER TABLE `mst_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_dash`
--
ALTER TABLE `mst_dash`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_kode`
--
ALTER TABLE `mst_kode`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_produk`
--
ALTER TABLE `mst_produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
