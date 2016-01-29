-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 29 Janvier 2016 à 09:44
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pimpyourbody`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
  `ID_ADRESSE` bigint(8) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `NUMERO_RUE` int(11) NOT NULL,
  `NOM_RUE` varchar(255) NOT NULL,
  `VILLE` varchar(255) NOT NULL,
  `CODE_POSTAL` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_produit`
--

CREATE TABLE IF NOT EXISTS `categorie_produit` (
  `ID_CATEGORIE` int(11) NOT NULL,
  `NOM_CATÉGORIE` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `DATE_COMMANDE` date NOT NULL,
  `MONTANT_COMMANDE` float NOT NULL,
  `STATUT_COMMANDE` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE IF NOT EXISTS `contenir` (
  `ID_PROG_ENTR` int(11) NOT NULL,
  `ID_EXERCICE` int(11) NOT NULL,
  `NBR_REPETITION` int(11) NOT NULL,
  `NBR_SERIES` int(11) NOT NULL,
  `DUREE_REPOS` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

CREATE TABLE IF NOT EXISTS `exercice` (
  `ID_EXERCICE` int(11) NOT NULL,
  `NOM_EXERCICE` varchar(255) NOT NULL,
  `LIEN_VIDEO` varchar(255) DEFAULT NULL,
  `CHEMIN_IMG_EX` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_PRODUIT` int(11) NOT NULL,
  `QUANTITÉ_COMMANDE` int(11) NOT NULL,
  `MONTANT_LIGNE_CMD` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `performances`
--

CREATE TABLE IF NOT EXISTS `performances` (
  `ID_PERFORMANCE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `POIDS` float NOT NULL,
  `TAILLE` float NOT NULL,
  `BRAS` float NOT NULL,
  `EPAULES` float NOT NULL,
  `POITRINES` float NOT NULL,
  `CUISSES` float NOT NULL,
  `TOUR_TAILLE` float NOT NULL,
  `DATE_SAISIE` date NOT NULL,
  `MASSE_GRAISSEUSE` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ID_PRODUIT` int(11) NOT NULL,
  `ID_CATEGORIE` int(11) NOT NULL,
  `NOM_PDT` varchar(255) NOT NULL,
  `PRIX` float NOT NULL,
  `CHEMIN_IMG_PDT` varchar(255) NOT NULL,
  `STOCK` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `programme_entrainement`
--

CREATE TABLE IF NOT EXISTS `programme_entrainement` (
  `ID_PROG_ENTR` int(11) NOT NULL,
  `NOM_PROGE` varchar(255) NOT NULL,
  `DUREE_PROGE` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `programme_nutrition`
--

CREATE TABLE IF NOT EXISTS `programme_nutrition` (
  `ID_PROG_NUTR` int(11) NOT NULL,
  `NOM_PROGN` varchar(255) NOT NULL,
  `DUREE_PROGN` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_UTILISATEUR` int(11) NOT NULL,
  `ID_PROG_NUTR` int(11) DEFAULT NULL,
  `ID_PROG_ENTR` int(11) DEFAULT NULL,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEXE` char(1) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `TELEPHONE` varchar(13) NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
 ADD PRIMARY KEY (`ID_ADRESSE`), ADD KEY `I_FK_ADRESSE_UTILISATEUR` (`ID_UTILISATEUR`);

--
-- Index pour la table `categorie_produit`
--
ALTER TABLE `categorie_produit`
 ADD PRIMARY KEY (`ID_CATEGORIE`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`ID_COMMANDE`), ADD KEY `I_FK_COMMANDE_UTILISATEUR` (`ID_UTILISATEUR`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
 ADD PRIMARY KEY (`ID_PROG_ENTR`,`ID_EXERCICE`), ADD KEY `I_FK_CONTENIR_PROGRAMME_ENTRAINEMENT` (`ID_PROG_ENTR`), ADD KEY `I_FK_CONTENIR_EXERCICE` (`ID_EXERCICE`);

--
-- Index pour la table `exercice`
--
ALTER TABLE `exercice`
 ADD PRIMARY KEY (`ID_EXERCICE`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
 ADD PRIMARY KEY (`ID_COMMANDE`,`ID_PRODUIT`), ADD KEY `I_FK_LIGNE_COMMANDE_COMMANDE` (`ID_COMMANDE`), ADD KEY `I_FK_LIGNE_COMMANDE_PRODUIT` (`ID_PRODUIT`);

--
-- Index pour la table `performances`
--
ALTER TABLE `performances`
 ADD PRIMARY KEY (`ID_PERFORMANCE`), ADD KEY `I_FK_PERFORMANCES_UTILISATEUR` (`ID_UTILISATEUR`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
 ADD PRIMARY KEY (`ID_PRODUIT`), ADD KEY `I_FK_PRODUIT_CATEGORIE_PRODUIT` (`ID_CATEGORIE`);

--
-- Index pour la table `programme_entrainement`
--
ALTER TABLE `programme_entrainement`
 ADD PRIMARY KEY (`ID_PROG_ENTR`);

--
-- Index pour la table `programme_nutrition`
--
ALTER TABLE `programme_nutrition`
 ADD PRIMARY KEY (`ID_PROG_NUTR`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`ID_UTILISATEUR`), ADD KEY `I_FK_UTILISATEUR_PROGRAMME_NUTRITION` (`ID_PROG_NUTR`), ADD KEY `I_FK_UTILISATEUR_PROGRAMME_ENTRAINEMENT` (`ID_PROG_ENTR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
