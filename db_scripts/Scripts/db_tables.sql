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
	`cro` varchar(10),
	`email`varchar(255) NOT NULL,
	`registration` int (11) NOT NULL,
	`image` text ,  
	`phone` varchar (255),
	`phone2` varchar(255) NOT NULL, 
	`address` varchar(255) NOT NULL,
	`admission_date` date NOT NULL,
	`password` varchar(100) NOT NULL,
	`social_security` varchar (50) NOT NULL,
	`bank` varchar (255) NOT NULL,
	`number_of_account` varchar (255) NOT NULL,
	`agency` varchar(255) NOT NULL,
	`permition` int (11) NOT NULL

) ENGINE=InnoDB;

DROP TABLE IF EXISTS permition;


CREATE TABLE permition(

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`type` varchar(255) NOT NULL
) ENGINE=InnoDB;


DROP TABLE IF EXISTS patient;

CREATE TABLE patient(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	`name` varchar (255) NOT NULL,
	`surname` varchar(255),
	`email` varchar (255),
	`social_security` varchar (255),
	`birthdate` varchar (255),
	`gender` varchar (10) NOT NULL,
	`address` varchar(255), 
	`neighborhood` varchar(255),
	`city` varchar(255),
	`state` varchar(255),
	`zip_code` varchar(255),
	`health_insurance` varchar(255),
	`responsible1` varchar(255),
	`telephone_r1` varchar(255),            
	`responsible2` varchar(255),
	`telephone_r2` varchar(255),	
	`clinic` boolean,
	`physician_assistant` boolean,
	`name_phy_assistant` varchar(255),
	`telephone_phy_assistant` varchar(255),
	`speciality_phy_assistant` varchar(255)
) ENGINE=InnoDB;
DROP TABLE IF EXISTS hospital;

CREATE TABLE hospital(

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(255) NOT NULL,
	`image` text ,
	`telephone_uti`varchar(255) NOT NULL,
	`telephone_chefe_uti`varchar(255) NOT NULL,
	`nome_chefe_uti`varchar(255) NOT NULL
) ENGINE=InnoDB;


DROP TABLE IF EXISTS status;

CREATE TABLE  stats(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`status` varchar (255) NOT NULL
)ENGINE=InnoDB;
	
DROP TABLE IF EXISTS hospital_itu;

CREATE TABLE hospital_itu(

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name_itu` varchar(255),
	`name_bed` varchar(255),
	`number_itu` int(5) NOT NULL,
        `number_bed` int(5) NOT NULL,
        `name_admin_itu` varchar(255) NOT NULL,
        `telephone_admin_itu` varchar(255) NOT NULL,
	`hospital` int(11) NOT NULL
)ENGINE=InnoDB;
	
DROP TABLE IF EXISTS appointment;
	
CREATE TABLE appointment(
	
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`description` varchar (999) ,
	`initial_date` date NOT NULL ,
	`status` int (3) NOT NULL ,	 
	`attendance`int (11) NOT NULL 
)ENGINE=InnoDB; 


DROP TABLE IF EXISTS attendance;

CREATE TABLE attendance(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`patient`  int NOT NULL,
	`hospital` int NOT NULL,
	`itu` varchar (255) NOT NULL,
	`admission_date_itu` date NOT NULL,
	`doctor_responsible` int  NOT NULL,
	`admission_cause` int NOT NULL

) ENGINE=InnoDB; 

CREATE TABLE admission_cause(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`type` varchar (255) NOT NULL
) ENGINE=InnoDB;

CREATE  TABLE files_hospital(
	
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`file` varchar (255) NOT NULL,
	`hospital` int NOT NULL
)ENGINE=InnoDB; 


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

ALTER TABLE files_hospital
ADD CONSTRAINT fk_files_hospital FOREIGN KEY (hospital) REFERENCES hospital(id);

ALTER TABLE hospital_itu
ADD CONSTRAINT fk_hospital_itu FOREIGN KEY (hospital) REFERENCES hospital(id);

ALTER TABLE appointment	
ADD CONSTRAINT fk_attendance FOREIGN KEY (attendance) REFERENCES attendance(id);

/*INSERTS*/

INSERT INTO permition (type)
VALUES ('Auxiliar') , ('Dentista') , ('Administrador') , ('Auxiliar_Financeiro');

INSERT INTO admission_cause (type)
VALUES ('Oncologico') , ('Cardiopata') , ('Cirurgia') , ('Paliativo') , ('Urgente') , ('Quimioterapia') , ('Pulmonar') , ('IRC') , ('Neuropata');

INSERT INTO `odt_soft`.`users`
(
`name`,
`surname`,
`cro`,
`email`,
`registration`,
`phone`,
`phone2`,
`address`,
`admission_date`,
`password`,
`social_security`,
`bank`,
`number_of_account`,
`agency`,
`permition`)
VALUES
(
'odonto',
'teste',
'12345',
'teste@gmail.com',
123,
'123',
'123',
'SCS',
'2017/03/03',
'8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92',
'456789',
'BANCO',
'99',
'987',
3);

INSERT INTO stats (status) 
VALUES ('In_evaluation') , ('In_reavaluation') , ('In_approval') , ('Approved_by_responsable_doctor') , ('Approved_by_family') , ('In_budget') , ('Budget_approved_by_family') , ('Anexed'),
('In_supervison') , ('dismissed') , ('died') , ('discharged') , ('Concluded') ;

/*INDEX*/

CREATE INDEX idx_patient ON attendance(patient); 
CREATE INDEX idx_doctor_responsable ON attendance(doctor_responsible);
CREATE INDEX idx_hospital ON  attendance(hospital);
CREATE INDEX idx_itu ON  attendance(itu);
CREATE INDEX idx_admition_cause ON attendance(admission_cause);
CREATE INDEX idx_admition_date_itu ON attendance(admission_date_itu);
