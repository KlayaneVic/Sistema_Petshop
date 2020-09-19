-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Set-2020 às 18:38
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

DROP TABLE IF EXISTS `animais`;
CREATE TABLE IF NOT EXISTS `animais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_dono` varchar(80) NOT NULL,
  `nome_animal` varchar(80) NOT NULL,
  `idade_animal` int(11) NOT NULL,
  `nome_popular` varchar(80) NOT NULL,
  `telefone_dono` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `nome_dono`, `nome_animal`, `idade_animal`, `nome_popular`, `telefone_dono`) VALUES
(1, 'Ana', 'Pipoca', 3, 'cachorro', 1111),
(2, 'Eduardo', 'FeijÃ£o', 8, 'Cachorro', 2222),
(3, 'Luiz', 'David', 9, 'Gato', 5555),
(4, 'Marcela', 'Feng', 7, 'CamaleÃ£o', 8888),
(5, 'Carol', 'julia', 11, 'Rato', 8754),
(6, 'Maria', 'Kelly', 14, 'Vaca', 8755),
(7, 'Carolina', 'Vagner', 10, 'boi', 5643),
(8, 'Valeria', 'Sidney', 12, 'Jaguatirica', 8798),
(9, 'roberto', 'claudio', 5, 'Gato', 66666),
(10, 'Jose Antonio', 'Nicolas', 6, 'Jacare', 9999);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
