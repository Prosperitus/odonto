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
    `users`.`agency`
FROM `odt_soft`.`users` WHERE users.name LIKE '%?%' OR surname LIKE '%?%' OR social_security = ? OR permition = ? OR registration = ? OR email like '%?%' OR cro = ?;


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
'FULANO',
'SOUZA',
12345,
'FUL@GMAIL.COM',
2436576,
'245676778',
'676767',
'SCS',
'1987/02/02',
'123',
'987',
'BB',
'987654321',
'RRTRTR',
2);
