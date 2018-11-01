-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 23-Out-2018 às 02:55
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
(19, 'banner_quem_somos.png', 'e2063f619c448583d2a02f9cd26c7766.png', '2018-08-16', '1193367', 'image/png', NULL, NULL),
(38, 'appa.png', '790dff92bd4a93846c2155c8f8a514bd.png', '2018-08-18', '20692', 'image/png', 130, 82),
(39, 'arcadis.png', 'f32c72ffc32f32ffc2b4a1c6ac66075c.png', '2018-08-18', '20131', 'image/png', 130, 82),
(40, 'bbc.png', 'f7d04c21bf50daf9656797f8f048c04b.png', '2018-08-18', '16929', 'image/png', 130, 82),
(41, 'cargill.png', 'c067744d7a38ea8a64efd6ad96099ea0.png', '2018-08-18', '23421', 'image/png', 130, 82),
(42, 'ebei.png', '40b80a4c3b9b8995873615002d0307b7.png', '2018-08-18', '19552', 'image/png', 130, 82),
(43, 'exe.png', '1da6e1f5aab04360d21771389c8a3124.png', '2018-08-18', '23985', 'image/png', 130, 82),
(45, 'grupo_libra.png', '29425a0ec298f66da8a779efbc74a9a8.png', '2018-08-18', '18056', 'image/png', 130, 82),
(46, 'hamburg_sud.png', '1090c94b99761e4bf036c52660f99a1c.png', '2018-08-18', '18076', 'image/png', 130, 82),
(47, 'msc.png', '0f688f1573f833f2e5ed44d36c1aa7a5.png', '2018-08-18', '20941', 'image/png', 130, 82),
(48, 'polo.png', '1e89334c6273f7b2bc850f7409c4d3af.png', '2018-08-18', '21567', 'image/png', 130, 82),
(49, 'tesc.png', '526e7a2a5fdf235efe0e48912c2460e8.png', '2018-08-18', '18525', 'image/png', 130, 82),
(50, 'foto_equipe.png', '7201a0ebadb17c756fc95bfb3e03a44f.png', '2018-08-18', '17141', 'image/png', 131, 175),
(51, 'foto_equipe.png', '7aebe10b857e8cef979c900cb36ddf43.png', '2018-08-18', '17141', 'image/png', 131, 175),
(52, 'foto_equipe.png', 'e557241feddd321090bbc99b6df7ec72.png', '2018-08-18', '17141', 'image/png', 131, 175),
(53, 'foto_equipe.png', '6c7bee265db744c668d50adb5f4da5c7.png', '2018-08-18', '17141', 'image/png', 131, 175),
(64, 'ilu03.png', 'ee8f52894ebaed54f1017051d13c3b63.png', '2018-08-20', '933560', 'image/png', 1920, 1080),
(65, 'ilu01.png', 'd15f9f66b5f718bb44d01fcbc18cc76e.png', '2018-08-20', '1031887', 'image/png', 1920, 1080),
(66, 'ilu01.png', '9f1604169e456aaee6c44d2d047578c9.png', '2018-08-20', '1031887', 'image/png', 1920, 1080),
(67, 'ilu02.png', '22f8b7c8a8466b6890450259e0693249.png', '2018-08-20', '908753', 'image/png', 1920, 1080),
(68, 'servico1.png', 'ec062377ec2824971c83876cdeb5a0d4.png', '2018-08-20', '409438', 'image/png', 399, 618),
(69, 'servico1.png', 'a41e74c50a0ef06d6abfc2de51ab273d.png', '2018-08-20', '409438', 'image/png', 399, 618),
(70, 'servico2.png', '11bca8353eb401fa11e2b78452eee303.png', '2018-08-22', '326108', 'image/png', 400, 618),
(71, 'servico2.png', 'fa95e72cb7439adaa0fc19999c3f6073.png', '2018-08-22', '326108', 'image/png', 400, 618),
(72, 'ilu03.png', '48be27679bed500f095c696dea9b9935.png', '2018-08-22', '933560', 'image/png', 1920, 1080),
(73, 'servico3.png', 'f25dc48aa8472f8279d218a51933f1e3.png', '2018-08-22', '494190', 'image/png', 400, 619),
(74, 'servico3.png', '69faf6c9c8626b61b74fc83c40742dd4.png', '2018-08-22', '494190', 'image/png', 400, 619),
(75, 'ilu01.png', 'a8ab54889b746befe5b16c78091d6467.png', '2018-08-22', '1031887', 'image/png', 1920, 1080),
(76, 'ilu02.png', '911e0e6f21ffc6862dc89007d76e89af.png', '2018-08-22', '908753', 'image/png', 1920, 1080),
(77, 'ilu03.png', 'd5f3d8c9076a60905abb390a6d5edc48.png', '2018-08-22', '933560', 'image/png', 1920, 1080),
(78, 'ilu01.png', '44be90806dfdde74458da8d7f9131095.png', '2018-08-22', '1031887', 'image/png', 1920, 1080),
(79, 'dbis.png', 'b456d6c1542fa6a3b74a0cb284ecf73a.png', '2018-08-23', '3741', 'image/png', 57, 51),
(80, 'ebei.png', 'a18128965b5fb040abf91420598ec792.png', '2018-08-23', '2359', 'image/png', 57, 25),
(81, 'imagem_projeto.png', 'd9b257bba48e0fd0f22f6f654aaaa20e.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(82, 'imagem_projeto.png', '88096ac2b3433b7dc414136b434afe67.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(83, 'imagem_projeto.png', '247deaa7450b160244653073d15ff200.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(84, 'imagem_projeto.png', '59c208b508d811b3d8aa364050369a3a.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(85, 'imagem_projeto.png', '74fc99001a3598685c017d4f2864d85c.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(86, 'imagem_projeto.png', '2b1364a71a24a0bea376edf28b0d779d.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(87, 'imagem_projeto.png', 'aea889482bf96a1fa0367a7418db6b5b.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(88, 'imagem_projeto.png', '49c9f4c2bb560cc80bf5831c65697ff5.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(89, 'imagem_projeto.png', 'b39842367dde2b3a9f95273d2a266fe8.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(90, 'imagem_projeto.png', '63b9025a31e32cba3f984e94ad5f269d.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(91, 'imagem_projeto.png', '3f5bc0785ae5a2dd782d6f7453923155.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(92, 'imagem_projeto.png', '83e533cb5d94ae5c71768ed0e910e6ab.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(93, 'imagem_projeto.png', '168726d9edebe0256201b464317023c8.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(94, 'imagem_projeto.png', '1d2c1105656f7302a4996026d80bf627.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(95, 'imagem_projeto.png', '0613e7e04fadcf0aa4c450c2c587c516.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(96, 'imagem_projeto.png', 'b0c066fbc4b172d0fdfdbedabbc39707.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(97, 'imagem_projeto.png', '2bd9783c51e83349ae3350d39b599a7d.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(98, 'imagem_projeto.png', '6b92e3c9ec8544a33e31311ecffbc5a5.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(99, 'imagem_projeto.png', 'a18fbf077ab7a6edc3b9b5df4ad78100.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(100, 'imagem_projeto.png', 'd4190dcc98b4f22c2b641d30bac1e5ee.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(101, 'imagem_projeto.png', 'c459cedec2457ce5dc31b8616658c4a8.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(102, 'imagem_projeto.png', '2b05a25b5368130861e8092f45db1f07.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(103, 'imagem_projeto.png', '092684f888b3841b50a1a63544a350e1.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(104, 'imagem_projeto.png', 'a3ebc3c7bf7effec46a39edf2eb9de86.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(105, 'imagem_projeto.png', 'dd34a8779a61932ea5d9b9e68811c729.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(106, 'imagem_projeto.png', '08cb9196b3a2e3bae11c6078898cb651.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(107, 'imagem_projeto.png', '11c14b92e123e02e46178326f9a47368.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(108, 'imagem_projeto.png', '4fd409897c3e0e34b5fa45e2949d8b67.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(109, 'imagem_projeto.png', '4305f0b7dda81ef65a0392a884356176.png', '2018-08-23', '1552533', 'image/png', 835, 651),
(110, 'imagem_projeto.png', '60308d4f654ddac75933133bc4e17c8e.png', '2018-08-23', '1552533', 'image/png', 835, 651);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
