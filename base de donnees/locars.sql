-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2020 at 01:34 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locars`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(45) NOT NULL,
  `idlocation` int(45) NOT NULL,
  `note` int(1) NOT NULL,
  `commentaires` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `idlocation` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `voiture_idvoiture` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `prix_location` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`idlocation`, `user_iduser`, `voiture_idvoiture`, `date_debut`, `date_fin`, `prix_location`) VALUES
(1, 2, 1, '2020-03-15', '2020-03-20', 100),
(2, 3, 2, '2020-03-20', '2020-03-25', 300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `adresse` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text,
  `telephone` varchar(13) NOT NULL,
  `numero_permis` int(15) NOT NULL,
  `nom_societe` varchar(45) DEFAULT NULL,
  `siret` int(45) DEFAULT NULL,
  `adresse_societe` varchar(250) DEFAULT NULL,
  `code_postale` int(5) DEFAULT NULL,
  `telephone_ste` int(13) DEFAULT NULL,
  `email_ste` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nom`, `prenom`, `type`, `sexe`, `adresse`, `email`, `password`, `confirm_password`, `telephone`, `numero_permis`, `nom_societe`, `siret`, `adresse_societe`, `code_postale`, `telephone_ste`, `email_ste`) VALUES
(1, 'ayoub', 'Hassani', 'PART', 'M', '1581 route de mende', 'ayoub36.ah@gmail.com', '123456', '123456', '0646461878', 8520, NULL, NULL, NULL, 34090, NULL, NULL),
(2, 'lahlou', 'laila', 'PART', 'F', '250 residence Supagro', 'lahlou@gmail.com', '12345', '12345', '08920000256', 8567, '', 0, NULL, NULL, NULL, NULL),
(3, 'kholte', 'salma', 'Pro', 'F', 'Occitanie', 'salma@gmail.com', '8520', '8520', '0645460088', 789632147, 'kholte voitures', 1234567987, 'paul valery', 30090, 423456789, 'kholte@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `idvoiture` int(11) NOT NULL,
  `user_iduser` int(45) NOT NULL,
  `marque` varchar(45) DEFAULT NULL,
  `nomv` varchar(80) DEFAULT NULL,
  `ville` varchar(45) NOT NULL,
  `dispo_debut` date DEFAULT NULL,
  `dispo_fin` date NOT NULL,
  `prixj` float DEFAULT NULL,
  `model` int(4) NOT NULL,
  `kilometrage` int(15) DEFAULT NULL,
  `couleur` varchar(20) NOT NULL,
  `boite_vitesse` varchar(16) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`idvoiture`, `user_iduser`, `marque`, `nomv`, `ville`, `dispo_debut`, `dispo_fin`, `prixj`, `model`, `kilometrage`, `couleur`, `boite_vitesse`, `matricule`, `image_url`) VALUES
(1, 3, 'BMW', 'x5', 'paris', '2020-04-25', '2020-04-16', 100, 2018, 4567, 'blanc ', 'manuel', 'a125987', '../upload/x5.jpg'),
(13, 2, 'mercedes', 'gla', 'nancy', '2020-04-02', '2020-04-05', 10, 2020, 3456, 'gris', 'auto', '157', '../upload/gla.jpg'),
(14, 1, 'Audi', 'A3', 'paris', '2020-04-05', '2020-04-15', 120, 2012, 1234567, 'bleu', 'auto', 'a457896', '../upload/car.jpg'),
(15, 1, 'Dacia', 'Duster', 'Montpellier', '2020-04-05', '2020-04-14', 120, 2012, 234345, 'marron', 'auto', 'a457896', '../upload/b1.jpg'),
(16, 2, 'mercedes', 'classe A', 'nancy', '2020-04-05', '2020-04-05', 120, 2012, 4567, 'noire', 'auto', 'a457896', '../upload/classe A.jpg'),
(17, 3, 'Audi', 'Q7', 'Paris', '2020-05-05', '2020-05-15', 120, 2012, 87443, 'noire', 'auto', 'a457896', '../upload/b1.jpg'),
(18, 1, 'nissan', 'juke', 'Montpellier', '2020-04-10', '2020-04-14', 150, 2019, 23456, 'gris', 'manuel', 'shj_ghj', '../upload/juke.jpg'),
(19, 1, 'audi', 'A4', 'amiens', '2020-04-16', '2020-04-18', 124, 2019, 48765, 'noir', 'auto', 'shj_ghj', '../upload/f74ac91a1e671438e10766234cac0169.jpg'),
(20, 1, 'audi', 'A4', 'marseille', '2020-04-17', '2020-04-24', 150, 2020, 34565, 'gris', 'auto', 'GEK_BN_09', '../upload/a4.jpg'),
(21, 1, 'BMW', 'x6', 'nantes', '2020-04-23', '2020-04-30', 178, 2019, 5645, 'maron', 'auto', 'shj_koko_97', '../upload/bmw-x6-2-750x410.jpg'),
(22, 1, 'renault', 'clio 5', 'montpellier', '2020-04-25', '2020-05-09', 80, 2019, 6576, 'orange', 'manuel', 'shj_koko_97', '../upload/clio.jpg'),
(23, 3, 'peugeot', '2008', 'Lille', '2020-04-18', '2020-05-07', 123, 2019, 45656, 'orange', 'manuel', 'GK8_FGH8HG', '../upload/2008.jpg'),
(24, 3, 'mercedes', 'cla', 'paris', '2020-05-20', '2020-05-30', 160, 2018, 14566, 'gris', 'auto', 'GHJ_FGH_GH', '../upload/clajpg.jpg'),
(25, 3, 'peugeot', '208', 'strasbourg', '2020-04-12', '2020-04-30', 80, 208, 234567, 'bleu ciel', 'manuel', 'DG_TR_56', '../upload/208.jpg'),
(26, 3, 'audi', 'A3', 'perpignan', '2020-05-03', '2020-05-09', 110, 2018, 345678, 'bleu', 'auto', 'GJK_FD_98', '../upload/A3.jpg'),
(27, 2, 'seat', 'arona', 'montpellier', '2020-04-24', '2020-04-29', 78, 2018, 12458, 'rouge', 'manuel', 'DK_VC_56', '../upload/arona.jpg'),
(28, 2, 'BMW', 'x6', 'lyon', '2020-05-10', '2020-05-24', 190, 2019, 654567, 'dore', 'auto', 'JLL_BN_09', '../upload/bmw-x6-2-750x410.jpg'),
(29, 2, 'citroen', 'c4', 'lyon', '2020-04-25', '2020-05-01', 50, 2017, 654780, 'rouge', 'manuel', 'FG_GH_456', '../upload/c4.jpg'),
(30, 2, 'seat', 'leon', 'marseille', '2020-04-25', '2020-05-05', 69, 2018, 45748, 'gris', 'manuel', 'FGH_GH_68', '../upload/leon.jpg'),
(31, 2, 'volkswagen', 'golf 7', 'lyon', '2020-05-07', '2020-05-29', 124, 2020, 47890, 'blanc', 'manuel', 'FGHJ_GHJ_98', '../upload/golf7.jpg'),
(32, 2, 'audi', 'q7', 'marseille', '2020-04-24', '2020-04-24', 70, 2019, 578986, 'rouge', 'manuel', 'GHJK_BN_54', '../upload/q7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`),
  ADD KEY `idlocation` (`idlocation`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idlocation`),
  ADD KEY `fk_location_user_idx` (`user_iduser`),
  ADD KEY `fk_location_voiture1_idx` (`voiture_idvoiture`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`idvoiture`),
  ADD KEY `user_iduser` (`user_iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `idlocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `idvoiture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
