-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 08-Dez-2018 às 13:22
-- Versão do servidor: 5.7.16
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_padrao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome_arquivo` varchar(100) NOT NULL DEFAULT '0',
  `url_arquivo` varchar(100) NOT NULL DEFAULT '0',
  `data_cadastro` date NOT NULL,
  `tamanho_mb` varchar(15) NOT NULL DEFAULT '0',
  `tipo` varchar(15) NOT NULL DEFAULT '0',
  `largura` int(11) DEFAULT '0',
  `altura` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome_arquivo`, `url_arquivo`, `data_cadastro`, `tamanho_mb`, `tipo`, `largura`, `altura`) VALUES
(111, 'preparatorio-concurso.jpg', 'bad333d45cccf19c14bcc9fb41ba441d.jpg', '2018-10-23', '167514', 'image/jpeg', 1920, 462),
(112, 'banner-ingles.jpg', '79ec74ea4d3b628469cfde230ea74459.jpg', '2018-10-23', '87460', 'image/jpeg', 1920, 462),
(114, 'logo_aleevolucoes.png', '9e8840a5797c106a977fa801851f6170.png', '2018-10-23', '14782', 'image/png', 195, 87),
(115, 'logo_aleevolucoes.png', 'd43603c1846efb599b3a894e97ed517e.png', '2018-10-23', '14782', 'image/png', 195, 87),
(121, 'logo_aleevolucoes.png', '5ef7f4624792c36af3d06350be7fc9f8.png', '2018-10-23', '14782', 'image/png', 195, 87),
(127, 'logo_aleevolucoes.png', '0794ee7affeee26a1f655d02a484a08a.png', '2018-10-24', '14782', 'image/png', 195, 87),
(128, 'preminum-saude.png', '5e29939022bf28d19e42904606bc17bf.png', '2018-10-31', '15193', 'image/png', 400, 350),
(129, 'bradesco-dental.png', 'a8000342a4888e5db084041644f762ba.png', '2018-10-31', '35461', 'image/png', 400, 350),
(130, 'preminum-saude.png', '0fd23292e86e2623343634d2eee4f55e.png', '2018-10-31', '15193', 'image/png', 400, 350),
(131, 'ccccccc.jpg', '3d727bf7e4e5e2cb0a6915b0579b77df.jpg', '2018-12-08', '157995', 'image/jpeg', 400, 400),
(132, 'ccccccc.jpg', '1170eba626aa48091efbd65fa60d890d.jpg', '2018-12-08', '157995', 'image/jpeg', 400, 400),
(133, 'ddddddssdsdsdsds.jpg', '2b0a7f4b18065da86e48e587d43f02b2.jpg', '2018-12-08', '162433', 'image/jpeg', 400, 400),
(136, 'eeeee.jpg', '4e0b26301308ece66b7098b59a48303f.jpg', '2018-12-08', '100119', 'image/jpeg', 400, 400),
(137, 'ddddddssdsdsdsds.jpg', '57bdc8de225a30a5f69fc16028863426.jpg', '2018-12-08', '162433', 'image/jpeg', 400, 400);

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
-- Extraindo dados da tabela `banner_imagem`
--

INSERT INTO `banner_imagem` (`id`, `id_arquivo`, `nome_banner`, `url`, `ordem`, `tela`) VALUES
(1, 111, 'Banner Teste', NULL, 1, 1),
(2, 112, 'Banner 2', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner_video`
--

CREATE TABLE `banner_video` (
  `id` int(11) NOT NULL,
  `id_arquivo` int(11) NOT NULL DEFAULT '0',
  `nome_video` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `titulo_blog` varchar(200) NOT NULL,
  `slug_blog` varchar(200) NOT NULL,
  `meta_description_blog` text NOT NULL,
  `data_cadastro_blog` date NOT NULL,
  `data_atualizacao_blog` date DEFAULT NULL,
  `texto_blog` text NOT NULL,
  `id_imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id_blog`, `titulo_blog`, `slug_blog`, `meta_description_blog`, `data_cadastro_blog`, `data_atualizacao_blog`, `texto_blog`, `id_imagem`) VALUES
(3, 'rwarw', 'rwarw', 'rwrw', '2018-12-08', NULL, '<p>rwrw</p>\r\n', 136),
(4, 'Meu título 2', 'meu-titulo-2', 'Minha Descrição do blog', '2018-12-08', NULL, '<p>teste</p>\r\n', 137);

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `mostrar_banner` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 - Mosttar banner, 2 - Mostrar Vídeo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `mostrar_banner`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL,
  `id_imagem` int(11) DEFAULT NULL,
  `cor_padrao` varchar(7) DEFAULT '#000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `id_imagem`, `cor_padrao`) VALUES
(1, 127, '#6ab147');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes_sociais`
--

CREATE TABLE `redes_sociais` (
  `id_rede` int(11) NOT NULL,
  `nome_rede` varchar(100) NOT NULL DEFAULT '0',
  `link_rede` varchar(255) NOT NULL DEFAULT '0',
  `id_imagem` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `descricao` text,
  `palavra_chave` text,
  `emails` text,
  `scripts` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `site`
--

INSERT INTO `site` (`id`, `titulo`, `descricao`, `palavra_chave`, `emails`, `scripts`) VALUES
(1, 'Título do projeto', 'Aqui vem a Descrição do seu projeto', 'Coloque as palavras-chave aqui', 'alenilsonsouza@gmail.com', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--

CREATE TABLE `suporte` (
  `id` int(11) NOT NULL,
  `assunto_suporte` varchar(100) NOT NULL DEFAULT '0',
  `descricao` text NOT NULL,
  `tipo_suporte` tinyint(2) NOT NULL,
  `data_hora` datetime NOT NULL,
  `situacao` tinyint(2) NOT NULL DEFAULT '0',
  `id_suporte` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_arquivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `ultimo_login` date DEFAULT NULL,
  `navegador` text,
  `tipo` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `senha`, `ip`, `ultimo_login`, `navegador`, `tipo`) VALUES
(1, 'Alenilson Vieira de Souza', 'alenilsonsouza@gmail.com', '83ee787f916c12996ca4eff4093dd2dd', '::1', '2018-12-08', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', 1),
(5, 'Orbita', 'juliana@agenciaorbita.com.br', '3075701349d122f0b953716d38989a95', NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_imagem`
--
ALTER TABLE `banner_imagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_banner_imagem_arquivos` (`id_arquivo`);

--
-- Indexes for table `banner_video`
--
ALTER TABLE `banner_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_banner_video_arquivos` (`id_arquivo`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redes_sociais`
--
ALTER TABLE `redes_sociais`
  ADD PRIMARY KEY (`id_rede`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `banner_imagem`
--
ALTER TABLE `banner_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banner_video`
--
ALTER TABLE `banner_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `redes_sociais`
--
ALTER TABLE `redes_sociais`
  MODIFY `id_rede` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `suporte`
--
ALTER TABLE `suporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `banner_imagem`
--
ALTER TABLE `banner_imagem`
  ADD CONSTRAINT `FK_banner_imagem_arquivos` FOREIGN KEY (`id_arquivo`) REFERENCES `arquivos` (`id`);

--
-- Limitadores para a tabela `banner_video`
--
ALTER TABLE `banner_video`
  ADD CONSTRAINT `FK_banner_video_arquivos` FOREIGN KEY (`id_arquivo`) REFERENCES `arquivos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
