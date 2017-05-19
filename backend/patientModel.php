<?php
	
class Patient{

	private $name;
	private $surname;
	private $birthdate;
	private $gender;
	private $adress;
	private $neighborhood;
	private $city;
	private $state;
	private $cep;
	private $hospital;
	private $healthPlan;
	private $responsibleName;
	private $responsiblePhone;
	private $medicalRecords;
	private $clinic;
	private $medicalassistant;
	private $telephone_phy_assistant;
	private $speciality_phy_assistant;
	private $cpf;
	private $pacienteEmail;
	private $responsibleName2;
	private $responsiblePhone2;
	

	public function __construct(){

	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function getBirthdate(){
		return $this->birthdate;
	}

	public function setbirthdate($birthdate){
		$this->birthdate = $birthdate;
	}
	
	public function getGender(){
		return $this->gender;
	}

	public function setGender($Gender){
		$this->gender = $Gender;
	}

	public function getAdress(){
		return $this->Adress;
	}

        public function setAdress($Adress){
		$this->Adress = $Adress;
         
        }

	
	public function getNeighborhood(){
		return $this->neighborhood;
	}

	public function setNeighborhood($neighborhood){
		$this->neighborhood = $neighborhood;
	}

	public function getState(){
		return $this->state;
	}

	public function setState($state){
		$this->state = $state;
	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
	}


	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}
	
	public function getHospital(){
		return $this->hospital;
	}

	public function setHospital($hospital){
		$this->hospital = $hospital;
	}

	public function getHealthPlan(){
		return $this->healthPlan;
	}

	public function setHealthPlan($healthPlan){
		$this->healthPlan = $healthPlan;
	}

	public function getResponsibleName(){
		return $this->responsibleName;
	}

	public function setResponsibleName($responsibleName){
		$this->responsibleName = $responsibleName;
	}

	public function getResponsiblePhone(){
		return $this->responsiblePhone;
	}

	public function setResponsiblePhone($responsiblePhone){
		$this->responsiblePhone = $responsiblePhone;
	}
	
	public function getMedicalRecords(){
		return $this->medicalRecords;
	}

	public function setMedicalRecords($medicalRecords){
		$this->medicalRecords = $medicalRecords;
	}

	public function getClinic(){
		return $this->clinic;
	}

	public function setClinic($clinic){
		$this->clinic = $clinic;
	}
	
	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	
        public function getMedicalassistant(){
               return $this ->medicalassistant;
	}
	
        public function setMedicalassistant($medicalassistant){
               $this->medicalassistant = $medicalassistant;        
        }

        
        public function getpacienteEmail(){
               return $this->pacienteEmail;  
        }
        public function setpacienteEmail($pacienteEmail){
	        $this->pacienteEmail =$pacienteEmail;
   
  
     }

		//NOVOS CAMPOS
	
	


	public function getResponsiblePhone2(){
		return $this->responsiblePhone2;
	}

	public function setResponsiblePhone2($responsiblePhone2){
		$this->responsiblePhone2 = $responsiblePhone2;
	}

	public function getResponsibleName2(){
		return $this->responsibleName2;
	}

	public function setResponsibleName2($responsibleName2){
		$this->responsibleName2 = $responsibleName2;
	}

	//alteração
    public function getTelephone_phy_assistant(){
       	return $this->telephone_phy_assistant;
    }

    public function setTelephone_phy_assistant($telephone_phy_assistant){
        $this->telephone_phy_assistant = $telephone_phy_assistant;
    }

    public function getSpeciality_phy_assistant(){
       return $this->speciality_phy_assistant;
    }

    public function setSpeciality_phy_assistant($speciality_phy_assistant){
        $this->speciality_phy_assistant = $speciality_phy_assistant;	
    }
}