<?php

	class Employee{
		

		private $patient;
		private $hospital;
		private $admdate;
		private $admcause;
		private $status;

		
		function __construct(){

		}		


		public function getPatient(){
			return $this->patient;
		}
		
		public function setPatient($patient){
			$this->name = $patient;
		}

		public function getHospital(){
			return $this->hospital;
		}
		
		public function setHospital($hospital){
			$this->name = $hospital;
		}
	
		public function getDate(){
			return $this->admdate;
		}
		
		public function setDate($admdate){
			$this->name = $admdate;
		}

		public function getCause(){
			return $this->admcause;
		}
		
		public function setCause($admcause){
			$this->name = $admcause;
		}

		public function getStatus(){
			return $this->status;
		}
		
		public function setStatus($status){
			$this->name = $status;
		}

		
	}

