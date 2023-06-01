-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Maio-2023 às 13:39
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `descricao` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `classificacao` varchar(100) DEFAULT NULL,
  `anoLancamento` varchar(100) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `imagemPrincipal` varchar(1000) DEFAULT NULL,
  `imagemInterna` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idFilmes`),
  KEY `genero` (`genero`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbfilmes`
--

INSERT INTO `tbfilmes` (`idFilmes`, `filme`, `diretor`, `duracao`, `descricao`, `classificacao`, `anoLancamento`, `genero`, `imagemPrincipal`, `imagemInterna`) VALUES
(26, 'Resident Evil', 'gafgag', '120', 'gagagagaga', '16+', '2012', 'Terror', '', '');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_genero`
--

DROP TABLE IF EXISTS `tb_genero`;
CREATE TABLE IF NOT EXISTS `tb_genero` (
  `idGenero` int NOT NULL AUTO_INCREMENT,
  `genero` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_genero`
--

INSERT INTO `tb_genero` (`idGenero`, `genero`) VALUES
(1, 'Comédia'),
(2, 'Ação'),
(3, 'Terror'),
(4, 'Romance'),
(5, 'Ficção'),
(6, 'Drama');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `email`, `senha`) VALUES
(11, 'tester', 'tester@', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
