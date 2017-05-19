

/* Selects do hospital */
SELECT `hospital`.`id`,
    `hospital`.`name`,
    `hospital`.`number_itu`,
    `hospital`.`number_bed`,
    `hospital`.`name_admin_itu`,
    `hospital`.`telephone_admin_itu`,
    `hospital`.`telephone_hospital`
FROM odt_soft.hospital WHERE  `hospital`.`name` LIKE '%s%' 
OR `hospital`.`name_admin_itu` LIKE '%?%' OR `hospital`.`number_itu` = ?;

/* Select do login */
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

/* Select do paciente */
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
WHERE patient.
name LIKE '%?%' OR surname LIKE '%?%' OR social_security = ? OR health_insurance = '?' OR responsible1 = '?' OR email LIKE '%?%'
ORDER by patient.name;

/* Select dos Usuarios */ 
/*substituir ? pela variavel*/
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
WHERE users.name LIKE '%?%' OR surname LIKE '%?%' OR social_security = ? OR permition = ? OR registration = ? OR email like '%?%' OR cro = ?
ORDER BY `users`.`name`, `users`.`surname`;

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
WHERE `users`.id = `attendance`.doctor_responsible
AND   `patient`.id = `attendance`.patient
AND   `hospital`.id = `attendance`.hospital
AND   `stats`.id = `appointment`.status
AND   `hospital_itu`.id = `attendance`.hospital
AND   `appointment`.attendance = `attendance`.id
AND   `admission_cause`.id = `attendance`.admission_cause;

