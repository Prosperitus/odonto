<?php


class Uti{

	private $name_uti;
	private $quant_uti;
	private $hospital;


	public function getNameUti(){
		return $this->name_uti;
	}
	
	public function setNameUti($name_uti){
		$this->name_uti = $name_uti;
	}
	
	public function getQuantUti(){
		return $this->quant_uti;
	}
	
	public function setQuantUti($quant_uti){
		$this->quant_uti = $quant_uti;
	}
	
	public function getHospital(){
		return $this->hospital;
	}
	
	public function setHospital($hospital){
		$this->hospital = $hospital;
	}
	
	

	
}
