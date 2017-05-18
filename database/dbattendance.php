<?php 

include_once "dbconnect.php";
require_once "../backend/patientModel.php";
include_once "../backend/Hospitalmodel.php";
require_once "../backend/employeeModel.php";



class Attendance(){


	public function attendance_patient($atendimento){
        try{
           $sql = "INSERT INTO attendance (admission_cause, admission_date_itu, patient, hospital, itu, doctor_responsible, data_final)  
       }
       VALUES (:causa, :data,:data_final, :patient, :hospital, :itu, :doctor, )";

       $gaPatient = $atendimento->getPatient();
       $gaHospital = $atendimento->getHospital();
       $gaUti = $atendimeto->getUti();
       $gaEmployee = $atendimento->getIdEmployee();
       $gaAdmissionCause = $atendimento->getAdmissionCause();
       $gaAdmissionDate = $atendimento->getDataAdmissaoUti();
       $gaFinalDate = $atendimento->getDataFinalAtendimento();
       $gaDoctorResponsible = $atendimento->getDoctorResponsible();
       $gaBonequinha = $atendimento->getBonequinha();
       $gaProntuario = $atendimento->getProntuario();
       $gaFoto = $atendimento->getPatientPicture();


       $conn = new DbConnector();
       $stmt = $conn->getConn()->prepare($sql);
       $stmt->bindParam(':data', $gaAdmissionCause;
       $stmt->bindParam(':data_final', $gaFinalDate;
       $stmt->bindParam(':causa', $gaAdmissionCause);
       $stmt->bindParam(':patient', $gaPatient);
       $stmt->bindParam(':doctor', $gaDoctorResponsible);
       $stmt->bindParam(':hospital', $gaHospital);
       $stmt->bindParam(':itu', $gaUTI);


       $result = $stmt->execute();
       return $result;
   }
   catch(PDOExeption $e){
    return $result;
}
}


public function searchId($search){
    $sql = "SELECT * FROM patient WHERE id = :id_patient";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id_patient', $search);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    return $result;
}


public function searchPatientAll(){
  $sql = "SELECT * FROM patient";
  $conn = new DbConnector();
  $stmt = $conn->getConn()->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}

public function searchPatient($filter){

    $sql = "SELECT id,name,social_security,health_insurance,responsible1,responsible2,FROM `odt_soft`.`patient`
    WHERE name LIKE :name OR surname LIKE :surname  OR social_security = :cpf OR health_insurance = :health_insurance OR responsible1 = :responsible_Name1 OR responsible2 =:responsible_Name2 OR email LIKE :email
    ORDER by patient.name;";


    $filter2 ="%".$filter."%";
    $conn= new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':name', $filter2);
    $stmt->bindParam(':surname',$filter2);
    $stmt->bindParam(':cpf', $filter);
    $stmt->bindParam(':health_insurance', $filter);
    $stmt->bindParam(':responsible_Name1', $filter);
    $stmt->bindParam(':responsible_Name2', $filter);
    $stmt->bindParam(':patient_email', $filter2);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;



}
public function search_id($search){

    $sql = "SELECT * FROM hospital WHERE id = :id_hospital";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id_hospital', $search);
    return $result = $stmt -> fetch(PDO::OBJ);
}

public function searchHospital($filter){


    $sql = "SELECT id,name, name_admin_itu, number_itu FROM `odt_soft`.`hospital`
    WHERE name LIKE :name OR name_admin_itu LIKE :name_admin_itu OR number_itu = :number_itu
    ORDER by hospital.name;";


    $filter2 ="%".$filter."%";
    $conn= new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':name', $filter2);
    $stmt->bindParam(':name_admin_itu',$filter2);
    $stmt->bindParam(':number_itu', $filter);
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}


}

public function searchEmployee($filter) {

    $sql = "SELECT id, name, surname, cro, email, registration, phone, phone2, address, admission_date, social_security, bank, number_of_account, agency, permition
    FROM `odt_soft`.`users`
    WHERE name LIKE :name OR surname LIKE :surname OR social_security = :cpf OR permition = :permition OR registration = :registration OR email like :email OR cro = :cro
    ORDER BY name";
    $filter2 = "%".$filter."%";
    $conn =  new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':name', $filter2);
    $stmt->bindParam(':surname', $filter2);
    $stmt->bindParam(':cpf', $filter);
    $stmt->bindParam(':permition', $filter);
    $stmt->bindParam(':registration', $filter);
    $stmt->bindParam(':email', $filter2);
    $stmt->bindParam(':cro', $filter);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);


    return $result;
}

public function searchEmployeeById($filter) {
    $sql = "SELECT *
    FROM `odt_soft`.`users`
    WHERE id = :id";
    $conn =  new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id', $filter);
    $stmt->execute();
    $result = $stmt-> fetch(PDO::FETCH_OBJ);
    return $result;

}


}

