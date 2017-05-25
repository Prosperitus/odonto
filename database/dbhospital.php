<?php 

include_once "dbconnect.php";
include_once "../backend/Hospitalmodel.php";
include_once "../backend/Utimodel.php";

class DbHospital{

	

 

   public function addhospital($hospital) {
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
	
	 public function addUtiBed($itu,$number) {
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

	
	public function search_max_id(){

    $sql = "SELECT MAX(id) as id FROM hospital";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
	$stmt->execute();
	$hospital = $stmt->fetch(PDO::FETCH_OBJ);
    return $hospital->id;
	}
	
	public function search_max_id_uti(){

    $sql = "SELECT MAX(id) as id FROM hospital_itu";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
	$stmt->execute();
	$hospital = $stmt->fetch(PDO::FETCH_OBJ);
    return $hospital->id;
	}

    public function search_id($search){

    $sql = "SELECT * FROM hospital WHERE id = :id_hospital";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id_hospital', $search);
	$stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_OBJ);
	return $result;
	}

     public function searchHospitalAll(){
      $sql = "SELECT * FROM hospital";
       $conn = new DbConnector();
       $stmt = $conn->getConn()->prepare($sql);
       $stmt->execute();
       $result = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $result;
    }

    public function searchHospital($filter){


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
	
	public function addImagem($destino,$id){
		
		$sql = "UPDATE `odt_soft`.`hospital` SET image = :destino WHERE id = :id";
		$conn= new DbConnector();
		$stmt = $conn->getConn()->prepare($sql);
		$stmt->bindParam(':destino', $destino);
		$stmt->bindParam(':id',$id);
		$result = $stmt->execute();
	}

		
    }

	






 ?>
