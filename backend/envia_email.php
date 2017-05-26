<!DOCTYPE html>
<html>
<head>
	<title> Enviar email</title>
</head>
<body>
<?php


$para = $_POST['E_mail'];
var_dump($para);


mail($para, "Teste", "menssagem", "From: magdielcrisostomo@hotmail.com");

?>
</body>
</html>