
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
DROP TABLE IF EXISTS `wp_wslusersprofiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wslusersprofiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `object_sha` varchar(45) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `profileurl` varchar(255) NOT NULL,
  `websiteurl` varchar(255) NOT NULL,
  `photourl` varchar(255) NOT NULL,
  `displayname` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `language` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `birthday` int(11) NOT NULL,
  `birthmonth` int(11) NOT NULL,
  `birthyear` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `emailverified` varchar(255) NOT NULL,
  `phone` varchar(75) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(75) NOT NULL,
  `region` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(25) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `user_id` (`user_id`),
  KEY `provider` (`provider`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_wslusersprofiles` WRITE;
/*!40000 ALTER TABLE `wp_wslusersprofiles` DISABLE KEYS */;
INSERT INTO `wp_wslusersprofiles` VALUES (1,2,'GitHub','b444066cee98538ab7840bf7a95da9a5d6ceaafd','168944','https://github.com/adjohn','','https://avatars.githubusercontent.com/u/168944?v=3','Adam Johnson','','','','','','',0,0,0,'adjohn@gmail.com','','','','','San Francisco, CA','',''),(2,3,'GitHub','367673c792f26e620e3a77729e69fd4996f53b64','67581','https://github.com/jdevesa','','https://avatars.githubusercontent.com/u/67581?v=3','Jaume Devesa','','','','','','',0,0,0,'devvesa@gmail.com','','','','','Barcelona','',''),(3,4,'GitHub','0380c53a0503b4823b004a424be69ddeafda2c14','501746','https://github.com/duarten','','https://avatars.githubusercontent.com/u/501746?v=3','Duarte Nunes','','','','','','',0,0,0,'duarte.m.nunes@gmail.com','','','','','Barcelona','',''),(4,5,'GitHub','bee146272b92340cebc7768b69aa402a50832d4b','393929','https://github.com/gdecandia','','https://avatars.githubusercontent.com/u/393929?v=3','Giuseppe (Pino) de Candia','','','','','','',0,0,0,'gdecandia@midokura.com','','','','','Barcelona','',''),(5,6,'GitHub','0a49a0e7a4f621ded28131681610a5b6fe45baef','2538460','https://github.com/intuitivepixel','','https://avatars.githubusercontent.com/u/2538460?v=3','Alessandro D\'Aquino','','','','','','',0,0,0,'alex@intuitivepixel.com','','','','','Spain','',''),(6,7,'GitHub','0da82f1a1060d45dd7d46480aa1a5f59302d60b2','9069090','https://github.com/jjmendozapons','','https://avatars.githubusercontent.com/u/9069090?v=3','jjmendozapons','','','','','','',0,0,0,'jjmendozapons@midokura.com','','','','','','',''),(7,8,'GitHub','89c8e190cb6b6df9706fdd5ad27854fac6684500','7732950','https://github.com/jfjoly','','https://avatars.githubusercontent.com/u/7732950?v=3','JF Joly','','','','','','',0,0,0,'joly.pro@gmail.com','','','','','','',''),(8,9,'GitHub','8634e533b29f0f1f3fe795a16c74f24f7ab1f0f2','7749218','https://github.com/techcet','','https://avatars.githubusercontent.com/u/7749218?v=3','techcet','','','','','','',0,0,0,'cynthia@midokura.com','','','','','','',''),(9,10,'GitHub','716c4b22d86b2972fcd7fd9a3ebf54d418cb0170','1396810','https://github.com/alonha','','https://avatars.githubusercontent.com/u/1396810?v=3','Alon Harel','','','','','','',0,0,0,'alonhrl.us@gmail.com','','','','','','',''),(10,11,'GitHub','d6f9a5df5640e1c4240e3e0af4fe5aa664a3d07d','2521859','https://github.com/alexbikfalvi','http://alex.bikfalvi.com','https://avatars.githubusercontent.com/u/2521859?v=3','Alex Bikfalvi','','','','','','',0,0,0,'alex.bikfalvi@midokura.com','','','','','','',''),(11,12,'GitHub','ead1448ba8b10bed38f712612f132a1980665181','2358475','https://github.com/agabert','http://www.midokura.com','https://avatars.githubusercontent.com/u/2358475?v=3','Alexander  Gabert','','','','','','',0,0,0,'alexander.gabert@gmail.com','','','','','Memmingen','',''),(12,13,'GitHub','fb72141c47860612a247713cfa58c67cc685d327','1768783','https://github.com/akane0715','','https://avatars.githubusercontent.com/u/1768783?v=3','akane0715','','','','','','',0,0,0,'akane@midokura.com','','','','','','',''),(13,14,'GitHub','0448e16a8c807d9decf0060e72db45f96cd28e71','4398025','https://github.com/nschiper','http://www.midokura.com/','https://avatars.githubusercontent.com/u/4398025?v=3','Nicolas Schiper','','','','','','',0,0,0,'nicolas.schiper@gmail.com','','','','','','',''),(14,15,'GitHub','f66dde83f0ad2d8f0f7d2906608da4896cb099a6','3242343','https://github.com/red-trela','http://www.mathys.io/','https://avatars.githubusercontent.com/u/3242343?v=3','Sandro Mathys','','','','','','',0,0,0,'sandro@mathys.io','','','','','Tokyo, Japan','',''),(15,16,'GitHub','bc12b676627bf4f7f83e5fa4b12edb1cb7cb6ace','346110','https://github.com/srvaroa','http://twitter.com/srvaroa','https://avatars.githubusercontent.com/u/346110?v=3','Galo Navarro','','','','','','',0,0,0,'galo@midokura.com','','','','','Barcelona','',''),(16,17,'GitHub','2b316e2c78ae5444e4064240f78d4605256e142e','4041895','https://github.com/susanwu88','','https://avatars.githubusercontent.com/u/4041895?v=3','susanwu88','','','','','','',0,0,0,'susan.n.wu@gmail.com','','','','','','',''),(17,18,'GitHub','bc115bf55d65495d2b0be3ce53d92d664361f4e4','54955','https://github.com/ivankelly','','https://avatars.githubusercontent.com/u/54955?v=3','Ivan Kelly','','','','','','',0,0,0,'ivan@ivankelly.net','','','','','Barcelona','',''),(18,19,'GitHub','6afffd5b5f0b66973c4e2c1e106ec33ab0b93ff4','619423','https://github.com/celebdor','','https://avatars.githubusercontent.com/u/619423?v=3','Antoni Segura Puimedon','','','','','','',0,0,0,'celebdor@gmail.com','','','','','','',''),(19,20,'GitHub','27818f29b92e9fd59735a9fafcaeab509e313f41','5316117','https://github.com/timfallmk','http://www.midokura.com/','https://avatars.githubusercontent.com/u/5316117?v=3','Tim','','','','','','',0,0,0,'tim@midokura.com','','','','','San Francisco','',''),(20,21,'GitHub','649544d08927d00104e0080275d48b78761ee870','11352141','https://github.com/orizuru','http://www.midokura.com','https://avatars.githubusercontent.com/u/11352141?v=3','Alexander Gabert','','','','','','',0,0,0,'alexander@midokura.com','','','','','Benningen','',''),(21,22,'GitHub','83542258a7de6f6196504af74fd478710e5537d1','1135937','https://github.com/xavileon','','https://avatars.githubusercontent.com/u/1135937?v=3','Xavier León','','','','','','',0,0,0,'xavi.leon@midokura.com','','','','','Barcelona, Spain','',''),(22,23,'GitHub','787cd7e6e018ec236edf634b46ba554a4d72333a','140613','https://github.com/tfukushima','','https://avatars.githubusercontent.com/u/140613?v=3','Taku Fukushima','','','','','','',0,0,0,'f.tac.mac@gmail.com','','','','','Azabudai, Tokyo','',''),(23,24,'GitHub','540931864d4228691643af382ba59d0d7852e698','8832980','https://github.com/hfchendrikx','','https://avatars.githubusercontent.com/u/8832980?v=3','hfchendrikx','','','','','','',0,0,0,'hfchendrikx@gmail.com','','','','','','',''),(24,25,'GitHub','1ef869b0260c79d97a44cd64d09d7840eac399ed','7555937','https://github.com/eartiaga','','https://avatars.githubusercontent.com/u/7555937?v=3','eartiaga','','','','','','',0,0,0,'eartiaga@users.noreply.github.com','','','','','','','');
/*!40000 ALTER TABLE `wp_wslusersprofiles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

