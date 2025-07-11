-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08-Jul-2025 às 22:01
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codemaster_12_teste_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `idade` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telemovel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `apelido`, `morada`, `idade`, `email`, `telemovel`) VALUES
(1, 'Fabrício', 'Vidal', 'Covilhã', 44, 'fabricio@email.pt', '999 999 999'),
(2, 'Maria', 'Silva', 'Lisboa', 32, 'maria_2@email.pt', '888 888 888'),
(3, 'José', 'Matos', 'Almada', 76, 'jose@email.pt', '777 777 777'),
(4, 'Débora', 'Sousa', 'Amadora', 19, 'debora@email.pt', '666 666 666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ordenado` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `apelido`, `login`, `senha`, `ordenado`) VALUES
(1, 'Carlos', 'Eduardo', 'c_eduardo', 'praia', 1000.00),
(2, 'Sofia', 'Matos', 's_matos', 'casa', 1500.00),
(3, 'Alice', 'Braga', 'a_braga', 'love', 2000.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motas`
--

CREATE TABLE `motas` (
  `id` int(11) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `motas`
--

INSERT INTO `motas` (`id`, `matricula`, `modelo`, `cor`, `id_cliente`) VALUES
(1, 'AAA 111', 'Honda 125cc', 'Vermelha', 1),
(2, 'BBB 222', 'Yamaha 600cc', 'Azul', 1),
(3, 'CCC 333', 'Kawasaki ninja 400cc', 'Verde', 3),
(4, 'DDD 444', 'Yamaha r3', 'Branca', 2),
(5, 'EEE 555', 'Suzuki Hayabusa', 'Amarela', 2),
(6, 'FFF 666', 'Desportiva 500cc', 'Laranja', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motas_antigo`
--

CREATE TABLE `motas_antigo` (
  `id` int(11) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `telemovel_cliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `motas_antigo`
--

INSERT INTO `motas_antigo` (`id`, `matricula`, `modelo`, `cor`, `nome_cliente`, `email_cliente`, `telemovel_cliente`) VALUES
(1, 'AAA 111', 'Honda 125cc', 'Vermelha', 'Fabrício', 'fabricio@email.pt', '999 999 999'),
(2, 'BBB 222', 'Yamaha 600cc', 'Azul', 'Fabrício', 'fabricio@email.pt', '999 999 999'),
(3, 'CCC 333', 'Kawasaki ninja 400cc', 'Verde', 'José', 'jose@email.pt', '777 777 777'),
(4, 'DDD 444', 'Yamaha r3', 'Branca', 'Maria', 'maria@email.pt', '888 888 888'),
(5, 'EEE 555', 'Suzuki Hayabusa', 'Amarela', 'Maria', 'maria@email.pt', '888 888 888'),
(6, 'FFF 666', 'Desportiva 500cc', 'Laranja', 'Maria', 'maria@email.pt', '888 888 888');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(7,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `stock`) VALUES
(1, 'Caneta Azul', 2.66, 56),
(2, 'X-Acto Branco', 5.00, 10),
(3, 'Papel A4', 3.99, 120),
(4, 'Agenda 2025 Vermelha', 7.89, 14);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `motas`
--
ALTER TABLE `motas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `motas_antigo`
--
ALTER TABLE `motas_antigo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `motas`
--
ALTER TABLE `motas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `motas_antigo`
--
ALTER TABLE `motas_antigo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
