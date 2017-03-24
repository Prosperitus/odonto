<?php
	class Patient{

	private $name;
	private $surname;
	private $gender;
	private $address;
	private $neighborhood;
	private $city;
	private $state;
	private $birthdate;
	private $cep;
	private $healthPlan;
	private $responsibleName;
	private $responsiblePhone;
	private $responsibleName2 = "Não Informado";
	private $responsiblePhone2 = "Não Informado";
	private $clinic;
	private $socialSecurity = "Não Informado";

	public function __construct(){

	}
	
	public function getSocialSecurity(){
		return $this->socialSecurity;
	}

	public function setSocialSecurity($socialSecurity){
		$this->socialSecurity = $socialSecurity;
	}

	public function getBirthdate(){
		return $this->birthdate;
	}

	public function setBirthdate($birthdate){
		$this->birthdate = $birthdate;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
	}
	
	public function getGender(){
		return $this->gender;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
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

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
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
	
	public function getResponsibleName2(){
		return $this->responsibleName2;
	}

	public function setResponsibleName2($responsibleName){
		$this->responsibleName2 = $responsibleName;
	}

	public function getResponsiblePhone(){
		return $this->responsiblePhone;
	}

	public function setResponsiblePhone($responsiblePhone){
		$this->responsiblePhone = $responsiblePhone;
	}
	
	public function getResponsiblePhone2(){
		return $this->responsiblePhone2;
	}

	public function setResponsiblePhone2($responsiblePhone){
		$this->responsiblePhone2 = $responsiblePhone;
	}
	
	public function getClinic(){
		return $this->clinic;
	}

	public function setClinic($clinic){
		$this->clinic = $clinic;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	}
