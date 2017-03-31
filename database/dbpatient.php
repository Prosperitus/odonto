<?php

include_once "dbconnect.php";
include_once "../backend/patientModel.php";

 class DbPatient {

public function addPatient($patient){
 	try{
    $sql = "INSERT INTO patient (name, surname, birthdate, gender, social_security, address, neighborhood, city, state, zip_code, health_insurance, responsible1, telephone_r1, clinic, responsible2, telephone_r2)
 	VALUES (:name, :surname, :birthdate, :gender, :socialSecurity, :address, :neighborhood, :city, :state, :cep, :healthPlan, :responsibleName, :responsiblePhone, :clinic, :responsible2, :responsiblePhone2)";

        //gp significa get pacient
 		$gpName = $patient->getName();
        $gpSurname = $patient->getSurname();
 		$gpBirthdate = $patient->getBirthdate();
 		$gpGender = $patient->getGender();
 		$gpSocial_security = $patient->getSocialSecurity();
        $gpAddress = $patient->getAddress();
 		$gpNeighborhood = $patient->getNeighborhood();
 		$gpCity = $patient->getCity();
 		$gpState = $patient->getState();
 		$gpCep = $patient->getCep();
 		$gpHealthPlan = $patient->getHealthPlan();
 		$gpResponsibleName = $patient->getResponsibleName();
 		$gpResponsiblePhone = $patient->getResponsiblePhone();
        $gpResponsibleName2 = $patient->getResponsibleName2();
        $gpResponsiblePhone2 = $patient->getResponsiblePhone2();
 		$gpClinic = $patient->getClinic();

		
		if($gpClinic == "on"){
			$gpClinic = (bool) true;
		}else{
			$gpClinic = (bool) false;
		}

		$conn = new DbConnector();
        $stmt = $conn->getConn()->prepare($sql);
 		$stmt->bindParam(':name', $gpName, PDO::PARAM_STR, 255);
        $stmt->bindParam(':surname', $gpSurname, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':birthdate', $gpBirthdate, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':gender', $gpGender, PDO::PARAM_STR, 255);
        $stmt->bindParam(':socialSecurity', $gpSocial_security, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':address', $gpAddress,  PDO::PARAM_STR,  255);
        $stmt->bindParam(':neighborhood', $gpNeighborhood, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':city', $gpCity, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':state', $gpState, PDO::PARAM_STR, 23);
 		$stmt->bindParam(':cep', $gpCep, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':healthPlan', $gpHealthPlan, PDO::PARAM_STR, 100);
 		$stmt->bindParam(':responsibleName', $gpResponsibleName, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':responsiblePhone', $gpResponsiblePhone, PDO::PARAM_STR, 100);
        $stmt->bindParam(':responsible2', $gpResponsibleName2, PDO::PARAM_STR, 255);
        $stmt->bindParam(':responsiblePhone2', $gpResponsiblePhone2, PDO::PARAM_STR, 100);
 		$stmt->bindParam(':clinic', $gpClinic,PDO::PARAM_BOOL);

 		$result = $stmt->execute();
            		return $result;
 		}
 		catch(PDOException $e)
 		{
 			return $result;
 		}
 }

 public function getPatientMaxId(){
    try{
        $sql = "SELECT MAX(id) as id from paciente";
        $stmt = new DbConnector();
		$stmt = $conn->getConn()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::OBJ);
        $numMax = $result->id;
        return $numMax;
    }
    catch(PDOExeption $e){
            return $e;
    }
}

 public function search_id($search){

    $sql = "SELECT * FROM patient WHERE id = :id_patient";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id_patient', $search);
    return $result = $stmt -> fetch(PDO::OBJ);



 }
 

 public function search_patient($search_patient){

    $sql = "SELECT * FROM patient WHERE  name = :search_patient OR surname = :search_patient OR cpf = :search_patient OR health_insurance = :search_patient OR responsible1 = :search_patient OR responsible2 = :search_patient OR email = :search_patient";
    $conn= new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':patient_search', $search_patient);
    return $result = $stmt -> fetch(PDO::OBJ);



 }



}


 ?>
