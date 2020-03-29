-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Mars 2020 à 00:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `locars`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
  `id_avis` int(45) NOT NULL AUTO_INCREMENT,
  `idlocation` int(45) NOT NULL,
  `note` int(1) NOT NULL,
  `commentaires` varchar(250) NOT NULL,
  PRIMARY KEY (`id_avis`),
  KEY `idlocation` (`idlocation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `idlocation` int(11) NOT NULL AUTO_INCREMENT,
  `user_iduser` int(11) NOT NULL,
  `voiture_idvoiture` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `prix_location` float NOT NULL,
  PRIMARY KEY (`idlocation`),
  KEY `fk_location_user_idx` (`user_iduser`),
  KEY `fk_location_voiture1_idx` (`voiture_idvoiture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`idlocation`, `user_iduser`, `voiture_idvoiture`, `date_debut`, `date_fin`, `prix_location`) VALUES
(1, 2, 1, '2020-03-15', '2020-03-20', 100),
(2, 3, 2, '2020-03-20', '2020-03-25', 300);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `sexe` varchar(10) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(13) NOT NULL,
  `numero _permis` int(15) NOT NULL,
  `nom_societe` varchar(45) NOT NULL,
  `siret` int(45) NOT NULL,
  `adresse _societe` varchar(250) NOT NULL,
  `code_postale` int(5) NOT NULL,
  `telephone_ste` int(13) NOT NULL,
  `email-ste` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`iduser`, `Nom`, `prenom`, `type`, `sexe`, `adresse`, `email`, `telephone`, `numero _permis`, `nom_societe`, `siret`, `adresse _societe`, `code_postale`, `telephone_ste`, `email-ste`, `password`, `confirm_password`) VALUES
(1, 'BEN', 'Faissal', 'Part', 'h', 'castelnau le lez ', 'faissalbenider@gmail.com', '0645127812', 1233, '', 0, '', 0, 0, '', 'abcdefgh', ''),
(2, 'ELKH', 'Salma', 'Part', 'f', '25 place valentin hauy', 'salmaelkholte99@gmail.com', '0645127812', 362741, '', 0, '', 0, 0, '', 'sasallmama', ''),
(4, 'ha', 'Abderrahmani', 'part', 'h', '50 Rue Croix De Las Cazes, RÃ©sidence Supagro Les Soleils 113', 'ayoub36.ah@gmail.com', '646461878', 741852, '', 0, '', 0, 0, '', '123456789a', ''),
(5, 'Ayoub', 'Abderrahmani', 'pro', 'h', '', '', '646461878', 25, 'smartbox', 2147483647, '50 Rue Croix De Las Cazes, RÃ©sidence Supagro Les Soleils 113', 34090, 646461878, 'smartbox@gmail.com', '1254345656', ''),
(6, 'lahlou', 'laila', 'pro', 'f', '', '', '0451478596', 3454, 'tzaa', 12355521, 'supagro montpellier', 34090, 0, 'tza@gmail.com', '13478', ''),
(7, 'elkh', 'salma', 'pro', 'f', '', '', '0', 3454, 'cars', 123, '1581 route de mende ', 34000, 645847592, 'cars@gmail.com', '24532', ''),
(8, 'lahl', 'lilouch', 'part', 'f', 'comedie', 'lilouch@gmail.com', '0541234587', 3454, '', 0, '', 0, 0, '', '1234543', ''),
(9, 'Bringay', 'Sandra', 'pro', 'f', '', '', '0', 3454, 'locs', 123, 'port marianne MONTPELLIER', 34000, 0, 'locs@gmail.com', 'absdfr', ''),
(20, 'Ayoub', 'Abderrahmani', 'pro', 'h', '50 Rue Croix De Las Cazes, RÃ©sidence Supagro Les Soleils 113', 'ayoub36.ah@gmail.com', '646461878', 0, '', 0, '', 0, 0, '', 'test', '');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `idvoiture` int(11) NOT NULL AUTO_INCREMENT,
  `user_iduser` int(45) NOT NULL,
  `marque` varchar(45) DEFAULT NULL,
  `dispo_debut` date DEFAULT NULL,
  `dispo_fin` date NOT NULL,
  `prixJ` float DEFAULT NULL,
  `model` varchar(4) NOT NULL,
  `kilometrage` int(15) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `boite_vitesse` varchar(16) NOT NULL,
  `Matricule` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nomV` varchar(80) NOT NULL,
  `ville` varchar(45) NOT NULL,
  PRIMARY KEY (`idvoiture`),
  KEY `user_iduser` (`user_iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`idvoiture`, `user_iduser`, `marque`, `dispo_debut`, `dispo_fin`, `prixJ`, `model`, `kilometrage`, `couleur`, `boite_vitesse`, `Matricule`, `image`, `nomV`, `ville`) VALUES
(1, 3, 'BMWk', '0000-00-00', '0000-00-00', 100, '2018', 15478, 'blanc ', 'automatique', 'a125987', '', '', 'paris'),
(2, 3, 'Nissanlll', '0000-00-00', '0000-00-00', 50, '2013', 1458542, 'noir', 'automatique', 'b123547', '', '', 'lille'),
(4, 0, 'mercedes', NULL, '0000-00-00', 70, '2017', 124587, 'gris', 'automatique', 'c456987', '', '', 'montpellier'),
(5, 0, 'dacia', NULL, '0000-00-00', 30, '2018', 1458796, 'gris', 'manuelle', 'd7459871', '', '', 'marseille'),
(6, 0, 'mercedes', NULL, '0000-00-00', 40, '2016', 7845963, 'noir', 'manuelle', 'a59866', '', '', 'nimes'),
(7, 0, 'renault', NULL, '0000-00-00', 35, '2017', 9546315, 'bleu', 'manuelle', 'b4598761', '', '', 'lyon'),
(8, 0, 'mercedes', NULL, '0000-00-00', 40, '2014', 2147483647, 'rouge', 'manuelle', 'a1236548', '', '', 'cannes'),
(9, 0, 'mercedes', '0000-00-00', '0000-00-00', 124, '2019', 12457896, 'noir', 'automatique', 'a1236584', '', '', 'toulouse'),
(10, 0, 'dacia', '0000-00-00', '0000-00-00', 70, '2019', 154689367, 'noir', 'automatique', '123546s', '', '', 'sete'),
(11, 0, 'mercedes', '0000-00-00', '0000-00-00', 65, '2015', 12568796, 'gris', 'manuelle', 'eg6525624', '', '', 'montpellier');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
