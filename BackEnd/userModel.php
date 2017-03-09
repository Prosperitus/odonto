<?php

	class user{
		
		private $name;
		private $surname;
		private $cro;
		private $phone;
		private $email;
		private $pass;
		private $birthdate;
		
		function __construct(){

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
			$this->name = $cro;
		}
		public function getPhone(){
			return $this->phone;
		}
		
		public function setPhone($phone){
			$this->name = $phone;
		}
		public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email){
			$this->name = $email;
		}
		public function getPass(){
			return $this->pass;
		}
		
		public function setPass($pass){
			$this->name = $pass;
		}
		public function getBirthdate(){
			return $this->birthdate;
		}
		
		public function setBirthdate($birthdate){
			$this->name = $birthdate;
		}
	}

