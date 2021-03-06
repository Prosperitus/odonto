<?php 

require_once "conection.php";
require_once "../model/employee.php";

class EmployeeDb {

    public function add($employee){
     	     try{
             $sql = "INSERT INTO users (name, surname, cro, admission_date , registration, social_security, address, bank, number_of_account, agency, phone, phone2, email, password, permition)
        VALUES (:name, :surname, :cro, :admDate, :nregistration, :socialSecurity, :address, :bank, :accountNumber, :agencia, :phone, :phone2, :email, :password, :permition)";

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
            //$geImage = $employee->getImage();
    		

            if($geNregistration == null){
                $geNregistration = 1;
            }
        	$conn = new DbConnector();
            $stmt = $conn->getConn()->prepare($sql);
        	$stmt->bindParam(':name', $geName, PDO::PARAM_STR, 255);
        	$stmt->bindParam(':surname', $geSurname, PDO::PARAM_STR, 255);
        	$stmt->bindParam(':cro', $geCro, PDO::PARAM_STR, 10);
            $stmt->bindParam(':admDate', $geAdmissionDate,PDO::PARAM_STR, 255);
            $stmt->bindParam(':nregistration', $geNregistration, PDO::PARAM_INT, 11);
            $stmt->bindParam(':socialSecurity', $geSocialSecurity, PDO::PARAM_STR, 50);
            $stmt->bindParam(':address', $geAddress, PDO::PARAM_STR,255);
            $stmt->bindParam(':bank', $geBank, PDO::PARAM_STR, 255);
            $stmt->bindParam(':accountNumber', $geAccNumber, PDO::PARAM_STR, 15);
            $stmt->bindParam(':agencia', $geAgencia, PDO::PARAM_STR, 11);
            $stmt->bindParam(':phone', $gePhone, PDO::PARAM_STR, 100);
        	$stmt->bindParam(':phone2', $gePhone2, PDO::PARAM_STR, 100);
            $stmt->bindParam(':email', $geEmail, PDO::PARAM_STR, 255);
        	$stmt->bindParam(':password', $gePass, PDO::PARAM_STR, 255);
            $stmt->bindParam(':permition', $gePermission, PDO::PARAM_INT);
            //$stmt->bindParam(':image', $geImage);
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

    public function searchMaxId(){
        try{
            $sql = "SELECT MAX(id) as id from users";
            $conn = new DbConnector();
    		$stmt =	$conn->getConn()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            $numMax = $result->id;
            return $numMax;
        }
        catch(PDOExeption $e){
            return $e;
        }
    }

    public function login($user, $password) {
    	$sql = "SELECT * FROM users WHERE (email = :user OR cro = :user) AND password = :password";
    	$conn =  new DbConnector();
    	$stmt =	$conn->getConn()->prepare($sql);
    	$stmt->bindParam(':user', $user);
    	$stmt->bindParam(':password', $password);
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function search($filter) {

        $sql = "SELECT id, name, surname, cro, email, registration, phone, phone2, address, admission_date, social_security, bank, number_of_account, agency, permition
        FROM `odt_soft`.`users`
        WHERE name LIKE :name OR surname LIKE :surname OR social_security = :cpf OR permition = :permition OR registration = :registration OR email like :email OR cro = :cro
        ORDER BY name LIMIT 5";
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

	public function searchLast(){
    $sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    return $result;
 }
	
    public function searchId($filter) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $conn =  new DbConnector();
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->bindParam(':id', $filter);
        $stmt->execute();
        $result = $stmt-> fetch(PDO::FETCH_OBJ);
        return $result;

    }

     public function searchAll(){
		$sql = "SELECT * FROM users";
		$conn = new DbConnector();
		$stmt = $conn->getConn()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $result;
    }

    public function edit($employee) {
        try {
 
            $geName = $employee->getName();
            $geSurname = $employee->getSurname();
            $geCro = $employee->getCro();
            $geAdmissionDate = $employee->getAdmissionDate();
            $geSocialSecurity = $employee->getCpf();
            $geAddress = $employee->getAddress();
            $geBank = $employee->getBank();
            $geAccNumber = $employee->getNumberOfAccount();
            $geAgencia = $employee->getAgency();
            $gePhone = $employee->getPhone();
            $gePhone2 = $employee->getPhone2();
            $geEmail = $employee->getEmail();
            $geId = $employee->getId();


            $sql = "UPDATE users SET 
                    name = :name,
                    surname = :surname,
                    cro = :cro,
                    admission_date = :admDate,
                    social_security = :socialSecurity,
                    address = :address,
                    bank = :bank,
                    number_of_account = :accountNumber,
                    agency = :agencia,
                    phone = :phone,
                    phone2 = :phone2,
                    email = :email
                    WHERE id = :id";
            $conn =  new DbConnector();
            $stmt = $conn->getConn()->prepare($sql);
            $stmt->bindParam(':name', $geName, PDO::PARAM_STR, 255);
            $stmt->bindParam(':surname', $geSurname, PDO::PARAM_STR, 255);
            $stmt->bindParam(':cro', $geCro, PDO::PARAM_STR, 10);
            $stmt->bindParam(':admDate', $geAdmissionDate,PDO::PARAM_STR, 255);
            $stmt->bindParam(':socialSecurity', $geSocialSecurity, PDO::PARAM_STR, 50);
            $stmt->bindParam(':address', $geAddress, PDO::PARAM_STR,255);
            $stmt->bindParam(':bank', $geBank, PDO::PARAM_STR, 255);
            $stmt->bindParam(':accountNumber', $geAccNumber, PDO::PARAM_STR, 15);
            $stmt->bindParam(':agencia', $geAgencia, PDO::PARAM_STR, 11);
            $stmt->bindParam(':phone', $gePhone, PDO::PARAM_STR, 100);
            $stmt->bindParam(':phone2', $gePhone2, PDO::PARAM_STR, 100);
            $stmt->bindParam(':email', $geEmail, PDO::PARAM_STR, 255);
            $stmt->bindParam(':id', $geId);
            $result = $stmt->execute();
            return $result;
            }
        catch(PDOExeption $e) {
            return $result;
        }
    }

}



 ?>
