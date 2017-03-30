DROP DATABASE IF EXISTS odt_soft;

CREATE DATABASE odt_soft	

DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE odt_soft;	

DROP TABLE IF EXISTS users;	

CREATE TABLE users (

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  	`name` varchar(255) NOT NULL,
	`surname` varchar(255) NOT NULL,
	`cro` varchar(10) NOT NULL,
	`email`varchar(255) NOT NULL,
	`registration` int (11) NOT NULL,  
	`phone` varchar (255) NOT NULL,
	`phone2` varchar(255) NOT NULL, 
	`address` varchar(255) NOT NULL,
	`admission_date` date NOT NULL,
	`password` varchar(100) NOT NULL,
	`social_security` varchar (50) NOT NULL,
	`bank` varchar (255) NOT NULL,
	`number_of_account` varchar (255) NOT NULL,
	`agency` varchar(255) NOT NULL,
	`permition` int (11) NOT NULL

) ENGINE=InnoDB AUTO_INCREMENT=1;

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
	`responsible2` varchar(255),
	`telephone_r2` varchar(255),	
	`clinic` boolean,
	`physician_assistant` boolean,
	`name_phy_assistant` varchar(255),
	`telephone_phy_assistant` varchar(255),
	`speciality_phy_assistant` varchar(255)
) ENGINE=InnoDB AUTO_INCREMENT=1;
DROP TABLE IF EXISTS hospital;

CREATE TABLE hospital(

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(255) NOT NULL,
	`number_itu` int(5) NOT NULL,
	`number_bed` int(5) NOT NULL,
	`name_admin_itu` varchar(255) NOT NULL,
	`telephone_admin_itu` varchar(255) NOT NULL,
	`telephone_hospital`varchar(255) NOT NULL,
	`files` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1;

DROP TABLE IF EXISTS attendance;

CREATE TABLE attendance(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`patient`  int NOT NULL,
	`hospital` int NOT NULL,
	`itu` varchar (255) NOT NULL,
	`bed` varchar (255) NOT NULL,
	`admission_date_itu` date NOT NULL,
	`doctor_responsible` int  NOT NULL,
	`admission_cause` int NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1; 

CREATE TABLE admission_cause(
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`type` varchar (255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1; 


/* FOREIGN KEY */

ALTER TABLE attendance
ADD CONSTRAINT fk_doctor_responsable FOREIGN KEY (doctor_responsible) REFERENCES users(id);

ALTER TABLE users 
ADD CONSTRAINT fk_permition FOREIGN KEY (permition) REFERENCES permition(id);

ALTER TABLE attendance
ADD CONSTRAINT fk_admission_cause FOREIGN KEY (admission_cause) REFERENCES admission_cause(id);

ALTER TABLE attendance
ADD CONSTRAINT fk_hospital FOREIGN KEY (hospital) REFERENCES hospital(id);

ALTER TABLE attendance 
ADD CONSTRAINT fk_patient FOREIGN KEY (patient) REFERENCES patient(id);

/*INSERTS*/

INSERT INTO permition (type)
VALUES ('Auxiliar') , ('Dentista') , ('Administrador') , ('Auxiliar_Financeiro');

INSERT INTO admission_cause (type)
VALUES ('Oncologico') , ('Cardiopata') , ('Cirurgia') , ('Paliativo') , ('Urgente') , ('Quimioterapia') , ('Pulmonar') , ('IRC') , ('Neuropata');


