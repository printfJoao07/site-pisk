-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/12/2025 às 21:51
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `BDPisk`
--
CREATE DATABASE IF NOT EXISTS `BDPisk` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BDPisk`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `autor` varchar(120) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` int(11) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `path_livro` varchar(120) NOT NULL,
  `path_capa` varchar(120) DEFAULT NULL,
  `data_lancamento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `id_autor`, `titulo`, `autor`, `descricao`, `preco`, `estado`, `path_livro`, `path_capa`, `data_lancamento`) VALUES
(1, 4, '', 'eu', '', NULL, 'e_edicao', '../archives/livros/6935e2c74e5f9.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `funcao` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `funcao`) VALUES
(1, 'admin', 'admin@piskeditorial.com.br', '$2y$10$aVjl/Iz4eqrcLyku4wGtyeDaWbkLZw3LV8XSmOrJ0WZm6a.F3OQOi', 'admin'),
(4, 'joao', 'joaogabrielmendoncasalles@gmail.com', '$2y$10$KkTfDowSTNLecVg149CDFOYsBlt9m209O7m2TuiUsRjtkKUEpiVvq', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_autor` (`id_autor`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `fk_autor` FOREIGN KEY (`id_autor`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
