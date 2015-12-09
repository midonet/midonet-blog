
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
DROP TABLE IF EXISTS `wp_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text,
  `event` varchar(42) NOT NULL,
  `user` varchar(60) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_revisr` WRITE;
/*!40000 ALTER TABLE `wp_revisr` DISABLE KEYS */;
INSERT INTO `wp_revisr` VALUES (1,'2015-11-26 03:41:12','Successfully created a new repository.','init','Sandro_Mathys'),(2,'2015-11-27 03:08:30','Successfully backed up the database.','backup','Sandro_Mathys'),(3,'2015-11-27 03:08:30','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(4,'2015-11-27 03:09:07','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(5,'2015-11-27 03:11:23','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(6,'2015-11-27 03:11:40','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(7,'2015-11-27 03:12:30','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(8,'2015-11-27 03:22:33','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(9,'2015-11-27 03:23:13','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(10,'2015-11-27 03:28:02','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(11,'2015-11-27 03:31:06','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(12,'2015-11-27 04:09:25','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(13,'2015-11-27 04:27:39','Successfully pushed 1 commit to origin/master.','push','Sandro_Mathys'),(14,'2015-12-07 05:56:52','Successfully backed up the database.','backup','Sandro_Mathys'),(15,'2015-12-07 05:56:53','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(16,'2015-12-07 05:57:37','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(17,'2015-12-07 06:01:15','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(18,'2015-12-07 06:06:39','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(19,'2015-12-07 06:14:32','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(20,'2015-12-07 06:17:45','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(21,'2015-12-08 05:07:53','There was an error committing the changes to the local repository.','error','Sandro_Mathys'),(22,'2015-12-08 05:08:01','Committed <a href=\"https://blog.midonet.org/wp-admin/admin.php?page=revisr_view_commit&commit=d64ddb3&success=true\">#d64ddb3</a> to the local repository.','commit','Sandro_Mathys'),(23,'2015-12-08 05:08:08','Successfully pushed 1 commit to origin/master.','push','Sandro_Mathys'),(24,'2015-12-09 07:37:07','Successfully backed up the database.','backup','Sandro_Mathys'),(25,'2015-12-09 07:37:08','Committed <a href=\"https://blog.midonet.org/wp-admin/admin.php?page=revisr_view_commit&commit=d962354&success=true\">#d962354</a> to the local repository.','commit','Sandro_Mathys'),(26,'2015-12-09 07:37:15','Successfully pushed 1 commit to origin/master.','push','Sandro_Mathys');
/*!40000 ALTER TABLE `wp_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

