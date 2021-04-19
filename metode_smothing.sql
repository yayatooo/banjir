-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 12:10 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metode_smothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_curah_hujan`
--

CREATE TABLE `tb_curah_hujan` (
  `id_hujan` int(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `januari` int(11) NOT NULL,
  `febuari` int(11) NOT NULL,
  `maret` int(11) NOT NULL,
  `april` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `juni` int(11) NOT NULL,
  `juli` int(11) NOT NULL,
  `agustus` int(11) NOT NULL,
  `september` int(11) NOT NULL,
  `oktober` int(11) NOT NULL,
  `november` int(11) NOT NULL,
  `desember` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_curah_hujan`
--

INSERT INTO `tb_curah_hujan` (`id_hujan`, `tahun`, `januari`, `febuari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`) VALUES
(4, '2011', 183, 97, 140, 279, 337, 54, 75, 175, 209, 140, 283, 136),
(5, '2012', 87, 161, 86, 266, 179, 253, 168, 234, 144, 162, 414, 124),
(6, '2013', 49, 483, 273, 623, 326, 302, 351, 240, 229, 238, 368, 279),
(7, '2014', 106, 60, 169, 226, 424, 334, 253, 219, 151, 178, 380, 332),
(8, '2015', 98, 312, 217, 465, 274, 171, 28, 16, 123, 119, 400, 186),
(9, '2016', 352, 598, 552, 532, 187, 338, 313, 256, 390, 290, 263, 83),
(10, '2017', 128, 212, 234, 232, 533, 262, 155, 171, 97, 317, 310, 59),
(11, '2018', 181, 34, 357, 264, 287, 187, 171, 419, 220, 242, 392, 287),
(12, '2019', 161, 406, 193, 375, 233, 139, 326, 398, 75, 51, 175, 240),
(13, '2020', 97, 294, 367, 428, 272, 202, 133, 110, 211, 254, 151, 39);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasilperhitungan`
--

CREATE TABLE `tb_hasilperhitungan` (
  `id_hasil` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `nilai` int(11) NOT NULL,
  `forceast` decimal(11,2) NOT NULL,
  `error` decimal(11,2) NOT NULL,
  `absolute` decimal(11,2) NOT NULL,
  `squared` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasilperhitungan`
--

INSERT INTO `tb_hasilperhitungan` (`id_hasil`, `tahun`, `bulan`, `nilai`, `forceast`, `error`, `absolute`, `squared`) VALUES
(1, 2011, 'Januari', 183, '183.00', '0.00', '0.00', '0.00'),
(2, 2012, 'Januari', 87, '183.00', '-96.00', '96.00', '9216.00'),
(3, 2013, 'Januari', 49, '106.20', '-57.20', '57.20', '3271.84'),
(4, 2014, 'Januari', 106, '60.44', '45.56', '45.56', '2075.71');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'roni', '202cb962ac59075b964b07152d234b70', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_curah_hujan`
--
ALTER TABLE `tb_curah_hujan`
  ADD PRIMARY KEY (`id_hujan`);

--
-- Indexes for table `tb_hasilperhitungan`
--
ALTER TABLE `tb_hasilperhitungan`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hasilperhitungan`
--
ALTER TABLE `tb_hasilperhitungan`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
