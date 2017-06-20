<?php 

require_once "conection.php";
require_once "../model/hospital.php";
require_once "../model/uti.php";

class HospitalDb{


   public function add($hospital) {
    try {
        //checar com o SGBD os nomes das colunas
        $sql = "INSERT INTO hospital (name, telephone_uti, telephone_chefe_uti,nome_chefe_uti)  
        VALUES (:name, :telUti, :telUtiChefe,:nmeUtiChefe)";


        //gh significa get hospital
        $ghName = $hospital->getNameHosp();
        $ghTelephoneUti = $hospital->getPhoneUti();
        $ghTelephoneUtiChefe = $hospital->getPhoneChef();
		$ghNomeUtiChefe = $hospital->getChefUti();
      
        $conn = new DbConnector();
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->bindParam(':name', $ghName);
        $stmt->bindParam(':telUti', $ghTelephoneUti);
		$stmt->bindParam(':telUtiChefe', $ghTelephoneUtiChefe);
        $stmt->bindParam(':nmeUtiChefe', $ghNomeUtiChefe);

        
       
       $result = $stmt->execute();
        return $result;
	
	
    }
    catch(PDOExeption $e){
        
        return $result;
    }
                    
	}
	
	 public function addBed($itu,$number) {
    try {
        //checar com o SGBD os nomes das colunas
        $sql = "INSERT INTO itu_bed (number_itu, itu)  
        VALUES (:number_itu, :itu)";

        //gh significa get hospital
        $ghId = $itu;
        $ghNumber_uti = $number;
     

        $conn = new DbConnector();
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->bindParam(':number_itu', $ghNumber_uti);
        $stmt->bindParam(':itu', $ghId);
 
       $result = $stmt->execute();
        return $result;
    }
    catch(PDOExeption $e){
        return $result;
    }
                    
    }

   public function addUti($uti) {
    try {
        //checar com o SGBD os nomes das colunas
        $sql = "INSERT INTO hospital_itu (name_itu, quant_itu, hospital)  
        VALUES (:name_uti, :quant_itu, :hospital)";

        //gh significa get hospital
        $ghId = $uti->getHospital();
        $ghName_uti = $uti->getNameUti();
        $ghQuant_uti = $uti->getQuantUti();
     

        $conn = new DbConnector();
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->bindParam(':name_uti', $ghName_uti);
        $stmt->bindParam(':quant_itu', $ghQuant_uti);
        $stmt->bindParam(':hospital', $ghId);
 
       $result = $stmt->execute();
        return $result;
    }
    catch(PDOExeption $e){
        return $result;
    }
                    
    }

	public function searchUti($idHospital){

    $sql = "SELECT * FROM hospital_itu WHERE hospital = :id";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
	$stmt->bindParam('id',$idHospital);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
	}
	
	public function searchBed($idUti){

    $sql = "SELECT * FROM itu_bed WHERE itu = :id";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
	$stmt->bindParam('id',$idUti);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
	}
	
	public function searchMaxId(){

    $sql = "SELECT MAX(id) as id FROM hospital";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
	$stmt->execute();
	$hospital = $stmt->fetch(PDO::FETCH_OBJ);
    return $hospital->id;
	}
	
	public function searchMaxIdUti(){

    $sql = "SELECT MAX(id) as id FROM hospital_itu";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
	$stmt->execute();
	$hospital = $stmt->fetch(PDO::FETCH_OBJ);
    return $hospital->id;
	}

    public function searchId($search){

    $sql = "SELECT * FROM hospital WHERE id = :id_hospital";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id_hospital', $search);
	$stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_OBJ);
	return $result;
	}

     public function searchAll(){
      $sql = "SELECT * FROM hospital";
       $conn = new DbConnector();
       $stmt = $conn->getConn()->prepare($sql);
       $stmt->execute();
       $result = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $result;
    }

    public function search($filter){


    $sql = "SELECT id,name, name_admin_itu, number_itu FROM `odt_soft`.`hospital`
    WHERE name LIKE :name OR name_admin_itu LIKE :name_admin_itu OR number_itu = :number_itu
    ORDER by hospital.name;";


    $filter2 ="%".$filter."%";
    $conn= new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':name', $filter2);
    $stmt->bindParam(':name_admin_itu',$filter2);
    $stmt->bindParam(':number_itu', $filter);
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
    }
	
	public function addImage($destino,$id){
		
		$sql = "UPDATE `odt_soft`.`hospital` SET image = :destino WHERE id = :id";
		$conn= new DbConnector();
		$stmt = $conn->getConn()->prepare($sql);
		$stmt->bindParam(':destino', $destino);
		$stmt->bindParam(':id',$id);
		$result = $stmt->execute();
	}
	
	public function addFile($destino_file,$id){
		
		$sql = "UPDATE `odt_soft`.`hospital` SET file = :destino WHERE id = :id";
		$conn= new DbConnector();
		$stmt = $conn->getConn()->prepare($sql);
		$stmt->bindParam(':destino', $destino_file);
		$stmt->bindParam(':id',$id);
		$result = $stmt->execute();
	}

		
    }

	






 ?>