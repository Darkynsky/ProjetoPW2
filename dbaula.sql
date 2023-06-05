-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Jun-2023 às 19:24
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbaula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

DROP TABLE IF EXISTS `tbcontato`;
CREATE TABLE IF NOT EXISTS `tbcontato` (
  `idContato` int NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(40) DEFAULT NULL,
  `emailContato` varchar(40) DEFAULT NULL,
  `assuntoContato` varchar(400) DEFAULT NULL,
  `mensagemContato` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfilmes`
--

DROP TABLE IF EXISTS `tbfilmes`;
CREATE TABLE IF NOT EXISTS `tbfilmes` (
  `idFilmes` int NOT NULL AUTO_INCREMENT,
  `filme` varchar(100) DEFAULT NULL,
  `diretor` varchar(100) DEFAULT NULL,
  `duracao` varchar(100) DEFAULT NULL,
  `descricao` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `classificacao` varchar(100) DEFAULT NULL,
  `anoLancamento` varchar(100) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `imagemPrincipal` varchar(1000) DEFAULT NULL,
  `imagemInterna` varchar(100) DEFAULT NULL,
  `trailer` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`idFilmes`),
  KEY `genero` (`genero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tbfilmes`
--

INSERT INTO `tbfilmes` (`idFilmes`, `filme`, `diretor`, `duracao`, `descricao`, `classificacao`, `anoLancamento`, `genero`, `imagemPrincipal`, `imagemInterna`, `trailer`) VALUES
(27, 'Resident Evil: O Hóspede Maldito', 'Paul W. S. Anderson', '1h40m', '                                                                                                                                                                                    Alice e Rain Ocampo têm a missão de destruir um laboratório genético operado pela poderosa corporação Umbrella, um dos maiores conglomerados do mundo, onde um vírus foi disseminado, matando seu criador e ressurgindo como uma criatura demoníaca, que sente uma fome incontrolável e transforma todas as suas vítimas em zumbis. O time tem apenas três horas para evitar que o vírus invada a Terra.                                                                                                                                                                                                                                                                                                                                                                                                     \r\n                ', '16 anos', '2002', '', 'img/filmes/9vJX0Q9LSoOlTio8cTAm2ms0sWz.jpg', 'img/filmes/interna/re1-movie-alice.jpg', 'https://www.youtube.com/embed/eEGDRSYEd0E\"'),
(28, 'Resident Evil 2: Apocalipse', 'Alexander Witt', '1h34m', '                                        A heroína Alice tenta livrar Raccoon City de um segundo ataque de zumbis, mas a diabólica Umbrella Corporation e os militares têm uma nova arma secreta. Os sobreviventes Jill Valentine, Carlos Oliviera e Nicholai lutam ao lado de Alice contra um novo e melhorado Matt Addison de codinome Nemesis.                                                                          \r\n                ', '16 anos', '2004', 'Terror', 'img/filmes/resident_evil_apocalypse_poster.webp', 'img/filmes/interna/20201212_residentevil2_2.jpg', 'https://www.youtube.com/embed/sT6N__M_glo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adm`
--

DROP TABLE IF EXISTS `tb_adm`;
CREATE TABLE IF NOT EXISTS `tb_adm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_genero`
--

DROP TABLE IF EXISTS `tb_genero`;
CREATE TABLE IF NOT EXISTS `tb_genero` (
  `idGenero` int NOT NULL AUTO_INCREMENT,
  `genero` varchar(100) DEFAULT NULL,
  `imagemGenero` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_genero`
--

INSERT INTO `tb_genero` (`idGenero`, `genero`, `imagemGenero`) VALUES
(7, 'Terror', 'img/capas_generos/terror.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(10) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `email`, `senha`) VALUES
(11, 'tester', 'tester@', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
