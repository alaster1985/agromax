-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: agromax
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.17.10.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'ancillary_name','images/noimage.jpg','ancillary_type',NULL,NULL),(2,'sorghum','images/categories/sorghum.jpg','upper',NULL,NULL),(3,'beans','images/categories/beans.jpg','upper',NULL,NULL),(4,'mustard','images/categories/mustard.jpg','upper',NULL,NULL),(5,'chickpea','images/categories/chickpea.jpg','upper',NULL,NULL),(6,'linen(grain)','images/categories/linen.jpg','upper',NULL,NULL),(7,'red & green lentils','images/categories/redLentils.jpg','upper',NULL,NULL),(8,'coriander','images/categories/coriander.jpg','upper',NULL,NULL),(9,'millet','images/categories/millet.jpg','upper',NULL,NULL),(10,'lupine','images/categories/lupine.jpg','upper',NULL,NULL),(11,'spelt','images/categories/spelt.jpg','upper',NULL,NULL),(12,'safflower','images/categories/safflower.jpg','upper',NULL,NULL),(13,'wheat common','images/categories/wheat-common.jpg','lower',NULL,NULL),(14,'oat','images/categories/oat.jpg','lower',NULL,NULL),(15,'potato','images/categories/potato.jpg','lower',NULL,NULL),(16,'rapeseed','images/categories/rapeseed.jpg','lower',NULL,NULL),(17,'sunflower','images/categories/sunflower.jpg','lower',NULL,NULL),(18,'barley','images/categories/barley.jpg','lower',NULL,NULL),(19,'corn','images/categories/corn.jpg','lower',NULL,NULL),(20,'soybean','images/categories/soybean.jpg','lower',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deliveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deliveries`
--

LOCK TABLES `deliveries` WRITE;
/*!40000 ALTER TABLE `deliveries` DISABLE KEYS */;
INSERT INTO `deliveries` VALUES (1,'DDP',NULL,NULL),(2,'DAP',NULL,NULL),(3,'DAT',NULL,NULL),(4,'CIP',NULL,NULL),(5,'CPT',NULL,NULL),(6,'CIF',NULL,NULL),(7,'CFR',NULL,NULL),(8,'FOB',NULL,NULL),(9,'FAS',NULL,NULL),(10,'FCA',NULL,NULL),(11,'EXW',NULL,NULL);
/*!40000 ALTER TABLE `deliveries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_page` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English','en_GB','for_English',1,NULL,NULL),(2,'Germany','de_DE','for_Germany',1,NULL,NULL),(3,'Spain','es_ES','forSpain',0,NULL,'2019-02-14 14:15:17'),(4,'France','fr_FR','for_France',1,NULL,NULL),(5,'Korean','ko_KR','forKorean',0,NULL,'2019-02-14 14:09:49'),(6,'Brazil','pt_BR','forBrazil',0,NULL,'2019-02-14 14:08:47'),(7,'Italy','it_IT','for_Italy',1,NULL,NULL),(8,'Japan','jp_JP','forJapan',0,NULL,'2019-02-14 14:11:07'),(9,'Arabian','ar_TN','forArabian',1,NULL,'2019-02-14 14:13:12'),(10,'Greece','el_GR','forGreece',0,NULL,'2019-02-14 14:11:15'),(11,'Ireland','en_IE','forIreland',0,NULL,'2019-02-14 14:11:19'),(13,'China','zh_CN','forChina',0,NULL,'2019-02-14 14:11:26'),(14,'Taiwan','zh_TW','forTaiwan',0,NULL,'2019-02-14 14:11:31'),(15,'Finland','fi_FI','forFinland',0,NULL,'2019-02-14 14:11:38'),(16,'Portugal','pt_PT','forPortugal',0,NULL,'2019-02-14 14:11:42'),(17,'Poland','pl_PL','forPoland',0,NULL,'2019-02-14 14:11:46'),(18,'Russia','ru_RU','forRussia',0,NULL,'2019-02-14 14:11:50'),(19,'India','hi_IN','forIndia',0,NULL,'2019-02-14 14:11:54'),(20,'Turkey','tr_TR','for_Turkey',1,NULL,NULL),(21,'Israel','he_IL','forIsrael',0,NULL,'2019-02-14 14:11:59'),(22,'Denmark','da_DK','forDenmark',0,NULL,'2019-02-14 14:12:02'),(23,'Romania','ro_RO','forRomania',0,NULL,'2019-02-14 14:12:06'),(24,'Slovakia','sk_SK','forSlovakia',0,NULL,'2019-02-14 14:12:10'),(25,'Mexico','es_MX','forMexico',0,NULL,'2019-02-14 14:12:13'),(26,'Philippines','tl_PH','forPhilippines',0,NULL,'2019-02-14 14:12:17'),(27,'Czech','cs_CZ','forCzech',0,NULL,'2019-02-14 14:12:22');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lots`
--

DROP TABLE IF EXISTS `lots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `delivery_id` int(10) unsigned NOT NULL,
  `tons` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `port` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lots_product_id_foreign` (`product_id`),
  KEY `lots_delivery_id_foreign` (`delivery_id`),
  CONSTRAINT `lots_delivery_id_foreign` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`),
  CONSTRAINT `lots_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lots`
--

LOCK TABLES `lots` WRITE;
/*!40000 ALTER TABLE `lots` DISABLE KEYS */;
INSERT INTO `lots` VALUES (1,2,11,300,450,'Some port № 21','images/port.jpg',0,NULL,NULL),(2,2,8,200,600,'Some port № 20','images/port.jpg',0,NULL,NULL),(3,2,7,250,500,'Some port № 19','images/port.jpg',0,NULL,NULL),(4,2,1,250,500,'Some port № 14','images/port.jpg',0,NULL,NULL),(5,3,8,300,600,'Some port № 23','images/port.jpg',0,NULL,NULL),(6,3,9,100,650,'Some port № 22','images/port.jpg',0,NULL,NULL),(7,3,11,200,600,'Some port № 26','images/port.jpg',0,NULL,NULL),(8,3,3,300,500,'Some port № 19','images/port.jpg',0,NULL,NULL),(9,3,1,150,650,'Some port № 18','images/port.jpg',0,NULL,NULL),(10,4,4,250,550,'Some port № 15','images/port.jpg',0,NULL,NULL),(11,4,7,200,650,'Some port № 20','images/port.jpg',0,NULL,NULL),(12,5,11,100,600,'Some port № 22','images/port.jpg',0,NULL,NULL),(13,5,2,250,550,'Some port № 16','images/port.jpg',0,NULL,NULL),(14,5,7,250,550,'Some port № 22','images/port.jpg',0,NULL,NULL),(15,6,1,150,600,'Some port № 15','images/port.jpg',0,NULL,NULL),(16,6,4,100,550,'Some port № 17','images/port.jpg',0,NULL,NULL),(17,6,6,100,450,'Some port № 18','images/port.jpg',0,NULL,NULL),(18,6,11,200,450,'Some port № 26','images/port.jpg',0,NULL,NULL),(19,7,9,100,500,'Some port № 23','images/port.jpg',0,NULL,NULL),(20,7,8,150,500,'Some port № 24','images/port.jpg',0,NULL,NULL),(21,7,5,200,650,'Some port № 26','images/port.jpg',0,NULL,NULL),(22,7,2,100,500,'Some port № 19','images/port.jpg',0,NULL,NULL),(23,7,10,300,650,'Some port № 35','images/port.jpg',0,NULL,NULL),(24,7,2,100,650,'Some port № 24','images/port.jpg',0,NULL,NULL),(25,8,10,100,500,'Some port № 21','images/port.jpg',0,NULL,NULL),(26,8,2,150,450,'Some port № 14','images/port.jpg',0,NULL,NULL),(27,9,11,150,650,'Some port № 30','images/port.jpg',0,NULL,NULL),(28,9,4,100,650,'Some port № 23','images/port.jpg',0,NULL,NULL),(29,9,7,250,450,'Some port № 26','images/port.jpg',0,NULL,NULL),(30,9,7,200,650,'Some port № 30','images/port.jpg',0,NULL,NULL),(31,9,2,300,500,'Some port № 25','images/port.jpg',0,NULL,NULL),(32,10,7,200,450,'Some port № 20','images/port.jpg',0,NULL,NULL),(33,11,1,200,650,'Some port № 21','images/port.jpg',0,NULL,NULL),(34,11,8,200,600,'Some port № 28','images/port.jpg',0,NULL,NULL),(35,11,1,250,500,'Some port № 21','images/port.jpg',0,NULL,NULL),(36,12,2,300,550,'Some port № 21','images/port.jpg',0,NULL,NULL),(37,13,8,150,450,'Some port № 27','images/port.jpg',0,NULL,NULL),(38,13,7,250,500,'Some port № 30','images/port.jpg',0,NULL,NULL),(39,13,10,200,450,'Some port № 32','images/port.jpg',0,NULL,NULL),(40,13,7,200,450,'Some port № 30','images/port.jpg',0,NULL,NULL),(41,13,6,100,600,'Some port № 31','images/port.jpg',0,NULL,NULL),(42,14,4,250,550,'Some port № 28','images/port.jpg',0,NULL,NULL),(43,14,11,150,500,'Some port № 33','images/port.jpg',0,NULL,NULL),(44,14,2,300,550,'Some port № 29','images/port.jpg',0,NULL,NULL),(45,14,10,200,450,'Some port № 34','images/port.jpg',0,NULL,NULL),(46,14,8,150,500,'Some port № 33','images/port.jpg',0,NULL,NULL),(47,15,4,150,450,'Some port № 26','images/port.jpg',0,NULL,NULL),(48,15,3,250,650,'Some port № 32','images/port.jpg',0,NULL,NULL),(49,15,3,100,600,'Some port № 29','images/port.jpg',0,NULL,NULL),(50,15,4,150,450,'Some port № 29','images/port.jpg',0,NULL,NULL),(51,15,2,200,600,'Some port № 32','images/port.jpg',0,NULL,NULL),(52,15,11,250,650,'Some port № 44','images/port.jpg',0,NULL,NULL),(53,16,7,300,600,'Some port № 34','images/port.jpg',0,NULL,NULL),(54,16,6,300,650,'Some port № 35','images/port.jpg',0,NULL,NULL),(55,16,1,150,600,'Some port № 27','images/port.jpg',0,NULL,NULL),(56,16,10,250,650,'Some port № 40','images/port.jpg',0,NULL,NULL),(57,17,3,100,500,'Some port № 25','images/port.jpg',0,NULL,NULL),(58,17,8,200,550,'Some port № 34','images/port.jpg',0,NULL,NULL),(59,17,6,250,650,'Some port № 36','images/port.jpg',0,NULL,NULL),(60,17,1,100,550,'Some port № 27','images/port.jpg',0,NULL,NULL),(61,18,4,250,600,'Some port № 31','images/port.jpg',0,NULL,NULL),(62,18,8,100,450,'Some port № 30','images/port.jpg',0,NULL,NULL),(63,18,11,300,450,'Some port № 38','images/port.jpg',0,NULL,NULL),(64,19,9,100,500,'Some port № 35','images/port.jpg',0,NULL,NULL),(65,19,9,300,500,'Some port № 40','images/port.jpg',0,NULL,NULL),(66,19,9,300,500,'Some port № 41','images/port.jpg',0,NULL,NULL),(67,19,3,150,650,'Some port № 36','images/port.jpg',0,NULL,NULL),(68,19,2,150,600,'Some port № 35','images/port.jpg',0,NULL,NULL),(69,19,10,200,600,'Some port № 45','images/port.jpg',0,NULL,NULL),(70,20,3,300,500,'Some port № 29','images/port.jpg',0,NULL,NULL),(71,21,11,300,500,'Some port № 38','images/port.jpg',0,NULL,NULL),(72,22,6,100,500,'Some port № 35','images/port.jpg',0,NULL,NULL),(73,22,6,300,650,'Some port № 43','images/port.jpg',0,NULL,NULL),(74,22,1,300,600,'Some port № 38','images/port.jpg',0,NULL,NULL),(75,22,9,100,500,'Some port № 41','images/port.jpg',0,NULL,NULL),(76,22,3,300,450,'Some port № 39','images/port.jpg',0,NULL,NULL),(77,22,1,300,500,'Some port № 39','images/port.jpg',0,NULL,NULL),(78,23,9,250,600,'Some port № 42','images/port.jpg',0,NULL,NULL),(79,23,7,250,600,'Some port № 41','images/port.jpg',0,NULL,NULL),(80,23,8,100,500,'Some port № 38','images/port.jpg',0,NULL,NULL),(81,23,5,150,650,'Some port № 40','images/port.jpg',0,NULL,NULL),(82,24,11,100,600,'Some port № 41','images/port.jpg',0,NULL,NULL),(83,24,3,250,600,'Some port № 37','images/port.jpg',0,NULL,NULL),(84,24,4,100,500,'Some port № 34','images/port.jpg',0,NULL,NULL),(85,25,4,100,450,'Some port № 32','images/port.jpg',0,NULL,NULL),(86,25,9,150,500,'Some port № 40','images/port.jpg',0,NULL,NULL),(87,25,10,200,500,'Some port № 43','images/port.jpg',0,NULL,NULL),(88,26,2,100,650,'Some port № 34','images/port.jpg',0,NULL,NULL),(89,26,1,100,450,'Some port № 30','images/port.jpg',0,NULL,NULL),(90,27,11,150,600,'Some port № 48','images/port.jpg',0,NULL,NULL),(91,27,11,150,550,'Some port № 48','images/port.jpg',0,NULL,NULL),(92,27,9,200,600,'Some port № 49','images/port.jpg',0,NULL,NULL),(93,27,3,200,450,'Some port № 41','images/port.jpg',0,NULL,NULL),(94,27,11,100,550,'Some port № 50','images/port.jpg',0,NULL,NULL),(95,27,8,150,650,'Some port № 51','images/port.jpg',0,NULL,NULL),(96,28,11,250,600,'Some port № 51','images/port.jpg',0,NULL,NULL),(97,28,7,100,550,'Some port № 44','images/port.jpg',0,NULL,NULL),(98,28,5,150,650,'Some port № 46','images/port.jpg',0,NULL,NULL),(99,28,9,250,550,'Some port № 51','images/port.jpg',0,NULL,NULL),(100,28,5,150,600,'Some port № 47','images/port.jpg',0,NULL,NULL),(101,28,11,300,650,'Some port № 58','images/port.jpg',0,NULL,NULL),(102,29,3,200,650,'Some port № 42','images/port.jpg',0,NULL,NULL),(103,29,4,100,450,'Some port № 38','images/port.jpg',0,NULL,NULL),(104,29,1,300,600,'Some port № 43','images/port.jpg',0,NULL,NULL),(105,29,3,200,650,'Some port № 45','images/port.jpg',0,NULL,NULL),(106,30,11,150,550,'Some port № 50','images/port.jpg',0,NULL,NULL),(107,30,11,200,500,'Some port № 51','images/port.jpg',0,NULL,NULL),(108,30,11,150,450,'Some port № 50','images/port.jpg',0,NULL,NULL),(109,30,6,100,550,'Some port № 47','images/port.jpg',0,NULL,NULL),(110,30,4,200,650,'Some port № 50','images/port.jpg',0,NULL,NULL),(111,30,3,200,450,'Some port № 46','images/port.jpg',0,NULL,NULL),(112,31,2,150,550,'Some port № 38','images/port.jpg',0,NULL,NULL),(113,31,6,200,600,'Some port № 45','images/port.jpg',0,NULL,NULL),(114,32,9,100,600,'Some port № 47','images/port.jpg',0,NULL,NULL),(115,32,1,300,650,'Some port № 45','images/port.jpg',0,NULL,NULL),(116,32,4,300,650,'Some port № 49','images/port.jpg',0,NULL,NULL),(117,33,7,200,550,'Some port № 46','images/port.jpg',0,NULL,NULL),(118,33,6,250,500,'Some port № 46','images/port.jpg',0,NULL,NULL),(119,34,2,250,550,'Some port № 43','images/port.jpg',0,NULL,NULL),(120,34,5,100,600,'Some port № 45','images/port.jpg',0,NULL,NULL),(121,35,10,200,450,'Some port № 53','images/port.jpg',0,NULL,NULL),(122,35,4,150,600,'Some port № 50','images/port.jpg',0,NULL,NULL),(123,35,1,100,550,'Some port № 46','images/port.jpg',0,NULL,NULL),(124,35,6,300,500,'Some port № 55','images/port.jpg',0,NULL,NULL),(125,35,10,100,450,'Some port № 55','images/port.jpg',0,NULL,NULL),(126,35,4,150,450,'Some port № 51','images/port.jpg',0,NULL,NULL),(127,36,5,150,450,'Some port № 46','images/port.jpg',0,NULL,NULL),(128,36,6,250,650,'Some port № 54','images/port.jpg',0,NULL,NULL),(129,36,6,150,550,'Some port № 51','images/port.jpg',0,NULL,NULL),(130,36,1,100,550,'Some port № 46','images/port.jpg',0,NULL,NULL),(131,37,5,300,550,'Some port № 51','images/port.jpg',0,NULL,NULL),(132,37,8,150,600,'Some port № 53','images/port.jpg',0,NULL,NULL),(133,37,8,200,450,'Some port № 52','images/port.jpg',0,NULL,NULL),(134,38,11,300,600,'Some port № 58','images/port.jpg',0,NULL,NULL),(135,38,8,300,650,'Some port № 57','images/port.jpg',0,NULL,NULL),(136,39,11,100,550,'Some port № 53','images/port.jpg',0,NULL,NULL);
/*!40000 ALTER TABLE `lots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_01_22_114624_create_delivery_table',1),(4,'2019_01_22_114643_create_category_table',1),(5,'2019_01_22_124444_create_product_table',1),(6,'2019_01_22_124536_create_lot_table',1),(7,'2019_01_22_124548_create_order_table',1),(8,'2019_01_22_124634_create_languages_table',1),(9,'2019_01_23_080526_create_descriptions_table',1),(10,'2019_01_23_080700_create_statuses_table',1),(11,'2019_01_23_080711_create_stages_table',1),(12,'2019_02_11_075220_create_role_table',1),(13,'2020_01_23_080853_create_foreign_key_relationships_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `status_id` int(10) unsigned NOT NULL DEFAULT '1',
  `stage_id` int(10) unsigned NOT NULL DEFAULT '1',
  `delivery_id` int(10) unsigned NOT NULL,
  `manager` int(11) NOT NULL DEFAULT '0',
  `tons` int(11) NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exclusive` tinyint(1) NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_product_id_foreign` (`product_id`),
  KEY `orders_delivery_id_foreign` (`delivery_id`),
  KEY `orders_status_id_foreign` (`status_id`),
  KEY `orders_stage_id_foreign` (`stage_id`),
  CONSTRAINT `orders_delivery_id_foreign` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`),
  CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `orders_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`),
  CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'other','other description','images/noimage.jpg',1,NULL,NULL),(2,'sorghum_№_1','For sorghum_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/sorghum.jpg',2,NULL,NULL),(3,'sorghum_№_2','For sorghum_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/sorghum.jpg',2,NULL,NULL),(4,'beans_№_1','For beans_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/beans.jpg',3,NULL,NULL),(5,'beans_№_2','For beans_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/beans.jpg',3,NULL,NULL),(6,'mustard_№_1','For mustard_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/mustard.jpg',4,NULL,NULL),(7,'mustard_№_2','For mustard_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/mustard.jpg',4,NULL,NULL),(8,'chickpea_№_1','For chickpea_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/chickpea.jpg',5,NULL,NULL),(9,'chickpea_№_2','For chickpea_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/chickpea.jpg',5,NULL,NULL),(10,'linen(grain)_№_1','For linen(grain)_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/linen.jpg',6,NULL,NULL),(11,'linen(grain)_№_2','For linen(grain)_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/linen.jpg',6,NULL,NULL),(12,'red & green lentils_№_1','For red & green lentils_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/redLentils.jpg',7,NULL,NULL),(13,'red & green lentils_№_2','For red & green lentils_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/redLentils.jpg',7,NULL,NULL),(14,'coriander_№_1','For coriander_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/coriander.jpg',8,NULL,NULL),(15,'coriander_№_2','For coriander_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/coriander.jpg',8,NULL,NULL),(16,'millet_№_1','For millet_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/millet.jpg',9,NULL,NULL),(17,'millet_№_2','For millet_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/millet.jpg',9,NULL,NULL),(18,'lupine_№_1','For lupine_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/lupine.jpg',10,NULL,NULL),(19,'lupine_№_2','For lupine_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/lupine.jpg',10,NULL,NULL),(20,'spelt_№_1','For spelt_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/spelt.jpg',11,NULL,NULL),(21,'spelt_№_2','For spelt_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/spelt.jpg',11,NULL,NULL),(22,'safflower_№_1','For safflower_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/safflower.jpg',12,NULL,NULL),(23,'safflower_№_2','For safflower_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/safflower.jpg',12,NULL,NULL),(24,'wheat common_№_1','For wheat common_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/wheat-common.jpg',13,NULL,NULL),(25,'wheat common_№_2','For wheat common_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/wheat-common.jpg',13,NULL,NULL),(26,'oat_№_1','For oat_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/oat.jpg',14,NULL,NULL),(27,'oat_№_2','For oat_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/oat.jpg',14,NULL,NULL),(28,'potato_№_1','For potato_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/potato.jpg',15,NULL,NULL),(29,'potato_№_2','For potato_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/potato.jpg',15,NULL,NULL),(30,'rapeseed_№_1','For rapeseed_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/rapeseed.jpg',16,NULL,NULL),(31,'rapeseed_№_2','For rapeseed_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/rapeseed.jpg',16,NULL,NULL),(32,'sunflower_№_1','For sunflower_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/sunflower.jpg',17,NULL,NULL),(33,'sunflower_№_2','For sunflower_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/sunflower.jpg',17,NULL,NULL),(34,'barley_№_1','For barley_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/barley.jpg',18,NULL,NULL),(35,'barley_№_2','For barley_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/barley.jpg',18,NULL,NULL),(36,'corn_№_1','For corn_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/corn.jpg',19,NULL,NULL),(37,'corn_№_2','For corn_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/corn.jpg',19,NULL,NULL),(38,'soybean_№_1','For soybean_№_1  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/soybean.jpg',20,NULL,NULL),(39,'soybean_№_2','For soybean_№_2  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/products/soybean.jpg',20,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','CRUD lots, orders, categories, users',NULL,NULL),(2,'moderator','CRUD lots, orders, categories',NULL,NULL),(3,'manager','RU orders, R lots, categories',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stages`
--

DROP TABLE IF EXISTS `stages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stages`
--

LOCK TABLES `stages` WRITE;
/*!40000 ALTER TABLE `stages` DISABLE KEYS */;
INSERT INTO `stages` VALUES (1,'first_stage',NULL,NULL),(2,'second_stage',NULL,NULL);
/*!40000 ALTER TABLE `stages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,'processing',NULL,NULL),(2,'awaiting payment',NULL,NULL),(3,'execution',NULL,NULL),(4,'send',NULL,NULL),(5,'finish',NULL,NULL),(6,'rejected',NULL,NULL);
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$10$9zT5EZwKHIsBNBzUP2iCuOOsG5SibEOySZWDIrB0OWDRIukL/oihC',1,0,'5MXteaK5kaJ40Uchiba8qCwNjOV3Qj3I3qjBBHEDSI6jtAk15cDoWoei1oK2',NULL,NULL),(2,'moderator','moderator@gmail.com',NULL,'$2y$10$T.xRaqynnMOfdgxyMMhTZOViF7hg.DtUjati.yQ6NPYelD8T66YBK',2,0,NULL,NULL,NULL),(3,'manager1','manager1@gmail.com',NULL,'$2y$10$IcFhCQj/AzZpdHhnPzLktu5NkdZ0odc94i6bAxjZ/x2FGjUD/XJjO',3,0,NULL,NULL,NULL);
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

-- Dump completed on 2019-02-14 19:59:12
