
<?php

      
	include_once "../model/patient.php";
	include_once "../database/patient.php";
	require_once "../controller/verifyLogin.php";
	require_once "../controller/session.php";

class PatientController{
	
	function __construct(){
		verifyLogRedirect();
	}
	
	public function searchName($name){
		$dbpatient = new PatientDb();
		$pats = $dbpatient->search($name);
		foreach ($pats as $pat) {
			echo '<div class="pacientes" onclick="clickpaciente(\''.$pat->name." ".$pat->surname.'\','.$pat->id.')">'.$pat->name." ".$pat->surname."</div>";
		}
	}
	
	public function searchId($id){
		$db = new PatientDb();
		$pat = $db->searchId($id);
		return $pat;
	}
	
	public function add(){
		$patient = new Patient();
		$patient ->setpacienteEmail($_POST['paciente_email']);
        $patient->setName($_POST['nome_paciente']);
		$patient->setSurname($_POST['sobrenome_paciente']);
		$patient->setGender($_POST['genero_paciente']);
		$patient->setBirthdate($_POST['date_paciente']);
        $patient->setAdress($_POST['endereco_paciente']);
		$patient->setNeighborhood($_POST['bairro_paciente']);
		$patient->setCity($_POST['cidade_paciente']);
		$patient->setState($_POST['paciente_uf']);
		$patient->setCep($_POST['cep_paciente']);
		$patient->setCpf($_POST['cpf']);
		$patient->setHealthPlan($_POST['plano_de_saude']);
		$patient->setResponsibleName($_POST['nome_responsavel']);
		$patient->setResponsibleName2($_POST['nome_responsavel_2']);
		$patient->setPhysician_assistant($_POST['medico_responsavel']);
		$patient->setMedicalassistant($_POST['nome_medico_responsavel']);
		$patient->setTelephone_phy_assistant($_POST['telefone_medico_responsavel']);
		$patient->setSpeciality_phy_assistant($_POST['especialidade_medico_responsavel']);
		//$patient->setmedicalassistant($_POST['medicalassistant']);
		//$patient->setmedicalRecords($_POST['medicalRecords']);
        $patient->setResponsiblePhone($_POST['telefone_responsavel']);
		$patient->setResponsiblePhone2($_POST['telefone_responsavel_2']);
		$patient->setClinic($_POST['clinica']);
		$conn = new PatientDb();
		$result = $conn->add($patient);
		if($result){
			$patientLast = $conn->searchLast();
			$sessionController = new Session();
			$sessionController->createCookie("patient",$patientLast);
			$this->redirect($result);
     	}else{
     		$this->redirect($result);
     	}
     
	}

	public function addModal(){
		$patient = new Patient();
		$patient ->setpacienteEmail($_POST['paciente_email']);
        $patient->setName($_POST['nome_paciente']);
		$patient->setSurname($_POST['sobrenome_paciente']);
		$patient->setGender($_POST['genero_paciente']);
		$patient->setBirthdate($_POST['date_paciente']);
        $patient->setAdress($_POST['endereco_paciente']);
		$patient->setNeighborhood($_POST['bairro_paciente']);
		$patient->setCity($_POST['cidade_paciente']);
		$patient->setState($_POST['paciente_uf']);
		$patient->setCep($_POST['cep_paciente']);
		$patient->setCpf($_POST['cpf']);
		$patient->setHealthPlan($_POST['plano_de_saude']);
		$patient->setResponsibleName($_POST['nome_responsavel']);
		$patient->setResponsibleName2($_POST['nome_responsavel_2']);
		$patient->setPhysician_assistant($_POST['medico_responsavel']);
		$patient->setMedicalassistant($_POST['nome_medico_responsavel']);
		$patient->setTelephone_phy_assistant($_POST['telefone_medico_responsavel']);
		$patient->setSpeciality_phy_assistant($_POST['especialidade_medico_responsavel']);
		//$patient->setmedicalassistant($_POST['medicalassistant']);
		//$patient->setmedicalRecords($_POST['medicalRecords']);
        $patient->setResponsiblePhone($_POST['telefone_responsavel']);
		$patient->setResponsiblePhone2($_POST['telefone_responsavel_2']);
		$patient->setClinic($_POST['clinica']);
		$conn = new PatientDb();
		$result = $conn->add($patient);
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

	public function edit() {
	$responsible1 = $_POST["responsible1"];
	for ($i = 0;$i < strlen($responsible1); $i++){
		if($responsible1[$i] == ','){
			$nome_responsavel1 = substr($responsible1,0, $i);
			$telefone_responsavel1 = substr($responsible1, $i++);
		}
	}
	$responsible2 = $_POST["responsible2"];
	for ($i = 0;$i < strlen($responsible2); $i++){
		if($responsible2[$i] == ','){
			$nome_responsavel2 = substr($responsible2,0, $i);
			$telefone_responsavel2 = substr($responsible2, $i++);
		}
	}
	
	$patient = new Patient();
	$patient->setName($_POST["name"]);
	$patient->setpacienteEmail($_POST["email"]);
	$patient->setCpf($_POST["cpf"]);
	$patient->setHealthPlan($_POST["health_insurance"]);
	$patient->setGender($_POST["gender"]);
	$patient->setAdress($_POST["address"]);
	$patient->setNeighborhood($_POST["neighborhood"]);
	$patient->setState($_POST["state"]);
	$patient->setCep($_POST["zip_code"]);
	$patient->setResponsibleName($nome_responsavel1);
	$patient->setResponsiblePhone($telefone_responsavel1);
	$patient->setResponsibleName2($nome_responsavel2);
	$patient->setResponsiblePhone2($telefone_responsavel2);
	$patient->setMedicalassistant($_POST["name_phy_assistant"]);
	$patient->setTelephone_phy_assistant($_POST["telephone_phy_assistant"]);
	$patient->setSpeciality_phy_assistant($_POST["speciality_phy_assistant"]);
	$patient->setClinic($_POST["patient"]);
	$conn = new PatientDb();
	$result = $conn->edit($patient);
	}
}
