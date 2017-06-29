
<?php

      
	include_once "../model/patient.php";
	include_once "../database/patient.php";
	require_once "../controller/verifyLogin.php";
	require_once "../controller/session.php";
        include_once "../request/atualizar_paciente.php";
        
        

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
		$patient->setPacienteEmail($_POST['paciente_email']);
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
	$responsible1 = filter_input(INPUT_POST, 'responsible1');
	for ($i = 0;$i < strlen($responsible1); $i++){
		if($responsible1[$i] == ','){
			$nome_responsavel1 = substr($responsible1,0, $i);
			$telefone_responsavel1 = substr($responsible1, $i++);
		}
	}
	$responsible2 = filter_input(INPUT_POST, 'responsible2');
	for ($i = 0;$i < strlen($responsible2); $i++){
		if($responsible2[$i] == ','){
			$nome_responsavel2 = substr($responsible2,0, $i);
			$telefone_responsavel2 = substr($responsible2, $i++);
		}
	}
	
	$patient = new Patient();
	$patient->setName(filter_input(INPUT_POST, 'name'));
	$patient->setPacienteEmail(filter_input(INPUT_POST, 'email'));
	$patient->setCpf(filter_input(INPUT_POST,'cpf'));
	$patient->setHealthPlan(filter_input(INPUT_POST, 'health_insurance'));
	$patient->setGender(filter_input(INPUT_POST,'gender'));
	$patient->setAdress(filter_input(INPUT_POST,'address'));
	$patient->setNeighborhood(filter_input(INPUT_POST,'neighborhood'));
	$patient->setState(filter_input(INPUT_POST,'state'));
	$patient->setCep(filter_input(INPUT_POST,'zip_code'));
	$patient->setResponsibleName(filter_input(INPUT_POST, 'nome_responsavel1'));
	$patient->setResponsiblePhone(filter_input(INPUT_POST,'telefone_responsavel1'));
	$patient->setResponsibleName2(filter_input(INPUT_POST, 'nome_responsavel2'));
	$patient->setResponsiblePhone2(filter_input(INPUT_POST, 'telefone_responsavel2'));
	$patient->setMedicalassistant(filter_input(INPUT_POST, 'name_phy_assistant'));
	$patient->setTelephone_phy_assistant(filter_input(INPUT_POST, 'telephone_phy_assistant'));
	$patient->setSpeciality_phy_assistant(filter_input(INPUT_POST, 'speciality_phy_assistant'));
	$patient->setClinic(filter_input(INPUT_POST, 'patient'));
	$conn = new PatientDb();
	$result = $conn->edit($patient);
        $this->redirect($result);
        function redirect($result){
		if($result){
			header("location: ../public/success_register.php");
			die();
		}else{
			header("location: ../public/fail_register.php");
			die();
		}
	}
	} 
}
