-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: db_dm
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `nbc_atribut`
--

DROP TABLE IF EXISTS `nbc_atribut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nbc_atribut` (
  `id_atribut` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `atribut` varchar(100) NOT NULL,
  PRIMARY KEY (`id_atribut`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nbc_atribut`
--

LOCK TABLES `nbc_atribut` WRITE;
/*!40000 ALTER TABLE `nbc_atribut` DISABLE KEYS */;
INSERT INTO `nbc_atribut` VALUES (1,'Penggunaan Listrik'),(2,'Jumlah Tanggungan Keluarga'),(3,'Luas Tanah'),(4,'Pendapatan /bulan'),(5,'Daya Listrik'),(6,'Perlengkapan  yang dimiliki');
/*!40000 ALTER TABLE `nbc_atribut` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nbc_data`
--

DROP TABLE IF EXISTS `nbc_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nbc_data` (
  `id_data` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_responden` tinyint(3) unsigned NOT NULL,
  `id_atribut` tinyint(3) unsigned NOT NULL,
  `id_parameter` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM AUTO_INCREMENT=355 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nbc_data`
--

LOCK TABLES `nbc_data` WRITE;
/*!40000 ALTER TABLE `nbc_data` DISABLE KEYS */;
INSERT INTO `nbc_data` VALUES (1,1,1,2),(2,1,2,1),(3,1,3,2),(4,1,4,2),(5,1,5,2),(6,1,6,0),(7,2,1,0),(8,2,2,2),(9,2,3,1),(10,2,4,2),(11,2,5,0),(12,2,6,2),(13,3,1,2),(14,3,2,2),(15,3,3,0),(16,3,4,2),(17,3,5,2),(18,3,6,2),(19,4,1,2),(20,4,2,2),(21,4,3,0),(22,4,4,2),(23,4,5,1),(24,4,6,2),(25,5,1,0),(26,5,2,1),(27,5,3,2),(28,5,4,2),(29,5,5,0),(30,5,6,2),(31,6,1,1),(32,6,2,2),(33,6,3,2),(34,6,4,0),(35,6,5,1),(36,6,6,2),(37,7,1,2),(38,7,2,2),(39,7,3,2),(40,7,4,1),(41,7,5,2),(42,7,6,2),(43,8,1,1),(44,8,2,0),(45,8,3,0),(46,8,4,1),(47,8,5,1),(48,8,6,2),(49,9,1,2),(50,9,2,0),(51,9,3,2),(52,9,4,1),(53,9,5,2),(54,9,6,2),(55,10,1,2),(56,10,2,1),(57,10,3,2),(58,10,4,1),(59,10,5,1),(60,10,6,1),(61,11,1,2),(62,11,2,2),(63,11,3,0),(64,11,4,2),(65,11,5,1),(66,11,6,2),(67,12,1,0),(68,12,2,2),(69,12,3,2),(70,12,4,2),(71,12,5,2),(72,12,6,2),(73,13,1,1),(74,13,2,0),(75,13,3,1),(76,13,4,1),(77,13,5,2),(78,13,6,2),(79,14,1,2),(80,14,2,0),(81,14,3,2),(82,14,4,2),(83,14,5,2),(84,14,6,2),(85,15,1,1),(86,15,2,0),(87,15,3,2),(88,15,4,2),(89,15,5,2),(90,15,6,0),(91,16,1,1),(92,16,2,2),(93,16,3,1),(94,16,4,1),(95,16,5,2),(96,16,6,2),(97,17,1,2),(98,17,2,1),(99,17,3,2),(100,17,4,1),(101,17,5,2),(102,17,6,1),(103,18,1,2),(104,18,2,2),(105,18,3,1),(106,18,4,2),(107,18,5,1),(108,18,6,2),(109,19,1,1),(110,19,2,1),(111,19,3,2),(112,19,4,2),(113,19,5,2),(114,19,6,0),(115,20,1,1),(116,20,2,2),(117,20,3,1),(118,20,4,2),(119,20,5,0),(120,20,6,1),(121,21,1,1),(122,21,2,2),(123,21,3,2),(124,21,4,2),(125,21,5,2),(126,21,6,2),(127,22,1,2),(128,22,2,1),(129,22,3,1),(130,22,4,2),(131,22,5,0),(132,22,6,0),(133,23,1,2),(134,23,2,2),(135,23,3,2),(136,23,4,1),(137,23,5,1),(138,23,6,2),(139,24,1,1),(140,24,2,2),(141,24,3,2),(142,24,4,2),(143,24,5,2),(144,24,6,2),(145,25,1,1),(146,25,2,2),(147,25,3,1),(148,25,4,1),(149,25,5,2),(150,25,6,2),(151,26,1,0),(152,26,2,0),(153,26,3,2),(154,26,4,2),(155,26,5,1),(156,26,6,2),(157,27,1,0),(158,27,2,0),(159,27,3,0),(160,27,4,2),(161,27,5,2),(162,27,6,2),(163,28,1,1),(164,28,2,1),(165,28,3,0),(166,28,4,1),(167,28,5,2),(168,28,6,2),(169,29,1,1),(170,29,2,2),(171,29,3,2),(172,29,4,1),(173,29,5,1),(174,29,6,2),(175,30,1,2),(176,30,2,1),(177,30,3,2),(178,30,4,2),(179,30,5,1),(180,30,6,1),(181,31,1,2),(182,31,2,1),(183,31,3,2),(184,31,4,2),(185,31,5,1),(186,31,6,2),(187,32,1,2),(188,32,2,2),(189,32,3,1),(190,32,4,2),(191,32,5,2),(192,32,6,0),(193,33,1,2),(194,33,2,2),(195,33,3,2),(196,33,4,2),(197,33,5,2),(198,33,6,0),(199,34,1,2),(200,34,2,1),(201,34,3,2),(202,34,4,2),(203,34,5,2),(204,34,6,1),(205,35,1,1),(206,35,2,2),(207,35,3,2),(208,35,4,2),(209,35,5,2),(210,35,6,0),(211,36,1,2),(212,36,2,2),(213,36,3,1),(214,36,4,2),(215,36,5,2),(216,36,6,2),(217,37,1,0),(218,37,2,0),(219,37,3,2),(220,37,4,0),(221,37,5,2),(222,37,6,2),(223,38,1,2),(224,38,2,1),(225,38,3,1),(226,38,4,2),(227,38,5,1),(228,38,6,2),(229,39,1,0),(230,39,2,0),(231,39,3,0),(232,39,4,1),(233,39,5,1),(234,39,6,2),(235,40,1,2),(236,40,2,2),(237,40,3,2),(238,40,4,2),(239,40,5,0),(240,40,6,2),(241,41,1,0),(242,41,2,2),(243,41,3,1),(244,41,4,2),(245,41,5,2),(246,41,6,2),(247,42,1,2),(248,42,2,2),(249,42,3,0),(250,42,4,0),(251,42,5,1),(252,42,6,2),(253,43,1,0),(254,43,2,2),(255,43,3,1),(256,43,4,2),(257,43,5,1),(258,43,6,1),(259,44,1,1),(260,44,2,2),(261,44,3,1),(262,44,4,1),(263,44,5,2),(264,44,6,1),(265,45,1,1),(266,45,2,2),(267,45,3,0),(268,45,4,2),(269,45,5,2),(270,45,6,2),(271,46,1,2),(272,46,2,1),(273,46,3,1),(274,46,4,2),(275,46,5,2),(276,46,6,2),(277,47,1,2),(278,47,2,1),(279,47,3,2),(280,47,4,2),(281,47,5,1),(282,47,6,2),(283,48,1,1),(284,48,2,2),(285,48,3,1),(286,48,4,2),(287,48,5,2),(288,48,6,2),(289,49,1,1),(290,49,2,1),(291,49,3,2),(292,49,4,2),(293,49,5,1),(294,49,6,2),(295,50,1,2),(296,50,2,2),(297,50,3,0),(298,50,4,2),(299,50,5,2),(300,50,6,2),(301,51,1,0),(302,51,2,2),(303,51,3,0),(304,51,4,1),(305,51,5,1),(306,51,6,0),(307,52,1,1),(308,52,2,1),(309,52,3,2),(310,52,4,2),(311,52,5,2),(312,52,6,2),(313,53,1,2),(314,53,2,1),(315,53,3,2),(316,53,4,1),(317,53,5,1),(318,53,6,1),(319,54,1,2),(320,54,2,2),(321,54,3,2),(322,54,4,1),(323,54,5,2),(324,54,6,2),(325,55,1,1),(326,55,2,2),(327,55,3,0),(328,55,4,0),(329,55,5,1),(330,55,6,0),(331,56,1,1),(332,56,2,0),(333,56,3,1),(334,56,4,2),(335,56,5,2),(336,56,6,2),(337,57,1,2),(338,57,2,0),(339,57,3,2),(340,57,4,2),(341,57,5,2),(342,57,6,0),(343,58,1,1),(344,58,2,2),(345,58,3,0),(346,58,4,1),(347,58,5,2),(348,58,6,2),(349,59,1,2),(350,59,2,2),(351,59,3,1),(352,59,4,2),(353,59,5,2),(354,59,6,1);
/*!40000 ALTER TABLE `nbc_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nbc_parameter`
--

DROP TABLE IF EXISTS `nbc_parameter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nbc_parameter` (
  `id_parameter` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_atribut` tinyint(3) unsigned NOT NULL,
  `nilai` tinyint(3) unsigned NOT NULL,
  `parameter` varchar(100) NOT NULL,
  PRIMARY KEY (`id_parameter`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nbc_parameter`
--

LOCK TABLES `nbc_parameter` WRITE;
/*!40000 ALTER TABLE `nbc_parameter` DISABLE KEYS */;
INSERT INTO `nbc_parameter` VALUES (1,1,0,'rendah'),(2,1,1,'sedang'),(3,1,2,'tinggi'),(4,2,0,'sedikit'),(5,2,1,'sedang'),(6,2,2,'banyak'),(7,3,0,'kecil'),(8,3,1,'standar'),(9,3,2,'besar'),(10,4,0,'kecil'),(11,4,1,'sedang'),(12,4,2,'besar'),(13,5,0,'rendah'),(14,5,1,'sedang'),(15,5,2,'tinggi'),(16,6,0,'sedikit'),(17,6,1,'sedang'),(18,6,2,'banyak');
/*!40000 ALTER TABLE `nbc_parameter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nbc_responden`
--

DROP TABLE IF EXISTS `nbc_responden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nbc_responden` (
  `id_responden` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `responden` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_responden`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nbc_responden`
--

LOCK TABLES `nbc_responden` WRITE;
/*!40000 ALTER TABLE `nbc_responden` DISABLE KEYS */;
INSERT INTO `nbc_responden` VALUES (1,'Responden 1'),(2,'Responden 2'),(3,'Responden 3'),(4,'Responden 4'),(5,'Responden 5'),(6,'Responden 6'),(7,'Responden 7'),(8,'Responden 8'),(9,'Responden 9'),(10,'Responden 10'),(11,'Responden 11'),(12,'Responden 12'),(13,'Responden 13'),(14,'Responden 14'),(15,'Responden 15'),(16,'Responden 16'),(17,'Responden 17'),(18,'Responden 18'),(19,'Responden 19'),(20,'Responden 20'),(21,'Responden 21'),(22,'Responden 22'),(23,'Responden 23'),(24,'Responden 24'),(25,'Responden 25'),(26,'Responden 26'),(27,'Responden 27'),(28,'Responden 28'),(29,'Responden 29'),(30,'Responden 30'),(31,'Responden 31'),(32,'Responden 32'),(33,'Responden 33'),(34,'Responden 34'),(35,'Responden 35'),(36,'Responden 36'),(37,'Responden 37'),(38,'Responden 38'),(39,'Responden 39'),(40,'Responden 40'),(41,'Responden 41'),(42,'Responden 42'),(43,'Responden 43'),(44,'Responden 44'),(45,'Responden 45'),(46,'Responden 46'),(47,'Responden 47'),(48,'Responden 48'),(49,'Responden 49'),(50,'Responden 50'),(51,'Responden 51'),(52,'Responden 52'),(53,'Responden 53'),(54,'Responden 54'),(55,'Responden 55'),(56,'Responden 56'),(57,'Responden 57'),(58,'Responden 58'),(59,'Responden 59');
/*!40000 ALTER TABLE `nbc_responden` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-29 11:19:59
