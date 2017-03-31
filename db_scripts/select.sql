#substituir ? pela variavel
SELECT `users`.`id`,
   `users`.`name`,
    `users`.`surname`,
    `users`.`cro`,
    `users`.`email`,
    `users`.`registration`,
    `users`.`phone`,
    `users`.`phone2`,
    `users`.`address`,
    `users`.`admission_date`,
    `users`.`password`,
    `users`.`social_security`,
    `users`.`bank`,
    `users`.`number_of_account`,
    `users`.`agency`,
    `users`.`permition`

FROM `odt_soft`.`users`
WHERE users.name LIKE '%?%' OR surname LIKE '%?%' OR social_security = ? OR permition = ? OR registration = ? OR email like '%?%' OR cro = ?;



SELECT `hospital`.`id`,
    `hospital`.`name`,
    `hospital`.`number_itu`,
    `hospital`.`number_bed`,
    `hospital`.`name_admin_itu`,
    `hospital`.`telephone_admin_itu`,
    `hospital`.`telephone_hospital`
FROM odt_soft.hospital WHERE  `hospital`.`name` LIKE '%s%' 
OR `hospital`.`name_admin_itu` LIKE '%?%' OR `hospital`.`number_itu` = ?;




