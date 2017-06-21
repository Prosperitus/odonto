<?php

class Hospital{
		private $id;
		private $namehosp;
		private $chefuti;
		private $phonechef;
		private $phoneUti;

		function __construct(){

		}		

		
		public function getId(){
			return $this->id;
		}
		
		public function setId($id){
			$this->id = $id;
		}

		
		public function getNameHosp(){
			return $this->namehosp;
		}
		
		public function setNameHosp($namehosp){
			$this->namehosp = $namehosp;
		}


		public function getChefUti(){
			return $this->chefuti;
		}
		
		public function setChefUti($chefuti){
			$this->chefuti = $chefuti;
		}

		public function getPhoneChef(){
			return $this->phonechef;
		}
		
		public function setPhoneChef($phonechef){
			$this->phonechef = $phonechef;
		}

		public function getPhoneUti(){
			return $this->phoneUti;
		}
		
		public function setPhoneUti($phoneuti){
			$this->phoneUti = $phoneuti;
		}
}
