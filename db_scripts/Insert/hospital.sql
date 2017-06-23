INSERT INTO `hospital` (`name`, `image`, `telephone_uti`, `telephone_chefe_uti`, `nome_chefe_uti`, `file`) VALUES
('Hospital Israelita Albert Eistein', '../images/hospital/27f719d7f885.jpg', '(61) 2151-1233', '(61) 15478-4132', 'Albert Eistein', '../file_upload/hospital/32bfb2af59fb'),
('Amare Odontologia', '../images/hospital/c74134c75d5a.jpg', '(61) 5555-5555', '(61) 99803-2064', 'Renata', '../file_upload/hospital/23c03c232e7a'),
('Hospital Brasilia', '../images/hospital/3cf991c3daf0.jpg', '(61) 3704-9000', '(61) 45257-4856', 'Homero leite', '../file_upload/hospital/55ab22f3b913');

INSERT INTO `hospital_itu` (`name_itu` , `quant_itu`, `hospital`) VALUES
('Leito Albert Eistein', 12, 1),
('Leito Amare', 10, 2),
('Leito Bsb', 7, 3);

INSERT INTO `itu_bed` (`name_bed`,`number_itu`, `itu`) VALUES
('Leito 1',1,1),
('Leito 1',2,2),
('Leito 1',3,3);
