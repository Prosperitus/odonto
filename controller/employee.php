<?php
	require_once "../model/employee.php";
	require_once "generator.php";
	require_once "../database/employee.php";
	require_once "../controller/verifyLogin.php";
	
class EmployeeController{
	
	function __construct(){
		verifyLogRedirect();
	}
	
	public function searchName($name){
		$db = new EmployeeDb();
		$emps = $db->search($name);
		foreach ($emps as $emp) {
			echo '<div class="medicos" onclick="clickmedico(\''.$emp->name." ".$emp->surname.'\','.$emp->id.')">'.$emp->name." ".$emp->surname."</div>";
		}
	}
	
	public function searchId($id){
		$db = new EmployeeDb();
		$emp = $db->searchId($id);
		return $emp;
	}
	
	public function add(){
		$Employee = new Employee();
		$Employee->setName($_POST["funcionario_nome"]);
		$Employee->setSurname($_POST["funcionario_sobrenome"]);
		$Employee->setCro($_POST["funcionario_cro"]);
		$Employee->setRegistration(generator(6));
		$Employee->setAdmissionDate($_POST["funcionario_admissao"]);
		$Employee->setCpf($_POST["funcionario_cpf"]);
		$Employee->setPhone($_POST["funcionario_telefone"]);
		$Employee->setPhone2($_POST["funcionario_celular"]);
		$Employee->setAddress($_POST["funcionario_endereco"]);
		$Employee->setBank($_POST["funcionario_banco"]);
		$Employee->setPermission($_POST["permissao"]);
		$Employee->setPassword(hash("sha256",($_POST["funcionario_senha"])));
		$Employee->setEmail($_POST["funcionario_email"]);
		$Employee->setNumberOfAccount($_POST["funcionario_conta_banco"]);
		$Employee->setAgency($_POST["funcionario_agencia_banco"]);
		$conn = new EmployeeDb();
		$result = $conn->add($Employee);
		$this->redirect($result);

		if($result &&  ( isset($_FILES['imagemEmployee']) && $_FILES['imagemEmployee']['size'] > 0 || isset($_FILES['file_upload']) && $_FILES['imagemEmployee']['size'] > 0)){
        
            $id = $conn->searchMaxId();
            
            $extensao = strtolower(strrchr($_FILES['imagemEmployee']['name'],'.'));
            
            $imagem = $_FILES['imagemEmployee']['name'];
            
            $imagem = substr(hash("sha256",date("Y-m-d H:i:s")),0,12).$extensao;
            
            $destino = '../images/Employee/' .$imagem;
            
            $arquivo_tmp = $_FILES['imagemEmployee']['tmp_name'];
            
            move_uploaded_file( $arquivo_tmp, $destino);
            
            $conn->addImage($destino,$id);

		}
	}
	
	public function edit(){
		$Employee = new Employee();
		$Hospital->setId($_POST['funcionario_id']);
		$Employee->setName($_POST["funcionario_nome"]);
		$Employee->setSurname($_POST["funcionario_sobrenome"]);
		$Employee->setCro($_POST["funcionario_cro"]);
		$Employee->setAdmissionDate($_POST["funcionario_admissao"]);
		$Employee->setCpf($_POST["funcionario_cpf"]);
		$Employee->setPhone($_POST["funcionario_telefone"]);
		$Employee->setPhone2($_POST["funcionario_celular"]);
		$Employee->setAddress($_POST["funcionario_endereco"]);
		$Employee->setBank($_POST["funcionario_banco"]);
		$Employee->setEmail($_POST["funcionario_email"]);
		$Employee->setNumberOfAccount($_POST["funcionario_conta_banco"]);
		$Employee->setAgency($_POST["funcionario_agencia_banco"]);
		$conn = new EmployeeDb();
		$result = $conn->edit($Employee);

		if($result &&  ( isset($_FILES['imagemEmployee']) && $_FILES['imagemEmployee']['size'] > 0 || isset($_FILES['file_upload']) && $_FILES['imagemEmployee']['size'] > 0)){
        
            $id = $_POST['funcionario_id'];
			if(isset($_POST['image_path'])){
				$path = $_POST['image_path'];
				ini_set('display_errors', 0 );
				error_reporting(0);
				unlink($path);
			}
            
            $extensao = strtolower(strrchr($_FILES['imagemEmployee']['name'],'.'));
            
            $imagem = $_FILES['imagemEmployee']['name'];
            
            $imagem = substr(hash("sha256",date("Y-m-d H:i:s")),0,12).$extensao;
            
            $destino = '../images/Employee/' .$imagem;
            
            $arquivo_tmp = $_FILES['imagemEmployee']['tmp_name'];
            
            move_uploaded_file( $arquivo_tmp, $destino);
            
            $conn->addImage($destino,$id);

		}
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
}
