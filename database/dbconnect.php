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
         $sql = "INSERT INTO users (name, surname, cro, admission_date , registration, social_security, address, bank, number_of_account, agency, phone, email, password, permition)
    VALUES (:name, :surname, :cro, :admdate, :nregistration, :socialSecurity, :address, :bank, :accountNumber, :agencia, :phone, :email, :password, :permition)";
    	
        // ge significa get employee
    	$geName = $employee->getName();
    	$geSurname = $employee->getSurname();
    	$geCro = $employee->getCro();
    	$geAdmissionDate = $employee->getAdmissionDate();
    	$geNregistration = $employee->getRegistration();
    	$geCpf = $employee->getCpf();
    	$geAddress = $employee->getAddress();
    	$geBank = $employee->getBank();
    	$geAccNumber = $employee->getNumberOfAccount();
    	$geAgencia = $employee->getAgency();
    	$gePhone = $employee->getPhone();
    	$geEmail = $employee->getEmail();
    	$gePass = $employee->getPassword();
    	//$geBirthdate = $employee->getBirthdate();
    	$gePermission = $employee->getPermission();

    	$stmt = $this->conn->prepare($sql);
    	$stmt->bindParam(':name', $geName, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':surname', $geSurname, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':cro', $geCro, PDO::PARAM_STR, 10);
        $stmt->bindParam(':admDate', $geAdmissionDate,PDO::PARAM_STR);
        $stmt->bindParam(':nregistration', $geNregistration, PDO::PARAM_INT, 11);
        $stmt->bindParam(':socialSecurity', $geSocialSecurity, PDO::PARAM_STR, 50);
        $stmt->bindParam(':address', $geAddress, PDO::PARAM_STR,255);
        $stmt->bindParam(':bank', $geBank, PDO::PARAM_STR, 255);
        $stmt->bindParam(':accountNumber', $geAccNumber, PDO::PARAM_STR, 15);
        $stmt->bindParam(':agencia', $geAgencia, PDO::PARAM_INT, 15);
        $stmt->bindParam(':phone', $gePhone, PDO::PARAM_STR, 100);
    	$stmt->bindParam(':email', $geEmail, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':password', $gePass, PDO::PARAM_STR, 255);
    	//$stmt->bindParam(':birthdate', $geBirthdate, PDO::PARAM_DATE);
        $stmt->bindParam(':permition', $gePermission, PDO::PARAM_STR, 255);
                   	 
                        $stmt->execute();  
                        return "User added successfully!";
                  
                    }catch(PDOException $e)
                    {
                        return $e;
                    }
                     }
 public function addPatient($patient){
 	try{
    $sql = "INSERT INTO patient (name, surname, birthdate, gender, social_security, address, neighborhood, city, state, zip_code, helth_insurance, responsible1, telephone_r1, clinic, responsible2, telephone_r2)
 	VALUES (:name, :surname, :birthdate, :gender, :socialSecurity, :address, :neighborhood, :city, :state, :cep, :heathPlan, :responsibleName, :responsiblePhone, :clinic, :responsible2, :responsiblephone2)";
        
        //gp significa get pacient
 		$gpName = $patient->getName();
        $gpSurname = $patient->getSurname();
 		$gpBirthdate = $patient->getBirthdate();
 		$gpGender = $patient->getGender();
 		$gpSocial_security = $patient->getSocial_security();
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



        $stmt = $this->conn->prepare($sql);
 		$stmt->bindParam(':name', $gpName, PDO::PARAM_STR, 255);
        $stmt->bindParam(':surname', $gpSurname, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':birthdate', $gpBirthdate, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':gender', $gpGender, PDO::PARAM_STR, 255);
        $stmt->bindParam(':socialSecurity', $gpSocial_security, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':address', $gpAddress,  PDO::PARAM_STR,  255);
        $stmt->bindParam(':neighborhood', $gpNeighborhood, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':city', $gpCity, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':state', $gpState, PDO::PARAM_STR, 23);
 		$stmt->bindParam(':cep', $gpCep, PDO::PARAM_INT, 11);
 		$stmt->bindParam(':heathPlan', $gpHealthPlan, PDO::PARAM_STR, 100);
 		$stmt->bindParam(':responsibleName', $gpResponsibleName, PDO::PARAM_STR, 255);
 		$stmt->bindParam(':responsiblePhone', $gpResponsiblePhone, PDO::PARAM_STR, 100);
        $stmt->bindParam(':responsible2', $gpResponsibleName2, PDO::PARAM_STR, 255);
        $stmt->bindParam(':responsiblePhone2', $gpResponsiblePhone2, PDO::PARAM_STR, 100);
 		$stmt->bindParam(':clinic', $gpClinic,PDO::PARAM_STR, 100);
 					
 						$stmt->execute();
                        return "Patient added successfully!";
 					}
 					catch(PDOExeption $e)
 					{
 						var_dump($e);
 					}

public function addHospital($hospital) {
    try {
        //checar com o SGBD os nomes das colunas
        $sql = "INSERT INTO hospital (name, number_itu, number_beds, name_admin_itu, telephone_admin_itu, telephone_hospital)  
        VALUES (:name, :numOfUTIs, :numOfBeds, :UTIAdmin, :adminPhone, :hospitalPhone)";

        //gh significa get hospital
        $ghName = $hospital->getNameHost();
        $ghNumOfUTIs = $hospital->getUTI();
        $ghnumOfBeds = $hospital->getBed();
        $ghUTIAdmin = $hospital->getAdminUti();
        $ghAdminPhone = $hospital->getPhoneAdmin();
        $ghPhone = $hospital->getPhoneHosp();
        //$ghArchives = $hospital->getArchives();

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $ghName);
        $stmt->bindParam(':numOfUTIs', $ghNumOfUTIs);
        //$stmt->bindParam(':numOfBeds', $ghNumOfBeds);
        $stmt->bindParam(':UTIAdmin', $ghUTIAdmin);
        $stmt->bindParam(':adminPhone', $ghAdminPhone);
        $stmt->bindParam(':hospitalPhone', $ghPhone);
        //$stmt->bindParam(':archives', $ghArchives);

        $stmt->execute();
        return "Hospital added successfully!";
    }
    catch(PDOExeption $e){
        var_dump($e);
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