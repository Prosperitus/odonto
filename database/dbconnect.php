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
         $sql = "INSERT INTO users (name, surname, cro, admission_date , registration, social_security, address, bank, number_of_account, agency, phone, phone2, email, password, permition)
    VALUES (:name, :surname, :cro, :admDate, :nregistration, :socialSecurity, :address, :bank, :accountNumber, :agencia, :phone, :phone2, :email, :password, :permition)";
    	
	$employee->setRegistration("21562");
	$employee->setPermission((int) $employee->getPermission());
	//var_dump($employee);
	//die();
        // ge significa get employee
    	$geName = $employee->getName();
    	$geSurname = $employee->getSurname();
    	$geCro = $employee->getCro();
    	$geAdmissionDate = $employee->getAdmissionDate();
    	$geNregistration = $employee->getRegistration();
    	$geSocialSecurity = $employee->getCpf();
    	$geAddress = $employee->getAddress();
    	$geBank = $employee->getBank();
    	$geAccNumber = $employee->getNumberOfAccount();
    	$geAgencia = $employee->getAgency();
    	$gePhone = $employee->getPhone();
    	$gePhone2 = $employee->getPhone2();
        $geEmail = $employee->getEmail();
    	$gePass = $employee->getPassword();
    	$gePermission = $employee->getPermission();	

		

        if($geNregistration == null){
            $geNregistration = 1;
        }
    	$stmt = $this->conn->prepare($sql);
    	$stmt->bindParam(':name', $geName, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':surname', $geSurname, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':cro', $geCro, PDO::PARAM_STR, 10);
        $stmt->bindParam(':admDate', $geAdmissionDate,PDO::PARAM_STR, 255);
        $stmt->bindParam(':nregistration', $geNregistration, PDO::PARAM_STR, 255);
        $stmt->bindParam(':socialSecurity', $geSocialSecurity, PDO::PARAM_STR, 50);
        $stmt->bindParam(':address', $geAddress, PDO::PARAM_STR,255);
        $stmt->bindParam(':bank', $geBank, PDO::PARAM_STR, 255);
        $stmt->bindParam(':accountNumber', $geAccNumber, PDO::PARAM_STR, 15);
        $stmt->bindParam(':agencia', $geAgencia, PDO::PARAM_STR, 255);
        $stmt->bindParam(':phone', $gePhone, PDO::PARAM_STR, 100);
    	$stmt->bindParam(':phone2', $gePhone2, PDO::PARAM_STR, 100);
        $stmt->bindParam(':email', $geEmail, PDO::PARAM_STR, 255);
    	$stmt->bindParam(':password', $gePass, PDO::PARAM_STR, 255);
        $stmt->bindParam(':permition', $gePermission, PDO::PARAM_INT);
                       //var_dump($employee);
                       //die();
                       

		 $result = $stmt->execute(); 
			
		
                        return $result;
                  
                    }catch(PDOException $e)
                    {
			var_dump($e);
                        return $result;
                    }
                     }
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

       $result = $stmt->execute();
        return $result;
    }
    catch(PDOExeption $e){
        return $result;
    }
                    
 }
 public function getUserMaxId(){
    try{
        $sql = "SELECT MAX(id) as id from users";
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
        $sql = "SELECT MAX(id) as id from paciente";
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
