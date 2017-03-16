DROP DATABASE IF EXISTS `odt_soft`;

CREATE DATABASE odt_soft;	

USE odt_soft;	

DROP TABLE IF EXISTS `users`;	

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `cro` varchar(10) NOT NULL,
  `email`varchar(255) NOT NULL,
  `matricula`varchar(255) NOT NULL,  
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admission_date` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpf` varchar (50) NOT NULL,
  `bank` varchar (255) NOT NULL,
  `number_of_account` varchar (255) NOT NULL,
  `agency` varchar (255) NOT NULL,
 	
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `permition`;

CREATE TABLE `permission`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`permission` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `paciente`;

CREATE TABLE `paciente`(
	`id` int (255) NOT NULL AUTO_INCREMENT, 
	`name` varchar(255) NOT NULL,
	`birthdate` varchar (255) NOT NULL,
	`gender`
	`address` varchar(255) NOT NULL, 
	`bairro` varchar(255) NOT NULL,
	`city` varchar(255) NOT NULL,
	`UF` varchar(255) NOT NULL,
	`CEP` varchar(255) NOT NULL,
	`hospital` varchar(255) NOT NULL,
	`plano_de_saude` varchar(255) NOT NULL,
	`responsable` varchar(255),
	`telephone_r` varchar(255),
	`prontuario` varchar(255) NOT NULL ,
	`clinica` varchar(255) NOT NULL ,            
	
	PRIMARY KEY (`id`)
	) 
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


)

INSERT INTO permission (permission)
VALUES ('auxilar');

SELECT permission FROM permission; 

INSERT INTO users (name, surname, cro, email, matricula, phone, address, admission_date, password, cpf, bank, number_of_account, agency)
VALUES ('joana', 'marquinhos', '123456123', 'sadhfkjashdlfjhasdf@sdfjkl.asdjfklj', '123546', '18519846546', 'gjasdkjasgasdjgkljasá', '1224/12/21', 'qwer', '1231821654', 'jonas', '1232465', '12354687');

SELECT * FROM users;
