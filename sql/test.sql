-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Fev-2022 às 15:35
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg`
--

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `FotoPerfil` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reg`
--

INSERT INTO `reg` (`name`, `username`, `password`, `city`, `image`, `gender`, `id`) VALUES
('Bikash', 'bikash', 'bikash', 'lko', 'image/images.png', 'male', 2);

INSERT INTO `reg` (`name`, `Email`, `password`, `FotoPerfil`, `id`) VALUES
('Bikash', 'bikash@gmail.com', 'bikash','image/images.png', 'male', 2);
--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

Create table produtos(
	pizza varchar (50),
    nhoque varchar (50),
    lasanha varchar (50),
    macarrao varchar (50)
    
);


Create table produtos(
	produto1 varchar (50),
    fProduto1 varchar (50),
    precop1 varchar (50),
    vendasp1 varchar (50),
    produto2 varchar (50),
    fProduto2 varchar (50),
    precop2 varchar (50),
    vendasp2 varchar (50),
    produto3 varchar (50),
    fProduto3 varchar (50),
    precop3 varchar (50),
    vendasp3 varchar (50),
    produto4 varchar (50),
    fProduto4 varchar (50),
    precop4 varchar (50),
    vendasp4 varchar (50)
);