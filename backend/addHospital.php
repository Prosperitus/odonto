<?php

	include "Hospitalmodel.php";
	include "../database/dbhospital.php";


	function addHospital(){
		$Hospital = new Hospital();
		$Hospital->setNameHosp($_POST["nome_hospital"]);
		$Hospital->setChefUti($_POST["nome_chefe_uti"]);
		$Hospital->setPhoneChef($_POST["telefone_chefe_uti"]);
		$Hospital->setPhoneUti($_POST["telefone_uti"]);
		$conn = new DbHospital();
		$result = $conn->addHospital($Hospital);
		if($result && isset($_FILES['imagemHospital'])){
			$id = $conn->search_max_id();
			$imagem = $_FILES['imagemHospital']['name'];
			$destino = '../imagensHospital/' .$imagem;
			$arquivo_tmp = $_FILES['imagemHospital']['tmp_name'];
			move_uploaded_file( $arquivo_tmp, $destino);
			
		}
		return $result;
	}



if(addHospital()){
	header("location: ../public/success_register.php");
 }else{
	 header("location: ../public/fail_register.php");
 }





