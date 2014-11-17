CREATE DATABASE  IF NOT EXISTS `phpwmysql_basic1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `phpwmysql_basic1`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: phpwmysql_basic1
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (2,'test1@test.com','2014-11-15 12:13:14'),(3,'test2@test.com','2014-11-15 12:24:10'),(5,'katrina.sanford@hotmail.com','2014-11-15 12:30:25'),(9,'joeyurso@live.com','2014-11-15 12:35:16'),(12,'katrina.sanford@hotmail.com','2014-11-15 16:55:45'),(19,'joey@live.com','2014-11-15 17:12:12'),(21,'katrina.sanford@hotmail.com','2014-11-15 17:32:23'),(25,'katrina.sanford@hotmail.com','2014-11-15 17:33:10'),(28,'katrina.sanford@hotmail.com','2014-11-15 17:42:30'),(30,'katrina.sanford@hotmail.com','2014-11-15 17:43:04'),(31,'katrina.sanford@hotmail.com','2014-11-15 17:55:11'),(34,'katrina.sanford@hotmail.com','2014-11-15 17:58:15'),(35,'katrina@vagabond.com','2014-11-15 18:04:32'),(37,'katrina.sanford@hotmail.com','2014-11-16 17:11:24'),(38,'katrina@vagabond.com','2014-11-16 19:01:04'),(39,'stevie@wonder.com','2014-11-16 19:18:20');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-16 19:26:53
