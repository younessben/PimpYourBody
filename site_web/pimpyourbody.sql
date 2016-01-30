-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 30 Janvier 2016 à 23:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

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
  `ID_ADRESSE` bigint(8) NOT NULL AUTO_INCREMENT,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `NUMERO_RUE` int(11) NOT NULL,
  `NOM_RUE` varchar(255) NOT NULL,
  `VILLE` varchar(255) NOT NULL,
  `CODE_POSTAL` varchar(6) NOT NULL,
  PRIMARY KEY (`ID_ADRESSE`),
  KEY `I_FK_ADRESSE_UTILISATEUR` (`ID_UTILISATEUR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_produit`
--

CREATE TABLE IF NOT EXISTS `categorie_produit` (
  `ID_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_CATÉGORIE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_CATEGORIE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `ID_COMMANDE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `DATE_COMMANDE` date NOT NULL,
  `MONTANT_COMMANDE` float NOT NULL,
  `STATUT_COMMANDE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_COMMANDE`),
  KEY `I_FK_COMMANDE_UTILISATEUR` (`ID_UTILISATEUR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `details_exercice`
--

CREATE TABLE IF NOT EXISTS `details_exercice` (
  `ID_PROG_ENTR` int(11) NOT NULL,
  `ID_EXERCICE` int(11) NOT NULL,
  `NBR_REPETITION` int(11) NOT NULL,
  `NBR_SERIES` int(11) NOT NULL,
  `DUREE_REPOS` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_PROG_ENTR`,`ID_EXERCICE`),
  KEY `I_FK_DETAILS_EXERCICE_PROGRAMME_ENTRAINEMENT` (`ID_PROG_ENTR`),
  KEY `I_FK_DETAILS_EXERCICE_EXERCICE` (`ID_EXERCICE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

CREATE TABLE IF NOT EXISTS `exercice` (
  `ID_EXERCICE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_EXERCICE` varchar(255) NOT NULL,
  `LIEN_VIDEO` varchar(255) DEFAULT NULL,
  `CHEMIN_IMG_EX` varchar(255) NOT NULL,
  `DESC_EXERCICE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_EXERCICE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_PRODUIT` int(11) NOT NULL,
  `QUANTITÉ_COMMANDE` int(11) NOT NULL,
  `MONTANT_LIGNE_CMD` float NOT NULL,
  PRIMARY KEY (`ID_COMMANDE`,`ID_PRODUIT`),
  KEY `I_FK_LIGNE_COMMANDE_COMMANDE` (`ID_COMMANDE`),
  KEY `I_FK_LIGNE_COMMANDE_PRODUIT` (`ID_PRODUIT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `performances`
--

CREATE TABLE IF NOT EXISTS `performances` (
  `ID_PERFORMANCE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `POIDS` float NOT NULL,
  `TAILLE` float NOT NULL,
  `BRAS` float NOT NULL,
  `EPAULES` float NOT NULL,
  `POITRINES` float NOT NULL,
  `CUISSES` float NOT NULL,
  `TOUR_TAILLE` float NOT NULL,
  `DATE_SAISIE` date NOT NULL,
  `MASSE_GRAISSEUSE` float NOT NULL,
  PRIMARY KEY (`ID_PERFORMANCE`),
  KEY `I_FK_PERFORMANCES_UTILISATEUR` (`ID_UTILISATEUR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ID_PRODUIT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CATEGORIE` int(11) NOT NULL,
  `NOM_PDT` varchar(255) NOT NULL,
  `PRIX` float NOT NULL,
  `CHEMIN_IMG_PDT` varchar(255) NOT NULL,
  `STOCK` int(11) NOT NULL,
  PRIMARY KEY (`ID_PRODUIT`),
  KEY `I_FK_PRODUIT_CATEGORIE_PRODUIT` (`ID_CATEGORIE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `programme_entrainement`
--

CREATE TABLE IF NOT EXISTS `programme_entrainement` (
  `ID_PROG_ENTR` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PROGE` varchar(255) NOT NULL,
  `DUREE_PROGE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_PROG_ENTR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `programme_nutrition`
--

CREATE TABLE IF NOT EXISTS `programme_nutrition` (
  `ID_PROG_NUTR` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PROGN` varchar(255) NOT NULL,
  `DUREE_PROGN` varchar(255) NOT NULL,
  `PETIT_DEJ` varchar(255) DEFAULT NULL,
  `COL_MATIN` varchar(255) DEFAULT NULL,
  `DEJEUNER` varchar(255) DEFAULT NULL,
  `COL_AM` varchar(255) DEFAULT NULL,
  `DINER` varchar(255) DEFAULT NULL,
  `COL_SOIR` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_PROG_NUTR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_UTILISATEUR` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROG_NUTR` int(11) DEFAULT NULL,
  `ID_PROG_ENTR` int(11) DEFAULT NULL,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEXE` char(1) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `TELEPHONE` varchar(13) NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL,
  `ACTIF` int(2) DEFAULT NULL,
  PRIMARY KEY (`ID_UTILISATEUR`),
  KEY `I_FK_UTILISATEUR_PROGRAMME_NUTRITION` (`ID_PROG_NUTR`),
  KEY `I_FK_UTILISATEUR_PROGRAMME_ENTRAINEMENT` (`ID_PROG_ENTR`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
