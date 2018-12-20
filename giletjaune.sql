-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 20 déc. 2018 à 22:05
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `giletjaune`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `idAvis` int(11) NOT NULL,
  `idProposition` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `avisAvis` int(11) NOT NULL,
  PRIMARY KEY (`idAvis`),
  KEY `idProposition` (`idProposition`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `aviscommentaire`
--

DROP TABLE IF EXISTS `aviscommentaire`;
CREATE TABLE IF NOT EXISTS `aviscommentaire` (
  `idAvisCommentaire` int(11) NOT NULL,
  `idCommentaire` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `avisAvisCommentaire` int(11) NOT NULL,
  PRIMARY KEY (`idAvisCommentaire`),
  KEY `idCommentaire` (`idCommentaire`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `idProposition` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `contentCommentaire` text COLLATE utf8_bin NOT NULL,
  `dateCommentaire` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCommentaire`),
  KEY `idProposition` (`idProposition`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idProposition`, `idUtilisateur`, `idCommentaire`, `contentCommentaire`, `dateCommentaire`) VALUES
(5, 3, 3, 'CCCCbbbbbbbbbbbbAAAAAde nouveau un tesfdhrherheht mais POfg2eere', '2018-12-19 22:21:39'),
(5, 3, 6, 'test', '2018-12-19 22:40:20'),
(5, 3, 5, 'CtetstsCCCbbbbbbbbbbbbAAAAAde nouveau un tesfdhrherheht mais POfg2eere', '2018-12-19 22:22:17');

-- --------------------------------------------------------

--
-- Structure de la table `proposition`
--

DROP TABLE IF EXISTS `proposition`;
CREATE TABLE IF NOT EXISTS `proposition` (
  `idProposition` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contentProposition` text COLLATE utf8_bin NOT NULL,
  `dateProposition` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idProposition`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `proposition`
--

INSERT INTO `proposition` (`idProposition`, `contentProposition`, `dateProposition`) VALUES
(2, 'test', '2018-12-18 23:03:50'),
(3, 'de nouveau un test mais POO', '2018-12-19 13:34:31'),
(4, 'de nouveau un test mais POO22', '2018-12-19 13:40:45'),
(5, 'de nouveau un test mais POfg22', '2018-12-19 14:07:19'),
(6, 'de nouveau un test mais POfg2eere', '2018-12-19 14:07:34'),
(7, 'de nouveau un test mais POfg2eere', '2018-12-19 14:09:13'),
(8, 'de nouveau un tesfdhrherheht mais POfg2eere', '2018-12-19 14:17:16'),
(9, 'de nouveau un tesfdhrherheht mais POfg2eere', '2018-12-19 14:21:05'),
(10, 'wbiwb wbiuw ', '2018-12-20 12:25:53'),
(11, 'test changement d\'heure', '2018-12-20 14:51:22'),
(12, 'nouveau test', '2018-12-20 15:13:16'),
(13, 'lhfgeoghrwrgegrergewrgegwregwe', '2018-12-20 16:06:12'),
(14, 'ytwyeywu54uuuuuuuuu', '2018-12-20 16:08:14'),
(15, 'coucoucccccc', '2018-12-20 16:10:58'),
(16, 'rgewrgewgqwgwg', '2018-12-20 16:12:38'),
(17, 'wrtjeryjyhjjjjj', '2018-12-20 16:14:20'),
(18, 'eeeeee', '2018-12-20 16:18:25'),
(19, 'wtewthewthehwthww', '2018-12-20 16:50:59'),
(20, 'BLABLANBLAAAALAKL:FNOEQrghep[jqwrgehrgeq', '2018-12-20 16:54:43'),
(21, 'test n01', '2018-12-20 18:07:26'),
(22, 'un nouveau test de form', '2018-12-20 18:08:14'),
(23, 'ca marche toujours?', '2018-12-20 21:08:56'),
(24, 'marche plus hein', '2018-12-20 22:00:35');

-- --------------------------------------------------------

--
-- Structure de la table `quipropose`
--

DROP TABLE IF EXISTS `quipropose`;
CREATE TABLE IF NOT EXISTS `quipropose` (
  `idUtilisateur` int(11) NOT NULL,
  `idProposition` int(11) NOT NULL,
  UNIQUE KEY `idUtilisateur` (`idUtilisateur`),
  UNIQUE KEY `idProposition` (`idProposition`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `quipropose`
--

INSERT INTO `quipropose` (`idUtilisateur`, `idProposition`) VALUES
(1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `reponsecommentaire`
--

DROP TABLE IF EXISTS `reponsecommentaire`;
CREATE TABLE IF NOT EXISTS `reponsecommentaire` (
  `idRefCommentaire` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idReponseCommentaire` int(11) NOT NULL,
  `contentReponseCommentaire` text COLLATE utf8_bin NOT NULL,
  `dateReponseCommentaire` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idReponseCommentaire`),
  KEY `idRefCommentaire` (`idRefCommentaire`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudoUtilisateur` varchar(26) COLLATE utf8_bin NOT NULL,
  `passwordUtilisateur` varchar(30) COLLATE utf8_bin NOT NULL,
  `adresseEmailUtilisateur` varchar(60) COLLATE utf8_bin NOT NULL,
  `numeroUtilisateur` int(11) NOT NULL,
  `dateInscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `pseudoUtilisateur`, `passwordUtilisateur`, `adresseEmailUtilisateur`, `numeroUtilisateur`, `dateInscription`) VALUES
(1, 'tbd', '', 'tbd@hotmail.fr', 786434814, '2018-12-19 22:56:16'),
(2, 'tbd2', '', 'tbd@gmail.com', 786434814, '2018-12-20 18:59:54'),
(3, 'tbd5', 'testtest', 'test@ruewe.fr', 769485874, '2018-12-20 19:16:31'),
(4, 'chris', 'chrisd', 'chris@gmail.com', 78456751, '2018-12-20 22:51:35'),
(5, 'christt', 'christt', 'chris@gg.fr', 72535135, '2018-12-20 22:04:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
