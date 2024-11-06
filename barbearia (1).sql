-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Nov-2024 às 21:44
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `barbearia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id_agendamento` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_agenda` int(11) NOT NULL,
  `id_barbeiro` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendas`
--

CREATE TABLE `agendas` (
  `id_agenda` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `dia_da_semana` tinyint(4) NOT NULL,
  `horario` time NOT NULL,
  `data_criacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `agendas`
--

INSERT INTO `agendas` (`id_agenda`, `id_usuario`, `dia_da_semana`, `horario`, `data_criacao`) VALUES
(1, 14, 1, '08:00:00', 0),
(2, 15, 1, '08:30:00', 0),
(3, 16, 1, '09:00:00', 0),
(4, 17, 1, '09:30:00', 0),
(5, 19, 1, '10:00:00', 0),
(6, 21, 1, '10:30:00', 0),
(7, 22, 1, '11:00:00', 0),
(8, 24, 1, '11:30:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `numero` varchar(12) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `numero`, `id_usuario`) VALUES
(1, '21984563254', 14),
(2, '22974586650', 14),
(3, '27977542254', 15),
(4, '11985453320', 16),
(5, '21974563320', 17),
(6, '27985456630', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_bancarios`
--

CREATE TABLE `dados_bancarios` (
  `id_dado_bancario` int(11) NOT NULL,
  `nome_do_banco` varchar(60) NOT NULL,
  `numero_agencia` varchar(15) NOT NULL,
  `numero_conta` varchar(15) NOT NULL,
  `chave_pix` varchar(128) NOT NULL,
  `id_usuario` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dados_bancarios`
--

INSERT INTO `dados_bancarios` (`id_dado_bancario`, `nome_do_banco`, `numero_agencia`, `numero_conta`, `chave_pix`, `id_usuario`) VALUES
(3, 'Nubank', '5698', '55485547', '2198554563325', 18),
(4, 'Nubank', '5698', '55485547', '2198554563325', 21),
(5, 'Nubank', '5698', '55485547', '2198554563325', 22),
(6, 'Nubank', '5698', '55485547', '2198554563325', 23),
(7, 'Nubank', '5698', '55485547', '2198554563325', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `id_grupo` int(11) NOT NULL DEFAULT 1,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `data_de_nascimento`, `id_grupo`, `data_criacao`) VALUES
(14, 'Matheus Andrade', 'mtandrade@mail.com', '2000-10-15', 1, '2024-10-14 16:59:16'),
(15, 'Gb du corte', 'gbducorte021@gmail', '2007-01-01', 2, '2024-10-14 17:07:11'),
(16, 'Nathaly Mendonça', 'nathalymendonça@yahoo.com', '2008-04-10', 2, '2024-10-14 17:24:48'),
(17, 'Karol Santiago', 'karolsantiago@gmail.com', '2008-09-13', 1, '2024-10-18 14:40:37'),
(18, 'Caio Barbosa', 'caiobarbosa@gmail', '2006-07-18', 1, '2024-10-18 14:40:37'),
(19, 'Brunin ', 'bnsantana@yahoo.com.br', '2009-04-06', 2, '2024-10-23 17:28:25'),
(20, 'Lc Santos', 'lucassantos55@mail.com', '2005-12-30', 2, '2024-10-23 17:29:44'),
(21, 'Fp Souza', 'felipesouza@gmail', '2004-09-16', 2, '2024-10-23 17:30:33'),
(22, 'Hanna Abril', 'hannaabril@gmail.com', '2007-10-28', 2, '2024-10-25 14:25:07'),
(23, 'John john', 'johnjohn@mail.com', '2001-08-24', 1, '2024-10-25 14:25:19'),
(24, 'Jc Cardoso', 'jccardoso07@gmail.com', '2003-07-14', 1, '2024-10-25 14:26:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `dados_bancarios`
--
ALTER TABLE `dados_bancarios`
  ADD PRIMARY KEY (`id_dado_bancario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `dados_bancarios`
--
ALTER TABLE `dados_bancarios`
  MODIFY `id_dado_bancario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `contatos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
