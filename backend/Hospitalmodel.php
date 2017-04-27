<?php

class Hospital{
	

	private $namehosp;
	private $chefuti;
		//private $phonechef;
		//private $phonehosp;

	function __construct(){

	}		


	public function getNameHosp(){
		return $this->namehosp;
	}
	

	public function setNameHosp($namehosp){
		$this->name = $namehosp;
	}

	public function getTelephonehosp(){
		return $this->telephonehosp;
	}

	public function setTelephonehosp($telephonehosp){
		return $this->telephonehosp;
	}

	
	public function getFiles(){
		return $this->files;
	}

	public function setFiles($files){
		return $this->files;
	}
	
	public function getName_Itu(){
		return $this->name_itu;
	}
	
	public function setName_itu($name_itu){
		return $this->name_itu;
	}

	public function getName_bed(){
		return $this->name_bed;
	}

	public function setName_bed($name_bed){
		return $this->name_bed;
	}

	public function getNum_itu(){
		return $this->num_itu;
	}

	public function setNum_itu($num_itu){
		return $this->num_itu;
	}

	public function getNum_bed(){
		return $this->num_bed;
	}

	public function setNum_bed($num_bed){
		return $this->num_bed;
	}
	public function getName_admin(){
		return $this->name_admin;
	}

	public function setName_admin($name_admin){
		return $this->name_admin;
	}

	public function getTelephone_admin_itu(){
		return $this->telephone_admin_itu;
	}

	public function setTelephone_admin_itu($telephone_admin_itu){
		return $this->telephone_admin_itu;
	}

	public function getHospital(){
		return $this->hospital;
	}

	public function setHospital($hospital){
		return $this->hospital;
	}

	
}
