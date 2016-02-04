-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2016 at 11:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pimpyourbody`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
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
-- Table structure for table `categorie_produit`
--

CREATE TABLE IF NOT EXISTS `categorie_produit` (
  `ID_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_CATÉGORIE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_CATEGORIE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categorie_produit`
--

INSERT INTO `categorie_produit` (`ID_CATEGORIE`, `NOM_CATÉGORIE`) VALUES
(1, 'Machines'),
(2, 'Poids libres'),
(3, 'Complements alimentaires');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `ID_COMMANDE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `DATE_COMMANDE` date NOT NULL,
  `MONTANT_COMMANDE` float NOT NULL,
  `STATUT_COMMANDE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_COMMANDE`),
  KEY `I_FK_COMMANDE_UTILISATEUR` (`ID_UTILISATEUR`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`ID_COMMANDE`, `ID_UTILISATEUR`, `DATE_COMMANDE`, `MONTANT_COMMANDE`, `STATUT_COMMANDE`) VALUES
(1, 3, '2016-02-04', 0, 'Panier'),
(2, 3, '2016-02-04', 0, 'Panier'),
(3, 3, '2016-02-04', 0, 'Panier'),
(4, 3, '2016-02-04', 0, 'Panier'),
(5, 3, '2016-02-04', 0, 'Panier');

-- --------------------------------------------------------

--
-- Table structure for table `details_exercice`
--

CREATE TABLE IF NOT EXISTS `details_exercice` (
  `ID_PROG_ENTR` int(11) NOT NULL,
  `ID_EXERCICE` int(11) NOT NULL,
  `NBR_REPETITION` varchar(100) NOT NULL,
  `NBR_SERIES` varchar(100) NOT NULL,
  `DUREE_REPOS` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_PROG_ENTR`,`ID_EXERCICE`),
  KEY `I_FK_DETAILS_EXERCICE_PROGRAMME_ENTRAINEMENT` (`ID_PROG_ENTR`),
  KEY `I_FK_DETAILS_EXERCICE_EXERCICE` (`ID_EXERCICE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details_exercice`
--

INSERT INTO `details_exercice` (`ID_PROG_ENTR`, `ID_EXERCICE`, `NBR_REPETITION`, `NBR_SERIES`, `DUREE_REPOS`) VALUES
(1, 1, '10', '7', '15 secondes'),
(1, 2, '10', '5', '45 secondes'),
(1, 3, '20', '10', '20 secondes'),
(2, 4, '20', '5', '30 secondes'),
(2, 5, '20', '5', '30 secondes'),
(2, 6, '20', '5', '30 secondes'),
(2, 1, '10', '5', '30 secondes'),
(3, 1, '10', '5', '20 secondes'),
(4, 1, '10', '5', '15 secondes'),
(2, 2, '10', '5', '1 minute'),
(2, 3, '20', '10', '20 secondes'),
(3, 3, '20', '10', '20 secondes'),
(1, 4, '20', '10', '20 secondes'),
(3, 7, '30 minutes', '3 fois/semaine', ''),
(4, 7, '45 minutes', '4 fois/semaine', ''),
(1, 8, '10', '5', '15 secondes'),
(4, 8, '10', '5', '15 secondes'),
(4, 9, '30', '10', '1 minute'),
(3, 9, '30', '10', '1 minute');

-- --------------------------------------------------------

--
-- Table structure for table `exercice`
--

CREATE TABLE IF NOT EXISTS `exercice` (
  `ID_EXERCICE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_EXERCICE` varchar(255) NOT NULL,
  `LIEN_VIDEO` varchar(255) DEFAULT NULL,
  `CHEMIN_IMG_EX` varchar(255) NOT NULL,
  `DESC_EXERCICE` varchar(255) DEFAULT NULL,
  `CHEMIN_IMG_DEMO` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_EXERCICE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `exercice`
--

INSERT INTO `exercice` (`ID_EXERCICE`, `NOM_EXERCICE`, `LIEN_VIDEO`, `CHEMIN_IMG_EX`, `DESC_EXERCICE`, `CHEMIN_IMG_DEMO`) VALUES
(1, 'Gainage', '<iframe width="560" height="315" src="https://www.youtube.com/embed/b7LmuXITeVM" frameborder="0" allowfullscreen></iframe>', 'images/gainage.jpg', 'Le gainage permet le renforcement des muscles abdominaux profonds (psoas, iliaque, carré des lombes, abdos transverse et obliques) et de la chaîne musculaire dorsale en contraction isométrique', 'images/demo_gainage.jpg'),
(2, 'Développé couché', '<iframe width="560" height="315" src="https://www.youtube.com/embed/6BTdsptL1BQ" frameborder="0" allowfullscreen></iframe>', 'images/devc.png', 'Les pectoraux sont souvent avec les bras et les abdominaux la priorité de nombreux pratiquants de musculation. Il est vrai que ces muscles sont esthétiquement importants, mais un développement trop prononcé peut conduire à déformer le buste.', 'images/demo_devc.jpg'),
(3, 'Pompes au sol', '<iframe width="560" height="315" src="https://www.youtube.com/embed/UUGbJSLRVLk" frameborder="0" allowfullscreen></iframe>', 'images/pompes.jpg', 'Cet exercice très populaire permet de travailler l''ensemble du buste et notamment les pectoraux, épaules et triceps. On peut se construire de bons pectoraux avec seulement les pompes mais à condition de savoir s''y prendre', 'images/demo_pompes.jpg'),
(4, 'Crunch au sol', '<iframe width="560" height="315" src="https://www.youtube.com/embed/zUk1BiL6Ajc" frameborder="0" allowfullscreen></iframe>', 'images/Crunch.jpg', 'Le crunch est un exercice simple et efficace pour muscler les abdominaux. Il affine et raffermit la taille si vous travaillez avec le poids du corps, et développe les abdominaux si vous utilisez un lest de plus en plus lourd. Il ne nécessite pas de matéri', 'images/demo_crunch.jpg'),
(5, 'Relevé de jambes sur plan incline', '<iframe width="560" height="315" src="https://www.youtube.com/embed/CgmLUMdj_Z0" frameborder="0" allowfullscreen></iframe>', 'images/rv.jpg', 'Cet exercice de musculation exécuté sur un banc incliné raffermit les abdominaux et la taille. Il travaille à la fois les abdominaux et les fléchisseurs de la hanche.', 'images/demo_crunch.jpg'),
(6, 'Sit-up', '<iframe width="560" height="315" src="https://www.youtube.com/embed/nKFxkSzYr80" frameborder="0" allowfullscreen></iframe>', 'images/situp.jpg', 'Cet exercice de musculation raffermit la taille et muscle les abdominaux. Il a la réputation de travailler le bas du ventre, là où le crunch au sol sollicite plutôt le haut des abdominaux.', 'images/demo_crunch.jpg'),
(7, 'Course à pied', NULL, 'images/course1.jpg', 'LA course fait partie d''un programme plus général visant à affiner les cuisses. Pour affiner les cuisses en courant il faut que les muscles qui participent à la foulée aient un temps de contraction court', 'images/course2.png'),
(8, 'Overhead Squat', '<iframe width="560" height="315" src="https://www.youtube.com/embed/i3VMBdEBB7c" frameborder="0" allowfullscreen></iframe>', 'images/overhead.png', 'L''overhead squat ou squat barre au-dessus de la tête, permet le travail de l''équilibre dynamique. La technique de ce squat consiste à porter la barre, non dans le dos comme pour le squat classique mais au-dessus de soi, bras écartés et tendus.', 'images/demo_squate.png'),
(9, 'Corde à sauter', '<iframe width="420" height="315" src="https://www.youtube.com/embed/COmUqAAWG2I" frameborder="0" allowfullscreen></iframe>', 'images/cad.jpg', 'Ce programme Corde à sauter-Exercices de Fitness, plutôt destiné aux femmes, tonifie les muscles sans les faire grossir', 'images/demo_cad.png');

-- --------------------------------------------------------

--
-- Table structure for table `ligne_commande`
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
-- Table structure for table `performances`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `performances`
--

INSERT INTO `performances` (`ID_PERFORMANCE`, `ID_UTILISATEUR`, `POIDS`, `TAILLE`, `BRAS`, `EPAULES`, `POITRINES`, `CUISSES`, `TOUR_TAILLE`, `DATE_SAISIE`, `MASSE_GRAISSEUSE`) VALUES
(2, 3, 75, 180, 40, 100, 80, 50, 70, '2016-02-02', 17.5);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ID_PRODUIT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CATEGORIE` int(11) NOT NULL,
  `NOM_PDT` varchar(255) NOT NULL,
  `PRIX` float NOT NULL,
  `CHEMIN_IMG_PDT` varchar(255) NOT NULL,
  `STOCK` int(11) NOT NULL,
  `DESC_PDT` varchar(255) DEFAULT NULL,
  `LIEN_EXERCICE` varchar(255) DEFAULT NULL,
  `MUSCLE_CONCERNE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_PRODUIT`),
  KEY `I_FK_PRODUIT_CATEGORIE_PRODUIT` (`ID_CATEGORIE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`ID_PRODUIT`, `ID_CATEGORIE`, `NOM_PDT`, `PRIX`, `CHEMIN_IMG_PDT`, `STOCK`, `DESC_PDT`, `LIEN_EXERCICE`, `MUSCLE_CONCERNE`) VALUES
(1, 1, 'Poulies', 155.99, '', 50, 'Desc poulie', NULL, NULL),
(2, 1, 'Banc développé couché', 300, '', 50, 'Desc dc', NULL, NULL),
(3, 1, 'Banc incliné guidée', 320, '', 50, 'desc incline', NULL, NULL),
(4, 2, 'Poids 5kg', 25, 'images/page2-img2.jpg', 100, 'desc 5kg', NULL, NULL),
(5, 2, 'Poids 25kg', 50, '', 100, 'desc 25kg', NULL, NULL),
(6, 3, 'Whey gout chocolat caramel', 25, '', 100, 'desc whey', NULL, NULL),
(7, 3, 'Sandwich à la whey', 15, '', 100, 'desc sandwich', NULL, NULL),
(8, 3, 'Nutella à la whey', 20, '', 100, 'desc nutella', NULL, NULL),
(9, 3, 'Thé à la whey gout cerise', 25, '', 100, 'desc thé', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `programme_entrainement`
--

CREATE TABLE IF NOT EXISTS `programme_entrainement` (
  `ID_PROG_ENTR` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PROGE` varchar(255) NOT NULL,
  `DESC_PROGE` varchar(255) DEFAULT NULL,
  `CHEMIN_IMG_PRG` varchar(255) DEFAULT NULL,
  `DUREE_PROGE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_PROG_ENTR`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `programme_entrainement`
--

INSERT INTO `programme_entrainement` (`ID_PROG_ENTR`, `NOM_PROGE`, `DESC_PROGE`, `CHEMIN_IMG_PRG`, `DUREE_PROGE`) VALUES
(1, 'Prise de masse', 'OBJECTIF :<br/>\nDevenir massif le plus rapidement possible, en développant particulièrement la force, l’épaisseur et le volume musculaire.', 'images/prise_de_masse.png', '6 mois'),
(2, 'Sèche', 'OBJECTIF :<br/> Alterner entraînement musculaire et cardio pour diminuer progressivement la masse grasse sans faire de fonte musculaire pour obtenir un physique super sec et musclé.', 'images/abdos.jpg', '6 mois'),
(3, 'Minceur', 'OBJECTIF :<br/> Perdre un maximum en masse grasse et réguler le métabolisme pour diminuer radicalement les graisses abdominales et affiner au maximum la silhouette', 'images/minceur.jpg', '6 mois'),
(4, 'Cardio-Energie', 'OBJECTIF :<br/> Affinez votre silhouette, par la pratique du fitness et du cardio-training, raffermissez votre corps et affinez votre sangle abdominale ainsi que vos cuisses et fessiers.', 'images/cardio.jpg', '6 mois');

-- --------------------------------------------------------

--
-- Table structure for table `programme_nutrition`
--

CREATE TABLE IF NOT EXISTS `programme_nutrition` (
  `ID_PROG_NUTR` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PROGN` varchar(255) NOT NULL,
  `DESC_PROGN` varchar(255) DEFAULT NULL,
  `DUREE_PROGN` varchar(255) NOT NULL,
  `PETIT_DEJ` varchar(255) DEFAULT NULL,
  `COL_MATIN` varchar(255) DEFAULT NULL,
  `DEJEUNER` varchar(255) DEFAULT NULL,
  `COL_AM` varchar(255) DEFAULT NULL,
  `DINER` varchar(255) DEFAULT NULL,
  `COL_SOIR` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_PROG_NUTR`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `programme_nutrition`
--

INSERT INTO `programme_nutrition` (`ID_PROG_NUTR`, `NOM_PROGN`, `DESC_PROGN`, `DUREE_PROGN`, `PETIT_DEJ`, `COL_MATIN`, `DEJEUNER`, `COL_AM`, `DINER`, `COL_SOIR`) VALUES
(1, 'Prise de masse', 'OBJECTIF :<br/>\nApporter régulièrement des calories de qualité indispensables au développement musculaire sec pour prendre du muscle rapidement sans prise de masse grasse.', '', '120gr de Muesli/Flocons Avoine/Céréales <br/> 250ml d’eau ou 150gr de Pain Complet <br/>\r\n4 blancs d’oeuf + 1 jaune omelette/brouillés/dur ou 3 tranches de jambon <br/>\r\nThé ou Café', '30g de whey <br/> 250ml d’eau ou 130g de poulet en salaison <br/>\r\n1 pomme ou 1 kiwi ou 150g de fraises', '100gr de Crudités<br/>\n220gr (cuit) de Pâtes/Riz ou Pommes de terre<br/>\n220gr de Viandes blanches ou 250gr de poisson blanc\n150g de légumes verts avec 1/2 c à soupe d’huile d’olive', '30gr de whey <br/> 250ml d’eau ou 300gr de Fromage blanc ou 3 tranches de jambon blanc <br/>\r\n80g de pain complet ou céréales complètes', '200gr (cuit) de légumineuses\nlégumes verts à volonté avec 1/2 c à soupe d’huile isio 4 <br/>\n230gr de Cabillaud/Colin/Dorade ou 200gr de viande blanche', '40gr de caséine en poudre avec 250ml d’eau ou 420g de fromage blanc 0%'),
(2, 'SPÉCIAL SÈCHE', 'OBJECTIF :<br/>Durcir la qualité des apports et baisser progressivement la quantité pour perdre un maximum de masse grasse et augmenter radicalement la définition et la qualité musculaire.', '', '100gr de Muesli/Flocons Avoine/Céréales <br/> 250 ml d’eau ou 100gr de Pain Complet <br/>\r\n1 Pomme ou 150ml de jus de fruit <br/> 5 blancs d’oeufs omelette/brouillés/dur ou 3 tranches de jambon sans couenne allégé en sel <br/> Thé ou Café', '30g de caséine ou whey Advanced ou 320g de fromage blanc à 0% <br/> 1 Pomme ou 1 kiwis ou 120g de fraises', '100gr de Salade verte <br/> 150gr de Pâtes/Riz complet ou 200gr de Pommes de terre\r\n<br/>200gr de Viande blanche ou 230g de poisson blanc', '40gr de caséine ou whey advanced <br/> 250ml d’eau ou 180g de jambon blanc<br/>70g de pain complet', '100g de légumineuses (lentilles, haricots secs…)<br/>300gr de légumes verts<br/>250gr de Cabillaud/Colin/Dorade ou 220g de viande blanche', '30gr de caséine ou 320g de fromage blanc à 0%<br/> 250ml d’eau'),
(3, 'Minceur', 'OBJECTIF :<br/>Réduire l’apport calorique et drainer l’organisme pour perdre un maximum de masse graisseuse et de cellulite sur les cuisses et les fesses.', '', '20g de protéine (caséine ou whey advanced) avec 250ml d’eau ou 4 blanc d’œuf <br/> 50g de pain complet <br/>\r\nou 50 g de céréales spécial K complète avec lait de soja<br/>un thé ou café', '50g de thon au naturel ou 70g de blancs de poulet en salaison ou 15g de whey advanced avec 250ml d’eau<br/>1 pomme ou ½ pamplemousse', '110g de Quinoa ou riz complet<br/>130g de viande blanche ou 150g de poisson blanc<br/>légumes verts à volonté (haricots, brocolis…) avec ½ c à soupe d’huile isio 4', '20g de protéines (caséine ou whey advanced) avec 250ml d’eau ou 4 blancs d’œuf ou 100g de jambon blanc dégraissé<br/>60g de pain complet<br/>20g de fruits secs  complexe drainant', '150g de viande blanche ou 170g de poisson blanc<br/>légumes verts à volonté avec ½ c à soupe d’huile isio 4', '20g de protéine (caséine) avec 250ml d’eau ou 230g de fromage blanc à 0%<br/>40 cl d’infusion de queues de cerises'),
(4, 'Cardio-Energie', 'OBJECTIF :<br/>Baisser progressivement l’apport calorique pour augmenter radicalement la définition et la qualité musculaire tout en conservant une alimentation saine et équilibrée.', '', '4 blancs d’œuf avec 1 jaune ou 250g de fromage blanc à 0% ou 20g de whey advanced <br/>100g de pain complet ou 80g de céréales spécial K complètes<br/>un thé ou café avec sucrette', '50g de thon au naturel ou 70g de jambon blanc dégraissé ou 15g de whey advanced<br/>1 pomme ou 1 kiwi ou 150g de fraises', '120g de viande blanche ou 130g de poisson blanc<br/>140g de quinoa ou riz complet<br/>légumes verts à volonté avec 1/2 c à soupe d’huile d’olive<br/>100g de compote de pomme sans sucre ajouté', '70g de jambon blanc ou 15g de whey advanced<br/>60g de pain complet', '150g de viande blanche ou poisson blanc<br/>100g de légumineuses<br/>légumes verts à volonté avec 1/2 c à soupe d’huile isio4', '200g de fromage blanc 0% ou 20g de caséine');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_UTILISATEUR`, `ID_PROG_NUTR`, `ID_PROG_ENTR`, `NOM`, `PRENOM`, `AGE`, `SEXE`, `EMAIL`, `TELEPHONE`, `MOT_DE_PASSE`, `ACTIF`) VALUES
(3, 2, 2, 'Imre', 'Ahmet', 21, 'H', 'ahmet.imre@hotmail.fr', '0685455445', '9cf95dacd226dcf43da376cdb6cbba7035218921', 1),
(4, 4, 4, 'BENHAOUSSEA', 'Youness', 24, 'H', 'youness.benhaoussea@gmail.com', '0623445005', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
