<?php 

include_once "dbconnect.php";
include_once "../backend/Hospitalmodel.php";
public class DbHospital{

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

        $stmt = new DbConnector()->conn->prepare($sql);
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











}


 ?>