-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archivos`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_archivos`
--

CREATE TABLE `t_archivos` (
  `id_archivo` int(255) NOT NULL,
  `id_categoria` int(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `ruta` text DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_categorias`
--

CREATE TABLE `t_categorias` (
  `id_categoria` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fechaInsert` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_categorias`
--

INSERT INTO `t_categorias` (`id_categoria`, `nombre`, `descripcion`, `fechaInsert`) VALUES
(11, 'Deportes', 'futbol', '2021-06-30 16:22:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_archivos`
--
ALTER TABLE `t_archivos`
  ADD PRIMARY KEY (`id_archivo`),
  ADD UNIQUE KEY `fkArchivoCategoria` (`id_categoria`);

--
-- Indexes for table `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_archivos`
--
ALTER TABLE `t_archivos`
  MODIFY `id_archivo` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_categorias`
--
ALTER TABLE `t_categorias`
  MODIFY `id_categoria` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
