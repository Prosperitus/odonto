<!DOCTYPE html>
<html>
<head>
	<title> Enviar email</title>
</head>
<body>
<?php


$para = $_POST['E_mail'];
var_dump($para);

?>

<?php

mail($para, "Teste", "menssagem");

?>
</body>
</html>