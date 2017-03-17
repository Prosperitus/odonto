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
    	$this->conn->setAttribute(PDO::ATTR_ERROMODE);
  
    }catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
 
    }
}
 
        
 	public function addEmployee($employee){
 	     try{
         $sql = "INSERT INTO users (name, surname, cro, admissionDate , matricula, cpf, adress, bank, accountNumber, agencia, phone, email, pass, birthdate,permission)
    VALUES (:name, :surname, :cro, :admdate, :nregistration, :cpf, :adress, :bank, :accountNumber, :agencia, :phone, :email, :pass, :birthdate, :permissao)";
    	
        // ge significa get employee
    	$geName = $employee->getName();
    	$geSurname = $employee->getSurname();
    	$geCro = $employee->getCro();
    	$geAdmissionDate = $employee->getDate();
    	$geNregistration = $employee->getNmat();
    	$geCpf = $employee->getCpf();
    	$geAdress = $employee->getAdress();
    	$geBank = $employee->getBank();
    	$geAccNumber = $employee->getAccNumber();
    	$geAgencia = $employee->getAgencia();
    	$gePhone = $employee->getPhone();
    	$geEmail = $employee->getEmail();
    	$gePass = $employee->getPass();
    	$geBirthdate = $employee->getBirthdate();
    	$gePermission = $employee->getPermission();

    	$stmt = $this->conn->prepare($sql);
    	$stmt->bindParam(':name', $geName, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':surname', $geSurname, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':cro', $geCro, PDO::PARAM_STR, 10);
        $stmt->bindParam(':admissionDate', $geAdmissionDate,PDO::PARAM_DATE);
        $stmt->bindParam(':nregistration', $geNregistration, PDO::PARAM_INT, 11);
        $stmt->bindParam(':cpf', $geCpf, PDO::PARAM_STR, 50);
        $stmt->bindParam(':adress', $geAdress, PDO::PARAM_STR,255);
        $stmt->bindParam(':bank', $geBank, PDO::PARAM_STR, 255);
        $stmt->bindParam(':accountNumber', $geAccNumber, PDO::PARAM_STR, 7);
        $stmt->bindParam(':agencia', $geAgencia, PDO::PARAM_INT, 11);
        $stmt->bindParam(':phone', $gePhone, PDO::PARAM_STR, 100);
    	$stmt->bindParam(':email', $geEmail, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':pass', $gePass, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':birthdate', $geBirthdate, PDO::PARAM_DATE);
        $stmt->bindParam(':permissiontype', $gePermission, PDO::PARAM_STR, 255);
                   	 
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
        
        //gp significa get pacient
 		$gpName = $patient->getName();
 		$gpAge = $patient->getAge();
 		$gpBirthdate = $patient->getBirthdate();
 		$gpGender = $patient->getSex();
 		$gpAdress = $patient->getAdress();
 		$gpNeighborhood = $patient->getNeighborhood();
 		$gpCity = $patient->getCity();
 		$gpState = $patient->getState();
 		$gpCep = $patient->getCep();
 		$gpHospital = $patient->getHospital();
 		$gpHealthPlan = $patient->getHealthPlan();
 		$gpResponsibleName = $patient->getResponsibleName();
 		$gpResponsiblePhone = $patient->getResponsiblePhone();
 		$gpMedicalRecords = $patient->getMedicalRecords();
 		$gpClinic = $patient->getClinic();



        $stmt = $this->conn->prepare($sql);
 		$stmt->bindParam(':name', $gpName, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':age', $gpAge, PDO::PARAM_INT, 4 );
 		$stmt->bindParam(':birthdade', $gpBirthdate, PDO::PARAM_DATE);
 		$stmt->bindParam(':gender', $gpGender, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':adress', $gpAdress,  PDO::PARAM_STR,  255);
        $stmt->bindParam(':neighborhood', $gpNeighborhood, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':city', $gpCity, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':state', $gpState, PDO::PARAM_STR, 23);
 		$stmt->bindParam(':cep', $gpCep, PDO::PARAM_INT, 11);
 		$stmt->bindParam(':hospital', $gpHospital, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':heathPlan', $gpHealthPlan, PDO::PARAM_STR, 100);
 		$stmt->bindParam(':responsibleName', $gpResponsibleName, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':responsiblePhone', $gpResponsiblePhone, PDO::PARAM_STR, 100);
 		$stmt->bindParam(':medicalRecords', $gpMedicalRecords, PDO::PARAM_STR);
 		$stmt->bindParam(':clinic', $gpClinic,PDO::PARAM_STR, 100);
 					
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