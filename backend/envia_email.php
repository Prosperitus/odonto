<?php


$para = $_POST['E_mail'];
$emailDisparar = "contato@".$_SERVER['HTTP_HOST'];

$cabecalho = "MIME-Version : 1.1\r\n";
$cabecalho .= "Content-type: text/plain; charset=UTF-8\n";
$cabecalho .= "From: \n".$emailDisparar;
$cabecalho .= "Return-Path: \n".$emailDisparar;

mail($para, "Assunto", "Teste de Email", $cabecalho, "-r". $emailDisparar);
$envia = mail($para, "Assunto", "Teste de Email", $cabecalho, "-r".$emailDisparar);

print("Mensagem enviada com sucesso !");


/*if(!mail($para, "Assunto", "Teste de Email", $cabecalho ,"-r".$emailDisparar)){ // Se for Postfix
    $cabecalho .= "Return-Path: magdielcrisostomo@hotmail.com" . $emailDisparar .\n; // Se "não for Postfix"
    mail($para, "Assunto", "Teste de email", $cabecalho );
}*/


/*if($envia){
	echo "Email enviado com sucesso !";
}else{
	echo "Email nao enviado";
}*/

?>