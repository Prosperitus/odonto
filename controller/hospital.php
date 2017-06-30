<?php

	require_once "../model/hospital.php";
	require_once "../database/hospital.php";
	require_once "../controller/verifyLogin.php";
	require_once "../controller/uti.php";

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
		$fileObj = new HospitalDb();
		$result = $conn->add($Hospital);

		
		//IMAGEM
		
		if($result &&  ( isset($_FILES['imagemHospital']) && $_FILES['imagemHospital']['size'] > 0 )){
		
			$id = $conn->searchMaxId();
			
			
			$extensao = strtolower(strrchr($_FILES['imagemHospital']['name'],'.'));
			
			
			$imagem = $_FILES['imagemHospital']['name'];
			
			
			
			$imagem = substr(hash("sha256",date("Y-m-d H:i:s")),0,12).$extensao;
			
			$destino = '../images/hospital/' .$imagem;
			
			
			$arquivo_tmp = $_FILES['imagemHospital']['tmp_name'];
			
			
			move_uploaded_file( $arquivo_tmp, $destino);
			
			$conn->addImage($destino,$id);
			
		}
			 
			 
			 
			// ARQUIVOS 
			
		if ($result && !empty( $_FILES['arquivos']) && ($_FILES['arquivos']['error'] != 4)  )
		{
	
		// Entidade Hospital
		$metaentity = 1;
		//$entity = 1;
		$destino = '../arquivos';
		$arquivos = $_FILES['arquivos'];
		$tipo_documento = 1;
		$total = count($arquivos['name']);
	
 			if(  $total > 0 ){
	 
   				 for ($i = 0; $i < $total; $i++)
    {
        //variaveis de utilidade
		
        // - $arquivos['name'][$i]
        // - $arquivos['tmp_name'][$i]
        // - $arquivos['size'][$i]
        // - $arquivos['error'][$i]
        // - $arquivos['type'][$i]
		
        				 $extensao_file = strtolower(strrchr($_FILES['arquivos']['name'][$i],'.'));
	 				 $file = substr(hash("sha256",md5(uniqid(time()))),0,12);
		
		 
        				if (!move_uploaded_file($arquivos['tmp_name'][$i], $destino . '/' . $file . $extensao_file))
        					{
        				    echo "Erro ao enviar o arquivo: " . $arquivos['name'][$i];
        					}
		
		
		
						 $conn->addFile($arquivos['name'][$i] , $destino . '/' . $file . $extensao_file , $tipo_documento, $meta_entity);
		 		 		 $last = $conn->searchMaxDocumentId();
						 $max = $conn->searchMaxId();
						 $conn->addHasDocument($last, 1, $max);
		
    						}
				 }
  
	
		}
			
		
		
		if($result){
			$uti = new UtiController();
			$uti->add();
		}
		$this->redirect($result);
	}

	
	
	private function redirect($result){
		if($result){
			header("location: ../public/success_register.php");
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
				ini_set('display_errors', 0 );
				error_reporting(0);
				unlink($path);
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
		$result = $conn->delete($id);
	}


}




