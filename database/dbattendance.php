<?php 

include_once "dbconnect.php";
include_once "/opt/lampp/htdocs/odonto/backend/patientModel.php";
include_once "/opt/lampp/htdocs/odonto/backend/Hospitalmodel.php";
include_once "/opt/lampp/htdocs/odonto/backend/employeeModel.php";



class DbAttendance
{


	public function addAttendance($attendance){
        try{
           $sql = "INSERT INTO attendance (patient, hospital, itu, admDate, employee, finalDate, admCause, bonequinha)
                  VALUES (:patient, :hospital, :itu, :admission_date_itu, :doctor_responsible, :final_date, :admission_cause, :bonequinha)";

       $gaPatient = $attendance->getPatient();
       $gaHospital = $attendance->getHospital();
       $gaUti = $attendance->getUti();
       $gaAdmDate = $attendance->getUtiAdmissionDate();
       $gaEmployee = $attendance->getEmployee();
       $gaFinalDate = $attendance->getAttendanceFinalDate();
       $gaAdmCause = $attendance->getAdmissionCause();
       $gaBonequinha = $attendance->getBonequinha();

       $conn = new DbConnector();
       $stmt = $conn->getConn()->prepare($sql);
       $stmt->bindParam(':patient', $gaPatient);
       $stmt->bindParam(':hospital', $gaHospital);
       $stmt->bindParam(':itu', $gaUti);
       $stmt->bindParam(':admission_date_itu', $gaAdmDate);
       $stmt->bindParam(':doctor_responsible', $gaEmployee);
       $stmt->bindParam(':final_date', $gaFinalDate);
       $stmt->bindParam(':admission_cause', $gaAdmCause);
       $stmt->bindParam(':bonequinha', $gaBonequinha);

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

}


