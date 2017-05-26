<!DOCTYPE html>
<html>
<head>
	<title> Enviar email</title>
</head>
<body>
<?php


$para = $_POST['E_mail'];


mail($para, "Teste", "menssagem", "From: magdielcrisostomo@hotmail.com");

$envia = mail($para, "Teste", "menssagem", "From: magdielcrisostomo@hotmail.com");

if($envia){
	echo "Email enviado com sucesso !";
}else{
	echo "Email nao enviado";
}

?>
</body>
</html>