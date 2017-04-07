/* SUBSTITUIR A ? PELA VARIAVEL   */
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
FROM `odt_soft`.`users` WHERE (email ='?' OR cro ='?') and password ='?' ;

