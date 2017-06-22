<?php
	require_once "cabecalho.php";
	require_once "../controller/session.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sessao = new Session();
		$sessao->addHospital($id);
	}
	if(isset($_SESSION['hospital'])){
		echo '<script>location.href = "atendimentos.php"</script>';
	}else{
		echo '<script>location.href = "busca_hospital.php"</script>';
	}
	

?>
