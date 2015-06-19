-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Juin 2015 à 10:48
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `phpspe_gestiondenotes`
--

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  PRIMARY KEY (`idDepartement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`idDepartement`, `nom`) VALUES
(1, 'STID'),
(2, 'TC'),
(3, 'CJ');

-- --------------------------------------------------------

--
-- Structure de la table `enseigne`
--

CREATE TABLE IF NOT EXISTS `enseigne` (
  `idPersonne` int(11) NOT NULL,
  `idModule` int(11) NOT NULL,
  PRIMARY KEY (`idPersonne`,`idModule`),
  KEY `FK_Enseigne_idModule` (`idModule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `enseigne`
--

INSERT INTO `enseigne` (`idPersonne`, `idModule`) VALUES
(9, 1),
(10, 2),
(11, 3),
(12, 4),
(13, 5);

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

CREATE TABLE IF NOT EXISTS `epreuve` (
  `idEpreuve` int(11) NOT NULL AUTO_INCREMENT,
  `idPromotion` int(11) NOT NULL,
  `coefficient` varchar(5) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `date` date DEFAULT NULL,
  `idModule` int(11) NOT NULL,
  PRIMARY KEY (`idEpreuve`),
  KEY `FK_Epreuve_idModule` (`idModule`),
  KEY `idPromotion` (`idPromotion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `epreuve`
--

INSERT INTO `epreuve` (`idEpreuve`, `idPromotion`, `coefficient`, `nom`, `date`, `idModule`) VALUES
(1, 1, '2', 'interro math 1', '2015-06-14', 1),
(2, 1, '1', 'interro Stat', '2015-06-04', 4),
(3, 2, '1', 'interro prog', '2015-06-02', 8),
(4, 3, '2', 'interro exploit. donnée', '2015-06-21', 9),
(5, 4, '1', 'interro pilotage', '2015-06-25', 10),
(6, 4, '2', 'interro anglais', '2015-06-25', 13),
(7, 5, '1', 'interro exploitation de données', '2015-06-14', 9),
(8, 5, '1', 'interro com', '2015-06-23', 12),
(9, 7, '2', 'interro anglais', '2015-06-04', 13),
(10, 9, '4', 'partiel courbes', '2015-06-30', 15);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `idModule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `code` varchar(20) NOT NULL,
  `coefficient` varchar(5) NOT NULL,
  `idUE` int(11) NOT NULL,
  PRIMARY KEY (`idModule`),
  KEY `FK_Module_idUE` (`idUE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`idModule`, `nom`, `code`, `coefficient`, `idUE`) VALUES
(1, 'Mathématiques ou Economie', 'M1101A', '1', 1),
(2, 'Statistique descriptive 1', 'M1102', '1', 1),
(3, 'Projet Personnel et Professionnel 1', 'M1103', '1', 1),
(4, 'Statistique descriptive 2', 'M1201', '1', 2),
(5, 'Probabilités et simulations 1', 'M1202', '1', 2),
(6, 'Etudes statistiques et enquêtes', 'M1203', '1', 2),
(7, 'Mathématiques pour les probabilités et la statistique', 'M1204', '1', 2),
(8, 'Bases de la programmation', 'M1301', '1', 3),
(9, 'Exploitation de données', 'M1302', '1', 3),
(10, 'Outils de pilotage 1', 'M1303', '1', 3),
(11, 'Economie générale et connaissance de l''entreprise', 'M1401', '1', 4),
(12, 'Eléments fondamentaux de la communication', 'M1402', '1', 4),
(13, 'Initiation à l''anglais de spécialité', 'M1403', '1', 4),
(14, 'Initiation à la stat. Inférentielle', 'M2101', '1', 5),
(15, 'Ajustement de courbes et séries chronologiques', 'M2102', '1', 5);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `note` int(11) DEFAULT NULL,
  `idEpreuve` int(11) NOT NULL,
  `idPersonne` int(11) NOT NULL,
  PRIMARY KEY (`idEpreuve`,`idPersonne`),
  KEY `FK_note_idPersonne` (`idPersonne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `note`
--

INSERT INTO `note` (`note`, `idEpreuve`, `idPersonne`) VALUES
(15, 1, 1),
(NULL, 1, 2),
(10, 2, 1),
(13, 2, 2),
(8, 3, 3),
(3, 3, 4),
(5, 3, 5),
(14, 4, 6),
(NULL, 4, 7),
(16, 4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `idPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `idPromotion` int(11) DEFAULT NULL,
  `idDepartement` int(11) DEFAULT NULL,
  `nom` varchar(500) NOT NULL,
  `prenom` varchar(500) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(500) NOT NULL,
  `statut` varchar(500) NOT NULL,
  `pseudo` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`idPersonne`),
  UNIQUE KEY `pseudo` (`pseudo`),
  KEY `FK_Etudiant_idPromotion` (`idPromotion`),
  KEY `FK_Administratif_idDepartement` (`idDepartement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `idPromotion`, `idDepartement`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `statut`, `pseudo`, `password`) VALUES
(1, 1, NULL, 'Charlebois', 'Amber', '63, Chemin des Bateliers', 59000, 'Lille', 'administratif', 'a.charlebois', 'z@SG/0p,OK831?T'),
(2, 1, NULL, 'Marcheterre', 'Roger', '57, rue des Nations Unies', 59000, 'Lille', 'etudiant', 'r.marcheterre', '"9r3&>@}.(N4Qgy'),
(3, 2, NULL, 'Boulanger', 'Audrey', '44, place de Miremont', 59000, 'Lille', 'etudiant', 'a.boulanger', 'PRV9lJ4oNgrsa e'),
(4, 2, NULL, 'Dufresne', 'Russell', '81, Avenue des Tuileries', 59000, 'Lille', 'etudiant', 'r.dufresne', '%A*4Q.*|$;[ES+o'),
(5, 2, NULL, 'Cormier', 'Valérie', '81, Place Napoléon', 59000, 'Lille', 'etudiant', 'v.cormier', ')(J${/..7]0?4&h'),
(6, 3, NULL, 'Busque', 'Christian', '33, rue de l''Aigle', 59000, 'Lille', 'etudiant', 'c.busque', 'Kt]8r|2p53};]6n'),
(7, 3, NULL, 'Angelil', 'Joanna', '47, Rue de Strasbourg', 59000, 'Lille', 'etudiant', 'j.angelil', '2J[x8MZ)j*1Z49A'),
(8, 3, NULL, 'Rancourt', 'Romain', '29, rue Goya', 59000, 'Lille', 'etudiant', 'r.rancourt', '/;{{dV9t!65.D8f'),
(9, NULL, NULL, 'Chnadonnet', 'Yolande', '58, rue Descartes', 59000, 'Lille', 'enseignant', 'y.chnadonnet', 'o1?{qJt:+:v1qZf'),
(10, NULL, NULL, 'Provencher', 'David', '7, rue de la Boétie', 59000, 'Lille', 'enseignant', 'd.provencher', 'wCKa308''|@"_~''i'),
(11, NULL, NULL, 'Lalonde', 'Virginie', '77, rue Cazade', 59000, 'Lille', 'enseignant', 'v.lalonde', 'I?vENqu-Lo<ej5j'),
(12, NULL, NULL, 'Charrette', 'Arthur', '36, avenue de Provence', 59000, 'Lille', 'enseignant', 'a.charrette', '>7R3^Fie'')>PM6K'),
(13, NULL, NULL, 'Saurel', 'Stéphanie', '69, Square de la Couronne', 59000, 'Lille', 'enseignant', 's.saurel', '(g}4n+0C!3@Y01c'),
(14, NULL, 1, 'Lagarde', 'Camille', '16, boulevard Aristide Briand', 59000, 'Lille', 'administrateur', 'c.lagarde', 'D791=ww72y0B17J');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `idPromotion` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `annee` int(11) NOT NULL,
  `idDepartement` int(11) NOT NULL,
  PRIMARY KEY (`idPromotion`),
  KEY `FK_Promotion_idDepartement` (`idDepartement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `promotion`
--

INSERT INTO `promotion` (`idPromotion`, `nom`, `annee`, `idDepartement`) VALUES
(1, 'SID1', 2015, 1),
(2, 'SID2', 2015, 1),
(3, 'SID2_Alt', 2015, 1),
(4, 'LP_SID', 2015, 1),
(5, 'LP_ECOM', 2015, 1),
(6, 'LP_CR', 2015, 1),
(7, 'LP_MS', 2015, 1),
(8, 'TC1', 2015, 2),
(9, 'TC2', 2015, 2),
(10, 'TC3', 2015, 2);

-- --------------------------------------------------------

--
-- Structure de la table `unite_enseignement`
--

CREATE TABLE IF NOT EXISTS `unite_enseignement` (
  `idUE` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `idDepartement` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  PRIMARY KEY (`idUE`),
  KEY `FK_Unite_enseignement_idDepartement` (`idDepartement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `unite_enseignement`
--

INSERT INTO `unite_enseignement` (`idUE`, `nom`, `idDepartement`, `code`) VALUES
(1, 'Accueil', 1, 'UE11'),
(2, 'Statistique et outils mathématiques', 1, 'UE12'),
(3, 'Introduction à l''informatique décisionnelle', 1, 'UE13'),
(4, 'Environnement économique et communication', 1, 'UE14'),
(5, 'Introduction à la statistique inférentielle', 1, 'UE21'),
(6, 'Bases de l''informatique et du décisionnel', 1, 'UE22'),
(7, 'Economie, management et communication', 1, 'UE23'),
(8, 'Projet', 1, 'UE24'),
(9, 'Statistique', 1, 'UE31'),
(10, 'Solutions décisionelles', 1, 'UE32'),
(11, 'Environnement économique et professionnel', 1, 'UE33'),
(12, 'Application professionnelle', 1, 'UE34');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `enseigne`
--
ALTER TABLE `enseigne`
  ADD CONSTRAINT `FK_Enseigne_idModule` FOREIGN KEY (`idModule`) REFERENCES `module` (`idModule`),
  ADD CONSTRAINT `FK_Enseigne_idPersonne` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`);

--
-- Contraintes pour la table `epreuve`
--
ALTER TABLE `epreuve`
  ADD CONSTRAINT `FK_Epreuve_idModule` FOREIGN KEY (`idModule`) REFERENCES `module` (`idModule`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `FK_Module_idUE` FOREIGN KEY (`idUE`) REFERENCES `unite_enseignement` (`idUE`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `FK_note_idEpreuve` FOREIGN KEY (`idEpreuve`) REFERENCES `epreuve` (`idEpreuve`),
  ADD CONSTRAINT `FK_note_idPersonne` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `FK_Administratif_idDepartement` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`),
  ADD CONSTRAINT `FK_Etudiant_idPromotion` FOREIGN KEY (`idPromotion`) REFERENCES `promotion` (`idPromotion`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `FK_Promotion_idDepartement` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`);

--
-- Contraintes pour la table `unite_enseignement`
--
ALTER TABLE `unite_enseignement`
  ADD CONSTRAINT `FK_Unite_enseignement_idDepartement` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
