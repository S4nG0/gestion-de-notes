-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Juin 2015 à 09:36
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

CREATE TABLE IF NOT EXISTS `epreuve` (
  `idEpreuve` int(11) NOT NULL AUTO_INCREMENT,
  `idPromotion` int(11) NOT NULL,
  `coefficient` varchar(5) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `Date_epreuve` date DEFAULT NULL,
  `idModule` int(11) NOT NULL,
  PRIMARY KEY (`idEpreuve`),
  KEY `FK_Epreuve_idModule` (`idModule`),
  KEY `idPromotion` (`idPromotion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `note` int(11) NOT NULL,
  `idEpreuve` int(11) NOT NULL,
  `idPersonne` int(11) NOT NULL,
  PRIMARY KEY (`idEpreuve`,`idPersonne`),
  KEY `FK_note_idPersonne` (`idPersonne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, NULL, NULL, 'Charlebois', 'Amber', '63, Chemin des Bateliers', 59000, 'Lille', 'etudiant', 'a.charlebois', 'z@SG/0p,OK831?T'),
(2, NULL, NULL, 'Marcheterre', 'Roger', '57, rue des Nations Unies', 59000, 'Lille', 'etudiant', 'r.marcheterre', '"9r3&>@}.(N4Qgy'),
(3, NULL, NULL, 'Boulanger', 'Audrey', '44, place de Miremont', 59000, 'Lille', 'etudiant', 'a.boulanger', 'PRV9lJ4oNgrsa e'),
(4, NULL, NULL, 'Dufresne', 'Russell', '81, Avenue des Tuileries', 59000, 'Lille', 'etudiant', 'r.dufresne', '%A*4Q.*|$;[ES+o'),
(5, NULL, NULL, 'Cormier', 'Valérie', '81, Place Napoléon', 59000, 'Lille', 'etudiant', 'v.cormier', ')(J${/..7]0?4&h'),
(6, NULL, NULL, 'Busque', 'Christian', '33, rue de l''Aigle', 59000, 'Lille', 'etudiant', 'c.busque', 'Kt]8r|2p53};]6n'),
(7, NULL, NULL, 'Angelil', 'Joanna', '47, Rue de Strasbourg', 59000, 'Lille', 'etudiant', 'j.angelil', '2J[x8MZ)j*1Z49A'),
(8, NULL, NULL, 'Rancourt', 'Romain', '29, rue Goya', 59000, 'Lille', 'etudiant', 'r.rancourt', '/;{{dV9t!65.D8f'),
(9, NULL, NULL, 'Chnadonnet', 'Yolande', '58, rue Descartes', 59000, 'Lille', 'enseignant', 'y.chnadonnet', 'o1?{qJt:+:v1qZf'),
(10, NULL, NULL, 'Provencher', 'David', '7, rue de la Boétie', 59000, 'Lille', 'enseignant', 'd.provencher', 'wCKa308''|@"_~''i'),
(11, NULL, NULL, 'Lalonde', 'Virginie', '77, rue Cazade', 59000, 'Lille', 'enseignant', 'v.lalonde', 'I?vENqu-Lo<ej5j'),
(12, NULL, NULL, 'Charrette', 'Arthur', '36, avenue de Provence', 59000, 'Lille', 'enseignant', 'a.charrette', '>7R3^Fie'')>PM6K'),
(13, NULL, NULL, 'Saurel', 'Stéphanie', '69, Square de la Couronne', 59000, 'Lille', 'enseignant', 's.saurel', '(g}4n+0C!3@Y01c'),
(14, NULL, NULL, 'Lagarde', 'Camille', '16, boulevard Aristide Briand', 59000, 'Lille', 'administrateur', 'c.lagarde', 'D791=ww72y0B17J');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  ADD CONSTRAINT `FK_note_idPersonne` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`),
  ADD CONSTRAINT `FK_note_idEpreuve` FOREIGN KEY (`idEpreuve`) REFERENCES `epreuve` (`idEpreuve`);

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
