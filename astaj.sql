-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Out-2021 às 17:21
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `astaj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(150) DEFAULT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `cpf` varchar(150) DEFAULT NULL,
  `tipo_de_plano` varchar(250) DEFAULT NULL,
  `beneficiario` varchar(250) DEFAULT NULL,
  `idade` varchar(150) DEFAULT NULL,
  `adesao` varchar(250) DEFAULT NULL,
  `desconto` varchar(150) DEFAULT NULL,
  `desconto_total` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `matricula`, `nome`, `cpf`, `tipo_de_plano`, `beneficiario`, `idade`, `adesao`, `desconto`, `desconto_total`) VALUES
(23, '41223', 'acacio.junio', '013.076.131-10', 'Afinidade Versatico', 'Dependente', '53', '2021-10-29', '123,32', '1254,23'),
(4, '12332', 'junio', '123655', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '12332', 'junio', '123655', 'trarar', NULL, NULL, NULL, NULL, NULL),
(6, '12332', 'junio', '123655', 'trarar', 'nnn', NULL, NULL, NULL, NULL),
(7, '12332', 'junio', '123655', 'trarar', 'nnn', '25', NULL, NULL, NULL),
(22, '41223', 'acacio.junio', '013.076.131-10', 'Afinidade Versatico', 'Dependente', '53', '2010-01-22', '123,32', '1254,23'),
(9, '12332', 'junio', '123655', 'trarar', 'nnn', '25', 'nora', '12', '1253'),
(10, '123', 'acacio.junio', '013.076.131-10', 'tuuu', 'ddd', '32', '21/05/1988', '123,32', '1254,23'),
(11, '123', 'acacio.junio', '013.076.131-10', 'tuuu', 'ddd', '32', '21/05/1988', '123,32', '1254,23'),
(12, '123', 'acacio.junio', '013.076.131-10', 'tuuu', 'ddd', '32', '21/05/1988', '123,32', '1254,23'),
(13, '123', 'acacio.junio', '013.076.131-10', 'rosa', 'ddd', '32', '21/05/1988', '123,32', '1254,23'),
(15, '123', 'acacio.junio', '013.076.131-10', 'Afinidade BÃ¡sico', 'Titular', '', '21/05/1988', '123,32', '1254,23'),
(16, '123', 'acacio.junio', '013.076.131-10', 'Afinidade BÃ¡sico', 'Titular', '', '2021-10-03', '123,32', '1254,23'),
(17, '123', 'acacio.junio', '013.076.131-10', 'Afinidade PrÃ¡tico', 'Titular', '', '2021-10-19', '123,32', '1254,23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
