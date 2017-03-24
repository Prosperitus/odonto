<?php

	class Employee{
		
		
		private $name;
		private $surname;
		private $cro;
		private $email;
		private $registration;
		private $cpf;
		private $phone;
		private $address;
		private $admissionDate;
		private $password;
		private $bank;
		private $numberOfAccount;
		private $agency;
		private $permission;
		
		
		function __construct(){

		}		

		public function getCpf(){
			return $this->cpf;
		}
		
		public function setCpf($cpf){
			$this->cpf = $cpf;
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
	
		public function getCro(){
			return $this->cro;
		}
		
		public function setCro($cro){
			$this->cro = $cro;
		}

		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email){
			$this->email = $email;
		}

		public function getAdmissionDate(){
			return $this->admissionDate;
		}
		
		public function setAdmissionDate($admissionDate){
			$this->admissionDate = $admissionDate;
		}

		public function getRegistration(){
			return $this->registration;
		}
		
		public function setRegistration($registration){
			$this->registration = $registration;
		}

		
		public function getPhone(){
			return $this->phone;
		}
		
		public function setPhone($phone){
			$this->phone = $phone;
		}
		public function getAddress(){
			return $this->address;
		}
		
		public function setAddress($address){
			$this->address = $address;
		}
		public function getPassword(){
			return $this->password;
		}
		
		public function setPassword($password){
			$this->password = $password;
		}

		public function getBank(){
			return $this->bank;
		}
		
		public function setBank($bank){
			$this->bank = $bank;
		}

		public function getNumberOfAccount(){
			return $this->numberOfAccount;
		}
		
		public function setNumberOfAccount($numberOfAccount){
			$this->numberOfAccount = $numberOfAccount;
		}

		public function getPermission(){
			return $this->permission;
		}
		
		public function setPermission($permission){
			$this->permission = $permission;
		}
		
		public function getAgency(){
			return $this->agency;
		}
		
		public function setAgency($agency){
			$this->agency = $agency;
		}
	}

