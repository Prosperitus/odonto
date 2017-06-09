<?php
	require_once "cabecalho.php";
	require_once "../backend/addSessao.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		addSessionHospital($id);
	}
	if(!isset($_SESSION['hospital'])){
		header("location: busca-hospital.php");
		die();
	}
	
	$hospital = $_SESSION['hospital'];

	echo '<script>window.location.href = "atendimentos.php"</script>';
	die();

?>
	





