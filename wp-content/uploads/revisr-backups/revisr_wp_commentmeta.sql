
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
DROP TABLE IF EXISTS `wp_commentmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=1256 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_commentmeta` WRITE;
/*!40000 ALTER TABLE `wp_commentmeta` DISABLE KEYS */;
INSERT INTO `wp_commentmeta` VALUES (1,112,'hc_post_as','twitter'),(2,112,'hc_avatar','http://pbs.twimg.com/profile_images/2808908696/1a4c3f6715e45527e609f5d8468ed13f_normal.jpeg'),(3,112,'hc_foreign_user_id','40793201'),(363,395,'hc_post_as','wordpress'),(364,395,'hc_avatar','http://1.gravatar.com/avatar/46f2076c53ce1370f7074d7e33c0893c?s=25&d=https%3A%2F%2Fs2.wp.com%2Fwp-content%2Fmu-plugins%2Fhighlander-comments%2Fimages%2Fwplogo.png&r=G'),(365,395,'hc_foreign_user_id','13230220'),(366,395,'hc_wpcom_id_sig','0a6fc719c1106bc7c330194413e09589ac88acfe'),(1113,508,'akismet_result','false'),(1114,508,'akismet_history','a:2:{s:4:\"time\";d:1443504288.0545869;s:5:\"event\";s:9:\"check-ham\";}'),(1116,508,'akismet_history','a:3:{s:4:\"time\";d:1443504330.074573;s:5:\"event\";s:15:\"status-approved\";s:4:\"user\";s:13:\"Sandro_Mathys\";}'),(1136,514,'akismet_result','false'),(1137,514,'akismet_history','a:2:{s:4:\"time\";d:1443572288.502553;s:5:\"event\";s:9:\"check-ham\";}'),(1139,514,'akismet_history','a:3:{s:4:\"time\";d:1443579901.794189;s:5:\"event\";s:15:\"status-approved\";s:4:\"user\";s:13:\"Sandro_Mathys\";}'),(1249,546,'akismet_result','false'),(1250,546,'akismet_history','a:2:{s:4:\"time\";d:1446593270.9553361;s:5:\"event\";s:9:\"check-ham\";}'),(1252,546,'akismet_history','a:3:{s:4:\"time\";d:1446622379.10009;s:5:\"event\";s:15:\"status-approved\";s:4:\"user\";s:13:\"Sandro_Mathys\";}'),(1253,547,'akismet_result','true'),(1254,547,'akismet_history','a:2:{s:4:\"time\";d:1449427431.6344631;s:5:\"event\";s:10:\"check-spam\";}'),(1255,547,'akismet_as_submitted','a:13:{s:14:\"comment_author\";s:3:\"xxx\";s:20:\"comment_author_email\";s:23:\"eula.stoltzfus@arcor.de\";s:18:\"comment_author_url\";s:15:\"http://beeg.com\";s:15:\"comment_content\";s:222:\"Hi are using Wordpress for your blog platform?\r\nI\'m new to the blog world but I\'m trying to get started and set up my own. Do you require any coding \r\nknowledge to make your own blog? Any help would be greatly appreciated!\";s:12:\"comment_type\";s:0:\"\";s:7:\"user_ID\";i:0;s:7:\"user_id\";i:0;s:7:\"user_ip\";s:10:\"10.0.0.113\";s:10:\"user_agent\";s:113:\"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.85 Safari/537.36\";s:4:\"blog\";s:24:\"https://blog.midonet.org\";s:9:\"blog_lang\";s:5:\"en_US\";s:12:\"blog_charset\";s:5:\"UTF-8\";s:9:\"permalink\";s:37:\"https://blog.midonet.org/back-future/\";}');
/*!40000 ALTER TABLE `wp_commentmeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

