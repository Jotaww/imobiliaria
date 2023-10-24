-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: imobiliaria
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthDate` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `numHouse` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clients_user_id_foreign` (`user_id`),
  CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,2,'cliente','2000-02-22','644.376.930-94','cliente@gmail.com','(51) 99999-9999','Esteio','Rua São Borja','São José','12','2023-10-24 21:16:59','2023-10-24 21:16:59'),(2,2,'cliente2','2000-02-22','243.671.480-09','cliente2@gmail.com','(51) 99999-9999','Esteio','Rua Bahia','Parque Amador','42','2023-10-24 21:17:47','2023-10-24 21:17:47'),(3,2,'cliente3','2000-02-22','269.033.150-04','cliente3@gmail.com','(51) 99999-9999','Esteio','Rua Ulisses Pimentel','Tamandaré','42','2023-10-24 21:18:45','2023-10-24 21:18:53'),(4,2,'cliente4','2000-02-22','754.741.730-24','cliente4@gmail.com','(51) 99999-9999','Esteio','Rua José Grimberg','Liberdade','421','2023-10-24 21:19:37','2023-10-24 21:19:37'),(5,2,'cliente5','2000-02-22','672.990.580-81','cliente5@gmail.com','(51) 99999-9999','Esteio','Avenida Jacob Alcalay','Santo Inácio','567','2023-10-24 21:21:08','2023-10-24 21:21:08'),(6,2,'cliente6','2000-02-22','688.222.250-90','cliente6@gmail.com','(51) 99999-9999','Esteio','Rua Rui Barbosa','Novo Esteio','532','2023-10-24 21:22:01','2023-10-24 21:22:01'),(7,2,'cliente7','2000-02-22','720.811.480-30','cliente7@gmail.com','(51) 99999-9999','Esteio','Beco Seis','São José','98','2023-10-24 21:22:32','2023-10-24 21:22:43'),(8,2,'cliente8','2000-02-22','191.184.130-05','cliente8@gmail.com','(51) 99999-9999','Esteio','Rua Avelino Antônio Zonta','Novo Esteio','32','2023-10-24 21:23:22','2023-10-24 21:23:22'),(9,2,'cliente9','2000-02-22','178.732.850-30','cliente9@gmail.com','(51) 99999-9999','Esteio','Rua Rui Barbosa','Novo Esteio','46','2023-10-24 21:24:24','2023-10-24 21:24:24');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-24 20:25:29
