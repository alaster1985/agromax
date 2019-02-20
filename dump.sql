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
-- Table structure for table `conditions`
--

DROP TABLE IF EXISTS `conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conditions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `condition` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conditions`
--

LOCK TABLES `conditions` WRITE;
/*!40000 ALTER TABLE `conditions` DISABLE KEYS */;
INSERT INTO `conditions` VALUES (1,'default',NULL,NULL),(2,'20\' DV container bulk',NULL,NULL),(3,'20\' DV container 50 kg bags',NULL,NULL),(4,'40\' DV container bulk',NULL,NULL),(5,'40\' DV container 50 kg bags',NULL,NULL),(6,'20\' RF container (refrigerated)',NULL,NULL),(7,'40\' RF container (refrigerated)',NULL,NULL);
/*!40000 ALTER TABLE `conditions` ENABLE KEYS */;
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
-- Table structure for table `exclusive_lots`
--

DROP TABLE IF EXISTS `exclusive_lots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exclusive_lots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_id` int(10) unsigned NOT NULL,
  `condition_id` int(10) unsigned NOT NULL,
  `tons` int(11) NOT NULL,
  `optional_price` int(11) NOT NULL,
  `max_price` int(11) NOT NULL,
  `port` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exclusive_lots`
--

LOCK TABLES `exclusive_lots` WRITE;
/*!40000 ALTER TABLE `exclusive_lots` DISABLE KEYS */;
/*!40000 ALTER TABLE `exclusive_lots` ENABLE KEYS */;
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
  `disable` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English','en_GB','for_English',0,NULL,NULL),(2,'Germany','de_DE','for_Germany',0,NULL,NULL),(3,'Spain','es_ES','for_Spain',1,NULL,NULL),(4,'France','fr_FR','for_France',0,NULL,NULL),(5,'Korean','ko_KR','for_Korean',1,NULL,NULL),(6,'Brazil','pt_BR','for_Brazil',1,NULL,NULL),(7,'Italy','it_IT','for_Italy',0,NULL,NULL),(8,'Japan','jp_JP','for_Japan',1,NULL,NULL),(9,'Arabian','ar_TN','for_Arabian',0,NULL,NULL),(10,'Greece','el_GR','for_Greece',1,NULL,NULL),(11,'Netherlands','nl_NL','for_Netherlands',1,NULL,NULL),(12,'China','zh_CN','for_China',1,NULL,NULL),(13,'Taiwan','zh_TW','for_Taiwan',1,NULL,NULL),(14,'Finland','fi_FI','for_Finland',1,NULL,NULL),(15,'Portugal','pt_PT','for_Portugal',1,NULL,NULL),(16,'Poland','pl_PL','for_Poland',1,NULL,NULL),(17,'Russia','ru_RU','for_Russia',1,NULL,NULL),(18,'India','hi_IN','for_India',1,NULL,NULL),(19,'Turkey','tr_TR','for_Turkey',0,NULL,NULL),(20,'Israel','he_IL','for_Israel',1,NULL,NULL),(21,'Denmark','da_DK','for_Denmark',1,NULL,NULL),(22,'Romania','ro_RO','for_Romania',1,NULL,NULL),(23,'Slovakia','sk_SK','for_Slovakia',1,NULL,NULL),(24,'Mexico','es_MX','for_Mexico',1,NULL,NULL),(25,'Philippines','tl_PH','for_Philippines',1,NULL,NULL),(26,'Czech','cs_CZ','for_Czech',1,NULL,NULL);
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
  `turkish` tinyint(1) NOT NULL DEFAULT '0',
  `port_photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lots_product_id_foreign` (`product_id`),
  KEY `lots_delivery_id_foreign` (`delivery_id`),
  CONSTRAINT `lots_delivery_id_foreign` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`),
  CONSTRAINT `lots_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lots`
--

LOCK TABLES `lots` WRITE;
/*!40000 ALTER TABLE `lots` DISABLE KEYS */;
INSERT INTO `lots` VALUES (1,2,7,250,500,'Some port № 15',0,'images/port.jpg',0,NULL,NULL),(2,2,5,100,500,'Some port № 11',0,'images/port.jpg',0,NULL,NULL),(3,3,7,300,550,'Some port № 18',0,'images/port.jpg',0,NULL,NULL),(4,3,10,300,650,'Some port № 24',0,'images/port.jpg',0,NULL,NULL),(5,4,8,250,500,'Some port № 19',0,'images/port.jpg',0,NULL,NULL),(6,4,1,150,500,'Some port № 11',1,'images/port.jpg',0,NULL,NULL),(7,4,7,300,600,'Some port № 23',0,'images/port.jpg',0,NULL,NULL),(8,5,9,100,600,'Some port № 18',0,'images/port.jpg',0,NULL,NULL),(9,6,2,150,550,'Some port № 13',1,'images/port.jpg',0,NULL,NULL),(10,6,10,150,550,'Some port № 22',0,'images/port.jpg',0,NULL,NULL),(11,7,3,100,500,'Some port № 12',0,'images/port.jpg',0,NULL,NULL),(12,8,9,150,550,'Some port № 21',0,'images/port.jpg',0,NULL,NULL),(13,9,9,200,500,'Some port № 24',0,'images/port.jpg',0,NULL,NULL),(14,9,10,150,450,'Some port № 24',0,'images/port.jpg',0,NULL,NULL),(15,9,10,300,450,'Some port № 28',0,'images/port.jpg',0,NULL,NULL),(16,10,6,250,550,'Some port № 24',0,'images/port.jpg',0,NULL,NULL),(17,10,11,300,550,'Some port № 31',0,'images/port.jpg',0,NULL,NULL),(18,10,7,150,500,'Some port № 24',0,'images/port.jpg',0,NULL,NULL),(19,11,2,200,500,'Some port № 17',1,'images/port.jpg',0,NULL,NULL),(20,12,10,250,450,'Some port № 26',0,'images/port.jpg',0,NULL,NULL),(21,13,2,300,550,'Some port № 23',1,'images/port.jpg',0,NULL,NULL),(22,13,2,200,500,'Some port № 21',1,'images/port.jpg',0,NULL,NULL),(23,14,9,300,500,'Some port № 31',0,'images/port.jpg',0,NULL,NULL),(24,14,9,100,500,'Some port № 28',0,'images/port.jpg',0,NULL,NULL),(25,14,3,250,650,'Some port № 29',0,'images/port.jpg',0,NULL,NULL),(26,15,3,300,550,'Some port № 27',0,'images/port.jpg',0,NULL,NULL),(27,15,9,300,550,'Some port № 34',0,'images/port.jpg',0,NULL,NULL),(28,15,11,150,600,'Some port № 35',0,'images/port.jpg',0,NULL,NULL),(29,16,5,100,600,'Some port № 27',0,'images/port.jpg',0,NULL,NULL),(30,16,2,150,500,'Some port № 24',1,'images/port.jpg',0,NULL,NULL),(31,16,7,100,450,'Some port № 28',0,'images/port.jpg',0,NULL,NULL),(32,17,4,300,550,'Some port № 28',0,'images/port.jpg',0,NULL,NULL),(33,18,7,100,500,'Some port № 28',0,'images/port.jpg',0,NULL,NULL),(34,18,5,300,450,'Some port № 30',0,'images/port.jpg',0,NULL,NULL),(35,19,9,300,550,'Some port № 36',0,'images/port.jpg',0,NULL,NULL),(36,19,11,150,550,'Some port № 36',0,'images/port.jpg',0,NULL,NULL),(37,20,11,150,650,'Some port № 38',0,'images/port.jpg',0,NULL,NULL),(38,20,10,300,500,'Some port № 38',0,'images/port.jpg',0,NULL,NULL),(39,21,1,100,550,'Some port № 26',1,'images/port.jpg',0,NULL,NULL),(40,21,11,100,550,'Some port № 37',0,'images/port.jpg',0,NULL,NULL),(41,22,10,100,650,'Some port № 38',0,'images/port.jpg',0,NULL,NULL),(42,22,2,100,650,'Some port № 31',1,'images/port.jpg',0,NULL,NULL),(43,23,7,300,500,'Some port № 38',0,'images/port.jpg',0,NULL,NULL),(44,23,7,150,450,'Some port № 35',0,'images/port.jpg',0,NULL,NULL),(45,23,2,100,500,'Some port № 31',1,'images/port.jpg',0,NULL,NULL),(46,24,6,150,650,'Some port № 38',0,'images/port.jpg',0,NULL,NULL),(47,24,11,300,450,'Some port № 43',0,'images/port.jpg',0,NULL,NULL),(48,24,6,200,650,'Some port № 41',0,'images/port.jpg',0,NULL,NULL),(49,25,3,100,450,'Some port № 31',0,'images/port.jpg',0,NULL,NULL),(50,25,10,300,600,'Some port № 46',0,'images/port.jpg',0,NULL,NULL),(51,25,6,100,650,'Some port № 40',0,'images/port.jpg',0,NULL,NULL),(52,26,7,250,550,'Some port № 39',0,'images/port.jpg',0,NULL,NULL),(53,27,7,100,550,'Some port № 39',0,'images/port.jpg',0,NULL,NULL),(54,27,10,250,600,'Some port № 47',0,'images/port.jpg',0,NULL,NULL),(55,27,10,300,500,'Some port № 47',0,'images/port.jpg',0,NULL,NULL),(56,28,2,150,600,'Some port № 35',1,'images/port.jpg',0,NULL,NULL),(57,29,4,200,650,'Some port № 42',0,'images/port.jpg',0,NULL,NULL),(58,29,1,200,600,'Some port № 39',1,'images/port.jpg',0,NULL,NULL),(59,29,9,250,500,'Some port № 47',0,'images/port.jpg',0,NULL,NULL),(60,30,10,250,550,'Some port № 48',0,'images/port.jpg',0,NULL,NULL),(61,30,6,300,450,'Some port № 44',0,'images/port.jpg',0,NULL,NULL),(62,30,3,150,500,'Some port № 40',0,'images/port.jpg',0,NULL,NULL),(63,31,10,100,650,'Some port № 48',0,'images/port.jpg',0,NULL,NULL),(64,31,7,250,450,'Some port № 45',0,'images/port.jpg',0,NULL,NULL),(65,31,3,250,450,'Some port № 42',0,'images/port.jpg',0,NULL,NULL),(66,32,8,300,550,'Some port № 47',0,'images/port.jpg',0,NULL,NULL),(67,33,4,250,450,'Some port № 41',0,'images/port.jpg',0,NULL,NULL),(68,34,5,200,450,'Some port № 44',0,'images/port.jpg',0,NULL,NULL),(69,34,7,150,450,'Some port № 46',0,'images/port.jpg',0,NULL,NULL),(70,34,3,200,550,'Some port № 46',0,'images/port.jpg',0,NULL,NULL),(71,35,7,250,650,'Some port № 50',0,'images/port.jpg',0,NULL,NULL),(72,36,11,100,450,'Some port № 49',0,'images/port.jpg',0,NULL,NULL),(73,36,6,300,500,'Some port № 50',0,'images/port.jpg',0,NULL,NULL),(74,37,11,100,450,'Some port № 49',0,'images/port.jpg',0,NULL,NULL),(75,38,8,250,650,'Some port № 55',0,'images/port.jpg',0,NULL,NULL),(76,38,7,100,650,'Some port № 52',0,'images/port.jpg',0,NULL,NULL),(77,39,1,150,450,'Some port № 43',1,'images/port.jpg',0,NULL,NULL),(78,39,5,200,650,'Some port № 53',0,'images/port.jpg',0,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_01_22_114624_create_delivery_table',1),(4,'2019_01_22_114643_create_category_table',1),(5,'2019_01_22_124444_create_product_table',1),(6,'2019_01_22_124536_create_lot_table',1),(7,'2019_01_22_124548_create_order_table',1),(8,'2019_01_22_124634_create_languages_table',1),(9,'2019_01_23_080526_create_descriptions_table',1),(10,'2019_01_23_080700_create_statuses_table',1),(11,'2019_01_23_080711_create_stages_table',1),(12,'2019_02_11_075220_create_role_table',1),(13,'2019_02_18_113835_create_conditions_table',1),(14,'2019_02_18_124815_create_exclusive_table',1),(15,'2020_01_23_080853_create_foreign_key_relationships_table',1);
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
  `condition_id` int(10) unsigned NOT NULL DEFAULT '1',
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
  `session_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exclusive` tinyint(1) NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_product_id_foreign` (`product_id`),
  KEY `orders_delivery_id_foreign` (`delivery_id`),
  KEY `orders_condition_id_foreign` (`condition_id`),
  KEY `orders_status_id_foreign` (`status_id`),
  KEY `orders_stage_id_foreign` (`stage_id`),
  CONSTRAINT `orders_condition_id_foreign` FOREIGN KEY (`condition_id`) REFERENCES `conditions` (`id`),
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
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$10$pQW8tEQdqZP8iUi.jfG0EuYqymh.x8HvecTvinT0rCkfSofPDJHf.',1,0,NULL,NULL,NULL),(2,'moderator','moderator@gmail.com',NULL,'$2y$10$IqS3i84jVfT3l7lOXXeKWOT60f8a6r2nS1C1.y7Ho5xAUiPzRoAAC',2,0,NULL,NULL,NULL),(3,'manager1','manager1@gmail.com',NULL,'$2y$10$ThgRKCjb/S3R0mTMxHXDv.t7zKwW89Hq4QiZ3x7.4EHiU2gvkx7AC',3,0,NULL,NULL,NULL);
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

-- Dump completed on 2019-02-20 16:42:06
