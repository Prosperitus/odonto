<?php

	class Hospital{
		

		private $namehosp;
		private $chefuti;
		private $phonechef;
		private $phonehosp;

		function __construct(){

		}		


		public function getNameHosp(){
			return $this->namehosp;
		}
		
		public function setNameHosp($namehosp){
			$this->name = $namehosp;
		}


		public function getChefUti(){
			return $this->chefuti;
		}
		
		public function setChefUti($chefuti){
			$this->name = $chefuti;
		}

		public function getPhoneChef(){
			return $this->phonechef;
		}
		
		public function setPhoneChef($phonechef){
			$this->name = $phonechef;
		}

		public function getPhoneUti(){
			return $this->phoneuti;
		}
		
		public function setPhoneUti($phoneuti){
			$this->name = $phoneuti;
		}

		//public function getPhoneHost(){
		//	return $this->phoneuti;
		//}
		
		//public function setPhoneHost($phonehost){
		//	$this->name = $phonehost;
		//}

	}
