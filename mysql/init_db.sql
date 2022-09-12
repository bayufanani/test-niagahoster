-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: landingpage
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fitur`
--
CREATE DATABASE landingpage;
USE landingpage;

DROP TABLE IF EXISTS `fitur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fitur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `paket` int DEFAULT NULL,
  `fitur` text,
  PRIMARY KEY (`id`),
  KEY `fitur_FK` (`paket`),
  CONSTRAINT `fitur_FK` FOREIGN KEY (`paket`) REFERENCES `pricing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fitur`
--

LOCK TABLES `fitur` WRITE;
/*!40000 ALTER TABLE `fitur` DISABLE KEYS */;
INSERT INTO `fitur` VALUES (1,1,'<strong>0.5X RESOURCE POWER</strong>'),(2,1,'<strong>500 MB</strong> Disk Space'),(3,1,'<strong>Unlimited</strong> Domain'),(4,1,'<strong>Unlimited</strong> Datbases'),(5,1,'<strong>1</strong> Domain'),(6,1,'<strong>Instant</strong> Backup'),(7,1,'<strong>Unlimited SSL</strong> Gratis Selamanya'),(8,2,'<strong>1X RESOURCE POWER</strong>'),(9,2,'<strong>Unlimited</strong> Disk Space'),(10,2,'<strong>Unlimited</strong> Bandwidth'),(11,2,'<strong>Unlimited</strong> POP3 Email'),(12,2,'<strong>Unlimited</strong> Datbases'),(13,2,'<strong>10</strong> Addon Domain'),(14,2,'<strong>Instant</strong> Backup'),(15,2,'<strong>Domain Gratis</strong> Selamanya'),(16,2,'<strong>Unlimited SSL</strong> Gratis Selamanya'),(17,3,'<strong>2X RESOURCE POWER</strong>'),(18,3,'<strong>Unlimited</strong> Disk Space'),(19,3,'<strong>Unlimited</strong> Bandwidth'),(20,3,'<strong>Unlimited</strong> POP3 Email'),(21,3,'<strong>Unlimited</strong> Datbases'),(22,3,'<strong>Unlimited</strong> Addon Domain'),(23,3,'<strong>Instant</strong> Backup'),(24,3,'<strong>Domain Gratis</strong> Selamanya'),(25,3,'<strong>Unlimited SSL</strong> Gratis Selamanya'),(26,3,'<strong>Private</strong> Name Server'),(27,3,'<strong>SpamAssassin</strong> Mail Protection'),(28,4,'<strong>3X RESOURCE POWER</strong>'),(29,4,'<strong>Unlimited</strong> Disk Space'),(30,4,'<strong>Unlimited</strong> Bandwidth'),(31,4,'<strong>Unlimited</strong> POP3 Email'),(32,4,'<strong>Unlimited</strong> Datbases'),(33,4,'<strong>Unlimited</strong> Addon Domain'),(34,4,'<strong>Magic Auto</strong> Backup & Restore'),(35,4,'<strong>Domain Gratis</strong> Selamanya'),(36,4,'<strong>Unlimited SSL</strong> Gratis Selamanya'),(37,4,'<strong>Private</strong> Name Server'),(38,4,'<strong>Prioritas</strong> Layanan Support'),(39,4,'<span class=\"material-icons text-primary\">\n                    star\n                    </span>\n                    <span class=\"material-icons text-primary\">\n                    star\n                    </span>\n                    <span class=\"material-icons text-primary\">\n                    star\n                    </span>\n                    <span class=\"material-icons text-primary\">\n                    star\n                    </span>\n                    <span class=\"material-icons text-primary\">\n                    star\n                    </span>'),(40,4,'<strong>SpamAssassin</strong> Mail Protection');
/*!40000 ALTER TABLE `fitur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pricing`
--

DROP TABLE IF EXISTS `pricing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pricing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `harga_asli` int DEFAULT NULL,
  `harga_promo` int DEFAULT NULL,
  `jumlah_pengguna` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pricing`
--

LOCK TABLES `pricing` WRITE;
/*!40000 ALTER TABLE `pricing` DISABLE KEYS */;
INSERT INTO `pricing` VALUES (1,'Bayi',19900,14900,938),(2,'Pelajar',46900,23450,4168),(3,'Personal',59900,38900,10017),(4,'Bisnis',109900,65900,3552);
/*!40000 ALTER TABLE `pricing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'landingpage'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-12 13:16:01
