
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
DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=594 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','adjohn'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(11,1,'wp_user_level','10'),(12,1,'dismissed_wp_pointers','wp350_media,wp360_revisions,wp360_locks,wp390_widgets,wp410_dfw'),(13,1,'show_welcome_panel','1'),(15,1,'wp_dashboard_quick_press_last_post_id','462'),(16,1,'wp_user-settings','libraryContent=browse&editor=html&advImgDetails=show'),(17,1,'wp_user-settings-time','1429199800'),(18,1,'managenav-menuscolumnshidden','a:4:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";}'),(19,1,'metaboxhidden_nav-menus','a:3:{i:0;s:8:\"add-post\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-post_format\";}'),(20,1,'nav_menu_recently_edited','2'),(21,2,'nickname','Adam_Johnson'),(22,2,'first_name',''),(23,2,'last_name',''),(24,2,'description',''),(25,2,'rich_editing','true'),(26,2,'comment_shortcuts','false'),(27,2,'admin_color','fresh'),(28,2,'use_ssl','0'),(29,2,'show_admin_bar_front','true'),(30,2,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(31,2,'wp_user_level','10'),(32,2,'wsl_current_provider','GitHub'),(33,2,'wsl_current_user_image','https://avatars.githubusercontent.com/u/168944?v=3'),(34,2,'session_tokens','a:1:{s:64:\"6e66b389d135d924541e3a7e3309a80ab40b89d7154142e1dd1845bfec73d556\";a:4:{s:10:\"expiration\";i:1444336684;s:2:\"ip\";s:13:\"50.184.217.48\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.42 Safari/537.36\";s:5:\"login\";i:1443127084;}}'),(35,2,'wp_dashboard_quick_press_last_post_id','522'),(36,2,'dismissed_wp_pointers','wp350_media,wp360_revisions,wp360_locks,wp410_dfw'),(37,2,'wp_user-settings','editor=tinymce&libraryContent=browse&align=none&urlbutton=none&imgsize=thumbnail&advImgDetails=show'),(38,2,'wp_user-settings-time','1430330575'),(39,2,'nav_menu_recently_edited','2'),(40,2,'managenav-menuscolumnshidden','a:4:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";}'),(41,2,'metaboxhidden_nav-menus','a:3:{i:0;s:8:\"add-post\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-post_format\";}'),(42,2,'meta-box-order_toplevel_page_wpsso-general','a:0:{}'),(43,2,'metaboxhidden_toplevel_page_wpsso-general','a:0:{}'),(44,2,'closedpostboxes_toplevel_page_wpsso-general','a:0:{}'),(45,3,'nickname','Jaume_Devesa'),(46,3,'first_name',''),(47,3,'last_name',''),(48,3,'description',''),(49,3,'rich_editing','true'),(50,3,'comment_shortcuts','false'),(51,3,'admin_color','fresh'),(52,3,'use_ssl','0'),(53,3,'show_admin_bar_front','true'),(54,3,'wp_capabilities','a:1:{s:6:\"author\";b:1;}'),(55,3,'wp_user_level','2'),(56,3,'wsl_current_provider','GitHub'),(57,3,'wsl_current_user_image','https://avatars.githubusercontent.com/u/67581?v=3'),(58,3,'session_tokens','a:1:{s:64:\"59c9460c60bd0e54da56453af780bdfdeb318984c15fb55e0b805e348615f930\";i:1417423391;}'),(59,3,'wpseo_title',''),(60,3,'wpseo_metadesc',''),(61,3,'wpseo_metakey',''),(62,3,'wpseo_excludeauthorsitemap',''),(63,3,'_yoast_wpseo_profile_updated','1429493777'),(64,3,'googleplus',''),(65,3,'twitter',''),(66,3,'facebook',''),(67,4,'nickname','duarten'),(68,4,'first_name',''),(69,4,'last_name',''),(70,4,'description',''),(71,4,'rich_editing','true'),(72,4,'comment_shortcuts','false'),(73,4,'admin_color','fresh'),(74,4,'use_ssl','0'),(75,4,'show_admin_bar_front','true'),(76,4,'wp_capabilities','a:1:{s:6:\"author\";b:1;}'),(77,4,'wp_user_level','2'),(78,4,'wsl_current_provider','GitHub'),(79,4,'wsl_current_user_image','https://avatars.githubusercontent.com/u/501746?v=3'),(80,4,'session_tokens','a:1:{s:64:\"21213e8803a55c1e7e3e20e441c96d20afb518ba221c0eefaddef3ceaa8c872f\";i:1417440335;}'),(81,4,'_yoast_wpseo_profile_updated','1416248873'),(82,4,'googleplus',''),(83,4,'twitter',''),(84,4,'facebook',''),(85,5,'nickname','Giuseppe_Pino_de_Candia'),(86,5,'first_name',''),(87,5,'last_name',''),(88,5,'description',''),(89,5,'rich_editing','true'),(90,5,'comment_shortcuts','false'),(91,5,'admin_color','fresh'),(92,5,'use_ssl','0'),(93,5,'show_admin_bar_front','true'),(94,5,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(95,5,'wp_user_level','7'),(96,5,'wsl_current_provider','GitHub'),(97,5,'wsl_current_user_image','https://avatars.githubusercontent.com/u/393929?v=3'),(98,5,'session_tokens','a:1:{s:64:\"f8a9d959df9d0fbc4a5cbd3d9f8defc28dedc214bdb5849a6f39ce7d0e06dd5f\";a:4:{s:10:\"expiration\";i:1429378348;s:2:\"ip\";s:14:\"188.87.195.226\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.104 Safari/537.36\";s:5:\"login\";i:1428168748;}}'),(99,5,'wpseo_title',''),(100,5,'wpseo_metadesc',''),(101,5,'wpseo_metakey',''),(102,5,'wpseo_excludeauthorsitemap',''),(103,5,'_yoast_wpseo_profile_updated','1416248854'),(104,5,'googleplus',''),(105,5,'twitter',''),(106,5,'facebook',''),(107,4,'wpseo_title',''),(108,4,'wpseo_metadesc',''),(109,4,'wpseo_metakey',''),(110,4,'wpseo_excludeauthorsitemap',''),(111,6,'nickname','Alessandro_DAquino'),(112,6,'first_name',''),(113,6,'last_name',''),(114,6,'description',''),(115,6,'rich_editing','true'),(116,6,'comment_shortcuts','false'),(117,6,'admin_color','fresh'),(118,6,'use_ssl','0'),(119,6,'show_admin_bar_front','true'),(120,6,'wp_capabilities','a:1:{s:6:\"author\";b:1;}'),(121,6,'wp_user_level','2'),(122,6,'wsl_current_provider','GitHub'),(123,6,'wsl_current_user_image','https://avatars.githubusercontent.com/u/2538460?v=3'),(124,6,'session_tokens','a:1:{s:64:\"d8efe2dfd041c6b75d1b5d36c5e1c452e3a920742b7767d33545ec047387b023\";a:4:{s:10:\"expiration\";i:1429433142;s:2:\"ip\";s:13:\"188.77.254.49\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.104 Safari/537.36\";s:5:\"login\";i:1428223542;}}'),(125,6,'wpseo_title',''),(126,6,'wpseo_metadesc',''),(127,6,'wpseo_metakey',''),(128,6,'wpseo_excludeauthorsitemap',''),(129,6,'_yoast_wpseo_profile_updated','1416251914'),(130,6,'googleplus',''),(131,6,'twitter',''),(132,6,'facebook',''),(133,6,'wp_dashboard_quick_press_last_post_id','278'),(134,6,'dismissed_wp_pointers','wp350_media'),(135,7,'nickname','jjmendozapons'),(136,7,'first_name',''),(137,7,'last_name',''),(138,7,'description',''),(139,7,'rich_editing','true'),(140,7,'comment_shortcuts','false'),(141,7,'admin_color','fresh'),(142,7,'use_ssl','0'),(143,7,'show_admin_bar_front','true'),(144,7,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(145,7,'wp_user_level','7'),(146,7,'wsl_current_provider','GitHub'),(147,7,'wsl_current_user_image','https://avatars.githubusercontent.com/u/9069090?v=3'),(148,7,'session_tokens','a:1:{s:64:\"4c30633da06feab2355b159af1461adcf41f74fb76ec1b882c8b356b686e0b32\";a:4:{s:10:\"expiration\";i:1440426543;s:2:\"ip\";s:12:\"2.137.72.223\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.134 Safari/537.36\";s:5:\"login\";i:1439216943;}}'),(149,7,'wpseo_title',''),(150,7,'wpseo_metadesc',''),(151,7,'wpseo_metakey',''),(152,7,'wpseo_excludeauthorsitemap',''),(153,7,'_yoast_wpseo_profile_updated','1417537731'),(154,7,'googleplus',''),(155,7,'twitter',''),(156,7,'facebook',''),(157,8,'nickname','JF_Joly'),(158,8,'first_name',''),(159,8,'last_name',''),(160,8,'description',''),(161,8,'rich_editing','true'),(162,8,'comment_shortcuts','false'),(163,8,'admin_color','fresh'),(164,8,'use_ssl','0'),(165,8,'show_admin_bar_front','true'),(166,8,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(167,8,'wp_user_level','7'),(168,8,'wsl_current_provider','GitHub'),(169,8,'wsl_current_user_image','https://avatars.githubusercontent.com/u/7732950?v=3'),(171,5,'dismissed_wp_pointers','wp350_media,wp360_revisions,wp360_locks,wp410_dfw'),(172,5,'wp_user-settings','libraryContent=browse&editor=html&wplink=1&hidetb=1&post_dfw=off'),(173,5,'wp_user-settings-time','1428594424'),(174,5,'wp_dashboard_quick_press_last_post_id','283'),(175,8,'wpseo_title',''),(176,8,'wpseo_metadesc',''),(177,8,'wpseo_metakey',''),(178,8,'wpseo_excludeauthorsitemap',''),(179,8,'_yoast_wpseo_profile_updated','1417537671'),(180,8,'googleplus',''),(181,8,'twitter',''),(182,8,'facebook',''),(183,9,'nickname','techcet'),(184,9,'first_name',''),(185,9,'last_name',''),(186,9,'description',''),(187,9,'rich_editing','true'),(188,9,'comment_shortcuts','false'),(189,9,'admin_color','fresh'),(190,9,'use_ssl','0'),(191,9,'show_admin_bar_front','true'),(192,9,'wp_capabilities','a:1:{s:6:\"author\";b:1;}'),(193,9,'wp_user_level','2'),(194,9,'wsl_current_provider','GitHub'),(195,9,'wsl_current_user_image','https://avatars.githubusercontent.com/u/7749218?v=3'),(196,9,'session_tokens','a:1:{s:64:\"ac60b4e0acb3184c91ebd52ae1b3c80a2625d880d3cc3aa96a2984389707e07f\";i:1418748050;}'),(197,9,'wpseo_title',''),(198,9,'wpseo_metadesc',''),(199,9,'wpseo_metakey',''),(200,9,'wpseo_excludeauthorsitemap',''),(201,9,'_yoast_wpseo_profile_updated','1417538471'),(202,9,'googleplus',''),(203,9,'twitter',''),(204,9,'facebook',''),(205,9,'wp_dashboard_quick_press_last_post_id','118'),(206,9,'dismissed_wp_pointers','wp350_media'),(207,10,'nickname','Alon_Harel'),(208,10,'first_name','Alon'),(209,10,'last_name','Harel'),(210,10,'description',''),(211,10,'rich_editing','true'),(212,10,'comment_shortcuts','false'),(213,10,'admin_color','fresh'),(214,10,'use_ssl','0'),(215,10,'show_admin_bar_front','true'),(216,10,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(217,10,'wp_user_level','7'),(218,10,'wsl_current_provider','GitHub'),(219,10,'wsl_current_user_image','https://avatars.githubusercontent.com/u/1396810?v=3'),(221,10,'_yoast_wpseo_profile_updated','1417548952'),(222,10,'googleplus',''),(223,10,'twitter',''),(224,10,'facebook',''),(225,10,'wp_user-settings','mfold=f&hidetb=1&libraryContent=browse&editor=tinymce'),(226,10,'wp_user-settings-time','1417639625'),(227,10,'wpseo_title',''),(228,10,'wpseo_metadesc',''),(229,10,'wpseo_metakey',''),(230,10,'wpseo_excludeauthorsitemap',''),(231,10,'session_tokens','a:1:{s:64:\"bde9ff2c5a8b12e652d4a094b18082342783d323f0b5d9f7c4015724696cf258\";i:1418759181;}'),(232,10,'wp_dashboard_quick_press_last_post_id','134'),(233,10,'dismissed_wp_pointers','wp350_media,wp360_revisions'),(234,8,'dismissed_wp_pointers','wp350_media,wp360_revisions,wp410_dfw'),(235,8,'wp_user-settings','hidetb=1&editor=html&libraryContent=browse&post_dfw=off'),(236,8,'wp_user-settings-time','1447415753'),(237,11,'nickname','Alex_Bikfalvi'),(238,11,'first_name',''),(239,11,'last_name',''),(240,11,'description',''),(241,11,'rich_editing','true'),(242,11,'comment_shortcuts','false'),(243,11,'admin_color','fresh'),(244,11,'use_ssl','0'),(245,11,'show_admin_bar_front','true'),(246,11,'wp_capabilities','a:1:{s:6:\"author\";b:1;}'),(247,11,'wp_user_level','2'),(248,11,'wsl_current_provider','GitHub'),(249,11,'wsl_current_user_image','https://avatars.githubusercontent.com/u/2521859?v=3'),(250,11,'session_tokens','a:1:{s:64:\"f88661b33faf928a4e40dfa9126b910b551c158f93dc45884a4a739efb548e07\";i:1420563754;}'),(252,12,'nickname','Alexander_Gabert'),(253,12,'first_name','Alexander'),(254,12,'last_name','Gabert'),(255,12,'description','i write text into terminals to make servers do important things.'),(256,12,'rich_editing','true'),(257,12,'comment_shortcuts','false'),(258,12,'admin_color','fresh'),(259,12,'use_ssl','0'),(260,12,'show_admin_bar_front','true'),(261,12,'wp_capabilities','a:1:{s:6:\"author\";b:1;}'),(262,12,'wp_user_level','2'),(263,12,'wsl_current_provider','GitHub'),(264,12,'wsl_current_user_image','https://avatars.githubusercontent.com/u/2358475?v=3'),(265,12,'session_tokens','a:1:{s:64:\"896e04f7bd4b134c69f9dbb1bae523b96756da21b067cca971c44b9c9e408361\";a:4:{s:10:\"expiration\";i:1439934210;s:2:\"ip\";s:13:\"84.179.86.249\";s:2:\"ua\";s:105:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36\";s:5:\"login\";i:1438724610;}}'),(266,12,'_yoast_wpseo_profile_updated','1438725809'),(267,12,'googleplus',''),(268,12,'twitter','shmctl'),(269,12,'facebook',''),(270,12,'wpseo_title',''),(271,12,'wpseo_metadesc',''),(272,12,'wpseo_metakey',''),(273,12,'wpseo_excludeauthorsitemap',''),(274,11,'wpseo_title',''),(275,11,'wpseo_metadesc',''),(276,11,'wpseo_metakey',''),(277,11,'wpseo_excludeauthorsitemap',''),(278,11,'_yoast_wpseo_profile_updated','1420409007'),(279,11,'googleplus',''),(280,11,'twitter',''),(281,11,'facebook',''),(282,12,'wp_dashboard_quick_press_last_post_id','449'),(283,12,'dismissed_wp_pointers','wp410_dfw'),(284,12,'wp_user-settings','libraryContent=browse'),(285,12,'wp_user-settings-time','1420418878'),(287,8,'wp_dashboard_quick_press_last_post_id','441'),(288,8,'session_tokens','a:1:{s:64:\"3180ed582663db580056952b3860f0d8429e3bc1926676047f442c673ec644ef\";a:4:{s:10:\"expiration\";i:1448546863;s:2:\"ip\";s:12:\"2.137.88.221\";s:2:\"ua\";s:82:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:42.0) Gecko/20100101 Firefox/42.0\";s:5:\"login\";i:1447337263;}}'),(289,8,'closedpostboxes_dashboard','a:0:{}'),(290,8,'metaboxhidden_dashboard','a:0:{}'),(291,13,'nickname','akane0715'),(292,13,'first_name',''),(293,13,'last_name',''),(294,13,'description',''),(295,13,'rich_editing','true'),(296,13,'comment_shortcuts','false'),(297,13,'admin_color','fresh'),(298,13,'use_ssl','0'),(299,13,'show_admin_bar_front','true'),(300,13,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(301,13,'wp_user_level','7'),(302,13,'wsl_current_provider','GitHub'),(303,13,'wsl_current_user_image','https://avatars.githubusercontent.com/u/1768783?v=3'),(304,13,'session_tokens','a:2:{s:64:\"4f7a048bf4471f6c09c8a1ed2aa114d0c31bcae79b490afa65fee321f2b573c9\";a:4:{s:10:\"expiration\";i:1425885134;s:2:\"ip\";s:14:\"153.134.67.245\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36\";s:5:\"login\";i:1424675534;}s:64:\"6aadbe665cca10d79c3044329f7bfd7c18082798f4df7d13619ce0551888fb77\";a:4:{s:10:\"expiration\";i:1426687696;s:2:\"ip\";s:14:\"202.215.32.229\";s:2:\"ua\";s:119:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.94 Safari/537.36\";s:5:\"login\";i:1425478096;}}'),(305,1,'session_tokens','a:1:{s:64:\"7c831211b05a566e0f1e8ae81a2d3ec0a6735caca4464a8069a3010fce65f6fe\";a:4:{s:10:\"expiration\";i:1438934269;s:2:\"ip\";s:13:\"50.184.217.48\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.15 Safari/537.36\";s:5:\"login\";i:1438761469;}}'),(306,13,'wpseo_title',''),(307,13,'wpseo_metadesc',''),(308,13,'wpseo_metakey',''),(309,13,'wpseo_excludeauthorsitemap',''),(310,13,'_yoast_wpseo_profile_updated','1424675565'),(311,13,'googleplus',''),(312,13,'twitter',''),(313,13,'facebook',''),(314,13,'wp_dashboard_quick_press_last_post_id','261'),(315,13,'dismissed_wp_pointers','wp410_dfw'),(316,13,'wp_user-settings','post_dfw=off&libraryContent=browse'),(317,13,'wp_user-settings-time','1425536440'),(318,14,'nickname','Nicolas_Schiper'),(319,14,'first_name',''),(320,14,'last_name',''),(321,14,'description',''),(322,14,'rich_editing','true'),(323,14,'comment_shortcuts','false'),(324,14,'admin_color','fresh'),(325,14,'use_ssl','0'),(326,14,'show_admin_bar_front','true'),(327,14,'wp_capabilities','a:1:{s:6:\"author\";b:1;}'),(328,14,'wp_user_level','2'),(329,14,'wsl_current_provider','GitHub'),(330,14,'wsl_current_user_image','https://avatars.githubusercontent.com/u/4398025?v=3'),(331,14,'session_tokens','a:2:{s:64:\"b851510fbc46e5385b88cf97e134f26f8f45e51b9016a7d0bcecda2605d850a1\";a:4:{s:10:\"expiration\";i:1432020905;s:2:\"ip\";s:12:\"84.75.55.158\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36\";s:5:\"login\";i:1430811305;}s:64:\"61bbcd17f9b59df9e83c92ace9c3b5e08be59c909308f9ef49c9ba5b0bebf6b4\";a:4:{s:10:\"expiration\";i:1432135893;s:2:\"ip\";s:12:\"84.75.55.158\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36\";s:5:\"login\";i:1431963093;}}'),(332,14,'_yoast_wpseo_profile_updated','1429493749'),(333,14,'googleplus',''),(334,14,'twitter',''),(335,14,'facebook',''),(336,6,'wp_user-settings','mfold=o'),(337,6,'wp_user-settings-time','1428223670'),(338,14,'dismissed_wp_pointers','wp410_dfw'),(339,14,'wp_user-settings','post_dfw=off&editor=html&hidetb=1'),(340,14,'wp_user-settings-time','1429520678'),(341,14,'wp_dashboard_quick_press_last_post_id','334'),(342,14,'AtD_options',''),(343,14,'AtD_check_when',''),(344,14,'AtD_guess_lang',''),(345,14,'AtD_ignored_phrases',''),(346,15,'nickname','red'),(347,15,'first_name','Sandro'),(348,15,'last_name','Mathys'),(349,15,'description','MidoNet Community Manager with a background in Java Software and Linux Systems Engineering. Based in Tokyo, Japan and the internet.'),(350,15,'rich_editing','true'),(351,15,'comment_shortcuts','false'),(352,15,'admin_color','midnight'),(353,15,'use_ssl','0'),(354,15,'show_admin_bar_front','true'),(355,15,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(356,15,'wp_user_level','10'),(357,15,'wsl_current_provider','GitHub'),(358,15,'wsl_current_user_image','https://avatars.githubusercontent.com/u/3242343?v=3'),(359,15,'session_tokens','a:3:{s:64:\"f3f811f0f8605d9e5f2a73fe861f5ded7316deb760cb34203a8b144af1a2e7cc\";a:4:{s:10:\"expiration\";i:1449716953;s:2:\"ip\";s:13:\"180.0.103.241\";s:2:\"ua\";s:104:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36\";s:5:\"login\";i:1448507353;}s:64:\"2507c1eea782cb825f6009d5904cdfc4332d0ed4c13539dba69c0dae01e383cb\";a:4:{s:10:\"expiration\";i:1449802621;s:2:\"ip\";s:10:\"10.0.0.113\";s:2:\"ua\";s:104:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36\";s:5:\"login\";i:1448593021;}s:64:\"e08a4293c8e1f4e4190a80fe60202abd612f495656af2ac1cc9bac8517de0e1f\";a:4:{s:10:\"expiration\";i:1450443164;s:2:\"ip\";s:10:\"10.0.0.113\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36\";s:5:\"login\";i:1449233564;}}'),(360,15,'_yoast_wpseo_profile_updated','1433728634'),(361,15,'googleplus','https://www.google.com/+SandroMathys'),(362,15,'twitter','red_trela'),(363,15,'facebook',''),(364,15,'wp_dashboard_quick_press_last_post_id','580'),(365,16,'nickname','Galo_Navarro'),(366,16,'first_name',''),(367,16,'last_name',''),(368,16,'description',''),(369,16,'rich_editing','true'),(370,16,'comment_shortcuts','false'),(371,16,'admin_color','fresh'),(372,16,'use_ssl','0'),(373,16,'show_admin_bar_front','true'),(374,16,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(375,16,'wp_user_level','7'),(376,16,'wsl_current_provider','GitHub'),(377,16,'wsl_current_user_image','https://avatars.githubusercontent.com/u/346110?v=3'),(378,16,'session_tokens','a:1:{s:64:\"5c229d81b8370a35ab339ec873a7999b9974be9383210ce3b324140c7476f2da\";a:4:{s:10:\"expiration\";i:1448364420;s:2:\"ip\";s:12:\"2.137.88.221\";s:2:\"ua\";s:82:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:42.0) Gecko/20100101 Firefox/42.0\";s:5:\"login\";i:1447154820;}}'),(379,16,'wp_dashboard_quick_press_last_post_id','554'),(380,17,'nickname','susanwu88'),(381,17,'first_name',''),(382,17,'last_name',''),(383,17,'description',''),(384,17,'rich_editing','true'),(385,17,'comment_shortcuts','false'),(386,17,'admin_color','fresh'),(387,17,'use_ssl','0'),(388,17,'show_admin_bar_front','true'),(389,17,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(390,17,'wp_user_level','7'),(391,17,'wsl_current_provider','GitHub'),(392,17,'wsl_current_user_image','https://avatars.githubusercontent.com/u/4041895?v=3'),(394,17,'_yoast_wpseo_profile_updated','1430330508'),(395,17,'googleplus',''),(396,17,'twitter',''),(397,17,'facebook',''),(398,17,'dismissed_wp_pointers','wp410_dfw,wp360_locks'),(399,18,'nickname','Ivan_Kelly'),(400,18,'first_name',''),(401,18,'last_name',''),(402,18,'description',''),(403,18,'rich_editing','true'),(404,18,'comment_shortcuts','false'),(405,18,'admin_color','fresh'),(406,18,'use_ssl','0'),(407,18,'show_admin_bar_front','true'),(408,18,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(409,18,'wp_user_level','7'),(410,18,'wsl_current_provider','GitHub'),(411,18,'wsl_current_user_image','https://avatars.githubusercontent.com/u/54955?v=3'),(412,18,'session_tokens','a:1:{s:64:\"45fbce8b1b85529408e22195d6a8f361379a6444fc96156558d37fa129bf34ba\";a:4:{s:10:\"expiration\";i:1443016410;s:2:\"ip\";s:10:\"83.45.7.48\";s:2:\"ua\";s:85:\"Mozilla/5.0 (X11; Linux x86_64; rv:31.0) Gecko/20100101 Firefox/31.0 Iceweasel/31.8.0\";s:5:\"login\";i:1441806810;}}'),(413,18,'_yoast_wpseo_profile_updated','1431022567'),(414,18,'googleplus',''),(415,18,'twitter',''),(416,18,'facebook',''),(417,18,'wp_dashboard_quick_press_last_post_id','337'),(418,18,'dismissed_wp_pointers','wp410_dfw'),(419,15,'dismissed_wp_pointers','wp410_dfw,wp390_widgets'),(420,15,'wp_user-settings','post_dfw=on&hidetb=1&advImgDetails=show&editor=tinymce&libraryContent=browse&urlbutton=custom&align=none&imgsize=full'),(421,15,'wp_user-settings-time','1441077700'),(422,18,'wp_user-settings','editor=html'),(423,18,'wp_user-settings-time','1431102534'),(424,19,'nickname','Antoni_Segura_Puimedon'),(425,19,'first_name',''),(426,19,'last_name',''),(427,19,'description',''),(428,19,'rich_editing','true'),(429,19,'comment_shortcuts','false'),(430,19,'admin_color','fresh'),(431,19,'use_ssl','0'),(432,19,'show_admin_bar_front','true'),(433,19,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(434,19,'wp_user_level','7'),(435,19,'wsl_current_provider','GitHub'),(436,19,'wsl_current_user_image','https://avatars.githubusercontent.com/u/619423?v=3'),(437,19,'session_tokens','a:2:{s:64:\"740e972fb70cb0ed7cc1c51beaca0180398ebfc68eaec08106419493580befa9\";a:4:{s:10:\"expiration\";i:1447736237;s:2:\"ip\";s:14:\"89.131.115.114\";s:2:\"ua\";s:68:\"Mozilla/5.0 (X11; Linux x86_64; rv:41.0) Gecko/20100101 Firefox/41.0\";s:5:\"login\";i:1446526637;}s:64:\"85f82c7921598a3e97efe181335e2070a95811527791bb2dd838432b47b95697\";a:4:{s:10:\"expiration\";i:1447775087;s:2:\"ip\";s:13:\"89.128.235.86\";s:2:\"ua\";s:104:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36\";s:5:\"login\";i:1446565487;}}'),(438,19,'_yoast_wpseo_profile_updated','1433318145'),(439,19,'googleplus',''),(440,19,'twitter',''),(441,19,'facebook',''),(442,20,'nickname','Tim'),(443,20,'first_name',''),(444,20,'last_name',''),(445,20,'description',''),(446,20,'rich_editing','true'),(447,20,'comment_shortcuts','false'),(448,20,'admin_color','fresh'),(449,20,'use_ssl','0'),(450,20,'show_admin_bar_front','true'),(451,20,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(452,20,'wp_user_level','7'),(453,20,'wsl_current_provider','GitHub'),(454,20,'wsl_current_user_image','https://avatars.githubusercontent.com/u/5316117?v=3'),(455,20,'session_tokens','a:2:{s:64:\"790d7c9dd484b5f0d52fded71eb302252bd32b4081633f13508690a2df221fea\";a:4:{s:10:\"expiration\";i:1435984587;s:2:\"ip\";s:14:\"204.28.118.157\";s:2:\"ua\";s:113:\"Mozilla/5.0 (X11; CrOS x86_64 7077.49.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.54 Safari/537.36\";s:5:\"login\";i:1434774987;}s:64:\"f27a6bb2859dd3f2aadeb5c539afc186128c21751255c1ceeed7b605d89dfb11\";a:4:{s:10:\"expiration\";i:1436155512;s:2:\"ip\";s:14:\"204.28.118.157\";s:2:\"ua\";s:112:\"Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2437.4 Safari/537.36\";s:5:\"login\";i:1434945912;}}'),(456,15,'nav_menu_recently_edited','2'),(457,15,'managenav-menuscolumnshidden','a:4:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";}'),(458,15,'metaboxhidden_nav-menus','a:3:{i:0;s:8:\"add-post\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-post_format\";}'),(459,15,'wpseo_title','Sandro Mathys'),(460,15,'wpseo_metadesc','MidoNet Community Manager'),(461,15,'wpseo_metakey',''),(462,15,'wpseo_excludeauthorsitemap',''),(463,15,'AtD_options','Bias Language,Cliches,Complex Expression,Diacritical Marks,Double Negative,Hidden Verbs,Jargon Language,Passive voice,Phrases to Avoid,Redundant Expression'),(464,15,'AtD_check_when','onpublish,onupdate'),(465,15,'AtD_guess_lang',''),(466,15,'AtD_ignored_phrases','MidoNet,Mathys,Midokura,OpenStack,MidoDay'),(467,15,'closedpostboxes_post','a:0:{}'),(468,15,'metaboxhidden_post','a:7:{i:0;s:12:\"revisionsdiv\";i:1;s:11:\"postexcerpt\";i:2;s:13:\"trackbacksdiv\";i:3;s:10:\"postcustom\";i:4;s:16:\"commentstatusdiv\";i:5;s:7:\"slugdiv\";i:6;s:9:\"authordiv\";}'),(469,19,'wp_dashboard_quick_press_last_post_id','532'),(470,17,'session_tokens','a:1:{s:64:\"50a75099ed7260fd365763c57f0ede16a44fc8026badb24f3501a2b59b21744a\";a:4:{s:10:\"expiration\";i:1439996974;s:2:\"ip\";s:13:\"24.143.224.62\";s:2:\"ua\";s:134:\"Mozilla/5.0 (iPhone; CPU iPhone OS 8_2 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12D508 Safari/600.1.4\";s:5:\"login\";i:1438787374;}}'),(471,17,'wp_dashboard_quick_press_last_post_id','370'),(472,20,'_yoast_wpseo_profile_updated','1434836869'),(473,20,'googleplus',''),(474,20,'twitter',''),(475,20,'facebook',''),(476,20,'closedpostboxes_post','a:0:{}'),(477,20,'metaboxhidden_post','a:5:{i:0;s:12:\"revisionsdiv\";i:1;s:11:\"postexcerpt\";i:2;s:13:\"trackbacksdiv\";i:3;s:10:\"postcustom\";i:4;s:16:\"commentstatusdiv\";}'),(478,20,'dismissed_wp_pointers','wp410_dfw,wp360_locks'),(479,20,'wp_user-settings','libraryContent=browse&post_dfw=off&editor=tinymce'),(480,20,'wp_user-settings-time','1434946953'),(481,20,'wp_dashboard_quick_press_last_post_id','410'),(482,21,'nickname','Alexander_Gabert_1'),(483,21,'first_name',''),(484,21,'last_name',''),(485,21,'description',''),(486,21,'rich_editing','true'),(487,21,'comment_shortcuts','false'),(488,21,'admin_color','fresh'),(489,21,'use_ssl','0'),(490,21,'show_admin_bar_front','true'),(491,21,'wp_capabilities','a:1:{s:10:\"subscriber\";b:1;}'),(492,21,'wp_user_level','0'),(493,21,'wsl_current_provider','GitHub'),(494,21,'wsl_current_user_image','https://avatars.githubusercontent.com/u/11352141?v=3'),(496,12,'AtD_options',''),(497,12,'AtD_check_when',''),(498,12,'AtD_guess_lang',''),(499,12,'AtD_ignored_phrases',''),(500,7,'wp_dashboard_quick_press_last_post_id','471'),(501,7,'dismissed_wp_pointers','wp410_dfw'),(502,7,'wp_user-settings','editor=html'),(503,7,'wp_user-settings-time','1439217141'),(504,15,'wpseo_dismissed_gsc_notice','1'),(505,15,'wpseo_seen_about_version','3.0.6'),(506,15,'wpseo_ignore_tour','1'),(507,15,'meta-box-order_dashboard','a:4:{s:6:\"normal\";s:66:\"dashboard_quick_press,dashboard_right_now,wpseo-dashboard-overview\";s:4:\"side\";s:18:\"dashboard_activity\";s:7:\"column3\";s:17:\"dashboard_primary\";s:7:\"column4\";s:0:\"\";}'),(508,16,'AtD_options',''),(509,16,'AtD_check_when',''),(510,16,'AtD_guess_lang',''),(511,16,'AtD_ignored_phrases',''),(512,16,'googleplus',''),(513,16,'twitter','srvaroa'),(514,16,'facebook',''),(515,16,'wp_user-settings','editor=html&hidetb=1'),(516,16,'wp_user-settings-time','1447156597'),(517,22,'nickname','Xavier_Leon'),(518,22,'first_name',''),(519,22,'last_name',''),(520,22,'description',''),(521,22,'rich_editing','true'),(522,22,'comment_shortcuts','false'),(523,22,'admin_color','fresh'),(524,22,'use_ssl','0'),(525,22,'show_admin_bar_front','true'),(526,22,'wp_capabilities','a:1:{s:10:\"subscriber\";b:1;}'),(527,22,'wp_user_level','0'),(528,22,'wsl_current_provider','GitHub'),(529,22,'wsl_current_user_image','https://avatars.githubusercontent.com/u/1135937?v=3'),(530,22,'session_tokens','a:1:{s:64:\"279cd3e1c8b49fbeff5f07c65d85e80d98ac2c6f55eeb6b59d11f5906e9e2c2c\";a:4:{s:10:\"expiration\";i:1443016807;s:2:\"ip\";s:10:\"83.45.7.48\";s:2:\"ua\";s:104:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36\";s:5:\"login\";i:1441807207;}}'),(531,23,'nickname','Taku_Fukushima'),(532,23,'first_name',''),(533,23,'last_name',''),(534,23,'description',''),(535,23,'rich_editing','true'),(536,23,'comment_shortcuts','false'),(537,23,'admin_color','fresh'),(538,23,'use_ssl','0'),(539,23,'show_admin_bar_front','true'),(540,23,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(541,23,'wp_user_level','7'),(542,23,'wsl_current_provider','GitHub'),(543,23,'wsl_current_user_image','https://avatars.githubusercontent.com/u/140613?v=3'),(544,23,'session_tokens','a:1:{s:64:\"f1fc266739a0cb911b2dcf457433368b0020e06309d8254b8832f34f7c23bcf7\";a:4:{s:10:\"expiration\";i:1444185652;s:2:\"ip\";s:13:\"220.254.1.135\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36\";s:5:\"login\";i:1442976052;}}'),(545,23,'wp_user-settings','mfold=o'),(546,23,'wp_user-settings-time','1442976145'),(547,2,'wpseo_ignore_tour','1'),(548,23,'_yoast_wpseo_profile_updated','1443127162'),(549,23,'wpseo_title',''),(550,23,'wpseo_metadesc',''),(551,23,'wpseo_metakey',''),(552,23,'wpseo_excludeauthorsitemap',''),(553,23,'googleplus',''),(554,23,'twitter',''),(555,23,'facebook',''),(556,24,'nickname','hfchendrikx'),(557,24,'first_name',''),(558,24,'last_name',''),(559,24,'description',''),(560,24,'rich_editing','true'),(561,24,'comment_shortcuts','false'),(562,24,'admin_color','fresh'),(563,24,'use_ssl','0'),(564,24,'show_admin_bar_front','true'),(565,24,'wp_capabilities','a:1:{s:10:\"subscriber\";b:1;}'),(566,24,'wp_user_level','0'),(567,24,'wsl_current_provider','GitHub'),(568,24,'wsl_current_user_image','https://avatars.githubusercontent.com/u/8832980?v=3'),(569,24,'session_tokens','a:1:{s:64:\"080c9688e9326614ebec052698900b0df12a17459524c289337145ad73ac839d\";a:4:{s:10:\"expiration\";i:1447058560;s:2:\"ip\";s:14:\"212.243.55.234\";s:2:\"ua\";s:76:\"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:41.0) Gecko/20100101 Firefox/41.0\";s:5:\"login\";i:1445848960;}}'),(570,24,'closedpostboxes_dashboard','a:0:{}'),(571,24,'metaboxhidden_dashboard','a:0:{}'),(572,24,'wp_user-settings','mfold=f'),(573,24,'wp_user-settings-time','1445941937'),(574,19,'wp_user-settings','libraryContent=browse&imgsize=medium'),(575,19,'wp_user-settings-time','1446570786'),(576,25,'nickname','eartiaga'),(577,25,'first_name',''),(578,25,'last_name',''),(579,25,'description',''),(580,25,'rich_editing','true'),(581,25,'comment_shortcuts','false'),(582,25,'admin_color','fresh'),(583,25,'use_ssl','0'),(584,25,'show_admin_bar_front','true'),(585,25,'wp_capabilities','a:1:{s:10:\"subscriber\";b:1;}'),(586,25,'wp_user_level','0'),(587,25,'wsl_current_provider','GitHub'),(588,25,'wsl_current_user_image','https://avatars.githubusercontent.com/u/7555937?v=3'),(589,25,'session_tokens','a:1:{s:64:\"f5416097cae7a4bbe7fab0a6756410dc788fd8db92fcf5d9ce1851d93aa5d1a2\";a:4:{s:10:\"expiration\";i:1448373575;s:2:\"ip\";s:12:\"2.137.88.221\";s:2:\"ua\";s:135:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/45.0.2454.101 Chrome/45.0.2454.101 Safari/537.36\";s:5:\"login\";i:1447163975;}}'),(590,15,'closedpostboxes_dashboard','a:0:{}'),(591,15,'metaboxhidden_dashboard','a:0:{}'),(592,15,'wporg_favorites',''),(593,15,'show_welcome_panel','0');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

