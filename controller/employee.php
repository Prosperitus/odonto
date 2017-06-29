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
		$Employee->setName(filter_input(INPUT_POST, 'funcionario_nome'));
		$Employee->setSurname(filter_input(INPUT_POST, 'funcionario_sobrenome'));
		$Employee->setCro(filter_input(INPUT_POST,'funcionario_cro'));
		$Employee->setRegistration(generator(6));
		$Employee->setAdmissionDate(filter_input(INPUT_POST,'funcionario_admissao'));
		$Employee->setCpf(filter_input(INPUT_POST, 'funcionario_cpf'));
		$Employee->setPhone(filter_input(INPUT_POST, 'funcionario_telefone'));
		$Employee->setPhone2(filter_input(INPUT_POST,'funcionario_celular'));
		$Employee->setAddress(filter_input(INPUT_POST,'funcionario_endereco'));
		$Employee->setBank(filter_input(INPUT_POST,'funcionario_banco'));
		$Employee->setPermission(filter_input(INPUT_POST,'permissao'));
		$Employee->setPassword(hash("sha256",(filter_input(INPUT_POST,'funcionario_senha'))));
		$Employee->setEmail(filter_input(INPUT_POST, 'funcionario_email'));
		$Employee->setNumberOfAccount(filter_input(INPUT_POST, 'funcionario_conta_banco'));
		$Employee->setAgency(filter_input(INPUT_POST, 'funcionario_agencia_banco'));
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
	
	public function edit($id){
		$Employee = new Employee();
		$Employee->setId($id);
		$Employee->setName(filter_input(INPUT_POST,'funcionario_nome'));
		$Employee->setSurname(filter_input(INPUT_POST,'funcionario_sobrenome'));
		$Employee->setCro(filter_input(INPUT_POST,'funcionario_cro'));
		$Employee->setAdmissionDate(filter_input(INPUT_POST,'funcionario_admissao'));
		$Employee->setCpf(filter_input(INPUT_POST,'funcionario_cpf'));
		$Employee->setPhone(filter_input(INPUT_POST,'funcionario_telefone'));
		$Employee->setPhone2(filter_input(INPUT_POST,'funcionario_celular'));
		$Employee->setAddress(filter_input(INPUT_POST,'funcionario_endereco'));
		$Employee->setBank(filter_input(INPUT_POST,'funcionario_banco'));
		$Employee->setEmail(filter_input(INPUT_POST,'funcionario_email'));
		$Employee->setNumberOfAccount(filter_input(INPUT_POST,'funcionario_conta_banco'));
		$Employee->setAgency(filter_input(INPUT_POST,'funcionario_agencia_banco'));
		$conn = new EmployeeDb();
		$result = $conn->edit($Employee);

		if($result &&  ( isset($_FILES['imagemEmployee']) && $_FILES['imagemEmployee']['size'] > 0 || isset($_FILES['file_upload']) && $_FILES['imagemEmployee']['size'] > 0)){
        
            $id = (filter_input(INPUT_POST,'funcionario_id'));
			if(isset($_POST['image_path'])){
				$path = filter_input(INPUT_POST, 'image_path');
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
