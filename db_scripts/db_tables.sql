DROP DATABASE IF EXISTS odt_soft;

CREATE DATABASE odt_soft;	

USE odt_soft;	

DROP TABLE IF EXISTS users;	

CREATE TABLE users (

  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `cro` varchar(10) NOT NULL,
  `email`varchar(255) NOT NULL,
  `registration` int (11) NOT NULL,  
  `phone` int (11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admission_date` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `social_security` varchar (50) NOT NULL,
  `bank` varchar (255) NOT NULL,
  `number_of_account` varchar (7) NOT NULL,
  `agency` int (11) NOT NULL,
  `permition` int (11) NOT NULL,
  `birthdate` date NOT NULL	

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS permition;


CREATE TABLE permition(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1;


DROP TABLE IF EXISTS patient;

CREATE TABLE patient(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	`name` varchar (255) NOT NULL,
	`surname` varchar(255) NOT NULL,
	`social_security` varchar (255) NOT NULL,
	`birthdate` varchar (255) NOT NULL,
	`gender` varchar (10) NOT NULL,
	`address` varchar(255) NOT NULL, 
	`neighborhood` varchar(255) NOT NULL,
	`city` varchar(255) NOT NULL,
	`state` varchar(255) NOT NULL,
	`zip_code` varchar(255) NOT NULL,
	`health_insurance` varchar(255) NOT NULL,
	`responsible1` varchar(255),
	`telephone_r1` varchar(255),
	`clinic` varchar(255) NOT NULL,            
	`responsible2` varchar(255),
	`telephone_r2` varchar(255)	
	`clinic` boolean,
	`physician_assistant` boolean,
	`name_phy_assistant` varchar(255),
	`telephone_phy_assistant` varchar(255),
	`speciality_phy_assistant` varchar(255)
	) 
	ENGINE=InnoDB AUTO_INCREMENT=1;
DROP TABLE IF EXISTS hospital;

CREATE TABLE hospital(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(255) NOT NULL,
	`number_itu` int(5) NOT NULL,
	`number_bed` int(5) NOT NULL,
	`name_chef_itu` varchar(255) NOT NULL,
	`telephone_chef_itu` varchar(255) NOT NULL,
	`telephone_hospital`varchar(255) NOT NULL,
	`files` varchar(255) NOT NULL
)
	ENGINE=InnoDB AUTO_INCREMENT=1;



 

ALTER TABLE users 
ADD CONSTRAINT fk_permition FOREIGN KEY (permition) REFERENCES permition (id);



