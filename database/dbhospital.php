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

     public function search_id($search){

    $sql = "SELECT * FROM hospital WHERE id = :id_hospital";
    $conn = new DbConnector();
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id_hospital', $search);
    return $result = $stmt -> fetch(PDO::OBJ);


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











}


 ?>