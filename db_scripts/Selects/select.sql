#substituir ? pela variavel


SELECT `hospital`.`id`,
    `hospital`.`name`,
    `hospital`.`telephone_hospital`,
    `hospital_itu`.`id`,
    `hospital_itu`.`name_itu`,
    `hospital_itu`.`name_bed`,
    `hospital_itu`.`number_itu`,
    `hospital_itu`.`number_bed`,
    `hospital_itu`.`name_admin_itu`,
    `hospital_itu`.`telephone_admin_itu`,
    `hospital_itu`.`hospital`
FROM odt_soft.hospital, odt_soft.hospital_itu WHERE `hospital`.`id` = `hospital_itu`.`hospital` 
AND  `hospital`.`name` LIKE '%?%' 
OR `hospital_itu`.`name_admin_itu` LIKE '%?%' OR `hospital_itu`.`number_itu` = ?;


	



