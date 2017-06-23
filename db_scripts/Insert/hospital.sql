ERT INTO `hospital` (`name`, `image`, `telephone_uti`, `telephone_chefe_uti`, `nome_chefe_uti`) VALUES
('Hospital Israelita Albert Eistein', '../images/hospital/20e6c526ffe0.jpg', '(61) 2151-1233', '(61) 15478-4132', 'Albert Eistein'), 
('Amare Odontologia', '../images/hospital/8b280de6b714.jpg', '(61) 5555-5555', '(61) 99803-2064', 'Renata'),
('Hospital Brasilia', '../images/hospital/3165b919c4ec.jpg', '(61) 3704-9000', '(61) 45257-4856', 'Homero leite');

INSERT INTO `hospital_itu` (`name_itu` , `quant_itu`, `hospital`) VALUES
('Leito Albert Eistein', 12, 1),
('Leito Amare', 10, 2),
('Leito Bsb', 7, 3);

INSERT INTO `itu_bed` (`name_bed`,`number_itu`, `itu`) VALUES
('Leito 1',1,1),
('Leito 1',2,2),
('Leito 1',3,3);
