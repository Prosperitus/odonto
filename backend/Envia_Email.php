<?php

$quebra_linha = "\n";
$envia_email = "contato@".$_SERVER['HTTP_HOST'];
$destinatario = $_POST['E_mail'];
$assunto = "Email teste";
$mensagem = "Funciona";

$mensagemHTML = '<p> Teste de Email </p>
<p> Titulo </p>
<p><b><t>'.$mensagem.'</p></b></t>
<br>';

$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; chaset = iso-8859-1".$quebra_linha;
$headers .= "From: ".$envia_email.$quebra_linha;
$headers .= "Return-Path: ".$envia_email.$quebra_linha;

mail($destinatario, $assunto, $mensagemHTML, $headers, "-r". $envia_email);

print("Mensagem enviada!");

?>