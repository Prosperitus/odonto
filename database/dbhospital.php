<?php 

include_once "dbconnect.php";
include_once "../backend/Hospitalmodel.php";

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

   public function adduti($uti) {
    try {
        //checar com o SGBD os nomes das colunas
        $sql = "INSERT INTO hospital_itu (name_itu, name_bed, number_itu, number_bed, name_admin_itu, telephone_admin_itu, hospital)  
        VALUES (:name_uti, :name_beds, :num_uti, :num_bed, :name_admin_uti, :telephone_itu, :hospital_name)";

        //gh significa get hospital
        $ghName_uti = $hospital->getName_Itu();
        $ghName_bed = $hospital->getName_bed();
        $ghNum_uti = $hospital->getNum_itu();
        $ghNum_bed = $hospital->getNum_bed();
        $ghName_admin = $hospital->getName_admin();
        $ghTelephone = $hospital->getTelephone_admin_itu();
        $ghHospital = $hospital->getHospital();

        $conn = new DbConnector();
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->bindParam(':name_uti', $ghName_uti);
        $stmt->bindParam(':name_beds', $ghName_bed);
        $stmt->bindParam(':num_uti', $ghNum_uti);
        $stmt->bindParam(':num_bed', $ghNum_bed);
        $stmt->bindParam(':name_admin_itu', $ghName_admin);
        $stmt->bindParam(':telephone_itu', $ghTelephone);
        $stmt->bindParam(':hospital_name', $ghHospital);

       $result = $stmt->execute();
        return $result;
    }
    catch(PDOExeption $e){
        return $result;
    }
                    
    }


    public function search_id($search){

    $sql = "SELECT * FROM hospital WHERE id = :id_hospital";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id_hospital', $search);
    return $result = $stmt -> fetch(PDO::OBJ);
}

    private function searchHospital($filter){


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

		
    }

	






 ?>