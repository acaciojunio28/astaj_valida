-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Abr-2022 às 21:41
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
-- Estrutura da tabela `astaje_valida_cadastro`
--

CREATE TABLE `astaje_valida_cadastro` (
  `id` int(11) NOT NULL,
  `matricula` varchar(150) DEFAULT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `cpf` varchar(150) DEFAULT NULL,
  `tipo_de_plano` varchar(250) DEFAULT NULL,
  `tipo_de_plano_odonto` varchar(255) DEFAULT NULL,
  `beneficiario` varchar(250) DEFAULT NULL,
  `idade` varchar(150) DEFAULT NULL,
  `adesao` varchar(250) DEFAULT NULL,
  `desconto` varchar(150) DEFAULT NULL,
  `desconto_total` varchar(150) DEFAULT NULL,
  `data_nascimento` varchar(150) DEFAULT NULL,
  `faixa_etaria` varchar(150) DEFAULT NULL,
  `ativo` varchar(12) NOT NULL DEFAULT 'Ativo',
  `telefone` varchar(150) DEFAULT NULL,
  `cep` varchar(150) DEFAULT NULL,
  `rua` varchar(150) DEFAULT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `estado` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `astaje_valida_cadastro`
--

INSERT INTO `astaje_valida_cadastro` (`id`, `matricula`, `nome`, `cpf`, `tipo_de_plano`, `tipo_de_plano_odonto`, `beneficiario`, `idade`, `adesao`, `desconto`, `desconto_total`, `data_nascimento`, `faixa_etaria`, `ativo`, `telefone`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `estado`) VALUES
(170, '1', 'Carlos Araújo de Sousa', '333.333.333-33', 'afinidade_basico', 'plano_gold', 'T', '31', '2022-04-21', '15016.24', NULL, '1991-02-27', '1', 'Ativo', '(61) 99263-4710', '72500403', 'QR 100 Conjunto B', '10', 'Santa Maria', 'Brasília', 'DF'),
(171, '21', 'Carlos Araújo de Sousa', '333.333.333-33', 'afinidade_basico', 'plano_gold', 'T', '0', '2022-04-22', '15016.24', NULL, '2022-04-13', '1', 'Ativo', '(61) 99263-4710', '72500403', 'aaa', '10', 'aaa', 'Santa Maria', 'Distrito federal');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `astaje_valida_cadastro`
--
ALTER TABLE `astaje_valida_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `astaje_valida_cadastro`
--
ALTER TABLE `astaje_valida_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
