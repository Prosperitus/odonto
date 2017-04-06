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
name LIKE '%?%' OR surname LIKE '%?%' OR social_security = ? OR health_insurance = '%?%' OR responsible1 = ? OR email LIKE '%?%'
ORDER by patient.name;
