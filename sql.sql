-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 14-Abr-2019 às 14:39
-- Versão do servidor: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.0.33-6+ubuntu18.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adocao`
--
CREATE DATABASE adocao;

USE adocao;
-- --------------------------------------------------------

--
-- Estrutura da tabela `adotar`
--

CREATE TABLE `adotar` (
  `idAdotar` int(11) NOT NULL,
  `idCachorro` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `nomeDoCao` varchar(20) NOT NULL,
  `sexo` char(1) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `informacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adotar`
--

INSERT INTO `adotar` (`idAdotar`, `idCachorro`, `nome`, `email`, `endereco`, `cidade`, `celular`, `nomeDoCao`, `sexo`, `imagem`, `informacao`) VALUES
(1, 5, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Buddy', 'm', '../Img/f55f8085b94f147d5bafad7f42d28e07.jpeg', 'Nome Buddy'),
(2, 13, 'Felipe sousa', 'felipe@felipe.com', 'qnn 17', 'Taguatinga', '999999999', 'Bud', 'm', '../Img/ecacd71a14a2a557031903ac606d8450.jpeg', 'Nome Bud');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cachorro`
--

CREATE TABLE `cachorro` (
  `idCachorro` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `cidade` varchar(20) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `nomeDoCao` varchar(20) NOT NULL,
  `idade` int(11) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `informacao` varchar(255) DEFAULT NULL,
  `perfil` varchar(10) NOT NULL,
  `estatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cachorro`
--

INSERT INTO `cachorro` (`idCachorro`, `idUsuario`, `nome`, `email`, `endereco`, `cidade`, `celular`, `nomeDoCao`, `idade`, `sexo`, `imagem`, `informacao`, `perfil`, `estatus`) VALUES
(1, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Thor', 1, 'm', '../Img/18adfb46039f81015852f1120f3ef5af.jpeg', 'Nome thor', 'Adotar', 'disponivel'),
(2, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Zeus', 3, 'm', '../Img/76a6bddb7a6b38795752d42d079a6cbd.jpeg', 'Nome zeus', 'Encontrado', 'disponivel'),
(3, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Sushi', 5, 'f', '../Img/5a112dea5f4875514920090ddb1e5687.jpeg', 'Nome Sushi', 'Perdido', 'disponivel'),
(4, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Cookie', 3, 'f', '../Img/4083fe2fe45213cddcc06950f976737b.jpeg', 'Nome Cookie', 'Adotar', 'disponivel'),
(5, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Buddy', 8, 'm', '../Img/f55f8085b94f147d5bafad7f42d28e07.jpeg', 'Nome Buddy', 'Adotar', 'pedente'),
(6, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Rocky', 5, 'm', '../Img/6ea4c573d48decc8799d941f3b59aa28.jpeg', 'Nome Rocky', 'Adotar', 'disponivel'),
(7, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Loki', 4, 'm', '../Img/c74482e33b40a8b26165a5321b687d65.jpeg', 'Nome Loki', 'Encontrado', 'disponivel'),
(9, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Nico', 4, 'm', '../Img/a8c7b8ed011859a73ab188710f54b004.jpeg', 'Nome Nico', 'Encontrado', 'disponivel'),
(10, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Tab', 4, 'f', '../Img/f0dbd2b57e94002d1d49e897c76dfef5.jpeg', 'Nome Tab', 'Perdido', 'disponivel'),
(11, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Tommy', 6, 'm', '../Img/b4dad89c057f0f951325049c9232228c.jpeg', 'Nome Tommy', 'Perdido', 'disponivel'),
(12, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Hulk', 2, 'm', '../Img/6017bfa4a07cc12576fb1f5c05055118.jpeg', 'Nome Hulk', 'Perdido', 'disponivel'),
(13, 2, 'Felipe sousa', 'felipe@felipe.com', 'qnn 17', 'Taguatinga', '999999999', 'Bud', 7, 'm', '../Img/ecacd71a14a2a557031903ac606d8450.jpeg', 'Nome Bud', 'Adotar', 'pedente'),
(14, 2, 'Felipe sousa', 'felipe@felipe.com', 'qnn 17', 'Taguatinga', '999999999', 'Lion', 7, 'm', '../Img/c83e73d6a00a40a5e3ae9c4a69954082.jpeg', 'Nome Lion', 'Encontrado', 'disponivel'),
(15, 2, 'Felipe sousa', 'felipe@felipe.com', 'qnn 17', 'Taguatinga', '999999999', 'SansÃ£o', 9, 'm', '../Img/bfdd14ee70aeb2d7f16b9111c5626aca.jpeg', 'Nome SansÃ£o', 'Perdido', 'disponivel'),
(16, 1, 'Joel', 'joel@joel.com', 'qnn', 'ceilandia', '3321-8181', 'Nica', 5, 'f', '../Img/e534e29c77bc9e73236be0c5c92c486c.jpeg', 'Nome Nica', 'Encontrado', 'disponivel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `cidade` varchar(20) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `endereco`, `cidade`, `celular`, `email`, `usuario`, `senha`) VALUES
(1, 'Joel', 'qnn', 'ceilandia', '3321-8181', 'joel@joel.com', 'joel', '12345678'),
(2, 'Felipe sousa', 'qnn 17', 'Taguatinga', '999999999', 'felipe@felipe.com', 'Felipe', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adotar`
--
ALTER TABLE `adotar`
  ADD PRIMARY KEY (`idAdotar`),
  ADD KEY `idCachorro` (`idCachorro`);

--
-- Indexes for table `cachorro`
--
ALTER TABLE `cachorro`
  ADD PRIMARY KEY (`idCachorro`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adotar`
--
ALTER TABLE `adotar`
  MODIFY `idAdotar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cachorro`
--
ALTER TABLE `cachorro`
  MODIFY `idCachorro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `adotar`
--
ALTER TABLE `adotar`
  ADD CONSTRAINT `adotar_ibfk_1` FOREIGN KEY (`idCachorro`) REFERENCES `cachorro` (`idCachorro`);

--
-- Limitadores para a tabela `cachorro`
--
ALTER TABLE `cachorro`
  ADD CONSTRAINT `cachorro_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
