-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Maio-2019 às 15:06
-- Versão do servidor: 5.7.24
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_landing_page_teste_avaliativo`
--
CREATE DATABASE IF NOT EXISTS `projeto_landing_page_teste_avaliativo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projeto_landing_page_teste_avaliativo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `form_assuntos`
--

DROP TABLE IF EXISTS `form_assuntos`;
CREATE TABLE IF NOT EXISTS `form_assuntos` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `assunto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `form_assuntos`
--

INSERT INTO `form_assuntos` (`id`, `assunto`) VALUES
(1, 'Dúvida'),
(2, 'Feedback'),
(3, 'Outros');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
