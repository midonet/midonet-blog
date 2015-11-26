
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
DROP TABLE IF EXISTS `wp_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_users` WRITE;
/*!40000 ALTER TABLE `wp_users` DISABLE KEYS */;
INSERT INTO `wp_users` VALUES (1,'adjohn','$P$BLEfnm50rG9VewXPTffl0mmwODUg8F/','adjohn','adam@midokura.com','','2014-11-13 07:52:59','',0,'adjohn'),(2,'Adam_Johnson','$P$BlJltB.9pswif0Nqo0bpwBC41x9z3h.','adam_johnson','adjohn@gmail.com','https://github.com/adjohn','2014-11-15 03:59:45','',0,'Adam Johnson'),(3,'Jaume_Devesa','$P$Btb5L.DsGgrJ4XAK2NiP75P3VGFZQ1/','jaume_devesa','devvesa@gmail.com','https://github.com/jdevesa','2014-11-17 08:43:11','',0,'Jaume Devesa'),(4,'Duarte_Nunes','$P$BeBfKkwUZLHqCqYN4zK.9S/Y2wN1660','duarte_nunes','duarte@midokura.com','https://github.com/duarten','2014-11-17 13:25:35','',0,'Duarte Nunes'),(5,'Giuseppe_Pino_de_Candia','$P$BEmuuQKWBND14alqW7KNKUreeMrtLW/','giuseppe_pino_de_candia','gdecandia@midokura.com','https://github.com/gdecandia','2014-11-17 15:00:05','',0,'Giuseppe (Pino) de Candia'),(6,'Alessandro_DAquino','$P$BEh3RGjbZma5yvX5MOl/7oXXr0s6Xz0','alessandro_daquino','alex@midokura.com','https://github.com/intuitivepixel','2014-11-17 19:11:05','',0,'Alessandro D\'Aquino'),(7,'jjmendozapons','$P$BRw8G3laUdylnBS7OAsrtPXZY5DSTA/','jjmendozapons','jjmendozapons@midokura.com','https://github.com/jjmendozapons','2014-11-17 19:43:06','',0,'jjmendozapons'),(8,'JF_Joly','$P$BKUiyUrxituT7a5UcvHbzaJT.QxcA1/','jf_joly','joly.pro@gmail.com','https://github.com/jfjoly','2014-11-25 10:10:43','',0,'JF Joly'),(9,'techcet','$P$BTL9V2PY0tq11JlWi7gMApLxNG4l410','techcet','cynthia@midokura.com','https://github.com/techcet','2014-12-02 16:40:50','',0,'techcet'),(10,'Alon_Harel','$P$BbbJKlwPwz6xAEK0JK4LEMK3VzDLAQ0','alon_harel','alonhrl.us@gmail.com','https://github.com/alonha','2014-12-02 19:15:24','',0,'Alon Harel'),(11,'Alex_Bikfalvi','$P$BL15SRo/fV3xJUHt9DnA5m/H78JwqB/','alex_bikfalvi','alex.bikfalvi@midokura.com','https://github.com/alexbikfalvi','2014-12-23 17:02:33','',0,'Alex Bikfalvi'),(12,'Alexander_Gabert','$P$BgVTgtzuBMWiG8OhFpcmKWC3pl5401.','alexander_gabert','alexander.gabert@gmail.com','https://github.com/agabert','2015-01-04 21:56:49','',0,'Alexander Gabert'),(13,'akane0715','$P$B4aBP0H.Ydavb7O.j5BWbw.Fpjw1dm1','akane0715','akane@midokura.com','https://github.com/akane0715','2015-02-23 07:12:14','',0,'akane0715'),(14,'Nicolas_Schiper','$P$BUcuUc0AimbOiOpL0oCWf9zHhD/tsq1','nicolas_schiper','nicolas.schiper@gmail.com','https://github.com/nschiper','2015-03-27 09:25:52','',0,'Nicolas Schiper'),(15,'Sandro_Mathys','$P$BmijWIrfQp/KoNob/eKPMZ1CDC68uP/','sandro_mathys','sandro@midokura.com','http://www.mathys.io/','2015-04-20 01:38:35','',0,'Sandro Mathys'),(16,'Galo_Navarro','$P$BzfWiMO8RTTyIW/sWAjn6EANSPlEda0','galo_navarro','galo@midokura.com','https://github.com/srvaroa','2015-04-20 09:00:15','',0,'Galo Navarro'),(17,'susanwu88','$P$BmlvwGxztgrh/I799ccfGEshqLoOqy1','susanwu88','susan.n.wu@gmail.com','https://github.com/susanwu88','2015-04-29 17:58:42','',0,'susanwu88'),(18,'Ivan_Kelly','$P$BRQfwHwMG6ivChRCpI129zVaW1uDkg.','ivan_kelly','ivan@ivankelly.net','https://github.com/ivankelly','2015-05-07 18:14:18','',0,'Ivan Kelly'),(19,'Antoni_Segura_Puimedon','$P$BkZunRc2TwKpwqbOx08kfc5o8p61T3.','antoni_segura_puimedon','celebdor@gmail.com','https://github.com/celebdor','2015-06-03 07:54:49','',0,'Antoni Segura Puimedon'),(20,'Tim','$P$BuDwpvk8M5DEL4FdOOjgt95M5qbqgF/','tim','tim@midokura.com','https://github.com/timfallmk','2015-06-04 16:00:29','',0,'Tim'),(21,'Alexander_Gabert_1','$P$BR9Nr4KUKzphMwOF/mgnrwfjgQXdcQ.','alexander_gabert_1','alexander@midokura.com','https://github.com/orizuru','2015-08-04 21:42:43','',0,'Alexander Gabert'),(22,'Xavier_Leon','$P$BcPtU0sDgnFOJVD54OdfAWaVGO98ly0','xavier_leon','xavi.leon@midokura.com','https://github.com/xavileon','2015-09-09 14:00:07','',0,'Xavier León'),(23,'Taku_Fukushima','$P$BpFlTnkxxZjHAOw/KnenF9srJ0FDGg.','taku_fukushima','f.tac.mac@gmail.com','https://github.com/tfukushima','2015-09-23 02:40:52','',0,'Taku Fukushima'),(24,'hfchendrikx','$P$B7a4OzRM2MSElgEY0r6KXjCuvP4IBk/','hfchendrikx','hfchendrikx@gmail.com','https://github.com/hfchendrikx','2015-10-26 08:42:40','',0,'hfchendrikx'),(25,'eartiaga','$P$BQnqZtBl01eQyy6uvMekCeRWE/N1zO1','eartiaga','eartiaga@users.noreply.github.com','https://github.com/eartiaga','2015-11-10 13:59:35','',0,'eartiaga');
/*!40000 ALTER TABLE `wp_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

