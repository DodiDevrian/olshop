-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2026 at 03:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(15) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `nomor` bigint(15) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_user`, `nama`, `alamat`, `nomor`, `tgl_pesan`, `gambar`, `status`) VALUES
(34, 13, 'ayu feblira gersy', 'teluk betung bandar lampung', 6285788113563, '2022-11-24', 'WhatsApp_Image_2022-06-27_at_11_35_18.jpeg', 'Selesai Validasi'),
(46, 13, 'Mike Delhan', 'Yukum jaya', 628962874496, '2026-05-16', '7cbb4497b9c6adae1359c4739ffe18e4.png', 'Selesai Validasi'),
(47, 13, 'Joy', 'Sukarame', 6289628744896, '2026-05-16', '4d3b4938958e71cab596e31fe4a82d41.jpg', 'Menunggu Validasi');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `nama_payment` varchar(500) NOT NULL,
  `nama_penerima` varchar(500) NOT NULL,
  `nomor` varchar(500) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `nama_payment`, `nama_penerima`, `nomor`, `logo`) VALUES
(1, 'Bank BCA', 'Dodi', '24637261235', 'bca.png'),
(2, 'Bank BRI', 'Joy', '156256371', 'bri.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `jumlah` int(25) NOT NULL,
  `harga` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_produk`, `nama_produk`, `tgl_pesan`, `jumlah`, `harga`) VALUES
(28, 25, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-18', 2, 300000),
(29, 25, 19, 'Printer Canon Full Color', '2022-11-18', 2, 1200000),
(30, 25, 20, 'Headset Gaming Rexus Thundervox RGB', '2022-11-18', 1, 200000),
(31, 26, 15, 'Acer Predator Helios T500', '2022-11-18', 1, 35000000),
(32, 26, 19, 'Printer Canon Full Color', '2022-11-18', 1, 1200000),
(33, 26, 20, 'Headset Gaming Rexus Thundervox RGB', '2022-11-18', 1, 200000),
(34, 27, 19, 'Printer Canon Full Color', '2022-11-18', 1, 1200000),
(35, 27, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-18', 1, 300000),
(36, 28, 15, 'Acer Predator Helios T500', '2022-11-20', 1, 35000000),
(37, 29, 28, 'Acer Predator Helios T500', '2022-11-21', 2, 30000000),
(38, 30, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-21', 1, 300000),
(39, 30, 15, 'Acer Predator Helios T500', '2022-11-21', 1, 35000000),
(40, 31, 15, 'Acer Predator Helios T500', '2022-11-22', 1, 35000000),
(41, 31, 19, 'Printer Canon Full Color', '2022-11-22', 1, 1200000),
(42, 32, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-24', 1, 300000),
(43, 33, 15, 'Acer Predator Helios T500', '2022-11-24', 1, 35000000),
(44, 34, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-24', 1, 300000),
(45, 35, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-24', 1, 300000),
(46, 36, 24, 'Acer Predator Helios T800', '2022-11-25', 1, 20000000),
(47, 37, 25, 'asxa', '2022-11-25', 1, 30000000),
(48, 38, 20, 'Headset Gaming Rexus Thundervox RGB', '2022-11-25', 1, 200000),
(49, 38, 30, 'Flashdisk acer 16gb', '2022-11-25', 1, 120000),
(50, 39, 72, 'Kemeja Polos Putih', '2026-05-13', 1, 132000),
(51, 40, 76, 'Hoodie Man City', '2026-05-13', 1, 135000),
(52, 41, 76, 'Hoodie Man City', '2026-05-13', 1, 135000),
(53, 42, 77, 'Jaket Kulit Varcity', '2026-05-13', 1, 250000),
(54, 43, 76, 'Hoodie Man City', '2026-05-13', 1, 135000),
(55, 44, 77, 'Jaket Kulit Varcity', '2026-05-13', 1, 250000),
(56, 45, 77, 'Jaket Kulit Varcity', '2026-05-13', 1, 250000),
(57, 46, 77, 'Jaket Kulit Varcity', '2026-05-16', 1, 250000),
(58, 47, 82, 'Sepatu Sneakers', '2026-05-16', 1, 200000);

--
-- Triggers `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE produk SET stok=stok-NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(4) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `detail_produk` longtext NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `merek`, `harga`, `stok`, `detail_produk`, `kategori`, `gambar`) VALUES
(72, 'Kemeja Polos Putih', 'Alisan', '132000', 1, '<p>Ukuran : XL</p>\r\n\r\n<p>Bahan : Katun</p>\r\n\r\n<p>Lengan Panjang</p>\r\n', 'kemeja', 'ba18c8e21fc52b8c627fc93f20806a97_png_720x720q80.png'),
(73, 'Celana Chinos', 'Aerostreet', '120000', 1, '<p>Ukuran 32</p>\r\n\r\n<p>Hitam</p>\r\n', 'chinos', 'bc3b57fb-1aab-4bd2-a1e2-d8bacce59fd6_jpg~tplv-aphluv4xwc-resize-jpeg_700_0.jpg'),
(74, 'Kaos Distro', 'Uniqlo', '135000', 1, '<p>hsjdjs fskhdfs dfsjf</p>\r\n', 'tshirt', '1d5a9eb3f70f1db06390f56c36bc086522.jpeg'),
(75, 'Sweater Oversize Times Up', 'Times Up', '89000', 1, '<p>wewewgy ysgfsgf uysgfuysgf uysgdf</p>\r\n', 'sweater', 'Screenshot_20210717_013603.png'),
(76, 'Hoodie Man City', 'Master Hoodie', '135000', 1, '<p>wewewgy ysgfsgf uysgfuysgf uysgdf</p>\r\n', 'jaketpria', 'FB_IMG_1657074757722-720x720.jpg'),
(77, 'Jaket Kulit Varcity', 'Urband', '250000', 1, '<p>Ukuran XL</p>\r\n', 'jaketkulit', 'id-11134207-7rasi-m0kzqujdlgp8f8.jpeg'),
(80, 'Kaos Distro', 'Aerostreet', '85000', 1, '<p>Ukuran XL</p>\r\n', 'tshirt', '1d5a9eb3f70f1db06390f56c36bc08653.jpeg'),
(81, 'Celana Jeans', 'Aerostreet', '150000', 1, '<p>Ukuran : XL</p>\r\n', 'jeans', 'images_(1).jpeg'),
(82, 'Sepatu Sneakers', 'Power', '200000', 1, '<p>Ukuran : 42</p>\r\n', 'sepatu', '5281181_1.jpg'),
(83, 'Celana Training', 'Under Armor', '80000', 1, '<p>Ukuran : XL</p>\r\n', 'olahraga', 'c270e9dbc18141ccfc5ccd89e361ddc9_jpg_720x720q80.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `password`, `role`) VALUES
(1, 'admin', 'Admin', 'admin123', '1'),
(5, 'owner', 'Nur Saad', '12345678', '0'),
(8, 'admin2', 'Dedek Mardedek', '1111111', '1'),
(10, 'opang', 'opang', '123', '2'),
(13, 'dodidev', 'Dodi Devrian Andrianto', 'dodidev', '2'),
(14, 'opang123', 'opang', '1234567', '2'),
(15, 'evaaras', 'Muhammad Asyroful Nur Maulana Yusuf', 'yanstirta12', '2'),
(18, 'Devan', 'Devan', 'Devan', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
