<?php


$para = $_POST['E_mail'];
$emailDisparar = "contato@".$_SERVER['HTTP_HOST'];

$cabecalho = "MIME-Version : 1.1\r\n";
$cabecalho .= "Content-type: text/plain; charset=UTF-8\n";
$cabecalho .= "From: magdielcrisostomo@hotmail.com\n";
$cabecalho .= "Return-Path: magdielcrisostomo@hotmail.com\n";


$envia = mail($para, "Assunto", "Teste de Email", $cabecalho, "-r".$emailDisparar);


/*if(!mail($para, "Assunto", "Teste de Email", $cabecalho ,"-r".$emailDisparar)){ // Se for Postfix
    $cabecalho .= "Return-Path: magdielcrisostomo@hotmail.com" . $emailDisparar .\n; // Se "não for Postfix"
    mail($para, "Assunto", "Teste de email", $cabecalho );
}*/


if($envia){
	echo "Email enviado com sucesso !";
}else{
	echo "Email nao enviado";
}









?>
