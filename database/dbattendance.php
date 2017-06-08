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
  
  public function searchAttendanceAll($idHospital) {

    try {
      $sql = "SELECT a.id,a.admission_date_itu,u.name as nameUser,u.surname as surnameUser,u.cro as croUser,
	  h.name as nameHospital,h.nome_chefe_uti,h.telephone_chefe_uti,
	  h.telephone_uti,l.name_bed,l.number_itu,hi.name_itu,s.status,ac.type
	  FROM attendance a INNER JOIN patient p ON a.patient = p.id
	  INNER JOIN users u ON a.doctor_responsible = u.id
	  INNER JOIN hospital h ON a.hospital = h.id
	  INNER JOIN itu_bed l ON a.leito = l.id
	  INNER JOIN hospital_itu hi ON hi.id = l.itu
	  INNER JOIN stats s ON a.status = s.id
	  INNER JOIN admission_cause ac on ac.id = a.admission_cause
	  WHERE a.hospital = :idHospital";

      $conn = new Dbconnector();
      $stmt = $conn->getConn()->prepare($sql);
	  $stmt->bindParam(':idHospital',$idHospital);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $result;
      }
      catch(PDOExeption $e) {
        return $result;
    }
  }

}


