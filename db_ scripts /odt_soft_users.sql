
CREATE DATABASE odt_soft;	

use odt_soft;	

DROP TABLE IF EXISTS `users`;	

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `cro` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admission_date` date NOT NULL,
  `password` varchar(100) NOT NULL,
  'cpf' varchar (50) NOT NULL,
  'bank' varchar (255) NOT NULL,
  'number_of_account' varchar (255) NOT NULL,
  'agency' varchar (255) NOT NULL,
 	
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Joao','Silva','12345678df','999999999','zemail_email.com','1555-12-05','ceub'),(2,'João','Silva','12345678df','999999999','zemail@email.com','1555-12-05','ceub');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


