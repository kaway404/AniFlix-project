
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/08/2017 às 20:36:21
-- Versão do Servidor: 10.1.24-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u803357156_anifl`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ani_animes`
--

CREATE TABLE IF NOT EXISTS `ani_animes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `votacao` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `fotoback` varchar(255) NOT NULL,
  `desct` text NOT NULL,
  `destaque` int(11) NOT NULL,
  `gen` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `ani_animes`
--

INSERT INTO `ani_animes` (`id`, `nome`, `votacao`, `foto`, `fotoback`, `desct`, `destaque`, `gen`, `logo`, `tipo`) VALUES
(1, 'Naruto Shippuden', '100', 'miniatura.jpg', 'backnaruto.jpg', 'A história se passa dois anos e meio após a partida de Uzumaki Naruto para um treinamento com o Sannin Jiraiya para fora de Konoha. Após seu retorno, Uzumaki Naruto e sua equipe, agora em nova formação, engajam em uma investigação da organização de crimin', 1, '1', 'narutologo.png', 1),
(2, 'Danmachi Gaiden: Sword Oratori', '100', 'anime2.jpg', 'anime2back.jpg', 'Princesa Espadachim Aiz Wallenstein. Hoje, outra vez, a espadachim mais forte vai para o labirinto gigante conhecido como Dungeon, junto com seus aliados. No andar de número 50, onde mistérios e ameaças como um cadáver de dragão apodrecido se transforma em poeira e uma irregularidade se aproxima cada vez mais do grupo, Aiz invoca o vento e vai ainda mais fundo na escuridão da Dungeon. Eventualmente, ela acaba encontrando um garoto pela primeira vez. Na Cidade Labirinto de Orario, as histórias contrastantes do garoto e dela se encontram!', 1, '1', 'logo2.png', 1),
(3, 'Your Name', '100', 'kimi.jpg', 'kiminoback.png', 'Mitsuha é uma estudante do ensino médio que vive numa cidade rural situada nas montanhas e tem uma personalidade honesta, mas ela não gosta dos costumes do santuário xintoísta da sua família. Taki é um estudante do ensino médio que vive no centro de Tóquio, passa o seu tempo com os seus amigos, trabalha a tempo parcial num restaurante italiano, e está interessado em arquitetura e artes plásticas. Um dia, Mitsuha tem um sonho onde é um homem jovem. Taki também tem um sonho onde ele é uma estudante do ensino médio numa cidade nas montanhas onde esteve. Qual é o segredo para seus sonhos de experiência pessoal?', 1, '1', 'kimilogo.png', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ani_comentarios`
--

CREATE TABLE IF NOT EXISTS `ani_comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `datec` date NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `ani_comentarios`
--

INSERT INTO `ani_comentarios` (`id`, `id_video`, `id_user`, `datec`, `texto`) VALUES
(27, 28, 10, '0000-00-00', 'Melhor anime possivel :3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ani_curtidas`
--

CREATE TABLE IF NOT EXISTS `ani_curtidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `datec` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Extraindo dados da tabela `ani_curtidas`
--

INSERT INTO `ani_curtidas` (`id`, `id_video`, `id_user`, `id_anime`, `datec`) VALUES
(62, 1, 10, 1, '2017-06-05'),
(75, 28, 10, 3, '2017-06-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ani_history`
--

CREATE TABLE IF NOT EXISTS `ani_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) NOT NULL,
  `id_video` varchar(255) NOT NULL,
  `id_anime` varchar(255) NOT NULL,
  `datec` date NOT NULL,
  `time_video` text NOT NULL,
  `currenttime` text NOT NULL,
  `perfil` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `ani_history`
--

INSERT INTO `ani_history` (`id`, `id_user`, `id_video`, `id_anime`, `datec`, `time_video`, `currenttime`, `perfil`) VALUES
(1, '1', '1', '1', '2017-06-10', '0.2366295413557364%', '109.440689', 1),
(2, '1', '33', '1', '2017-06-10', '', '', 1),
(3, '1', '32', '1', '2017-06-10', '', '', 1),
(4, '1', '31', '1', '2017-06-10', '', '', 1),
(5, '1', '30', '1', '2017-06-10', '', '', 1),
(6, '1', '28', '3', '2017-06-10', '1.3967893183549125%', '88.963269', 1),
(7, '4', '1', '1', '2017-06-11', '0.4271623113728377%', '355.914752', 6),
(8, '5', '31', '1', '2017-06-11', '16.081313935481056%', '421.4723043', 9),
(9, '2', '1', '1', '2017-06-11', '1.1780579854848177%', '1.610979', 3),
(10, '6', '1', '1', '2017-07-14', '1.4015548018799868%', '35.573596', 10),
(11, '6', '29', '2', '2017-07-14', '', '', 10),
(12, '6', '28', '3', '2017-07-14', '', '', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ani_perfil`
--

CREATE TABLE IF NOT EXISTS `ani_perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nome` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `ani_perfil`
--

INSERT INTO `ani_perfil` (`id`, `id_user`, `nome`) VALUES
(1, 1, 'Alexandre'),
(2, 1, 'Anelise'),
(3, 2, 'ZeusBR'),
(4, 3, 'Eu mesmo'),
(5, 3, 'HUGOZTOZO'),
(6, 4, 'Davy Jones'),
(7, 4, 'BRKSEDU'),
(8, 4, 'Espião da Netflix'),
(9, 5, 'huasuhas]'),
(10, 6, 'Vitor'),
(11, 6, '*****');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ani_users`
--

CREATE TABLE IF NOT EXISTS `ani_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobname` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `inisession` date NOT NULL,
  `sobre` text NOT NULL,
  `datec` date NOT NULL,
  `lastlogin` date NOT NULL,
  `photo` text NOT NULL,
  `fotoback` text NOT NULL,
  `configurado` int(11) NOT NULL,
  `block` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `ani_users`
--

INSERT INTO `ani_users` (`id`, `email`, `username`, `nome`, `sobname`, `senha`, `inisession`, `sobre`, `datec`, `lastlogin`, `photo`, `fotoback`, `configurado`, `block`) VALUES
(1, 'xandeco1231231@hotmail.com', 'kaway', 'Alexandre', 'Silva', 'ca3e9678156536ab1394d12f36149a49', '2017-03-22', 'Programar', '2017-03-22', '2017-08-03', 'default.jpg', 'xande.png', 1, 0),
(2, 'rodrigo.sikoski21@gmail.com', 'ZeusBR', 'Rodrigo', 'Sikoski', '1069032a5ca8777cef0d501a8a459587', '2017-06-10', 'Animes', '2017-06-10', '2017-06-11', 'default.jpg', 'xande.png', 1, 0),
(3, 'vandilsombabosa199@hotmail,com', 'HugoStozo', 'Hugo', 'Stozo', '778a81c1db0507504617c00c1ab2ad1a', '2017-06-10', 'Mulher é claro', '2017-06-10', '2017-06-10', 'default.jpg', 'xande.png', 1, 0),
(4, 'opaudoalborgheti@netflix.com.us', 'ooobarco', 'Bilada', 'Pimbada', 'ff64a1c43498d955147518733ac88c7c', '2017-06-11', 'dar strike', '2017-06-11', '2017-06-11', 'default.jpg', 'xande.png', 1, 0),
(5, 'hudiasue@aushsua.com', 'asuiiuas', 'aiushias', 'asuihas', 'ba52936dc061b6962c6270ab8f3b4ed8', '2017-06-11', 'ausuasi', '2017-06-11', '2017-06-11', 'default.jpg', 'xande.png', 1, 0),
(6, 'nao@qualquerum.com', 'backtrack', 'Vitor', 'Nao sei', '88d35c17d8fde42cfcf7d27dd79fb293', '2017-07-15', 'buceta', '2017-07-15', '2017-07-15', 'default.jpg', 'xande.png', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ani_videos`
--

CREATE TABLE IF NOT EXISTS `ani_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anime` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `episodio` text NOT NULL,
  `clicks` varchar(255) NOT NULL,
  `sub` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `ani_videos`
--

INSERT INTO `ani_videos` (`id`, `id_anime`, `src`, `dir`, `episodio`, `clicks`, `sub`) VALUES
(28, '3', 'http://www.bluanime.com:8081/v/Filmes/001/original.mp4?nimblesessionid=37019', '', '', '464', 1),
(1, '1', 'http://cd1.animakai.tv/teste/hd/Naruto_001.mp4', '', '1', '947', 1),
(29, '2', 'http://www.blogger.com/video-play.mp4?contentId=fdd518f74bfb52b6', '', '1', '11', 1),
(30, '1', 'http://cd1.animakai.tv/teste/hd/Naruto_002.mp4', '', '2', '914', 1),
(31, '1', 'http://cd1.animakai.tv/teste/hd/Naruto_003.mp4', '', '3', '905', 1),
(32, '1', 'http://cd1.animakai.tv/teste/hd/Naruto_004.mp4', '', '4', '902', 1),
(33, '1', 'http://cd1.animakai.tv/teste/hd/Naruto_005.mp4', '', '5', '903', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
