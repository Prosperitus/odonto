

SELECT `hospital`.`id`,
    `hospital`.`name`,
    `hospital`.`number_itu`,
    `hospital`.`number_bed`,
    `hospital`.`name_admin_itu`,
    `hospital`.`telephone_admin_itu`,
    `hospital`.`telephone_hospital`
FROM odt_soft.hospital WHERE  `hospital`.`name` LIKE '%s%' 
OR `hospital`.`name_admin_itu` LIKE '%?%' OR `hospital`.`number_itu` = ?;




