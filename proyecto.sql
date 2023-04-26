-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: proyecto
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `documento` int(15) NOT NULL,
  `id_lista` int(10) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lista` (`id_lista`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,'Ariel',1001903378,1,'18/04/23'),(2,'celeste',1001903378,1,'18/04/23'),(3,'monica',1001903378,1,'18/04/23'),(4,'Pedro',1001903378,1,'18/04/23'),(5,'Catalino',1001903378,1,'18/04/23'),(6,'Fernando',1001903378,1,'18/04/23'),(7,'Fernando',1001903378,1,'18/04/23'),(8,'Fernando',1001903378,1,'18/04/23'),(9,'Fernando',1001903378,1,'18/04/23'),(10,'Fernando',1001903378,1,'18/04/23'),(11,'Fernando',1001903378,1,'18/04/23'),(12,'Fernando',1001903378,1,'18/04/23'),(13,'Fernando',1001903378,1,'18/04/23'),(14,'Ariel',1001903378,2,'18/04/23'),(15,'celeste',1001903378,2,'18/04/23'),(16,'monica',1001903378,2,'18/04/23'),(17,'Pedro',1001903378,2,'18/04/23'),(18,'Catalino',1001903378,2,'18/04/23'),(19,'Fernando',1001903378,2,'18/04/23'),(20,'Fernando',1001903378,2,'18/04/23'),(21,'Fernando',1001903378,2,'18/04/23'),(22,'Fernando',1001903378,2,'18/04/23'),(23,'Fernando',1001903378,2,'18/04/23'),(24,'Fernando',1001903378,2,'18/04/23'),(25,'Fernando',1001903378,2,'18/04/23'),(26,'Fernando',1001903378,2,'18/04/23'),(27,'Ariel',1001903378,3,'20/04/23'),(28,'celeste',1001903378,3,'20/04/23'),(29,'monica',1001903378,3,'20/04/23'),(30,'Pedro',1001903378,3,'20/04/23'),(31,'Catalino',1001903378,3,'20/04/23'),(32,'Fernando',1001903378,3,'20/04/23'),(33,'Fernando',1001903378,3,'20/04/23'),(34,'Fernando',1001903378,3,'20/04/23'),(35,'Fernando',1001903378,3,'20/04/23'),(36,'Fernando',1001903378,3,'20/04/23'),(37,'Fernando',1001903378,3,'20/04/23'),(38,'Fernando',1001903378,3,'20/04/23'),(39,'Fernando',1001903378,3,'20/04/23'),(40,'Ariel',1001903378,4,'20/04/23'),(41,'celeste',1001903378,4,'20/04/23'),(42,'monica',1001903378,4,'20/04/23'),(43,'Pedro',1001903378,4,'20/04/23'),(44,'Catalino',1001903378,4,'20/04/23'),(45,'Fernando',1001903378,4,'20/04/23'),(46,'Fernando',1001903378,4,'20/04/23'),(47,'Fernando',1001903378,4,'20/04/23'),(48,'Fernando',1001903378,4,'20/04/23'),(49,'Fernando',1001903378,4,'20/04/23'),(50,'Fernando',1001903378,4,'20/04/23'),(51,'Fernando',1001903378,4,'20/04/23'),(52,'Fernando',1001903378,4,'20/04/23'),(53,'Nombre',0,5,'25/04/23'),(54,'Ariel caraballo ',1001903388,5,'25/04/23'),(55,'Jesus valencia',1234456780,5,'25/04/23'),(56,'Alvaro rodriguez',2147483647,5,'25/04/23'),(57,'María Beltran',2147483647,5,'25/04/23'),(58,'Luka modric',1234918741,5,'25/04/23'),(59,'Anuel  ortega',1876324519,5,'25/04/23'),(60,'Diomedes gaviria',2147483647,5,'25/04/23'),(61,'Benito Camelo',2147483647,5,'25/04/23'),(62,'alma marcela gosho',1234567890,5,'25/04/23'),(63,'Nombre',0,6,'25/04/23'),(64,'Ariel caraballo ',1001903388,6,'25/04/23'),(65,'Jesus valencia',1234456780,6,'25/04/23'),(66,'Alvaro rodriguez',2147483647,6,'25/04/23'),(67,'María Beltran',2147483647,6,'25/04/23'),(68,'Luka modric',1234918741,6,'25/04/23'),(69,'Anuel  ortega',1876324519,6,'25/04/23'),(70,'Diomedes gaviria',2147483647,6,'25/04/23'),(71,'Benito Camelo',2147483647,6,'25/04/23'),(72,'alma marcela gosho',1234567890,6,'25/04/23'),(73,'Nombre',0,7,'25/04/23'),(74,'Ariel caraballo ',1001903388,7,'25/04/23'),(75,'Jesus valencia',1234456780,7,'25/04/23'),(76,'Alvaro rodriguez',2147483647,7,'25/04/23'),(77,'María Beltran',2147483647,7,'25/04/23'),(78,'Luka modric',1234918741,7,'25/04/23'),(79,'Anuel  ortega',1876324519,7,'25/04/23'),(80,'Diomedes gaviria',2147483647,7,'25/04/23'),(81,'Benito Camelo',2147483647,7,'25/04/23'),(82,'alma marcela gosho',1234567890,7,'25/04/23');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listas`
--

DROP TABLE IF EXISTS `listas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `semestre` varchar(15) NOT NULL,
  `fecha` varchar(60) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listas`
--

LOCK TABLES `listas` WRITE;
/*!40000 ALTER TABLE `listas` DISABLE KEYS */;
INSERT INTO `listas` VALUES (1,1,'Lista 1 grupo 2','I (Primero)','18/04/23',1),(2,2,'lista ejemplo','VII (Septimo)','18/04/23',1),(3,1,'ejemplo 2','VIII (Octavo)','20/04/23',1),(4,1,'ejemplo 3','VII (Septimo)','20/04/23',1),(5,3,'Lista ejemplo','VI (Sexto)','25/04/23',1),(6,7,'lista de ppractica','VI (Sexto)','25/04/23',1),(7,8,'Lista ejemplo','V (Quinto)','25/04/23',1);
/*!40000 ALTER TABLE `listas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulo_nota`
--

DROP TABLE IF EXISTS `modulo_nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulo_nota` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(10) NOT NULL,
  `nota` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estudiante` (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulo_nota`
--

LOCK TABLES `modulo_nota` WRITE;
/*!40000 ALTER TABLE `modulo_nota` DISABLE KEYS */;
INSERT INTO `modulo_nota` VALUES (1,1,0),(2,1,0),(3,26,12.05),(4,27,4.52643),(5,56,0.0875),(6,56,0.0875),(7,62,0.025),(8,72,0.850833),(9,62,0),(10,82,0.34),(11,82,0.34),(12,40,0);
/*!40000 ALTER TABLE `modulo_nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulos`
--

DROP TABLE IF EXISTS `modulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulos`
--

LOCK TABLES `modulos` WRITE;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
INSERT INTO `modulos` VALUES (1,'Promoción y prevención'),(2,'Actividades basicas'),(3,'Cuidado medico'),(4,'Cuidado materno infantil'),(5,'Practicas administracion'),(6,'Adulto mayor'),(7,'Practica integral'),(8,'Fundamentos socioeducativo IV'),(9,'Fundamentos socioeducativo V');
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntasm1`
--

DROP TABLE IF EXISTS `preguntasm1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasm1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(10) NOT NULL,
  `suma1` float NOT NULL,
  `p1m1` float NOT NULL,
  `p2m1` float NOT NULL,
  `p3m1` float NOT NULL,
  `p4m1` float NOT NULL,
  `p5m1` float NOT NULL,
  `p6m1` float NOT NULL,
  `p7m1` float NOT NULL,
  `p8m1` float NOT NULL,
  `total1` float NOT NULL,
  `recomendaciones1` varchar(255) NOT NULL,
  `p9m1` float NOT NULL,
  `p10m1` float NOT NULL,
  `p11m1` float NOT NULL,
  `p12m1` float NOT NULL,
  `p13m1` float NOT NULL,
  `p14m1` float NOT NULL,
  `p15m1` float NOT NULL,
  `p16m1` float NOT NULL,
  `p17m1` float NOT NULL,
  `p18m1` float NOT NULL,
  `total2` float NOT NULL,
  `recomendaciones2` varchar(255) NOT NULL,
  `subtotal1` float NOT NULL,
  `p19m1` float NOT NULL,
  `p20m1` float NOT NULL,
  `p21m1` float NOT NULL,
  `p22m1` float NOT NULL,
  `suma2` float NOT NULL,
  `p23m1` float NOT NULL,
  `p24m1` float NOT NULL,
  `p25m1` float NOT NULL,
  `p26m1` float NOT NULL,
  `p27m1` float NOT NULL,
  `p28m1` float NOT NULL,
  `p29m1` float NOT NULL,
  `total3` float NOT NULL,
  `recomendaciones3` varchar(255) NOT NULL,
  `p30m1` float NOT NULL,
  `p31m1` int(10) NOT NULL,
  `suma3` float NOT NULL,
  `p32m1` float NOT NULL,
  `p33m1` float NOT NULL,
  `p34m1` float NOT NULL,
  `p35m1` float NOT NULL,
  `p36m1` float NOT NULL,
  `p37m1` float NOT NULL,
  `p38m1` float NOT NULL,
  `p39m1` float NOT NULL,
  `p40m1` float NOT NULL,
  `p41m1` float NOT NULL,
  `p42m1` float NOT NULL,
  `p43m1` float NOT NULL,
  `p44m1` float NOT NULL,
  `p45m1` float NOT NULL,
  `total4` float NOT NULL,
  `recomendaciones4` varchar(255) NOT NULL,
  `subtotal2` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntasm1`
--

LOCK TABLES `preguntasm1` WRITE;
/*!40000 ALTER TABLE `preguntasm1` DISABLE KEYS */;
INSERT INTO `preguntasm1` VALUES (1,1,5,5,5,5,5,5,5,5,5,0.5,'',5,1,5,5,5,5,5,5,2,5,0.43,'',0.93,5,2,5,5,3.66667,1,5,5,5,5,2,5,1.67407,'',5,5,5,5,5,5,5,5,5,5,5,5,5,2,5,2,5,1.76,'',3.43407),(3,27,3.75,3,4,3,5,1.5,3,3,4,0.305,'comentario',0,5,5,5,5,5,5,5,5,5,0.45,'5',0.755,5,5,5,5,5,5,5,5,5,5,5,5,2,'5',5,5,4.28571,5,5,5,5,0,5,5,5,5,5,5,5,5,0,1.77143,'',3.77143),(6,40,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0);
/*!40000 ALTER TABLE `preguntasm1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntasm2`
--

DROP TABLE IF EXISTS `preguntasm2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasm2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(10) NOT NULL,
  `suma1` float NOT NULL,
  `p1m2` float NOT NULL,
  `p2m2` float NOT NULL,
  `p3m2` float NOT NULL,
  `p4m2` float NOT NULL,
  `p5m2` float NOT NULL,
  `p6m2` float NOT NULL,
  `p7m2` float NOT NULL,
  `p8m2` float NOT NULL,
  `total1` float NOT NULL,
  `recomendaciones1` varchar(255) NOT NULL,
  `p9m2` float NOT NULL,
  `p10m2` float NOT NULL,
  `p11m2` float NOT NULL,
  `p12m2` float NOT NULL,
  `p13m2` float NOT NULL,
  `p14m2` float NOT NULL,
  `p15m2` float NOT NULL,
  `p16m2` int(10) NOT NULL,
  `p17m2` float NOT NULL,
  `p18m2` float NOT NULL,
  `total2` float NOT NULL,
  `recomendaciones2` varchar(255) NOT NULL,
  `subtotal1` float NOT NULL,
  `p19m2` float NOT NULL,
  `p20m2` float NOT NULL,
  `p21m2` float NOT NULL,
  `p22m2` float NOT NULL,
  `p23m2` float NOT NULL,
  `p24m2` float NOT NULL,
  `p25m2` float NOT NULL,
  `p26m2` float NOT NULL,
  `p27m2` float NOT NULL,
  `total3` float NOT NULL,
  `recomendaciones3` varchar(255) NOT NULL,
  `p28m2` float NOT NULL,
  `p29m2` float NOT NULL,
  `p30m2` float NOT NULL,
  `p31m2` float NOT NULL,
  `suma2` float NOT NULL,
  `p32m2` float NOT NULL,
  `p33m2` float NOT NULL,
  `p34m2` float NOT NULL,
  `p35m2` float NOT NULL,
  `p36m2` float NOT NULL,
  `p37m2` float NOT NULL,
  `p38m2` float NOT NULL,
  `p39m2` float NOT NULL,
  `p40m2` float NOT NULL,
  `p41m2` float NOT NULL,
  `suma3` float NOT NULL,
  `p42m2` float NOT NULL,
  `p43m2` float NOT NULL,
  `p44m2` float NOT NULL,
  `p45m2` float NOT NULL,
  `p46m2` float NOT NULL,
  `p47m2` float NOT NULL,
  `p48m2` float NOT NULL,
  `p49m2` float NOT NULL,
  `p50m2` float NOT NULL,
  `p51m2` float NOT NULL,
  `p52m2` float NOT NULL,
  `p53m2` float NOT NULL,
  `p54m2` float NOT NULL,
  `p55m2` float NOT NULL,
  `total4` float NOT NULL,
  `recomendaciones4` varchar(255) NOT NULL,
  `subtotal2` float NOT NULL,
  `p56m2` float NOT NULL,
  `total5` float NOT NULL,
  `recomendaciones5` varchar(255) NOT NULL,
  `subtotal3` float NOT NULL,
  `p57m2` float NOT NULL,
  `p58m2` float NOT NULL,
  `total6` float NOT NULL,
  `recomendaciones6` varchar(255) NOT NULL,
  `subtotal4` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntasm2`
--

LOCK TABLES `preguntasm2` WRITE;
/*!40000 ALTER TABLE `preguntasm2` DISABLE KEYS */;
INSERT INTO `preguntasm2` VALUES (4,26,15,0,50,5,55,5,5,5,5,0.6,'5',5,5,5,0,55,5,5,5,5,5,0.95,'5',1.55,5,5,55,5,5,5,5,5,5,2.63889,'5',5,55,5,5,12.5,5,5,5,55,5,5,5,5,5,55,5,5,5,5,5,5,5,5,55,5,5,5,5,5,5,4.55921,'5',5,5,0.5,'5',5,5,5,0.5,'',0.5),(5,1,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'',0,0,0,0,'',0);
/*!40000 ALTER TABLE `preguntasm2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntasm3`
--

DROP TABLE IF EXISTS `preguntasm3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasm3` (
  `id` int(10) NOT NULL,
  `id_estudiante` int(10) NOT NULL,
  `suma1` float NOT NULL,
  `p1m3` float NOT NULL,
  `p2m3` float NOT NULL,
  `p3m3` float NOT NULL,
  `p4m3` float NOT NULL,
  `p5m3` float NOT NULL,
  `p6m3` float NOT NULL,
  `p7m3` float NOT NULL,
  `p8m3` float NOT NULL,
  `total1` float NOT NULL,
  `recomendaciones1` varchar(255) NOT NULL,
  `p9m3` float NOT NULL,
  `p10m3` float NOT NULL,
  `p11m3` float NOT NULL,
  `p12m3` float NOT NULL,
  `p13m3` float NOT NULL,
  `p14m3` float NOT NULL,
  `p15m3` float NOT NULL,
  `p16m3` float NOT NULL,
  `p17m3` float NOT NULL,
  `p18m3` float NOT NULL,
  `total2` float NOT NULL,
  `recomendaciones2` varchar(255) NOT NULL,
  `subtotal1` float NOT NULL,
  `p19m3` float NOT NULL,
  `p20m3` float NOT NULL,
  `p21m3` float NOT NULL,
  `p22m3` float NOT NULL,
  `p24m3` float NOT NULL,
  `p25m3` float NOT NULL,
  `total3` float NOT NULL,
  `recomendaciones3` varchar(255) NOT NULL,
  `p26m3` float NOT NULL,
  `p27m3` float NOT NULL,
  `p28m3` float NOT NULL,
  `p29m3` float NOT NULL,
  `p30m3` float NOT NULL,
  `p31m3` float NOT NULL,
  `p32m3` float NOT NULL,
  `p33m3` float NOT NULL,
  `p34m3` float NOT NULL,
  `p35m3` float NOT NULL,
  `p36m3` float NOT NULL,
  `p37m3` float NOT NULL,
  `p38m3` float NOT NULL,
  `p39m3` float NOT NULL,
  `p40m3` float NOT NULL,
  `p41m3` float NOT NULL,
  `total4` float NOT NULL,
  `recomendaciones4` varchar(255) NOT NULL,
  `subtotal2` float NOT NULL,
  `p42m3` float NOT NULL,
  `total5` float NOT NULL,
  `recomendaciones5` varchar(255) NOT NULL,
  `subtotal3` float NOT NULL,
  `p43m3` float NOT NULL,
  `p44m3` float NOT NULL,
  `total6` float NOT NULL,
  `recomendaciones6` varchar(255) NOT NULL,
  `subtotal4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntasm3`
--

LOCK TABLES `preguntasm3` WRITE;
/*!40000 ALTER TABLE `preguntasm3` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntasm3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntasm7`
--

DROP TABLE IF EXISTS `preguntasm7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasm7` (
  `id` int(10) NOT NULL,
  `id_estudiante` int(10) NOT NULL,
  `suma1` float NOT NULL,
  `p1m7` float NOT NULL,
  `p2m7` float NOT NULL,
  `p3m7` float NOT NULL,
  `p4m7` float NOT NULL,
  `p5m7` float NOT NULL,
  `p6m7` float NOT NULL,
  `p7m7` float NOT NULL,
  `p8m7` float NOT NULL,
  `total1` float NOT NULL,
  `recomendaciones1` varchar(255) NOT NULL,
  `p9m7` float NOT NULL,
  `p10m7` float NOT NULL,
  `p11m7` float NOT NULL,
  `p12m7` float NOT NULL,
  `p13m7` float NOT NULL,
  `p14m7` float NOT NULL,
  `p15m7` float NOT NULL,
  `p16m7` float NOT NULL,
  `p17m7` float NOT NULL,
  `p18m7` float NOT NULL,
  `total2` float NOT NULL,
  `recomendaciones2` varchar(255) NOT NULL,
  `subtotal1` float NOT NULL,
  `p19m7` float NOT NULL,
  `p20m7` float NOT NULL,
  `p21m7` float NOT NULL,
  `p22m7` float NOT NULL,
  `p24m7` float NOT NULL,
  `p25m7` float NOT NULL,
  `p26m7` float NOT NULL,
  `p27m7` float NOT NULL,
  `p28m7` float NOT NULL,
  `p29m7` float NOT NULL,
  `p30m7` float NOT NULL,
  `p31m7` float NOT NULL,
  `p32m7` float NOT NULL,
  `total3` float NOT NULL,
  `recomendaciones3` varchar(255) NOT NULL,
  `p33m7` float NOT NULL,
  `p34m7` float NOT NULL,
  `p35m7` float NOT NULL,
  `p36m7` float NOT NULL,
  `p37m7` float NOT NULL,
  `p38m7` float NOT NULL,
  `p39m7` float NOT NULL,
  `p40m7` float NOT NULL,
  `p41m7` float NOT NULL,
  `p42m7` float NOT NULL,
  `p43m7` float NOT NULL,
  `p44m7` float NOT NULL,
  `p45m7` float NOT NULL,
  `p46m7` float NOT NULL,
  `p47m7` float NOT NULL,
  `p48m7` float NOT NULL,
  `p49m7` float NOT NULL,
  `p50m7` float NOT NULL,
  `p51m7` int(10) NOT NULL,
  `p52m7` float NOT NULL,
  `p53m7` float NOT NULL,
  `p54m7` float NOT NULL,
  `p55m7` float NOT NULL,
  `p56m7` float NOT NULL,
  `total4` float NOT NULL,
  `recomendaciones4` varchar(255) NOT NULL,
  `subtotal2` float NOT NULL,
  `p57m7` float NOT NULL,
  `total5` float NOT NULL,
  `recomendaciones5` varchar(255) NOT NULL,
  `subtotal3` float NOT NULL,
  `p58m7` float NOT NULL,
  `p59m7` float NOT NULL,
  `p60m7` float NOT NULL,
  `total6` float NOT NULL,
  `recomendaciones6` varchar(255) NOT NULL,
  `subtotal4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntasm7`
--

LOCK TABLES `preguntasm7` WRITE;
/*!40000 ALTER TABLE `preguntasm7` DISABLE KEYS */;
INSERT INTO `preguntasm7` VALUES (0,56,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,4,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.0875,'',0.0875,0,0,'',0,0,0,0,0,'',0),(0,62,1.25,0,5,0,0,0,0,0,0,0.025,'',0,0,0,0,0,0,0,0,0,0,0,'',0.025,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'',0,0,0,0,0,'',0),(0,72,1.25,0,0,5,0,0,0,0,0,0.0175,'',0,0,0,0,0,0,0,0,0,0,0,'',0.0175,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,5,0.5,'',0.5,0,5,0,0.333333,'',0.333333);
/*!40000 ALTER TABLE `preguntasm7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntasm8`
--

DROP TABLE IF EXISTS `preguntasm8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasm8` (
  `id` int(10) NOT NULL,
  `id_estudiante` int(10) NOT NULL,
  `suma1` float NOT NULL,
  `p1m3` float NOT NULL,
  `p2m3` float NOT NULL,
  `p3m3` float NOT NULL,
  `p4m3` float NOT NULL,
  `p5m3` float NOT NULL,
  `p6m3` float NOT NULL,
  `p7m3` float NOT NULL,
  `p8m3` float NOT NULL,
  `total1` float NOT NULL,
  `recomendaciones1` varchar(255) NOT NULL,
  `p9m3` float NOT NULL,
  `p10m3` float NOT NULL,
  `p11m3` float NOT NULL,
  `p12m3` float NOT NULL,
  `p13m3` float NOT NULL,
  `p14m3` float NOT NULL,
  `p15m3` float NOT NULL,
  `p16m3` float NOT NULL,
  `p17m3` float NOT NULL,
  `p18m3` float NOT NULL,
  `total2` float NOT NULL,
  `recomendaciones2` varchar(255) NOT NULL,
  `subtotal1` float NOT NULL,
  `p19m3` float NOT NULL,
  `p20m3` float NOT NULL,
  `p21m3` float NOT NULL,
  `p22m3` float NOT NULL,
  `total3` float NOT NULL,
  `recomendaciones3` varchar(255) NOT NULL,
  `p24m3` float NOT NULL,
  `p25m3` float NOT NULL,
  `p26m3` float NOT NULL,
  `p27m3` float NOT NULL,
  `p28m3` float NOT NULL,
  `p29m3` float NOT NULL,
  `p30m3` float NOT NULL,
  `total4` float NOT NULL,
  `recomendaciones4` varchar(255) NOT NULL,
  `subtotal2` float NOT NULL,
  `p31m3` float NOT NULL,
  `recomendaciones5` varchar(255) NOT NULL,
  `subtotal3` float NOT NULL,
  `p32m3` float NOT NULL,
  `recomendaciones6` varchar(255) NOT NULL,
  `subtotal4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntasm8`
--

LOCK TABLES `preguntasm8` WRITE;
/*!40000 ALTER TABLE `preguntasm8` DISABLE KEYS */;
INSERT INTO `preguntasm8` VALUES (0,62,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,'',0,0,'',0,0,'',0),(0,82,0,0,0,0,0,0,3,0,0,0.06,'',0,0,0,0,0,0,4,0,0,0,0.04,'',0.1,0,0,0,0,0,'',0,0,0,0,0,0,0,0,'',0,4,'',0.24,0,'',0);
/*!40000 ALTER TABLE `preguntasm8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntasm9`
--

DROP TABLE IF EXISTS `preguntasm9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasm9` (
  `id` int(10) NOT NULL,
  `id_estudiante` int(10) NOT NULL,
  `suma1` float NOT NULL,
  `p1m3` float NOT NULL,
  `p2m3` float NOT NULL,
  `p3m3` float NOT NULL,
  `p4m3` float NOT NULL,
  `p5m3` float NOT NULL,
  `p6m3` float NOT NULL,
  `p7m3` float NOT NULL,
  `p8m3` float NOT NULL,
  `total1` float NOT NULL,
  `recomendaciones1` varchar(255) NOT NULL,
  `p9m3` float NOT NULL,
  `p10m3` float NOT NULL,
  `p11m3` float NOT NULL,
  `p12m3` float NOT NULL,
  `p13m3` float NOT NULL,
  `p14m3` float NOT NULL,
  `p15m3` float NOT NULL,
  `p16m3` float NOT NULL,
  `p17m3` float NOT NULL,
  `p18m3` float NOT NULL,
  `total2` float NOT NULL,
  `recomendaciones2` varchar(255) NOT NULL,
  `subtotal1` float NOT NULL,
  `p19m3` float NOT NULL,
  `p20m3` float NOT NULL,
  `p21m3` float NOT NULL,
  `total3` float NOT NULL,
  `recomendaciones3` varchar(255) NOT NULL,
  `p22m3` float NOT NULL,
  `p24m3` float NOT NULL,
  `p25m3` float NOT NULL,
  `p26m3` float NOT NULL,
  `p27m3` float NOT NULL,
  `p28m3` float NOT NULL,
  `p29m3` float NOT NULL,
  `total4` float NOT NULL,
  `recomendaciones4` varchar(255) NOT NULL,
  `subtotal2` float NOT NULL,
  `p30m3` float NOT NULL,
  `recomendaciones5` varchar(255) NOT NULL,
  `subtotal3` float NOT NULL,
  `p31m3` float NOT NULL,
  `recomendaciones6` varchar(255) NOT NULL,
  `subtotal4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntasm9`
--

LOCK TABLES `preguntasm9` WRITE;
/*!40000 ALTER TABLE `preguntasm9` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntasm9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `ultima_sesion` varchar(69) NOT NULL,
  `documento` int(15) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-26  0:48:42
