-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2020 at 08:39 PM
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
  `telephone` varchar(13) NOT NULL,
  `numero_permis` int(15) NOT NULL,
  `nom_societe` varchar(45) DEFAULT NULL,
  `siret` int(45) DEFAULT NULL,
  `adresse_societe` varchar(250) DEFAULT NULL,
  `code_postale` int(5) DEFAULT NULL,
  `telephone_ste` int(13) DEFAULT NULL,
  `email_ste` varchar(40) DEFAULT NULL,
  `password` text NOT NULL,
  `confirm_password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nom`, `prenom`, `type`, `sexe`, `adresse`, `email`, `telephone`, `numero_permis`, `nom_societe`, `siret`, `adresse_societe`, `code_postale`, `telephone_ste`, `email_ste`, `password`, `confirm_password`) VALUES
(1, 'ayoub', 'Hassani', 'PART', 'M', '1581 route de mende', 'ayoub36.ah@gmail.com', '0646461878', 8520, NULL, NULL, NULL, 34090, NULL, NULL, '123456', '123456'),
(2, 'lahlou', 'laila', 'PART', 'F', '250 residence Supagro', 'lahlou@gmail.com', '08920000256', 8567, '', 0, NULL, NULL, NULL, NULL, '12345', '12345'),
(3, 'kholte', 'salma', 'Pro', 'F', 'Occitanie', 'salma@gmail.com', '0645460088', 789632147, 'kholte voitures', 1234567987, 'paul valery', 30090, 423456789, 'kholte@gmail.com', '8520', '8520');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `idvoiture` int(11) NOT NULL,
  `user_iduser` int(45) NOT NULL,
  `marque` varchar(45) DEFAULT NULL,
  `dispo_debut` date DEFAULT NULL,
  `dispo_fin` date NOT NULL,
  `prixj` float DEFAULT NULL,
  `model` varchar(4) NOT NULL,
  `kilometrage` int(15) DEFAULT NULL,
  `couleur` varchar(20) NOT NULL,
  `boite_vitesse` varchar(16) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `nomv` varchar(80) DEFAULT NULL,
  `ville` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`idvoiture`, `user_iduser`, `marque`, `dispo_debut`, `dispo_fin`, `prixj`, `model`, `kilometrage`, `couleur`, `boite_vitesse`, `matricule`, `image_url`, `nomv`, `ville`) VALUES
(1, 3, 'BMW', '2020-04-25', '2020-04-16', 100, '2018', 15478, 'blanc ', 'manuel', 'a125987', '../upload/b4.jpg', 'serie 3', 'paris'),
(13, 2, 'mercedes', '2020-04-02', '2020-04-05', 10, '2020', 1520, 'noire', 'auto', '157', 'b1.jpg', 'GLK', 'nancy'),
(14, 1, 'Audi', '2020-04-05', '2020-04-15', 120, '2012', 1234567, 'bleu', 'auto', 'a457896', '../upload/car.jpg', 'A3', 'paris'),
(15, 1, 'Dacia', '2020-04-05', '2020-04-05', 120, '2012', 234345, 'marron', 'auto', 'a457896', '../upload/b1.jpg', 'Duster', 'Montpellier'),
(16, 2, 'mercedes', '2020-04-05', '2020-04-05', 120, '2012', 34564, 'noire', 'auto', 'a457896', '../upload/b1.jpg', 'AMG', 'nancy'),
(17, 3, 'Audi', '2020-04-05', '2020-04-05', 120, '2012', 87443, 'noire', 'auto', 'a457896', '../upload/b1.jpg', 'Q7', 'Paris');

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
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `idvoiture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
