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
		$admdata = isset($_GET["lb_admdata"])?$_GET["lb_admdata"]:0;
		$nome = isset($_GET["lb_nome"])?$_GET["lb_nome"]:0; 
		$data = isset($_GET["lb_data"])?$_GET["lb_data"]:0;
		$email = isset($_GET["lb_email"])?$_GET["lb_email"]:0;
		$senha = isset($_GET["lb_senha"])?$_GET["lb_senha"]:0;
		$cpf = isset($_GET["lb_cpf"])?$_GET["lb_cpf"]:0; 
		$tel = isset($_GET["lb_tel"])?$_GET["lb_tel"]:0;
		$ag = isset($_GET["lb_ag"])?$_GET["lb_ag"]:0;
		$cc = isset($_GET["lb_cc"])?$_GET["lb_cc"]:0;
		$cro = isset($_GET["lb_cro"])?$_GET["lb_cro"]:0;
		echo "<strong>Nome:</strong> $nome</br>";
		echo "<strong>Data:</strong> $data</br>";
		echo "<strong>Email:</strong> $email</br>";
		echo "<strong>Senha:</strong> $senha</br>";
		echo "<strong>CPF:</strong> $cpf</br>";
		echo "<strong>Telefone:</strong> $tel</br>";
		echo "<strong>Ag:</strong> $ag</br>";
		echo "<strong>Cc:</strong> $cc</br>";
		echo "<strong>CRO:</strong> $cro</br>";
		echo "<strong>Data de Admissão:</strong> $admdata</br>";
		echo "------------------</br>";
		// aqui comeca a verificar as funcoes
		include "VerifyMed.php";
		$error = array();
		$error = TestInvalid($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel);
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
