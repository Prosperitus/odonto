<?php

	class Hospital{
		

		private $namehosp;
		private $uti;
		private $bed;
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

		public function getUTI(){
			return $this->uti;
		}
		
		public function setUTI($uti){
			$this->name = $uti;
		}
	
		public function getBed(){
			return $this->bed;
		}
		
		public function setBed($bed){
			$this->name = $bed;
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

		public function getPhoneHosp(){
			return $this->phonehosp;
		}
		
		public function setPhoneHosp($phonehosp){
			$this->name = $phonehosp;
		}

	}

