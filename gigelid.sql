-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 07:12 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gigelid`
--

-- --------------------------------------------------------

--
-- Table structure for table `kolom`
--

CREATE TABLE `kolom` (
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(24) NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kolom`
--

INSERT INTO `kolom` (`email`, `nama`, `password`, `telpon`) VALUES
('admin2@gmail.com', 'Faisal', 'akbar123', '089601623471'),
('admin3@gmail.com', 'Akbar', 'admin123', '79879797'),
('admin@gmail.com', 'akbar', 'admin123', '9999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kolom`
--
ALTER TABLE `kolom`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telpon` (`telpon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
