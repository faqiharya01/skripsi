-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 08:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_pln_nb_faqih`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(15) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `telepon`, `email`, `username`, `password`, `status`, `keterangan`) VALUES
('USR03', 'Faqih Arya', '08211069206', 'faqiharya00@gmail.com', '1', '1', 'Aktif', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datalatih`
--

CREATE TABLE `tb_datalatih` (
  `id_datalatih` int(8) NOT NULL,
  `kriteria1` varchar(50) NOT NULL,
  `kriteria2` varchar(50) NOT NULL,
  `kriteria3` varchar(50) NOT NULL,
  `kriteria4` varchar(50) NOT NULL,
  `kriteria5` varchar(50) NOT NULL,
  `kriteria6` varchar(50) NOT NULL,
  `kriteria7` varchar(50) NOT NULL,
  `kriteria8` varchar(50) NOT NULL,
  `kriteria9` varchar(50) NOT NULL,
  `kriteria10` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datalatih`
--

INSERT INTO `tb_datalatih` (`id_datalatih`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`, `kriteria6`, `kriteria7`, `kriteria8`, `kriteria9`, `kriteria10`, `kategori`, `keterangan`) VALUES
(1, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Sangat kecanduan game', '1'),
(2, '12 sampai 24 tahun', '8 sampai 12 jam', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Kecanduan game', '2'),
(3, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Kecanduan game', '3'),
(4, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak kecanduan game', '4'),
(5, '12 sampai 24 tahun', '4 sampai 8 jam', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Sedikit kecanduan game', '5'),
(6, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Sedikit kecanduan game', '6'),
(7, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Sedikit kecanduan game', '7'),
(8, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Sedikit kecanduan game', '8'),
(9, '12 sampai 24 tahun', '4 sampai 8 jam', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Kecanduan game', '9'),
(10, 'Diatas 24 tahun', 'Diatas 12 jam', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Sangat kecanduan game', '10'),
(11, 'Diatas 24 tahun', 'Diatas 12 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Sangat kecanduan game', '11'),
(12, 'Diatas 24 tahun', '8 sampai 12 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Kecanduan game', '12'),
(13, 'Diatas 24 tahun', '8 sampai 12 jam', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Kecanduan game', '13'),
(14, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '14'),
(15, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '15'),
(16, '12 sampai 24 tahun', 'Diatas 12 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Sangat kecanduan game', '16'),
(17, '12 sampai 24 tahun', 'Diatas 12 jam', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Sangat kecanduan game', '17'),
(18, 'Diatas 24 tahun', 'Diatas 12 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '18'),
(19, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '19'),
(20, 'Dibawah 12 tahun', 'Dibawah 4 jam', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Sedikit kecanduan game', '20'),
(21, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Sedikit kecanduan game', '21'),
(22, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Kecanduan game', '22'),
(23, '12 sampai 24 tahun', '8 sampai 12 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Kecanduan game', '23'),
(24, '12 sampai 24 tahun', 'Diatas 12 jam', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Sangat kecanduan game', '24'),
(25, '12 sampai 24 tahun', 'Diatas 12 jam', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Sangat kecanduan game', '25'),
(26, 'Dibawah 12 tahun', 'Dibawah 4 jam', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak kecanduan game', '26'),
(27, 'Diatas 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Sedikit kecanduan game', '27'),
(28, 'Diatas 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Sedikit kecanduan game', '28'),
(29, 'Diatas 24 tahun', '8 sampai 12 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '29'),
(30, '12 sampai 24 tahun', '8 sampai 12 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Kecanduan game', '30'),
(31, '12 sampai 24 tahun', '8 sampai 12 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Kecanduan game', '31'),
(32, 'Diatas 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Sedikit kecanduan game', '32'),
(33, 'Diatas 24 tahun', 'Diatas 12 jam', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Sedikit kecanduan game', '33'),
(34, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Sedikit kecanduan game', '34'),
(35, '12 sampai 24 tahun', '8 sampai 12 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Kecanduan game', '35'),
(36, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Sedikit kecanduan game', '36'),
(37, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak kecanduan game', '37'),
(38, '12 sampai 24 tahun', 'Diatas 12 jam', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Sedikit kecanduan game', '38'),
(39, 'Diatas 24 tahun', '8 sampai 12 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak kecanduan game', '39'),
(40, 'Diatas 24 tahun', 'Dibawah 4 jam', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Sedikit kecanduan game', '40'),
(41, 'Dibawah 12 tahun', 'Diatas 12 jam', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Sangat kecanduan game', '41'),
(42, 'Dibawah 12 tahun', 'Dibawah 4 jam', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Sedikit kecanduan game', '42'),
(43, 'Dibawah 12 tahun', '8 sampai 12 jam', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak kecanduan game', '43'),
(44, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak kecanduan game', '44'),
(45, 'Diatas 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Sedikit kecanduan game', '45'),
(46, 'Diatas 24 tahun', '8 sampai 12 jam', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Sangat kecanduan game', '46'),
(47, 'Diatas 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak kecanduan game', '47'),
(48, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak kecanduan game', '48'),
(49, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak kecanduan game', '49'),
(50, 'Dibawah 12 tahun', 'Diatas 12 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', '', 'Tidak', 'Tidak kecanduan game', '50'),
(51, 'Diatas 24 tahun', 'Dibawah 4 jam', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Sedikit kecanduan game', '51'),
(52, 'Dibawah 12 tahun', 'Diatas 12 jam', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Sangat kecanduan game', '52'),
(53, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak kecanduan game', '53'),
(54, 'Dibawah 12 tahun', '8 sampai 12 jam', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Sangat kecanduan game', '54'),
(55, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Kecanduan game', '55'),
(56, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Sedikit kecanduan game', '56'),
(57, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Sangat kecanduan game', '57'),
(58, 'Diatas 24 tahun', '8 sampai 12 jam', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak kecanduan game', '58'),
(59, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '59'),
(60, '12 sampai 24 tahun', 'Diatas 12 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Sedikit kecanduan game', '60'),
(61, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Sedikit kecanduan game', '61'),
(62, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Sedikit kecanduan game', '62'),
(63, 'Diatas 24 tahun', 'Dibawah 4 jam', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Kecanduan game', '63'),
(64, 'Dibawah 12 tahun', 'Dibawah 4 jam', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Kecanduan game', '64'),
(65, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Sedikit kecanduan game', '65'),
(66, 'Diatas 24 tahun', '4 sampai 8 jam', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak kecanduan game', '66'),
(67, '12 sampai 24 tahun', 'Diatas 12 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Sangat kecanduan game', '67'),
(68, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Sedikit kecanduan game', '68'),
(69, '12 sampai 24 tahun', 'Diatas 12 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Kecanduan game', '69'),
(70, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Sangat kecanduan game', '70'),
(71, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '71'),
(72, '12 sampai 24 tahun', '8 sampai 12 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak kecanduan game', '72'),
(73, '12 sampai 24 tahun', '4 sampai 8 jam', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Kecanduan game', '73'),
(74, 'Diatas 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '74'),
(75, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Sangat kecanduan game', '75'),
(76, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Sedikit kecanduan game', '76'),
(77, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Kecanduan game', '77'),
(78, 'Dibawah 12 tahun', '8 sampai 12 jam', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Sangat kecanduan game', '78'),
(79, 'Diatas 24 tahun', '4 sampai 8 jam', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Kecanduan game', '79'),
(80, 'Dibawah 12 tahun', 'Diatas 12 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Sedikit kecanduan game', '80'),
(81, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak kecanduan game', '81'),
(82, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Sangat kecanduan game', '82'),
(83, 'Diatas 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Sedikit kecanduan game', '83'),
(84, 'Diatas 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak kecanduan game', '84'),
(85, '12 sampai 24 tahun', 'Diatas 12 jam', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak kecanduan game', '85'),
(86, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Sedikit kecanduan game', '86'),
(87, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Sedikit kecanduan game', '87'),
(88, '12 sampai 24 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Sangat kecanduan game', '88'),
(89, 'Diatas 24 tahun', '4 sampai 8 jam', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Sangat kecanduan game', '89'),
(90, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Sangat kecanduan game', '90'),
(91, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Kecanduan game', '91'),
(92, '12 sampai 24 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Kecanduan game', '92'),
(93, 'Dibawah 12 tahun', '4 sampai 8 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Kecanduan game', '93'),
(94, 'Diatas 24 tahun', 'Dibawah 4 jam', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak kecanduan game', '94'),
(96, 'Dibawah 12 tahun', 'Dibawah 4 jam', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Kecanduan game', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengujian`
--

CREATE TABLE `tb_pengujian` (
  `id_pengujian` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kriteria1` varchar(20) NOT NULL,
  `kriteria2` varchar(20) NOT NULL,
  `kriteria3` varchar(20) NOT NULL,
  `kriteria4` varchar(20) NOT NULL,
  `kriteria5` varchar(20) NOT NULL,
  `kriteria6` varchar(20) NOT NULL,
  `kriteria7` varchar(20) NOT NULL,
  `kriteria8` varchar(20) NOT NULL,
  `kriteria9` varchar(20) NOT NULL,
  `kriteria10` varchar(20) NOT NULL,
  `rekapitulasi` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengujian`
--

INSERT INTO `tb_pengujian` (`id_pengujian`, `nama`, `email`, `tanggal`, `jam`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`, `kriteria6`, `kriteria7`, `kriteria8`, `kriteria9`, `kriteria10`, `rekapitulasi`, `kategori`, `keterangan`) VALUES
(110, 'faqih', 'faqih@gmail.com', '2021-07-19', '21:06:36', '12 sampai 24 tahun', 'Dibawah 4 jam', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Kecanduan game => (28/77) x (16/28) x (4/28) x (4/', 'Sedikit kecanduan game', '0.0001653266003756');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_datalatih`
--
ALTER TABLE `tb_datalatih`
  ADD PRIMARY KEY (`id_datalatih`);

--
-- Indexes for table `tb_pengujian`
--
ALTER TABLE `tb_pengujian`
  ADD PRIMARY KEY (`id_pengujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_datalatih`
--
ALTER TABLE `tb_datalatih`
  MODIFY `id_datalatih` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tb_pengujian`
--
ALTER TABLE `tb_pengujian`
  MODIFY `id_pengujian` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
