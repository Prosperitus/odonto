<?php
	
class Patient{

	private $name;
	private $surname;
	private $birthdate;
	private $gender;
	private $address;
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
	private $cpf;
        private $email;
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

	public function setBirthdate($birthdate){
		$this->birthdate = $birthdate;
	}
	
	public function getGender(){
		return $this->gender;
	}

	public function setGender($Gender){
		$this->Gender = $Gender;
	}

	public function getAddress(){
		return $this->Address;
	}

        public function setAdress($Adress){
		$this->Adress = $Adress;
         
        }

	public function getBirthdate(){
		return $this->birthdate;
	}

	public function setBirthdate($birthdate){
		$this->birthdate = $birthdate;
	}
	
	public function getGender(){
		return $this->Gender;
	
       }	
    	
       public function setGender($Gender){
                 $this->Gender =$Gender;
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
	
        public function getmedicalassistant(){
               return $this ->medicalassistant;
	}
	
        public function setmedicalassistant($medicalassistant){
               $this->medicalassistant =$medicalassistant;        
        }
        
        public function getemail(){
               return $this->email;  
        }
        public function setemail($email){
	        $this->email =$email;
   
  
       }
    }

