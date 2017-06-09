/*Selects do hospital POR ID*/
SELECT `hospital`.`id`,
       `hospital`.`name`,
       `hospital`.`image`,
       `hospital`.`telephone_uti`,
       `hospital`.`telephone_chefe_uti`,
       `hospital`.`nome_chefe_uti`,
       `hospital`.`file`
FROM odt_soft.hospital WHERE  `hospital`.`id` = ?;

/* Select do login POR ID*/
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
FROM `odt_soft`.`users` WHERE `users`.`id` = ? ;

/* Select do paciente POR ID*/
/*susbtituir ? pela variavel */
SELECT `patient`.`id`,
    `patient`.`name`,
    `patient`.`surname`,
    `patient`.`social_security`,
    `patient`.`birthdate`,
    `patient`.`gender`,
    `patient`.`address`,
    `patient`.`neighborhood`,
    `patient`.`city`,
    `patient`.`state`,
    `patient`.`zip_code`,
    `patient`.`health_insurance`,
    `patient`.`responsible1`,
    `patient`.`telephone_r1`,
    `patient`.`responsible2`,
    `patient`.`telephone_r2`,
    `patient`.`clinic`,
    `patient`.`physician_assistant`,
    `patient`.`name_phy_assistant`,
    `patient`.`telephone_phy_assistant`,
    `patient`.`speciality_phy_assistant`
FROM `odt_soft`.`patient`
WHERE `patient`. `id` = ?;

/*Select Do atendimento pelo id do users*/
/* Select de todas as tabelas */

SELECT *
FROM odt_soft.users, 
odt_soft.patient, 
odt_soft.hospital, 
odt_soft.stats, 
odt_soft.hospital_itu, 
odt_soft.appointment,
odt_soft.attendance,
odt_soft.admission_cause
WHERE `users`.id = ?
AND   `patient`.id = `attendance`.patient
AND   `hospital`.id = `attendance`.hospital
AND   `stats`.id = `appointment`.status
AND   `hospital_itu`.id = `attendance`.hospital
AND   `appointment`.attendance = `attendance`.id
AND   `admission_cause`.id = `attendance`.admission_cause;

/*Select Do atendimento pelo id do patient*/

SELECT *
FROM odt_soft.users, 
odt_soft.patient, 
odt_soft.hospital, 
odt_soft.stats, 
odt_soft.hospital_itu, 
odt_soft.appointment,
odt_soft.attendance,
odt_soft.admission_cause
WHERE `users`.id = `attendance`.doctor_responsible
AND   `patient`.id = ?
AND   `hospital`.id = `attendance`.hospital
AND   `stats`.id = `appointment`.status
AND   `hospital_itu`.id = `attendance`.hospital
AND   `appointment`.attendance = `attendance`.id
AND   `admission_cause`.id = `attendance`.admission_cause;

/*Select Do atendimento pelo id do hospital*/

SELECT *
FROM odt_soft.users, 
odt_soft.patient, 
odt_soft.hospital, 
odt_soft.stats, 
odt_soft.hospital_itu, 
odt_soft.appointment,
odt_soft.attendance,
odt_soft.admission_cause
WHERE `users`.id = `attendance`.doctor_responsible
AND   `patient`.id = `attendance`.patient
AND   `hospital`.id = ?
AND   `stats`.id = `appointment`.status
AND   `hospital_itu`.id = `attendance`.hospital
AND   `appointment`.attendance = `attendance`.id
AND   `admission_cause`.id = `attendance`.admission_cause;

/*Select Do atendimento pelo id do itu*/

SELECT *
FROM odt_soft.users, 
odt_soft.patient, 
odt_soft.hospital, 
odt_soft.stats, 
odt_soft.hospital_itu, 
odt_soft.appointment,
odt_soft.attendance,
odt_soft.admission_cause
WHERE `users`.id = `attendance`.doctor_responsible
AND   `patient`.id = `attendance`.patient
AND   `hospital`.id = `attendance`.hospital
AND   `stats`.id = `appointment`.status
AND   `hospital_itu`.id = ?
AND   `appointment`.attendance = `attendance`.id
AND   `admission_cause`.id = `attendance`.admission_cause;

