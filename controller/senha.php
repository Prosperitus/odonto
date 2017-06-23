<?php
require_once "redefinir_senha.php";

$senha = $_POST['senha_recebida'];
$red_senha = $_POST['re_senha'];
$conf_red_senha = $_POST['conf_re_senha'];


$ns_recebida = md5(md5($senha));
$nsred_senha = md5(md5($red_senha));

//d7cc70
//601f1f685737b67af078e313df62fcbd
var_dump($senha);
var_dump($ns_recebida);
var_dump($red_senha);
var_dump($nsred_senha);


$conexao = mysqli_connect("localhost", "root", "", "odt_soft");

$sql_pass = "SELECT * FROM odt_soft.users WHERE password= '$ns_recebida' ";
$query_pass = mysqli_query($conexao, $sql_pass);
$cont_pass = mysqli_num_rows($query_pass);

if ($cont_pass !=0){
	if ($conf_red_senha == $red_senha){
	$sql_subst = "UPDATE odt_soft.users SET password= '$nsred_senha' WHERE password= '$ns_recebida' ";
	$query_subst = mysqli_query($conexao, $sql_subst);
	echo "senha alterada com sucesso!";
	}
	else{
		echo "as senhas sao incompativeis!";
	}
}else{
	echo "a senha informada e invalida!";
}
/*
var_dump($cont);
var_dump($senha);
var_dump($red_senha);
var_dump($conf_red_senha);*/

?>
