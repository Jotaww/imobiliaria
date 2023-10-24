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

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (10,'2014_10_12_000000_create_users_table',1),(11,'2014_10_12_100000_create_password_reset_tokens_table',1),(12,'2019_08_19_000000_create_failed_jobs_table',1),(13,'2019_12_14_000001_create_personal_access_tokens_table',1),(14,'2023_10_09_130724_create_properties_table',1),(15,'2023_10_14_224812_create_clients_table',1),(16,'2023_10_17_205650_create_sales_table',1),(17,'2023_10_18_002350_create_sold_table',1),(18,'2023_10_21_083334_create_pending_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pending`
--

DROP TABLE IF EXISTS `pending`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pending` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pending` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pending_property_id_foreign` (`property_id`),
  CONSTRAINT `pending_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pending`
--

LOCK TABLES `pending` WRITE;
/*!40000 ALTER TABLE `pending` DISABLE KEYS */;
INSERT INTO `pending` VALUES (1,1,'interessado','interessado@gmail.com','(51) 99999-9999','yes','2023-10-24 21:11:11','2023-10-24 21:11:11'),(2,12,'interessado2','interessado2@gmail.com','(51) 99999-9999','no','2023-10-24 21:13:26','2023-10-24 21:27:41'),(3,10,'interessado3','interessado3@gmail.com','(51) 99999-9999','yes','2023-10-24 21:27:53','2023-10-24 21:27:53'),(4,10,'interessado4','interessado4@gmail.com','(51) 99999-9999','yes','2023-10-24 21:27:59','2023-10-24 21:27:59');
/*!40000 ALTER TABLE `pending` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `propertyType` varchar(255) NOT NULL,
  `mainPhoto` varchar(255) NOT NULL,
  `photos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`photos`)),
  `price` varchar(255) NOT NULL,
  `condominium` varchar(255) NOT NULL,
  `iptu` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `squareMeters` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `carSpaces` int(11) NOT NULL,
  `description` text NOT NULL,
  `sold` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `properties_user_id_foreign` (`user_id`),
  CONSTRAINT `properties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,1,'Casa','f77b6353f16181129039f932ba89f3c5.jpg','[\"32a8becc13bbbdbd30400e836c49a5d7.jpg\",\"715205ac3bcab2e50584b032d9bb45bb.jpg\",\"b1596a4238378ca826ffae6e33ef69cc.jpg\",\"6223510e70728809b80cf901efb8bd26.jpg\",\"8695e4bb5bd7980329e9e6341649c056.jpg\",\"8c90a3674d43c3dfdb7a557a9d1233e9.jpg\"]','320.000','0','0','Rua Cláudio Manoel da Costa','Jardim Planalto','Esteio','542','RS',90,3,2,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 17:23:31','2023-10-24 17:30:03'),(2,1,'Apartamento','d2434ea7140414d5511d70a3042c768f.jpg','[\"d1995150167ab0a447a62671e45f1432.jpg\",\"be0f4ea87d85efe8eafaf51c59474176.jpg\",\"602b2f9418a9fd2839eb3fba87964670.jpg\",\"1d2d107abe2aafce06108870741763cd.jpg\",\"be66e42f44add897ba26c28d33c5bd7f.jpg\",\"b4f6a0661461ad4475b46b35b138dd7c.jpg\"]','420.000','600','0','Rua Dalva de Oliveira','Parque Primavera','Esteio','542','RS',80,2,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 17:31:56','2023-10-24 17:31:56'),(3,1,'Apartamento','bd1ba2213880c2623ddbe0bdecc0e7d2.webp','[\"897be65e472829759f44ecdee779c6ae.jpg\",\"5c6d763162c93c2933fe3d8ee2cc08d7.jpg\",\"577664c29245dc031c777ecb9adb2a80.jpg\",\"4e1a9fafd5cfc8c2451b04daa4d8f7b2.jpg\",\"396c3a601d9ad21d82f7a16ab780c20c.jpg\",\"b47b03a052d311ab0e3d6628931f6005.jpg\"]','230.000','400','0','Rua Fúlvio Bastos','Aberta dos Morros','Porto Alegre','533','RS',70,2,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 17:34:27','2023-10-24 17:34:27'),(4,1,'Apartamento','888af3b6c93e624f5d12e5ea9cc10484.jpg','[\"da1ddf12347e867130fed582eea3404c.jpg\",\"a3ef67cb0f7df0e03628f99a5a7d6f4c.jpg\",\"cd1f97a41ee7900ff8f51f11ba4d16df.jpg\",\"36eca284f76c0dcc243c5f36164269c0.jpg\",\"7530187f46dd2f3df25f729dfa17c484.jpg\",\"7fdbf3bb94f2a0417ba5ab85f3f5d4d5.jpg\"]','180.000','0','0','Rua Dezenove de Abril','Jardim Itu Sabará','Porto Alegre','42','RS',60,1,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','yes','2023-10-24 17:36:03','2023-10-24 21:31:36'),(5,1,'Apartamento','36cc89e8f74350694702f7edb10895d9.jpg','[\"e5a6e8fa18c39cf3a2b9378352047dce.jpg\",\"a776329eaf269aac4c77e2c4963bfb04.jpg\",\"099ca830879f0051b459f871480af52b.jpg\",\"dc4f086f90cfbb882062ada97ec77f1d.jpg\",\"5f90840e72bc34a0f4baa5353300e492.jpg\",\"1e4db1b1c9e33dc12629c8d53a382d73.jpg\"]','210.000','500','0','Praça Vereador Osório da Rosa','Jardim São Pedro','Porto Alegre','423','RS',85,2,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 17:37:32','2023-10-24 17:37:32'),(6,1,'Apartamento','8c6aac9656bb89e193d032648c855386.jpg','[\"5feea6ffab8077ffb9a4eca05d1dd909.jpg\",\"f04fa57b589598d2ef724f591699702b.jpg\",\"33856647d68f48e58e4ef85a1960ef43.jpg\",\"fee97ff912b315ef6a4ed54baa18e69f.jpg\",\"f8e6c4d4eb871e4363be5d7e1303de47.jpg\",\"f1be4ad82f2469c6fd80289ca091af96.jpg\"]','300.000','0','0','Travessa Um','Jardim Carvalho','Porto Alegre','53','RS',75,3,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 17:42:02','2023-10-24 17:42:02'),(7,1,'Apartamento','bb7369558443580339bcd6335c82fc0d.jpg','[\"d53b654563cac4b412f41401f837e2ce.jpg\",\"af9fceb923920f36ab9e8c22fb123b19.jpg\",\"515142d68a31fee6d9c34148894bac3e.jpg\",\"04a688827f69f8368486c627a9a55b72.jpg\",\"b705cfa42a5bd525e0bee6046cf5917f.jpg\",\"c30be2a1106c48d9ad35d44f54f55a9e.jpg\"]','430.000','1.200','0','Rua Seis','Jardim Carvalho','Porto Alegre','42','RS',100,3,2,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','yes','2023-10-24 17:45:53','2023-10-24 21:31:44'),(8,1,'Apartamento','9cc1632f001adf103e8e4690c49b3a62.jpg','[\"864c094807bdcf5209befd4e6a05f0ec.jpg\",\"00d228d96ac6bc1c7393a19c513b1093.jpg\",\"3f2d7d8c3373b621ee1f8b88fca4b04a.jpg\",\"c797749d23f8b6ff5eb844fad6c491d2.jpg\",\"52210a98ae724d81f72e08cb03f04daa.jpg\",\"c7602b32b523a64d5d747b3aaed24479.jpg\"]','170.000','300','0','Beco Um','Aberta dos Morros','Porto Alegre','333','RS',80,1,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','yes','2023-10-24 17:47:54','2023-10-24 21:31:39'),(9,1,'Apartamento','0169339af10b64516e7524cfd3ccba7c.jpg','[\"d605f6bdd0255f7c91347f379f340d71.jpg\",\"0fe0c0ffc5f635263f8eeea6d4703504.jpg\",\"b39b09027eabc6dd67b52d8d9273bb5b.jpg\",\"d4634eb42a1c0a4e18eb388327363595.jpg\",\"a67d98f7bf9c4d1edc9d2b43380af905.jpg\",\"9d94ce264f12831bc2400d0fd8a331d3.jpg\"]','450.000','1.300','0','Rua Pistóia','Passo da Areia','Porto Alegre','442','RS',90,3,2,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 17:49:14','2023-10-24 17:49:14'),(10,1,'Casa','d1052f7a0bd9cea9bc1011609c9bcc39.jpg','[\"ad7f72f80dff9ba90aa20cbcfff29e01.jpg\",\"61f70c45e79205dff91560c2b467f9d4.jpg\",\"1095dc4a40912eea0d293eaac411e141.jpg\",\"45198d642a158008296a4d0ae75f6a28.jpg\",\"a0de96f2396c009576ce3dd4c7bc63d4.jpg\",\"434cdd78e5b9cec74857fefb987b392a.jpg\"]','1.220.000','0','10.000','Rua Osvaldo Franca Júnior','Mário Quintana','Porto Alegre','5388','RS',130,4,3,3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 17:52:16','2023-10-24 17:52:16'),(11,1,'Apartamento','760a6ae8717285ac576a759406dc3f35.jpg','[\"46a76875f7c6fec46c0a3b51bba9a9a7.jpg\",\"0f7318bd0d027764cf4b6b1573e8c0a5.jpg\",\"5dd606e08bea4b0cb6fa7e75cd6f3578.jpg\",\"a926e8890c7e6923691cc892a8c7a374.jpg\",\"acc7d7375851220ed4a76ea9bf42a027.jpg\",\"11a66751c1fbf7565446ddc28c091ad7.jpg\"]','350.000','800','0','Rua São Lourenço','Lomba do Pinheiro','Porto Alegre','86','RS',90,4,2,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 17:55:38','2023-10-24 17:56:03'),(12,1,'Casa','cd08cd6d88e6f96f5cefd25e4d538f5d.jpg','[\"81e189ce25f532159169567cbdac20b8.jpg\",\"44e12d5d22438b80d6d24236a99e5253.jpg\",\"eeb9268dea33a2904e1e3c85d38b1851.jpg\",\"c9f29cf2ae2a52eff0daf9a63163c6c4.jpg\",\"54a38c9db0c9f949c7a9d943dbcac427.jpg\",\"03fd9102cdd502f436cc7ccb8946934a.jpg\"]','860.000','0','8.000','Travessa Santo Antônio','Centro','Esteio','875','RS',100,4,2,3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','yes','2023-10-24 17:57:45','2023-10-24 21:31:42'),(13,1,'Casa','33f53184aa2431d60bc36566b66dbd63.jpg','[\"ace3c766a3d911c3850958bb49834428.jpg\",\"1ba9f78023fa5ab6490c4bb766fca5af.jpg\",\"0d036659e2f8b7a7bbb5ca93ac8751c8.jpg\",\"9cb5cefcfd1110adf48597c57058b864.jpg\",\"a50212a63e5357938ab246d3f72f19d9.jpg\",\"d652e4acb32f9f6fee4b58b9435dc449.jpg\"]','970.000','0','0','Rua João Correa da Costa','Olímpica','Esteio','65','RS',110,3,2,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 18:00:02','2023-10-24 18:00:02'),(14,1,'Casa','8f46b4149ca3fd4d59bc6c3ed75578f0.jpg','[\"5b96712ef7a902d3115d9c1b41f27b09.jpg\",\"884a9b3b181e1d2acabf33ac4b2831ca.jpg\",\"49fde194b1d5be014750697fa0492037.jpg\",\"2daf32cdcd415194b6db040e3694df21.jpg\",\"a03b56f12ac34095770f96bc0891d8f5.jpg\",\"70b0ef26c324a72a75dc34c9842a7563.jpg\"]','160.000','0','0','Rua Bahia','Parque Amador','Esteio','22','RS',60,1,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 18:01:40','2023-10-24 18:01:40'),(15,1,'Casa','c0e14f6478b9cb7840086fa66ab8313a.jpg','[\"0eb9b76f306aadcb1f41dea0ebc70ff9.jpg\",\"e2f21e6ed56b950d5a821857f895b14a.jpg\",\"91a7ef90872b09f24169303cc9fcabea.jpg\",\"f01fc38feba8553545631701e577d8ea.jpg\",\"7377c6bab4b371010b9f27a5fd6d49b6.jpg\",\"15030eeb8af8b77065b069568c2cae61.jpg\"]','160.000','0','0','Rua Guido Possamai','São Sebastião','Esteio','213','RS',75,2,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 21:08:25','2023-10-24 21:08:25'),(16,1,'Casa','c082b045bedc3a21d09ac0dc4c8232ec.jpg','[\"f7cb548a3b34cfbb9b51142faf8660a6.jpg\",\"26b883a1b6727d10fbfd312d112ded5c.jpg\",\"343ea520b5b0448cfc074e5f6e39795e.jpg\",\"48c63316a8b2e5a33579a6ec9171d6bd.jpg\",\"e488c1395b57efcc6e6a153dc1911308.jpg\",\"f6e8b40e6c2b0a85e64af47db4d3b06e.jpg\"]','420.000','0','0','Rua da Constituição','Tamandaré','Esteio','5367','RS',95,3,2,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 21:36:24','2023-10-24 21:36:24'),(17,1,'Casa','79cf8279da2ea57a931dfb3a3c22e35e.jpg','[\"b989bcc2cd7a77ab2d78444a94fef929.jpg\",\"bd3112d34d01307a03a01d4dbc74ef5d.jpg\",\"017bf8e515425783974eac2d3d43912a.jpg\",\"e3e343950e37841ac142f609d02f28bb.jpg\",\"fe24627259ad6a03b46736643fa794e6.jpg\",\"508769e19ea29fcc63a6c5dda35f53f1.jpg\"]','290.000','0','0','Rua São Borja','São José','Esteio','55','RS',75,3,1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 21:37:56','2023-10-24 21:37:56'),(18,1,'Casa','e0fd91963a2ec5e2d19d89c9ecb4a032.jpg','[\"1a6a4f55520be868a9c315cdaaf8aa4d.jpg\",\"074864e5c28721390deb46942dc872f7.jpg\",\"62ec3a09261e9ac5a84068e05256bda6.jpg\",\"e347f5e1686deb81c335f413283c2911.jpg\",\"f04970a0d3a1e5320911de48e5bb914c.jpg\",\"2637743952138ba381af31888a1bee0f.jpg\"]','930.000','0','0','Rua Doutor Lauro Dondonis','Parque Primavera','Esteio','57','RS',95,4,2,3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mollis arcu at molestie. Curabitur mattis nulla ut cursus sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquam sit amet arcu sed vehicula. Morbi volutpat ultrices cursus. Proin augue lacus, varius eget dolor et, fermentum tempus libero. Donec interdum, tortor at condimentum cursus, lacus eros congue est, sit amet varius lorem dolor nec justo. Nulla vel dapibus libero, quis iaculis enim. Vivamus id sollicitudin ex.','no','2023-10-24 21:40:13','2023-10-24 21:40:13');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_client_id_foreign` (`client_id`),
  KEY `sales_property_id_foreign` (`property_id`),
  CONSTRAINT `sales_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `sales_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (5,6,3,'2023-10-25 02:22:23','2023-10-25 02:22:23'),(6,9,14,'2023-10-25 02:22:47','2023-10-25 02:22:47');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sold`
--

DROP TABLE IF EXISTS `sold`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sold` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sold_user_id_foreign` (`user_id`),
  KEY `sold_client_id_foreign` (`client_id`),
  KEY `sold_property_id_foreign` (`property_id`),
  CONSTRAINT `sold_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `sold_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  CONSTRAINT `sold_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sold`
--

LOCK TABLES `sold` WRITE;
/*!40000 ALTER TABLE `sold` DISABLE KEYS */;
INSERT INTO `sold` VALUES (1,3,3,4,'2023-10-24 21:31:36','2023-10-24 21:31:36'),(2,3,7,8,'2023-10-24 21:31:39','2023-10-24 21:31:39'),(3,3,5,12,'2023-10-24 21:31:42','2023-10-24 21:31:42'),(4,3,2,7,'2023-10-24 21:31:44','2023-10-24 21:31:44');
/*!40000 ALTER TABLE `sold` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$L2kbtPsIJe3msv/xgkNGoO0IjxDJETbeM0UO/cS6upXtmThr5rg..','3',NULL,'2023-10-24 17:20:41','2023-10-24 17:20:41'),(2,'Comercial','comercial@gmail.com',NULL,'$2y$10$y1TKbyyYla4pwvgVNYrjzOqVMYQPuRYfIuXoR4Oi8870OxckDY6xK','2',NULL,'2023-10-24 17:21:35','2023-10-24 17:21:35'),(3,'Financeiro','financeiro@gmail.com',NULL,'$2y$10$dDdjZnVQt0k/aD/IG5JemuRWQyzumUHsTKGiOyKtYfVNlV5YpkN7G','1',NULL,'2023-10-24 17:22:19','2023-10-24 17:22:19'),(4,'Ceo','ceo@gmail.com',NULL,'$2y$10$RelvSwz3odlu2OWW.eZfgeVLhkE5knL4DHlKb3yNpyGhXH6TJqQrq','4',NULL,'2023-10-24 21:32:54','2023-10-24 21:32:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-24 20:25:41
