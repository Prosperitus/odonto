<?php

	include "Utimodel.php";
	include "../database/dbhospital.php";

	function addUti(){
		$conn = new DbHospital();
		$idHosp = $conn->search_max_id();
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
			$idUti = $conn->search_max_id_uti();
			for($p = 1; $p<=$quant;$p++){
				$conn->addUtiBed($idUti,$p);
			}
		}
		return $result;
	}

if(addUti()){
	header("location: ../public/success_register.php");
 }else{
	 header("location: ../public/fail_register.php");
 }











