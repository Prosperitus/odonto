<!DOCTYPE html>
<html>
<head>
	<title>Resultado da entrada</title>
	<meta charset="">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body> 
	<div class="estilo_geral">
		<h1>Resultado</h1>
		<h3><?php
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
		echo "<label>nome :$nome</br></label>";
		echo "data : $data</br>";
		echo "email : $email</br>";
		echo "senha : $senha</br>";
		echo "cpf : $cpf</br>";
		echo "tel : $tel</br>";
		echo "ag : $ag</br>";
		echo "cc : $cc</br>";
		echo "cro : $cro</br>";
		echo "------------------</br>";
		// aqui comeca a verificar as funcoes
		include "funcoes.php";
		$error = TestInvalid($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel);
		echo "TestInvalid : <font color = red>$error</font></br>";
		?></h3>
		<a href="javascript:history.go(-1)">Voltar</a>
	</div>
</body>
</html>
