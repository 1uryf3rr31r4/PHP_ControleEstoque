-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Jul-2021 às 23:58
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `CodProduto` varchar(9) NOT NULL,
  `NomeProduto` varchar(50) NOT NULL,
  `Quantidade` int(100) DEFAULT NULL,
  `Criado` datetime DEFAULT NULL,
  PRIMARY KEY (`CodProduto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`CodProduto`, `NomeProduto`, `Quantidade`, `Criado`) VALUES
('1', 'Coca Cola', 10, '2021-07-20 12:38:39'),
('2', 'Fanta', 11, '2021-07-20 12:40:32'),
('3', 'Garoto', 12, '2021-07-20 12:52:14'),
('4', 'Tuchaua', 13, '2021-07-20 12:53:45'),
('5', 'Sprite', 14, '2021-07-20 12:54:51'),
('6', 'Soda', 1, '2021-07-20 12:56:36'),
('7', 'Pepsi', 2, '2021-07-20 12:58:50'),
('8', 'Grapete', 3, '2021-07-21 23:15:44'),
('9', 'Fanta Laranja', 4, '2021-07-21 23:20:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `criado` datetime DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nome`, `senha`, `criado`) VALUES
(1, 'Iury', 'd63d033f4ccdc34e8a3eb45f793f7c9d', '2021-07-20 12:00:00'),
(2, 'Pulses', 'f31b342e485234079b324a3422068ca6', '2021-07-26 20:53:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto` ADD FULLTEXT KEY `CodProduto` (`CodProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
