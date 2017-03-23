<?php
/****************************************************************************************************/
//funcionalidade : verificar o cadastro de paciente
//TestValidPatient($nome , $cpf , $data , $cep , $nome_res_1 , $tel_res_1 , $nome_res_2 , $tel_res_2)
//
/****************************************************************************************************/
include_once "funcoes.php";

function TestValidPatient($nome , $cpf , $data , $cep , $nome_res_1 , $tel_res_1 , $nome_res_2 , $tel_res_2) {
	$array = array();
	if(InvalidName($nome)){
			array_push($array,"Nome Invalido");
		}
	if(InvalidCpf($cpf)){
			array_push($array, "CPF Invalido");
		}
	if(InvalidAdmData($data)){
			array_push($array, "Data de nascimento");
		}
	if(InvalidCEP($cep)){
			array_push($array, "CEP Invalido");
		}
	if(InvalidName($nome_res_1)){
			array_push($array,"Nome Invalido");
		}
	if(letra_na_str($tel_res_1) || carac_na_str($tel_res_1)){
			array_push($array, "Telefone Invalido");
		}
	if(InvalidName($nome_res_2)){
			array_push($array,"Nome Invalido");
		}
	if(letra_na_str($tel_res_2) || carac_na_str($tel_res_2)){
			array_push($array, "Telefone Invalido");
		}

	if(empty($array)){
			return "Todos os campos estão válidos";//retorna tudo Ok caso todos os teste de validacao passem 
		}else{
			return $array;
		}
}

?>

