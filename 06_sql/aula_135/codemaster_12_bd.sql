-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09-Jul-2025 às 21:59
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
-- Banco de dados: `codemaster_12_bd`
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
(1, 'Maria', 'Sousa', 'Braga', 33),
(2, 'Fabrício', 'Vidal', 'Porto', 44),
(3, 'José', 'Matos', 'Almada', 76),
(4, 'Débora', 'Sousa', 'Amadora', 19);

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
(1, 'Caneta Azul', 3.00, 56, 'Papel PT', 100),
(2, 'BBB', 0.95, 10, 'TESTE', 101),
(3, 'josé', 4.00, 120, 'Papel PT', 102),
(4, 'Caneta Vermelha', 1.25, 32, 'Pingo Doce', 103),
(5, 'Caneta Verde', 1.45, 22, 'Pingo Doce', 104),
(6, 'Papel A5', 3.50, 10, 'Papel PTX', 105),
(7, 'Papel A6', 2.99, 55, 'Worten', 106),
(8, 'X-Acto Vermelho', 222.00, 12, 'FNAC', 107),
(9, 'X-Acto Cinza', 1.02, 2, 'FNAC', 108),
(10, 'Agenda 2025 Branca', 7.88, 0, 'Papel ES', 109),
(11, 'Cadeira Gamer Azul', 199.99, 5, 'Gamer PT', 110),
(12, 'Cadeira Gamer Vermelha', 199.99, 12, 'Gamer PT', 111),
(13, 'Teclado Gamer Preto', 99.99, 44, 'Gamer ES', 112),
(14, 'Caixa de Canetas Azul', 12.99, 2, 'Worten 2', 113),
(15, 'X-Acto Rosa', 1.99, 32, 'Canetas PT', 115),
(16, 'X-Acto Violeta', 1.95, 1, 'Canetas ES', 116),
(18, 'X-Acto Amarelo', 1.95, 1, 'Canetas ES', 117),
(19, 'Agenda 2025 Preta', 7.99, 10, 'FNAC', 118),
(23, 'Agenda 2025 Rosa', 8.00, 9, 'FNAC', 119),
(24, 'Agenda 2025 Violeta', 9.00, 8, 'Papel ES', 120),
(25, 'Papel A4 Vermelho', 3.50, 4, 'FNAC', 121),
(26, 'Papel A4 Rosa', 3.50, 3, 'Papel ES', 122),
(27, 'Papel A4 Verde', 3.50, 5, 'Papel ES', 123),
(28, 'Papel A4 Azul', 3.50, 9, 'Papel ES', 124),
(29, 'Papel A4 Amarelo', 3.50, 1, 'Papel PT', 125);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
