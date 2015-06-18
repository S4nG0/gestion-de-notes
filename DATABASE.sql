-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: phpspe_gestionDeNote
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `idPersonne` int(11) NOT NULL,
  PRIMARY KEY (`idDepartement`),
  KEY `FK_Departement_idPersonne` (`idPersonne`),
  CONSTRAINT `FK_Departement_idPersonne` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enseigne`
--

DROP TABLE IF EXISTS `enseigne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enseigne` (
  `idPersonne` int(11) NOT NULL,
  `idModule` int(11) NOT NULL,
  PRIMARY KEY (`idPersonne`,`idModule`),
  KEY `FK_Enseigne_idModule` (`idModule`),
  CONSTRAINT `FK_Enseigne_idModule` FOREIGN KEY (`idModule`) REFERENCES `module` (`idModule`),
  CONSTRAINT `FK_Enseigne_idPersonne` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enseigne`
--

LOCK TABLES `enseigne` WRITE;
/*!40000 ALTER TABLE `enseigne` DISABLE KEYS */;
/*!40000 ALTER TABLE `enseigne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `epreuve`
--

DROP TABLE IF EXISTS `epreuve`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `epreuve` (
  `idEpreuve` int(11) NOT NULL AUTO_INCREMENT,
  `idPromotion` int(11) NOT NULL,
  `coefficient` varchar(5) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `Date_epreuve` date DEFAULT NULL,
  `idModule` int(11) NOT NULL,
  PRIMARY KEY (`idEpreuve`),
  KEY `FK_Epreuve_idModule` (`idModule`),
  KEY `idPromotion` (`idPromotion`),
  CONSTRAINT `FK_Epreuve_idModule` FOREIGN KEY (`idModule`) REFERENCES `module` (`idModule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `epreuve`
--

LOCK TABLES `epreuve` WRITE;
/*!40000 ALTER TABLE `epreuve` DISABLE KEYS */;
/*!40000 ALTER TABLE `epreuve` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `module` (
  `idModule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `code` varchar(20) NOT NULL,
  `coefficient` varchar(5) NOT NULL,
  `idUE` int(11) NOT NULL,
  PRIMARY KEY (`idModule`),
  KEY `FK_Module_idUE` (`idUE`),
  CONSTRAINT `FK_Module_idUE` FOREIGN KEY (`idUE`) REFERENCES `unite_enseignement` (`idUE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `note` (
  `note` int(11) NOT NULL,
  `idEpreuve` int(11) NOT NULL,
  `idPersonne` int(11) NOT NULL,
  PRIMARY KEY (`idEpreuve`,`idPersonne`),
  KEY `FK_note_idPersonne` (`idPersonne`),
  CONSTRAINT `FK_note_idPersonne` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`),
  CONSTRAINT `FK_note_idEpreuve` FOREIGN KEY (`idEpreuve`) REFERENCES `epreuve` (`idEpreuve`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note`
--

LOCK TABLES `note` WRITE;
/*!40000 ALTER TABLE `note` DISABLE KEYS */;
/*!40000 ALTER TABLE `note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne` (
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
  KEY `FK_Administratif_idDepartement` (`idDepartement`),
  CONSTRAINT `FK_Administratif_idDepartement` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`),
  CONSTRAINT `FK_Etudiant_idPromotion` FOREIGN KEY (`idPromotion`) REFERENCES `promotion` (`idPromotion`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` VALUES (1,NULL,NULL,'Charlebois','Amber','63, Chemin des Bateliers',59000,'Lille','etudiant','a.charlebois','z@SG/0p,OK831?T'),(2,NULL,NULL,'Marcheterre','Roger','57, rue des Nations Unies',59000,'Lille','etudiant','r.marcheterre','\"9r3&>@}.(N4Qgy'),(3,NULL,NULL,'Boulanger','Audrey','44, place de Miremont',59000,'Lille','etudiant','a.boulanger','PRV9lJ4oNgrsa e'),(4,NULL,NULL,'Dufresne','Russell','81, Avenue des Tuileries',59000,'Lille','etudiant','r.dufresne','%A*4Q.*|$;[ES+o'),(5,NULL,NULL,'Cormier','Valérie','81, Place Napoléon',59000,'Lille','etudiant','v.cormier',')(J${/..7]0?4&h'),(6,NULL,NULL,'Busque','Christian','33, rue de l\'Aigle',59000,'Lille','etudiant','c.busque','Kt]8r|2p53};]6n'),(7,NULL,NULL,'Angelil','Joanna','47, Rue de Strasbourg',59000,'Lille','etudiant','j.angelil','2J[x8MZ)j*1Z49A'),(8,NULL,NULL,'Rancourt','Romain','29, rue Goya',59000,'Lille','etudiant','r.rancourt','/;{{dV9t!65.D8f'),(9,NULL,NULL,'Chnadonnet','Yolande','58, rue Descartes',59000,'Lille','enseignant','y.chnadonnet','o1?{qJt:+:v1qZf'),(10,NULL,NULL,'Provencher','David','7, rue de la Boétie',59000,'Lille','enseignant','d.provencher','wCKa308\'|@\"_~\'i'),(11,NULL,NULL,'Lalonde','Virginie','77, rue Cazade',59000,'Lille','enseignant','v.lalonde','I?vENqu-Lo<ej5j'),(12,NULL,NULL,'Charrette','Arthur','36, avenue de Provence',59000,'Lille','enseignant','a.charrette','>7R3^Fie\')>PM6K'),(13,NULL,NULL,'Saurel','Stéphanie','69, Square de la Couronne',59000,'Lille','enseignant','s.saurel','(g}4n+0C!3@Y01c'),(14,NULL,NULL,'Lagarde','Camille','16, boulevard Aristide Briand',59000,'Lille','administrateur','c.lagarde','D791=ww72y0B17J');
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `idPromotion` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `annee` int(11) NOT NULL,
  `idDepartement` int(11) NOT NULL,
  PRIMARY KEY (`idPromotion`),
  KEY `FK_Promotion_idDepartement` (`idDepartement`),
  CONSTRAINT `FK_Promotion_idDepartement` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unite_enseignement`
--

DROP TABLE IF EXISTS `unite_enseignement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unite_enseignement` (
  `idUE` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `idDepartement` int(11) NOT NULL,
  PRIMARY KEY (`idUE`),
  KEY `FK_Unite_enseignement_idDepartement` (`idDepartement`),
  CONSTRAINT `FK_Unite_enseignement_idDepartement` FOREIGN KEY (`idDepartement`) REFERENCES `departement` (`idDepartement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unite_enseignement`
--

LOCK TABLES `unite_enseignement` WRITE;
/*!40000 ALTER TABLE `unite_enseignement` DISABLE KEYS */;
/*!40000 ALTER TABLE `unite_enseignement` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-18 17:26:32
