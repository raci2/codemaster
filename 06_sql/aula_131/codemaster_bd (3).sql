-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jul-2025 às 20:47
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
-- Banco de dados: `codemaster_bd`
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
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `apelido`, `morada`, `idade`) VALUES
(1, 'Fabricio', 'Vidal', 'Covilha', 44),
(2, 'Maria', 'Silva', 'Lisboa', 32),
(3, 'José', 'Matos', 'Almada', 76),
(4, 'Debra', 'Sousa', 'Amadora', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `stock`, `fornecedor`, `codigo`) VALUES
(1, 'Caneta Azul', 2.66, 56, 'Papel PT', 100),
(2, 'X-Acto Branco', 5.00, 10, 'Pingo Doce', 101),
(3, 'Papel A4', 3.99, 120, 'Papel PT', 102),
(4, 'Caneta Vermelha', 1.25, 32, 'Pingo Doce', 103),
(5, 'Caneta Verde', 1.45, 22, 'Pingo Doce', 104),
(6, 'Papel A5', 3.50, 10, 'Papel PT', 105),
(7, 'Papel A6', 2.99, 55, 'Papel PT', 106),
(8, 'X-Acto Vermelho', 5.35, 0, 'Worten', 107),
(9, 'Cadeira Gamer', 129.49, 5, 'Gamer PT', 108),
(10, 'Rato Gamer', 89.99, 0, 'Gamer PT', 109),
(11, 'Monitor 4k Preto', 215.00, 12, 'Gamer ES', 110),
(12, 'Teclado Gamer', 115.00, 3, 'Gamer ES', 111),
(13, 'Papel A3', 4.25, 7, 'Papel ES', 112),
(14, 'Caneta Roxa', 1.39, 15, 'FNAC', 113),
(15, 'Caneta Rosa', 0.85, 1, 'Canetas Portugal', 114),
(16, 'X-Acto Rosa', 1.35, 32, 'Canetas Portugal', 115),
(17, 'X-Acto Verde', 1.55, 3, 'FNAC', 116),
(18, 'Mesa', 120.99, 12, 'Worten', 117);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
