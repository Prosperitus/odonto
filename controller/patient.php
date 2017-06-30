
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
		$patient ->setPacienteEmail($_POST['paciente_email']);
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

	

	public function edit($id) {

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
	$patient->setId($id);
	$patient ->setPacienteEmail($_POST['paciente_email']);
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
	//$patient->setPhysician_assistant($_POST['medico_responsavel']);
	//$patient->setMedicalassistant($_POST['nome_medico_responsavel']);
	//$patient->setTelephone_phy_assistant($_POST['telefone_medico_responsavel']);
	//$patient->setSpeciality_phy_assistant($_POST['especialidade_medico_responsavel']);
	//$patient->setmedicalassistant($_POST['medicalassistant']);
	//$patient->setmedicalRecords($_POST['medicalRecords']);
	$patient->setResponsiblePhone($_POST['telefone_responsavel']);
	$patient->setResponsiblePhone2($_POST['telefone_responsavel_2']);
	if(isset($_POST['clinica'])){
	$patient->setClinic($_POST['clinica']);
	}
	$conn = new PatientDb();
	$result = $conn->edit($patient);
	
	
	} 
}
