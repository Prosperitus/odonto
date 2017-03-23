<!DOCTYPE html>
<html>
<head>
	<title>Resultado da entrada</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body> 
	<div class="divForm">
		<h1>Resultado</h1>
		<?php
		$nome = isset($_GET["lb_nome"])?$_GET["lb_nome"]:0; 
		$cpf = isset($_GET["lb_cpf"])?$_GET["lb_cpf"]:0;
		$data = isset($_GET["lb_data"])?$_GET["lb_data"]:0;
		$cep = isset($_GET["lb_cep"])?$_GET["lb_cep"]:0;
		$nome_res_1= isset($_GET["lb_nome_resp"])?$_GET["lb_nome_resp"]:0; 
		$tel_res_1= isset($_GET["lb_tel_resp"])?$_GET["lb_tel_resp"]:0;
		$nome_res_2= isset($_GET["lb_nome_2"])?$_GET["lb_nome_2"]:0;
		$tel_res_2 = isset($_GET["lb_tel_2"])?$_GET["lb_tel_2"]:0;
		echo "<strong>Nome:</strong> $nome</br>";
		echo "<strong>CPF:</strong> $cpf</br>";
		echo "<strong>Data:</strong> $data</br>";
		echo "<strong>CEP:</strong> $cep</br>";
		echo "<strong>Nome Responsavel:</strong> $nome_res_1</br>";
		echo "<strong>Telefone Responsavel:</strong> $tel_res_1</br>";
		echo "<strong>Nome Responsavel 2:</strong> $nome_res_2</br>";
		echo "<strong>Telefone Responsavel 2:</strong> $tel_res_2</br>";
		echo "------------------</br>";
		// aqui comeca a verificar as funcoes
		include "VerifyPac.php";
		$error = array();
		$error = TestValidPatient($nome , $cpf , $data , $cep , $nome_res_1 , $tel_res_1 , $nome_res_2 , $tel_res_2);
		if($error == "Todos os campos estão válidos"){
			echo "<strong>TestInvalid:</strong> <font color = red>".$error."</font></br>";
		}else{
			foreach($error as $error){
				echo "<strong>TestInvalid:</strong> <font color = red>".$error."</font></br>";
			}
		}
		?>
		<a href="javascript:history.go(-1)">Voltar</a>
	</div>
</body>
</html>

