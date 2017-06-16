<?php
	require_once "cabecalho.php";
	require_once "../controller/session.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sessao = new Session();
		$sessao->addHospital($id);
	}
	if(isset($_SESSION['hospital'])){
		header("location: atendimentos.php");
		die();
	}else{
		header("location: busca-hospital.php");
		die();
	}
	

?>
