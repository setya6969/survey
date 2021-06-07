-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: survey_teum
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `questions1`
--

DROP TABLE IF EXISTS `questions1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions1` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `q1` varchar(50) NOT NULL,
  `q2` varchar(10) NOT NULL,
  `q3` varchar(50) NOT NULL,
  `q4` varchar(50) NOT NULL,
  `q5_decission` varchar(50) NOT NULL,
  `q6` varchar(50) NOT NULL,
  `q7a` varchar(50) NOT NULL,
  `q7b` varchar(50) NOT NULL,
  `q8` varchar(50) NOT NULL,
  `q9` varchar(10) NOT NULL,
  `q10` varchar(10) NOT NULL,
  `q11` varchar(10) NOT NULL,
  `q12` varchar(10) NOT NULL,
  `q13` varchar(10) NOT NULL,
  `q14` varchar(10) NOT NULL,
  `q15` varchar(10) NOT NULL,
  `q16` varchar(10) NOT NULL,
  `q17` varchar(110) NOT NULL,
  `q18` varchar(110) NOT NULL,
  `q19` varchar(110) NOT NULL,
  `q20` varchar(110) NOT NULL,
  `q21` varchar(110) NOT NULL,
  `q22` varchar(110) NOT NULL,
  `q23` varchar(10) NOT NULL,
  `q24` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL,
  `date_take` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions1`
--

LOCK TABLES `questions1` WRITE;
/*!40000 ALTER TABLE `questions1` DISABLE KEYS */;
INSERT INTO `questions1` VALUES (1,'4 tahun','Ya','on,on,on','Tidak','Studi Lanjut','Studi Lanjut','Univ. Negeri Malang','MM','Beasiswa BIDIKMISI','4','4','4','4','4','4','4','4','dfdfdfd','sfafsa','sfsfsaf','sfsfs','sfafas','sfafasfa','Ya','Ya','KjqsRS6chQ','2021-05-26 19:23:31'),(2,'3.5 tahun','Ya','23232,2232,1231','Tidak','Studi Lanjut','1 sampai 3 bulan','Univ. Negeri Malang','MM','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','saffsa','asfasfasf','safasfasf','sfasfa','fsfsfsf','safasf','Ya','Ya','wvehdx8MQF','2021-05-26 19:27:39'),(3,'3.5 tahun','Ya',',,','Tidak','Studi Lanjut','1 sampai 3 bulan','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','saffsa','asfasfasf','safasfasf','sfasfa','fsfsfsf','safasf','Tidak','Tidak','aRoXexY95l','2021-05-26 19:29:07'),(4,'Kurang dari sama dengan 7 tahun','Tidak','','Tidak','Studi Lanjut','1 sampai 3 bulan','Univ. Negeri Jakarta','','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','saffsa','asfasfasf','safasfasf','sfasfa','fsfsfsf','safasf','Ya','Tidak','ozB8ZMqhDm','2021-05-26 19:33:36'),(5,'4 tahun','Ya',',,','Tidak','Studi Lanjut','4 sampai 6 bulan','Univ. Negeri Jakarta','TI','Biaya Sendiri / Keluarga','1','2','4','1','3','2','4','1','sfsfs','asfasfas','sfafsaf','sfsfs','wwww','ffff','Ya','Ya','Igko8vXeGM','2021-05-26 19:35:12'),(6,'3.5 tahun','Ya','0,0,0','Tidak','Studi Lanjut','4 sampai 6 bulan','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','ere','sd','s','d','a','fd','Ya','Ya','MAHiYaG1SN','2021-05-26 19:40:18'),(7,'3.5 tahun','Ya','0,0,0','Tidak','Studi Lanjut','4 sampai 6 bulan','Univ. Negeri Malang','MM','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','ere','sd','s','d','a','fd','Ya','Ya','hc4lCuQeV2','2021-05-26 19:41:56'),(8,'3.5 tahun','Ya','0,0,0','','Studi Lanjut','4 sampai 6 bulan','Univ. Negeri Malang','MM','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','ere','sd','s','d','a','fd','Ya','Ya','vAe8xpCIF4','2021-05-26 19:43:50'),(9,'3.5 tahun','Ya','23232,,','Iya','Studi Lanjut','4 sampai 6 bulan','Univ. Negeri Malang','MM','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','ere','sd','s','d','a','fd','Ya','Ya','CJsSeIOLVb','2021-05-26 19:49:18'),(10,'3.5 tahun','Ya',',0,0','Tidak','Studi Lanjut','1 sampai 3 bulan','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','2','4','1','1','4','2','4','3','s','f','fs','xx','fs','asad','Ya','Tidak','sWkmnq2RTb','2021-05-27 07:23:41'),(11,'3.5 tahun','Ya','1999,0,0','Tidak','Studi Lanjut','1 sampai 3 bulan','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','2','4','1','1','4','2','4','3','s','f','fs','xx','fs','asad','Ya','Tidak','JcnIt8rjD7','2021-05-27 07:25:52'),(12,'Kurang dari sama dengan 7 tahun','Tidak','','Tidak','Keduanya','1 sampai 3 bulan','Univ. Negeri Jakarta','TI','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','gfgf','ss','dasda','sfafs','sfafas','sfasfas','Ya','Ya','dBQFH4IUWs','2021-05-27 10:10:22'),(13,'Kurang dari sama dengan 5 tahun','Tidak','','Tidak','Keduanya','1 sampai 3 bulan','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','fff','saf','sgs','sgas','sgagsa','gsags','Ya','Ya','ME2PGi6lOy','2021-05-27 10:14:50'),(14,'Kurang dari sama dengan 5 tahun','Tidak','','Tidak','Keduanya','1 sampai 3 bulan','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','fff','saf','sgs','sgas','sgagsa','gsags','Ya','Ya','XHb87gIek9','2021-05-27 10:15:47'),(15,'Kurang dari sama dengan 7 tahun','Tidak','','Tidak','Keduanya','1 sampai 3 bulan','Univ. Negeri Malang','MM','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','sfasf','safasfa','sfafasf','sfasfaf','safasfsaf','safasf','Tidak','Tidak','uVvrWtbXNK','2021-05-27 10:17:59'),(16,'3.5 tahun','Tidak','','Tidak','Keduanya','1 sampai 3 bulan','Univ. Negeri Malang','MM','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','sfasf','safasfa','sfafasf','sfasfaf','safasfsaf','safasf','Tidak','Tidak','4EongYT7Sa','2021-05-27 10:19:41'),(17,'Kurang dari sama dengan 5 tahun','Tidak','','Tidak','Keduanya','1 sampai 3 bulan','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','safasf','sfasfa','sfafa','sfas','sfafas','fsafsa','Ya','Ya','gd2JzKDule','2021-05-27 10:21:13'),(18,'3.5 tahun','Tidak','','Tidak','Keduanya','1 sampai 3 bulan','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','sgasgsa','gsagsag','sgasga','gsagsa','gsgags','sagsa','Ya','Ya','S8N23W1wXh','2021-05-27 10:32:14'),(19,'Kurang dari sama dengan 7 tahun','Ya','1,2,3','Tidak','Keduanya','lebih dari 2 tahun','Univ. Negeri Malang','TI','Biaya Sendiri / Keluarga','4','4','4','4','4','4','4','4','sgasgsa','gsagsag','sgasga','gsagsa','gsgags','sagsa','Ya','Ya','SsFqRwo1CK','2021-05-27 10:33:39');
/*!40000 ALTER TABLE `questions1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions2`
--

DROP TABLE IF EXISTS `questions2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions2` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `q1` varchar(50) NOT NULL,
  `q2` varchar(10) NOT NULL,
  `q3` varchar(50) NOT NULL,
  `q4` varchar(50) NOT NULL,
  `q5_decission` varchar(50) NOT NULL,
  `q6` int NOT NULL,
  `q7a` varchar(50) DEFAULT NULL,
  `q7b` varchar(50) DEFAULT NULL,
  `q8` varchar(50) NOT NULL,
  `q9` varchar(50) NOT NULL,
  `q10` varchar(50) NOT NULL,
  `q11` varchar(10) NOT NULL,
  `q12` varchar(110) NOT NULL,
  `q13` varchar(10) NOT NULL,
  `q14` varchar(10) NOT NULL,
  `q15` varchar(10) NOT NULL,
  `q16` varchar(10) NOT NULL,
  `q17` varchar(10) NOT NULL,
  `q18` varchar(10) NOT NULL,
  `q19` varchar(10) NOT NULL,
  `q20` varchar(10) NOT NULL,
  `q21` varchar(110) NOT NULL,
  `q22` varchar(110) NOT NULL,
  `q23` varchar(110) NOT NULL,
  `q24` varchar(110) NOT NULL,
  `q25` varchar(110) NOT NULL,
  `q26` varchar(110) NOT NULL,
  `q27` varchar(10) NOT NULL,
  `q28` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL,
  `date_take` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions2`
--

LOCK TABLES `questions2` WRITE;
/*!40000 ALTER TABLE `questions2` DISABLE KEYS */;
INSERT INTO `questions2` VALUES (1,'Kurang dari sama dengan 6 tahun','Tidak','','Tidak','Bekerja',4,'Tokopedia','Programmer','10000000','total perolehan gaji S1/S2 :','Tingkat yang sama','Iya','Mantep','2','4','1','1','4','2','4','3','s','f','fs','xx','fs','asad','Ya','Tidak','7A34DhwsOj','2021-05-27 09:50:52'),(2,'3.5 tahun','Tidak','','Tidak','Bekerja',2,'Tokopedia','Programmer','10000000','total perolehan gaji S1/S2 :','Tingkat yang sama','Iya','Mantep','2','4','1','1','4','2','4','3','s','f','fs','xx','fs','asad','Ya','Tidak','P6BtG5CHin','2021-05-27 09:55:09'),(3,'Kurang dari sama dengan 6 tahun','Tidak','','Tidak','Bekerja',6,'Tokopedia','Programmer','5000000','10000000','Tingkat yang sama','Iya','Mantep','4','3','1','4','4','2','4','4','j','h','gg','hkh','hkhkh','khgkghkg','Ya','Ya','EJiP3be6XY','2021-05-27 10:05:20'),(4,'Kurang dari sama dengan 5 tahun','Tidak','','Tidak','Keduanya',3,'Tokopedia','Programmer','1000000','','Tidak perlu pendidikan Tinggi','Tidak','sgsgsgsg','4','4','4','4','4','4','4','4','fff','saf','sgs','sgas','sgagsa','gsags','Ya','Ya','XHb87gIek9','2021-05-27 10:15:47'),(5,'Kurang dari sama dengan 7 tahun','Tidak','','Tidak','Keduanya',2,'Tokopedia','Programmer','4','','Setingkat lebih rendah','Tidak','sdsdsadas','4','4','4','4','4','4','4','4','sfasf','safasfa','sfafasf','sfasfaf','safasfsaf','safasf','Tidak','Tidak','uVvrWtbXNK','2021-05-27 10:17:59'),(6,'Kurang dari sama dengan 6 tahun','Tidak','','Tidak','Bekerja',31,'Tokopedia','Programmer','3000000','','Setingkat yang lebih tinggi','Tidak','dg','4','4','4','4','4','4','4','4','dgsgsdg','asgasg','dgds','sags','weqq','sfasfa','Tidak','Ya','xiZPzWGpsN','2021-05-27 10:24:15'),(7,'Kurang dari sama dengan 7 tahun','Tidak','','Tidak','Bekerja',22,'Tokopedia','Programmer','2000000','31','Setingkat yang lebih tinggi','Iya','safasfas','4','4','4','4','4','4','4','4','safasfa','saf','sfas','fsfs','safsfa','sfasfa','Ya','Ya','ri8RazYsTk','2021-05-27 10:29:25'),(8,'Kurang dari sama dengan 6 tahun','Tidak','','Tidak','Bekerja',45,'Tokopedia','Programmer','1000000','156','Tingkat yang sama','Iya','sfasfas','4','4','4','4','4','4','4','4','sfas','safasfa','sfasf','sfasfa','safasfas','sfasfa','Tidak','Ya','4oZ69Lz80X','2021-05-27 10:30:13'),(9,'3.5 tahun','Tidak','','Tidak','Keduanya',4,'Tokopedia','IT','456','999','Setingkat yang lebih tinggi','Iya','sdfsaga','4','4','4','4','4','4','4','4','sgasgsa','gsagsag','sgasga','gsagsa','gsgags','sagsa','Ya','Ya','S8N23W1wXh','2021-05-27 10:32:15'),(10,'Kurang dari sama dengan 7 tahun','Ya','1,2,3','Tidak','Keduanya',232,'Tokopedia','IT','32','111','Setingkat yang lebih tinggi','Iya','sfsf','4','4','4','4','4','4','4','4','sgasgsa','gsagsag','sgasga','gsagsa','gsgags','sagsa','Ya','Ya','SsFqRwo1CK','2021-05-27 10:33:39');
/*!40000 ALTER TABLE `questions2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-27 17:38:44
