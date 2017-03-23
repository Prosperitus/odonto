
<!DOCTYPE html>
<html>
<head>
	<title>Pagina Paciente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
	<div class = "divForm">
		<h1>Cadastro Paciente</h1>
		<form method="get" action="resultadopac.php" class="registro">
			<label> Nome:</label>
			<input type="text" class="form-control btn-red" name="lb_nome"></br>
			<label></br>CPF:</label>
			<input type="text" class="form-control btn-red" name="lb_cpf"></br>
			<label></br>Data:</label>
			<input type="text" class="form-control btn-red" name="lb_data"></br>
			<label></br>CEP:</label>
			<input type="text" class="form-control btn-red"  name="lb_senha"></br>
			<label></br>Nome Responsavel:</label>
			<input type="text" class="form-control btn-red" name="lb_nome_resp"></br>
			<label></br>Telefone Responsavel:</label>
			<input type="text" class="form-control btn-red" name="lb_tel_resp"></br>
			<label></br>Nome Responsavel 2:</label>
			<input type="text" class="form-control btn-red" name="lb_nome_2"></br>
			<label></br>Telefone Responsavel 2:</label>
			<input type="text" class="form-control btn-red" name="lb_tel_2"></br>
			
			<input class="btn btn-primary" type="submit" value = "Enviar">
		</form>
	</div>
</body>
</html>