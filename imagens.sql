-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 23-Out-2018 às 02:57
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
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `nome_imagem` varchar(100) DEFAULT NULL,
  `tamanho_bytes` varchar(10) NOT NULL DEFAULT '0',
  `largura` varchar(10) NOT NULL DEFAULT '0',
  `altura` varchar(10) NOT NULL DEFAULT '0',
  `nome_url` varchar(100) NOT NULL DEFAULT '0',
  `id_produto` int(11) NOT NULL DEFAULT '0',
  `ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `nome_imagem`, `tamanho_bytes`, `largura`, `altura`, `nome_url`, `id_produto`, `ordem`) VALUES
(25, NULL, '520590', '466', '621', '854cd9ca52cfd6c0459d28e45124bb56.png', 10, NULL),
(26, NULL, '111802', '273', '275', '05053ccb428238177a79a18e952379de.png', 13, NULL),
(27, NULL, '99777', '273', '273', 'eaf1cac86fecf725523896c48c39cc76.png', 13, NULL),
(28, NULL, '96485', '275', '275', 'a682e1df021b2a211f4438e836b07127.png', 13, NULL),
(30, NULL, '264844', '481', '360', '7a2ae8161f78a46d87a946caedaf3dd6.png', 15, NULL),
(33, NULL, '520590', '466', '621', '903bc0ed5ab2a78135a0504f9810c1e7.png', 16, NULL),
(34, NULL, '264844', '481', '360', '275ac4f6a163f3980ad9247a5daf93ab.png', 16, NULL),
(35, NULL, '173249', '482', '253', '232317284cef1009b891edf4287e9b7e.png', 16, NULL),
(36, NULL, '111802', '273', '275', '55502a43d33d9ffb49a646c459cba007.png', 17, NULL),
(37, NULL, '99777', '273', '273', 'a37aca2c9402048840aafb40fd586f49.png', 17, NULL),
(38, NULL, '96485', '275', '275', 'a2cd74732cb57025dee81063feec8695.png', 17, NULL),
(40, NULL, '99777', '273', '273', '7c3f719048cbb153facd075dd56892a9.png', 18, NULL),
(41, NULL, '96485', '275', '275', 'c40d11a8c7b24a611e972268d8844404.png', 18, NULL),
(42, NULL, '111802', '273', '275', 'bd1f06985bb49700de41ace004291395.png', 19, 2),
(43, NULL, '99777', '273', '273', '46867c311d6ebd2d7a6a02c238d4c304.png', 19, 1),
(44, NULL, '96485', '275', '275', 'b4c09d1375a945e03e16798680a55443.png', 19, 3),
(45, NULL, '80011', '273', '273', '3f3f938eac9516f9c3f4d853f338c854.png', 19, 6),
(46, NULL, '1220126', '1197', '616', '1ba6a1b3923dc98c7c759455ca37a310.png', 19, 5),
(47, NULL, '520590', '466', '621', '582b636983b2b66892bd1ba2a46eff3d.png', 19, 4),
(50, 'Produto 2', '96485', '275', '275', '21d8a05392a0c0d6ebe1b676b606de86.png', 20, 2),
(51, NULL, '80011', '273', '273', '48d79c71f1ad3cf142f4109fd657dc4e.png', 14, NULL),
(52, NULL, '96584', '275', '275', '1ade85fe89d496cc7a1d61ddd5839f4b.png', 12, NULL),
(53, NULL, '79978', '273', '273', '9940afdcea4e366428946dbca0946ca4.png', 12, NULL),
(54, 'Imagem ', '111802', '273', '275', '91bd143ae2795a01465e3dc111217488.png', 21, 2),
(55, 'Foto', '111802', '273', '275', '64055e9ece4ec68d8008df0737ded6cb.png', 21, 5),
(56, 'teste', '99777', '273', '273', 'c091e01086d0a05925a762df11826152.png', 21, 1),
(57, 'testete', '96584', '275', '275', '6cf1da449f6d19ff54b15f7048065fea.png', 21, 3),
(58, 'teste', '79978', '273', '273', 'bb1f329e40d706cf52c0b00877d81408.png', 21, 4),
(59, NULL, '80011', '273', '273', '9640df800a21607feda891b2c8f9f396.png', 20, 1),
(60, NULL, '520590', '466', '621', 'cb8af9756d4d0a0cd7bcfcf7b8191ae2.png', 20, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
