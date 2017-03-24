<?php
/******************************************************************************************************************************/
//funcionalidade: verificar cadastro de medico
//function TestInvalid($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel)
//
//
//
/******************************************************************************************************************************/
	include_once "funcoes.php";

	function TestInvalid($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel){
		$array = array();
		if (Overflow($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel)) {
			array_push($array,"Um campo possui muitos caracteres");
		}
		if(InBlank($admdata, $ag , $cc, $cpf , $cro , $data , $email , $nome  , $senha  , $tel)){
			array_push($array,"Preencha todos os campos");
		}
		if(InvalidName($nome)){
			array_push($array,"Nome Invalido");
		}
		if(InvalidData($data)){
			array_push($array,"Data Invalida");
		}
		if(InvalidEmail($email)){
			array_push($array, "Email Invalido");
		}
		if(InvalidPassword($senha)){
			array_push($array, "Senha Invalida");
		}
		if(InvalidCpf($cpf)){
			array_push($array, "CPF Invalido");
		}
		if(letra_na_str($cro) || carac_na_str($cro)){
			array_push($array, "CRO Invalido");
		}
		if(letra_na_str($tel) || carac_na_str($tel)){
			array_push($array, "Telefone Invalido");
		}
		if(letra_na_str($ag) || carac_na_str($ag)){
			array_push($array, "Agencia Invalida");
		}
		if(letra_na_str($cc) || carac_na_str($cc)){
			array_push($array, "Conta corrente Invalida");
		}
		if(InvalidAdmData($admdata)){
			array_push($array, "Data de adimissao Invalida");
		}
		if(empty($array)){
			return "Todos os campos estão válidos";//retorna tudo Ok caso todos os teste de validacao passem 
		}else{
			return $array;
		}

		
		
	}

?>

