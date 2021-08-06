-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 10:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `mz_catalogo`
--

CREATE TABLE `mz_catalogo` (
  `catlg_id` int(11) NOT NULL,
  `catlg_nome` varchar(250) NOT NULL,
  `catlg_icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mz_catalogo`
--

INSERT INTO `mz_catalogo` (`catlg_id`, `catlg_nome`, `catlg_icon`) VALUES
(1, 'Livro', 'book'),
(2, 'Magazine', 'magazine'),
(3, 'Video', 'video'),
(4, 'Audio Livro', 'audio');

-- --------------------------------------------------------

--
-- Table structure for table `mz_categoria`
--

CREATE TABLE `mz_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(250) NOT NULL,
  `cat_img` varchar(250) NOT NULL,
  `cat_slug` varchar(250) NOT NULL,
  `cat_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mz_categoria`
--

INSERT INTO `mz_categoria` (`cat_id`, `cat_nome`, `cat_img`, `cat_slug`, `cat_link`) VALUES
(1, 'Academicos', '', 'academico', ''),
(2, 'Infantis', '', 'infantil', ''),
(3, 'Adolescentes', '', 'adolescentes', '');

-- --------------------------------------------------------

--
-- Table structure for table `mz_livro`
--

CREATE TABLE `mz_livro` (
  `livro_id` int(11) NOT NULL,
  `livro_titulo` varchar(250) NOT NULL,
  `livro_autor` varchar(250) NOT NULL,
  `livro_ISBN` varchar(250) NOT NULL,
  `livro_prologo` varchar(250) NOT NULL,
  `livro_cat` int(11) NOT NULL,
  `livro_img` varchar(250) NOT NULL,
  `livro_catalogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mz_livro`
--

INSERT INTO `mz_livro` (`livro_id`, `livro_titulo`, `livro_autor`, `livro_ISBN`, `livro_prologo`, `livro_cat`, `livro_img`, `livro_catalogo`) VALUES
(1, 'Livro 1', 'Sr Escritor Exemplo', '1105412053', 'Este livro conta a historia de ...', 1, '01.jpg', 1),
(2, 'Livro 2', 'Sr Escritor 2', '110541205313', 'Este livro conta a historia de ...', 2, '02.jpg', 2),
(3, 'Livro 1', 'Sr Escritor Exemplo', '1105412053', 'Este livro conta a historia de ...', 1, '03.jpg', 1),
(4, 'Livro 2', 'Sr Escritor 2', '110541205313', 'Este livro conta a historia de ...', 2, '04.jpg', 1),
(5, 'Livro 1', 'Sr Escritor Exemplo', '1105412053', 'Este livro conta a historia de ...', 1, '05.jpg', 1),
(6, 'Livro 2', 'Sr Escritor 2', '110541205313', 'Este livro conta a historia de ...', 2, '06.jpg', 2),
(7, 'Livro 1', 'Sr Escritor Exemplo', '1105412053', 'Este livro conta a historia de ...', 1, '07.jpg', 2),
(8, 'Livro 2', 'Sr Escritor 2', '110541205313', 'Este livro conta a historia de ...', 2, '08.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mz_catalogo`
--
ALTER TABLE `mz_catalogo`
  ADD PRIMARY KEY (`catlg_id`);

--
-- Indexes for table `mz_categoria`
--
ALTER TABLE `mz_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `mz_livro`
--
ALTER TABLE `mz_livro`
  ADD PRIMARY KEY (`livro_id`),
  ADD KEY `FK_categoria_id` (`livro_cat`) USING BTREE,
  ADD KEY `FK_catalogo_id` (`livro_catalogo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mz_catalogo`
--
ALTER TABLE `mz_catalogo`
  MODIFY `catlg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mz_categoria`
--
ALTER TABLE `mz_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mz_livro`
--
ALTER TABLE `mz_livro`
  MODIFY `livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mz_livro`
--
ALTER TABLE `mz_livro`
  ADD CONSTRAINT `FK_cataegoria_id` FOREIGN KEY (`livro_cat`) REFERENCES `mz_categoria` (`cat_id`),
  ADD CONSTRAINT `FK_catalogo_id` FOREIGN KEY (`livro_catalogo`) REFERENCES `mz_catalogo` (`catlg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
