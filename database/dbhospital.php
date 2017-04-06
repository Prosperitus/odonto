<?php 

include_once "dbconnect.php";
include_once "../backend/Hospitalmodel.php";
public class DbHospital{

	public function addHospital($hospital) {
    try {
        //checar com o SGBD os nomes das colunas
        $sql = "INSERT INTO hospital (name, number_itu, number_beds, name_admin_itu, telephone_admin_itu, uti_hospital)  
        VALUES (:name, :numOfUTIs, :numOfBeds, :UTIAdmin, :adminPhone, :utiPhone)";

        //gh significa get hospital
        $ghName = $hospital->getNameHost();
        $ghUTIAdmin = $hospital->getAdminUti();
        $ghAdminPhone = $hospital->getPhoneAdmin();
        $ghPhoneUti = $hospital->getPhoneUti();
        //$ghNumOfUTIs = $hospital->getUTI();
        //$ghnumOfBeds = $hospital->getBed();
        //$ghArchives = $hospital->getArchives();

        $conn = new DbConnector();
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->bindParam(':name', $ghName);
        //$stmt->bindParam(':numOfUTIs', $ghNumOfUTIs);
        //$stmt->bindParam(':0numOfBeds', $ghNumOfBeds);
        $stmt->bindParam(':UTIAdmin', $ghUTIAdmin);
        $stmt->bindParam(':adminPhone', $ghAdminPhone);
        $stmt->bindParam(':utiPhone', $ghUtiPhone);
        //$stmt->bindParam(':archives', $ghArchives);

       $result = $stmt->execute();
        return $result;
    }
    catch(PDOExeption $e){
        return $result;
    }
                    
	}


	public function searchHospital($filter){

		$sql = ;
		$conn = new DbConnector();
        $stmt = $conn->getConn()->prepare($sql);

		$stmt->bindParam(':nameHopital', $filter);
		$stmt->bindParam(':nameAdmin' $filter);
		$stmt->bindParam(':numItu', $filter);

		return $result= $stmt->fetchAll(PDO::OBJ);


	}











}


 ?>