<?php
require_once "redefinir_senha.php";

$senha = $_POST['senha_recebida'];
$red_senha = $_POST['re_senha'];
$conf_red_senha = $_POST['conf_re_senha'];


$ns_recebida = hash("sha256", $senha);
$nsred_senha = hash("sha256", $red_senha);

$conexao = mysqli_connect("localhost", "root", "", "odt_soft");

$sql_pass = "SELECT * FROM odt_soft.users WHERE password= '$ns_recebida' ";
$query_pass = mysqli_query($conexao, $sql_pass);
$cont_pass = mysqli_num_rows($query_pass);

if ($cont_pass !=0){
	if ($conf_red_senha == $red_senha){
	$sql_subst = "UPDATE odt_soft.users SET password= '$nsred_senha' WHERE password= '$ns_recebida' ";
	$query_subst = mysqli_query($conexao, $sql_subst);
	echo "<script>alert('senha alterada com sucesso!')</script>";
	}
	else{
		echo "<script>alert('as senhas sao incompativeis !');</script>";
	}
}else{
	echo "<script>alert('a senha informada e invalida !')</script>";
}
/*
var_dump($cont);
var_dump($senha);
var_dump($red_senha);
var_dump($conf_red_senha);*/

?>
