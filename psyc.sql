-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 02:48 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psyc`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `id_konseling` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `hasil` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_form`, `id_konseling`, `id_pelanggan`, `keluhan`, `hasil`, `gambar`) VALUES
(16, 3, 2, 'Pusing Kepala', 'Istirahat yang cukup', ''),
(17, 3, 3, 'Sakit gigi', 'Rajin gosok gigi', ''),
(18, 1, 4, 'Depresi', 'Kurang makan dan tidur', ''),
(19, 2, 4, 'coba keluhan\r\n', '', ''),
(20, 1, 5, 'sadasca', '', ''),
(21, 2, 1, 'sakit depresi\r\n', '', ''),
(22, 1, 1, 'stress', '', ''),
(23, 1, 1, 'xldkzjlkzjd', '', 'Screenshot (196).png'),
(24, 4, 1, 'stress se', '', 'Screenshot (196).png'),
(25, 3, 2, 'panas', '', 'Screenshot (191).png'),
(26, 5, 2, 'halo', '', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Psikiater'),
(2, 'Psikolog');

-- --------------------------------------------------------

--
-- Table structure for table `konseling`
--

CREATE TABLE `konseling` (
  `id_konseling` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nama_konseling` varchar(150) NOT NULL,
  `pengalaman` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(150) NOT NULL,
  `jadwal` varchar(150) NOT NULL,
  `tarif` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konseling`
--

INSERT INTO `konseling` (`id_konseling`, `id_kategori`, `id_status`, `nama_konseling`, `pengalaman`, `alamat`, `no_hp`, `jadwal`, `tarif`) VALUES
(1, 1, 1, 'Joko Prayitno', '5 Tahun', 'Jalan Danu Poso 1 G2D 24', '085706705488', 'Setiap Hari, 10:00-17:00', 'Rp. 85000'),
(2, 2, 2, 'Beni Suharyanto', '1 Tahun', 'Buring, Malang', '0856943932', 'Setiap Hari, 12:00-20:00', 'Rp. 60000'),
(3, 1, 1, 'Sutrisno', '2 Tahun', 'Jalan Soekarno-hatta No. 93', '0367403234', 'Setiap Hari 08:00-18:00', 'Rp. 45000'),
(4, 2, 1, 'Edi Santoso', '2,5 Tahun', 'Jalan Tidar Malang', '0875677533', 'Setiap Hari, 09:00-13:00', 'Rp. 55000'),
(5, 1, 1, 'Cuti Prihatini', '1 Tahun', 'Sukun, Malang', '0876578900', 'Setiap Hari, 11:00-15:00', 'Rp. 90000');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'psikater');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'bambang', 'Malang', '0857632788', 'bambang', '123'),
(2, 'Helmi', 'Jalan Danau Poso 2 G2D 24', '08219845634', 'helmi', '123'),
(3, 'Adel', 'Ponorogo', '0856782823', 'adel', '123'),
(4, 'Pak Firdaus', 'Malang', '08576994894', 'pakfirdaus', '123'),
(5, 'bambang', 'Jalan Danau Ranau 1 No 35', '0857632788', 'tamu', 'tamu');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Available'),
(2, 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`) VALUES
(1, 'admin', 'admin', 'arya', 1),
(2, 'psikater', 'psikater', 'wahyu', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_konseling` (`id_konseling`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konseling`
--
ALTER TABLE `konseling`
  ADD PRIMARY KEY (`id_konseling`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konseling`
--
ALTER TABLE `konseling`
  MODIFY `id_konseling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konseling`
--
ALTER TABLE `konseling`
  ADD CONSTRAINT `konseling_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `konseling_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
