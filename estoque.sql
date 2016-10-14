-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Out-2016 às 01:20
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque`
--
CREATE DATABASE IF NOT EXISTS `estoque` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `estoque`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `ProdId` int(11) NOT NULL AUTO_INCREMENT,
  `ProdNome` varchar(15) NOT NULL,
  `ProdValor` float(10,2) NOT NULL,
  `ProdTipo` varchar(15) NOT NULL,
  `ProdQnt` int(11) NOT NULL,
  `ProdNatureza` varchar(1) NOT NULL,
  `ProdData` date NOT NULL,
  PRIMARY KEY (`ProdId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdId`, `ProdNome`, `ProdValor`, `ProdTipo`, `ProdQnt`, `ProdNatureza`, `ProdData`) VALUES
(1, 're', 45.00, 'fd', 0, 'V', '0000-00-00'),
(2, 're', 45.00, 'fd', 0, 'V', '0000-00-00'),
(3, 're', 54.00, 'dw', 54, 'v', '0000-00-00'),
(4, 'teste', 67.89, 'teste', 5, 'C', '0000-00-00'),
(5, 'Dell 1525', 800.00, 'Notebook', 5, 'C', '0000-00-00'),
(6, 'tre', 34.00, 'dfr', 56, 'V', '0000-00-00'),
(7, 're', 56.00, 'rt', 56, 'V', '0000-00-00'),
(8, 'rt', 56.00, 'tr', 56, 'V', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
