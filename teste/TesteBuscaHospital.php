<?php 

include_once "dbconnect.php";
include_once "../backend/Hospitalmodel.php";
public class DbHospital{

    public function searchHospital($filter){

  //*******************************************************************************
    echo "Buscas </br>"    
    echo "Nome buscado: $filter2</br>";
    echo "Nome do adm da UTI: $filter2</br>";
    echo "Numero da UTI: $filter</br>";
  //*******************************************************************************
 

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

$dbh = new DbHospital();

$dbh->searchHospital();
