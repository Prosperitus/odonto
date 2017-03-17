DROP DATABASE IF EXISTS 'odt_soft';

CREATE DATABASE odt_soft;	

USE odt_soft;	

DROP TABLE IF EXISTS 'users';	

CREATE TABLE 'users' (
  'id' int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  'name' varchar(255) NOT NULL,
  'surname' varchar(255) NOT NULL,
  'cro' varchar(10) NOT NULL,
  'email'varchar(255) NOT NULL,
  'matricula' int (11) NOT NULL,  
  'phone' int (11) NOT NULL,
  'address' varchar(255) NOT NULL,
  'admission_date' date NOT NULL,
  'password' varchar(100) NOT NULL,
  'cpf' varchar (50) NOT NULL,
  'bank' varchar (255) NOT NULL,
  'number_of_account' varchar (7) NOT NULL,
  'agency' int (11) NOT NULL,
  'permition' varchar (255) NOT NULL,
  'birthdate' date NOT NULL,	
 	
	ADD CONSTRAINT "fk_permition" FOREIGN KEY ('permition') REFERENCES permition ('tipo');
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'permition';

CREATE TABLE 'permition'(
	'id' int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	'tipo' varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1;


DROP TABLE IF EXISTS 'paciente';

CREATE TABLE 'paciente'(
	'id' int (255) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	'name' varchar (255) NOT NULL,
	'CPF' varchar (255) NOT NULL,
	'birthdate' varchar (255) NOT NULL,
	'gender' varchar (10) NOT NULL,
	'address' varchar(255) NOT NULL, 
	'bairro' varchar(255) NOT NULL,
	'city' varchar(255) NOT NULL,
	'UF' varchar(255) NOT NULL,
	'CEP' varchar(255) NOT NULL,
	'hospital' varchar(255) NOT NULL,
	'plano_de_saude' varchar(255) NOT NULL,
	'responsable1' varchar(255),
	'telephone_r1' varchar(255),
	'prontuario' varchar(255) NOT NULL,
	'clinica' varchar(255) NOT NULL,            
	'responsable2' varchar(255),
	'telephone_r2' varchar(255),	
	) 
	ENGINE=InnoDB AUTO_INCREMENT=1;



