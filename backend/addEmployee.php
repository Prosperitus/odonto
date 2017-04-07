<?php
	require_once "employeeModel.php";
	require_once "generateRegistry.php";
	require_once "../database/dbemployee.php";
	
	$teste = new DbEmployee;
	$teste->searchEmployee("odonto");

	function addEmployee(){
		$Employee = new Employee();
		$Employee->setName($_POST["funcionario_nome"]);
		$Employee->setSurname($_POST["funcionario_sobrenome"]);
		$Employee->setCro($_POST["funcionario_cro"]);
		$Employee->setRegistration(generateRegistry(6));
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
		$conn = new DbEmployee();
		$result = $conn->addEmployee($Employee);
		return $result;
	}


if(addEmployee()){
	header("location: ../success_register.php");
}else{
	header("location: ../fail_register.php");
}




		
		
	
		
		

		




