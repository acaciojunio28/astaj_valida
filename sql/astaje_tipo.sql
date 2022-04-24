-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Abr-2022 às 21:59
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `astaj602_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `astaje_tipo`
--

CREATE TABLE `astaje_tipo` (
  `faixa_etaria` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `afinidade_basico` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `plano_gold` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `afinidade_versatil` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `afinidade_pratico` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pleno_platinum` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pleno_diamond` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `astaje_tipo`
--

INSERT INTO `astaje_tipo` (`faixa_etaria`, `afinidade_basico`, `plano_gold`, `afinidade_versatil`, `afinidade_pratico`, `pleno_platinum`, `pleno_diamond`) VALUES
('1', '15000', '16,24', '482,34', '435,35\r\n', '56,48', '87,38'),
('2', '439,65\r\n', '16,24', '559,94\r\n', '505,40\r\n', '56,48', '87,38'),
('3', '510,36\r\n', '16,24', '649,98\r\n', '586,67\r\n', '56,48', '87,38'),
('4', '626,14', '16,24', '797,47\r\n', '719,78\r\n', '56,48', '87,38'),
('5', '741,87\r\n', '16,24', '944,90\r\n', '852,85\r\n', '56,48', '87,38'),
('6', '882,49\r\n', '16,24', '1124,00\r\n', '1014,50\r\n', '56,48', '87,38'),
('7', '926,86\r\n', '16,24', '1180,50\r\n', '1065,51\r\n', '56,48', '87,38'),
('8', '1249,11\r\n', '16,24', '1590,82\r\n', '1435,93\r\n', '56,48', '87,38'),
('9', '1683,26\r\n', '16,24', '2143,88\r\n', '1935,03\r\n', '56,48', '87,38'),
('10', '2268,39\r\n', '16,24', '2889,06\r\n', '2607,66\r\n', '56,48', '87,38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
