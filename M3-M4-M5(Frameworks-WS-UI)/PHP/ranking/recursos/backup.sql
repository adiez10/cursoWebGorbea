-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: rankings
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
-- Table structure for table `articulo`
--
CREATE DATABASE IF NOT EXISTS `rankings` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `rankings`;

DROP TABLE IF EXISTS `articulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articulo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `param1` varchar(250) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '-',
  `param2` varchar(250) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '-',
  `descrip` varchar(650) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '-',
  `notageneral` float DEFAULT 1,
  `fechacreacion` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_usuario_articulo_idx` (`id_usuario`),
  CONSTRAINT `fk_usuario_articulo_idx` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulo`
--

LOCK TABLES `articulo` WRITE;
/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
INSERT INTO `articulo` VALUES (1,1,'Manolo Escobar','folk','1956','Cantante popular',6.7,'2022-05-17 13:15:44'),(2,1,'Metallica','trash metal','1980','Grupo metal EEUU',7,'2022-05-24 11:38:35'),(3,2,'Iron Maiden','heavy metal','1975','Iron Maiden es una banda británica de heavy metal fundada en 1975 por el bajista Steve Harris. Es considerada una de las bandas de metal más importantes de todos los tiempos. Ha vendido más de 100 millones de discos en todo el mundo, a pesar de haber contado con poco apoyo de la radio y la televisión comercial durante la mayor parte de su carrera.',5.7,'2022-05-25 13:28:15'),(4,2,'gasfa','dfsaf','1234','            dsfafdasfdsa',5.3,'2022-05-26 10:02:57'),(5,2,'Probando','hardrock','1956','Pruebass            ',4.8,'2022-05-26 10:34:31'),(6,3,'LA MODA','folk-rock','2012','Grupo de burgos            ',8.5,'2022-05-27 12:10:13');
/*!40000 ALTER TABLE `articulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'a@a.com',
  `nickname` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fechacreacion` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname_UNIQUE` (`nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'usuario@dominio.org','usuario1','password1','2022-05-17 13:15:44'),(2,'a@a.com','morleto','$2y$10$KIBrgaIDCytP3YKup1GCxOlmmx8zYJRYPLfTZ9vH2THCyMP1XZ8La','2022-05-24 13:29:22'),(3,'a@a.com','user2','$2y$10$yqGINCyublB.kQ9IN/L90e0ZynrifzrVLxH5kJKr7EwBKjHS23RYa','2022-05-27 12:08:37');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valoracion`
--

DROP TABLE IF EXISTS `valoracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valoracion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_articulo` int(10) unsigned NOT NULL,
  `id_usuario` int(10) unsigned NOT NULL,
  `nota` int(2) NOT NULL,
  `comentarios` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechacreacion` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_articulo_valoracion_idx` (`id_articulo`),
  KEY `fk_usuario_valoracion_idx` (`id_usuario`),
  CONSTRAINT `fk_usuario_valoracion_idx` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_valoracion_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valoracion`
--

LOCK TABLES `valoracion` WRITE;
/*!40000 ALTER TABLE `valoracion` DISABLE KEYS */;
INSERT INTO `valoracion` VALUES (1,1,1,9,'COMENTARIO','2022-05-17 13:15:44'),(2,3,2,10,'Grupazo de heavy metal','2022-05-25 13:28:16'),(3,4,2,9,'            gasdfdasfadsfads','2022-05-26 10:02:57'),(4,3,2,2,'        feasfasd','2022-05-26 10:14:35'),(5,3,2,2,'        feasfasd','2022-05-26 10:14:50'),(6,3,2,5,'        fdsafasd','2022-05-26 10:31:43'),(7,3,2,5,'        fdsafasd','2022-05-26 10:32:01'),(8,3,2,10,'123','2022-05-26 10:32:13'),(9,1,2,10,'        probando','2022-05-26 10:32:39'),(10,1,2,1,'        no me gusta mucho','2022-05-26 10:32:51'),(11,4,2,3,'        fasfdas','2022-05-26 10:33:57'),(12,4,2,4,'        12312','2022-05-26 10:34:04'),(13,5,2,5,'            ','2022-05-26 10:34:31'),(14,5,2,3,'        fdsafasd','2022-05-26 10:34:54'),(15,5,2,1,'        qwerewq','2022-05-26 10:35:04'),(16,5,2,10,'34','2022-05-26 10:35:14'),(17,6,3,9,'            majetes','2022-05-27 12:10:13'),(18,6,3,8,'        fasdgsdafdas','2022-05-27 12:10:24');
/*!40000 ALTER TABLE `valoracion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 13:34:19
