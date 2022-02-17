-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 07:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_indocrete`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_customer_indocrete`
--

CREATE TABLE `data_customer_indocrete` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki laki','perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_customer_indocrete`
--

INSERT INTO `data_customer_indocrete` (`id`, `tanggal`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `perusahaan`, `jabatan`) VALUES
(16, '2021-09-08', 'dany', 'laki laki', 'jl vi/19', 8123, 'toyota', 'staff'),
(17, '2020-05-01', 'duna', 'perempuan', 'jl kebalen', 628123499, 'telkomsel', 'HRD'),
(18, '2021-08-20', 'ady', 'laki laki', 'perumahan gadang', 628922112, 'sigma', 'it support');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_customer_indocrete`
--
ALTER TABLE `data_customer_indocrete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_customer_indocrete`
--
ALTER TABLE `data_customer_indocrete`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
