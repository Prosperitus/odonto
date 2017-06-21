<?php

	require_once "../model/hospital.php";
	require_once "../database/hospital.php";
	require_once "../controller/verifyLogin.php";

class HospitalController{
	
	function __construct(){
		verifyLogRedirect();
	}
	
	
	public function createViewBed(){
		$id = $_GET['id'];
		$db = new HospitalDb();
		$leitos = $db->searchBed($id);
		echo '<option value="" disabled selected>Leito</option>';
		foreach ($leitos as $leito) {
			if($leito->name_bed == null){
				echo '<option value="'.$leito->id.'" >Leito '.$leito->number_itu.'</option>';
			}else{
				echo '<option value="'.$leito->id.'" >'.$leito->name_bed.'</option>';
			}
		}
	}
	
	public function add(){
		$Hospital = new Hospital();
		$Hospital->setNameHosp($_POST["nome_hospital"]);
		$Hospital->setChefUti($_POST["nome_chefe_uti"]);
		$Hospital->setPhoneChef($_POST["telefone_chefe_uti"]);
		$Hospital->setPhoneUti($_POST["telefone_uti"]);
		$conn = new HospitalDb();
		
		$result = $conn->add($Hospital);

		if($result &&  ( isset($_FILES['imagemHospital']) && $_FILES['imagemHospital']['size'] > 0 
		|| isset($_FILES['file_upload']) && $_FILES['imagemHospital']['size'] > 0)){
		
			$id = $conn->searchMaxId();
			
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
			
			$conn->addImage($destino,$id);
			$conn->addFile($destino_file,$id);
			
			
		}
		$this->redirect($result);
	}


	private function redirect($result){
		if($result){
			header("location: ../public/cadastro_hospital_uti.php");
			die();
		 }else{
			 header("location: ../public/fail_register.php");
			 die();
		 }
	}

	public function edit(){
		$Hospital = new Hospital();
		$Hospital->setId($_POST['id_hospital']);
		$Hospital->setNameHosp($_POST["nome_hospital"]);
		$Hospital->setChefUti($_POST["nome_chefe_uti"]);
		$Hospital->setPhoneChef($_POST["telefone_chefe_uti"]);
		$Hospital->setPhoneUti($_POST["telefone_uti"]);
		
		$conn = new HospitalDb();
		
		$result = $conn->edit($Hospital);
		if($result &&  ( isset($_FILES['imagemHospital']) && $_FILES['imagemHospital']['size'] > 0 
		|| isset($_FILES['file_upload']) && $_FILES['imagemHospital']['size'] > 0)){
		
			$id = $_POST['id_hospital'];
			if(isset($_POST['image_path'])){
				$path = $_POST['image_path'];
				if(unlink($path)){
					
				}
			}
			
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
			
			$conn->editImage($destino,$id);
			$conn->addFile($destino_file,$id);
			
			
		}
		return $Hospital;
	
	}
	
	public function del($id){
		$conn = new HospitalDb();
		$conn->updateAttendace($id);
		$utis = $conn->searchUti($id);
		foreach($utis as $uti){
			$conn->deleteLeito($uti->id);
		}
		$conn->deleteUti($id);
		$result = $conn->delete($id);
	}


}




