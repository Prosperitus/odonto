INSERT INTO `odt_soft`.`admission_cause`
(`id`,
`type`)
VALUES
(<{id: }>,
<{type: }>);


INSERT INTO `odt_soft`.`appointment`
(`id`,
`description`,
`initial_date`,
`status`,
`attendance`)
VALUES
(<{id: }>,
<{description: }>,
<{initial_date: }>,
<{status: }>,
<{attendance: }>);


INSERT INTO `odt_soft`.`attendance`
(`id`,
`patient`,
`hospital`,
`itu`,
`admission_date_itu`,
`doctor_responsible`,
`admission_cause`)
VALUES
(<{id: }>,
<{patient: }>,
<{hospital: }>,
<{itu: }>,
<{admission_date_itu: }>,
<{doctor_responsible: }>,
<{admission_cause: }>);


INSERT INTO `odt_soft`.`files_hospital`
(`id`,
`file`,
`hospital`)
VALUES
(<{id: }>,
<{file: }>,
<{hospital: }>);


INSERT INTO `odt_soft`.`hospital`
(`id`,
`name`,
`image`,
`telephone_uti`,
`telephone_chefe_uti`,
`nome_chefe_uti`)
VALUES
(<{id: }>,
<{name: }>,
<{image: }>,
<{telephone_uti: }>,
<{telephone_chefe_uti: }>,
<{nome_chefe_uti: }>);


INSERT INTO `odt_soft`.`hospital_itu`
(`id`,
`name_itu`,
`name_bed`,
`number_itu`,
`number_bed`,
`name_admin_itu`,
`telephone_admin_itu`,
`hospital`)
VALUES
(<{id: }>,
<{name_itu: }>,
<{name_bed: }>,
<{number_itu: }>,
<{number_bed: }>,
<{name_admin_itu: }>,
<{telephone_admin_itu: }>,
<{hospital: }>);


INSERT INTO `odt_soft`.`patient`
(`id`,
`name`,
`surname`,
`email`,
`social_security`,
`birthdate`,
`gender`,
`address`,
`neighborhood`,
`city`,
`state`,
`zip_code`,
`health_insurance`,
`responsible1`,
`telephone_r1`,
`responsible2`,
`telephone_r2`,
`clinic`,
`physician_assistant`,
`name_phy_assistant`,
`telephone_phy_assistant`,
`speciality_phy_assistant`)
VALUES
(<{id: }>,
<{name: }>,
<{surname: }>,
<{email: }>,
<{social_security: }>,
<{birthdate: }>,
<{gender: }>,
<{address: }>,
<{neighborhood: }>,
<{city: }>,
<{state: }>,
<{zip_code: }>,
<{health_insurance: }>,
<{responsible1: }>,
<{telephone_r1: }>,
<{responsible2: }>,
<{telephone_r2: }>,
<{clinic: }>,
<{physician_assistant: }>,
<{name_phy_assistant: }>,
<{telephone_phy_assistant: }>,
<{speciality_phy_assistant: }>);


INSERT INTO `odt_soft`.`permition`
(`id`,
`type`)
VALUES
(<{id: }>,
<{type: }>);
INSERT INTO `odt_soft`.`users`
(`id`,
`name`,
`surname`,
`cro`,
`email`,
`registration`,
`image`,
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
(<{id: }>,
<{name: }>,
<{surname: }>,
<{cro: }>,
<{email: }>,
<{registration: }>,
<{image: }>,
<{phone: }>,
<{phone2: }>,
<{address: }>,
<{admission_date: }>,
<{password: }>,
<{social_security: }>,
<{bank: }>,
<{number_of_account: }>,
<{agency: }>,
<{permition: }>);








