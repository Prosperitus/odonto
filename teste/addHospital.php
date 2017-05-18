<?php
	include "Hospitalmodel.php";
	include "../database/dbhospital.php";
	include "funcoes.php";
	function addHospital(){
		$Hospital = new Hospital();
		$erro = false ;
		$NameHosp = $_POST["nome_hospital"];
		$TelUTI = $_POST["telefone_uti"];
		$Nmechef = $_POST["nome_chefe"];
		$Telchef = $_POST["telefone_chefeuti"];
		$NumUTI = $_POST["numeroutis_hospital"];
		$EndHosp = $_POST["endereco_hospital"];
		$BairroHosp = $_POST["bairro_hospital"];
		$CidHosp = $_POST["cidade_hospital"];
		$CepHosp = $_POST["cep_hospital"];
		$UFHosp = $_POST["estado_hospital"];

		if(InvalidName($NameHosp)){
			$erro = true ;
			echo "Nome invalido!";
		}else
		{
		$Hospital->setNameHosp($NameHosp);
		}

		if(InvalidName($Nmechef))
		{
			$erro = true ;
			echo "Nome do chefe invalido!";
		}else
		{
			$Hospital->setChefUti($Nmechef);
		}
		
		if(letra_na_str($Telchef) || carac_na_str($Telchef) || $Telchef = "")
		{
			$erro = true ;
			echo "Número do chefe invalido!";
		}else
		{
			$Hospital->setPhoneChef($Telchef);
		}
		
		if(letra_na_str($TelUTI) || carac_na_str($TelUTI) || $TelUTI = "")
		{
			$erro = true ;
			echo "Número da UTI invalido!";
		}else
		{
			$Hospital->setPhoneUti($TelUTI);
		}
		
		if(InvalidName($EndHosp)){
			$erro = true ;
			echo "Endereço invalido!";
		}else
		{
		$Hospital->setEndHosp($EndHosp);
		}

		if(carac_na_str($BairroHosp))
		{
			$erro = true ;
			echo "Bairro invalido!";
		}else
		{
			$Hospital->setBairroHosp($BairroHosp);
		}

		if(carac_na_str($CidHosp))
		{
			$erro = true ;
			echo "Cidade invalida!";
		}else
		{
			$Hospital->setCidHosp($CidHosp);
		}


		if(InvalidCep($CepHosp))
		{
			$erro = true ;
			echo "Cep invalido!";
		}else
		{
			$Hospital->setCepHosp($CepHosp);
		}

		
		
		$Hospital->setUFHosp($UFHosp);
		

		if(letra_na_str($NumUTI) || carac_na_str($NumUTI) || $NumUTI = "")
		{
			$erro = true ;
			echo "Número do Hospital invalido!";
		}else
		{
			$Hospital->setNumUTI($NumUTI);
		}
		if(!$erro){
		echo "concluido";
		die();
		$conn = new DbHospital();
		$conn->addHospital($Hospital);
	}
	}
	addHospital();