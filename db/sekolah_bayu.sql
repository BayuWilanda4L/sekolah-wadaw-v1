-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2016 at 10:37 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah_bayu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`, `nama`, `jabatan`) VALUES
('bayuwilanda', 'qwerty', 'Muhamad Bayu Wilanda', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`judul`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `deskripsi`) VALUES
(7, 'Bakti Sosial', 'gvsahdfsabf sadiohvfbsa opfosaf asouhf safh asoufhs afsaf', 'Kegiatan rutin SMAN 1 Wadaw');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`judul`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `tanggal`) VALUES
(23, 'Jadwal Libur Semester 2', '1 Januari 2015 - 30 Desember 2015', '0000-00-00'),
(25, 'Jadwal Piket', 'Senin : Dudung, Dadang\r\nSelasa : Udin, Sudrun', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
