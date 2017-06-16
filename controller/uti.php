<?php

	include_once "../model/uti.php";
	include_once "../database/hospital.php";
	require_once "../controller/verifyLogin.php";

class UtiController{
	
	function __construct(){
		verifyLogRedirect();
	}
	
	public function returnUtis($hospital){
		$db = new HospitalDb();
		return $db->searchUti($hospital->id);
	}
	
	public function add(){
		$conn = new HospitalDb();
		$idHosp = $conn->searchMaxId();
		$nomeUti = $_POST['nome_uti'];
		$quantLeito = $_POST['quantidade_leito_uti'];
		for($i = 0; $i<sizeof($nomeUti);$i++){
			$nome = $nomeUti[$i];
			$quant = (int) $quantLeito[$i];
			$uti = new Uti();
			$uti->setNameUti($nome);
			$uti->setQuantUti($quant);
			$uti->setHospital($idHosp);
			$result = $conn->addUti($uti);
			$idUti = $conn->searchMaxIdUti();
			for($p = 1; $p<=$quant;$p++){
				$conn->addBed($idUti,$p);
			}
		}
		$this->redirect($result);
	}
	private function redirect($result){
		if($result){
			header("location: ../public/success_register.php");
			die();
		 }else{
			 header("location: ../public/fail_register.php");
			 die();
		 }
	}
}










