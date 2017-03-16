<?php

	class Employee{
		
		private $name;
		private $surname;
		private $cro;
		private $date;
		private $nregistration;
		private $cpf;
		private $phone;
		private $adress;
		private $pass;
		private $bank;
		private $permissiontype;
		
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
			$this->name = $surname;
		}
	
		public function getCro(){
			return $this->cro;
		}
		
		public function setCro($cro){
			$this->name = $cro;
		}

		public function getDate(){
			return $this->date;
		}
		
		public function setDate($date){
			$this->name = $date;
		}

		public function getNmat(){
			return $this->nregistration;
		}
		
		public function setNmat($nregistration){
			$this->name = $nregistration;
		}

		public function getCpf(){
			return $this->cpf;
		}
		
		public function setCpf($cpf){
			$this->name = $cpf;
		}

		public function getPhone(){
			return $this->phone;
		}
		
		public function setPhone($phone){
			$this->name = $phone;
		}
		public function getAdress(){
			return $this->adress;
		}
		
		public function setAdress($adress){
			$this->name = $adress;
		}
		public function getPass(){
			return $this->pass;
		}
		
		public function setPass($pass){
			$this->name = $pass;
		}

		public function getBank(){
			return $this->bank;
		}
		
		public function setBank($bank){
			$this->name = $bank;
		}

		public function getPermission(){
			return $this->permissiontype;
		}
		
		public function setPermission($permissiontype){
			$this->name = $permissiontype;
		}
	}

