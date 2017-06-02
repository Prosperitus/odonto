<?php 

include_once "dbconnect.php";
include_once "../backend/patientModel.php";
include_once "../backend/Hospitalmodel.php";
include_once "../backend/employeeModel.php";



class DbAttendance
{


	public function addAttendance($attendance){
        try{
           $sql = "INSERT INTO attendance (patient, hospital, leito,status, admission_date_itu, doctor_responsible, admission_cause)
                  VALUES (:patient, :hospital, :leito,:status, :admission_date_itu, :doctor_responsible, :admission_cause)";

       $gaPatient = $attendance->getPatient();
       $gaHospital = $attendance->getHospital();
       $gaLeito = $attendance->getLeito();
       $gaAdmDate = $attendance->getUtiAdmissionDate();
       $gaEmployee = $attendance->getDoctor();
       $gaAdmCause = $attendance->getAdmissionCause();
       //$gaBonequinha = $attendance->getBonequinha();
	   $gaStatus = 1;

       $conn = new DbConnector();
       $stmt = $conn->getConn()->prepare($sql);
       $stmt->bindParam(':patient', $gaPatient);
       $stmt->bindParam(':hospital', $gaHospital);
       $stmt->bindParam(':leito', $gaLeito);
	   $stmt->bindParam(':status', $gaStatus);
       $stmt->bindParam(':admission_date_itu', $gaAdmDate);
       $stmt->bindParam(':doctor_responsible', $gaEmployee);
       $stmt->bindParam(':admission_cause', $gaAdmCause);

       $result = $stmt->execute();
       //var_dump($result);
       //var_dump($attendance);
       //die(); 
       return $result;
      }
      catch(PDOExeption $e){
        return $result;
    }
 } 


  public function searchAttendanceId($filter) {

    try {
      $sql = "SELECT * FROM attendance WHERE id = :id";

      $conn = new Dbconnector();
      $stmt = $conn->getConn()->prepare($sql);
      $stmt->bindParam(':id', $filter);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_OBJ);
      
      return $result;

      }

      catch(PDOExeption $e) {
        return $result;

    }

  }
  
  public function searchAttendanceAll($filter) {

    try {
      $sql = "SELECT * FROM attendance";

      $conn = new Dbconnector();
      $stmt = $conn->getConn()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $result;
      }
      catch(PDOExeption $e) {
        return $result;
    }
  }

}


