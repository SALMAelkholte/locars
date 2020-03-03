-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2020 at 05:40 PM
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
-- Database: `locars1`
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
  `Nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `sexe` varchar(10) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `telephone` int(13) NOT NULL,
  `nom_societe` varchar(45) NOT NULL,
  `siret` int(45) NOT NULL,
  `adresse _societe` varchar(250) NOT NULL,
  `code_postale` int(5) NOT NULL,
  `telephone_ste` int(13) NOT NULL,
  `email-ste` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `Nom`, `prenom`, `type`, `sexe`, `adresse`, `e-mail`, `telephone`, `nom_societe`, `siret`, `adresse _societe`, `code_postale`, `telephone_ste`, `email-ste`, `password`, `confirm_password`) VALUES
(1, 'BEN', 'Faissal', 'Part', '', '', '', 0, '', 0, '', 0, 0, '', '', ''),
(2, 'ELKH', 'Salma', 'Part', '', '', '', 0, '', 0, '', 0, 0, '', '', ''),
(3, 'HASS', 'Ayoub', 'PART', '', '', '', 0, '', 0, '', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `idvoiture` int(11) NOT NULL,
  `user_iduser` int(45) NOT NULL,
  `marque` varchar(45) DEFAULT NULL,
  `dispo` tinyint(1) DEFAULT NULL,
  `prixJ` float DEFAULT NULL,
  `model` int(4) NOT NULL,
  `kilometrage` int(15) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `boite_vitesse` varchar(16) NOT NULL,
  `Matricule` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nomV` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`idvoiture`, `user_iduser`, `marque`, `dispo`, `prixJ`, `model`, `kilometrage`, `couleur`, `boite_vitesse`, `Matricule`, `image`, `nomV`) VALUES
(1, 3, 'Renault', 1, 30, 0, 0, '', '', '', '', ''),
(2, 3, 'Nissan', 1, 50, 0, 0, '', '', '', '', ''),
(3, 3, 'BMW', 0, 100, 0, 0, '', '', '', '', '');

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
  MODIFY `idvoiture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
