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



		
		
	
		
		

		




