<?php
	function TestInvalidHospital ($nome_hospital){
		if(InvalidName($nome_hospital)){
			array_push($array,"Nome do hospital invalido");
		}
		if(InvalidName($nome_chefe)){
			array_push($array,"Nome do chefe da uti invalido");
		}
		if(letra_na_str($tel_chefe) || carac_na_str($tel_chefe)){
			array_push($array, "Telefone Invalido");
		}
		if(letra_na_str($tel_hospital) || carac_na_str($tel_hospital)){
			array_push($array, "Telefone Invalido");
		}
		if(empty($array)){
			return "Cadastro efetuado com sucesso";//retorna tudo Ok caso todos os teste de validacao passem 
		}else{
			return $array;
		}
	}


?>
