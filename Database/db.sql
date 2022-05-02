CREATE DATABASE  IF NOT EXISTS `universidad` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `universidad`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: universidad
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bitacora` (
  `id` int NOT NULL AUTO_INCREMENT,
  `host` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `operacion` varchar(20) NOT NULL,
  `tabla` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` VALUES (1,'localhost','root','INSERT','uni_dependencias','2022-04-01 19:50:00'),(2,'localhost','root','INSERT','uni_dependencias','2022-04-01 19:50:32'),(3,'localhost','root','INSERT','uni_dependencias','2022-04-01 19:51:13'),(4,'localhost','root','INSERT','uni_dependencias','2022-04-01 19:51:32'),(5,'localhost','root','INSERT','uni_carreras','2022-04-01 19:57:02'),(6,'localhost','root','INSERT','uni_carreras','2022-04-01 19:57:26'),(7,'localhost','root','INSERT','uni_carreras','2022-04-01 19:57:58'),(8,'localhost','root','INSERT','uni_carreras','2022-04-01 19:58:17'),(9,'localhost','root','INSERT','uni_carreras','2022-04-01 19:58:49'),(10,'localhost','root','INSERT','uni_carreras','2022-04-01 19:59:08'),(11,'localhost','root','INSERT','uni_carreras','2022-04-01 19:59:49'),(12,'localhost','root','INSERT','uni_carreras','2022-04-01 20:00:14'),(13,'localhost','root','INSERT','uni_materias','2022-04-01 20:03:19'),(14,'localhost','root','INSERT','uni_materias','2022-04-01 20:03:25'),(15,'localhost','root','INSERT','uni_materias','2022-04-01 20:03:32'),(16,'localhost','root','INSERT','uni_materias','2022-04-01 20:03:42'),(17,'localhost','root','INSERT','uni_materias','2022-04-01 20:03:51'),(18,'localhost','root','INSERT','uni_materias','2022-04-01 20:04:00'),(19,'localhost','root','INSERT','uni_materias','2022-04-01 20:04:06'),(20,'localhost','root','INSERT','uni_alumnos','2022-04-01 20:16:42'),(21,'localhost','root','INSERT','uni_alumnos','2022-04-01 20:19:12'),(22,'localhost','root','INSERT','uni_alumnos','2022-04-01 20:21:39'),(23,'localhost','root','INSERT','uni_alumnos','2022-04-01 20:24:53'),(24,'localhost','root','INSERT','uni_alumnos','2022-04-01 20:26:54'),(25,'localhost','root','INSERT','uni_profesor','2022-04-01 20:32:52'),(26,'localhost','root','INSERT','uni_profesor','2022-04-01 20:33:56'),(27,'localhost','root','INSERT','uni_profesor','2022-04-01 20:35:02'),(28,'localhost','root','INSERT','uni_profesor','2022-04-01 20:35:52'),(29,'localhost','root','INSERT','uni_profesor','2022-04-01 20:36:50'),(30,'localhost','root','INSERT','uni_profesor','2022-04-01 20:37:57'),(31,'localhost','root','INSERT','uni_profesor','2022-04-01 20:38:50'),(32,'localhost','root','UPDATE','uni_profesor','2022-04-01 20:39:41'),(33,'localhost','root','INSERT','uni_grupos','2022-04-01 20:42:28'),(34,'localhost','root','INSERT','uni_grupos','2022-04-01 20:42:49'),(35,'localhost','root','INSERT','uni_grupos','2022-04-01 20:43:04'),(36,'localhost','root','INSERT','uni_grupos','2022-04-01 20:43:19'),(37,'localhost','root','INSERT','uni_grupos','2022-04-01 20:43:37'),(38,'localhost','root','INSERT','uni_grupos','2022-04-01 20:44:41'),(39,'localhost','root','INSERT','uni_grupos','2022-04-01 20:45:18'),(40,'localhost','root','INSERT','uni_kardex','2022-04-01 20:48:08'),(41,'localhost','root','INSERT','uni_kardex','2022-04-01 20:48:25'),(42,'localhost','root','INSERT','uni_kardex','2022-04-01 20:48:37'),(43,'localhost','root','INSERT','uni_kardex','2022-04-01 20:48:56'),(44,'localhost','root','INSERT','uni_kardex','2022-04-01 20:49:10'),(45,'localhost','root','INSERT','uni_kardex','2022-04-01 20:49:22'),(46,'localhost','root','UPDATE','uni_kardex','2022-04-01 20:50:22'),(47,'localhost','root','DELETE','uni_kardex','2022-04-01 20:51:29'),(48,'localhost','root','UPDATE','uni_kardex','2022-04-01 20:51:39'),(49,'localhost','root','UPDATE','uni_kardex','2022-04-01 20:51:46'),(50,'localhost','root','UPDATE','uni_alumnos','2022-04-06 18:28:33');
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni_alumnos`
--

DROP TABLE IF EXISTS `uni_alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_alumnos` (
  `matricula` varchar(8) NOT NULL,
  `ape_pat` varchar(90) NOT NULL,
  `ape_mat` varchar(90) NOT NULL,
  `nombres` varchar(90) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `genero` int NOT NULL,
  `est_civil` varchar(25) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `colonia` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `fec_nacimiento` date NOT NULL,
  `cve_dependencia` int NOT NULL,
  `cve_carrera` int NOT NULL,
  PRIMARY KEY (`matricula`),
  KEY `cve_carrera` (`cve_carrera`),
  KEY `cve_dependencia` (`cve_dependencia`) USING BTREE,
  CONSTRAINT `uni_alumnos_ibfk_2` FOREIGN KEY (`cve_carrera`) REFERENCES `uni_carreras` (`cve_carrera`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `uni_alumnos_ibfk_3` FOREIGN KEY (`cve_dependencia`) REFERENCES `uni_dependencias` (`cve_dependencia`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_alumnos`
--

LOCK TABLES `uni_alumnos` WRITE;
/*!40000 ALTER TABLE `uni_alumnos` DISABLE KEYS */;
INSERT INTO `uni_alumnos` VALUES ('A180016','Gómez','Floressss','Erick Jandre','TOHA530902HSPRRN07',1,'SOLTERO','BIEN','Tuxtla Gutiérrez','Belisario Domínguez','BLVD. BELISARIO DOMÍNGUEZ 2105, CENTRO , TUXTLA GUTIERREZ , CHIS , C.P.29000','9626260279','9626260279','A180016@UNACH.MX','2000-01-26',28137291,6),('A180023','López','Gómez','Alexis Evaristo','LOGA206HCPMLA0',1,'SOLTERO','BIEN','San Cristóbal de las Casas','La Florida fracción 4','Av.nacasma #13','9671474811','9671474811','A180023@UNACH.MX','2000-02-06',28137291,6),('A180089','Hernandez','Román','Roberto Carlos','ROVI490617HSPDSS05',1,'SOLTERO','BIEN','Tuxtla Gutiérrez','27 de Febrero','CLL 11 A PTE NTE NO 516, MOCTEZUMA , TUXTLA GUTIERREZ , CHIS , C.P.29030','9616882429','9616882429','A180089@UNACH.MX','2000-08-15',28137291,6),('A180410','Fernández','Clemente','Cesar Ogdai','MAHJ280603MSPRRV09',1,'SOLTERO','BIEN','Tuxtla Gutiérrez','Amarantos','CLL 11 A PTE NTE NO 516, MOCTEZUMA , TUXTLA GUTIERREZ , CHIS , C.P.29030','9616882429','9616882429','A180410@UNACH.MX','2000-06-16',28137291,6),('A181075','Toledo','González','Daniel Alejandro','PERC561125MSPRMT03',1,'SOLTERO','BIEN','Tuxtla Gutiérrez\r\n',' Benito Juárez','CLL CLL 18 A PONIENTE SUR 184, XAMAIPAK , TUXTLA GUTIERREZ , CHIS , C.P.29060','9616029745','9616029745','A181075@UNACH.MX','1997-04-17',28137291,6);
/*!40000 ALTER TABLE `uni_alumnos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_insert_uni_alumnos` AFTER INSERT ON `uni_alumnos` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'INSERT','uni_alumnos',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_update_uni_alumnos` AFTER UPDATE ON `uni_alumnos` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'UPDATE','uni_alumnos',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_delete_uni_alumnos` AFTER DELETE ON `uni_alumnos` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'DELETE','uni_alumnos',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `uni_carreras`
--

DROP TABLE IF EXISTS `uni_carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_carreras` (
  `cve_carrera` int NOT NULL AUTO_INCREMENT,
  `nombre_carrera` varchar(150) NOT NULL,
  PRIMARY KEY (`cve_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_carreras`
--

LOCK TABLES `uni_carreras` WRITE;
/*!40000 ALTER TABLE `uni_carreras` DISABLE KEYS */;
INSERT INTO `uni_carreras` VALUES (1,'INGENIERÍA CIVIL'),(2,'INGENIERÍA HIDRÁULICA'),(3,'LICENCIATURA EN ADMINISTRACIÓN'),(4,'LICENCIATURA EN GESTIÓN TURÍSTICA'),(5,'LICENCIATURA EN SISTEMAS COMPUTACIONALES'),(6,'INGENIERÍA EN DESARROLLO Y TECNOLOGÍAS DE SOFTWARE'),(7,'LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO'),(8,'LICENCIATURA EN QUÍMICO FARMACOBIÓLOGO');
/*!40000 ALTER TABLE `uni_carreras` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_insert_uni_carreras` AFTER INSERT ON `uni_carreras` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'INSERT','uni_carreras',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_update_uni_carreras` AFTER UPDATE ON `uni_carreras` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'UPDATE','uni_carreras',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_delete_uni_carreras` AFTER DELETE ON `uni_carreras` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'DELETE','uni_carreras',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `uni_dependencias`
--

DROP TABLE IF EXISTS `uni_dependencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_dependencias` (
  `id_dependencia` int NOT NULL AUTO_INCREMENT,
  `cve_dependencia` int NOT NULL,
  `nombre_dependencia` varchar(90) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  PRIMARY KEY (`cve_dependencia`),
  UNIQUE KEY `id_dependencia` (`id_dependencia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_dependencias`
--

LOCK TABLES `uni_dependencias` WRITE;
/*!40000 ALTER TABLE `uni_dependencias` DISABLE KEYS */;
INSERT INTO `uni_dependencias` VALUES (3,86213,'Facultad de Arquitectura','Blvd. Belisario Domínguez km. 1081,\r\nTerán C.P. 29050 Tuxtla Gutiérrez'),(5,98024,'Facultad de Ingeniería','Blvd. Belisario Domínguez km. 1081,\r\nTerán C.P. 29020 Tuxtla Gutiérrez'),(6,2719813,'Facultad de Lenguas','Blvd. Belisario Domínguez km. 1081,\r\nTerán C.P. 29020 Tuxtla Gutiérrez'),(4,28137291,'Facultad de Contaduría y Administración','Blvd. Belisario Domínguez km. 1081,\r\nTerán C.P. 29050 Tuxtla Gutiérrez');
/*!40000 ALTER TABLE `uni_dependencias` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_insert_uni_dependencias` AFTER INSERT ON `uni_dependencias` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'INSERT','uni_dependencias',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_update_uni_dependencias` AFTER UPDATE ON `uni_dependencias` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'UPDATE','uni_dependencias',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_delete_uni_dependencias` AFTER DELETE ON `uni_dependencias` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'DELETE','uni_dependencias',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `uni_grupos`
--

DROP TABLE IF EXISTS `uni_grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_grupos` (
  `cve_grupo` int NOT NULL AUTO_INCREMENT,
  `cve_materia` int NOT NULL,
  `cve_carrera` int NOT NULL,
  `cve_dependencia` int NOT NULL,
  `cve_profesor` int NOT NULL,
  PRIMARY KEY (`cve_grupo`),
  KEY `cve_dependencia` (`cve_dependencia`),
  KEY `cve_profesor` (`cve_profesor`),
  KEY `cve_materia` (`cve_materia`),
  KEY `cve_carrera` (`cve_carrera`),
  CONSTRAINT `uni_grupos_ibfk_2` FOREIGN KEY (`cve_carrera`) REFERENCES `uni_carreras` (`cve_carrera`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `uni_grupos_ibfk_4` FOREIGN KEY (`cve_materia`) REFERENCES `uni_materias` (`cve_materia`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `uni_grupos_ibfk_5` FOREIGN KEY (`cve_profesor`) REFERENCES `uni_profesor` (`cve_profesor`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_grupos`
--

LOCK TABLES `uni_grupos` WRITE;
/*!40000 ALTER TABLE `uni_grupos` DISABLE KEYS */;
INSERT INTO `uni_grupos` VALUES (1,1,6,28137291,1),(2,2,6,28137291,2),(3,3,6,28137291,3),(4,4,6,28137291,4),(5,5,6,28137291,5),(6,6,6,28137291,6),(7,7,6,28137291,7);
/*!40000 ALTER TABLE `uni_grupos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_insert_uni_grupos` AFTER INSERT ON `uni_grupos` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'INSERT','uni_grupos',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_update_uni_grupos` AFTER UPDATE ON `uni_grupos` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'UPDATE','uni_grupos',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_delete_uni_grupos` AFTER DELETE ON `uni_grupos` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'DELETE','uni_grupos',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `uni_kardex`
--

DROP TABLE IF EXISTS `uni_kardex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_kardex` (
  `cve_kardex` int NOT NULL AUTO_INCREMENT,
  `cve_grupo` int NOT NULL,
  `matricula` varchar(8) NOT NULL,
  `semestre` varchar(10) NOT NULL,
  `calificación` double(10,0) NOT NULL,
  PRIMARY KEY (`cve_kardex`),
  KEY `cve_grupo` (`cve_grupo`),
  CONSTRAINT `uni_kardex_ibfk_1` FOREIGN KEY (`cve_grupo`) REFERENCES `uni_grupos` (`cve_grupo`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_kardex`
--

LOCK TABLES `uni_kardex` WRITE;
/*!40000 ALTER TABLE `uni_kardex` DISABLE KEYS */;
INSERT INTO `uni_kardex` VALUES (1,1,'A180089','8 M',9),(2,1,'A180410','8 M',9),(3,1,'A180016','8 M',9),(4,1,'A181075','8 M',10),(5,1,'A180023','8 M',9);
/*!40000 ALTER TABLE `uni_kardex` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_insert_uni_kardex` AFTER INSERT ON `uni_kardex` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'INSERT','uni_kardex',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_update_uni_kardex` AFTER UPDATE ON `uni_kardex` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'UPDATE','uni_kardex',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_delete_uni_kardex` AFTER DELETE ON `uni_kardex` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'DELETE','uni_kardex',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `uni_materias`
--

DROP TABLE IF EXISTS `uni_materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_materias` (
  `cve_materia` int NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cve_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_materias`
--

LOCK TABLES `uni_materias` WRITE;
/*!40000 ALTER TABLE `uni_materias` DISABLE KEYS */;
INSERT INTO `uni_materias` VALUES (1,'ADMINISTRACION DE SISTEMAS OPERATIVOS'),(2,'COMPUTO DISTRIBUIDO'),(3,'GRAFICACION'),(4,'OPT. 3 - RESPUESTA A INCIDENTES DE SEGURIDAD'),(5,'OPT. 4 - COMPUTO FORENSE'),(6,'OPT. 5 - STARTUP TECNOLOGICAS'),(7,'TALLER DE INVESTIGACION EN LAS CIENCIAS COMPUTACIONALES');
/*!40000 ALTER TABLE `uni_materias` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_insert_uni_materias` AFTER INSERT ON `uni_materias` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'INSERT','uni_materias',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_update_uni_materias` AFTER UPDATE ON `uni_materias` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'UPDATE','uni_materias',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_delete_uni_materias` AFTER DELETE ON `uni_materias` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'DELETE','uni_materias',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `uni_profesor`
--

DROP TABLE IF EXISTS `uni_profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_profesor` (
  `cve_profesor` int NOT NULL,
  `ape_pat` varchar(90) NOT NULL,
  `ape_mat` varchar(90) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `email` varchar(35) NOT NULL,
  `teléfono` varchar(12) NOT NULL,
  `cve_dependencia` int NOT NULL,
  PRIMARY KEY (`cve_profesor`),
  KEY `cve_dependencia` (`cve_dependencia`),
  CONSTRAINT `uni_profesor_ibfk_1` FOREIGN KEY (`cve_dependencia`) REFERENCES `uni_dependencias` (`cve_dependencia`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_profesor`
--

LOCK TABLES `uni_profesor` WRITE;
/*!40000 ALTER TABLE `uni_profesor` DISABLE KEYS */;
INSERT INTO `uni_profesor` VALUES (1,'SANDOVAL','ZUÑIGA','LUIS MANUEL','manuel.sandoval@unach.mx','9611111111',28137291),(2,'LOPEZ','IBAÑEZ','GERARDO','gerardi.lopez@unaxh.mx','9611111111',28137291),(3,'PEREZ','OVANDO','RIGOBERTO','rigoberto.perez@unach.mx','9611111111',28137291),(4,'REGALADO','MORENO','OBETH','obeth.regalado@unach.mx','9611111111',28137291),(5,'RAMOS','FON BON','VICTOR FERNANDO','victor.ramos@unach.mx','9611111111',28137291),(6,'MANDUJANO','DOMINGUEZ','ISIS','isis.mandujano@unach.mx','9611111111',28137291),(7,'ROMAN','JULIAN','REBECA',' rroman@unach.mx','9611558814',28137291);
/*!40000 ALTER TABLE `uni_profesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_insert_uni_profesor` AFTER INSERT ON `uni_profesor` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'INSERT','uni_profesor',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_update_uni_profesor` AFTER UPDATE ON `uni_profesor` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'UPDATE','uni_profesor',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bit_delete_uni_profesor` AFTER DELETE ON `uni_profesor` FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, tabla, fecha) 

	VALUES(substring(USER(),instr(USER(),'@')+1),substring(USER(),1,instr(USER(),'@')-1),'DELETE','uni_profesor',now()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-20 18:44:32
