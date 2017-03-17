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
    	//$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_OBJ);
  
    }catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
 
    }
}
 
        
 	public function addEmployee($employee){
 	     try{
         $sql = "INSERT INTO users (name, surname, cro, admissionDate , matricula, cpf, address, bank, accountNumber, agencia, phone, email, pass, birthdate,permission)
    VALUES (:name, :surname, :cro, :admdate, :nregistration, :cpf, :address, :bank, :accountNumber, :agencia, :phone, :email, :pass, :birthdate, :permissao)";
    	
        // ge significa get employee
    	$geName = $employee->getName();
    	$geSurname = $employee->getSurname();
    	$geCro = $employee->getCro();
    	$geAdmissionDate = $employee->getDate();
    	$geNregistration = $employee->getNmat();
    	$geCpf = $employee->getCpf();
    	$geAddress = $employee->getAddress();
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
        $stmt->bindParam(':admissionDate', $geAdmissionDate,PDO::PARAM_STR);
        $stmt->bindParam(':nregistration', $geNregistration, PDO::PARAM_INT, 11);
        $stmt->bindParam(':cpf', $geCpf, PDO::PARAM_STR, 50);
        $stmt->bindParam(':address', $geAddress, PDO::PARAM_STR,255);
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
    $sql = "INSERT INTO paciente (name, birthdate, gender, address, bairro, city, UF, CEP, plano_de_saude, responsable, telephone_r, clinica)
 	VALUES (:name, :birthdate, :sex, :address, :neighborhood, :city, :state, :cep, :heathPlan, :responsibleName, :responsiblePhone, :clinic)";
        
        //gp significa get pacient
 		$gpName = $patient->getName();
 		$gpBirthdate = $patient->getBirthdate();
 		$gpSex = $patient->getSex();
       // $gpCpf = $patient->getCpf();
 		$gpAddress = $patient->getAddress();
 		$gpNeighborhood = $patient->getNeighborhood();
 		$gpCity = $patient->getCity();
 		$gpState = $patient->getState();
 		$gpCep = $patient->getCep();
 		$gpHealthPlan = $patient->getHealthPlan();
 		$gpResponsibleName = $patient->getResponsibleName();
 		$gpResponsiblePhone = $patient->getResponsiblePhone();
        //$gpResponsibleName = $patient->getResponsibleName();
        //$gpResponsiblePhone = $patient->getResponsiblePhone();
 		$gpMedicalRecords = $patient->getMedicalRecords();
 		$gpClinic = $patient->getClinic();



        $stmt = $this->conn->prepare($sql);
 		$stmt->bindParam(':name', $gpName, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':birthdate', $gpBirthdate, PDO::PARAM_STR);
 		$stmt->bindParam(':sex', $gpSex, PDO::PARAM_STR, 255);
        //$stmt->bindParam(':cpf', $gpCpf, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':address', $gpAddress,  PDO::PARAM_STR,  255);
        $stmt->bindParam(':neighborhood', $gpNeighborhood, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':city', $gpCity, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':state', $gpState, PDO::PARAM_STR, 23);
 		$stmt->bindParam(':cep', $gpCep, PDO::PARAM_INT, 11);
 		$stmt->bindParam(':heathPlan', $gpHealthPlan, PDO::PARAM_STR, 100);
 		$stmt->bindParam(':responsibleName', $gpResponsibleName, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':responsiblePhone', $gpResponsiblePhone, PDO::PARAM_STR, 100);
        //$stmt->bindParam(':responsibleName2', $gpResponsibleName, PDO::PARAM_STR, 255);
        //$stmt->bindParam(':responsiblePhone2', $gpResponsiblePhone, PDO::PARAM_STR, 100);
 		//$stmt->bindParam(':medicalRecords', $gpMedicalRecords, PDO::PARAM_STR);
 		$stmt->bindParam(':clinic', $gpClinic,PDO::PARAM_STR, 100);
		//var_dump($patient);
		//var_dump($stmt);
		//die();
 					
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
