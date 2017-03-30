<?php 

include_once "dbconnect.php";
include_once "../backend/employeeModel.php";

public class DbEmployee {

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
    	$stmt = new DbConnector()->conn->prepare($sql);
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


public function getUserMaxId(){
    try{
        $sql = "SELECT MAX(id) as id from users";
        $stmt = new DbConnector()->conn->prepare($sql);
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