<?php
	include "employeeModel.php";
	//include "../database/dbconnect.php";
	include "funcoes.php";

	function addHospital(){
		$Employee = new Hospital();
		
		$nome = $_POST["namehops"]);
		if(InvalidName($nome)){
			return "Nome Inválido";
		}else{
			$Employee->setNameHosp($_POST["namehops"]);
		}

		$uti = $_POST["uti"]);
		if(letra_na_str($uti) || carac_na_str($uti)){
			return "Número de UTI Inválido";
		}else{
			$Employee->setUTI($_POST["uti"]);
		}
		
		$bed = $_POST["bed"]);
		if(letra_na_str($bed) || carac_na_str($bed)){
			return "Número de leito Inválido";
		}else{
			$Employee->setBed($_POST["bed"]);
		}
		
		
		$name = $_POST["chefuti"]);
		if(InvalidName($name)){
			return "Nome Inválido";
		}else{
			$Employee->setChefUti($_POST["chefuti"]);
		}
		
		$tel = $_POST["phonechef"]);
		if(InvalidPhone($tel)){
			return "Telefone Inválido";
		}else{
			$Employee->setPhoneChef($_POST["phonechef"]);
		}

		$tel_h = $_POST["phonehosp"]);
		if(InvalidPhone($tel_h)){
			return "Telefone Inválido";
		}else{
			$Employee->setPhoneHosp($_POST["phonehosp"]);
		}
		
		$conn = new DBconnect();
		$conn->addHopspital($Hospital);
	}

addHospital();
