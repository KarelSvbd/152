-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: 152
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.32-MariaDB-0ubuntu0.20.04.1

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
-- Table structure for table `MEDIA`
--

DROP TABLE IF EXISTS `MEDIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEDIA` (
  `idMedia` int(11) NOT NULL AUTO_INCREMENT,
  `typeMedia` varchar(100) DEFAULT NULL,
  `nomMedia` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `modificationDate` timestamp NULL DEFAULT current_timestamp(),
  `idPost` int(11) NOT NULL,
  PRIMARY KEY (`idMedia`),
  KEY `MEDIA_FK` (`idPost`),
  CONSTRAINT `MEDIA_FK` FOREIGN KEY (`idPost`) REFERENCES `POST` (`idPost`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEDIA`
--

LOCK TABLES `MEDIA` WRITE;
/*!40000 ALTER TABLE `MEDIA` DISABLE KEYS */;
INSERT INTO `MEDIA` VALUES (2,'png','7dQ0mn',NULL,NULL,1),(3,'jpg','DiagrameMainVr','2022-02-23 13:05:00','2022-02-23 13:05:00',1),(4,'jfif','photo-1514483127413-f72f273478c3','2022-02-23 13:10:40','2022-02-23 13:10:40',1),(5,'jpg','wp7041403-zx10-wallpapers','2022-02-23 13:10:40','2022-02-23 13:10:40',1),(6,'png','a1zcxisgjls71','2022-02-23 13:10:56','2022-02-23 13:10:56',1),(7,'jpg','istockphoto-1300340079-612x612','2022-03-02 13:51:33','2022-03-02 13:51:33',1),(8,'jpg','2021-Kawasaki-Ninja-ZX-10R-KRT-35-scaled','2022-03-02 13:52:43','2022-03-02 13:52:43',2),(9,'png','DisgrammeTecksto','2022-03-02 13:55:44','2022-03-02 13:55:44',3),(10,'png','umlGameBook','2022-03-02 13:57:50','2022-03-02 13:57:50',4),(11,'jpg','5c5','2022-03-02 14:01:37','2022-03-02 14:01:37',5),(12,'png','Programme','2022-03-02 14:03:08','2022-03-02 14:03:08',6),(13,'png','9587479_0','2022-03-02 14:28:54','2022-03-02 14:28:54',12),(14,'jpg','DiagrameMainVr','2022-03-02 14:31:01','2022-03-02 14:31:01',15),(15,'jfif','téléchargement','2022-03-02 14:31:27','2022-03-02 14:31:27',16),(16,'jpg','Eu2S5D8XUAMGkw9','2022-03-02 14:32:49','2022-03-02 14:32:49',20),(17,'png','FonctionnementFrontend','2022-03-02 14:34:13','2022-03-02 14:34:13',21),(18,'png','9587479_0','2022-03-02 14:37:03','2022-03-02 14:37:03',23),(19,'png','9587479_0','2022-03-02 14:37:36','2022-03-02 14:37:36',24),(20,'png','a1zcxisgjls71','2022-03-02 14:37:44','2022-03-02 14:37:44',25),(21,'jpg','wp7041403-zx10-wallpapers','2022-03-02 14:38:11','2022-03-02 14:38:11',27),(22,'jpg','wp7041403-zx10-wallpapers','2022-03-02 14:40:08','2022-03-02 14:40:08',28),(23,'jpg','DiagrameMainVr','2022-03-02 14:40:12','2022-03-02 14:40:12',29),(24,'jpg','DiagrameMainVr','2022-03-02 14:40:35','2022-03-02 14:40:35',30),(25,'jpg','wp5053821','2022-03-02 14:40:39','2022-03-02 14:40:39',31),(26,'jpg','wp5053821','2022-03-02 14:40:54','2022-03-02 14:40:54',32),(27,'jfif','photo-1514483127413-f72f273478c3','2022-03-02 14:41:01','2022-03-02 14:41:01',33);
/*!40000 ALTER TABLE `MEDIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `POST`
--

DROP TABLE IF EXISTS `POST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `POST` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `modificationDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idPost`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `POST`
--

LOCK TABLES `POST` WRITE;
/*!40000 ALTER TABLE `POST` DISABLE KEYS */;
INSERT INTO `POST` VALUES (1,'Premier','2022-02-23 12:34:12','2022-02-23 12:34:12'),(2,'awe','2002-03-22 01:52:43','2002-03-22 01:52:43'),(3,'Diagrame','2022-03-02 13:55:44','2022-03-02 13:55:44'),(4,':commentaire','2022-03-02 13:57:50','2022-03-02 13:57:50'),(5,':commentaire','2022-03-02 14:01:37','2022-03-02 14:01:37'),(6,'test','2022-03-02 14:03:08','2022-03-02 14:03:08'),(7,'test','2022-03-02 14:05:50','2022-03-02 14:05:50'),(8,'test','2022-03-02 14:20:44','2022-03-02 14:20:44'),(9,'test','2022-03-02 14:21:14','2022-03-02 14:21:14'),(10,'test','2022-03-02 14:28:44','2022-03-02 14:28:44'),(11,'test','2022-03-02 14:28:49','2022-03-02 14:28:49'),(12,'test','2022-03-02 14:28:54','2022-03-02 14:28:54'),(13,'test','2022-03-02 14:29:05','2022-03-02 14:29:05'),(14,'test','2022-03-02 14:30:57','2022-03-02 14:30:57'),(15,'test','2022-03-02 14:31:01','2022-03-02 14:31:01'),(16,'test','2022-03-02 14:31:27','2022-03-02 14:31:27'),(17,'test','2022-03-02 14:32:11','2022-03-02 14:32:11'),(18,'test','2022-03-02 14:32:15','2022-03-02 14:32:15'),(19,'test','2022-03-02 14:32:39','2022-03-02 14:32:39'),(20,'test','2022-03-02 14:32:49','2022-03-02 14:32:49'),(21,'test','2022-03-02 14:34:13','2022-03-02 14:34:13'),(22,'test','2022-03-02 14:36:58','2022-03-02 14:36:58'),(23,'test','2022-03-02 14:37:03','2022-03-02 14:37:03'),(24,'test','2022-03-02 14:37:36','2022-03-02 14:37:36'),(25,'test','2022-03-02 14:37:44','2022-03-02 14:37:44'),(26,'test','2022-03-02 14:37:47','2022-03-02 14:37:47'),(27,'test','2022-03-02 14:38:11','2022-03-02 14:38:11'),(28,'test','2022-03-02 14:40:08','2022-03-02 14:40:08'),(29,'test','2022-03-02 14:40:12','2022-03-02 14:40:12'),(30,'test','2022-03-02 14:40:35','2022-03-02 14:40:35'),(31,'test','2022-03-02 14:40:39','2022-03-02 14:40:39'),(32,'test','2022-03-02 14:40:54','2022-03-02 14:40:54'),(33,'test','2022-03-02 14:41:01','2022-03-02 14:41:01');
/*!40000 ALTER TABLE `POST` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database '152'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-02 15:44:34
