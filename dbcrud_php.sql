-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Jan-2024 às 20:04
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbcrud_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusers`
--

DROP TABLE IF EXISTS `tbusers`;
CREATE TABLE IF NOT EXISTS `tbusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusers`
--

INSERT INTO `tbusers` (`id`, `email`, `firstName`, `lastName`, `phone`, `birth_date`) VALUES
(1, 'joao@email.com', 'João', 'Silva', '(11) 1234-5678', '1990-05-15'),
(2, 'maria@email.com', 'Maria', 'Santos', '(21) 9876-5432', '1985-11-28'),
(3, 'carlos@email.com', 'Carlos', 'Oliveira', '(31) 8765-4321', '1982-08-03'),
(4, 'ana@email.com', 'Ana', 'Souza', '(41) 5678-1234', '1978-04-20'),
(5, 'pedro@email.com', 'Pedro', 'Pereira', '(51) 4321-8765', '1995-09-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
