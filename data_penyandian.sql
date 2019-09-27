-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2019 at 05:58 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penyandian`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_pelanggan`
--

CREATE TABLE `akun_pelanggan` (
  `id_pel` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_recovery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_pelanggan`
--

INSERT INTO `akun_pelanggan` (`id_pel`, `username`, `password`, `password_recovery`) VALUES
(1, 'muiz', 'muiz', 'nama saya'),
(2, 'Khalesi', 'valarmorghulis', 'Salam orang bravos'),
(3, 'Tyrion', '12345678', 'One to 8'),
(4, 'Bruce', 'batman', 'Bruce Wayne'),
(5, 'Bean', 'rowan', 'first name of the actor');

-- --------------------------------------------------------

--
-- Table structure for table `data_piutang`
--

CREATE TABLE `data_piutang` (
  `id_pel` varchar(10) NOT NULL,
  `jumlah_hutang` varchar(25) NOT NULL,
  `jumlah_piutang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_piutang`
--

INSERT INTO `data_piutang` (`id_pel`, `jumlah_hutang`, `jumlah_piutang`) VALUES
('A2', '4000', '2000'),
('M1', '20000', '40000'),
('M2', '12000', '300000'),
('M3', '100000', '2000000'),
('O1', '5000000000', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pel` int(10) NOT NULL,
  `nama_pel` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pel`, `nama_pel`, `no_hp`, `alamat`, `email`) VALUES
(1, 'Muiz', '1283128312389', 'hadhkj', 'kjhadhkjad'),
(2, 'Ahmad', '098321892839', 'Kecepit', 'ahmad@gmail.com'),
(3, 'Jon', '0999821381237', 'Winterfell', 'jon@snow.com'),
(4, 'Robin Arryn', '033222101283', 'Eyrie', 'robin@king.com'),
(5, 'Drogo', '1238198381239', 'Vaes Dothrak', 'khal@drogo.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Muiz', 'muiz', '123'),
(2, 'Yujeng', 'renal', '213'),
(4, 'Dani', 'dani', '123'),
(9, 'Mail', 'mailon', 'jkasdh'),
(12, 'Pale', 'pale', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_pelanggan`
--
ALTER TABLE `akun_pelanggan`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `data_piutang`
--
ALTER TABLE `data_piutang`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_pelanggan`
--
ALTER TABLE `akun_pelanggan`
  MODIFY `id_pel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
