-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 23-Out-2018 às 02:56
-- Versão do servidor: 5.7.16
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showlustre`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner_imagem`
--

CREATE TABLE `banner_imagem` (
  `id` int(11) NOT NULL,
  `id_arquivo` int(11) NOT NULL DEFAULT '0',
  `nome_banner` varchar(100) NOT NULL DEFAULT '0',
  `url` varchar(100) DEFAULT '0',
  `ordem` int(11) NOT NULL DEFAULT '0',
  `tela` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_imagem`
--
ALTER TABLE `banner_imagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_banner_imagem_arquivos` (`id_arquivo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_imagem`
--
ALTER TABLE `banner_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `banner_imagem`
--
ALTER TABLE `banner_imagem`
  ADD CONSTRAINT `FK_banner_imagem_arquivos` FOREIGN KEY (`id_arquivo`) REFERENCES `arquivos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
