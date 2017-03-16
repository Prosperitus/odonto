<?php 
    include_once "../backend/employeeModel.php";
    include_once "../backend/patientModel.php";
class DBconnector {

    // try {
    private $Servidor = "localhost";
    private $BancoDados = "odt_soft";
    private $Usuario = "root";
    private $Senha = "";
    private $conn;
    
    public function __construct() 
{ 
    try {
            
    $this->conn = new PDO ("mysql:host=$this->Servidor;dbname=$this->BancoDados;","$this->Usuario","$this->Senha");
    $this->conn->setAtribute(PDO::ATTR_ERROMODE, PDO::ATTR_ERROMODE_SILENT);
  
        }catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
 
    }
}
 
        
 	public function addEmployee($employee){
 	     try{
         $sql = "INSERT INTO users (name, surname, cro, admissionDate , matricula, cpf, adress, bank, accountNumber, agencia, phone, email, pass, birthdate,permission)
    VALUES (:name, :surname, :cro, :admdate, :nregistration, :cpf, :adress, :bank, :accountNumber, :agencia, :phone, :email, :pass, :birthdate, :permissao)";
    	$stmt = $this->conn->prepare($sql);
    	$stmt->bindParam(':name', $employee->getName(), PDO::PARAM_STR, 255);
    	$stmt->bindParam(':surname', $employee->getSurname(), PDO::PARAM_STR, 255);
    	$stmt->bindParam(':cro', $employee->getCro(), PDO::PARAM_STR, 10);
        $stmt->bindParam(':admissionDate', $employee->getDate(),PDO::PARAM_DATE);
        $stmt->bindParam(':nregistration', $employee->getNmat(), PDO::PARAM_INT, 11);
        $stmt->bindParam(':cpf', $employee->getCpf(), PDO::PARAM_STR, 50);
        $stmt->bindParam(':adress', $employee->getAdress(), PDO::PARAM_STR,255);
        $stmt->bindParam(':bank', $employee->getBank(), PDO::PARAM_STR, 255);
        $stmt->bindParam(':accountNumber', $employee->getAccNumber(), PDO::PARAM_STR, 7);
        $stmt->bindParam(':agencia', $employee->getAgencia(), PDO::PARAM_INT, 11);
        $stmt->bindParam(':phone', $employee->getPhone(), PDO::PARAM_STR, 100);
    	$stmt->bindParam(':email', $employee->getEmail(), PDO::PARAM_STR, 255);
    	$stmt->bindParam(':pass', $employee->getPass(), PDO::PARAM_STR, 255);
    	$stmt->bindParam(':birthdate', $employee->getBirthdate(), PDO::PARAM_DATE);
        $stmt->bindParam(':permissiontype', $employee->getPermission(), PDO::PARAM_STR, 255);
                   	 
                        $stmt->execute();  
                        return "User added successfully!";
                  
                    }catch(PDOException $e)
                    {
                        return $e;
                    }
                     }

 public function addPatient($patient){
 	try{
    $sql = "INSERT INTO paciente (name, age, birthdate, gender, adress, neighborhood, city, state, cep, hospital, heathPlan, responsibleName, responsiblePhone, medicalRecords, clinc)
 	VALUES (:name, :age, :birthdate, : gender, :adress, :neighborhood, :city, :state, :cep, :hospital, :heathPlan, :responsibleName, :responsiblePhone, :medicalRecords, :clinic)";

        $stmt = $this->conn->prepare($sql);
 		$stmt->bindParam(':name', $patient->getName(), PDO::PARAM_STR, 255);
 		$stmt->bindParam(':age', $patient->getAge(), PDO::PARAM_INT, 4 );
 		$stmt->bindParam(':birthdade', $patient->getBirthdate(), PDO::PARAM_DATE);
 		$stmt->bindParam(':gender', $patient->getSex(), PDO::PARAM_STR, 255);
 		$stmt->bindParam(':adress', $patient->getAdress(),  PDO::PARAM_STR,  255);
        $stmt->bindParam(':neighborhood', $patient->getNeighborhood(), PDO::PARAM_STR, 255);
 		$stmt->bindParam(':city', $patient->getCity(), PDO::PARAM_STR, 255);
 		$stmt->bindParam(':state', $patient->getState(), PDO::PARAM_STR, 23);
 		$stmt->bindParam(':cep', $patient->getCep(), PDO::PARAM_INT, 11);
 		$stmt->bindParam(':hospital', $patient->getHospital(), PDO::PARAM_STR, 255);,
 		$stmt->bindParam(':heathPlan', $patient->getHealthPlan(), PDO::PARAM_STR, 100);
 		$stmt->bindParam(':responsibleName', $patient->getResponsibleName(), PDO::PARAM_STR, 255);
 		$stmt->bindParam(':responsiblePhone', $patient->getResponsiblePhone(), PDO::PARAM_STR, 100);
 		$stmt->bindParam(':medicalRecords', $patient->getMedicalRecords(), PDO::PARAM_STR);
 		$stmt->bindParam(':clinic', $patient->getClinic(),PDO::PARAM_STR, 100);
 					
 						$stmt->execute();
                        return "Patient added successfully!";
 					}
 					catch(PDOExeption $e)
 					{
 						return $e;
 					}
                    



 }

 public function getUserMaxId(){
    try{
        $sql = "SELECT MAX(id) from users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::OBJ);
        $numMax = $result->id;
        return $numMax;
    }
    catch(PDOExeption $e){
        return $e;
    }
 }
public function getPatientMaxId(){
    try{
        $sql = "SELECT MAX(id) from paciente";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::OBJ);
        $numMax = $result->id;
        return $numMax;
    }
    catch(PDOExeption $e){
            return $e;

    }
}


}

 ?>