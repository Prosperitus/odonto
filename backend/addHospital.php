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

		if($result &&  ( isset($_FILES['imagemHospital']) && $_FILES['imagemHospital']['size'] > 0 
		|| isset($_FILES['file_upload']) && $_FILES['imagemHospital']['size'] > 0)){
		
			$id = $conn->search_max_id();
			
			$extensao_file = strtolower(strrchr($_FILES['file_upload']['name'],'.'));
			$extensao = strtolower(strrchr($_FILES['imagemHospital']['name'],'.'));
			
			$file = $_FILES['file_upload']['name'];
			$imagem = $_FILES['imagemHospital']['name'];
			
			$file = substr(hash("sha256",md5(uniqid(time()))),0,12).$extensao_file;
			$imagem = substr(hash("sha256",date("Y-m-d H:i:s")),0,12).$extensao;
			
			$destino = '../images/hospital/' .$imagem;
			$destino_file = '../file_upload/hospital/' .$file;
			
			$arquivo_tmp = $_FILES['imagemHospital']['tmp_name'];
			$arquivo_tmp_file = $_FILES['file_upload']['tmp_name'];
			
			move_uploaded_file( $arquivo_tmp, $destino);
			move_uploaded_file( $arquivo_tmp_file, $destino_file);
			
			$conn->addImagem($destino,$id);
			$conn->addFile($destino_file,$id);
			
			
		}
		return $result;
	}



if(addHospital()){
	header("location: ../public/cadastro_hospital_uti.php");
 }else{
	 header("location: ../public/fail_register.php");
 }





