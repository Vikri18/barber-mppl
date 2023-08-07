-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 05:55 PM
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
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `nama`, `nomor_telp`) VALUES
(1, 'asep@gmail.com', 'asep', '08123456781'),
(2, 'rega@gmail.com', 'rega', '08123456789'),
(3, 'nawaf@gmail.com', 'nawaf', '08654531523'),
(4, 'saban@gmail.com', 'saban', '087542546313'),
(5, 'iksan@gmail.com', 'iksan', '08975637461'),
(6, 'coba@gmail.com', 'coba', '087965423412'),
(7, 'ilham@gmail.com', 'ilham', '08796752154'),
(8, 'farhan@gmail.com', 'farhan', '98745632413'),
(9, 'aing@gmail.com', 'aing', '0987543782'),
(10, 'diluar@gmail.com', 'diluar', '086765452'),
(11, 'babi@gmail.com', 'babi', '0812435261'),
(12, 'farhan@gmail.com', 'farhan', '08765463712'),
(13, 'ilham@gmail.com', 'ilham', '08765264537'),
(14, 'fred@gmail.com', 'fred', '0895324512341'),
(15, 'ozil@gmail.com', 'ozil', '08515765241'),
(16, 'neymar@gmail.com', 'neymar', '08656273612'),
(17, 'rudi@gmail.com', 'rudi', '08526451546'),
(18, 'rudi@gmail.com', 'rudi', '08526451546'),
(19, 'bobi@gmail.com', 'bobi', '08564673647'),
(20, 'ucup@gmail.com', 'ucup', '087376321323'),
(21, 'tes@gmail.com', 'tes', '0982843414'),
(22, 'harun@gmail.com', 'harun', '0982843414'),
(23, 'harun@gmail.com', 'harun', '0872732313'),
(24, 'tes@gmail.com', 'tes', '0875425463131'),
(25, 'tes@gmail.com', 'tes', '0875425463132'),
(26, 'tes@gmail.com', 'tes', '0875425463132'),
(27, 'tes@gmail.com', 'tes', '0875425463133'),
(28, 'tes@gmail.com', 'tes', '0875425463133'),
(29, 'tes@gmail.com', 'tes', '0875425463133'),
(30, 'tes@gmail.com', 'tes', '0875425463133'),
(31, 'tes@gmail.com', 'tes', '0875425463133'),
(32, 'tes@gmail.com', 'tes', '0875425463133'),
(33, 'tes@gmail.com', 'tes', '0875425463133'),
(34, 'tes@gmail.com', 'tes', '0875425463133'),
(35, 'tes@gmail.com', 'tes', '0875425463133'),
(36, 'tesss@gmail.com', 'tesss', '0875425463133'),
(37, 'tes@gmail.com', 'tes', '0875425463133'),
(38, 'tes@gmail.com', 'tes', '0875425463133'),
(39, 'tes@gmail.com', 'tes', '0875425463133'),
(40, 'charisa@gmail.com', 'charisa', '086545315234'),
(41, 'dika@gmail.com', 'dika', '0875425463133'),
(42, 'cuk@gmail.com', 'cuk', '08964652641'),
(43, 'dika@gmail.com', 'dika', '086532653'),
(44, 'dika@gmail.com', 'dika', '086532653'),
(45, 'kontol@gmail.com', 'kntol', '08654531523'),
(46, 'kontol@gmail.com', 'kntol', '08654531523'),
(47, 'kontol@gmail.com', 'kntol', '08654531523'),
(48, 'dis@gmail.com', 'dis', '08516726364'),
(49, 'maguire@gmail.com', 'maguire', '08654531523'),
(50, 'cuk@gmail.com', 'cuk', '08964652641'),
(51, 'cuk@gmail.com', 'cukk', '08964652641'),
(52, 'cuk@gmail.com', 'cukkk', '08964652641'),
(53, 'cuk@gmail.com', 'cukkkk', '08964652641'),
(54, 'cuk@gmail.com', 'cukkkkk', '08964652641'),
(55, 'cuk@gmail.com', 'cukkkkkk', '08964652641'),
(56, 'cuk@gmail.com', 'cuk1', '08964652641'),
(57, 'cuk@gmail.com', 'cuk2', '08964652641'),
(58, 'cuk@gmail.com', 'cuk3', '08964652641'),
(59, 'ipul@gmail.com', 'ipul', '0876413123321'),
(60, 'ipul@gmail.com', 'ipul', '0876413123321'),
(61, 'ipul@gmail.com', 'ipul', '0876413123321');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nama_layanan` enum('CUKUR','WARNA RAMBUT','PIJAT','SPA') NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `id_pegawai`, `nama_layanan`, `harga`) VALUES
(1, 2, 'CUKUR', 50000),
(2, 3, 'CUKUR', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `keterangan_pembayaran` enum('LUNAS','BELUM LUNAS') NOT NULL,
  `keterangan_pesanan` enum('SELESAI','BELUM SELESAI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_layanan`, `id_customer`, `tanggal_pemesanan`, `catatan`, `keterangan_pembayaran`, `keterangan_pesanan`) VALUES
(8, 1, 19, '2023-08-07', 'dfdfdf', 'LUNAS', 'SELESAI'),
(9, 1, 20, '2023-08-07', 'asdas', 'LUNAS', 'SELESAI'),
(12, 2, 23, '2023-08-07', 'adss', 'LUNAS', 'SELESAI'),
(14, 1, 25, '2023-08-07', 'sadd', 'LUNAS', 'SELESAI'),
(16, 2, 27, '2023-08-07', 'sadd', 'LUNAS', 'BELUM SELESAI'),
(19, 2, 30, '2023-08-07', 'sadd', 'LUNAS', 'SELESAI'),
(23, 1, 34, '2023-08-07', 'sadd', 'LUNAS', 'SELESAI'),
(26, 2, 37, '2023-08-07', 'sdada', 'LUNAS', 'SELESAI'),
(29, 1, 40, '2023-08-07', '-', 'LUNAS', 'SELESAI'),
(31, 2, 42, '2023-08-07', 'trewqwe', 'LUNAS', 'SELESAI'),
(32, 2, 43, '2023-08-07', 'dasdas', 'LUNAS', 'SELESAI'),
(33, 2, 44, '2023-08-07', 'dasdas', 'LUNAS', 'SELESAI'),
(34, 2, 45, '2023-08-07', 'kontol', 'LUNAS', 'SELESAI'),
(35, 1, 46, '2023-08-07', 'kontol', 'LUNAS', 'SELESAI'),
(37, 1, 48, '2023-08-07', 'sdadas', 'LUNAS', 'SELESAI'),
(38, 2, 49, '2023-08-07', 'siuuuu', 'LUNAS', 'SELESAI'),
(39, 1, 50, '2023-08-07', 'trewqwe', 'LUNAS', 'BELUM SELESAI'),
(40, 1, 51, '2023-08-07', 'trewqwe', 'LUNAS', 'BELUM SELESAI'),
(41, 2, 52, '2023-08-07', 'trewqwe', 'LUNAS', 'BELUM SELESAI'),
(42, 1, 53, '2023-08-07', 'trewqwe', 'LUNAS', 'SELESAI'),
(43, 2, 54, '2023-08-07', 'trewqwe', 'LUNAS', 'SELESAI'),
(44, 2, 55, '2023-08-07', 'trewqwe', 'LUNAS', 'SELESAI'),
(45, 2, 56, '2023-08-07', 'trewqwe', 'LUNAS', 'BELUM SELESAI'),
(46, 1, 57, '2023-08-07', 'trewqwe', 'LUNAS', 'SELESAI'),
(47, 1, 58, '2023-08-07', 'trewqwe', 'LUNAS', 'SELESAI'),
(48, 2, 59, '2023-08-07', 'asda', 'LUNAS', 'BELUM SELESAI'),
(49, 1, 60, '2023-08-07', 'asda', 'LUNAS', 'SELESAI'),
(50, 1, 61, '2023-08-07', 'asda', 'LUNAS', 'BELUM SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rolee` enum('super admin','pegawai') NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `rolee`, `nama`, `alamat`) VALUES
(1, 'admin', 'admin', 'super admin', 'Vikri', 'jl. tubagus ismail bawah'),
(2, 'udin', 'udin123', 'pegawai', 'udin', 'mars'),
(3, 'farhan', 'farhan123', 'pegawai', 'farhan', 'jl abcdef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER` (`id_pegawai`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_LAYANAN` (`id_layanan`),
  ADD KEY `FK_ID_USER` (`id_customer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`id_pegawai`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `FK_ID_LAYANAN` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_USER` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
