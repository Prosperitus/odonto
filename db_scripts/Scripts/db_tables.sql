DROP DATABASE IF EXISTS odt_soft;

CREATE DATABASE odt_soft	

DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE odt_soft;	


CREATE TABLE users (

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  	`name` varchar(80) NOT NULL,
	`surname` varchar(80) NOT NULL,
	`cro` varchar(10),
	`email`varchar(80) NOT NULL,
	`registration` int (11) NOT NULL,
	`image` text ,  
	`phone` varchar (20) NOT NULL,
	`phone2` varchar(20), 
	`address` varchar(80) NOT NULL,
	`admission_date` date NOT NULL,
	`password` varchar(100) NOT NULL,
	`social_security` varchar (50) NOT NULL,
	`bank` varchar (80) NOT NULL,
	`number_of_account` varchar (20) NOT NULL,
	`agency` varchar(80) NOT NULL,
	`permition` int (11) NOT NULL
	`deleted` boolean

) ENGINE=InnoDB;

CREATE TABLE users_access_hospital( 
	
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`users` int (11) NOT NULL,
	`hospital` int (11) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE permition(

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`type` varchar(40) NOT NULL
) ENGINE=InnoDB;



CREATE TABLE patient(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	`name` varchar (80) NOT NULL,
	`surname` varchar(80),
	`email` varchar (80),
	`social_security` varchar (20),
	`birthdate` varchar (20),
	`gender` varchar (10) NOT NULL,
	`address` varchar(80), 
	`neighborhood` varchar(80),
	`city` varchar(80),
	`state` varchar(80),
	`zip_code` varchar(20),
	`health_insurance` varchar(80),
	`responsible1` varchar(80),
	`telephone_r1` varchar(20),            
	`responsible2` varchar(80),
	`telephone_r2` varchar(20),	
	`clinic` boolean,
	`physician_assistant` boolean,
	`name_phy_assistant` varchar(80),
	`telephone_phy_assistant` varchar(20),
	`speciality_phy_assistant` varchar(80),
	`deleted` boolean
) ENGINE=InnoDB;

CREATE TABLE hospital(

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(80) NOT NULL,
	`image` text ,
	`telephone_uti`varchar(20) NOT NULL,
	`telephone_chefe_uti`varchar(20) NOT NULL,
	`nome_chefe_uti`varchar(80) NOT NULL,
	`deleted` boolean,
        `file` text
) ENGINE=InnoDB;



CREATE TABLE  stats(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`status` varchar (80) NOT NULL
)ENGINE=InnoDB;
	

CREATE TABLE hospital_itu(

	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name_itu` varchar(80) NOT NULL,
	`quant_itu` int(5) NOT NULL,
	`hospital` int(11) NOT NULL
)ENGINE=InnoDB;
	
	
CREATE TABLE appointment(
	
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`description` text ,
	`initial_date` date NOT NULL ,
	`final_date` date,
	`status` int (3) NOT NULL ,	 
	`attendance`int (11) NOT NULL 
)ENGINE=InnoDB; 



CREATE TABLE attendance(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`patient`  int NOT NULL,
	`hospital` int NOT NULL,
	`bed` int,
	`status` int Not Null,
	`admission_date_itu` date NOT NULL,
	`doctor_responsible` int  NOT NULL,
	`final_date` date

) ENGINE=InnoDB; 


CREATE TABLE admission_cause(

	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`type` varchar (80) NOT NULL
) ENGINE=InnoDB;


CREATE TABLE itu_bed(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name_bed` varchar(80),
	`number_itu` int (11) NOT NULL,
	`itu` int (11) NOT NULL
) ENGINE=InnoDB;


CREATE TABLE documents(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar (60) NOT NULL,
	`URI` text NOT NULL,
	`doc_type` int (11) NOT NULL 
	
) ENGINE=InnoDB;


CREATE TABLE meta_entity( 
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar (63) NOT NULL 
) ENGINE=InnoDB;


CREATE TABLE entity_has_document( 
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`documents` int (11) NOT NULL,
	`meta_entity` int (11) NOT NULL,
	`entity` int (11) NOT NULL 
) ENGINE=InnoDB;

CREATE TABLE doc_type(
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar (60) NOT NULL  
) ENGINE=InnoDB;

CREATE TABLE attendance_cause(
	`id` int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`attendance` int NOT NULL,
	`admission_cause` int NOT NULL
) ENGINE=InnoDB;


/* FOREIGN KEY */

ALTER TABLE attendance_cause
ADD CONSTRAINT fk_attendance_cause FOREIGN KEY (attendance) REFERENCES attendance(id);

ALTER TABLE attendance_cause
ADD CONSTRAINT fk_admission_cause FOREIGN KEY (admission_cause) REFERENCES admission_cause(id);

ALTER TABLE attendance
ADD CONSTRAINT fk_doctor_responsable FOREIGN KEY (doctor_responsible) REFERENCES users(id);

ALTER TABLE users 
ADD CONSTRAINT fk_permition FOREIGN KEY (permition) REFERENCES permition(id);

ALTER TABLE attendance
ADD CONSTRAINT fk_status_attendance FOREIGN KEY (status) REFERENCES stats(id); 

ALTER TABLE attendance
ADD CONSTRAINT fk_hospital FOREIGN KEY (hospital) REFERENCES hospital(id);

ALTER TABLE attendance
ADD CONSTRAINT fk_bed FOREIGN KEY (bed) REFERENCES itu_bed(id);

ALTER TABLE attendance 
ADD CONSTRAINT fk_patient FOREIGN KEY (patient) REFERENCES patient(id);

ALTER TABLE hospital_itu
ADD CONSTRAINT fk_hospital_itu FOREIGN KEY (hospital) REFERENCES hospital(id);

ALTER TABLE appointment	
ADD CONSTRAINT fk_attendance FOREIGN KEY (attendance) REFERENCES attendance(id);

ALTER TABLE itu_bed
ADD CONSTRAINT fk_itu_bed FOREIGN KEY (itu) REFERENCES hospital_itu(id);

ALTER TABLE appointment 
ADD CONSTRAINT fk_status FOREIGN KEY (status) REFERENCES stats(id);

ALTER TABLE users_access_hospital 
ADD CONSTRAINT fk_users FOREIGN KEY (users) REFERENCES users(id);

ALTER TABLE users_access_hospital 
ADD CONSTRAINT fk_hospital_access FOREIGN KEY (hospital) REFERENCES hospital(id);

ALTER TABLE entity_has_document
ADD CONSTRAINT fk_entity_has_document_document FOREIGN KEY (documents) REFERENCES documents(id);

ALTER TABLE entity_has_document
ADD CONSTRAINT fk_entity_has_document_meta_entity FOREIGN KEY (meta_entity) REFERENCES meta_entity(id);

ALTER TABLE documents
ADD CONSTRAINT fk_doc_type FOREIGN KEY (doc_type) REFERENCES doc_type(id);

/*INSERTS*/

INSERT INTO permition (type)
VALUES ('Dentista Administrador') , ('Dentista') , ('Administrador') , ('Secretaria');

INSERT INTO admission_cause (type)
VALUES ('Oncologico') , ('Cardiopata') , ('Cirurgia') , ('Paliativo') , ('Urgente') , ('Quimioterapia') , ('Pulmonar') , ('IRC') , ('Neuropata');

INSERT INTO `odt_soft`.`users`
(`name`,`surname`,`cro`,`email`,`registration`,`phone`,`phone2`,`address`,`admission_date`,`password`,`social_security`,`bank`,`number_of_account`,`agency`,`permition`)
VALUES('odonto','teste','12345','teste@gmail.com',123,'123','123','SCS','2017/03/03','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','456789','BANCO','99','987',3);

INSERT INTO `odt_soft`.`users`
(`name`,`surname`,`cro`,`email`,`registration`,`phone`,`phone2`,`address`,`admission_date`,`password`,`social_security`,`bank`,`number_of_account`,`agency`,`permition`)
VALUES('Renata','Monteiro de Paula Sgarioni','12345','renata@amareodontologia.com.br',123,'123','123','SCS','2017/03/03','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','456789','BANCO','99','987',3);

INSERT INTO stats (status) 
VALUES ('Em avaliação') , ('Em reavaliação') , ('Em aprovação') , ('Aprovado pelo médico responsável') , ('Aprovado pela família') , ('Em orçamento') , ('Orçamento aprovado pela família') , ('Anexa parecer'),
('Em acompanhamento') , ('Dispensa') , ('Óbito') , ('Alta') , ('Concluído') ;

INSERT INTO meta_entity(name)
VALUES ('Hospital') , ('Paciente') , ('Funcionário') , ('Atendimento');
/*INDEX*/

CREATE INDEX idx_patient ON attendance(patient); 
CREATE INDEX idx_doctor_responsable ON attendance(doctor_responsible);
CREATE INDEX idx_hospital ON  attendance(hospital);
CREATE INDEX idx_itu ON  attendance(bed);
CREATE INDEX idx_admition_date_itu ON attendance(admission_date_itu);
